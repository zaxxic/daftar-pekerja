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
        $vacancy = Vacancy::findOrFail($request->id);

        if ($vacancy->slot > 0) {
            $cek = Registration::where('users_id', Auth()->user()->id)
                ->whereIn('status', ['diterima', 'menunggu'])
                ->exists();

            if ($cek) {
                return response()->json(['status' => 'sudah']);
            }

            Registration::create([
                'status' => 'menunggu',
                'users_id' => Auth()->user()->id,
                'vacancie_id' => $request->id
            ]);

            // Kurangi jumlah slot yang tersedia
            $vacancy->decrement('slot');

            return response()->json(['status' => 'sukses']);
        } else {
            return response()->json(['status' => 'penuh']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $lowongan = Vacancy::findOrFail($id);
        $loggedInUser = Auth()->user(); // Mengambil pengguna yang sudah login

        if ($loggedInUser) {
            $registrations = Registration::where('users_id', $loggedInUser->id)
                ->where('vacancie_id', $lowongan->id)->where('status', ['menunggu','diterima'])
                ->first(); // Mengambil data registrasi pengguna pada lowongan tertentu
        } else {
            $registrations = null; // Jika pengguna belum login, set registrasi menjadi null
        }

        return view('user.detail-lowongan', compact('lowongan', 'registrations'));
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
    }
    public function batalkan(Request $request)
    {
        $data = $request->id;
        $lowongan = Registration::Where('users_id', $data)->first();
        $lowongan->delete();
        return response()->json(['status' => 'sukses', 'pesan' => 'pendaftaran anda telah di batalkan anda bisa mencari lowongan yang lain']);
    }
}
