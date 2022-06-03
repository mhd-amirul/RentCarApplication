<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\akunRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class allUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.pages-admin.allusers.allusers')
            ->with(
                [
                    'title' => 'Data Users',
                    'user' => User::all()
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
        return view('pages.admin.pages-admin.allusers.tambah')
            ->with(
                [
                    'title' => 'Tambah User'
                ]
            );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(akunRequest $request)
    {
        $data = $request->all();

        $data['password'] = Hash::make($data['password']);
        User::create($data);
        return redirect()
            ->route('allusers.index')
            ->with('success', 'User Berhasil di Hapus');
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
        return view('pages.admin.pages-admin.allusers.edit')
            ->with(
                [
                    'title' => 'Edit User',
                    'data' => User::findOrFail($id)
                ]
            );
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
        $db = User::findOrFail($id);

        $rules = [
            'username' => 'required|min:5',
            'image' => 'image|file|max:1024',
            'role' => 'required'
        ];

        if ($request->email != $db->email) {
            $rules['email'] = 'email|unique:users';
        }
        if ($request->no_hp != $db->no_hp) {
            $rules['no_hp'] = 'min:3|unique:users';
        }

        $data = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldimg) {
                Storage::delete($request->oldimg);
            }
            $data['image'] = $request->file('image')->store('Profile');
        }

        $db->update($data);
        return redirect()->route('allusers.index')->with('success', 'Data User Berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return redirect()->back()->with('success', 'User Berhasil di Hapus');
    }
}
