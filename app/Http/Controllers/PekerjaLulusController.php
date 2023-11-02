<?php

namespace App\Http\Controllers;

use App\Mail\gagal;
use App\Mail\pecat;
use App\Models\Division;
use App\Models\Message;
use App\Models\Registration;
use App\Models\Rejected;
use App\Models\User;
use App\Models\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PekerjaLulusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $divisi = Division::where('status', 'aktif')->get();
        $keyword = $request->input('cari');
        $value_filter  = $request->input('filter');

        if ($request->has('cari')) {
            $keyword = $request->cari;
            $user = Registration::whereHas('user', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%' . $keyword . '%');
            })->whereHas('vacancy', function ($query) {
                $query->where('status', '=', 'aktif'); // Filter berdasarkan status lowongan 'aktif'
            })->whereIn('status', ['lulus'])
                ->paginate(8);

            $user->appends(['cari' => $keyword]);
        } else if ($request->has('filter')) {
            $keyword = $request->filter;
            $user = Registration::whereHas('user', function ($query) use ($keyword) {
                $query->where('devision_id', 'LIKE', '%' . $keyword . '%');
            })->whereHas('vacancy', function ($query) {
                $query->where('status', '=', 'aktif'); // Filter berdasarkan status lowongan 'aktif'
            })->whereIn('status', ['lulus'])
                ->paginate(8);

            $value_filter = $keyword;
            $user->appends(['filter' => $keyword]);
            $keyword = "";
        } else {
            $user = Registration::whereHas('vacancy', function ($query) {
                $query->whereIn('status', ['nonaktif', 'aktif']); // Filter berdasarkan status lowongan 'aktif'
            })->whereIn('status', ['lulus'])
                ->paginate(8);
        }
        // dd($user);

        return view('admin-pekerja.pekerja-lulus.index', compact('user', 'keyword', 'divisi', 'value_filter'));
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
    public function store(Request $request, string $id, Rejected $rejected)
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

        // $user = User::find($id);
        // dd($user);

        $data = Registration::FindOrFail($id);
        $user = User::findOrFail($data->users_id);
        $pesan = $request->pesan;

        // $pesan = new Message([
        //     'pesan' => $request->pesan,
        // ]);

        $user->update([
            'status' => 'dipecat',
            'tanggal_wawancara' => null,
        ]);

        // $data = Registration::with('vacancy')->find($id);
        $vacancy =  Vacancy::findOrFail($data->vacancie_id);
        $data->delete();
        $datas =   [
            'nama' => $data->name,
            'lowongan' => $vacancy->judul,
            'divisi' => $vacancy->Division->divisi,
            'posisi' => $vacancy->pekerja,
            'pesan' => $pesan,
            'status' => "nonaktif",
            'judul' => " Anda di nonkatifkan karena alasan " . $request->pesan . " dan anda bisa daftar di lowongan lainnya"
        ];

        Mail::to($user->email)->send(new pecat($datas));

        return redirect()->back()->with('sukses', 'Data Berhasil Di Perbarui');
        // // dd($request->pesan);
        // $this->validate(
        //     $request,
        //     [
        //         'pesan' => 'required',
        //     ],
        //     [
        //         'pesan.required' => 'Pesan Wajib Diisi',
        //     ]
        // );

        // $user = User::findOrFail($id);
        // $item = Registration::where('users_id', $id)->first();
        // $pesan = $request->pesan;
        // $vacancy = $item->Vacancy;
        // $datas =   [
        //     'nama' => $user->name,
        //     'lowongan' => $vacancy->judul,
        //     'posisi' => $item->Vacancy->pekerja,
        //     'divisi' => $item->Vacancy->Division->divisi,
        //     'pesan' => $pesan,
        //     'status' => "tolak",
        //     'judul' => " Maaf  anda ditolak di lowongan " . $item->Vacancy->judul
        // ];

        // Mail::to($user->email)->send(new pecat($datas));

        // // Menghapus data dari tabel Registration
        // $item->delete();

        // // Simpan data penolakan ke tabel Rejected
        // $rejected::create([
        //     'user_id' => $user->id,
        //     'pesan' => $pesan,
        //     'vacancies_id' => $item->Vacancy->id
        // ]);

        // $pesan = new Message([
        //     'pesan' => $request->pesan,
        // ]);
        // // dd($pesan);
        // $user->message()->save($pesan);

        // $user->update([
        //     'status' => null,
        //     'devision_id' => null,
        // ]);

        // return redirect()->route('approval')->with('sukses', 'Data Berhasil Dihapus');
    }


    /**  * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
