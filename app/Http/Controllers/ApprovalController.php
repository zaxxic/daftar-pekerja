<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Pesan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Mail;
use App\Mail\daftar;
use App\Models\Registration;


class ApprovalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Registration::where('status', ['menunggu','ditolak'])->get();
        return view('admin-pekerja.approval.index', compact('user'));
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
    public function update(Request $request, string $id)
    {
        $this->validate(
            $request,
            [
                'tanggal_wawancara' => [
                    'required',
                    function ($attribute, $value, $fail) {
                        if (Carbon::parse($value)->isBefore(Carbon::now()->subDay())) {
                            $fail('Tanggal Wawancara tidak boleh hari kemarin');
                        }
                    },
                ],
            ],
            [
                'tanggal_wawancara.required' => 'Tanggal Wawancara Wajib Diisi',
            ]
        );

        $data = User::find($id);
        $item= Registration::where('users_id',$id)->first();
        $tanggal = $request->tanggal_wawancara;
        $datas =   [
                'pesan' => "Persiapkan anda untuk wawancara pada tanggal ". $tanggal,
                'status' => "terima",
                'judul' => " Selamat anda diterima di lowongan ". $item->Vacancy->judul
                ];

        Mail::to($data->email)->send(new daftar($datas));
        // dd($item->Vacancy->devisi_id);
        $data->update([
            'status' => 'diterima',
            'devision_id' =>$item->Vacancy->devisi_id,
            'tanggal_wawancara' => $request->tanggal_wawancara
        ]);
        $item->update([
            'status' => 'diterima'
        ]);


        return redirect()->route('approval')->with('sukses', 'Data Berhasil Di Perbarui');
    }

    /**
     * Update the specified resource in storage.
     */
    public function reject(Request $request, string $id)
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
        $item= Registration::where('users_id',$id)->first();
        $pesan = $request->pesan;
        $datas =   [
                'pesan' => "Anda ditolak karena alasan ini ". $pesan,
                'status' => "tolak",
                'judul' => " Maaf  anda ditolak di lowongan ". $item->Vacancy->judul
                ];

        Mail::to($user->email)->send(new daftar($datas));

        $item->update([
            'status' => 'ditolak'
        ]);

        $pesan = new Message([
            'pesan' => $request->pesan,
        ]);

        $user->message()->save($pesan);

        $user->update([
            'status' => 'ditolak',
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
