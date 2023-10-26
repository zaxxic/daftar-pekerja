<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\Save;
use Illuminate\Http\Request;

class SaveController extends Controller
{
    public function index()  {
        $data = Registration::where('status2','save')->get();
        return view('pekerja-disimpan.index', compact('data'));
    }

    public function batal($id){
        $data = Registration::FindOrFail($id);
        $data->Update([
            'status2' => null
        ]);
        return redirect()->back()->with('BerhasilBatal', 'Berhasil membatalkan menyimpan data user');
    }

    public function save($data) {
        $data = Registration::FindOrFail($data);
        $data->Update([
            'status2'=> 'save'
        ]);
        return redirect()->back()->with('suksesSimpan', 'Berhasil menyimpan data user');
    }
}
