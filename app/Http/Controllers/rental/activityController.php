<?php

namespace App\Http\Controllers\rental;

use App\Http\Controllers\Controller;
use App\Models\car;
use App\Models\history;
use App\Models\shop;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'nik_pinjam' => 'required|integer|digits:16',
            'batas_pinjam' => 'required',
            'car_id' => 'required',
            'shop_id' => 'required',
            'status' => 'required',
            'sim_peminjam' => 'mimes:jpeg,png|max:300',
            'ktp_peminjam' => 'mimes:jpeg,png|max:300',
            'foto_peminjam' => 'mimes:jpeg,png|max:300',
            'berkas_pinjam' => 'mimes:pdf,jpeg,png|max:1024'
        ];

        $data = $request->validate($rules);
        if ($request->file('sim_peminjam')) {
            $data['sim_peminjam'] = $request->file('sim_peminjam')->store('Berkas-Peminjaman');
        }
        if ($request->file('ktp_peminjam')) {
            $data['ktp_peminjam'] = $request->file('ktp_peminjam')->store('Berkas-Peminjaman');
        }
        if ($request->file('foto_peminjam')) {
            $data['foto_peminjam'] = $request->file('foto_peminjam')->store('Berkas-Peminjaman');
        }
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
        date_default_timezone_set('Asia/Jakarta');
        $data = history::findorfail($id);
        // $awal = new DateTime($data->tgl_pinjam);
        // $akhir = new DateTime($data->batas_pinjam);
        $akhir = $data->batas_pinjam;
        $now = new DateTime();
        $now = $now->format('Y-m-d H:i:s');


        // $waktu_pinjam = date_diff($awal,$akhir);
        $sisa_waktu = $akhir - $now;
        $sentence = round($sisa_waktu / (60 * 60 * 24));
        // $sisa_waktu = strtotime($now) - strtotime($time2);
        // $tahun = $interval->y.' Tahun';
        // $bulan = $interval->m.' Bulan';
        // $hari = $interval->d.' Hari';
        // $jam = $interval->h.' Jam';
        // $menit = $interval->i.' Menit';
        // $detik = $interval->s.' Detik';

        // $sentence = $waktu_pinjam->d . ' days ' . $waktu_pinjam->h . ' hours ' . $waktu_pinjam->i . ' minutes';
        // return response()->json([$today,$awal, $sentence]);

        // if ($sisa_waktu->m == 0 && $sisa_waktu->d  == 0 && $sisa_waktu->h  == 0 && $sisa_waktu->i  == 0) {
        //     # code...
        //     if ($data['status' == 'on']) {
        //         # code...
        //         $data['status'] = 'late';
        //         $data->save();
        //     }
        // }
            return response()->json($sentence);
        return view('pages.rental.aktifitas.show')
            ->with(
                [
                    'title' => 'Detail Aktifitas',
                    'history' => $data,
                    'sisa_waktu' => $sentence
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
            'batas_pinjam' => 'required',
            'sim_peminjam' => 'mimes:jpeg,png|max:300',
            'ktp_peminjam' => 'mimes:jpeg,png|max:300',
            'foto_peminjam' => 'mimes:jpeg,png|max:300',
            'berkas_pinjam' => 'mimes:pdf,jpeg,png|max:1024'
        ];

        $db = history::findorfail($id);
        if ($request->nik_pinjam != $db->nik_pinjam) {
            $rules['nik_pinjam'] =  'required|integer|digits:16';
        }

        $data = $request->validate($rules);
        if ($request->file('sim_peminjam')) {
            if ($request->oldsim) {
                Storage::delete($request->oldsim);
            }
            $data['sim_peminjam'] = $request->file('sim_peminjam')->store('Berkas-Peminjaman');
        }
        if ($request->file('ktp_peminjam')) {
            if ($request->oldktp) {
                Storage::delete($request->oldktp);
            }
            $data['ktp_peminjam'] = $request->file('ktp_peminjam')->store('Berkas-Peminjaman');
        }
        if ($request->file('foto_peminjam')) {
            if ($request->oldfoto) {
                Storage::delete($request->oldfoto);
            }
            $data['foto_peminjam'] = $request->file('foto_peminjam')->store('Berkas-Peminjaman');
        }
        if ($request->file('berkas_pinjam')) {
            if ($request->oldgambar1) {
                Storage::delete($request->oldgambar1);
            }
            $data['berkas_pinjam'] = $request->file('berkas_pinjam')->store('Berkas-Peminjaman');
        }

        $db->update($data);
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

        if ($data->sim_peminjam) {
            # code...
            Storage::delete($data->sim_peminjam);
        }
        if ($data->ktp_peminjam) {
            # code...
            Storage::delete($data->ktp_peminjam);
        }
        if ($data->foto_peminjam) {
            # code...
            Storage::delete($data->foto_peminjam);
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
        $history = history::where('shop_id', $id)
            ->where('status', 'off')
            ->get();
        $cars = car::where('shop_id', $id)->get();

        // $pdf = PDF::loadview('pages.rental.aktifitas.cetak_pdf', ['histories' => $data] );
        // return $pdf->stream('laporan.pdf');
        return view('pages.rental.aktifitas.cetak_pdf')
            ->with(
                [
                    'histories' => $history,
                    'cars' => $cars
                ]
            );
    }
}
