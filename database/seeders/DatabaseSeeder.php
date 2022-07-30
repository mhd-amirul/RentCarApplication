<?php

namespace Database\Seeders;

use App\Models\alternatif;
use App\Models\car;
use App\Models\kriteria;
use App\Models\nilai;
use App\Models\shop;
use App\Models\ulasan;
use Illuminate\Database\Seeder;
use App\Models\User;

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
                'nama' => 'diatas 1600cc',
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
                'nilai' => '1',]);
            alternatif::create([
                'kriteria_id' => '8',
                'nama' => '551rb sampai 600rb/hari',
                'nilai' => '2',]);
            alternatif::create([
                'kriteria_id' => '8',
                'nama' => '501rb sampai 550rb/hari',
                'nilai' => '3',]);
            alternatif::create([
                'kriteria_id' => '8',
                'nama' => '451rb sampai 500rb/hari',
                'nilai' => '4',]);
            alternatif::create([
                'kriteria_id' => '8',
                'nama' => '401rb sampai 450rb/hari',
                'nilai' => '5',]);
            alternatif::create([
                'kriteria_id' => '8',
                'nama' => '351rb sampai 400rb/hari',
                'nilai' => '6',]);
            alternatif::create([
                'kriteria_id' => '8',
                'nama' => '300rb sampai 350rb/hari',
                'nilai' => '7',]);
            alternatif::create([
                'kriteria_id' => '8',
                'nama' => 'dibawah 300rb/hari',
                'nilai' => '8',]);
        //

        // Table User====================================================================================
            User::create([
                'slug' => '2TBv8bXOUfCdHVyavrG89v0taGS96qmxuwHfGGB9josete8GG3',
                'username' => 'Admin-1',
                'email' => 'amirul@pnl.com',
                'no_hp' => '82367256774',
                'password' => '$2y$10$anaviSoAnWHSHjPQ3C/nQODMQdnOkagCSDlAtJ1v.yBiyHr2Vb0MK',
                'image' => NULL,
                'role' => 'admin',]);
            User::create([
                'slug' => 'NiYB8b2BF8XL41GFrhWt9jzVogsaYynnEFjZ4EC0YsRwbEhZMe',
                'username' => 'sahlan',
                'email' => 'sahlan@pnl.com',
                'no_hp' => '81360307543',
                'password' => '$2y$10$kcHAd..MPF9yf0A4mfkQG.Rk/J7Y8PdVySMhXY/6dkAcQxCr5tjhW',
                'image' => NULL,
                'role' => 'rental',]);
            User::create([
                'slug' => 'FK597s5OF1nRyJCxTgErB10az3a5v4wZLPvP0a81gRjJNtktlz',
                'username' => 'andi',
                'email' => 'andi@pnl.com',
                'no_hp' => '80000000000',
                'password' => '$2y$10$x0NYm9sw1ADMIaQn8mnT0OX8MZBEz13nv5GFks.idswFrpcgeh29u',
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
        //

        // Table car====================================================================================
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
                'gambar3' => 'gambar3/LJc9MJL6UujZ0uerKD1EV4PPflJPvIzlhF15DZ6R.webp',
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
                'gambar5' => 'gambar5/0XqRNInKAJVDxgkBCCRA9V8JVXSWFdGxsbE37lVC.webp',]);
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
