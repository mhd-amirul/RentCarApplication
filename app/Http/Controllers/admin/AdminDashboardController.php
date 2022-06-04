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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pages.admin.acceptShop',
            [
                'title' => 'Konfirmasi Toko',
                'ms' => makeShop::findOrFail($id)
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $rm = makeShop::findOrFail($id);
        Storage::delete([
            $rm->img_ktp,
            $rm->img_siu,
            $rm->pas_foto,
            $rm->foto_usaha
        ]);
        $rm->delete();

        return redirect()
            ->route('dashboard.index')
            ->with('success', 'Permintaan di Tolak');
    }
}
