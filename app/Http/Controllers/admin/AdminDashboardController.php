<?php

namespace App\Http\Controllers\admin;

use App\Models\makeShop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\shop;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('pages.admin.dashboard')
                ->with(
                    [
                        'title' => 'Administrator',
                        'makeshop' => makeShop::latest()->fillter(request(['searchms']))->get()
                    ]
                );
    }

    public function store(Request $request)
    {
        $data = $request->all();
        shop::create($data);

        $user = User::where('id', $request->user_id)->first();
        $user['role'] = 'rental';
        $user->save();

        makeShop::where('user_id', $request->user_id)->delete();

        return redirect()
            ->route('dashboard.index')
            ->with('success', 'Permintaan di Terima');
    }

    public function show($id)
    {
        return view('pages.admin.acceptShop',
            [
                'title' => 'Konfirmasi Toko',
                'ms' => makeShop::findOrFail($id)
            ]
        );
    }

    public function destroy($id)
    {   
        $rm = makeShop::findOrFail($id);
        if ($rm->img_ktp) {
            # code...
            Storage::delete($rm->img_ktp);
        }
        if ($rm->img_siu) {
            # code...
            Storage::delete($rm->img_siu);
        }
        if ($rm->pas_foto) {
            # code...
            Storage::delete($rm->pas_foto);
        }
        if ($rm->foto_usaha) {
            # code...
            Storage::delete($rm->foto_usaha);
        }

        $rm->delete();

        return redirect()
            ->route('dashboard.index')
            ->with('success', 'Permintaan di Tolak');
    }
}
