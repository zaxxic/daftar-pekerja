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
            'new_password' => 'required|min:6|confirmed',
        ],
        [
            'current_password.required' => 'Password Lama Wajib Diisi',
            'new_password.required' => 'Password Baru Wajib Diisi',
            'new_password.min' => 'Password Baru Minimal 6 Huruf',
            'new_password.confirmed' => 'Konfirmasi Password Tidak Valid',
        ]);

        $user = Auth::user();

        // Memeriksa apakah password lama sesuai.
        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->with('error', 'Password lama salah');
        }

        // Memperbarui password baru
        $user->password = Hash::make($request->new_password);
        $user->save(); // Menggunakan metode save() untuk menyimpan perubahan

        return redirect()->back()->with('success', 'Password berhasil diperbarui');
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'foto' => 'image|mimes:jpeg,png|max:5120', // Max size: 5MB
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'no_telp' => 'required|string|max:20',
            'alamat' => 'required|string',
            'lamaran' => 'file|mimes:pdf|max:5120', // Max size: 5MB
            'cv' => 'file|mimes:pdf|max:5120', // Max size: 5MB
        ]);

        // Update user details
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->no_telp = $request->input('no_telp');
        $user->alamat = $request->input('alamat');

        // Update user photo
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('profile_photos', 'public');
            $user->photo = $fotoPath;
        }

        // Update lamaran and cv files
        if ($request->hasFile('lamaran')) {
            $lamaranPath = $request->file('lamaran')->store('application_files', 'public');
            $user->lamaran = $lamaranPath;
        }

        if ($request->hasFile('cv')) {
            $cvPath = $request->file('cv')->store('cv_files', 'public');
            $user->cv = $cvPath;
        }

        $user->save();

        return redirect()->route('profile')->with('success', 'Profile berhasil diperbarui.');
    }
}
