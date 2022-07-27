<?php

namespace App\Http\Controllers\admin;

use App\Models\makeShop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\alternatif;
use App\Models\car;
use App\Models\nilai;
use App\Models\shop;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

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
        $ms = makeShop::where('user_id', $request->user_id)->first();
        $ms->status = 'accept';
        $ms->save();
        shop::create($data);

        return redirect()
            ->route('dashboard.index')
            ->with('success', 'Permintaan di Terima');
    }

    public function show($id)
    {
        return view('pages.admin.acceptShop',
            [
                'title' => 'Konfirmasi Toko',
                'ms' => makeShop::findOrFail($id)
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

    // public function AddAllImage($id)
    //     {
        //     $db = shop::findorfail($id);
        //     $car = car::where('id', 40)->first();
            // $dbcar = car::all();
            // $dbcar = alternatif::all();
            // $nilaimerk = 1;
            // foreach ($dbcar as $db) {
            //     if ($db->kriteria_id == 1) {
            //         # code...
            //         $db->nilai = $nilaimerk;
            //         $db->save();
            //     }
                // if ($db->merk_id == $car->merk_id && $db->Tahun_Produksi_id == $car->Tahun_Produksi_id ) {
        //             # code...
        //             $db->gambar1 = $car->gambar1;
        //             $db->gambar2 = $car->gambar2;
        //             $db->gambar3 = $car->gambar3;
        //             $db->gambar4 = $car->gambar4;
        //             $db->gambar5 = $car->gambar5;
        //             $db->save();
                // }
            // }
        //     return redirect()->back();
    // }
}
