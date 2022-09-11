<?php

namespace App\Http\Controllers\home;

use App\Models\car;
use App\Models\shop;
use App\Models\kriteria;
use App\Models\alternatif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\discount;
use App\Models\nilai;
use App\Models\ulasan;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function index()
    {
        $rate = ulasan::where('rating', '5')->get();
        $diskon = discount::all();
        $disCars = [];
        foreach ($diskon as $disk) {
            $disCars[] = car::where('id', $disk->car_id)->first();
            foreach ($disCars as $car) {
                if ($car->id == $disk->car_id) {
                    $car['diskon'] = $disk->discount;
                }
            }
        }
        // return response()->json($disCars);

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
                'cars' => $cars,
                'diskon' => $disCars
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
        $diskon = discount::where('car_id', $car->id)->first();
        if ($diskon) {
            $dis = $car->harga_sewa->nama * ($diskon->discount / 100);
            $car['Harga_Sewa_id'] = $car->harga_sewa->nama - $dis;
        }
        return view('pages.detail')
            ->with(
                [
                    'title' => 'Detail Mobil',
                    'car' => $car,
                    'ulasan' => $ulasan->get(),
                    'rating' => $hasil,
                    'review' => $jumlah,
                    'diskon' => $diskon,
                    // 'reviewCheck' => ulasan::where('user_id', auth()->user()->id)->first()
                ]
            );
    }

    public function daftarMobil()
    {
        // return view('pages.mobil')
        //     ->with(
        //         [
        //             'title' => 'Daftar Mobil',
        //             'cars' => car::orderBy('Tahun_Produksi_id')
        //                             ->filter(request(['search']))
        //                             ->paginate(20)
        //                             ->withQueryString()
        //         ]
        //     );
        return view('pages.mobil')
        ->with(
            [
                'title' => 'Daftar Mobil',
                'cars' => car::all()
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
            if ($row->id != 1) {
                $kriteria[
                    $row->id
                    ] = array(
                        $row->nama,
                        $row->type,
                        $row->bobot
                    );
            }
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

        $alter = [];
        foreach ($allCars as $row) {
        $alter[$row->id]
            = array(
                // $row->merk_id,
                $row->Tahun_Produksi_id,
                $row->Kondisi_Fisik_id,
                $row->Kondisi_Mesin_id,
                $row->Muatan_Penumpang_id,
                $row->Kapasitas_Mesin_id,
                $row->Jenis_BBM_id,
                $row->Harga_Sewa_id,
            );
        }

        $alternatif = alternatif::all();
        $db = [];
        foreach ($alter as $car => $key) {
            foreach ($alternatif as $all) {
                if ($all->id == $key[0]) {
                    $db[] = [
                        "car_id" => $car,
                        "kriteria_id" => $all->kriteria_id,
                        "alternatif_id" => $all->id,
                        "nilai" => $all->nilai,
                    ];
                }
                if ($all->id == $key[1]) {
                    $db[] = [
                        "car_id" => $car,
                        "kriteria_id" => $all->kriteria_id,
                        "alternatif_id" => $all->id,
                        "nilai" => $all->nilai,
                    ];
                }
                if ($all->id == $key[2]) {
                    $db[] = [
                        "car_id" => $car,
                        "kriteria_id" => $all->kriteria_id,
                        "alternatif_id" => $all->id,
                        "nilai" => $all->nilai,
                    ];
                }
                if ($all->id == $key[3]) {
                    $db[] = [
                        "car_id" => $car,
                        "kriteria_id" => $all->kriteria_id,
                        "alternatif_id" => $all->id,
                        "nilai" => $all->nilai,
                    ];
                }
                if ($all->id == $key[4]) {
                    $db[] = [
                        "car_id" => $car,
                        "kriteria_id" => $all->kriteria_id,
                        "alternatif_id" => $all->id,
                        "nilai" => $all->nilai,
                    ];
                }
                if ($all->id == $key[5]) {
                    $db[] = [
                        "car_id" => $car,
                        "kriteria_id" => $all->kriteria_id,
                        "alternatif_id" => $all->id,
                        "nilai" => $all->nilai,
                    ];
                }
                if ($all->id == $key[6]) {
                    $db[] = [
                        "car_id" => $car,
                        "kriteria_id" => $all->kriteria_id,
                        "alternatif_id" => $all->id,
                        "nilai" => $all->nilai,
                    ];
                }
                // if ($all->id == $key[7]) {
                //     $db[] = [
                //         "car_id" => $car,
                //         "kriteria_id" => $all->kriteria_id,
                //         "alternatif_id" => $all->id,
                //         "nilai" => $all->nilai,
                //     ];
                // }
            }
        }

        $sample = [];
        foreach ($db as $row) {
            if (!isset($sample[$row['car_id']])) {
                $sample[$row['car_id']] = [];
            }
            foreach ($allCars as $car) {
                # code...
                if ($car->id == $row['car_id']) {
                    $sample[$row['car_id']][$row['kriteria_id']] = intval($row['nilai']);
                }
            }
        }

        $normal = $sample;
        foreach($kriteria as $id_kriteria => $k){
            $pembagi = 0;
            foreach($alter as $id_cars => $a){
                $pembagi += pow($sample[$id_cars][$id_kriteria], 2);
            }
            foreach($alter as $id_cars => $a){
                $normal[$id_cars][$id_kriteria] /= sqrt($pembagi);
            }
        }

        //MENGHITUNG NILAI OPTIMASI
        $optimasi = [];
        foreach($alter as $id_cars => $a){
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
        $i = 0;
        foreach ($optimasi as $id_cars => $value) {
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
            if ($row->id != 1) {
                $kriteria[
                    $row->id
                    ] = array(
                        $row->nama,
                        $row->type,
                        $row->bobot
                    );
            }
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
        $alter = [];
        foreach ($allCars as $row) {
        $alter[$row->id]
            = array(
                // $row->merk_id,
                $row->Tahun_Produksi_id,
                $row->Kondisi_Fisik_id,
                $row->Kondisi_Mesin_id,
                $row->Muatan_Penumpang_id,
                $row->Kapasitas_Mesin_id,
                $row->Jenis_BBM_id,
                $row->Harga_Sewa_id,
            );
        }

        $alternatif = alternatif::all();
        $db = [];
        foreach ($alter as $car => $key) {
            foreach ($alternatif as $all) {
                if ($all->id == $key[0]) {
                    $db[] = [
                        "car_id" => $car,
                        "kriteria_id" => $all->kriteria_id,
                        "alternatif_id" => $all->id,
                        "nilai" => $all->nilai,
                    ];
                }
                if ($all->id == $key[1]) {
                    $db[] = [
                        "car_id" => $car,
                        "kriteria_id" => $all->kriteria_id,
                        "alternatif_id" => $all->id,
                        "nilai" => $all->nilai,
                    ];
                }
                if ($all->id == $key[2]) {
                    $db[] = [
                        "car_id" => $car,
                        "kriteria_id" => $all->kriteria_id,
                        "alternatif_id" => $all->id,
                        "nilai" => $all->nilai,
                    ];
                }
                if ($all->id == $key[3]) {
                    $db[] = [
                        "car_id" => $car,
                        "kriteria_id" => $all->kriteria_id,
                        "alternatif_id" => $all->id,
                        "nilai" => $all->nilai,
                    ];
                }
                if ($all->id == $key[4]) {
                    $db[] = [
                        "car_id" => $car,
                        "kriteria_id" => $all->kriteria_id,
                        "alternatif_id" => $all->id,
                        "nilai" => $all->nilai,
                    ];
                }
                if ($all->id == $key[5]) {
                    $db[] = [
                        "car_id" => $car,
                        "kriteria_id" => $all->kriteria_id,
                        "alternatif_id" => $all->id,
                        "nilai" => $all->nilai,
                    ];
                }
                if ($all->id == $key[6]) {
                    $db[] = [
                        "car_id" => $car,
                        "kriteria_id" => $all->kriteria_id,
                        "alternatif_id" => $all->id,
                        "nilai" => $all->nilai,
                    ];
                }
                // if ($all->id == $key[7]) {
                //     $db[] = [
                //         "car_id" => $car,
                //         "kriteria_id" => $all->kriteria_id,
                //         "alternatif_id" => $all->id,
                //         "nilai" => $all->nilai,
                //     ];
                // }
            }
        }

        $sample = [];
        // membuat array sample dengan id dari mobil dan isi nya nilai mobil
        foreach ($db as $row) {
            if (!isset($sample[$row['car_id']])) {
                $sample[$row['car_id']] = [];
            }
            foreach ($allCars as $car) {
                # code...
                if ($car->id == $row['car_id']) {
                    $sample[$row['car_id']][$row['kriteria_id']] = intval($row['nilai']);
                }
            }
        }

        // copy to new variable
        $normal = $sample;
        // Proses Normalisasi Metode MOORA
        foreach($kriteria as $id_kriteria => $k){
            $pembagi = 0;
            foreach($alter as $id_cars => $a){
                $pembagi += pow($sample[$id_cars][$id_kriteria], 2);
            }
            foreach($alter as $id_cars => $a){
                $normal[$id_cars][$id_kriteria] /= sqrt($pembagi);
            }
        }

        $optimasi = [];
        // Proses Optimasi Metode MOORA

        foreach($alter as $id_cars => $a){
            $optimasi[$id_cars] = 0;
            // $tesb[$id_cars] = 0;
            // $tesc[$id_cars] = 0;
            foreach($kriteria as $id_kriteria => $k){
                $data[$id_cars] = $normal[$id_cars][$id_kriteria] * $k[2];
                // $tes[] = $normal[$id_cars][$id_kriteria] * $k[2];
                // $tes[] = $id_cars.'|'.$id_kriteria;
                if ($k[1] == 'benefit') {
                    $optimasi[$id_cars] += $data[$id_cars];
                    // $tesb[$id_cars] += $data[$id_cars];
                } elseif ($k[1] == 'cost') {
                    $optimasi[$id_cars] -= $data[$id_cars];
                    // $tesc[$id_cars] -= $data[$id_cars];
                } else {
                    continue;
                }
            }
        }
        // $tess =  ;
        // return response()->json($tess);
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
