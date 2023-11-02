<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vacancy;
use App\Models\Division;
use App\Models\Rejected;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class DetailLowonganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return redirect()->back();
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
        $user = User::findOrFail(Auth()->User()->id);

        $cek = Registration::where('users_id', Auth()->user()->id)
            ->whereIn('status', ['diterima', 'menunggu'])
            ->exists();

        if ($cek) {
            return response()->json(['status' => 'sudah']);
        }

        $ceking = Registration::where('users_id', Auth()->user()->id)
            ->whereIn('status', ['ditolak', 'nonaktif'])
            ->exists();

        if ($ceking) {
            $ceking = Registration::where('users_id', Auth()->user()->id)
                ->whereIn('status', ['ditolak', 'nonaktif'])->first();
            $ceking->update([
                'status' => 'menunggu',
                'vacancie_id' => $request->id
            ]);
        } else {
            Registration::create([
                'status' => 'menunggu',
                'users_id' => Auth()->user()->id,
                'vacancie_id' => $request->id
            ]);
        }
        Rejected::create([
            'user_id'=> Auth()->User()->id,
            'pesan' => 'daftar',
            'divisi' => $vacancy->Division->divisi,
            'posisi' => $vacancy->pekerja,
            'status' => 'menunggu'
        ]);



        return response()->json(['status' => 'sukses']);
        // Kurangi jumlah slot yang tersedia
        // $vacancy->decrement('slot');


    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $lowongan = Vacancy::findOrFail($id);
        $loggedInUser = Auth()->user(); // Mengambil pengguna yang sudah login
        // Mengambil tanggal sekarang
        $today = Carbon::now();

        // Mengambil tanggal kemarin
        $yesterday = $today->subDay();

        // Format tanggal kemarin sesuai kebutuhan
        $yesterdayFormatted = $yesterday->toDateString();
        if ($lowongan->batas < $yesterdayFormatted) {

            return redirect()->route('dashboard-user')->with('tidakAda', 'Lowongan yang anda akses sudah tidak ada');
        }
        if (in_array($lowongan->status, ['nonaktif', 'dihapus'])) {
            return redirect()->route('dashboard-user')->with('tidakAda', 'Lowongan yang anda akses sudah tidak ada');
        }

        $reg = Registration::where('users_id', Auth()->user()->id)
            ->whereIn('status', ['menunggu', 'diterima', 'ditolak', 'nonaktif'])
            ->latest()
            ->get();
            // dd($reg);

        $registrations = Registration::where('users_id', $loggedInUser->id)
            ->first();
        if($registrations){
            if($registrations->status === 'menunggu'){
                    $registrations = Registration::where('users_id', $loggedInUser->id)
                        ->where('vacancie_id', $id)
                        ->exists();
                    if ($registrations) {
                        $status = 'disini';
                    } else {
                        $status = 'sudah';
                    }

            }
            elseif($registrations->status === 'diterima'){
                $registrations = Registration::where('users_id', $loggedInUser->id)
                    ->where('vacancie_id', $id)
                    ->exists();
                if ($registrations) {
                    $status = 'diterima_disini';
                } else {
                    $status = 'terima';
                }
            }
            elseif($registrations->status === 'lulus'){
                $status = 'lulus';
            }
            else{
                $status = 'belum';
            }
        }else{
            $status = 'belum';
        }
        // if ($registrations->status === 'menunggu') {
        //     $registrations = Registration::where('users_id', $loggedInUser->id)
        //         ->where('vacancie_id', $id)
        //         ->exists();
        //     if ($registrations) {
        //         $status = 'disini';
        //     } else {
        //         $status = 'sudah';
        //     }
        // } else {
        //     $registrations = Registration::where('users_id', $loggedInUser->id)
        //         ->where('status', 'diterima')
        //         ->exists();

        //     if ($registrations) {
        //         $registrations = Registration::where('users_id', $loggedInUser->id)
        //             ->where('vacancie_id', $id)
        //             ->exists();
        //         if ($registrations) {
        //             $status = 'diterima_disini';
        //         } else {
        //             $status = 'terima';
        //         }
        //     } else {
        //         $registrations = Registration::where('users_id', $loggedInUser->id)
        //         ->where('status', 'lulus')
        //         ->exists();
        //         $status = 'belum';
        //     }
        // }


        return view('user.detail-lowongan', compact('lowongan', 'registrations', 'status', 'reg'));
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
