<?php

namespace App\Http\Controllers;

use App\Models\LoginSession;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class LoginSessionController extends Controller
{


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        //
        $user = Auth::user();
        $location = $request->input('location');
        $device = $request->input('device');
        $ip_address = $request->ip();
        $login_time = Carbon::now();

        $loginSession = new LoginSession();
        $loginSession->user_id = $user->id;
        $loginSession->location = $location;
        $loginSession->device = $device;
        $loginSession->ip_address = $ip_address;
        $loginSession->login_time = $login_time;

        if ($loginSession->save()) {
            return response()->json(['message' => 'Login session created successfully.'], 201);
        } else {
            return response()->json(['message' => 'Unable to create login session.'], 500);
        }
    }



    public function signoutAll(Request $request)
    {
        $userId = $request->user()->id;

        // Get all login sessions for the user
        $sessions = LoginSession::where('user_id', $userId)->get();

        foreach ($sessions as $session) {
            // Set the logout time to the current time
            $session->logout_time = Carbon::now();
            $session->save();
        }

        // Redirect the user to the login page
        return redirect()->route('login');
    }
}
