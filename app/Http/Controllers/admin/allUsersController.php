<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\car;
use App\Models\shop;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class allUsersController extends Controller
{
    public function index()
    {
        return view('pages.admin.pages-admin.allusers.allusers')
            ->with(
                [
                    'title' => 'Data Users',
                    'user' => User::where('role', '<>','admin')->orderBy('id')->filterUser(request(['searchUser']))->get()
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

    public function store(Request $request)
    {
        $rules = [
            'email' => 'required|email|unique:users',
            'no_hp' => 'required|min:3|unique:users',
            'slug' => 'required|unique:users',
            'role' => '',
            'password' => 'required|min:5',
            'confirmpassword' => 'same:password',
        ];
        $request['slug'] = Str::random(50);
        $request['role'] = 'user';
        $request->validate($rules);
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        User::create($data);

        return redirect()
            ->route('allusers.index')
            ->with('success', 'User berhasil ditambah');
    }

    public function show(User $user)
    {
        return view('pages.admin.pages-admin.allusers.show',
            [
                'title' => 'Detail User',
                'users' => user::findOrFail($user->id)
            ]
        );
    }

    public function edit(User $user)
    {
        return view('pages.admin.pages-admin.allusers.edit')
            ->with(
                [
                    'title' => 'Edit User',
                    'data' => User::findOrFail($user->id)
                ]
            );
    }

    public function update(Request $request, User $user)
    {
        $db = User::findOrFail($user->id);
        $rules = [
            'username' => 'required|min:5',
            'image' => 'image|file|max:1024',
        ];

        if ($request->email != $db->email) {
            $rules['email'] = 'email|unique:users';
        }
        if ($request->no_hp != $db->no_hp) {
            $rules['no_hp'] = 'min:3|unique:users';
        }

        if ($request->oldpassword != null) {
            if (!Hash::check($request->oldpassword, $db->password)) {
                # code...
                return redirect()
                    ->back()
                    ->with('failed', 'Password lama tidak sesuai');
            }
            $rules['password'] = 'min:5';
            $rules['ConfirmPassword'] = 'same:password';
        }

        $data = $request->validate($rules);

        if ($request->oldpassword != null) {
            $data['password'] = Hash::make($data['password']);
        }

        if ($request->file('image')) {
            if ($request->oldimg) {
                Storage::delete($request->oldimg);
            }
            $data['image'] = $request->file('image')->store('Profile');
        }


        $db->update($data);
        return redirect()
            ->route('allusers.show',$user->slug)
            ->with('success', 'Data user berhasil diubah');
    }

    public function destroy(User $user)
    {
        $db = User::findOrFail($user->id);
        if ($db->image) {
            # code...
            Storage::delete($db->image);
        }

        if ($db->role == 'rental') {
            # code...
            $shop = shop::where('user_id', $user->id)->first();
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

        $db->delete();
        return redirect()
            ->route('allusers.index')
            ->with('success', 'User berhasil dihapus');
    }
}
