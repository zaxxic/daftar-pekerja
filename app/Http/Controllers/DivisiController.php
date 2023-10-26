<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\Vacancy;
use Illuminate\Http\Request;


class DivisiController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'divisi' =>  ['required', 'regex:/^[A-Za-z\s]+$/', 'max:50']
        ],[
            'divisi.required' => "divisi tidak boleh kosong",
            'divisi.regex' => 'hanya bisa huruf alfabet',
            'divisi.max' => 'maksimal 50 karakter',
        ]);
        if (Division::where('divisi', $request->divisi)->where('status','aktif')->exists()) {
            return response()->json([
                'status' => 'gagal',
                'message' => 'Divisi yang anda inputkan telah ada']);
        }
        $division = Division::create([
            'divisi' => $request->divisi,
            'status' => 'aktif'
        ]);

            return response()->json([
                'status' => 'sukses',
                'message' => 'Data berhasil disimpan.', 'division' => $division], 200);
    }


    /**
     * Display the specified resource.
     */
    public function index()
    {
        $divisi = Division::where('status', 'aktif')->get();
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
        $data = Vacancy::where('devisi_id', $id)->Where('status', 'aktif')->first();

        if($data){
            $pesan = 'devisi ini sedang digunakan pada lowongan '.$data->judul;
            return response()->json([
                'status' => 'peringatan',
                'peringatan' => $pesan
            ]);
        }else{
            $division->update(['status' => 'nonaktif']);
        }


        return response()->json(['message' => 'Division deleted successfully']);
    }
}
