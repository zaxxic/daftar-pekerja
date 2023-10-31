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
use App\Models\Certificate;
use App\Mail\Tolak;
use App\Models\Division;
use App\Models\Experience;
use App\Models\Registration;
use App\Models\Save;
use App\Models\School;
use App\Models\Skill;
use App\Models\Vacancy;
use Illuminate\Auth\Middleware\Authorize;

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
            $user = Registration::where('status', 'menunggu')->paginate(8);
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
        $datas = [
            'nama' => $data->name,
            'lokasi' => $request->lokasi,
            'tanggal' => $tanggal_format,
            'lowongan' => $item->Vacancy->judul,
            'divisi' => $item->Vacancy->Division->divisi,
            'posisi' => $item->Vacancy->pekerja,
            'pesan' => "Persiapkan anda untuk wawancara pada tanggal " . $tanggal_format . "
             untuk lokasi wawancaranya adalah ". $request->lokasi,
            'status' => "terima",
            'judul' => " Selamat anda diterima di lowongan " . $item->Vacancy->judul
        ];

        Mail::to($data->email)->send(new daftar($datas));
        $data->update([
            'status' => 'diterima',
            'tanggal_wawancara' => $request->tanggal_wawancara,
            'lokasi_wawancara' => $request->lokasi
        ]);
        $item->update([
            'status' => 'diterima'
        ]);
        $data->save();
        $item->save();
        Rejected::create([
            'user_id'=>$data->id,
            'pesan' => 'diterima',
            'vacancies_id' => $item->Vacancy->id,
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
            'pesan' =>  $pesan,
            'status' => "tolak",
            'nama' => $user->name,
            'lowongan' => $item->Vacancy->judul,
            'posisi' => $item->Vacancy->pekerja,
        ];

        // Mail::to($user->email)->send(new Tolak($datas));



        $pesan = new Message([
            'pesan' => $request->pesan,
        ]);

        $user->message()->save($pesan);

        $user->update([
            'status' => 'ditolak'
        ]);
        // dd($item->Vacancy->Division->divisi);
        Rejected::create([
            'user_id'=>$user->id,
            'pesan' => $request->pesan,
            'divisi' => $item->Vacancy->Division->divisi,
            'posisi' => $item->Vacancy->pekerja,
            'status' => 'ditolak'
        ]);

        $item->delete();
        return redirect()->route('approval')->with('sukses', 'Data Berhasil Di Perbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function show($id)
    {
        // dd($id);
        $data = User::FindOrFail($id);
        if($data->role !== 'user'){
            abort(404, 'Authorize 404');

        };
        $experience = Experience::where('user_id', $data->id)->get();
        $skill = Skill::where('user_id', $data->id)->get();
        $school = School::where('user_id', $data->id)->get();
        $certificate = Certificate::where('user_id', $data->id)->get();
        // $divisi = Division::where('user_id');
        $lowongan = Registration::where('users_id', $data->id)->get();
        $pencarian = Registration::where('users_id', $data->id)->first();
        $pelamarSama = Registration::where('vacancie_id', $pencarian->vacancie_id)->whereNotIn('users_id', [$data->id])->get();

        // dd($lowongan);
        // dd($data);
        return view('admin-pekerja.approval.detail-user', compact('data', 'experience', 'skill', 'school', 'certificate', 'lowongan','pelamarSama'));
    }

}
