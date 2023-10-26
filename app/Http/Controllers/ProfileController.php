<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Schoolcreate;
use App\Http\Requests\SchoolEdit;
use App\Models\Certificate;
use App\Models\Registration;
use App\Models\School;
use App\Models\Vacancy;

class ProfileController extends Controller
{
    function showProfile()
    {
        $user = User::find(auth()->user()->id);
        $skill = Skill::where('user_id', $user->id)->get();
        $experience = Experience::where('user_id', $user->id)->get();
        $School = School::where('user_id', Auth()->user()->id)->get();
        $lowongan = Vacancy::where('status', 'aktif')->get();
        $Pendaftaran = Registration::where('users_id', Auth()->User()->id)->get();
        $certificate = Certificate::where('user_id', $user->id)->get();
        $wsds = null;
        $progesBar = [
            'dataUser' => $user,
            'FotoDanFile' => (
                ((isset($user->foto) && $user->foto !== 'default/default.png') &&
                 (isset($user->cv) && $user->cv !== 'default/default.png') &&
                 (isset($user->lamaran) && $user->lamaran !== 'default/default.png')) ?
                ($user->foto . $user->cv . $user->lamaran) :
                null
            ),
            'Tentang' => $user->deskripsi,
            'Skill' => (count($skill) >= 1 ? $skill : null),
            'school' =>(count($School) >= 1 ? $School : null),
            'sertifikat' => (count($certificate) >= 1 ? $certificate : null),
            'pengalaman' =>(count($experience) >= 1 ? $experience : null),
        ];
        $jumlahData = 0;

        foreach ($progesBar as $key => $value) {
            if (!is_null($value)) {
                $jumlahData++;
            }
        }



        return view('user.profile-user', compact('user', 'skill', 'experience','School','lowongan','Pendaftaran','certificate','jumlahData'));
    }

    function profileuser()
    {
        $user = User::find(auth()->user()->id);
        $skill = Skill::where('user_id', $user->id)->get();
        $experience = Experience::where('user_id', $user->id)->get();
        $School = School::where('user_id', Auth()->user()->id)->get();
        $lowongan = Vacancy::where('status', 'aktif')->get();
        $Pendaftaran = Registration::where('users_id', Auth()->User()->id)->get();
        $certificate = Certificate::where('user_id', $user->id)->get();
        $wsds = null;
        $progesBar = [
            'dataUser' => $user,
            'FotoDanFile' => (
                ((isset($user->foto) && $user->foto !== 'default/default.png') &&
                 (isset($user->cv) && $user->cv !== 'default/default.png') &&
                 (isset($user->lamaran) && $user->lamaran !== 'default/default.png')) ?
                ($user->foto . $user->cv . $user->lamaran) :
                null
            ),
            'Tentang' => $user->deskripsi,
            'Skill' => (count($skill) >= 1 ? $skill : null),
            'school' =>(count($School) >= 1 ? $School : null),
            'sertifikat' => (count($certificate) >= 1 ? $certificate : null),
            'pengalaman' =>(count($experience) >= 1 ? $experience : null),
        ];
        $jumlahData = 0;

        foreach ($progesBar as $key => $value) {
            if (!is_null($value)) {
                $jumlahData++;
            }
        }



        return view('user.djsjd', compact('user', 'skill', 'experience','School','lowongan','Pendaftaran','certificate','jumlahData'));


    }

    public function updatePassword(Request $request)
    {
        $request->validate(
            [
                'current_password' => [
                    'required',
                    function ($attribute, $value, $fail) {
                        if (!Hash::check($value, Auth()->user()->password)) {
                            return $fail(__('Password Lama tidak benar.'));
                        }
                    },
                ],
                'new_password' => 'required|min:6|max:12|confirmed',
            ],
            [
                'current_password.required' => 'Password Lama Wajib Diisi',
                'new_password.required' => 'Password Baru Wajib Diisi',
                'new_password.min' => 'Password Baru Minimal 6 Huruf',
                'new_password.max' => 'Password Baru Maximal 12 Huruf',
                'new_password.confirmed' => 'Konfirmasi Password Tidak Valid',
            ]
        );

        $user = Auth::user();

        // Memeriksa apakah password lama sesuai.
        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->with('error', 'Password lama anda tidak sesuai');
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
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255|unique:users,email,' . $user->id,
                'no_telp' => 'required|numeric|regex:/^\d*$/|digits_between:10,13',
                'alamat' => 'required|string|max:225',
                'lamaran' => 'file|mimes:pdf|max:5120', // Max size: 5MB
                'cv' => 'file|mimes:pdf|max:5120', // Max size: 5MB
                'url_Github' => [
                    'nullable',
                    'url',
                    function ($attribute, $value, $fail) {
                        // Mengekstrak nama host dari URL
                        $host = parse_url($value, PHP_URL_HOST);

                        // Memeriksa apakah host adalah github.com
                        if ($host !== 'github.com') {
                            $fail('Link yang anda masukan bukan URL GitHub yang valid.');
                        }
                    },
                ],
                'url_likedIn' => [
                    'nullable',
                    'url',
                    function ($attribute, $value, $fail) {
                        // Mengekstrak nama host dari URL
                        $host = parse_url($value, PHP_URL_HOST);

                        // Memeriksa apakah host adalah linkedin.com
                        if ($host !== 'www.linkedin.com' && $host !== 'linkedin.com') {
                            $fail('Link yang anda masukan bukan URL LinkedIn yang valid.');
                        }
                    },
                ],
            ],
            [
                'name.required' => 'Nama harus diisi.',
                'no_telp.digits_between' => 'nomor telepon harus antara 10 sampai 13 digit',
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
                'alamat.max' => 'Alamat maksimal 225 hurus',
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
        $user->LinkedIn = $request->input('url_likedIn');
        $user->GitHub = $request->input('url_Github');


        // Update lamaran and cv files
        if ($request->hasFile('lamaran')) {
            $lamaran = $request->file('lamaran');
            $lamaranFileName = time() . '.' . $lamaran->getClientOriginalExtension();
            $lamaran->move(public_path('lamaran'), $lamaranFileName);

            if ($user->lamaran && file_exists(public_path('lamaran/' . $user->lamaran))) {
                unlink(public_path('lamaran/' . $user->lamaran));
            }

            $user->lamaran = $lamaranFileName;
        }

        if ($request->hasFile('cv')) {
            // Simpan file CV ke direktori yang sesuai
            $cv = $request->file('cv');
            $cvFileName = time() . '.' . $cv->getClientOriginalExtension();
            $cv->move(public_path('cv'), $cvFileName);

            // Hapus CV lama jika ada
            if ($user->cv && file_exists(public_path('cv/' . $user->cv))) {
                unlink(public_path('cv/' . $user->cv));
            }

            // Update kolom 'cv' pada model User atau Registration
            // Sesuaikan dengan model yang Anda gunakan
            $user->cv = $cvFileName;
        }


        $user->save(); // Save the changes to the user model

        return redirect()->back()->with('success', 'Profile berhasil diperbarui.');
    }

