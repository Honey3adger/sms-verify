<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:3|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => [
                'required',
                'string',
                'min:8',
                'regex:/[A-Z]/',
                'regex:/[a-z]/',
                'regex:/[0-9]/',
                'regex:/[!@#$%^&*()_+\-=\[\]{};:\'"\\|,.<>\/?]/',
            ],
            'confirm_password' => 'required|same:password',
        ]);

        $validator->after(function ($validator) use ($request) {
            $password = $request->password;

            if (!preg_match('/[A-Z]/', $password)) {
                $validator->errors()->add('password', 'The password must contain at least one uppercase letter.');
            }

            if (!preg_match('/[a-z]/', $password)) {
                $validator->errors()->add('password', 'The password must contain at least one lowercase letter.');
            }

            if (!preg_match('/[0-9]/', $password)) {
                $validator->errors()->add('password', 'The password must contain at least one numeric digit.');
            }

            if (!preg_match('/[!@#$%^&*()_+\-=\[\]{};\'":\\|,.<>\/?]/', $password)) {
                $validator->errors()->add('password', 'The password must contain at least one special character.');
            }
        });




        if ($validator->fails()) {
            return response()->json(['message' => 'Validation fails', 'error' => $validator->errors()], 422);
        }

        $user = User::create([
            'name' => $request->name,
            'username' => strtolower($request->username),
            'email' => strtolower($request->email),
            'password' => Hash::make($request->password),
            'status' => 'active',
        ]);

        if ($user) {
            return response()->json(['message' => 'Registration successfully', 'data' => $user], 201);
        } else {
            return response()->json(['message' => 'Registration fails', 'error' => 'Registration fails'], 400);
        }
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email_or_username' => 'required|string',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'Validation fails', 'error' => $validator->errors()], 422);
        }

        $user = User::where('email', $request->email_or_username)->orWhere('username', $request->email_or_username)->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $token = $user->createToken('authToken')->plainTextToken;
                return response()->json(['message' => 'Login successfully', 'token' => $token, 'data' => $user], 200);
            } else {
                return response()->json(['message' => 'Password not match', 'error' => 'Password not match'], 401);
            }
        } else {
            return response()->json(['message' => 'User not found', 'error' => 'User not found'], 404);
        }
    }

    public function user(Request $request)
    {
        return response()->json(['message' => 'user successfully fetched', 'data' => $request->user()], 200);
    }

    public function logout(Request $request)
    {
        $request->user()->CurrentAccessToken()->delete();
        return response()->json(['message' => 'user successfully logged out'], 200);
    }
}
