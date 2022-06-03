<?php

namespace App\Http\Controllers\admin;

use App\Models\car;
use App\Models\alternatif;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\MobilUpdateRequest;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pages.admin.pages-admin.allshops.cars.show')
            ->with(
                [
                    'title' => 'Detail Mobil',
                    'car' => car::findOrFail($id)
                ]
            );;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('pages.admin.pages-admin.allshops.cars.edit')
            ->with(
                [
                    'title' => 'Edit Mobil',
                    'merk' => alternatif::where('kriteria_id', 1)->get(),
                    'tahun_produksi' => alternatif::where('kriteria_id', 2)->get(),
                    'muatan_penumpang' => alternatif::where('kriteria_id', 3)->get(),
                    'kapasitas_mesin' => alternatif::where('kriteria_id', 4)->get(),
                    'kondisi_mesin' => alternatif::where('kriteria_id', 5)->get(),
                    'kondisi_fisik' => alternatif::where('kriteria_id', 6)->get(),
                    'jenis_bbm' => alternatif::where('kriteria_id', 7)->get(),
                    'harga_sewa' => alternatif::where('kriteria_id', 8)->get(),
                    'car' => car::findOrFail($id)
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
    public function update(MobilUpdateRequest $request, $id)
    {
        $db = car::findOrFail($id);

        $data = $request->all();
        
        if ($request->file('gambar1')) {
            if ($request->oldgambar1) {
                Storage::delete($request->oldgambar1);
            }
            $data['gambar1'] = $request->file('gambar1')->store('gambar1');
        }

        if ($request->file('gambar2')) {
            if ($request->oldgambar2) {
                Storage::delete($request->oldgambar2);
            }
            $data['gambar2'] = $request->file('gambar2')->store('gambar2');
        }

        if ($request->file('gambar3')) {
            if ($request->oldgambar3) {
                Storage::delete($request->oldgambar3);
            }
            $data['gambar3'] = $request->file('gambar3')->store('gambar3');
        }

        if ($request->file('gambar4')) {
            if ($request->oldgambar4) {
                Storage::delete($request->oldgambar4);
            }
            $data['gambar4'] = $request->file('gambar4')->store('gambar4');
        }

        if ($request->file('gambar5')) {
            if ($request->oldgambar5) {
                Storage::delete($request->oldgambar5);
            }
            $data['gambar5'] = $request->file('gambar5')->store('gambar5');
        }

        $db->update($data);
        return redirect()->route('allshops.show', $db['shop_id'])->with('success', 'Data Mobil Berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = car::where('id', $id)->first();
        $id = $data['shop_id'];
        $data->delete();
        return redirect()->route('allshops.show', $id);
    }
}
