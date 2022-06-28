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
public function hitung(Request $request)
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

    $allCars = car::where('merk_id', $request->kritmerk)->where('stok','>','0')->get();
    $alternatif = [];
    foreach ($allCars as $row) {
    $alternatif[$row->id]
        = array(
            $row->merk_id,
            $row->tp_id,
            $row->kf_id,
            $row->km_id,
            $row->mp_id,
            $row->km2_id,
            $row->jb_id,
            $row->hs_id,
        );
    }

    // Mengambil data nilai
    $db = DB::select('SELECT * FROM nilais ORDER BY car_id, kriteria_id');
    $sample = [];
    foreach ($db as $row) {
        if (!isset($sample[$row->car_id])) {
            $sample[$row->car_id] = [];
        }
        $sample[$row->car_id][$row->kriteria_id] = $row->nilai;
    }

    $normal = $sample;
    foreach($kriteria as $id_kriteria => $k){
        $pembagi = 0;
        foreach($alternatif as $id_cars => $a){
            $pembagi += pow($sample[$id_cars][$id_kriteria], 2);
        }
        foreach($alternatif as $id_cars => $a){
            $normal[$id_cars][$id_kriteria] /= sqrt($pembagi);
        }
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
        $batas++;
    }

    // $index = key($result);
    arsort($optimasi);

    foreach ($optimasi as $id_cars => $value) {
        $result[] = [
            'nilai_akhir' => $optimasi[$id_cars],
            'car_id' => $id_cars,
        ];
    }
    // ambil data mobil dari db
    $cars = [];
    for ($i=0; $i <= $batas-1; $i++) {
        $cars[] = car::where('id', $result[$i]['car_id'])->first();
    }
    $cars = array_slice($cars, 0, 5);

    return view('pages.hasil')
        ->with(
            [
                'title' => 'Hasil Rekomendasi',
                'cars' => $cars
            ]
        );
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
$kritCar[] = $request->all();

