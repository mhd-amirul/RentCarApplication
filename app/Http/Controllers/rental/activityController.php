<?php

namespace App\Http\Controllers\rental;

use App\Http\Controllers\Controller;
use App\Models\car;
use App\Models\history;
use App\Models\shop;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class activityController extends Controller
{

    public function activityView($id)
    {
        return view('pages.rental.aktifitas.activity')
            ->with(
                [
                    'title' => 'Aktifitas Toko',
                    'histories' => history::where('shop_id', $id)->where('status', 'on')->get(),
                    'shop' => shop::where('id', $id)->first()
                ]
            );
    }

    public function activityAdd($id)
    {
        return view('pages.rental.aktifitas.tambah')
            ->with(
                [
                    'title' => 'Add Activity',
                    'shop' => shop::find($id),
                    'cars' => car::where('shop_id', $id)->where('stok','standby')->get()
                ]
            );
    }

    public function activityStore(Request $request, $id)
    {
        $request['shop_id'] = $id;
        $request['status'] = 'on';
        $rules = [
            'nama_pinjam' => 'required',
            'tgl_pinjam' => 'required',
            'nik_pinjam' => 'required|int',
            'batas_pinjam' => 'required',
            'car_id' => 'required',
            'shop_id' => 'required',
            'status' => 'required',
            'berkas_pinjam' => 'mimes:pdf||max:1024'
        ];
        $data = $request->validate($rules);

        if ($request->file('berkas_pinjam')) {
            $data['berkas_pinjam'] = $request->file('berkas_pinjam')->store('Berkas-Peminjaman');
        }
        $car = car::where('id', $request['car_id'])->first();
        $car['stok'] = 'onused';
        $car->save();

        history::create($data);
        return redirect()->route('activityView',$id)->with('success', 'Aktifitas berhasil ditambahkan');
    }

    public function activityShow($id)
    {
        # code...
        // $data = history::findorfail($id);
        // $awal = new DateTime($data->tgl_pinjam);
        // $akhir = new DateTime($data->batas_pinjam);
        // $diff = $awal->diff($akhir);
        // $tahun = $diff->y;
        // $bulan = $diff->m;
        // $hari = $diff->d;
        // $jam = $diff->h;
        // $menit = $diff->i;

        // if ($tahun == 0 && $bulan  == 0 && $hari  == 0 && $jam  == 0 && $menit  == 0) {
        //     # code...
        //     if ($data['status' == 'on']) {
        //         # code...
        //         $data['status'] = 'late';
        //         $data->save();
        //     }
        // }

        return view('pages.rental.aktifitas.show')
            ->with(
                [
                    'title' => 'Detail Aktifitas',
                    'history' => history::findorfail($id),
                    'sisa_waktu' => '0'
                    // 'sisa_waktu' => $bulan.' bulan, '.$hari.' hari, '.$jam.' jam, '.$menit.' menit'
                ]
            );
    }

    public function activityEdit($id)
    {
        $history = history::findorfail($id);
        return view('pages.rental.aktifitas.edit')
            ->with(
                [
                    'title' => 'Add Activity',
                    'history' => $history,
                    'car' => car::where('id', $history->car_id)->first()
                ]
            );
    }

    public function activityUpdate(Request $request, $id)
    {
        $rules = [
            'nama_pinjam' => 'required',
            'tgl_pinjam' => 'required',
            'nik_pinjam' => 'required|integer|digits:16',
            'batas_pinjam' => 'required',
            'berkas_pinjam' => 'mimes:pdf||max:1024'
        ];
        $data = $request->validate($rules);

        if ($request->file('berkas_pinjam')) {
            if ($request->oldgambar1) {
                Storage::delete($request->oldgambar1);
            }
            $data['berkas_pinjam'] = $request->file('berkas_pinjam')->store('Berkas-Peminjaman');
        }

        $db = history::findorfail($id)->update($data);
        return redirect()->route('activityShow',$id)->with('success', 'Aktifitas berhasil diubah');
    }

    public function activityReturn($id)
    {
        # code...
        $data = history::where('id', $id)->first();
        $data->status = 'off';
        $car = car::where('id', $data->car_id)->first();
        $car->stok = 'standby';

        $data->save();
        $car->save();

        return redirect()->route('activityView', $car->shop_id)->with('success', 'Mobil sudah dikembalikan');
    }

    public function activityDelete($id)
    {
        # code...
        $data = history::findorfail($id);
        $car = car::where('id', $data->car_id)->first();
        if ($car->stok == 'onused') {
            $car->stok = 'standby';
            $car->save();
        }
        if ($data->berkas_pinjam) {
            # code...
            Storage::delete($data->berkas_pinjam);
        }

        $data->delete();
        return redirect()->route('activityView', $car->shop_id)->with('success', 'History dihapus');
    }

    public function activityHistory($id)
    {
        # code...
        return view('pages.rental.aktifitas.history')
                ->with(
                    [
                        'title' => 'History',
                        'histories' => history::where('shop_id', $id)->where('status', 'off')->get(),
                        'shop' => shop::findorfail($id)
                    ]
                );
    }

    public function activityViewCetak($id)
    {
        $data = [
            'data_cetak' => history::where('shop_id', $id)->get(),
            'shop' => shop::findorfail($id)
        ];

        $pdf = PDF::loadview('pages.rental.aktifitas.cetak_pdf', $data);
        return $pdf->download('laporan-history-rental.pdf');
    }
}
