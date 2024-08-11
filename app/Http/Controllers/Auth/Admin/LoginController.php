<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $admin = Admin::where('email',$request->email)->first();

        if (!$admin || !Hash::check($request->password, $admin->password)){
            throw ValidationExecption::withMessage([
                'email' => ['The Provided credentials are incorrect.'],
            ]);
        }
        $token = $admin->createToken('admin', ['role:admin'])->plainTextToken;

        return response()->json([
            'user' => $admin,
            'token' => $token
        ]);
    }
}
