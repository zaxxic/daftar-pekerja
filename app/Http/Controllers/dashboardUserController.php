<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Models\Division;
use App\Models\Register;
use App\Models\Registration;
use App\Models\User;
use App\Models\VacancieSave;
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
        $user = User::where(Auth()->user()->id);
        // Ambil semua pendaftaran yang terkait dengan pengguna saat ini
        $registration = Registration::where('users_id', Auth()->user()->id)
            ->whereIn('status', ['menunggu', 'diterima', 'ditolak', 'nonaktif', 'lulus'])
            ->latest()
            ->paginate(5);
        $pp = Registration::where('users_id', Auth()->user()->id)->first();
        if ($pp) {
            $qq = $pp->vacancie_id;
            // Ambil semua lowongan yang masih aktif dan memiliki batas tanggal setelah hari ini
            $lowongan = Vacancy::where('status', 'aktif')
                ->whereDate('batas', '>=', Carbon::today())
                ->whereNotIn('id', [$qq])
                ->orderByRaw('DATEDIFF(batas, CURDATE())')
                ->latest()
                ->paginate(5);
        } else {
            $lowongan = Vacancy::where('status', 'aktif')
                ->whereDate('batas', '>=', Carbon::today())
                ->orderByRaw('DATEDIFF(batas, CURDATE())')
                ->latest()
                ->paginate(5);
        };

        $simpan = VacancieSave::where('user_id', Auth()->user()->id)->get();

        $data = Vacancy::where('status', 'aktif')
            ->whereDate('batas', '<', Carbon::today())
            ->get();

        foreach ($data as $vacancy) {
            $vacancy->update(['status' => 'nonaktif']);
        }

        // Ambil semua divisi yang masih aktif
        $divisi = Division::where('status', 'aktif')->get();

        $cek = Vacancy::where('status', 'aktif')->count();

        return view('user.index', compact('lowongan', 'divisi', 'selectedDivision', 'registration', 'cek', 'user'));
    }


    public function lowongan(Request $request)
    {
        $selectedDivision = $request->input('division');
        $lowonganQuery = Vacancy::query();
        $keyword = $request->input('cari');
        $keywordTipe = $request->input('tipe');

        // Check and apply filters based on the input
        if ($selectedDivision && $selectedDivision !== 'semua') {
            $lowonganQuery->where('devisi_id', $selectedDivision);
        }

        if ($keyword) {
            $lowonganQuery->where('judul', 'LIKE', '%' . $keyword . '%');
        }

        if ($keywordTipe) {
            $lowonganQuery->whereIn('tipe', [$request->tipe]);
        }
        
        if (!$selectedDivision && !$keyword && !$keywordTipe) {
            $lowonganQuery->where('status', 'aktif');
        }

        $lowongan = $lowonganQuery
            ->orderByRaw('ABS(DATEDIFF(batas, CURDATE()))')
            ->latest()
            ->paginate(5);

        $divisi = Division::where('status', 'aktif')->get();

        return view('user.lowongan', compact('lowongan', 'divisi', 'selectedDivision', 'keyword', 'keywordTipe'));
    }



    public function filterLowongan(Request $request)
    {
        $selectedDivision = $request->input('division');


        $pp = Registration::where('users_id', Auth()->user()->id)->first();
        if ($pp) {
            $qq = $pp->vacancie_id;

            $lowongan = Vacancy::when($selectedDivision, function ($query) use ($selectedDivision) {
                return $query->whereHas('division', function ($subQuery) use ($selectedDivision) {
                    $subQuery->where('divisi', $selectedDivision);
                });
            })
                ->whereDate('batas', '>=', Carbon::today()->toDateString()) // Memastikan hanya lowongan yang berakhir pada hari ini dan seterusnya yang ditampilkan
                ->orderByRaw('ABS(DATEDIFF(batas, CURDATE()))')->where('status', 'aktif')
                ->whereNotIn('id', [$qq])
                ->latest()
                ->paginate(3);
        } else {
            $lowongan = Vacancy::when($selectedDivision, function ($query) use ($selectedDivision) {
                return $query->whereHas('division', function ($subQuery) use ($selectedDivision) {
                    $subQuery->where('divisi', $selectedDivision);
                });
            })
                ->whereDate('batas', '>=', Carbon::today()->toDateString()) // Memastikan hanya lowongan yang berakhir pada hari ini dan seterusnya yang ditampilkan
                ->orderByRaw('ABS(DATEDIFF(batas, CURDATE()))')->where('status', 'aktif')
                ->latest()
                ->paginate(3);
        };


        $registration = Registration::where('users_id', Auth()->user()->id)
            ->whereIn('status', ['menunggu', 'diterima', 'ditolak', 'nonaktif']) // Menggunakan whereIn untuk beberapa nilai status
            ->latest()
            ->paginate(5);

        $divisi = Division::where('status', 'aktif')->get();
        $cek = Vacancy::where('status', 'aktif')->count();

        return view('user.index', compact('lowongan', 'divisi', 'selectedDivision', 'registration', 'cek'));
    }
}
