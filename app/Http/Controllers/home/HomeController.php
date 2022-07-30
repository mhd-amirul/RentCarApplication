<?php

namespace App\Http\Controllers\home;

use App\Models\car;
use App\Models\shop;
use App\Models\kriteria;
use App\Models\alternatif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\nilai;
use App\Models\ulasan;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function index()
    {
        $rate = ulasan::where('rating', '5')->get();
        // return response()->json($rate);

        $i = 0;
        foreach ($rate as $r) {
            # code...
            if ($i < 10) {
                $cars[] = car::where('id', $r->car_id)->first();
                $i++;
            }
        }
        return view('pages.home')
            ->with([
                'title' => 'Home',
                // 'merk' => alternatif::where('kriteria_id', 1)->get(),
                'kriteria' => kriteria::whereNotIn('id', [3,4])->get(),
                'alternatif' => alternatif::all(),
                'shop' => shop::where('status', 'active')->get(),
                'cars' => $cars
            ]);
    }

    public function detailMobil(car $car)
    {
        $ulasan = ulasan::where('car_id', $car->id);

        $rate = $ulasan->sum('rating');
        $jumlah = $ulasan->count();
        $hasil = 0;
        if ($rate && $jumlah != null) {
            $hasil = $rate / $jumlah;
        }

        return view('pages.detail')
            ->with(
                [
                    'title' => 'Detail Mobil',
                    'car' => $car,
                    'ulasan' => $ulasan->get(),
                    'rating' => $hasil,
                    'review' => $jumlah,
                    // 'reviewCheck' => ulasan::where('user_id', auth()->user()->id)->first()
                ]
            );
    }

    public function daftarMobil()
    {
        return view('pages.mobil')
            ->with(
                [
                    'title' => 'Daftar Mobil',
                    'cars' => car::orderBy('merk_id')
                                    ->filter(request(['search']))
                                    ->paginate(8)
                                    ->withQueryString()
                ]
            );
    }

    public function profileToko(shop $shop)
    {
        # code...
        return view('pages.profileToko')
            ->with(
                [
                    'title' => 'Informasi Toko',
                    'shop' => shop::findOrFail($shop->id),
                    'car' => car::where('shop_id', $shop->id)->get()
                ]
            );
    }

    public function hitung(Request $request)
    {
        $allKriteria = kriteria::all();
        $kriteria = [];
        foreach ($allKriteria as $row) {
            $kriteria[
                $row->id
                ] = array(
                    $row->nama,
                    $row->type,
                    $row->bobot
                );
        }

        $filterCars = car::query();
        foreach ($allKriteria as $k) {
            # code...
            $name = str_replace(' ','_',$k->nama.'_id');
            if ($request->filled($name)) {
                $filterCars->where($name, $request[$name])->where('stok','standby');
            }
            if ($request->filled('shop_id')) {
                $filterCars->where('shop_id', $request['shop_id']);
            }
        }
        $allCars = $filterCars->get();

        $alternatif = [];
        foreach ($allCars as $row) {
        $alternatif[$row->id]
            = array(
                $row->merk_id,
                $row->Tahun_Produksi_id,
                $row->Kondisi_Fisik_id,
                $row->Kondisi_Mesin_id,
                $row->Muatan_Penumpang_id,
                $row->Kapasitas_Mesin_id,
                $row->Jenis_BBM_id,
                $row->Harga_Sewa_id,
            );
        }

        // Mengambil data nilai
        $nilai = DB::select('SELECT * FROM nilais ORDER BY car_id, kriteria_id');
        $db = [];
        foreach ($nilai as $nilai) {
            foreach ($allCars as $car) {
                if ($car->id == $nilai->car_id) {
                    $db[] = $nilai;
                }
            }
        }

        $sample = [];
        foreach ($db as $row) {
            if (!isset($sample[$row->car_id])) {
                $sample[$row->car_id] = [];
            }
            foreach ($allCars as $car) {
                # code...
                if ($car->id == $row->car_id) {
                    $sample[$row->car_id][$row->kriteria_id] = $row->nilai;
                }
            }
        }

        $normal = $sample;
        foreach($kriteria as $id_kriteria => $k){
            $pembagi = 0;
            foreach($alternatif as $id_cars => $a){
                $pembagi += pow($sample[$id_cars][$id_kriteria], 2);
            }
            foreach($alternatif as $id_cars => $a){
                $normal[$id_cars][$id_kriteria] /= sqrt($pembagi);
            }
        }

        //MENGHITUNG NILAI OPTIMASI
        $optimasi = [];
        foreach($alternatif as $id_cars => $a){
            $optimasi[$id_cars] = 0;
            foreach($kriteria as $id_kriteria => $k){
                $data[$id_cars] = $normal[$id_cars][$id_kriteria] * $k[2];
                if ($k[1] == 'benefit') {
                    $optimasi[$id_cars] += $data[$id_cars];
                } elseif ($k[1] == 'cost') {
                    $optimasi[$id_cars] -= $data[$id_cars];
                } else {
                    continue;
                }
            }
        }

        // $index = key($result);
        arsort($optimasi);
        $cars = [];
        foreach ($optimasi as $id_cars => $value) {
            $cars[] = car::where('id', $id_cars)->first();
        }

        $cars = array_slice($cars, 0, 10);

        return view('pages.hasil')
            ->with(
                [
                    'title' => 'Hasil Rekomendasi',
                    'cars' => $cars
                ]
            );
    }

    public function proses_hitung(Request $request)
    {
        // Mengambil semua data kriteria
        $allKriteria = kriteria::all();
        $kriteria = [];
        // input data kriteria dalam array
        foreach ($allKriteria as $row) {
            $kriteria[
                $row->id
                ] = array(
                    $row->nama,
                    $row->type,
                    $row->bobot
                );
        }

        // buat variabel query untuk menyimpan query
        $filterCars = car::query();
        // looping data mobil yang sesuai dengan query filter user
        foreach ($allKriteria as $k) {
            # code...
            $name = str_replace(' ','_',$k->nama.'_id');
            if ($request->filled($name)) {
                $filterCars->where($name, $request[$name])->where('stok','standby');
            }
            if ($request->filled('shop_id')) {
                $filterCars->where('shop_id', $request['shop_id']);
            }
        }
        // ambil semua data sesudah query filter
        $allCars = $filterCars->get();

        // ambil data alternatif dari mobil hasil query
        $alternatif = [];
        foreach ($allCars as $row) {
        $alternatif[$row->id]
            = array(
                $row->merk_id,
                $row->Tahun_Produksi_id,
                $row->Kondisi_Fisik_id,
                $row->Kondisi_Mesin_id,
                $row->Muatan_Penumpang_id,
                $row->Kapasitas_Mesin_id,
                $row->Jenis_BBM_id,
                $row->Harga_Sewa_id,
            );
        }

        // Mengambil data nilai yang diurutkan
        $nilai = DB::select('SELECT * FROM nilais ORDER BY car_id, kriteria_id');
        $db = [];
        // mengambil nilai mobil dari mobil hasil query
        foreach ($nilai as $nilai) {
            foreach ($allCars as $car) {
                if ($car->id == $nilai->car_id) {
                    $db[] = $nilai;
                }
            }
        }

        $sample = [];
        // membuat array sample dengan id dari mobil dan isi nya nilai mobil
        foreach ($db as $row) {
            if (!isset($sample[$row->car_id])) {
                $sample[$row->car_id] = [];
            }
            foreach ($allCars as $car) {
                # code...
                if ($car->id == $row->car_id) {
                    $sample[$row->car_id][$row->kriteria_id] = $row->nilai;
                }
            }
        }

        // copy to new variable
        $normal = $sample;
        // Proses Normalisasi Metode MOORA
        foreach($kriteria as $id_kriteria => $k){
            $pembagi = 0;
            foreach($alternatif as $id_cars => $a){
                $pembagi += pow($sample[$id_cars][$id_kriteria], 2);
                $data[] = $pembagi;
            }
            foreach($alternatif as $id_cars => $a){
                $normal[$id_cars][$id_kriteria] /= sqrt($pembagi);
            }
        }

        $optimasi = [];
        // Proses Optimasi Metode MOORA
        foreach($alternatif as $id_cars => $a){
            $optimasi[$id_cars] = 0;
            foreach($kriteria as $id_kriteria => $k){
                $data[$id_cars] = $normal[$id_cars][$id_kriteria] * $k[2];
                if ($k[1] == 'benefit') {
                    $optimasi[$id_cars] += $data[$id_cars];
                } else {
                    $optimasi[$id_cars] -= $data[$id_cars];
                }
            }
        }

        // $index = key($result);
        $rank = $optimasi;
        arsort($rank);

        $i = 0;
        $cars = [];
        foreach ($rank as $id_cars => $value) {
            $i += 1;
            $cars[] = car::where('id', $id_cars)->first();
            foreach ($cars as $car) {
                if ($car->id == $id_cars) {
                    $car->nilai = $value;
                    $car->ranking = $i;
                }
            }
        }

        $cars = array_slice($cars, 0, 10);
        return view('pages.proses_perhitungan')
            ->with(
                [
                    'title' => 'Hasil Rekomendasi',
                    'cars' => $cars,
                    'allCars' => $allCars,
                    'kriteria' => $allKriteria,
                    'alternatif' => alternatif::orderBy('id')->paginate(7),
                    'kriteria2' => $kriteria,
                    'sample' => $sample,
                    'normal' => $normal,
                    'optimasi' => $optimasi,
                ]
            );
    }
}
