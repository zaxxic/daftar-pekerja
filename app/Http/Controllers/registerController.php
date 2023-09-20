<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\JenisKelaminEnum;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
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
                'name' => 'required|max:225',
                'email' => 'required|unique:users,email|max:225',
                'alamat' => 'required',
                'jenis_kelamin' => [
                    'required',
                    'in:' . implode(',', [
                        JenisKelaminEnum::LAKI_LAKI,
                        JenisKelaminEnum::PEREMPUAN,
                    ]),
                ],
                'no_telp' => 'required|digits_between:10,13|numeric|regex:/^\d*$/',
                'password' => ['required', 'string', 'min:6', 'confirmed'],
            ],
            [
                'name.required' => 'Nama Wajib Diisi',
                'name.max' => 'Nama tidak boleh lebih dari 255 karakter.',
                'email.max' => 'email tidak boleh lebih dari 255 karakter.',
                'alamat.required' => 'Alamat wajib di isi',
                'email.required' => 'Email Wajib Diisi',
                'email.unique' => 'Email Sudah Terdaftar',
                'jenis_kelamin.required' => 'Jenis Kelamin Wajib Diisi',
                'jenis_kelamin.in' => 'Jenis Kelamin Wajib Diisi',
                'no_telp.digits_between' => 'nomor telepon harus antara 10 sampai 13 digit',
                'no_telp.required' => 'No Telephone Wajib Diisi',
                'no_telp.numeric' => 'No Telephone Wajib Diisi Angka',
                'no_telp.regex' => 'No Telephone Tidak Boleh Minus',
                'password.required' => 'Password harus di isi',
                'password.min' => 'Password minimal 6 huruf',
                'password.confirmed' => 'Konfirmasi kata sandi tidak sesuai.',
                'jenis_kelamin.in' => 'Pilih salah satu dari "laki-laki" atau "perempuan" untuk jenis kelamin.',
            ]
        );

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $defaultFoto = 'default/default.png';
        $defaultLamaran = 'default/default.png'; 
        $defaultCV = 'default/default.png';

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_telp' => $request->no_telp,
            'cv' => $defaultCV,
            'lamaran' => $defaultLamaran,
            'foto' => $defaultFoto,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);

        return redirect('login')->with('success', 'Akun Anda berhasil dibuat. Silakan masuk dengan akun yang baru saja Anda buat.');
    }
}
