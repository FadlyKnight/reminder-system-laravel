<?php

namespace App\Jobs;

use App\Models\UserReminder;
use App\Models\UserReminderTmp;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendReminderMessageJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $chunks_insert = 100;
    private $chunks_send_mail = 100;
    /**
     * Create a new job instance.
     */
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

        // check has reminders on this date
        if ($this->hasUserReminderCurrentDate()) {
            

        } else {
            // insert user reminder into temporary
            $this->setUserReminderToTemp();
        }
    }

    public function hasUserReminderCurrentDate(){
        return $this->getUserReminderCurrentDate()->exist();
    }

    public function getUserReminderCurrentDate(){
        return UserReminder::whereMonth('occur_date', now()->month)->whereDay('occur_date', now()->day);
    }

    public function setUserReminderToTemp(){
        $userReminders = $this->getUserReminderCurrentDate()->get()->map(function($data){
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
        $userReminderTmps->delete();
    }

}
