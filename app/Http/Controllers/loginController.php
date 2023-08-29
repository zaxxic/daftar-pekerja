<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class loginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role === 'admin') {
                return redirect()->intended('/');
            } elseif ($user->role === 'user') {
                return redirect()->intended('/profile');
            } else {
                // Role tidak dikenali, lakukan sesuatu sesuai kebijakan Anda
                Auth::logout();
                return back()->withErrors(['email' => 'Role tidak valid']);
            }
        } else {
            return back()->withErrors(['email' => 'Email atau password salah']);
        }
    }



    function showLogin()
    {

        if (Auth::check()) {
            return redirect('/'); // Ganti '/dashboard' dengan rute dashboard Anda
        }

        return view('auth.login'); // Ganti 'auth.login' dengan nama tampilan login Anda
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/'); // Ganti '/' dengan rute yang sesuai setelah logout
    }
}
