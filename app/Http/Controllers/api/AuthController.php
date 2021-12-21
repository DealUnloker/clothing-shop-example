<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $user = User::create([
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);

        $token = $user->createToken('usertoken')->accessToken;

        return response(['access_token' => $token], 200);
    }

    public function login(Request $request)
    {
        $login = $request->validate([
            'email' => "required|string",
            'password' => 'required|string'
        ]);

        if (!Auth::attempt($login)) {
            return response(['message' => 'Invalid log cred']);
        }

        $token = Auth::user()->createToken('usertoken')->accessToken;

        return response(['access_token' => $token]);
    }

    public function user()
    {
        return response(Auth::user(), 200);
    }

    public function update_user(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $data = $request->only(['address', 'email', 'first_name', 'second_name']);
        $user->address = $data['address'];
        $user->email = $data['email'];
        $user->first_name = $data['first_name'];
        $user->second_name = $data['second_name'];
        $user->save();
        return $user;
    }
}
