<?php

namespace App\Http\Controllers\rental;

use App\Models\car;
use App\Models\shop;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class TokoController extends Controller
{
    public function index()
    {
        $shop = shop::where('user_id', auth()->user()->id)->first();
        
        $lock = [];
        if ($shop->longitude != null && $shop->latitude != null) {
            # code...
            $lock = [
                    'longitude' => $shop->longitude,
                    'latitude' => $shop->latitude];
        } else {
            $lock = [];
        }

        return view('pages.rental.shop')
                ->with(
                    [
                        'title' => 'Toko',
                        'car' => car::where('user_id', auth()->user()->id)->filter(request(['search']))->get(),
                        'shop' => $shop,
                        'lockCheck' => $lock
                    ]
                );
    }

    public function edit($id)
    {
        $data = shop::findOrFail($id);
        return view('pages.rental.editToko')
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
        return redirect()
            ->route('toko.index')
            ->with('success', 'Data Toko Berhasil di Ubah');
    }

    public function destroy($id)
    {
        $rm = shop::findOrFail($id);
        Storage::delete([
            $rm->img_ktp,
            $rm->img_siu,
            $rm->pas_foto,
            $rm->foto_usaha
        ]);
        $rm->delete();
        
        $user = User::where('id', auth()->user()->id)->first();
        $user['role'] = 'user';
        $user->save();
        return redirect()
            ->route('profil.index')
            ->with('success', 'Toko Berhasil di Hapus');
    }

    
    // public function create()
    // {
    //     //
    // }

    // public function store(Request $request)
    // {
    //     //
    // }

    // public function show($id)
    // {
    //     //
    // }
}
