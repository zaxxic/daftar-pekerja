<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Registration;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\daftar;

class PekerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $keyword = $request->cari;
            $user = User::where('name', 'LIKE', '%' . $keyword . '%')
                        ->where('status', 'diterima')
                        ->paginate(8);

            $user->appends(['cari' => $keyword]);
            return view('admin-pekerja.pekerja.index', compact('user'));
        }

        $user = User::where('status', 'diterima')->latest()->paginate(8);
        return view('admin-pekerja.pekerja.index', compact('user'));
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
        //
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
        $this->validate(
            $request,
            [
                'pesan' => 'required',
            ],
            [
                'pesan.required' => 'Pesan Wajib Diisi',
            ]
        );

        $user = User::find($id);

        $pesan = new Message([
            'pesan' => $request->pesan,
        ]);

        $user->message()->save($pesan);
        $data = Registration::where('users_id',$id)->first();
        $data->delete();
        $user->update([
            'status' => 'ditolak',
        ]);
        $datas =   [
            'pesan' => "Akun anda di nonaktifkan ",
            'status' => "nonaktif",
            'judul' => " Anda di nonkatifkan karena alasan ". $request->pesan . " dan anda bisa daftar di lowongan lainnya"
            ];

        Mail::to($user->email)->send(new daftar($datas));

        return redirect()->route('pekerja')->with('sukses', 'Data Berhasil Di Perbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
