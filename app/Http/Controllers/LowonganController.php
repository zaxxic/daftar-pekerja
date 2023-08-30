<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lowongan;
use App\Models\Divisi;
use App\Http\Requests\StoreLowonganRequest;
use App\Http\Requests\UpdateLowonganRequest;

class LowonganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $divisi = Divisi::all();
        $data = Lowongan::all();
        return view('admin-lowongan.lowongan', compact('data','divisi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $divisi = Divisi::all();
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
        // dd($request);
        Lowongan::create([
            'judul'=>$request->judul,
            'devisi_id'=>$request->devisi,
            'batas'=>$request->batas,
            'pekerja'=>$request->pekerjaan,
            'slot'=>$request->slot,
            'gaji'=>$request->gaji,
            'tipe'=>$request->tipe,
            'lokasi'=>$request->lokasi,
            'syarat'=>$request->content,
            'pembuat'=>'admin'
        ]);
        return redirect()->route('lowongan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lowongan $lowongan)
    {
        return view('admin.lowongan-detail');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $divisi = Divisi::all();
        $lowongan = Lowongan::find($id);
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
        $data = Lowongan::find($id);
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
    public function destroy(Lowongan $lowongan)
    {
        //
    }

    public function detail()
    {
        return view('admin.lowongan-detail');
    }
}
