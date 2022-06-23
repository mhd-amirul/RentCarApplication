<?php

namespace App\Http\Controllers\rental;

use App\Models\car;
use App\Models\shop;
use App\Models\nilai;
use App\Models\ulasan;
use App\Models\alternatif;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CreateMobilRequest;
use App\Http\Requests\MobilUpdateRequest;
use App\Models\kriteria;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RentalController extends Controller
{
    public function create()
    {
        return view('pages.rental.tambah')
            ->with(
                [
                    'title' => 'Tambah Mobil',
                    'kriteria' => kriteria::all(),
                    'alternatif' => alternatif::all()
                ]
            );
    }

    public function store(CreateMobilRequest $request)
    {
        $data = $request->all();
        if ($request->file('gambar1')) {
            $data['gambar1'] = $request->file('gambar1')->store('gambar1');
        }
        if ($request->file('gambar2')) {
            $data['gambar2'] = $request->file('gambar2')->store('gambar2');
        }
        if ($request->file('gambar3')) {
            $data['gambar3'] = $request->file('gambar3')->store('gambar3');
        }
        if ($request->file('gambar4')) {
            $data['gambar4'] = $request->file('gambar4')->store('gambar4');
        }
        if ($request->file('gambar5')) {
            $data['gambar5'] = $request->file('gambar5')->store('gambar5');
        }

        $kriteria = kriteria::all();
        $data['kata_kunci'] = $data['deskripsi'].', ';
        foreach ($kriteria as $k) {
            # code...
            $name = str_replace(' ','_',$k->nama.'_id');
            $db = alternatif::where('id', $data[$name])->first();
            if ($db->kriteria_id == $k->id) {
                $data['kata_kunci'] .= $db->nama.', ';
            }
        }

        $data['user_id'] = auth()->user()->id;
        $data['shop_id'] = shop::where('user_id', $data['user_id'])->value('id');
        $car = car::create($data);

        foreach ($kriteria as $k) {
            # code...
            $name = str_replace(' ','_',$k->nama.'_id');
            $db = alternatif::where('id', $data[$name])->first();
            if ($db['kriteria_id'] == $k->id) {
                # code...
                $nilai = [
                    'car_id' => $car->id,
                    'kriteria_id' => $k->id,
                    'alternatif_id' => $data[$name],
                    'nilai' => $db->nilai
                ];
                nilai::create($nilai);
            }
        }

        Alert::success('success', 'Berhasil Menambah Mobil Baru');
        return redirect()
            ->route('toko.index');
    }

    public function show($id)
    {
        $ulasan = ulasan::where('car_id', $id);

        $rate = $ulasan->sum('rating');
        $jumlah = $ulasan->count();
        $hasil = 0;
        if ($rate && $jumlah != null) {
            $hasil = $rate / $jumlah;
        }
        // return response()->json($car);
        return view('pages.rental.show')
            ->with(
                [
                    'title' => 'Detail Mobil',
                    'car' => car::findOrFail($id),
                    'ulasan' => $ulasan->get(),
                    'rating' => $hasil,
                    'review' => $jumlah
                ]
            );
    }

    public function edit($id)
    {
        return view('pages.rental.edit')
                ->with(
                    [
                        'title' => 'Tambah Mobil',
                        'kriteria' => kriteria::all(),
                        'alternatif' => alternatif::all(),
                        'car' => car::findOrFail($id)
                    ]
                );
    }

    public function update(MobilUpdateRequest $request, $id)
    {
        $database = car::findOrFail($id);
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

        $kriteria = kriteria::all();
        $data['kata_kunci'] = $data['deskripsi'].', ';
        foreach ($kriteria as $k) {
            # code...
            $name = str_replace(' ','_',$k->nama.'_id');
            $db = alternatif::where('id', $data[$name])->first();
            $dbNilai = nilai::where(['car_id' => $id, 'kriteria_id' => $k->id])->first();

            if ($db->kriteria_id == $k->id) {
                $data['kata_kunci'] .= $db->nama.', ';
            }

            if ($dbNilai) {
                # code...
                $nilai = [
                    'car_id' => $id,
                    'kriteria_id' => $k->id,
                    'alternatif_id' => $data[$name],
                    'nilai' => $db->nilai
                ];
                $dbNilai->update($nilai);
            }
        }
        $database->update($data);

        Alert::success('success', 'Data Mobil Berhasil di Ubah');
        return redirect()
            ->route('toko.index');
    }

    public function destroy($id)
    {
        $data = car::findOrFail($id);

        if ($data->gambar1) {
            # code...
            Storage::delete($data->gambar1);
        }
        if ($data->gambar2) {
            # code...
            Storage::delete($data->gambar2);
        }
        if ($data->gambar3) {
            # code...
            Storage::delete($data->gambar3);
        }
        if ($data->gambar4) {
            # code...
            Storage::delete($data->gambar4);
        }
        if ($data->gambar5) {
            # code...
            Storage::delete($data->gambar5);
        }

        $data->delete();
        Alert::success('success', 'Mobil Berhasil di Hapus!!!');
        return redirect()
                ->route('toko.index');
    }

}
