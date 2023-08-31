<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Models\Division;
use App\Models\Registration;
use Illuminate\Support\Facades\Auth;
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
        $lowongan = Vacancy::latest()->paginate(5);
        $registration = Registration::where('users_id', Auth()->User()->id)->get();
        $divisi = Division::all();
        return view('user.index', compact('lowongan', 'divisi','selectedDivision','registration'));
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
