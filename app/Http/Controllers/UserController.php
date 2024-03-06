<?php

namespace App\Http\Controllers;

use App\Models\RefReminder;
use App\Models\RefTimezone;
use App\Models\User;
use App\Models\UserReminder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request){
    }

    public function store(Request $request){
        $user = User::updateOrCreate(
            ['email' => $request->email],
            [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => Hash::make('password')
            ]
        );
        // moment.tz.guess()
        $refTimeZone = RefTimezone::where('ref_tz_value', $request->tz)->first();
        $refReminder = RefReminder::where('ref_rmndr_type', $request->rmndr_type ?? 'birth-day')->firstOrFail();
        UserReminder::create([
            'user_id' => $user->id,
            'ref_reminder_id' => $refTimeZone->id ?? 324, // if tz not found then use 'Asia/Bangkok'
            'ref_timezone_id' => $refReminder->id
        ]);
    }

    public function delete($id){
        User::findOrFail($id)->delete();
    }
}
