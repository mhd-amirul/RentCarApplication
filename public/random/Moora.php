RENTAL CONTROLLER STORE===================================================
{
    $d = explode(',',$data['Tahun_Produksi_id']);
    return response()->json($data);


    // proses pengambilan nilai data mobil
    $merk_id = alternatif::where('id', $data['merk_id'])->first();
    $tp_id = alternatif::where('id', $data['tp_id'])->first();
    $kf_id = alternatif::where('id', $data['kf_id'])->first();
    $km_id = alternatif::where('id', $data['km_id'])->first();
    $mp_id = alternatif::where('id', $data['mp_id'])->first();
    $km2_id = alternatif::where('id', $data['km2_id'])->first();
    $jb_id = alternatif::where('id', $data['jb_id'])->first();
    $hs_id = alternatif::where('id', $data['hs_id'])->first();

    // proses simpan data ke array
    $kriteria1 = [
        'car_id' => $car['id'],
        'kriteria_id' => $merk_id['kriteria_id'],
        'alternatif_id' => $data['merk_id'],
        'nilai' => $merk_id['nilai']
    ];
    $kriteria2 = [
        'car_id' => $car['id'],
        'kriteria_id' => $tp_id['kriteria_id'],
        'alternatif_id' => $data['tp_id'],
        'nilai' => $tp_id['nilai']
    ];
    $kriteria3 = [
        'car_id' => $car['id'],
        'kriteria_id' => $kf_id['kriteria_id'],
        'alternatif_id' => $data['kf_id'],
        'nilai' => $kf_id['nilai']
    ];
    $kriteria4 = [
        'car_id' => $car['id'],
        'kriteria_id' => $km_id['kriteria_id'],
        'alternatif_id' => $data['km_id'],
        'nilai' => $km_id['nilai']
    ];
    $kriteria5 = [

        'car_id' => $car['id'],
        'kriteria_id' => $mp_id['kriteria_id'],
        'alternatif_id' => $data['mp_id'],
        'nilai' => $mp_id['nilai']
    ];
    $kriteria6 = [
        'car_id' => $car['id'],
        'kriteria_id' => $km2_id['kriteria_id'],
        'alternatif_id' => $data['km2_id'],
        'nilai' => $km2_id['nilai']
    ];
    $kriteria7 = [
        'car_id' => $car['id'],
        'kriteria_id' => $jb_id['kriteria_id'],
        'alternatif_id' => $data['jb_id'],
        'nilai' => $jb_id['nilai']
    ];
    $kriteria8 = [
        'car_id' => $car['id'],
        'kriteria_id' => $hs_id['kriteria_id'],
        'alternatif_id' => $data['hs_id'],
        'nilai' => $hs_id['nilai']
    ];

    // Proses penyimpanan data nilai ke db
    nilai::create($kriteria1);
    nilai::create($kriteria2);
    nilai::create($kriteria3);
    nilai::create($kriteria4);
    nilai::create($kriteria5);
    nilai::create($kriteria6);
    nilai::create($kriteria7);
    nilai::create($kriteria8);
}

