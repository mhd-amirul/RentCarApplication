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
                    'slug' => 'd9ce3bb2efc164ee1867e69b225f736f9b4e78fb',
                    'user_id' => '2',
                    'shop_id' => '1',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '27',
                    'Kondisi_Fisik_id' => '31',
                    'Kondisi_Mesin_id' => '34',
                    'Muatan_Penumpang_id' => '37',
                    'Kapasitas_Mesin_id' => '45',
                    'Jenis_BBM_id' => '51',
                    'Harga_Sewa_id' => '58',
                    'stok' => 'standby',
                    'no_polisi' => 'BL8671sg',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Kijang Innova, 2021, sangat baik, sangat baik, 8, 2400cc, Solar, 600000, ',]);
                Car::create([
                    'slug' => '2d4747011124d1faf5133ac8c82d2005df858226',
                    'user_id' => '2',
                    'shop_id' => '1',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '27',
                    'Kondisi_Fisik_id' => '31',
                    'Kondisi_Mesin_id' => '34',
                    'Muatan_Penumpang_id' => '37',
                    'Kapasitas_Mesin_id' => '45',
                    'Jenis_BBM_id' => '51',
                    'Harga_Sewa_id' => '58',
                    'stok' => 'standby',
                    'no_polisi' => 'BL4805ab',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Kijang Innova, 2021, sangat baik, sangat baik, 8, 2400cc, Solar, 600000, ',]);
                Car::create([
                    'slug' => 'e5beb98359b5080574d9e6b45c3504eaf0a044fb',
                    'user_id' => '2',
                    'shop_id' => '1',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '26',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '37',
                    'Kapasitas_Mesin_id' => '45',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '57',
                    'stok' => 'standby',
                    'no_polisi' => 'BL9252as',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Kijang Innova, 2020, Baik, Baik, 8, 2400cc, Pertalite, 550000, ',]);
                Car::create([
                    'slug' => '50836b3f0298f864760f675cbdb0151bc071686a',
                    'user_id' => '2',
                    'shop_id' => '1',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '26',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '37',
                    'Kapasitas_Mesin_id' => '45',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '57',
                    'stok' => 'standby',
                    'no_polisi' => 'BL5860aa',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Kijang Innova, 2020, Baik, Baik, 8, 2400cc, Pertalite, 550000, ',]);
                Car::create([
                    'slug' => 'b3fab762ec66d227afd4ea77f054c456d7789b12',
                    'user_id' => '2',
                    'shop_id' => '1',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '25',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '37',
                    'Kapasitas_Mesin_id' => '45',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '57',
                    'stok' => 'standby',
                    'no_polisi' => 'BL2194za',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Kijang Innova, 2019, Baik, Baik, 8, 2400cc, Pertalite, 550000, ',]);
                Car::create([
                    'slug' => 'f54e46efbfa0fd401df060693e514e2fde5eaa0f',
                    'user_id' => '2',
                    'shop_id' => '1',
                    'merk_id' => '8',
                    'Tahun_Produksi_id' => '27',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '42',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '53',
                    'stok' => 'standby',
                    'no_polisi' => 'BL5789gd',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Avanza Veloz, 2021, Baik, Baik, 7, 1500cc, Pertalite, 350000, ',]);
                Car::create([
                    'slug' => 'd79e4a8beb94492327c14721e3c355941b926c42',
                    'user_id' => '2',
                    'shop_id' => '1',
                    'merk_id' => '8',
                    'Tahun_Produksi_id' => '24',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '42',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL9964sl',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Avanza Veloz, 2018, Baik, Baik, 7, 1500cc, Pertalite, 300000, ',]);
                Car::create([
                    'slug' => '14abd751ad25cba4e547fd360e9f1ccff44eae8d',
                    'user_id' => '2',
                    'shop_id' => '1',
                    'merk_id' => '8',
                    'Tahun_Produksi_id' => '21',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '42',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL3203lz',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Avanza Veloz, 2015, Baik, Baik, 7, 1500cc, Pertalite, 300000, ',]);
                Car::create([
                    'slug' => 'e687e0f5753d88bce66fb070e9bc941bb8556c20',
                    'user_id' => '2',
                    'shop_id' => '1',
                    'merk_id' => '8',
                    'Tahun_Produksi_id' => '19',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '42',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL5446db',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Avanza Veloz, 2013, Baik, Baik, 7, 1500cc, Pertalite, 300000, ',]);
                Car::create([
                    'slug' => '9e5caf27ff81e5327c694278775205869dab7330',
                    'user_id' => '2',
                    'shop_id' => '1',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '28',
                    'Kondisi_Fisik_id' => '31',
                    'Kondisi_Mesin_id' => '34',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '42',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '53',
                    'stok' => 'standby',
                    'no_polisi' => 'BL7585sg',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Avanza Type G, 2022, sangat baik, sangat baik, 7, 1500cc, Pertalite, 350000, ',]);
                Car::create([
                    'slug' => 'cc9ab43ff03c6edcc0c245d048540cb488a6b101',
                    'user_id' => '2',
                    'shop_id' => '1',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '23',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '41',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL8177dz',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Avanza Type G, 2017, Baik, Baik, 7, 1300cc, Pertalite, 300000, ',]);
                Car::create([
                    'slug' => '5bf6e1d20b5a0d6fb9be07ea097731a6fbf1f2ff',
                    'user_id' => '2',
                    'shop_id' => '1',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '21',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '41',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL3655gl',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Avanza Type G, 2015, Baik, Baik, 7, 1300cc, Pertalite, 300000, ',]);
                Car::create([
                    'slug' => 'b51400885932fed6d04b6753f56001753a253d23',
                    'user_id' => '2',
                    'shop_id' => '1',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '16',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '41',
                    'Jenis_BBM_id' => '49',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL1383ld',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Avanza Type G, 2010, Baik, Baik, 7, 1300cc, Pertamax, 300000, ',]);
                Car::create([
                    'slug' => '7f45825e30cf8176f9d95488d28f088ece041ff6',
                    'user_id' => '2',
                    'shop_id' => '1',
                    'merk_id' => '6',
                    'Tahun_Produksi_id' => '23',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '41',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL3499ll',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Avanza Type E, 2017, Baik, Baik, 7, 1300cc, Pertalite, 300000, ',]);
                Car::create([
                    'slug' => '62dce6b0fda6a3b526b077901c33d0d8585694fb',
                    'user_id' => '2',
                    'shop_id' => '1',
                    'merk_id' => '6',
                    'Tahun_Produksi_id' => '23',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '41',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL3602bl',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Avanza Type E, 2017, Baik, Baik, 7, 1300cc, Pertalite, 300000, ',]);
                Car::create([
                    'slug' => 'e018e4a7d4352b8509401448e9b9424fd842b6e6',
                    'user_id' => '2',
                    'shop_id' => '1',
                    'merk_id' => '3',
                    'Tahun_Produksi_id' => '27',
                    'Kondisi_Fisik_id' => '31',
                    'Kondisi_Mesin_id' => '34',
                    'Muatan_Penumpang_id' => '35',
                    'Kapasitas_Mesin_id' => '42',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '53',
                    'stok' => 'standby',
                    'no_polisi' => 'BL3401bz',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Honda Jazz RS, 2021, sangat baik, sangat baik, 5, 1500cc, Pertalite, 350000, ',]);
                Car::create([
                    'slug' => '0877521f1d687b6fe69d4eba6068604ea737dfb5',
                    'user_id' => '2',
                    'shop_id' => '1',
                    'merk_id' => '3',
                    'Tahun_Produksi_id' => '27',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '35',
                    'Kapasitas_Mesin_id' => '42',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '53',
                    'stok' => 'standby',
                    'no_polisi' => 'BL2491ld',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Honda Jazz RS, 2021, Baik, Baik, 5, 1500cc, Pertalite, 350000, ',]);
                Car::create([
                    'slug' => 'c2114b3e2182528b79f8e3e9f2ba905a43b04004',
                    'user_id' => '2',
                    'shop_id' => '1',
                    'merk_id' => '3',
                    'Tahun_Produksi_id' => '27',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '35',
                    'Kapasitas_Mesin_id' => '42',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '53',
                    'stok' => 'standby',
                    'no_polisi' => 'BL6418ld',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Honda Jazz RS, 2021, Baik, Baik, 5, 1500cc, Pertalite, 350000, ',]);
                Car::create([
                    'slug' => 'ff6496bff3aa63d16efaeb27c3ad7968c4f39a10',
                    'user_id' => '2',
                    'shop_id' => '1',
                    'merk_id' => '3',
                    'Tahun_Produksi_id' => '24',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '35',
                    'Kapasitas_Mesin_id' => '42',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL1645sg',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Honda Jazz RS, 2018, Baik, Baik, 5, 1500cc, Pertalite, 300000, ',]);
                Car::create([
                    'slug' => 'a843374d6302dd31eb55c2d4766123550fbba9ed',
                    'user_id' => '2',
                    'shop_id' => '1',
                    'merk_id' => '3',
                    'Tahun_Produksi_id' => '24',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '35',
                    'Kapasitas_Mesin_id' => '42',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL7837ld',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Honda Jazz RS, 2018, Baik, Baik, 5, 1500cc, Pertalite, 300000, ',]);
            //
            // Adam Jaya
                Car::create([
                    'slug' => '6f20892f24a34a06ab85fac271cac98875cb0482',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '8',
                    'Tahun_Produksi_id' => '27',
                    'Kondisi_Fisik_id' => '31',
                    'Kondisi_Mesin_id' => '34',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '42',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '53',
                    'stok' => 'standby',
                    'no_polisi' => 'BL8037ld',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Avanza Veloz, 2021, sangat baik, sangat baik, 7, 1500cc, Pertalite, 350000, ',]);
                Car::create([
                    'slug' => 'f878b588035f59845e7029dad9c823d683613e56',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '8',
                    'Tahun_Produksi_id' => '24',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '42',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL5547gb',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Avanza Veloz, 2018, Baik, Baik, 7, 1500cc, Pertalite, 300000, ',]);
                Car::create([
                    'slug' => '0b3d69ebdae935689225cc8dc3477dff79e53d60',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '8',
                    'Tahun_Produksi_id' => '24',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '42',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL4833dd',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Avanza Veloz, 2018, Baik, Baik, 7, 1500cc, Pertalite, 300000, ',]);
                Car::create([
                    'slug' => '9904fa39573f8fc09f0cf726da529f805d859399',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '8',
                    'Tahun_Produksi_id' => '24',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '42',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL1023zg',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Avanza Veloz, 2018, Baik, Baik, 7, 1500cc, Pertalite, 300000, ',]);
                Car::create([
                    'slug' => '9ffa44d37bac1e85f1137624841aec03cc561160',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '28',
                    'Kondisi_Fisik_id' => '31',
                    'Kondisi_Mesin_id' => '34',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '42',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '53',
                    'stok' => 'standby',
                    'no_polisi' => 'BL9127zl',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Avanza Type G, 2022, sangat baik, sangat baik, 7, 1500cc, Pertalite, 350000, ',]);
                Car::create([
                    'slug' => '6e1d660693f9bedb0046483e858b3892251ebac6',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '23',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '41',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL7889ga',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Avanza Type G, 2017, Baik, Baik, 7, 1300cc, Pertalite, 300000, ',]);
                Car::create([
                    'slug' => '07e785ad6eef0988de6bf96c79d565a7e08e4013',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '23',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '41',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL9394gz',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Avanza Type G, 2017, Baik, Baik, 7, 1300cc, Pertalite, 300000, ',]);
                Car::create([
                    'slug' => '2fb54fbcdc64ea5330970c0029c593f8850e9dc0',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '23',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '41',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL6638da',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Avanza Type G, 2017, Baik, Baik, 7, 1300cc, Pertalite, 300000, ',]);
                Car::create([
                    'slug' => 'f099b9c80f2ff2dde47e445d17a7f5fd81507fba',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '21',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '41',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL3079da',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Avanza Type G, 2015, Baik, Baik, 7, 1300cc, Pertalite, 300000, ',]);
                Car::create([
                    'slug' => '0764f57b08c2f816c9962ff8a5668affa1bad8df',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '16',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '41',
                    'Jenis_BBM_id' => '49',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL6664bz',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Avanza Type G, 2010, Baik, Baik, 7, 1300cc, Pertamax, 300000, ',]);
                Car::create([
                    'slug' => 'dc917912471cd32333a9960b4376c6cbf6c7507d',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '16',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '41',
                    'Jenis_BBM_id' => '49',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL2697zg',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Avanza Type G, 2010, Baik, Baik, 7, 1300cc, Pertamax, 300000, ',]);
                Car::create([
                    'slug' => '30c4e1884db4e9e19e583164e6cc6ed325c21b04',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '27',
                    'Kondisi_Fisik_id' => '31',
                    'Kondisi_Mesin_id' => '34',
                    'Muatan_Penumpang_id' => '37',
                    'Kapasitas_Mesin_id' => '45',
                    'Jenis_BBM_id' => '51',
                    'Harga_Sewa_id' => '58',
                    'stok' => 'standby',
                    'no_polisi' => 'BL6043gd',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Kijang Innova, 2021, sangat baik, sangat baik, 8, 2400cc, Solar, 600000, ',]);
                Car::create([
                    'slug' => '96e82d0ee1a2ac3484b63d1f47564ee7d7752c42',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '27',
                    'Kondisi_Fisik_id' => '31',
                    'Kondisi_Mesin_id' => '34',
                    'Muatan_Penumpang_id' => '37',
                    'Kapasitas_Mesin_id' => '45',
                    'Jenis_BBM_id' => '51',
                    'Harga_Sewa_id' => '58',
                    'stok' => 'standby',
                    'no_polisi' => 'BL5574gz',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Kijang Innova, 2021, sangat baik, sangat baik, 8, 2400cc, Solar, 600000, ',]);
                Car::create([
                    'slug' => 'b8b60da9a51aa2c3e2ec867fadf17ede424e0450',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '26',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '37',
                    'Kapasitas_Mesin_id' => '45',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '57',
                    'stok' => 'standby',
                    'no_polisi' => 'BL5727dg',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Kijang Innova, 2020, Baik, Baik, 8, 2400cc, Pertalite, 550000, ',]);
                Car::create([
                    'slug' => 'e9d7ae703416b23465770c5bf9d460dde3fa883a',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '25',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '37',
                    'Kapasitas_Mesin_id' => '45',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '57',
                    'stok' => 'standby',
                    'no_polisi' => 'BL6018bs',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Kijang Innova, 2019, Baik, Baik, 8, 2400cc, Pertalite, 550000, ',]);
                Car::create([
                    'slug' => '48090f507004e022a040babc262b61472dd8826e',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '4',
                    'Tahun_Produksi_id' => '24',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '45',
                    'Jenis_BBM_id' => '51',
                    'Harga_Sewa_id' => '63',
                    'stok' => 'standby',
                    'no_polisi' => 'BL7756bs',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Mitsubishi Pajero Sport, 2018, Baik, Baik, 7, 2400cc, Solar, 1300000, ',]);
                Car::create([
                    'slug' => '6dc59ac309ba0e10939bf96a6f04c146e2552c86',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '4',
                    'Tahun_Produksi_id' => '24',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '45',
                    'Jenis_BBM_id' => '51',
                    'Harga_Sewa_id' => '63',
                    'stok' => 'standby',
                    'no_polisi' => 'BL6588zz',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Mitsubishi Pajero Sport, 2018, Baik, Baik, 7, 2400cc, Solar, 1300000, ',]);
                Car::create([
                    'slug' => 'a804840c9b48138b31bea0bdc15a9175d9e49040',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '10',
                    'Tahun_Produksi_id' => '24',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '42',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '54',
                    'stok' => 'standby',
                    'no_polisi' => 'BL4027ll',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Rush, 2018, Baik, Baik, 7, 1500cc, Pertalite, 400000, ',]);
                Car::create([
                    'slug' => '8eeddaa9700fd8fca419ae401c3107ac5737f437',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '10',
                    'Tahun_Produksi_id' => '24',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '42',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '54',
                    'stok' => 'standby',
                    'no_polisi' => 'BL1860bl',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Rush, 2018, Baik, Baik, 7, 1500cc, Pertalite, 400000, ',]);
                Car::create([
                    'slug' => 'f1b368882e4ac0b358bd34ed3d382fa42a84c56e',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '10',
                    'Tahun_Produksi_id' => '21',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '35',
                    'Kapasitas_Mesin_id' => '42',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '53',
                    'stok' => 'standby',
                    'no_polisi' => 'BL4644az',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Rush, 2015, Baik, Baik, 5, 1500cc, Pertalite, 350000, ',]);
                Car::create([
                    'slug' => '149400b650d04c8616355affc18873f94bd4394e',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '10',
                    'Tahun_Produksi_id' => '21',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '35',
                    'Kapasitas_Mesin_id' => '42',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '53',
                    'stok' => 'standby',
                    'no_polisi' => 'BL1670gd',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Rush, 2015, Baik, Baik, 5, 1500cc, Pertalite, 350000, ',]);
                Car::create([
                    'slug' => 'c7891730c4634e02716a6d7de42e445fa9106e86',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '5',
                    'Tahun_Produksi_id' => '27',
                    'Kondisi_Fisik_id' => '31',
                    'Kondisi_Mesin_id' => '34',
                    'Muatan_Penumpang_id' => '35',
                    'Kapasitas_Mesin_id' => '45',
                    'Jenis_BBM_id' => '51',
                    'Harga_Sewa_id' => '62',
                    'stok' => 'standby',
                    'no_polisi' => 'BL7012bl',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Mitsubishi Triton, 2021, sangat baik, sangat baik, 5, 2400cc, Solar, 1200000, ',]);
                Car::create([
                    'slug' => 'c59aff3511f97b773f6e6e4c1b4b7c33e9574db1',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '5',
                    'Tahun_Produksi_id' => '27',
                    'Kondisi_Fisik_id' => '31',
                    'Kondisi_Mesin_id' => '34',
                    'Muatan_Penumpang_id' => '35',
                    'Kapasitas_Mesin_id' => '45',
                    'Jenis_BBM_id' => '51',
                    'Harga_Sewa_id' => '62',
                    'stok' => 'standby',
                    'no_polisi' => 'BL4303ss',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Mitsubishi Triton, 2021, sangat baik, sangat baik, 5, 2400cc, Solar, 1200000, ',]);
                Car::create([
                    'slug' => '2bac6b4a674d9197f8c3a9f6bab18bae7b676637',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '1',
                    'Tahun_Produksi_id' => '28',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '42',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '53',
                    'stok' => 'standby',
                    'no_polisi' => 'BL9217ab',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Daihatsu Terios, 2022, Baik, Baik, 7, 1500cc, Pertalite, 350000, ',]);
                Car::create([
                    'slug' => '11e95152619ad82c6fcc03d24f5ee1639380af2d',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '1',
                    'Tahun_Produksi_id' => '27',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '42',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '53',
                    'stok' => 'standby',
                    'no_polisi' => 'BL6179gz',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Daihatsu Terios, 2021, Baik, Baik, 7, 1500cc, Pertalite, 350000, ',]);
                Car::create([
                    'slug' => '3a63af1713d0ba29585274be1c48533c29f4cf4b',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '1',
                    'Tahun_Produksi_id' => '27',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '42',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '53',
                    'stok' => 'standby',
                    'no_polisi' => 'BL8243sg',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Daihatsu Terios, 2021, Baik, Baik, 7, 1500cc, Pertalite, 350000, ',]);
                Car::create([
                    'slug' => 'c2c9f1c6392400ec2bf457f95f7db567a9fd049c',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '1',
                    'Tahun_Produksi_id' => '24',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '42',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL3264sd',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Daihatsu Terios, 2018, Baik, Baik, 7, 1500cc, Pertalite, 300000, ',]);
                Car::create([
                    'slug' => 'debaacf465a38bf8daf4f87b3cf3f63ccb777462',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '1',
                    'Tahun_Produksi_id' => '24',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '42',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL8950ag',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Daihatsu Terios, 2018, Baik, Baik, 7, 1500cc, Pertalite, 300000, ',]);
                Car::create([
                    'slug' => '85cd5a9da821df1d86e250d9cab9e846402dec98',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '2',
                    'Tahun_Produksi_id' => '26',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '41',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '53',
                    'stok' => 'standby',
                    'no_polisi' => 'BL5134dz',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Daihatsu Xenia, 2020, Baik, Baik, 7, 1300cc, Pertalite, 350000, ',]);
                Car::create([
                    'slug' => 'ec06258b1cd59a8896f9c464ed91250810e75958',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '2',
                    'Tahun_Produksi_id' => '23',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '41',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL6157ds',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Daihatsu Xenia, 2017, Baik, Baik, 7, 1300cc, Pertalite, 300000, ',]);
                Car::create([
                    'slug' => '9e7d400691118e949d7c887935964870a4fa6adf',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '2',
                    'Tahun_Produksi_id' => '23',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '41',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL5626za',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Daihatsu Xenia, 2017, Baik, Baik, 7, 1300cc, Pertalite, 300000, ',]);
                Car::create([
                    'slug' => 'f5477e909a6c3246420e91cf32a92bb2893ff702',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '2',
                    'Tahun_Produksi_id' => '20',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '41',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL5871gg',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Daihatsu Xenia, 2014, Baik, Baik, 7, 1300cc, Pertalite, 300000, ',]);
                Car::create([
                    'slug' => 'eee09ee21b6861b3ae01d0ddc2e8e1080efc4ae4',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '2',
                    'Tahun_Produksi_id' => '18',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '41',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL9363lb',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Daihatsu Xenia, 2012, Baik, Baik, 7, 1300cc, Pertalite, 300000, ',]);
                Car::create([
                    'slug' => 'a68703e5377157e5ea54dc7fe890644050edc1aa',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '2',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '41',
                    'Jenis_BBM_id' => '49',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL8209sl',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Daihatsu Xenia, 2011, Baik, Baik, 7, 1300cc, Pertamax, 300000, ',]);
                Car::create([
                    'slug' => '700766304d83ff4df3c6d1a26b45f5eebcf93214',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '2',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '41',
                    'Jenis_BBM_id' => '49',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL7078bg',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Daihatsu Xenia, 2011, Baik, Baik, 7, 1300cc, Pertamax, 300000, ',]);
            //
            // KMJ
                Car::create([
                    'slug' => '0a3938ce749324eb69db37f273371d432c89b514',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '26',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '37',
                    'Kapasitas_Mesin_id' => '45',
                    'Jenis_BBM_id' => '51',
                    'Harga_Sewa_id' => '58',
                    'stok' => 'standby',
                    'no_polisi' => 'BL3391lz',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Kijang Innova, 2020, Baik, Baik, 8, 2400cc, Solar, 600000, ',]);
                Car::create([
                    'slug' => '0c1874bdfd9d3ad6c7d04db2ffb2c6a0f9da24d1',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '21',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '37',
                    'Kapasitas_Mesin_id' => '45',
                    'Jenis_BBM_id' => '51',
                    'Harga_Sewa_id' => '58',
                    'stok' => 'standby',
                    'no_polisi' => 'BL4380as',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Kijang Innova, 2015, Baik, Baik, 8, 2400cc, Solar, 600000, ',]);
                Car::create([
                    'slug' => '7fa1607cbebd05798a24402765ee5508ea8d0de2',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '26',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '37',
                    'Kapasitas_Mesin_id' => '45',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '57',
                    'stok' => 'standby',
                    'no_polisi' => 'BL1474ls',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Kijang Innova, 2020, Baik, Baik, 8, 2400cc, Pertalite, 550000, ',]);
                Car::create([
                    'slug' => '918a09dd9568071d3a138c73ef7736908f082873',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '25',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '37',
                    'Kapasitas_Mesin_id' => '45',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '57',
                    'stok' => 'standby',
                    'no_polisi' => 'BL8029sa',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Kijang Innova, 2019, Baik, Baik, 8, 2400cc, Pertalite, 550000, ',]);
                Car::create([
                    'slug' => '12fe0e8dc9e40a0f000f56326ab39967c4a06343',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '8',
                    'Tahun_Produksi_id' => '24',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '42',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL7793lb',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Avanza Veloz, 2018, Baik, Baik, 7, 1500cc, Pertalite, 300000, ',]);
                Car::create([
                    'slug' => 'dea28d90b4e535bc6c2d4b55fad9bcedd0c2078c',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '8',
                    'Tahun_Produksi_id' => '21',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '42',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL6076as',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Avanza Veloz, 2015, Baik, Baik, 7, 1500cc, Pertalite, 300000, ',]);
                Car::create([
                    'slug' => '3265b101ab7d2bca67500b1ea66571438de0cfd7',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '8',
                    'Tahun_Produksi_id' => '19',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '42',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL7393ld',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Avanza Veloz, 2013, Baik, Baik, 7, 1500cc, Pertalite, 300000, ',]);
                Car::create([
                    'slug' => 'c5195983f3a0eebe8866a502d8b236e60b914f94',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '24',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '41',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL8337lg',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Avanza Type G, 2018, Baik, Baik, 7, 1300cc, Pertalite, 300000, ',]);
                Car::create([
                    'slug' => '6a93a9efd88792e2f51bf8df70659caed084af80',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '4',
                    'Tahun_Produksi_id' => '24',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '45',
                    'Jenis_BBM_id' => '51',
                    'Harga_Sewa_id' => '63',
                    'stok' => 'standby',
                    'no_polisi' => 'BL8904ll',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Mitsubishi Pajero Sport, 2018, Baik, Baik, 7, 2400cc, Solar, 1300000, ',]);
                Car::create([
                    'slug' => 'f54c8da31306d23f5755fa4d28a123edded0cdfa',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '4',
                    'Tahun_Produksi_id' => '24',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '45',
                    'Jenis_BBM_id' => '51',
                    'Harga_Sewa_id' => '63',
                    'stok' => 'standby',
                    'no_polisi' => 'BL5942gb',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Mitsubishi Pajero Sport, 2018, Baik, Baik, 7, 2400cc, Solar, 1300000, ',]);
                Car::create([
                    'slug' => '3be7909481348bf8982d242200393c60a3a820bd',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '11',
                    'Tahun_Produksi_id' => '21',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '38',
                    'Kapasitas_Mesin_id' => '46',
                    'Jenis_BBM_id' => '51',
                    'Harga_Sewa_id' => '65',
                    'stok' => 'standby',
                    'no_polisi' => 'BL2680sd',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Hiace, 2015, Baik, Baik, 16, 2500cc, Solar, 1500000, ',]);
                Car::create([
                    'slug' => 'f0199448f8d01d37387ba546aa28b830e4ac721b',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '11',
                    'Tahun_Produksi_id' => '21',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '38',
                    'Kapasitas_Mesin_id' => '46',
                    'Jenis_BBM_id' => '51',
                    'Harga_Sewa_id' => '65',
                    'stok' => 'standby',
                    'no_polisi' => 'BL4093ll',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Hiace, 2015, Baik, Baik, 16, 2500cc, Solar, 1500000, ',]);
                Car::create([
                    'slug' => 'd5e07b7d6af08480ce8f843e3f973f57c865639b',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '2',
                    'Tahun_Produksi_id' => '23',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '41',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL8461lg',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Daihatsu Xenia, 2017, Baik, Baik, 7, 1300cc, Pertalite, 300000, ',]);
                Car::create([
                    'slug' => '1ce8f99d828d61da289284b28a0c88ef6b9b3098',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '2',
                    'Tahun_Produksi_id' => '23',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '41',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL5886zg',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Daihatsu Xenia, 2017, Baik, Baik, 7, 1300cc, Pertalite, 300000, ',]);
                Car::create([
                    'slug' => '66a08f7c08b08135f0f02926b68f287865a1665d',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '2',
                    'Tahun_Produksi_id' => '20',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '41',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL9070ld',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Daihatsu Xenia, 2014, Baik, Baik, 7, 1300cc, Pertalite, 300000, ',]);
            //
            // Oto Car
                Car::create([
                    'slug' => 'be6ce6fe4169fdce6482c3ea56a20d2f6db4d1b2',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '23',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '41',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL4385aa',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Avanza Type G, 2017, Baik, Baik, 7, 1300cc, Pertalite, 300000, ',]);
                Car::create([
                    'slug' => '4c6e4169738e5e393b1c12c604613d9a19fed484',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '21',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '41',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL1477zl',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Avanza Type G, 2015, Baik, Baik, 7, 1300cc, Pertalite, 300000, ',]);
                Car::create([
                    'slug' => 'ff760c1b69c2e06805f504e807929b7950e8bcf8',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '16',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '41',
                    'Jenis_BBM_id' => '49',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL8681ls',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Avanza Type G, 2010, Baik, Baik, 7, 1300cc, Pertamax, 300000, ',]);
                Car::create([
                    'slug' => '8df5a1db0848e98260d9a057029fe8a99501ce78',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '8',
                    'Tahun_Produksi_id' => '24',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '42',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL6637dl',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Avanza Veloz, 2018, Baik, Baik, 7, 1500cc, Pertalite, 300000, ',]);
                Car::create([
                    'slug' => 'bb241883db50140244e2e8a52d62e8c30f51627c',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '8',
                    'Tahun_Produksi_id' => '24',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '42',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL5584zd',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Avanza Veloz, 2018, Baik, Baik, 7, 1500cc, Pertalite, 300000, ',]);
                Car::create([
                    'slug' => '83c5cad1fc736b25477048e87ebfd42a7aab6fb2',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '27',
                    'Kondisi_Fisik_id' => '31',
                    'Kondisi_Mesin_id' => '34',
                    'Muatan_Penumpang_id' => '37',
                    'Kapasitas_Mesin_id' => '45',
                    'Jenis_BBM_id' => '51',
                    'Harga_Sewa_id' => '58',
                    'stok' => 'standby',
                    'no_polisi' => 'BL9812sb',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Kijang Innova, 2021, sangat baik, sangat baik, 8, 2400cc, Solar, 600000, ',]);
                Car::create([
                    'slug' => 'f57570b260e4fa19ce298bec9613b17473ab6221',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '26',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '37',
                    'Kapasitas_Mesin_id' => '45',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '57',
                    'stok' => 'standby',
                    'no_polisi' => 'BL4726ls',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Kijang Innova, 2020, Baik, Baik, 8, 2400cc, Pertalite, 550000, ',]);
                Car::create([
                    'slug' => 'f4c235b1d624a2bfaca2acf7bde21cdad48f02a3',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '25',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '37',
                    'Kapasitas_Mesin_id' => '45',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '57',
                    'stok' => 'standby',
                    'no_polisi' => 'BL3410ss',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Kijang Innova, 2019, Baik, Baik, 8, 2400cc, Pertalite, 550000, ',]);
                Car::create([
                    'slug' => '50a30454cd72b2f0529c84f4e1c81f3373890fc4',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '2',
                    'Tahun_Produksi_id' => '26',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '41',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '53',
                    'stok' => 'standby',
                    'no_polisi' => 'BL1134ab',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Daihatsu Xenia, 2020, Baik, Baik, 7, 1300cc, Pertalite, 350000, ',]);
                Car::create([
                    'slug' => '0774f753508406d6e80ae9d33d85b7ba49271a88',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '2',
                    'Tahun_Produksi_id' => '23',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '41',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL8716ga',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Daihatsu Xenia, 2017, Baik, Baik, 7, 1300cc, Pertalite, 300000, ',]);
                Car::create([
                    'slug' => 'f6e0e2ddc632035a6899c29866bfbf520a1088d9',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '2',
                    'Tahun_Produksi_id' => '23',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '41',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL1690zz',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Daihatsu Xenia, 2017, Baik, Baik, 7, 1300cc, Pertalite, 300000, ',]);
                Car::create([
                    'slug' => 'd1d20b3588bf4c1fc16e17224d13f039e4945f49',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '2',
                    'Tahun_Produksi_id' => '23',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '41',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL7339ls',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Daihatsu Xenia, 2017, Baik, Baik, 7, 1300cc, Pertalite, 300000, ',]);
                Car::create([
                    'slug' => '9264970332c2deb1e1a77497e6e9518a78032c65',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '2',
                    'Tahun_Produksi_id' => '20',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '41',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL8440ll',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Daihatsu Xenia, 2014, Baik, Baik, 7, 1300cc, Pertalite, 300000, ',]);
                Car::create([
                    'slug' => '3da08b2d47b77fb3766b8d5be820fbcaf10f734c',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '11',
                    'Tahun_Produksi_id' => '21',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '38',
                    'Kapasitas_Mesin_id' => '46',
                    'Jenis_BBM_id' => '51',
                    'Harga_Sewa_id' => '65',
                    'stok' => 'standby',
                    'no_polisi' => 'BL7880ga',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Hiace, 2015, Baik, Baik, 16, 2500cc, Solar, 1500000, ',]);
                Car::create([
                    'slug' => '3231e5a8e457410f883fd404364477d5db2b21fe',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '11',
                    'Tahun_Produksi_id' => '21',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '38',
                    'Kapasitas_Mesin_id' => '46',
                    'Jenis_BBM_id' => '51',
                    'Harga_Sewa_id' => '65',
                    'stok' => 'standby',
                    'no_polisi' => 'BL6689zd',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Hiace, 2015, Baik, Baik, 16, 2500cc, Solar, 1500000, ',]);
            //
            // Ben Seupakat
                Car::create([
                    'slug' => '7cf10a0fe1a450bba2b23ac1bf6541e707414ebb',
                    'user_id' => '6',
                    'shop_id' => '5',
                    'merk_id' => '8',
                    'Tahun_Produksi_id' => '21',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '42',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '53',
                    'stok' => 'standby',
                    'no_polisi' => 'BL8252zd',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Avanza Veloz, 2015, Baik, Baik, 7, 1500cc, Pertalite, 350000, ',]);
                Car::create([
                    'slug' => '1cb8a3cd79e4632fbe37f1e8f0de57b47fbcee43',
                    'user_id' => '6',
                    'shop_id' => '5',
                    'merk_id' => '8',
                    'Tahun_Produksi_id' => '19',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '42',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL8239ll',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Avanza Veloz, 2013, Baik, Baik, 7, 1500cc, Pertalite, 300000, ',]);
                Car::create([
                    'slug' => '45a9b2b19158720e61c0d0118a9a5d00a04177ce',
                    'user_id' => '6',
                    'shop_id' => '5',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '28',
                    'Kondisi_Fisik_id' => '31',
                    'Kondisi_Mesin_id' => '34',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '42',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '53',
                    'stok' => 'standby',
                    'no_polisi' => 'BL1142zb',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Avanza Type G, 2022, sangat baik, sangat baik, 7, 1500cc, Pertalite, 350000, ',]);
                Car::create([
                    'slug' => '2afd3f1709a1b60cbe4c4c4be0fa843c3084b73f',
                    'user_id' => '6',
                    'shop_id' => '5',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '23',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '41',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL1716sg',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Avanza Type G, 2017, Baik, Baik, 7, 1300cc, Pertalite, 300000, ',]);
                Car::create([
                    'slug' => '8534f166e191395743235eaa634630ffe1bac905',
                    'user_id' => '6',
                    'shop_id' => '5',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '21',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '41',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL7701za',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Avanza Type G, 2015, Baik, Baik, 7, 1300cc, Pertalite, 300000, ',]);
                Car::create([
                    'slug' => 'a939499be8e4c428212acc5cc2431b5eecf8bff4',
                    'user_id' => '6',
                    'shop_id' => '5',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '26',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '37',
                    'Kapasitas_Mesin_id' => '45',
                    'Jenis_BBM_id' => '51',
                    'Harga_Sewa_id' => '58',
                    'stok' => 'standby',
                    'no_polisi' => 'BL6863bd',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Kijang Innova, 2020, Baik, Baik, 8, 2400cc, Solar, 600000, ',]);
                Car::create([
                    'slug' => '2754d327e37e3b185733f2034634c2402080d4b6',
                    'user_id' => '6',
                    'shop_id' => '5',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '21',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '37',
                    'Kapasitas_Mesin_id' => '45',
                    'Jenis_BBM_id' => '51',
                    'Harga_Sewa_id' => '58',
                    'stok' => 'standby',
                    'no_polisi' => 'BL9136db',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Kijang Innova, 2015, Baik, Baik, 8, 2400cc, Solar, 600000, ',]);
                Car::create([
                    'slug' => '1b355917ec4ab09ac098b20e4b4663a4d83de21b',
                    'user_id' => '6',
                    'shop_id' => '5',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '25',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '37',
                    'Kapasitas_Mesin_id' => '45',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '57',
                    'stok' => 'standby',
                    'no_polisi' => 'BL5391ag',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Kijang Innova, 2019, Baik, Baik, 8, 2400cc, Pertalite, 550000, ',]);
                Car::create([
                    'slug' => 'c16fa973b7791f5f45b85ff24cf0b4c2b3c6c50c',
                    'user_id' => '6',
                    'shop_id' => '5',
                    'merk_id' => '10',
                    'Tahun_Produksi_id' => '24',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '42',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '54',
                    'stok' => 'standby',
                    'no_polisi' => 'BL8915ad',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Rush, 2018, Baik, Baik, 7, 1500cc, Pertalite, 400000, ',]);
                Car::create([
                    'slug' => '5d01b65c72476109b019447724fac80d8a9aafa2',
                    'user_id' => '6',
                    'shop_id' => '5',
                    'merk_id' => '10',
                    'Tahun_Produksi_id' => '24',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '42',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '54',
                    'stok' => 'standby',
                    'no_polisi' => 'BL3689ab',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Rush, 2018, Baik, Baik, 7, 1500cc, Pertalite, 400000, ',]);
                Car::create([
                    'slug' => 'a2aca6b394a7079f86a1b62ccd3ececfacf4a069',
                    'user_id' => '6',
                    'shop_id' => '5',
                    'merk_id' => '10',
                    'Tahun_Produksi_id' => '21',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '42',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '53',
                    'stok' => 'standby',
                    'no_polisi' => 'BL2162da',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Toyota Rush, 2015, Baik, Baik, 7, 1500cc, Pertalite, 350000, ',]);
                Car::create([
                    'slug' => '55b172b215525658e8e4ea240b51dea6d5ff2f69',
                    'user_id' => '6',
                    'shop_id' => '5',
                    'merk_id' => '12',
                    'Tahun_Produksi_id' => '24',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '41',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL8306gs',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Suzuki Ertiga, 2018, Baik, Baik, 7, 1300cc, Pertalite, 300000, ',]);
                Car::create([
                    'slug' => '55d17d11ade4c210f116a7b36a00700e1b05864c',
                    'user_id' => '6',
                    'shop_id' => '5',
                    'merk_id' => '12',
                    'Tahun_Produksi_id' => '24',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '41',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '52',
                    'stok' => 'standby',
                    'no_polisi' => 'BL7979lg',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Suzuki Ertiga, 2018, Baik, Baik, 7, 1300cc, Pertalite, 300000, ',]);
                Car::create([
                    'slug' => '6e0e04d1f59a53234d4f2bfc432d156c3a52fd5e',
                    'user_id' => '6',
                    'shop_id' => '5',
                    'merk_id' => '13',
                    'Tahun_Produksi_id' => '25',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '42',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '53',
                    'stok' => 'standby',
                    'no_polisi' => 'BL6041zs',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Honda Mobilio RS, 2019, Baik, Baik, 7, 1500cc, Pertalite, 350000, ',]);
                Car::create([
                    'slug' => '9c25c62fe8d023302ad56adf2455020befe03f13',
                    'user_id' => '6',
                    'shop_id' => '5',
                    'merk_id' => '13',
                    'Tahun_Produksi_id' => '25',
                    'Kondisi_Fisik_id' => '30',
                    'Kondisi_Mesin_id' => '33',
                    'Muatan_Penumpang_id' => '36',
                    'Kapasitas_Mesin_id' => '42',
                    'Jenis_BBM_id' => '50',
                    'Harga_Sewa_id' => '53',
                    'stok' => 'standby',
                    'no_polisi' => 'BL1615gb',
                    'deskripsi' => NULL,
                    'kata_kunci' => 'Honda Mobilio RS, 2019, Baik, Baik, 7, 1500cc, Pertalite, 350000, ',]);
            //
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
        //
    }
}
