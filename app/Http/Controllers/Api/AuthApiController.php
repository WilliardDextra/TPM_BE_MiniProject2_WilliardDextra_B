<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthApiController extends Controller
{
    // Function register
    public function Register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8'
        ]);

        $MyData = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ];

        try {
            $user = User::create($MyData);
        } catch (\Illuminate\Database\QueryException $error) {
            return response([
                'success' => false,
                'message' => 'Failed to register user',
                'error' => $error->getMessage()
            ], 500);
        }

        $token = $user->createToken('MyApp')->accessToken;
        return response()->json(['user' => $user, 'accesstoken' => $token], 201);
    }

    public function Login(Request $request)
    {
        $loginData = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $loginData['email'])->first();

        if (!$user || !Hash::check($loginData['password'], $user->password)) {
            return response()->json(['error' => 'Your credential is not valid'], 401);
        }

        $token = $user->createToken('MyApp')->accessToken;

        return response()->json(['user' => $user, 'accesstoken' => $token], 200);
    }

    public function Logout(Request $request)
    {
        try {
            if ($request->user()->token()) {
                $request->user()->token()->revoke();
            }
            return response()->json([
                'success' => true,
                'message' => 'Logged out successfully'
            ], 200);
        } catch (\Exception $error) {
            return response()->json([
                'success' => false,
                'message' => 'Logout failed',
                'error' => $error->getMessage()
            ], 500);
        }
    }
}
