<?php

namespace App\Http\Controllers\rental;

use App\Models\car;
use App\Models\shop;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DateTime;
use Illuminate\Support\Facades\Storage;

class TokoController extends Controller
{
    public function index()
    {
        $shop = shop::where('user_id', auth()->user()->id)->first();
        date_default_timezone_set('Asia/Jakarta');
        $a = new DateTime($shop->created_at);
        $now = new DateTime();
        $interval = $a->diff($now);
        $sentence = 'Toko ini sudah berdiri selama ' . $interval->y . ' tahun ' .$interval->m . ' bulan ' . $interval->d . ' hari ' . $interval->h . ' jam';
        return view('pages.rental.toko.shop')
                ->with(
                    [
                        'title' => 'Toko',
                        'shop' => $shop,
                        'jejak' => $sentence,
                        'cars' => car::where('shop_id', $shop->id)
                                    ->orderBy('id')
                                    ->filter(request(['search']))
                                    ->paginate(8)
                                    ->withQueryString(),
                    ]
                );
    }

    public function edit(shop $toko)
    {
        return view('pages.rental.toko.editToko')
            ->with(
                [
                    'title' => 'Edit Toko',
                    'data' => $toko
                ]
            );
    }

    public function update(Request $request, shop $toko)
    {
        $rules = [
            'nm_pu' => 'required',
            'nm_usaha' => 'required',
            'alamat' => 'required',
            'img_ktp' => 'image|file|max:1024',
            'img_siu' => 'image|file|max:1024',
            'pas_foto' => 'image|file|max:1024',
            'foto_usaha' => 'image|file|max:1024'
        ];

        if ($request->nik != $toko->nik) {
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

        $toko->update($data);
        return redirect()
            ->route('toko.index')->with('success', 'Data Toko Berhasil di Ubah');
    }

    public function destroy(shop $toko)
    {
        $cars = car::where('shop_id', $toko->id)->get();

        if ($toko->img_ktp) {
            # code...
            Storage::delete($toko->img_ktp);
        }
        if ($toko->img_siu) {
            # code...
            Storage::delete($toko->img_siu);
        }
        if ($toko->pas_foto) {
            # code...
            Storage::delete($toko->pas_foto);
        }
        if ($toko->foto_usaha) {
            # code...
            Storage::delete($toko->foto_usaha);
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

        $user = User::where('id', $toko->user_id)->first();
        $user['role'] = 'user';
        $user->save();

        $toko->delete();
        return redirect()
            ->route('profil.index')->with('success', 'Toko Berhasil di Hapus');
    }
}