$allCars = [];
foreach ($kritCar as $req) {
    # code...
    if ($req['merk_id']) {
        # code...
        if ($req['Tahun_Produksi_id']) {
            # code...
            if ($req['Kondisi_Fisik_id']) {
                # code...
                if ($req['Kondisi_Mesin_id']) {
                    # code...
                    if ($req['Muatan_Penumpang_id']) {
                        # code...
                        if ($req['Kapasitan_Mesin_id']) {
                            # code...
                            if ($req['Jenis_BBM_id']) {
                                # code...
                                if ($req['Harga_Sewa_id']) {
                                    # code...
                                    $allCars = car::where('merk_id', $req['merk_id'])
                                        ->where('Tahun_Produksi_id', $req['Tahun_Produksi_id'])
                                        ->where('Kondisi_Fisik_id', $req['Kondisi_Fisik_id'])
                                        ->where('Kondisi_Mesin_id', $req['Kondisi_Mesin_id'])
                                        ->where('Muatan_Penumpang_id', $req['Muatan_Penumpang_id'])
                                        ->where('Kapasitan_Mesin_id', $req['Kapasitan_Mesin_id'])
                                        ->where('Jenis_BBM_id', $req['Jenis_BBM_id'])
                                        ->where('Harga_Sewa_id', $req['Harga_Sewa_id'])
                                        ->where('stok','>','0')
                                        ->get();
                                    break;
                                }
                            }
                        }
                    }
                }
            }
        }
        if ($req['Kondisi_Fisik_id']) {
            # code...
            if ($req['Kondisi_Mesin_id']) {
                # code...
                if ($req['Muatan_Penumpang_id']) {
                    # code...
                    if ($req['Kapasitan_Mesin_id']) {
                        # code...
                        if ($req['Jenis_BBM_id']) {
                            # code...
                            if ($req['Harga_Sewa_id']) {
                                # code...
                                $allCars = car::where('merk_id', $req['merk_id'])
                                    ->where('Kondisi_Fisik_id', $req['Kondisi_Fisik_id'])
                                    ->where('Kondisi_Mesin_id', $req['Kondisi_Mesin_id'])
                                    ->where('Muatan_Penumpang_id', $req['Muatan_Penumpang_id'])
                                    ->where('Kapasitan_Mesin_id', $req['Kapasitan_Mesin_id'])
                                    ->where('Jenis_BBM_id', $req['Jenis_BBM_id'])
                                    ->where('Harga_Sewa_id', $req['Harga_Sewa_id'])
                                    ->where('stok','>','0')
                                    ->get();
                                    break;
                            }
                        }
                    }
                }
            }
        }
        if ($req['Kondisi_Mesin_id']) {
            # code...
            if ($req['Muatan_Penumpang_id']) {
                # code...
                if ($req['Kapasitan_Mesin_id']) {
                    # code...
                    if ($req['Jenis_BBM_id']) {
                        # code...
                        if ($req['Harga_Sewa_id']) {
                            # code...
                            $allCars = car::where('merk_id', $req['merk_id'])
                                ->where('Kondisi_Mesin_id', $req['Kondisi_Mesin_id'])
                                ->where('Muatan_Penumpang_id', $req['Muatan_Penumpang_id'])
                                ->where('Kapasitan_Mesin_id', $req['Kapasitan_Mesin_id'])
                                ->where('Jenis_BBM_id', $req['Jenis_BBM_id'])
                                ->where('Harga_Sewa_id', $req['Harga_Sewa_id'])
                                ->where('stok','>','0')
                                ->get();
                                break;
                        }
                    }
                }
            }
        }
        if ($req['Muatan_Penumpang_id']) {
            # code...
            if ($req['Kapasitan_Mesin_id']) {
                # code...
                if ($req['Jenis_BBM_id']) {
                    # code...
                    if ($req['Harga_Sewa_id']) {
                        # code...
                        $allCars = car::where('merk_id', $req['merk_id'])
                            ->where('Muatan_Penumpang_id', $req['Muatan_Penumpang_id'])
                            ->where('Kapasitan_Mesin_id', $req['Kapasitan_Mesin_id'])
                            ->where('Jenis_BBM_id', $req['Jenis_BBM_id'])
                            ->where('Harga_Sewa_id', $req['Harga_Sewa_id'])
                            ->where('stok','>','0')
                            ->get();
                            break;
                    }
                }
            }
        }
        if ($req['Kapasitan_Mesin_id']) {
            # code...
            if ($req['Jenis_BBM_id']) {
                # code...
                if ($req['Harga_Sewa_id']) {
                    # code...
                    $allCars = car::where('merk_id', $req['merk_id'])
                        ->where('Kapasitan_Mesin_id', $req['Kapasitan_Mesin_id'])
                        ->where('Jenis_BBM_id', $req['Jenis_BBM_id'])
                        ->where('Harga_Sewa_id', $req['Harga_Sewa_id'])
                        ->where('stok','>','0')
                        ->get();
                        break;
                }
            }
        }
        if ($req['Jenis_BBM_id']) {
            # code...
            if ($req['Harga_Sewa_id']) {
                # code...
                $allCars = car::where('merk_id', $req['merk_id'])
                    ->where('Jenis_BBM_id', $req['Jenis_BBM_id'])
                    ->where('Harga_Sewa_id', $req['Harga_Sewa_id'])
                    ->where('stok','>','0')
                    ->get();
                    break;
            }
        }
        if ($req['Harga_Sewa_id']) {
            # code...
            $allCars = car::where('merk_id', $req['merk_id'])
                ->where('Harga_Sewa_id', $req['Harga_Sewa_id'])
                ->where('stok','>','0')
                ->get();
                break;
        }
    }

    if ($req->Tahun_Produksi_id) {
        # code...

    }

    if ($req->Kondisi_Fisik_id) {
        # code...

    }

    if ($req->Kondisi_Mesin_id) {
        # code...

    }

    if ($req->Muatan_Penumpang_id) {
        # code...

    }

    if ($req->Kapasitan_Mesin_id) {
        # code...

    }

    if ($req->Jenis_BBM_id) {
        # code...

    }

    if ($req->Harga_Sewa_id) {
        # code...

    }
}

OTHER    =================================================================
