<?php

namespace Database\Seeders;

use App\Models\RefReminder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // seed reminders
        RefReminder::insert([
            [
                'ref_rmndr_name' => 'Birth Day',
                'ref_rmndr_type' => 'birth-day',
                'ref_rmndr_message' => 'Hey, {full_name} it\'s your birthday',
            ],
            [
                'ref_rmndr_name' => 'Anniversary',
                'ref_rmndr_type' => 'anniv-day',
                'ref_rmndr_message' => 'Hey, {full_name} it\'s your Annive with your wife / husband, Congrass',
            ]
        ]);

    }
}
