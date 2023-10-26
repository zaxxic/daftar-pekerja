<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user_id = Auth::id();

        $this->validate($request, [
            'judul' => 'required|max:150',
            'deskripsi_sertifikat' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ], [
            'judul.required' => 'Tempat Wajib Diisi',
            'judul.max' => 'Tempat Maksimal 150 karakter',
            'deskripsi_sertifikat.required' => 'Jenis Pekerjaan Wajib Diisi',
            'foto.required' => 'Bukti Wajib Diisi',
            'foto.mimes' => 'Format Harus JPG, JPEG atau PNG',
            'foto.image' => 'Format Foto Tidak Valid',
            'foto.max' => 'Foto Maksimal Berukuran 2048',
        ]);

        // Pastikan folder "public/pengalaman" sudah ada
        if (!file_exists(public_path('sertifikat'))) {
            mkdir(public_path('sertifikat'), 0777, true);
        }

        $bukti = $request->file('foto');
        $namaFoto = time() . '.' . $bukti->getClientOriginalExtension(); // Nama file tanpa direktori

        // Simpan file ke lokasi yang diinginkan
        $bukti->move(public_path('sertifikat'), $namaFoto);

        // Simpan data ke dalam database
        Certificate::create([
            'user_id' => $user_id,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi_sertifikat,
            'foto' => $namaFoto,
        ]);

        return redirect()->back()->with('tambah', 'Data Pengalaman Berhasil Ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user_id = Auth::id();

        $this->validate($request, [
            'judul' => 'required|max:150',
            'deskripsi_sertifikat' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ], [
            'judul.required' => 'Tempat Wajib Diisi',
            'judul.max' => 'Tempat Maksimal 150 karakter',
            'deskripsi_sertifikat.required' => 'Jenis Pekerjaan Wajib Diisi',
            'foto.mimes' => 'Format Harus JPG, JPEG atau PNG',
            'foto.image' => 'Format Foto Tidak Valid',
            'foto.max' => 'Foto Maksimal Berukuran 2048',
        ]);

        $experience = Certificate::findOrFail($id);

        // Pastikan catatan keahlian ditemukan dan milik pengguna yang saat ini masuk
        if (!$experience || $experience->user_id != $user_id) {
            return redirect()->route('profileuser')->with('error', 'Catatan keahlian tidak ditemukan atau Anda tidak memiliki izin untuk mengeditnya.');
        }

        $experience->judul = $request->judul;
        $experience->deskripsi = $request->deskripsi_sertifikat;

        // Upload dan simpan foto jika ada
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $namaFoto = time() . '.' . $foto->getClientOriginalExtension();

            // Simpan foto baru
            $pathToNewFile = public_path('sertifikat/' . $namaFoto);
            $foto->move(public_path('sertifikat'), $namaFoto);

            // Hapus foto lama jika ada
            if ($experience->foto) {
                // dd($experience->foto);
                $pathToOldFile = public_path('sertifikat/' . $experience->foto);
                if (file_exists($pathToOldFile)) {
                    unlink($pathToOldFile);
                }
            }

            $experience->foto = $namaFoto;
        }

        $experience->save();


        return redirect()->back()->with('sunting', 'Data Pengalaman Berhasil Diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Temukan pengalaman berdasarkan ID atau lemparkan 404 jika tidak ditemukan
        $certificate = Certificate::find($id);

        // Pastikan bahwa Bukti (nama file) ada
        if ($certificate->foto) {
            // Hapus "pengalaman/" dari nama file jika ada
            $fileName = str_replace('sertifikat/', '', $certificate->foto);

            // Bentuk path file yang benar
            $pathToFile = public_path('sertifikat/' . $fileName);

            // Pastikan file ada sebelum mencoba menghapusnya
            if (file_exists($pathToFile)) {
                // Menghapus file
                unlink($pathToFile);

                // Jika file berhasil dihapus, lanjutkan menghapus data pengalaman dari database
                $certificate->delete();

                // Redirect atau berikan pesan sukses
                return redirect()->back()->with('delete', 'Data Pengalaman Berhasil Dihapus.');
            } else {
                // File tidak ditemukan, berikan pesan error atau tindakan yang sesuai
                return redirect()->back()->with('gagal', 'File tidak ditemukan.');
            }
        } else {
            // Jika Bukti tidak ada, Anda dapat menghapus data pengalaman dari database tanpa melakukan unlink
            $certificate->delete();

            // Redirect atau berikan pesan sukses
            return redirect()->back()->with('delete', 'Data Pengalaman Berhasil Dihapus.');
        }
    }
}
