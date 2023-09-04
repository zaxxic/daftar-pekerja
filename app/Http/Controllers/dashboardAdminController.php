<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vacancy;
use App\Models\Division;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardAdminController extends Controller
{
      /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menunggu = Registration::where('status','menunggu')->count();
        $terima = Registration::where('status','diterima')->count();
        $tolak = Registration::where('status','ditolak')->count();
        $divisi = Division::all()->count();
        $lowongan = Vacancy::all()->count();

        $data = Registration::select(
            DB::raw('MONTH(created_at) as month'),
            DB::raw('YEAR(created_at) as year'),
            'status',
            DB::raw('count(*) as total')
        )
        ->whereIn('status', ['menunggu', 'diterima', 'ditolak'])
        ->groupBy('year', 'month', 'status')
        ->get();

        $processedData = [];

        foreach ($data as $item) {
            $yearMonth = $item->year . '-' . str_pad($item->month, 2, '0', STR_PAD_LEFT);
            if (!isset($processedData[$yearMonth])) {
                $processedData[$yearMonth] = [
                    'month' => $yearMonth,
                    'menunggu' => 0,
                    'diterima' => 0,
                    'ditolak' => 0,
                ];
            }
            $processedData[$yearMonth][$item->status] = $item->total;
        }

        $chartData = array_values($processedData);


        return view('admin-dashboard.index', compact('menunggu', 'terima', 'tolak', 'divisi', 'lowongan', 'chartData'));
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
