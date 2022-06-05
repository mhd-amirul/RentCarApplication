<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\alternatif;
use Illuminate\Http\Request;
use App\Models\kriteria;

class allAlternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        
        alternatif::create($data);
        return redirect()
            ->route('allalternatif.index')
            ->with('success', 'Data Berhasil di Tambahkan!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $db = alternatif::findOrFail($id);
        $data = $request->all();

        $db->update($data);
        return redirect()
            ->route('allalternatif.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        alternatif::findOrFail($id)->delete();
        return redirect()->back();
    }
}
