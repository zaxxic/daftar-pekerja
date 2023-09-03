<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;


class DivisiController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'divisi' => 'required'
        ],[
            'divisi.required' => "divisi tidak boleh kosong"
        ]);

        $division = Division::create([
            'divisi' => $request->divisi
        ]);

        if ($request->ajax()) {
            return response()->json(['message' => 'Data berhasil disimpan.', 'division' => $division], 200);
        }

        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }


    /**
     * Display the specified resource.
     */
    public function index()
    {
        $divisi = Division::all();
        return response()->json(['divisi' => $divisi]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $division = Division::find($id);

        if (!$division) {
            return response()->json(['message' => 'Division not found'], 404);
        }

        $division->delete();

        return response()->json(['message' => 'Division deleted successfully']);
    }
}
