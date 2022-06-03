<?php

namespace App\Http\Controllers\admin;

use App\Models\kriteria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class allKriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.pages-admin.allkriteria.allkriteria')
            ->with(
                [
                    'title' => 'Data Kriteria',
                    'kriteria' => kriteria::all()
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
        return view('pages.admin.pages-admin.allkriteria.tambah')
            ->with(
                [
                    'title' => 'Tambah Kriteria',
                    'kriteria' => kriteria::all()
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
        $data = $request->validate(
            [
                'nama' => 'required',
                'type' => 'required',
                'bobot' => 'required'
            ]
        );

        kriteria::create($data);
        return redirect()->route('allkriteria.index');
        // return response()->json($data);
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
        return view('pages.admin.pages-admin.allkriteria.edit')
            ->with(
                [
                    'title' => 'Tambah Kriteria',
                    'kriteria' => kriteria::findOrFail($id)
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
        $db = kriteria::findOrFail($id);

        // $data = $request->validate(
        //     [
        //         'nama' => 'required',
        //         'type' => 'required',
        //         'bobot' => 'required'
        //     ]
        // );
        $data = $request->all();
        $db->update($data);
        return redirect()->route('allkriteria.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        kriteria::findOrFail($id)->delete();
        return redirect()->back();
    }
}
