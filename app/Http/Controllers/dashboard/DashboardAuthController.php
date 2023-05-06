<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stevebauman\Location\Facades\Location;
use Symfony\Component\HttpFoundation\Response;

class DashboardAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function create()
    {
        return response()->view('authentication.layouts.fancy.sign-in');
    }


    public function login(Request $request):JsonResponse
    {



        $rules = [
            'email' => 'required|string|email|exists:admins,email',
            'password' => 'required|string|min:5',
        ];
        $validator = Validator($request->all(), $rules);

        $credentials = [
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ];

        if (!$validator->fails()) {

            if (Auth::guard('admin')->attempt($credentials)) {
                 Admin::where('email',$request->get('email'))->update(['last_login_at'=>Carbon::now()]);
                return response()->json(['message' => 'Login successful. Happy browsing!'], Response::HTTP_OK);
            } else {
                return response()->json(['message' => 'Invalid email or password'], Response::HTTP_BAD_REQUEST);
            }
        } else {
            return response()->json(['message' => $validator->getMessageBag()->first()], Response::HTTP_BAD_REQUEST);
        }
    }

    public function logout(Request $request)
    {

        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        return redirect('/dashboard');
    }
}
