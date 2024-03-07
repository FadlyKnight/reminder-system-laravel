<?php

namespace App\Console;

use App\Jobs\SendReminderMessageJob;
use App\Services\SendReminderService;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->job(new SendReminderMessageJob())->everyTenMinutes();
        // $schedule->call(function(){
        //     $sendReminderService = new SendReminderService;
        //     $sendReminderService->handle();
        // })->everyTenMinutes();
        $schedule->command('app:send-reminder-command')->everyTenMinutes();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
