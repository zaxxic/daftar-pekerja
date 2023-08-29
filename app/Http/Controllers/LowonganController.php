<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lowongan;
use App\Http\Requests\StoreLowonganRequest;
use App\Http\Requests\UpdateLowonganRequest;

class LowonganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Lowongan::all();
        return view('admin.lowongan', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.lowongan-create');
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
        Lowongan::create([
            'judul'=>$request->judul,
            'devisi'=>$request->devisi,
            'batas'=>$request->batas,
            'pekerja'=>$request->pekerjaan,
            'slot'=>$request->slot,
            'gaji'=>$request->gaji,
            'tipe'=>$isi,
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
    public function edit(Lowongan $lowongan)
    {
        return view('admin.lowongan-edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLowonganRequest $request, Lowongan $lowongan)
    {
        //
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
