<?php

namespace App\Http\Controllers\map;

use App\Http\Controllers\Controller;
use App\Models\shop;
use Illuminate\Http\Request;

class mapController extends Controller
{
    public function setLocation(shop $map)
    {
        # code...
        return view('pages.rental.toko.setLocation')
            ->with(
                [
                    'title' => 'Set Lokasi Toko',
                    'shop' => $map
                ]
            );
    }

    public function saveLocation(Request $request, shop $map)
    {
        # code...
        $val = $request->validate(
            [
                'longitude' => 'required',
                'latitude' => 'required'
            ]
        );

        $map->update($val);
        return redirect()->route('toko.index')->with('success', 'Lokasi toko berhasil di atur');
    }

    public function shareLocation(shop $shop)
    {
        # code...
        return view('pages.mapviewuser')
            ->with(
                [
                    'title' => 'Lokasi Toko',
                    'shop' => shop::findOrFail($shop->id)
                ]
            );
    }
}
