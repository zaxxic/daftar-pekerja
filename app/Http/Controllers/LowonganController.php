<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacancy;
use App\Models\Division;
use App\Http\Requests\UpdateLowonganRequest;

class LowonganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $divisi = Division::all();
        $data = Vacancy::all();
        return view('admin-lowongan.lowongan', compact('data','divisi'));
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
            'judul'=>'required',
            'devisi'=>'required',
            'batas' =>'required',
            'pekerjaan'=> 'required',
            'slot' => 'required',
            'gaji'=> 'required',
            'tipe'=>'required',
            'lokasi'=>'required',
            'content'=>'required'
        ]);
        $isi = 'kontrak';
        // dd($request);
        Vacancy::create([
            'judul'=>$request->judul,
            'devisi_id'=>$request->devisi,
            'batas'=>$request->batas,
            'pekerja'=>$request->pekerjaan,
            'slot'=>$request->slot,
            'gaji'=>$request->gaji,
            'tipe'=>$isi,
            'lokasi'=>$request->lokasi,
            'syarat'=>$request->content,
            'status' => 'aktif',
            'pembuat'=>'admin'
        ]);
        return redirect()->route('lowongan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('admin-lowongan.lowongan-detail');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $divisi = Division::all();
        $lowongan = Vacancy::find($id);
        return view('admin-lowongan.lowongan-edit',compact('lowongan','divisi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul'=>'required',
            'devisi'=>'required',
            'batas' =>'required',
            'pekerjaan'=> 'required',
            'slot' => 'required',
            'gaji'=> 'required',
            'tipe'=>'required',
            'lokasi'=>'required',
            'content'=>'required'
        ]);
        $data = Vacancy::find($id);
        $data->update([
            'judul'=>$request->judul,
            'devisi_id'=>$request->devisi,
            'batas'=>$request->batas,
            'pekerja'=>$request->pekerjaan,
            'slot'=>$request->slot,
            'gaji'=>$request->gaji,
            'tipe'=>$request->tipe,
            'lokasi'=>$request->lokasi,
            'syarat'=>$request->content

        ]);
        return redirect()->route('lowongan.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
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