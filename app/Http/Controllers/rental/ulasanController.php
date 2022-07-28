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

    public function createUlasan(Request $request, ulasan $ulasan)
    {
        $val = $request->validate(
            [
                'car_id' => 'required',
                'rating' => 'required',
                'komentar' => 'required|max:500'
            ]
        );

        $val['user_id'] = auth()->user()->id;
        ulasan::create($val);
        return redirect()->route('detailMobil', $id)->with('success', 'Ulasan berhasil ditambah');
    }

    public function deleteUlasan(ulasan $ulasan)
    {
        # code...
        ulasan::findorfail($ulasan->id)->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus komentar');
    }

    public function editUlasan(ulasan $ulasan)
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

    public function updateUlasan(Request $request, ulasan $ulasan)
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
