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
use App\Http\Controllers\rental\activityController;
use App\Http\Controllers\rental\discountController;
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
Route::get('detail/{car}', [HomeController::class, 'detailMobil'])->name('detailMobil');
Route::get('profileToko/{shop}', [HomeController::class, 'profileToko'])->name('profileToko');
Route::get('/map/{shop}', [mapController::class, 'shareLocation'])->name('sharelok');

// Hasil Perhitungan Rekomendasi FrontEnd dan BackEnd
Route::get('hitung', [HomeController::class, 'hitung'])->name('hitung');
// Route::get('proses_hitung', [HomeController::class, 'proses_hitung'])->name('hitung');

Route::group(['middleware' => 'guest', 'prefix' => 'guest'], function ()
    {
        // Proses Login
        Route::get('login', [AuthentikasiController::class, 'login'])->name('login');
        Route::post('login', [AuthentikasiController::class, 'check']);

        // forget Password
        Route::get('forgot-password', [AuthentikasiController::class, 'forgotPass'])->name('forgotPass');

        // Proses Register
        Route::get('register', [AuthentikasiController::class, 'register']);
        Route::post('register', [AuthentikasiController::class, 'store']);
    }
);

Route::group(['middleware' => 'auth'], function ()
    {
        // Route Ulasan
        Route::get('ulasan/{car}', [ulasanController::class, 'ulasanView'])->name('ulasan');
        Route::get('ulasan/edit/{ulasan}', [ulasanController::class, 'editUlasan'])->name('editUlasan');
        Route::put('ulasan/edit/{ulasan}', [ulasanController::class, 'updateUlasan'])->name('updateUlasan');
        Route::put('ulasan/{car}', [ulasanController::class, 'createUlasan'])->name('ulasanU');
        Route::delete('ulasan/{ulasan}', [ulasanController::class, 'deleteUlasan'])->name('deleteUlasan');
        // Route Log Out
        Route::post('logout', [AuthentikasiController::class, 'logout'])->name('logout');
        // Route Profil
        Route::resource('profil', ProfilController::class)
                ->parameters(['profil' => 'profil',])
                ->except(['show', 'destroy']);
        Route::get('/changePass/{profil}', [ProfilController::class, 'changePass'])->name('changePass');
        Route::put('/changePass/{profil}', [ProfilController::class, 'updatePass'])->name('updatePass');
        // Route next Buka Toko
        Route::get('/profile', [ProfilController::class, 'updaterole'])->name('updaterole');
        Route::delete('profile/{id}', [ProfilController::class, 'declinems'])->name('declinems');

        Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function ()
            {
                // Route function auto add data
                Route::get('AddAllImage/{id}', [AdminDashboardController::class, 'AddAllImage'])->name('AddAllImage');
                // Route Dashboard
                Route::resource('dashboard', AdminDashboardController::class)
                    ->parameters(['dashboard' => 'dashboard'])
                    ->except(['edit', 'update', 'create']);
                Route::get('/laporan', [AdminDashboardController::class, 'laporan_admin'])->name('laporan');
                Route::get('/declineShop', [AdminDashboardController::class, 'declineShop'])->name('declineShop');
                // Route All User Config
                Route::resource('allusers', allUsersController::class)
                        ->parameters(['allusers' => 'user']);
                // Route All Shop Config
                Route::resource('allshops', allShopsController::class)
                        ->parameters(['allshops' => 'shop']);
                // Route All Car Config
                Route::get('tambah/{shop}', [adminCarController::class, 'addCarAdmin'])->name('addCarAdmin');
                Route::get('edit/{car}', [adminCarController::class, 'editCarAdmin'])->name('editCarAdmin');
                Route::post('tambah/{shop}', [adminCarController::class, 'createCarAdmin'])->name('createCarAdmin');
                Route::put('edit/{car}', [adminCarController::class, 'updateCarAdmin'])->name('updateCarAdmin');
                Route::get('showCarAdmin/{car}', [adminCarController::class, 'showCarAdmin'])->name('showCarAdmin');
                Route::delete('car/{car}', [allShopsController::class, 'destroyCar'])->name('carDelete');

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
                    ->parameters(['shop' => 'car'])
                    ->except(['index']);
                Route::controller(activityController::class)->group(function(){
                    Route::get('activityView/{shop}', 'activityView')->name('activityView');
                    Route::get('activityViewCetak/{shop}', 'activityViewCetak')->name('activityViewCetak');
                    Route::get('activityAdd/{shop}', 'activityAdd')->name('activityAdd');
                    Route::get('activityShow/{history}', 'activityShow')->name('activityShow');
                    Route::get('activityEdit/{history}', 'activityEdit')->name('activityEdit');
                    Route::get('activityHistory/{shop}', 'activityHistory')->name('activityHistory');
                    Route::post('activityStore/{shop}', 'activityStore')->name('activityStore');
                    Route::put('activityUpdate/{history}', 'activityUpdate')->name('activityUpdate');
                    Route::put('activityReturn/{history}', 'activityReturn')->name('activityReturn');
                    Route::delete('activityDelete/{history}', 'activityDelete')->name('activityDelete');
                });

                Route::resource('discount', discountController::class);

                Route::get('map/{map}', [mapController::class, 'setLocation'])->name('setLocation');
                Route::put('map/update/{map}', [mapController::class, 'saveLocation'])->name('saveLocation');
                Route::resource('/toko', TokoController::class)
                    ->parameters(['toko' => 'toko'])
                    ->except(['show', 'create', 'store']);
            }
        );
    }
);


