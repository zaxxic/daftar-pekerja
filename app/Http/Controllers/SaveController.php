<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\Registration;
use App\Models\Save;
use Illuminate\Http\Request;

class SaveController extends Controller
{
    public function index(Request $request)  {
        // $data = Registration::where('status2','save')->get();
        // return view('pekerja-disimpan.index', compact('data'));

        $divisi = Division::where('status', 'aktif')->get();
        $keyword = $request->input('cari');
        $value_filter  = $request->input('filter');

        if ($request->has('cari')) {
            $keyword = $request->cari;
            $data = Registration::whereHas('user', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%' . $keyword . '%');
            })->whereHas('vacancy', function ($query) {
                $query->where('status', '=', 'aktif'); // Filter berdasarkan status lowongan 'aktif'
            })->whereIn('status2', ['save'])
                ->paginate(8);
                $data->appends(['cari' => $keyword]);
                // dd($data);

        } else if ($request->has('filter')) {
            $keyword = $request->filter;
            // dd($keyword);
            if ($keyword === null){
                return redirect()->back();
            };
            $data = Registration::whereHas('user', function ($query) use ($keyword) {
                $query->where('devision_id', 'LIKE', '%' . $keyword . '%');
            })->whereHas('vacancy', function ($query) {
                $query->where('status', '=', 'aktif'); // Filter berdasarkan status lowongan 'aktif'
            })->whereIn('status2', ['save'])
                ->paginate(8);

            $value_filter = $keyword;
            $data->appends(['filter' => $keyword]);
            $keyword = "";
        } else {
            $data = Registration::where('status2', 'save')->paginate(8);
        }
        return view('pekerja-disimpan.index', compact('data', 'keyword', 'divisi', 'value_filter'));
    }

    public function batal($id){
        $data = Registration::FindOrFail($id);
        $data->Update([
            'status2' => null
        ]);
        return redirect()->back()->with('BerhasilBatal', 'Berhasil membatalkan menyimpan data user');
    }

    public function save($id) {
        // dd($id);
        $data = Registration::FindOrFail($id);

        $data->Update([
            'status2'=> 'save'
        ]);
        return redirect()->back()->with('suksesSimpan', 'Berhasil menyimpan data user');
    }
}
