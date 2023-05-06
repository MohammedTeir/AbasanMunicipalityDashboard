<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;

class APiAuthController extends Controller
{
    //

    public function login(Request $request)
    {

    $rules = [
            'pin' => 'required|string|exists:users,pin',
            'password' => 'required|min:5',
        ];

        $validator = Validator($request->all(), $rules);

        if (!$validator->fails()) {

            $user = User::where('pin',$request->get('pin'))->get()->first();

            if ($user->status === 'disabled') {
                return response()->json([
                    'message' => 'Your account has been disabled. Please contact support for assistance.',
                    'status' => false
                ], Response::HTTP_UNAUTHORIZED);
            } elseif ($user->status === 'deleted') {
                return response()->json([
                    'message' => 'Your account has been deleted. Please contact support for assistance.',
                    'status' => false
                ], Response::HTTP_UNAUTHORIZED);
            }


            try {


                $response= Http::asForm()->post('http://127.0.0.1:8001/oauth/token',[

                    'grant_type'=>'password',
                    'client_id'=>'2',
                    'client_secret'=>'t6d0tYtp6r9taXUnU6FdSeb14iSD5I4IgLei4oy2',
                    'username'=>$request->get('pin'),
                    'password'=>$request->get('password'),
                    'scope'=>'*'

                ]);

                $decoded_response= json_decode($response);


                $user->setAttribute('token',$decoded_response->access_token);

                return response()->json([
                    'status'=>true,
                    'message' => 'Login successful. Happy browsing!',
                    'data'=>$user,
                ], Response::HTTP_OK);

            } catch (\Exception $e) {
                return response()->json([
                    'message' => 'Invalid Credentials',
                    'status'=>false
                ], Response::HTTP_BAD_REQUEST);
            }


        } else {
            return response()->json(['message' => $validator->getMessageBag()->first()], Response::HTTP_BAD_REQUEST);
        }
    }

    public function generatePasswordGrantToken(Request $request)
    {


    // try {


    //     $response= Http::asForm()->post('http://127.0.0.1:8001/oauth/token',[

    //         'grant_type'=>'password',
    //         'client_id'=>'2',
    //         'client_secret'=>'t6d0tYtp6r9taXUnU6FdSeb14iSD5I4IgLei4oy2',
    //         'username'=>$request->get('pin'),
    //         'password'=>$request->get('password'),
    //         'scope'=>'*'

    //     ]);

    //     $decoded_response= json_decode($response);

    //     $user = User::where('pin',$request->get('pin'))->get()->first();
    //     $user->setAttribute('token',$decoded_response->access_token);



    //     return response()->json([
    //         'status'=>true,
    //         'message' => 'Login successful. Happy browsing!',
    //         'data'=>$user,
    //     ], Response::HTTP_OK);

    // } catch (\Exception $e) {
    //     return response()->json([
    //         'message' => 'Invalid Credentials',
    //         'status'=>false
    //     ], Response::HTTP_BAD_REQUEST);
    // }


    }

    public function logout(Request $request)
    {
    try {
        $user = $request->user('api');
        if ($user) {
            $user->token()->revoke();
            return response()->json([
                'status' => true,
                'message' => 'Logout successful. Goodbye!',
            ], Response::HTTP_OK);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'User not found or token has already been revoked.',
            ], Response::HTTP_NOT_FOUND);
        }
    } catch (\Exception $e) {
        return response()->json([
            'status' => false,
            'message' => 'Error logging out. Please try again.',
        ], Response::HTTP_BAD_REQUEST);
    }

    }



    public function profile(Request $request)
    {
    $user = $request->user('api');

    return response()->json([
        'status' => true,
        'data' => $user,
    ], Response::HTTP_OK);
    }


    }



