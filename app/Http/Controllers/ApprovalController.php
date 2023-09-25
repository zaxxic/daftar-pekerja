<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Pesan;
use App\Models\User;
use App\Models\Rejected;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Mail;
use App\Mail\daftar;
use App\Models\Division;
use App\Models\Registration;


class ApprovalController extends Controller
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
            })->whereIn('status', ['menunggu'])
                ->paginate(8);

            $user->appends(['cari' => $keyword]);
        } else if ($request->has('filter')) {
            $keyword = $request->filter;
            $user = Registration::whereHas('user', function ($query) use ($keyword) {
                $query->where('devision_id', 'LIKE', '%' . $keyword . '%');
            })->whereHas('vacancy', function ($query) {
                $query->where('status', '=', 'aktif'); // Filter berdasarkan status lowongan 'aktif'
            })->whereIn('status', ['menunggu'])
                ->paginate(8);

            $value_filter = $keyword;
            $user->appends(['filter' => $keyword]);
            $keyword = "";
        } else {
            $user = Registration::whereHas('vacancy', function ($query) {
                $query->where('status', '=', 'aktif'); // Filter berdasarkan status lowongan 'aktif'
            })->whereIn('status', ['menunggu'])
                ->paginate(8);
        }

        return view('admin-pekerja.approval.index', compact('user', 'keyword', 'divisi', 'value_filter'));
    }

    public function cv($id)
    {
        $user = User::findOrFail($id);
        return view('admin-pekerja.approval.user-cv', compact('user'));
    }

    public function lamaran($id)
    {
        $user = User::findOrFail($id);
        return view('admin-pekerja.approval.user-lamaran', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        $this->validate(
            $request,
            [
                'tanggal_wawancara' => [
                    'required',
                    'date_format:Y-m-d\TH:i', // Format tanggal dan waktu
                    function ($attribute, $value, $fail) {
                        if (Carbon::parse($value)->isBefore(Carbon::now())) {
                            $fail('Tanggal dan Waktu Wawancara tidak boleh hari dan jam kemarin');
                        }
                    },
                ],
                'lokasi' => 'required',
            ],
            [
                'tanggal_wawancara.required' => 'Tanggal Wawancara Wajib Diisi',
                'lokasi.required' => 'lokasi Wawancara Wajib Diisi',
            ]
        );

        $data = User::findOrFail($id);
        $item = Registration::where('users_id', $id)->first();
        $tanggal = $request->tanggal_wawancara;
        $timestamp = strtotime($tanggal);
        $tanggal_format = date('d-m-Y', $timestamp);
        $datas =   [
            'pesan' => "Persiapkan anda untuk wawancara pada tanggal " . $tanggal_format . "
             untuk lokasi wawancaranya adalah ". $request->lokasi,
            'status' => "terima",
            'judul' => " Selamat anda diterima di lowongan " . $item->Vacancy->judul
        ];

        Mail::to($data->email)->send(new daftar($datas));
        // dd($item->Vacancy->devisi_id);
        $data->update([
            'status' => 'diterima',
            'tanggal_wawancara' => $request->tanggal_wawancara,
            'lokasi_wawancara' => $request->lokasi
        ]);
        $item->update([
            'status' => 'diterima'
        ]);


        return redirect()->route('approval')->with('sukses', 'Data Berhasil Di Perbarui');
    }

    /**
     * Update the specified resource in storage.
     */
    public function reject(Request $request, string $id, Rejected $rejected)
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

        $user = User::findOrFail($id);
        $item = Registration::where('users_id', $id)->first();
        $pesan = $request->pesan;
        $datas =   [
            'pesan' => "Anda ditolak karena alasan ini " . $pesan,
            'status' => "tolak",
            'judul' => " Maaf  anda ditolak di lowongan " . $item->Vacancy->judul
        ];

        Mail::to($user->email)->send(new daftar($datas));

        $item->update([
            'status' => 'ditolak'
        ]);
        $rejected::create([
           'user_id' => $user->id,
           'pesan' => $pesan,
           'vacancies_id' => $item->Vacancy->id
        ]);

        $pesan = new Message([
            'pesan' => $request->pesan,
        ]);

        $user->message()->save($pesan);

        $user->update([
            'status' => 'ditolak',
            'devision_id' => $item->Vacancy->devision_id,
        ]);

        return redirect()->route('approval')->with('sukses', 'Data Berhasil Di Perbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
