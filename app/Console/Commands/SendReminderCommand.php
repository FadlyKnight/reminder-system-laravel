<?php

namespace App\Console\Commands;

use App\Services\SendReminderService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class SendReminderCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-reminder-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'trigger send reminder';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Log::info('START COMMAND');
        $sendReminderService =  new SendReminderService();
        $sendReminderService->handle();
        Log::info('END COMMAND');
    }
}
