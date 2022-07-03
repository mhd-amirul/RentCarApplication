<?php

namespace App\Http\Controllers\authentikasi;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\akunRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AuthentikasiController extends Controller
{
    public function register()
    {
        return view('authentikasi.register')
            ->with(
                [
                    'title' => 'Register'
                ]
            );
    }

    public function store(akunRequest $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);

        User::create($data);
        return redirect()
            ->route('login')
            ->with('success', 'Registrasi Berhasil');
    }

    public function login()
    {
        return view('authentikasi.login')
            ->with(
                [
                    'title' => 'Login'
                ]
            );
    }

    public function check(Request $request)
    {
        $data = $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required'
            ]
        );

        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect()->intended('profil')->with('success', 'Login Berhasil');
        }

        return back()->with('failed', 'Login Gagal');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('success', 'Log Out Berhasil');
    }

    public function forgotPass()
    {
        # code...
        return view('authentikasi.forgotPass')
            ->with(
                [
                    'title' => 'Forgot Password'
                ]
            );
    }

}
