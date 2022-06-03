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

    public function store(Request $request)
    {
        $data = $request->all();
        return response()->json($data);

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

        // proses pengambilan nilai data mobil
        

        $merk_id = alternatif::where('id', $data['merk_id'])->first();
        $tp_id = alternatif::where('id', $data['tp_id'])->first();
        $kf_id = alternatif::where('id', $data['kf_id'])->first();
        $km_id = alternatif::where('id', $data['km_id'])->first();
        $mp_id = alternatif::where('id', $data['mp_id'])->first();
        $km2_id = alternatif::where('id', $data['km2_id'])->first();
        $jb_id = alternatif::where('id', $data['jb_id'])->first();
        $hs_id = alternatif::where('id', $data['hs_id'])->first();

        $data['kata_kunci'] =   $merk_id['nama'].
                                ', '.$tp_id['nama'].
                                ', '.$kf_id['nama'].
                                ', '.$km_id['nama'].
                                ', '.$mp_id['nama'].
                                ', '.$km2_id['nama'].
                                ', '.$jb_id['nama'].
                                ', '.$hs_id['nama'].
                                ', '.$data['deskripsi'];

        $data['user_id'] = auth()->user()->id;
        $shop = shop::where('user_id', $data['user_id'])->first();
        $data['shop_id'] = $shop->id;
        
        $car = car::create($data);

        // proses simpan data ke array 
        $kriteria1 = [
            'car_id' => $car['id'],
            'kriteria_id' => $merk_id['kriteria_id'],
            'alternatif_id' => $data['merk_id'],
            'nilai' => $merk_id['nilai']
        ];
        $kriteria2 = [
            'car_id' => $car['id'],
            'kriteria_id' => $tp_id['kriteria_id'],
            'alternatif_id' => $data['tp_id'],
            'nilai' => $tp_id['nilai']
        ];
        $kriteria3 = [
            'car_id' => $car['id'],
            'kriteria_id' => $kf_id['kriteria_id'],
            'alternatif_id' => $data['kf_id'],
            'nilai' => $kf_id['nilai']
        ];
        $kriteria4 = [
            'car_id' => $car['id'],
            'kriteria_id' => $km_id['kriteria_id'],
            'alternatif_id' => $data['km_id'],
            'nilai' => $km_id['nilai']
        ];
        $kriteria5 = [
            
            'car_id' => $car['id'],
            'kriteria_id' => $mp_id['kriteria_id'],
            'alternatif_id' => $data['mp_id'],
            'nilai' => $mp_id['nilai']
        ];
        $kriteria6 = [
            'car_id' => $car['id'],
            'kriteria_id' => $km2_id['kriteria_id'],
            'alternatif_id' => $data['km2_id'],
            'nilai' => $km2_id['nilai']
        ];
        $kriteria7 = [
            'car_id' => $car['id'],
            'kriteria_id' => $jb_id['kriteria_id'],
            'alternatif_id' => $data['jb_id'],
            'nilai' => $jb_id['nilai']
        ];
        $kriteria8 = [
            'car_id' => $car['id'],
            'kriteria_id' => $hs_id['kriteria_id'],
            'alternatif_id' => $data['hs_id'],
            'nilai' => $hs_id['nilai']
        ];

        // Proses penyimpanan data nilai ke db
        nilai::create($kriteria1);
        nilai::create($kriteria2);
        nilai::create($kriteria3);
        nilai::create($kriteria4);
        nilai::create($kriteria5);
        nilai::create($kriteria6);
        nilai::create($kriteria7);
        nilai::create($kriteria8);
        
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
                        'merk' => alternatif::where('kriteria_id', 1)->get(),
                        'tahun_produksi' => alternatif::where('kriteria_id', 2)->get(),
                        'kondisi_fisik' => alternatif::where('kriteria_id', 3)->get(),
                        'kondisi_mesin' => alternatif::where('kriteria_id', 4)->get(),
                        'muatan_penumpang' => alternatif::where('kriteria_id', 5)->get(),
                        'kapasitas_mesin' => alternatif::where('kriteria_id', 6)->get(),
                        'jenis_bbm' => alternatif::where('kriteria_id', 7)->get(),
                        'harga_sewa' => alternatif::where('kriteria_id', 8)->get(),
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
