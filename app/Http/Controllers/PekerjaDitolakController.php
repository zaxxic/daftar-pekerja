<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\User;
use App\Models\Rejected;
use Illuminate\Http\Request;

class PekerjaDitolakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $keyword = $request->input('cari'); // Ambil nilai dari query string 'cari'
        $date = $request->input('date'); // Ambil nilai dari query string 'cari'

        if (!empty($keyword)) {
            $user = Rejected::whereHas('user', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%' . $keyword . '%');
            })->where('status','ditolak')
                ->paginate(8);

            $user->appends(['cari' => $keyword]);
        }elseif($date){
            $p = Registration::select('created_at')->get();
            $dates = explode(" - ", trim($date));
            $startDate = date("Y-m-d", strtotime($dates[0])); // Mengonversi tanggal ke format Y-m-d
            $endDate = date("Y-m-d", strtotime($dates[1]));
            $user = Rejected::whereBetween('created_at', [$startDate,$endDate])->where('status','ditolak')
            ->paginate(8);

        } else {
            $user = Rejected::where('status','ditolak')->paginate(8);

        }

        return view('admin-pekerja.pekerja-ditolak.index', compact('user', 'keyword')); // Kirimkan $keyword ke view

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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
