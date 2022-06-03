public function store(CreateMobilRequest $request)
    {

        $data = $request->all();
        if ($request->file('gambar1')) {
            $data['gambar1'] = $request->file('gambar1')->store('gambar1');
        }
        if ($request->file('gambar2')) {
            $data['gambar2'] = $request->file('gambar2')->store('gambar2');
        }
        if ($request->file('gambar3')) {
            $data['gambar3'] = $request->file('gambar3')->store('gambar3');
        }
        if ($request->file('gambar4')) {
            $data['gambar4'] = $request->file('gambar4')->store('gambar4');
        }
        if ($request->file('gambar5')) {
            $data['gambar5'] = $request->file('gambar5')->store('gambar5');
        }

        $data['user_id'] = auth()->user()->id;
        $shop = shop::where('user_id', $data['user_id'])->first();
        $data['shop_id'] = $shop->id;
        $car = car::create($data);

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

        // return response()->json($kriteria1);
        return redirect()->route('shop.index')->with('success', 'Berhasil Menambah Mobil Baru');
    }