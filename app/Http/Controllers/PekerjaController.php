<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Registration;
use App\Models\Devision;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\daftar;
use App\Models\Division;

class PekerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $divisi = Division::where('status', ['aktif', 'nonaktif'])->get();
        $keyword = $request->input('cari');
        $value_filter  = $request->input('filter');

        if ($request->has('cari')) {
            $keyword = $request->cari;
            $user = Registration::whereHas('user', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%' . $keyword . '%');
            })->whereHas('vacancy', function ($query) {
                $query->where('status', '=', 'aktif'); // Filter berdasarkan status lowongan 'aktif'
            })->where('status', 'diterima')
                ->paginate(8);

            $user->appends(['cari' => $keyword]);
        } else if ($request->has('filter')) {
            $keyword = $request->filter;
            $user = Registration::whereHas('user', function ($query) use ($keyword) {
                $query->where('devision_id', 'LIKE', '%' . $keyword . '%');
            })->whereHas('vacancy', function ($query) {
                $query->where('status', '=', 'aktif'); // Filter berdasarkan status lowongan 'aktif'
            })->where('status', 'diterima')
                ->paginate(8);

            $value_filter = $keyword;
            $user->appends(['filter' => $keyword]);
            $keyword = "";
        } else {
            $user = Registration::whereHas('vacancy', function ($query) {
                $query->whereIn('status', ['aktif', 'nonaktif']); // Filter berdasarkan status lowongan 'aktif'
            })->where('status', 'diterima')
                ->paginate(8);
        }

        return view('admin-pekerja.pekerja.index', compact('user', 'keyword', 'divisi', 'value_filter'));
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
        $user->update([
            'status' => 'menunggu',
            'tanggal_wawancara' => null,
            'devision_id' => null
        ]);
        $data = Registration::where('users_id', $id)->first();
        $data->update([
            'status' => 'nonaktif'
        ]);
        $datas =   [
            'pesan' => "Akun anda di nonaktifkan ",
            'status' => "nonaktif",
            'judul' => " Anda di nonkatifkan karena alasan " . $request->pesan . " dan anda bisa daftar di lowongan lainnya"
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
