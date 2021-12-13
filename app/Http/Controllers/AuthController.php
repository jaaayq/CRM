<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //API LOGIN FUNCTION 
    public function login(Request $request)
    {



        $request->validate([
            'username' => 'required',
            'password' => 'required',

        ]);



        $user = User::where('username', $request->username)->first();
        // print_r($data);
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response([
                'message' => ['These credentials do not match our records.']
            ], 404);
        }

        $token = $user->createToken('my-app-token')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }


    //DELETE TOKEN AFTER LOGOUT
    public function logout(Request $request)
    {

        //  auth()->user()->tokens()->delete();


        return [
            'message' => 'Logged out'
        ];
    }
}
