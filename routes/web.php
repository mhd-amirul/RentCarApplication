<?php

use App\Http\Controllers\admin\adminCarController;
use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\allAlternatifController;
use App\Http\Controllers\admin\allKriteriaController;
use App\Http\Controllers\admin\allShopsController;
use App\Http\Controllers\admin\allUsersController;
use App\Http\Controllers\authentikasi\AuthentikasiController;
use App\Http\Controllers\home\HomeController;
use App\Http\Controllers\map\mapController;
use App\Http\Controllers\profile\ProfilController;
use App\Http\Controllers\rental\RentalController;
use App\Http\Controllers\rental\TokoController;
use App\Http\Controllers\rental\ulasanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('daftar', [HomeController::class, 'daftarMobil'])->name('daftar');
Route::get('detail/{id}', [HomeController::class, 'detailMobil'])->name('detailMobil');
Route::get('profileToko/{id}', [HomeController::class, 'profileToko'])->name('profileToko');
Route::get('/map/{id}', [mapController::class, 'shareLocation'])->name('sharelok');

// Hasil Perhitungan Rekomendasi FrontEnd dan BackEnd
Route::get('hitung', [HomeController::class, 'hitung'])->name('hitung');
// Route::get('hitung', [HomeController::class, 'perhitungan'])->name('hitung');

Route::group(['middleware' => 'guest', 'prefix' => 'guest'], function ()
    {
        // Proses Login
        Route::get('login', [AuthentikasiController::class, 'login'])->name('login');
        Route::post('login', [AuthentikasiController::class, 'check']);
        
        // Proses Register
        Route::get('register', [AuthentikasiController::class, 'register']);
        Route::post('register', [AuthentikasiController::class, 'store']);
    }
);

Route::group(['middleware' => 'auth'], function ()
    {
        // Home / Daftar mobil / Informasi Mobil / Informasi / map / Ulasan / logOut
        Route::get('ulasan/{id}', [ulasanController::class, 'ulasanView'])->name('ulasan');
        Route::put('ulasan/{id}', [ulasanController::class, 'createUlasan'])->name('ulasanU');
        Route::post('logout', [AuthentikasiController::class, 'logout'])->name('logout');
        Route::resource('profil', ProfilController::class)
                ->except(['show', 'destroy']);
        Route::get('/changePass/{id}', [ProfilController::class, 'changePass'])->name('changePass');
        Route::put('/changePass/{id}', [ProfilController::class, 'updatePass'])->name('updatePass');

        Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () 
            {
                Route::resource('dashboard', AdminDashboardController::class)
                    ->except(['edit', 'update', 'create']);
                Route::resource('allusers', allUsersController::class);
                Route::resource('allshops', allShopsController::class);
                Route::get('tambah/{id}', [adminCarController::class, 'addCarAdmin'])->name('addCarAdmin');
                Route::get('edit/{id}', [adminCarController::class, 'editCarAdmin'])->name('editCarAdmin');
                Route::post('tambah/{id}', [adminCarController::class, 'createCarAdmin'])->name('createCarAdmin');
                Route::put('edit/{id}', [adminCarController::class, 'updateCarAdmin'])->name('updateCarAdmin');
                Route::delete('car/{id}', [allShopsController::class, 'destroyCar'])->name('carDelete');

                // Konfigurasi Kriteria
                Route::resource('allkriteria', allKriteriaController::class)
                    ->except(['show']);

                // Konfigurasi Alternatif
                Route::resource('allalternatif', allAlternatifController::class)
                    ->except(['show']);
            }
        );

        Route::group(['middleware' => 'rental', 'prefix' => 'user-rental'], function () 
            {
                // Route Khusus Toko Rental
                Route::resource('shop', RentalController::class)
                    ->except(['index']);
                Route::get('map/{id}', [mapController::class, 'setLocation'])->name('setLocation');
                Route::put('map/update/{id}', [mapController::class, 'saveLocation'])->name('saveLocation');
                Route::resource('/toko', TokoController::class)
                    ->except(['show', 'create', 'store']);
            }
        );
    }
);


