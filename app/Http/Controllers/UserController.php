<?php

namespace App\Http\Controllers;

use App\Models\RefReminder;
use App\Models\RefTimezone;
use App\Models\User;
use App\Models\UserReminder;
use App\Services\DigitalEnvisionService;
use Carbon\Carbon;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request){
        $digitalService = new DigitalEnvisionService();

        $response = $digitalService->sendEmail([
            'email' => 'fadlyknight@gmail.com',
            'message' => 'Yo'
        ]);
        dd($response->status());
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
        $refReminder = RefReminder::where('ref_rmndr_type', $request->rmndr_type ?? 'birth-day')->firstOrFail();
        UserReminder::create([
            'user_id' => $user->id,
            'ref_reminder_id' =>  $refReminder->id,
            'timezone' => $request->timezone, // if tz not found then use 'Asia/Jakarta'
            'occur_date' => $request->occur_date,
        ]);
    }

    public function delete($id){
        User::findOrFail($id)->delete();
    }
}
