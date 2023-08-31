<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class loginController extends Controller
{
    public function index(){
        return view('autentikasi.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role === 'admin') {
                return redirect()->intended('dashboard-admin');
            } elseif ($user->role === 'user') {
                return redirect()->intended('dashboard-user');
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
            return redirect('login'); // Ganti '/dashboard' dengan rute dashboard Anda
        }
        return view('auth.login'); // Ganti 'auth.login' dengan nama tampilan login Anda
    }

    public function logout()
    {
        Auth::logout();
    
        // Menghapus semua data sesi yang terkait dengan pengguna
        Session::flush();
    
        return redirect('/'); // Ganti '/' dengan rute yang sesuai setelah logout
    }
}
