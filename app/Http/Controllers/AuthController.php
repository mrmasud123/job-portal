<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        
        $user = User::create([
            'name' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
           
        ]);

        $token = JWTAuth::fromUser($user);
        
        return redirect()->route('dashboard')
            ->withCookie('jwt_token', $token, 60 * 24 * 7); 
    }

    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (!$token = auth('api')->attempt($credentials)) {
        return back()->withErrors(['error' => 'Invalid credentials']);
    }

    // Set JWT in cookie
    return redirect()->route('dashboard')
        ->withCookie(cookie('jwt_token', $token, 60*24)); // 1 day
}

    public function logout()
    {
        JWTAuth::invalidate(JWTAuth::getToken());
        
        return redirect()->route('login')
            ->withCookie('jwt_token', '', -1);
    }
}