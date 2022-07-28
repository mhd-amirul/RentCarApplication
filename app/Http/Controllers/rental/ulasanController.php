<?php

namespace App\Http\Controllers\rental;

use App\Http\Controllers\Controller;
use App\Models\car;
use App\Models\ulasan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

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
        return redirect()->route('detailMobil', $id)->with('success', 'Ulasan berhasil ditambah');
    }

    public function deleteUlasan(Ulasan $ulasan)
    {
        # code...
        ulasan::findorfail($ulasan->id)->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus komentar');
    }

    public function editUlasan(Ulasan $ulasan)
    {
        # code...
        return view('pages.editulasan')
            ->with(
                [
                    'title' => 'edit ulasan',
                    'ulasan' => ulasan::findorfail($ulasan->id)
                ]
            );
    }

    public function updateUlasan(Request $request, Ulasan $ulasan)
    {
        # code...
        $db = ulasan::findorfail($ulasan->id);
        $rules = [
            'rating' => 'required',
            'komentar' => 'required|max:500'
        ];

        $data = $request->validate($rules);
        $db->update($data);
        return redirect()
            ->route('detailMobil',$db->car_id)
            ->with('success', 'ulasan berhasil diubah');
    }
}
