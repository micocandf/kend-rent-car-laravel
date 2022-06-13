<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;
use App\Models\User;
use App\Models\Transaction;
use App\Models\Car;
use App\Models\Bank;
use Illuminate\Support\Facades\Hash;
use Validator, Input, Redirect;

class AuthController extends Controller
{

    public function createCustomer(Request $request)
    {
        $user = new user;
        $user->role = 'customer';
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->phone_number = $request->phone_number;
        $user->address = $request->address;
        $user->save();
            return response()->json([
                'message' => null,
                'data' => $user,
            ],200);
    }

    public function login(Request $request) {
        
        $user = User::Where('email', $request->email)->first();
        
        if (! $user || ! Hash::check($request->password, $user->password)) {
            return response()->json([
                'message' => 'Unauthorized',
            ], 401);
        }
        $token = $user->createToken('token')->plainTextToken;
        return response()->json([
                'user' => $user,
                'token' => $token,
            ],200);
    }
    
    public function me() {
        $user = Auth::user();
        // $user->currentAccessToken()->delete();

        return response()->json($user, 200);
    }


    public function logout(Request $request) {
        $user = $request->user();
        $user->currentAccessToken()->delete();

        return response()->json([
            'message' => 'success',
        ], 200);
    }

    public function logoutall(Request $request) {
        $user = $request->user();
        $user->tokens()->delete();
        
        return response()->json(['message' => 'Logout successfully'], 200);
    }
}