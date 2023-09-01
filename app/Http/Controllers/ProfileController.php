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
        $request->validate(
            [
                'current_password' => 'required',
                'new_password' => 'required|min:6|confirmed',
            ],
            [
                'current_password.required' => 'Password Lama Wajib Diisi',
                'new_password.required' => 'Password Baru Wajib Diisi',
                'new_password.min' => 'Password Baru Minimal 6 Huruf',
                'new_password.confirmed' => 'Konfirmasi Password Tidak Valid',
            ]
        );

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

        $request->validate(
            [
                'foto' => 'image|mimes:jpeg,png,jpg|max:5120', // Max size: 5MB
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255|unique:users,email,' . $user->id,
                'no_telp' => 'required|numeric|regex:/^\d*$/',
                'alamat' => 'required|string',
                'lamaran' => 'file|mimes:pdf|max:5120', // Max size: 5MB
                'cv' => 'file|mimes:pdf|max:5120', // Max size: 5MB
            ],
            [
                'foto.image' => 'Foto harus berupa file gambar (jpeg, png, jpg).',
                'foto.mimes' => 'Format foto harus jpeg, png, atau jpg.',
                'foto.max' => 'Ukuran foto tidak boleh lebih dari 5MB.',
                'name.required' => 'Nama harus diisi.',
                'name.string' => 'Format nama tidak valid.',
                'name.max' => 'Nama tidak boleh lebih dari 255 karakter.',
                'email.required' => 'Email harus diisi.',
                'email.email' => 'Format email tidak valid.',
                'email.max' => 'Email tidak boleh lebih dari 255 karakter.',
                'email.unique' => 'Email sudah digunakan oleh pengguna lain.',
                'no_telp.required' => 'Nomor telepon harus diisi.',
                'no_telp.numeric' => 'Nomor telepon harus berupa angka.',
                'no_telp.regex' => 'Format nomor telepon tidak valid.',
                'alamat.required' => 'Alamat harus diisi.',
                'alamat.string' => 'Format alamat tidak valid.',
                'lamaran.file' => 'Lamaran harus berupa file PDF.',
                'lamaran.mimes' => 'Format lamaran harus PDF.',
                'lamaran.max' => 'Ukuran lamaran tidak boleh lebih dari 5MB.',
                'cv.file' => 'CV harus berupa file PDF.',
                'cv.mimes' => 'Format CV harus PDF.',
                'cv.max' => 'Ukuran CV tidak boleh lebih dari 5MB.',
            ]
        );

        // Update user details
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->no_telp = $request->input('no_telp');
        $user->alamat = $request->input('alamat');
        $user->lamaran = $request->input('lamaran');
        $user->cv = $request->input('cv');

        // Update user photo
        if ($request->hasFile('foto')) {
            if ($user->foto) {
                // Menghapus foto lama jika ada
                $oldFotoPath = public_path('storage/foto_user/' . $user->foto);
                if (file_exists($oldFotoPath)) {
                    unlink($oldFotoPath);
                }
            }
            $fotoPath = $request->file('foto')->storeAs('public/foto_user');
            $user->foto = basename($fotoPath); // Mengambil hanya nama file tanpa path
        }

        // Update lamaran and cv files
        if ($request->hasFile('lamaran')) {
            if ($user->lamaran) {
                $oldLamaranPath = public_path('storage/lamaran/' . $user->lamaran);
                if (file_exists($oldLamaranPath)) {
                    unlink($oldLamaranPath);
                }
            }
            $lamaranPath = $request->file('lamaran')->store('lamaran');
            $user->lamaran = basename($lamaranPath);
        }

        if ($request->hasFile('cv')) {
            if ($user->cv) {
                $oldCvPath = public_path('storage/cv/' . $user->cv);
                if (file_exists($oldCvPath)) {
                    unlink($oldCvPath);
                }
            }
            $cvPath = $request->file('cv')->store('cv');
            $user->cv = basename($cvPath);
        }

        $user->save(); // Save the changes to the user model

        return redirect()->back()->with('success', 'Profile berhasil diperbarui.');
    }
}
