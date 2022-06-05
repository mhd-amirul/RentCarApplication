<?php

namespace App\Http\Controllers\admin;

use App\Models\car;
use App\Models\shop;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class allShopsController extends Controller
{
    public function index()
    {
        return view('pages.admin.pages-admin.allshops.allshops')
            ->with(
                [
                    'title' => 'Data Toko',
                    'shop' => shop::latest()->filterShop(request(['searchShop']))->get()
                ]
            );
    }

    public function create()
    {
        return view('pages.admin.pages-admin.allshops.tambah')
            ->with(
                [
                    'title' => 'Tambah Toko',
                    'users' => User::where('role', 'user')->get()
                ]
            );
    }

    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'user_id' => '',
                'nm_pu' => 'required',
                'nm_usaha' => 'required',
                'alamat' => 'required',
                'nik' => 'required|size:16|unique:make_shops',
                'img_ktp' => 'image|file|max:1024',
                'img_siu' => 'image|file|max:1024',
                'pas_foto' => 'image|file|max:1024',
                'foto_usaha' => 'image|file|max:1024'
            ]
        );

        if ($request->file('img_ktp')) {
            $data['img_ktp'] = $request->file('img_ktp')->store('ktp');
        }

        if ($request->file('img_siu')) {
            $data['img_siu'] = $request->file('img_siu')->store('surat_ijin_usaha');
        }

        if ($request->file('pas_foto')) {
            $data['pas_foto'] = $request->file('pas_foto')->store('pas_foto');
        }

        if ($request->file('foto_usaha')) {
            $data['foto_usaha'] = $request->file('foto_usaha')->store('foto_usaha');
        }

        $user = User::where('id', $request['user_id'])->first();
        $user['role'] = 'rental';

        shop::create($data);
        $user->save();
        return redirect()->route('allshops.index');
    }


    public function show($id)
    {
        return view('pages.admin.pages-admin.allshops.show')
            ->with(
                [
                    'title' => 'Detail Toko',
                    'car' => car::where('shop_id', $id)->get(),
                    'shop' => shop::where('id', $id)->first(),

                ]
            );
    }

    public function edit($id)
    {
        return view('pages.admin.pages-admin.allshops.edit')
            ->with(
                [
                    'data' => shop::findOrFail($id),
                    'users' => User::where('role','<>','admin')->get(),
                    'title' => 'Edit Toko'
                ]
            );
    }

    public function update(Request $request, $id)
    {
        $db = shop::findOrFail($id);

        $rules = 
        [
            'user_id' => '',
            'nm_pu' => 'required',
            'nm_usaha' => 'required',
            'alamat' => 'required',
            'img_ktp' => 'image|file|max:1024',
            'img_siu' => 'image|file|max:1024',
            'pas_foto' => 'image|file|max:1024',
            'foto_usaha' => 'image|file|max:1024'
        ];

        if ($request->nik != $db->nik) {
            $rules['nik'] = 'required|size:16|unique:shops';
        }

        $data = $request->validate($rules);

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
        return redirect()->route('allshops.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shop = shop::findOrFail($id);
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
        
        $user = User::where('id', $shop->user_id)->first();
        $user['role'] = 'user';
        $user->save();
        
        $shop->delete();
        return redirect()
            ->route('allshops.index')
            ->with('success', 'Toko Berhasil di Hapus');
    }
}
