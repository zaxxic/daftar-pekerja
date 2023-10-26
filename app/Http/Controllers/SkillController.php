<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SkillController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user_id = Auth::id();

        $this->validate($request, [
            'judul' => 'required|max:150',
            'deskripsi_keahlian' => 'required',
        ], [
            'judul.required' => 'Judul Wajib Diisi',
            'judul.max' => 'Judul Maksimal 150 Karakter',
            'deskripsi_keahlian.required' => 'Deskripsi Wajib Diisi',
        ]);

        Skill::create([
            'user_id' => $user_id,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi_keahlian
        ]);
        return redirect()->back()->with('add', 'Keahlian Berhasil Ditambahkan.');
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

        // Validasi data yang diterima dari request
        $this->validate($request, [
            'judul' => 'required|max:150',
            'deskripsi_keahlian' => 'required',
        ], [
            'judul.required' => 'Judul Wajib Diisi',
            'judul.max' => 'Judul Maksimal 150 Karakter',
            'deskripsi_keahlian.required' => 'Deskripsi Wajib Diisi',
        ]);

        // Cari catatan keahlian berdasarkan ID
        $skill = Skill::find($id);

        // Pastikan catatan keahlian ditemukan dan milik pengguna yang saat ini masuk
        if (!$skill || $skill->user_id != $user_id) {
            return redirect()->route('profileuser')->with('error', 'Catatan keahlian tidak ditemukan atau Anda tidak memiliki izin untuk mengeditnya.');
        }

        // Update catatan keahlian
        $skill->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi_keahlian
        ]);

        return redirect()->back()->with('update', 'Keahlian Berhasil Diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Cari catatan keahlian berdasarkan ID
        $skill = Skill::find($id);

        // Pastikan catatan keahlian ditemukan
        if (!$skill) {
            return redirect()->back()->with('error', 'Catatan keahlian tidak ditemukan.');
        }

        // Hapus catatan keahlian
        $skill->delete();

        return redirect()->back()->with('delete', 'Keahlian berhasil dihapus.');
    }
}
