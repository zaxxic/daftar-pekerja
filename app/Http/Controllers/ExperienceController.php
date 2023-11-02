<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\TipePekerjaEnum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ExperienceController extends Controller
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
            'Tempat' => 'required|max:150',
            'JenisPekerjaan' => [
                'required',
                'in:' . implode(',', [
                    TipePekerjaEnum::KONTRAK,
                    TipePekerjaEnum::PERMANEN,
                ]),
            ],
            'NamaProjek' => 'required|max:150',
            'DetailProjek' => 'required',
            'TanggalAwal' => 'required|date|before:today',
            'TanggalAkhir' => [
                'required', 'date',
                function ($attribute, $value, $fail) use ($request) {
                    if ($request->TanggalAwal > $request->TanggalAkhir) {
                        $fail('Tanggal Akhir Wajib Lebih Besar Dari Tanggal Awal');
                    }
                },
            ],
            'Bukti' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ], [
            'Tempat.required' => 'Tempat Wajib Diisi',
            'Tempat.max' => 'Tempat Maksimal 150 karakter',
            'JenisPekerjaan.required' => 'Jenis Pekerjaan Wajib Diisi',
            'JenisPekerjaan.in' => 'Jenis Pekerjaan tidak valid',
            'NamaProjek.required' => 'Nama Projek Wajib Diisi',
            'NamaProjek.max' => 'Nama Projek Maksimal 150 karakter',
            'DetailProjek.required' => 'Detail Projek Wajib Diisi',
            'TanggalAwal.required' => 'Waktu Pengerjaan Wajib Diisi',
            'TanggalAwal.date' => 'Waktu Pengerjaan Tidak Valid',
            'TanggalAkhir.required' => 'Waktu Pengerjaan Wajib Diisi',
            'TanggalAkhir.date' => 'Waktu Pengerjaan Tidak Valid',
            'Bukti.mimes' => 'Format Harus JPG, JPEG atau PNG',
            'Bukti.image' => 'Format Foto Tidak Valid',
            'Bukti.max' => 'Foto Maksimal Berukuran 2048',
        ]);

        // Pastikan folder "public/pengalaman" sudah ada
        if (!file_exists(public_path('pengalaman'))) {
            mkdir(public_path('pengalaman'), 0777, true);
        }

        $bukti = $request->file('Bukti');
        $namaFoto = time() . '.' . $bukti->getClientOriginalExtension(); // Nama file tanpa direktori

        // Simpan file ke lokasi yang diinginkan
        $bukti->move(public_path('pengalaman'), $namaFoto);

        // Simpan data ke dalam database
        Experience::create([
            'user_id' => $user_id,
            'Tempat' => $request->Tempat,
            'JenisPekerjaan' => $request->JenisPekerjaan,
            'NamaProjek' => $request->NamaProjek,
            'TanggalAwal' => $request->TanggalAwal,
            'TanggalAkhir' => $request->TanggalAkhir,
            'DetailProjek' => $request->DetailProjek,
            'Bukti' => $namaFoto,
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
            'Tempat' => 'required|max:150',
            'JenisPekerjaan' => [
                'required',
                'in:' . implode(',', [
                    TipePekerjaEnum::KONTRAK,
                    TipePekerjaEnum::PERMANEN,
                ]),
            ],
            'NamaProjek' => 'required|max:150',
            'DetailProjek' => 'required',
            'TanggalAwal' => 'required|date|before:today',
            'TanggalAkhir' => [
                'required', 'date',
                function ($attribute, $value, $fail) use ($request) {
                    if ($request->TanggalAwal > $request->TanggalAkhir) {
                        $fail('Tanggal Akhir Wajib Lebih Besar Dari Tanggal Awal');
                    }
                },
            ],
            'Bukti' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ], [
            'Tempat.required' => 'Tempat Wajib Diisi',
            'Tempat.max' => 'Tempat Maksimal 150 karakter',
            'JenisPekerjaan.required' => 'Jenis Pekerjaan Wajib Diisi',
            'JenisPekerjaan.in' => 'Jenis Pekerjaan tidak valid',
            'NamaProjek.required' => 'Nama Projek Wajib Diisi',
            'NamaProjek.max' => 'Nama Projek Maksimal 150 karakter',
            'DetailProjek.required' => 'Detail Projek Wajib Diisi',
            'TanggalAwal.required' => 'Waktu Pengerjaan Wajib Diisi',
            'TanggalAwal.date' => 'Waktu Pengerjaan Tidak Valid',
            'TanggalAkhir.required' => 'Waktu Pengerjaan Wajib Diisi',
            'TanggalAkhir.date' => 'Waktu Pengerjaan Tidak Valid',
            'Bukti.mimes' => 'Format Harus JPG, JPEG atau PNG',
            'Bukti.image' => 'Format Foto Tidak Valid',
            'Bukti.max' => 'Foto Maksimal Berukuran 2048',
        ]);

        $experience = Experience::findOrFail($id);

        // Pastikan catatan keahlian ditemukan dan milik pengguna yang saat ini masuk
        if (!$experience || $experience->user_id != $user_id) {
            return redirect()->back()->with('error', 'Catatan keahlian tidak ditemukan atau Anda tidak memiliki izin untuk mengeditnya.');
        }

        $experience->Tempat = $request->Tempat;
        $experience->JenisPekerjaan = $request->JenisPekerjaan;
        $experience->NamaProjek = $request->NamaProjek;
        $experience->TanggalAwal = $request->TanggalAwal;
        $experience->TanggalAkhir = $request->TanggalAkhir;
        $experience->DetailProjek = $request->DetailProjek;

        // Upload dan simpan foto jika ada
        if ($request->hasFile('Bukti')) {
            $foto = $request->file('Bukti');
            $namaFoto = time() . '.' . $foto->getClientOriginalExtension();

            // Simpan foto baru
            $pathToNewFile = public_path('pengalaman/' . $namaFoto);
            $foto->move(public_path('pengalaman'), $namaFoto);

            // Hapus foto lama jika ada
            if ($experience->Bukti) {
                // dd($experience->Bukti);
                $pathToOldFile = public_path('pengalaman/' . $experience->Bukti);
                if (file_exists($pathToOldFile)) {
                    unlink($pathToOldFile);
                }
            }

            $experience->Bukti = $namaFoto;
        }

        $experience->save();


        return redirect()->back()->with('sunting', 'Data Pengalaman Berhasil Diperbarui.');
    }

    public function destroy(string $id)
    {
        // Temukan pengalaman berdasarkan ID atau lemparkan 404 jika tidak ditemukan
        $experience = Experience::find($id);

        // Pastikan bahwa Bukti (nama file) ada
        if ($experience->Bukti) {
            // Hapus "pengalaman/" dari nama file jika ada
            $fileName = str_replace('pengalaman/', '', $experience->Bukti);

            // Bentuk path file yang benar
            $pathToFile = public_path('pengalaman/' . $fileName);

            // Pastikan file ada sebelum mencoba menghapusnya
            if (file_exists($pathToFile)) {
                // Menghapus file
                unlink($pathToFile);

                // Jika file berhasil dihapus, lanjutkan menghapus data pengalaman dari database
                $experience->delete();

                // Redirect atau berikan pesan sukses
                return redirect()->back()->with('delete', 'Data Pengalaman Berhasil Dihapus.');
            } else {
                // File tidak ditemukan, berikan pesan error atau tindakan yang sesuai
                return redirect()->back()->with('gagal', 'File tidak ditemukan.');
            }
        } else {
            // Jika Bukti tidak ada, Anda dapat menghapus data pengalaman dari database tanpa melakukan unlink
            $experience->delete();

            // Redirect atau berikan pesan sukses
            return redirect()->back()->with('delete', 'Data Pengalaman Berhasil Dihapus.');
        }
    }
}
