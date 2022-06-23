<?php

namespace App\Http\Controllers\map;

use App\Http\Controllers\Controller;
use App\Models\shop;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class mapController extends Controller
{
    public function setLocation($id)
    {
        # code...
        return view('pages.rental.setLocation')
            ->with(
                [
                    'title' => 'Set Lokasi Toko',
                    'shop' => shop::findOrFail($id)
                ]
            );
    }

    public function saveLocation(Request $request, $id)
    {
        # code...
        $val = $request->validate(
            [
                'longitude' => 'required',
                'latitude' => 'required'
            ]
        );

        $db = shop::findOrFail($id);
        $db->update($val);
        Alert::success('success', 'Lokasi Toko Berhasil di Atur');
        return redirect()->route('toko.index');
    }

    public function shareLocation($id)
    {
        # code...
        return view('pages.mapviewuser')
            ->with(
                [
                    'title' => 'Lokasi Toko',
                    'shop' => shop::findOrFail($id)
                ]
            );
    }
}
