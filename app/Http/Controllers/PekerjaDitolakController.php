<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PekerjaDitolakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $keyword = $request->cari;
            $user = User::where('name', 'LIKE', '%' . $keyword . '%')
                        ->where('status', 'ditolak')
                        ->paginate(8);
            $user->appends(['cari' => $keyword]);
            return view('admin-pekerja.pekerja-ditolak.index', compact('user'));
        }

        $user = User::where('status', 'ditolak')->latest()->paginate(8);
        return view('admin-pekerja.pekerja-ditolak.index', compact('user'));
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
