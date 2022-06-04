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
        $data['kata_kunci'] = $data['deskripsi'];
        foreach ($kriteria as $k) {
            # code...
            $name = str_replace(' ','_',$k->nama);
            $db = alternatif::where('id', $data[$name.'_id'])->first();
            if ($db->kriteria_id == $k->id) {
                $data['kata_kunci'] .= $db->nama.', ';
            }
        }
        
        $data['user_id'] = auth()->user()->id;
        $data['shop_id'] = shop::where('user_id', $data['user_id'])->value('id');
        $car = car::create($data);

        foreach ($kriteria as $k) {
            # code...
            $name = str_replace(' ','_',$k->nama);
            $db = alternatif::where('id', $data[$name.'_id'])->first();
            if ($db['kriteria_id'] == $k->id) {
                # code...
                $nilai = [
                    'car_id' => $car->id,
                    'kriteria_id' => $k->id,
                    'alternatif_id' => $data[$name.'_id'],
                    'nilai' => $db->nilai
                ];
                nilai::create($nilai);
            }
        }
        
        return redirect()
            ->route('toko.index')
            ->with('success', 'Berhasil Menambah Mobil Baru');
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
        $db = car::findOrFail($id);
        $data = $request->all();
        
        $data['user_id'] = auth()->user()->id;
        
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

        // proses pengambilan nilai data mobil
        $merk_id = alternatif::where('id', $data['merk_id'])->first();
        $tp_id = alternatif::where('id', $data['tp_id'])->first();
        $kf_id = alternatif::where('id', $data['kf_id'])->first();
        $km_id = alternatif::where('id', $data['km_id'])->first();
        $mp_id = alternatif::where('id', $data['mp_id'])->first();
        $km2_id = alternatif::where('id', $data['km2_id'])->first();
        $jb_id = alternatif::where('id', $data['jb_id'])->first();
        $hs_id = alternatif::where('id', $data['hs_id'])->first();

        $data['kata_kunci'] =  $merk_id['nama'].
        ', '.$tp_id['nama'].
        ', '.$kf_id['nama'].
        ', '.$km_id['nama'].
        ', '.$mp_id['nama'].
        ', '.$km2_id['nama'].
        ', '.$jb_id['nama'].
        ', '.$hs_id['nama'].
        ', '.$data['deskripsi'];

        // proses simpan data ke array 
        $kriteria1 = [
            'car_id' => $id,
            'kriteria_id' => $merk_id['kriteria_id'],
            'alternatif_id' => $data['merk_id'],
            'nilai' => $merk_id['nilai']
        ];
        $kriteria2 = [
            'car_id' => $id,
            'kriteria_id' => $tp_id['kriteria_id'],
            'alternatif_id' => $data['tp_id'],
            'nilai' => $tp_id['nilai']
        ];
        $kriteria3 = [
            'car_id' => $id,
            'kriteria_id' => $kf_id['kriteria_id'],
            'alternatif_id' => $data['kf_id'],
            'nilai' => $kf_id['nilai']
        ];
        $kriteria4 = [
            'car_id' => $id,
            'kriteria_id' => $km_id['kriteria_id'],
            'alternatif_id' => $data['km_id'],
            'nilai' => $km_id['nilai']
        ];
        $kriteria5 = [
            
            'car_id' => $id,
            'kriteria_id' => $mp_id['kriteria_id'],
            'alternatif_id' => $data['mp_id'],
            'nilai' => $mp_id['nilai']
        ];
        $kriteria6 = [
            'car_id' => $id,
            'kriteria_id' => $km2_id['kriteria_id'],
            'alternatif_id' => $data['km2_id'],
            'nilai' => $km2_id['nilai']
        ];
        $kriteria7 = [
            'car_id' => $id,
            'kriteria_id' => $jb_id['kriteria_id'],
            'alternatif_id' => $data['jb_id'],
            'nilai' => $jb_id['nilai']
        ];
        $kriteria8 = [
            'car_id' => $id,
            'kriteria_id' => $hs_id['kriteria_id'],
            'alternatif_id' => $data['hs_id'],
            'nilai' => $hs_id['nilai']
        ];

        // temukan data yang ingin di ubah
        $dbk1 = nilai::where([
            'car_id' => $id,
            'kriteria_id' => $merk_id['kriteria_id']
        ])->first();
        $dbk2 = nilai::where([
            'car_id' => $id,
            'kriteria_id' => $tp_id['kriteria_id'] 
        ])->first();
        $dbk3 = nilai::where([
            'car_id' => $id,
            'kriteria_id' => $kf_id['kriteria_id'] 
        ])->first();
        $dbk4 = nilai::where([
            'car_id' => $id,
            'kriteria_id' => $km_id['kriteria_id'] 
        ])->first();
        $dbk5 = nilai::where([
            'car_id' => $id,
            'kriteria_id' => $mp_id['kriteria_id'] 
        ])->first();
        $dbk6 = nilai::where([
            'car_id' => $id,
            'kriteria_id' => $km2_id['kriteria_id'] 
        ])->first();
        $dbk7 = nilai::where([
            'car_id' => $id,
            'kriteria_id' => $jb_id['kriteria_id'] 
        ])->first();
        $dbk8 = nilai::where([
            'car_id' => $id,
            'kriteria_id' => $hs_id['kriteria_id'] 
        ])->first();

        // return response()->json($dbk6);

        $db->update($data);
        $dbk1->update($kriteria1);
        $dbk2->update($kriteria2);
        $dbk3->update($kriteria3);
        $dbk4->update($kriteria4);
        $dbk5->update($kriteria5);
        $dbk6->update($kriteria6);
        $dbk7->update($kriteria7);
        $dbk8->update($kriteria8);
        return redirect()
            ->route('toko.index')
            ->with('success', 'Data Mobil Berhasil di Ubah');
    }

    public function destroy($id)
    {
        car::where('id', $id)->delete();
        return redirect()
                ->route('toko.index')
                ->with(
                    [
                        'success' => 'Mobil Berhasil di Hapus!!!'
                    ]
                );
    }

}
