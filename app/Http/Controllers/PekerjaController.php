<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Registration;
use App\Models\Devision;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\daftar;
use App\Mail\gagal;
use App\Mail\lulus;
use App\Models\Division;
use App\Models\Worker;
use Termwind\Components\Dd;

class PekerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index(Request $request)
    // {
    //     $lokasi = User::where('role', 'user')->whereNotNull('lokasi_wawancara')->distinct()->pluck('lokasi_wawancara');
    //     $divisi = Division::where('status', ['aktif', 'nonaktif'])->get();
    //     $keyword = $request->input('cari');
    //     $value_filter  = $request->input('filter');

    //     if ($request->has('cari')) {
    //         $keyword = $request->cari;
    //         $user = Registration::whereHas('user', function ($query) use ($keyword) {
    //             $query->where('name', 'LIKE', '%' . $keyword . '%');
    //         })->whereHas('vacancy', function ($query) {
    //             $query->where('status', '=', 'aktif'); // Filter berdasarkan status lowongan 'aktif'
    //         })->where('status', 'diterima')
    //             ->paginate(8);

    //         $user->appends(['cari' => $keyword]);
    //     } else if ($request->has('filter')) {
    //         $keyword = $request->filter;
    //         $user = Registration::whereHas('user', function ($query) use ($keyword) {
    //             $query->where('devision_id', 'LIKE', '%' . $keyword . '%');
    //         })->whereHas('vacancy', function ($query) {
    //             $query->where('status', '=', 'aktif'); // Filter berdasarkan status lowongan 'aktif'
    //         })->where('status', 'diterima')
    //             ->paginate(8);

    //         $value_filter = $keyword;
    //         $user->appends(['filter' => $keyword]);
    //         $keyword = "";
    //     } else if ($request->has('filter')) {
    //         $keyword = $request->filter;
    //         $user = Registration::whereHas('user', function ($query) use ($keyword) {
    //             $query->where('lokasi_wawancara', 'LIKE', '%' . $keyword . '%');
    //         })->whereHas('vacancy', function ($query) {
    //             $query->where('status', '=', 'aktif'); // Filter berdasarkan status lowongan 'aktif'
    //         })->where('status', 'diterima')
    //             ->paginate(8);

    //         $value_filter = $keyword;
    //         $user->appends(['filter' => $keyword]);
    //         $keyword = "";
    //     } else {
    //         $user = Registration::whereHas('vacancy', function ($query) {
    //             $query->whereIn('status', ['aktif', 'nonaktif']); // Filter berdasarkan status lowongan 'aktif'
    //         })->where('status', 'diterima')
    //             ->paginate(8);
    //     }

    //     return view('admin-pekerja.pekerja.index', compact('user', 'keyword', 'lokasi', 'divisi', 'value_filter'));
    // }

    public function index(Request $request)
    {
        $lokasi = User::where('role', 'user')->whereNotNull('lokasi_wawancara')->distinct()->pluck('lokasi_wawancara');
        $divisi = Division::where('status', ['aktif', 'nonaktif'])->get();
        $keyword = $request->input('cari');
        $value_filter  = $request->input('filter');
        if ($request->input('cari')) {
            $keyword = $request->cari;
            $user = Registration::whereHas('user', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%' . $keyword . '%');
            })->whereHas('vacancy', function ($query) {
                $query->where('status', '=', 'aktif');
            })->where('status', 'diterima')
                ->paginate(8);

            $user->appends(['cari' => $keyword]);
        }elseif($request->input('filter_divisi') !== null && $request->input('filter_lokasi') !== null){
            $keyword = $request->filter_divisi;
            $keyword1 = $request->filter_lokasi;
            $user = Registration::whereHas('vacancy', function ($query) use ($keyword) {
                $query->where('devisi_id', 'LIKE', '%' . $keyword . '%');
            })->whereHas('vacancy', function ($query) {
                $query->where('status', '=', 'aktif');
            })->whereHas('user', function ($query) use ($keyword1) {
                $query->where('lokasi_wawancara', 'LIKE', '%' . $keyword1 . '%');
            })->where('status', 'diterima')
                ->paginate(8);

            $value_filter = $keyword;
            $user->appends(['filter_divisi' => $keyword]);
            $keyword = "";
        }  else if ($request->input('filter_divisi') !== null) {

            $keyword = $request->filter_divisi;
            $user = Registration::whereHas('vacancy', function ($query) use ($keyword) {
                $query->where('devisi_id', 'LIKE', '%' . $keyword . '%');
            })->whereHas('vacancy', function ($query) {
                $query->where('status', '=', 'aktif');
            })->where('status', 'diterima')
                ->paginate(8);

            $value_filter = $keyword;
            $user->appends(['filter_divisi' => $keyword]);
            $keyword = "";
        } else if ($request->input('filter_lokasi') !== null) {
            $keyword = $request->filter_lokasi;
            $user = Registration::whereHas('user', function ($query) use ($keyword) {
                $query->where('lokasi_wawancara', 'LIKE', '%' . $keyword . '%');
            })->whereHas('vacancy', function ($query) {
                $query->where('status', '=', 'aktif');
            })->where('status', 'diterima')
                ->paginate(8);

            $value_filter = $keyword;
            $user->appends(['filter_lokasi' => $keyword]);
            $keyword = "";
        }else {
            $user = Registration::whereHas('vacancy', function ($query) {
                $query->whereIn('status', ['aktif', 'nonaktif']);
            })->where('status', 'diterima')
                ->paginate(8);
        }

        return view('admin-pekerja.pekerja.index', compact('user', 'lokasi', 'keyword', 'divisi', 'value_filter'));
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

        // $user = User::find($id);
        $data = Registration::FindOrFail($id);
        $user = User::findOrFail($data->users_id);

        $pesan = new Message([
            'pesan' => $request->pesan,
        ]);

        $user->message()->save($pesan);
        $user->update([
            'status' => 'gagal',
            'tanggal_wawancara' => null,
        ]);
        // $data = Registration::where('users_id', $id)->first();

        $vacancy = $data->vacancy;

        Worker::created([
            'users_id' => $user->id,
            'divisi' => $data->Vacancy->Division->divisi,
            'posisi' => $data->Vacancy->pekerja
        ]);

        $datas =   [
            'nama' => $data->name,
            'lowongan' => $vacancy->judul,
            'divisi' => $vacancy->Division->divisi,
            'posisi' => $vacancy->pekerja,
            'pesan' => $request->pesan,
            'status' => "nonaktif",
            'judul' => " Anda di nonkatifkan karena alasan " . $request->pesan . " dan anda bisa daftar di lowongan lainnya"
        ];
        $data->delete();
        Mail::to($user->email)->send(new gagal($datas));

        return redirect()->route('pekerja')->with('sukses', 'Data Berhasil Di Perbarui');
    }

    // public function lulus($id)
    // {
    //     $data = User::findOrFail($id);
    //     $item = Registration::where('users_id', $id)->first();
    //     $datas = [
    //         'nama' => $data->name,
    //         'lowongan' => $item->Vacancy->judul,
    //         'divisi' => $item->Vacancy->Division->divisi,
    //         'posisi' => $item->Vacancy->pekerja,
    //         'status' => "terima",
    //         'judul' => " Selamat anda diterima di lowongan " . $item->Vacancy->judul
    //     ];

    //     Mail::to($data->email)->send(new lulus($datas));
    //     // dd($item->Vacancy->devisi_id);
    //     $data->update([
    //         'status' => 'lulus',
    //     ]);
    //     $item->update([
    //         'status' => 'lulus'
    //     ]);

    //     return redirect()->route('pekerja')->with('sukses', 'Data Berhasil Di Perbarui');
    // }

    public function lulus($id)
    {
        $item = Registration::findOrFail($id);
        $data = User::findOrFail($item->users_id);
        $vacancy = $item->vacancy; // Gunakan relasi untuk mengakses Vacancy

        // Menghitung jumlah pengguna yang telah diterima di lowongan ini
        $jumlahDiterima = Registration::where('status', 'lulus')->where('vacancie_id', $vacancy->id)->count();

        // Memeriksa apakah jumlah pengguna yang telah diterima sudah mencapai atau melebihi slot
        if ($jumlahDiterima >= $vacancy->slot) {
            return redirect()->route('pekerja')->with('gagal', 'Maaf, slot pada lowongan ini sudah terisi penuh.');
        }

        $datas = [
            'nama' => $data->name,
            'lowongan' => $vacancy->judul,
            'divisi' => $vacancy->Division->divisi,
            'posisi' => $vacancy->pekerja,
            'status' => "terima",
            'judul' => "Selamat Anda diterima di lowongan " . $vacancy->judul
        ];

        Mail::to($data->email)->send(new lulus($datas));

        // Pastikan bahwa relasi antara Vacancy dan Division sudah diatur dengan benar dalam model Eloquent.

        Worker::create([
            'users_id' => $data->id,
            'divisi' => $vacancy->division->divisi,
            'posisi' => $vacancy->pekerja,
        ]);

        $data->update([
            'status' => 'lulus',
        ]);

        $item->update([
            'status' => 'lulus'
        ]);

        $item->delete();

        return redirect()->route('pekerja')->with('sukses', 'Data Berhasil Diperbarui');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
