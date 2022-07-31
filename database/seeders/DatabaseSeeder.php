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
                'kriteria_id' => '1',
                'nama' => 'Daihatsu Terios',
                'nilai' => '1',]);
            alternatif::create([
                'kriteria_id' => '1',
                'nama' => 'Daihatsu Xenia',
                'nilai' => '1',]);
            alternatif::create([
                'kriteria_id' => '1',
                'nama' => 'Honda Jazz RS',
                'nilai' => '1',]);
            alternatif::create([
                'kriteria_id' => '1',
                'nama' => 'Mitsubishi Pajero Sport',
                'nilai' => '1',]);
            alternatif::create([
                'kriteria_id' => '1',
                'nama' => 'Mitsubishi Triton',
                'nilai' => '1',]);
            alternatif::create([
                'kriteria_id' => '1',
                'nama' => 'Toyota Avanza Type E',
                'nilai' => '1',]);
            alternatif::create([
                'kriteria_id' => '1',
                'nama' => 'Toyota Avanza Type G',
                'nilai' => '1',]);
            alternatif::create([
                'kriteria_id' => '1',
                'nama' => 'Toyota Avanza Veloz',
                'nilai' => '1',]);
            alternatif::create([
                'kriteria_id' => '1',
                'nama' => 'Toyota Kijang Innova',
                'nilai' => '1',]);
            alternatif::create([
                'kriteria_id' => '1',
                'nama' => 'Toyota Rush',
                'nilai' => '1',]);
            alternatif::create([
                'kriteria_id' => '2',
                'nama' => 'dibawah 2010',
                'nilai' => '1',]);
            alternatif::create([
                'kriteria_id' => '2',
                'nama' => '2010 sampai 2012',
                'nilai' => '2',]);
            alternatif::create([
                'kriteria_id' => '2',
                'nama' => '2013 sampai 2014',
                'nilai' => '3',]);
            alternatif::create([
                'kriteria_id' => '2',
                'nama' => '2015 sampai 2016',
                'nilai' => '4',]);
            alternatif::create([
                'kriteria_id' => '2',
                'nama' => '2017 sampai 2018',
                'nilai' => '5',]);
            alternatif::create([
                'kriteria_id' => '2',
                'nama' => '2019 sampai 2020',
                'nilai' => '6',]);
            alternatif::create([
                'kriteria_id' => '2',
                'nama' => '2021 sampai 2022',
                'nilai' => '7',]);
            alternatif::create([
                'kriteria_id' => '3',
                'nama' => 'kurang baik',
                'nilai' => '1',]);
            alternatif::create([
                'kriteria_id' => '3',
                'nama' => 'cukup',
                'nilai' => '2',]);
            alternatif::create([
                'kriteria_id' => '3',
                'nama' => 'sangat baik',
                'nilai' => '3',]);
            alternatif::create([
                'kriteria_id' => '4',
                'nama' => 'kurang baik',
                'nilai' => '1',]);
            alternatif::create([
                'kriteria_id' => '4',
                'nama' => 'cukup',
                'nilai' => '2',]);
            alternatif::create([
                'kriteria_id' => '4',
                'nama' => 'sangat baik',
                'nilai' => '3',]);
            alternatif::create([
                'kriteria_id' => '5',
                'nama' => 'dibawah 5 orang',
                'nilai' => '1',]);
            alternatif::create([
                'kriteria_id' => '5',
                'nama' => '5 sampai 6 orang ',
                'nilai' => '2',]);
            alternatif::create([
                'kriteria_id' => '5',
                'nama' => '7 sampai 8 orang',
                'nilai' => '3',]);
            alternatif::create([
                'kriteria_id' => '5',
                'nama' => 'diatas 8 orang',
                'nilai' => '4',]);
            alternatif::create([
                'kriteria_id' => '6',
                'nama' => 'dibawah 1300cc',
                'nilai' => '1',]);
            alternatif::create([
                'kriteria_id' => '6',
                'nama' => '1301cc sampai 1400cc',
                'nilai' => '2',]);
            alternatif::create([
                'kriteria_id' => '6',
                'nama' => '1401cc sampai 1500cc',
                'nilai' => '3',]);
            alternatif::create([
                'kriteria_id' => '6',
                'nama' => '1501cc sampai 1600cc',
                'nilai' => '4',]);
            alternatif::create([
                'kriteria_id' => '6',
                'nama' => '1601cc sampai 2000cc',
                'nilai' => '5',]);
            alternatif::create([
                'kriteria_id' => '7',
                'nama' => 'Pertamax Turbo',
                'nilai' => '1',]);
            alternatif::create([
                'kriteria_id' => '7',
                'nama' => 'Pertamina DEX',
                'nilai' => '2',]);
            alternatif::create([
                'kriteria_id' => '7',
                'nama' => 'Pertamax',
                'nilai' => '3',]);
            alternatif::create([
                'kriteria_id' => '7',
                'nama' => 'Pertalite',
                'nilai' => '4',]);
            alternatif::create([
                'kriteria_id' => '7',
                'nama' => 'Solar',
                'nilai' => '5',]);
            alternatif::create([
                'kriteria_id' => '8',
                'nama' => 'diatas 600rb/hari',
                'nilai' => '8',]);
            alternatif::create([
                'kriteria_id' => '8',
                'nama' => '551rb sampai 600rb/hari',
                'nilai' => '7',]);
            alternatif::create([
                'kriteria_id' => '8',
                'nama' => '501rb sampai 550rb/hari',
                'nilai' => '6',]);
            alternatif::create([
                'kriteria_id' => '8',
                'nama' => '451rb sampai 500rb/hari',
                'nilai' => '5',]);
            alternatif::create([
                'kriteria_id' => '8',
                'nama' => '401rb sampai 450rb/hari',
                'nilai' => '4',]);
            alternatif::create([
                'kriteria_id' => '8',
                'nama' => '351rb sampai 400rb/hari',
                'nilai' => '3',]);
            alternatif::create([
                'kriteria_id' => '8',
                'nama' => '300rb sampai 350rb/hari',
                'nilai' => '2',]);
            alternatif::create([
                'kriteria_id' => '8',
                'nama' => 'dibawah 300rb/hari',
                'nilai' => '1',]);
            alternatif::create([
                'kriteria_id' => '1',
                'nama' => 'Toyota Hiace',
                'nilai' => '1',]);
            alternatif::create([
                'kriteria_id' => '1',
                'nama' => 'Suzuki Ertiga',
                'nilai' => '1',]);
            alternatif::create([
                'kriteria_id' => '1',
                'nama' => 'Honda Mobilio RS',
                'nilai' => '1',]);
            alternatif::create([
                'kriteria_id' => '1',
                'nama' => 'Mitsubishi Xpander',
                'nilai' => '1',]);
            alternatif::create([
                'kriteria_id' => '6',
                'nama' => 'diatas 2000cc',
                'nilai' => '6',]);
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
                'slug' => Str::random(50),
                'username' => 'amin-family-group',
                'email' => 'aminfamilygroup@gmail.com',
                'no_hp' => '85260642004',
                'password' => Hash::make('password'),
                'image' => NULL,
                'role' => 'rental',
            ]);
            // User::create([
            //     'slug' => Str::random(50),
            //     'username' => 'Okta',
            //     'email' => 'okta@gmail.com',
            //     'no_hp' => '81360544560',
            //     'password' => Hash::make('password'),
            //     'image' => NULL,
            //     'role' => 'rental',
            // ]);

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
                'user_id' => '5',
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
            shop::create([
                'slug' => Str::random(50),
                'user_id' => '5',
                'nm_pu' => 'AMINS FAMILY GROUP',
                'nm_usaha' => 'CV.AMINS FAMILY GROUP',
                'alamat' => 'Alue Awe, Kec. Muara Dua, Kota Lhokseumawe, Aceh',
                'nik' => '1000000000000005',
                'status' => 'active',
                'longitude' => '97.15181872276462',
                'latitude' => '5.131626592237223',
                'img_ktp' => NULL,
                'img_siu' => NULL,
                'pas_foto' => NULL,
                'foto_usaha' => NULL,
            ]);

        //4 - 11

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
            // KMJ
                car::create([
                    'slug' => 'YeOIEq4u3d7498DynBolJgODzohCmBQ5CQ0z93pND8HRM4unpT',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '10',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '29',
                    'Jenis_BBM_id' => '33',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'wV1tAE8LIpH4oEbZn4Nse6Evw3wXfIkhIZ4PCsX7bibLsEdr0B',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '1',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '28',
                    'Jenis_BBM_id' => '35',
                    'Harga_Sewa_id' => '42',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'xTVw4V7M5FRB5UKykd8jFicq0eBIHt82foglNmVqfJYWXmdliu',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '45',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '50',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '42',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'iyoeZgyN51gPPmfFGMiOMTnwvsZTrZFGEs45EBN9uWkE2UF0sn',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '5',
                    'Tahun_Produksi_id' => '14',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '31',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '43',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'u0ILl3BimbAokQ7Eo2nXgrNPawNX9N4eBJpRsSdia9FvFd6uSq',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '3',
                    'Tahun_Produksi_id' => '16',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '27',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '35',
                    'Harga_Sewa_id' => '38',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'JMVsINTS6Y9QPzPyRBlEpvwAFvIYRzztmLNqNtZPXpjSyE5MXU',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '16',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '32',
                    'Jenis_BBM_id' => '35',
                    'Harga_Sewa_id' => '39',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'X77uAZAA642sXyaQnlUxOlX1DtjGikDxRIje5XdmCquQk4hXSK',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '3',
                    'Tahun_Produksi_id' => '13',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '32',
                    'Jenis_BBM_id' => '35',
                    'Harga_Sewa_id' => '40',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'pfJoeLmW7cow9PcI36I0XPKA3NDvYKmIegMNBSOqA6VsQAGkmI',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '4',
                    'Tahun_Produksi_id' => '13',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '50',
                    'Jenis_BBM_id' => '33',
                    'Harga_Sewa_id' => '42',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => '44f6fy1U6YzEXZ1cPXFRk6vtCn42lI23EUAtYjJn1GOh3BxMJo',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '45',
                    'Tahun_Produksi_id' => '13',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '31',
                    'Jenis_BBM_id' => '33',
                    'Harga_Sewa_id' => '42',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'wkwBXQVgErbkrSLcxa2Fn62NONW9D08Fk6f9zUsuR7QatRR0Ji',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '48',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '29',
                    'Jenis_BBM_id' => '34',
                    'Harga_Sewa_id' => '39',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'Px9sj1WcQeyYswtWN4fnp05gjAPRxmWSzWcGe9ZO57mG1Bv3F7',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '50',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '42',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => '9xvaqhb03VwdnqIbSrYf8ah8U2YLj7cKQpT88pNBDmhk3NqWeF',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '10',
                    'Tahun_Produksi_id' => '14',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '50',
                    'Jenis_BBM_id' => '35',
                    'Harga_Sewa_id' => '40',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'X9X9mZC0QFE6zMvemqIt8jUjMDZwddddFptStCmdVQ2QNHstAS',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '45',
                    'Tahun_Produksi_id' => '16',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '29',
                    'Jenis_BBM_id' => '34',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => '4wIm1Lw3405no7Qps4btF10innxBAaZ7pNTR6dTMMzrfl9rq6a',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '32',
                    'Jenis_BBM_id' => '34',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'OH50NUwgbZ1kpLNwCsAUbhRfwod7dHDjBSN57YAT9eZ93hKGnX',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '4',
                    'Tahun_Produksi_id' => '11',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '27',
                    'Kapasitas_Mesin_id' => '31',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'uP0YF8Vh73reJTBOzrqe15VVWJHuYE85AZcsfBpFMVPzHU8GmK',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '13',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '28',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '45',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'pfWjD9Dyp45cc00PaqIkjoTIAjMMulSngRjVt9AmiTr5zRMR9i',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '3',
                    'Tahun_Produksi_id' => '16',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '27',
                    'Kapasitas_Mesin_id' => '50',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '43',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'm1KDrNQCeyQyDfRyWdf0FjnKuHACsyQ1iLydN6gvSjuuWBok7a',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '3',
                    'Tahun_Produksi_id' => '16',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '32',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '38',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'HxJh517o4WPMjmazQqg011C8LeVdoGlrp67rS4mrGYFkzz8fVf',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '5',
                    'Tahun_Produksi_id' => '11',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '29',
                    'Jenis_BBM_id' => '33',
                    'Harga_Sewa_id' => '39',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'uO6uCgkn5w6rxV9dEUvvEJyjVDNlhwPUhn7wNOOXaUt77fHXwP',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '45',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '32',
                    'Jenis_BBM_id' => '34',
                    'Harga_Sewa_id' => '43',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => '9HGKz3CWjnuYTNxVuY9qQ5lMRNv5k4uyRqEXSh2XGwMfmAeuI9',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '4',
                    'Tahun_Produksi_id' => '14',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '29',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '38',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'X0Zer3t2V3xmRZMqmzq5TQ7MRN0fKNaMZAL8ZLI0E5iHYytK4r',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '46',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '35',
                    'Harga_Sewa_id' => '42',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'AfIDhXZBykT899UP9L2vH1LDTh7JifdgSNMPgn48a0GwuAtwoK',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '8',
                    'Tahun_Produksi_id' => '16',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '35',
                    'Harga_Sewa_id' => '39',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'cJWL53iFgoCubXjcJTjjgKFjWswj72gQy8r2pKAj7orb4bXbSH',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '16',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '45',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'bNKg6FxN0ag0Wx7roYzUc4OTawyCEQ0Tn4UvxJct09ZadGU0tn',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '45',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '33',
                    'Harga_Sewa_id' => '42',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'YAozxRVR9nIuJNVuG7gVDKHYmIOJo9U3sGhqOGrh1GpcDrv9CO',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '13',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '50',
                    'Jenis_BBM_id' => '34',
                    'Harga_Sewa_id' => '45',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => '01Lka8nXBW8G2WT64TRIXbKynYBav2QhofarPQDXWxlZ1TokIi',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '35',
                    'Harga_Sewa_id' => '45',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'cw2kWMkQxjKBFX5fxfVbjIp1V2BnKWmhN4a9eln0qFn1afhLCn',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '11',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '50',
                    'Jenis_BBM_id' => '33',
                    'Harga_Sewa_id' => '38',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'BfRpLhpol0ag3edyUABcmr2pGv72DE3we0UlkmkoADKBxgQk2W',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '48',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '31',
                    'Jenis_BBM_id' => '34',
                    'Harga_Sewa_id' => '41',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'jINqyM582x1iBvhRGhOmBEZIhOKMwQ6u5xF0Q76ZO3X2GmyZyo',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '48',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '27',
                    'Kapasitas_Mesin_id' => '31',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'gt3iir1BwnST8fjDhElPOVgwLdDghQfOcJYVhLwhUHcDWXjj0T',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '31',
                    'Jenis_BBM_id' => '34',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'QQ4sqbQCS5Ccn3QMwCpvTImFzdwv8Ie8PuAmBcmDgechzhaA9i',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '4',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '28',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '45',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'BBanVVBmkkUicfqFXHY4g9eU0TUDfQUAVfzCReGien8PTTs0Wm',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '45',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '27',
                    'Kapasitas_Mesin_id' => '29',
                    'Jenis_BBM_id' => '34',
                    'Harga_Sewa_id' => '38',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'P5udHEQ9050AzVb0GHxTXRCk2WinrJDTRCd5Q28UB4kdqte9pa',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '47',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '33',
                    'Harga_Sewa_id' => '42',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => '2XbSpMPgreJQg8KIf6e88scO4zUVuaCXcMDABjVaaojGoC0B7A',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '27',
                    'Kapasitas_Mesin_id' => '50',
                    'Jenis_BBM_id' => '34',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'oHbrtAhvfskS6Ayd6aadfd7LZOrYyAXYablXvUWqPy6Bs7cwuB',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '8',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '28',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '45',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'FCIrBQnGZQE5ZOFgx6yJh9yShL30zwyC9cim02OLWqhdm7nHIo',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '6',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '38',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'fNaNaPrwqdyL4DQAWillWTMyTo3nXcXcreAiFBDJy6Z8R4n1bs',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '10',
                    'Tahun_Produksi_id' => '13',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '31',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '42',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'u5sPVt4ZJLLiczC23uD1LGQEjnxjPJ9lphHAu8HnFBgZNpRPbn',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '10',
                    'Tahun_Produksi_id' => '14',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '32',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '38',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'XltF42TxUzrRdENrGEMcgHIPIUIk0xpgiERIB8w2LyL8m588uO',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '46',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '31',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '45',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => '32TVSlRGdUVZflnFIBdt2hrwx3f6dWEtf4n1rc3rx8smS7bQQA',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '34',
                    'Harga_Sewa_id' => '38',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => '7mjyiP1EXr3TpD9wyRrf7PFlaVOGQTTZHxkylCjo1QX0HdPsxa',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '10',
                    'Tahun_Produksi_id' => '11',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '41',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => '3FqUcd08RkuQvcXiv3G8L3sCdyCUsquVzPqjWtEZrwgFe5Q3P6',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '48',
                    'Tahun_Produksi_id' => '16',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '27',
                    'Kapasitas_Mesin_id' => '32',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '38',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'wGBbU8rfeqnesBHtMrnyB3v7sewFOX80jGBY4Sz52k8K06Z2fk',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '8',
                    'Tahun_Produksi_id' => '13',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '29',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '38',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => '9D0GsvW79LfJqZYRVo8q1NyOpGyy5ghvAJbcZx6xdUao3wW5HM',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '5',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '31',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '40',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => '1hUloI2aSTn4TcyURlTuMDXf6U8eHTlaqQoBnam3NwizSrdszn',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '13',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '50',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '42',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'zXGKpAfyIsLw3O9fNGQlEpoz7OZiTNTxh7rauFyCrnw1p7nTrb',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '49',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '27',
                    'Kapasitas_Mesin_id' => '28',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'G6SvNSWQOMEkgJWHLhxTy4yNgDMGIdDgLHrC9BQO7xxax1CppL',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '1',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '29',
                    'Jenis_BBM_id' => '34',
                    'Harga_Sewa_id' => '42',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'RzwIWABDL8XTUSgK08dRdgJDscZ62FsVtDhqAB3MbHrvhqUJqy',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '10',
                    'Tahun_Produksi_id' => '16',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '50',
                    'Jenis_BBM_id' => '34',
                    'Harga_Sewa_id' => '41',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'RjP3a9Row15vHkgjft2JXh0SWdLw3fXmkBEdJhPU3nXHFvgKwD',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '1',
                    'Tahun_Produksi_id' => '14',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '29',
                    'Jenis_BBM_id' => '35',
                    'Harga_Sewa_id' => '43',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => '3KfTBfotZV4gW3ThfcOPglDRXcNkP682s6raaIIlPWxEKRXRzA',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '10',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '27',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '39',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'OPmHU06lztt9NZTuG1q5QR623mBUoMFve7WHkIbdbzxgeSnfXL',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '13',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '50',
                    'Jenis_BBM_id' => '34',
                    'Harga_Sewa_id' => '42',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => '5wWK0gKBgE7IoCArSJPgkCB8tJZzdfuBqDHxRloXegseRdMKm4',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '46',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '27',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '41',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'LxlZbbPGWdKubxNGgEXd4nFvfPlY6whZy5RMEJzVvULBZjrlnG',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '46',
                    'Tahun_Produksi_id' => '13',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '27',
                    'Kapasitas_Mesin_id' => '29',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '42',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'K0rZztWAMpb498yixQU8blM53D3LVcV1Z4GiXbhFMa8THmSz2E',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '48',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '28',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '41',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => '8qJWPh7ITnSS6z5ui0r5UjHujbUWRE2ySUAkxUTU8RuHLr2mR8',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '6',
                    'Tahun_Produksi_id' => '11',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '29',
                    'Jenis_BBM_id' => '33',
                    'Harga_Sewa_id' => '43',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'ZLgdaVmegGT1XmsTp8X0e2InI8nOnxda8kjWKJjQPd6HlsAuD0',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '27',
                    'Kapasitas_Mesin_id' => '28',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '42',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'uTm47AHULkqJJSZCWHdhfkmZpzAmRE9dZScXnK0W4SLeRqTewY',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '1',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '32',
                    'Jenis_BBM_id' => '35',
                    'Harga_Sewa_id' => '41',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'Y7dxl3wE253ZliOuevlFddiVMhl8yknMRFI67s7BlXRtvIDa1E',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '48',
                    'Tahun_Produksi_id' => '14',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '31',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '41',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'lKhHd73oDILa5h9rJ55gKHKVyf6aSX0Czp236b5AFgpXW6Z2RS',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '46',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '29',
                    'Jenis_BBM_id' => '35',
                    'Harga_Sewa_id' => '39',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'tXzsThBzZbsIPqckmgUM659RJXcM82j9u7g9ZeFc5MAKwNZQHA',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '8',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '42',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'PG7XuTXl3e5adBplrRIAnm6QgAl47ULGZfWIQPR3kLk16pZdx6',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '1',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '28',
                    'Jenis_BBM_id' => '33',
                    'Harga_Sewa_id' => '43',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'xoq9jG7JzX7T1z4P9RWRq3Um5RsHHJfg5bjMIv8c5vON4QrIOW',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '6',
                    'Tahun_Produksi_id' => '11',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '27',
                    'Kapasitas_Mesin_id' => '29',
                    'Jenis_BBM_id' => '34',
                    'Harga_Sewa_id' => '38',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'g5VIflnXuf7mcqJZg63FIdmy5kTxAncDpGG5hIvXWbRijTjClh',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '6',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '28',
                    'Jenis_BBM_id' => '35',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => '7E9Q8r0iZwmJb27kHyu5kYO80sn78YpVtsuzyyhfyTuJkTdrXb',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '11',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '32',
                    'Jenis_BBM_id' => '33',
                    'Harga_Sewa_id' => '39',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => '4YYeX6oa9WGZ5Ozc0x82y2I8MF2V3R0uWvuW91FJFPxJ8fZLwb',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '27',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '34',
                    'Harga_Sewa_id' => '43',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'tWFybGTZvRj6V64KxF80sOFGcvVKtfBZC6Ynuu4FMjFFWOU7co',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '45',
                    'Tahun_Produksi_id' => '13',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '42',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => '4BHuKbPavK7W01ciOdphO3NHvSbnZ8EMd86FSeWhAFuN9r2Z3J',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '3',
                    'Tahun_Produksi_id' => '16',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '41',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'fA3xpvoMVBLHARCgXwoBm5sxCmXi1jMm4yg5eKVtTW95l3d8I2',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '48',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '27',
                    'Kapasitas_Mesin_id' => '28',
                    'Jenis_BBM_id' => '35',
                    'Harga_Sewa_id' => '40',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'g5QNmMJgXSP3WXwTI3pvc1gb324oC0UWN3ftC7SAeX1WFmoQGJ',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '1',
                    'Tahun_Produksi_id' => '14',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '32',
                    'Jenis_BBM_id' => '34',
                    'Harga_Sewa_id' => '40',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'XROuyaiP2XxqmG5GOpYrtXqg4JF9CYzDeBwkNLRSHM42kBnKlf',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '14',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '41',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => '3pPwqsCp2TWHHHGa40OwcJRT54AQZrX9Q7tZwRl1ygcDaPttu0',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '1',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '27',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '38',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'JET7EjmcJ3XdwNcmDOgq3C0p0qTdiBcWU5QCLFPdes7u1MRcR0',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '46',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '31',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '42',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => '7eJAeBhgyL1tr2xDcmHCv69s9SusNsgH1JIPl3KosUWq6ZFzgQ',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '6',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '27',
                    'Kapasitas_Mesin_id' => '31',
                    'Jenis_BBM_id' => '34',
                    'Harga_Sewa_id' => '39',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'Yf2G2q0ufSprQhvSIkdYIOc48leApXtiUVTyFby7uR8z7upyZg',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '4',
                    'Tahun_Produksi_id' => '13',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '29',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '39',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'XU3C9uMMW5d0TpPLGslbguEI9OY2toxFUllqFbeL6xxIDe0C2c',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '4',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '31',
                    'Jenis_BBM_id' => '35',
                    'Harga_Sewa_id' => '40',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'nT2MxFoZqA5oXtIX0D1w7FJYljayL9YRkBNqO31u4yNffFB72F',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '34',
                    'Harga_Sewa_id' => '39',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'z0e6cczwBubxDSIiu7Rk99BwY1xG8m8ZknwtpaYbx1UUMUL5M4',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '4',
                    'Tahun_Produksi_id' => '16',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '27',
                    'Kapasitas_Mesin_id' => '29',
                    'Jenis_BBM_id' => '34',
                    'Harga_Sewa_id' => '40',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'SiqTog1hEsAz2UOmn64hdy0bYx2ccNM7HqCdHyQYhIycTZ3Gza',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '47',
                    'Tahun_Produksi_id' => '14',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '28',
                    'Jenis_BBM_id' => '35',
                    'Harga_Sewa_id' => '42',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'LbACy0Me0deJOMB0VG48ZEAyh1znn8pDE6SIF7G661gbQmZlBL',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '46',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '50',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '42',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => '3cd4IDpNNM99foPQT5orF8KK5oUPObu3OXpTAYWVBwL2t8adUT',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '4',
                    'Tahun_Produksi_id' => '13',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '32',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'tkyeiXhIuCLjt0GR5mQAoFE8z1SjTwGAHKxHOVP0JV03TM8NKQ',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '4',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '33',
                    'Harga_Sewa_id' => '42',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'kJgl0anwhkzvbcPqPSeLuIMw3hKJKAA6vuSLmvdYoW6UN0ZuRc',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '10',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '27',
                    'Kapasitas_Mesin_id' => '28',
                    'Jenis_BBM_id' => '34',
                    'Harga_Sewa_id' => '45',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'XlQSgcczYFdS3kwIKepun3oR4d1lU95ilYDerv5pFFKODkrJaV',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '35',
                    'Harga_Sewa_id' => '40',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'wfk1Grd88Le7EQDnqct1qoJ4njJ7McU1jCDCK1guR41ukcjcE5',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '3',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '31',
                    'Jenis_BBM_id' => '35',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'jUTqxTf1W6sFHQZXZX65VGOXHU4SdtyIfKHdCTyEF7aAmAlint',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '49',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '50',
                    'Jenis_BBM_id' => '35',
                    'Harga_Sewa_id' => '45',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'SmVrwboGwdgwvrRhfqycdJmjI0P8kDSxkwpvhRume4GZQA0xtu',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '10',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '50',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '38',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => '0Vsb8ihG0Dr4jOf0P2YgPFKaFn9xYedTxupR2EmCa1i5BM91CC',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '49',
                    'Tahun_Produksi_id' => '11',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '28',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '41',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'G9o9dwcqT1DcvXsrpFjFa7HdhpQ4QsWAaC8DXvgpbrOOrUlxAD',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '1',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '28',
                    'Jenis_BBM_id' => '34',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'ROHydBEmJnAPMIoJrhc3olZIb9YakcfEmQVJ7UXMi8p9IrZ9n0',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '50',
                    'Jenis_BBM_id' => '33',
                    'Harga_Sewa_id' => '38',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'TClloxvhD6C1HyDZz4VOh1vSRm1NuBmGv7zxbpxA8FN3aybji8',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '3',
                    'Tahun_Produksi_id' => '16',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '35',
                    'Harga_Sewa_id' => '42',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'A7UqNsklXvCfCNmkbJSf02PcMMeT2yz1cUx1piSkb0R3ND2mHE',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '31',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '45',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'bCaLqXeTjHTBNC4HTXYOWqUvq6GqXmgCwKg8h3afh9t9t5NigF',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '10',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '28',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '43',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'gFiWBdLpKtADFP4YBrNSqTVjucewWF5SkKggQV3p68up4sjN8B',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '45',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '27',
                    'Kapasitas_Mesin_id' => '29',
                    'Jenis_BBM_id' => '34',
                    'Harga_Sewa_id' => '38',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'sWP40IlFpK0ac3JXnyTs6GqV6aauhGezrd56eH4XLl8HC8CDsJ',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '48',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '27',
                    'Kapasitas_Mesin_id' => '32',
                    'Jenis_BBM_id' => '35',
                    'Harga_Sewa_id' => '45',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'SBDwxkXbQt3oZA0qsT5mveFfSRrGHzaBVUliHzpFwDrLz510DM',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '13',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '27',
                    'Kapasitas_Mesin_id' => '31',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'Dzjc136r8BakNOuBDjdM1c02248wKFPJJQV2puPm6IqTcSSA7H',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '11',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '28',
                    'Jenis_BBM_id' => '33',
                    'Harga_Sewa_id' => '40',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'cR6PyPoLt42pGAUDhmDCmOcu2EWByFJ4fZc2cWkdPM2cWUGOn1',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '48',
                    'Tahun_Produksi_id' => '16',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '28',
                    'Jenis_BBM_id' => '35',
                    'Harga_Sewa_id' => '41',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'jB62sepN5PGPBNvfycdUSdvbWowHBcewHXc2zpLwlLk2z5n6kA',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '49',
                    'Tahun_Produksi_id' => '16',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '28',
                    'Jenis_BBM_id' => '35',
                    'Harga_Sewa_id' => '43',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'JvDFw7nQjOoZ0aClVPwpDNnZpWMYtnLQRLpi6MfzwEKHJWRGWG',
                    'user_id' => '4',
                    'shop_id' => '3',
                    'merk_id' => '48',
                    'Tahun_Produksi_id' => '11',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '45',
                    'stok' => 'standby',
                    ]);
            //
            // RESTU OTO CAR
                car::create([
                    'slug' => '2ORP85aMZl7sYasTKbKHLRGi0HM2Dlgmoi2MP98mjRF18q8hfK',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '45',
                    'Tahun_Produksi_id' => '14',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '29',
                    'Jenis_BBM_id' => '33',
                    'Harga_Sewa_id' => '39',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'wYKzWVcXyUK1kGLZAftu3XPxcuL3rAn4gRnocYzD9zY4WnGYWk',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '6',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '27',
                    'Kapasitas_Mesin_id' => '50',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '40',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'ggLdQl3qdG16ngoTGy5gWXa3AbQoSg6rTR1AfVvkRKQjnCSruo',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '49',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '28',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '39',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'VcTTGl4EuGo6ZTCYwUdkJT85JXoKqaKkV9yR09mXubb7zBpFRH',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '1',
                    'Tahun_Produksi_id' => '11',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '27',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '33',
                    'Harga_Sewa_id' => '38',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'VWsF4ZltnOxV7r42R8zU3xIeu0kczoaU2GKXwC9TfYgiYXzCEj',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '11',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '50',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '41',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'BLmjSutFtGoeLAwhQstVDYBY1iQfLoKx62BYbQqc9i7Xxg13HU',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '3',
                    'Tahun_Produksi_id' => '16',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '32',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '40',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'JTX6a5wcnxPIwHvsP0ncz7luNT80OPGalc355EZ7OEZKDrLmZr',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '46',
                    'Tahun_Produksi_id' => '13',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '32',
                    'Jenis_BBM_id' => '34',
                    'Harga_Sewa_id' => '42',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'fcYanrTuHY5ohrxrSZxKH3zUtlcI8x7yLZD94LILO52NRPasIa',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '3',
                    'Tahun_Produksi_id' => '14',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '27',
                    'Kapasitas_Mesin_id' => '32',
                    'Jenis_BBM_id' => '33',
                    'Harga_Sewa_id' => '39',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'dzgLQHNw3cFSfdAVWmqUDjXnTriETjm3y76p7ZpSpLV28dkHnb',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '48',
                    'Tahun_Produksi_id' => '11',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '50',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '42',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'dycMsZVZhayBItUUIArZ0KQhTGU4sKnT75ecDI1IxbG1DJfzkB',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '47',
                    'Tahun_Produksi_id' => '13',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '31',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '42',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'X7dhRYujaDHcek3NFJXyF0JFZCq6IvtzkUorYpjtFCwMDzwQsx',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '34',
                    'Harga_Sewa_id' => '45',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'goARHunTtvDbGYfniMjeLBgHsKE2hX1B6gbIDW54UpxQ47sceN',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '10',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '27',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '45',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'yLEYfR2p1Ttv3JgJqzGUePWKPJJoG7vPAEpWlK7ZUcLdzFIjdt',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '4',
                    'Tahun_Produksi_id' => '11',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '50',
                    'Jenis_BBM_id' => '34',
                    'Harga_Sewa_id' => '38',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => '2P7nOkzfNwhxAOYvdEIY8egbjLEVu91o6ZDQaYpoei6J8FWNEo',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '4',
                    'Tahun_Produksi_id' => '16',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '29',
                    'Jenis_BBM_id' => '35',
                    'Harga_Sewa_id' => '45',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'd90WZSrIIpq2Msqr2LlmNRlA5UNom2PBiJ45ozF4lepDpvmdon',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '48',
                    'Tahun_Produksi_id' => '14',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '28',
                    'Jenis_BBM_id' => '33',
                    'Harga_Sewa_id' => '39',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'rDMygCYwehcJBNKzPaeKprLygBvFAvidVvdkt2tDKs7MCzqemE',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '8',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '40',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => '51IkucRMzIDDWdA1MftBxOrqWQyb3Qp1UqMvYxCApMhJ2Wgzr2',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '32',
                    'Jenis_BBM_id' => '34',
                    'Harga_Sewa_id' => '45',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'HJKEsefMDpnSjrV4pRp5KiTFOhMQU9Dldngw2TrYPkhp3SeWjN',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '10',
                    'Tahun_Produksi_id' => '13',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '27',
                    'Kapasitas_Mesin_id' => '29',
                    'Jenis_BBM_id' => '33',
                    'Harga_Sewa_id' => '39',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'LXf4gPxhSkOpyAimFbocX8EmSmXwkuz7zlZNODe80Q8bsUnRxX',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '2',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '32',
                    'Jenis_BBM_id' => '33',
                    'Harga_Sewa_id' => '39',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'lT6doPAwubmINnWJJtgJvR6XpGq4HvprzZP6gxdioNDMTD33Q9',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '11',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '29',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '40',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'Bh2y4sU2HrdrZxmYgcbiEv6aE9dv8J7Kh2nnpjTmJrIMixr5zs',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '1',
                    'Tahun_Produksi_id' => '13',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '28',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '40',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => '95Rj8dTXe5Fca3suXmkbIhbZGvY3VD6y7Yhw886y5UOcHwXgsw',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '14',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '50',
                    'Jenis_BBM_id' => '35',
                    'Harga_Sewa_id' => '41',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'RRyep8PprW3aAToFf01jq0iL4d58DuzcbOgIH9UgcadKyRpgTF',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '29',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '40',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'zCKfgQ26C4aBll5N7P5pSPBSZud9rdx56x7jgjLBRgXUqhNWaO',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '1',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '27',
                    'Kapasitas_Mesin_id' => '29',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '39',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'OPh6srTHJZ1BND25rItnCDNd99KPACAHczvFeYOrsMi9b0gqvV',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '8',
                    'Tahun_Produksi_id' => '11',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '31',
                    'Jenis_BBM_id' => '34',
                    'Harga_Sewa_id' => '40',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'aZ7KqWvpmNVQyTMKvihOjMi5I9D1BT2FNPQJCpxxeuRJy5eTZT',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '5',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '27',
                    'Kapasitas_Mesin_id' => '50',
                    'Jenis_BBM_id' => '33',
                    'Harga_Sewa_id' => '38',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'o4U3tv85NEPyElFUlJjV9PSqNVTb7h6ZpC0W9CytZP9rcekUms',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '47',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '28',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '45',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'uK8gRAGFCALCSFd1e5oVxELVJJVk0VRtez5L51fYJcDqODLwpf',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '4',
                    'Tahun_Produksi_id' => '11',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '31',
                    'Jenis_BBM_id' => '35',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'n1Y1gsWC8Y3qs7o3LRDc6R1eY77zhlE1mlb2NtnrDKVMGh7vXg',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '13',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '27',
                    'Kapasitas_Mesin_id' => '31',
                    'Jenis_BBM_id' => '33',
                    'Harga_Sewa_id' => '41',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'eirZX6ESb1mQpnfUxinZMSqQvaLtZSxTi2ZWn5y8yfjTyMlgse',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '3',
                    'Tahun_Produksi_id' => '16',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '27',
                    'Kapasitas_Mesin_id' => '50',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '42',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'M0oJ8Dd4QrIRGp5UvdtSRiTi7YszaQf4jzB3qAsEgpVeWoYG6O',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '31',
                    'Jenis_BBM_id' => '33',
                    'Harga_Sewa_id' => '40',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'rB6pcNMMjFb5Lum95KCJR9EosRAmDHXI6iijmHRduOU3Tgf0mD',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '46',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '29',
                    'Jenis_BBM_id' => '33',
                    'Harga_Sewa_id' => '43',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => '2SPn8jiC6q6QjgFthrYPdeKoLSsC1UGDnrPvzKc7kNUSvqj4jP',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '1',
                    'Tahun_Produksi_id' => '14',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '27',
                    'Kapasitas_Mesin_id' => '31',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '41',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 't8ZtnBsStUmoj0NRexAGKJKxoge1KhMYqTEgQ17rQoEJ3ceZfo',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '11',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '40',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'SJviLLim5Dp1wwM7lEUphpJQ0uoXgUQbAvYeKsCKq1gHfz7RC8',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '4',
                    'Tahun_Produksi_id' => '14',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '50',
                    'Jenis_BBM_id' => '35',
                    'Harga_Sewa_id' => '41',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'ji0mUA6SXTMwd6YrgRBYs6bMChKXZblrfZxlO0XW4062DwLaXh',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '5',
                    'Tahun_Produksi_id' => '16',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '28',
                    'Jenis_BBM_id' => '33',
                    'Harga_Sewa_id' => '43',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'B200JSUBmAXPcDQKHpSfHJtRfJcWJcxhvfYorPcaL4YYIVV2qi',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '5',
                    'Tahun_Produksi_id' => '14',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '27',
                    'Kapasitas_Mesin_id' => '28',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'aL0Ha4YPjLyYpLVoaprdsm1ZOzPpuDKLx6fhQrXN4pzaJ7kgNr',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '1',
                    'Tahun_Produksi_id' => '16',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '27',
                    'Kapasitas_Mesin_id' => '32',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '45',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'qCBAoPrxoE5Hj8EJl04DbYUag2FzvBo6zqd9P3m6NLB06zAMPr',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '2',
                    'Tahun_Produksi_id' => '11',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '31',
                    'Jenis_BBM_id' => '34',
                    'Harga_Sewa_id' => '39',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'ho5C2q8kAn0t34URvjBpySOBZO20zFqasAwf9hkzyWxkoR7t4m',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '2',
                    'Tahun_Produksi_id' => '11',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '33',
                    'Harga_Sewa_id' => '42',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'lTMpJrDeKrBYbQKlylYpYbggACE4E3YhaW7LgZOa8rMJhwlvsF',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '8',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '28',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '45',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'yzEJWaDFXHER2auVeTPlBZ6sHlKVt5CK22OyZ785OUItLyf2q4',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '10',
                    'Tahun_Produksi_id' => '11',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '31',
                    'Jenis_BBM_id' => '35',
                    'Harga_Sewa_id' => '45',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'vSDiGGWc6dpT2eTAxGNRTSV3mOOYh0G1iMVAQsspnYWC7nTogf',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '4',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '29',
                    'Jenis_BBM_id' => '34',
                    'Harga_Sewa_id' => '45',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'ohyqLMNC3og7AP45ZVBabH5JdmonEYJNpaR1P6Lja8VqYHUqOB',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '29',
                    'Jenis_BBM_id' => '33',
                    'Harga_Sewa_id' => '42',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'w9QAVaQ3tJISuXUyDx1sb3XB7DEhnxLCn4Cnakl0ilgFfKG7wi',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '3',
                    'Tahun_Produksi_id' => '13',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '27',
                    'Kapasitas_Mesin_id' => '32',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '39',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => '2ZglleOYfBmt5tJBMswelLfQbaMEoatGH0cO8Gzuidg4Y3kj8l',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '10',
                    'Tahun_Produksi_id' => '13',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '27',
                    'Kapasitas_Mesin_id' => '50',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '40',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'mfy5xp60OFtqVYArrXvPWCk5DwhquqCcbk3XsyCfq0m5R5sbSC',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '3',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '32',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '39',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'IUhfx91vrDfgykHTJqvP8u06GhKoaBUhhf79AEoJedCcMckCXP',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '16',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '31',
                    'Jenis_BBM_id' => '35',
                    'Harga_Sewa_id' => '42',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => '5OVsk0oNrWmKR5bTiSRaaQ8pm9W69cgthh6cOuGCmEqoxiaGu5',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '46',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '32',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '45',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'khEQtW5F8GmUVNDTPyEtVWi5YVxE5x9vVM9r1A0NtCieYUU6H1',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '3',
                    'Tahun_Produksi_id' => '11',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '50',
                    'Jenis_BBM_id' => '33',
                    'Harga_Sewa_id' => '43',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'dMGsNjP4HnruptLD1UtnCfL2iBofUCFw7qqiaivIeeWZjlgvxE',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '6',
                    'Tahun_Produksi_id' => '14',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '31',
                    'Jenis_BBM_id' => '35',
                    'Harga_Sewa_id' => '42',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'ov1NXjEANkA3VovxVyk3ItxstAfOCtHuX62x7tYAR1McyPcQGV',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '49',
                    'Tahun_Produksi_id' => '11',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '50',
                    'Jenis_BBM_id' => '35',
                    'Harga_Sewa_id' => '41',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'KeFOJE8e7kFtQTsusnO9WcKkJkBmlK7gn6bBZGNGG6PjPuXh1y',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '4',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '32',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '45',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'e4A1VlfsaLfYkXZkKK3jkFgoyDjbvCsq1agTp3KLuHlOvWGXTO',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '6',
                    'Tahun_Produksi_id' => '13',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'INXVuG6tJSGge4PoPXd73o3k6QjdQaGwXSGdbT0kg69mFirXde',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '5',
                    'Tahun_Produksi_id' => '13',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '27',
                    'Kapasitas_Mesin_id' => '32',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '42',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'W7o7BXEE2Ahw9EGXId4K7Bs4gV6kAk9B1nA7i3mN1D4NFERfki',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '10',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '43',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'uedHMDtIRHmM7nqcKpSeu7xVCrq2t4bUYnWK5mYskatJb03Zqu',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '46',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '45',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'wvQlG1RLxFIRN9bHE5Tz21iAGKim7940358uZRhGx6dXvQzZSR',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '14',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '28',
                    'Jenis_BBM_id' => '35',
                    'Harga_Sewa_id' => '45',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'oy0LEj5KHpfy6AFpWTzBvichRLTXTFa1hZLa3iS7KnXOosliqQ',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '16',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '31',
                    'Jenis_BBM_id' => '33',
                    'Harga_Sewa_id' => '45',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'JoyJxZ9CONxJESbCBpOR9fWAoPkKo1lmHbz5Jv8STycyCcIvL5',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '4',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '27',
                    'Kapasitas_Mesin_id' => '31',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '41',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'nQH8G2Jur7FhNUVBF7JGbYkdzdGvex993GHmnffZhWM3UGx1Of',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '3',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '50',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '39',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'AocqcUpKAAtQ2nHe8PcFJ3znEJkRixsLeUsOqiTUbmk2W5Fqf7',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '5',
                    'Tahun_Produksi_id' => '11',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '50',
                    'Jenis_BBM_id' => '33',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'iBuL6gYMowI6nhuSw9uaVsidLkY6xofWe6I5pTpuCEKHWV8IKa',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '4',
                    'Tahun_Produksi_id' => '16',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '33',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'bgPm2M4HL4DmlAt2ndoLZePgiRKJgJijelddqzqUhibMqvQb91',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '46',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '31',
                    'Jenis_BBM_id' => '33',
                    'Harga_Sewa_id' => '42',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => '5yVKEWimRjNHfrfD9Yxf3gZ5bTZFSEayWkyNz8pvpOBcOvT3Ni',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '45',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '50',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '41',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'QY9BJ6l0JLc0OSKbXSppOHDwZQt7Oa6UmKTcBcG6e7QMJT2P2n',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '1',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '32',
                    'Jenis_BBM_id' => '33',
                    'Harga_Sewa_id' => '40',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'hNCSd1hdHp9ySRxqABSQq7YSMViBVNNzVvnVmkH0HSDDTzDJCS',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '8',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '31',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '39',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'hd6TaMUI4pN7ZjDBsp3fT9ngY6Vd7ROoKrY5d7rp0kqhBUzN2X',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '1',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '31',
                    'Jenis_BBM_id' => '33',
                    'Harga_Sewa_id' => '38',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'Ki4YWQ1WcZotnLJDHr1tJPaaaNWfNkwBb61JwfXnzfMdLhTmJ3',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '46',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '28',
                    'Jenis_BBM_id' => '34',
                    'Harga_Sewa_id' => '43',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'VY6xOPYtWKPhU8ROnXW7MZZ8gGWhHgzpVwwShT6T9Zlr5RRizK',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '13',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '29',
                    'Jenis_BBM_id' => '35',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'HqbQ3XJfbJvhSx4KlqXPqRfNvEbfsxOweMLt2McxqhgS5ITrUR',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '3',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '35',
                    'Harga_Sewa_id' => '40',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'TMPgfaJOL4AHVoai39igJVb7pZNogxPQRNfsj7ldn3SZ98aR4f',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '6',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '27',
                    'Kapasitas_Mesin_id' => '32',
                    'Jenis_BBM_id' => '35',
                    'Harga_Sewa_id' => '41',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'ogcLx3wDlVCQGnqO8PeSxy4JeFE27GS4xxYjImyjnHPnghMIvI',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '8',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '31',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '43',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => '6oR6dbhTLx5NrsXIAmPX3Cqr3ekGuRVwFBnI6Hwx4Q390KzGdE',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '7',
                    'Tahun_Produksi_id' => '16',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '29',
                    'Jenis_BBM_id' => '33',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'wYxhxzcqzFI7DdmriR8Ia3fHMjjmiyVa85RQBDd0zqsPJKiFTd',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '32',
                    'Jenis_BBM_id' => '35',
                    'Harga_Sewa_id' => '39',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => '59pryiDNc2zXoh9kJGSzjNz65RLV4o2MFMjC4POvsSyDf5gYP1',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '8',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '28',
                    'Jenis_BBM_id' => '35',
                    'Harga_Sewa_id' => '42',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'zIaWgifnXmED0HqwT2V5vqIycCWuEN9e01SKflaQOpkFcnQDqg',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '1',
                    'Tahun_Produksi_id' => '14',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '50',
                    'Jenis_BBM_id' => '34',
                    'Harga_Sewa_id' => '39',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'drNUNYvk8zKEiSSeX6ORn4EtqYcZB5tf3eJYbH6h6vABguhhJF',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '10',
                    'Tahun_Produksi_id' => '14',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '38',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'TnmDoReaewxYDNpyVNMIYYNn05n9EMHwkhOGTBXENEE05xt7rE',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '49',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '50',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '39',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'IoN7GnCTfBpsUnnwKGMShlzPPQ2ZGJDbRPYQSvuN7dXSfbpcEu',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '2',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '29',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '43',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => '57Dk0cJg8arUHZbTPNGXnkNBPTjin5DNF6Xki9rN4Cu8qCIDPy',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '45',
                    'Tahun_Produksi_id' => '16',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '31',
                    'Jenis_BBM_id' => '34',
                    'Harga_Sewa_id' => '39',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'p0JsGTNfCOBQzXhGBg3D3ffbN72QI0CJS88u3gcRPrO7jQsNkP',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '45',
                    'Tahun_Produksi_id' => '11',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '32',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '43',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'V0WFM7CSPQNsX6iLUbNeZmTghfkPSnLUoSz7YKmEf6sEEXkVTg',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '47',
                    'Tahun_Produksi_id' => '16',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '28',
                    'Jenis_BBM_id' => '34',
                    'Harga_Sewa_id' => '38',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'FO4yaOD4UxnOQ1COaJ3eX2BKU8I4Zo66zSYH9XS9XbLCSIstjG',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '9',
                    'Tahun_Produksi_id' => '11',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '27',
                    'Kapasitas_Mesin_id' => '50',
                    'Jenis_BBM_id' => '35',
                    'Harga_Sewa_id' => '38',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'VPwiHY6HBzwMDasjOEIaYwAMMDDSFnJ8czrkbYsDyDYcpBLdxH',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '3',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '27',
                    'Kapasitas_Mesin_id' => '28',
                    'Jenis_BBM_id' => '35',
                    'Harga_Sewa_id' => '43',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'sCpdU1nz2Sn5QRYdUzOGc8f2Cvn7GkoIihyuQ4czdKVnaFONCp',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '6',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '25',
                    'Kapasitas_Mesin_id' => '31',
                    'Jenis_BBM_id' => '33',
                    'Harga_Sewa_id' => '39',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'Sqn9vR6Ef6k7c3hVKcS5rEd2UbhUFABEZBwHqNX40rLY2QYmT3',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '47',
                    'Tahun_Produksi_id' => '16',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '31',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '38',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'Z8DAk5r6qxZHQby17mXWsVeUpXCcqbH3LcsmPjzc4QII9AktPJ',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '46',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '28',
                    'Jenis_BBM_id' => '34',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => '1gbUOY8lr2lUcmGEEdrM2umcPZl8G37zowYX71rGkMFJ7wSAZt',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '6',
                    'Tahun_Produksi_id' => '14',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '29',
                    'Jenis_BBM_id' => '34',
                    'Harga_Sewa_id' => '45',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'GqbXZ9yeZJI5dMVktbsS1M91gujjbPIZCEAT4AZprUNuzO5cwb',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '4',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '35',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'UcbwMxmfykrXtIMKtvCY6tE8qVFVGF9k0UzX1z8tYhMABLxCxy',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '6',
                    'Tahun_Produksi_id' => '16',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '28',
                    'Jenis_BBM_id' => '35',
                    'Harga_Sewa_id' => '43',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => '4NOgXniudqP1GKTrUfGz6afigVhDc6wvTBf2VZfQLbz3Aya7Rc',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '46',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '31',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '38',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'uAtTjZhNgg0Myxyl48HitjgsO7T1bQaXAML6DQfMcTNdzvjONI',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '5',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '50',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'EIroYCOnZ1R1LHCSw1rAmXSq877umvwm03twal2moW6f2XkH0G',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '4',
                    'Tahun_Produksi_id' => '15',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '29',
                    'Jenis_BBM_id' => '34',
                    'Harga_Sewa_id' => '38',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'xveABuBWT9nrmq4XzGrPLt5gPIue1YrRBGFuQKQB16FKkTVwsh',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '49',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '23',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '31',
                    'Jenis_BBM_id' => '35',
                    'Harga_Sewa_id' => '45',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'NgXmFL1avsqn03JEacU1l2vhbYn7e5Tpal6gN87dYL8IRnxlok',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '45',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '30',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '42',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'xgmDJnKMwJ6aIKSrqyc8BRmeMjdyCMGmSnF8pyefItttn4y7R1',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '48',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '26',
                    'Kapasitas_Mesin_id' => '28',
                    'Jenis_BBM_id' => '36',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'YsjTy0SAgqoVF9LGV6Z6sXefAzwgOPdgWRP2kWktvcCsH2DftK',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '5',
                    'Tahun_Produksi_id' => '12',
                    'Kondisi_Fisik_id' => '18',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '32',
                    'Jenis_BBM_id' => '37',
                    'Harga_Sewa_id' => '44',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'Y5a2r24yuf0uNg1LZcz0BvodiPDyjVYl3pKCpw1S9JuCtiJup1',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '3',
                    'Tahun_Produksi_id' => '17',
                    'Kondisi_Fisik_id' => '20',
                    'Kondisi_Mesin_id' => '21',
                    'Muatan_Penumpang_id' => '24',
                    'Kapasitas_Mesin_id' => '32',
                    'Jenis_BBM_id' => '35',
                    'Harga_Sewa_id' => '41',
                    'stok' => 'standby',
                    ]);
                car::create([
                    'slug' => 'z0mFXB3MtbqU2WWS45i3xl9o7QDQiqSrNfQBUGoTrZhG5yJsRY',
                    'user_id' => '5',
                    'shop_id' => '4',
                    'merk_id' => '4',
                    'Tahun_Produksi_id' => '16',
                    'Kondisi_Fisik_id' => '19',
                    'Kondisi_Mesin_id' => '22',
                    'Muatan_Penumpang_id' => '27',
                    'Kapasitas_Mesin_id' => '28',
                    'Jenis_BBM_id' => '33',
                    'Harga_Sewa_id' => '45',
                    'stok' => 'standby',
                    ]);
            //
            // Ben Seupakat
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 49,
                    "Tahun_Produksi_id" => 17,
                    "Kondisi_Fisik_id" => 20,
                    "Kondisi_Mesin_id" => 21,
                    "Muatan_Penumpang_id" => 24,
                    "Kapasitas_Mesin_id" => 30,
                    "Jenis_BBM_id" => 35,
                    "Harga_Sewa_id" => 41
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 9,
                    "Tahun_Produksi_id" => 13,
                    "Kondisi_Fisik_id" => 19,
                    "Kondisi_Mesin_id" => 22,
                    "Muatan_Penumpang_id" => 24,
                    "Kapasitas_Mesin_id" => 50,
                    "Jenis_BBM_id" => 36,
                    "Harga_Sewa_id" => 38
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 5,
                    "Tahun_Produksi_id" => 15,
                    "Kondisi_Fisik_id" => 18,
                    "Kondisi_Mesin_id" => 22,
                    "Muatan_Penumpang_id" => 26,
                    "Kapasitas_Mesin_id" => 29,
                    "Jenis_BBM_id" => 33,
                    "Harga_Sewa_id" => 44
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 7,
                    "Tahun_Produksi_id" => 13,
                    "Kondisi_Fisik_id" => 18,
                    "Kondisi_Mesin_id" => 22,
                    "Muatan_Penumpang_id" => 26,
                    "Kapasitas_Mesin_id" => 30,
                    "Jenis_BBM_id" => 37,
                    "Harga_Sewa_id" => 45
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 48,
                    "Tahun_Produksi_id" => 14,
                    "Kondisi_Fisik_id" => 20,
                    "Kondisi_Mesin_id" => 21,
                    "Muatan_Penumpang_id" => 25,
                    "Kapasitas_Mesin_id" => 31,
                    "Jenis_BBM_id" => 37,
                    "Harga_Sewa_id" => 39
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 48,
                    "Tahun_Produksi_id" => 11,
                    "Kondisi_Fisik_id" => 19,
                    "Kondisi_Mesin_id" => 22,
                    "Muatan_Penumpang_id" => 25,
                    "Kapasitas_Mesin_id" => 28,
                    "Jenis_BBM_id" => 34,
                    "Harga_Sewa_id" => 45
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 1,
                    "Tahun_Produksi_id" => 12,
                    "Kondisi_Fisik_id" => 19,
                    "Kondisi_Mesin_id" => 23,
                    "Muatan_Penumpang_id" => 25,
                    "Kapasitas_Mesin_id" => 30,
                    "Jenis_BBM_id" => 33,
                    "Harga_Sewa_id" => 43
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 10,
                    "Tahun_Produksi_id" => 12,
                    "Kondisi_Fisik_id" => 19,
                    "Kondisi_Mesin_id" => 22,
                    "Muatan_Penumpang_id" => 24,
                    "Kapasitas_Mesin_id" => 29,
                    "Jenis_BBM_id" => 36,
                    "Harga_Sewa_id" => 42
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 6,
                    "Tahun_Produksi_id" => 11,
                    "Kondisi_Fisik_id" => 19,
                    "Kondisi_Mesin_id" => 23,
                    "Muatan_Penumpang_id" => 26,
                    "Kapasitas_Mesin_id" => 31,
                    "Jenis_BBM_id" => 34,
                    "Harga_Sewa_id" => 43
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 48,
                    "Tahun_Produksi_id" => 16,
                    "Kondisi_Fisik_id" => 19,
                    "Kondisi_Mesin_id" => 22,
                    "Muatan_Penumpang_id" => 24,
                    "Kapasitas_Mesin_id" => 32,
                    "Jenis_BBM_id" => 34,
                    "Harga_Sewa_id" => 45
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 10,
                    "Tahun_Produksi_id" => 13,
                    "Kondisi_Fisik_id" => 18,
                    "Kondisi_Mesin_id" => 23,
                    "Muatan_Penumpang_id" => 25,
                    "Kapasitas_Mesin_id" => 29,
                    "Jenis_BBM_id" => 34,
                    "Harga_Sewa_id" => 39
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 45,
                    "Tahun_Produksi_id" => 11,
                    "Kondisi_Fisik_id" => 19,
                    "Kondisi_Mesin_id" => 23,
                    "Muatan_Penumpang_id" => 26,
                    "Kapasitas_Mesin_id" => 30,
                    "Jenis_BBM_id" => 35,
                    "Harga_Sewa_id" => 41
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 48,
                    "Tahun_Produksi_id" => 13,
                    "Kondisi_Fisik_id" => 18,
                    "Kondisi_Mesin_id" => 21,
                    "Muatan_Penumpang_id" => 25,
                    "Kapasitas_Mesin_id" => 31,
                    "Jenis_BBM_id" => 33,
                    "Harga_Sewa_id" => 44
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 3,
                    "Tahun_Produksi_id" => 15,
                    "Kondisi_Fisik_id" => 20,
                    "Kondisi_Mesin_id" => 21,
                    "Muatan_Penumpang_id" => 26,
                    "Kapasitas_Mesin_id" => 31,
                    "Jenis_BBM_id" => 37,
                    "Harga_Sewa_id" => 42
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 48,
                    "Tahun_Produksi_id" => 14,
                    "Kondisi_Fisik_id" => 19,
                    "Kondisi_Mesin_id" => 23,
                    "Muatan_Penumpang_id" => 24,
                    "Kapasitas_Mesin_id" => 31,
                    "Jenis_BBM_id" => 36,
                    "Harga_Sewa_id" => 43
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 1,
                    "Tahun_Produksi_id" => 17,
                    "Kondisi_Fisik_id" => 18,
                    "Kondisi_Mesin_id" => 21,
                    "Muatan_Penumpang_id" => 26,
                    "Kapasitas_Mesin_id" => 31,
                    "Jenis_BBM_id" => 34,
                    "Harga_Sewa_id" => 41
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 6,
                    "Tahun_Produksi_id" => 14,
                    "Kondisi_Fisik_id" => 18,
                    "Kondisi_Mesin_id" => 23,
                    "Muatan_Penumpang_id" => 24,
                    "Kapasitas_Mesin_id" => 32,
                    "Jenis_BBM_id" => 34,
                    "Harga_Sewa_id" => 44
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 7,
                    "Tahun_Produksi_id" => 16,
                    "Kondisi_Fisik_id" => 19,
                    "Kondisi_Mesin_id" => 21,
                    "Muatan_Penumpang_id" => 25,
                    "Kapasitas_Mesin_id" => 29,
                    "Jenis_BBM_id" => 36,
                    "Harga_Sewa_id" => 40
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 6,
                    "Tahun_Produksi_id" => 17,
                    "Kondisi_Fisik_id" => 18,
                    "Kondisi_Mesin_id" => 21,
                    "Muatan_Penumpang_id" => 27,
                    "Kapasitas_Mesin_id" => 50,
                    "Jenis_BBM_id" => 37,
                    "Harga_Sewa_id" => 43
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 1,
                    "Tahun_Produksi_id" => 14,
                    "Kondisi_Fisik_id" => 19,
                    "Kondisi_Mesin_id" => 23,
                    "Muatan_Penumpang_id" => 24,
                    "Kapasitas_Mesin_id" => 31,
                    "Jenis_BBM_id" => 33,
                    "Harga_Sewa_id" => 44
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 3,
                    "Tahun_Produksi_id" => 17,
                    "Kondisi_Fisik_id" => 19,
                    "Kondisi_Mesin_id" => 21,
                    "Muatan_Penumpang_id" => 25,
                    "Kapasitas_Mesin_id" => 30,
                    "Jenis_BBM_id" => 37,
                    "Harga_Sewa_id" => 42
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 5,
                    "Tahun_Produksi_id" => 13,
                    "Kondisi_Fisik_id" => 19,
                    "Kondisi_Mesin_id" => 21,
                    "Muatan_Penumpang_id" => 25,
                    "Kapasitas_Mesin_id" => 50,
                    "Jenis_BBM_id" => 36,
                    "Harga_Sewa_id" => 41
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 1,
                    "Tahun_Produksi_id" => 16,
                    "Kondisi_Fisik_id" => 18,
                    "Kondisi_Mesin_id" => 23,
                    "Muatan_Penumpang_id" => 25,
                    "Kapasitas_Mesin_id" => 32,
                    "Jenis_BBM_id" => 36,
                    "Harga_Sewa_id" => 38
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 46,
                    "Tahun_Produksi_id" => 13,
                    "Kondisi_Fisik_id" => 20,
                    "Kondisi_Mesin_id" => 23,
                    "Muatan_Penumpang_id" => 27,
                    "Kapasitas_Mesin_id" => 50,
                    "Jenis_BBM_id" => 37,
                    "Harga_Sewa_id" => 44
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 45,
                    "Tahun_Produksi_id" => 13,
                    "Kondisi_Fisik_id" => 19,
                    "Kondisi_Mesin_id" => 23,
                    "Muatan_Penumpang_id" => 24,
                    "Kapasitas_Mesin_id" => 28,
                    "Jenis_BBM_id" => 37,
                    "Harga_Sewa_id" => 44
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 3,
                    "Tahun_Produksi_id" => 17,
                    "Kondisi_Fisik_id" => 20,
                    "Kondisi_Mesin_id" => 22,
                    "Muatan_Penumpang_id" => 25,
                    "Kapasitas_Mesin_id" => 28,
                    "Jenis_BBM_id" => 36,
                    "Harga_Sewa_id" => 44
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 4,
                    "Tahun_Produksi_id" => 14,
                    "Kondisi_Fisik_id" => 19,
                    "Kondisi_Mesin_id" => 22,
                    "Muatan_Penumpang_id" => 26,
                    "Kapasitas_Mesin_id" => 32,
                    "Jenis_BBM_id" => 37,
                    "Harga_Sewa_id" => 44
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 49,
                    "Tahun_Produksi_id" => 13,
                    "Kondisi_Fisik_id" => 20,
                    "Kondisi_Mesin_id" => 21,
                    "Muatan_Penumpang_id" => 26,
                    "Kapasitas_Mesin_id" => 31,
                    "Jenis_BBM_id" => 36,
                    "Harga_Sewa_id" => 38
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 9,
                    "Tahun_Produksi_id" => 17,
                    "Kondisi_Fisik_id" => 19,
                    "Kondisi_Mesin_id" => 21,
                    "Muatan_Penumpang_id" => 26,
                    "Kapasitas_Mesin_id" => 29,
                    "Jenis_BBM_id" => 34,
                    "Harga_Sewa_id" => 41
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 48,
                    "Tahun_Produksi_id" => 17,
                    "Kondisi_Fisik_id" => 20,
                    "Kondisi_Mesin_id" => 21,
                    "Muatan_Penumpang_id" => 25,
                    "Kapasitas_Mesin_id" => 31,
                    "Jenis_BBM_id" => 37,
                    "Harga_Sewa_id" => 39
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 46,
                    "Tahun_Produksi_id" => 11,
                    "Kondisi_Fisik_id" => 18,
                    "Kondisi_Mesin_id" => 22,
                    "Muatan_Penumpang_id" => 26,
                    "Kapasitas_Mesin_id" => 29,
                    "Jenis_BBM_id" => 36,
                    "Harga_Sewa_id" => 40
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 10,
                    "Tahun_Produksi_id" => 13,
                    "Kondisi_Fisik_id" => 20,
                    "Kondisi_Mesin_id" => 23,
                    "Muatan_Penumpang_id" => 26,
                    "Kapasitas_Mesin_id" => 50,
                    "Jenis_BBM_id" => 35,
                    "Harga_Sewa_id" => 43
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 48,
                    "Tahun_Produksi_id" => 11,
                    "Kondisi_Fisik_id" => 20,
                    "Kondisi_Mesin_id" => 21,
                    "Muatan_Penumpang_id" => 27,
                    "Kapasitas_Mesin_id" => 31,
                    "Jenis_BBM_id" => 37,
                    "Harga_Sewa_id" => 38
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 47,
                    "Tahun_Produksi_id" => 15,
                    "Kondisi_Fisik_id" => 18,
                    "Kondisi_Mesin_id" => 21,
                    "Muatan_Penumpang_id" => 27,
                    "Kapasitas_Mesin_id" => 32,
                    "Jenis_BBM_id" => 33,
                    "Harga_Sewa_id" => 44
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 7,
                    "Tahun_Produksi_id" => 13,
                    "Kondisi_Fisik_id" => 20,
                    "Kondisi_Mesin_id" => 23,
                    "Muatan_Penumpang_id" => 25,
                    "Kapasitas_Mesin_id" => 31,
                    "Jenis_BBM_id" => 34,
                    "Harga_Sewa_id" => 40
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 9,
                    "Tahun_Produksi_id" => 14,
                    "Kondisi_Fisik_id" => 20,
                    "Kondisi_Mesin_id" => 21,
                    "Muatan_Penumpang_id" => 25,
                    "Kapasitas_Mesin_id" => 29,
                    "Jenis_BBM_id" => 37,
                    "Harga_Sewa_id" => 39
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 6,
                    "Tahun_Produksi_id" => 14,
                    "Kondisi_Fisik_id" => 19,
                    "Kondisi_Mesin_id" => 23,
                    "Muatan_Penumpang_id" => 24,
                    "Kapasitas_Mesin_id" => 29,
                    "Jenis_BBM_id" => 37,
                    "Harga_Sewa_id" => 41
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 3,
                    "Tahun_Produksi_id" => 16,
                    "Kondisi_Fisik_id" => 18,
                    "Kondisi_Mesin_id" => 23,
                    "Muatan_Penumpang_id" => 27,
                    "Kapasitas_Mesin_id" => 28,
                    "Jenis_BBM_id" => 33,
                    "Harga_Sewa_id" => 42
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 6,
                    "Tahun_Produksi_id" => 13,
                    "Kondisi_Fisik_id" => 19,
                    "Kondisi_Mesin_id" => 21,
                    "Muatan_Penumpang_id" => 27,
                    "Kapasitas_Mesin_id" => 31,
                    "Jenis_BBM_id" => 34,
                    "Harga_Sewa_id" => 41
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 10,
                    "Tahun_Produksi_id" => 13,
                    "Kondisi_Fisik_id" => 18,
                    "Kondisi_Mesin_id" => 22,
                    "Muatan_Penumpang_id" => 24,
                    "Kapasitas_Mesin_id" => 28,
                    "Jenis_BBM_id" => 37,
                    "Harga_Sewa_id" => 42
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 1,
                    "Tahun_Produksi_id" => 14,
                    "Kondisi_Fisik_id" => 18,
                    "Kondisi_Mesin_id" => 23,
                    "Muatan_Penumpang_id" => 26,
                    "Kapasitas_Mesin_id" => 50,
                    "Jenis_BBM_id" => 37,
                    "Harga_Sewa_id" => 44
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 47,
                    "Tahun_Produksi_id" => 13,
                    "Kondisi_Fisik_id" => 18,
                    "Kondisi_Mesin_id" => 22,
                    "Muatan_Penumpang_id" => 25,
                    "Kapasitas_Mesin_id" => 32,
                    "Jenis_BBM_id" => 36,
                    "Harga_Sewa_id" => 38
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 4,
                    "Tahun_Produksi_id" => 16,
                    "Kondisi_Fisik_id" => 18,
                    "Kondisi_Mesin_id" => 21,
                    "Muatan_Penumpang_id" => 24,
                    "Kapasitas_Mesin_id" => 29,
                    "Jenis_BBM_id" => 34,
                    "Harga_Sewa_id" => 43
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 2,
                    "Tahun_Produksi_id" => 12,
                    "Kondisi_Fisik_id" => 20,
                    "Kondisi_Mesin_id" => 23,
                    "Muatan_Penumpang_id" => 24,
                    "Kapasitas_Mesin_id" => 28,
                    "Jenis_BBM_id" => 37,
                    "Harga_Sewa_id" => 39
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 45,
                    "Tahun_Produksi_id" => 14,
                    "Kondisi_Fisik_id" => 20,
                    "Kondisi_Mesin_id" => 23,
                    "Muatan_Penumpang_id" => 24,
                    "Kapasitas_Mesin_id" => 30,
                    "Jenis_BBM_id" => 35,
                    "Harga_Sewa_id" => 43
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 46,
                    "Tahun_Produksi_id" => 11,
                    "Kondisi_Fisik_id" => 19,
                    "Kondisi_Mesin_id" => 21,
                    "Muatan_Penumpang_id" => 24,
                    "Kapasitas_Mesin_id" => 50,
                    "Jenis_BBM_id" => 33,
                    "Harga_Sewa_id" => 40
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 3,
                    "Tahun_Produksi_id" => 16,
                    "Kondisi_Fisik_id" => 18,
                    "Kondisi_Mesin_id" => 23,
                    "Muatan_Penumpang_id" => 26,
                    "Kapasitas_Mesin_id" => 32,
                    "Jenis_BBM_id" => 36,
                    "Harga_Sewa_id" => 44
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 2,
                    "Tahun_Produksi_id" => 17,
                    "Kondisi_Fisik_id" => 18,
                    "Kondisi_Mesin_id" => 22,
                    "Muatan_Penumpang_id" => 27,
                    "Kapasitas_Mesin_id" => 29,
                    "Jenis_BBM_id" => 35,
                    "Harga_Sewa_id" => 41
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 8,
                    "Tahun_Produksi_id" => 17,
                    "Kondisi_Fisik_id" => 20,
                    "Kondisi_Mesin_id" => 22,
                    "Muatan_Penumpang_id" => 27,
                    "Kapasitas_Mesin_id" => 30,
                    "Jenis_BBM_id" => 35,
                    "Harga_Sewa_id" => 39
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 10,
                    "Tahun_Produksi_id" => 16,
                    "Kondisi_Fisik_id" => 18,
                    "Kondisi_Mesin_id" => 22,
                    "Muatan_Penumpang_id" => 24,
                    "Kapasitas_Mesin_id" => 31,
                    "Jenis_BBM_id" => 33,
                    "Harga_Sewa_id" => 43
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 47,
                    "Tahun_Produksi_id" => 13,
                    "Kondisi_Fisik_id" => 18,
                    "Kondisi_Mesin_id" => 21,
                    "Muatan_Penumpang_id" => 27,
                    "Kapasitas_Mesin_id" => 50,
                    "Jenis_BBM_id" => 34,
                    "Harga_Sewa_id" => 41
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 2,
                    "Tahun_Produksi_id" => 14,
                    "Kondisi_Fisik_id" => 18,
                    "Kondisi_Mesin_id" => 23,
                    "Muatan_Penumpang_id" => 25,
                    "Kapasitas_Mesin_id" => 29,
                    "Jenis_BBM_id" => 35,
                    "Harga_Sewa_id" => 40
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 4,
                    "Tahun_Produksi_id" => 14,
                    "Kondisi_Fisik_id" => 18,
                    "Kondisi_Mesin_id" => 22,
                    "Muatan_Penumpang_id" => 24,
                    "Kapasitas_Mesin_id" => 30,
                    "Jenis_BBM_id" => 34,
                    "Harga_Sewa_id" => 40
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 1,
                    "Tahun_Produksi_id" => 15,
                    "Kondisi_Fisik_id" => 19,
                    "Kondisi_Mesin_id" => 22,
                    "Muatan_Penumpang_id" => 26,
                    "Kapasitas_Mesin_id" => 30,
                    "Jenis_BBM_id" => 34,
                    "Harga_Sewa_id" => 45
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 9,
                    "Tahun_Produksi_id" => 13,
                    "Kondisi_Fisik_id" => 20,
                    "Kondisi_Mesin_id" => 21,
                    "Muatan_Penumpang_id" => 27,
                    "Kapasitas_Mesin_id" => 50,
                    "Jenis_BBM_id" => 35,
                    "Harga_Sewa_id" => 44
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 1,
                    "Tahun_Produksi_id" => 13,
                    "Kondisi_Fisik_id" => 20,
                    "Kondisi_Mesin_id" => 21,
                    "Muatan_Penumpang_id" => 26,
                    "Kapasitas_Mesin_id" => 50,
                    "Jenis_BBM_id" => 37,
                    "Harga_Sewa_id" => 45
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 47,
                    "Tahun_Produksi_id" => 14,
                    "Kondisi_Fisik_id" => 19,
                    "Kondisi_Mesin_id" => 21,
                    "Muatan_Penumpang_id" => 26,
                    "Kapasitas_Mesin_id" => 30,
                    "Jenis_BBM_id" => 36,
                    "Harga_Sewa_id" => 45
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 3,
                    "Tahun_Produksi_id" => 13,
                    "Kondisi_Fisik_id" => 19,
                    "Kondisi_Mesin_id" => 22,
                    "Muatan_Penumpang_id" => 24,
                    "Kapasitas_Mesin_id" => 28,
                    "Jenis_BBM_id" => 34,
                    "Harga_Sewa_id" => 39
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 6,
                    "Tahun_Produksi_id" => 15,
                    "Kondisi_Fisik_id" => 19,
                    "Kondisi_Mesin_id" => 21,
                    "Muatan_Penumpang_id" => 24,
                    "Kapasitas_Mesin_id" => 32,
                    "Jenis_BBM_id" => 35,
                    "Harga_Sewa_id" => 39
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 1,
                    "Tahun_Produksi_id" => 13,
                    "Kondisi_Fisik_id" => 18,
                    "Kondisi_Mesin_id" => 21,
                    "Muatan_Penumpang_id" => 26,
                    "Kapasitas_Mesin_id" => 30,
                    "Jenis_BBM_id" => 35,
                    "Harga_Sewa_id" => 39
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 47,
                    "Tahun_Produksi_id" => 14,
                    "Kondisi_Fisik_id" => 19,
                    "Kondisi_Mesin_id" => 23,
                    "Muatan_Penumpang_id" => 25,
                    "Kapasitas_Mesin_id" => 32,
                    "Jenis_BBM_id" => 37,
                    "Harga_Sewa_id" => 39
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 3,
                    "Tahun_Produksi_id" => 17,
                    "Kondisi_Fisik_id" => 19,
                    "Kondisi_Mesin_id" => 22,
                    "Muatan_Penumpang_id" => 24,
                    "Kapasitas_Mesin_id" => 31,
                    "Jenis_BBM_id" => 36,
                    "Harga_Sewa_id" => 44
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 3,
                    "Tahun_Produksi_id" => 14,
                    "Kondisi_Fisik_id" => 19,
                    "Kondisi_Mesin_id" => 23,
                    "Muatan_Penumpang_id" => 24,
                    "Kapasitas_Mesin_id" => 29,
                    "Jenis_BBM_id" => 36,
                    "Harga_Sewa_id" => 39
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 45,
                    "Tahun_Produksi_id" => 15,
                    "Kondisi_Fisik_id" => 19,
                    "Kondisi_Mesin_id" => 22,
                    "Muatan_Penumpang_id" => 27,
                    "Kapasitas_Mesin_id" => 32,
                    "Jenis_BBM_id" => 35,
                    "Harga_Sewa_id" => 42
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 7,
                    "Tahun_Produksi_id" => 11,
                    "Kondisi_Fisik_id" => 19,
                    "Kondisi_Mesin_id" => 22,
                    "Muatan_Penumpang_id" => 25,
                    "Kapasitas_Mesin_id" => 31,
                    "Jenis_BBM_id" => 36,
                    "Harga_Sewa_id" => 39
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 9,
                    "Tahun_Produksi_id" => 12,
                    "Kondisi_Fisik_id" => 20,
                    "Kondisi_Mesin_id" => 22,
                    "Muatan_Penumpang_id" => 25,
                    "Kapasitas_Mesin_id" => 31,
                    "Jenis_BBM_id" => 33,
                    "Harga_Sewa_id" => 44
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 1,
                    "Tahun_Produksi_id" => 12,
                    "Kondisi_Fisik_id" => 19,
                    "Kondisi_Mesin_id" => 21,
                    "Muatan_Penumpang_id" => 25,
                    "Kapasitas_Mesin_id" => 32,
                    "Jenis_BBM_id" => 33,
                    "Harga_Sewa_id" => 45
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 45,
                    "Tahun_Produksi_id" => 16,
                    "Kondisi_Fisik_id" => 20,
                    "Kondisi_Mesin_id" => 23,
                    "Muatan_Penumpang_id" => 27,
                    "Kapasitas_Mesin_id" => 32,
                    "Jenis_BBM_id" => 36,
                    "Harga_Sewa_id" => 42
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 3,
                    "Tahun_Produksi_id" => 15,
                    "Kondisi_Fisik_id" => 20,
                    "Kondisi_Mesin_id" => 21,
                    "Muatan_Penumpang_id" => 25,
                    "Kapasitas_Mesin_id" => 30,
                    "Jenis_BBM_id" => 36,
                    "Harga_Sewa_id" => 41
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 49,
                    "Tahun_Produksi_id" => 11,
                    "Kondisi_Fisik_id" => 18,
                    "Kondisi_Mesin_id" => 23,
                    "Muatan_Penumpang_id" => 26,
                    "Kapasitas_Mesin_id" => 32,
                    "Jenis_BBM_id" => 33,
                    "Harga_Sewa_id" => 41
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 6,
                    "Tahun_Produksi_id" => 16,
                    "Kondisi_Fisik_id" => 19,
                    "Kondisi_Mesin_id" => 23,
                    "Muatan_Penumpang_id" => 26,
                    "Kapasitas_Mesin_id" => 29,
                    "Jenis_BBM_id" => 37,
                    "Harga_Sewa_id" => 40
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 49,
                    "Tahun_Produksi_id" => 16,
                    "Kondisi_Fisik_id" => 18,
                    "Kondisi_Mesin_id" => 21,
                    "Muatan_Penumpang_id" => 26,
                    "Kapasitas_Mesin_id" => 29,
                    "Jenis_BBM_id" => 34,
                    "Harga_Sewa_id" => 45
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 10,
                    "Tahun_Produksi_id" => 15,
                    "Kondisi_Fisik_id" => 18,
                    "Kondisi_Mesin_id" => 23,
                    "Muatan_Penumpang_id" => 27,
                    "Kapasitas_Mesin_id" => 32,
                    "Jenis_BBM_id" => 35,
                    "Harga_Sewa_id" => 42
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 48,
                    "Tahun_Produksi_id" => 16,
                    "Kondisi_Fisik_id" => 20,
                    "Kondisi_Mesin_id" => 22,
                    "Muatan_Penumpang_id" => 27,
                    "Kapasitas_Mesin_id" => 29,
                    "Jenis_BBM_id" => 34,
                    "Harga_Sewa_id" => 43
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 10,
                    "Tahun_Produksi_id" => 11,
                    "Kondisi_Fisik_id" => 18,
                    "Kondisi_Mesin_id" => 23,
                    "Muatan_Penumpang_id" => 26,
                    "Kapasitas_Mesin_id" => 31,
                    "Jenis_BBM_id" => 36,
                    "Harga_Sewa_id" => 42
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 4,
                    "Tahun_Produksi_id" => 11,
                    "Kondisi_Fisik_id" => 19,
                    "Kondisi_Mesin_id" => 22,
                    "Muatan_Penumpang_id" => 25,
                    "Kapasitas_Mesin_id" => 32,
                    "Jenis_BBM_id" => 35,
                    "Harga_Sewa_id" => 40
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 3,
                    "Tahun_Produksi_id" => 16,
                    "Kondisi_Fisik_id" => 20,
                    "Kondisi_Mesin_id" => 21,
                    "Muatan_Penumpang_id" => 26,
                    "Kapasitas_Mesin_id" => 31,
                    "Jenis_BBM_id" => 36,
                    "Harga_Sewa_id" => 42
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 45,
                    "Tahun_Produksi_id" => 13,
                    "Kondisi_Fisik_id" => 18,
                    "Kondisi_Mesin_id" => 22,
                    "Muatan_Penumpang_id" => 27,
                    "Kapasitas_Mesin_id" => 30,
                    "Jenis_BBM_id" => 33,
                    "Harga_Sewa_id" => 41
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 46,
                    "Tahun_Produksi_id" => 12,
                    "Kondisi_Fisik_id" => 19,
                    "Kondisi_Mesin_id" => 23,
                    "Muatan_Penumpang_id" => 25,
                    "Kapasitas_Mesin_id" => 29,
                    "Jenis_BBM_id" => 33,
                    "Harga_Sewa_id" => 41
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 8,
                    "Tahun_Produksi_id" => 14,
                    "Kondisi_Fisik_id" => 19,
                    "Kondisi_Mesin_id" => 22,
                    "Muatan_Penumpang_id" => 25,
                    "Kapasitas_Mesin_id" => 31,
                    "Jenis_BBM_id" => 33,
                    "Harga_Sewa_id" => 40
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 45,
                    "Tahun_Produksi_id" => 13,
                    "Kondisi_Fisik_id" => 19,
                    "Kondisi_Mesin_id" => 23,
                    "Muatan_Penumpang_id" => 26,
                    "Kapasitas_Mesin_id" => 50,
                    "Jenis_BBM_id" => 37,
                    "Harga_Sewa_id" => 42
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 46,
                    "Tahun_Produksi_id" => 14,
                    "Kondisi_Fisik_id" => 20,
                    "Kondisi_Mesin_id" => 21,
                    "Muatan_Penumpang_id" => 25,
                    "Kapasitas_Mesin_id" => 32,
                    "Jenis_BBM_id" => 33,
                    "Harga_Sewa_id" => 38
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 45,
                    "Tahun_Produksi_id" => 11,
                    "Kondisi_Fisik_id" => 20,
                    "Kondisi_Mesin_id" => 21,
                    "Muatan_Penumpang_id" => 27,
                    "Kapasitas_Mesin_id" => 29,
                    "Jenis_BBM_id" => 33,
                    "Harga_Sewa_id" => 41
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 47,
                    "Tahun_Produksi_id" => 14,
                    "Kondisi_Fisik_id" => 20,
                    "Kondisi_Mesin_id" => 21,
                    "Muatan_Penumpang_id" => 26,
                    "Kapasitas_Mesin_id" => 30,
                    "Jenis_BBM_id" => 33,
                    "Harga_Sewa_id" => 44
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 9,
                    "Tahun_Produksi_id" => 11,
                    "Kondisi_Fisik_id" => 20,
                    "Kondisi_Mesin_id" => 22,
                    "Muatan_Penumpang_id" => 27,
                    "Kapasitas_Mesin_id" => 28,
                    "Jenis_BBM_id" => 33,
                    "Harga_Sewa_id" => 38
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 7,
                    "Tahun_Produksi_id" => 11,
                    "Kondisi_Fisik_id" => 18,
                    "Kondisi_Mesin_id" => 21,
                    "Muatan_Penumpang_id" => 26,
                    "Kapasitas_Mesin_id" => 31,
                    "Jenis_BBM_id" => 34,
                    "Harga_Sewa_id" => 44
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 9,
                    "Tahun_Produksi_id" => 13,
                    "Kondisi_Fisik_id" => 18,
                    "Kondisi_Mesin_id" => 23,
                    "Muatan_Penumpang_id" => 27,
                    "Kapasitas_Mesin_id" => 28,
                    "Jenis_BBM_id" => 35,
                    "Harga_Sewa_id" => 42
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 10,
                    "Tahun_Produksi_id" => 12,
                    "Kondisi_Fisik_id" => 18,
                    "Kondisi_Mesin_id" => 22,
                    "Muatan_Penumpang_id" => 27,
                    "Kapasitas_Mesin_id" => 29,
                    "Jenis_BBM_id" => 33,
                    "Harga_Sewa_id" => 45
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 8,
                    "Tahun_Produksi_id" => 13,
                    "Kondisi_Fisik_id" => 20,
                    "Kondisi_Mesin_id" => 22,
                    "Muatan_Penumpang_id" => 27,
                    "Kapasitas_Mesin_id" => 50,
                    "Jenis_BBM_id" => 34,
                    "Harga_Sewa_id" => 40
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 6,
                    "Tahun_Produksi_id" => 14,
                    "Kondisi_Fisik_id" => 19,
                    "Kondisi_Mesin_id" => 22,
                    "Muatan_Penumpang_id" => 25,
                    "Kapasitas_Mesin_id" => 28,
                    "Jenis_BBM_id" => 36,
                    "Harga_Sewa_id" => 38
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 9,
                    "Tahun_Produksi_id" => 13,
                    "Kondisi_Fisik_id" => 18,
                    "Kondisi_Mesin_id" => 22,
                    "Muatan_Penumpang_id" => 25,
                    "Kapasitas_Mesin_id" => 30,
                    "Jenis_BBM_id" => 33,
                    "Harga_Sewa_id" => 42
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 3,
                    "Tahun_Produksi_id" => 12,
                    "Kondisi_Fisik_id" => 19,
                    "Kondisi_Mesin_id" => 21,
                    "Muatan_Penumpang_id" => 24,
                    "Kapasitas_Mesin_id" => 50,
                    "Jenis_BBM_id" => 33,
                    "Harga_Sewa_id" => 41
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 2,
                    "Tahun_Produksi_id" => 14,
                    "Kondisi_Fisik_id" => 20,
                    "Kondisi_Mesin_id" => 23,
                    "Muatan_Penumpang_id" => 25,
                    "Kapasitas_Mesin_id" => 30,
                    "Jenis_BBM_id" => 33,
                    "Harga_Sewa_id" => 45
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 4,
                    "Tahun_Produksi_id" => 16,
                    "Kondisi_Fisik_id" => 18,
                    "Kondisi_Mesin_id" => 22,
                    "Muatan_Penumpang_id" => 24,
                    "Kapasitas_Mesin_id" => 50,
                    "Jenis_BBM_id" => 33,
                    "Harga_Sewa_id" => 41
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 6,
                    "Tahun_Produksi_id" => 16,
                    "Kondisi_Fisik_id" => 19,
                    "Kondisi_Mesin_id" => 21,
                    "Muatan_Penumpang_id" => 26,
                    "Kapasitas_Mesin_id" => 28,
                    "Jenis_BBM_id" => 33,
                    "Harga_Sewa_id" => 42
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 7,
                    "Tahun_Produksi_id" => 15,
                    "Kondisi_Fisik_id" => 19,
                    "Kondisi_Mesin_id" => 23,
                    "Muatan_Penumpang_id" => 25,
                    "Kapasitas_Mesin_id" => 50,
                    "Jenis_BBM_id" => 37,
                    "Harga_Sewa_id" => 39
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 47,
                    "Tahun_Produksi_id" => 17,
                    "Kondisi_Fisik_id" => 18,
                    "Kondisi_Mesin_id" => 21,
                    "Muatan_Penumpang_id" => 27,
                    "Kapasitas_Mesin_id" => 31,
                    "Jenis_BBM_id" => 34,
                    "Harga_Sewa_id" => 38
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 5,
                    "Tahun_Produksi_id" => 11,
                    "Kondisi_Fisik_id" => 19,
                    "Kondisi_Mesin_id" => 23,
                    "Muatan_Penumpang_id" => 27,
                    "Kapasitas_Mesin_id" => 29,
                    "Jenis_BBM_id" => 36,
                    "Harga_Sewa_id" => 42
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 9,
                    "Tahun_Produksi_id" => 16,
                    "Kondisi_Fisik_id" => 20,
                    "Kondisi_Mesin_id" => 23,
                    "Muatan_Penumpang_id" => 25,
                    "Kapasitas_Mesin_id" => 31,
                    "Jenis_BBM_id" => 36,
                    "Harga_Sewa_id" => 43
                ]);
                car::create([
                    'user_id' => '6',
                    'shop_id' => '5',
                    'stok' => 'standby',
                    "merk_id" => 49,
                    "Tahun_Produksi_id" => 17,
                    "Kondisi_Fisik_id" => 19,
                    "Kondisi_Mesin_id" => 21,
                    "Muatan_Penumpang_id" => 27,
                    "Kapasitas_Mesin_id" => 31,
                    "Jenis_BBM_id" => 36,
                    "Harga_Sewa_id" => 40
                ]);
            //
            // Amin Family Group

            //
        //

        // Table Nilai====================================================================================
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
