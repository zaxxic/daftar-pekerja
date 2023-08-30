<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;
use App\Http\Requests\StoredivisiRequest;
use App\Http\Requests\UpdatedivisiRequest;

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
        Divisi::create([
            'divisi'=>$request->divisi
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(divisi $divisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(divisi $divisi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatedivisiRequest $request, divisi $divisi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(divisi $divisi)
    {
        //
    }
}
