<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Models\Division;
use App\Models\Lowongan;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class dashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $selectedDivision = 'semua';
        $divisi = Division::all();
        $lowongan = Vacancy::latest()->paginate(5);
        return view('user.index', compact('lowongan', 'divisi','selectedDivision'));
    }

    public function filterLowongan(Request $request)
    {
        $selectedDivision = $request->input('division');

        $lowongan = Vacancy::when($selectedDivision, function ($query) use ($selectedDivision) {
            return $query->whereHas('division', function ($subQuery) use ($selectedDivision) {
                $subQuery->where('divisi', $selectedDivision);
            });
        })->get();

        $divisi = Division::all();

        return view('user.index', compact('lowongan', 'divisi', 'selectedDivision'));
    }
}
