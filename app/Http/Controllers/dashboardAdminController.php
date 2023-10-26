<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vacancy;
use App\Models\Division;
use App\Models\Registration;
use App\Models\Rejected;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $currentYear = date('Y'); // Tahun saat ini
        $keyword = $request->input('year');
        if(!empty($keyword)){
            $currentYear = $keyword;
        };
        $menunggu = Registration::where('status', 'menunggu')->count();
        $terima = Registration::where('status', 'diterima')->count();
        $tolak = Registration::where('status', 'ditolak')->count();
        $divisi = Division::where('status', 'aktif')->count();
        $lowongan = Vacancy::where('status', 'aktif')->count();

        $data = Rejected::select(
            DB::raw('MONTH(created_at) as month'),
            'status',
            DB::raw('count(*) as total')
        )
            ->whereIn('status', ['menunggu', 'diterima', 'ditolak'])
            ->whereYear('created_at', $currentYear) // Filter untuk tahun saat ini
            ->groupBy('month', 'status')
            ->get();

        $processedData = [];

        // Inisialisasi data bulanan ke 0
        for ($month = 1; $month <= 12; $month++) {
            $monthStr = str_pad($month, 2, '0', STR_PAD_LEFT);
            $processedData[$monthStr] = [
                'month' => date('F', strtotime("2023-$month-01")), // Format nama bulan
                'menunggu' => 0,
                'diterima' => 0,
                'ditolak' => 0,
            ];
        }

        // Memasukkan data yang ada ke dalam array yang diproses
        foreach ($data as $item) {
            $monthStr = str_pad($item->month, 2, '0', STR_PAD_LEFT);
            $processedData[$monthStr][$item->status] = $item->total;
        }

        $chartData = array_values($processedData);




        return view('admin-dashboard.index', compact('menunggu', 'terima', 'tolak', 'divisi', 'lowongan', 'chartData','keyword'));
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
