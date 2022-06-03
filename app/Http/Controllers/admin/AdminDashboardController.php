<?php

namespace App\Http\Controllers\admin;

use App\Models\makeShop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\shop;
use App\Models\User;

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
                        'makeshop' => makeShop::all()
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

        return redirect()->route('admin.index')->with('success', 'Permintaan di Terima');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        makeShop::where('id', $id)->delete();
        return redirect()
            ->route('admin.index')
            ->with('success', 'Permintaan di Tolak');
    }
}
