<?php

namespace App\Http\Controllers\home;

use App\Models\car;
use App\Models\shop;
use App\Models\kriteria;
use App\Models\alternatif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\ulasan;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home')
            ->with([
                'title' => 'Home',
                'merk' => alternatif::where('kriteria_id', 1)->get(),
                // 'kriteria' => kriteria::all(),
                // 'alternatif' => alternatif::all()
            ]);
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

        $allCars = car::where('merk_id', $request->kritmerk)
                        ->where('stok','>','0')
                        ->get();

        // $allCars = [];
        // foreach ($allKriteria as $k) {
        //     # code...
        //     $name = str_replace(' ','_',$k->nama.'_id');
        //     return response()->json($name);
        //     $allCars = car::where($name, $request[$name])
        //                     ->where('')
        //                     ->where('stok','>','0')
        //                     ->get();
        // }

        $alternatif = [];
        foreach ($allCars as $row) {
        $alternatif[$row->id] 
            = array(
                $row->merk_id,
                $row->tp_id,
                $row->kf_id,
                $row->km_id,
                $row->mp_id,
                $row->km2_id,
                $row->jb_id,
                $row->hs_id,
            );
        }

        // Mengambil data nilai 
        $db = DB::select('SELECT * FROM nilais ORDER BY car_id, kriteria_id');
        $sample = [];
        foreach ($db as $row) {
            if (!isset($sample[$row->car_id])) {
                $sample[$row->car_id] = [];
            }
            $sample[$row->car_id][$row->kriteria_id] = $row->nilai;
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
        $batas = 0;
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
            $batas++;
        }
        
        // $index = key($result);
        arsort($optimasi);
        
        foreach ($optimasi as $id_cars => $value) {
            $result[] = [
                'nilai_akhir' => $optimasi[$id_cars],
                'car_id' => $id_cars,
            ];
        }
        // ambil data mobil dari db
        $cars = [];
        for ($i=0; $i <= $batas-1; $i++) { 
            $cars[] = car::where('id', $result[$i]['car_id'])->first();
        }

        $cars = array_slice($cars, 0, 5);

        return view('pages.hasil')
            ->with(
                [
                    'title' => 'Hasil Rekomendasi',
                    'cars' => $cars
                ]
            );
    }

    public function perhitungan(Request $request)
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

        echo "<br>=========================Data Kriteria====================================<br>";
        foreach ($kriteria as $id_kriteria => $value) {
            echo $kriteria[$id_kriteria][0]." [".$kriteria[$id_kriteria][1]."] = ".$kriteria[$id_kriteria][2]."<br>";
        }

        $allCars = car::where('merk_id', $request->kritmerk)->where('stok','>','0')->get();
        $alternatif = [];
        foreach ($allCars as $row) {
        $alternatif[$row->id] 
            = array(
                $row->merk_id,
                $row->tp_id,
                $row->kf_id,
                $row->km_id,
                $row->mp_id,
                $row->km2_id,
                $row->jb_id,
                $row->hs_id,
            );
        }

        echo "<br>=========================Data Alternatif====================================<br>";
        foreach ($alternatif as $id_siswa => $value) {
            for ($i=0; $i <= 7 ; $i++) { 
                echo $alternatif[$id_siswa][$i]." | ";
            }
            echo "<br>";
        }

        // Mengambil data nilai 
        $db = DB::select('SELECT * FROM nilais ORDER BY car_id, kriteria_id');
        $sample = [];
        foreach ($db as $row) {
            if (!isset($sample[$row->car_id])) {
                $sample[$row->car_id] = [];
            }
            $sample[$row->car_id][$row->kriteria_id] = $row->nilai;
        }

        echo "<br>=========================Nilai Alternatif====================================<br>";
        foreach ($sample as $id_car => $value) {
                foreach ($kriteria as $id_kriteria => $value) {
                    echo $sample[$id_car][$id_kriteria]." | ";
                }
                echo "<br>";
        }

        $normal = $sample;
        foreach($kriteria as $id_kriteria => $k){
            $pembagi = 0;
            foreach($alternatif as $id_cars => $a){
                $pembagi += pow($sample[$id_cars][$id_kriteria], 2);
            }
            foreach($alternatif as $id_alternatif => $a){
                $normal[$id_alternatif][$id_kriteria] /= sqrt($pembagi);
            }
        }

        // MENAMPILKAN NORMALISASI MATRIX
        echo "<br>=========================Hasil Normalisasi====================================<br>";
        foreach ($normal as $id_normal => $value) {
                foreach ($kriteria as $id_kriteria => $value) {
                    echo $normal[$id_normal][$id_kriteria]." | ";
                }
                echo "<br>";
        }

        //MENGHITUNG NILAI OPTIMASI
        $optimasi = [];
        $batas = 0;
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
            $batas++;
        }

        //menampilkan NILAI OPTIMASI
        echo "<br>=========================Hasil Optimasi====================================<br>";
        foreach ($optimasi as $id_optimasi => $value) {
            echo "[".$id_optimasi."]"." = ".$optimasi[$id_optimasi];
            echo "<br>";
        }
        
        // $index = key($result);
        arsort($optimasi);
        foreach ($optimasi as $id_cars => $value) {
            $result[] = [
                'nilai_akhir' => $optimasi[$id_cars],
                'car_id' => $id_cars,
            ];
        }

        echo "<br>=========================PERANGKINGAN====================================<br>";
        foreach ($optimasi as $id_optimasi => $value) {
            echo "[".$id_optimasi."]"." = ".$optimasi[$id_optimasi];
            echo "<br>";
        }

        // ambil data mobil dari db
        $cars = [];
        for ($i=0; $i <= $batas-1; $i++) { 
            $cars[] = car::where('id', $result[$i]['car_id'])->first();
        }
        $cars = array_slice($cars, 0, 5);

        echo "<br>=========================Data Ke Fornt End====================================<br>";
        foreach ($cars as $car) {
            echo "[".$car."]"." = ";
            echo "<br>";
        }
    }

    public function detailMobil($id)
    {
        $ulasan = ulasan::where('car_id', $id);

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
                    'car' => car::findOrFail($id),
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
                    'cars' => car::latest()->filter(request(['search']))->paginate(6)->withQueryString()
                ]
            );
    }

    public function profileToko($id)
    {
        # code...
        return view('pages.profileToko')
            ->with(
                [
                    'title' => 'Informasi Toko',
                    'shop' => shop::findOrFail($id),
                    'car' => car::where('shop_id', $id)->get()
                ]
            );
    }

    public function locationForUser($id)
    {
        # code...
        $data = shop::findOrFail($id);
        return response()->json($data);
        return view('pages.mapviewuser')
            ->with([
                'title' => 'Lokasi',
                'shop' => shop::findOrFail($id)
            ]);
    }
}