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

class SendReminderService {
    private $chunks_insert = 100;
    private $chunks_send_mail = 10;

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
        $this->removeUserReminderTmpPassDate();

        // remove success tmp
        $this->removeSuccessUserReminderTmp();

        // insert user reminder into temporary
        $this->setUserReminderToTemp();

        // check has reminders on this date
        if ($this->hasUserReminderCurrentDate()) {

            // TODO :
            $this->sendRemindersEmail();
        }
    }


    public function getListUserTmp(){
        return UserReminderTmp::where('status','!=',StatusTmp::SUCCESS)->with('userReminder','userReminder.user','userReminder.refReminder');
    }

    public function sendRemindersEmail(){
        $digiralService = new DigitalEnvisionService();

        $chunks = $this->getListUserTmp()->get()->chunk($this->chunks_send_mail);

        foreach ($chunks as $chunk) {
            foreach ($chunk as $key => $reminderTmp) {
                // $reminderTmp
                $userReminder = $reminderTmp->userReminder;
                $response = $digiralService->sendEmail([
                    'email' => $reminderTmp,
                    'message' => $this->getParseMessage($userReminder->user, $userReminder->refReminder),
                ]);
                if ($response->status() === 200) {
                    $reminderTmp->update([
                        'status' => StatusTmp::SUCCESS
                    ]);
                } else {
                    $reminderTmp->update([
                        'status' => StatusTmp::FAILED
                    ]);
                }
            }
        }
    }

    public function getParseMessage(User $user, RefReminder $refReminder){
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
            if ($curr->hour == 9 && $curr->minute <= 59) {
                $timezonesWithNineAM[] = $timezone;
            }
        }

        return $timezonesWithNineAM;
    }

    public function hasUserReminderCurrentDate(){
        return $this->getUserReminderCurrentDate()->first() != null;
    }

    public function getUserReminderCurrentDate(){
        return UserReminder::whereMonth('occur_date', now()->month)->whereDay('occur_date', now()->day);
    }

    public function setUserReminderToTemp(){
        $userReminders = $this->getUserReminderCurrentDate()
            ->whereIn('timezone', $this->getListTz())
            ->get()->map(function($data){
            return [
                'user_reminder_id' => $data->id,
                'created_at' => now(),
                'updated_at' => now()
            ];
        });
        $chunks = $userReminders->chunk($this->chunks_insert);

        foreach ($chunks as $chunk) {
            UserReminderTmp::insert($chunk);
        }
    }

    public function removeUserReminderTmpPassDate(){
        $userReminderTmps = UserReminderTmp::query();
        $userReminderTmps = $userReminderTmps->leftJoin('user_reminders', 'user_reminder_tmps.user_reminder_id', '=', 'user_reminders.id');
        $userReminderTmps = $userReminderTmps->whereMonth('user_reminders.occur_date', '<=', now()->month)->whereDay('user_reminders.occur_date','<',now()->day);
        // $userReminderTmps = $userReminderTmps->where('user_reminder_tmps.status', StatusTmp::SUCCESS );
        $userReminderTmps->delete();
    }

    public function removeSuccessUserReminderTmp(){
        $userReminderTmps = UserReminderTmp::query();
        $userReminderTmps = $userReminderTmps->where('user_reminder_tmps.status', StatusTmp::SUCCESS );
        $userReminderTmps->delete();
    }

}
