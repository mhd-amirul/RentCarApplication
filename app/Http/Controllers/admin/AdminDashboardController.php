<?php

namespace App\Http\Controllers\admin;

use App\Models\makeShop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\alternatif;
use App\Models\car;
use App\Models\kriteria;
use App\Models\nilai;
use App\Models\shop;
use Illuminate\Support\Str;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('pages.admin.dashboard')
                ->with(
                    [
                        'title' => 'Administrator',
                        'makeshop' => makeShop::where('status', 'review')->fillter(request(['searchms']))->get()
                    ]
                );
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['slug'] = Str::random(50);
        $ms = makeShop::where('user_id', $request->user_id)->first();
        $ms->status = 'accept';
        $ms->save();
        shop::create($data);

        return redirect()
            ->route('dashboard.index')
            ->with('success', 'Permintaan di Terima');
    }

    public function show(makeShop $dashboard)
    {
        return view('pages.admin.acceptShop',
            [
                'title' => 'Konfirmasi Toko',
                'ms' => $dashboard
            ]
        );
    }

    public function declineShop(Request $request)
    {
        # code...
        $ms = makeShop::where('id', $request->id)->first();
        $ms->status = 'decline';
        $ms->keterangan = $request->keterangan;

        $ms->save();
        return redirect()->route('dashboard.index')->with('success', 'Permintaan ditolak!');
    }

    // public function destroy($id)
        // {
        //     $rm = makeShop::findOrFail($id);
        //     if ($rm->img_ktp) {
        //         # code...
        //         Storage::delete($rm->img_ktp);
        //     }
        //     if ($rm->img_siu) {
        //         # code...
        //         Storage::delete($rm->img_siu);
        //     }
        //     if ($rm->pas_foto) {
        //         # code...
        //         Storage::delete($rm->pas_foto);
        //     }
        //     if ($rm->foto_usaha) {
        //         # code...
        //         Storage::delete($rm->foto_usaha);
        //     }

        //     $rm->delete();
        //     return redirect()
        //         ->route('dashboard.index')->with('failed', 'Permintaan di Tolak');
    // }

    public function AddAllImage($id)
    {
        // $nilaimerk = 1;
        // foreach ($dbcar as $db) {
        //     if ($db->kriteria_id == 1) {
        //         # code...
        //         $db->nilai = $nilaimerk;
        //         $db->save();
        //     }
        //     if ($db->merk_id == $car->merk_id && $db->Tahun_Produksi_id == $car->Tahun_Produksi_id ) {
        //         # code...
        //         $db->gambar1 = $car->gambar1;
        //         $db->gambar2 = $car->gambar2;
        //         $db->gambar3 = $car->gambar3;
        //         $db->gambar4 = $car->gambar4;
        //         $db->gambar5 = $car->gambar5;
        //         $db->save();
        //     }
        // }
        // ADD DATA NILAI UNTUK CAR
        // $kriteria = kriteria::all();
        // $cars = car::where('shop_id', '5')->get();
        // $cars = car::whereBetween('id', [907, 955])->get();
        // return response()->json($cars);
        // foreach ($cars as $data) {
        //     foreach ($kriteria as $k) {
        //         $name = str_replace(' ','_',$k->nama.'_id');
        //         $db = alternatif::where('id', $data[$name])->first();
        //         if ($db['kriteria_id'] == $k->id) {
        //             # code...
        //             $nilai = [
        //                 'car_id' => $data->id,
        //                 'kriteria_id' => $k->id,
        //                 'alternatif_id' => $data[$name],
        //                 'nilai' => $db->nilai
        //             ];
        //             nilai::create($nilai);
        //         }
        //     }
        // }
        // ADD DATA KATA KUNCI
        // $data = car::where('shop_id', '10')->get();
        // $kriteria = kriteria::all();
        // foreach ($data as $data) {
        //     foreach ($kriteria as $k) {
        //         # code...
        //         $name = str_replace(' ','_',$k->nama.'_id');
        //         $db = alternatif::where('id', $data[$name])->first();
        //         if ($db->kriteria_id == $k->id) {
        //             // $data['kata_kunci'] = Null;
        //             $data['kata_kunci'] .= $db->nama.', ';
        //         }
        //     }
        //     $data->save();
        // }
        // ADD SLUG OTOMATIS
        $data = car::where('slug', Null)->get();
        foreach ($data as $car) {
            $car['slug'] = sha1(Str::random(10).time().microtime());
            $car->save();
        }
        // ADD PLAT OTOMATIS
        // $data = car::where('shop_id', '10')->get();
        // foreach ($data as $car) {
        //     $car['no_polisi'] = 'bl'.rand(100, 999).rand(0, 9).'ag';
        //     $car->save();
        // }
        return response()->json($data);
    }
}
