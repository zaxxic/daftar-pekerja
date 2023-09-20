<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacancy;
use App\Models\Division;
use Carbon\Carbon;
use App\Mail\daftar;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\UpdateLowonganRequest;
use App\Models\Registration;
use App\Models\User;
use App\TipePekerjaEnum;
use DateTime;

class LowonganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $keyword = $request->input('cari');
        $value_filter = $request->input('filter');

        if ($request->has('cari')) {
            $keyword = $request->cari;
            $data = Vacancy::whereIn('status', ['aktif', 'nonaktif'])
                ->where('judul', 'LIKE', '%' . $keyword . '%')
                ->paginate(8);
            $data->appends(['cari' => $keyword]);
            return view('admin-lowongan.lowongan', compact('data', 'keyword'));
        }

        $cek = Division::where('status', null)->get();
        foreach ($cek as $item) {
            $item->update(['status' => 'aktif']);
        }

        $user = User::all();
        $divisi = Division::all();

        if ($request->has('filter')) {
            $keyword = $request->filter;
            $data = Vacancy::where('status', ['aktif', 'nonaktif'])
                ->where('judul', 'LIKE', '%' . $keyword . '%')
                ->latest()
                ->paginate(8);
            $data->appends(['filter' => $keyword]);
            $value_filter = $keyword;
            $keyword = "";
        } else {
            $data = Vacancy::whereIn('status', ['aktif', 'nonaktif'])
                ->latest()
                ->paginate(8);
        }

        return view('admin-lowongan.lowongan', compact('data', 'divisi', 'user', 'keyword', 'value_filter'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $divisi = Division::where('status', 'aktif')->get();
        return view('admin-lowongan.lowongan-create', compact('divisi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required|max:100',
            'devisi' => 'required',
            'batas' => 'required|date|after_or_equal:today',
            'pekerjaan' => 'required|max:100',
            'slot' => 'required|numeric|min:1',
            'gaji' => 'required|numeric|min:100000',
            'tipe' => [
                'required',
                'in:' . implode(',', [
                    TipePekerjaEnum::KONTRAK,
                    TipePekerjaEnum::PERMANEN,
                ]),
            ],
            'lokasi' => 'required|max:150',
            'content' => 'required',
        ], [
            'judul.required' => 'judul harus di isi',
            'judul.max' => 'judul maksimal 100 karakter',
            'devisi.required' => 'devisi harus di isi',
            'batas.required' => 'batas lowongan harus di isi',
            'batas.date' => 'batas lowongan tidak valid',
            'pekerjaan.required' => 'pekerjaan harus di isi',
            'pekerjaan.max' => 'pekerjaan maksimal 100 karakter',
            'slot.required' => 'slot harus di isi',
            'slot.min' => 'slot minimal satu',
            'slot.numeric' => 'slot hanya boleh angka',
            'gaji.required' => 'gaji harus di isi',
            'gaji.min' => 'gaji tidak boleh kurang dari 100.000',
            'gaji.max' => 'gaji tidak bole lebi dari 10 angka',
            'tipe.required' => 'tipe harus di isi',
            'tipe.in' => 'pilih tipe pekerjaan "kontrak" atau "permanen"',
            'lokasi.required' => 'lokasi harus di isi',
            'lokasi.max' => 'lokasi maksimal 150 karakter',
            'content.required' => 'syarat harus di isi',
        ]);

        Vacancy::create([
            'judul' => $request->judul,
            'devisi_id' => $request->devisi,
            'batas' => $request->batas,
            'pekerja' => $request->pekerjaan,
            'slot' => $request->slot,
            'gaji' => $request->gaji,
            'tipe' => $request->tipe,
            'lokasi' => $request->lokasi,
            'syarat' => $request->content,
            'status' => 'aktif',
            'pembuat' => 'admin'
        ]);
        return redirect()->route('lowongan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Vacancy::find($id);
        return view('admin-lowongan.lowongan-detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $divisi = Division::where('status', 'aktif')->get();
        $lowongan = Vacancy::find($id);
        return view('admin-lowongan.lowongan-edit', compact('lowongan', 'divisi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required|max:100',
            'devisi' => 'required',
            'batas' => 'required|date|after_or_equal:today',
            'pekerjaan' => 'required|max:100',
            'slot' => 'required|numeric|min:1',
            'gaji' => 'required|numeric|min:100000',
            'tipe' => [
                'required',
                'in:' . implode(',', [
                    TipePekerjaEnum::KONTRAK,
                    TipePekerjaEnum::PERMANEN,
                ]),
            ],
            'lokasi' => 'required|max:150',
            'content' => 'required',
        ], [
            'judul.required' => 'judul harus di isi',
            'judul.max' => 'judul maksimal 100 karakter',
            'devisi.required' => 'devisi harus di isi',
            'batas.required' => 'batas lowongan harus di isi',
            'batas.date' => 'batas lowongan tidak valid',
            'pekerjaan.required' => 'pekerjaan harus di isi',
            'pekerjaan.max' => 'pekerjaan maksimal 100 karakter',
            'slot.required' => 'slot harus di isi',
            'slot.min' => 'slot minimal satu',
            'slot.numeric' => 'slot hanya boleh angka',
            'gaji.required' => 'gaji harus di isi',
            'gaji.min' => 'gaji tidak boleh kurang dari 100.000',
            'gaji.max' => 'gaji tidak bole lebi dari 10 angka',
            'tipe.required' => 'tipe harus di isi',
            'tipe.in' => 'pilih tipe pekerjaan "kontrak" atau "permanen"',
            'lokasi.required' => 'lokasi harus di isi',
            'lokasi.max' => 'lokasi maksimal 150 karakter',
            'content.required' => 'syarat harus di isi',
        ]);

        $data = Vacancy::find($id);
        $data->update([
            'judul' => $request->judul,
            'devisi_id' => $request->devisi,
            'batas' => $request->batas,
            'pekerja' => $request->pekerjaan,
            'slot' => $request->slot,
            'gaji' => $request->gaji,
            'tipe' => $request->tipe,
            'lokasi' => $request->lokasi,
            'syarat' => $request->content

        ]);
        return redirect()->route('lowongan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $registation = Registration::where('vacancie_id', $id)->where('status', 'menunggu')->first();

        if ($registation) {
            $data = $registation->User->email;
            $datas =   [
                'pesan' => "lowongan yang anda daftar sudah tidak tersedia ",
                'status' => "terima",
                'judul' => " Pemberitahuan tentang pendaftaran"
            ];

            Mail::to($data)->send(new daftar($datas));
            $registation->delete();
        }
        $lowongan = Vacancy::find($id);
        $lowongan->update([
            'status' => 'dihapus',
            'devision_id' => null
        ]);
        return redirect()->back();
    }
    // public function delete(Lowongan $lowongan, $id)
    // {
    //     dd('awoakwoqk');
    //     $Vacancy::find($id);
    //     $lowongan->delete();
    //     return redirect()->back();
    // }

    // public function detail()
    // {
    //     return view('admin.lowongan-detail');
    // }

    /**
     * Update the specified resource in storage.
     */
    public function active(Request $request, string $id)
    {

        $data = Vacancy::find($id);
        $data->update([
            'status' => 'aktif',
        ]);

        return redirect()->route('lowongan.index')->with('sukses', 'Data Berhasil Di Perbarui');
    }

    /**
     * Update the specified resource in storage.
     */
    public function nonactive(Request $request, string $id)
    {
        $registation = Registration::where('vacancie_id', $id)->where('status', 'menunggu')->first();
        if ($registation) {
            $data = $registation->User->email;
            $datas =   [
                'pesan' => "lowongan yang anda daftar sudah tidak tersedia ",
                'status' => "terima",
                'judul' => " Pemberitahuan tentang pendaftaran"
            ];

            Mail::to($data)->send(new daftar($datas));
            $registation->delete();
        }
        $data = Vacancy::find($id);
        $data->Update([
            'status' => 'nonaktif'
        ]);

        return redirect()->route('lowongan.index')->with('sukses', 'Data Berhasil Di Perbarui');
    }
}
