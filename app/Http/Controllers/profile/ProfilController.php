<?php

namespace App\Http\Controllers\profile;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TokoRequest;
use App\Models\makeShop;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    public function index()
    {
        return view('pages.profile.profil')
                ->with(
                    [
                        'title' => 'Profile',
                        'data' => User::where('id', auth()->user()->id)->first(),
                        'makeshop' => makeShop::where('user_id', auth()->user()->id)->first(),
                    ]
                );
    }

    public function edit($id)
    {
        return view('pages.profile.edit')
                ->with(
                    [
                        'title' => 'Edit Profile',
                        'data' => User::findOrFail($id)
                    ]
                ); 
    }

    public function update(Request $request, $id)
    {
        $db = User::findOrFail($id);

        $rules = [
            'username' => 'required|min:5',
            'image' => 'image|file|max:1024'
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
        return redirect()->route('profil.index')->with('success', 'Profil Berhasil di Ubah');
    }

    public function create()
    {
        return view('pages.profile.daftar_rental')->with(['title' => 'Buka Toko']);
    }

    public function store(TokoRequest $request)
    {
        $data = $request->all();
        if ($request->file('img_ktp')) {
            $data['img_ktp'] = $request->file('img_ktp')->store('ktp');
        }

        if ($request->file('img_siu')) {
            $data['img_siu'] = $request->file('img_siu')->store('surat_ijin_usaha');
        }

        if ($request->file('pas_foto')) {
            $data['pas_foto'] = $request->file('pas_foto')->store('pas_foto');
        }

        if ($request->file('foto_usaha')) {
            $data['foto_usaha'] = $request->file('foto_usaha')->store('foto_usaha');
        }

        $data['user_id'] = auth()->user()->id;
        
        makeShop::create($data);
        return redirect()->route('profil.index')->with(['success' => 'Berhasil!!! Mohon Tunggu Verifikasi Admin!!!']);
    }

    public function changePass($id)
    {
        # code...
        return view('pages.profile.changepass')
            ->with(
                [
                    'title' => 'Change Password',
                    'data' => User::findOrFail($id)
                ]
            );
    }

    public function updatePass(Request $request, $id)
    {
        $db = User::findOrFail($id);
        
        $val = $request->validate(
            [
                'password' => 'min:5',
                'confirmPassword' => 'same:password'
            ]
        );
        $val['password'] = Hash::make($val['password']);

        $db->update($val);
        return redirect()
            ->route('profil.index')
            ->with('success', 'Password Berhasil di Ubah');
    }
}
