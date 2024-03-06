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

        // seed timezone
        DB::table('ref_timezones')->insert(
            array (
                0 =>
                array (
                    'id' => 1,
                'ref_tz_label' => '(GMT-11:00) Pacific/Midway',
                    'ref_tz_value' => 'Pacific/Midway',
                'ref_tz_offset' => '(GMT-11:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                1 =>
                array (
                    'id' => 2,
                'ref_tz_label' => '(GMT-11:00) Pacific/Niue',
                    'ref_tz_value' => 'Pacific/Niue',
                'ref_tz_offset' => '(GMT-11:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                2 =>
                array (
                    'id' => 3,
                'ref_tz_label' => '(GMT-11:00) Pacific/Pago_Pago',
                    'ref_tz_value' => 'Pacific/Pago_Pago',
                'ref_tz_offset' => '(GMT-11:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                3 =>
                array (
                    'id' => 4,
                'ref_tz_label' => '(GMT-10:00) Pacific/Honolulu',
                    'ref_tz_value' => 'Pacific/Honolulu',
                'ref_tz_offset' => '(GMT-10:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                4 =>
                array (
                    'id' => 5,
                'ref_tz_label' => '(GMT-10:00) Pacific/Johnston',
                    'ref_tz_value' => 'Pacific/Johnston',
                'ref_tz_offset' => '(GMT-10:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                5 =>
                array (
                    'id' => 6,
                'ref_tz_label' => '(GMT-10:00) Pacific/Rarotonga',
                    'ref_tz_value' => 'Pacific/Rarotonga',
                'ref_tz_offset' => '(GMT-10:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                6 =>
                array (
                    'id' => 7,
                'ref_tz_label' => '(GMT-10:00) Pacific/Tahiti',
                    'ref_tz_value' => 'Pacific/Tahiti',
                'ref_tz_offset' => '(GMT-10:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                7 =>
                array (
                    'id' => 8,
                'ref_tz_label' => '(GMT-09:30) Pacific/Marquesas',
                    'ref_tz_value' => 'Pacific/Marquesas',
                'ref_tz_offset' => '(GMT-09:30)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                8 =>
                array (
                    'id' => 9,
                'ref_tz_label' => '(GMT-09:00) America/Adak',
                    'ref_tz_value' => 'America/Adak',
                'ref_tz_offset' => '(GMT-09:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                9 =>
                array (
                    'id' => 10,
                'ref_tz_label' => '(GMT-09:00) Pacific/Gambier',
                    'ref_tz_value' => 'Pacific/Gambier',
                'ref_tz_offset' => '(GMT-09:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                10 =>
                array (
                    'id' => 11,
                'ref_tz_label' => '(GMT-08:00) America/Anchorage',
                    'ref_tz_value' => 'America/Anchorage',
                'ref_tz_offset' => '(GMT-08:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                11 =>
                array (
                    'id' => 12,
                'ref_tz_label' => '(GMT-08:00) America/Juneau',
                    'ref_tz_value' => 'America/Juneau',
                'ref_tz_offset' => '(GMT-08:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                12 =>
                array (
                    'id' => 13,
                'ref_tz_label' => '(GMT-08:00) America/Nome',
                    'ref_tz_value' => 'America/Nome',
                'ref_tz_offset' => '(GMT-08:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                13 =>
                array (
                    'id' => 14,
                'ref_tz_label' => '(GMT-08:00) America/Yakutat',
                    'ref_tz_value' => 'America/Yakutat',
                'ref_tz_offset' => '(GMT-08:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                14 =>
                array (
                    'id' => 15,
                'ref_tz_label' => '(GMT-08:00) Pacific/Pitcairn',
                    'ref_tz_value' => 'Pacific/Pitcairn',
                'ref_tz_offset' => '(GMT-08:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                15 =>
                array (
                    'id' => 16,
                'ref_tz_label' => '(GMT-07:00) America/Chihuahua',
                    'ref_tz_value' => 'America/Chihuahua',
                'ref_tz_offset' => '(GMT-07:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                16 =>
                array (
                    'id' => 17,
                'ref_tz_label' => '(GMT-07:00) America/Dawson',
                    'ref_tz_value' => 'America/Dawson',
                'ref_tz_offset' => '(GMT-07:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                17 =>
                array (
                    'id' => 18,
                'ref_tz_label' => '(GMT-07:00) America/Dawson_Creek',
                    'ref_tz_value' => 'America/Dawson_Creek',
                'ref_tz_offset' => '(GMT-07:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                18 =>
                array (
                    'id' => 19,
                'ref_tz_label' => '(GMT-07:00) America/Hermosillo',
                    'ref_tz_value' => 'America/Hermosillo',
                'ref_tz_offset' => '(GMT-07:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                19 =>
                array (
                    'id' => 20,
                'ref_tz_label' => '(GMT-07:00) America/Los_Angeles',
                    'ref_tz_value' => 'America/Los_Angeles',
                'ref_tz_offset' => '(GMT-07:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                20 =>
                array (
                    'id' => 21,
                'ref_tz_label' => '(GMT-07:00) America/Mazatlan',
                    'ref_tz_value' => 'America/Mazatlan',
                'ref_tz_offset' => '(GMT-07:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                21 =>
                array (
                    'id' => 22,
                'ref_tz_label' => '(GMT-07:00) America/Phoenix',
                    'ref_tz_value' => 'America/Phoenix',
                'ref_tz_offset' => '(GMT-07:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                22 =>
                array (
                    'id' => 23,
                'ref_tz_label' => '(GMT-07:00) America/Tijuana',
                    'ref_tz_value' => 'America/Tijuana',
                'ref_tz_offset' => '(GMT-07:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                23 =>
                array (
                    'id' => 24,
                'ref_tz_label' => '(GMT-07:00) America/Vancouver',
                    'ref_tz_value' => 'America/Vancouver',
                'ref_tz_offset' => '(GMT-07:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                24 =>
                array (
                    'id' => 25,
                'ref_tz_label' => '(GMT-07:00) America/Whitehorse',
                    'ref_tz_value' => 'America/Whitehorse',
                'ref_tz_offset' => '(GMT-07:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                25 =>
                array (
                    'id' => 26,
                'ref_tz_label' => '(GMT-06:00) America/Belize',
                    'ref_tz_value' => 'America/Belize',
                'ref_tz_offset' => '(GMT-06:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                26 =>
                array (
                    'id' => 27,
                'ref_tz_label' => '(GMT-06:00) America/Boise',
                    'ref_tz_value' => 'America/Boise',
                'ref_tz_offset' => '(GMT-06:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                27 =>
                array (
                    'id' => 28,
                'ref_tz_label' => '(GMT-06:00) America/Cambridge_Bay',
                    'ref_tz_value' => 'America/Cambridge_Bay',
                'ref_tz_offset' => '(GMT-06:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                28 =>
                array (
                    'id' => 29,
                'ref_tz_label' => '(GMT-06:00) America/Costa_Rica',
                    'ref_tz_value' => 'America/Costa_Rica',
                'ref_tz_offset' => '(GMT-06:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                29 =>
                array (
                    'id' => 30,
                'ref_tz_label' => '(GMT-06:00) America/Denver',
                    'ref_tz_value' => 'America/Denver',
                'ref_tz_offset' => '(GMT-06:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                30 =>
                array (
                    'id' => 31,
                'ref_tz_label' => '(GMT-06:00) America/Edmonton',
                    'ref_tz_value' => 'America/Edmonton',
                'ref_tz_offset' => '(GMT-06:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                31 =>
                array (
                    'id' => 32,
                'ref_tz_label' => '(GMT-06:00) America/El_Salvador',
                    'ref_tz_value' => 'America/El_Salvador',
                'ref_tz_offset' => '(GMT-06:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                32 =>
                array (
                    'id' => 33,
                'ref_tz_label' => '(GMT-06:00) America/Guatemala',
                    'ref_tz_value' => 'America/Guatemala',
                'ref_tz_offset' => '(GMT-06:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                33 =>
                array (
                    'id' => 34,
                'ref_tz_label' => '(GMT-06:00) America/Inuvik',
                    'ref_tz_value' => 'America/Inuvik',
                'ref_tz_offset' => '(GMT-06:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                34 =>
                array (
                    'id' => 35,
                'ref_tz_label' => '(GMT-06:00) America/Managua',
                    'ref_tz_value' => 'America/Managua',
                'ref_tz_offset' => '(GMT-06:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                35 =>
                array (
                    'id' => 36,
                'ref_tz_label' => '(GMT-06:00) America/Merida',
                    'ref_tz_value' => 'America/Merida',
                'ref_tz_offset' => '(GMT-06:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                36 =>
                array (
                    'id' => 37,
                'ref_tz_label' => '(GMT-06:00) America/Mexico_City',
                    'ref_tz_value' => 'America/Mexico_City',
                'ref_tz_offset' => '(GMT-06:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                37 =>
                array (
                    'id' => 38,
                'ref_tz_label' => '(GMT-06:00) America/Monterrey',
                    'ref_tz_value' => 'America/Monterrey',
                'ref_tz_offset' => '(GMT-06:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                38 =>
                array (
                    'id' => 39,
                'ref_tz_label' => '(GMT-06:00) America/Regina',
                    'ref_tz_value' => 'America/Regina',
                'ref_tz_offset' => '(GMT-06:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                39 =>
                array (
                    'id' => 40,
                'ref_tz_label' => '(GMT-06:00) America/Shiprock',
                    'ref_tz_value' => 'America/Shiprock',
                'ref_tz_offset' => '(GMT-06:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                40 =>
                array (
                    'id' => 41,
                'ref_tz_label' => '(GMT-06:00) America/Swift_Current',
                    'ref_tz_value' => 'America/Swift_Current',
                'ref_tz_offset' => '(GMT-06:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                41 =>
                array (
                    'id' => 42,
                'ref_tz_label' => '(GMT-06:00) America/Tegucigalpa',
                    'ref_tz_value' => 'America/Tegucigalpa',
                'ref_tz_offset' => '(GMT-06:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                42 =>
                array (
                    'id' => 43,
                'ref_tz_label' => '(GMT-06:00) America/Yellowknife',
                    'ref_tz_value' => 'America/Yellowknife',
                'ref_tz_offset' => '(GMT-06:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                43 =>
                array (
                    'id' => 44,
                'ref_tz_label' => '(GMT-06:00) Pacific/Galapagos',
                    'ref_tz_value' => 'Pacific/Galapagos',
                'ref_tz_offset' => '(GMT-06:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                44 =>
                array (
                    'id' => 45,
                'ref_tz_label' => '(GMT-05:00) America/Bogota',
                    'ref_tz_value' => 'America/Bogota',
                'ref_tz_offset' => '(GMT-05:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                45 =>
                array (
                    'id' => 46,
                'ref_tz_label' => '(GMT-05:00) America/Cancun',
                    'ref_tz_value' => 'America/Cancun',
                'ref_tz_offset' => '(GMT-05:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                46 =>
                array (
                    'id' => 47,
                'ref_tz_label' => '(GMT-05:00) America/Cayman',
                    'ref_tz_value' => 'America/Cayman',
                'ref_tz_offset' => '(GMT-05:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                47 =>
                array (
                    'id' => 48,
                'ref_tz_label' => '(GMT-05:00) America/Chicago',
                    'ref_tz_value' => 'America/Chicago',
                'ref_tz_offset' => '(GMT-05:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                48 =>
                array (
                    'id' => 49,
                'ref_tz_label' => '(GMT-05:00) America/Coral_Harbour',
                    'ref_tz_value' => 'America/Coral_Harbour',
                'ref_tz_offset' => '(GMT-05:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                49 =>
                array (
                    'id' => 50,
                'ref_tz_label' => '(GMT-05:00) America/Eirunepe',
                    'ref_tz_value' => 'America/Eirunepe',
                'ref_tz_offset' => '(GMT-05:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                50 =>
                array (
                    'id' => 51,
                'ref_tz_label' => '(GMT-05:00) America/Guayaquil',
                    'ref_tz_value' => 'America/Guayaquil',
                'ref_tz_offset' => '(GMT-05:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                51 =>
                array (
                    'id' => 52,
                'ref_tz_label' => '(GMT-05:00) America/Indiana/Knox',
                    'ref_tz_value' => 'America/Indiana/Knox',
                'ref_tz_offset' => '(GMT-05:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                52 =>
                array (
                    'id' => 53,
                'ref_tz_label' => '(GMT-05:00) America/Indiana/Tell_City',
                    'ref_tz_value' => 'America/Indiana/Tell_City',
                'ref_tz_offset' => '(GMT-05:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                53 =>
                array (
                    'id' => 54,
                'ref_tz_label' => '(GMT-05:00) America/Jamaica',
                    'ref_tz_value' => 'America/Jamaica',
                'ref_tz_offset' => '(GMT-05:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                54 =>
                array (
                    'id' => 55,
                'ref_tz_label' => '(GMT-05:00) America/Lima',
                    'ref_tz_value' => 'America/Lima',
                'ref_tz_offset' => '(GMT-05:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                55 =>
                array (
                    'id' => 56,
                'ref_tz_label' => '(GMT-05:00) America/Menominee',
                    'ref_tz_value' => 'America/Menominee',
                'ref_tz_offset' => '(GMT-05:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                56 =>
                array (
                    'id' => 57,
                'ref_tz_label' => '(GMT-05:00) America/North_Dakota/Center',
                    'ref_tz_value' => 'America/North_Dakota/Center',
                'ref_tz_offset' => '(GMT-05:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                57 =>
                array (
                    'id' => 58,
                'ref_tz_label' => '(GMT-05:00) America/North_Dakota/New_Salem',
                    'ref_tz_value' => 'America/North_Dakota/New_Salem',
                'ref_tz_offset' => '(GMT-05:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                58 =>
                array (
                    'id' => 59,
                'ref_tz_label' => '(GMT-05:00) America/Panama',
                    'ref_tz_value' => 'America/Panama',
                'ref_tz_offset' => '(GMT-05:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                59 =>
                array (
                    'id' => 60,
                'ref_tz_label' => '(GMT-05:00) America/Port-au-Prince',
                    'ref_tz_value' => 'America/Port-au-Prince',
                'ref_tz_offset' => '(GMT-05:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                60 =>
                array (
                    'id' => 61,
                'ref_tz_label' => '(GMT-05:00) America/Rainy_River',
                    'ref_tz_value' => 'America/Rainy_River',
                'ref_tz_offset' => '(GMT-05:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                61 =>
                array (
                    'id' => 62,
                'ref_tz_label' => '(GMT-05:00) America/Rankin_Inlet',
                    'ref_tz_value' => 'America/Rankin_Inlet',
                'ref_tz_offset' => '(GMT-05:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                62 =>
                array (
                    'id' => 63,
                'ref_tz_label' => '(GMT-05:00) America/Resolute',
                    'ref_tz_value' => 'America/Resolute',
                'ref_tz_offset' => '(GMT-05:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                63 =>
                array (
                    'id' => 64,
                'ref_tz_label' => '(GMT-05:00) America/Rio_Branco',
                    'ref_tz_value' => 'America/Rio_Branco',
                'ref_tz_offset' => '(GMT-05:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                64 =>
                array (
                    'id' => 65,
                'ref_tz_label' => '(GMT-05:00) America/Winnipeg',
                    'ref_tz_value' => 'America/Winnipeg',
                'ref_tz_offset' => '(GMT-05:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                65 =>
                array (
                    'id' => 66,
                'ref_tz_label' => '(GMT-05:00) Pacific/Easter',
                    'ref_tz_value' => 'Pacific/Easter',
                'ref_tz_offset' => '(GMT-05:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                66 =>
                array (
                    'id' => 67,
                'ref_tz_label' => '(GMT-04:00) America/Anguilla',
                    'ref_tz_value' => 'America/Anguilla',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                67 =>
                array (
                    'id' => 68,
                'ref_tz_label' => '(GMT-04:00) America/Antigua',
                    'ref_tz_value' => 'America/Antigua',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                68 =>
                array (
                    'id' => 69,
                'ref_tz_label' => '(GMT-04:00) America/Aruba',
                    'ref_tz_value' => 'America/Aruba',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                69 =>
                array (
                    'id' => 70,
                'ref_tz_label' => '(GMT-04:00) America/Barbados',
                    'ref_tz_value' => 'America/Barbados',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                70 =>
                array (
                    'id' => 71,
                'ref_tz_label' => '(GMT-04:00) America/Blanc-Sablon',
                    'ref_tz_value' => 'America/Blanc-Sablon',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                71 =>
                array (
                    'id' => 72,
                'ref_tz_label' => '(GMT-04:00) America/Boa_Vista',
                    'ref_tz_value' => 'America/Boa_Vista',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                72 =>
                array (
                    'id' => 73,
                'ref_tz_label' => '(GMT-04:00) America/Campo_Grande',
                    'ref_tz_value' => 'America/Campo_Grande',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                73 =>
                array (
                    'id' => 74,
                'ref_tz_label' => '(GMT-04:00) America/Caracas',
                    'ref_tz_value' => 'America/Caracas',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                74 =>
                array (
                    'id' => 75,
                'ref_tz_label' => '(GMT-04:00) America/Cuiaba',
                    'ref_tz_value' => 'America/Cuiaba',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                75 =>
                array (
                    'id' => 76,
                'ref_tz_label' => '(GMT-04:00) America/Curacao',
                    'ref_tz_value' => 'America/Curacao',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                76 =>
                array (
                    'id' => 77,
                'ref_tz_label' => '(GMT-04:00) America/Detroit',
                    'ref_tz_value' => 'America/Detroit',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                77 =>
                array (
                    'id' => 78,
                'ref_tz_label' => '(GMT-04:00) America/Dominica',
                    'ref_tz_value' => 'America/Dominica',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                78 =>
                array (
                    'id' => 79,
                'ref_tz_label' => '(GMT-04:00) America/Grand_Turk',
                    'ref_tz_value' => 'America/Grand_Turk',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                79 =>
                array (
                    'id' => 80,
                'ref_tz_label' => '(GMT-04:00) America/Grenada',
                    'ref_tz_value' => 'America/Grenada',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                80 =>
                array (
                    'id' => 81,
                'ref_tz_label' => '(GMT-04:00) America/Guadeloupe',
                    'ref_tz_value' => 'America/Guadeloupe',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                81 =>
                array (
                    'id' => 82,
                'ref_tz_label' => '(GMT-04:00) America/Guyana',
                    'ref_tz_value' => 'America/Guyana',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                82 =>
                array (
                    'id' => 83,
                'ref_tz_label' => '(GMT-04:00) America/Havana',
                    'ref_tz_value' => 'America/Havana',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                83 =>
                array (
                    'id' => 84,
                'ref_tz_label' => '(GMT-04:00) America/Indiana/Marengo',
                    'ref_tz_value' => 'America/Indiana/Marengo',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                84 =>
                array (
                    'id' => 85,
                'ref_tz_label' => '(GMT-04:00) America/Indiana/Petersburg',
                    'ref_tz_value' => 'America/Indiana/Petersburg',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                85 =>
                array (
                    'id' => 86,
                'ref_tz_label' => '(GMT-04:00) America/Indiana/Vevay',
                    'ref_tz_value' => 'America/Indiana/Vevay',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                86 =>
                array (
                    'id' => 87,
                'ref_tz_label' => '(GMT-04:00) America/Indiana/Vincennes',
                    'ref_tz_value' => 'America/Indiana/Vincennes',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                87 =>
                array (
                    'id' => 88,
                'ref_tz_label' => '(GMT-04:00) America/Indiana/Winamac',
                    'ref_tz_value' => 'America/Indiana/Winamac',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                88 =>
                array (
                    'id' => 89,
                'ref_tz_label' => '(GMT-04:00) America/Indianapolis',
                    'ref_tz_value' => 'America/Indianapolis',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                89 =>
                array (
                    'id' => 90,
                'ref_tz_label' => '(GMT-04:00) America/Iqaluit',
                    'ref_tz_value' => 'America/Iqaluit',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                90 =>
                array (
                    'id' => 91,
                'ref_tz_label' => '(GMT-04:00) America/Kentucky/Monticello',
                    'ref_tz_value' => 'America/Kentucky/Monticello',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                91 =>
                array (
                    'id' => 92,
                'ref_tz_label' => '(GMT-04:00) America/La_Paz',
                    'ref_tz_value' => 'America/La_Paz',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                92 =>
                array (
                    'id' => 93,
                'ref_tz_label' => '(GMT-04:00) America/Louisville',
                    'ref_tz_value' => 'America/Louisville',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                93 =>
                array (
                    'id' => 94,
                'ref_tz_label' => '(GMT-04:00) America/Manaus',
                    'ref_tz_value' => 'America/Manaus',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                94 =>
                array (
                    'id' => 95,
                'ref_tz_label' => '(GMT-04:00) America/Marigot',
                    'ref_tz_value' => 'America/Marigot',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                95 =>
                array (
                    'id' => 96,
                'ref_tz_label' => '(GMT-04:00) America/Martinique',
                    'ref_tz_value' => 'America/Martinique',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                96 =>
                array (
                    'id' => 97,
                'ref_tz_label' => '(GMT-04:00) America/Montreal',
                    'ref_tz_value' => 'America/Montreal',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                97 =>
                array (
                    'id' => 98,
                'ref_tz_label' => '(GMT-04:00) America/Montserrat',
                    'ref_tz_value' => 'America/Montserrat',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                98 =>
                array (
                    'id' => 99,
                'ref_tz_label' => '(GMT-04:00) America/Nassau',
                    'ref_tz_value' => 'America/Nassau',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                99 =>
                array (
                    'id' => 100,
                'ref_tz_label' => '(GMT-04:00) America/New_York',
                    'ref_tz_value' => 'America/New_York',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                100 =>
                array (
                    'id' => 101,
                'ref_tz_label' => '(GMT-04:00) America/Nipigon',
                    'ref_tz_value' => 'America/Nipigon',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                101 =>
                array (
                    'id' => 102,
                'ref_tz_label' => '(GMT-04:00) America/Pangnirtung',
                    'ref_tz_value' => 'America/Pangnirtung',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                102 =>
                array (
                    'id' => 103,
                'ref_tz_label' => '(GMT-04:00) America/Port_of_Spain',
                    'ref_tz_value' => 'America/Port_of_Spain',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                103 =>
                array (
                    'id' => 104,
                'ref_tz_label' => '(GMT-04:00) America/Porto_Velho',
                    'ref_tz_value' => 'America/Porto_Velho',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                104 =>
                array (
                    'id' => 105,
                'ref_tz_label' => '(GMT-04:00) America/Puerto_Rico',
                    'ref_tz_value' => 'America/Puerto_Rico',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                105 =>
                array (
                    'id' => 106,
                'ref_tz_label' => '(GMT-04:00) America/Santo_Domingo',
                    'ref_tz_value' => 'America/Santo_Domingo',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                106 =>
                array (
                    'id' => 107,
                'ref_tz_label' => '(GMT-04:00) America/St_Barthelemy',
                    'ref_tz_value' => 'America/St_Barthelemy',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                107 =>
                array (
                    'id' => 108,
                'ref_tz_label' => '(GMT-04:00) America/St_Kitts',
                    'ref_tz_value' => 'America/St_Kitts',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                108 =>
                array (
                    'id' => 109,
                'ref_tz_label' => '(GMT-04:00) America/St_Lucia',
                    'ref_tz_value' => 'America/St_Lucia',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                109 =>
                array (
                    'id' => 110,
                'ref_tz_label' => '(GMT-04:00) America/St_Thomas',
                    'ref_tz_value' => 'America/St_Thomas',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                110 =>
                array (
                    'id' => 111,
                'ref_tz_label' => '(GMT-04:00) America/St_Vincent',
                    'ref_tz_value' => 'America/St_Vincent',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                111 =>
                array (
                    'id' => 112,
                'ref_tz_label' => '(GMT-04:00) America/Thunder_Bay',
                    'ref_tz_value' => 'America/Thunder_Bay',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                112 =>
                array (
                    'id' => 113,
                'ref_tz_label' => '(GMT-04:00) America/Toronto',
                    'ref_tz_value' => 'America/Toronto',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                113 =>
                array (
                    'id' => 114,
                'ref_tz_label' => '(GMT-04:00) America/Tortola',
                    'ref_tz_value' => 'America/Tortola',
                'ref_tz_offset' => '(GMT-04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                114 =>
                array (
                    'id' => 115,
                'ref_tz_label' => '(GMT-03:00) America/Araguaina',
                    'ref_tz_value' => 'America/Araguaina',
                'ref_tz_offset' => '(GMT-03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                115 =>
                array (
                    'id' => 116,
                'ref_tz_label' => '(GMT-03:00) America/Argentina/La_Rioja',
                    'ref_tz_value' => 'America/Argentina/La_Rioja',
                'ref_tz_offset' => '(GMT-03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                116 =>
                array (
                    'id' => 117,
                'ref_tz_label' => '(GMT-03:00) America/Argentina/Rio_Gallegos',
                    'ref_tz_value' => 'America/Argentina/Rio_Gallegos',
                'ref_tz_offset' => '(GMT-03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                117 =>
                array (
                    'id' => 118,
                'ref_tz_label' => '(GMT-03:00) America/Argentina/Salta',
                    'ref_tz_value' => 'America/Argentina/Salta',
                'ref_tz_offset' => '(GMT-03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                118 =>
                array (
                    'id' => 119,
                'ref_tz_label' => '(GMT-03:00) America/Argentina/San_Juan',
                    'ref_tz_value' => 'America/Argentina/San_Juan',
                'ref_tz_offset' => '(GMT-03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                119 =>
                array (
                    'id' => 120,
                'ref_tz_label' => '(GMT-03:00) America/Argentina/San_Luis',
                    'ref_tz_value' => 'America/Argentina/San_Luis',
                'ref_tz_offset' => '(GMT-03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                120 =>
                array (
                    'id' => 121,
                'ref_tz_label' => '(GMT-03:00) America/Argentina/Tucuman',
                    'ref_tz_value' => 'America/Argentina/Tucuman',
                'ref_tz_offset' => '(GMT-03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                121 =>
                array (
                    'id' => 122,
                'ref_tz_label' => '(GMT-03:00) America/Argentina/Ushuaia',
                    'ref_tz_value' => 'America/Argentina/Ushuaia',
                'ref_tz_offset' => '(GMT-03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                122 =>
                array (
                    'id' => 123,
                'ref_tz_label' => '(GMT-03:00) America/Asuncion',
                    'ref_tz_value' => 'America/Asuncion',
                'ref_tz_offset' => '(GMT-03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                123 =>
                array (
                    'id' => 124,
                'ref_tz_label' => '(GMT-03:00) America/Bahia',
                    'ref_tz_value' => 'America/Bahia',
                'ref_tz_offset' => '(GMT-03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                124 =>
                array (
                    'id' => 125,
                'ref_tz_label' => '(GMT-03:00) America/Belem',
                    'ref_tz_value' => 'America/Belem',
                'ref_tz_offset' => '(GMT-03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                125 =>
                array (
                    'id' => 126,
                'ref_tz_label' => '(GMT-03:00) America/Buenos_Aires',
                    'ref_tz_value' => 'America/Buenos_Aires',
                'ref_tz_offset' => '(GMT-03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                126 =>
                array (
                    'id' => 127,
                'ref_tz_label' => '(GMT-03:00) America/Catamarca',
                    'ref_tz_value' => 'America/Catamarca',
                'ref_tz_offset' => '(GMT-03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                127 =>
                array (
                    'id' => 128,
                'ref_tz_label' => '(GMT-03:00) America/Cayenne',
                    'ref_tz_value' => 'America/Cayenne',
                'ref_tz_offset' => '(GMT-03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                128 =>
                array (
                    'id' => 129,
                'ref_tz_label' => '(GMT-03:00) America/Cordoba',
                    'ref_tz_value' => 'America/Cordoba',
                'ref_tz_offset' => '(GMT-03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                129 =>
                array (
                    'id' => 130,
                'ref_tz_label' => '(GMT-03:00) America/Fortaleza',
                    'ref_tz_value' => 'America/Fortaleza',
                'ref_tz_offset' => '(GMT-03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                130 =>
                array (
                    'id' => 131,
                'ref_tz_label' => '(GMT-03:00) America/Glace_Bay',
                    'ref_tz_value' => 'America/Glace_Bay',
                'ref_tz_offset' => '(GMT-03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                131 =>
                array (
                    'id' => 132,
                'ref_tz_label' => '(GMT-03:00) America/Godthab',
                    'ref_tz_value' => 'America/Godthab',
                'ref_tz_offset' => '(GMT-03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                132 =>
                array (
                    'id' => 133,
                'ref_tz_label' => '(GMT-03:00) America/Goose_Bay',
                    'ref_tz_value' => 'America/Goose_Bay',
                'ref_tz_offset' => '(GMT-03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                133 =>
                array (
                    'id' => 134,
                'ref_tz_label' => '(GMT-03:00) America/Halifax',
                    'ref_tz_value' => 'America/Halifax',
                'ref_tz_offset' => '(GMT-03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                134 =>
                array (
                    'id' => 135,
                'ref_tz_label' => '(GMT-03:00) America/Jujuy',
                    'ref_tz_value' => 'America/Jujuy',
                'ref_tz_offset' => '(GMT-03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                135 =>
                array (
                    'id' => 136,
                'ref_tz_label' => '(GMT-03:00) America/Maceio',
                    'ref_tz_value' => 'America/Maceio',
                'ref_tz_offset' => '(GMT-03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                136 =>
                array (
                    'id' => 137,
                'ref_tz_label' => '(GMT-03:00) America/Mendoza',
                    'ref_tz_value' => 'America/Mendoza',
                'ref_tz_offset' => '(GMT-03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                137 =>
                array (
                    'id' => 138,
                'ref_tz_label' => '(GMT-03:00) America/Moncton',
                    'ref_tz_value' => 'America/Moncton',
                'ref_tz_offset' => '(GMT-03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                138 =>
                array (
                    'id' => 139,
                'ref_tz_label' => '(GMT-03:00) America/Montevideo',
                    'ref_tz_value' => 'America/Montevideo',
                'ref_tz_offset' => '(GMT-03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                139 =>
                array (
                    'id' => 140,
                'ref_tz_label' => '(GMT-03:00) America/Paramaribo',
                    'ref_tz_value' => 'America/Paramaribo',
                'ref_tz_offset' => '(GMT-03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                140 =>
                array (
                    'id' => 141,
                'ref_tz_label' => '(GMT-03:00) America/Recife',
                    'ref_tz_value' => 'America/Recife',
                'ref_tz_offset' => '(GMT-03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                141 =>
                array (
                    'id' => 142,
                'ref_tz_label' => '(GMT-03:00) America/Santarem',
                    'ref_tz_value' => 'America/Santarem',
                'ref_tz_offset' => '(GMT-03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                142 =>
                array (
                    'id' => 143,
                'ref_tz_label' => '(GMT-03:00) America/Santiago',
                    'ref_tz_value' => 'America/Santiago',
                'ref_tz_offset' => '(GMT-03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                143 =>
                array (
                    'id' => 144,
                'ref_tz_label' => '(GMT-03:00) America/Sao_Paulo',
                    'ref_tz_value' => 'America/Sao_Paulo',
                'ref_tz_offset' => '(GMT-03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                144 =>
                array (
                    'id' => 145,
                'ref_tz_label' => '(GMT-03:00) America/Thule',
                    'ref_tz_value' => 'America/Thule',
                'ref_tz_offset' => '(GMT-03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                145 =>
                array (
                    'id' => 146,
                'ref_tz_label' => '(GMT-03:00) Antarctica/Palmer',
                    'ref_tz_value' => 'Antarctica/Palmer',
                'ref_tz_offset' => '(GMT-03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                146 =>
                array (
                    'id' => 147,
                'ref_tz_label' => '(GMT-03:00) Antarctica/Rothera',
                    'ref_tz_value' => 'Antarctica/Rothera',
                'ref_tz_offset' => '(GMT-03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                147 =>
                array (
                    'id' => 148,
                'ref_tz_label' => '(GMT-03:00) Atlantic/Bermuda',
                    'ref_tz_value' => 'Atlantic/Bermuda',
                'ref_tz_offset' => '(GMT-03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                148 =>
                array (
                    'id' => 149,
                'ref_tz_label' => '(GMT-03:00) Atlantic/Stanley',
                    'ref_tz_value' => 'Atlantic/Stanley',
                'ref_tz_offset' => '(GMT-03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                149 =>
                array (
                    'id' => 150,
                'ref_tz_label' => '(GMT-02:30) America/St_Johns',
                    'ref_tz_value' => 'America/St_Johns',
                'ref_tz_offset' => '(GMT-02:30)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                150 =>
                array (
                    'id' => 151,
                'ref_tz_label' => '(GMT-02:00) America/Miquelon',
                    'ref_tz_value' => 'America/Miquelon',
                'ref_tz_offset' => '(GMT-02:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                151 =>
                array (
                    'id' => 152,
                'ref_tz_label' => '(GMT-02:00) America/Noronha',
                    'ref_tz_value' => 'America/Noronha',
                'ref_tz_offset' => '(GMT-02:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                152 =>
                array (
                    'id' => 153,
                'ref_tz_label' => '(GMT-02:00) Atlantic/South_Georgia',
                    'ref_tz_value' => 'Atlantic/South_Georgia',
                'ref_tz_offset' => '(GMT-02:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                153 =>
                array (
                    'id' => 154,
                'ref_tz_label' => '(GMT-01:00) America/Scoresbysund',
                    'ref_tz_value' => 'America/Scoresbysund',
                'ref_tz_offset' => '(GMT-01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                154 =>
                array (
                    'id' => 155,
                'ref_tz_label' => '(GMT-01:00) Atlantic/Azores',
                    'ref_tz_value' => 'Atlantic/Azores',
                'ref_tz_offset' => '(GMT-01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                155 =>
                array (
                    'id' => 156,
                'ref_tz_label' => '(GMT-01:00) Atlantic/Cape_Verde',
                    'ref_tz_value' => 'Atlantic/Cape_Verde',
                'ref_tz_offset' => '(GMT-01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                156 =>
                array (
                    'id' => 157,
                'ref_tz_label' => '(GMT+00:00) Africa/Abidjan',
                    'ref_tz_value' => 'Africa/Abidjan',
                'ref_tz_offset' => '(GMT+00:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                157 =>
                array (
                    'id' => 158,
                'ref_tz_label' => '(GMT+00:00) Africa/Accra',
                    'ref_tz_value' => 'Africa/Accra',
                'ref_tz_offset' => '(GMT+00:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                158 =>
                array (
                    'id' => 159,
                'ref_tz_label' => '(GMT+00:00) Africa/Bamako',
                    'ref_tz_value' => 'Africa/Bamako',
                'ref_tz_offset' => '(GMT+00:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                159 =>
                array (
                    'id' => 160,
                'ref_tz_label' => '(GMT+00:00) Africa/Banjul',
                    'ref_tz_value' => 'Africa/Banjul',
                'ref_tz_offset' => '(GMT+00:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                160 =>
                array (
                    'id' => 161,
                'ref_tz_label' => '(GMT+00:00) Africa/Bissau',
                    'ref_tz_value' => 'Africa/Bissau',
                'ref_tz_offset' => '(GMT+00:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                161 =>
                array (
                    'id' => 162,
                'ref_tz_label' => '(GMT+00:00) Africa/Casablanca',
                    'ref_tz_value' => 'Africa/Casablanca',
                'ref_tz_offset' => '(GMT+00:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                162 =>
                array (
                    'id' => 163,
                'ref_tz_label' => '(GMT+00:00) Africa/Conakry',
                    'ref_tz_value' => 'Africa/Conakry',
                'ref_tz_offset' => '(GMT+00:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                163 =>
                array (
                    'id' => 164,
                'ref_tz_label' => '(GMT+00:00) Africa/Dakar',
                    'ref_tz_value' => 'Africa/Dakar',
                'ref_tz_offset' => '(GMT+00:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                164 =>
                array (
                    'id' => 165,
                'ref_tz_label' => '(GMT+00:00) Africa/El_Aaiun',
                    'ref_tz_value' => 'Africa/El_Aaiun',
                'ref_tz_offset' => '(GMT+00:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                165 =>
                array (
                    'id' => 166,
                'ref_tz_label' => '(GMT+00:00) Africa/Freetown',
                    'ref_tz_value' => 'Africa/Freetown',
                'ref_tz_offset' => '(GMT+00:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                166 =>
                array (
                    'id' => 167,
                'ref_tz_label' => '(GMT+00:00) Africa/Lome',
                    'ref_tz_value' => 'Africa/Lome',
                'ref_tz_offset' => '(GMT+00:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                167 =>
                array (
                    'id' => 168,
                'ref_tz_label' => '(GMT+00:00) Africa/Monrovia',
                    'ref_tz_value' => 'Africa/Monrovia',
                'ref_tz_offset' => '(GMT+00:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                168 =>
                array (
                    'id' => 169,
                'ref_tz_label' => '(GMT+00:00) Africa/Nouakchott',
                    'ref_tz_value' => 'Africa/Nouakchott',
                'ref_tz_offset' => '(GMT+00:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                169 =>
                array (
                    'id' => 170,
                'ref_tz_label' => '(GMT+00:00) Africa/Ouagadougou',
                    'ref_tz_value' => 'Africa/Ouagadougou',
                'ref_tz_offset' => '(GMT+00:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                170 =>
                array (
                    'id' => 171,
                'ref_tz_label' => '(GMT+00:00) Africa/Sao_Tome',
                    'ref_tz_value' => 'Africa/Sao_Tome',
                'ref_tz_offset' => '(GMT+00:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                171 =>
                array (
                    'id' => 172,
                'ref_tz_label' => '(GMT+00:00) America/Danmarkshavn',
                    'ref_tz_value' => 'America/Danmarkshavn',
                'ref_tz_offset' => '(GMT+00:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                172 =>
                array (
                    'id' => 173,
                'ref_tz_label' => '(GMT+00:00) Atlantic/Canary',
                    'ref_tz_value' => 'Atlantic/Canary',
                'ref_tz_offset' => '(GMT+00:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                173 =>
                array (
                    'id' => 174,
                'ref_tz_label' => '(GMT+00:00) Atlantic/Faeroe',
                    'ref_tz_value' => 'Atlantic/Faeroe',
                'ref_tz_offset' => '(GMT+00:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                174 =>
                array (
                    'id' => 175,
                'ref_tz_label' => '(GMT+00:00) Atlantic/Madeira',
                    'ref_tz_value' => 'Atlantic/Madeira',
                'ref_tz_offset' => '(GMT+00:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                175 =>
                array (
                    'id' => 176,
                'ref_tz_label' => '(GMT+00:00) Atlantic/Reykjavik',
                    'ref_tz_value' => 'Atlantic/Reykjavik',
                'ref_tz_offset' => '(GMT+00:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                176 =>
                array (
                    'id' => 177,
                'ref_tz_label' => '(GMT+00:00) Atlantic/St_Helena',
                    'ref_tz_value' => 'Atlantic/St_Helena',
                'ref_tz_offset' => '(GMT+00:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                177 =>
                array (
                    'id' => 178,
                'ref_tz_label' => '(GMT+00:00) Europe/Dublin',
                    'ref_tz_value' => 'Europe/Dublin',
                'ref_tz_offset' => '(GMT+00:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                178 =>
                array (
                    'id' => 179,
                'ref_tz_label' => '(GMT+00:00) Europe/Guernsey',
                    'ref_tz_value' => 'Europe/Guernsey',
                'ref_tz_offset' => '(GMT+00:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                179 =>
                array (
                    'id' => 180,
                'ref_tz_label' => '(GMT+00:00) Europe/Isle_of_Man',
                    'ref_tz_value' => 'Europe/Isle_of_Man',
                'ref_tz_offset' => '(GMT+00:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                180 =>
                array (
                    'id' => 181,
                'ref_tz_label' => '(GMT+00:00) Europe/Jersey',
                    'ref_tz_value' => 'Europe/Jersey',
                'ref_tz_offset' => '(GMT+00:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                181 =>
                array (
                    'id' => 182,
                'ref_tz_label' => '(GMT+00:00) Europe/Lisbon',
                    'ref_tz_value' => 'Europe/Lisbon',
                'ref_tz_offset' => '(GMT+00:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                182 =>
                array (
                    'id' => 183,
                'ref_tz_label' => '(GMT+00:00) Europe/London',
                    'ref_tz_value' => 'Europe/London',
                'ref_tz_offset' => '(GMT+00:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                183 =>
                array (
                    'id' => 184,
                'ref_tz_label' => '(GMT+01:00) Africa/Algiers',
                    'ref_tz_value' => 'Africa/Algiers',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                184 =>
                array (
                    'id' => 185,
                'ref_tz_label' => '(GMT+01:00) Africa/Bangui',
                    'ref_tz_value' => 'Africa/Bangui',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                185 =>
                array (
                    'id' => 186,
                'ref_tz_label' => '(GMT+01:00) Africa/Brazzaville',
                    'ref_tz_value' => 'Africa/Brazzaville',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                186 =>
                array (
                    'id' => 187,
                'ref_tz_label' => '(GMT+01:00) Africa/Ceuta',
                    'ref_tz_value' => 'Africa/Ceuta',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                187 =>
                array (
                    'id' => 188,
                'ref_tz_label' => '(GMT+01:00) Africa/Douala',
                    'ref_tz_value' => 'Africa/Douala',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                188 =>
                array (
                    'id' => 189,
                'ref_tz_label' => '(GMT+01:00) Africa/Kinshasa',
                    'ref_tz_value' => 'Africa/Kinshasa',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                189 =>
                array (
                    'id' => 190,
                'ref_tz_label' => '(GMT+01:00) Africa/Lagos',
                    'ref_tz_value' => 'Africa/Lagos',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                190 =>
                array (
                    'id' => 191,
                'ref_tz_label' => '(GMT+01:00) Africa/Libreville',
                    'ref_tz_value' => 'Africa/Libreville',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                191 =>
                array (
                    'id' => 192,
                'ref_tz_label' => '(GMT+01:00) Africa/Luanda',
                    'ref_tz_value' => 'Africa/Luanda',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                192 =>
                array (
                    'id' => 193,
                'ref_tz_label' => '(GMT+01:00) Africa/Malabo',
                    'ref_tz_value' => 'Africa/Malabo',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                193 =>
                array (
                    'id' => 194,
                'ref_tz_label' => '(GMT+01:00) Africa/Ndjamena',
                    'ref_tz_value' => 'Africa/Ndjamena',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                194 =>
                array (
                    'id' => 195,
                'ref_tz_label' => '(GMT+01:00) Africa/Niamey',
                    'ref_tz_value' => 'Africa/Niamey',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                195 =>
                array (
                    'id' => 196,
                'ref_tz_label' => '(GMT+01:00) Africa/Porto-Novo',
                    'ref_tz_value' => 'Africa/Porto-Novo',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                196 =>
                array (
                    'id' => 197,
                'ref_tz_label' => '(GMT+01:00) Africa/Tunis',
                    'ref_tz_value' => 'Africa/Tunis',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                197 =>
                array (
                    'id' => 198,
                'ref_tz_label' => '(GMT+01:00) Arctic/Longyearbyen',
                    'ref_tz_value' => 'Arctic/Longyearbyen',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                198 =>
                array (
                    'id' => 199,
                'ref_tz_label' => '(GMT+01:00) Europe/Amsterdam',
                    'ref_tz_value' => 'Europe/Amsterdam',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                199 =>
                array (
                    'id' => 200,
                'ref_tz_label' => '(GMT+01:00) Europe/Andorra',
                    'ref_tz_value' => 'Europe/Andorra',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                200 =>
                array (
                    'id' => 201,
                'ref_tz_label' => '(GMT+01:00) Europe/Belgrade',
                    'ref_tz_value' => 'Europe/Belgrade',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                201 =>
                array (
                    'id' => 202,
                'ref_tz_label' => '(GMT+01:00) Europe/Berlin',
                    'ref_tz_value' => 'Europe/Berlin',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                202 =>
                array (
                    'id' => 203,
                'ref_tz_label' => '(GMT+01:00) Europe/Bratislava',
                    'ref_tz_value' => 'Europe/Bratislava',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                203 =>
                array (
                    'id' => 204,
                'ref_tz_label' => '(GMT+01:00) Europe/Brussels',
                    'ref_tz_value' => 'Europe/Brussels',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                204 =>
                array (
                    'id' => 205,
                'ref_tz_label' => '(GMT+01:00) Europe/Budapest',
                    'ref_tz_value' => 'Europe/Budapest',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                205 =>
                array (
                    'id' => 206,
                'ref_tz_label' => '(GMT+01:00) Europe/Copenhagen',
                    'ref_tz_value' => 'Europe/Copenhagen',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                206 =>
                array (
                    'id' => 207,
                'ref_tz_label' => '(GMT+01:00) Europe/Gibraltar',
                    'ref_tz_value' => 'Europe/Gibraltar',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                207 =>
                array (
                    'id' => 208,
                'ref_tz_label' => '(GMT+01:00) Europe/Ljubljana',
                    'ref_tz_value' => 'Europe/Ljubljana',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                208 =>
                array (
                    'id' => 209,
                'ref_tz_label' => '(GMT+01:00) Europe/Luxembourg',
                    'ref_tz_value' => 'Europe/Luxembourg',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                209 =>
                array (
                    'id' => 210,
                'ref_tz_label' => '(GMT+01:00) Europe/Madrid',
                    'ref_tz_value' => 'Europe/Madrid',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                210 =>
                array (
                    'id' => 211,
                'ref_tz_label' => '(GMT+01:00) Europe/Malta',
                    'ref_tz_value' => 'Europe/Malta',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                211 =>
                array (
                    'id' => 212,
                'ref_tz_label' => '(GMT+01:00) Europe/Monaco',
                    'ref_tz_value' => 'Europe/Monaco',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                212 =>
                array (
                    'id' => 213,
                'ref_tz_label' => '(GMT+01:00) Europe/Oslo',
                    'ref_tz_value' => 'Europe/Oslo',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                213 =>
                array (
                    'id' => 214,
                'ref_tz_label' => '(GMT+01:00) Europe/Paris',
                    'ref_tz_value' => 'Europe/Paris',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                214 =>
                array (
                    'id' => 215,
                'ref_tz_label' => '(GMT+01:00) Europe/Podgorica',
                    'ref_tz_value' => 'Europe/Podgorica',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                215 =>
                array (
                    'id' => 216,
                'ref_tz_label' => '(GMT+01:00) Europe/Prague',
                    'ref_tz_value' => 'Europe/Prague',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                216 =>
                array (
                    'id' => 217,
                'ref_tz_label' => '(GMT+01:00) Europe/Rome',
                    'ref_tz_value' => 'Europe/Rome',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                217 =>
                array (
                    'id' => 218,
                'ref_tz_label' => '(GMT+01:00) Europe/San_Marino',
                    'ref_tz_value' => 'Europe/San_Marino',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                218 =>
                array (
                    'id' => 219,
                'ref_tz_label' => '(GMT+01:00) Europe/Sarajevo',
                    'ref_tz_value' => 'Europe/Sarajevo',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                219 =>
                array (
                    'id' => 220,
                'ref_tz_label' => '(GMT+01:00) Europe/Skopje',
                    'ref_tz_value' => 'Europe/Skopje',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                220 =>
                array (
                    'id' => 221,
                'ref_tz_label' => '(GMT+01:00) Europe/Stockholm',
                    'ref_tz_value' => 'Europe/Stockholm',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                221 =>
                array (
                    'id' => 222,
                'ref_tz_label' => '(GMT+01:00) Europe/Tirane',
                    'ref_tz_value' => 'Europe/Tirane',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                222 =>
                array (
                    'id' => 223,
                'ref_tz_label' => '(GMT+01:00) Europe/Vaduz',
                    'ref_tz_value' => 'Europe/Vaduz',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                223 =>
                array (
                    'id' => 224,
                'ref_tz_label' => '(GMT+01:00) Europe/Vatican',
                    'ref_tz_value' => 'Europe/Vatican',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                224 =>
                array (
                    'id' => 225,
                'ref_tz_label' => '(GMT+01:00) Europe/Vienna',
                    'ref_tz_value' => 'Europe/Vienna',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                225 =>
                array (
                    'id' => 226,
                'ref_tz_label' => '(GMT+01:00) Europe/Warsaw',
                    'ref_tz_value' => 'Europe/Warsaw',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                226 =>
                array (
                    'id' => 227,
                'ref_tz_label' => '(GMT+01:00) Europe/Zagreb',
                    'ref_tz_value' => 'Europe/Zagreb',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                227 =>
                array (
                    'id' => 228,
                'ref_tz_label' => '(GMT+01:00) Europe/Zurich',
                    'ref_tz_value' => 'Europe/Zurich',
                'ref_tz_offset' => '(GMT+01:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                228 =>
                array (
                    'id' => 229,
                'ref_tz_label' => '(GMT+02:00) Africa/Blantyre',
                    'ref_tz_value' => 'Africa/Blantyre',
                'ref_tz_offset' => '(GMT+02:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                229 =>
                array (
                    'id' => 230,
                'ref_tz_label' => '(GMT+02:00) Africa/Bujumbura',
                    'ref_tz_value' => 'Africa/Bujumbura',
                'ref_tz_offset' => '(GMT+02:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                230 =>
                array (
                    'id' => 231,
                'ref_tz_label' => '(GMT+02:00) Africa/Cairo',
                    'ref_tz_value' => 'Africa/Cairo',
                'ref_tz_offset' => '(GMT+02:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                231 =>
                array (
                    'id' => 232,
                'ref_tz_label' => '(GMT+02:00) Africa/Gaborone',
                    'ref_tz_value' => 'Africa/Gaborone',
                'ref_tz_offset' => '(GMT+02:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                232 =>
                array (
                    'id' => 233,
                'ref_tz_label' => '(GMT+02:00) Africa/Harare',
                    'ref_tz_value' => 'Africa/Harare',
                'ref_tz_offset' => '(GMT+02:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                233 =>
                array (
                    'id' => 234,
                'ref_tz_label' => '(GMT+02:00) Africa/Johannesburg',
                    'ref_tz_value' => 'Africa/Johannesburg',
                'ref_tz_offset' => '(GMT+02:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                234 =>
                array (
                    'id' => 235,
                'ref_tz_label' => '(GMT+02:00) Africa/Kigali',
                    'ref_tz_value' => 'Africa/Kigali',
                'ref_tz_offset' => '(GMT+02:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                235 =>
                array (
                    'id' => 236,
                'ref_tz_label' => '(GMT+02:00) Africa/Lubumbashi',
                    'ref_tz_value' => 'Africa/Lubumbashi',
                'ref_tz_offset' => '(GMT+02:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                236 =>
                array (
                    'id' => 237,
                'ref_tz_label' => '(GMT+02:00) Africa/Lusaka',
                    'ref_tz_value' => 'Africa/Lusaka',
                'ref_tz_offset' => '(GMT+02:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                237 =>
                array (
                    'id' => 238,
                'ref_tz_label' => '(GMT+02:00) Africa/Maputo',
                    'ref_tz_value' => 'Africa/Maputo',
                'ref_tz_offset' => '(GMT+02:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                238 =>
                array (
                    'id' => 239,
                'ref_tz_label' => '(GMT+02:00) Africa/Maseru',
                    'ref_tz_value' => 'Africa/Maseru',
                'ref_tz_offset' => '(GMT+02:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                239 =>
                array (
                    'id' => 240,
                'ref_tz_label' => '(GMT+02:00) Africa/Mbabane',
                    'ref_tz_value' => 'Africa/Mbabane',
                'ref_tz_offset' => '(GMT+02:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                240 =>
                array (
                    'id' => 241,
                'ref_tz_label' => '(GMT+02:00) Africa/Tripoli',
                    'ref_tz_value' => 'Africa/Tripoli',
                'ref_tz_offset' => '(GMT+02:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                241 =>
                array (
                    'id' => 242,
                'ref_tz_label' => '(GMT+02:00) Africa/Windhoek',
                    'ref_tz_value' => 'Africa/Windhoek',
                'ref_tz_offset' => '(GMT+02:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                242 =>
                array (
                    'id' => 243,
                'ref_tz_label' => '(GMT+02:00) Asia/Amman',
                    'ref_tz_value' => 'Asia/Amman',
                'ref_tz_offset' => '(GMT+02:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                243 =>
                array (
                    'id' => 244,
                'ref_tz_label' => '(GMT+02:00) Asia/Beirut',
                    'ref_tz_value' => 'Asia/Beirut',
                'ref_tz_offset' => '(GMT+02:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                244 =>
                array (
                    'id' => 245,
                'ref_tz_label' => '(GMT+02:00) Asia/Damascus',
                    'ref_tz_value' => 'Asia/Damascus',
                'ref_tz_offset' => '(GMT+02:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                245 =>
                array (
                    'id' => 246,
                'ref_tz_label' => '(GMT+02:00) Asia/Gaza',
                    'ref_tz_value' => 'Asia/Gaza',
                'ref_tz_offset' => '(GMT+02:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                246 =>
                array (
                    'id' => 247,
                'ref_tz_label' => '(GMT+02:00) Asia/Jerusalem',
                    'ref_tz_value' => 'Asia/Jerusalem',
                'ref_tz_offset' => '(GMT+02:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                247 =>
                array (
                    'id' => 248,
                'ref_tz_label' => '(GMT+02:00) Asia/Nicosia',
                    'ref_tz_value' => 'Asia/Nicosia',
                'ref_tz_offset' => '(GMT+02:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                248 =>
                array (
                    'id' => 249,
                'ref_tz_label' => '(GMT+02:00) Europe/Athens',
                    'ref_tz_value' => 'Europe/Athens',
                'ref_tz_offset' => '(GMT+02:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                249 =>
                array (
                    'id' => 250,
                'ref_tz_label' => '(GMT+02:00) Europe/Bucharest',
                    'ref_tz_value' => 'Europe/Bucharest',
                'ref_tz_offset' => '(GMT+02:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                250 =>
                array (
                    'id' => 251,
                'ref_tz_label' => '(GMT+02:00) Europe/Chisinau',
                    'ref_tz_value' => 'Europe/Chisinau',
                'ref_tz_offset' => '(GMT+02:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                251 =>
                array (
                    'id' => 252,
                'ref_tz_label' => '(GMT+02:00) Europe/Helsinki',
                    'ref_tz_value' => 'Europe/Helsinki',
                'ref_tz_offset' => '(GMT+02:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                252 =>
                array (
                    'id' => 253,
                'ref_tz_label' => '(GMT+02:00) Europe/Kaliningrad',
                    'ref_tz_value' => 'Europe/Kaliningrad',
                'ref_tz_offset' => '(GMT+02:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                253 =>
                array (
                    'id' => 254,
                'ref_tz_label' => '(GMT+02:00) Europe/Kiev',
                    'ref_tz_value' => 'Europe/Kiev',
                'ref_tz_offset' => '(GMT+02:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                254 =>
                array (
                    'id' => 255,
                'ref_tz_label' => '(GMT+02:00) Europe/Mariehamn',
                    'ref_tz_value' => 'Europe/Mariehamn',
                'ref_tz_offset' => '(GMT+02:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                255 =>
                array (
                    'id' => 256,
                'ref_tz_label' => '(GMT+02:00) Europe/Riga',
                    'ref_tz_value' => 'Europe/Riga',
                'ref_tz_offset' => '(GMT+02:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                256 =>
                array (
                    'id' => 257,
                'ref_tz_label' => '(GMT+02:00) Europe/Sofia',
                    'ref_tz_value' => 'Europe/Sofia',
                'ref_tz_offset' => '(GMT+02:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                257 =>
                array (
                    'id' => 258,
                'ref_tz_label' => '(GMT+02:00) Europe/Tallinn',
                    'ref_tz_value' => 'Europe/Tallinn',
                'ref_tz_offset' => '(GMT+02:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                258 =>
                array (
                    'id' => 259,
                'ref_tz_label' => '(GMT+02:00) Europe/Uzhgorod',
                    'ref_tz_value' => 'Europe/Uzhgorod',
                'ref_tz_offset' => '(GMT+02:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                259 =>
                array (
                    'id' => 260,
                'ref_tz_label' => '(GMT+02:00) Europe/Vilnius',
                    'ref_tz_value' => 'Europe/Vilnius',
                'ref_tz_offset' => '(GMT+02:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                260 =>
                array (
                    'id' => 261,
                'ref_tz_label' => '(GMT+02:00) Europe/Zaporozhye',
                    'ref_tz_value' => 'Europe/Zaporozhye',
                'ref_tz_offset' => '(GMT+02:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                261 =>
                array (
                    'id' => 262,
                'ref_tz_label' => '(GMT+03:00) Africa/Addis_Ababa',
                    'ref_tz_value' => 'Africa/Addis_Ababa',
                'ref_tz_offset' => '(GMT+03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                262 =>
                array (
                    'id' => 263,
                'ref_tz_label' => '(GMT+03:00) Africa/Asmera',
                    'ref_tz_value' => 'Africa/Asmera',
                'ref_tz_offset' => '(GMT+03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                263 =>
                array (
                    'id' => 264,
                'ref_tz_label' => '(GMT+03:00) Africa/Dar_es_Salaam',
                    'ref_tz_value' => 'Africa/Dar_es_Salaam',
                'ref_tz_offset' => '(GMT+03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                264 =>
                array (
                    'id' => 265,
                'ref_tz_label' => '(GMT+03:00) Africa/Djibouti',
                    'ref_tz_value' => 'Africa/Djibouti',
                'ref_tz_offset' => '(GMT+03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                265 =>
                array (
                    'id' => 266,
                'ref_tz_label' => '(GMT+03:00) Africa/Kampala',
                    'ref_tz_value' => 'Africa/Kampala',
                'ref_tz_offset' => '(GMT+03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                266 =>
                array (
                    'id' => 267,
                'ref_tz_label' => '(GMT+03:00) Africa/Khartoum',
                    'ref_tz_value' => 'Africa/Khartoum',
                'ref_tz_offset' => '(GMT+03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                267 =>
                array (
                    'id' => 268,
                'ref_tz_label' => '(GMT+03:00) Africa/Mogadishu',
                    'ref_tz_value' => 'Africa/Mogadishu',
                'ref_tz_offset' => '(GMT+03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                268 =>
                array (
                    'id' => 269,
                'ref_tz_label' => '(GMT+03:00) Africa/Nairobi',
                    'ref_tz_value' => 'Africa/Nairobi',
                'ref_tz_offset' => '(GMT+03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                269 =>
                array (
                    'id' => 270,
                'ref_tz_label' => '(GMT+03:00) Antarctica/Syowa',
                    'ref_tz_value' => 'Antarctica/Syowa',
                'ref_tz_offset' => '(GMT+03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                270 =>
                array (
                    'id' => 271,
                'ref_tz_label' => '(GMT+03:00) Asia/Aden',
                    'ref_tz_value' => 'Asia/Aden',
                'ref_tz_offset' => '(GMT+03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                271 =>
                array (
                    'id' => 272,
                'ref_tz_label' => '(GMT+03:00) Asia/Baghdad',
                    'ref_tz_value' => 'Asia/Baghdad',
                'ref_tz_offset' => '(GMT+03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                272 =>
                array (
                    'id' => 273,
                'ref_tz_label' => '(GMT+03:00) Asia/Bahrain',
                    'ref_tz_value' => 'Asia/Bahrain',
                'ref_tz_offset' => '(GMT+03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                273 =>
                array (
                    'id' => 274,
                'ref_tz_label' => '(GMT+03:00) Asia/Kuwait',
                    'ref_tz_value' => 'Asia/Kuwait',
                'ref_tz_offset' => '(GMT+03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                274 =>
                array (
                    'id' => 275,
                'ref_tz_label' => '(GMT+03:00) Asia/Qatar',
                    'ref_tz_value' => 'Asia/Qatar',
                'ref_tz_offset' => '(GMT+03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                275 =>
                array (
                    'id' => 276,
                'ref_tz_label' => '(GMT+03:00) Asia/Riyadh',
                    'ref_tz_value' => 'Asia/Riyadh',
                'ref_tz_offset' => '(GMT+03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                276 =>
                array (
                    'id' => 277,
                'ref_tz_label' => '(GMT+03:00) Europe/Istanbul',
                    'ref_tz_value' => 'Europe/Istanbul',
                'ref_tz_offset' => '(GMT+03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                277 =>
                array (
                    'id' => 278,
                'ref_tz_label' => '(GMT+03:00) Europe/Minsk',
                    'ref_tz_value' => 'Europe/Minsk',
                'ref_tz_offset' => '(GMT+03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                278 =>
                array (
                    'id' => 279,
                'ref_tz_label' => '(GMT+03:00) Europe/Moscow',
                    'ref_tz_value' => 'Europe/Moscow',
                'ref_tz_offset' => '(GMT+03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                279 =>
                array (
                    'id' => 280,
                'ref_tz_label' => '(GMT+03:00) Europe/Simferopol',
                    'ref_tz_value' => 'Europe/Simferopol',
                'ref_tz_offset' => '(GMT+03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                280 =>
                array (
                    'id' => 281,
                'ref_tz_label' => '(GMT+03:00) Europe/Volgograd',
                    'ref_tz_value' => 'Europe/Volgograd',
                'ref_tz_offset' => '(GMT+03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                281 =>
                array (
                    'id' => 282,
                'ref_tz_label' => '(GMT+03:00) Indian/Antananarivo',
                    'ref_tz_value' => 'Indian/Antananarivo',
                'ref_tz_offset' => '(GMT+03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                282 =>
                array (
                    'id' => 283,
                'ref_tz_label' => '(GMT+03:00) Indian/Comoro',
                    'ref_tz_value' => 'Indian/Comoro',
                'ref_tz_offset' => '(GMT+03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                283 =>
                array (
                    'id' => 284,
                'ref_tz_label' => '(GMT+03:00) Indian/Mayotte',
                    'ref_tz_value' => 'Indian/Mayotte',
                'ref_tz_offset' => '(GMT+03:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                284 =>
                array (
                    'id' => 285,
                'ref_tz_label' => '(GMT+04:00) Asia/Baku',
                    'ref_tz_value' => 'Asia/Baku',
                'ref_tz_offset' => '(GMT+04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                285 =>
                array (
                    'id' => 286,
                'ref_tz_label' => '(GMT+04:00) Asia/Dubai',
                    'ref_tz_value' => 'Asia/Dubai',
                'ref_tz_offset' => '(GMT+04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                286 =>
                array (
                    'id' => 287,
                'ref_tz_label' => '(GMT+04:00) Asia/Muscat',
                    'ref_tz_value' => 'Asia/Muscat',
                'ref_tz_offset' => '(GMT+04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                287 =>
                array (
                    'id' => 288,
                'ref_tz_label' => '(GMT+04:00) Asia/Tbilisi',
                    'ref_tz_value' => 'Asia/Tbilisi',
                'ref_tz_offset' => '(GMT+04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                288 =>
                array (
                    'id' => 289,
                'ref_tz_label' => '(GMT+04:00) Asia/Yerevan',
                    'ref_tz_value' => 'Asia/Yerevan',
                'ref_tz_offset' => '(GMT+04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                289 =>
                array (
                    'id' => 290,
                'ref_tz_label' => '(GMT+04:00) Europe/Samara',
                    'ref_tz_value' => 'Europe/Samara',
                'ref_tz_offset' => '(GMT+04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                290 =>
                array (
                    'id' => 291,
                'ref_tz_label' => '(GMT+04:00) Indian/Mahe',
                    'ref_tz_value' => 'Indian/Mahe',
                'ref_tz_offset' => '(GMT+04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                291 =>
                array (
                    'id' => 292,
                'ref_tz_label' => '(GMT+04:00) Indian/Mauritius',
                    'ref_tz_value' => 'Indian/Mauritius',
                'ref_tz_offset' => '(GMT+04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                292 =>
                array (
                    'id' => 293,
                'ref_tz_label' => '(GMT+04:00) Indian/Reunion',
                    'ref_tz_value' => 'Indian/Reunion',
                'ref_tz_offset' => '(GMT+04:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                293 =>
                array (
                    'id' => 294,
                'ref_tz_label' => '(GMT+04:30) Asia/Kabul',
                    'ref_tz_value' => 'Asia/Kabul',
                'ref_tz_offset' => '(GMT+04:30)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                294 =>
                array (
                    'id' => 295,
                'ref_tz_label' => '(GMT+04:30) Asia/Tehran',
                    'ref_tz_value' => 'Asia/Tehran',
                'ref_tz_offset' => '(GMT+04:30)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                295 =>
                array (
                    'id' => 296,
                'ref_tz_label' => '(GMT+05:00) Antarctica/Mawson',
                    'ref_tz_value' => 'Antarctica/Mawson',
                'ref_tz_offset' => '(GMT+05:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                296 =>
                array (
                    'id' => 297,
                'ref_tz_label' => '(GMT+05:00) Asia/Aqtau',
                    'ref_tz_value' => 'Asia/Aqtau',
                'ref_tz_offset' => '(GMT+05:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                297 =>
                array (
                    'id' => 298,
                'ref_tz_label' => '(GMT+05:00) Asia/Aqtobe',
                    'ref_tz_value' => 'Asia/Aqtobe',
                'ref_tz_offset' => '(GMT+05:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                298 =>
                array (
                    'id' => 299,
                'ref_tz_label' => '(GMT+05:00) Asia/Ashgabat',
                    'ref_tz_value' => 'Asia/Ashgabat',
                'ref_tz_offset' => '(GMT+05:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                299 =>
                array (
                    'id' => 300,
                'ref_tz_label' => '(GMT+05:00) Asia/Dushanbe',
                    'ref_tz_value' => 'Asia/Dushanbe',
                'ref_tz_offset' => '(GMT+05:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                300 =>
                array (
                    'id' => 301,
                'ref_tz_label' => '(GMT+05:00) Asia/Karachi',
                    'ref_tz_value' => 'Asia/Karachi',
                'ref_tz_offset' => '(GMT+05:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                301 =>
                array (
                    'id' => 302,
                'ref_tz_label' => '(GMT+05:00) Asia/Oral',
                    'ref_tz_value' => 'Asia/Oral',
                'ref_tz_offset' => '(GMT+05:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                302 =>
                array (
                    'id' => 303,
                'ref_tz_label' => '(GMT+05:00) Asia/Samarkand',
                    'ref_tz_value' => 'Asia/Samarkand',
                'ref_tz_offset' => '(GMT+05:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                303 =>
                array (
                    'id' => 304,
                'ref_tz_label' => '(GMT+05:00) Asia/Tashkent',
                    'ref_tz_value' => 'Asia/Tashkent',
                'ref_tz_offset' => '(GMT+05:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                304 =>
                array (
                    'id' => 305,
                'ref_tz_label' => '(GMT+05:00) Asia/Yekaterinburg',
                    'ref_tz_value' => 'Asia/Yekaterinburg',
                'ref_tz_offset' => '(GMT+05:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                305 =>
                array (
                    'id' => 306,
                'ref_tz_label' => '(GMT+05:00) Indian/Kerguelen',
                    'ref_tz_value' => 'Indian/Kerguelen',
                'ref_tz_offset' => '(GMT+05:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                306 =>
                array (
                    'id' => 307,
                'ref_tz_label' => '(GMT+05:00) Indian/Maldives',
                    'ref_tz_value' => 'Indian/Maldives',
                'ref_tz_offset' => '(GMT+05:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                307 =>
                array (
                    'id' => 308,
                'ref_tz_label' => '(GMT+05:30) Asia/Calcutta',
                    'ref_tz_value' => 'Asia/Calcutta',
                'ref_tz_offset' => '(GMT+05:30)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                308 =>
                array (
                    'id' => 309,
                'ref_tz_label' => '(GMT+05:30) Asia/Colombo',
                    'ref_tz_value' => 'Asia/Colombo',
                'ref_tz_offset' => '(GMT+05:30)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                309 =>
                array (
                    'id' => 310,
                'ref_tz_label' => '(GMT+05:45) Asia/Katmandu',
                    'ref_tz_value' => 'Asia/Katmandu',
                'ref_tz_offset' => '(GMT+05:45)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                310 =>
                array (
                    'id' => 311,
                'ref_tz_label' => '(GMT+06:00) Antarctica/Vostok',
                    'ref_tz_value' => 'Antarctica/Vostok',
                'ref_tz_offset' => '(GMT+06:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                311 =>
                array (
                    'id' => 312,
                'ref_tz_label' => '(GMT+06:00) Asia/Almaty',
                    'ref_tz_value' => 'Asia/Almaty',
                'ref_tz_offset' => '(GMT+06:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                312 =>
                array (
                    'id' => 313,
                'ref_tz_label' => '(GMT+06:00) Asia/Bishkek',
                    'ref_tz_value' => 'Asia/Bishkek',
                'ref_tz_offset' => '(GMT+06:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                313 =>
                array (
                    'id' => 314,
                'ref_tz_label' => '(GMT+06:00) Asia/Dhaka',
                    'ref_tz_value' => 'Asia/Dhaka',
                'ref_tz_offset' => '(GMT+06:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                314 =>
                array (
                    'id' => 315,
                'ref_tz_label' => '(GMT+06:00) Asia/Kashgar',
                    'ref_tz_value' => 'Asia/Kashgar',
                'ref_tz_offset' => '(GMT+06:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                315 =>
                array (
                    'id' => 316,
                'ref_tz_label' => '(GMT+06:00) Asia/Omsk',
                    'ref_tz_value' => 'Asia/Omsk',
                'ref_tz_offset' => '(GMT+06:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                316 =>
                array (
                    'id' => 317,
                'ref_tz_label' => '(GMT+06:00) Asia/Qyzylorda',
                    'ref_tz_value' => 'Asia/Qyzylorda',
                'ref_tz_offset' => '(GMT+06:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                317 =>
                array (
                    'id' => 318,
                'ref_tz_label' => '(GMT+06:00) Asia/Thimphu',
                    'ref_tz_value' => 'Asia/Thimphu',
                'ref_tz_offset' => '(GMT+06:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                318 =>
                array (
                    'id' => 319,
                'ref_tz_label' => '(GMT+06:00) Asia/Urumqi',
                    'ref_tz_value' => 'Asia/Urumqi',
                'ref_tz_offset' => '(GMT+06:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                319 =>
                array (
                    'id' => 320,
                'ref_tz_label' => '(GMT+06:00) Indian/Chagos',
                    'ref_tz_value' => 'Indian/Chagos',
                'ref_tz_offset' => '(GMT+06:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                320 =>
                array (
                    'id' => 321,
                'ref_tz_label' => '(GMT+06:30) Asia/Rangoon',
                    'ref_tz_value' => 'Asia/Rangoon',
                'ref_tz_offset' => '(GMT+06:30)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                321 =>
                array (
                    'id' => 322,
                'ref_tz_label' => '(GMT+06:30) Indian/Cocos',
                    'ref_tz_value' => 'Indian/Cocos',
                'ref_tz_offset' => '(GMT+06:30)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                322 =>
                array (
                    'id' => 323,
                'ref_tz_label' => '(GMT+07:00) Antarctica/Davis',
                    'ref_tz_value' => 'Antarctica/Davis',
                'ref_tz_offset' => '(GMT+07:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                323 =>
                array (
                    'id' => 324,
                'ref_tz_label' => '(GMT+07:00) Asia/Bangkok',
                    'ref_tz_value' => 'Asia/Bangkok',
                'ref_tz_offset' => '(GMT+07:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                324 =>
                array (
                    'id' => 325,
                'ref_tz_label' => '(GMT+07:00) Asia/Hovd',
                    'ref_tz_value' => 'Asia/Hovd',
                'ref_tz_offset' => '(GMT+07:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                325 =>
                array (
                    'id' => 326,
                'ref_tz_label' => '(GMT+07:00) Asia/Jakarta',
                    'ref_tz_value' => 'Asia/Jakarta',
                'ref_tz_offset' => '(GMT+07:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                326 =>
                array (
                    'id' => 327,
                'ref_tz_label' => '(GMT+07:00) Asia/Krasnoyarsk',
                    'ref_tz_value' => 'Asia/Krasnoyarsk',
                'ref_tz_offset' => '(GMT+07:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                327 =>
                array (
                    'id' => 328,
                'ref_tz_label' => '(GMT+07:00) Asia/Novosibirsk',
                    'ref_tz_value' => 'Asia/Novosibirsk',
                'ref_tz_offset' => '(GMT+07:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                328 =>
                array (
                    'id' => 329,
                'ref_tz_label' => '(GMT+07:00) Asia/Phnom_Penh',
                    'ref_tz_value' => 'Asia/Phnom_Penh',
                'ref_tz_offset' => '(GMT+07:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                329 =>
                array (
                    'id' => 330,
                'ref_tz_label' => '(GMT+07:00) Asia/Pontianak',
                    'ref_tz_value' => 'Asia/Pontianak',
                'ref_tz_offset' => '(GMT+07:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                330 =>
                array (
                    'id' => 331,
                'ref_tz_label' => '(GMT+07:00) Asia/Saigon',
                    'ref_tz_value' => 'Asia/Saigon',
                'ref_tz_offset' => '(GMT+07:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                331 =>
                array (
                    'id' => 332,
                'ref_tz_label' => '(GMT+07:00) Asia/Vientiane',
                    'ref_tz_value' => 'Asia/Vientiane',
                'ref_tz_offset' => '(GMT+07:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                332 =>
                array (
                    'id' => 333,
                'ref_tz_label' => '(GMT+07:00) Indian/Christmas',
                    'ref_tz_value' => 'Indian/Christmas',
                'ref_tz_offset' => '(GMT+07:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                333 =>
                array (
                    'id' => 334,
                'ref_tz_label' => '(GMT+08:00) Asia/Brunei',
                    'ref_tz_value' => 'Asia/Brunei',
                'ref_tz_offset' => '(GMT+08:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                334 =>
                array (
                    'id' => 335,
                'ref_tz_label' => '(GMT+08:00) Asia/Choibalsan',
                    'ref_tz_value' => 'Asia/Choibalsan',
                'ref_tz_offset' => '(GMT+08:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                335 =>
                array (
                    'id' => 336,
                'ref_tz_label' => '(GMT+08:00) Asia/Chongqing',
                    'ref_tz_value' => 'Asia/Chongqing',
                'ref_tz_offset' => '(GMT+08:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                336 =>
                array (
                    'id' => 337,
                'ref_tz_label' => '(GMT+08:00) Asia/Harbin',
                    'ref_tz_value' => 'Asia/Harbin',
                'ref_tz_offset' => '(GMT+08:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                337 =>
                array (
                    'id' => 338,
                'ref_tz_label' => '(GMT+08:00) Asia/Hong_Kong',
                    'ref_tz_value' => 'Asia/Hong_Kong',
                'ref_tz_offset' => '(GMT+08:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                338 =>
                array (
                    'id' => 339,
                'ref_tz_label' => '(GMT+08:00) Asia/Irkutsk',
                    'ref_tz_value' => 'Asia/Irkutsk',
                'ref_tz_offset' => '(GMT+08:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                339 =>
                array (
                    'id' => 340,
                'ref_tz_label' => '(GMT+08:00) Asia/Kuala_Lumpur',
                    'ref_tz_value' => 'Asia/Kuala_Lumpur',
                'ref_tz_offset' => '(GMT+08:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                340 =>
                array (
                    'id' => 341,
                'ref_tz_label' => '(GMT+08:00) Asia/Kuching',
                    'ref_tz_value' => 'Asia/Kuching',
                'ref_tz_offset' => '(GMT+08:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                341 =>
                array (
                    'id' => 342,
                'ref_tz_label' => '(GMT+08:00) Asia/Macau',
                    'ref_tz_value' => 'Asia/Macau',
                'ref_tz_offset' => '(GMT+08:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                342 =>
                array (
                    'id' => 343,
                'ref_tz_label' => '(GMT+08:00) Asia/Makassar',
                    'ref_tz_value' => 'Asia/Makassar',
                'ref_tz_offset' => '(GMT+08:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                343 =>
                array (
                    'id' => 344,
                'ref_tz_label' => '(GMT+08:00) Asia/Manila',
                    'ref_tz_value' => 'Asia/Manila',
                'ref_tz_offset' => '(GMT+08:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                344 =>
                array (
                    'id' => 345,
                'ref_tz_label' => '(GMT+08:00) Asia/Shanghai',
                    'ref_tz_value' => 'Asia/Shanghai',
                'ref_tz_offset' => '(GMT+08:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                345 =>
                array (
                    'id' => 346,
                'ref_tz_label' => '(GMT+08:00) Asia/Singapore',
                    'ref_tz_value' => 'Asia/Singapore',
                'ref_tz_offset' => '(GMT+08:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                346 =>
                array (
                    'id' => 347,
                'ref_tz_label' => '(GMT+08:00) Asia/Taipei',
                    'ref_tz_value' => 'Asia/Taipei',
                'ref_tz_offset' => '(GMT+08:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                347 =>
                array (
                    'id' => 348,
                'ref_tz_label' => '(GMT+08:00) Asia/Ulaanbaatar',
                    'ref_tz_value' => 'Asia/Ulaanbaatar',
                'ref_tz_offset' => '(GMT+08:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                348 =>
                array (
                    'id' => 349,
                'ref_tz_label' => '(GMT+08:00) Australia/Perth',
                    'ref_tz_value' => 'Australia/Perth',
                'ref_tz_offset' => '(GMT+08:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                349 =>
                array (
                    'id' => 350,
                'ref_tz_label' => '(GMT+08:30) Asia/Pyongyang',
                    'ref_tz_value' => 'Asia/Pyongyang',
                'ref_tz_offset' => '(GMT+08:30)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                350 =>
                array (
                    'id' => 351,
                'ref_tz_label' => '(GMT+08:45) Australia/Eucla',
                    'ref_tz_value' => 'Australia/Eucla',
                'ref_tz_offset' => '(GMT+08:45)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                351 =>
                array (
                    'id' => 352,
                'ref_tz_label' => '(GMT+09:00) Asia/Dili',
                    'ref_tz_value' => 'Asia/Dili',
                'ref_tz_offset' => '(GMT+09:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                352 =>
                array (
                    'id' => 353,
                'ref_tz_label' => '(GMT+09:00) Asia/Jayapura',
                    'ref_tz_value' => 'Asia/Jayapura',
                'ref_tz_offset' => '(GMT+09:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                353 =>
                array (
                    'id' => 354,
                'ref_tz_label' => '(GMT+09:00) Asia/Seoul',
                    'ref_tz_value' => 'Asia/Seoul',
                'ref_tz_offset' => '(GMT+09:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                354 =>
                array (
                    'id' => 355,
                'ref_tz_label' => '(GMT+09:00) Asia/Tokyo',
                    'ref_tz_value' => 'Asia/Tokyo',
                'ref_tz_offset' => '(GMT+09:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                355 =>
                array (
                    'id' => 356,
                'ref_tz_label' => '(GMT+09:00) Asia/Yakutsk',
                    'ref_tz_value' => 'Asia/Yakutsk',
                'ref_tz_offset' => '(GMT+09:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                356 =>
                array (
                    'id' => 357,
                'ref_tz_label' => '(GMT+09:00) Pacific/Palau',
                    'ref_tz_value' => 'Pacific/Palau',
                'ref_tz_offset' => '(GMT+09:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                357 =>
                array (
                    'id' => 358,
                'ref_tz_label' => '(GMT+09:30) Australia/Darwin',
                    'ref_tz_value' => 'Australia/Darwin',
                'ref_tz_offset' => '(GMT+09:30)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                358 =>
                array (
                    'id' => 359,
                'ref_tz_label' => '(GMT+10:00) Antarctica/DumontDUrville',
                    'ref_tz_value' => 'Antarctica/DumontDUrville',
                'ref_tz_offset' => '(GMT+10:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                359 =>
                array (
                    'id' => 360,
                'ref_tz_label' => '(GMT+10:00) Asia/Vladivostok',
                    'ref_tz_value' => 'Asia/Vladivostok',
                'ref_tz_offset' => '(GMT+10:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                360 =>
                array (
                    'id' => 361,
                'ref_tz_label' => '(GMT+10:00) Australia/Brisbane',
                    'ref_tz_value' => 'Australia/Brisbane',
                'ref_tz_offset' => '(GMT+10:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                361 =>
                array (
                    'id' => 362,
                'ref_tz_label' => '(GMT+10:00) Australia/Lindeman',
                    'ref_tz_value' => 'Australia/Lindeman',
                'ref_tz_offset' => '(GMT+10:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                362 =>
                array (
                    'id' => 363,
                'ref_tz_label' => '(GMT+10:00) Pacific/Guam',
                    'ref_tz_value' => 'Pacific/Guam',
                'ref_tz_offset' => '(GMT+10:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                363 =>
                array (
                    'id' => 364,
                'ref_tz_label' => '(GMT+10:00) Pacific/Port_Moresby',
                    'ref_tz_value' => 'Pacific/Port_Moresby',
                'ref_tz_offset' => '(GMT+10:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                364 =>
                array (
                    'id' => 365,
                'ref_tz_label' => '(GMT+10:00) Pacific/Saipan',
                    'ref_tz_value' => 'Pacific/Saipan',
                'ref_tz_offset' => '(GMT+10:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                365 =>
                array (
                    'id' => 366,
                'ref_tz_label' => '(GMT+10:00) Pacific/Truk',
                    'ref_tz_value' => 'Pacific/Truk',
                'ref_tz_offset' => '(GMT+10:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                366 =>
                array (
                    'id' => 367,
                'ref_tz_label' => '(GMT+10:30) Australia/Adelaide',
                    'ref_tz_value' => 'Australia/Adelaide',
                'ref_tz_offset' => '(GMT+10:30)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                367 =>
                array (
                    'id' => 368,
                'ref_tz_label' => '(GMT+10:30) Australia/Broken_Hill',
                    'ref_tz_value' => 'Australia/Broken_Hill',
                'ref_tz_offset' => '(GMT+10:30)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                368 =>
                array (
                    'id' => 369,
                'ref_tz_label' => '(GMT+11:00) Antarctica/Casey',
                    'ref_tz_value' => 'Antarctica/Casey',
                'ref_tz_offset' => '(GMT+11:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                369 =>
                array (
                    'id' => 370,
                'ref_tz_label' => '(GMT+11:00) Asia/Magadan',
                    'ref_tz_value' => 'Asia/Magadan',
                'ref_tz_offset' => '(GMT+11:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                370 =>
                array (
                    'id' => 371,
                'ref_tz_label' => '(GMT+11:00) Asia/Sakhalin',
                    'ref_tz_value' => 'Asia/Sakhalin',
                'ref_tz_offset' => '(GMT+11:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                371 =>
                array (
                    'id' => 372,
                'ref_tz_label' => '(GMT+11:00) Australia/Currie',
                    'ref_tz_value' => 'Australia/Currie',
                'ref_tz_offset' => '(GMT+11:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                372 =>
                array (
                    'id' => 373,
                'ref_tz_label' => '(GMT+11:00) Australia/Hobart',
                    'ref_tz_value' => 'Australia/Hobart',
                'ref_tz_offset' => '(GMT+11:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                373 =>
                array (
                    'id' => 374,
                'ref_tz_label' => '(GMT+11:00) Australia/Lord_Howe',
                    'ref_tz_value' => 'Australia/Lord_Howe',
                'ref_tz_offset' => '(GMT+11:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                374 =>
                array (
                    'id' => 375,
                'ref_tz_label' => '(GMT+11:00) Australia/Melbourne',
                    'ref_tz_value' => 'Australia/Melbourne',
                'ref_tz_offset' => '(GMT+11:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                375 =>
                array (
                    'id' => 376,
                'ref_tz_label' => '(GMT+11:00) Australia/Sydney',
                    'ref_tz_value' => 'Australia/Sydney',
                'ref_tz_offset' => '(GMT+11:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                376 =>
                array (
                    'id' => 377,
                'ref_tz_label' => '(GMT+11:00) Pacific/Efate',
                    'ref_tz_value' => 'Pacific/Efate',
                'ref_tz_offset' => '(GMT+11:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                377 =>
                array (
                    'id' => 378,
                'ref_tz_label' => '(GMT+11:00) Pacific/Guadalcanal',
                    'ref_tz_value' => 'Pacific/Guadalcanal',
                'ref_tz_offset' => '(GMT+11:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                378 =>
                array (
                    'id' => 379,
                'ref_tz_label' => '(GMT+11:00) Pacific/Kosrae',
                    'ref_tz_value' => 'Pacific/Kosrae',
                'ref_tz_offset' => '(GMT+11:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                379 =>
                array (
                    'id' => 380,
                'ref_tz_label' => '(GMT+11:00) Pacific/Norfolk',
                    'ref_tz_value' => 'Pacific/Norfolk',
                'ref_tz_offset' => '(GMT+11:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                380 =>
                array (
                    'id' => 381,
                'ref_tz_label' => '(GMT+11:00) Pacific/Noumea',
                    'ref_tz_value' => 'Pacific/Noumea',
                'ref_tz_offset' => '(GMT+11:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                381 =>
                array (
                    'id' => 382,
                'ref_tz_label' => '(GMT+11:00) Pacific/Ponape',
                    'ref_tz_value' => 'Pacific/Ponape',
                'ref_tz_offset' => '(GMT+11:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                382 =>
                array (
                    'id' => 383,
                'ref_tz_label' => '(GMT+12:00) Asia/Anadyr',
                    'ref_tz_value' => 'Asia/Anadyr',
                'ref_tz_offset' => '(GMT+12:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                383 =>
                array (
                    'id' => 384,
                'ref_tz_label' => '(GMT+12:00) Asia/Kamchatka',
                    'ref_tz_value' => 'Asia/Kamchatka',
                'ref_tz_offset' => '(GMT+12:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                384 =>
                array (
                    'id' => 385,
                'ref_tz_label' => '(GMT+12:00) Pacific/Fiji',
                    'ref_tz_value' => 'Pacific/Fiji',
                'ref_tz_offset' => '(GMT+12:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                385 =>
                array (
                    'id' => 386,
                'ref_tz_label' => '(GMT+12:00) Pacific/Funafuti',
                    'ref_tz_value' => 'Pacific/Funafuti',
                'ref_tz_offset' => '(GMT+12:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                386 =>
                array (
                    'id' => 387,
                'ref_tz_label' => '(GMT+12:00) Pacific/Kwajalein',
                    'ref_tz_value' => 'Pacific/Kwajalein',
                'ref_tz_offset' => '(GMT+12:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                387 =>
                array (
                    'id' => 388,
                'ref_tz_label' => '(GMT+12:00) Pacific/Majuro',
                    'ref_tz_value' => 'Pacific/Majuro',
                'ref_tz_offset' => '(GMT+12:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                388 =>
                array (
                    'id' => 389,
                'ref_tz_label' => '(GMT+12:00) Pacific/Nauru',
                    'ref_tz_value' => 'Pacific/Nauru',
                'ref_tz_offset' => '(GMT+12:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                389 =>
                array (
                    'id' => 390,
                'ref_tz_label' => '(GMT+12:00) Pacific/Tarawa',
                    'ref_tz_value' => 'Pacific/Tarawa',
                'ref_tz_offset' => '(GMT+12:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                390 =>
                array (
                    'id' => 391,
                'ref_tz_label' => '(GMT+12:00) Pacific/Wake',
                    'ref_tz_value' => 'Pacific/Wake',
                'ref_tz_offset' => '(GMT+12:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                391 =>
                array (
                    'id' => 392,
                'ref_tz_label' => '(GMT+12:00) Pacific/Wallis',
                    'ref_tz_value' => 'Pacific/Wallis',
                'ref_tz_offset' => '(GMT+12:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                392 =>
                array (
                    'id' => 393,
                'ref_tz_label' => '(GMT+13:00) Antarctica/McMurdo',
                    'ref_tz_value' => 'Antarctica/McMurdo',
                'ref_tz_offset' => '(GMT+13:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                393 =>
                array (
                    'id' => 394,
                'ref_tz_label' => '(GMT+13:00) Pacific/Auckland',
                    'ref_tz_value' => 'Pacific/Auckland',
                'ref_tz_offset' => '(GMT+13:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                394 =>
                array (
                    'id' => 395,
                'ref_tz_label' => '(GMT+13:00) Pacific/Enderbury',
                    'ref_tz_value' => 'Pacific/Enderbury',
                'ref_tz_offset' => '(GMT+13:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                395 =>
                array (
                    'id' => 396,
                'ref_tz_label' => '(GMT+13:00) Pacific/Fakaofo',
                    'ref_tz_value' => 'Pacific/Fakaofo',
                'ref_tz_offset' => '(GMT+13:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                396 =>
                array (
                    'id' => 397,
                'ref_tz_label' => '(GMT+13:00) Pacific/Tongatapu',
                    'ref_tz_value' => 'Pacific/Tongatapu',
                'ref_tz_offset' => '(GMT+13:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                397 =>
                array (
                    'id' => 398,
                'ref_tz_label' => '(GMT+13:45) Pacific/Chatham',
                    'ref_tz_value' => 'Pacific/Chatham',
                'ref_tz_offset' => '(GMT+13:45)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                398 =>
                array (
                    'id' => 399,
                'ref_tz_label' => '(GMT+14:00) Pacific/Apia',
                    'ref_tz_value' => 'Pacific/Apia',
                'ref_tz_offset' => '(GMT+14:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
                399 =>
                array (
                    'id' => 400,
                'ref_tz_label' => '(GMT+14:00) Pacific/Kiritimati',
                    'ref_tz_value' => 'Pacific/Kiritimati',
                'ref_tz_offset' => '(GMT+14:00)',
                    'created_at' => '2024-03-07 06:18:33',
                    'updated_at' => '2024-03-07 06:18:33',
                ),
            )
        );

    }
}
