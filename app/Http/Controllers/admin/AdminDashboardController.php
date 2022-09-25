<?php

namespace App\Http\Controllers\admin;

use App\Models\makeShop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\alternatif;
use App\Models\car;
use App\Models\kriteria;
use App\Models\nilai;
use App\Models\shop;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Null_;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('pages.admin.dashboard')
                ->with(
                    [
                        'title' => 'Administrator',
                        'makeshop' => makeShop::where('status', 'review')->fillter(request(['searchms']))->get()
                    ]
                );
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['slug'] = Str::random(50);
        $ms = makeShop::where('user_id', $request->user_id)->first();
        $ms->status = 'accept';
        $ms->save();
        shop::create($data);

        return redirect()
            ->route('dashboard.index')
            ->with('success', 'Permintaan di Terima');
    }

    public function show(makeShop $dashboard)
    {
        return view('pages.admin.acceptShop',
            [
                'title' => 'Konfirmasi Toko',
                'ms' => $dashboard
            ]
        );
    }

    public function declineShop(Request $request)
    {
        # code...
        $ms = makeShop::where('id', $request->id)->first();
        $ms->status = 'decline';
        $ms->keterangan = $request->keterangan;

        $ms->save();
        return redirect()->route('dashboard.index')->with('success', 'Permintaan ditolak!');
    }

    public function laporan_admin()
    {
        # code...
        return view('pages.admin.laporan')->with('title', 'Laporan');
    }
}
