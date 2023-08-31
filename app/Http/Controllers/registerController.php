<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\daftar;


class registerController extends Controller
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
                'email' => 'required|email|unique:users,email',
                'alamat' => 'required',
                'jenis_kelamin' => 'required',
                'no_telp' => 'required|numeric|regex:/^\d*$/',
                'cv' => 'required|mimes:pdf',
                'lamaran' => 'required|mimes:pdf',
                'foto' => 'required|mimes:png,jpg,jpeg',
                'password' => ['required', 'string', 'min:6', 'confirmed'],
            ],
            [
                'name.required' => 'Nama Wajib Diisi',
                'alamat.rewuired' => 'Alamat wajib di isi',
                'email.required' => 'Email Wajib Diisi',
                'email.email' => 'Harus Menginputkan Data yang Bertipe Email',
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
                'password.min' => 'Password minimal 6 karakter',
                'password.confirmed' => 'Konfirmasi kata sandi tidak sesuai.',
            ]
        );

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

       

        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $randomFileName = $image->hashName();
            $image->storeAs('foto_user', $randomFileName);
        }
        
        if ($request->hasFile('cv')) {
            $cv = $request->file('cv');
            $randomCvName = $cv->hashName();
            $cv->storeAs('cv', $randomCvName);
        }
        
        if ($request->hasFile('lamaran')) {
            $lamaran = $request->file('lamaran');
            $randomLamaranName = $lamaran->hashName();
            $lamaran->storeAs('lamaran', $randomLamaranName);
        }
        


        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_telp' => $request->no_telp,
            'cv' => $randomCvName,
            'lamaran' => $randomLamaranName,
            'foto' => $randomFileName,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);
        return redirect('login')->with('success', 'Akun Anda berhasil dibuat. Silakan masuk dengan akun yang baru saja Anda buat.');
    }


}
