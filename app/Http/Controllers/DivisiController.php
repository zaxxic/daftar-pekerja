<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;


class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $this->validate($request, [
            'divisi' =>'required'
        ]
        );
        Division::create([
            'divisi'=>$request->divisi
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Division $divisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Division $divisi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( $request, Division $divisi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $divisi = Division::find($id);
        $divisi->delete();
        return redirect()->back();
    }
}
