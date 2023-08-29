<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function index()
    {
        return view('autentikasi.register');
    }

    public function store(Request $request)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'email' => 'required|unique:users,email',
                'alamat' => 'required',
                'jenis_kelamin' => 'required',
                'no_telp' => 'required|numeric|regex:/^[0-9]+$/',
                'cv' => 'required|mimes:pdf',
                'lamaran' => 'required|mimes:pdf',
                'foto' => 'required|mimes:png,jpg,jpeg',
                'password' => ['required', 'string', 'min:3', 'confirmed'],
            ],
            [
                'name.required' => 'Nama Wajib Diisi',
                
                'email.required' => 'Email Wajib Diisi',
                'email.unique' => 'Email Sudah Terdaftar',
                'jenis_kelamin.required' => 'Jenis Kelamin Wajib Diisi',
                'no_telp.required' => 'No Telephone Wajib Diisi',
                'no_telp.numeric' => 'No Telephone Wajib Diisi Angka',
                'no_telp.regex' => 'No Telephone Tidak Boleh Minus',
                'cv.required' => 'CV Wajib Diisi',
                'cv.mimes' => 'CV Harus Berformat PDF',
                'lamaran.required' => 'Lamaran Wajib Diisi',
                'lamaran.mimes' => 'Lamaran Harus Berformat PDF',
                'foto.required' => 'Foto Diri Wajib Diisi',
                'foto.mimes' => 'Foto Diri Harus Berformat JPG,PNG,JPEG',
                'password.required' => 'Password harus di isi',
                'password.min' => 'Password minimal 3 huruf',
                'password.confirmed' => 'Konfirmasi kata sandi tidak sesuai.',
            ]
        );

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $image = $request->file('foto');
        $image->storeAs('public/foto_user', $image->hashName());

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_telp' => $request->no_telp,
            'cv' => $request->cv,
            'lamaran' => $request->lamaran,
            'foto' => $image,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);
        return redirect('register')->with('success', 'Tunggu akun anda diterima ketika sudah di kirim email');
    }
}
