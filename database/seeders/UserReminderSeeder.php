<?php

namespace Database\Seeders;

use App\Models\RefReminder;
use App\Models\RefTimezone;
use App\Models\User;
use App\Models\UserReminder;
use App\Services\SendReminderService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserReminderSeeder extends Seeder
{
    private $totalSeed = 100;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [];
        $userReminderService = new SendReminderService();
        for ($i=0; $i < $this->totalSeed; $i++) {
            $users[] = [
                'first_name' => fake('id')->firstName(),
                'last_name' => fake('id')->lastName(),
                'email' => fake('id')->email(),
                'password' => Hash::make('password')
            ];
        }
        foreach ($users as $key => $user) {
            $user = User::updateOrCreate(
                ['email' => $user['email']],
                $user
            );
            $refReminder = RefReminder::where('ref_rmndr_type', 'birth-day')->firstOrFail();
            $listTz = $userReminderService->getListTz();
            $totalTz = count($listTz);
            UserReminder::create([
                'user_id' => $user->id,
                'ref_reminder_id' => $refReminder->id,
                'timezone' => $listTz[random_int(0, $totalTz - 1)], //fake()->timezone(),
                'occur_date' => now()->subYear(19)
            ]);
        }
    }
}
