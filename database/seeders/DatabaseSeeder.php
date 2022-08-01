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
                "nama" => "Daihatsu Terios",
                "nilai" => 1
            ]);
            alternatif::create([
                "kriteria_id" => 1,
                "nama" => "Daihatsu Xenia",
                "nilai" => 1
            ]);
            alternatif::create([
                "kriteria_id" => 1,
                "nama" => "Honda Jazz RS",
                "nilai" => 1
            ]);
            alternatif::create([
                "kriteria_id" => 1,
                "nama" => "Mitsubishi Pajero Sport",
                "nilai" => 1
            ]);
            alternatif::create([
                "kriteria_id" => 1,
                "nama" => "Mitsubishi Triton",
                "nilai" => 1
            ]);
            alternatif::create([
                "kriteria_id" => 1,
                "nama" => "Toyota Avanza Type E",
                "nilai" => 1
            ]);
            alternatif::create([
                "kriteria_id" => 1,
                "nama" => "Toyota Avanza Type G",
                "nilai" => 1
            ]);
            alternatif::create([
                "kriteria_id" => 1,
                "nama" => "Toyota Avanza Veloz",
                "nilai" => 1
            ]);
            alternatif::create([
                "kriteria_id" => 1,
                "nama" => "Toyota Kijang Innova",
                "nilai" => 1
            ]);
            alternatif::create([
                "kriteria_id" => 1,
                "nama" => "Toyota Rush",
                "nilai" => 1
            ]);
            alternatif::create([
                "kriteria_id" => 1,
                "nama" => "Toyota Hiace",
                "nilai" => 1
            ]);
            alternatif::create([
                "kriteria_id" => 1,
                "nama" => "Suzuki Ertiga",
                "nilai" => 1
            ]);
            alternatif::create([
                "kriteria_id" => 1,
                "nama" => "Honda Mobilio RS",
                "nilai" => 1
            ]);
            alternatif::create([
                "kriteria_id" => 1,
                "nama" => "Toyota Calya",
                "nilai" => 1
            ]);
            alternatif::create([
                "kriteria_id" => 1,
                "nama" => "Mitsubishi Xpander",
                "nilai" => 1
            ]);
            alternatif::create([
                "kriteria_id" => 2,
                "nama" => "dibawah 2010",
                "nilai" => 1
            ]);
            alternatif::create([
                "kriteria_id" => 2,
                "nama" => "2010 sampai 2012",
                "nilai" => 2
            ]);
            alternatif::create([
                "kriteria_id" => 2,
                "nama" => "2013 sampai 2014",
                "nilai" => 3
            ]);
            alternatif::create([
                "kriteria_id" => 2,
                "nama" => "2015 sampai 2016",
                "nilai" => 4
            ]);
            alternatif::create([
                "kriteria_id" => 2,
                "nama" => "2017 sampai 2018",
                "nilai" => 5
            ]);
            alternatif::create([
                "kriteria_id" => 2,
                "nama" => "2019 sampai 2020",
                "nilai" => 6
            ]);
            alternatif::create([
                "kriteria_id" => 2,
                "nama" => "2021 sampai 2022",
                "nilai" => 7
            ]);
            alternatif::create([
                "kriteria_id" => 3,
                "nama" => "kurang baik",
                "nilai" => 1
            ]);
            alternatif::create([
                "kriteria_id" => 3,
                "nama" => "Baik",
                "nilai" => 2
            ]);
            alternatif::create([
                "kriteria_id" => 3,
                "nama" => "sangat baik",
                "nilai" => 3
            ]);
            alternatif::create([
                "kriteria_id" => 4,
                "nama" => "kurang baik",
                "nilai" => 1
            ]);
            alternatif::create([
                "kriteria_id" => 4,
                "nama" => "Baik",
                "nilai" => 2
            ]);
            alternatif::create([
                "kriteria_id" => 4,
                "nama" => "sangat baik",
                "nilai" => 3
            ]);
            alternatif::create([
                "kriteria_id" => 5,
                "nama" => "dibawah 5 orang",
                "nilai" => 1
            ]);
            alternatif::create([
                "kriteria_id" => 5,
                "nama" => "5 sampai 6 orang",
                "nilai" => 2
            ]);
            alternatif::create([
                "kriteria_id" => 5,
                "nama" => "7 sampai 8 orang",
                "nilai" => 3
            ]);
            alternatif::create([
                "kriteria_id" => 5,
                "nama" => "diatas 8 orang",
                "nilai" => 4
            ]);
            alternatif::create([
                "kriteria_id" => 6,
                "nama" => "dibawah 1300cc",
                "nilai" => 1
            ]);
            alternatif::create([
                "kriteria_id" => 6,
                "nama" => "1301cc sampai 1400cc",
                "nilai" => 2
            ]);
            alternatif::create([
                "kriteria_id" => 6,
                "nama" => "1401cc sampai 1500cc",
                "nilai" => 3
            ]);
            alternatif::create([
                "kriteria_id" => 6,
                "nama" => "1501cc sampai 1600cc",
                "nilai" => 4
            ]);
            alternatif::create([
                "kriteria_id" => 6,
                "nama" => "1601cc sampai 2000cc",
                "nilai" => 5
            ]);
            alternatif::create([
                "kriteria_id" => 6,
                "nama" => "diatas 2000cc",
                "nilai" => 6
            ]);
            alternatif::create([
                "kriteria_id" => 7,
                "nama" => "Pertamax Turbo",
                "nilai" => 1
            ]);
            alternatif::create([
                "kriteria_id" => 7,
                "nama" => "Pertamina DEX",
                "nilai" => 2
            ]);
            alternatif::create([
                "kriteria_id" => 7,
                "nama" => "Pertamax",
                "nilai" => 3
            ]);
            alternatif::create([
                "kriteria_id" => 7,
                "nama" => "Pertalite",
                "nilai" => 4
            ]);
            alternatif::create([
                "kriteria_id" => 7,
                "nama" => "Solar",
                "nilai" => 5
            ]);
            alternatif::create([
                "kriteria_id" => 8,
                "nama" => "dibawah 300rb/hari",
                "nilai" => 1
            ]);
            alternatif::create([
                "kriteria_id" => 8,
                "nama" => "300rb sampai 350rb/hari",
                "nilai" => 2
            ]);
            alternatif::create([
                "kriteria_id" => 8,
                "nama" => "351rb sampai 400rb/hari",
                "nilai" => 3
            ]);
            alternatif::create([
                "kriteria_id" => 8,
                "nama" => "401rb sampai 450rb/hari",
                "nilai" => 4
            ]);
            alternatif::create([
                "kriteria_id" => 8,
                "nama" => "451rb sampai 500rb/hari",
                "nilai" => 5
            ]);
            alternatif::create([
                "kriteria_id" => 8,
                "nama" => "501rb sampai 550rb/hari",
                "nilai" => 6
            ]);
            alternatif::create([
                "kriteria_id" => 8,
                "nama" => "551rb sampai 600rb/hari",
                "nilai" => 7
            ]);
            alternatif::create([
                "kriteria_id" => 8,
                "nama" => "diatas 600rb/hari",
                "nilai" => 8
            ]);
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
            User::create([
                'slug' => '8fcq3ofKh9VujrzbSkYO485R2RS9zlWb2x6uSciNIVUIZMxBHW',
                'username' => 'amin-family-group',
                'email' => 'aminfamilygroup@gmail.com',
                'no_hp' => '85260642004',
                'password' => Hash::make('password'),
                'image' => NULL,
                'role' => 'rental',]);
            User::create([
                'slug' => 'iXLe0pV4XxaOXKPJjjXzDH2HyBqPrkGaH8aVq3tHNDdkPFPx8o',
                'username' => 'pangeran-rentcar',
                'email' => 'pangeran@gmail.com',
                'no_hp' => '85262488702',
                'password' => Hash::make('password'),
                'image' => NULL,
                'role' => 'rental',]);
            User::create([
                'slug' => 'VSxcjqZFIzxnfeFoIk5epz8PjqNJ3zFjp7tXtUyyeTpKFW5gpF',
                'username' => 'Jeumpa Puteh',
                'email' => 'jeumpaputeh@gmail.com',
                'no_hp' => '80000000002',
                'password' => Hash::make('password'),
                'image' => NULL,
                'role' => 'rental',]);
            User::create([
                'slug' => '5pY1aQ21v7n4ZR6O0a88Rb6RYgzVakwiIk5fuiUT0u3sjPfbFo',
                'username' => 'Galery Rental',
                'email' => 'galery-rental@gmail.com',
                'no_hp' => '85360498475',
                'password' => Hash::make('password'),
                'image' => NULL,
                'role' => 'rental',]);
            User::create([
                'slug' => 'Zrpfd0uv7m8U1pUBQczNumfOFptcJQ6STvrfgeM4eCbyGftwF1',
                'username' => 'BOY CAR',
                'email' => 'boy-car@gmail.com',
                'no_hp' => '82246480459',
                'password' => Hash::make('password'),
                'image' => NULL,
                'role' => 'rental',]);

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
                car::create([
                    'slug' => 'L7KQJcJAbsJjZ0UHogSeyXjmjwzUvD6aj2uDtt8VcoTxtp7LBf',
                    'user_id' => '2',
                    'shop_id' => '1',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '32',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '39',
                    'stok' => 'standby',
                    'no_polisi' => 'bl0001lh',
                    'deskripsi' => '<div>Model : Innova Reborn<br>Tahun : 2022</div>',
                    'kata_kunci' => 'Toyota Kijang Innova, 2021 sampai 2022, sangat baik, sangat baik, 7 sampai 8 orang, diatas 1600cc, Solar, 551rb sampai 600rb/hari, ',
                    'gambar1' => 'gambar1/W09VHH1XeDTfw2WN8eVUN32F7OzTdeOoE33FYTl7.webp',
                    'gambar2' => 'gambar2/eVFRYRGEYL61RV4I446SVs5JmE9dR9DbPB4FtSgg.webp',
                    'gambar3' => 'gambar3/LFGpfI8u4J2G6bcbUWfwDe42Q6ZJSXKMcJ48a6UL.webp',
                    'gambar4' => 'gambar4/9mGSrsCuT08s4M2qymXhXxTHDDOypD3Q7ES7eZVf.webp',
                    'gambar5' => 'gambar5/y2iLtF3LNdHiLsvKDEAcW7IKlkh6Vd3MnWe5yBUY.webp',]);
                car::create([
                    'slug' => '6CChJQ8EtLrpjSrEdpDbTgsFgeO9D89haXuMkig3S2DMXkgTxk',
                    'user_id' => '2',
                    'shop_id' => '1',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '32',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '39',
                    'stok' => 'standby',
                    'no_polisi' => 'bl0002lh',
                    'deskripsi' => '<div>.</div>',
                    'kata_kunci' => 'Toyota Kijang Innova, 2021 sampai 2022, sangat baik, sangat baik, 7 sampai 8 orang, diatas 1600cc, Solar, 501rb sampai 600rb/hari, ',
                    'gambar1' => 'gambar1/W09VHH1XeDTfw2WN8eVUN32F7OzTdeOoE33FYTl7.webp',
                    'gambar2' => 'gambar2/eVFRYRGEYL61RV4I446SVs5JmE9dR9DbPB4FtSgg.webp',
                    'gambar3' => 'gambar3/LFGpfI8u4J2G6bcbUWfwDe42Q6ZJSXKMcJ48a6UL.webp',
                    'gambar4' => 'gambar4/9mGSrsCuT08s4M2qymXhXxTHDDOypD3Q7ES7eZVf.webp',
                    'gambar5' => 'gambar5/y2iLtF3LNdHiLsvKDEAcW7IKlkh6Vd3MnWe5yBUY.webp',]);
                car::create([
                    'slug' => 'EtbRw2oGnSPGgyO5AGQBAfXcYcaf5dcmWpigkmmmTsqo0zCkPn',
                    'user_id' => '2',
                    'shop_id' => '1',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '16',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '32',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '39',
                    'stok' => 'standby',
                    'no_polisi' => 'bl0003lh',
                    'deskripsi' => '<div>.</div>',
                    'kata_kunci' => 'Toyota Kijang Innova, 2019 sampai 2020, cukup, cukup, 7 sampai 8 orang, diatas 1600cc, Solar, 551rb sampai 600rb/hari, ',
                    'gambar1' => 'gambar1/k68qWAyzL2Nrwyj8aBXuWAzVSxKCFu5kjwRynoiy.webp',
                    'gambar2' => 'gambar2/m7l0vXZD7Dn4fnOuwj9rpucBBJ7MNHqFn3q8qU5e.webp',
                    'gambar3' => 'gambar3/OnPTj7TAMWFs6DfRFvBPL2zu7H8n9hshsUjT2eLK.webp',
                    'gambar4' => 'gambar4/HHnZhXMD3a9nkiWvD8Mp5Ll7xrHH61u0HD3BHgYV.webp',
                    'gambar5' => 'gambar5/9oXQVkzoRsHx7NwOQP8v688Txf0OuK2bWJIbnib7.webp',]);
                car::create([
                    'slug' => '311GEnBIK5LQt7xg2kIkOs9EWSyqbvk5Br5t9AhrsPfJonevC3',
                    'user_id' => '2',
                    'shop_id' => '1',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '16',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '32',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '39',
                    'stok' => 'standby',
                    'no_polisi' => 'bl0004lh',
                    'deskripsi' => '<div>.</div>',
                    'kata_kunci' => 'Toyota Kijang Innova, 2019 sampai 2020, cukup, cukup, 7 sampai 8 orang, diatas 1600cc, Solar, 501rb sampai 600rb/hari, ',
                    'gambar1' => 'gambar1/k68qWAyzL2Nrwyj8aBXuWAzVSxKCFu5kjwRynoiy.webp',
                    'gambar2' => 'gambar2/m7l0vXZD7Dn4fnOuwj9rpucBBJ7MNHqFn3q8qU5e.webp',
                    'gambar3' => 'gambar3/OnPTj7TAMWFs6DfRFvBPL2zu7H8n9hshsUjT2eLK.webp',
                    'gambar4' => 'gambar4/HHnZhXMD3a9nkiWvD8Mp5Ll7xrHH61u0HD3BHgYV.webp',
                    'gambar5' => 'gambar5/9oXQVkzoRsHx7NwOQP8v688Txf0OuK2bWJIbnib7.webp',]);
                car::create([
                    'slug' => 'JiNhMSH6TJWnZcErZHHI327sJ9NrCcDkvReIjF6KBQc1ihxhYa',
                    'user_id' => '2',
                    'shop_id' => '1',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '16',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '32',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '39',
                    'stok' => 'standby',
                    'no_polisi' => 'bl0005lh',
                    'deskripsi' => '<div>.</div>',
                    'kata_kunci' => 'Toyota Kijang Innova, 2019 sampai 2020, cukup, cukup, 7 sampai 8 orang, diatas 1600cc, Solar, 551rb sampai 600rb/hari, ',
                    'gambar1' => 'gambar1/k68qWAyzL2Nrwyj8aBXuWAzVSxKCFu5kjwRynoiy.webp',
                    'gambar2' => 'gambar2/m7l0vXZD7Dn4fnOuwj9rpucBBJ7MNHqFn3q8qU5e.webp',
                    'gambar3' => 'gambar3/OnPTj7TAMWFs6DfRFvBPL2zu7H8n9hshsUjT2eLK.webp',
                    'gambar4' => 'gambar4/HHnZhXMD3a9nkiWvD8Mp5Ll7xrHH61u0HD3BHgYV.webp',
                    'gambar5' => 'gambar5/9oXQVkzoRsHx7NwOQP8v688Txf0OuK2bWJIbnib7.webp',]);
                car::create([
                    'slug' => 'a1cuv7TmtRI8ZR7oK4xIOn8QYKkfHjsITFfTl4iZ4RKxhTQEOs',
                    'user_id' => '2',
                    'shop_id' => '1',
                    'merk_id' => '8',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '43',
                    'stok' => 'standby',
                    'no_polisi' => 'bl0006lh',
                    'deskripsi' => '<div>.</div>',
                    'kata_kunci' => 'Toyota Avanza Veloz, 2021 sampai 2022, cukup, cukup, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertalite, 351rb sampai 400rb/hari, ',
                    'gambar1' => 'gambar1/GyEhFouYmV7SOwWjS3eaH86SAAVyG1ruG7niHbVS.webp',
                    'gambar2' => 'gambar2/vcPvNnn0GHcLaK4CRw00PzDOPrYjYJVAxEkvm0sF.webp',
                    'gambar3' => 'gambar3/e3Lz8gi1CY59eOVN2etMHn8r2dhLHRwVwaHunFsi.webp',
                    'gambar4' => 'gambar4/jCFeCxy9QtPV2bs1mUAdOAwzsrJKYXU06gbfZyPj.webp',
                    'gambar5' => 'gambar5/vWgMAJhUteK248U9xa4KxHAXTRAB6p9oGsilIFvC.webp',]);
                car::create([
                    'slug' => 'iTnsEwIJgGkPX4oOYyUr1G67XtDfFsrp1Wa50rijnrCH2ai3Xx',
                    'user_id' => '2',
                    'shop_id' => '1',
                    'merk_id' => '8',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    'no_polisi' => 'bl0007lh',
                    'deskripsi' => '<div>.</div>',
                    'kata_kunci' => 'Toyota Avanza Veloz, 2017 sampai 2018, cukup, cukup, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertalite, 300rb sampai 350rb/hari, ',
                    'gambar1' => 'gambar1/13VhOyQweqsaz4jtoSrFm4csoSGGIgos1NTy1z2D.webp',
                    'gambar2' => 'gambar2/C7CapFfzR5Np5o9BAgWtSzfCidr77jc6WKXBkRdG.webp',
                    'gambar3' => 'gambar3/oBEf6qfH9zUPwjJkqg4SMu8wbIEmUuAxPnHVh58v.webp',
                    'gambar4' => 'gambar4/7j7hG4XzQ3TKRnKGip0xiqCFqwrtYNpan7pYeBLb.webp',
                    'gambar5' => 'gambar5/6VAoSaafHQyOjIE0qmAhTJLzA49hv5ffiBlrWhhb.webp',]);
                car::create([
                    'slug' => '4A7B1OCneZUKk7jREFR3Lz7U2JdXYHADEXiC8xHw2nxjDiqrZr',
                    'user_id' => '2',
                    'shop_id' => '1',
                    'merk_id' => '8',
                    'Tahun_Produksi_id' => '14',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    'no_polisi' => 'bl0008lh',
                    'deskripsi' => '<div>.</div>',
                    'kata_kunci' => 'Toyota Avanza Veloz, 2015 sampai 2016, cukup, cukup, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertalite, 300rb sampai 350rb/hari, ',
                    'gambar1' => 'gambar1/8a93MHQXJ3Qvz0cDQzoBomDE6fAsUGS1BMcmcfvM.webp',
                    'gambar2' => 'gambar2/1nvdf6KP7qtYDZZ4IQUPHLOlSWwuuyOdJn1oYBKk.webp',
                    'gambar3' => 'gambar3/evwYQ4zKPmDklolUwkOJmG1PRqp0se4vx8yp1Ofd.webp',
                    'gambar4' => 'gambar4/WaOUBx8VDgMZzDCT3c9qYLIwGyw0WIHb294KxJMp.webp',
                    'gambar5' => 'gambar5/wy4x4XTo7NHQoe32nowrbcrYT28DPERzdeqrctJO.webp',]);
                car::create([
                    'slug' => 'tfFYTwgaOYsrr9WFE3gRkMMH5BcY2lHL4f1SCeY0X6sh0BkU3L',
                    'user_id' => '2',
                    'shop_id' => '1',
                    'merk_id' => '8',
                    'Tahun_Produksi_id' => '13',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    'no_polisi' => 'bl0009lh',
                    'deskripsi' => '<div>.</div>',
                    'kata_kunci' => 'Toyota Avanza Veloz, 2013 sampai 2014, cukup, cukup, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertalite, 300rb sampai 350rb/hari, ',
                    'gambar1' => 'gambar1/SKLYJXw2U0Smr71AShG7mU9GfYMq2zRymcFciVTQ.webp',
                    'gambar2' => 'gambar2/j38gc3YrqE808BytsLCSnURjSWTGCq8SfRNlkTox.webp',
                    'gambar3' => 'gambar3/o3xxP9CstCjD7cawovNsmFt2kEGqQ8qTqetlMXuo.webp',
                    'gambar4' => 'gambar4/ZgZzPmuEIqMQD0dj0gvIQOkK26IGLKGl5RB4WvQl.webp',
                    'gambar5' => 'gambar5/9r4ZrhPRD9PYCcKbmqErVjuDAstQSaTHD6KfBOva.webp',]);
                car::create([
                    'slug' => 'QQnBFkMyKJklhJqDVzocoieB6GJ0StZwIj4qpIWX5H0u3BKVZ2',
                    'user_id' => '2',
                    'shop_id' => '1',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '43',
                    'stok' => 'standby',
                    'no_polisi' => 'bl0010lh',
                    'deskripsi' => NULL,'kata_kunci' => 'Toyota Avanza Type G, 2021 sampai 2022, sangat baik, sangat baik, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertalite, 351rb sampai 400rb/hari, ',
                    'gambar1' => 'gambar1/Puw3nzRPRs849Ui0GqNYYTXMFIGYEsR09Yojm59y.webp',
                    'gambar2' => 'gambar2/47WmiU885TX9M3CxdEtpWcGPBe9kCn7hLDfOl3yl.webp',
                    'gambar3' => 'gambar3/gEKJU8JliYG3hihfHFirYiUQWiFoUv9zArVvjGhN.webp',
                    'gambar4' => 'gambar4/PGSaSY5aOnzslXwXybCnjAUP2YjsSlHo6AJ5rcAn.webp',
                    'gambar5' => 'gambar5/FVTKyjxyAOzXBe04boPmg5kqvTGKjcYNHei9qAwP.webp',]);
                car::create([
                    'slug' => 'bSbq0xvtDRcxQpYoDVDUAzrGjyLoPTkpbpviJ2Hsdjl32kNQh1',
                    'user_id' => '2',
                    'shop_id' => '1',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '29',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    'no_polisi' => 'bl0011lh',
                    'deskripsi' => NULL,'kata_kunci' => 'Toyota Avanza Type G, 2017 sampai 2018, cukup, cukup, 7 sampai 8 orang, 1301cc sampai 1400cc, Pertalite, 300rb sampai 350rb/hari, ',
                    'gambar1' => 'gambar1/xksYlnjzKNab7ztkSNHG0VYHwHXQJvpRE2XYLGCv.webp',
                    'gambar2' => 'gambar2/u0diFyJuZFai7ZLgRyVrSQAVnnjXKPLetn9jXJCS.webp',
                    'gambar3' => 'gambar3/SvkZmIebhDTlO4iLjmR3fsEWLCy5EagZllnXHBa1.webp',
                    'gambar4' => 'gambar4/JD9mMR7PcClN8Qsjz0bZBUHP4fZhNDeQLQaNsrYy.webp',
                    'gambar5' => 'gambar5/TwPCE5mGQXeC6yGg15VXBjJt2fDFXK6t9ymij0ly.webp',]);
                car::create([
                    'slug' => 'QiS0ULvVWZM7tiPVsnmPxRQFLgHXGPlK04uDtBYGEBaxx1n7Xv',
                    'user_id' => '2',
                    'shop_id' => '1',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '14',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '29',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    'no_polisi' => 'bl0012lh',
                    'deskripsi' => NULL,'kata_kunci' => 'Toyota Avanza Type G, 2015 sampai 2016, cukup, cukup, 7 sampai 8 orang, 1301cc sampai 1400cc, Pertalite, 300rb sampai 350rb/hari, ',
                    'gambar1' => 'gambar1/2hrNsWV7vi3xBWvsjtyD7Eci8W2cs8yYWkGnoiLP.webp',
                    'gambar2' => 'gambar2/ZDk5ATxqCQJgINuSZj234kSmxDcMWhaOAEFU7SmV.webp',
                    'gambar3' => 'gambar3/RKUQwOzwPGylxrLOd8Wg95En6p7vt6Z5E3oACHDE.webp',
                    'gambar4' => 'gambar4/O3VHlBwgF0BORhbOzNXMOPUd6SihVNLjIiMADixx.webp',
                    'gambar5' => 'gambar5/RgIQhSZHOSuV0E5AZBa415nl38swQy8ZwipqLbrO.webp',]);
                car::create([
                    'slug' => 'cuklkdvvfLC4VtWbpyW7P0bfW43dxYuRZrTW9UywQKTditATyz',
                    'user_id' => '2',
                    'shop_id' => '1',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '28',
                    'Jenis_BBM_id' => '35',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    'no_polisi' => 'bl0013lh',
                    'deskripsi' => NULL,'kata_kunci' => 'Toyota Avanza Type G, 2010 sampai 2012, cukup, cukup, 7 sampai 8 orang, dibawah 1300cc, Pertamax, 300rb sampai 350rb/hari, ',
                    'gambar1' => 'gambar1/qAmVdeYgxahynKouaOZIgVQYPz4TBK32ky2dlDhU.webp',
                    'gambar2' => 'gambar2/URLYjMGALlDHCwMbpAvhBNS3tkVUbSju8bdjKO7Y.webp',
                    'gambar3' => 'gambar3/IFzF9N1xNPStON5T6eGEaXVI1YMkPHj72mbBVW8k.webp',
                    'gambar4' => 'gambar4/g7DzX1jSLSslSP0Rn4zvwebEPzlUdj9ackiXesPO.webp',
                    'gambar5' => 'gambar5/dtYBvpcDOIc5QRZdLzoL8qROKWaciCBkfeEduZZU.webp',]);
                car::create([
                    'slug' => 'nwoxT34eonOpuxtlDQWkbQp21LQe3HcurBYdZn2IlpSYqSodea',
                    'user_id' => '2',
                    'shop_id' => '1',
                    'merk_id' => '6',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '29',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    'no_polisi' => 'bl0014lh',
                    'deskripsi' => NULL,'kata_kunci' => 'Toyota Avanza Type E, 2017 sampai 2018, cukup, cukup, 7 sampai 8 orang, 1301cc sampai 1400cc, Pertalite, 300rb sampai 350rb/hari, ',
                    'gambar1' => 'gambar1/1MDGMTp1CKhJwa73wsgXfKrUGlfstAuwbA6i9bfv.webp',
                    'gambar2' => 'gambar2/Z9I5z5Vt7AcGhJYmG6O8TZcSu0b1xlMEj4jxwEKU.webp',
                    'gambar3' => 'gambar3/hp7rbjp8V9YaSd5KbzFbRcoyWTVk8SZbmwe7Lh7L.webp',
                    'gambar4' => 'gambar4/iQNyp6CjuwHXv2iay5Xiia4qr3uKug4iSGQmdMV9.webp',
                    'gambar5' => 'gambar5/Fn3YlC7v9Na3rqTYzGjE4COz3PwUAVnQyFZ5OLxg.webp',]);
                car::create([
                    'slug' => '2GK0rfsryy27EJxGx9qCvikK8i6pjWpAXjXqUk74pCgVQz4dp1',
                    'user_id' => '2',
                    'shop_id' => '1',
                    'merk_id' => '6',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '29',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    'no_polisi' => 'bl0015lh',
                    'deskripsi' => NULL,'kata_kunci' => 'Toyota Avanza Type E, 2017 sampai 2018, cukup, cukup, 7 sampai 8 orang, 1301cc sampai 1400cc, Pertalite, 300rb sampai 400rb/hari, ',
                    'gambar1' => 'gambar1/1MDGMTp1CKhJwa73wsgXfKrUGlfstAuwbA6i9bfv.webp',
                    'gambar2' => 'gambar2/Z9I5z5Vt7AcGhJYmG6O8TZcSu0b1xlMEj4jxwEKU.webp',
                    'gambar3' => 'gambar3/hp7rbjp8V9YaSd5KbzFbRcoyWTVk8SZbmwe7Lh7L.webp',
                    'gambar4' => 'gambar4/iQNyp6CjuwHXv2iay5Xiia4qr3uKug4iSGQmdMV9.webp',
                    'gambar5' => 'gambar5/Fn3YlC7v9Na3rqTYzGjE4COz3PwUAVnQyFZ5OLxg.webp',]);
                car::create([
                    'slug' => '9Ewr0CBjcHXNTKwC8ZWIyJp3ist5yRmT3zn0MTJktOg7B9FhuU',
                    'user_id' => '2',
                    'shop_id' => '1',
                    'merk_id' => '3',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '43',
                    'stok' => 'standby',
                    'no_polisi' => 'bl0016lh',
                    'deskripsi' => NULL,'kata_kunci' => 'Honda Jazz RS, 2021 sampai 2022, sangat baik, sangat baik, 5 sampai 6 orang , 1401cc sampai 1500cc, Pertalite, 351rb sampai 400rb/hari, ',
                    'gambar1' => 'gambar1/TN2CHygTOFht9AT5mHGjOQSTGPOH1vRd0easd6lV.webp',
                    'gambar2' => 'gambar2/YWl1C2qBQQiGT7eW5TaoAnszdfkzxId2hnUvhu3M.webp',
                    'gambar3' => 'gambar3/LJc9MJL6UujZ0userKD1EV4PPflJPvIzlhF15DZ6R.webp',
                    'gambar4' => 'gambar4/mQe7KP0GMwkYitw7Od9ISnzkChyHXEfVr0EpM9Hw.webp',
                    'gambar5' => 'gambar5/gkIKa2KP37eu87Y5J3dQ6Fg2vh6JSE5KFKCebYZ6.webp',]);
                car::create([
                    'slug' => 'D15VvTL7m9gsks4ijRumsZDtCy3zFfAss7jtUuT16WvEaEUuI1',
                    'user_id' => '2',
                    'shop_id' => '1',
                    'merk_id' => '3',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    'no_polisi' => 'bl0017lh',
                    'deskripsi' => NULL,'kata_kunci' => 'Honda Jazz RS, 2021 sampai 2022, cukup, cukup, 5 sampai 6 orang , 1401cc sampai 1500cc, Pertalite, 300rb sampai 400rb/hari, ',
                    'gambar1' => 'gambar1/TN2CHygTOFht9AT5mHGjOQSTGPOH1vRd0easd6lV.webp',
                    'gambar2' => 'gambar2/YWl1C2qBQQiGT7eW5TaoAnszdfkzxId2hnUvhu3M.webp',
                    'gambar3' => 'gambar3/LJc9MJL6UujZ0uerKD1EV4PPflJPvIzlhF15DZ6R.webp',
                    'gambar4' => 'gambar4/mQe7KP0GMwkYitw7Od9ISnzkChyHXEfVr0EpM9Hw.webp',
                    'gambar5' => 'gambar5/gkIKa2KP37eu87Y5J3dQ6Fg2vh6JSE5KFKCebYZ6.webp',]);
                car::create([
                    'slug' => 'AUfN38SfZzD7k7KyDSifBgpvQvtl7R0k7v77n8qDuhzRX04M1m',
                    'user_id' => '2',
                    'shop_id' => '1',
                    'merk_id' => '3',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    'no_polisi' => 'bl0018lh',
                    'deskripsi' => NULL,'kata_kunci' => 'Honda Jazz RS, 2021 sampai 2022, cukup, cukup, 5 sampai 6 orang , 1401cc sampai 1500cc, Pertalite, 300rb sampai 400rb/hari, ',
                    'gambar1' => 'gambar1/TN2CHygTOFht9AT5mHGjOQSTGPOH1vRd0easd6lV.webp',
                    'gambar2' => 'gambar2/YWl1C2qBQQiGT7eW5TaoAnszdfkzxId2hnUvhu3M.webp',
                    'gambar3' => 'gambar3/LJc9MJL6UujZ0uerKD1EV4PPflJPvIzlhF15DZ6R.webp',
                    'gambar4' => 'gambar4/mQe7KP0GMwkYitw7Od9ISnzkChyHXEfVr0EpM9Hw.webp',
                    'gambar5' => 'gambar5/gkIKa2KP37eu87Y5J3dQ6Fg2vh6JSE5KFKCebYZ6.webp',]);
                car::create([
                'slug' => 'MZQxMyItmGFP8pt3djPgYuz9fXMwuVXrhyqYKwdDAIiGVZBMa0',
                'user_id' => '2',
                'shop_id' => '1',
                'merk_id' => '3',
                'Tahun_Produksi_id' => '15',
                'Kondisi_Fisik_id' => '19',
                'Kondisi_Mesin_id' => '22',
                'Muatan_Penumpang_id' => '25',
                'Kapasitas_Mesin_id' => '30',
                'Jenis_BBM_id' => '36',
                'Harga_Sewa_id' => '44',
                'stok' => 'standby',
                'no_polisi' => 'bl0019lh',
                'deskripsi' => NULL,'kata_kunci' => 'Honda Jazz RS, 2017 sampai 2018, cukup, cukup, 5 sampai 6 orang , 1401cc sampai 1500cc, Pertalite, 300rb sampai 350rb/hari, ',
                'gambar1' => 'gambar1/lmrtHR27cM1o5M8pJuwe9J3kn84oglYznnKP0Dbk.webp',
                'gambar2' => 'gambar2/C1sBt9pbDxfeSrAl9ZrpRkIilhGuCmSmeGmZ2Xop.webp',
                'gambar3' => 'gambar3/lqNemLa1RehW28UV32xTer7So3Yjc5xEqGY4suGO.webp',
                'gambar4' => 'gambar4/7RPmyFgBWu7kbHBPTPQkG8kQ0ZtYJXjT9Xeuk69h.webp',
                'gambar5' => 'gambar5/y1j9kY9OVQqynYmLN4BetogMP2Q7dw0RGLFtEgPs.webp',]);
            //
            // Adam jaya
                car::create([
                    'slug' => 'qhQkBNlStCD3u1DDvXO2dfvIiHgsvs7hGVWCfYuCODoL38VGaM',
                    'user_id' => '2',
                    'shop_id' => '1',
                    'merk_id' => '3',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    'no_polisi' => 'bl0020lh',
                    'deskripsi' => NULL,'kata_kunci' => 'Honda Jazz RS, 2017 sampai 2018, cukup, cukup, 5 sampai 6 orang , 1401cc sampai 1500cc, Pertalite, 300rb sampai 400rb/hari, ',
                    'gambar1' => 'gambar1/lmrtHR27cM1o5M8pJuwe9J3kn84oglYznnKP0Dbk.webp',
                    'gambar2' => 'gambar2/C1sBt9pbDxfeSrAl9ZrpRkIilhGuCmSmeGmZ2Xop.webp',
                    'gambar3' => 'gambar3/lqNemLa1RehW28UV32xTer7So3Yjc5xEqGY4suGO.webp',
                    'gambar4' => 'gambar4/7RPmyFgBWu7kbHBPTPQkG8kQ0ZtYJXjT9Xeuk69h.webp',
                    'gambar5' => 'gambar5/y1j9kY9OVQqynYmLN4BetogMP2Q7dw0RGLFtEgPs.webp',]);
                car::create([
                    'slug' => 'JpLz8hhjMCO8LhqjYumfcELX4HLTpvIMXuPzAFs1ZhXzX85Pu0',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '8',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '43',
                    'stok' => 'standby',
                    'no_polisi' => 'bl0021pg',
                    'deskripsi' => NULL,'kata_kunci' => 'Toyota Avanza Veloz, 2021 sampai 2022, sangat baik, sangat baik, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertalite, 300rb sampai 400rb/hari, ',
                    'gambar1' => 'gambar1/GyEhFouYmV7SOwWjS3eaH86SAAVyG1ruG7niHbVS.webp',
                    'gambar2' => 'gambar2/vcPvNnn0GHcLaK4CRw00PzDOPrYjYJVAxEkvm0sF.webp',
                    'gambar3' => 'gambar3/e3Lz8gi1CY59eOVN2etMHn8r2dhLHRwVwaHunFsi.webp',
                    'gambar4' => 'gambar4/jCFeCxy9QtPV2bs1mUAdOAwzsrJKYXU06gbfZyPj.webp',
                    'gambar5' => 'gambar5/vWgMAJhUteK248U9xa4KxHAXTRAB6p9oGsilIFvC.webp',]);
                car::create([
                    'slug' => 'j41QDSGWZCIDXuVjoQz7Qsx5fqS1dcKnMbACbB9dukhKj6R7G6',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '8',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    'no_polisi' => 'bl0022pg',
                    'deskripsi' => NULL,'kata_kunci' => 'Toyota Avanza Veloz, 2017 sampai 2018, cukup, cukup, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertalite, 300rb sampai 400rb/hari, ',
                    'gambar1' => 'gambar1/13VhOyQweqsaz4jtoSrFm4csoSGGIgos1NTy1z2D.webp',
                    'gambar2' => 'gambar2/C7CapFfzR5Np5o9BAgWtSzfCidr77jc6WKXBkRdG.webp',
                    'gambar3' => 'gambar3/oBEf6qfH9zUPwjJkqg4SMu8wbIEmUuAxPnHVh58v.webp',
                    'gambar4' => 'gambar4/7j7hG4XzQ3TKRnKGip0xiqCFqwrtYNpan7pYeBLb.webp',
                    'gambar5' => 'gambar5/6VAoSaafHQyOjIE0qmAhTJLzA49hv5ffiBlrWhhb.webp',]);
                car::create([
                    'slug' => 'g4CnautXUuLY4eVCPOibSWNv4AhxFjAI5Z7dhEkfk1oCMhkVcj',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '8',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    'no_polisi' => 'bl0023pg',
                    'deskripsi' => NULL,'kata_kunci' => 'Toyota Avanza Veloz, 2017 sampai 2018, cukup, cukup, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertalite, 300rb sampai 400rb/hari, ',
                    'gambar1' => 'gambar1/13VhOyQweqsaz4jtoSrFm4csoSGGIgos1NTy1z2D.webp',
                    'gambar2' => 'gambar2/C7CapFfzR5Np5o9BAgWtSzfCidr77jc6WKXBkRdG.webp',
                    'gambar3' => 'gambar3/oBEf6qfH9zUPwjJkqg4SMu8wbIEmUuAxPnHVh58v.webp',
                    'gambar4' => 'gambar4/7j7hG4XzQ3TKRnKGip0xiqCFqwrtYNpan7pYeBLb.webp',
                    'gambar5' => 'gambar5/6VAoSaafHQyOjIE0qmAhTJLzA49hv5ffiBlrWhhb.webp',]);
                car::create([
                    'slug' => '6DdMCzZfL5dBeIqkhQSq9JeIDjhTkZSJ3H79KKx08ohoggF8Y8',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '8',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    'no_polisi' => 'bl0024pg',
                    'deskripsi' => NULL,'kata_kunci' => 'Toyota Avanza Veloz, 2017 sampai 2018, cukup, cukup, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertalite, 300rb sampai 400rb/hari, ',
                    'gambar1' => 'gambar1/13VhOyQweqsaz4jtoSrFm4csoSGGIgos1NTy1z2D.webp',
                    'gambar2' => 'gambar2/C7CapFfzR5Np5o9BAgWtSzfCidr77jc6WKXBkRdG.webp',
                    'gambar3' => 'gambar3/oBEf6qfH9zUPwjJkqg4SMu8wbIEmUuAxPnHVh58v.webp',
                    'gambar4' => 'gambar4/7j7hG4XzQ3TKRnKGip0xiqCFqwrtYNpan7pYeBLb.webp',
                    'gambar5' => 'gambar5/6VAoSaafHQyOjIE0qmAhTJLzA49hv5ffiBlrWhhb.webp',]);
                car::create([
                    'slug' => 'MvghQtr9WTeYzpADRa2Q4fQPeIoGUJBHqwGu3lGxXMlk3FPN8B',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '43',
                    'stok' => 'standby',
                    'no_polisi' => 'bl0025pg',
                    'deskripsi' => NULL,'kata_kunci' => 'Toyota Avanza Type G, 2021 sampai 2022, sangat baik, sangat baik, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertalite, 300rb sampai 400rb/hari, ',
                    'gambar1' => 'gambar1/Puw3nzRPRs849Ui0GqNYYTXMFIGYEsR09Yojm59y.webp',
                    'gambar2' => 'gambar2/47WmiU885TX9M3CxdEtpWcGPBe9kCn7hLDfOl3yl.webp',
                    'gambar3' => 'gambar3/gEKJU8JliYG3hihfHFirYiUQWiFoUv9zArVvjGhN.webp',
                    'gambar4' => 'gambar4/PGSaSY5aOnzslXwXybCnjAUP2YjsSlHo6AJ5rcAn.webp',
                    'gambar5' => 'gambar5/FVTKyjxyAOzXBe04boPmg5kqvTGKjcYNHei9qAwP.webp',]);
                car::create([
                    'slug' => '01O3QB1o0pP3QIGy9fx5piGmF8KIQ90IilUnLTiKgQILYp7KHr',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '14',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '29',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    'no_polisi' => 'bl0026pg',
                    'deskripsi' => '<div>.</div>',
                    'kata_kunci' => 'Toyota Avanza Type G, 2015 sampai 2016, cukup, cukup, 7 sampai 8 orang, 1301cc sampai 1400cc, Pertalite, 300rb sampai 400rb/hari, ',
                    'gambar1' => 'gambar1/2hrNsWV7vi3xBWvsjtyD7Eci8W2cs8yYWkGnoiLP.webp',
                    'gambar2' => 'gambar2/ZDk5ATxqCQJgINuSZj234kSmxDcMWhaOAEFU7SmV.webp',
                    'gambar3' => 'gambar3/RKUQwOzwPGylxrLOd8Wg95En6p7vt6Z5E3oACHDE.webp',
                    'gambar4' => 'gambar4/O3VHlBwgF0BORhbOzNXMOPUd6SihVNLjIiMADixx.webp',
                    'gambar5' => 'gambar5/RgIQhSZHOSuV0E5AZBa415nl38swQy8ZwipqLbrO.webp',]);
                car::create([
                    'slug' => 'Z7VpROrYNeIXnWzzUfwD8FD8qH2ghcjVi9Qi4k4Q2I9LSwHvOC',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '29',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    'no_polisi' => 'bl0027pg',
                    'deskripsi' => '<div>.</div>',
                    'kata_kunci' => 'Toyota Avanza Type G, 2017 sampai 2018, cukup, cukup, 7 sampai 8 orang, 1301cc sampai 1400cc, Pertalite, 300rb sampai 400rb/hari, ',
                    'gambar1' => 'gambar1/xksYlnjzKNab7ztkSNHG0VYHwHXQJvpRE2XYLGCv.webp',
                    'gambar2' => 'gambar2/u0diFyJuZFai7ZLgRyVrSQAVnnjXKPLetn9jXJCS.webp',
                    'gambar3' => 'gambar3/SvkZmIebhDTlO4iLjmR3fsEWLCy5EagZllnXHBa1.webp',
                    'gambar4' => 'gambar4/JD9mMR7PcClN8Qsjz0bZBUHP4fZhNDeQLQaNsrYy.webp',
                    'gambar5' => 'gambar5/TwPCE5mGQXeC6yGg15VXBjJt2fDFXK6t9ymij0ly.webp',]);
                car::create([
                    'slug' => 'SpMYHwXIDo2Mqc4NzdjdssrxaVAyNKCKpxo1PhhmZwPGGzNBqg',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '29',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    'no_polisi' => 'bl0028pg',
                    'deskripsi' => NULL,'kata_kunci' => 'Toyota Avanza Type G, 2017 sampai 2018, cukup, cukup, 7 sampai 8 orang, 1301cc sampai 1400cc, Pertalite, 300rb sampai 400rb/hari, ',
                    'gambar1' => 'gambar1/xksYlnjzKNab7ztkSNHG0VYHwHXQJvpRE2XYLGCv.webp',
                    'gambar2' => 'gambar2/u0diFyJuZFai7ZLgRyVrSQAVnnjXKPLetn9jXJCS.webp',
                    'gambar3' => 'gambar3/SvkZmIebhDTlO4iLjmR3fsEWLCy5EagZllnXHBa1.webp',
                    'gambar4' => 'gambar4/JD9mMR7PcClN8Qsjz0bZBUHP4fZhNDeQLQaNsrYy.webp',
                    'gambar5' => 'gambar5/TwPCE5mGQXeC6yGg15VXBjJt2fDFXK6t9ymij0ly.webp',]);
                car::create([
                    'slug' => 'p0SRfXj5jnaxoUke2dBbsyfLMSOLYqjbV4q1su5k9CciTkVa03',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '14',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '29',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    'no_polisi' => 'bl0029pg',
                    'deskripsi' => NULL,'kata_kunci' => 'Toyota Avanza Type G, 2015 sampai 2016, cukup, cukup, 7 sampai 8 orang, 1301cc sampai 1400cc, Pertalite, 300rb sampai 400rb/hari, ',
                    'gambar1' => 'gambar1/2hrNsWV7vi3xBWvsjtyD7Eci8W2cs8yYWkGnoiLP.webp',
                    'gambar2' => 'gambar2/ZDk5ATxqCQJgINuSZj234kSmxDcMWhaOAEFU7SmV.webp',
                    'gambar3' => 'gambar3/RKUQwOzwPGylxrLOd8Wg95En6p7vt6Z5E3oACHDE.webp',
                    'gambar4' => 'gambar4/O3VHlBwgF0BORhbOzNXMOPUd6SihVNLjIiMADixx.webp',
                    'gambar5' => 'gambar5/RgIQhSZHOSuV0E5AZBa415nl38swQy8ZwipqLbrO.webp',]);
                car::create([
                    'slug' => 'nc6JO5jIJDU3daaY23xK52lqTHI8dPMMMxMJlfZRmAWvjxJcz3',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '28',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    'no_polisi' => 'bl0030pg',
                    'deskripsi' => NULL,'kata_kunci' => 'Toyota Avanza Type G, 2010 sampai 2012, cukup, cukup, 7 sampai 8 orang, dibawah 1300cc, Pertalite, 300rb sampai 400rb/hari, ',
                    'gambar1' => 'gambar1/qAmVdeYgxahynKouaOZIgVQYPz4TBK32ky2dlDhU.webp',
                    'gambar2' => 'gambar2/URLYjMGALlDHCwMbpAvhBNS3tkVUbSju8bdjKO7Y.webp',
                    'gambar3' => 'gambar3/IFzF9N1xNPStON5T6eGEaXVI1YMkPHj72mbBVW8k.webp',
                    'gambar4' => 'gambar4/g7DzX1jSLSslSP0Rn4zvwebEPzlUdj9ackiXesPO.webp',
                    'gambar5' => 'gambar5/dtYBvpcDOIc5QRZdLzoL8qROKWaciCBkfeEduZZU.webp',]);
                car::create([
                    'slug' => '6Aq2sVyIJUbHDO7UkNWdVaLGZyO41eXNugb3LJsFLMGu45XGda',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '28',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    'no_polisi' => 'bl0031pg',
                    'deskripsi' => NULL,'kata_kunci' => 'Toyota Avanza Type G, 2010 sampai 2012, cukup, cukup, 7 sampai 8 orang, dibawah 1300cc, Pertalite, 300rb sampai 400rb/hari, ',
                    'gambar1' => 'gambar1/qAmVdeYgxahynKouaOZIgVQYPz4TBK32ky2dlDhU.webp',
                    'gambar2' => 'gambar2/URLYjMGALlDHCwMbpAvhBNS3tkVUbSju8bdjKO7Y.webp',
                    'gambar3' => 'gambar3/IFzF9N1xNPStON5T6eGEaXVI1YMkPHj72mbBVW8k.webp',
                    'gambar4' => 'gambar4/g7DzX1jSLSslSP0Rn4zvwebEPzlUdj9ackiXesPO.webp',
                    'gambar5' => 'gambar5/dtYBvpcDOIc5QRZdLzoL8qROKWaciCBkfeEduZZU.webp',]);
                car::create([
                    'slug' => '8npRUkxA3VDAj4q3k8x7WYWvrMRhzIBV1Xhnm2l05lVAbZ95Pj',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '32',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '39',
                    'stok' => 'standby',
                    'no_polisi' => 'bl0032pg',
                    'deskripsi' => NULL,'kata_kunci' => 'Toyota Kijang Innova, 2021 sampai 2022, sangat baik, sangat baik, 7 sampai 8 orang, diatas 1600cc, Solar, 501rb sampai 600rb/hari, ',
                    'gambar1' => 'gambar1/W09VHH1XeDTfw2WN8eVUN32F7OzTdeOoE33FYTl7.webp',
                    'gambar2' => 'gambar2/eVFRYRGEYL61RV4I446SVs5JmE9dR9DbPB4FtSgg.webp',
                    'gambar3' => 'gambar3/LFGpfI8u4J2G6bcbUWfwDe42Q6ZJSXKMcJ48a6UL.webp',
                    'gambar4' => 'gambar4/9mGSrsCuT08s4M2qymXhXxTHDDOypD3Q7ES7eZVf.webp',
                    'gambar5' => 'gambar5/y2iLtF3LNdHiLsvKDEAcW7IKlkh6Vd3MnWe5yBUY.webp',]);
                car::create([
                    'slug' => 'a1FE43h6Vj55TOWl2x9HBZbijdOV4YaradtaAoJxD49NlQI5E4',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '32',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '39',
                    'stok' => 'standby',
                    'no_polisi' => 'bl0033pg',
                    'deskripsi' => NULL,'kata_kunci' => 'Toyota Kijang Innova, 2021 sampai 2022, sangat baik, sangat baik, 7 sampai 8 orang, diatas 1600cc, Solar, 501rb sampai 600rb/hari, ',
                    'gambar1' => 'gambar1/W09VHH1XeDTfw2WN8eVUN32F7OzTdeOoE33FYTl7.webp',
                    'gambar2' => 'gambar2/eVFRYRGEYL61RV4I446SVs5JmE9dR9DbPB4FtSgg.webp',
                    'gambar3' => 'gambar3/LFGpfI8u4J2G6bcbUWfwDe42Q6ZJSXKMcJ48a6UL.webp',
                    'gambar4' => 'gambar4/9mGSrsCuT08s4M2qymXhXxTHDDOypD3Q7ES7eZVf.webp',
                    'gambar5' => 'gambar5/y2iLtF3LNdHiLsvKDEAcW7IKlkh6Vd3MnWe5yBUY.webp',]);
                car::create([
                    'slug' => '6hZWL8AvQ1IaO0iGOtk9fd2ogZynZUBZeS9Tb2ZzDHbCNgH9oG',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '16',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '32',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '42',
                    'stok' => 'standby',
                    'no_polisi' => 'bl0034pg',
                    'deskripsi' => NULL,'kata_kunci' => 'Toyota Kijang Innova, 2019 sampai 2020, cukup, cukup, 7 sampai 8 orang, diatas 1600cc, Solar, 501rb sampai 600rb/hari, ',
                    'gambar1' => 'gambar1/k68qWAyzL2Nrwyj8aBXuWAzVSxKCFu5kjwRynoiy.webp',
                    'gambar2' => 'gambar2/m7l0vXZD7Dn4fnOuwj9rpucBBJ7MNHqFn3q8qU5e.webp',
                    'gambar3' => 'gambar3/OnPTj7TAMWFs6DfRFvBPL2zu7H8n9hshsUjT2eLK.webp',
                    'gambar4' => 'gambar4/HHnZhXMD3a9nkiWvD8Mp5Ll7xrHH61u0HD3BHgYV.webp',
                    'gambar5' => 'gambar5/9oXQVkzoRsHx7NwOQP8v688Txf0OuK2bWJIbnib7.webp',]);
                car::create([
                    'slug' => '21DW2wqHBCZDAVTW9Tw7z1sK4vwGCn2jVJx7LAvRZ2uS3kLBhN',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '16',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '32',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '42',
                    'stok' => 'standby',
                    'no_polisi' => 'bl0035pg',
                    'deskripsi' => NULL,'kata_kunci' => 'Toyota Kijang Innova, 2019 sampai 2020, cukup, cukup, 7 sampai 8 orang, diatas 1600cc, Solar, 501rb sampai 600rb/hari, ',
                    'gambar1' => 'gambar1/k68qWAyzL2Nrwyj8aBXuWAzVSxKCFu5kjwRynoiy.webp',
                    'gambar2' => 'gambar2/m7l0vXZD7Dn4fnOuwj9rpucBBJ7MNHqFn3q8qU5e.webp',
                    'gambar3' => 'gambar3/OnPTj7TAMWFs6DfRFvBPL2zu7H8n9hshsUjT2eLK.webp',
                    'gambar4' => 'gambar4/HHnZhXMD3a9nkiWvD8Mp5Ll7xrHH61u0HD3BHgYV.webp',
                    'gambar5' => 'gambar5/9oXQVkzoRsHx7NwOQP8v688Txf0OuK2bWJIbnib7.webp',]);
                car::create([
                    'slug' => '8Ji7oGvrBWvLpVtOlORxUwHRY9UqB8yOUZqZ9AppB2OhvnpA3l',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '4',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '32',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '38',
                    'stok' => 'standby',
                    'no_polisi' => 'bl0036pg',
                    'deskripsi' => NULL,'kata_kunci' => 'Mitsubishi Pajero Sport, 2017 sampai 2018, cukup, cukup, 7 sampai 8 orang, diatas 1600cc, Solar, diatas 600rb/hari, ',
                    'gambar1' => 'gambar1/iEsU7skyfzU5jk0axQImFNKaqPISfzB2EdDCqOeL.webp',
                    'gambar2' => 'gambar2/6TeySquWMJYaWSRZVrhlrBw8Do8DPCRNhmcY1wo2.webp',
                    'gambar3' => 'gambar3/Wad8at1L2D49yVMk3lfKmbOf3cE9cDEwssTi8JIp.webp',
                    'gambar4' => 'gambar4/yErPWW6GnoLFz5J8IXJMClSN6JEc9yT7ugxIp1ZX.webp',
                    'gambar5' => 'gambar5/hkFm6zHRd6zAZQJTKgW0pjAudB2ZE7K3BAyLgrPx.webp',]);
                car::create([
                    'slug' => '5qmwhsNTTJrLrKaCsL2omLFyDtfQmVq1wOSGYPcKP3vE1k1sSD',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '4',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '32',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '38',
                    'stok' => 'standby',
                    'no_polisi' => 'bl0037pg',
                    'deskripsi' => NULL,'kata_kunci' => 'Mitsubishi Pajero Sport, 2017 sampai 2018, cukup, cukup, 7 sampai 8 orang, diatas 1600cc, Solar, diatas 600rb/hari, ',
                    'gambar1' => 'gambar1/iEsU7skyfzU5jk0axQImFNKaqPISfzB2EdDCqOeL.webp',
                    'gambar2' => 'gambar2/6TeySquWMJYaWSRZVrhlrBw8Do8DPCRNhmcY1wo2.webp',
                    'gambar3' => 'gambar3/Wad8at1L2D49yVMk3lfKmbOf3cE9cDEwssTi8JIp.webp',
                    'gambar4' => 'gambar4/yErPWW6GnoLFz5J8IXJMClSN6JEc9yT7ugxIp1ZX.webp',
                    'gambar5' => 'gambar5/hkFm6zHRd6zAZQJTKgW0pjAudB2ZE7K3BAyLgrPx.webp',]);
                car::create([
                    'slug' => 'l8uZWh8heMIgJg43IwELL9rL1BlmyKaAlpg66snGxKC2CoGZ28',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '10',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '43',
                    'stok' => 'standby',
                    'no_polisi' => 'bl0038pg',
                    'deskripsi' => NULL,'kata_kunci' => 'Toyota Rush, 2017 sampai 2018, cukup, cukup, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertalite, 351rb sampai 400rb/hari, ',
                    'gambar1' => 'gambar1/AiwYbz5NkSR6Z4whQ7aQzQ38y3ozjlbgNlxdcuGy.webp',
                    'gambar2' => 'gambar2/hDqjrNwqj5fDyOEdNigOsCnUYcgImoXl64vPlk0b.webp',
                    'gambar3' => 'gambar3/Z4SFi08Dt4MH4ZGEjN2XB5wLi35fAQ0Fa9SEgFxv.webp',
                    'gambar4' => 'gambar4/AF1wXP52TmwfYDHpQ8ol7mms6Gvg4HM2t4zsk2fZ.webp',
                    'gambar5' => 'gambar5/pn9ZLcReUZjhpPRLzZpWtHqwjuJs28uNTVGYpmqw.webp',]);
                car::create([
                    'slug' => 'ao0PpRKdGJcj5BlokD9Q4vFHHQMPctKkCEyVut2geBvFUQcG6e',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '10',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '43',
                    'stok' => 'standby',
                    'no_polisi' => 'bl0039pg',
                    'deskripsi' => NULL,'kata_kunci' => 'Toyota Rush, 2017 sampai 2018, cukup, cukup, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertalite, 300rb sampai 400rb/hari, ',
                    'gambar1' => 'gambar1/AiwYbz5NkSR6Z4whQ7aQzQ38y3ozjlbgNlxdcuGy.webp',
                    'gambar2' => 'gambar2/hDqjrNwqj5fDyOEdNigOsCnUYcgImoXl64vPlk0b.webp',
                    'gambar3' => 'gambar3/Z4SFi08Dt4MH4ZGEjN2XB5wLi35fAQ0Fa9SEgFxv.webp',
                    'gambar4' => 'gambar4/AF1wXP52TmwfYDHpQ8ol7mms6Gvg4HM2t4zsk2fZ.webp',
                    'gambar5' => 'gambar5/pn9ZLcReUZjhpPRLzZpWtHqwjuJs28uNTVGYpmqw.webp',]);
                car::create([
                    'slug' => 'hvVEwKCZkTJkpyT0VINrw638TJxMzbmp4cm9Y2CNtuh9cUhqkX',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '10',
                    'Tahun_Produksi_id' => '14',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '32',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '43',
                    'stok' => 'standby',
                    'no_polisi' => 'bl0040pg',
                    'deskripsi' => NULL,'kata_kunci' => 'Toyota Rush, 2015 sampai 2016, cukup, cukup, 7 sampai 8 orang, diatas 1600cc, Pertalite, 351rb sampai 400rb/hari, ',
                    'gambar1' => 'gambar1/FFPg5RB5Qd3Fzsd7XENtapvIf463uQmbgCZFlZ8U.webp',
                    'gambar2' => 'gambar2/s7DDjXytLsduUCCX5J2zUZTIRfcqlzPXGmLabUAP.webp',
                    'gambar3' => 'gambar3/vKV18Xl8zyB7LYrTRl8bSYUQ4CQKkSRT83Q7g3Vj.webp',
                    'gambar4' => 'gambar4/xtWUebGBXesoQJJCTrrzDZBmKtRmFpXMj4ssuT99.webp',
                    'gambar5' => 'gambar5/ER5OJIOaU5bt8NHdAqIlCtWTIdGNOcUwpYfPs3cG.webp',]);
                car::create([
                    'slug' => '2KTx6HAS8FhLNJeXXCHHRkMmExq77poAsibXUE6nW9ynvCRvow',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '10',
                    'Tahun_Produksi_id' => '14',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '43',
                    'stok' => 'standby',
                    'no_polisi' => 'bl0041pg',
                    'deskripsi' => NULL,'kata_kunci' => 'Toyota Rush, 2015 sampai 2016, cukup, cukup, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertalite, 300rb sampai 400rb/hari, ',
                    'gambar1' => 'gambar1/FFPg5RB5Qd3Fzsd7XENtapvIf463uQmbgCZFlZ8U.webp',
                    'gambar2' => 'gambar2/s7DDjXytLsduUCCX5J2zUZTIRfcqlzPXGmLabUAP.webp',
                    'gambar3' => 'gambar3/vKV18Xl8zyB7LYrTRl8bSYUQ4CQKkSRT83Q7g3Vj.webp',
                    'gambar4' => 'gambar4/xtWUebGBXesoQJJCTrrzDZBmKtRmFpXMj4ssuT99.webp',
                    'gambar5' => 'gambar5/ER5OJIOaU5bt8NHdAqIlCtWTIdGNOcUwpYfPs3cG.webp',]);
                car::create([
                    'slug' => 'TIu2EyuFifHQsPoOAF8U0WEME3r8bDNX6GhZfzY35WEiyvXDzv',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '5',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '32',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '38',
                    'stok' => 'standby',
                    'no_polisi' => 'bl0042pg',
                    'deskripsi' => '<div>.</div>',
                    'kata_kunci' => 'Mitsubishi Triton, 2021 sampai 2022, sangat baik, sangat baik, 5 sampai 6 orang , diatas 1600cc, Solar, diatas 600rb/hari, ',
                    'gambar1' => 'gambar1/PnQHgtRVKyxnWBGzehjO3Gg5AJA0SwmRxnDHgG3Z.webp',
                    'gambar2' => 'gambar2/hW9UDZjsQ0seGCoruTyUqfUcwf2xmT9QL0m1uXqy.webp',
                    'gambar3' => 'gambar3/wHgyOaeJrdy2qGBuemGU2qWwYmoaA7tZSqTHfTw2.webp',
                    'gambar4' => 'gambar4/kz5SRQLBWedF7TFwJjdXtyT8chEeUyY1kY7yGI6N.webp',
                    'gambar5' => 'gambar5/9C0oqLRbmV39r0WnUlQb7dsd77tpZozE0eWVr9GQ.webp',]);
                car::create([
                    'slug' => '1MKmVwnU5tX8ayacGMxxcomym9ixEDeUeMcme9P8SSFyoYTPAV',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '5',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '32',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '38',
                    'stok' => 'standby',
                    'no_polisi' => 'bl0043lh',
                    'deskripsi' => '<div>.</div>',
                    'kata_kunci' => 'Mitsubishi Triton, 2021 sampai 2022, cukup, cukup, 5 sampai 6 orang , diatas 1600cc, Solar, diatas 600rb/hari, ',
                    'gambar1' => 'gambar1/PnQHgtRVKyxnWBGzehjO3Gg5AJA0SwmRxnDHgG3Z.webp',
                    'gambar2' => 'gambar2/hW9UDZjsQ0seGCoruTyUqfUcwf2xmT9QL0m1uXqy.webp',
                    'gambar3' => 'gambar3/wHgyOaeJrdy2qGBuemGU2qWwYmoaA7tZSqTHfTw2.webp',
                    'gambar4' => 'gambar4/kz5SRQLBWedF7TFwJjdXtyT8chEeUyY1kY7yGI6N.webp',
                    'gambar5' => 'gambar5/9C0oqLRbmV39r0WnUlQb7dsd77tpZozE0eWVr9GQ.webp',]);
                car::create([
                    'slug' => 'SF2DKZGjVtNOOfWoeBXXbeiVgqaSwiOVPQzLWams5uIdM32sgQ',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '1',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '43',
                    'stok' => 'standby',
                    'no_polisi' => 'bl00044lh',
                    'deskripsi' => '<div>None</div>',
                    'kata_kunci' => 'Daihatsu Terios, 2021 sampai 2022, sangat baik, sangat baik, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertalite, 351rb sampai 400rb/hari, ',
                    'gambar1' => 'gambar1/kPvdn9SB34z3WSzVaa9x18VG1TEpNnDD4uxI6oad.webp',
                    'gambar2' => 'gambar2/6MW9VwdAqWuuk94tfLN6zsaUXk0IRajXqJUibeXk.webp',
                    'gambar3' => 'gambar3/FND3ZHaw10qDfjrfSum1Cy4yzX9XYcch7a0FqUHw.webp',
                    'gambar4' => 'gambar4/UB2R6QnUEmwf6n3STdVD4dw9n0m2TrufvOFmEZ6f.webp',
                    'gambar5' => 'gambar5/Epe0LI2Q7iNUzPVJXiGClJBXFCJN7RHRuPRWb3uL.webp',]);
                car::create([
                    'slug' => 'WDBvjBP22UMrGhi5lGTU1czz8ppuDba9OQKD0Y74VyEka613Rj',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '1',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '43',
                    'stok' => 'standby',
                    'no_polisi' => 'bl00045lh',
                    'deskripsi' => NULL,'kata_kunci' => 'Daihatsu Terios, 2021 sampai 2022, cukup, cukup, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertalite, 300rb sampai 400rb/hari, ',
                    'gambar1' => 'gambar1/kPvdn9SB34z3WSzVaa9x18VG1TEpNnDD4uxI6oad.webp',
                    'gambar2' => 'gambar2/6MW9VwdAqWuuk94tfLN6zsaUXk0IRajXqJUibeXk.webp',
                    'gambar3' => 'gambar3/FND3ZHaw10qDfjrfSum1Cy4yzX9XYcch7a0FqUHw.webp',
                    'gambar4' => 'gambar4/UB2R6QnUEmwf6n3STdVD4dw9n0m2TrufvOFmEZ6f.webp',
                    'gambar5' => 'gambar5/Epe0LI2Q7iNUzPVJXiGClJBXFCJN7RHRuPRWb3uL.webp',]);
                car::create([
                    'slug' => 'CQpEcer0J5TgGEfSDbDhDVhEUYuxGqJ8RqvCU2mLfY2uzqSBfs',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '1',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '43',
                    'stok' => 'standby',
                    'no_polisi' => 'bl00046pg',
                    'deskripsi' => NULL,'kata_kunci' => 'Daihatsu Terios, 2021 sampai 2022, cukup, cukup, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertalite, 300rb sampai 400rb/hari, ',
                    'gambar1' => 'gambar1/kPvdn9SB34z3WSzVaa9x18VG1TEpNnDD4uxI6oad.webp',
                    'gambar2' => 'gambar2/6MW9VwdAqWuuk94tfLN6zsaUXk0IRajXqJUibeXk.webp',
                    'gambar3' => 'gambar3/FND3ZHaw10qDfjrfSum1Cy4yzX9XYcch7a0FqUHw.webp',
                    'gambar4' => 'gambar4/UB2R6QnUEmwf6n3STdVD4dw9n0m2TrufvOFmEZ6f.webp',
                    'gambar5' => 'gambar5/Epe0LI2Q7iNUzPVJXiGClJBXFCJN7RHRuPRWb3uL.webp',]);
                car::create([
                    'slug' => 't1SSeLJeTvSsImUVLuksZcWryQBqqDL8MwYMpJcbimqWd7WcY0',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '1',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    'no_polisi' => 'bl00047pg',
                    'deskripsi' => '<div>None</div>',
                    'kata_kunci' => 'Daihatsu Terios, 2017 sampai 2018, cukup, cukup, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertalite, 300rb sampai 350rb/hari, ',
                    'gambar1' => 'gambar1/yGwXJkyGRl8aG6qjfLl0H5Mll7PBhmsO10Nhgwsd.webp',
                    'gambar2' => 'gambar2/tOXUCZatMBL8MexA4dBUrM3H3XrMn1uc8kVJR9kd.webp',
                    'gambar3' => 'gambar3/P58S6CLiDUYWxAOa7oy1qIHRGFAkMV65rIMOns2d.webp',
                    'gambar4' => 'gambar4/xmH09MWcCE7ErRP4gUC89bugqrO0UsgDvZugK5a2.webp',
                    'gambar5' => 'gambar5/BZUzrxHlZ6Q4poPrJKwpF0u3KQK4Iuduw8iQj0qK.webp',]);
                car::create([
                    'slug' => 'ZB7dUcIKOfjm9apQWIlKc5iQ46hfPNV1WdxqZ9VoMuKx2fCALg',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '1',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    'no_polisi' => 'bl00048pg',
                    'deskripsi' => NULL,'kata_kunci' => 'Daihatsu Terios, 2017 sampai 2018, cukup, cukup, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertalite, 300rb sampai 400rb/hari, ',
                    'gambar1' => 'gambar1/yGwXJkyGRl8aG6qjfLl0H5Mll7PBhmsO10Nhgwsd.webp',
                    'gambar2' => 'gambar2/tOXUCZatMBL8MexA4dBUrM3H3XrMn1uc8kVJR9kd.webp',
                    'gambar3' => 'gambar3/P58S6CLiDUYWxAOa7oy1qIHRGFAkMV65rIMOns2d.webp',
                    'gambar4' => 'gambar4/xmH09MWcCE7ErRP4gUC89bugqrO0UsgDvZugK5a2.webp',
                    'gambar5' => 'gambar5/BZUzrxHlZ6Q4poPrJKwpF0u3KQK4Iuduw8iQj0qK.webp',]);
                car::create([
                    'slug' => 'F903jcBvmaSxnVJGlmJF7Zhk01woNHmE5gSXuAuFvkZ6JAOODw',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '2',
                    'Tahun_Produksi_id' => '16',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '29',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    'no_polisi' => 'bl00049pg',
                    'deskripsi' => NULL,'kata_kunci' => 'Daihatsu Xenia, 2019 sampai 2020, cukup, cukup, 7 sampai 8 orang, 1301cc sampai 1400cc, Pertalite, 300rb sampai 350rb/hari, ',
                    'gambar1' => 'gambar1/8HbJLJ2d1fzEvT2lkSNMvCLirQNh6RxLPmhDcWJH.webp',
                    'gambar2' => 'gambar2/LVEb3LrOIKvWK4ldXoXz8hG7HGuPexUlmejaT4F0.webp',
                    'gambar3' => 'gambar3/Mf5NmPXklHhQK2cSWxZ94Uu6DvpyZcXFnFLRlFd8.webp',
                    'gambar4' => 'gambar4/obKxGN7rRdZIsAzNdLiRLygK1qyOlowEFgmA04WH.webp',
                    'gambar5' => 'gambar5/AlZEav7FpLrOYQpl1wk4NAZrO2G3DTq1ALS8vgQd.webp',]);
                car::create([
                    'slug' => 'fn75etMTW3Q79T3Dr8iqZU2GZ6gqczYljiwCtqQAY1kUv0Z8Po',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '2',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '29',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    'no_polisi' => 'bl00050pg',
                    'deskripsi' => NULL,'kata_kunci' => 'Daihatsu Xenia, 2017 sampai 2018, cukup, cukup, 7 sampai 8 orang, 1301cc sampai 1400cc, Pertalite, 300rb sampai 350rb/hari, ',
                    'gambar1' => 'gambar1/Ft3Vh5oU7xVMv4n8ndNTy9tBdZjSrC0aO4kWzK5r.webp',
                    'gambar2' => 'gambar2/4s5XlvPI9tFqi1Zh57XhtlV9EyxMxgNyz3nIetc0.webp',
                    'gambar3' => 'gambar3/uvhS0TBPJ9pH0At36JhubH6aABF38Cuj4FWhqYx9.webp',
                    'gambar4' => 'gambar4/SAhfMiitB1lAXIpYaFbsB0UGFT6niDZwtz3IMio2.webp',
                    'gambar5' => 'gambar5/n0pBrdjZMgU9cUTYiL11spKRdLrHFMpvvFflSlPO.webp',]);
                car::create([
                    'slug' => 'NpvbV7G5KV1VJQq2A2EIzCtQTwfRVYmcGagnfMfa0qDffk0A1X',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '2',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '29',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    'no_polisi' => 'bl00051pg',
                    'deskripsi' => NULL,'kata_kunci' => 'Daihatsu Xenia, 2017 sampai 2018, cukup, cukup, 7 sampai 8 orang, 1301cc sampai 1400cc, Pertalite, 300rb sampai 400rb/hari, ',
                    'gambar1' => 'gambar1/Ft3Vh5oU7xVMv4n8ndNTy9tBdZjSrC0aO4kWzK5r.webp',
                    'gambar2' => 'gambar2/4s5XlvPI9tFqi1Zh57XhtlV9EyxMxgNyz3nIetc0.webp',
                    'gambar3' => 'gambar3/uvhS0TBPJ9pH0At36JhubH6aABF38Cuj4FWhqYx9.webp',
                    'gambar4' => 'gambar4/SAhfMiitB1lAXIpYaFbsB0UGFT6niDZwtz3IMio2.webp',
                    'gambar5' => 'gambar5/n0pBrdjZMgU9cUTYiL11spKRdLrHFMpvvFflSlPO.webp',]);
                car::create([
                    'slug' => 'kqfsme7gA9Xb0oJmBWEtHhm0lMpl3IjnubafZ4HqnT7oZzOFb3',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '2',
                    'Tahun_Produksi_id' => '13',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '28',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    'no_polisi' => 'bl00052pg',
                    'deskripsi' => NULL,'kata_kunci' => 'Daihatsu Xenia, 2013 sampai 2014, cukup, cukup, 7 sampai 8 orang, dibawah 1300cc, Pertalite, 300rb sampai 350rb/hari, ',
                    'gambar1' => 'gambar1/kQKpmTFKz9u3ROjUTa8F8azXooedwBUgj3bSKfDR.webp',
                    'gambar2' => 'gambar2/wVGudSsAK3pq5qAvZm3cfK0KeCKfXMCaLnaryW5B.webp',
                    'gambar3' => 'gambar3/603Kq3OirQ4XEoB8oN1Ss5jJMlaOQq9GWV5AdyKS.webp',
                    'gambar4' => 'gambar4/EO9cVTyEhGFnHlCpAiHJWviZOyS8s7iaPVeuk1Tq.webp',
                    'gambar5' => 'gambar5/MuI3HTNJGRRpyBIK3frRSxlR6WLFYp3TYOt3jsV9.webp',]);
                car::create([
                    'slug' => '4B0ITY1ZrtDFdnOV3nP7MWAyxatZpcpzrF8dZnHA3TM1KgN3tO',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '2',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '28',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    'no_polisi' => 'bl00053pg',
                    'deskripsi' => NULL,'kata_kunci' => 'Daihatsu Xenia, 2010 sampai 2012, cukup, cukup, 7 sampai 8 orang, dibawah 1300cc, Pertalite, 300rb sampai 350rb/hari, ',
                    'gambar1' => 'gambar1/4kP3lXFzZcM2FWQSpa7Yt3DnZjVaZs8ODFfvZvX3.webp',
                    'gambar2' => 'gambar2/gEVvV8dPcSEQwEvYhqXSTHEovNI7lyyVLR4r7K2k.webp',
                    'gambar3' => 'gambar3/GEBVTHCIDpV0vDA0G8bMIh25jHc8pY4RYeuTn4iO.webp',
                    'gambar4' => 'gambar4/DHCu2ygV9JHGWsKBem0Plxhv8Wn0UkuByX97Li2s.webp',
                    'gambar5' => 'gambar5/0XqRNInKAJVDxgkBCCRA9V8JVXSWFdGxsbE37lVC.webp',]);
                car::create([
                    'slug' => 'M9YUpwW4zVpV867kuE3afPteBKZ4PbhztlzsTV2Pquln0BMQLu',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '2',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '28',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    'no_polisi' => 'bl00054pg',
                    'deskripsi' => NULL,'kata_kunci' => 'Daihatsu Xenia, 2010 sampai 2012, cukup, cukup, 7 sampai 8 orang, dibawah 1300cc, Pertalite, 300rb sampai 400rb/hari, ',
                    'gambar1' => 'gambar1/4kP3lXFzZcM2FWQSpa7Yt3DnZjVaZs8ODFfvZvX3.webp',
                    'gambar2' => 'gambar2/gEVvV8dPcSEQwEvYhqXSTHEovNI7lyyVLR4r7K2k.webp',
                    'gambar3' => 'gambar3/GEBVTHCIDpV0vDA0G8bMIh25jHc8pY4RYeuTn4iO.webp',
                    'gambar4' => 'gambar4/DHCu2ygV9JHGWsKBem0Plxhv8Wn0UkuByX97Li2s.webp',
                    'gambar5' => 'gambar5/0XqRNInKAJVDxgkBCCRA9V8JVXSWFdGxsbE37lVC.webp',]);
                car::create([
                    'slug' => '8gQdW8namlS00eKgCeKpPXGafRdEDGcDAe7ol30TwgFGMqMOd6',
                    'user_id' => '3',
                    'shop_id' => '2',
                    'merk_id' => '2',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '28',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    'no_polisi' => 'bl00055pg',
                    'deskripsi' => NULL,'kata_kunci' => 'Daihatsu Xenia, 2010 sampai 2012, cukup, cukup, 7 sampai 8 orang, dibawah 1300cc, Pertalite, 300rb sampai 400rb/hari, ',
                    'gambar1' => 'gambar1/4kP3lXFzZcM2FWQSpa7Yt3DnZjVaZs8ODFfvZvX3.webp',
                    'gambar2' => 'gambar2/gEVvV8dPcSEQwEvYhqXSTHEovNI7lyyVLR4r7K2k.webp',
                    'gambar3' => 'gambar3/GEBVTHCIDpV0vDA0G8bMIh25jHc8pY4RYeuTn4iO.webp',
                    'gambar4' => 'gambar4/DHCu2ygV9JHGWsKBem0Plxhv8Wn0UkuByX97Li2s.webp',
                    'gambar5' => 'gambar5/0XqRNInKAJVDxgkBCCRA9V8JVXSWFdGxsbE37lVC.webp',
                ]);
            //
            // dummy
                // Pasee
                    car::create([
                        'slug' => 'mMEDzP4bXhwkbJmAdvGCSkRBR7ZTqV0v6CkBJ2Eepo4zfxMIRb',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '2',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3932ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Xenia, 2013 sampai 2014, Baik, kurang baik, dibawah 5 orang, 1501cc sampai 1600cc, Pertamax, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'u6tIdeoopgoWUjKLQd0cmbHpvPeJLcZ8icXRE0KVltXgKaae9R',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '15',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7316ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Xpander, 2021 sampai 2022, kurang baik, sangat baik, dibawah 5 orang, 1401cc sampai 1500cc, Pertamax Turbo, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => '8iY1CITlRJ4qolzjjyMmNhycJBvWJrMtiQgo99Y0UhnHYSvAeQ',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '13',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl8671ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Mobilio RS, 2015 sampai 2016, Baik, Baik, 7 sampai 8 orang, diatas 2000cc, Pertalite, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => '2cK14DUU59jqVp2VwKQY17eaCfvKXfuF75gf4opIE3UQt8s25k',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '2',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7071ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Xenia, 2013 sampai 2014, sangat baik, sangat baik, 5 sampai 6 orang, diatas 2000cc, Pertalite, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'lHqMgkcyCeVVr7zx9Pc7WqahvqB9sCG7zCLldTatBPl6AnAp9U',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '7',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl8388ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type G, dibawah 2010, kurang baik, Baik, 7 sampai 8 orang, 1501cc sampai 1600cc, Solar, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => 'UrWTsaGkvNfepjZSDAVfaOL4aZLDrZ7DJr4fbxY6bv1ask0HKg',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '13',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1405ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Mobilio RS, dibawah 2010, sangat baik, Baik, 7 sampai 8 orang, 1301cc sampai 1400cc, Solar, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => 'ZDKIkClKwbzzvoEFRV6CfSDQMv4RCj0F4TK62ifm4F86bYLev8',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '9',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7494ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Kijang Innova, dibawah 2010, sangat baik, Baik, dibawah 5 orang, 1401cc sampai 1500cc, Pertamax Turbo, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'z6FkAmwLphTlbvm1f5NjrVTVsBpE2U2UyKuxINkALoVJuALrGt',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '8',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6917ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Veloz, 2013 sampai 2014, kurang baik, sangat baik, 5 sampai 6 orang, 1401cc sampai 1500cc, Pertamax Turbo, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => 'tfs8hviWmEF4et1sUSkvl0Std8nWIeqkSLWWr9fyqtigrq29mw',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '9',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3735ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Kijang Innova, 2021 sampai 2022, Baik, sangat baik, diatas 8 orang, 1501cc sampai 1600cc, Solar, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => 'OWjawE0sml3JXimfxM9egbJioVkR4yoidOwdr1tC652Wo0MCi0',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '6',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1183ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type E, 2010 sampai 2012, kurang baik, kurang baik, diatas 8 orang, dibawah 1300cc, Solar, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => 'PLDOszfSbAKNOclRU2CHbbNwvHEG3Ay0fsOB8RQL4tKlw7cfJg',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '4',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl8407ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Pajero Sport, 2015 sampai 2016, kurang baik, Baik, 5 sampai 6 orang, dibawah 1300cc, Solar, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => 'IAMM46LHCOZJFYczpcdodrjLAKoeuXboyDtZcc1LbZFBdAmVFD',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '6',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9464ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type E, 2015 sampai 2016, Baik, sangat baik, dibawah 5 orang, diatas 2000cc, Pertalite, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => 'JOCgYCXfUm2d73zixBdBhd8xPDh7V7jcDGGwpZroX57EsPWBlu',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '4',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5111ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Pajero Sport, 2015 sampai 2016, sangat baik, Baik, diatas 8 orang, 1501cc sampai 1600cc, Solar, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => 'w4krSwVYYIVbnwWruNBoxtbcj4Corkr4aPzMfb2UKZ1zN3r1LU',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '13',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '44',
                        'stok' => 'standby',
                        'no_polisi' => 'bl2027ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Mobilio RS, 2019 sampai 2020, kurang baik, kurang baik, dibawah 5 orang, dibawah 1300cc, Pertamina DEX, dibawah 300rb/hari, ',]);
                    car::create([
                        'slug' => 'vFyqJCYpm7kf4ejLJwmJ7vkEeVsElLvFzSVqPyJoEm0NgIOxm3',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '7',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl4440ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type G, 2017 sampai 2018, kurang baik, kurang baik, dibawah 5 orang, 1501cc sampai 1600cc, Pertamax, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => 'PxdhBS5rb2LJQkb7CPGf0adM26GYM8TUg10whoXPljpbVwEeQU',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '7',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl4222ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type G, dibawah 2010, kurang baik, sangat baik, dibawah 5 orang, 1501cc sampai 1600cc, Pertalite, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => 'CPcfoNFRZDn4Q0UMdKxWiEfrhbDF2CdyoJuaWIMtu9L5Rq9JMb',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '13',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6017ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Mobilio RS, 2021 sampai 2022, sangat baik, kurang baik, 7 sampai 8 orang, 1601cc sampai 2000cc, Pertamax Turbo, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'aI74BvY4xIu7W8UzPIZZjgl3rXaKBnQAE6RUJGFbCn3VLID9eT',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '1',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3764ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Terios, dibawah 2010, sangat baik, Baik, diatas 8 orang, dibawah 1300cc, Pertamax, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => 'UmwDSW6bQAeFAC0p5PylDIzwUXbpfiYbFpnOoiN03n8gxSCl6R',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '13',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7900ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Mobilio RS, 2017 sampai 2018, Baik, sangat baik, 7 sampai 8 orang, 1601cc sampai 2000cc, Pertamina DEX, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => 'LdiueC7XzNVUDM7zDnHweFccUQ8ZMxZjZ417TsvP0ByPiwEVes',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '5',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl8210ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Triton, dibawah 2010, Baik, Baik, dibawah 5 orang, dibawah 1300cc, Pertalite, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => 'eEUGixIJcyllh1HcMnLzDmAebhMZhrkFSluXuHzlRb7Db0d36E',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '2',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6739ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Xenia, dibawah 2010, kurang baik, kurang baik, diatas 8 orang, 1301cc sampai 1400cc, Pertamax, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => 'vpdRY05GUrwSemTc54Ael3kJR0h0LdOVwkCdFL7iOibUPaGrgT',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '3',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl4707ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Jazz RS, 2017 sampai 2018, sangat baik, sangat baik, diatas 8 orang, 1501cc sampai 1600cc, Pertamina DEX, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => 'ZalupggQ4KGNxQSEPKeDl3Y5LVuGn87sZcR36z9u4B5BBbOcrh',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '15',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6566ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Xpander, 2015 sampai 2016, sangat baik, Baik, 5 sampai 6 orang, diatas 2000cc, Pertamax, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'xlFavVIClp4O2hFttSqG6ymflgyGW3T4GWay4PfzTn8kjGrow2',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '4',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6225ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Pajero Sport, 2015 sampai 2016, kurang baik, sangat baik, diatas 8 orang, 1401cc sampai 1500cc, Solar, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => '3mbWLF2KmdE31jPYOFoxZjZCBxyKxIv2diSt1ru7KScE0OJ3Ca',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '1',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1746ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Terios, 2010 sampai 2012, sangat baik, Baik, diatas 8 orang, diatas 2000cc, Pertamax Turbo, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => 'LIDl12D1orr28JcmJvpGwF97TLBsAlqAGpIG6ACGQMH0C6sNp4',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '5',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1289ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Triton, 2021 sampai 2022, kurang baik, kurang baik, 7 sampai 8 orang, 1301cc sampai 1400cc, Solar, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => 'yy1UgqVXs7CmL6IVgSgf1B66S0i69xQmZbuUUyr2BhaQDwhW4F',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '14',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '44',
                        'stok' => 'standby',
                        'no_polisi' => 'bl2334ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Calya, 2019 sampai 2020, kurang baik, kurang baik, dibawah 5 orang, 1501cc sampai 1600cc, Pertamina DEX, dibawah 300rb/hari, ',]);
                    car::create([
                        'slug' => 'n0pb6f2Kz7QOuVpl8UipZHsoPzkLl7VLKe84dSmZ0xeUC6JHae',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '12',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6191ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Suzuki Ertiga, dibawah 2010, sangat baik, sangat baik, 7 sampai 8 orang, diatas 2000cc, Pertamina DEX, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => 'XjjGN7Z5GmgnOpim9Hx7KMxtL0G5ttBobUhrYKq14mk1RsoWVV',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '8',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7631ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Veloz, 2021 sampai 2022, Baik, kurang baik, dibawah 5 orang, 1601cc sampai 2000cc, Pertalite, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => 'a82JF8bPWZT0F5cIus0winKA7JwmFci366m8ruL8QcGBzAq5GU',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '6',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1224ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type E, dibawah 2010, sangat baik, Baik, 5 sampai 6 orang, diatas 2000cc, Pertamax, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => '4XgX4RkJqNSY6smDLAmyXU9IfRJIU7dt1cHgVDJVGhnPCOXd1Y',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '3',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl4454ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Jazz RS, 2017 sampai 2018, Baik, sangat baik, dibawah 5 orang, 1401cc sampai 1500cc, Pertamax Turbo, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => '37zm2UrJnWPkPr39hJqwRnxczucUa7BbtM9C5GLGDtUEpmS7gM',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '14',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3009ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Calya, 2021 sampai 2022, kurang baik, kurang baik, 7 sampai 8 orang, dibawah 1300cc, Pertalite, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'W1NFIUskGWqdCnGXbsSJbC1d6qWHXA5vjtt8vBaVfJTkfgbtvp',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '10',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3294ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Rush, 2021 sampai 2022, kurang baik, sangat baik, 7 sampai 8 orang, 1301cc sampai 1400cc, Pertalite, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => 'fTnq6YOCaFngnO2Q1cGbLVEPErHq7G84BRvORMZfslWqu5AIrk',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '13',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6481ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Mobilio RS, 2013 sampai 2014, sangat baik, sangat baik, 5 sampai 6 orang, 1501cc sampai 1600cc, Pertamax, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => '2L3sK8nYg3YywceDuXUJRwIX0pcx6R99oPjWrx31lPXK0R5wNW',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '6',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl8834ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type E, 2010 sampai 2012, kurang baik, kurang baik, 5 sampai 6 orang, diatas 2000cc, Pertalite, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => '9Ee22n93NYUykLFff2xKPAiybmsWCHxrM3p1eflBP2bUAfbYeK',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '15',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7313ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Xpander, 2017 sampai 2018, sangat baik, kurang baik, diatas 8 orang, dibawah 1300cc, Pertalite, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => 'a8LvXL071rRcuV6lWt2iJkM1zRhugqwlai1xY1srMKDW8dIUeY',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '5',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6494ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Triton, dibawah 2010, Baik, sangat baik, dibawah 5 orang, 1301cc sampai 1400cc, Pertamax Turbo, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => 'S04rEG2eGcChWF5CgBL00xYSNNrCj5jygaT7kUXrOFeTYAH7ei',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '11',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7717ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Hiace, 2013 sampai 2014, kurang baik, Baik, diatas 8 orang, 1501cc sampai 1600cc, Pertalite, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => 'pDOSd6pokYtRXQjhVRWhmhCGmSNy5D6OYRzzVlJZjP0RJ7bZBX',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '1',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3249ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Terios, 2013 sampai 2014, kurang baik, kurang baik, 7 sampai 8 orang, 1501cc sampai 1600cc, Pertamax Turbo, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => 'fMBamR8TF4hEe6TwStNHM7Fln0nQMZrOzLY5MogiQLEJrhIYLf',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '11',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl2618ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Hiace, 2019 sampai 2020, kurang baik, sangat baik, 7 sampai 8 orang, 1301cc sampai 1400cc, Pertamina DEX, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => 'clNXr276hgFVGnOpaFJNN8JNhDC4Z8YgX8OgW0Z73ZudZAPWNV',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '5',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6852ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Triton, 2019 sampai 2020, sangat baik, kurang baik, 5 sampai 6 orang, 1401cc sampai 1500cc, Pertalite, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => 'K3xNYEpqYn0CXidd5gBcuGOL3xR0W5UWxuML0HVSOiXbZx7e4l',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '8',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7828ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Veloz, 2010 sampai 2012, kurang baik, Baik, 7 sampai 8 orang, 1601cc sampai 2000cc, Pertamax, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => 'RboBU6Fydx9jvaV76D1wxyuYBKJDmxgftKnCKoQHYxTCF4XK3X',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '10',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9610ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Rush, 2015 sampai 2016, sangat baik, kurang baik, dibawah 5 orang, 1401cc sampai 1500cc, Pertamax, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'YG1RYcBGiRzWyiWxqCZik5JBXSgq5QGUqCo3Poa0c0tcSjlbZ1',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '7',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl8077ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type G, 2019 sampai 2020, kurang baik, Baik, dibawah 5 orang, 1401cc sampai 1500cc, Pertamax Turbo, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'GXdnFGVcV27PSoR2mpV7dZ4xZo5qjueNQMdfM3WrYqbCuX6hdE',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '12',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3276ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Suzuki Ertiga, 2017 sampai 2018, kurang baik, kurang baik, diatas 8 orang, 1301cc sampai 1400cc, Pertalite, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => 'SgqOSGJAYIhtIxB5k6YuKy9f0Rt9FcfuRE9lmvEzsCDjP8XtCl',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '6',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5567ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type E, 2021 sampai 2022, kurang baik, sangat baik, dibawah 5 orang, 1301cc sampai 1400cc, Pertamax, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'UhLDGW7yZ9CNsVgewXG5FjlHnJHh4XQ6QxLcCWMxf0xpUzhEVd',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '6',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1128ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type E, 2021 sampai 2022, kurang baik, sangat baik, dibawah 5 orang, dibawah 1300cc, Pertamax Turbo, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => 'rOVBjVY0DeKOSD82hTqeMgsBCvdiLVYp2u4aE06w2Z2DBlwnKv',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '8',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1372ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Veloz, 2017 sampai 2018, sangat baik, Baik, dibawah 5 orang, diatas 2000cc, Pertamax, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => 'vbEHxteLPVxbDXqypEL7nu7whzEPdiILfrsJpGwfn9QYE2pb1A',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '5',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1410ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Triton, dibawah 2010, kurang baik, sangat baik, diatas 8 orang, 1301cc sampai 1400cc, Pertamina DEX, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => 'Di6rcYkFOSPHDMqWJunFlD6BIFJrlgdX7HsXnJrJWwkLuoAqKb',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '2',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7816ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Xenia, 2017 sampai 2018, Baik, Baik, 5 sampai 6 orang, diatas 2000cc, Pertalite, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => 'Nqq25SpDxKaifw2ciX3y2ARQeRhSt7qhpvYizovwH16WCc4sO8',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '8',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9822ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Veloz, dibawah 2010, Baik, sangat baik, dibawah 5 orang, diatas 2000cc, Pertamina DEX, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'NlKMpieNK2s4LRwB7vmfpF4WV3aIAGRJ0sFHiiSlNFIcKkh34n',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '1',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl2494ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Terios, 2015 sampai 2016, kurang baik, kurang baik, diatas 8 orang, 1401cc sampai 1500cc, Pertamax Turbo, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'bNzT3Oj7wVDTPWns7KVCg1VjvQJE1qUf2myyAYS8Y1lGvH8MvI',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '10',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6534ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Rush, 2013 sampai 2014, Baik, kurang baik, diatas 8 orang, 1501cc sampai 1600cc, Pertamax Turbo, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => 'xK3MTgCAIVa8b5Znde9YFtbDf4DxfIhqSQ64nSXXh41RceLz7Y',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '14',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '44',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7549ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Calya, dibawah 2010, kurang baik, kurang baik, dibawah 5 orang, 1601cc sampai 2000cc, Solar, dibawah 300rb/hari, ',]);
                    car::create([
                        'slug' => '4F4XcjLsm0GusMzOsC7Wsj2hFNYnXrvm3O3wHP7IZWa0pvbVSb',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '2',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl2858ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Xenia, 2010 sampai 2012, kurang baik, kurang baik, diatas 8 orang, diatas 2000cc, Pertamina DEX, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => 'OqzmKDkHUqVuZnz2oGunwjLnLzkBv1dIUr4t6Z9OOEwSJF42QF',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '9',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '44',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6226ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Kijang Innova, dibawah 2010, sangat baik, sangat baik, 5 sampai 6 orang, 1301cc sampai 1400cc, Pertalite, dibawah 300rb/hari, ',]);
                    car::create([
                        'slug' => 'dGAsYrVYHv0cij1Y29YGn7QzHYXL7D3pcYnfpIF8m0mFKhZOBc',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '9',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl2494ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Kijang Innova, 2021 sampai 2022, sangat baik, sangat baik, diatas 8 orang, 1501cc sampai 1600cc, Pertamax Turbo, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => 'J2tcF5laFVKTuVpLftvHPvsNmjP6igub3vwvMnq64LwlSBUkGb',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '1',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl8133ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Terios, dibawah 2010, sangat baik, sangat baik, 7 sampai 8 orang, 1501cc sampai 1600cc, Pertamax Turbo, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => '5yRCuQJBY8p0YUoeZNsszVseEPg0BHlPT3qBedW55atp0QOZez',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '8',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7976ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Veloz, 2021 sampai 2022, sangat baik, sangat baik, 7 sampai 8 orang, dibawah 1300cc, Pertalite, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => '5HcpJwFxFguIJeeO0gQ67B7dFoKoa8gzsdaxOFw7aXDSxxpimg',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '4',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1721ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Pajero Sport, 2021 sampai 2022, Baik, sangat baik, dibawah 5 orang, 1301cc sampai 1400cc, Solar, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => 'x4VfH8Ws9nFOS3EF0KyoDBwxF7ll1t3ScB9a415UdYalAvqplI',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '10',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1346ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Rush, dibawah 2010, Baik, kurang baik, diatas 8 orang, diatas 2000cc, Pertamax, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => 'nxKqC21Ig69SwZzihedliHCQ9p0T2oM9KeF2Xq6Ck2Hx8hogIc',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '11',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5251ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Hiace, 2021 sampai 2022, sangat baik, Baik, diatas 8 orang, 1501cc sampai 1600cc, Pertalite, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => '3FaiVfFtTybHdW5hLBR52MQubmijLOq1IxxDmxUDxnmxlgcoTg',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '15',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl4145ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Xpander, 2015 sampai 2016, kurang baik, Baik, 7 sampai 8 orang, 1501cc sampai 1600cc, Pertalite, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => 'KbKEqfRJYSZmwepgnGl0RbJdquXiF5NuH26BaSGLUOCDIG1uNS',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '2',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9847ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Xenia, 2010 sampai 2012, Baik, kurang baik, dibawah 5 orang, diatas 2000cc, Pertamax Turbo, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => 'Or9umsy28G9Zfc9goy5U01R5CvE7Zrz4VLSwbd830ZQZHrXO5U',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '8',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6704ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Veloz, 2015 sampai 2016, sangat baik, sangat baik, dibawah 5 orang, 1501cc sampai 1600cc, Pertamax, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => '8OrMSKFThuv9Zs693jIMoez6jjMEbjbyHRKMuZFn1mhQ10AsxW',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '10',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1994ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Rush, 2019 sampai 2020, kurang baik, sangat baik, diatas 8 orang, 1601cc sampai 2000cc, Pertalite, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => '7puWVYEMEFclyUFBoBrhv82qTVq5yRzDvpSGBu4fb5KrgjvMQC',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '13',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9808ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Mobilio RS, 2010 sampai 2012, sangat baik, kurang baik, 5 sampai 6 orang, 1601cc sampai 2000cc, Pertamax Turbo, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'gx24fvGPeTYp2lZTgxhPa8sXMOCLRvMVxWT1LFZGYcjsrpRfY2',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '3',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3644ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Jazz RS, dibawah 2010, kurang baik, Baik, dibawah 5 orang, diatas 2000cc, Pertamax Turbo, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => 'nSAcsNkQ6qzNMWZlvkkGrImTnVJnicArd35eI2cKniaAaiU0WV',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '2',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7361ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Xenia, 2019 sampai 2020, sangat baik, sangat baik, diatas 8 orang, 1501cc sampai 1600cc, Pertalite, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => '6WChwxTeWfWZvbGUdrIyaelAYBnDMadLfgSxMyGXiZgZtc92iQ',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '5',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9855ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Triton, 2017 sampai 2018, kurang baik, Baik, diatas 8 orang, 1301cc sampai 1400cc, Pertamax Turbo, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'W9UEtYRwEoBOwU7pP8AbW9BlXcQACct1Fwgh83dET1tPfPCWwt',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '6',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3484ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type E, 2021 sampai 2022, sangat baik, sangat baik, dibawah 5 orang, 1301cc sampai 1400cc, Pertamina DEX, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'CYA0DqOmzsD40SO3u9BGmRQR6vwsTrQx0upvSb6K34qiGv04gS',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '5',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '44',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3346ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Triton, 2013 sampai 2014, Baik, kurang baik, 5 sampai 6 orang, 1301cc sampai 1400cc, Pertamax, dibawah 300rb/hari, ',]);
                    car::create([
                        'slug' => '8ubiYWuaiz95w37eQSlfNRfajbaeKP8XtGtrDnc46Xpcv9awjw',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '5',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7508ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Triton, 2013 sampai 2014, Baik, Baik, dibawah 5 orang, 1401cc sampai 1500cc, Pertamax Turbo, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'p1L92KTBU5uNNbIfbLDydoFJu01k6TIMawsCmroaliRhdwzqK8',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '10',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7863ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Rush, 2015 sampai 2016, sangat baik, kurang baik, 7 sampai 8 orang, 1301cc sampai 1400cc, Pertamax Turbo, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => 'yLATaOIqMAVchg0FFgyX5vvvs3RdyMLP3DTWU5SpzqIORZkREv',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '10',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl8566ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Rush, 2019 sampai 2020, sangat baik, sangat baik, diatas 8 orang, 1401cc sampai 1500cc, Pertamina DEX, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'ZVAgxaZJbgKsyq5f0nvgjST0pdtYK3969xkVp3yu03Fzw92O9T',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '15',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5518ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Xpander, 2015 sampai 2016, sangat baik, Baik, diatas 8 orang, dibawah 1300cc, Pertamina DEX, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'wm1nR26fvEaBaV3OiTVsnTyme2M0Z8Iv6EspgvkziEhnEWRcgo',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '10',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3438ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Rush, 2010 sampai 2012, kurang baik, kurang baik, diatas 8 orang, 1401cc sampai 1500cc, Pertamina DEX, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => '6cKLmYaHi86a3hthCX2RyA9IAOeUW66M0QCU5j72cjyl6TNgJe',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '10',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3869ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Rush, 2017 sampai 2018, Baik, Baik, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertamax, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => 'YjW7nLXN1DiRGYVcNwqztl0B2z9426mP9lKT1OOoHRdauAxjL8',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '8',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5143ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Veloz, 2019 sampai 2020, kurang baik, Baik, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertamina DEX, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'gIlnc5nxuUolqUUXPpgopIPWe63q6JiP5YB54WCnv1eDO8EXyQ',
                        'user_id' => '2',
                        'shop_id' => '1',
                        'merk_id' => '1',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3794ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Terios, dibawah 2010, kurang baik, Baik, diatas 8 orang, 1601cc sampai 2000cc, Pertamina DEX, 300rb sampai 350rb/hari, ',]);
                //
                // Adam Jaya
                    car::create([
                        'slug' => 'FBmHWnnngfq1pt1NTwIvyYzJU2FCiENxlyCGurFdevwIQinUt9',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '3',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl8155ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Jazz RS, 2010 sampai 2012, kurang baik, kurang baik, diatas 8 orang, 1301cc sampai 1400cc, Pertamax, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'BBso33Ou68WG4TTWLl216jaCnxAKylqhiZtvnreKjm0gqSvj45',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '5',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl2240ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Triton, 2013 sampai 2014, kurang baik, kurang baik, 5 sampai 6 orang, dibawah 1300cc, Solar, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 's7JsrX9erSAJZ1xQrZuBwwICAHZ6osaXXDDME5PU2FW61LsYm1',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '4',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6864ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Pajero Sport, 2013 sampai 2014, kurang baik, Baik, diatas 8 orang, diatas 2000cc, Pertalite, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => 'gqykND8SxhHVU3WXBAKZa0d8iWFqPVhjYUR4RYjyaOP9RXaBl6',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '13',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '44',
                        'stok' => 'standby',
                        'no_polisi' => 'bl8554ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Mobilio RS, dibawah 2010, Baik, kurang baik, dibawah 5 orang, dibawah 1300cc, Solar, dibawah 300rb/hari, ',]);
                    car::create([
                        'slug' => 'HvZzGLEGv4Z2m2TTv6LEEj22MoFZUw9Nv9J1j7LvJytSM9sEUa',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '9',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7518ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Kijang Innova, 2021 sampai 2022, Baik, sangat baik, dibawah 5 orang, 1601cc sampai 2000cc, Solar, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'TX6jQ5Y1U5JPrOMnRQzKEdnaUUXU24cJwvZ717yYmfSR095bMb',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '8',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6171ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Veloz, 2010 sampai 2012, kurang baik, Baik, 7 sampai 8 orang, 1301cc sampai 1400cc, Pertamina DEX, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => 'AAD8XyoU5yDRohkphPqnYqOpfZJdyAxhhjqSczEs0fMU7qjkAg',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '9',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5058ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Kijang Innova, 2017 sampai 2018, Baik, Baik, dibawah 5 orang, 1301cc sampai 1400cc, Pertamax, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'rAR9SWBOUsaDAzdyujVopDHL8AQqsgHNkhxY9J9y4SYsnt6NI1',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '6',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7762ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type E, 2013 sampai 2014, kurang baik, sangat baik, 7 sampai 8 orang, 1301cc sampai 1400cc, Pertamina DEX, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => 'r7mkRxLRTAjcjvIAWjSyWSUmFCKZKlI2rKZkn1eULs0mGISNRJ',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '11',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3524ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Hiace, 2019 sampai 2020, kurang baik, sangat baik, 7 sampai 8 orang, 1601cc sampai 2000cc, Pertamax, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => 'CE2IyUVnNv8fRgF9NRxdTTBxPZsBPeNGOcooZBXSdCgCeFDzM9',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '8',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7920ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Veloz, 2013 sampai 2014, sangat baik, kurang baik, 5 sampai 6 orang, 1601cc sampai 2000cc, Pertamax, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => 'lxMSKTZJ7YVn6HzOcN4sF0q6RETiJawufFidxk2qniunyStUkA',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '14',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl4250ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Calya, 2019 sampai 2020, Baik, kurang baik, 7 sampai 8 orang, 1301cc sampai 1400cc, Pertamax, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => 'D1v33kuYMZv1XkVypaKM7CP0btUv69OODzLoez2AIBakwLsDib',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '14',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5771ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Calya, 2017 sampai 2018, Baik, kurang baik, 5 sampai 6 orang, dibawah 1300cc, Pertamax Turbo, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'OAUWrJZPlzIc4fMZ0Y7L6ze66VTgrJTrteltytMJ20TgSOQafj',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '10',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3307ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Rush, 2021 sampai 2022, sangat baik, sangat baik, dibawah 5 orang, dibawah 1300cc, Pertamax, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => '0Mmva5uGxwXdUuFamUQ5giDpNAVlzTxp5HG6fmFSE9Ts8wpcAM',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '2',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7497ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Xenia, 2017 sampai 2018, Baik, Baik, 7 sampai 8 orang, 1601cc sampai 2000cc, Pertalite, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => '1d7UkpC5gmLXbA58ApznIEFuiH8LcSH97SQP1Kp4fEgHY767oC',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '9',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1050ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Kijang Innova, 2015 sampai 2016, Baik, Baik, dibawah 5 orang, 1401cc sampai 1500cc, Pertamax Turbo, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'qcPFMfM3UZvCpxB1HBcojUjhoGmmYuEPY0qwrKAC8on3pLYfGr',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '9',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5710ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Kijang Innova, 2015 sampai 2016, kurang baik, kurang baik, dibawah 5 orang, 1401cc sampai 1500cc, Pertamax Turbo, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => 'edYPhanhgljMhmW51E2g1bjRUTGFrM1pvf30Me3dXv7JWABZzZ',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '14',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9944ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Calya, 2015 sampai 2016, sangat baik, Baik, 5 sampai 6 orang, dibawah 1300cc, Solar, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => 'jKo3YxAmNu5zb0I7U1daRJ5oA8VZMZwWdqU8FNaey9CxhQtV3R',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '6',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9506ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type E, 2010 sampai 2012, sangat baik, Baik, 7 sampai 8 orang, 1501cc sampai 1600cc, Pertalite, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 't8CtU9Nv8hQVfz8AwTHsb8oTafJUcsPO61wYoi3IRhWttDX7Xa',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '14',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1265ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Calya, 2017 sampai 2018, sangat baik, kurang baik, dibawah 5 orang, diatas 2000cc, Pertamina DEX, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'bt3JxHLvG2CxqkLs8Cm4hSyFUss6Gtr7xCHTLrtOpdfbgsoUVi',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '12',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '44',
                        'stok' => 'standby',
                        'no_polisi' => 'bl4761ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Suzuki Ertiga, 2021 sampai 2022, Baik, sangat baik, dibawah 5 orang, 1601cc sampai 2000cc, Pertamina DEX, dibawah 300rb/hari, ',]);
                    car::create([
                        'slug' => 'pYaRBCovC6QgZz2Bj7GVCl7AKUBf2JENus6PjE9cBa8aO3ZypD',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '3',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl8662ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Jazz RS, 2015 sampai 2016, Baik, kurang baik, dibawah 5 orang, dibawah 1300cc, Pertamax, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'ud5YyTVl1epTHGTUKAZQots2QAClmpJd2Ni2lPtd1KizYuh9Ja',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '15',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl4229ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Xpander, 2019 sampai 2020, kurang baik, kurang baik, diatas 8 orang, 1301cc sampai 1400cc, Pertamina DEX, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => 'O8v2XPyrWXEPQDuiXab98PUl8nnozX9AwJxto0OUPQ6aNSv9VF',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '7',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5030ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type G, 2019 sampai 2020, sangat baik, Baik, dibawah 5 orang, 1401cc sampai 1500cc, Pertamax, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'drbL4kOBsQ1Q2t59H7aWZkCjJkFQs16nV6j3mU1Fcbc58FDNOF',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '4',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1381ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Pajero Sport, dibawah 2010, Baik, kurang baik, 7 sampai 8 orang, dibawah 1300cc, Pertalite, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => 'SNJ4XlHJvl9Xor79KowoLeHwuWaHR7jQhtHzaPlCu7QFT6G0hk',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '15',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5962ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Xpander, 2015 sampai 2016, Baik, kurang baik, diatas 8 orang, 1301cc sampai 1400cc, Solar, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => '3w76cqEl0bIS9Vy5Ty1lN3rFfAO7GmBhoxpC7HA0KPTcBqPbEh',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '6',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5778ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type E, 2019 sampai 2020, Baik, kurang baik, 5 sampai 6 orang, 1501cc sampai 1600cc, Pertamina DEX, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => '6717cPOIfGMRTJoQpKRSc5FLZRhQuNgyUjmODdffvp4h3kgh6S',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '5',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7235ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Triton, 2017 sampai 2018, kurang baik, sangat baik, 5 sampai 6 orang, diatas 2000cc, Pertamina DEX, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => 'TL8X4e5Id4QnTVqyQFyVnswiwrgpAzrlYc2RTBJG9CqgarYWfy',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '2',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6371ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Xenia, 2019 sampai 2020, kurang baik, Baik, diatas 8 orang, 1301cc sampai 1400cc, Pertamax, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'Spr2YnB7iy0NhcvBLvIUhaiCeCVf1URTn7YuzALGTcqGJyvK2N',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '15',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl4361ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Xpander, 2021 sampai 2022, Baik, kurang baik, 5 sampai 6 orang, diatas 2000cc, Pertamina DEX, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'Uvzmbdw7X6cciqNEsIs8csIEM9NVK0fAEUNXHoW6oTtxfsNQsF',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '13',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1374ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Mobilio RS, 2010 sampai 2012, Baik, Baik, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertamax Turbo, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'RgzUQ5fC3xW9fECMZDlt9jGjnzJfJgPTHb80MtLTnw8ghHFzGa',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '12',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3591ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Suzuki Ertiga, 2017 sampai 2018, sangat baik, sangat baik, diatas 8 orang, 1601cc sampai 2000cc, Solar, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => 'EAxlrXRJTUDAY9BcRGHEAwrCf77URtAFcK4ggwakPbOzrYFDCA',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '9',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5943ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Kijang Innova, 2013 sampai 2014, Baik, sangat baik, 5 sampai 6 orang, 1301cc sampai 1400cc, Pertamax Turbo, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'N5uv8kOOpShZtBXGXBKcPI5TwIohx7Mh9IydXbIqereNJg7Fou',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '7',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '44',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3606ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type G, 2019 sampai 2020, kurang baik, kurang baik, 5 sampai 6 orang, 1601cc sampai 2000cc, Pertamax Turbo, dibawah 300rb/hari, ',]);
                    car::create([
                        'slug' => 'RY51O6RLsV60wun1GMDuT3b8exK8bGvStSZIRkI2RHC4DGdfF6',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '1',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5112ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Terios, 2019 sampai 2020, Baik, kurang baik, 5 sampai 6 orang, 1301cc sampai 1400cc, Solar, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => 'P6RTcRu4ePe9emsHLoydjFRXw59rOUTGqU8R2Ha3ibE8dSz5J9',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '8',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7927ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Veloz, dibawah 2010, kurang baik, Baik, diatas 8 orang, 1501cc sampai 1600cc, Pertamina DEX, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => 'QPksQaVO0lSbOwJSdfQiZlRXBPmNrevKTrhRUQGqGEu2CJTT64',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '11',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6372ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Hiace, 2010 sampai 2012, kurang baik, kurang baik, dibawah 5 orang, diatas 2000cc, Pertamina DEX, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => '5jbYblXfjIwAXJmlE4cWhjlvx9qY64XEwW6Aw0wFu7xRb8SHDB',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '3',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl2215ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Jazz RS, 2013 sampai 2014, kurang baik, Baik, 7 sampai 8 orang, 1601cc sampai 2000cc, Pertamax, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => 'TEJOEdsgZi6WkJ7zxmv8SavSQfGHrIE2p7Q4YeRQonGDpj0smi',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '9',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3090ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Kijang Innova, 2021 sampai 2022, Baik, sangat baik, 5 sampai 6 orang, 1601cc sampai 2000cc, Solar, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => '7PyY9HvTsIL9Bh2pS5Hdfg5ZCyCRAY1Be6luhiDoUlKxeOS9vD',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '8',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6234ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Veloz, 2015 sampai 2016, sangat baik, Baik, 5 sampai 6 orang, dibawah 1300cc, Solar, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => 'LNgGzKzxwlKkB8D9NWSLT3lN3LHWVxp4FSH3qqwZ5z8f7kNJJE',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '4',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl2067ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Pajero Sport, 2015 sampai 2016, kurang baik, Baik, 5 sampai 6 orang, diatas 2000cc, Pertamax Turbo, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => '6cmKwH6BuDX3f63k1jiHbKF46tuyfwI6RaLFAXKKUq0YjEfQwT',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '2',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9420ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Xenia, 2021 sampai 2022, sangat baik, kurang baik, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertalite, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => 'e0AlEITt2puPUp0O5BE913nBaPqFOxhHMqT90MjS2Qy73NBk7Q',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '13',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6386ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Mobilio RS, 2010 sampai 2012, Baik, Baik, 7 sampai 8 orang, diatas 2000cc, Solar, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => '1pCH2EQSNRYqW5qi6K69VCi6n3N7ivXw5US7UHSSxGaXSHY1EJ',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '6',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9858ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type E, 2010 sampai 2012, sangat baik, kurang baik, diatas 8 orang, dibawah 1300cc, Pertamax, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => 'hMs7JbISDClD3JP0HgoFf5nneUcL5BEtmeyxZZusdLeP5yu7z0',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '14',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl4165ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Calya, 2013 sampai 2014, kurang baik, Baik, dibawah 5 orang, 1601cc sampai 2000cc, Pertamina DEX, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'GI0T0frwXGe2pbBy6ejct18Rvtjo4mAdiyX2P8qKBJSWriIQ2S',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '15',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5177ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Xpander, 2017 sampai 2018, sangat baik, Baik, 5 sampai 6 orang, 1401cc sampai 1500cc, Solar, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => 'sG9MM3rf4uS5hqdfeyjNivHrJU4wBiKlEXWgIbfMQXrVH0ULKa',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '12',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl2556ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Suzuki Ertiga, 2015 sampai 2016, kurang baik, sangat baik, dibawah 5 orang, dibawah 1300cc, Pertamina DEX, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => '14WR6x4aZJdPn4zXy7cfrDUcukgh4YcDHxJAUrv23l4SAEuTTg',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '9',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5677ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Kijang Innova, 2017 sampai 2018, kurang baik, kurang baik, 7 sampai 8 orang, dibawah 1300cc, Pertamax Turbo, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => 'akUQatODA6CquShZRSsmEZYq0fbygTLKYLyUPGURCbbQDgji18',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '2',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl8093ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Xenia, 2015 sampai 2016, Baik, kurang baik, diatas 8 orang, 1401cc sampai 1500cc, Solar, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'AI7NE1QTNTHV6VP9iBw8pnULkEdfLgZcu9IMsD4IQW2w7DhZTy',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '11',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '44',
                        'stok' => 'standby',
                        'no_polisi' => 'bl4587ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Hiace, 2010 sampai 2012, kurang baik, kurang baik, diatas 8 orang, 1401cc sampai 1500cc, Pertamax, dibawah 300rb/hari, ',]);
                    car::create([
                        'slug' => 'pXNbYrX2shS5s5h4C77vPfW9RufHte7GygOUyRpqXjhSDRvkn0',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '2',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1924ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Xenia, 2013 sampai 2014, Baik, sangat baik, diatas 8 orang, 1401cc sampai 1500cc, Pertamax, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'w2dUc6gdLYc9s7iljGJBkOMB3DrMVmPFVT3mzPZ0q80gzKnN3x',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '15',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '44',
                        'stok' => 'standby',
                        'no_polisi' => 'bl2897ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Xpander, 2021 sampai 2022, kurang baik, kurang baik, 7 sampai 8 orang, 1601cc sampai 2000cc, Pertamax, dibawah 300rb/hari, ',]);
                    car::create([
                        'slug' => 'uMnKcM9BgDkpnbMNp6C3cAt4HpmSGz4YQ0mXzwIJ1kKw67JV4C',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '1',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1252ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Terios, 2021 sampai 2022, Baik, kurang baik, 7 sampai 8 orang, diatas 2000cc, Pertamax, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => 'E0mlPyZ1DhAuIo75gMtxRuk1NwVrH5cwtA4XDWn08H0XnE30Ei',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '3',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1121ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Jazz RS, 2013 sampai 2014, kurang baik, kurang baik, 5 sampai 6 orang, dibawah 1300cc, Pertalite, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'HRCsa1vpfULttPprHqVDTCoXGhB5Oe4xFDMg0pVsiu1TNThJ2T',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '13',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7944ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Mobilio RS, 2010 sampai 2012, sangat baik, Baik, dibawah 5 orang, 1301cc sampai 1400cc, Pertamax Turbo, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'swXhDnTsNHulsS5MJpBQ0jRaxbK5uCYQ06aOoT03wBmAfmYckU',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '15',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '44',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1193ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Xpander, 2013 sampai 2014, sangat baik, Baik, 5 sampai 6 orang, diatas 2000cc, Pertamax, dibawah 300rb/hari, ',]);
                    car::create([
                        'slug' => 'OxIrj7jKJbuDLFQCLdd5pTWEoMhMfV2RFW4pa9fOiLwt5cBZhf',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '5',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl8648ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Triton, 2013 sampai 2014, Baik, kurang baik, diatas 8 orang, 1601cc sampai 2000cc, Pertamax, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => 'Cs9H72b9khrasW2ucTQuVaTSufdsJEWSmh0DbxfleSuAc0I5lA',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '8',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9640ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Veloz, dibawah 2010, Baik, kurang baik, 7 sampai 8 orang, 1601cc sampai 2000cc, Pertamina DEX, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => 'w0PFdSsDL1iJgiswLwYoHg5jbDmNa5QhVmGTWAxI0KQMlSVksK',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '8',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1499ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Veloz, 2015 sampai 2016, Baik, Baik, 5 sampai 6 orang, 1501cc sampai 1600cc, Pertamina DEX, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'H1JOZjz7ZyowRgE0PDeuClVB80EWgUm7WOI6aShOpR4OXMEuov',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '13',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6088ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Mobilio RS, 2017 sampai 2018, kurang baik, sangat baik, dibawah 5 orang, dibawah 1300cc, Pertamax, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => 'l2OD9z37ENEGAb0QenQBs4waqeqD2ztUOQ4VB6xYk9WY2uP9Wp',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '14',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl8041ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Calya, 2015 sampai 2016, kurang baik, kurang baik, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertamax, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => 'zDJSFhbGOPh1nCeMleO1ZWCpKlXy1BBBMFbXLrcdOcIzeWHlWE',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '14',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '44',
                        'stok' => 'standby',
                        'no_polisi' => 'bl4853ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Calya, 2019 sampai 2020, sangat baik, Baik, dibawah 5 orang, 1401cc sampai 1500cc, Pertamax Turbo, dibawah 300rb/hari, ',]);
                    car::create([
                        'slug' => 'rdMWM0QAnipiTRvHNpVMRwSj4V1tDdUKcMB0qlyiO5JQfWsOeP',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '15',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9410ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Xpander, 2013 sampai 2014, sangat baik, Baik, 5 sampai 6 orang, 1501cc sampai 1600cc, Pertamina DEX, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'o6xXzQex9uELxdcJl1QYnR0rPDloBR53oCCarmqq6jSZd4lxQb',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '2',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7247ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Xenia, 2015 sampai 2016, Baik, sangat baik, dibawah 5 orang, 1601cc sampai 2000cc, Pertamina DEX, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => 'oicoJdzNwKLpzMCg4pYFZg1smKiyvuST5LEdf4TwXmbBKewMU9',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '10',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5748ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Rush, dibawah 2010, sangat baik, sangat baik, dibawah 5 orang, dibawah 1300cc, Pertamax Turbo, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => '5ArpOIC0YURHWI5lTFK3UTNpbnWogdrdjNqEP6MMLhFRoaMRVd',
                        'user_id' => '3',
                        'shop_id' => '2',
                        'merk_id' => '2',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3643ah',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Xenia, 2021 sampai 2022, Baik, sangat baik, diatas 8 orang, 1501cc sampai 1600cc, Pertalite, diatas 600rb/hari, ',]);
                //
                // KMJ
                    car::create([
                        'slug' => 'THLJ7rfU3Oi70yEH1L50wRm2NUxfTzdYqMvbTAQfejRuXUIhRQ',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '3',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7500al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Jazz RS, 2017 sampai 2018, sangat baik, Baik, 5 sampai 6 orang, 1301cc sampai 1400cc, Pertamax Turbo, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => '3sNRNNORRkKAKjWrnqwLqxoWW3cDwZvRmwVY8m36iXWWjvafCx',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '1',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '44',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9023al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Terios, 2015 sampai 2016, sangat baik, Baik, diatas 8 orang, diatas 2000cc, Pertamina DEX, dibawah 300rb/hari, ',]);
                    car::create([
                        'slug' => 'XadIGl2SLkhn0ZHB6E2qpJJPcVKuv2czPDdmoMtkZ0tqL6MeJU',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '15',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5841al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Xpander, dibawah 2010, sangat baik, sangat baik, diatas 8 orang, 1601cc sampai 2000cc, Pertamax Turbo, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'luN3tJaPEBUKmkVOOXugfYJmJAIXDkyZHfz1H445lbE1lTphAJ',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '3',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '44',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6439al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Jazz RS, 2017 sampai 2018, kurang baik, sangat baik, diatas 8 orang, diatas 2000cc, Solar, dibawah 300rb/hari, ',]);
                    car::create([
                        'slug' => 'd1gjDtyhHHy90SgFO5vYoEgeWrZckfjnGKSeKjxHkCWtfTc32z',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '14',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl2786al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Calya, 2010 sampai 2012, kurang baik, sangat baik, dibawah 5 orang, 1401cc sampai 1500cc, Pertamax Turbo, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => 't1kTBn5x8S5mCCEJCjN91kPGSNmFT5iszO35f9KGbGKQ0DpW5i',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '9',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3409al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Kijang Innova, dibawah 2010, kurang baik, Baik, diatas 8 orang, 1501cc sampai 1600cc, Pertalite, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'uE9ZcBcl24zVObviJqb6qj1UCUog2aQb1zhmQAMaCMcUPyL3Ph',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '9',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl8185al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Kijang Innova, 2021 sampai 2022, kurang baik, sangat baik, diatas 8 orang, dibawah 1300cc, Solar, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => 'oTV3j0sySaKR4q5aGKjGrz6ewjr9TCqjPtckRG8fU1gUkITKGm',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '11',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7024al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Hiace, 2013 sampai 2014, kurang baik, sangat baik, 5 sampai 6 orang, dibawah 1300cc, Pertamina DEX, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => 'VR1js3mJziEkydHlwPYedE7tRy6gkmlLqobJ6HUADFxlwK63CH',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '15',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl4903al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Xpander, 2021 sampai 2022, sangat baik, sangat baik, dibawah 5 orang, 1501cc sampai 1600cc, Pertamax, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => 'PL3QUUQMCmlSVhr4a7Sqg6VV4yI8ihA3XnsIfMuSyFXE3bdAql',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '2',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3357al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Xenia, 2021 sampai 2022, sangat baik, Baik, dibawah 5 orang, 1301cc sampai 1400cc, Pertamax, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => 'b7r0H8tQxQKsCDm99x0zncFHaTGv0anXMLFPTX3KxkZoxEJalN',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '15',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl2038al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Xpander, 2010 sampai 2012, Baik, kurang baik, diatas 8 orang, 1401cc sampai 1500cc, Pertalite, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'IjhSdI6HwU6yVevitbs1EEkLZ7WGrLjUWpedQlAGSJA1jO8sQb',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '11',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl2662al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Hiace, 2013 sampai 2014, sangat baik, sangat baik, dibawah 5 orang, 1601cc sampai 2000cc, Pertalite, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'w7m1Q0hTEYbKV7w08GfzZqiKondjTHNlAU57qGAHPpF9IRArFt',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '14',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9715al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Calya, 2015 sampai 2016, kurang baik, kurang baik, diatas 8 orang, 1601cc sampai 2000cc, Pertamax Turbo, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => 'YSDucDOkqq98IGJCjEYGq0H9vuNOOnqz6NtWgMB3s87iKY721B',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '3',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '44',
                        'stok' => 'standby',
                        'no_polisi' => 'bl8223al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Jazz RS, 2017 sampai 2018, Baik, kurang baik, 5 sampai 6 orang, diatas 2000cc, Pertamina DEX, dibawah 300rb/hari, ',]);
                    car::create([
                        'slug' => 'pG2Y9jCr05z33zYp8BtqVs5TgUEaHNTdyLoSJVBYwl7dxkfNcj',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '6',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5663al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type E, 2021 sampai 2022, sangat baik, kurang baik, diatas 8 orang, dibawah 1300cc, Pertamax, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'rcfxqlqr8ZAnu4vfQcY9xRj9ZZp0HrrQFYuiLETUhrEo3xixj2',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '5',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5711al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Triton, dibawah 2010, kurang baik, sangat baik, dibawah 5 orang, 1401cc sampai 1500cc, Solar, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'jAFXQnc5bcdyfFL1KhjEvq6ViSfutsQbfJmL2xN81HIKm1QUUb',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '4',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6708al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Pajero Sport, 2013 sampai 2014, Baik, sangat baik, diatas 8 orang, 1501cc sampai 1600cc, Pertamina DEX, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => '45VEVROVwSdXDeLoyt7DwLLrKdNv2UKWuSyj5clH32mMgMZ1Ij',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '8',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1852al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Veloz, 2017 sampai 2018, kurang baik, Baik, dibawah 5 orang, 1501cc sampai 1600cc, Pertamina DEX, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => 'xvEgdalnfG1uUMposmqEYDQkKhOPlaXmZTgxgQI2UHjyi4gVKD',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '8',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1893al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Veloz, dibawah 2010, kurang baik, kurang baik, diatas 8 orang, 1501cc sampai 1600cc, Pertamax, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'YnAm19hRJngZ109mMvyN5X4gkBMZsecvIBZ4T9QspnjVQQ1n6z',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '12',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl2121al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Suzuki Ertiga, 2013 sampai 2014, Baik, sangat baik, 7 sampai 8 orang, 1301cc sampai 1400cc, Solar, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => 'dmOpAi3AcGeoOoDQuOKiJzltzL3Fsp85f6og5zKLMpDsly9vZA',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '12',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7471al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Suzuki Ertiga, 2017 sampai 2018, Baik, kurang baik, 5 sampai 6 orang, 1601cc sampai 2000cc, Pertamina DEX, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => 'Nhk0PqRZkA1Rf60zzxi8OeaFnAH20hZItEFVlu48jnA09MUsTp',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '15',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl4982al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Xpander, 2017 sampai 2018, kurang baik, kurang baik, 5 sampai 6 orang, 1301cc sampai 1400cc, Pertalite, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => 'k20OTa3uufK9CAHm97R8jnHFvFg9rlCN6uoU98A8bbNbV1dZpg',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '6',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7293al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type E, 2017 sampai 2018, Baik, kurang baik, 5 sampai 6 orang, 1601cc sampai 2000cc, Pertalite, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => 'rZmhwwTQyWVJM8Ooia3IXU50ZLoAIjZNXRJB2JxmgXxrSI1rar',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '14',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl4174al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Calya, 2021 sampai 2022, kurang baik, Baik, dibawah 5 orang, 1401cc sampai 1500cc, Solar, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'BxkXmuYLFLohtawztT3RYvmhHsXUiBRNJjLWTQTZujKrL1a0sS',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '13',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl4429al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Mobilio RS, dibawah 2010, kurang baik, Baik, 5 sampai 6 orang, 1301cc sampai 1400cc, Solar, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => 'e9yhtPzt64keaapsOBoNNtpvQbJGEnjQxkMP0vCgdJeGZ5KhTF',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '7',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl2554al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type G, 2010 sampai 2012, sangat baik, sangat baik, diatas 8 orang, 1501cc sampai 1600cc, Pertamina DEX, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => 'rsn1oFvb4w50BKwohKWjfHX7uo3V7V51NZ0uPuDwjkwzbWNqjj',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '9',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl4371al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Kijang Innova, 2015 sampai 2016, Baik, kurang baik, dibawah 5 orang, 1501cc sampai 1600cc, Pertamina DEX, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'JO6XTnXcf6Oveja0iJyanwjQG40zuKg5iQydZmKBM5rjnfgWWw',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '4',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1108al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Pajero Sport, 2013 sampai 2014, kurang baik, Baik, diatas 8 orang, 1401cc sampai 1500cc, Pertamax, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'baF4g4A15cQSmrkRtwLi03qsXoLQ33tOtnHBinXdN9zOg52fxX',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '1',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3311al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Terios, 2010 sampai 2012, kurang baik, kurang baik, dibawah 5 orang, dibawah 1300cc, Pertamina DEX, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'qdCvVu5oEJzPgRcThf24L9tj6mjcLJ1yMYvVBPHsCVmsutVtrR',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '7',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9491al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type G, 2019 sampai 2020, sangat baik, sangat baik, diatas 8 orang, 1301cc sampai 1400cc, Pertamax, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'o7WmC1Fa02VFgiSuTbywnevsNR9HZ3q19fybFizHvA206z4W35',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '13',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6932al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Mobilio RS, 2017 sampai 2018, kurang baik, sangat baik, 5 sampai 6 orang, diatas 2000cc, Solar, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'B6kFuwtv03XWtvCpjvGVQjSDIdRIc2ggcd3gzzDjq4TZOA0kmR',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '13',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl4319al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Mobilio RS, 2019 sampai 2020, kurang baik, sangat baik, 7 sampai 8 orang, 1501cc sampai 1600cc, Pertalite, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => 'wEtcaoCgCiwDuXvInUnNAxthyFfKw4SN2fiYbQ821uow6deuZp',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '10',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6009al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Rush, 2019 sampai 2020, sangat baik, kurang baik, 5 sampai 6 orang, 1301cc sampai 1400cc, Pertamina DEX, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => 'awrZDrhgpLIVKoYMwkVQXoOFNF4HzpGuU9PFxuzCpasatDWGkG',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '5',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1582al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Triton, 2013 sampai 2014, Baik, sangat baik, dibawah 5 orang, diatas 2000cc, Pertamax Turbo, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => 'lbiDT5Ou99enoFhkLa6V1SKa6C8BSttFQnf7IDixtM6GW5S8qR',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '5',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3422al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Triton, 2010 sampai 2012, sangat baik, kurang baik, dibawah 5 orang, 1501cc sampai 1600cc, Pertamax, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => 'SFKOM0WMWNsNGR3Un5axiiCkZ9aMmA1IOrurJVSQOOC0Z2gv7a',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '8',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5070al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Veloz, 2013 sampai 2014, kurang baik, sangat baik, diatas 8 orang, diatas 2000cc, Pertamax Turbo, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'LrU88mWB3RAj6siNI3vXhEIhCdR5x9I01CpbYum0c6ZwO8CrTi',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '7',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9897al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type G, 2013 sampai 2014, Baik, sangat baik, dibawah 5 orang, 1301cc sampai 1400cc, Pertamax Turbo, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => '1o9jyBPpgjRfhgOLMJ4jBA33bs8xaOFUDy5rnwsI365mWXR6uD',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '12',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '44',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5334al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Suzuki Ertiga, 2019 sampai 2020, Baik, Baik, diatas 8 orang, diatas 2000cc, Pertalite, dibawah 300rb/hari, ',]);
                    car::create([
                        'slug' => 'mDu2EKDGzYdH55RedhC9EGCrPILmluAkYQY70OyUjmai8uV5rl',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '14',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl4437al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Calya, dibawah 2010, Baik, Baik, 5 sampai 6 orang, 1401cc sampai 1500cc, Pertamax Turbo, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => 'tjsNjh6TpM0SeiQ6fcpesIbYxJxKFNGxqz802Sft1R1FFMWFQr',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '13',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9385al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Mobilio RS, 2015 sampai 2016, sangat baik, kurang baik, 7 sampai 8 orang, diatas 2000cc, Solar, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'VIpaxMu2r5tYqBIJZvzwnyWBPh0pKK6SnLBM8jBkBqLjISyBdU',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '4',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1807al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Pajero Sport, 2021 sampai 2022, sangat baik, sangat baik, 7 sampai 8 orang, 1301cc sampai 1400cc, Pertamax Turbo, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => 'M5feIAMfhM4pTOgQSE2H6pY5NSvtyDJJUXUfVR7Z8xAOIVDk8Y',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '7',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '44',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5490al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type G, 2010 sampai 2012, sangat baik, Baik, 7 sampai 8 orang, diatas 2000cc, Pertamax Turbo, dibawah 300rb/hari, ',]);
                    car::create([
                        'slug' => 'FuOiRXjywEDatlNdWAwL1hD9l9Wwon5nisSR1pv7SMg4wjY78w',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '13',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9468al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Mobilio RS, 2017 sampai 2018, Baik, Baik, 7 sampai 8 orang, 1301cc sampai 1400cc, Solar, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => 'kFMYMIKdn8VJDGCzgDm8jb5D6NsFC20pNZLJuBcJk8KcWw1XPP',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '6',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl8459al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type E, 2019 sampai 2020, sangat baik, sangat baik, dibawah 5 orang, dibawah 1300cc, Pertamina DEX, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => 'db6SLUHYE7SELgx2bF9Cb94WcFDvIa6ypY4RLAmfxuaBO43C7g',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '4',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '44',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5597al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Pajero Sport, 2017 sampai 2018, sangat baik, kurang baik, 7 sampai 8 orang, 1601cc sampai 2000cc, Solar, dibawah 300rb/hari, ',]);
                    car::create([
                        'slug' => 'K0WBZKiGf0SoM1vtAPuKiAfJLvVRSDaWhb2cgGKNcbr0IGN8Tv',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '1',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3430al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Terios, 2015 sampai 2016, kurang baik, kurang baik, 5 sampai 6 orang, 1401cc sampai 1500cc, Solar, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'bwnj9TRNdAuCrBGz1MTiCH7NenphJ7Zgakd3k04zaOja7XlIw1',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '1',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl4573al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Terios, 2015 sampai 2016, Baik, kurang baik, 5 sampai 6 orang, dibawah 1300cc, Pertamax, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => 'UnWpbiKpmf0qbfdcXJarhw3I9JLhUIq1bl4Ie4A3UouaAo26Nm',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '15',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9092al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Xpander, 2013 sampai 2014, kurang baik, Baik, 7 sampai 8 orang, 1301cc sampai 1400cc, Pertamax, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => 'QuiwFbpUP3PVfSj6KjDAMpRyNsMA6fMgNdscSFitGPcqIDkCIn',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '2',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5216al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Xenia, 2013 sampai 2014, sangat baik, Baik, 5 sampai 6 orang, diatas 2000cc, Solar, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => 'YSlV4QNSnCJLUEgB9GfwUVrt0Qs58iKjUOoLbhmJXOF3dronyj',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '3',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5809al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Jazz RS, 2010 sampai 2012, sangat baik, sangat baik, 7 sampai 8 orang, diatas 2000cc, Pertamax Turbo, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => 'FSyGNgjkvudfYIeHEddf12Pb6uZ5wIaaGP30TzVwhDau4dNNTR',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '10',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9038al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Rush, dibawah 2010, kurang baik, sangat baik, 5 sampai 6 orang, 1601cc sampai 2000cc, Pertamax, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => '64Z7jGpmGPRrlpJKpcNUSsbJbS3vznO0nyyekAyuSBdjVC6kJF',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '11',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl2860al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Hiace, 2017 sampai 2018, sangat baik, kurang baik, dibawah 5 orang, 1401cc sampai 1500cc, Pertamax, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'nyUzl0sGyFiMobsynDHfIpFF7pN33o4gErz4eMnDSInBlQDKKG',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '6',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9689al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type E, 2013 sampai 2014, Baik, sangat baik, dibawah 5 orang, dibawah 1300cc, Pertamina DEX, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => 'i8HqRBO4KTC7NBl8S0mzgiBN3mqkO0YcGVfhv9E7gCATGSfkWs',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '14',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1067al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Calya, 2013 sampai 2014, sangat baik, Baik, dibawah 5 orang, diatas 2000cc, Pertamina DEX, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => '2fvwApS3BxUDv8gPhpDuPEzW6laiH84K3Dy32vZS0nU484briz',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '12',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '44',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6055al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Suzuki Ertiga, dibawah 2010, Baik, sangat baik, 5 sampai 6 orang, 1401cc sampai 1500cc, Pertamina DEX, dibawah 300rb/hari, ',]);
                    car::create([
                        'slug' => '8bI8kJzagGQ6hG99xKLJBI1qkFTyzvuwzufHgMs1T7Ny6P4Y8q',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '9',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl4919al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Kijang Innova, dibawah 2010, kurang baik, Baik, 5 sampai 6 orang, 1501cc sampai 1600cc, Pertamina DEX, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => 'e8hbdfSCrBJXeNxCn42q5EDaQlIfT0MGQMdXp5XV9Onm96lUUr',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '2',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '44',
                        'stok' => 'standby',
                        'no_polisi' => 'bl2743al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Xenia, 2017 sampai 2018, sangat baik, Baik, 7 sampai 8 orang, 1501cc sampai 1600cc, Pertamax Turbo, dibawah 300rb/hari, ',]);
                    car::create([
                        'slug' => 'IIFmq5XiC4cOy5hjoZzwYYDPTYotuU3V3badZl2aYwaAZ1CpjG',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '10',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7978al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Rush, 2010 sampai 2012, sangat baik, Baik, dibawah 5 orang, 1601cc sampai 2000cc, Solar, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => 'YHBu8IygcFeCruhxQu73Yue4ncHDxhIIoGn4C5M9dSgqiGrDPZ',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '11',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3102al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Hiace, 2013 sampai 2014, Baik, sangat baik, diatas 8 orang, dibawah 1300cc, Pertamax, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => 'cdTnzMumdw7t6wBBi4CmInnUrHeSalsj902ypXGBOOwxw5L7h1',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '13',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl4319al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Mobilio RS, 2021 sampai 2022, Baik, sangat baik, 5 sampai 6 orang, diatas 2000cc, Pertalite, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => '0ZsMJRT4dWQ9lM2lo55jtnmbUM3K4JlTOiP7gmKYv8kea0GVNj',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '13',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9037al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Mobilio RS, 2010 sampai 2012, sangat baik, sangat baik, 5 sampai 6 orang, 1501cc sampai 1600cc, Pertamax, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => 'AAOyBAKtzG8paKTjAdQ266CVatlt9QguJ01EwgF2dUpgL8p70I',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '7',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1610al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type G, 2017 sampai 2018, sangat baik, kurang baik, 7 sampai 8 orang, dibawah 1300cc, Pertalite, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'aEVtt8wB6x8qBIGgwf4zPF9zlLUWXevkml7fN8LHv6swBlT2DG',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '8',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1628al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Veloz, 2010 sampai 2012, kurang baik, Baik, diatas 8 orang, 1501cc sampai 1600cc, Pertamax Turbo, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => 'zGHWOjAqCFxgFSMXdmcJI05k7IAvMPCUtURJj03cE7KGquJIdk',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '8',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5769al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Veloz, 2015 sampai 2016, sangat baik, kurang baik, 7 sampai 8 orang, 1301cc sampai 1400cc, Pertamax, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => 'kcobEiAb3HmOpfvFu6SJfJk1XmbGxkaUgRjCO9kkH8wyIUDcPo',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '15',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6791al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Xpander, dibawah 2010, kurang baik, Baik, 7 sampai 8 orang, 1601cc sampai 2000cc, Solar, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => 'pkEn9QLZdPeTG5ozm4kMsHftICng0nXvGKX7vF1T5iiTM9d2eD',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '13',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '44',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7764al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Mobilio RS, 2013 sampai 2014, sangat baik, sangat baik, dibawah 5 orang, 1601cc sampai 2000cc, Solar, dibawah 300rb/hari, ',]);
                    car::create([
                        'slug' => 'VyGCy8ll6Pylr9aZRsr6gBpmnEZLT2yoM1EFzr8nKPgoUEyxPx',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '6',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7557al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type E, 2013 sampai 2014, sangat baik, sangat baik, 5 sampai 6 orang, 1601cc sampai 2000cc, Pertamax Turbo, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => '0vZbZJf43ZPTWEO1sk0bWgmlEtZhEiZ7iTzVXvmxhrLDjdK7cH',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '2',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7051al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Xenia, 2013 sampai 2014, sangat baik, kurang baik, diatas 8 orang, 1401cc sampai 1500cc, Pertamina DEX, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => 'tzb4ymVBN0oQkCL3tZWsxDWw30DIFBgUR51SkPcZKvyFJCrKg7',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '5',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3950al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Triton, 2021 sampai 2022, sangat baik, sangat baik, 5 sampai 6 orang, dibawah 1300cc, Solar, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => 'qLd8fXXNjK1q1kSYpdCiIFeh7hrz31dt1io9o6IiqtwTq0fxST',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '11',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl2288al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Hiace, dibawah 2010, sangat baik, sangat baik, diatas 8 orang, 1301cc sampai 1400cc, Pertamax, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'Nk9TnWlpGBc75ZI679deWKLaS406ki6hnMwZzM7dYWJxjKQJYM',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '7',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl4133al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type G, 2013 sampai 2014, kurang baik, sangat baik, diatas 8 orang, diatas 2000cc, Pertamax Turbo, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'TYbNICx4trDIRaUKXNFqfWwVTQfYOxecQkPB7kn6rW63YFWOl3',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '15',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9482al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Xpander, 2021 sampai 2022, Baik, sangat baik, dibawah 5 orang, dibawah 1300cc, Pertamax Turbo, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'xqR2eNp0R7i6YR0c6izpjWtbirlF2lLu1h1QrDIJOdUNcggKAb',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '12',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9582al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Suzuki Ertiga, 2013 sampai 2014, sangat baik, kurang baik, diatas 8 orang, 1301cc sampai 1400cc, Pertamina DEX, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => 'xWjC0edwiuO0lsK0g4uDKjQh6mCXIT81lciauu2V86TSViW547',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '11',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl8038al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Hiace, 2019 sampai 2020, kurang baik, kurang baik, 5 sampai 6 orang, 1401cc sampai 1500cc, Pertamax, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => 'x0b02rLXWAySLKxpwUCBr4t8D4e0102EYGVXiu2CoqDYLFt7ur',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '12',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl4801al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Suzuki Ertiga, 2010 sampai 2012, Baik, kurang baik, dibawah 5 orang, diatas 2000cc, Pertamax, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => '2PuXE0SKQyazJQVuFSL6oVrfRstHeZzRj85Do4EUShw6zP7DUi',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '3',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9521al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Jazz RS, 2010 sampai 2012, sangat baik, sangat baik, 7 sampai 8 orang, 1501cc sampai 1600cc, Pertalite, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => 'JvhUwVySm0zqZeYKFI9h8DILd9wrWEgSCNN1BOTRJsRvGymWYQ',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '3',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5964al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Jazz RS, 2010 sampai 2012, kurang baik, sangat baik, dibawah 5 orang, 1301cc sampai 1400cc, Pertalite, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => '4HqFSrGd9e0R87094hut6lr4goHjUJgh3uxrRpAIoZjOuxmqYO',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '4',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6328al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Pajero Sport, 2021 sampai 2022, Baik, sangat baik, 7 sampai 8 orang, 1601cc sampai 2000cc, Pertalite, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'DeJdpjPwnK2uHFIPZp2kVeoCal3OkIYTm7nr3L8Tn9bt14Nk6I',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '5',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl4425al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Triton, 2021 sampai 2022, kurang baik, Baik, 5 sampai 6 orang, 1601cc sampai 2000cc, Pertamax, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'KXY12t1p8O7wmVTL1ERP5NQjSxZj8g0GoP5eOPdhXlc0AuFwoq',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '13',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6950al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Mobilio RS, 2015 sampai 2016, Baik, sangat baik, diatas 8 orang, diatas 2000cc, Pertamina DEX, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => 'y0wobESkNTxlFrS9Tm3UMZzNROjd6ajEQJNvwc5G3mBWUYVJG6',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '15',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1819al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Xpander, 2013 sampai 2014, sangat baik, kurang baik, diatas 8 orang, diatas 2000cc, Pertamax, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => 'GNqZn2Pu60fQ8qeooCv50LVaFXl2kNJSs6nQQed0cG7b8hsSUP',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '12',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl4473al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Suzuki Ertiga, 2021 sampai 2022, Baik, kurang baik, diatas 8 orang, 1401cc sampai 1500cc, Pertamax Turbo, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => 'mw3l9ez6TXwX90HmuSK0cqnefc6FiOfMMklSWLNc3mAQSi7GPB',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '5',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl2916al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Triton, 2017 sampai 2018, sangat baik, kurang baik, diatas 8 orang, 1401cc sampai 1500cc, Solar, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'O7UGCYKo5tXMMXmKz9DDVxUxESJUnEPBFBO6NJJ7UedjG9FfCN',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '14',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5662al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Calya, 2015 sampai 2016, sangat baik, sangat baik, dibawah 5 orang, 1601cc sampai 2000cc, Pertamax, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'NzBK8bCMTkkB9J765QXBLBHciHjmugGH5jYzLq7G4cfGGJqGmo',
                        'user_id' => '4',
                        'shop_id' => '3',
                        'merk_id' => '6',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl8456al',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type E, 2015 sampai 2016, kurang baik, kurang baik, 7 sampai 8 orang, 1301cc sampai 1400cc, Pertalite, 551rb sampai 600rb/hari, ',]);
                //
                // Oto Car
                    car::create([
                        'slug' => 'odoDYyQt6hSHJbC3nLK3NCRZoU2BYGQl9gXzwfmQiLu6rmFFFi',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '6',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3868zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type E, 2017 sampai 2018, Baik, sangat baik, 7 sampai 8 orang, diatas 2000cc, Pertamax, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => '1OD3q9j6j6RXmA3Gd5AmOanAFD2OPjRbnbehzGEuGxmcZCjDhu',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '10',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl2158zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Rush, 2019 sampai 2020, kurang baik, Baik, dibawah 5 orang, 1601cc sampai 2000cc, Solar, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'TwdOVHHgBKxjzWsu2OtjbWSqltMtBWreSIBejvhY8QHRjpMBFo',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '9',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9833zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Kijang Innova, 2021 sampai 2022, Baik, Baik, diatas 8 orang, 1301cc sampai 1400cc, Pertamax, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'PIHQx6Dj33TMRO3OnUQtV8j8wAbIMnvbIsNqZMZdpCukrEV2mu',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '13',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6201zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Mobilio RS, dibawah 2010, kurang baik, sangat baik, diatas 8 orang, 1601cc sampai 2000cc, Pertamax, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => 'rMblu1V133Zwp9l9M1PyJCP0tDdzULw4GI85mmWXbJ9dzthbrk',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '10',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5819zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Rush, 2015 sampai 2016, kurang baik, Baik, 7 sampai 8 orang, 1501cc sampai 1600cc, Pertamina DEX, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => 'KgqF1yskUBNH1w9mlmdlNX6FnVMqoAKgBx78ySnCOHFMiCuqiy',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '11',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '44',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1989zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Hiace, 2019 sampai 2020, sangat baik, kurang baik, 7 sampai 8 orang, 1501cc sampai 1600cc, Pertamina DEX, dibawah 300rb/hari, ',]);
                    car::create([
                        'slug' => 'Gf5Bvr7qQ6noh4BigM88heNaY43UupVXhAhd3jVmwELbdCfmf5',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '11',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl4908zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Hiace, 2010 sampai 2012, Baik, sangat baik, 7 sampai 8 orang, dibawah 1300cc, Solar, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => 'ne0pwL14V72oBHxEJwjHoKkRDTG30iCKoGwO6OfPcEHuivpHqa',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '10',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '44',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5650zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Rush, 2015 sampai 2016, Baik, kurang baik, 5 sampai 6 orang, 1601cc sampai 2000cc, Solar, dibawah 300rb/hari, ',]);
                    car::create([
                        'slug' => 'OBFxO1mZX6ykBu8y7DAiapSoU36lTCVIxFzzPMhuKT7jbI7h5D',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '2',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl4317zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Xenia, dibawah 2010, kurang baik, Baik, 5 sampai 6 orang, 1501cc sampai 1600cc, Pertamax Turbo, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => 'AazRLJTXiI3WXi9IgxWCcNhThXMTPFiPLEtGMtJuoT7XMes1Zy',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '14',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6382zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Calya, 2019 sampai 2020, Baik, Baik, diatas 8 orang, dibawah 1300cc, Pertamina DEX, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'jp2yD1Q9qX8wnUwbeJtAHFJCrhEQI0sEertagl9fkWxEQ0dPKJ',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '11',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9708zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Hiace, dibawah 2010, Baik, kurang baik, dibawah 5 orang, 1501cc sampai 1600cc, Pertamina DEX, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'XkYgvPUScNF9RpArLMJOqsuFEmzyVehuZaR6h0ylbyw9Z2SgDS',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '11',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl8970zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Hiace, 2021 sampai 2022, Baik, sangat baik, 5 sampai 6 orang, 1501cc sampai 1600cc, Pertamax Turbo, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => 'ugDX8Vq62B0AWQl3MJPdUZMqwaD7RdoiXYb1QA0UH88ZnalsVu',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '7',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5265zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type G, dibawah 2010, Baik, sangat baik, diatas 8 orang, dibawah 1300cc, Pertamax, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => 'pJKvaZFV8TP3VkOuePU98vA5GXOly0xG5TJo0FslKCSpKFKFYG',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '3',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '44',
                        'stok' => 'standby',
                        'no_polisi' => 'bl4844zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Jazz RS, 2021 sampai 2022, Baik, Baik, 7 sampai 8 orang, 1501cc sampai 1600cc, Pertamax, dibawah 300rb/hari, ',]);
                    car::create([
                        'slug' => 'Ti38h8D7bfSnlmX3cBxyjDj1ZOhIrCCx0kCVPBA0zU5g36pM0A',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '13',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7961zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Mobilio RS, 2017 sampai 2018, sangat baik, sangat baik, 5 sampai 6 orang, 1301cc sampai 1400cc, Pertalite, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => 'evO5fF7RlWojqUTQcUIZfwvnysZG8JQcaA02fEBiH00NWOy9XX',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '2',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1596zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Xenia, 2017 sampai 2018, kurang baik, kurang baik, dibawah 5 orang, dibawah 1300cc, Pertamax, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => 'Z4TtxLlQHRJy5AFPtNvtRXCDqcfxAUAoqIStS1srY8RtXVimQp',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '8',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9738zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Veloz, 2013 sampai 2014, sangat baik, kurang baik, diatas 8 orang, diatas 2000cc, Pertamax Turbo, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => 'uNyil57DsUYeItquvR72yNR3ruK6gO3kFvuedP5AOTZ51y3Nfj',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '2',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1402zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Xenia, 2017 sampai 2018, sangat baik, kurang baik, diatas 8 orang, 1301cc sampai 1400cc, Pertamax, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => 'kjproQhbt03fzOkbk2Qn0bDatL49YI4abcJxAgBeS1kWxcJhH8',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '2',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7041zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Xenia, 2017 sampai 2018, Baik, sangat baik, diatas 8 orang, diatas 2000cc, Pertamax, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => 'NlqrqBvs9vRSZueHcsXL9oVJMiw4zFAc1WImBkHyuFzjnFacYi',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '10',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5803zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Rush, 2015 sampai 2016, Baik, sangat baik, 7 sampai 8 orang, diatas 2000cc, Pertalite, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => 'w2RIRim3HyQy8mZ9qSCrLJHOKMSfo3GjyqrLLFGlI6WJIwd6Ju',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '7',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1049zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type G, 2013 sampai 2014, kurang baik, kurang baik, diatas 8 orang, 1601cc sampai 2000cc, Pertamina DEX, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => 'mpj9QIMrQ63MKqkg4CMrzNI5xaFIdqLOcUZqsem5vf7kADAs7l',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '13',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9047zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Mobilio RS, dibawah 2010, sangat baik, sangat baik, dibawah 5 orang, 1501cc sampai 1600cc, Pertamax, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => '9IC5mHUZNbLKjOrP9CH7QzpN6f11jX3hCAjp6Ytv5M84oIHazT',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '5',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '44',
                        'stok' => 'standby',
                        'no_polisi' => 'bl2349zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Triton, 2019 sampai 2020, Baik, sangat baik, 5 sampai 6 orang, 1301cc sampai 1400cc, Pertalite, dibawah 300rb/hari, ',]);
                    car::create([
                        'slug' => 'pt2gNtmwjQ3xAwwTsUx7jrsshbTG819xJhk3irYAnmqgmcibwW',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '1',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5305zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Terios, 2010 sampai 2012, kurang baik, Baik, 5 sampai 6 orang, 1601cc sampai 2000cc, Pertamina DEX, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => 'UIpiMSZc7JxhOKyvyFcXXPaTQ4iVaOJkQMjNVGD8h4wisi5UxS',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '5',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7789zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Triton, 2017 sampai 2018, kurang baik, sangat baik, 5 sampai 6 orang, 1401cc sampai 1500cc, Solar, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => 'uPbRXrhQgM1AGNJUSOJc5k0gSWOIOYOxnmEFE4HSC2O6Tn2xBW',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '4',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7630zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Pajero Sport, 2021 sampai 2022, Baik, Baik, diatas 8 orang, 1601cc sampai 2000cc, Pertamax, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'GEcGzgaXcayX6gVfvkplu0hfghqEmwwbncaiGtwD810Uebp9wd',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '2',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1085zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Xenia, 2013 sampai 2014, Baik, sangat baik, 5 sampai 6 orang, 1501cc sampai 1600cc, Pertalite, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => 'QZp3duhc3gT2PfP9PG4vTu5oZLh6zarRfsR2htvu0KmYyoYll7',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '10',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6387zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Rush, 2010 sampai 2012, kurang baik, sangat baik, diatas 8 orang, 1601cc sampai 2000cc, Pertamina DEX, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => 'gG60v1ALbR2yqOvUBipuitQm9HgjhjgC3i1X2E9Kw9AxaQkJJh',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '6',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl8686zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type E, 2019 sampai 2020, kurang baik, sangat baik, diatas 8 orang, 1301cc sampai 1400cc, Pertalite, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => 'pT5HDf5i10KDpAEilKR6kSwMGm0neCrKh7MzrTbdRDzPq8cU9e',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '2',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl2805zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Xenia, dibawah 2010, Baik, sangat baik, diatas 8 orang, 1301cc sampai 1400cc, Pertamax Turbo, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'HpwfTGdFwh1KNGlX5xjRH7Z219UViEMB3bQocJcGldDyq0w766',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '9',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3498zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Kijang Innova, 2010 sampai 2012, kurang baik, kurang baik, 5 sampai 6 orang, 1301cc sampai 1400cc, Pertalite, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => '2Uk4EJM4Mpi7EapbdA7SP4criCUN4dhAZBqMHysuMDr7WlhE7h',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '3',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl8109zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Jazz RS, 2019 sampai 2020, Baik, sangat baik, dibawah 5 orang, 1601cc sampai 2000cc, Solar, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => '958LPxGTPTg4I9umh55ntFXVqHMO6VX5bdX0od73HQNArJSHGA',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '14',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3166zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Calya, 2015 sampai 2016, kurang baik, sangat baik, dibawah 5 orang, 1401cc sampai 1500cc, Pertamina DEX, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => 'QBbatjK8chGcfZlcfBkspeAjOFlIltm3C5ZP5eJUFrtEQfmHjM',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '5',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl2708zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Triton, 2015 sampai 2016, kurang baik, kurang baik, dibawah 5 orang, dibawah 1300cc, Pertalite, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'fwZE5pCiyrjk5HC1GKlh7BKvSeAIEMScMBGzXK4b7VJKWiZyyp',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '8',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7471zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Veloz, dibawah 2010, sangat baik, sangat baik, 5 sampai 6 orang, 1501cc sampai 1600cc, Pertamina DEX, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => 'fHsp62joA316hXCBefy3VXIUtb6IDMMNOgTbdAInfqeMBIE4Vy',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '13',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6653zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Mobilio RS, dibawah 2010, Baik, Baik, 7 sampai 8 orang, dibawah 1300cc, Pertamax, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => 'k5ie4JZfvCckgSZFsIZzDiFEkB272e1BN5tVlSnuzbijenOvwL',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '6',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7482zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type E, 2010 sampai 2012, sangat baik, kurang baik, dibawah 5 orang, 1401cc sampai 1500cc, Solar, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => 'rsqcKwHJUn4onDeIVqfZ6qmId9KBp80KpvR8Q6WDDLbHsoAdId',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '8',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7165zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Veloz, 2019 sampai 2020, kurang baik, kurang baik, dibawah 5 orang, 1401cc sampai 1500cc, Pertamax Turbo, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'u8doMZP6C69zRoe8moS8BWPSlWv8yGaBTPJFvFDxcIa0r2Nm4N',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '7',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl4965zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type G, 2015 sampai 2016, Baik, kurang baik, diatas 8 orang, 1401cc sampai 1500cc, Pertamax, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => 'VzjBKfuucARgG7G8rCmzbb5HwlKyG1vUgXPIvl2O8szKJvsNOT',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '12',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6537zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Suzuki Ertiga, 2019 sampai 2020, Baik, kurang baik, 7 sampai 8 orang, diatas 2000cc, Pertamina DEX, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'oyqggfIHrZW6hiD31hIOyeb2s4SHSlOrt4fc6lHH0a7rqaynIf',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '4',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl8907zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Pajero Sport, 2017 sampai 2018, sangat baik, kurang baik, dibawah 5 orang, dibawah 1300cc, Solar, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => 't8XF2naueTiLYu5UQpKhXYzSeDrao5WxAvcjuc6m08i4HCoN5z',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '9',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9680zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Kijang Innova, 2019 sampai 2020, sangat baik, Baik, 7 sampai 8 orang, 1501cc sampai 1600cc, Solar, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => 'VL0J8YZ5SZKtHsa5uPTJVLU6V4BVzLjxKU92BMnHdt4FSCEFSQ',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '14',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5729zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Calya, dibawah 2010, kurang baik, sangat baik, 5 sampai 6 orang, 1301cc sampai 1400cc, Pertalite, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => 'J2TAMEbOj3DL2sVza6icdLUSnHdCtTmkGqhX2YTfwEsvSjSdat',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '8',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl4250zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Veloz, 2010 sampai 2012, kurang baik, kurang baik, diatas 8 orang, diatas 2000cc, Pertalite, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => 'uGwJsTnDXEQ0mWLGrwY3x2S5B7CFQlsLgHlkBh7HmQOc09yjri',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '13',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6944zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Mobilio RS, 2021 sampai 2022, sangat baik, kurang baik, 7 sampai 8 orang, 1501cc sampai 1600cc, Pertalite, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => 'ZADL110lmyUUC5j3xS6P9MrC6DXuyb9g6TCNNS3zUMHYqTtTRo',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '12',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9368zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Suzuki Ertiga, 2017 sampai 2018, Baik, kurang baik, 5 sampai 6 orang, diatas 2000cc, Pertamax Turbo, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => 'D1VwlOJWbJEmLY6KGQM5wmKny9TDz4MtYHOIYgNTbYC9FUjQQa',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '7',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9952zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type G, 2019 sampai 2020, kurang baik, sangat baik, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertalite, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'vTdwbndIc6Pj4i5FPhvOU2eX2G1eIh5wcbWpssFOUHgz2d2NKP',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '11',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7182zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Hiace, 2019 sampai 2020, kurang baik, Baik, 5 sampai 6 orang, 1501cc sampai 1600cc, Pertalite, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => 'oHXETi7jxUOrhD5q6WmbWkqI1dHyN3hoxpXldeLgTTwcX7vqI0',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '10',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl2006zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Rush, 2021 sampai 2022, kurang baik, sangat baik, diatas 8 orang, 1501cc sampai 1600cc, Pertamax, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => 'Xh4gTMFV5gJnLog4vCB3hR4KdsnxeZfelCYcDoWhDNHk9B0WjM',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '12',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl2381zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Suzuki Ertiga, 2017 sampai 2018, sangat baik, kurang baik, diatas 8 orang, 1501cc sampai 1600cc, Pertamina DEX, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => 'FsnOhuAaO89QH5zhup0UdUKVKwMGlqVbckPrQ2Cov2GRnQDpo0',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '14',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl8347zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Calya, 2015 sampai 2016, Baik, Baik, dibawah 5 orang, 1301cc sampai 1400cc, Pertamina DEX, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'x1QlJPcMCkCuQ86csrLOeJGIYXGEu8PJcY4hXsq8lyQPk6sclA',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '8',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '44',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1127zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Veloz, dibawah 2010, Baik, Baik, dibawah 5 orang, dibawah 1300cc, Pertamax, dibawah 300rb/hari, ',]);
                    car::create([
                        'slug' => 'YpazVxnKlI4icNHndJgN2qc152dtFvP5WDqYR1PDsGK1Wc783B',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '15',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5476zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Xpander, dibawah 2010, sangat baik, Baik, diatas 8 orang, 1601cc sampai 2000cc, Solar, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => 'bUnnJQey5TZ2M5T0MNWeBbPAY5Togz2l71AWcpLlgJMsoCnCeC',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '8',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3031zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Veloz, 2015 sampai 2016, kurang baik, sangat baik, 7 sampai 8 orang, 1601cc sampai 2000cc, Pertalite, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => '5vUA0rqgZ16TnEId3rBtp0pC2eCKz92uI7AygzrkkB5trerLrr',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '8',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl4696zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Veloz, 2013 sampai 2014, sangat baik, Baik, dibawah 5 orang, 1401cc sampai 1500cc, Pertamina DEX, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'cHzQiLJE3iyRjUpJ4GGMQSaDqmkUzTAe69APR7FOBVkldDzpIA',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '2',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl2795zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Xenia, 2017 sampai 2018, kurang baik, sangat baik, 5 sampai 6 orang, 1401cc sampai 1500cc, Pertamax Turbo, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => 'Vxtc3ShTEk0kSllym9sJ8JjK9HIwZypevCk3LIYqfRJWNB409r',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '2',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '44',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1241zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Xenia, 2013 sampai 2014, kurang baik, kurang baik, 7 sampai 8 orang, diatas 2000cc, Pertamina DEX, dibawah 300rb/hari, ',]);
                    car::create([
                        'slug' => 'tcwJ69Zp4UuOEvuXX6tuzKfvXW9hM7ASPXOfbEfMPuAHxtD1Gc',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '13',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5818zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Mobilio RS, 2021 sampai 2022, Baik, Baik, 7 sampai 8 orang, dibawah 1300cc, Pertamax Turbo, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => 'IvlG9z2ijAibIhguobVzRAhJb39y6mkql5g5qUknJHX0zAzOKo',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '15',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1885zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Xpander, 2015 sampai 2016, sangat baik, kurang baik, diatas 8 orang, 1401cc sampai 1500cc, Pertamax, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'J2eeonTZsriF7UZq1xw6rU3bPEynQXZvuXWGxJe2oUbAzv7jR6',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '13',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3986zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Mobilio RS, 2013 sampai 2014, sangat baik, Baik, dibawah 5 orang, dibawah 1300cc, Pertamina DEX, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => 'V88DWHsXdRgOiEOi6wFimz3aYvJhTr5UYWtar1op19u40uI6gs',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '7',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7539zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type G, dibawah 2010, Baik, sangat baik, diatas 8 orang, 1301cc sampai 1400cc, Pertalite, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => 'fMhDrnlzEDyesiP1I5AGSkqBYRHnVXTjJmQmXCUq9IoF55F9ma',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '11',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7097zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Hiace, 2013 sampai 2014, sangat baik, kurang baik, dibawah 5 orang, 1401cc sampai 1500cc, Pertamax, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'paRtsmi7043v9H9FnaYle5RIFVxDFiqg9FLO8Ts7TPOPGSZWRP',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '12',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5183zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Suzuki Ertiga, dibawah 2010, kurang baik, sangat baik, 5 sampai 6 orang, 1301cc sampai 1400cc, Solar, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => 'lqkx8hsVZljFGVnMpZkGiji2fzxXRRzn0Ry3aSmHTS15yukMYj',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '13',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl8209zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Mobilio RS, 2013 sampai 2014, kurang baik, sangat baik, 5 sampai 6 orang, diatas 2000cc, Pertamax, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => 'LulY8gAUGYdI4218Unf63vQjGyVEZhGs58C3MkmLbTnGueRFOF',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '5',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl2965zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Triton, 2017 sampai 2018, sangat baik, kurang baik, diatas 8 orang, 1401cc sampai 1500cc, Solar, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => 'J6HS3sv181Czkal99aPYBNzJEgWhuEOOHbkbGhuHptLm8xOMqp',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '5',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7232zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Triton, dibawah 2010, kurang baik, sangat baik, diatas 8 orang, 1501cc sampai 1600cc, Pertamina DEX, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => 'vqseIBPSXvLm24Dhe8hA1SlWZZxSQYlfahDMLYzyZq7M2Jyg52',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '4',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7918zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Pajero Sport, 2019 sampai 2020, sangat baik, sangat baik, 7 sampai 8 orang, diatas 2000cc, Solar, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => 'DhIZFNxJbJmHXw1WWV6thVyIWG7F5AIrKW8U3yLt9CDix7dFIp',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '10',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9029zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Rush, 2010 sampai 2012, Baik, kurang baik, 5 sampai 6 orang, diatas 2000cc, Solar, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => '2g60XM5Wpr5fEgDLrCJvut1InTUtWGn7x1ZrJQS5jy1nwJ4G5k',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '8',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5835zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Veloz, 2021 sampai 2022, sangat baik, sangat baik, 7 sampai 8 orang, dibawah 1300cc, Pertamax, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => 'DhfYsksf3spgJKlfBUGeVkiV0Rz779weMyXZ4QENPAbh2rBMA3',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '10',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl2147zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Rush, 2017 sampai 2018, kurang baik, sangat baik, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertamina DEX, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => 'yjkG5zWcbM65C4jQGJucTVh9HyEAei03KHKORYFkn0x8NWnmjo',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '2',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '44',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9124zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Xenia, 2017 sampai 2018, sangat baik, sangat baik, dibawah 5 orang, diatas 2000cc, Pertalite, dibawah 300rb/hari, ',]);
                    car::create([
                        'slug' => 'mpV4Zep0QWSBg1LTFloAboQnvaESb7e4hsOp2dn72vIZq2jZ4d',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '7',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl4423zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type G, 2019 sampai 2020, sangat baik, Baik, dibawah 5 orang, diatas 2000cc, Pertalite, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => 'VRByxbUcBghsMp0fLHt9Ap6neunczeM06aHzMZy0AH3ZFulYXF',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '5',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '44',
                        'stok' => 'standby',
                        'no_polisi' => 'bl4578zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Triton, dibawah 2010, kurang baik, kurang baik, 5 sampai 6 orang, 1401cc sampai 1500cc, Pertalite, dibawah 300rb/hari, ',]);
                    car::create([
                        'slug' => 'q5TBpWGMWUgLv5KYXwDQIDPPDEVGAZh96JwFctuLwDBkH9roNS',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '5',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6698zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Triton, 2010 sampai 2012, sangat baik, Baik, dibawah 5 orang, 1401cc sampai 1500cc, Solar, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => 'jxMWVWYo6VE1JdMuDaUEhZCvIB5za8Y4u7Dggl2kkiK8kZsnMl',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '14',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3422zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Calya, 2015 sampai 2016, kurang baik, Baik, 7 sampai 8 orang, dibawah 1300cc, Pertamina DEX, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => 'UCQLHfyRokSTQs1wap4LQ6mdp81PEJDHg9PU2afdkMYJwObE5Y',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '8',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '44',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1096zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Veloz, 2015 sampai 2016, sangat baik, Baik, diatas 8 orang, diatas 2000cc, Pertalite, dibawah 300rb/hari, ',]);
                    car::create([
                        'slug' => 'rXyM52R4LOvRdMWqGutIWq5uMsmOifqeCbsgNOCiGDMZqs5Cjh',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '4',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7847zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Pajero Sport, 2013 sampai 2014, sangat baik, sangat baik, 5 sampai 6 orang, diatas 2000cc, Pertalite, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => 'qvvm8hY6Ja27xWejv5YoRe8PbRdUU07jZndiUnH1KWBAcqX3Af',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '6',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '44',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9990zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type E, 2013 sampai 2014, Baik, sangat baik, diatas 8 orang, 1301cc sampai 1400cc, Solar, dibawah 300rb/hari, ',]);
                    car::create([
                        'slug' => '45CiNzkgGkxl25t4EgQn6pHyTjtqVXqXUMrYp2DSYQO2t2BagW',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '12',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7862zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Suzuki Ertiga, dibawah 2010, Baik, Baik, 5 sampai 6 orang, diatas 2000cc, Solar, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => '3Kgjnf1IYsszkAisZPAgQ0OZs6Dwm9X5UVkD71cSeyiUu6buwu',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '11',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9736zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Hiace, 2013 sampai 2014, kurang baik, kurang baik, 7 sampai 8 orang, dibawah 1300cc, Solar, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => 'qZWZtL80eRwYqkuPG3WAkW1iwCYjs13Jup6NkxP8FiDA0DF7Kz',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '15',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6719zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Xpander, 2010 sampai 2012, Baik, Baik, 5 sampai 6 orang, 1401cc sampai 1500cc, Solar, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => '8npfjepSLmlWGQDFes2Ps394G3lTKpFkjfgYNsTJtY349CEbgs',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '9',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl8727zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Kijang Innova, 2013 sampai 2014, Baik, kurang baik, dibawah 5 orang, dibawah 1300cc, Pertamina DEX, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => 'YVShJHzfqDPgwGe4CC0IW56JHH34A41DB5k3Ob7wJtbAB2It8L',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '5',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5990zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Triton, 2013 sampai 2014, kurang baik, Baik, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertalite, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => 'lp9aYmOgfyecwYwayIse3wq93YsFAuZhbPMjuZLefk3Sc4dazh',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '2',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7292zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Xenia, 2013 sampai 2014, kurang baik, sangat baik, diatas 8 orang, 1601cc sampai 2000cc, Pertamax, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'EdQ1AGGVNYXoZkP111cl5wcnPygohn2N8bLfDUYBFfy206ZBcJ',
                        'user_id' => '5',
                        'shop_id' => '4',
                        'merk_id' => '13',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5912zk',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Mobilio RS, 2021 sampai 2022, Baik, Baik, diatas 8 orang, 1601cc sampai 2000cc, Pertamax, 300rb sampai 350rb/hari, ',]);
                //
                // Benseupakat Rentcar
                    car::create([
                        'slug' => '3hVgtgiO8Q8m1rcCtqcnGYSbZL3Pu0GLKta7gkAeujcDJoWUtr',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '10',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9928lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Rush, 2019 sampai 2020, Baik, sangat baik, 5 sampai 6 orang, 1301cc sampai 1400cc, Pertamax, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => 'IIQ0NtfBtohkpfAS0gZdpoBpPysDDIMamVODKaUEKhCgrHBuZu',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '6',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7995lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type E, 2015 sampai 2016, Baik, Baik, 7 sampai 8 orang, 1601cc sampai 2000cc, Solar, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => 'vfawHTxtssPdUJ9fVFyhHU5sisTdcD71F3tk1rk5kG7l1wHMNo',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '13',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '44',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1769lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Mobilio RS, 2021 sampai 2022, kurang baik, sangat baik, diatas 8 orang, 1301cc sampai 1400cc, Pertalite, dibawah 300rb/hari, ',]);
                    car::create([
                        'slug' => 'X4sI3YkewVycVo7v2RDQZDTwLlp9Kvse3rGflGNcvyHQTdKOgj',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '6',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '44',
                        'stok' => 'standby',
                        'no_polisi' => 'bl8913lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type E, 2010 sampai 2012, Baik, Baik, diatas 8 orang, 1401cc sampai 1500cc, Pertalite, dibawah 300rb/hari, ',]);
                    car::create([
                        'slug' => 'd95TabFTMjt2zJwU0KxGK7Rof3rNKv1q9xm4VYUxautW7sYWzQ',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '14',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3198lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Calya, 2017 sampai 2018, sangat baik, sangat baik, 7 sampai 8 orang, 1301cc sampai 1400cc, Pertamax Turbo, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => '8XvVmmsirRDmt8WZZyJ1TH3ta2BRUsO3F6eF0qpZYGC5HaCOZq',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '11',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '44',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7559lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Hiace, 2015 sampai 2016, kurang baik, Baik, 5 sampai 6 orang, 1401cc sampai 1500cc, Solar, dibawah 300rb/hari, ',]);
                    car::create([
                        'slug' => 'bQO7nyCIFtB0Rru9YnQrYoKa511oXO1yURAjlVuqmkBvbZ5FUv',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '3',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1775lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Jazz RS, 2021 sampai 2022, sangat baik, Baik, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertamax Turbo, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => 'XQm1CkyuaohU3Rsxi4f0C9xd0o6P0FN8mhCqbhEs8vfyOcnp8I',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '13',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5734lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Mobilio RS, dibawah 2010, kurang baik, Baik, 5 sampai 6 orang, 1401cc sampai 1500cc, Solar, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'HUxN7bFshOEqn8l62nBfbHoi485eSNW5omPrxqCJnGbVr54GT0',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '14',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5708lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Calya, dibawah 2010, kurang baik, kurang baik, 7 sampai 8 orang, 1301cc sampai 1400cc, Pertamina DEX, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'lhCaGDal2fFVgYOMyzP1ULCYXyRvLoYFoLZ1ElfYdAqcWn3ZcQ',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '15',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9190lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Xpander, dibawah 2010, Baik, kurang baik, 7 sampai 8 orang, 1501cc sampai 1600cc, Pertamax Turbo, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => 'ksbpZiIzj4HHAgmSdPF8bO87QBt7TxMOlJne0hs2Hs3afvvwOS',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '9',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3354lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Kijang Innova, 2017 sampai 2018, sangat baik, Baik, 5 sampai 6 orang, 1501cc sampai 1600cc, Solar, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => 'gqfnCNyf3oEWJl8I9oIgJBwNImkLHxcBuPu00AgnJZD4WbiLIk',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '10',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6314lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Rush, 2015 sampai 2016, kurang baik, sangat baik, dibawah 5 orang, diatas 2000cc, Pertamax Turbo, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'IKk5XZqTjYUc8xfN4aXjR9W2kNXJG73mtce7p7ZKLTigT7sRgJ',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '12',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3202lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Suzuki Ertiga, 2019 sampai 2020, sangat baik, Baik, dibawah 5 orang, 1401cc sampai 1500cc, Pertamax, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => '379qv8RJVVSiIpUSkM72vQKioYJe6q1ipIIes5j8UTRsI8h3O0',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '3',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3353lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Jazz RS, 2017 sampai 2018, Baik, kurang baik, 5 sampai 6 orang, 1301cc sampai 1400cc, Pertalite, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'I2M1VVtKnK11XuMKmPqRD8WDK0xlMOhEmMP6o3wK4HBrWS3LNX',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '4',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '44',
                        'stok' => 'standby',
                        'no_polisi' => 'bl4616lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Pajero Sport, 2015 sampai 2016, kurang baik, sangat baik, dibawah 5 orang, 1601cc sampai 2000cc, Pertalite, dibawah 300rb/hari, ',]);
                    car::create([
                        'slug' => 'QUAmHkaRKGnLWLW5gqPf1jDSDll6bHORRUUFXxk7kdZqDh4Lp7',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '10',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7217lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Rush, 2017 sampai 2018, sangat baik, Baik, diatas 8 orang, dibawah 1300cc, Pertamina DEX, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => '1siMty8070tYoZ2qk9AtHUvmgGZapD5056ZFhpFO47ljGUuuId',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '10',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7747lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Rush, 2013 sampai 2014, Baik, sangat baik, dibawah 5 orang, dibawah 1300cc, Pertalite, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => 'ZR2OhIGdP8GdtB05ZtDUMfGVhf5wDBJBfLZfvJ0wuVOrVP46G8',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '12',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6116lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Suzuki Ertiga, 2021 sampai 2022, Baik, kurang baik, diatas 8 orang, dibawah 1300cc, Pertalite, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'XEKfo2FBFuZ3uXj1vs39GgdpX2ZsMs31sITbBZjkq09QiEnZT5',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '14',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl2288lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Calya, 2017 sampai 2018, Baik, Baik, 7 sampai 8 orang, 1601cc sampai 2000cc, Pertamax Turbo, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'wTVvquwpnMnWEhttTAVn9of73lc9XkoqWtrAlEgAyE6QlkRWRD',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '8',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl2926lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Veloz, 2015 sampai 2016, kurang baik, sangat baik, diatas 8 orang, 1301cc sampai 1400cc, Pertamax Turbo, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => 'oCVFJAMGtC1CfuCYcED3r5rhvMSamck1jSSY2bheVWjQZ4WzED',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '15',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl2770lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Xpander, 2017 sampai 2018, sangat baik, sangat baik, diatas 8 orang, 1401cc sampai 1500cc, Pertamax, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'BaJJb3M1xYkoSk3llq9PViYfoRJk8fzdBWoKPilvNNtD4llSYC',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '6',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3015lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type E, 2021 sampai 2022, Baik, kurang baik, 5 sampai 6 orang, 1301cc sampai 1400cc, Pertalite, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => 'UBJivG9zMFGxp3PcDzCTMCgvK5Qu41auzHhWFPXOJc7348kvEw',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '14',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3380lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Calya, 2013 sampai 2014, sangat baik, kurang baik, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertamax, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => 'jPckpsVW2iOak7ZRx6C7FlKUJUKgJi1Q6KuGNeIfkfpsnNbwCC',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '9',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9649lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Kijang Innova, 2010 sampai 2012, sangat baik, Baik, 5 sampai 6 orang, 1301cc sampai 1400cc, Pertalite, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => '6JtoUGxgh1qzorFes3fuHQz5FcI1zwsaH12xY5czJne4pY00tU',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '10',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9691lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Rush, 2019 sampai 2020, Baik, Baik, 5 sampai 6 orang, dibawah 1300cc, Pertamax, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => 'ETVo6tDOqlRLdZiHXcagK4ra5qArL3AJrrPHWgqiEONVINysgA',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '13',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9449lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Mobilio RS, 2021 sampai 2022, Baik, kurang baik, 7 sampai 8 orang, 1601cc sampai 2000cc, Pertamina DEX, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => 'KgUBlL0lrOPKnHkd9Seii8f8k1Nbas2BSpylI4oEPihyzzE3Ab',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '12',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl4303lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Suzuki Ertiga, dibawah 2010, Baik, Baik, diatas 8 orang, 1601cc sampai 2000cc, Pertalite, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => 'aXAgFzcALD5Pfy4kgUI8jWbmWl3rgeQpoGO2zDX02RnH6DbDR3',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '1',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '44',
                        'stok' => 'standby',
                        'no_polisi' => 'bl4358lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Terios, dibawah 2010, sangat baik, kurang baik, 5 sampai 6 orang, 1401cc sampai 1500cc, Pertamax Turbo, dibawah 300rb/hari, ',]);
                    car::create([
                        'slug' => 'voNCEgnvxOExh9LdfjkWgv60aJxaadPjlsl9q81LUVBUn0Mgop',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '10',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '44',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7691lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Rush, 2019 sampai 2020, kurang baik, Baik, 5 sampai 6 orang, diatas 2000cc, Pertamax, dibawah 300rb/hari, ',]);
                    car::create([
                        'slug' => 'j3YyV6Z6SklF5CQYuPV4Ro34uLCLwqTev1P9PhP4BpPr3mjsSo',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '3',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl4310lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Jazz RS, dibawah 2010, kurang baik, sangat baik, 7 sampai 8 orang, 1501cc sampai 1600cc, Pertamax Turbo, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'ToQueX99W2kZjdP3Ce93mX9Mqvd2M7ZfVpK96rwp5DblzweoKY',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '6',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9897lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type E, 2017 sampai 2018, kurang baik, sangat baik, 7 sampai 8 orang, 1601cc sampai 2000cc, Pertamax Turbo, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => '6z2aJzEo0f3otjsuwPieBKjwxCnHWLjB8iLxfpw3lXTKBrofWt',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '9',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3860lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Kijang Innova, 2021 sampai 2022, kurang baik, sangat baik, 7 sampai 8 orang, diatas 2000cc, Pertalite, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => 'bpn3RbgOj5VibFQHcJl4HE11ol91gcUx2xqIKzDbTaWrR3gREX',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '3',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6233lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Jazz RS, 2015 sampai 2016, Baik, kurang baik, dibawah 5 orang, 1601cc sampai 2000cc, Solar, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'kqKBiKqz8VZufamnGS6NoZ8ABLa66ug3NPzge8azwotX0uVT8J',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '15',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7078lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Xpander, 2017 sampai 2018, kurang baik, Baik, 5 sampai 6 orang, 1501cc sampai 1600cc, Pertamax Turbo, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => 'VWEaIKHpKuvLE7dzpevReQEsx9rljl0LFgdQTFOnCUdq5tIMFk',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '6',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7689lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type E, 2017 sampai 2018, kurang baik, sangat baik, diatas 8 orang, 1501cc sampai 1600cc, Pertamax Turbo, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => '960eyQOlTZg91sb1KJ1OYEwntjJTtbZ45zqFHZU8emBrK6XRV5',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '4',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl4532lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Pajero Sport, 2019 sampai 2020, Baik, Baik, diatas 8 orang, 1601cc sampai 2000cc, Pertamax Turbo, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'QetU0tQm7nyG6pMIN3XnmQlM0cdlFymmETZ0sK9zPCcObIHPNI',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '7',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6687lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type G, 2010 sampai 2012, kurang baik, kurang baik, dibawah 5 orang, 1501cc sampai 1600cc, Pertamina DEX, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => '0SXKYpv84TyiSnzQY9UQ6HX0Y3MlG5kFqzVbEKLuQZ5Idcceag',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '12',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9783lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Suzuki Ertiga, 2019 sampai 2020, Baik, sangat baik, dibawah 5 orang, 1301cc sampai 1400cc, Pertalite, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => 'CEURj8X3tyfQc7FqiEQJdrlMX7R7FHfndcWLlwL8jVPJYSbkKi',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '10',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6147lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Rush, 2019 sampai 2020, Baik, kurang baik, 5 sampai 6 orang, dibawah 1300cc, Pertamax Turbo, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'UrfWthSwOo9zY04Mghn5NDCL5Q8bCC9lbSma8FkstyyoH9mN4K',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '15',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1688lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Xpander, 2010 sampai 2012, Baik, Baik, 5 sampai 6 orang, 1301cc sampai 1400cc, Pertamina DEX, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => '6FuzbejTMGtakaRqEknyIV0ppWik0iajnrwZRX2860Wfu1NBxr',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '10',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3927lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Rush, 2010 sampai 2012, sangat baik, Baik, dibawah 5 orang, 1601cc sampai 2000cc, Solar, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'lBQHo9yKDImaTXfJ4liOPCclaYl6Fk5Ar1rd40CFo7IjnrvTN2',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '6',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9168lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type E, 2010 sampai 2012, Baik, sangat baik, diatas 8 orang, dibawah 1300cc, Pertamina DEX, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => 'Fh8Ighq1hN3AuOXtS6uqEM8ZyzqB9uqcOvsZxTxrhJn8tGEgka',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '9',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1097lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Kijang Innova, 2015 sampai 2016, sangat baik, Baik, dibawah 5 orang, 1501cc sampai 1600cc, Pertamax, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => 'plhwXLIf51WizfV7XirFOktDTjrBfvRT25SFUVX0faHjZ6zGNN',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '13',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1048lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Mobilio RS, 2017 sampai 2018, kurang baik, kurang baik, dibawah 5 orang, 1301cc sampai 1400cc, Pertamax, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => 'nEgKIFOLLCMDtVFozZxc2DKcgabp2WBodibKT5nXInTkzmEHnM',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '13',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl8870lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Mobilio RS, 2010 sampai 2012, sangat baik, Baik, 7 sampai 8 orang, dibawah 1300cc, Pertamax Turbo, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => 'BIJv5gWwwVmAzL5d25LPsdWHv4bieUaJnaOaFWbkhEGQwBSrlK',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '12',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7084lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Suzuki Ertiga, 2013 sampai 2014, kurang baik, kurang baik, 5 sampai 6 orang, 1401cc sampai 1500cc, Pertamax Turbo, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => '4xAXUWJrrICrToKGi86lbQMBhxbZTz6kWoW5TvZkKG1hw3EBBC',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '12',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6701lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Suzuki Ertiga, dibawah 2010, Baik, Baik, 7 sampai 8 orang, 1501cc sampai 1600cc, Pertamax Turbo, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'Z62WawIbdS7oS9D2oADlpITdgpxXI5rSVobCIXIzh7TIPyTInC',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '9',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3482lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Kijang Innova, 2010 sampai 2012, Baik, sangat baik, diatas 8 orang, 1501cc sampai 1600cc, Pertamina DEX, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => 'dnEFT1mb8SWS4yEVsxY1MyRuJqAayNYS6SbfVToxNIcdxullO9',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '13',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9048lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Mobilio RS, 2013 sampai 2014, kurang baik, Baik, 7 sampai 8 orang, 1401cc sampai 1500cc, Solar, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => 'noQRVS06RVMLI345lvDv7lwxULMGwatSq35lvIphmXoQmiOFjp',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '9',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7389lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Kijang Innova, 2013 sampai 2014, kurang baik, sangat baik, diatas 8 orang, diatas 2000cc, Pertamina DEX, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => 'F0FhvTFOZAYvyVHVdIEoXtujYFQIciIfixuzbuyFkta2sVrMjl',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '5',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl4543lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Triton, dibawah 2010, Baik, Baik, diatas 8 orang, 1601cc sampai 2000cc, Pertamax Turbo, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'R4KXkOBWiuVIWmmuBiMUxFBDpD8o0YYnRd0mvEh5aywwkANUfF',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '10',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6986lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Rush, 2010 sampai 2012, Baik, sangat baik, diatas 8 orang, diatas 2000cc, Solar, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => 'FRZ0czhzgOqasysKdktCUppYdNmGYA8aeUFLQNUIL4KSyG6731',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '15',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3223lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Xpander, 2015 sampai 2016, Baik, sangat baik, diatas 8 orang, 1601cc sampai 2000cc, Pertamina DEX, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => '3HlIZ6rb1g49LM5Kz1FrPsDMpxz2a5D3f42gEvj53wKjw5NK7N',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '7',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl8656lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type G, 2021 sampai 2022, Baik, sangat baik, 5 sampai 6 orang, dibawah 1300cc, Pertalite, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => 'wW1oAE0i9HfCrdsRdUkgFiYeW9rqMg1RzgqOA9MlFmKs90DEgd',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '10',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl8373lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Rush, 2021 sampai 2022, sangat baik, Baik, 7 sampai 8 orang, diatas 2000cc, Solar, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => 'fgZZziOyIO45NZtKD7G7DPLJMJ4N7c3a7Ezgi65DXNFPgIeDsH',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '11',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7415lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Hiace, 2021 sampai 2022, kurang baik, sangat baik, diatas 8 orang, 1501cc sampai 1600cc, Pertamax Turbo, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => '1EmA2VKAcSvQPKD1rSXNnM9cMrYplZKkxTblVgc7fuW8Z3FhbF',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '8',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl8253lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Veloz, 2021 sampai 2022, sangat baik, kurang baik, 5 sampai 6 orang, dibawah 1300cc, Pertalite, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => '4em2YfFtH94tJfmZEg5U8lIpETUMRWfLcpYJf7L1P5CqGQM9uK',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '5',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9497lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Triton, 2017 sampai 2018, sangat baik, Baik, diatas 8 orang, 1601cc sampai 2000cc, Pertamax, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => 'eqDgRrDKuozSSxL1fx6Qb8OrUiyKtMxhrC1ZFoeSXqRgXJkFzu',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '14',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3976lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Calya, 2019 sampai 2020, sangat baik, Baik, dibawah 5 orang, diatas 2000cc, Pertamina DEX, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'z9Zcal4M7eE0iuEpSCLE6qFl6AuopLAfELuhjhEOMUIfk7a3cY',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '15',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl8347lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Xpander, 2019 sampai 2020, sangat baik, sangat baik, 5 sampai 6 orang, 1601cc sampai 2000cc, Pertalite, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'r3h2AMriCsAIwOSz53mqCke8yIkwrhH4iMXCZXvl308AGiONSj',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '9',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6571lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Kijang Innova, 2017 sampai 2018, sangat baik, Baik, dibawah 5 orang, 1401cc sampai 1500cc, Pertamax, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'PrTUsm5IuE0WyInKdLBI9cI3qJDP0j0QTPwU86jCFDktYfTYvo',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '7',
                        'Tahun_Produksi_id' => '21',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5137lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type G, 2019 sampai 2020, Baik, kurang baik, dibawah 5 orang, diatas 2000cc, Pertamina DEX, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'jNQFOozUe1Jq270vZ8xdw3hs62wj9yQCHW8LTgiZOtOgW1nBf2',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '6',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '41',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5610lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type E, 2010 sampai 2012, kurang baik, sangat baik, dibawah 5 orang, 1501cc sampai 1600cc, Pertamax, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => 'r8bBxlKrF8jUANSioEJIr7wsVCuqJFP3LJ05hyBO96k6MNrMOg',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '7',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl8438lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type G, 2017 sampai 2018, kurang baik, Baik, 7 sampai 8 orang, 1301cc sampai 1400cc, Pertamax Turbo, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => '5WhqY3lH1ZunJzPWJ8xZK8nMv1mqwKtVkCVGeO7njM2ZGwFNZu',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '6',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5773lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type E, 2015 sampai 2016, sangat baik, kurang baik, 7 sampai 8 orang, dibawah 1300cc, Pertamax Turbo, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => '68OEwjqRKUh2ofCjxDbuS1g9JwAvtkmzqbPhq0uptPdzflIKSI',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '3',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3563lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Jazz RS, 2021 sampai 2022, sangat baik, kurang baik, 5 sampai 6 orang, dibawah 1300cc, Pertamax Turbo, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => 'S0PZfJHuOwuOjbmKCnt1E0MaZfmkOWTdFCNmhhHKd6YNTqwuem',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '8',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '34',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7453lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Veloz, 2017 sampai 2018, kurang baik, Baik, diatas 8 orang, 1301cc sampai 1400cc, Solar, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'eb1UPHyPvmAOqCN7VhFmY9ozP3cH5xjXExG1dJcJxOYJetJEpT',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '7',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '44',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6220lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type G, dibawah 2010, sangat baik, sangat baik, 7 sampai 8 orang, diatas 2000cc, Solar, dibawah 300rb/hari, ',]);
                    car::create([
                        'slug' => 'qAoA4WWIiV7LFIagUahtZSa9lk9S1ONAwy7WK4XZQ5EcDr9DCP',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '11',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3211lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Hiace, dibawah 2010, Baik, Baik, 5 sampai 6 orang, diatas 2000cc, Pertamina DEX, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => 'NTPsaR7BFhEE06BU0tt70AoprKDlT2LQM6IT4JgRbziMVKR7tj',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '7',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl6356lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type G, 2017 sampai 2018, Baik, sangat baik, dibawah 5 orang, 1501cc sampai 1600cc, Pertamina DEX, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'phCKE00PEZnvrQ3N8V3XonuOmNXckLQgFv9zqz4k1ixDRSif8f',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '15',
                        'Tahun_Produksi_id' => '16',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '38',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9697lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Xpander, dibawah 2010, Baik, kurang baik, 5 sampai 6 orang, diatas 2000cc, Solar, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => 'MiClnHSEP7EThrXzVMPsZ85sEECWQoaGZ06BwrqErH8tKvpxMM',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '1',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7948lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Terios, 2013 sampai 2014, sangat baik, sangat baik, 7 sampai 8 orang, 1601cc sampai 2000cc, Solar, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => 'd33KGJuxQmG6cpNC1a6GjpqmBZ32JF5SB5QxzXrFEkbBxy7buH',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '15',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '44',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5023lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Xpander, 2015 sampai 2016, Baik, sangat baik, dibawah 5 orang, 1601cc sampai 2000cc, Solar, dibawah 300rb/hari, ',]);
                    car::create([
                        'slug' => 'CHZ7eICDO0niCqJtSYo3fjPxLp0ZH5y53EHA4vKSN4cdvoB321',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '5',
                        'Tahun_Produksi_id' => '20',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '48',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7604lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Triton, 2017 sampai 2018, sangat baik, sangat baik, 7 sampai 8 orang, dibawah 1300cc, Pertalite, 451rb sampai 500rb/hari, ',]);
                    car::create([
                        'slug' => 'qINwk3BlbwI909au70QIL6o3Q6PahPZ7pCjF7L8XkS80oSodIB',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '15',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '46',
                        'stok' => 'standby',
                        'no_polisi' => 'bl8602lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Xpander, 2013 sampai 2014, sangat baik, kurang baik, 5 sampai 6 orang, 1601cc sampai 2000cc, Pertalite, 351rb sampai 400rb/hari, ',]);
                    car::create([
                        'slug' => 'gxyq70vcBTn3ZdwmuPnlknOKNjkAHldwLCML8pCio0SwGOGNjd',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '8',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl2427lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Veloz, 2013 sampai 2014, Baik, sangat baik, 7 sampai 8 orang, 1601cc sampai 2000cc, Pertamina DEX, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => 'Ltwmqp0EHAgMuuHojAnNej8rpmfcf6agk8yehjpMA3MQipk4w1',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '7',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '44',
                        'stok' => 'standby',
                        'no_polisi' => 'bl2371lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type G, 2015 sampai 2016, Baik, Baik, 5 sampai 6 orang, 1501cc sampai 1600cc, Pertamax Turbo, dibawah 300rb/hari, ',]);
                    car::create([
                        'slug' => 'tHp4EynNwwyL0BuK7XNK5so5np6wab6NFLCNJ7fIgm0h2SJtGH',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '2',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl7486lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Daihatsu Xenia, 2010 sampai 2012, kurang baik, Baik, dibawah 5 orang, 1401cc sampai 1500cc, Pertalite, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => '2gS1awRGwousDLOd1sCi6LqHbDRrxz7cipBnD8wKALRyM3Xhgd',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '12',
                        'Tahun_Produksi_id' => '19',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '35',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '44',
                        'stok' => 'standby',
                        'no_polisi' => 'bl8430lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Suzuki Ertiga, 2015 sampai 2016, sangat baik, kurang baik, 5 sampai 6 orang, 1401cc sampai 1500cc, Pertamina DEX, dibawah 300rb/hari, ',]);
                    car::create([
                        'slug' => '4H3AwO1BS6pQC5AxCfmZ1ybXbPHzMn8R4lzaSgZ0JXuoQSvuDI',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '6',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '23',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '29',
                        'Kapasitas_Mesin_id' => '33',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '45',
                        'stok' => 'standby',
                        'no_polisi' => 'bl9249lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type E, 2013 sampai 2014, kurang baik, kurang baik, dibawah 5 orang, dibawah 1300cc, Solar, 300rb sampai 350rb/hari, ',]);
                    car::create([
                        'slug' => 'FHwhc4wcTSCNuOiZq6BW9SIfywW9hL1K7oOhmabVpmKUnEUsqw',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '13',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '43',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl4883lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Honda Mobilio RS, 2021 sampai 2022, Baik, Baik, 7 sampai 8 orang, 1601cc sampai 2000cc, Solar, diatas 600rb/hari, ',]);
                    car::create([
                        'slug' => 'EVmp2iVXXyNcvIqS2nsCOy4PcuA1YTXa47BiWiq6E8aGozmnAb',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '12',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '37',
                        'Jenis_BBM_id' => '39',
                        'Harga_Sewa_id' => '49',
                        'stok' => 'standby',
                        'no_polisi' => 'bl2208lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Suzuki Ertiga, 2010 sampai 2012, sangat baik, kurang baik, 7 sampai 8 orang, 1601cc sampai 2000cc, Pertamax Turbo, 501rb sampai 550rb/hari, ',]);
                    car::create([
                        'slug' => 'j8dDN05i9asGK9ZXUMt67e0ZrZao5IY3P1WDnMKssOGxVq4Blp',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '5',
                        'Tahun_Produksi_id' => '18',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '27',
                        'Muatan_Penumpang_id' => '32',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '47',
                        'stok' => 'standby',
                        'no_polisi' => 'bl5225lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Triton, 2013 sampai 2014, Baik, Baik, diatas 8 orang, 1501cc sampai 1600cc, Pertalite, 401rb sampai 450rb/hari, ',]);
                    car::create([
                        'slug' => 'AaU1bTyUwN1paXYA6FHgPZO2s1KFIplhzqm2SrhdxSH8ZsKewC',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '4',
                        'Tahun_Produksi_id' => '17',
                        'Kondisi_Fisik_id' => '24',
                        'Kondisi_Mesin_id' => '26',
                        'Muatan_Penumpang_id' => '30',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '40',
                        'Harga_Sewa_id' => '50',
                        'stok' => 'standby',
                        'no_polisi' => 'bl1139lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Mitsubishi Pajero Sport, 2010 sampai 2012, Baik, kurang baik, 5 sampai 6 orang, 1501cc sampai 1600cc, Pertamina DEX, 551rb sampai 600rb/hari, ',]);
                    car::create([
                        'slug' => 'RhBF57GNx1IumqyukU67w3E08PvcAr38svqrKiMRFhHgrxoYWX',
                        'user_id' => '6',
                        'shop_id' => '5',
                        'merk_id' => '7',
                        'Tahun_Produksi_id' => '22',
                        'Kondisi_Fisik_id' => '25',
                        'Kondisi_Mesin_id' => '28',
                        'Muatan_Penumpang_id' => '31',
                        'Kapasitas_Mesin_id' => '36',
                        'Jenis_BBM_id' => '42',
                        'Harga_Sewa_id' => '51',
                        'stok' => 'standby',
                        'no_polisi' => 'bl3805lb',
                        'deskripsi' => NULL,
                        'kata_kunci' => 'Toyota Avanza Type G, 2021 sampai 2022, sangat baik, sangat baik, 7 sampai 8 orang, 1501cc sampai 1600cc, Pertalite, diatas 600rb/hari, ',]);
                //
        //

        // Table Nilai Pasee dan Adam Real ================================================================
            nilai::create([
                'car_id' => '1',
                'kriteria_id' => '1',
                'alternatif_id' => '9',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '1',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '1',
                'kriteria_id' => '3',
                'alternatif_id' => '20',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '1',
                'kriteria_id' => '4',
                'alternatif_id' => '23',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '1',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '1',
                'kriteria_id' => '6',
                'alternatif_id' => '32',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '1',
                'kriteria_id' => '7',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '1',
                'kriteria_id' => '8',
                'alternatif_id' => '39',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '2',
                'kriteria_id' => '1',
                'alternatif_id' => '9',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '2',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '2',
                'kriteria_id' => '3',
                'alternatif_id' => '20',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '2',
                'kriteria_id' => '4',
                'alternatif_id' => '23',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '2',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '2',
                'kriteria_id' => '6',
                'alternatif_id' => '32',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '2',
                'kriteria_id' => '7',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '2',
                'kriteria_id' => '8',
                'alternatif_id' => '39',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '3',
                'kriteria_id' => '1',
                'alternatif_id' => '9',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '3',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '3',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '3',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '3',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '3',
                'kriteria_id' => '6',
                'alternatif_id' => '32',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '3',
                'kriteria_id' => '7',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '3',
                'kriteria_id' => '8',
                'alternatif_id' => '39',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '4',
                'kriteria_id' => '1',
                'alternatif_id' => '9',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '4',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '4',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '4',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '4',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '4',
                'kriteria_id' => '6',
                'alternatif_id' => '32',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '4',
                'kriteria_id' => '7',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '4',
                'kriteria_id' => '8',
                'alternatif_id' => '39',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '5',
                'kriteria_id' => '1',
                'alternatif_id' => '9',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '5',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '5',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '5',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '5',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '5',
                'kriteria_id' => '6',
                'alternatif_id' => '32',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '5',
                'kriteria_id' => '7',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '5',
                'kriteria_id' => '8',
                'alternatif_id' => '39',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '6',
                'kriteria_id' => '1',
                'alternatif_id' => '8',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '6',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '6',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '6',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '6',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '6',
                'kriteria_id' => '6',
                'alternatif_id' => '30',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '6',
                'kriteria_id' => '7',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '6',
                'kriteria_id' => '8',
                'alternatif_id' => '43',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '7',
                'kriteria_id' => '1',
                'alternatif_id' => '8',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '7',
                'kriteria_id' => '2',
                'alternatif_id' => '15',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '7',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '7',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '7',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '7',
                'kriteria_id' => '6',
                'alternatif_id' => '30',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '7',
                'kriteria_id' => '7',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '7',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '8',
                'kriteria_id' => '1',
                'alternatif_id' => '8',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '8',
                'kriteria_id' => '2',
                'alternatif_id' => '14',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '8',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '8',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '8',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '8',
                'kriteria_id' => '6',
                'alternatif_id' => '30',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '8',
                'kriteria_id' => '7',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '8',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '9',
                'kriteria_id' => '1',
                'alternatif_id' => '8',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '9',
                'kriteria_id' => '2',
                'alternatif_id' => '13',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '9',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '9',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '9',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '9',
                'kriteria_id' => '6',
                'alternatif_id' => '30',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '9',
                'kriteria_id' => '7',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '9',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '10',
                'kriteria_id' => '1',
                'alternatif_id' => '7',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '10',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '10',
                'kriteria_id' => '3',
                'alternatif_id' => '20',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '10',
                'kriteria_id' => '4',
                'alternatif_id' => '23',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '10',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '10',
                'kriteria_id' => '6',
                'alternatif_id' => '30',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '10',
                'kriteria_id' => '7',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '10',
                'kriteria_id' => '8',
                'alternatif_id' => '43',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '11',
                'kriteria_id' => '1',
                'alternatif_id' => '7',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '11',
                'kriteria_id' => '2',
                'alternatif_id' => '15',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '11',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '11',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '11',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '11',
                'kriteria_id' => '6',
                'alternatif_id' => '29',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '11',
                'kriteria_id' => '7',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '11',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '12',
                'kriteria_id' => '1',
                'alternatif_id' => '7',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '12',
                'kriteria_id' => '2',
                'alternatif_id' => '14',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '12',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '12',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '12',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '12',
                'kriteria_id' => '6',
                'alternatif_id' => '29',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '12',
                'kriteria_id' => '7',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '12',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '13',
                'kriteria_id' => '1',
                'alternatif_id' => '7',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '13',
                'kriteria_id' => '2',
                'alternatif_id' => '12',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '13',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '13',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '13',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '13',
                'kriteria_id' => '6',
                'alternatif_id' => '28',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '13',
                'kriteria_id' => '7',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '13',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '14',
                'kriteria_id' => '1',
                'alternatif_id' => '6',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '14',
                'kriteria_id' => '2',
                'alternatif_id' => '15',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '14',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '14',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '14',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '14',
                'kriteria_id' => '6',
                'alternatif_id' => '29',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '14',
                'kriteria_id' => '7',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '14',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '15',
                'kriteria_id' => '1',
                'alternatif_id' => '6',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '15',
                'kriteria_id' => '2',
                'alternatif_id' => '15',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '15',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '15',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '15',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '15',
                'kriteria_id' => '6',
                'alternatif_id' => '29',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '15',
                'kriteria_id' => '7',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '15',
                'kriteria_id' => '8',
                'alternatif_id' => '41',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '16',
                'kriteria_id' => '1',
                'alternatif_id' => '3',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '16',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '16',
                'kriteria_id' => '3',
                'alternatif_id' => '20',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '16',
                'kriteria_id' => '4',
                'alternatif_id' => '23',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '16',
                'kriteria_id' => '5',
                'alternatif_id' => '25',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '16',
                'kriteria_id' => '6',
                'alternatif_id' => '30',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '16',
                'kriteria_id' => '7',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '16',
                'kriteria_id' => '8',
                'alternatif_id' => '43',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '17',
                'kriteria_id' => '1',
                'alternatif_id' => '3',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '17',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '17',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '17',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '17',
                'kriteria_id' => '5',
                'alternatif_id' => '25',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '17',
                'kriteria_id' => '6',
                'alternatif_id' => '30',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '17',
                'kriteria_id' => '7',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '17',
                'kriteria_id' => '8',
                'alternatif_id' => '41',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '18',
                'kriteria_id' => '1',
                'alternatif_id' => '3',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '18',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '18',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '18',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '18',
                'kriteria_id' => '5',
                'alternatif_id' => '25',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '18',
                'kriteria_id' => '6',
                'alternatif_id' => '30',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '18',
                'kriteria_id' => '7',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '18',
                'kriteria_id' => '8',
                'alternatif_id' => '41',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '19',
                'kriteria_id' => '1',
                'alternatif_id' => '3',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '19',
                'kriteria_id' => '2',
                'alternatif_id' => '15',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '19',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '19',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '19',
                'kriteria_id' => '5',
                'alternatif_id' => '25',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '19',
                'kriteria_id' => '6',
                'alternatif_id' => '30',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '19',
                'kriteria_id' => '7',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '19',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '20',
                'kriteria_id' => '1',
                'alternatif_id' => '3',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '20',
                'kriteria_id' => '2',
                'alternatif_id' => '15',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '20',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '20',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '20',
                'kriteria_id' => '5',
                'alternatif_id' => '25',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '20',
                'kriteria_id' => '6',
                'alternatif_id' => '30',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '20',
                'kriteria_id' => '7',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '20',
                'kriteria_id' => '8',
                'alternatif_id' => '41',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '21',
                'kriteria_id' => '1',
                'alternatif_id' => '8',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '21',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '21',
                'kriteria_id' => '3',
                'alternatif_id' => '20',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '21',
                'kriteria_id' => '4',
                'alternatif_id' => '23',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '21',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '21',
                'kriteria_id' => '6',
                'alternatif_id' => '30',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '21',
                'kriteria_id' => '7',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '21',
                'kriteria_id' => '8',
                'alternatif_id' => '41',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '22',
                'kriteria_id' => '1',
                'alternatif_id' => '8',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '22',
                'kriteria_id' => '2',
                'alternatif_id' => '15',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '22',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '22',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '22',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '22',
                'kriteria_id' => '6',
                'alternatif_id' => '30',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '22',
                'kriteria_id' => '7',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '22',
                'kriteria_id' => '8',
                'alternatif_id' => '41',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '23',
                'kriteria_id' => '1',
                'alternatif_id' => '8',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '23',
                'kriteria_id' => '2',
                'alternatif_id' => '15',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '23',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '23',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '23',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '23',
                'kriteria_id' => '6',
                'alternatif_id' => '30',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '23',
                'kriteria_id' => '7',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '23',
                'kriteria_id' => '8',
                'alternatif_id' => '41',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '24',
                'kriteria_id' => '1',
                'alternatif_id' => '8',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '24',
                'kriteria_id' => '2',
                'alternatif_id' => '15',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '24',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '24',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '24',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '24',
                'kriteria_id' => '6',
                'alternatif_id' => '30',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '24',
                'kriteria_id' => '7',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '24',
                'kriteria_id' => '8',
                'alternatif_id' => '41',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '25',
                'kriteria_id' => '1',
                'alternatif_id' => '7',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '25',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '25',
                'kriteria_id' => '3',
                'alternatif_id' => '20',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '25',
                'kriteria_id' => '4',
                'alternatif_id' => '23',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '25',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '25',
                'kriteria_id' => '6',
                'alternatif_id' => '30',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '25',
                'kriteria_id' => '7',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '25',
                'kriteria_id' => '8',
                'alternatif_id' => '41',
                'nilai' => '4']);

            nilai::create([
                'car_id' => '26',
                'kriteria_id' => '1',
                'alternatif_id' => '7',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '26',
                'kriteria_id' => '2',
                'alternatif_id' => '14',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '26',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '26',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '26',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '26',
                'kriteria_id' => '6',
                'alternatif_id' => '29',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '26',
                'kriteria_id' => '7',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '26',
                'kriteria_id' => '8',
                'alternatif_id' => '41',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '27',
                'kriteria_id' => '1',
                'alternatif_id' => '7',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '27',
                'kriteria_id' => '2',
                'alternatif_id' => '15',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '27',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '27',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '27',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '27',
                'kriteria_id' => '6',
                'alternatif_id' => '29',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '27',
                'kriteria_id' => '7',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '27',
                'kriteria_id' => '8',
                'alternatif_id' => '41',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '28',
                'kriteria_id' => '1',
                'alternatif_id' => '7',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '28',
                'kriteria_id' => '2',
                'alternatif_id' => '15',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '28',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '28',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '28',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '28',
                'kriteria_id' => '6',
                'alternatif_id' => '29',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '28',
                'kriteria_id' => '7',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '28',
                'kriteria_id' => '8',
                'alternatif_id' => '41',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '29',
                'kriteria_id' => '1',
                'alternatif_id' => '7',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '29',
                'kriteria_id' => '2',
                'alternatif_id' => '14',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '29',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '29',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '29',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '29',
                'kriteria_id' => '6',
                'alternatif_id' => '29',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '29',
                'kriteria_id' => '7',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '29',
                'kriteria_id' => '8',
                'alternatif_id' => '41',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '30',
                'kriteria_id' => '1',
                'alternatif_id' => '7',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '30',
                'kriteria_id' => '2',
                'alternatif_id' => '12',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '30',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '30',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '30',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '30',
                'kriteria_id' => '6',
                'alternatif_id' => '28',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '30',
                'kriteria_id' => '7',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '30',
                'kriteria_id' => '8',
                'alternatif_id' => '41',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '31',
                'kriteria_id' => '1',
                'alternatif_id' => '7',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '31',
                'kriteria_id' => '2',
                'alternatif_id' => '12',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '31',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '31',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '31',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '31',
                'kriteria_id' => '6',
                'alternatif_id' => '28',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '31',
                'kriteria_id' => '7',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '31',
                'kriteria_id' => '8',
                'alternatif_id' => '41',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '32',
                'kriteria_id' => '1',
                'alternatif_id' => '9',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '32',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '32',
                'kriteria_id' => '3',
                'alternatif_id' => '20',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '32',
                'kriteria_id' => '4',
                'alternatif_id' => '23',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '32',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '32',
                'kriteria_id' => '6',
                'alternatif_id' => '32',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '32',
                'kriteria_id' => '7',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '32',
                'kriteria_id' => '8',
                'alternatif_id' => '39',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '33',
                'kriteria_id' => '1',
                'alternatif_id' => '9',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '33',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '33',
                'kriteria_id' => '3',
                'alternatif_id' => '20',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '33',
                'kriteria_id' => '4',
                'alternatif_id' => '23',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '33',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '33',
                'kriteria_id' => '6',
                'alternatif_id' => '32',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '33',
                'kriteria_id' => '7',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '33',
                'kriteria_id' => '8',
                'alternatif_id' => '39',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '34',
                'kriteria_id' => '1',
                'alternatif_id' => '9',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '34',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '34',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '34',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '34',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '34',
                'kriteria_id' => '6',
                'alternatif_id' => '32',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '34',
                'kriteria_id' => '7',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '34',
                'kriteria_id' => '8',
                'alternatif_id' => '39',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '35',
                'kriteria_id' => '1',
                'alternatif_id' => '9',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '35',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '35',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '35',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '35',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '35',
                'kriteria_id' => '6',
                'alternatif_id' => '32',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '35',
                'kriteria_id' => '7',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '35',
                'kriteria_id' => '8',
                'alternatif_id' => '39',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '36',
                'kriteria_id' => '1',
                'alternatif_id' => '4',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '36',
                'kriteria_id' => '2',
                'alternatif_id' => '15',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '36',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '36',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '36',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '36',
                'kriteria_id' => '6',
                'alternatif_id' => '32',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '36',
                'kriteria_id' => '7',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '36',
                'kriteria_id' => '8',
                'alternatif_id' => '38',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '37',
                'kriteria_id' => '1',
                'alternatif_id' => '4',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '37',
                'kriteria_id' => '2',
                'alternatif_id' => '15',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '37',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '37',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '37',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '37',
                'kriteria_id' => '6',
                'alternatif_id' => '32',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '37',
                'kriteria_id' => '7',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '37',
                'kriteria_id' => '8',
                'alternatif_id' => '38',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '38',
                'kriteria_id' => '1',
                'alternatif_id' => '10',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '38',
                'kriteria_id' => '2',
                'alternatif_id' => '15',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '38',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '38',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '38',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '38',
                'kriteria_id' => '6',
                'alternatif_id' => '30',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '38',
                'kriteria_id' => '7',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '38',
                'kriteria_id' => '8',
                'alternatif_id' => '43',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '39',
                'kriteria_id' => '1',
                'alternatif_id' => '10',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '39',
                'kriteria_id' => '2',
                'alternatif_id' => '15',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '39',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '39',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '39',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '39',
                'kriteria_id' => '6',
                'alternatif_id' => '30',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '39',
                'kriteria_id' => '7',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '39',
                'kriteria_id' => '8',
                'alternatif_id' => '41',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '40',
                'kriteria_id' => '1',
                'alternatif_id' => '10',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '40',
                'kriteria_id' => '2',
                'alternatif_id' => '14',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '40',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '40',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '40',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '40',
                'kriteria_id' => '6',
                'alternatif_id' => '32',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '40',
                'kriteria_id' => '7',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '40',
                'kriteria_id' => '8',
                'alternatif_id' => '43',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '41',
                'kriteria_id' => '1',
                'alternatif_id' => '10',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '41',
                'kriteria_id' => '2',
                'alternatif_id' => '14',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '41',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '41',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '41',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '41',
                'kriteria_id' => '6',
                'alternatif_id' => '30',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '41',
                'kriteria_id' => '7',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '41',
                'kriteria_id' => '8',
                'alternatif_id' => '41',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '42',
                'kriteria_id' => '1',
                'alternatif_id' => '5',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '42',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '42',
                'kriteria_id' => '3',
                'alternatif_id' => '20',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '42',
                'kriteria_id' => '4',
                'alternatif_id' => '23',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '42',
                'kriteria_id' => '5',
                'alternatif_id' => '25',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '42',
                'kriteria_id' => '6',
                'alternatif_id' => '32',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '42',
                'kriteria_id' => '7',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '42',
                'kriteria_id' => '8',
                'alternatif_id' => '38',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '43',
                'kriteria_id' => '1',
                'alternatif_id' => '5',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '43',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '43',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '43',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '43',
                'kriteria_id' => '5',
                'alternatif_id' => '25',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '43',
                'kriteria_id' => '6',
                'alternatif_id' => '32',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '43',
                'kriteria_id' => '7',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '43',
                'kriteria_id' => '8',
                'alternatif_id' => '38',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '44',
                'kriteria_id' => '1',
                'alternatif_id' => '1',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '44',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '44',
                'kriteria_id' => '3',
                'alternatif_id' => '20',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '44',
                'kriteria_id' => '4',
                'alternatif_id' => '23',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '44',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '44',
                'kriteria_id' => '6',
                'alternatif_id' => '30',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '44',
                'kriteria_id' => '7',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '44',
                'kriteria_id' => '8',
                'alternatif_id' => '43',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '45',
                'kriteria_id' => '1',
                'alternatif_id' => '1',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '45',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '45',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '45',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '45',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '45',
                'kriteria_id' => '6',
                'alternatif_id' => '30',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '45',
                'kriteria_id' => '7',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '45',
                'kriteria_id' => '8',
                'alternatif_id' => '41',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '46',
                'kriteria_id' => '1',
                'alternatif_id' => '1',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '46',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '46',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '46',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '46',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '46',
                'kriteria_id' => '6',
                'alternatif_id' => '30',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '46',
                'kriteria_id' => '7',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '46',
                'kriteria_id' => '8',
                'alternatif_id' => '41',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '47',
                'kriteria_id' => '1',
                'alternatif_id' => '1',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '47',
                'kriteria_id' => '2',
                'alternatif_id' => '15',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '47',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '47',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '47',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '47',
                'kriteria_id' => '6',
                'alternatif_id' => '30',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '47',
                'kriteria_id' => '7',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '47',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '48',
                'kriteria_id' => '1',
                'alternatif_id' => '1',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '48',
                'kriteria_id' => '2',
                'alternatif_id' => '15',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '48',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '48',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '48',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '48',
                'kriteria_id' => '6',
                'alternatif_id' => '30',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '48',
                'kriteria_id' => '7',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '48',
                'kriteria_id' => '8',
                'alternatif_id' => '41',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '49',
                'kriteria_id' => '1',
                'alternatif_id' => '2',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '49',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '49',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '49',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '49',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '49',
                'kriteria_id' => '6',
                'alternatif_id' => '29',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '49',
                'kriteria_id' => '7',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '49',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '50',
                'kriteria_id' => '1',
                'alternatif_id' => '2',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '50',
                'kriteria_id' => '2',
                'alternatif_id' => '15',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '50',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '50',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '50',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '50',
                'kriteria_id' => '6',
                'alternatif_id' => '29',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '50',
                'kriteria_id' => '7',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '50',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '51',
                'kriteria_id' => '1',
                'alternatif_id' => '2',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '51',
                'kriteria_id' => '2',
                'alternatif_id' => '15',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '51',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '51',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '51',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '51',
                'kriteria_id' => '6',
                'alternatif_id' => '29',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '51',
                'kriteria_id' => '7',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '51',
                'kriteria_id' => '8',
                'alternatif_id' => '41',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '52',
                'kriteria_id' => '1',
                'alternatif_id' => '2',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '52',
                'kriteria_id' => '2',
                'alternatif_id' => '13',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '52',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '52',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '52',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '52',
                'kriteria_id' => '6',
                'alternatif_id' => '28',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '52',
                'kriteria_id' => '7',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '52',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '53',
                'kriteria_id' => '1',
                'alternatif_id' => '2',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '53',
                'kriteria_id' => '2',
                'alternatif_id' => '12',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '53',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '53',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '53',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '53',
                'kriteria_id' => '6',
                'alternatif_id' => '28',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '53',
                'kriteria_id' => '7',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '53',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '54',
                'kriteria_id' => '1',
                'alternatif_id' => '2',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '54',
                'kriteria_id' => '2',
                'alternatif_id' => '12',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '54',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '54',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '54',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '54',
                'kriteria_id' => '6',
                'alternatif_id' => '28',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '54',
                'kriteria_id' => '7',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '54',
                'kriteria_id' => '8',
                'alternatif_id' => '41',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '55',
                'kriteria_id' => '1',
                'alternatif_id' => '2',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '55',
                'kriteria_id' => '2',
                'alternatif_id' => '12',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '55',
                'kriteria_id' => '3',
                'alternatif_id' => '19',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '55',
                'kriteria_id' => '4',
                'alternatif_id' => '22',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '55',
                'kriteria_id' => '5',
                'alternatif_id' => '26',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '55',
                'kriteria_id' => '6',
                'alternatif_id' => '28',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '55',
                'kriteria_id' => '7',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '55',
                'kriteria_id' => '8',
                'alternatif_id' => '41',
                'nilai' => '4',]);
        //
        // Table Nilai dummy Pasee ================================================================
            nilai::create([
                'car_id' => '56',
                'kriteria_id' => '1',
                'alternatif_id' => '2',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '56',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '56',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '56',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '56',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '56',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '56',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '56',
                'kriteria_id' => '8',
                'alternatif_id' => '45',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '57',
                'kriteria_id' => '1',
                'alternatif_id' => '15',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '57',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '57',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '57',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '57',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '57',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '57',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '57',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '58',
                'kriteria_id' => '1',
                'alternatif_id' => '13',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '58',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '58',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '58',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '58',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '58',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '58',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '58',
                'kriteria_id' => '8',
                'alternatif_id' => '49',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '59',
                'kriteria_id' => '1',
                'alternatif_id' => '2',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '59',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '59',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '59',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '59',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '59',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '59',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '59',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '60',
                'kriteria_id' => '1',
                'alternatif_id' => '7',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '60',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '60',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '60',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '60',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '60',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '60',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '60',
                'kriteria_id' => '8',
                'alternatif_id' => '51',
                'nilai' => '8',]);
            nilai::create([
                'car_id' => '61',
                'kriteria_id' => '1',
                'alternatif_id' => '13',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '61',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '61',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '61',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '61',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '61',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '61',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '61',
                'kriteria_id' => '8',
                'alternatif_id' => '48',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '62',
                'kriteria_id' => '1',
                'alternatif_id' => '9',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '62',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '62',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '62',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '62',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '62',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '62',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '62',
                'kriteria_id' => '8',
                'alternatif_id' => '45',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '63',
                'kriteria_id' => '1',
                'alternatif_id' => '8',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '63',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '63',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '63',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '63',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '63',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '63',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '63',
                'kriteria_id' => '8',
                'alternatif_id' => '51',
                'nilai' => '8',]);
            nilai::create([
                'car_id' => '64',
                'kriteria_id' => '1',
                'alternatif_id' => '9',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '64',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '64',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '64',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '64',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '64',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '64',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '64',
                'kriteria_id' => '8',
                'alternatif_id' => '51',
                'nilai' => '8',]);
            nilai::create([
                'car_id' => '65',
                'kriteria_id' => '1',
                'alternatif_id' => '6',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '65',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '65',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '65',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '65',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '65',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '65',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '65',
                'kriteria_id' => '8',
                'alternatif_id' => '50',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '66',
                'kriteria_id' => '1',
                'alternatif_id' => '4',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '66',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '66',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '66',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '66',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '66',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '66',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '66',
                'kriteria_id' => '8',
                'alternatif_id' => '48',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '67',
                'kriteria_id' => '1',
                'alternatif_id' => '6',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '67',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '67',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '67',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '67',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '67',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '67',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '67',
                'kriteria_id' => '8',
                'alternatif_id' => '48',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '68',
                'kriteria_id' => '1',
                'alternatif_id' => '4',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '68',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '68',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '68',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '68',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '68',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '68',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '68',
                'kriteria_id' => '8',
                'alternatif_id' => '48',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '69',
                'kriteria_id' => '1',
                'alternatif_id' => '13',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '69',
                'kriteria_id' => '2',
                'alternatif_id' => '21',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '69',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '69',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '69',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '69',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '69',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '69',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '70',
                'kriteria_id' => '1',
                'alternatif_id' => '7',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '70',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '70',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '70',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '70',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '70',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '70',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '70',
                'kriteria_id' => '8',
                'alternatif_id' => '48',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '71',
                'kriteria_id' => '1',
                'alternatif_id' => '7',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '71',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '71',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '71',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '71',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '71',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '71',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '71',
                'kriteria_id' => '8',
                'alternatif_id' => '50',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '72',
                'kriteria_id' => '1',
                'alternatif_id' => '13',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '72',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '72',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '72',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '72',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '72',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '72',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '72',
                'kriteria_id' => '8',
                'alternatif_id' => '45',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '73',
                'kriteria_id' => '1',
                'alternatif_id' => '1',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '73',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '73',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '73',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '73',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '73',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '73',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '73',
                'kriteria_id' => '8',
                'alternatif_id' => '49',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '74',
                'kriteria_id' => '1',
                'alternatif_id' => '13',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '74',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '74',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '74',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '74',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '74',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '74',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '74',
                'kriteria_id' => '8',
                'alternatif_id' => '50',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '75',
                'kriteria_id' => '1',
                'alternatif_id' => '5',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '75',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '75',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '75',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '75',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '75',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '75',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '75',
                'kriteria_id' => '8',
                'alternatif_id' => '50',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '76',
                'kriteria_id' => '1',
                'alternatif_id' => '2',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '76',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '76',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '76',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '76',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '76',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '76',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '76',
                'kriteria_id' => '8',
                'alternatif_id' => '49',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '77',
                'kriteria_id' => '1',
                'alternatif_id' => '3',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '77',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '77',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '77',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '77',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '77',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '77',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '77',
                'kriteria_id' => '8',
                'alternatif_id' => '51',
                'nilai' => '8',]);
            nilai::create([
                'car_id' => '78',
                'kriteria_id' => '1',
                'alternatif_id' => '15',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '78',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '78',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '78',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '78',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '78',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '78',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '78',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '79',
                'kriteria_id' => '1',
                'alternatif_id' => '4',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '79',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '79',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '79',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '79',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '79',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '79',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '79',
                'kriteria_id' => '8',
                'alternatif_id' => '48',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '80',
                'kriteria_id' => '1',
                'alternatif_id' => '1',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '80',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '80',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '80',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '80',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '80',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '80',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '80',
                'kriteria_id' => '8',
                'alternatif_id' => '50',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '81',
                'kriteria_id' => '1',
                'alternatif_id' => '5',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '81',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '81',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '81',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '81',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '81',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '81',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '81',
                'kriteria_id' => '8',
                'alternatif_id' => '49',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '82',
                'kriteria_id' => '1',
                'alternatif_id' => '14',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '82',
                'kriteria_id' => '2',
                'alternatif_id' => '21',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '82',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '82',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '82',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '82',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '82',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '82',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '83',
                'kriteria_id' => '1',
                'alternatif_id' => '12',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '83',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '83',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '83',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '83',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '83',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '83',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '83',
                'kriteria_id' => '8',
                'alternatif_id' => '51',
                'nilai' => '8',]);
            nilai::create([
                'car_id' => '84',
                'kriteria_id' => '1',
                'alternatif_id' => '8',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '84',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '84',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '84',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '84',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '84',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '84',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '84',
                'kriteria_id' => '8',
                'alternatif_id' => '50',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '85',
                'kriteria_id' => '1',
                'alternatif_id' => '6',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '85',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '85',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '85',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '85',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '85',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '85',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '85',
                'kriteria_id' => '8',
                'alternatif_id' => '49',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '86',
                'kriteria_id' => '1',
                'alternatif_id' => '3',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '86',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '86',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '86',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '86',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '86',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '86',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '86',
                'kriteria_id' => '8',
                'alternatif_id' => '45',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '87',
                'kriteria_id' => '1',
                'alternatif_id' => '14',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '87',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '87',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '87',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '87',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '87',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '87',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '87',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '88',
                'kriteria_id' => '1',
                'alternatif_id' => '10',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '88',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '88',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '88',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '88',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '88',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '88',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '88',
                'kriteria_id' => '8',
                'alternatif_id' => '47',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '89',
                'kriteria_id' => '1',
                'alternatif_id' => '13',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '89',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '89',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '89',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '89',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '89',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '89',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '89',
                'kriteria_id' => '8',
                'alternatif_id' => '47',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '90',
                'kriteria_id' => '1',
                'alternatif_id' => '6',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '90',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '90',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '90',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '90',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '90',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '90',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '90',
                'kriteria_id' => '8',
                'alternatif_id' => '51',
                'nilai' => '8',]);
            nilai::create([
                'car_id' => '91',
                'kriteria_id' => '1',
                'alternatif_id' => '15',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '91',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '91',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '91',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '91',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '91',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '91',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '91',
                'kriteria_id' => '8',
                'alternatif_id' => '48',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '92',
                'kriteria_id' => '1',
                'alternatif_id' => '5',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '92',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '92',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '92',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '92',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '92',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '92',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '92',
                'kriteria_id' => '8',
                'alternatif_id' => '50',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '93',
                'kriteria_id' => '1',
                'alternatif_id' => '11',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '93',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '93',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '93',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '93',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '93',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '93',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '93',
                'kriteria_id' => '8',
                'alternatif_id' => '49',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '94',
                'kriteria_id' => '1',
                'alternatif_id' => '1',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '94',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '94',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '94',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '94',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '94',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '94',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '94',
                'kriteria_id' => '8',
                'alternatif_id' => '50',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '95',
                'kriteria_id' => '1',
                'alternatif_id' => '11',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '95',
                'kriteria_id' => '2',
                'alternatif_id' => '21',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '95',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '95',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '95',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '95',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '95',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '95',
                'kriteria_id' => '8',
                'alternatif_id' => '51',
                'nilai' => '8',]);
            nilai::create([
                'car_id' => '96',
                'kriteria_id' => '1',
                'alternatif_id' => '5',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '96',
                'kriteria_id' => '2',
                'alternatif_id' => '21',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '96',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '96',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '96',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '96',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '96',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '96',
                'kriteria_id' => '8',
                'alternatif_id' => '50',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '97',
                'kriteria_id' => '1',
                'alternatif_id' => '8',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '97',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '97',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '97',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '97',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '97',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '97',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '97',
                'kriteria_id' => '8',
                'alternatif_id' => '49',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '98',
                'kriteria_id' => '1',
                'alternatif_id' => '10',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '98',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '98',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '98',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '98',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '98',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '98',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '98',
                'kriteria_id' => '8',
                'alternatif_id' => '45',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '99',
                'kriteria_id' => '1',
                'alternatif_id' => '7',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '99',
                'kriteria_id' => '2',
                'alternatif_id' => '21',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '99',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '99',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '99',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '99',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '99',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '99',
                'kriteria_id' => '8',
                'alternatif_id' => '45',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '100',
                'kriteria_id' => '1',
                'alternatif_id' => '12',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '100',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '100',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '100',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '100',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '100',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '100',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '100',
                'kriteria_id' => '8',
                'alternatif_id' => '47',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '101',
                'kriteria_id' => '1',
                'alternatif_id' => '6',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '101',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '101',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '101',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '101',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '101',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '101',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '101',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '102',
                'kriteria_id' => '1',
                'alternatif_id' => '6',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '102',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '102',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '102',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '102',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '102',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '102',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '102',
                'kriteria_id' => '8',
                'alternatif_id' => '48',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '103',
                'kriteria_id' => '1',
                'alternatif_id' => '8',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '103',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '103',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '103',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '103',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '103',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '103',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '103',
                'kriteria_id' => '8',
                'alternatif_id' => '49',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '104',
                'kriteria_id' => '1',
                'alternatif_id' => '5',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '104',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '104',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '104',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '104',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '104',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '104',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '104',
                'kriteria_id' => '8',
                'alternatif_id' => '50',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '105',
                'kriteria_id' => '1',
                'alternatif_id' => '2',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '105',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '105',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '105',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '105',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '105',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '105',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '105',
                'kriteria_id' => '8',
                'alternatif_id' => '47',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '106',
                'kriteria_id' => '1',
                'alternatif_id' => '8',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '106',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '106',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '106',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '106',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '106',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '106',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '106',
                'kriteria_id' => '8',
                'alternatif_id' => '45',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '107',
                'kriteria_id' => '1',
                'alternatif_id' => '1',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '107',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '107',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '107',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '107',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '107',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '107',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '107',
                'kriteria_id' => '8',
                'alternatif_id' => '45',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '108',
                'kriteria_id' => '1',
                'alternatif_id' => '10',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '108',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '108',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '108',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '108',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '108',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '108',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '108',
                'kriteria_id' => '8',
                'alternatif_id' => '50',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '109',
                'kriteria_id' => '1',
                'alternatif_id' => '14',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '109',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '109',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '109',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '109',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '109',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '109',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '109',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '110',
                'kriteria_id' => '1',
                'alternatif_id' => '2',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '110',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '110',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '110',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '110',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '110',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '110',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '110',
                'kriteria_id' => '8',
                'alternatif_id' => '49',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '111',
                'kriteria_id' => '1',
                'alternatif_id' => '9',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '111',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '111',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '111',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '111',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '111',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '111',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '111',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '112',
                'kriteria_id' => '1',
                'alternatif_id' => '9',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '112',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '112',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '112',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '112',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '112',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '112',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '112',
                'kriteria_id' => '8',
                'alternatif_id' => '47',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '113',
                'kriteria_id' => '1',
                'alternatif_id' => '1',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '113',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '113',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '113',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '113',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '113',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '113',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '113',
                'kriteria_id' => '8',
                'alternatif_id' => '47',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '114',
                'kriteria_id' => '1',
                'alternatif_id' => '8',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '114',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '114',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '114',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '114',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '114',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '114',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '114',
                'kriteria_id' => '8',
                'alternatif_id' => '50',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '115',
                'kriteria_id' => '1',
                'alternatif_id' => '4',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '115',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '115',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '115',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '115',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '115',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '115',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '115',
                'kriteria_id' => '8',
                'alternatif_id' => '50',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '116',
                'kriteria_id' => '1',
                'alternatif_id' => '10',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '116',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '116',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '116',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '116',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '116',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '116',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '116',
                'kriteria_id' => '8',
                'alternatif_id' => '50',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '117',
                'kriteria_id' => '1',
                'alternatif_id' => '11',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '117',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '117',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '117',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '117',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '117',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '117',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '117',
                'kriteria_id' => '8',
                'alternatif_id' => '47',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '118',
                'kriteria_id' => '1',
                'alternatif_id' => '15',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '118',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '118',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '118',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '118',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '118',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '118',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '118',
                'kriteria_id' => '8',
                'alternatif_id' => '48',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '119',
                'kriteria_id' => '1',
                'alternatif_id' => '2',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '119',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '119',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '119',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '119',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '119',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '119',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '119',
                'kriteria_id' => '8',
                'alternatif_id' => '47',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '120',
                'kriteria_id' => '1',
                'alternatif_id' => '8',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '120',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '120',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '120',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '120',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '120',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '120',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '120',
                'kriteria_id' => '8',
                'alternatif_id' => '50',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '121',
                'kriteria_id' => '1',
                'alternatif_id' => '10',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '121',
                'kriteria_id' => '2',
                'alternatif_id' => '21',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '121',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '121',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '121',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '121',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '121',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '121',
                'kriteria_id' => '8',
                'alternatif_id' => '49',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '122',
                'kriteria_id' => '1',
                'alternatif_id' => '13',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '122',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '122',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '122',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '122',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '122',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '122',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '122',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '123',
                'kriteria_id' => '1',
                'alternatif_id' => '3',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '123',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '123',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '123',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '123',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '123',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '123',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '123',
                'kriteria_id' => '8',
                'alternatif_id' => '51',
                'nilai' => '8',]);
            nilai::create([
                'car_id' => '124',
                'kriteria_id' => '1',
                'alternatif_id' => '2',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '124',
                'kriteria_id' => '2',
                'alternatif_id' => '21',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '124',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '124',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '124',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '124',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '124',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '124',
                'kriteria_id' => '8',
                'alternatif_id' => '48',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '125',
                'kriteria_id' => '1',
                'alternatif_id' => '5',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '125',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '125',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '125',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '125',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '125',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '125',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '125',
                'kriteria_id' => '8',
                'alternatif_id' => '45',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '126',
                'kriteria_id' => '1',
                'alternatif_id' => '6',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '126',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '126',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '126',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '126',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '126',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '126',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '126',
                'kriteria_id' => '8',
                'alternatif_id' => '45',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '127',
                'kriteria_id' => '1',
                'alternatif_id' => '5',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '127',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '127',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '127',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '127',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '127',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '127',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '127',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '128',
                'kriteria_id' => '1',
                'alternatif_id' => '5',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '128',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '128',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '128',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '128',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '128',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '128',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '128',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '129',
                'kriteria_id' => '1',
                'alternatif_id' => '10',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '129',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '129',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '129',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '129',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '129',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '129',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '129',
                'kriteria_id' => '8',
                'alternatif_id' => '51',
                'nilai' => '8',]);
            nilai::create([
                'car_id' => '130',
                'kriteria_id' => '1',
                'alternatif_id' => '10',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '130',
                'kriteria_id' => '2',
                'alternatif_id' => '21',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '130',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '130',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '130',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '130',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '130',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '130',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '131',
                'kriteria_id' => '1',
                'alternatif_id' => '15',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '131',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '131',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '131',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '131',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '131',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '131',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '131',
                'kriteria_id' => '8',
                'alternatif_id' => '45',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '132',
                'kriteria_id' => '1',
                'alternatif_id' => '10',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '132',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '132',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '132',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '132',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '132',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '132',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '132',
                'kriteria_id' => '8',
                'alternatif_id' => '48',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '133',
                'kriteria_id' => '1',
                'alternatif_id' => '10',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '133',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '133',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '133',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '133',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '133',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '133',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '133',
                'kriteria_id' => '8',
                'alternatif_id' => '51',
                'nilai' => '8',]);
            nilai::create([
                'car_id' => '134',
                'kriteria_id' => '1',
                'alternatif_id' => '8',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '134',
                'kriteria_id' => '2',
                'alternatif_id' => '21',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '134',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '134',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '134',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '134',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '134',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '134',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '135',
                'kriteria_id' => '1',
                'alternatif_id' => '1',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '135',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '135',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '135',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '135',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '135',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '135',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '135',
                'kriteria_id' => '8',
                'alternatif_id' => '45',
                'nilai' => '2',]);
        //
        // Table Nilai dummy AFG
            nilai::create([
                'car_id' => '136',
                'kriteria_id' => '1',
                'alternatif_id' => '3',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '136',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '136',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '136',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '136',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '136',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '136',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '136',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '137',
                'kriteria_id' => '1',
                'alternatif_id' => '5',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '137',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '137',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '137',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '137',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '137',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '137',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '137',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '138',
                'kriteria_id' => '1',
                'alternatif_id' => '4',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '138',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '138',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '138',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '138',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '138',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '138',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '138',
                'kriteria_id' => '8',
                'alternatif_id' => '51',
                'nilai' => '8',]);
            nilai::create([
                'car_id' => '139',
                'kriteria_id' => '1',
                'alternatif_id' => '13',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '139',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '139',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '139',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '139',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '139',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '139',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '139',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '140',
                'kriteria_id' => '1',
                'alternatif_id' => '9',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '140',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '140',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '140',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '140',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '140',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '140',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '140',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '141',
                'kriteria_id' => '1',
                'alternatif_id' => '8',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '141',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '141',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '141',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '141',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '141',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '141',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '141',
                'kriteria_id' => '8',
                'alternatif_id' => '50',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '142',
                'kriteria_id' => '1',
                'alternatif_id' => '9',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '142',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '142',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '142',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '142',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '142',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '142',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '142',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '143',
                'kriteria_id' => '1',
                'alternatif_id' => '6',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '143',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '143',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '143',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '143',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '143',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '143',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '143',
                'kriteria_id' => '8',
                'alternatif_id' => '49',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '144',
                'kriteria_id' => '1',
                'alternatif_id' => '11',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '144',
                'kriteria_id' => '2',
                'alternatif_id' => '21',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '144',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '144',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '144',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '144',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '144',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '144',
                'kriteria_id' => '8',
                'alternatif_id' => '50',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '145',
                'kriteria_id' => '1',
                'alternatif_id' => '8',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '145',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '145',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '145',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '145',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '145',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '145',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '145',
                'kriteria_id' => '8',
                'alternatif_id' => '47',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '146',
                'kriteria_id' => '1',
                'alternatif_id' => '14',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '146',
                'kriteria_id' => '2',
                'alternatif_id' => '21',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '146',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '146',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '146',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '146',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '146',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '146',
                'kriteria_id' => '8',
                'alternatif_id' => '51',
                'nilai' => '8',]);
            nilai::create([
                'car_id' => '147',
                'kriteria_id' => '1',
                'alternatif_id' => '14',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '147',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '147',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '147',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '147',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '147',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '147',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '147',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '148',
                'kriteria_id' => '1',
                'alternatif_id' => '10',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '148',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '148',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '148',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '148',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '148',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '148',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '148',
                'kriteria_id' => '8',
                'alternatif_id' => '49',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '149',
                'kriteria_id' => '1',
                'alternatif_id' => '2',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '149',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '149',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '149',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '149',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '149',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '149',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '149',
                'kriteria_id' => '8',
                'alternatif_id' => '49',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '150',
                'kriteria_id' => '1',
                'alternatif_id' => '9',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '150',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '150',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '150',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '150',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '150',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '150',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '150',
                'kriteria_id' => '8',
                'alternatif_id' => '45',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '151',
                'kriteria_id' => '1',
                'alternatif_id' => '9',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '151',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '151',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '151',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '151',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '151',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '151',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '151',
                'kriteria_id' => '8',
                'alternatif_id' => '48',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '152',
                'kriteria_id' => '1',
                'alternatif_id' => '14',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '152',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '152',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '152',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '152',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '152',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '152',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '152',
                'kriteria_id' => '8',
                'alternatif_id' => '48',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '153',
                'kriteria_id' => '1',
                'alternatif_id' => '6',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '153',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '153',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '153',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '153',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '153',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '153',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '153',
                'kriteria_id' => '8',
                'alternatif_id' => '45',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '154',
                'kriteria_id' => '1',
                'alternatif_id' => '14',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '154',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '154',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '154',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '154',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '154',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '154',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '154',
                'kriteria_id' => '8',
                'alternatif_id' => '45',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '155',
                'kriteria_id' => '1',
                'alternatif_id' => '12',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '155',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '155',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '155',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '155',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '155',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '155',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '155',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '156',
                'kriteria_id' => '1',
                'alternatif_id' => '3',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '156',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '156',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '156',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '156',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '156',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '156',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '156',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '157',
                'kriteria_id' => '1',
                'alternatif_id' => '15',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '157',
                'kriteria_id' => '2',
                'alternatif_id' => '21',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '157',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '157',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '157',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '157',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '157',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '157',
                'kriteria_id' => '8',
                'alternatif_id' => '50',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '158',
                'kriteria_id' => '1',
                'alternatif_id' => '7',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '158',
                'kriteria_id' => '2',
                'alternatif_id' => '21',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '158',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '158',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '158',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '158',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '158',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '158',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '159',
                'kriteria_id' => '1',
                'alternatif_id' => '4',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '159',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '159',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '159',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '159',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '159',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '159',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '159',
                'kriteria_id' => '8',
                'alternatif_id' => '47',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '160',
                'kriteria_id' => '1',
                'alternatif_id' => '15',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '160',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '160',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '160',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '160',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '160',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '160',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '160',
                'kriteria_id' => '8',
                'alternatif_id' => '49',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '161',
                'kriteria_id' => '1',
                'alternatif_id' => '6',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '161',
                'kriteria_id' => '2',
                'alternatif_id' => '21',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '161',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '161',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '161',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '161',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '161',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '161',
                'kriteria_id' => '8',
                'alternatif_id' => '47',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '162',
                'kriteria_id' => '1',
                'alternatif_id' => '5',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '162',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '162',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '162',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '162',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '162',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '162',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '162',
                'kriteria_id' => '8',
                'alternatif_id' => '49',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '163',
                'kriteria_id' => '1',
                'alternatif_id' => '2',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '163',
                'kriteria_id' => '2',
                'alternatif_id' => '21',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '163',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '163',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '163',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '163',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '163',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '163',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '164',
                'kriteria_id' => '1',
                'alternatif_id' => '15',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '164',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '164',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '164',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '164',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '164',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '164',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '164',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '165',
                'kriteria_id' => '1',
                'alternatif_id' => '13',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '165',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '165',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '165',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '165',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '165',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '165',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '165',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '166',
                'kriteria_id' => '1',
                'alternatif_id' => '12',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '166',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '166',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '166',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '166',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '166',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '166',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '166',
                'kriteria_id' => '8',
                'alternatif_id' => '48',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '167',
                'kriteria_id' => '1',
                'alternatif_id' => '9',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '167',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '167',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '167',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '167',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '167',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '167',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '167',
                'kriteria_id' => '8',
                'alternatif_id' => '45',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '168',
                'kriteria_id' => '1',
                'alternatif_id' => '7',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '168',
                'kriteria_id' => '2',
                'alternatif_id' => '21',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '168',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '168',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '168',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '168',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '168',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '168',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '169',
                'kriteria_id' => '1',
                'alternatif_id' => '1',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '169',
                'kriteria_id' => '2',
                'alternatif_id' => '21',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '169',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '169',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '169',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '169',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '169',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '169',
                'kriteria_id' => '8',
                'alternatif_id' => '50',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '170',
                'kriteria_id' => '1',
                'alternatif_id' => '8',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '170',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '170',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '170',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '170',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '170',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '170',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '170',
                'kriteria_id' => '8',
                'alternatif_id' => '51',
                'nilai' => '8',]);
            nilai::create([
                'car_id' => '171',
                'kriteria_id' => '1',
                'alternatif_id' => '11',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '171',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '171',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '171',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '171',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '171',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '171',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '171',
                'kriteria_id' => '8',
                'alternatif_id' => '47',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '172',
                'kriteria_id' => '1',
                'alternatif_id' => '3',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '172',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '172',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '172',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '172',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '172',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '172',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '172',
                'kriteria_id' => '8',
                'alternatif_id' => '47',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '173',
                'kriteria_id' => '1',
                'alternatif_id' => '9',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '173',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '173',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '173',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '173',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '173',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '173',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '173',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '174',
                'kriteria_id' => '1',
                'alternatif_id' => '8',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '174',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '174',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '174',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '174',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '174',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '174',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '174',
                'kriteria_id' => '8',
                'alternatif_id' => '49',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '175',
                'kriteria_id' => '1',
                'alternatif_id' => '4',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '175',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '175',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '175',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '175',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '175',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '175',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '175',
                'kriteria_id' => '8',
                'alternatif_id' => '48',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '176',
                'kriteria_id' => '1',
                'alternatif_id' => '2',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '176',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '176',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '176',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '176',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '176',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '176',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '176',
                'kriteria_id' => '8',
                'alternatif_id' => '51',
                'nilai' => '8',]);
            nilai::create([
                'car_id' => '177',
                'kriteria_id' => '1',
                'alternatif_id' => '13',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '177',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '177',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '177',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '177',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '177',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '177',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '177',
                'kriteria_id' => '8',
                'alternatif_id' => '47',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '178',
                'kriteria_id' => '1',
                'alternatif_id' => '6',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '178',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '178',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '178',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '178',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '178',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '178',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '178',
                'kriteria_id' => '8',
                'alternatif_id' => '47',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '179',
                'kriteria_id' => '1',
                'alternatif_id' => '14',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '179',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '179',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '179',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '179',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '179',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '179',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '179',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '180',
                'kriteria_id' => '1',
                'alternatif_id' => '15',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '180',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '180',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '180',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '180',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '180',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '180',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '180',
                'kriteria_id' => '8',
                'alternatif_id' => '50',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '181',
                'kriteria_id' => '1',
                'alternatif_id' => '12',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '181',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '181',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '181',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '181',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '181',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '181',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '181',
                'kriteria_id' => '8',
                'alternatif_id' => '49',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '182',
                'kriteria_id' => '1',
                'alternatif_id' => '9',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '182',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '182',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '182',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '182',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '182',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '182',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '182',
                'kriteria_id' => '8',
                'alternatif_id' => '49',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '183',
                'kriteria_id' => '1',
                'alternatif_id' => '2',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '183',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '183',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '183',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '183',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '183',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '183',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '183',
                'kriteria_id' => '8',
                'alternatif_id' => '45',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '184',
                'kriteria_id' => '1',
                'alternatif_id' => '11',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '184',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '184',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '184',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '184',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '184',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '184',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '184',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '185',
                'kriteria_id' => '1',
                'alternatif_id' => '2',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '185',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '185',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '185',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '185',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '185',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '185',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '185',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '186',
                'kriteria_id' => '1',
                'alternatif_id' => '15',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '186',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '186',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '186',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '186',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '186',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '186',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '186',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '187',
                'kriteria_id' => '1',
                'alternatif_id' => '1',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '187',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '187',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '187',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '187',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '187',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '187',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '187',
                'kriteria_id' => '8',
                'alternatif_id' => '50',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '188',
                'kriteria_id' => '1',
                'alternatif_id' => '3',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '188',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '188',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '188',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '188',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '188',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '188',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '188',
                'kriteria_id' => '8',
                'alternatif_id' => '45',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '189',
                'kriteria_id' => '1',
                'alternatif_id' => '13',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '189',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '189',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '189',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '189',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '189',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '189',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '189',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '190',
                'kriteria_id' => '1',
                'alternatif_id' => '15',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '190',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '190',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '190',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '190',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '190',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '190',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '190',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '191',
                'kriteria_id' => '1',
                'alternatif_id' => '5',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '191',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '191',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '191',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '191',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '191',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '191',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '191',
                'kriteria_id' => '8',
                'alternatif_id' => '47',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '192',
                'kriteria_id' => '1',
                'alternatif_id' => '8',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '192',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '192',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '192',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '192',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '192',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '192',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '192',
                'kriteria_id' => '8',
                'alternatif_id' => '49',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '193',
                'kriteria_id' => '1',
                'alternatif_id' => '8',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '193',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '193',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '193',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '193',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '193',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '193',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '193',
                'kriteria_id' => '8',
                'alternatif_id' => '45',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '194',
                'kriteria_id' => '1',
                'alternatif_id' => '13',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '194',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '194',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '194',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '194',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '194',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '194',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '194',
                'kriteria_id' => '8',
                'alternatif_id' => '51',
                'nilai' => '8',]);
            nilai::create([
                'car_id' => '195',
                'kriteria_id' => '1',
                'alternatif_id' => '14',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '195',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '195',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '195',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '195',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '195',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '195',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '195',
                'kriteria_id' => '8',
                'alternatif_id' => '51',
                'nilai' => '8',]);
            nilai::create([
                'car_id' => '196',
                'kriteria_id' => '1',
                'alternatif_id' => '14',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '196',
                'kriteria_id' => '2',
                'alternatif_id' => '21',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '196',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '196',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '196',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '196',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '196',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '196',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '197',
                'kriteria_id' => '1',
                'alternatif_id' => '15',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '197',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '197',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '197',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '197',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '197',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '197',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '197',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '198',
                'kriteria_id' => '1',
                'alternatif_id' => '2',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '198',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '198',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '198',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '198',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '198',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '198',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '198',
                'kriteria_id' => '8',
                'alternatif_id' => '47',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '199',
                'kriteria_id' => '1',
                'alternatif_id' => '10',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '199',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '199',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '199',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '199',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '199',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '199',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '199',
                'kriteria_id' => '8',
                'alternatif_id' => '49',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '200',
                'kriteria_id' => '1',
                'alternatif_id' => '2',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '200',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '200',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '200',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '200',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '200',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '200',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '200',
                'kriteria_id' => '8',
                'alternatif_id' => '51',
                'nilai' => '8',]);
        //
        // KMJ
            nilai::create([
                'car_id' => '201',
                'kriteria_id' => '1',
                'alternatif_id' => '3',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '201',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '201',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '201',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '201',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '201',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '201',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '201',
                'kriteria_id' => '8',
                'alternatif_id' => '48',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '202',
                'kriteria_id' => '1',
                'alternatif_id' => '1',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '202',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '202',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '202',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '202',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '202',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '202',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '202',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '203',
                'kriteria_id' => '1',
                'alternatif_id' => '15',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '203',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '203',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '203',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '203',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '203',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '203',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '203',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '204',
                'kriteria_id' => '1',
                'alternatif_id' => '3',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '204',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '204',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '204',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '204',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '204',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '204',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '204',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '205',
                'kriteria_id' => '1',
                'alternatif_id' => '14',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '205',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '205',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '205',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '205',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '205',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '205',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '205',
                'kriteria_id' => '8',
                'alternatif_id' => '51',
                'nilai' => '8',]);
            nilai::create([
                'car_id' => '206',
                'kriteria_id' => '1',
                'alternatif_id' => '9',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '206',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '206',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '206',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '206',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '206',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '206',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '206',
                'kriteria_id' => '8',
                'alternatif_id' => '45',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '207',
                'kriteria_id' => '1',
                'alternatif_id' => '9',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '207',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '207',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '207',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '207',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '207',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '207',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '207',
                'kriteria_id' => '8',
                'alternatif_id' => '48',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '208',
                'kriteria_id' => '1',
                'alternatif_id' => '11',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '208',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '208',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '208',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '208',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '208',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '208',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '208',
                'kriteria_id' => '8',
                'alternatif_id' => '48',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '209',
                'kriteria_id' => '1',
                'alternatif_id' => '15',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '209',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '209',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '209',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '209',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '209',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '209',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '209',
                'kriteria_id' => '8',
                'alternatif_id' => '48',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '210',
                'kriteria_id' => '1',
                'alternatif_id' => '2',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '210',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '210',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '210',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '210',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '210',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '210',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '210',
                'kriteria_id' => '8',
                'alternatif_id' => '49',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '211',
                'kriteria_id' => '1',
                'alternatif_id' => '15',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '211',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '211',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '211',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '211',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '211',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '211',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '211',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '212',
                'kriteria_id' => '1',
                'alternatif_id' => '11',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '212',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '212',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '212',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '212',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '212',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '212',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '212',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '213',
                'kriteria_id' => '1',
                'alternatif_id' => '14',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '213',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '213',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '213',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '213',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '213',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '213',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '213',
                'kriteria_id' => '8',
                'alternatif_id' => '51',
                'nilai' => '8',]);
            nilai::create([
                'car_id' => '214',
                'kriteria_id' => '1',
                'alternatif_id' => '3',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '214',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '214',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '214',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '214',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '214',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '214',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '214',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '215',
                'kriteria_id' => '1',
                'alternatif_id' => '6',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '215',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '215',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '215',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '215',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '215',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '215',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '215',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '216',
                'kriteria_id' => '1',
                'alternatif_id' => '5',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '216',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '216',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '216',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '216',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '216',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '216',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '216',
                'kriteria_id' => '8',
                'alternatif_id' => '45',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '217',
                'kriteria_id' => '1',
                'alternatif_id' => '4',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '217',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '217',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '217',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '217',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '217',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '217',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '217',
                'kriteria_id' => '8',
                'alternatif_id' => '47',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '218',
                'kriteria_id' => '1',
                'alternatif_id' => '8',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '218',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '218',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '218',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '218',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '218',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '218',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '218',
                'kriteria_id' => '8',
                'alternatif_id' => '51',
                'nilai' => '8',]);
            nilai::create([
                'car_id' => '219',
                'kriteria_id' => '1',
                'alternatif_id' => '8',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '219',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '219',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '219',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '219',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '219',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '219',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '219',
                'kriteria_id' => '8',
                'alternatif_id' => '45',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '220',
                'kriteria_id' => '1',
                'alternatif_id' => '12',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '220',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '220',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '220',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '220',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '220',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '220',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '220',
                'kriteria_id' => '8',
                'alternatif_id' => '50',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '221',
                'kriteria_id' => '1',
                'alternatif_id' => '12',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '221',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '221',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '221',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '221',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '221',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '221',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '221',
                'kriteria_id' => '8',
                'alternatif_id' => '49',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '222',
                'kriteria_id' => '1',
                'alternatif_id' => '15',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '222',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '222',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '222',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '222',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '222',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '222',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '222',
                'kriteria_id' => '8',
                'alternatif_id' => '47',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '223',
                'kriteria_id' => '1',
                'alternatif_id' => '6',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '223',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '223',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '223',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '223',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '223',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '223',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '223',
                'kriteria_id' => '8',
                'alternatif_id' => '47',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '224',
                'kriteria_id' => '1',
                'alternatif_id' => '14',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '224',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '224',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '224',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '224',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '224',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '224',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '224',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '225',
                'kriteria_id' => '1',
                'alternatif_id' => '13',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '225',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '225',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '225',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '225',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '225',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '225',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '225',
                'kriteria_id' => '8',
                'alternatif_id' => '51',
                'nilai' => '8',]);
            nilai::create([
                'car_id' => '226',
                'kriteria_id' => '1',
                'alternatif_id' => '7',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '226',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '226',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '226',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '226',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '226',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '226',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '226',
                'kriteria_id' => '8',
                'alternatif_id' => '51',
                'nilai' => '8',]);
            nilai::create([
                'car_id' => '227',
                'kriteria_id' => '1',
                'alternatif_id' => '9',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '227',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '227',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '227',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '227',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '227',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '227',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '227',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '228',
                'kriteria_id' => '1',
                'alternatif_id' => '4',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '228',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '228',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '228',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '228',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '228',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '228',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '228',
                'kriteria_id' => '8',
                'alternatif_id' => '45',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '229',
                'kriteria_id' => '1',
                'alternatif_id' => '1',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '229',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '229',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '229',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '229',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '229',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '229',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '229',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '230',
                'kriteria_id' => '1',
                'alternatif_id' => '7',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '230',
                'kriteria_id' => '2',
                'alternatif_id' => '21',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '230',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '230',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '230',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '230',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '230',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '230',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '231',
                'kriteria_id' => '1',
                'alternatif_id' => '13',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '231',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '231',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '231',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '231',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '231',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '231',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '231',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '232',
                'kriteria_id' => '1',
                'alternatif_id' => '13',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '232',
                'kriteria_id' => '2',
                'alternatif_id' => '21',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '232',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '232',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '232',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '232',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '232',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '232',
                'kriteria_id' => '8',
                'alternatif_id' => '48',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '233',
                'kriteria_id' => '1',
                'alternatif_id' => '10',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '233',
                'kriteria_id' => '2',
                'alternatif_id' => '21',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '233',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '233',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '233',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '233',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '233',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '233',
                'kriteria_id' => '8',
                'alternatif_id' => '51',
                'nilai' => '8',]);
            nilai::create([
                'car_id' => '234',
                'kriteria_id' => '1',
                'alternatif_id' => '5',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '234',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '234',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '234',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '234',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '234',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '234',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '234',
                'kriteria_id' => '8',
                'alternatif_id' => '49',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '235',
                'kriteria_id' => '1',
                'alternatif_id' => '5',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '235',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '235',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '235',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '235',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '235',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '235',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '235',
                'kriteria_id' => '8',
                'alternatif_id' => '48',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '236',
                'kriteria_id' => '1',
                'alternatif_id' => '8',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '236',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '236',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '236',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '236',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '236',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '236',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '236',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '237',
                'kriteria_id' => '1',
                'alternatif_id' => '7',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '237',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '237',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '237',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '237',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '237',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '237',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '237',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '238',
                'kriteria_id' => '1',
                'alternatif_id' => '12',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '238',
                'kriteria_id' => '2',
                'alternatif_id' => '21',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '238',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '238',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '238',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '238',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '238',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '238',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '239',
                'kriteria_id' => '1',
                'alternatif_id' => '14',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '239',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '239',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '239',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '239',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '239',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '239',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '239',
                'kriteria_id' => '8',
                'alternatif_id' => '51',
                'nilai' => '8',]);
            nilai::create([
                'car_id' => '240',
                'kriteria_id' => '1',
                'alternatif_id' => '13',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '240',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '240',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '240',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '240',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '240',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '240',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '240',
                'kriteria_id' => '8',
                'alternatif_id' => '45',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '241',
                'kriteria_id' => '1',
                'alternatif_id' => '4',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '241',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '241',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '241',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '241',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '241',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '241',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '241',
                'kriteria_id' => '8',
                'alternatif_id' => '49',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '242',
                'kriteria_id' => '1',
                'alternatif_id' => '7',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '242',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '242',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '242',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '242',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '242',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '242',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '242',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '243',
                'kriteria_id' => '1',
                'alternatif_id' => '13',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '243',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '243',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '243',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '243',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '243',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '243',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '243',
                'kriteria_id' => '8',
                'alternatif_id' => '51',
                'nilai' => '8',]);
            nilai::create([
                'car_id' => '244',
                'kriteria_id' => '1',
                'alternatif_id' => '6',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '244',
                'kriteria_id' => '2',
                'alternatif_id' => '21',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '244',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '244',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '244',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '244',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '244',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '244',
                'kriteria_id' => '8',
                'alternatif_id' => '51',
                'nilai' => '8',]);
            nilai::create([
                'car_id' => '245',
                'kriteria_id' => '1',
                'alternatif_id' => '4',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '245',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '245',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '245',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '245',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '245',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '245',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '245',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '246',
                'kriteria_id' => '1',
                'alternatif_id' => '1',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '246',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '246',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '246',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '246',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '246',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '246',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '246',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '247',
                'kriteria_id' => '1',
                'alternatif_id' => '1',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '247',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '247',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '247',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '247',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '247',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '247',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '247',
                'kriteria_id' => '8',
                'alternatif_id' => '50',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '248',
                'kriteria_id' => '1',
                'alternatif_id' => '15',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '248',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '248',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '248',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '248',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '248',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '248',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '248',
                'kriteria_id' => '8',
                'alternatif_id' => '50',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '249',
                'kriteria_id' => '1',
                'alternatif_id' => '2',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '249',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '249',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '249',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '249',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '249',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '249',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '249',
                'kriteria_id' => '8',
                'alternatif_id' => '47',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '250',
                'kriteria_id' => '1',
                'alternatif_id' => '3',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '250',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '250',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '250',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '250',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '250',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '250',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '250',
                'kriteria_id' => '8',
                'alternatif_id' => '48',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '251',
                'kriteria_id' => '1',
                'alternatif_id' => '10',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '251',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '251',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '251',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '251',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '251',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '251',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '251',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '252',
                'kriteria_id' => '1',
                'alternatif_id' => '11',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '252',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '252',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '252',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '252',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '252',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '252',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '252',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '253',
                'kriteria_id' => '1',
                'alternatif_id' => '6',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '253',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '253',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '253',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '253',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '253',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '253',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '253',
                'kriteria_id' => '8',
                'alternatif_id' => '51',
                'nilai' => '8',]);
            nilai::create([
                'car_id' => '254',
                'kriteria_id' => '1',
                'alternatif_id' => '14',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '254',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '254',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '254',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '254',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '254',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '254',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '254',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '255',
                'kriteria_id' => '1',
                'alternatif_id' => '12',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '255',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '255',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '255',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '255',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '255',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '255',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '255',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '256',
                'kriteria_id' => '1',
                'alternatif_id' => '9',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '256',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '256',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '256',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '256',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '256',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '256',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '256',
                'kriteria_id' => '8',
                'alternatif_id' => '51',
                'nilai' => '8',]);
            nilai::create([
                'car_id' => '257',
                'kriteria_id' => '1',
                'alternatif_id' => '2',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '257',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '257',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '257',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '257',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '257',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '257',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '257',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '258',
                'kriteria_id' => '1',
                'alternatif_id' => '10',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '258',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '258',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '258',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '258',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '258',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '258',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '258',
                'kriteria_id' => '8',
                'alternatif_id' => '51',
                'nilai' => '8',]);
            nilai::create([
                'car_id' => '259',
                'kriteria_id' => '1',
                'alternatif_id' => '11',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '259',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '259',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '259',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '259',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '259',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '259',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '259',
                'kriteria_id' => '8',
                'alternatif_id' => '50',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '260',
                'kriteria_id' => '1',
                'alternatif_id' => '13',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '260',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '260',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '260',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '260',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '260',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '260',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '260',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '261',
                'kriteria_id' => '1',
                'alternatif_id' => '13',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '261',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '261',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '261',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '261',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '261',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '261',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '261',
                'kriteria_id' => '8',
                'alternatif_id' => '47',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '262',
                'kriteria_id' => '1',
                'alternatif_id' => '7',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '262',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '262',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '262',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '262',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '262',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '262',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '262',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '263',
                'kriteria_id' => '1',
                'alternatif_id' => '8',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '263',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '263',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '263',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '263',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '263',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '263',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '263',
                'kriteria_id' => '8',
                'alternatif_id' => '50',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '264',
                'kriteria_id' => '1',
                'alternatif_id' => '8',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '264',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '264',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '264',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '264',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '264',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '264',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '264',
                'kriteria_id' => '8',
                'alternatif_id' => '49',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '265',
                'kriteria_id' => '1',
                'alternatif_id' => '15',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '265',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '265',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '265',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '265',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '265',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '265',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '265',
                'kriteria_id' => '8',
                'alternatif_id' => '48',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '266',
                'kriteria_id' => '1',
                'alternatif_id' => '13',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '266',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '266',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '266',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '266',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '266',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '266',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '266',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '267',
                'kriteria_id' => '1',
                'alternatif_id' => '6',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '267',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '267',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '267',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '267',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '267',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '267',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '267',
                'kriteria_id' => '8',
                'alternatif_id' => '50',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '268',
                'kriteria_id' => '1',
                'alternatif_id' => '2',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '268',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '268',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '268',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '268',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '268',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '268',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '268',
                'kriteria_id' => '8',
                'alternatif_id' => '47',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '269',
                'kriteria_id' => '1',
                'alternatif_id' => '5',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '269',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '269',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '269',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '269',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '269',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '269',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '269',
                'kriteria_id' => '8',
                'alternatif_id' => '47',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '270',
                'kriteria_id' => '1',
                'alternatif_id' => '11',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '270',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '270',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '270',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '270',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '270',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '270',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '270',
                'kriteria_id' => '8',
                'alternatif_id' => '45',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '271',
                'kriteria_id' => '1',
                'alternatif_id' => '7',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '271',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '271',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '271',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '271',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '271',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '271',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '271',
                'kriteria_id' => '8',
                'alternatif_id' => '45',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '272',
                'kriteria_id' => '1',
                'alternatif_id' => '15',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '272',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '272',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '272',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '272',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '272',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '272',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '272',
                'kriteria_id' => '8',
                'alternatif_id' => '45',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '273',
                'kriteria_id' => '1',
                'alternatif_id' => '12',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '273',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '273',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '273',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '273',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '273',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '273',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '273',
                'kriteria_id' => '8',
                'alternatif_id' => '51',
                'nilai' => '8',]);
            nilai::create([
                'car_id' => '274',
                'kriteria_id' => '1',
                'alternatif_id' => '11',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '274',
                'kriteria_id' => '2',
                'alternatif_id' => '21',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '274',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '274',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '274',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '274',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '274',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '274',
                'kriteria_id' => '8',
                'alternatif_id' => '49',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '275',
                'kriteria_id' => '1',
                'alternatif_id' => '12',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '275',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '275',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '275',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '275',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '275',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '275',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '275',
                'kriteria_id' => '8',
                'alternatif_id' => '50',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '276',
                'kriteria_id' => '1',
                'alternatif_id' => '3',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '276',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '276',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '276',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '276',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '276',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '276',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '276',
                'kriteria_id' => '8',
                'alternatif_id' => '48',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '277',
                'kriteria_id' => '1',
                'alternatif_id' => '3',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '277',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '277',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '277',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '277',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '277',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '277',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '277',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '278',
                'kriteria_id' => '1',
                'alternatif_id' => '4',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '278',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '278',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '278',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '278',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '278',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '278',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '278',
                'kriteria_id' => '8',
                'alternatif_id' => '45',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '279',
                'kriteria_id' => '1',
                'alternatif_id' => '5',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '279',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '279',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '279',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '279',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '279',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '279',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '279',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '280',
                'kriteria_id' => '1',
                'alternatif_id' => '13',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '280',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '280',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '280',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '280',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '280',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '280',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '280',
                'kriteria_id' => '8',
                'alternatif_id' => '50',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '281',
                'kriteria_id' => '1',
                'alternatif_id' => '15',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '281',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '281',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '281',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '281',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '281',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '281',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '281',
                'kriteria_id' => '8',
                'alternatif_id' => '48',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '282',
                'kriteria_id' => '1',
                'alternatif_id' => '12',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '282',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '282',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '282',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '282',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '282',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '282',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '282',
                'kriteria_id' => '8',
                'alternatif_id' => '51',
                'nilai' => '8',]);
            nilai::create([
                'car_id' => '283',
                'kriteria_id' => '1',
                'alternatif_id' => '5',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '283',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '283',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '283',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '283',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '283',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '283',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '283',
                'kriteria_id' => '8',
                'alternatif_id' => '45',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '284',
                'kriteria_id' => '1',
                'alternatif_id' => '14',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '284',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '284',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '284',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '284',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '284',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '284',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '284',
                'kriteria_id' => '8',
                'alternatif_id' => '45',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '285',
                'kriteria_id' => '1',
                'alternatif_id' => '6',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '285',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '285',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '285',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '285',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '285',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '285',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '285',
                'kriteria_id' => '8',
                'alternatif_id' => '50',
                'nilai' => '7',]);
        //
        // Oto Car
            nilai::create([
                'car_id' => '286',
                'kriteria_id' => '1',
                'alternatif_id' => '6',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '286',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '286',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '286',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '286',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '286',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '286',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '286',
                'kriteria_id' => '8',
                'alternatif_id' => '48',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '287',
                'kriteria_id' => '1',
                'alternatif_id' => '10',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '287',
                'kriteria_id' => '2',
                'alternatif_id' => '21',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '287',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '287',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '287',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '287',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '287',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '287',
                'kriteria_id' => '8',
                'alternatif_id' => '45',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '288',
                'kriteria_id' => '1',
                'alternatif_id' => '9',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '288',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '288',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '288',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '288',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '288',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '288',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '288',
                'kriteria_id' => '8',
                'alternatif_id' => '45',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '289',
                'kriteria_id' => '1',
                'alternatif_id' => '13',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '289',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '289',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '289',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '289',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '289',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '289',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '289',
                'kriteria_id' => '8',
                'alternatif_id' => '47',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '290',
                'kriteria_id' => '1',
                'alternatif_id' => '10',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '290',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '290',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '290',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '290',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '290',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '290',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '290',
                'kriteria_id' => '8',
                'alternatif_id' => '50',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '291',
                'kriteria_id' => '1',
                'alternatif_id' => '11',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '291',
                'kriteria_id' => '2',
                'alternatif_id' => '21',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '291',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '291',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '291',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '291',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '291',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '291',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '292',
                'kriteria_id' => '1',
                'alternatif_id' => '11',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '292',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '292',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '292',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '292',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '292',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '292',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '292',
                'kriteria_id' => '8',
                'alternatif_id' => '49',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '293',
                'kriteria_id' => '1',
                'alternatif_id' => '10',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '293',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '293',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '293',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '293',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '293',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '293',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '293',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '294',
                'kriteria_id' => '1',
                'alternatif_id' => '2',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '294',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '294',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '294',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '294',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '294',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '294',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '294',
                'kriteria_id' => '8',
                'alternatif_id' => '51',
                'nilai' => '8',]);
            nilai::create([
                'car_id' => '295',
                'kriteria_id' => '1',
                'alternatif_id' => '14',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '295',
                'kriteria_id' => '2',
                'alternatif_id' => '21',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '295',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '295',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '295',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '295',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '295',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '295',
                'kriteria_id' => '8',
                'alternatif_id' => '45',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '296',
                'kriteria_id' => '1',
                'alternatif_id' => '11',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '296',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '296',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '296',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '296',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '296',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '296',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '296',
                'kriteria_id' => '8',
                'alternatif_id' => '45',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '297',
                'kriteria_id' => '1',
                'alternatif_id' => '11',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '297',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '297',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '297',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '297',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '297',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '297',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '297',
                'kriteria_id' => '8',
                'alternatif_id' => '47',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '298',
                'kriteria_id' => '1',
                'alternatif_id' => '7',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '298',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '298',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '298',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '298',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '298',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '298',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '298',
                'kriteria_id' => '8',
                'alternatif_id' => '49',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '299',
                'kriteria_id' => '1',
                'alternatif_id' => '3',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '299',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '299',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '299',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '299',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '299',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '299',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '299',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '300',
                'kriteria_id' => '1',
                'alternatif_id' => '13',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '300',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '300',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '300',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '300',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '300',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '300',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '300',
                'kriteria_id' => '8',
                'alternatif_id' => '47',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '301',
                'kriteria_id' => '1',
                'alternatif_id' => '2',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '301',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '301',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '301',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '301',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '301',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '301',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '301',
                'kriteria_id' => '8',
                'alternatif_id' => '49',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '302',
                'kriteria_id' => '1',
                'alternatif_id' => '8',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '302',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '302',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '302',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '302',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '302',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '302',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '302',
                'kriteria_id' => '8',
                'alternatif_id' => '47',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '303',
                'kriteria_id' => '1',
                'alternatif_id' => '2',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '303',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '303',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '303',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '303',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '303',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '303',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '303',
                'kriteria_id' => '8',
                'alternatif_id' => '51',
                'nilai' => '8',]);
            nilai::create([
                'car_id' => '304',
                'kriteria_id' => '1',
                'alternatif_id' => '2',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '304',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '304',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '304',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '304',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '304',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '304',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '304',
                'kriteria_id' => '8',
                'alternatif_id' => '48',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '305',
                'kriteria_id' => '1',
                'alternatif_id' => '10',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '305',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '305',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '305',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '305',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '305',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '305',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '305',
                'kriteria_id' => '8',
                'alternatif_id' => '51',
                'nilai' => '8',]);
            nilai::create([
                'car_id' => '306',
                'kriteria_id' => '1',
                'alternatif_id' => '7',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '306',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '306',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '306',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '306',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '306',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '306',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '306',
                'kriteria_id' => '8',
                'alternatif_id' => '47',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '307',
                'kriteria_id' => '1',
                'alternatif_id' => '13',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '307',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '307',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '307',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '307',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '307',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '307',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '307',
                'kriteria_id' => '8',
                'alternatif_id' => '48',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '308',
                'kriteria_id' => '1',
                'alternatif_id' => '5',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '308',
                'kriteria_id' => '2',
                'alternatif_id' => '21',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '308',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '308',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '308',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '308',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '308',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '308',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '309',
                'kriteria_id' => '1',
                'alternatif_id' => '1',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '309',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '309',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '309',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '309',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '309',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '309',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '309',
                'kriteria_id' => '8',
                'alternatif_id' => '47',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '310',
                'kriteria_id' => '1',
                'alternatif_id' => '5',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '310',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '310',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '310',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '310',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '310',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '310',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '310',
                'kriteria_id' => '8',
                'alternatif_id' => '51',
                'nilai' => '8',]);
            nilai::create([
                'car_id' => '311',
                'kriteria_id' => '1',
                'alternatif_id' => '4',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '311',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '311',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '311',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '311',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '311',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '311',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '311',
                'kriteria_id' => '8',
                'alternatif_id' => '45',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '312',
                'kriteria_id' => '1',
                'alternatif_id' => '2',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '312',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '312',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '312',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '312',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '312',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '312',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '312',
                'kriteria_id' => '8',
                'alternatif_id' => '50',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '313',
                'kriteria_id' => '1',
                'alternatif_id' => '10',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '313',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '313',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '313',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '313',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '313',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '313',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '313',
                'kriteria_id' => '8',
                'alternatif_id' => '48',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '314',
                'kriteria_id' => '1',
                'alternatif_id' => '6',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '314',
                'kriteria_id' => '2',
                'alternatif_id' => '21',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '314',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '314',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '314',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '314',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '314',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '314',
                'kriteria_id' => '8',
                'alternatif_id' => '47',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '315',
                'kriteria_id' => '1',
                'alternatif_id' => '2',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '315',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '315',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '315',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '315',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '315',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '315',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '315',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '316',
                'kriteria_id' => '1',
                'alternatif_id' => '9',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '316',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '316',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '316',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '316',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '316',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '316',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '316',
                'kriteria_id' => '8',
                'alternatif_id' => '50',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '317',
                'kriteria_id' => '1',
                'alternatif_id' => '3',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '317',
                'kriteria_id' => '2',
                'alternatif_id' => '21',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '317',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '317',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '317',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '317',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '317',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '317',
                'kriteria_id' => '8',
                'alternatif_id' => '50',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '318',
                'kriteria_id' => '1',
                'alternatif_id' => '14',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '318',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '318',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '318',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '318',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '318',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '318',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '318',
                'kriteria_id' => '8',
                'alternatif_id' => '50',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '319',
                'kriteria_id' => '1',
                'alternatif_id' => '5',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '319',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '319',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '319',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '319',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '319',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '319',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '319',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '320',
                'kriteria_id' => '1',
                'alternatif_id' => '8',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '320',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '320',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '320',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '320',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '320',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '320',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '320',
                'kriteria_id' => '8',
                'alternatif_id' => '50',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '321',
                'kriteria_id' => '1',
                'alternatif_id' => '13',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '321',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '321',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '321',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '321',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '321',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '321',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '321',
                'kriteria_id' => '8',
                'alternatif_id' => '49',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '322',
                'kriteria_id' => '1',
                'alternatif_id' => '6',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '322',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '322',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '322',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '322',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '322',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '322',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '322',
                'kriteria_id' => '8',
                'alternatif_id' => '49',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '323',
                'kriteria_id' => '1',
                'alternatif_id' => '8',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '323',
                'kriteria_id' => '2',
                'alternatif_id' => '21',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '323',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '323',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '323',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '323',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '323',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '323',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '324',
                'kriteria_id' => '1',
                'alternatif_id' => '7',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '324',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '324',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '324',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '324',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '324',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '324',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '324',
                'kriteria_id' => '8',
                'alternatif_id' => '49',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '325',
                'kriteria_id' => '1',
                'alternatif_id' => '12',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '325',
                'kriteria_id' => '2',
                'alternatif_id' => '21',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '325',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '325',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '325',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '325',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '325',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '325',
                'kriteria_id' => '8',
                'alternatif_id' => '45',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '326',
                'kriteria_id' => '1',
                'alternatif_id' => '4',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '326',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '326',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '326',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '326',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '326',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '326',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '326',
                'kriteria_id' => '8',
                'alternatif_id' => '51',
                'nilai' => '8',]);
            nilai::create([
                'car_id' => '327',
                'kriteria_id' => '1',
                'alternatif_id' => '9',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '327',
                'kriteria_id' => '2',
                'alternatif_id' => '21',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '327',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '327',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '327',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '327',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '327',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '327',
                'kriteria_id' => '8',
                'alternatif_id' => '49',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '328',
                'kriteria_id' => '1',
                'alternatif_id' => '14',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '328',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '328',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '328',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '328',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '328',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '328',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '328',
                'kriteria_id' => '8',
                'alternatif_id' => '48',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '329',
                'kriteria_id' => '1',
                'alternatif_id' => '8',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '329',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '329',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '329',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '329',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '329',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '329',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '329',
                'kriteria_id' => '8',
                'alternatif_id' => '51',
                'nilai' => '8',]);
            nilai::create([
                'car_id' => '330',
                'kriteria_id' => '1',
                'alternatif_id' => '13',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '330',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '330',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '330',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '330',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '330',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '330',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '330',
                'kriteria_id' => '8',
                'alternatif_id' => '50',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '331',
                'kriteria_id' => '1',
                'alternatif_id' => '12',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '331',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '331',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '331',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '331',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '331',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '331',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '331',
                'kriteria_id' => '8',
                'alternatif_id' => '50',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '332',
                'kriteria_id' => '1',
                'alternatif_id' => '7',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '332',
                'kriteria_id' => '2',
                'alternatif_id' => '21',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '332',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '332',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '332',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '332',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '332',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '332',
                'kriteria_id' => '8',
                'alternatif_id' => '45',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '333',
                'kriteria_id' => '1',
                'alternatif_id' => '11',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '333',
                'kriteria_id' => '2',
                'alternatif_id' => '21',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '333',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '333',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '333',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '333',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '333',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '333',
                'kriteria_id' => '8',
                'alternatif_id' => '50',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '334',
                'kriteria_id' => '1',
                'alternatif_id' => '10',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '334',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '334',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '334',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '334',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '334',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '334',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '334',
                'kriteria_id' => '8',
                'alternatif_id' => '49',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '335',
                'kriteria_id' => '1',
                'alternatif_id' => '12',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '335',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '335',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '335',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '335',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '335',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '335',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '335',
                'kriteria_id' => '8',
                'alternatif_id' => '48',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '336',
                'kriteria_id' => '1',
                'alternatif_id' => '14',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '336',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '336',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '336',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '336',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '336',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '336',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '336',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '337',
                'kriteria_id' => '1',
                'alternatif_id' => '8',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '337',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '337',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '337',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '337',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '337',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '337',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '337',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '338',
                'kriteria_id' => '1',
                'alternatif_id' => '15',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '338',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '338',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '338',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '338',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '338',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '338',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '338',
                'kriteria_id' => '8',
                'alternatif_id' => '49',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '339',
                'kriteria_id' => '1',
                'alternatif_id' => '8',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '339',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '339',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '339',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '339',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '339',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '339',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '339',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '340',
                'kriteria_id' => '1',
                'alternatif_id' => '8',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '340',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '340',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '340',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '340',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '340',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '340',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '340',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '341',
                'kriteria_id' => '1',
                'alternatif_id' => '2',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '341',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '341',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '341',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '341',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '341',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '341',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '341',
                'kriteria_id' => '8',
                'alternatif_id' => '51',
                'nilai' => '8',]);
            nilai::create([
                'car_id' => '342',
                'kriteria_id' => '1',
                'alternatif_id' => '2',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '342',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '342',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '342',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '342',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '342',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '342',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '342',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '343',
                'kriteria_id' => '1',
                'alternatif_id' => '13',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '343',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '343',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '343',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '343',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '343',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '343',
                'kriteria_id' => '7',
                'alternatif_id' => '39',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '343',
                'kriteria_id' => '8',
                'alternatif_id' => '50',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '344',
                'kriteria_id' => '1',
                'alternatif_id' => '15',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '344',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '344',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '344',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '344',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '344',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '344',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '344',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '345',
                'kriteria_id' => '1',
                'alternatif_id' => '13',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '345',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '345',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '345',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '345',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '345',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '345',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '345',
                'kriteria_id' => '8',
                'alternatif_id' => '48',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '346',
                'kriteria_id' => '1',
                'alternatif_id' => '7',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '346',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '346',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '346',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '346',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '346',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '346',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '346',
                'kriteria_id' => '8',
                'alternatif_id' => '48',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '347',
                'kriteria_id' => '1',
                'alternatif_id' => '11',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '347',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '347',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '347',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '347',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '347',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '347',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '347',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '348',
                'kriteria_id' => '1',
                'alternatif_id' => '12',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '348',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '348',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '348',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '348',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '348',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '348',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '348',
                'kriteria_id' => '8',
                'alternatif_id' => '51',
                'nilai' => '8',]);
            nilai::create([
                'car_id' => '349',
                'kriteria_id' => '1',
                'alternatif_id' => '13',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '349',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '349',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '349',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '349',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '349',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '349',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '349',
                'kriteria_id' => '8',
                'alternatif_id' => '51',
                'nilai' => '8',]);
            nilai::create([
                'car_id' => '350',
                'kriteria_id' => '1',
                'alternatif_id' => '5',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '350',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '350',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '350',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '350',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '350',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '350',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '350',
                'kriteria_id' => '8',
                'alternatif_id' => '49',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '351',
                'kriteria_id' => '1',
                'alternatif_id' => '5',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '351',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '351',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '351',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '351',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '351',
                'kriteria_id' => '6',
                'alternatif_id' => '36',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '351',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '351',
                'kriteria_id' => '8',
                'alternatif_id' => '50',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '352',
                'kriteria_id' => '1',
                'alternatif_id' => '4',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '352',
                'kriteria_id' => '2',
                'alternatif_id' => '21',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '352',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '352',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '352',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '352',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '352',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '352',
                'kriteria_id' => '8',
                'alternatif_id' => '51',
                'nilai' => '8',]);
            nilai::create([
                'car_id' => '353',
                'kriteria_id' => '1',
                'alternatif_id' => '10',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '353',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '353',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '353',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '353',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '353',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '353',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '353',
                'kriteria_id' => '8',
                'alternatif_id' => '48',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '354',
                'kriteria_id' => '1',
                'alternatif_id' => '8',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '354',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '354',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '354',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '354',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '354',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '354',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '354',
                'kriteria_id' => '8',
                'alternatif_id' => '48',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '355',
                'kriteria_id' => '1',
                'alternatif_id' => '10',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '355',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '355',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '355',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '355',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '355',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '355',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '355',
                'kriteria_id' => '8',
                'alternatif_id' => '50',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '356',
                'kriteria_id' => '1',
                'alternatif_id' => '2',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '356',
                'kriteria_id' => '2',
                'alternatif_id' => '20',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '356',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '356',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '356',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '356',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '356',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '356',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '357',
                'kriteria_id' => '1',
                'alternatif_id' => '7',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '357',
                'kriteria_id' => '2',
                'alternatif_id' => '21',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '357',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '357',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '357',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '357',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '357',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '357',
                'kriteria_id' => '8',
                'alternatif_id' => '51',
                'nilai' => '8',]);
            nilai::create([
                'car_id' => '358',
                'kriteria_id' => '1',
                'alternatif_id' => '5',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '358',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '358',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '358',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '358',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '358',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '358',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '358',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '359',
                'kriteria_id' => '1',
                'alternatif_id' => '5',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '359',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '359',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '359',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '359',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '359',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '359',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '359',
                'kriteria_id' => '8',
                'alternatif_id' => '48',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '360',
                'kriteria_id' => '1',
                'alternatif_id' => '14',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '360',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '360',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '360',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '360',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '360',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '360',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '360',
                'kriteria_id' => '8',
                'alternatif_id' => '48',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '361',
                'kriteria_id' => '1',
                'alternatif_id' => '8',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '361',
                'kriteria_id' => '2',
                'alternatif_id' => '19',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '361',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '361',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '361',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '361',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '361',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '361',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '362',
                'kriteria_id' => '1',
                'alternatif_id' => '4',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '362',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '362',
                'kriteria_id' => '3',
                'alternatif_id' => '25',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '362',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '362',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '362',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '362',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '362',
                'kriteria_id' => '8',
                'alternatif_id' => '47',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '363',
                'kriteria_id' => '1',
                'alternatif_id' => '6',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '363',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '363',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '363',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '363',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '363',
                'kriteria_id' => '6',
                'alternatif_id' => '34',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '363',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '363',
                'kriteria_id' => '8',
                'alternatif_id' => '44',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '364',
                'kriteria_id' => '1',
                'alternatif_id' => '12',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '364',
                'kriteria_id' => '2',
                'alternatif_id' => '16',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '364',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '364',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '364',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '364',
                'kriteria_id' => '6',
                'alternatif_id' => '38',
                'nilai' => '6',]);
            nilai::create([
                'car_id' => '364',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '364',
                'kriteria_id' => '8',
                'alternatif_id' => '47',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '365',
                'kriteria_id' => '1',
                'alternatif_id' => '11',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '365',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '365',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '365',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '365',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '365',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '365',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '365',
                'kriteria_id' => '8',
                'alternatif_id' => '50',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '366',
                'kriteria_id' => '1',
                'alternatif_id' => '15',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '366',
                'kriteria_id' => '2',
                'alternatif_id' => '17',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '366',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '366',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '366',
                'kriteria_id' => '5',
                'alternatif_id' => '30',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '366',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '366',
                'kriteria_id' => '7',
                'alternatif_id' => '43',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '366',
                'kriteria_id' => '8',
                'alternatif_id' => '48',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '367',
                'kriteria_id' => '1',
                'alternatif_id' => '9',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '367',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '367',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '367',
                'kriteria_id' => '4',
                'alternatif_id' => '26',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '367',
                'kriteria_id' => '5',
                'alternatif_id' => '29',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '367',
                'kriteria_id' => '6',
                'alternatif_id' => '33',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '367',
                'kriteria_id' => '7',
                'alternatif_id' => '40',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '367',
                'kriteria_id' => '8',
                'alternatif_id' => '51',
                'nilai' => '8',]);
            nilai::create([
                'car_id' => '368',
                'kriteria_id' => '1',
                'alternatif_id' => '5',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '368',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '368',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '368',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '368',
                'kriteria_id' => '5',
                'alternatif_id' => '31',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '368',
                'kriteria_id' => '6',
                'alternatif_id' => '35',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '368',
                'kriteria_id' => '7',
                'alternatif_id' => '42',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '368',
                'kriteria_id' => '8',
                'alternatif_id' => '48',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '369',
                'kriteria_id' => '1',
                'alternatif_id' => '2',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '369',
                'kriteria_id' => '2',
                'alternatif_id' => '18',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '369',
                'kriteria_id' => '3',
                'alternatif_id' => '23',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '369',
                'kriteria_id' => '4',
                'alternatif_id' => '28',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '369',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '369',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '369',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '369',
                'kriteria_id' => '8',
                'alternatif_id' => '46',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '370',
                'kriteria_id' => '1',
                'alternatif_id' => '13',
                'nilai' => '1',]);
            nilai::create([
                'car_id' => '370',
                'kriteria_id' => '2',
                'alternatif_id' => '22',
                'nilai' => '7',]);
            nilai::create([
                'car_id' => '370',
                'kriteria_id' => '3',
                'alternatif_id' => '24',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '370',
                'kriteria_id' => '4',
                'alternatif_id' => '27',
                'nilai' => '2',]);
            nilai::create([
                'car_id' => '370',
                'kriteria_id' => '5',
                'alternatif_id' => '32',
                'nilai' => '4',]);
            nilai::create([
                'car_id' => '370',
                'kriteria_id' => '6',
                'alternatif_id' => '37',
                'nilai' => '5',]);
            nilai::create([
                'car_id' => '370',
                'kriteria_id' => '7',
                'alternatif_id' => '41',
                'nilai' => '3',]);
            nilai::create([
                'car_id' => '370',
                'kriteria_id' => '8',
                'alternatif_id' => '45',
                'nilai' => '2',]);
        //
        // Benseupakat Rentcar

        //

        // Table Ulasan
            ulasan::create([
                'slug' => '0fHCsABhNQ5dhx6e9KYhEdezGSMgT827bwBrCVGXOJbFvcQxoJ',
                'user_id' => '1',
                'car_id' => '16',
                'rating' => '5',
                'komentar' => 'Nice',]);
            ulasan::create([
                'slug' => '2WFao3fGCNxjnqy3TyLRtHZmGpoSoPunD01fgwjIEl1Anqstgb',
                'user_id' => '1',
                'car_id' => '1',
                'rating' => '5',
                'komentar' => 'Mobilnya bersih',]);
            ulasan::create([
                'slug' => 'NU2PMyAQY95ej7Pkst3KsfloHcwgj5rbzkBBbLiAUuVxQSTFBV',
                'user_id' => '1',
                'car_id' => '44',
                'rating' => '5',
                'komentar' => 'Mantap',]);
            ulasan::create([
                'slug' => 'dSZKP54Gd4MpRm1UAhAo7lkiUJa8JnJ7t4Z8DigJIedAQg3BfQ',
                'user_id' => '1',
                'car_id' => '42',
                'rating' => '5',
                'komentar' => 'Good',]);
        //
    }
}
