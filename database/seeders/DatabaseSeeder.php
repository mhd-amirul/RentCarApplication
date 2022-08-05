<?php

namespace Database\Seeders;

use App\Models\alternatif;
use App\Models\car;
use App\Models\kriteria;
use App\Models\nilai;
use App\Models\shop;
use App\Models\ulasan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
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
                'bobot' => 0,
                'type' => ''
            ]);
            kriteria::create([
                'nama' => 'Tahun Produksi',
                'bobot' => 0.1,
                'type' => 'benefit'
            ]);
            kriteria::create([
                'nama' => 'Kondisi Fisik',
                'bobot' => 0.15,
                'type' => 'benefit'
            ]);
            kriteria::create([
                'nama' => 'Kondisi Mesin',
                'bobot' => 0.2,
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
                'bobot' => 0.1,
                'type' => 'benefit'
            ]);
            kriteria::create([
                'nama' => 'Harga Sewa',
                'bobot' => 0.2,
                'type' => 'cost'
            ]);
        //

        // Table Alternatif ====================================================================================
            alternatif::create([
                "kriteria_id" => 1,
                "Nama" => "Daihatsu Terios",
                "Nilai" => 1]);
            alternatif::create([
                "kriteria_id" => 1,
                "Nama" => "Daihatsu Xenia",
                "Nilai" => 1]);
            alternatif::create([
                "kriteria_id" => 1,
                "Nama" => "Honda Jazz RS",
                "Nilai" => 1]);
            alternatif::create([
                "kriteria_id" => 1,
                "Nama" => "Mitsubishi Pajero Sport",
                "Nilai" => 1]);
            alternatif::create([
                "kriteria_id" => 1,
                "Nama" => "Mitsubishi Triton",
                "Nilai" => 1]);
            alternatif::create([
                "kriteria_id" => 1,
                "Nama" => "Toyota Avanza Type E",
                "Nilai" => 1]);
            alternatif::create([
                "kriteria_id" => 1,
                "Nama" => "Toyota Avanza Type G",
                "Nilai" => 1]);
            alternatif::create([
                "kriteria_id" => 1,
                "Nama" => "Toyota Avanza Veloz",
                "Nilai" => 1]);
            alternatif::create([
                "kriteria_id" => 1,
                "Nama" => "Toyota Kijang Innova",
                "Nilai" => 1]);
            alternatif::create([
                "kriteria_id" => 1,
                "Nama" => "Toyota Rush",
                "Nilai" => 1]);
            alternatif::create([
                "kriteria_id" => 1,
                "Nama" => "Toyota Hiace",
                "Nilai" => 1]);
            alternatif::create([
                "kriteria_id" => 1,
                "Nama" => "Suzuki Ertiga",
                "Nilai" => 1]);
            alternatif::create([
                "kriteria_id" => 1,
                "Nama" => "Honda Mobilio RS",
                "Nilai" => 1]);
            alternatif::create([
                "kriteria_id" => 1,
                "Nama" => "Toyota Calya",
                "Nilai" => 1]);
            alternatif::create([
                "kriteria_id" => 1,
                "Nama" => "Mitsubishi Xpander",
                "Nilai" => 1]);
            alternatif::create([
                "kriteria_id" => 2,
                "Nama" => 2010,
                "Nilai" => 1]);
            alternatif::create([
                "kriteria_id" => 2,
                "Nama" => 2011,
                "Nilai" => 2]);
            alternatif::create([
                "kriteria_id" => 2,
                "Nama" => 2012,
                "Nilai" => 3]);
            alternatif::create([
                "kriteria_id" => 2,
                "Nama" => 2013,
                "Nilai" => 4]);
            alternatif::create([
                "kriteria_id" => 2,
                "Nama" => 2014,
                "Nilai" => 5]);
            alternatif::create([
                "kriteria_id" => 2,
                "Nama" => 2015,
                "Nilai" => 6]);
            alternatif::create([
                "kriteria_id" => 2,
                "Nama" => 2016,
                "Nilai" => 7]);
            alternatif::create([
                "kriteria_id" => 2,
                "Nama" => 2017,
                "Nilai" => 8]);
            alternatif::create([
                "kriteria_id" => 2,
                "Nama" => 2018,
                "Nilai" => 9]);
            alternatif::create([
                "kriteria_id" => 2,
                "Nama" => 2019,
                "Nilai" => 10]);
            alternatif::create([
                "kriteria_id" => 2,
                "Nama" => 2020,
                "Nilai" => 11]);
            alternatif::create([
                "kriteria_id" => 2,
                "Nama" => 2021,
                "Nilai" => 12]);
            alternatif::create([
                "kriteria_id" => 2,
                "Nama" => 2022,
                "Nilai" => 13]);
            alternatif::create([
                "kriteria_id" => 3,
                "Nama" => "kurang baik",
                "Nilai" => 1]);
            alternatif::create([
                "kriteria_id" => 3,
                "Nama" => "Baik",
                "Nilai" => 2]);
            alternatif::create([
                "kriteria_id" => 3,
                "Nama" => "sangat baik",
                "Nilai" => 3]);
            alternatif::create([
                "kriteria_id" => 4,
                "Nama" => "kurang baik",
                "Nilai" => 1]);
            alternatif::create([
                "kriteria_id" => 4,
                "Nama" => "Baik",
                "Nilai" => 2]);
            alternatif::create([
                "kriteria_id" => 4,
                "Nama" => "sangat baik",
                "Nilai" => 3]);
            alternatif::create([
                "kriteria_id" => 5,
                "Nama" => 5,
                "Nilai" => 1]);
            alternatif::create([
                "kriteria_id" => 5,
                "Nama" => 7,
                "Nilai" => 2]);
            alternatif::create([
                "kriteria_id" => 5,
                "Nama" => 8,
                "Nilai" => 3]);
            alternatif::create([
                "kriteria_id" => 5,
                "Nama" => 16,
                "Nilai" => 4]);
            alternatif::create([
                "kriteria_id" => 6,
                "Nama" => "1000cc",
                "Nilai" => 1]);
            alternatif::create([
                "kriteria_id" => 6,
                "Nama" => "1200cc",
                "Nilai" => 2]);
            alternatif::create([
                "kriteria_id" => 6,
                "Nama" => "1300cc",
                "Nilai" => 3]);
            alternatif::create([
                "kriteria_id" => 6,
                "Nama" => "1500cc",
                "Nilai" => 4]);
            alternatif::create([
                "kriteria_id" => 6,
                "Nama" => "1800cc",
                "Nilai" => 5]);
            alternatif::create([
                "kriteria_id" => 6,
                "Nama" => "2000cc",
                "Nilai" => 6]);
            alternatif::create([
                "kriteria_id" => 6,
                "Nama" => "2400cc",
                "Nilai" => 7]);
            alternatif::create([
                "kriteria_id" => 6,
                "Nama" => "2500cc",
                "Nilai" => 8]);
            alternatif::create([
                "kriteria_id" => 7,
                "Nama" => "Pertamax Turbo",
                "Nilai" => 1]);
            alternatif::create([
                "kriteria_id" => 7,
                "Nama" => "Pertamina DEX",
                "Nilai" => 2]);
            alternatif::create([
                "kriteria_id" => 7,
                "Nama" => "Pertamax",
                "Nilai" => 3]);
            alternatif::create([
                "kriteria_id" => 7,
                "Nama" => "Pertalite",
                "Nilai" => 4]);
            alternatif::create([
                "kriteria_id" => 7,
                "Nama" => "Solar",
                "Nilai" => 5]);
            alternatif::create([
                "kriteria_id" => 8,
                "Nama" => 300000,
                "Nilai" => 14]);
            alternatif::create([
                "kriteria_id" => 8,
                "Nama" => 350000,
                "Nilai" => 13]);
            alternatif::create([
                "kriteria_id" => 8,
                "Nama" => 400000,
                "Nilai" => 12]);
            alternatif::create([
                "kriteria_id" => 8,
                "Nama" => 450000,
                "Nilai" => 11]);
            alternatif::create([
                "kriteria_id" => 8,
                "Nama" => 500000,
                "Nilai" => 10]);
            alternatif::create([
                "kriteria_id" => 8,
                "Nama" => 550000,
                "Nilai" => 9]);
            alternatif::create([
                "kriteria_id" => 8,
                "Nama" => 600000,
                "Nilai" => 8]);
            alternatif::create([
                "kriteria_id" => 8,
                "Nama" => 650000,
                "Nilai" => 7]);
            alternatif::create([
                "kriteria_id" => 8,
                "Nama" => 700000,
                "Nilai" => 6]);
            alternatif::create([
                "kriteria_id" => 8,
                "Nama" => 1000000,
                "Nilai" => 5]);
            alternatif::create([
                "kriteria_id" => 8,
                "Nama" => 1200000,
                "Nilai" => 4]);
            alternatif::create([
                "kriteria_id" => 8,
                "Nama" => 1300000,
                "Nilai" => 3]);
            alternatif::create([
                "kriteria_id" => 8,
                "Nama" => 1400000,
                "Nilai" => 2]);
            alternatif::create([
                "kriteria_id" => 8,
                "Nama" => 1500000,
                "Nilai" => 1]);
        //

        // Table User====================================================================================
            User::create([
                'slug' => '2TBv8bXOUfCdHVyavrG89v0taGS96qmxuwHfGGB9josete8GG3',
                'username' => 'Admin-1',
                'email' => 'amirul@pnl.com',
                'no_hp' => '82367256774',
                'password' => Hash::make('password'),
                'image' => NULL,
                'role' => 'admin',]);
            User::create([
                'slug' => 'NiYB8b2BF8XL41GFrhWt9jzVogsaYynnEFjZ4EC0YsRwbEhZMe',
                'username' => 'sahlan',
                'email' => 'sahlan@gmail.com',
                'no_hp' => '81360307543',
                'password' => Hash::make('password'),
                'image' => NULL,
                'role' => 'rental',]);
            User::create([
                'slug' => 'FK597s5OF1nRyJCxTgErB10az3a5v4wZLPvP0a81gRjJNtktlz',
                'username' => 'andi',
                'email' => 'andi@gmail.com',
                'no_hp' => '80000000000',
                'password' => Hash::make('password'),
                'image' => NULL,
                'role' => 'rental',]);

            User::create([
                'slug' => 'y2VwbGk5ghbPYdsyrSZ1A96c2yIh8cdplBc4YO41O7QZ3DFYyf',
                'username' => 'Mulyadi',
                'email' => 'mulyadi@gmail.com',
                'no_hp' => '8116700751',
                'password' => Hash::make('password'),
                'image' => NULL,
                'role' => 'rental',]);
            User::create([
                'slug' => 'UDn1oarJhkMnBYfbswrj66xLLTA1Be8psSmXGmP5eTXUPv2D9X',
                'username' => 'Okta',
                'email' => 'okta@gmail.com',
                'no_hp' => '81360544560',
                'password' => Hash::make('password'),
                'image' => NULL,
                'role' => 'rental',]);
            User::create([
                'slug' => 'mmwSJmXJCFu2gyquynOtj7VZ4axv7YrPngOxJuwqafJAdEHkAL',
                'username' => 'benseupakat',
                'email' => 'benseupakat@gmail.com',
                'no_hp' => '85372866102',
                'password' => Hash::make('password'),
                'image' => NULL,
                'role' => 'rental',]);
            // User::create([
            //     'slug' => '8fcq3ofKh9VujrzbSkYO485R2RS9zlWb2x6uSciNIVUIZMxBHW',
            //     'username' => 'amin-family-group',
            //     'email' => 'aminfamilygroup@gmail.com',
            //     'no_hp' => '85260642004',
            //     'password' => Hash::make('password'),
            //     'image' => NULL,
            //     'role' => 'rental',]);
            // User::create([
            //     'slug' => 'iXLe0pV4XxaOXKPJjjXzDH2HyBqPrkGaH8aVq3tHNDdkPFPx8o',
            //     'username' => 'pangeran-rentcar',
            //     'email' => 'pangeran@gmail.com',
            //     'no_hp' => '85262488702',
            //     'password' => Hash::make('password'),
            //     'image' => NULL,
            //     'role' => 'rental',]);
            // User::create([
            //     'slug' => 'VSxcjqZFIzxnfeFoIk5epz8PjqNJ3zFjp7tXtUyyeTpKFW5gpF',
            //     'username' => 'Jeumpa Puteh',
            //     'email' => 'jeumpaputeh@gmail.com',
            //     'no_hp' => '80000000002',
            //     'password' => Hash::make('password'),
            //     'image' => NULL,
            //     'role' => 'rental',]);
            // User::create([
            //     'slug' => '5pY1aQ21v7n4ZR6O0a88Rb6RYgzVakwiIk5fuiUT0u3sjPfbFo',
            //     'username' => 'Galery Rental',
            //     'email' => 'galery-rental@gmail.com',
            //     'no_hp' => '85360498475',
            //     'password' => Hash::make('password'),
            //     'image' => NULL,
            //     'role' => 'rental',]);
            // User::create([
            //     'slug' => 'Zrpfd0uv7m8U1pUBQczNumfOFptcJQ6STvrfgeM4eCbyGftwF1',
            //     'username' => 'BOY CAR',
            //     'email' => 'boy-car@gmail.com',
            //     'no_hp' => '82246480459',
            //     'password' => Hash::make('password'),
            //     'image' => NULL,
            //     'role' => 'rental',]);

        //

        // Table Toko====================================================================================
            shop::create([
                'slug' => 'MADQQukff9Z40mVCsvkvr5Cy8x3R7v9e0hzmQn0tqYBAR19cdZ',
                'user_id' => '2',
                'nm_pu' => 'Sahlan Ramli',
                'nm_usaha' => 'CV. RENTAL PASEE',
                'alamat' => 'Kuta Blang, Kec. Banda Sakti, Kota Lhokseumawe, Aceh',
                'nik' => '1000000000000000',
                'status' => 'active',
                'longitude' => '97.13431547805044',
                'latitude' => '5.180881404640743',
                'img_ktp' => NULL,
                'img_siu' => NULL,
                'pas_foto' => 'pas_foto/37WtkIuJZNRU9KGhbwWVSGFlb2MC8GsmSYJZ4DWg.png',
                'foto_usaha' => 'foto_usaha/gA2sJC3E3l5NFrC9rSbpLnxKeWy9IOOO0fA8QEP2.png',]);
            shop::create([
                'slug' => 'iEhbbxtFgNsvyk108D15xbg4PGUY6JtAzcJyp5w6zbmMLackpP',
                'user_id' => '3',
                'nm_pu' => 'Andi Safarell',
                'nm_usaha' => 'CV. ADAM JAYA RENTAL',
                'alamat' => 'Panggoi, Kec. Muara Dua, Kota Lhokseumawe, Aceh',
                'nik' => '1000000000000001',
                'status' => 'active',
                'longitude' => '97.11684470491008',
                'latitude' => '5.192010791247267',
                'img_ktp' => NULL,
                'img_siu' => NULL,
                'pas_foto' => NULL,
                'foto_usaha' => 'foto_usaha/U69kuOuM2ly0SLjCM9GlWgDANYUDSPd1nLXDyTRG.png',]);
            shop::create([
                    'slug' => 'nM6ByLe5NnMntQ4mD0ZkTKIuqvVagKfalACFa0HJy8HeaGWIu5',
                    'user_id' => '4',
                    'nm_pu' => 'Mulyadi AM',
                    'nm_usaha' => 'CV. Karya Madi Jaya',
                    'alamat' => 'Cunda, Kec. Muara Dua, Kota Lhokseumawe, Aceh',
                    'nik' => '1000000000000002',
                    'status' => 'active',
                    'longitude' => '97.1231064121038',
                    'latitude' => '5.185413765958735',
                    'img_ktp' => NULL,
                    'img_siu' => NULL,
                    'pas_foto' => NULL,
                    'foto_usaha' => NULL,]);
            shop::create([
                'slug' => 'x4QyYQATVntwO37wH18rO9CTYzToQNJvJUR2s5L9Ja0B1GAPLg',
                'user_id' => '5',
                'nm_pu' => 'Okta Rianda',
                'nm_usaha' => 'CV.RESTU OTO CAR',
                'alamat' => 'Pulo Ara Geudong Teungoh, Kec. Kota Juang, Kabupaten Bireuen, Aceh',
                'nik' => '1000000000000003',
                'status' => 'active',
                'longitude' => '96.6884341149254',
                'latitude' => '5.237976639933675',
                'img_ktp' => NULL,
                'img_siu' => NULL,
                'pas_foto' => NULL,
                'foto_usaha' => NULL,]);
            shop::create([
                'slug' => 'TDGQtPlv1LE2szqsphDHl0sgIDjDs4LWEUz9OZZcX8ivJ6r3va',
                'user_id' => '6',
                'nm_pu' => 'Ben Seupakat',
                'nm_usaha' => 'Ben Seupakat RentCar',
                'alamat' => 'Kuta Blang, Kec. Banda Sakti, Kota Lhokseumawe, Aceh',
                'nik' => '1000000000000004',
                'status' => 'active',
                'longitude' => '97.13205109624819',
                'latitude' => '5.1853764099034825',
                'img_ktp' => NULL,
                'img_siu' => NULL,
                'pas_foto' => NULL,
                'foto_usaha' => NULL,]);
            // shop::create([
            //     'slug' => '5gOHWS6PC2o7kWByilZRXYzf00hd9KWbilcop8yWy2pEqcvnd1',
            //     'user_id' => '7',
            //     'nm_pu' => 'AMINS FAMILY GROUP',
            //     'nm_usaha' => 'CV.AMINS FAMILY GROUP',
            //     'alamat' => 'Alue Awe, Kec. Muara Dua, Kota Lhokseumawe, Aceh',
            //     'nik' => '1000000000000005',
            //     'status' => 'active',
            //     'longitude' => '97.15181872276462',
            //     'latitude' => '5.131626592237223',
            //     'img_ktp' => NULL,
            //     'img_siu' => NULL,
            //     'pas_foto' => NULL,
            //     'foto_usaha' => NULL,]);
            // shop::create([
            //     'slug' => 'k31CtCUDyu2tIkr6aHkmcpoFjIggicJd5WAOWtWoZmEWb8pzEQ',
            //     'user_id' => '8',
            //     'nm_pu' => 'Pangeran Rental Mobil',
            //     'nm_usaha' => 'CV Pangeran Rental Mobil',
            //     'alamat' => 'Pante Gajah, Kec. Peusangan, Kabupaten Bireuen, Aceh',
            //     'nik' => '1000000000000005',
            //     'status' => 'active',
            //     'longitude' => '96.7924087153415',
            //     'latitude' => '5.196195615502062',
            //     'img_ktp' => NULL,
            //     'img_siu' => NULL,
            //     'pas_foto' => NULL,
            //     'foto_usaha' => NULL,]);
            // shop::create([
            //     'slug' => 'mLBRaTVzlVPOF6gE7pLz8P8fZ0xlFSVUyTnXsVhsU692oROUm0',
            //     'user_id' => '9',
            //     'nm_pu' => 'Jeumpa Puteh',
            //     'nm_usaha' => 'Rental Mobil Jeumpa Puteh',
            //     'alamat' => 'Gampong Baro, Kec. Kota Juang, Kabupaten Bireuen, Aceh',
            //     'nik' => '1000000000000006',
            //     'status' => 'active',
            //     'longitude' => '96.69706850794557',
            //     'latitude' => '5.207695665940623',
            //     'img_ktp' => NULL,
            //     'img_siu' => NULL,
            //     'pas_foto' => NULL,
            //     'foto_usaha' => NULL,]);
            // shop::create([
            //     'slug' => 'iAz5Lb3JiTCCwC2BroCwInj6mSUg6appyw4QDfJdGP4ufricFG',
            //     'user_id' => '10',
            //     'nm_pu' => 'Galery Rental',
            //     'nm_usaha' => 'Cv. Galery Rental Lhokseumawe',
            //     'alamat' => 'Uteun Kot, Kec. Muara Dua, Kota Lhokseumawe, Aceh',
            //     'nik' => '1000000000000008',
            //     'status' => 'active',
            //     'longitude' => '97.12736531534149',
            //     'latitude' => '5.1685727698092405',
            //     'img_ktp' => NULL,
            //     'img_siu' => NULL,
            //     'pas_foto' => NULL,
            //     'foto_usaha' => NULL,]);
            // shop::create([
            //     'slug' => '73aFtkrUnR98hxDoRtuENGdPocyHOU8LJUPqbAaWUFwSa2PueK',
            //     'user_id' => '11',
            //     'nm_pu' => 'BOY CAR',
            //     'nm_usaha' => 'BOY CAR RENTAL LHOKSEUMAWE',
            //     'alamat' => 'Kuta Blang, Kec. Banda Sakti, Kota Lhokseumawe, Aceh',
            //     'nik' => '1000000000000007',
            //     'status' => 'active',
            //     'longitude' => '97.13608514117615',
            //     'latitude' => '5.184874221846914',
            //     'img_ktp' => NULL,
            //     'img_siu' => NULL,
            //     'pas_foto' => NULL,
            //     'foto_usaha' => NULL,
            // ]);


        //

        // Table car====================================================================================
            // Pasee
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 2,
                    "shop_id" => 1,
                    "merk_id" => 9,
                    "Tahun_Produksi_id" => 27,
                    "Kondisi_Fisik_id" => 34,
                    "Kondisi_Mesin_id" => 34,
                    "Muatan_Penumpang_id" => 37,
                    "Kapasitas_Mesin_id" => 45,
                    "Jenis_BBM_id" => 51,
                    "Harga_Sewa_id" => 58]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 2,
                    "shop_id" => 1,
                    "merk_id" => 9,
                    "Tahun_Produksi_id" => 27,
                    "Kondisi_Fisik_id" => 34,
                    "Kondisi_Mesin_id" => 34,
                    "Muatan_Penumpang_id" => 37,
                    "Kapasitas_Mesin_id" => 45,
                    "Jenis_BBM_id" => 51,
                    "Harga_Sewa_id" => 58]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 2,
                    "shop_id" => 1,
                    "merk_id" => 9,
                    "Tahun_Produksi_id" => 26,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 37,
                    "Kapasitas_Mesin_id" => 45,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 57]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 2,
                    "shop_id" => 1,
                    "merk_id" => 9,
                    "Tahun_Produksi_id" => 26,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 37,
                    "Kapasitas_Mesin_id" => 45,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 57]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 2,
                    "shop_id" => 1,
                    "merk_id" => 9,
                    "Tahun_Produksi_id" => 25,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 37,
                    "Kapasitas_Mesin_id" => 45,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 57]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 2,
                    "shop_id" => 1,
                    "merk_id" => 8,
                    "Tahun_Produksi_id" => 27,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 42,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 53]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 2,
                    "shop_id" => 1,
                    "merk_id" => 8,
                    "Tahun_Produksi_id" => 24,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 42,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 2,
                    "shop_id" => 1,
                    "merk_id" => 8,
                    "Tahun_Produksi_id" => 21,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 42,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 2,
                    "shop_id" => 1,
                    "merk_id" => 8,
                    "Tahun_Produksi_id" => 19,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 42,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 2,
                    "shop_id" => 1,
                    "merk_id" => 7,
                    "Tahun_Produksi_id" => 28,
                    "Kondisi_Fisik_id" => 34,
                    "Kondisi_Mesin_id" => 34,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 42,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 53]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 2,
                    "shop_id" => 1,
                    "merk_id" => 7,
                    "Tahun_Produksi_id" => 23,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 41,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 2,
                    "shop_id" => 1,
                    "merk_id" => 7,
                    "Tahun_Produksi_id" => 21,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 41,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 2,
                    "shop_id" => 1,
                    "merk_id" => 7,
                    "Tahun_Produksi_id" => 16,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 41,
                    "Jenis_BBM_id" => 49,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 2,
                    "shop_id" => 1,
                    "merk_id" => 6,
                    "Tahun_Produksi_id" => 23,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 41,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 2,
                    "shop_id" => 1,
                    "merk_id" => 6,
                    "Tahun_Produksi_id" => 23,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 41,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 2,
                    "shop_id" => 1,
                    "merk_id" => 3,
                    "Tahun_Produksi_id" => 27,
                    "Kondisi_Fisik_id" => 34,
                    "Kondisi_Mesin_id" => 34,
                    "Muatan_Penumpang_id" => 35,
                    "Kapasitas_Mesin_id" => 42,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 53]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 2,
                    "shop_id" => 1,
                    "merk_id" => 3,
                    "Tahun_Produksi_id" => 27,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 35,
                    "Kapasitas_Mesin_id" => 42,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 53]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 2,
                    "shop_id" => 1,
                    "merk_id" => 3,
                    "Tahun_Produksi_id" => 27,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 35,
                    "Kapasitas_Mesin_id" => 42,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 53]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 2,
                    "shop_id" => 1,
                    "merk_id" => 3,
                    "Tahun_Produksi_id" => 24,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 35,
                    "Kapasitas_Mesin_id" => 42,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 2,
                    "shop_id" => 1,
                    "merk_id" => 3,
                    "Tahun_Produksi_id" => 24,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 35,
                    "Kapasitas_Mesin_id" => 42,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 3,
                    "shop_id" => 2,
                    "merk_id" => 8,
                    "Tahun_Produksi_id" => 27,
                    "Kondisi_Fisik_id" => 34,
                    "Kondisi_Mesin_id" => 34,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 42,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 53]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 3,
                    "shop_id" => 2,
                    "merk_id" => 8,
                    "Tahun_Produksi_id" => 24,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 42,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 3,
                    "shop_id" => 2,
                    "merk_id" => 8,
                    "Tahun_Produksi_id" => 24,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 42,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 3,
                    "shop_id" => 2,
                    "merk_id" => 8,
                    "Tahun_Produksi_id" => 24,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 42,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 3,
                    "shop_id" => 2,
                    "merk_id" => 7,
                    "Tahun_Produksi_id" => 28,
                    "Kondisi_Fisik_id" => 34,
                    "Kondisi_Mesin_id" => 34,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 42,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 53]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 3,
                    "shop_id" => 2,
                    "merk_id" => 7,
                    "Tahun_Produksi_id" => 23,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 41,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 3,
                    "shop_id" => 2,
                    "merk_id" => 7,
                    "Tahun_Produksi_id" => 23,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 41,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 3,
                    "shop_id" => 2,
                    "merk_id" => 7,
                    "Tahun_Produksi_id" => 23,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 41,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 3,
                    "shop_id" => 2,
                    "merk_id" => 7,
                    "Tahun_Produksi_id" => 21,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 41,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 3,
                    "shop_id" => 2,
                    "merk_id" => 7,
                    "Tahun_Produksi_id" => 16,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 41,
                    "Jenis_BBM_id" => 49,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 3,
                    "shop_id" => 2,
                    "merk_id" => 7,
                    "Tahun_Produksi_id" => 16,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 41,
                    "Jenis_BBM_id" => 49,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 3,
                    "shop_id" => 2,
                    "merk_id" => 9,
                    "Tahun_Produksi_id" => 27,
                    "Kondisi_Fisik_id" => 34,
                    "Kondisi_Mesin_id" => 34,
                    "Muatan_Penumpang_id" => 37,
                    "Kapasitas_Mesin_id" => 45,
                    "Jenis_BBM_id" => 51,
                    "Harga_Sewa_id" => 58]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 3,
                    "shop_id" => 2,
                    "merk_id" => 9,
                    "Tahun_Produksi_id" => 27,
                    "Kondisi_Fisik_id" => 34,
                    "Kondisi_Mesin_id" => 34,
                    "Muatan_Penumpang_id" => 37,
                    "Kapasitas_Mesin_id" => 45,
                    "Jenis_BBM_id" => 51,
                    "Harga_Sewa_id" => 58]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 3,
                    "shop_id" => 2,
                    "merk_id" => 9,
                    "Tahun_Produksi_id" => 26,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 37,
                    "Kapasitas_Mesin_id" => 45,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 57]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 3,
                    "shop_id" => 2,
                    "merk_id" => 9,
                    "Tahun_Produksi_id" => 25,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 37,
                    "Kapasitas_Mesin_id" => 45,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 57]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 3,
                    "shop_id" => 2,
                    "merk_id" => 4,
                    "Tahun_Produksi_id" => 24,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 45,
                    "Jenis_BBM_id" => 51,
                    "Harga_Sewa_id" => 63]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 3,
                    "shop_id" => 2,
                    "merk_id" => 4,
                    "Tahun_Produksi_id" => 24,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 45,
                    "Jenis_BBM_id" => 51,
                    "Harga_Sewa_id" => 63]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 3,
                    "shop_id" => 2,
                    "merk_id" => 10,
                    "Tahun_Produksi_id" => 24,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 42,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 54]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 3,
                    "shop_id" => 2,
                    "merk_id" => 10,
                    "Tahun_Produksi_id" => 24,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 42,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 54]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 3,
                    "shop_id" => 2,
                    "merk_id" => 10,
                    "Tahun_Produksi_id" => 21,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 35,
                    "Kapasitas_Mesin_id" => 42,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 53]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 3,
                    "shop_id" => 2,
                    "merk_id" => 10,
                    "Tahun_Produksi_id" => 21,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 35,
                    "Kapasitas_Mesin_id" => 42,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 53]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 3,
                    "shop_id" => 2,
                    "merk_id" => 5,
                    "Tahun_Produksi_id" => 27,
                    "Kondisi_Fisik_id" => 34,
                    "Kondisi_Mesin_id" => 34,
                    "Muatan_Penumpang_id" => 35,
                    "Kapasitas_Mesin_id" => 45,
                    "Jenis_BBM_id" => 51,
                    "Harga_Sewa_id" => 62]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 3,
                    "shop_id" => 2,
                    "merk_id" => 5,
                    "Tahun_Produksi_id" => 27,
                    "Kondisi_Fisik_id" => 34,
                    "Kondisi_Mesin_id" => 34,
                    "Muatan_Penumpang_id" => 35,
                    "Kapasitas_Mesin_id" => 45,
                    "Jenis_BBM_id" => 51,
                    "Harga_Sewa_id" => 62]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 3,
                    "shop_id" => 2,
                    "merk_id" => 1,
                    "Tahun_Produksi_id" => 28,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 42,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 53]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 3,
                    "shop_id" => 2,
                    "merk_id" => 1,
                    "Tahun_Produksi_id" => 27,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 42,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 53]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 3,
                    "shop_id" => 2,
                    "merk_id" => 1,
                    "Tahun_Produksi_id" => 27,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 42,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 53]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 3,
                    "shop_id" => 2,
                    "merk_id" => 1,
                    "Tahun_Produksi_id" => 24,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 42,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 3,
                    "shop_id" => 2,
                    "merk_id" => 1,
                    "Tahun_Produksi_id" => 24,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 42,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 3,
                    "shop_id" => 2,
                    "merk_id" => 2,
                    "Tahun_Produksi_id" => 26,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 41,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 53]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 3,
                    "shop_id" => 2,
                    "merk_id" => 2,
                    "Tahun_Produksi_id" => 23,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 41,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 3,
                    "shop_id" => 2,
                    "merk_id" => 2,
                    "Tahun_Produksi_id" => 23,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 41,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 3,
                    "shop_id" => 2,
                    "merk_id" => 2,
                    "Tahun_Produksi_id" => 20,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 41,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 3,
                    "shop_id" => 2,
                    "merk_id" => 2,
                    "Tahun_Produksi_id" => 18,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 41,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 3,
                    "shop_id" => 2,
                    "merk_id" => 2,
                    "Tahun_Produksi_id" => 17,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 41,
                    "Jenis_BBM_id" => 49,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 3,
                    "shop_id" => 2,
                    "merk_id" => 2,
                    "Tahun_Produksi_id" => 17,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 41,
                    "Jenis_BBM_id" => 49,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 4,
                    "shop_id" => 3,
                    "merk_id" => 9,
                    "Tahun_Produksi_id" => 26,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 37,
                    "Kapasitas_Mesin_id" => 45,
                    "Jenis_BBM_id" => 51,
                    "Harga_Sewa_id" => 58]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 4,
                    "shop_id" => 3,
                    "merk_id" => 9,
                    "Tahun_Produksi_id" => 21,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 37,
                    "Kapasitas_Mesin_id" => 45,
                    "Jenis_BBM_id" => 51,
                    "Harga_Sewa_id" => 58]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 4,
                    "shop_id" => 3,
                    "merk_id" => 9,
                    "Tahun_Produksi_id" => 26,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 37,
                    "Kapasitas_Mesin_id" => 45,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 57]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 4,
                    "shop_id" => 3,
                    "merk_id" => 9,
                    "Tahun_Produksi_id" => 25,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 37,
                    "Kapasitas_Mesin_id" => 45,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 57]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 4,
                    "shop_id" => 3,
                    "merk_id" => 8,
                    "Tahun_Produksi_id" => 24,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 42,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 4,
                    "shop_id" => 3,
                    "merk_id" => 8,
                    "Tahun_Produksi_id" => 21,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 42,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 4,
                    "shop_id" => 3,
                    "merk_id" => 8,
                    "Tahun_Produksi_id" => 19,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 42,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 4,
                    "shop_id" => 3,
                    "merk_id" => 7,
                    "Tahun_Produksi_id" => 24,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 41,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 4,
                    "shop_id" => 3,
                    "merk_id" => 4,
                    "Tahun_Produksi_id" => 24,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 45,
                    "Jenis_BBM_id" => 51,
                    "Harga_Sewa_id" => 63]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 4,
                    "shop_id" => 3,
                    "merk_id" => 4,
                    "Tahun_Produksi_id" => 24,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 45,
                    "Jenis_BBM_id" => 51,
                    "Harga_Sewa_id" => 63]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 4,
                    "shop_id" => 3,
                    "merk_id" => 11,
                    "Tahun_Produksi_id" => 21,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 38,
                    "Kapasitas_Mesin_id" => 46,
                    "Jenis_BBM_id" => 51,
                    "Harga_Sewa_id" => 65]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 4,
                    "shop_id" => 3,
                    "merk_id" => 11,
                    "Tahun_Produksi_id" => 21,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 38,
                    "Kapasitas_Mesin_id" => 46,
                    "Jenis_BBM_id" => 51,
                    "Harga_Sewa_id" => 65]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 4,
                    "shop_id" => 3,
                    "merk_id" => 2,
                    "Tahun_Produksi_id" => 23,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 41,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 4,
                    "shop_id" => 3,
                    "merk_id" => 2,
                    "Tahun_Produksi_id" => 23,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 41,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 4,
                    "shop_id" => 3,
                    "merk_id" => 2,
                    "Tahun_Produksi_id" => 20,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 41,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 5,
                    "shop_id" => 4,
                    "merk_id" => 7,
                    "Tahun_Produksi_id" => 23,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 41,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 5,
                    "shop_id" => 4,
                    "merk_id" => 7,
                    "Tahun_Produksi_id" => 21,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 41,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 5,
                    "shop_id" => 4,
                    "merk_id" => 7,
                    "Tahun_Produksi_id" => 16,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 41,
                    "Jenis_BBM_id" => 49,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 5,
                    "shop_id" => 4,
                    "merk_id" => 8,
                    "Tahun_Produksi_id" => 24,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 42,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 5,
                    "shop_id" => 4,
                    "merk_id" => 8,
                    "Tahun_Produksi_id" => 24,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 42,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 5,
                    "shop_id" => 4,
                    "merk_id" => 9,
                    "Tahun_Produksi_id" => 27,
                    "Kondisi_Fisik_id" => 34,
                    "Kondisi_Mesin_id" => 34,
                    "Muatan_Penumpang_id" => 37,
                    "Kapasitas_Mesin_id" => 45,
                    "Jenis_BBM_id" => 51,
                    "Harga_Sewa_id" => 58]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 5,
                    "shop_id" => 4,
                    "merk_id" => 9,
                    "Tahun_Produksi_id" => 26,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 37,
                    "Kapasitas_Mesin_id" => 45,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 57]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 5,
                    "shop_id" => 4,
                    "merk_id" => 9,
                    "Tahun_Produksi_id" => 25,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 37,
                    "Kapasitas_Mesin_id" => 45,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 57]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 5,
                    "shop_id" => 4,
                    "merk_id" => 2,
                    "Tahun_Produksi_id" => 26,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 41,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 53]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 5,
                    "shop_id" => 4,
                    "merk_id" => 2,
                    "Tahun_Produksi_id" => 23,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 41,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 5,
                    "shop_id" => 4,
                    "merk_id" => 2,
                    "Tahun_Produksi_id" => 23,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 41,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 5,
                    "shop_id" => 4,
                    "merk_id" => 2,
                    "Tahun_Produksi_id" => 23,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 41,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 5,
                    "shop_id" => 4,
                    "merk_id" => 2,
                    "Tahun_Produksi_id" => 20,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 41,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 5,
                    "shop_id" => 4,
                    "merk_id" => 11,
                    "Tahun_Produksi_id" => 21,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 38,
                    "Kapasitas_Mesin_id" => 46,
                    "Jenis_BBM_id" => 51,
                    "Harga_Sewa_id" => 65]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 5,
                    "shop_id" => 4,
                    "merk_id" => 11,
                    "Tahun_Produksi_id" => 21,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 38,
                    "Kapasitas_Mesin_id" => 46,
                    "Jenis_BBM_id" => 51,
                    "Harga_Sewa_id" => 65]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 6,
                    "shop_id" => 5,
                    "merk_id" => 8,
                    "Tahun_Produksi_id" => 21,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 42,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 53]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 6,
                    "shop_id" => 5,
                    "merk_id" => 8,
                    "Tahun_Produksi_id" => 19,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 42,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 6,
                    "shop_id" => 5,
                    "merk_id" => 7,
                    "Tahun_Produksi_id" => 28,
                    "Kondisi_Fisik_id" => 34,
                    "Kondisi_Mesin_id" => 34,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 42,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 53]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 6,
                    "shop_id" => 5,
                    "merk_id" => 7,
                    "Tahun_Produksi_id" => 23,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 41,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 6,
                    "shop_id" => 5,
                    "merk_id" => 7,
                    "Tahun_Produksi_id" => 21,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 41,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 6,
                    "shop_id" => 5,
                    "merk_id" => 9,
                    "Tahun_Produksi_id" => 26,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 37,
                    "Kapasitas_Mesin_id" => 45,
                    "Jenis_BBM_id" => 51,
                    "Harga_Sewa_id" => 58]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 6,
                    "shop_id" => 5,
                    "merk_id" => 9,
                    "Tahun_Produksi_id" => 21,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 37,
                    "Kapasitas_Mesin_id" => 45,
                    "Jenis_BBM_id" => 51,
                    "Harga_Sewa_id" => 58]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 6,
                    "shop_id" => 5,
                    "merk_id" => 9,
                    "Tahun_Produksi_id" => 25,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 37,
                    "Kapasitas_Mesin_id" => 45,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 57]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 6,
                    "shop_id" => 5,
                    "merk_id" => 10,
                    "Tahun_Produksi_id" => 24,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 42,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 54]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 6,
                    "shop_id" => 5,
                    "merk_id" => 10,
                    "Tahun_Produksi_id" => 24,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 42,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 54]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 6,
                    "shop_id" => 5,
                    "merk_id" => 10,
                    "Tahun_Produksi_id" => 21,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 42,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 53]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 6,
                    "shop_id" => 5,
                    "merk_id" => 12,
                    "Tahun_Produksi_id" => 24,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 41,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 6,
                    "shop_id" => 5,
                    "merk_id" => 12,
                    "Tahun_Produksi_id" => 24,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 41,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 52]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 6,
                    "shop_id" => 5,
                    "merk_id" => 13,
                    "Tahun_Produksi_id" => 25,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 42,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 53]);
                Car::create([
                    'stok' => 'standby',
                    "user_id" => 6,
                    "shop_id" => 5,
                    "merk_id" => 13,
                    "Tahun_Produksi_id" => 25,
                    "Kondisi_Fisik_id" => 33,
                    "Kondisi_Mesin_id" => 33,
                    "Muatan_Penumpang_id" => 36,
                    "Kapasitas_Mesin_id" => 42,
                    "Jenis_BBM_id" => 50,
                    "Harga_Sewa_id" => 53]);
            //
            // Adam jaya//
            // dummy
                // Pasee//
                // Adam Jaya//
                // KMJ//
                // Oto Car//
                // Benseupakat Rentcar//
                // AFG//
                // Pangeran rental//
                // Jeumpa Puteh//
                // Galery Rental//
                // BOY CAR//
            // Other 45 car//
        //
    }
}
