<?php

namespace App\Services;

use App\Models\RefReminder;
use App\Models\User;
use App\Models\UserReminder;
use App\Models\UserReminderTmp;
use App\Services\DigitalEnvisionService;
use Carbon\Carbon;
use DateTimeZone;
use App\Enums\StatusTmp;
use Illuminate\Support\Facades\Log;

class SendReminderService {
    private $chunks_insert = 100;
    private $chunks_send_mail = 10;

    // get region / tz that around 09:00 - 09:59
    private $hour = 9;
    private $minute = 59;

    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // remove temporary user reminders passed date
        Log::info("START : remove all reminder tmp pass date");
        $this->removeUserReminderTmpPassDate();

        // insert user reminder into temporary
        Log::info("START : prepare user reminder");
        $this->setUserReminderToTemp();

        // check has reminders on this date
        if ($this->hasUserReminderCurrentDate()) {

            // TODO :
            Log::info("START : do send email");
            $this->sendRemindersEmail();
        }
    }


    private function getListUserTmp(){
        return UserReminderTmp::where('status','!=',StatusTmp::SUCCESS)->with('userReminder','userReminder.user','userReminder.refReminder');
    }

    private function sendRemindersEmail(){
        $digiralService = new DigitalEnvisionService();

        $listUserTmp = $this->getListUserTmp()->get();
        Log::info('TOTAL LIST EMAIL NEED TO SEND : '. count($listUserTmp) );
        $chunks = $listUserTmp->chunk($this->chunks_send_mail);

        foreach ($chunks as $chunk) {
            foreach ($chunk as $key => $reminderTmp) {
                // $reminderTmp
                $userReminder = $reminderTmp->userReminder;
                $payload = [
                    'email' => $userReminder->user->email,
                    'message' => $this->getParseMessage($userReminder->user, $userReminder->refReminder),
                ];
                Log::info('payload email : ', [ 'payload' => $payload, 'reminderTmp' => $reminderTmp ]);
                try {
                    $response = $digiralService->sendEmail($payload);
                    if ($response->status() === 200) {
                        $reminderTmp->update([
                            'status' => StatusTmp::SUCCESS
                        ]);
                    } else {
                        $reminderTmp->update([
                            'status' => StatusTmp::FAILED
                        ]);
                        Log::error('ERROR : Send email '.$response->body());
                    }
                } catch (\Exception $th) {
                    $reminderTmp->update([ 'status' => StatusTmp::FAILED ]);
                    Log::error('ERROR : Send email '.$th->getMessage());
                }
            }
        }
    }

    private function getParseMessage(User $user, RefReminder $refReminder){
        return preg_replace('/\{full_name\}/', $user->full_name, $refReminder->ref_rmndr_message);
    }

    public function getListTz(){
        // get list all tz
        $timezones = DateTimeZone::listIdentifiers();

        // save list tz where current time is 09:00
        $timezonesWithNineAM = [];
        // array_shift($tz);
        foreach ($timezones as $timezone) {
            // Set zona waktu
            $currentTime = Carbon::now();
            $curr = $currentTime->setTimezone($timezone);
            if ($curr->hour == $this->hour && $curr->minute <= $this->minute) {
                $timezonesWithNineAM[] = $timezone;
            }
        }

        return $timezonesWithNineAM;
    }

    private function hasUserReminderCurrentDate(){
        return $this->getUserReminderCurrentDate()->first() != null;
    }

    private function getUserReminderCurrentDate(){
        // make sure no duplicate user
        $userReminderTmps = UserReminderTmp::get();
        return UserReminder::whereMonth('occur_date', now()->month)->whereDay('occur_date', now()->day)
            ->whereNotIn('id', $userReminderTmps->pluck('user_reminder_id')->toArray());
    }

    private function setUserReminderToTemp(){
        $userReminders = $this->getUserReminderCurrentDate()
            ->whereIn('user_reminders.timezone', $this->getListTz())
            ->get()->map(function($data){
            return [
                'user_reminder_id' => $data->id,
                'created_at' => now(),
                'updated_at' => now()
            ];
        });
        Log::info('TOTAL INSERT TO REMINDER TEMP : '. count($userReminders) );
        $chunks = $userReminders->chunk($this->chunks_insert);
        foreach ($chunks as $chunk) {
            UserReminderTmp::insert($chunk->toArray());
        }
    }

    private function removeUserReminderTmpPassDate(){
        $userReminderTmps = UserReminderTmp::query();
        $userReminderTmps = $userReminderTmps->leftJoin('user_reminders', 'user_reminder_tmps.user_reminder_id', '=', 'user_reminders.id');
        $userReminderTmps = $userReminderTmps->whereMonth('user_reminders.occur_date', '<=', now()->month)->whereDay('user_reminders.occur_date','<',now()->day);
        // $userReminderTmps = $userReminderTmps->where('user_reminder_tmps.status', StatusTmp::SUCCESS );
        $userReminderTmps->delete();
    }

    private function removeSuccessUserReminderTmp(){
        $userReminderTmps = UserReminderTmp::query();
        $userReminderTmps = $userReminderTmps->where('status', StatusTmp::SUCCESS );
        $userReminderTmps->delete();
    }

}
