<?php

namespace App\Http\Controllers\rental;

use App\Models\car;
use App\Models\shop;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\history;
use Barryvdh\DomPDF\Facade as PDF;
use DateTime;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class TokoController extends Controller
{
    public function index()
    {
        $shop = shop::where('user_id', auth()->user()->id)->first();

        return view('pages.rental.toko.shop')
                ->with(
                    [
                        'title' => 'Toko',
                        'car' => car::where('user_id', auth()->user()->id)->orderBy('merk_id')->filter(request(['search']))->get(),
                        'shop' => $shop,
                    ]
                );
    }

    public function edit($id)
    {
        $data = shop::findOrFail($id);
        return view('pages.rental.toko.editToko')
            ->with(
                [
                    'title' => 'Edit Toko',
                    'data' => $data
                ]
            );
    }

    public function update(Request $request, $id)
    {
        $db = shop::findOrFail($id);

        $rules =
        [
            'nm_pu' => 'required',
            'nm_usaha' => 'required',
            'alamat' => 'required',
            'img_ktp' => 'image|file|max:1024',
            'img_siu' => 'image|file|max:1024',
            'pas_foto' => 'image|file|max:1024',
            'foto_usaha' => 'image|file|max:1024'
        ];

        if ($request->nik != $db->nik) {
            $rules['nik'] = 'required|size:16|unique:make_shops';
        }

        $data = $request->validate($rules);
        $data['user_id'] = auth()->user()->id;

        if ($request->file('img_ktp')) {
            if ($request->oldgambar1) {
                Storage::delete($request->oldgambar1);
            }
            $data['img_ktp'] = $request->file('img_ktp')->store('ktp');
        }
        if ($request->file('img_siu')) {
            if ($request->oldgambar2) {
                Storage::delete($request->oldgambar2);
            }
            $data['img_siu'] = $request->file('img_siu')->store('surat_ijin_usaha');
        }
        if ($request->file('pas_foto')) {
            if ($request->oldgambar3) {
                Storage::delete($request->oldgambar3);
            }
            $data['pas_foto'] = $request->file('pas_foto')->store('pas_foto');
        }
        if ($request->file('foto_usaha')) {
            if ($request->oldgambar4) {
                Storage::delete($request->oldgambar4);
            }
            $data['foto_usaha'] = $request->file('foto_usaha')->store('foto_usaha');
        }

        $db->update($data);
        Alert::success('success', 'Data Toko Berhasil di Ubah');
        return redirect()
            ->route('toko.index');
    }

    public function destroy($id)
    {
        $shop = shop::findOrFail($id);
        $cars = car::where('shop_id', $shop->id)->get();

        if ($shop->img_ktp) {
            # code...
            Storage::delete($shop->img_ktp);
        }
        if ($shop->img_siu) {
            # code...
            Storage::delete($shop->img_siu);
        }
        if ($shop->pas_foto) {
            # code...
            Storage::delete($shop->pas_foto);
        }
        if ($shop->foto_usaha) {
            # code...
            Storage::delete($shop->foto_usaha);
        }

        if ($cars != null) {
            # code...
            foreach ($cars as $car) {
                # code...
                if ($car->gambar1) {
                    # code...
                    Storage::delete($car->gambar1);
                }
                if ($car->gambar2) {
                    # code...
                    Storage::delete($car->gambar2);
                }
                if ($car->gambar3) {
                    # code...
                    Storage::delete($car->gambar3);
                }
                if ($car->gambar4) {
                    # code...
                    Storage::delete($car->gambar4);
                }
                if ($car->gambar5) {
                    # code...
                    Storage::delete($car->gambar5);
                }
            }
        }

        $user = User::where('id', $shop->user_id)->first();
        $user['role'] = 'user';
        $user->save();

        $shop->delete();
        Alert::success('success', 'Toko Berhasil di Hapus');
        return redirect()
            ->route('profil.index');
    }

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
        Alert::success('Success', 'Aktifitas berhasil ditambah');
        return redirect()->route('activityView',$id);
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
            'nik_pinjam' => 'required|int',
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
        Alert::success('Success', 'Aktifitas berhasil diedit');
        return redirect()->route('activityShow',$id);
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

        Alert::success('Success', 'Mobil dikembalikan');
        return redirect()->route('activityView', $car->shop_id);
    }

    public function activityDelete($id)
    {
        # code...
        $data = history::findorfail($id);
        $car = car::where('id', $data->car_id)->first();
        $car->stok = 'standby';
        $car->save();
        $data->delete();


        Alert::success('Success', 'History dihapus');
        return redirect()->route('activityView', $car->shop_id);
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
