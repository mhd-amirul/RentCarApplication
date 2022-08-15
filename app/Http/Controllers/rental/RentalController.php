<?php

namespace App\Http\Controllers\rental;

use App\Models\car;
use App\Models\shop;
use App\Models\ulasan;
use App\Models\alternatif;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\kriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RentalController extends Controller
{
    public function create()
    {
        return view('pages.rental.mobil.tambah')
            ->with(
                [
                    'title' => 'Tambah Mobil',
                    'kriteria' => kriteria::all(),
                    'alternatif' => alternatif::all()
                ]
            );
    }

    public function store(Request $request)
    {
        $rules = [
            'stok' => 'required',
            'slug' => 'required',
            'no_polisi' => 'required',
            // 'deskripsi' => 'required',
            'gambar1' => 'image|file|max:1024',
            'gambar2' => 'image|file|max:1024',
            'gambar3' => 'image|file|max:1024',
            'gambar4' => 'image|file|max:1024',
            'gambar5' => 'image|file|max:1024',
        ];

        $request['stok'] = 'standby';
        $request['slug'] = Str::random(50);
        $request->validate($rules);
        $data = $request->all();

        if ($request->file('gambar1')) {
            $data['gambar1'] = $request->file('gambar1')->store('gambar1');
        }
        if ($request->file('gambar2')) {
            $data['gambar2'] = $request->file('gambar2')->store('gambar2');
        }
        if ($request->file('gambar3')) {
            $data['gambar3'] = $request->file('gambar3')->store('gambar3');
        }
        if ($request->file('gambar4')) {
            $data['gambar4'] = $request->file('gambar4')->store('gambar4');
        }
        if ($request->file('gambar5')) {
            $data['gambar5'] = $request->file('gambar5')->store('gambar5');
        }

        $kriteria = kriteria::all();
        $data['kata_kunci'] = '';
        // $data['kata_kunci'] = $data['deskripsi'].', ';
        foreach ($kriteria as $k) {
            # code...
            $name = str_replace(' ','_',$k->nama.'_id');
            $db = alternatif::where('id', $data[$name])->first();
            if ($db->kriteria_id == $k->id) {
                $data['kata_kunci'] .= $db->nama.', ';
            }
        }

        $data['user_id'] = auth()->user()->id;
        $data['shop_id'] = shop::where('user_id', $data['user_id'])->value('id');
        car::create($data);

        return redirect()
            ->route('toko.index')->with('success', 'Berhasil Menambah Mobil Baru');
    }

    public function show(car $car)
    {
        $ulasan = ulasan::where('car_id', $car->id);

        $rate = $ulasan->sum('rating');
        $jumlah = $ulasan->count();
        $hasil = 0;
        if ($rate && $jumlah != null) {
            $hasil = $rate / $jumlah;
        }
        // return response()->json($car);
        return view('pages.rental.mobil.show')
            ->with(
                [
                    'title' => 'Detail Mobil',
                    'car' => $car,
                    'ulasan' => $ulasan->get(),
                    'rating' => $hasil,
                    'review' => $jumlah
                ]
            );
    }

    public function edit(car $car)
    {
        return view('pages.rental.mobil.edit')
                ->with(
                    [
                        'title' => 'Tambah Mobil',
                        'kriteria' => kriteria::all(),
                        'alternatif' => alternatif::all(),
                        'car' => $car
                    ]
                );
    }

    public function update(Request $request, car $car)
    {
        $rules = [
            // 'deskripsi' => 'required',
            'gambar1' => 'image|file|max:1024',
            'gambar2' => 'image|file|max:1024',
            'gambar3' => 'image|file|max:1024',
            'gambar4' => 'image|file|max:1024',
            'gambar5' => 'image|file|max:1024'
        ];

        $request->validate($rules);
        $data = $request->all();

        if ($request->file('gambar1')) {
            if ($request->oldgambar1) {
                Storage::delete($request->oldgambar1);
            }
            $data['gambar1'] = $request->file('gambar1')->store('gambar1');
        }
        if ($request->file('gambar2')) {
            if ($request->oldgambar2) {
                Storage::delete($request->oldgambar2);
            }
            $data['gambar2'] = $request->file('gambar2')->store('gambar2');
        }
        if ($request->file('gambar3')) {
            if ($request->oldgambar3) {
                Storage::delete($request->oldgambar3);
            }
            $data['gambar3'] = $request->file('gambar3')->store('gambar3');
        }
        if ($request->file('gambar4')) {
            if ($request->oldgambar4) {
                Storage::delete($request->oldgambar4);
            }
            $data['gambar4'] = $request->file('gambar4')->store('gambar4');
        }
        if ($request->file('gambar5')) {
            if ($request->oldgambar5) {
                Storage::delete($request->oldgambar5);
            }
            $data['gambar5'] = $request->file('gambar5')->store('gambar5');
        }

        $kriteria = kriteria::all();
        // $data['kata_kunci'] = $data['deskripsi'].', ';
        $data['kata_kunci'] = '';
        foreach ($kriteria as $k) {
            # code...
            $name = str_replace(' ','_',$k->nama.'_id');
            $db = alternatif::where('id', $data[$name])->first();

            if ($db->kriteria_id == $k->id) {
                $data['kata_kunci'] .= $db->nama.', ';
            }
        }
        $car->update($data);

        return redirect()
            ->route('shop.show', $car->slug)->with('success', 'Data Mobil Berhasil di Ubah');
    }

    public function destroy(car $car)
    {
        if ($car->gambar1) {
            # code...
            Storage::delete($car->gambar1);
        }
        if ($car->gambar2) {
            # code...
            Storage::delete($car->gambar2);
        }
        if ($car->gambar3) {
            # code...
            Storage::delete($car->gambar3);
        }
        if ($car->gambar4) {
            # code...
            Storage::delete($car->gambar4);
        }
        if ($car->gambar5) {
            # code...
            Storage::delete($car->gambar5);
        }

        $car->delete();
        return redirect()
                ->route('toko.index')->with('success', 'Mobil Berhasil di Hapus!!!');
    }

}
