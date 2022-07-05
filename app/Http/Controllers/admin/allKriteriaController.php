<?php

namespace App\Http\Controllers\admin;

use App\Models\kriteria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class allKriteriaController extends Controller
{
    public function index()
    {
        return view('pages.admin.pages-admin.allkriteria.allkriteria')
            ->with(
                [
                    'title' => 'Data Kriteria',
                    'kriteria' => kriteria::orderBy('id')->filterKriteria(request(['searchK']))->get()
                ]
            );
    }

    public function edit($id)
    {
        return view('pages.admin.pages-admin.allkriteria.edit')
            ->with(
                [
                    'title' => 'Tambah Kriteria',
                    'kriteria' => kriteria::findOrFail($id)
                ]
            );
    }

    public function update(Request $request, $id)
    {
        $db = kriteria::findOrFail($id);
        $data = $request->all();

        $db->update($data);
        return redirect()
            ->route('allkriteria.index')
            ->with('success', 'Kriteria Berhasil diubah');
    }

    public function destroy($id)
    {
        kriteria::findOrFail($id)->delete();

        return redirect()
            ->route('allkriteria.index')
            ->with('success', 'Kriteria berhasil dihapus');
    }


    // public function create()
    // {
    //     return view('pages.admin.pages-admin.allkriteria.tambah')
    //         ->with(
    //             [
    //                 'title' => 'Tambah Kriteria',
    //             ]
    //         );
    // }

    // public function store(Request $request)
    // {
    //     $data = $request->validate(
    //         [
    //             'nama' => 'required',
    //             'type' => 'required',
    //             'bobot' => 'required'
    //         ]
    //     );

    //     kriteria::create($data);
    //     return redirect()->route('allkriteria.index');
    // }
}
