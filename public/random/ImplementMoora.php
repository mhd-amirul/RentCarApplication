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

         $allCars = car::all();
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

         // MENAMPILKAN PERUBAHAN NILAI KE ANGKA
         echo "NILAI DARI ALTERNATIF <br>=========================================<br>";
         foreach ($sample as $id_car => $value) {
               foreach ($kriteria as $id_kriteria => $value) {
                  echo $sample[$id_car][$id_kriteria]." | ";
               }
               echo "<br>";
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

         // MENAMPILKAN NORMALISASI MATRIX
         echo "<br>HASIL PERHITUNGAN NORMALISASI MATRIX <br>=========================================<br>";
         foreach ($normal as $id_normal => $value) {
               foreach ($kriteria as $id_kriteria => $value) {
                  echo $normal[$id_normal][$id_kriteria]." | ";
               }
               echo "<br>";
         }

         //MENGHITUNG NILAI OPTIMASI
         echo "<br>=======================================================================<br>";
         $optimasi = [];
         foreach($alternatif as $id_cars => $a){
               $optimasi[$id_cars] = 0;
               foreach($kriteria as $id_kriteria => $k){
                  // echo "(".$normal[$id_cars][$id_kriteria].")";
                  echo $data[$id_cars] = $normal[$id_cars][$id_kriteria] * $k[2]; echo "(".$k[2].")"." | ";
                  if ($k[1] == 'benefit') {
                     $optimasi[$id_cars] += $data[$id_cars];
                  } else {
                     $optimasi[$id_cars] -= $data[$id_cars];
                  }
               }
               echo "<br>";
         }

         //menampilkan NILAI OPTIMASI
         echo "<br> HASIL AKHIR OPTIMASI <br>=========================================<br>";
         foreach ($optimasi as $id_optimasi => $value) {
               echo "[".$id_optimasi."]"." = ".$optimasi[$id_optimasi];
               echo "<br>=========================================<br>";
         }

         // return response()->json($optimasi);

         arsort($optimasi);
         $index = key($optimasi);

         //-- menampilkan hasil akhir
         echo "<br> PERANGKINGAN <br>=========================================<br>";
         foreach ($optimasi as $id_optimasi => $value) {
               echo "[".$id_optimasi."]"." = ".$optimasi[$id_optimasi];
               echo "<br>=========================================<br>";
         }
         dd($optimasi);
      }