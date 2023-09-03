<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    /**
     * Show the form to request a password reset link.
     *
     * @return \Illuminate\View\View
     */
    public function showLinkRequestForm()
    {
        return view('autentikasi.forget_password');
    }

    /**
     * Send a reset link to the given user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ],
        [
            'email.required' => 'Email Wajib Diisi',
            'email.email' => 'Email Tidak Valid'
        ]);
    
        $status = Password::broker()->sendResetLink(
            $request->only('email')
        );
    
        if ($status == Password::RESET_LINK_SENT) {
            $message = 'Berhasil mengirim email, silakan lihat pesan email Anda.';
            return redirect()->back()->with('success', $message);
        } else {
            $errorMessage = 'Gagal mengirim email. Silakan periksa kembali alamat email Anda.';
            return redirect()->back()->withErrors(['email' => $errorMessage]);
        }
    }
}
