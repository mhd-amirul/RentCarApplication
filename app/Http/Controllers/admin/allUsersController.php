<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\akunRequest;
use App\Http\Controllers\Controller;
use App\Models\car;
use App\Models\shop;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class allUsersController extends Controller
{
    public function index()
    {
        return view('pages.admin.pages-admin.allusers.allusers')
            ->with(
                [
                    'title' => 'Data Users',
                    'user' => User::where('role', '<>','admin')->orderBy('username')->filterUser(request(['searchUser']))->get()
                ]
            );
    }

    public function create()
    {
        return view('pages.admin.pages-admin.allusers.tambah')
            ->with(
                [
                    'title' => 'Tambah User'
                ]
            );
    }

    public function store(akunRequest $request)
    {
        $data = $request->all();
        $data['role'] = 'user';
        $data['password'] = Hash::make($data['password']);
        User::create($data);

        Alert::success('success', 'User Berhasil di Tambah');
        return redirect()
            ->route('allusers.index');
    }

    public function show($id)
    {
        return view('pages.admin.pages-admin.allusers.show',
            [
                'title' => 'Detail User',
                'users' => user::findOrFail($id)
            ]
        );
    }

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

        if ($request->password != null) {
            # code...
            $rules['password'] = 'min:5';
            $rules['ConfirmPassword'] = 'same:password';
        }

        $data = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldimg) {
                Storage::delete($request->oldimg);
            }
            $data['image'] = $request->file('image')->store('Profile');
        }


        $data['password'] = Hash::make($data['password']);
        $db->update($data);
        return redirect()
            ->route('allusers.index')
            ->with('success', 'Data User Berhasil di Ubah');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        if ($user->image) {
            # code...
            Storage::delete($user->image);
        }

        if ($user->role == 'rental') {
            # code...
            $shop = shop::where('user_id', $id)->first();
            $cars = car::where('shop_id', $shop->id)->get();

            if ($shop->img_ktp) {
                # code...
                Storage::delete($shop->img_ktp);
            }
            if ($shop->img_siu) {
                # code...
                Storage::delete($shop->img_siu);
            }
            if ($shop->pas_foto) {
                # code...
                Storage::delete($shop->pas_foto);
            }
            if ($shop->foto_usaha) {
                # code...
                Storage::delete($shop->foto_usaha);
            }

            if ($cars != null) {
                # code...
                foreach ($cars as $car) {
                    # code...
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
                }
            }
        }

        $user->delete();
        return redirect()
            ->route('allusers.index')
            ->with('success', 'User Berhasil di Hapus');
    }
}
