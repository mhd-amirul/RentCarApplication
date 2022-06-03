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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.pages-admin.allshops.allshops')
            ->with(
                [
                    'title' => 'Data Toko',
                    'shop' => shop::all()
                ]
            );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.pages-admin.allshops.tambah')
            ->with(
                [
                    'title' => 'Tambah Toko',
                    'users' => User::where('role', 'rental')->get()
                ]
            );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

        shop::create($data);
        return redirect()->route('allshops.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = shop::findOrFail($id);
        return view('pages.admin.pages-admin.allshops.edit')
            ->with(
                [
                    'data' => $data,
                    'users' => User::all(),
                    'title' => 'Edit Toko'
                ]
            );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
            $rules['nik'] = 'required|size:16|unique:make_shops';
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
        // return response()->json($data);
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
        $user = User::where('id', $shop->user_id)->first();
        $user['role'] = 'user';
        $user->save();
        $shop->delete();
        return redirect()->back();
    }
}
