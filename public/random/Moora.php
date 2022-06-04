<!-- controller Add Car  -->
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



        <!-- CONTROLLER -->
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