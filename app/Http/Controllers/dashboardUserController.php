<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Models\Division;
use App\Models\Registration;
use Illuminate\Support\Facades\Auth;
use App\Models\Vacancy;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $selectedDivision = 'semua';
        $registration = Registration::where('users_id', Auth()->user()->id)
            ->whereIn('status', ['menunggu', 'diterima', 'ditolak', 'nonaktif']) // Menggunakan whereIn untuk beberapa nilai status
            ->latest()
            ->paginate(5);

        $lowongan = Vacancy::where('status', 'aktif')
            ->whereDate('batas', '>=', Carbon::today())
            ->orderByRaw('DATEDIFF(batas, CURDATE())') // Mengurutkan berdasarkan perbedaan antara batas tanggal dan tanggal hari ini
            ->latest()
            ->paginate(5);

        $data = Vacancy::whereDate('batas', '<=', Carbon::today())
            ->where('status', 'aktif')
            ->get();

        foreach ($data as $vacancy) {
            $vacancy->update(['status' => 'nonaktif']);
        }

        $divisi = Division::where('status', 'aktif')->get();
        $cek = Vacancy::where('status', 'aktif')->count();

        return view('user.index', compact('lowongan', 'divisi', 'selectedDivision', 'registration', 'cek'));
    }

    public function lowongan(Request $request)
    {


        $selectedDivision = $request->input('division', 'semua');

        if ($request->has('cari')) {
            $lowongan = Vacancy::where('devisi_id', $request->cari)
                ->where('status', 'aktif')
                ->orderByRaw('ABS(DATEDIFF(batas, CURDATE()))') // Mengurutkan berdasarkan perbedaan antara batas tanggal dan tanggal hari ini
                ->paginate(5);
            $divisi = Division::all();
            return view('user.lowongan', compact('lowongan', 'divisi', 'selectedDivision'));
        }

        $lowonganQuery = Vacancy::query();

        if ($request->division) {
            $lowonganQuery->where('devisi_id', $request->division);
        }

        $lowongan = $lowonganQuery->where('status', 'aktif')
            ->orderByRaw('ABS(DATEDIFF(batas, CURDATE()))') // Mengurutkan berdasarkan perbedaan antara batas tanggal dan tanggal hari ini
            ->latest()
            ->paginate(5);

        $divisi = Division::all();

        return view('user.lowongan', compact('lowongan', 'divisi', 'selectedDivision'));
    }


    public function filterLowongan(Request $request)
    {
        $selectedDivision = $request->input('division');

        $lowongan = Vacancy::when($selectedDivision, function ($query) use ($selectedDivision) {
            return $query->whereHas('division', function ($subQuery) use ($selectedDivision) {
                $subQuery->where('divisi', $selectedDivision);
            });
        })
            ->whereDate('batas', '>=', Carbon::today()->toDateString()) // Memastikan hanya lowongan yang berakhir pada hari ini dan seterusnya yang ditampilkan
            ->orderByRaw('ABS(DATEDIFF(batas, CURDATE()))')->where('status', 'aktif')
            ->latest()
            ->paginate(3);

        $registration = Registration::where('users_id', Auth()->User()->id)
            ->where('status', 'menunggu')
            ->latest()
            ->paginate(3);

        $divisi = Division::where('status', 'aktif')->get();
        $cek = Vacancy::where('status', 'aktif')->count();

        return view('user.index', compact('lowongan', 'divisi', 'selectedDivision', 'registration', 'cek'));
    }
}