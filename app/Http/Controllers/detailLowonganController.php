<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacancy;
use App\Models\Registration;
use Illuminate\Support\Facades\Auth;

class detailLowonganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
        $this->validate($request, [
            'lowongan' => 'required'
        ]);
        $cek = Registration::Where('users_id',Auth()->User()->id)->where('status', ["diterima","mununggu"])->exists();
        if ($cek){
            return redirect()->back()->with('error', 'anda sudah mendaftar di lowongan ini');
        }

        Registration::create([
            'status' => 'menunggu',
            'users_id' => Auth()->user()->id,
            'vacancie_id' => $request->lowongan
        ]);
        return redirect()->back()->with('sukses', 'berhasail mendaftar pada lowongan ini silakan menunggu untuk di cek olah admin data anda');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $lowongan = Vacancy::findOrFail($id);
        return view('user.detail-lowongan', compact('lowongan'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
