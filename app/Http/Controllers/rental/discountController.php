<?php

namespace App\Http\Controllers\rental;

use App\Http\Controllers\Controller;
use App\Models\car;
use App\Models\discount;
use App\Models\shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class discountController extends Controller
{
    public function index()
    {
        $shop = shop::where('user_id', auth()->user()->id)->first();
        $diskon = discount::where('shop_id', $shop->id)->get();
        $cars = [];
        foreach ($diskon as $disk) {
            $cars[] = car::where('id', $disk->car_id)->first();
        }
        return view('pages.rental.Discount.discount')
            ->with(
                [
                    'title' => 'Daftar Diskon',
                    'diskon' => $diskon,
                    'cars' => $cars
                ]
            );
    }

    public function create()
    {
        $shop = shop::where('user_id', auth()->user()->id)->first();
        $cars = car::where('shop_id', $shop->id);
        return view('pages.rental.Discount.tambah')
            ->with(
                [
                    'title' => 'Buat Diskon',
                    'cars' => $cars->get()
                ]
            );
    }

    public function store(Request $request)
    {
        $rules = [
            'discount' => 'required|int|digits:2',
            'shop_id' => 'required',
            'car_id' => 'required'
        ];
        $request['shop_id'] = shop::where('user_id', auth()->user()->id)->value('id');

        $request->validate($rules);
        $data = $request->all();
        discount::create($data);
        return redirect()
            ->route('dcindex')
            ->with(
                [
                    'success' => 'Diskon Berhasil di Buat'
                ]
            );
    }

    public function edit($id)
    {
        $discount = discount::findorfail($id);
        $cars = car::where('id', $discount->car_id);
        return view('pages.rental.Discount.edit')
            ->with([
                'diskon' => $discount,
                'title' => 'Edit Diskon',
                'car' => $cars->first()
            ]);
    }

    public function update(Request $request, $id)
    {
        $diskon = discount::findorfail($id);
        $rules = [
            'discount' => 'required|int|digits:2',
            // 'shop_id' => 'required',
            // 'car_id' => 'required'
        ];
        // return response()->json($request);

        $request->validate($rules);
        $data = $request->all();
        $diskon->update($data);

        return redirect()
            ->route('dcindex')
            ->with('success', 'Ubah diskon berhasil');
    }

    public function delete($id)
    {

        discount::findorfail($id)->delete();
        return redirect()->back()->with(
            'success', 'diskon berhasil dihapus'
        );
    }
}
