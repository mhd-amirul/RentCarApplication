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
        return view('pages.home')
            ->with([
                'title' => 'Home',
                // 'merk' => alternatif::where('kriteria_id', 1)->get(),
                'kriteria' => kriteria::whereNotIn('id', [3,4])->get(),
                'alternatif' => alternatif::all()
            ]);
    }

    public function hitung(Request $request)
    {
        $kriteria = kriteria::all();
        $filterCars = car::query();

        foreach ($kriteria as $k) {
            # code...
            $name = str_replace(' ','_',$k->nama.'_id');
            if ($request->filled($name)) {
                $filterCars->where($name, $request[$name]);
            }
        }
        $allCars = $filterCars->get();
        return response()->json($allCars);




        // return response()->json($allCars);


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

        $alternatif = [];
        foreach ($allCars as $row) {
        $alternatif[$row->id]
            = array(
                $row->merk_id,
                $row->Tahun_Produksi_id,
                $row->Kondisi_Fisik_id,
                $row->Kondisi_Mesin_id,
                $row->Muatan_Penumpang_id,
                $row->Kapasitan_Mesin_id,
                $row->Jenis_BBM_id,
                $row->Harga_Sewa_id,
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
        arsort($optimasi);
        $cars = [];
        foreach ($optimasi as $id_cars => $value) {
            $result[] = [
                'nilai_akhir' => $optimasi[$id_cars],
                'car_id' => $id_cars,
            ];

            $cars[] = car::where('id', $id_cars)->first();
        }

        $cars = array_slice($cars, 0, 10);

        if ($cars) { Alert::success('Success'); }
        elseif ($cars == null){ Alert::error('Failed'); }
        else { Alert::error('Unknown Error'); }

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
                $row->Tahun_Produksi_id,
                $row->Kondisi_Fisik_id,
                $row->Kondisi_Mesin_id,
                $row->Muatan_Penumpang_id,
                $row->Kapasitan_Mesin_id,
                $row->Jenis_BBM_id,
                $row->Harga_Sewa_id,
            );
        }

        echo "<br>=========================Data Alternatif====================================<br>";
        foreach ($alternatif as $id_alt => $value) {
            for ($i=0; $i <= 7 ; $i++) {
                echo $alternatif[$id_alt][$i]." | ";
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
        }

        //menampilkan NILAI OPTIMASI
        echo "<br>=========================Hasil Optimasi====================================<br>";
        foreach ($optimasi as $id_optimasi => $value) {
            echo "[".$id_optimasi."]"." = ".$optimasi[$id_optimasi];
            echo "<br>";
        }

        // $index = key($result);
        arsort($optimasi);
        $cars = [];
        foreach ($optimasi as $id_cars => $value) {
            $result[] = [
                'nilai_akhir' => $optimasi[$id_cars],
                'car_id' => $id_cars,
            ];
            $cars[] = car::where('id', $id_cars)->first();
        }

        echo "<br>=========================PERANGKINGAN====================================<br>";
        foreach ($optimasi as $id_optimasi => $value) {
            echo "[".$id_optimasi."]"." = ".$optimasi[$id_optimasi];
            echo "<br>";
        }
        $cars = array_slice($cars, 0, 5);

        echo "<br>=========================HASIL REKOMENDASI====================================<br>";
        foreach ($cars as $car) {
            echo "===============================================================================<br>
                    [".$car."]
                <br>===============================================================================";
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
                    'cars' => car::orderBy('merk_id')
                                    ->filter(request(['search']))
                                    ->paginate(8)
                                    ->withQueryString()
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