HOME CONTROLLER HITUNG ====================================================
public function perhitungan(Request $request)
    {
        $allKriteria = kriteria::all();
        $kriteria = [];
        foreach ($allKriteria as $row) {
            $kriteria[
                $row->id
                ] = array(
                    $row->nama,
                    $row->type,
                    $row->bobot
                );
        }

        echo "<br>=========================Data Kriteria====================================<br>";
        foreach ($kriteria as $id_kriteria => $value) {
            echo $kriteria[$id_kriteria][0]." [".$kriteria[$id_kriteria][1]."] = ".$kriteria[$id_kriteria][2]."<br>";
        }

        $filterCars = car::query();
        foreach ($allKriteria as $k) {
            # code...
            $name = str_replace(' ','_',$k->nama.'_id');
            if ($request->filled($name)) {
                $filterCars->where($name, $request[$name]);
            }
        }
        $allCars = $filterCars->get();

        $alternatif = [];
        foreach ($allCars as $row) {
        $alternatif[$row->id]
            = array(
                $row->merk_id,
                $row->Tahun_Produksi_id,
                $row->Kondisi_Fisik_id,
                $row->Kondisi_Mesin_id,
                $row->Muatan_Penumpang_id,
                $row->Kapasitas_Mesin_id,
                $row->Jenis_BBM_id,
                $row->Harga_Sewa_id,
            );
        }

        echo "<br>=========================Data Alternatif====================================<br>";
        foreach ($alternatif as $id_alt => $value) {
            for ($i=0; $i <= 7 ; $i++) {
                echo $alternatif[$id_alt][$i]." | ";
            }
            echo "<br>";
        }

        // Mengambil data nilai
        $db = DB::select('SELECT * FROM nilais ORDER BY car_id, kriteria_id');
        $sample = [];
        foreach ($db as $row) {
            if (!isset($sample[$row->car_id])) {
                $sample[$row->car_id] = [];
            }
            foreach ($allCars as $car) {
                # code...
                if ($car->id == $row->car_id) {
                    $sample[$row->car_id][$row->kriteria_id] = $row->nilai;
                }
            }
        }

        echo "<br>=========================Nilai Alternatif====================================<br>";
        foreach ($sample as $id_car => $value) {
                foreach ($kriteria as $id_kriteria => $value) {
                    if (isset($sample[$id_car][$id_kriteria])) {
                        # code...
                        echo $sample[$id_car][$id_kriteria]." | ";
                    }
                }
                echo "<br>";
        }

        $normal = $sample;
        foreach($kriteria as $id_kriteria => $k){
            $pembagi = 0;
            foreach($alternatif as $id_cars => $a){
                $pembagi += pow($sample[$id_cars][$id_kriteria], 2);
            }
            foreach($alternatif as $id_alternatif => $a){
                $normal[$id_alternatif][$id_kriteria] /= sqrt($pembagi);
            }
        }

        // MENAMPILKAN NORMALISASI MATRIX
        echo "<br>=========================Hasil Normalisasi====================================<br>";
        foreach ($normal as $id_normal => $value) {
                foreach ($kriteria as $id_kriteria => $value) {

                    if (isset($normal[$id_normal][$id_kriteria])) {
                        # code...
                        echo $normal[$id_normal][$id_kriteria]." | ";
                    }
                }
                echo "<br>";
        }

        //MENGHITUNG NILAI OPTIMASI
        $optimasi = [];
        $batas = 0;
        foreach($alternatif as $id_cars => $a){
            $optimasi[$id_cars] = 0;
            foreach($kriteria as $id_kriteria => $k){
                $data[$id_cars] = $normal[$id_cars][$id_kriteria] * $k[2];
                if ($k[1] == 'benefit') {
                    $optimasi[$id_cars] += $data[$id_cars];
                } else {
                    $optimasi[$id_cars] -= $data[$id_cars];
                }
            }
        }

        //menampilkan NILAI OPTIMASI
        echo "<br>=========================Hasil Optimasi====================================<br>";
        foreach ($optimasi as $id_optimasi => $value) {
            echo "[".$id_optimasi."]"." = ".$optimasi[$id_optimasi];
            echo "<br>";
        }

        // $index = key($result);
        arsort($optimasi);
        $cars = [];
        foreach ($optimasi as $id_cars => $value) {
            $result[] = [
                'nilai_akhir' => $optimasi[$id_cars],
                'car_id' => $id_cars,
            ];
            $cars[] = car::where('id', $id_cars)->first();
        }

        echo "<br>=========================PERANGKINGAN====================================<br>";
        foreach ($optimasi as $id_optimasi => $value) {
            echo "[".$id_optimasi."]"." = ".$optimasi[$id_optimasi];
            echo "<br>";
        }
        $cars = array_slice($cars, 0, 10);

        echo "<br>=========================HASIL REKOMENDASI====================================<br>";
        foreach ($cars as $car) {
            echo "===============================================================================<br>
                    [".$car."]
                <br>===============================================================================";
            echo "<br>";
        }
}

