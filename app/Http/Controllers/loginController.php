<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class loginController extends Controller
{
    public function index()
    {
        return view('autentikasi.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|exists:users,email|max:255',
            'password' => 'required|min:6|max:255',
        ], [
            'email.required' => 'Email Wajib Diisi',
            'email.exists' => 'Email Yang Anda Masukkan Belum Terdaftar !!',
            'email.email' => 'Harus Menginputkan Data yang Bertipe Email',
            'email.max' => 'makasimal inputan adalah 255',
            'password.max' => 'maksimal inputan adalah 255',
            'password.required' => 'Password harus di isi',
            'password.min' => 'Password minimal 6 karakter',

        ]);
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

    public function showForgetPassword()
    {
        return view('autentikasi.forget_password');
    }

    public function forgetPassword(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with('status', __($status))
            : back()->withErrors(['email' => __($status)]);
    }

    public function showResetPasswordForm($token)
    {
        return view('auth.reset-password', ['token' => $token]);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
            'token' => 'required',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => bcrypt($password),
                ])->save();
            }
        );

        return $status == Password::PASSWORD_RESET
            ? redirect()->route('login')->with('success', 'Password has been reset!')
            : back()->withErrors(['email' => [__($status)]]);
    }
}
