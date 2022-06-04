<?php

namespace Database\Seeders;

use App\Models\alternatif;
use App\Models\car;
use App\Models\kriteria;
use App\Models\nilai;
use App\Models\shop;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // Table Kriteria ====================================================================================
        kriteria::create([
            'nama' => 'merk',
            'bobot' => 0.0,
            'type' => ''
        ]);

        kriteria::create([
            'nama' => 'Tahun Produksi',
            'bobot' => 0.3,
            'type' => 'benefit'
        ]);

        kriteria::create([
            'nama' => 'Kondisi Fisik',
            'bobot' => 0.2,
            'type' => 'benefit'
        ]);	

        kriteria::create([
            'nama' => 'Kondisi Mesin',
            'bobot' => 0.25,
            'type' => 'benefit'
        ]);


        kriteria::create([
            'nama' => 'Muatan Penumpang',
            'bobot' => 0.15,
            'type' => 'benefit'
        ]);

        kriteria::create([
            'nama' => 'Kapasitan Mesin',
            'bobot' => 0.1,
            'type' => 'benefit'
        ]);	

        kriteria::create([
            'nama' => 'Jenis BBM',
            'bobot' => 0.25,
            'type' => 'benefit'
        ]);

        kriteria::create([
            'nama' => 'Harga Sewa',
            'bobot' => 0.2,
            'type' => 'cost'
        ]);

        // Table Alternatif  Merk====================================================================================
        alternatif::create([
            'kriteria_id' => 1,
            'nama' => 'Avanza',
            'nilai' => 1
        ]);
        alternatif::create([
            'kriteria_id' => 1,
            'nama' => 'Xenia',
            'nilai' => 1
        ]);
        alternatif::create([
            'kriteria_id' => 1,
            'nama' => 'Kijang',
            'nilai' => 1
        ]);

        // Table Alternatif  Tahun Produksi====================================================================================
        alternatif::create([
            'kriteria_id' => 2,
            'nama' => '< 2015',
            'nilai' => 1
        ]);
        alternatif::create([
            'kriteria_id' => 2,
            'nama' => '2016',
            'nilai' => 2
        ]);
        alternatif::create([
            'kriteria_id' => 2,
            'nama' => '> 2016',
            'nilai' => 3
        ]);

        // Table Alternatif  Kondisi Fisik====================================================================================
        alternatif::create([
            'kriteria_id' => 3,
            'nama' => 'kurang baik',
            'nilai' => 1
        ]);
        alternatif::create([
            'kriteria_id' => 3,
            'nama' => 'cukup',
            'nilai' => 2
        ]);
        alternatif::create([
            'kriteria_id' => 3,
            'nama' => 'sangat baik',
            'nilai' => 3
        ]);

        // Table Alternatif  Kondisi Mesin====================================================================================
        alternatif::create([
            'kriteria_id' => 4,
            'nama' => 'kurang baik',
            'nilai' => 1
        ]);
        alternatif::create([
            'kriteria_id' => 4,
            'nama' => 'cukup',
            'nilai' => 2
        ]);
        alternatif::create([
            'kriteria_id' => 4,
            'nama' => 'sangat baik',
            'nilai' => 3
        ]);

        // Table Alternatif  Muatan Penumpang====================================================================================
        alternatif::create([
            'kriteria_id' => 5,
            'nama' => '<= 2',
            'nilai' => 1
        ]);
        alternatif::create([
            'kriteria_id' => 5,
            'nama' => '3 s/d 4',
            'nilai' => 2
        ]);
        alternatif::create([
            'kriteria_id' => 5,
            'nama' => '>= 4',
            'nilai' => 3
        ]);

        // Table Alternatif  Merk====================================================================================
        alternatif::create([
            'kriteria_id' => 6,
            'nama' => '<1000cc',
            'nilai' => 1
        ]);
        alternatif::create([
            'kriteria_id' => 6,
            'nama' => '1000cc - 1100cc',
            'nilai' => 2
        ]);
        alternatif::create([
            'kriteria_id' => 6,
            'nama' => '> 1100cc',
            'nilai' => 3
        ]);
        
        // Table Alternatif  Harga Sewa====================================================================================
        alternatif::create([
            'kriteria_id' => 7,
            'nama' => 'Pertamax',
            'nilai' => 1
        ]);
        alternatif::create([
            'kriteria_id' => 7,
            'nama' => 'pertalite',
            'nilai' => 2
        ]);
        alternatif::create([
            'kriteria_id' => 7,
            'nama' => 'solar',
            'nilai' => 3
        ]);

        // Table Alternatif  Jenis BBM====================================================================================
        alternatif::create([
            'kriteria_id' => 8,
            'nama' => '> 450rb/hari',
            'nilai' => 1
        ]);
        alternatif::create([
            'kriteria_id' => 8,
            'nama' => '351 - 450rb/hari',
            'nilai' => 2
        ]);
        alternatif::create([
            'kriteria_id' => 8,
            'nama' => '251 - 350rb/hari',
            'nilai' => 3
        ]);

        // Table User====================================================================================
        User::create([
            'username' => 'Administrator',
            'email' => 'amirul@pnl.com',
            'no_hp' => 82378563489,
            'password' => Hash::make('11111'),
            'role' => 'admin'
        ]);
        User::create([
            'username' => 'MuhAmirul',
            'email' => 'amirul2@pnl.com',
            'no_hp' => 82378563488,
            'password' => Hash::make('11111'),
            'role' => 'rental'
        ]);
        User::create([
            'username' => 'amirul',
            'email' => 'amirul3@pnl.com',
            'no_hp' => 82378563487,
            'password' => Hash::make('11111'),
            'role' => 'rental'
        ]);

        // Table Toko====================================================================================
        shop::create([
            'user_id' => '2',
            'nm_pu' => 'Muhammad Amirul',
            'nm_usaha' => 'PT. Abadi Jaya',
            'alamat' => 'Sawang',
            'nik' => 1764302753917385
        ]);

        shop::create([
            'user_id' => '3',
            'nm_pu' => 'Muhammad Alif',
            'nm_usaha' => 'PT. Usaha Jaya',
            'alamat' => 'Bireun',
            'nik' => 1764308365217385
        ]);

        // Table car====================================================================================
        car::create(
            [
                'user_id' => '3',
                'shop_id' => '2',
                'merk_id' => '3',
                'Tahun_Produksi_id' => '5',
                'Kondisi_Fisik_id' => '7',
                'Kondisi_Mesin_id' => '11',
                'Muatan_Penumpang_id' => '13',
                'Kapasitan_Mesin_id' => '18',
                'Jenis_BBM_id' => '21',
                'Harga_Sewa_id' => '23'
            ]
        );

        car::create(
            [
                'user_id' => '3',
                'shop_id' => '2',
                'merk_id' => '1',
                'Tahun_Produksi_id' => '5',
                'Kondisi_Fisik_id' => '7',
                'Kondisi_Mesin_id' => '12',
                'Muatan_Penumpang_id' => '15',
                'Kapasitan_Mesin_id' => '17',
                'Jenis_BBM_id' => '20',
                'Harga_Sewa_id' => '22'
            ]
        );

        car::create(
            [
                'user_id' => '3',
                'shop_id' => '2',
                'merk_id' => '3',
                'Tahun_Produksi_id' => '4',
                'Kondisi_Fisik_id' => '7',
                'Kondisi_Mesin_id' => '11',
                'Muatan_Penumpang_id' => '13',
                'Kapasitan_Mesin_id' => '16',
                'Jenis_BBM_id' => '21',
                'Harga_Sewa_id' => '24'
            ]
        );

        car::create(
            [
                'user_id' => '3',
                'shop_id' => '2',
                'merk_id' => '1',
                'Tahun_Produksi_id' => '5',
                'Kondisi_Fisik_id' => '9',
                'Kondisi_Mesin_id' => '12',
                'Muatan_Penumpang_id' => '15',
                'Kapasitan_Mesin_id' => '17',
                'Jenis_BBM_id' => '19',
                'Harga_Sewa_id' => '23'
            ]
        );

        car::create(
            [
                'user_id' => '3',
                'shop_id' => '2',
                'merk_id' => '3',
                'Tahun_Produksi_id' => '6',
                'Kondisi_Fisik_id' => '9',
                'Kondisi_Mesin_id' => '12',
                'Muatan_Penumpang_id' => '15',
                'Kapasitan_Mesin_id' => '18',
                'Jenis_BBM_id' => '21',
                'Harga_Sewa_id' => '24'
            ]
        );

        
        car::create(
            [
                'user_id' => '2',
                'shop_id' => '1',
                'merk_id' => '3',
                'Tahun_Produksi_id' => '5',
                'Kondisi_Fisik_id' => '7',
                'Kondisi_Mesin_id' => '11',
                'Muatan_Penumpang_id' => '13',
                'Kapasitan_Mesin_id' => '18',
                'Jenis_BBM_id' => '21',
                'Harga_Sewa_id' => '23'
            ]
        );

        car::create(
            [
                'user_id' => '2',
                'shop_id' => '1',
                'merk_id' => '1',
                'Tahun_Produksi_id' => '5',
                'Kondisi_Fisik_id' => '7',
                'Kondisi_Mesin_id' => '12',
                'Muatan_Penumpang_id' => '15',
                'Kapasitan_Mesin_id' => '17',
                'Jenis_BBM_id' => '20',
                'Harga_Sewa_id' => '22'
            ]
        );

        car::create(
            [
                'user_id' => '2',
                'shop_id' => '1',
                'merk_id' => '3',
                'Tahun_Produksi_id' => '4',
                'Kondisi_Fisik_id' => '7',
                'Kondisi_Mesin_id' => '11',
                'Muatan_Penumpang_id' => '13',
                'Kapasitan_Mesin_id' => '16',
                'Jenis_BBM_id' => '21',
                'Harga_Sewa_id' => '24'
            ]
        );

        car::create(
            [
                'user_id' => '2',
                'shop_id' => '1',
                'merk_id' => '1',
                'Tahun_Produksi_id' => '5',
                'Kondisi_Fisik_id' => '9',
                'Kondisi_Mesin_id' => '12',
                'Muatan_Penumpang_id' => '15',
                'Kapasitan_Mesin_id' => '17',
                'Jenis_BBM_id' => '19',
                'Harga_Sewa_id' => '23'
            ]
        );

        car::create(
            [
                'user_id' => '2',
                'shop_id' => '1',
                'merk_id' => '3',
                'Tahun_Produksi_id' => '6',
                'Kondisi_Fisik_id' => '9',
                'Kondisi_Mesin_id' => '12',
                'Muatan_Penumpang_id' => '15',
                'Kapasitan_Mesin_id' => '18',
                'Jenis_BBM_id' => '21',
                'Harga_Sewa_id' => '24'
            ]
        );

        // Table Nilai====================================================================================
        nilai::create(
            [
                'car_id' => 1,
                'kriteria_id' => 1,
                'alternatif_id' => 3,
                'nilai' => 1
            ]
        );

        nilai::create(
            [
                'car_id' => 1,
                'kriteria_id' => 2,
                'alternatif_id' => 5,
                'nilai' => 2
            ]
        );

        nilai::create(
            [
                'car_id' => 1,
                'kriteria_id' => 3,
                'alternatif_id' => 7,
                'nilai' => 1
            ]
        );

        nilai::create(
            [
                'car_id' => 1,
                'kriteria_id' => 4,
                'alternatif_id' => 11,
                'nilai' => 2
            ]
        );

        nilai::create(
            [
                'car_id' => 1,
                'kriteria_id' => 5,
                'alternatif_id' => 13,
                'nilai' => 1
            ]
        );

        nilai::create(
            [
                'car_id' => 1,
                'kriteria_id' => 6,
                'alternatif_id' => 18,
                'nilai' => 3
            ]
        );

        nilai::create(
            [
                'car_id' => 1,
                'kriteria_id' => 7,
                'alternatif_id' => 21,
                'nilai' => 3
            ]
        );

        nilai::create(
            [
                'car_id' => 1,
                'kriteria_id' => 8,
                'alternatif_id' => 23,
                'nilai' => 2
            ]
        );

        // Mobil 2 =======================================================================
        nilai::create(
            [
                'car_id' => 2,
                'kriteria_id' => 1,
                'alternatif_id' => 1,
                'nilai' => 1
            ]
        );

        nilai::create(
            [
                'car_id' => 2,
                'kriteria_id' => 2,
                'alternatif_id' => 5,
                'nilai' => 2
            ]
        );

        nilai::create(
            [
                'car_id' => 2,
                'kriteria_id' => 3,
                'alternatif_id' => 7,
                'nilai' => 1
            ]
        );

        nilai::create(
            [
                'car_id' => 2,
                'kriteria_id' => 4,
                'alternatif_id' => 12,
                'nilai' => 3
            ]
        );

        nilai::create(
            [
                'car_id' => 2,
                'kriteria_id' => 5,
                'alternatif_id' => 15,
                'nilai' => 3
            ]
        );

        nilai::create(
            [
                'car_id' => 2,
                'kriteria_id' => 6,
                'alternatif_id' => 17,
                'nilai' => 2
            ]
        );

        nilai::create(
            [
                'car_id' => 2,
                'kriteria_id' => 7,
                'alternatif_id' => 20,
                'nilai' => 2
            ]
        );

        nilai::create(
            [
                'car_id' => 2,
                'kriteria_id' => 8,
                'alternatif_id' => 22,
                'nilai' => 1
            ]
        );

        // Mobil 3 =======================================================================
        nilai::create(
            [
                'car_id' => 3,
                'kriteria_id' => 1,
                'alternatif_id' => 3,
                'nilai' => 1
            ]
        );

        nilai::create(
            [
                'car_id' => 3,
                'kriteria_id' => 2,
                'alternatif_id' => 4,
                'nilai' => 1
            ]
        );

        nilai::create(
            [
                'car_id' => 3,
                'kriteria_id' => 3,
                'alternatif_id' => 7,
                'nilai' => 1
            ]
        );

        nilai::create(
            [
                'car_id' => 3,
                'kriteria_id' => 4,
                'alternatif_id' => 11,
                'nilai' => 2
            ]
        );

        nilai::create(
            [
                'car_id' => 3,
                'kriteria_id' => 5,
                'alternatif_id' => 13,
                'nilai' => 1
            ]
        );

        nilai::create(
            [
                'car_id' => 3,
                'kriteria_id' => 6,
                'alternatif_id' => 16,
                'nilai' => 1
            ]
        );

        nilai::create(
            [
                'car_id' => 3,
                'kriteria_id' => 7,
                'alternatif_id' => 21,
                'nilai' => 3
            ]
        );

        nilai::create(
            [
                'car_id' => 3,
                'kriteria_id' => 8,
                'alternatif_id' => 24,
                'nilai' => 3
            ]
        );

        // Mobil 4 =======================================================================
        nilai::create(
            [
                'car_id' => 4,
                'kriteria_id' => 1,
                'alternatif_id' => 1,
                'nilai' => 1
            ]
        );

        nilai::create(
            [
                'car_id' => 4,
                'kriteria_id' => 2,
                'alternatif_id' => 5,
                'nilai' => 2
            ]
        );

        nilai::create(
            [
                'car_id' => 4,
                'kriteria_id' => 3,
                'alternatif_id' => 9,
                'nilai' => 3
            ]
        );

        nilai::create(
            [
                'car_id' => 4,
                'kriteria_id' => 4,
                'alternatif_id' => 12,
                'nilai' => 3
            ]
        );

        nilai::create(
            [
                'car_id' => 4,
                'kriteria_id' => 5,
                'alternatif_id' => 15,
                'nilai' => 3
            ]
        );

        nilai::create(
            [
                'car_id' => 4,
                'kriteria_id' => 6,
                'alternatif_id' => 17,
                'nilai' => 2
            ]
        );

        nilai::create(
            [
                'car_id' => 4,
                'kriteria_id' => 7,
                'alternatif_id' => 19,
                'nilai' => 1
            ]
        );

        nilai::create(
            [
                'car_id' => 4,
                'kriteria_id' => 8,
                'alternatif_id' => 23,
                'nilai' => 2
            ]
        );

        // Mobil 5 =======================================================================
        nilai::create(
            [
                'car_id' => 5,
                'kriteria_id' => 1,
                'alternatif_id' => 3,
                'nilai' => 1
            ]
        );

        nilai::create(
            [
                'car_id' => 5,
                'kriteria_id' => 2,
                'alternatif_id' => 6,
                'nilai' => 3
            ]
        );

        nilai::create(
            [
                'car_id' => 5,
                'kriteria_id' => 3,
                'alternatif_id' => 9,
                'nilai' => 3
            ]
        );

        nilai::create(
            [
                'car_id' => 5,
                'kriteria_id' => 4,
                'alternatif_id' => 12,
                'nilai' => 3
            ]
        );

        nilai::create(
            [
                'car_id' => 5,
                'kriteria_id' => 5,
                'alternatif_id' => 15,
                'nilai' => 3
            ]
        );

        nilai::create(
            [
                'car_id' => 5,
                'kriteria_id' => 6,
                'alternatif_id' => 18,
                'nilai' => 3
            ]
        );

        nilai::create(
            [
                'car_id' => 5,
                'kriteria_id' => 7,
                'alternatif_id' => 21,
                'nilai' => 3
            ]
        );

        nilai::create(
            [
                'car_id' => 5,
                'kriteria_id' => 8,
                'alternatif_id' => 24,
                'nilai' => 3
            ]
        );

        // Table Nilai====================================================================================
        nilai::create(
            [
                'car_id' => 6,
                'kriteria_id' => 1,
                'alternatif_id' => 3,
                'nilai' => 1
            ]
        );

        nilai::create(
            [
                'car_id' => 6,
                'kriteria_id' => 2,
                'alternatif_id' => 5,
                'nilai' => 2
            ]
        );

        nilai::create(
            [
                'car_id' => 6,
                'kriteria_id' => 3,
                'alternatif_id' => 7,
                'nilai' => 1
            ]
        );

        nilai::create(
            [
                'car_id' => 6,
                'kriteria_id' => 4,
                'alternatif_id' => 11,
                'nilai' => 2
            ]
        );

        nilai::create(
            [
                'car_id' => 6,
                'kriteria_id' => 5,
                'alternatif_id' => 13,
                'nilai' => 1
            ]
        );

        nilai::create(
            [
                'car_id' => 6,
                'kriteria_id' => 6,
                'alternatif_id' => 18,
                'nilai' => 3
            ]
        );

        nilai::create(
            [
                'car_id' => 6,
                'kriteria_id' => 7,
                'alternatif_id' => 21,
                'nilai' => 3
            ]
        );

        nilai::create(
            [
                'car_id' => 6,
                'kriteria_id' => 8,
                'alternatif_id' => 23,
                'nilai' => 2
            ]
        );

        // Mobil 2 =======================================================================
        nilai::create(
            [
                'car_id' => 7,
                'kriteria_id' => 1,
                'alternatif_id' => 1,
                'nilai' => 1
            ]
        );

        nilai::create(
            [
                'car_id' => 7,
                'kriteria_id' => 2,
                'alternatif_id' => 5,
                'nilai' => 2
            ]
        );

        nilai::create(
            [
                'car_id' => 7,
                'kriteria_id' => 3,
                'alternatif_id' => 7,
                'nilai' => 1
            ]
        );

        nilai::create(
            [
                'car_id' => 7,
                'kriteria_id' => 4,
                'alternatif_id' => 12,
                'nilai' => 3
            ]
        );

        nilai::create(
            [
                'car_id' => 7,
                'kriteria_id' => 5,
                'alternatif_id' => 15,
                'nilai' => 3
            ]
        );

        nilai::create(
            [
                'car_id' => 7,
                'kriteria_id' => 6,
                'alternatif_id' => 17,
                'nilai' => 2
            ]
        );

        nilai::create(
            [
                'car_id' => 7,
                'kriteria_id' => 7,
                'alternatif_id' => 20,
                'nilai' => 2
            ]
        );

        nilai::create(
            [
                'car_id' => 7,
                'kriteria_id' => 8,
                'alternatif_id' => 22,
                'nilai' => 1
            ]
        );

        // Mobil 3 =======================================================================
        nilai::create(
            [
                'car_id' => 8,
                'kriteria_id' => 1,
                'alternatif_id' => 3,
                'nilai' => 1
            ]
        );

        nilai::create(
            [
                'car_id' => 8,
                'kriteria_id' => 2,
                'alternatif_id' => 4,
                'nilai' => 1
            ]
        );

        nilai::create(
            [
                'car_id' => 8,
                'kriteria_id' => 3,
                'alternatif_id' => 7,
                'nilai' => 1
            ]
        );

        nilai::create(
            [
                'car_id' => 8,
                'kriteria_id' => 4,
                'alternatif_id' => 11,
                'nilai' => 2
            ]
        );

        nilai::create(
            [
                'car_id' => 8,
                'kriteria_id' => 5,
                'alternatif_id' => 13,
                'nilai' => 1
            ]
        );

        nilai::create(
            [
                'car_id' => 8,
                'kriteria_id' => 6,
                'alternatif_id' => 16,
                'nilai' => 1
            ]
        );

        nilai::create(
            [
                'car_id' => 8,
                'kriteria_id' => 7,
                'alternatif_id' => 21,
                'nilai' => 3
            ]
        );

        nilai::create(
            [
                'car_id' => 8,
                'kriteria_id' => 8,
                'alternatif_id' => 24,
                'nilai' => 3
            ]
        );

        // Mobil 4 =======================================================================
        nilai::create(
            [
                'car_id' => 9,
                'kriteria_id' => 1,
                'alternatif_id' => 1,
                'nilai' => 1
            ]
        );

        nilai::create(
            [
                'car_id' => 9,
                'kriteria_id' => 2,
                'alternatif_id' => 5,
                'nilai' => 2
            ]
        );

        nilai::create(
            [
                'car_id' => 9,
                'kriteria_id' => 3,
                'alternatif_id' => 9,
                'nilai' => 3
            ]
        );

        nilai::create(
            [
                'car_id' => 9,
                'kriteria_id' => 4,
                'alternatif_id' => 12,
                'nilai' => 3
            ]
        );

        nilai::create(
            [
                'car_id' => 9,
                'kriteria_id' => 5,
                'alternatif_id' => 15,
                'nilai' => 3
            ]
        );

        nilai::create(
            [
                'car_id' => 9,
                'kriteria_id' => 6,
                'alternatif_id' => 17,
                'nilai' => 2
            ]
        );

        nilai::create(
            [
                'car_id' => 9,
                'kriteria_id' => 7,
                'alternatif_id' => 19,
                'nilai' => 1
            ]
        );

        nilai::create(
            [
                'car_id' => 9,
                'kriteria_id' => 8,
                'alternatif_id' => 23,
                'nilai' => 2
            ]
        );

        // Mobil 5 =======================================================================
        nilai::create(
            [
                'car_id' => 10,
                'kriteria_id' => 1,
                'alternatif_id' => 3,
                'nilai' => 1
            ]
        );

        nilai::create(
            [
                'car_id' => 10,
                'kriteria_id' => 2,
                'alternatif_id' => 6,
                'nilai' => 3
            ]
        );

        nilai::create(
            [
                'car_id' => 10,
                'kriteria_id' => 3,
                'alternatif_id' => 9,
                'nilai' => 3
            ]
        );

        nilai::create(
            [
                'car_id' => 10,
                'kriteria_id' => 4,
                'alternatif_id' => 12,
                'nilai' => 3
            ]
        );

        nilai::create(
            [
                'car_id' => 10,
                'kriteria_id' => 5,
                'alternatif_id' => 15,
                'nilai' => 3
            ]
        );

        nilai::create(
            [
                'car_id' => 10,
                'kriteria_id' => 6,
                'alternatif_id' => 18,
                'nilai' => 3
            ]
        );

        nilai::create(
            [
                'car_id' => 10,
                'kriteria_id' => 7,
                'alternatif_id' => 21,
                'nilai' => 3
            ]
        );

        nilai::create(
            [
                'car_id' => 10,
                'kriteria_id' => 8,
                'alternatif_id' => 24,
                'nilai' => 3
            ]
        );
    }
}
