<html>
    <head>
        <title>Laporan Rental Mobil</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <style>
            body {
                width: 230mm;
                height: 100%;
                margin: 0 auto;
                padding: 0;
                font-size: 12pt;
                background: rgb(204,204,204);
            }
            * {
                box-sizing: border-box;
                -moz-box-sizing: border-box;
            }

            .main-page {
                width: 210mm;
                min-height: 297mm;
                margin: 10mm auto;
                background: white;
                box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
            }
            .sub-page {
                padding: 2cm;
                height: 297mm;
            }
            @page {
                size: A4;
                margin: 0;
            }
            @media print {
                html, body {
                    width: 210mm;
                    height: 297mm;
                }
                .main-page {
                    margin: 0;
                    border: initial;
                    border-radius: initial;
                    width: initial;
                    min-height: initial;
                    box-shadow: initial;
                    background: initial;
                    page-break-after: always;
                }
            }
        </style>
    </head>
    <body>
        @foreach ($histories as $history)
        <div class="main-page">
            <div class="sub-page">
                <h3 align='center'>LAPORAN PEMINJAMAN MOBIL RENTAL</h3>
                <div class="row mt-5 justify-content-center my-5">
                    <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>NO.</th>
                                    <th>NAMA PEMINJAM</th>
                                    <th>NIK PEMINJAM</th>
                                    <th>TANGGAL PEMINJAMAN</th>
                                    <th>BATAS TANGGAL</th>
                                    <th>STATUS</th>
                                    <th>WAKTU PEMINAJAMAN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <td>{{ $history->nama_pinjam }}</td>
                                    <td>{{ $history->nik_pinjam }}</td>
                                    <td>{{ $history->tgl_pinjam }}</td>
                                    <td>{{ $history->batas_pinjam }}</td>
                                    <td>{{ $history->status }}</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td colspan="2">
                                        <div style="max-height: 200px; max-width: 300px; overflow: hidden;" class="border border-dark">
                                            <img src="{{ isset($history->sim_peminjam) == null ? url('images/notfound.png') : asset('storage/' . $history->sim_peminjam) }}" alt="#" class="img-fluid">
                                        </div>
                                    </td>
                                    <td colspan="2">
                                        <div style="max-height: 200px; max-width: 300px; overflow: hidden;" class="border border-dark">
                                            <img src="{{ isset($history->ktp_peminjam) == null ? url('images/notfound.png') : asset('storage/' . $history->ktp_peminjam) }}" alt="#" class="img-fluid">
                                        </div>
                                    </td>
                                    <td colspan="2">
                                        <div style="max-height: 200px; max-width: 300px; overflow: hidden;" class="border border-dark">
                                            <img src="{{ isset($history->foto_peminjam) == null ? url('images/notfound.png') : asset('storage/' . $history->foto_peminjam) }}" alt="#" class="img-fluid">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>ID</th>
                                    <th>MERK</th>
                                    <th>TAHUN PRODUKSI</th>
                                    <th>HARGA SEWA</th>
                                    <th>NO POLISI</th>
                                    <th>TOKO</th>
                                </tr>
                            </thead>
                            @foreach ($cars as $car)
                                @if ($car->id == $history->car_id)
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>{{ $car->id }}</td>
                                            <td>{{ $car->merk->nama }}</td>
                                            <td>{{ $car->tahun_produksi->nama }}</td>
                                            <td>{{ $car->harga_sewa->nama }}</td>
                                            <td>{{ $car->no_polisi }}</td>
                                            <td>{{ $car->shop->nm_usaha }}</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td colspan="2">
                                                <div style="max-height: 200px; max-width: 300px; overflow: hidden;" class="border border-dark">
                                                    <img src="{{ isset($car->gambar1) == null ? url('images/notfound.png') : asset('storage/' . $car->gambar1) }}" alt="#" class="img-fluid">
                                                </div>
                                            </td>
                                            <td colspan="2">
                                                <div style="max-height: 200px; max-width: 300px; overflow: hidden;" class="border border-dark">
                                                    <img src="{{ isset($car->gambar2) == null ? url('images/notfound.png') : asset('storage/' . $car->gambar2) }}" alt="#" class="img-fluid">
                                                </div>
                                            </td>
                                            <td colspan="2">
                                                <div style="max-height: 200px; max-width: 300px; overflow: hidden;" class="border border-dark">
                                                    <img src="{{ isset($car->gambar3) == null ? url('images/notfound.png') : asset('storage/' . $car->gambar3) }}" alt="#" class="img-fluid">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                @endif
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
        @endforeach

        <script>
            window.print();
        </script>
    </body>
</html>
