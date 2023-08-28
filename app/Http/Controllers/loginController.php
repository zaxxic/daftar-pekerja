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
            // Jika autentikasi berhasil
            return redirect()->intended('/dashboard'); // Ganti '/dashboard' dengan rute dashboard Anda
        } else {
            // Jika autentikasi gagal
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
}
