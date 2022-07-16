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
                'komentar' => 'required|max:500'
            ]
        );

        $val['user_id'] = auth()->user()->id;
        ulasan::create($val);
        return redirect()->route('detailMobil', $id)->with('success', 'Ulasan berhasil ditambah');
    }

    public function deleteUlasan($id)
    {
        # code...
        ulasan::findorfail($id)->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus komentar');
    }

    public function editUlasan($id)
    {
        # code...
        return view('pages.editulasan')
            ->with(
                [
                    'title' => 'edit ulasan',
                    'ulasan' => ulasan::findorfail($id)
                ]
            );
    }

    public function updateUlasan(Request $request, $id)
    {
        # code...
        $db = ulasan::findorfail($id);
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
