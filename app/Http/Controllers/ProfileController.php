<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    function showProfile()
    {
        $user = User::find(auth()->user()->id); // Ganti dengan model dan kolom yang sesuai untuk mengambil data pengguna

        return view('user.profile', compact('user'));
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        $user = Auth::user();

        // Memeriksa apakah password lama sesuai
        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->with('error', 'Password lama salah');
        }

        // Memperbarui password baru
        $user->password = Hash::make($request->new_password);
        $user->save(); // Menggunakan metode save() untuk menyimpan perubahan

        return redirect()->back()->with('success', 'Password berhasil diperbarui');
    }
}
