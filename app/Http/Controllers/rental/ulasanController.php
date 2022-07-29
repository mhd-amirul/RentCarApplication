<?php

namespace App\Http\Controllers\rental;

use App\Http\Controllers\Controller;
use App\Models\car;
use App\Models\ulasan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ulasanController extends Controller
{
    public function ulasanView(car $car)
    {
        return view('pages.ulasan')
            ->with(
                [
                    'title' => 'Ulasan',
                    'car' => $car
                ]
            );
    }

    public function createUlasan(Request $request, car $car)
    {
        $rules = [
            'car_id' => 'required',
            'user_id' => 'required',
            'rating' => 'required',
            'slug' => 'required|unique:ulasans',
            'komentar' => 'required|max:500'
        ];

        $request['slug'] = Str::random(50);
        $request['user_id'] = auth()->user()->id;
        $val = $request->validate($rules);

        ulasan::create($val);
        return redirect()->route('detailMobil', $car->slug)->with('success', 'Ulasan berhasil ditambah');
    }

    public function deleteUlasan(Ulasan $ulasan)
    {
        # code...
        $ulasan->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus komentar');
    }

    public function editUlasan(Ulasan $ulasan)
    {
        # code...
        return view('pages.editulasan')
            ->with(
                [
                    'title' => 'edit ulasan',
                    'ulasan' => $ulasan
                ]
            );
    }

    public function updateUlasan(Request $request, Ulasan $ulasan)
    {
        $rules = [
            'rating' => 'required',
            'komentar' => 'required|max:500'
        ];

        $data = $request->validate($rules);
        $car = car::where('id', $ulasan->car_id)->first();

        $ulasan->update($data);
        return redirect()
            ->route('detailMobil',$car->slug)
            ->with('success', 'ulasan berhasil diubah');
    }
}
