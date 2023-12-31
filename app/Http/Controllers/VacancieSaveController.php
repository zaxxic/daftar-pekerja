<?php

namespace App\Http\Controllers;

use App\Models\VacancieSave;
use App\Models\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VacancieSaveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return Auth()->user()->id;
        $simpan =  VacancieSave::where('user_id', Auth()->user()->id)->get();
        return response()->json(['simpan' => $simpan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function LowonganSimpan()
    {
        $lowongan = VacancieSave::with(['Vacancy', 'Vacancy.Division'])->limit(2)->get();
        return response()->json(['lowongan'=>$lowongan]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
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
    public function SelegkapnyaLowonganSimpan()
    {
        $lowongan = VacancieSave::with(['Vacancy', 'Vacancy.Division'])->get();
        return response()->json(['lowongan'=>$lowongan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = Auth::user();
        $vacancie = Vacancy::findOrFail($id);
        $cek = VacancieSave::where('user_id', auth()->user()->id)
            ->where('vacancie_id', $id)
            ->first();
        if ($cek) {
            $cek->delete();
            return response()->json(['suksesBatal' => 'batal simpan']);
        } else {

            VacancieSave::create([
                'user_id' => $user->id,
                'vacancie_id' => $vacancie->id
            ]);
        }


        return response()->json(['success' => 'Lowongan berhasil disimpan']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = VacancieSave::findOrFail($id);
        if($data->user_id === Auth()->User()->id){
            $data->delete();
        }else{
            abort(403,'anda tidak mempunyai akses');
        }
        return response()->json();
    }
}