    public function updateFoto(Request $request)
    {
        $user = Auth::user();

        // Validasi file yang diunggah (misalnya, tipe file, ukuran maksimal, dll.)
        $request->validate(
            [
                'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Ganti sesuai kebutuhan Anda
            ],
            [
                'foto.required' => 'Foto Profile Wajib Diisi',
                'foto.image' => 'Format Foto Profile Tidak Valid',
                'foto.mimes' => 'Foto Profile Wajib Berformat JPG, JPEG dan PNG',
                'foto.max' => 'Foto Profile Maksimal Berukuran 2048',
            ]
        );

        // Simpan file foto ke direktori yang sesuai
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('foto_user'), $fileName);

            // Hapus foto lama jika ada
            if ($user->foto && file_exists(public_path('foto_user/' . $user->foto))) {
                unlink(public_path('foto_user/' . $user->foto));
            }

            // Update kolom 'foto' pada model User atau Registration
            // Sesuaikan dengan model yang Anda gunakan
            $user->foto = $fileName;
            $user->save();
        }

        // Redirect kembali ke halaman profil
        return redirect()->route('profile')->with('success', 'Foto berhasil diunggah.');
    }

    public function summary(Request $request)
    {
        $user = auth()->user(); // Mendapatkan user yang sedang login
        $deskripsi = $request->input('deskripsi');

        $request->validate(
            [
                'deskripsi' => 'required|max:1000', // Ganti sesuai kebutuhan Anda
            ],
            [
                'deskripsi.required' => 'Deskripsi Wajib Diisi',
                'deskripsi.max' => 'Deskripsi Maksimal 250 Karakter'
            ]
        );

        // Cek apakah user sudah memiliki deskripsi
        $existingSummary = $user->deskripsi;

        if (!empty($existingSummary)) {
            // Jika user sudah memiliki deskripsi, update deskripsi yang ada
            $user->update(['deskripsi' => $deskripsi]);
        } else {
            // Jika user belum memiliki deskripsi, buat deskripsi baru
            $user->update(['deskripsi' => $deskripsi]);
        }

        return redirect()->back()->with('success', 'Deskripsi berhasil disimpan.');
    }

    public function School(Schoolcreate $request)
    {
        School::create([
            'user_id' => Auth()->user()->id,
            'NamaSekolah' => $request->NamaSekolah,
            'Jurusan' => $request->Jurusan ?? null,
            'TanggalAwal' => $request->TanggalAwal,
            'TanggalAkhir' => $request->TanggalAkhir,
            'Tingkatan' => $request->Tingkatan
        ]);
        return redirect()->back()->with('BerhasilPendidikan', 'berhasil manambah pendidikan');
    }
    public function EditSchool($id, SchoolEdit $request)
    {
        $School = School::FindOrFail($id);
        if ($School->user_id !== Auth()->user()->id) {
            return response()->json(['message' => 'Not Found'], 404);
        }
        $School->update([
            'NamaSekolah' => $request->NamaSekolah,
            'Jurusan' => $request->Jurusan ?? null,
            'TanggalAwal' => $request->TanggalAwal,
            'TanggalAkhir' => $request->TanggalAkhir,
        ]);
        return response()->json(['pesan'=> 'berhasil merubah pendidikan', 'status' => 'berhasil']);
    }
    public function DataPendidikan($id)
    {
        $user = School::FindOrFail($id);
        return response()->json(['user' => $user]);
    }
    public function DeletePendidikan($id) {

        $data = School::FindOrFail($id);
        if ($data->user_id != Auth()->User()->id){
            return response()->json(['message' => 'Not Found'], 404);
        }
        $data->delete();

        return response()->json(['pesan'=> 'berhasil Menghapus pendidikan', 'status' => 'berhasil']);
    }



}
