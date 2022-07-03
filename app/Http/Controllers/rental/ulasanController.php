<?php

namespace App\Http\Controllers\rental;

use App\Http\Controllers\Controller;
use App\Models\car;
use App\Models\ulasan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ulasanController extends Controller
{
    public function ulasanView($id)
    {
        return view('pages.ulasan')
            ->with(
                [
                    'title' => 'Ulasan',
                    'car' => car::findOrFail($id)
                ]
            );
    }

    public function createUlasan(Request $request, $id)
    {
        $val = $request->validate(
            [
                'car_id' => 'required',
                'rating' => 'required',
                'komentar' => 'required'
            ]
        );

        $val['user_id'] = auth()->user()->id;
        ulasan::create($val);
        return redirect()->route('detailMobil', $id)->with('success', 'Ulasan berhasil ditambah');
    }
}
