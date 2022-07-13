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
                'nama' => 'Kapasitas Mesin',
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
        //

        // Table Alternatif  Merk====================================================================================
            alternatif::create([
                'kriteria_id' => 1,
                'nama' => 'Daihatsu Terios',
                'nilai' => 1
            ]);
            alternatif::create([
                'kriteria_id' => 1,
                'nama' => 'Daihatsu Xenia',
                'nilai' => 1
            ]);
            alternatif::create([
                'kriteria_id' => 1,
                'nama' => 'Honda Jazz RS',
                'nilai' => 1
            ]);
            alternatif::create([
                'kriteria_id' => 1,
                'nama' => 'Mitsubishi Pajero Sport',
                'nilai' => 1
            ]);
            alternatif::create([
                'kriteria_id' => 1,
                'nama' => 'Mitsubishi Triton',
                'nilai' => 1
            ]);
            alternatif::create([
                'kriteria_id' => 1,
                'nama' => 'Toyota Avanza Type E',
                'nilai' => 1
            ]);
            alternatif::create([
                'kriteria_id' => 1,
                'nama' => 'Toyota Avanza Type G',
                'nilai' => 1
            ]);
            alternatif::create([
                'kriteria_id' => 1,
                'nama' => 'Toyota Avanza Veloz',
                'nilai' => 1
            ]);
            alternatif::create([
                'kriteria_id' => 1,
                'nama' => 'Toyota Kijang Innova',
                'nilai' => 1
            ]);
            alternatif::create([
                'kriteria_id' => 1,
                'nama' => 'Toyota Rush',
                'nilai' => 1
            ]);
        //

        // Table Alternatif  Tahun Produksi====================================================================================
            alternatif::create([
                'kriteria_id' => 2,
                'nama' => 'dibawah 2010',
                'nilai' => 1
            ]);
            alternatif::create([
                'kriteria_id' => 2,
                'nama' => '2010 sampai 2012',
                'nilai' => 2
            ]);
            alternatif::create([
                'kriteria_id' => 2,
                'nama' => '2013 sampai 2014',
                'nilai' => 3
            ]);
            alternatif::create([
                'kriteria_id' => 2,
                'nama' => '2015 sampai 2016',
                'nilai' => 4
            ]);
            alternatif::create([
                'kriteria_id' => 2,
                'nama' => '2017 sampai 2018',
                'nilai' => 5
            ]);
            alternatif::create([
                'kriteria_id' => 2,
                'nama' => '2019 sampai 2020',
                'nilai' => 6
            ]);
            alternatif::create([
                'kriteria_id' => 2,
                'nama' => '2021 sampai 2022',
                'nilai' => 7
            ]);
        //

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
        //

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
        //

        // Table Alternatif  Muatan Penumpang====================================================================================
            alternatif::create([
                'kriteria_id' => 5,
                'nama' => 'dibawah 5 orang',
                'nilai' => 1
            ]);
            alternatif::create([
                'kriteria_id' => 5,
                'nama' => '5 sampai 6 orang ',
                'nilai' => 2
            ]);
            alternatif::create([
                'kriteria_id' => 5,
                'nama' => '7 sampai 8 orang',
                'nilai' => 3
            ]);
            alternatif::create([
                'kriteria_id' => 5,
                'nama' => 'diatas 8 orang',
                'nilai' => 4
            ]);
        //

        // Table Alternatif  Kapasitas Mesin====================================================================================
            alternatif::create([
                'kriteria_id' => 6,
                'nama' => 'dibawah 1300cc',
                'nilai' => 1
            ]);
            alternatif::create([
                'kriteria_id' => 6,
                'nama' => '1301cc sampai 1400cc',
                'nilai' => 2
            ]);
            alternatif::create([
                'kriteria_id' => 6,
                'nama' => '1401cc sampai 1500cc',
                'nilai' => 3
            ]);
            alternatif::create([
                'kriteria_id' => 6,
                'nama' => '1501cc sampai 1600cc',
                'nilai' => 4
            ]);
            alternatif::create([
                'kriteria_id' => 6,
                'nama' => 'diatas 1600cc',
                'nilai' => 5
            ]);
        //

        // Table Alternatif  Jenis BBM====================================================================================
            alternatif::create([
                'kriteria_id' => 7,
                'nama' => 'Pertamax Turbo',
                'nilai' => 1
            ]);
            alternatif::create([
                'kriteria_id' => 7,
                'nama' => 'Pertamina DEX',
                'nilai' => 2
            ]);
            alternatif::create([
                'kriteria_id' => 7,
                'nama' => 'Pertamax',
                'nilai' => 3
            ]);
            alternatif::create([
                'kriteria_id' => 7,
                'nama' => 'Pertalite',
                'nilai' => 4
            ]);
            alternatif::create([
                'kriteria_id' => 7,
                'nama' => 'Solar',
                'nilai' => 5
            ]);
        //

        // Table Alternatif  Harga Sewa====================================================================================
            alternatif::create([
                'kriteria_id' => 8,
                'nama' => 'diatas 600rb/hari',
                'nilai' => 1
            ]);
            alternatif::create([
                'kriteria_id' => 8,
                'nama' => '501rb sampai 600rb/hari',
                'nilai' => 2
            ]);
            alternatif::create([
                'kriteria_id' => 8,
                'nama' => '401rb sampai 500rb/hari',
                'nilai' => 3
            ]);
            alternatif::create([
                'kriteria_id' => 8,
                'nama' => '300rb sampai 400rb/hari',
                'nilai' => 4
            ]);
            alternatif::create([
                'kriteria_id' => 8,
                'nama' => 'dibawah 300rb/hari',
                'nilai' => 5
            ]);
        //

        // Table User====================================================================================
            User::create([
                'username' => 'Admin-1',
                'email' => 'amirul@pnl.com',
                'no_hp' => 82367256774,
                'password' => Hash::make('admin'),
                'role' => 'admin'
            ]);
            User::create([
                'username' => 'sahlan',
                'email' => 'sahlan@pnl.com',
                'no_hp' => 81360307543,
                'password' => Hash::make('password'),
                'role' => 'rental'
            ]);
            User::create([
                'username' => 'andi',
                'email' => 'andi@pnl.com',
                'no_hp' => 80000000000,
                'password' => Hash::make('password'),
                'role' => 'rental'
            ]);
        //

        // Table Toko====================================================================================
            shop::create([
                'user_id' => '2',
                'nm_pu' => 'Sahlan Ramli',
                'nm_usaha' => 'CV. RENTAL PASEE',
                'alamat' => 'Kuta Blang, Kec. Banda Sakti, Kota Lhokseumawe, Aceh',
                'nik' => 1000000000000000,
                'longitude' => '97.13431547805044',
                'latitude' => '5.180881404640743'
            ]);
            shop::create([
                'user_id' => '3',
                'nm_pu' => 'Andi Safarella',
                'nm_usaha' => 'CV. ADAM JAYA RENTAL',
                'alamat' => 'Panggoi, Kec. Muara Dua, Kota Lhokseumawe, Aceh',
                'nik' => 1000000000000001,
                'longitude' => '97.11684470491008',
                'latitude' => '5.192010791247267'
            ]);
        //

        // Table car====================================================================================
            // car::create(
            //     [
            //         'user_id' => '2',
            //         'shop_id' => '1',
            //         'merk_id' => '9',
            //         'Tahun_Produksi_id' => '17',
            //         'Kondisi_Fisik_id' => '20',
            //         'Kondisi_Mesin_id' => '23',
            //         'Muatan_Penumpang_id' => '26',
            //         'Kapasitas_Mesin_id' => '32',
            //         'Jenis_BBM_id' => '37',
            //         'Harga_Sewa_id' => '39',
            //         'stok' => 'standby',
            //     ]
            // );
            // car::create(
            //     [
            //         'user_id' => '',
            //         'shop_id' => '',
            //         'merk_id' => '',
            //         'Tahun_Produksi_id' => '',
            //         'Kondisi_Fisik_id' => '',
            //         'Kondisi_Mesin_id' => '',
            //         'Muatan_Penumpang_id' => '',
            //         'Kapasitas_Mesin_id' => '',
            //         'Jenis_BBM_id' => '',
            //         'Harga_Sewa_id' => '',
            //         'stok' => 'standby',
            //     ]
            // );
        //

        // Table Nilai====================================================================================
            // nilai::create(
            //     [
            //         'car_id' => 1,
            //         'kriteria_id' => 1,
            //         'alternatif_id' => 3,
            //         'nilai' => 1
            //     ]
            // );
            // nilai::create(
            //     [
            //         'car_id' => 1,
            //         'kriteria_id' => 2,
            //         'alternatif_id' => 5,
            //         'nilai' => 2
            //     ]
            // );
            // nilai::create(
            //     [
            //         'car_id' => 1,
            //         'kriteria_id' => 3,
            //         'alternatif_id' => 7,
            //         'nilai' => 1
            //     ]
            // );
            // nilai::create(
            //     [
            //         'car_id' => 1,
            //         'kriteria_id' => 4,
            //         'alternatif_id' => 11,
            //         'nilai' => 2
            //     ]
            // );
            // nilai::create(
            //     [
            //         'car_id' => 1,
            //         'kriteria_id' => 5,
            //         'alternatif_id' => 13,
            //         'nilai' => 1
            //     ]
            // );
            // nilai::create(
            //     [
            //         'car_id' => 1,
            //         'kriteria_id' => 6,
            //         'alternatif_id' => 18,
            //         'nilai' => 3
            //     ]
            // );
            // nilai::create(
            //     [
            //         'car_id' => 1,
            //         'kriteria_id' => 7,
            //         'alternatif_id' => 21,
            //         'nilai' => 3
            //     ]
            // );
            // nilai::create(
            //     [
            //         'car_id' => 1,
            //         'kriteria_id' => 8,
            //         'alternatif_id' => 23,
            //         'nilai' => 2
            //     ]
            // );
        //
    }
}
