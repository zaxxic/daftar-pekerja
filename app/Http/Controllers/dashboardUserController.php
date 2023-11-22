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
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Http\Request;
use Mockery\Undefined;

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
        $keywordLokasi = $request->input('lokasi');

        // Check and apply filters based on the input
        if ($selectedDivision && $selectedDivision !== 'semua') {
            $lowonganQuery->where('devisi_id', $selectedDivision);
        }

        if ($keyword) {
            $lowonganQuery->where('judul', 'LIKE', '%' . $keyword . '%');
        }

        if ($keywordLokasi) {
            // $lowonganQuery->whereIn('tipe', [$request->tipe]);
            $lowonganQuery->where('lokasi', 'LIKE', '%' . $keywordLokasi . '%');
        }

        if (!$selectedDivision && !$keyword && !$keywordLokasi) {
            $lowonganQuery->where('status', 'aktif');
        }

        $lowongan = $lowonganQuery
            ->orderByRaw('ABS(DATEDIFF(batas, CURDATE()))')
            ->latest()
            ->paginate(5);

        $divisi = Division::where('status', 'aktif')->get();
        $lokasi = Vacancy::where('status', 'aktif')
        ->select('lokasi')
        ->distinct()
        ->get();

        $lowonganTerbaru = Vacancy::where('created_at', 'desc');
        $lowonganTerlama = Vacancy::where('created_at', 'asc');

        return view('user.lowongan', compact('lowongan', 'divisi', 'selectedDivision', 'keyword', 'keywordLokasi', 'lokasi', 'lowonganTerbaru', 'lowonganTerlama'));
    }



    public function LowonganUser()
    {
        $lowonganQuery = Vacancy::query();
        $lowongan = $lowonganQuery
            ->orderByRaw('ABS(DATEDIFF(batas, CURDATE()))')
            ->where('status', 'aktif')
            ->latest()
            ->limit(8)->get();
        $simpan = VacancieSave::where('user_id', Auth()->User()->id)->get();
        if($lowongan->count() < 1){
            $lowongan = 'kosong';
        };

        return response()->json(['lowongan' => $lowongan, 'simpan' => $simpan]);
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


    public function SideFilter(Request $request)
    {

        $lowonganQuery = Vacancy::query();
        $keyword = $request->data[0];
        $divisi = $request->data[1];
        $lokasi = $request->data[2];
        $type = $request->data[3];
        $typeVacancy = $request->data[4];
        $Salary = $request->data[5];
        $simpan = VacancieSave::where('user_id', Auth()->User()->id)->get();

        // dd($Salary);


        if ($type[0] != 'semua') {
            $lowonganQuery->whereIn('tipe', $type);
            // dd($type[0]);
        }
        if ($keyword != 'semua') {
            $lowonganQuery->where('judul', $keyword);
            // dd($keyword);
        }
        if ($divisi != 'semua') {
            $division = Division::FindOrFail($divisi);
            $lowonganQuery->where('devisi_id', $division->id);


        }
        if ($lokasi != 'semua') {
            $lowonganQuery->where('lokasi', $lokasi);
            // dd($lokasi);

        }

        if ($typeVacancy[0] != 'semua') {
            switch ($typeVacancy[0]){
                case "terbaru":
                    $lowonganQuery->orderBy('created_at', 'desc');
                break;
                case "terlama":
                    $lowonganQuery->orderBy('created_at', 'asc');
                break;
                default:
                $lowonganQuery->orderBy('created_at', 'desc');
            }
            // dd($typeVacancy[0]);

        }

        if ($Salary[0] != 'semua') {
            switch ($Salary[0]) {
                case 'gaji1':
                    $lowonganQuery->whereBetween('gaji', [100000, 2500000]);
                    break;
                case 'gaji2':
                    $lowonganQuery->whereBetween('gaji', [2500000, 5000000]);
                    break;
                case 'gaji3':
                    $lowonganQuery->whereBetween('gaji', [5000000, 7500000]);
                    break;
                case 'gaji4':
                    $lowonganQuery->whereBetween('gaji', [7500000, 10000000]);
                    break;
                case 'gaji5':
                    $lowonganQuery->where('gaji', '>', 10000000);
                    break;
                default:
                    $lowonganQuery->where('gaji', '>', 100000);
            }
            // dd($Salary[0]);
        }
        $lowongan = $lowonganQuery->where('status', 'aktif')->get();
        // dd($lowongan);
        if(
            $lowongan->count() < 1 &&
            $type[0] === 'semua' &&
            $typeVacancy[0] === 'semua' &&
            $Salary[0] === 'semua' &&
            $keyword ===  'semua' &&
            $divisi ===  'semua' &&
            $lokasi ===  'semua'
        ){
            $lowongan = Vacancy::where('status', 'aktif')->get();
        }elseif($lowongan->count() < 1){
            $lowongan = 'kosong';
        }

        return response()->json(['lowongan'=>$lowongan, 'simpan' => $simpan]);

    }

    public function searchlowongan(Request $request)
    {

        $lowonganQuery = Vacancy::query();
        $keyword = $request->data[0];
        $divisi = $request->data[1];
        $lokasi = $request->data[2];
        $type = $request->data[3];
        $typeVacancy = $request->data[4];
        $Salary = $request->data[5];
        $simpan = VacancieSave::where('user_id', Auth()->User()->id)->get();
        // dd($Salary);


        if ($type[0] != 'semua') {
            $lowonganQuery->whereIn('tipe', $type);
            // dd($type[0]);
        }
        if ($keyword != 'semua') {
            $lowonganQuery->where('judul', $keyword);
            // dd($keyword);
        }
        if ($divisi != 'semua') {
            $division = Division::FindOrFail($divisi);
            $lowonganQuery->where('devisi_id', $division->id);


        }
        if ($lokasi != 'semua') {
            $lowonganQuery->where('lokasi', $lokasi);
            // dd($lokasi);

        }

        if ($typeVacancy[0] != 'semua') {
            switch ($typeVacancy[0]){
                case "terbaru":
                    $lowonganQuery->orderBy('created_at', 'desc');
                break;
                case "terlama":
                    $lowonganQuery->orderBy('created_at', 'asc');
                break;
                default:
                $lowonganQuery->orderBy('created_at', 'desc');
            }
            // dd($typeVacancy[0]);

        }

        if ($Salary[0] != 'semua') {
            switch ($Salary[0]) {
                case 'gaji1':
                    $lowonganQuery->whereBetween('gaji', [100000, 2500000]);
                    break;
                case 'gaji2':
                    $lowonganQuery->whereBetween('gaji', [2500000, 5000000]);
                    break;
                case 'gaji3':
                    $lowonganQuery->whereBetween('gaji', [5000000, 7500000]);
                    break;
                case 'gaji4':
                    $lowonganQuery->whereBetween('gaji', [7500000, 10000000]);
                    break;
                case 'gaji5':
                    $lowonganQuery->where('gaji', '>', 10000000);
                    break;
                default:
                    $lowonganQuery->where('gaji', '>', 100000);
            }
            // dd($Salary[0]);
        }
        $lowongan = $lowonganQuery->where('status', 'aktif')->get();
        // dd($lowongan);
        if(
            $lowongan->count() < 1 &&
            $type[0] === 'semua' &&
            $typeVacancy[0] === 'semua' &&
            $Salary[0] === 'semua' &&
            $keyword ===  'semua' &&
            $divisi ===  'semua' &&
            $lokasi ===  'semua'
        ){
            $lowongan = Vacancy::where('status', 'aktif')->get();
        }elseif($lowongan->count() < 1){
            $lowongan = 'kosong';
        }

        return response()->json(['lowongan'=>$lowongan, 'simpan' => $simpan]);

    }
}
