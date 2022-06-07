<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\alternatif;
use Illuminate\Http\Request;
use App\Models\kriteria;

class allAlternatifController extends Controller
{
    public function index()
    {
        return view('pages.admin.pages-admin.allalternatif.allalternatif')
            ->with(
                [
                    'title' => 'Data Kriteria',
                    'alternatif' => alternatif::latest()->filterAlternatif(request(['searchA']))->get()
                ]
            );
    }

    public function create()
    {
        return view('pages.admin.pages-admin.allalternatif.tambah')
            ->with(
                [
                    'title' => 'Tambah Alternatif',
                    'kriteria' => kriteria::all(),
                ]
            );
    }

    public function store(Request $request)
    {
        $data = $request->all();
        
        alternatif::create($data);
        return redirect()
            ->route('allalternatif.index')
            ->with('success', 'Data Berhasil di Tambahkan!!!');
    }

    public function edit($id)
    {
        return view('pages.admin.pages-admin.allalternatif.edit')
            ->with(
                [
                    'title' => 'Edit Alternatif',
                    'kriteria' => kriteria::all(),
                    'alternatif' => alternatif::findOrFail($id)
                ]
            );
    }

    public function update(Request $request, $id)
    {
        $db = alternatif::findOrFail($id);
        $data = $request->all();

        $db->update($data);
        return redirect()
            ->route('allalternatif.index');
    }

    public function destroy($id)
    {
        alternatif::findOrFail($id)->delete();
        return redirect()->back();
    }
}