RENTAL CONTROLLER UPDATE===================================================
public function update(MobilUpdateRequest $request, $id)
    {
        $db = car::findOrFail($id);
        $data = $request->all();

        $data['user_id'] = auth()->user()->id;

        if ($request->file('gambar1')) {
            if ($request->oldgambar1) {
                Storage::delete($request->oldgambar1);
            }
            $data['gambar1'] = $request->file('gambar1')->store('gambar1');
        }

        if ($request->file('gambar2')) {
            if ($request->oldgambar2) {
                Storage::delete($request->oldgambar2);
            }
            $data['gambar2'] = $request->file('gambar2')->store('gambar2');
        }

        if ($request->file('gambar3')) {
            if ($request->oldgambar3) {
                Storage::delete($request->oldgambar3);
            }
            $data['gambar3'] = $request->file('gambar3')->store('gambar3');
        }

        if ($request->file('gambar4')) {
            if ($request->oldgambar4) {
                Storage::delete($request->oldgambar4);
            }
            $data['gambar4'] = $request->file('gambar4')->store('gambar4');
        }

        if ($request->file('gambar5')) {
            if ($request->oldgambar5) {
                Storage::delete($request->oldgambar5);
            }
            $data['gambar5'] = $request->file('gambar5')->store('gambar5');
        }

        // proses pengambilan nilai data mobil
        $merk_id = alternatif::where('id', $data['merk_id'])->first();
        $tp_id = alternatif::where('id', $data['tp_id'])->first();
        $kf_id = alternatif::where('id', $data['kf_id'])->first();
        $km_id = alternatif::where('id', $data['km_id'])->first();
        $mp_id = alternatif::where('id', $data['mp_id'])->first();
        $km2_id = alternatif::where('id', $data['km2_id'])->first();
        $jb_id = alternatif::where('id', $data['jb_id'])->first();
        $hs_id = alternatif::where('id', $data['hs_id'])->first();

        $data['kata_kunci'] =  $merk_id['nama'].
        ', '.$tp_id['nama'].
        ', '.$kf_id['nama'].
        ', '.$km_id['nama'].
        ', '.$mp_id['nama'].
        ', '.$km2_id['nama'].
        ', '.$jb_id['nama'].
        ', '.$hs_id['nama'].
        ', '.$data['deskripsi'];

        // proses simpan data ke array
        $kriteria1 = [
            'car_id' => $id,
            'kriteria_id' => $merk_id['kriteria_id'],
            'alternatif_id' => $data['merk_id'],
            'nilai' => $merk_id['nilai']
        ];
        $kriteria2 = [
            'car_id' => $id,
            'kriteria_id' => $tp_id['kriteria_id'],
            'alternatif_id' => $data['tp_id'],
            'nilai' => $tp_id['nilai']
        ];
        $kriteria3 = [
            'car_id' => $id,
            'kriteria_id' => $kf_id['kriteria_id'],
            'alternatif_id' => $data['kf_id'],
            'nilai' => $kf_id['nilai']
        ];
        $kriteria4 = [
            'car_id' => $id,
            'kriteria_id' => $km_id['kriteria_id'],
            'alternatif_id' => $data['km_id'],
            'nilai' => $km_id['nilai']
        ];
        $kriteria5 = [

            'car_id' => $id,
            'kriteria_id' => $mp_id['kriteria_id'],
            'alternatif_id' => $data['mp_id'],
            'nilai' => $mp_id['nilai']
        ];
        $kriteria6 = [
            'car_id' => $id,
            'kriteria_id' => $km2_id['kriteria_id'],
            'alternatif_id' => $data['km2_id'],
            'nilai' => $km2_id['nilai']
        ];
        $kriteria7 = [
            'car_id' => $id,
            'kriteria_id' => $jb_id['kriteria_id'],
            'alternatif_id' => $data['jb_id'],
            'nilai' => $jb_id['nilai']
        ];
        $kriteria8 = [
            'car_id' => $id,
            'kriteria_id' => $hs_id['kriteria_id'],
            'alternatif_id' => $data['hs_id'],
            'nilai' => $hs_id['nilai']
        ];

        // temukan data yang ingin di ubah
        $dbk1 = nilai::where([
            'car_id' => $id,
            'kriteria_id' => $merk_id['kriteria_id']
        ])->first();
        $dbk2 = nilai::where([
            'car_id' => $id,
            'kriteria_id' => $tp_id['kriteria_id']
        ])->first();
        $dbk3 = nilai::where([
            'car_id' => $id,
            'kriteria_id' => $kf_id['kriteria_id']
        ])->first();
        $dbk4 = nilai::where([
            'car_id' => $id,
            'kriteria_id' => $km_id['kriteria_id']
        ])->first();
        $dbk5 = nilai::where([
            'car_id' => $id,
            'kriteria_id' => $mp_id['kriteria_id']
        ])->first();
        $dbk6 = nilai::where([
            'car_id' => $id,
            'kriteria_id' => $km2_id['kriteria_id']
        ])->first();
        $dbk7 = nilai::where([
            'car_id' => $id,
            'kriteria_id' => $jb_id['kriteria_id']
        ])->first();
        $dbk8 = nilai::where([
            'car_id' => $id,
            'kriteria_id' => $hs_id['kriteria_id']
        ])->first();

        // return response()->json($dbk6);

        $db->update($data);
        $dbk1->update($kriteria1);
        $dbk2->update($kriteria2);
        $dbk3->update($kriteria3);
        $dbk4->update($kriteria4);
        $dbk5->update($kriteria5);
        $dbk6->update($kriteria6);
        $dbk7->update($kriteria7);
        $dbk8->update($kriteria8);
        return redirect()
            ->route('toko.index')
            ->with('success', 'Data Mobil Berhasil di Ubah');
    }

