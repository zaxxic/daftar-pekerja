<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacancy;
use App\Models\Division;
use Carbon\Carbon;

use App\Http\Requests\UpdateLowonganRequest;
use App\Models\User;

class LowonganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $keyword = $request->cari;
            $data = Vacancy::where('judul', 'LIKE', '%' . $keyword . '%')->paginate(8);
            $data->appends(['cari' => $keyword]);
            return view('admin-lowongan.lowongan', compact('data'));
        }
        $user = User::all();
        $divisi = Division::all();
        $data = Vacancy::latest()->paginate(8);
        return view('admin-lowongan.lowongan', compact('data', 'divisi', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $divisi = Division::all();
        return view('admin-lowongan.lowongan-create', compact('divisi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'devisi' => 'required',
            'batas' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (Carbon::parse($value)->isBefore(Carbon::now()->subDay())) {
                        $fail('Tanggal tenggat tidak boleh hari kemarin');
                    }
                },
            ],
            'pekerjaan' => 'required',
            'slot' => 'required|numeric|min:0',
            'gaji' => 'required|numeric|min:100000|',
            'tipe' => 'required',
            'lokasi' => 'required',
            'content' => 'required'
        ], [
            'judul.required' => 'judul harus di isi',
            'devisi.required' => 'devisi harus di isi',
            'batas.required' => 'batas harus di isi',
            'pekerjaan.required' => 'pekerjaan harus di isi',
            'slot.required' => 'slot harus di isi',
            'slot.min' => 'slot tidak boleh min',
            'gaji.required' => 'gaji harus di isi',
            'gaji.min' => 'gaji tidak boleh kurang dari 100.000',
            'gaji.max' => 'gaji tidak boleh lebih dari 10 angka',
            'tipe.required' => 'tipe harus di isi',
            'lokasi.required' => 'lokasi harus di isi',
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
        $divisi = Division::all();
        $lowongan = Vacancy::find($id);
        return view('admin-lowongan.lowongan-edit', compact('lowongan', 'divisi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'devisi' => 'required',
            'batas' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (Carbon::parse($value)->isBefore(Carbon::now()->subDay())) {
                        $fail('Tanggal tenggat tidak boleh hari kemarin');
                    }
                },
            ],
            'pekerjaan' => 'required',
            'slot' => 'required|numeric|min:0',
            'gaji' => 'required|numeric|min:100000', // Gaji maksimal 10 digit
            'tipe' => 'required',
            'lokasi' => 'required',
            'content' => 'required',
        ], [
            'judul.required' => 'judul harus di isi',
            'devisi.required' => 'devisi harus di isi',
            'batas.required' => 'batas harus di isi',
            'pekerjaan.required' => 'pekerjaan harus di isi',
            'slot.required' => 'slot harus di isi',
            'slot.min' => 'slot tidak boleh kurang dari 0',
            'gaji.required' => 'gaji harus di isi',
            'gaji.min' => 'gaji tidak boleh kurang dari 100.000',
            'gaji.max' => 'gaji tidak bole lebi dari 10 angka',
            'tipe.required' => 'tipe harus di isi',
            'lokasi.required' => 'lokasi harus di isi',
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
        $lowongan = Vacancy::find($id);
        $lowongan->delete();
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
        $data = Vacancy::find($id);
        $data->Update([
            'status' => 'nonaktif'
        ]);

        return redirect()->route('lowongan.index')->with('sukses', 'Data Berhasil Di Perbarui');
    }
}
