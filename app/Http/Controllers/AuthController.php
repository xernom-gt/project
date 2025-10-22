<?php

namespace App\Http\Controllers;

use app\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function register(Request $request){
        $validated = $request->validate([
            'username' =>'required|unique:accounts',
            'email' =>'required|email|unique:accounts',
            'password' =>'required|min:8',
            'role_id'=>'required|exists:roles,id'
        ]);

        $account = Account::create([
            'username' => $validated['username'],
            'email' => $validated['email'],
            'password'=>Hash::make($validated['password']),
            'role_id' =>$validated['role_id'],
        ]);

        return response()->json()([
            'message'=>'Account Created',
            'user'=>$account->load('role'),
        ],201);
    }
}