HOME BLADE =============================================================
<div class="form-floating mb-1">
        <select name="kritmerk" class="form-select" aria-label="Floating label select example">
            @foreach ($merk as $data)
                <option value="{{ $data->id }}">{{ $data->nama }}</option>
            @endforeach
    </select>
    <label for="merk_id">Merk</label>
</div>

HOME CONTROLLER =======================================================


OTHER    =================================================================
MODAL DELETE    =================================================================
<div class="modal fade" id="hapusMobil" role="dialog" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center" style="width:100%; padding:20px; text-align:center;">
                    <img style="width:150px; height:auto; margin:0 auto; display:block; margin-bottom:25px;" src="{{ url('images/failed.jpg') }}" alt="">
                    <h1 style="font-size: 30px; margin-bottom: 25px; color:#5C5C5C;">Error</h1>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Confirm</button>
            </div>
        </div>
    </div>
</div>
<a href="#" class="btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapusMobil">
    <i class="bi bi-trash-fill" style="color: rgb(0, 0, 0);"></i>
</a>

Error Massage ==============================================================================
@error('email')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror

SEEDER ==============================================================================
// Table car====================================================================================
            // OLD Table Car ==============================================================================
                // car::create(
                //     [
                //         'user_id' => '3',
                //         'shop_id' => '2',
                //         'stok' => 'standby',
                //         'merk_id' => '3',
                //         'Tahun_Produksi_id' => '5',
                //         'Kondisi_Fisik_id' => '7',
                //         'Kondisi_Mesin_id' => '11',
                //         'Muatan_Penumpang_id' => '13',
                //         'Kapasitas_Mesin_id' => '18',
                //         'Jenis_BBM_id' => '21',
                //         'Harga_Sewa_id' => '23'
                //     ]
                // );
                // car::create(
                //     [
                //         'user_id' => '3',
                //         'shop_id' => '2',
                //         'stok' => 'standby',
                //         'merk_id' => '1',
                //         'Tahun_Produksi_id' => '5',
                //         'Kondisi_Fisik_id' => '7',
                //         'Kondisi_Mesin_id' => '12',
                //         'Muatan_Penumpang_id' => '15',
                //         'Kapasitas_Mesin_id' => '17',
                //         'Jenis_BBM_id' => '20',
                //         'Harga_Sewa_id' => '22'
                //     ]
                // );
                // car::create(
                //     [
                //         'user_id' => '3',
                //         'shop_id' => '2',
                //         'stok' => 'standby',
                //         'merk_id' => '3',
                //         'Tahun_Produksi_id' => '4',
                //         'Kondisi_Fisik_id' => '7',
                //         'Kondisi_Mesin_id' => '11',
                //         'Muatan_Penumpang_id' => '13',
                //         'Kapasitas_Mesin_id' => '16',
                //         'Jenis_BBM_id' => '21',
                //         'Harga_Sewa_id' => '24'
                //     ]
                // );
                // car::create(
                //     [
                //         'user_id' => '3',
                //         'shop_id' => '2',
                //         'stok' => 'standby',
                //         'merk_id' => '1',
                //         'Tahun_Produksi_id' => '5',
                //         'Kondisi_Fisik_id' => '9',
                //         'Kondisi_Mesin_id' => '12',
                //         'Muatan_Penumpang_id' => '15',
                //         'Kapasitas_Mesin_id' => '17',
                //         'Jenis_BBM_id' => '19',
                //         'Harga_Sewa_id' => '23'
                //     ]
                // );
                // car::create(
                //     [
                //         'user_id' => '3',
                //         'shop_id' => '2',
                //         'stok' => 'standby',
                //         'merk_id' => '3',
                //         'Tahun_Produksi_id' => '6',
                //         'Kondisi_Fisik_id' => '9',
                //         'Kondisi_Mesin_id' => '12',
                //         'Muatan_Penumpang_id' => '15',
                //         'Kapasitas_Mesin_id' => '18',
                //         'Jenis_BBM_id' => '21',
                //         'Harga_Sewa_id' => '24'
                //     ]
                // );
                // car::create(
                //     [
                //         'user_id' => '2',
                //         'shop_id' => '1',
                //         'stok' => 'standby',
                //         'merk_id' => '3',
                //         'Tahun_Produksi_id' => '5',
                //         'Kondisi_Fisik_id' => '7',
                //         'Kondisi_Mesin_id' => '11',
                //         'Muatan_Penumpang_id' => '13',
                //         'Kapasitas_Mesin_id' => '18',
                //         'Jenis_BBM_id' => '21',
                //         'Harga_Sewa_id' => '23'
                //     ]
                // );
                // car::create(
                //     [
                //         'user_id' => '2',
                //         'shop_id' => '1',
                //         'stok' => 'standby',
                //         'merk_id' => '1',
                //         'Tahun_Produksi_id' => '5',
                //         'Kondisi_Fisik_id' => '7',
                //         'Kondisi_Mesin_id' => '12',
                //         'Muatan_Penumpang_id' => '15',
                //         'Kapasitas_Mesin_id' => '17',
                //         'Jenis_BBM_id' => '20',
                //         'Harga_Sewa_id' => '22'
                //     ]
                // );
                // car::create(
                //     [
                //         'user_id' => '2',
                //         'shop_id' => '1',
                //         'stok' => 'standby',
                //         'merk_id' => '3',
                //         'Tahun_Produksi_id' => '4',
                //         'Kondisi_Fisik_id' => '7',
                //         'Kondisi_Mesin_id' => '11',
                //         'Muatan_Penumpang_id' => '13',
                //         'Kapasitas_Mesin_id' => '16',
                //         'Jenis_BBM_id' => '21',
                //         'Harga_Sewa_id' => '24'
                //     ]
                // );
                // car::create(
                //     [
                //         'user_id' => '2',
                //         'shop_id' => '1',
                //         'stok' => 'standby',
                //         'merk_id' => '1',
                //         'Tahun_Produksi_id' => '5',
                //         'Kondisi_Fisik_id' => '9',
                //         'Kondisi_Mesin_id' => '12',
                //         'Muatan_Penumpang_id' => '15',
                //         'Kapasitas_Mesin_id' => '17',
                //         'Jenis_BBM_id' => '19',
                //         'Harga_Sewa_id' => '23'
                //     ]
                // );
                // car::create(
                //     [
                //         'user_id' => '2',
                //         'shop_id' => '1',
                //         'stok' => 'standby',
                //         'merk_id' => '3',
                //         'Tahun_Produksi_id' => '6',
                //         'Kondisi_Fisik_id' => '9',
                //         'Kondisi_Mesin_id' => '12',
                //         'Muatan_Penumpang_id' => '15',
                //         'Kapasitas_Mesin_id' => '18',
                //         'Jenis_BBM_id' => '21',
                //         'Harga_Sewa_id' => '24'
                //     ]
                // );
            //

        // Table Nilai====================================================================================
            // OLD Table Nilali
                // Car 1
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
                // Car 2

            //
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
<!--  -->


