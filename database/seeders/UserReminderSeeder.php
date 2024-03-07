<?php

namespace Database\Seeders;

use App\Models\RefReminder;
use App\Models\RefTimezone;
use App\Models\User;
use App\Models\UserReminder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserReminderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [];

        for ($i=0; $i < 20; $i++) {
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
            UserReminder::create([
                'user_id' => $user->id,
                'ref_reminder_id' => $refReminder->id,
                'timezone' => fake()->timezone(),
                'occur_date' => now()->subYear(19)
            ]);
        }
    }
}
