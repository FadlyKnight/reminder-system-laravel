<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\CreateUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Models\RefReminder;
use App\Models\User;
use App\Models\UserReminder;
use App\Models\UserReminderTmp;
use App\Services\DigitalEnvisionService;
use App\Services\SendReminderService;
use Carbon\Carbon;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request){
        // $srs = new SendReminderService();

        // $userReminderTmps = UserReminderTmp::get();

        //  $uR = UserReminder::whereMonth('occur_date', now()->month)
        //         ->whereDay('occur_date', now()->day)
        //         ->whereNotIn('id', $userReminderTmps->pluck('user_reminder_id')->toArray())
        //         ->whereIn('timezone', $srs->getListTz())
        //  ->get();
        // //  ->map(function($data){
        // dd(
        //     count($uR),
        //     'Total : '.UserReminderTmp::where('status','!=','success')->count(),
        //     'FAILED : '.UserReminderTmp::where('status','failed')->count(),
        //     'INPROGRESS : '.UserReminderTmp::where('status','inprogress')->count(),
        //     // $userReminderTmps,
        //         // $userReminderTmps->pluck('id')->toArray()
        // );
        // $digitalService = new DigitalEnvisionService();

        // $response = $digitalService->sendEmail([
        //     'email' => 'fadlyknight@gmail.com',
        //     'message' => 'Yo'
        // ]);
        // $res = UserReminder::whereMonth('occur_date', now()->month)->whereDay('occur_date', now()->day)->join('user_reminder_tmps',)
        // dd($res->get());
        // dd($response->status());
    }

    public function store(CreateUserRequest $request){
        $user = User::create(
            [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => Hash::make('password')
            ]
        );
        $refReminder = RefReminder::where('ref_rmndr_type', $request->rmndr_type ?? 'birth-day')->firstOrFail();
        UserReminder::create([
            'user_id' => $user->id,
            'ref_reminder_id' =>  $refReminder->id,
            'timezone' => $request->timezone, // if tz not found then use 'Asia/Jakarta'
            'occur_date' => $request->occur_date,
        ]);
        return response()->json([
            'message' => 'success created user',
            'data' => $user
        ]);
    }

    public function update(UpdateUserRequest $request, $id){
        $user = User::find($id);
        $user->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email
        ]);

        $refReminder = RefReminder::where('ref_rmndr_type', $request->rmndr_type ?? 'birth-day')->firstOrFail();

        $user->userReminder->update([
            'ref_reminder_id' =>  $refReminder->id,
            'timezone' => $request->timezone,
            'occur_date' => $request->occur_date,
        ]);

        return response()->json([
            'message' => 'success updated user',
            'data' => $user
        ]);
    }

    public function delete($id){
        User::findOrFail($id)->delete();
        return response()->json([
            'message' => 'Success'
        ]);
    }
}
