<html>
    <head>
        <title>Laporan Rental Mobil</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <style>
            h3 {
                font-size: 14pt;
            }
            body {
                width: 100%;
                height: 100%;
                padding: 0;
                background: rgb(204,204,204);
            }
            * {
                box-sizing: border-box;
                -moz-box-sizing: border-box;
            }
            table {
                font-size: 8pt;
                margin: 0.5cm;
                margin-top: 0;
            }

            .main-page {
                width: 100%;
                min-height: 100%;
                background: white;
                box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
            }
            .sub-page {
                padding: 0.3cm;
                height: 210mm;
            }
            @page {
                size: landscape;
                margin-top: 1cm;
                margin-bottom: 0;
                margin-left: 0;
                margin-right: 0;
            }
            @media print {
                html, body {
                    width: 297mm;
                    height: 210mm;
                }
                .main-page {
                    margin: 1cm;
                    border: initial;
                    border-radius: initial;
                    width: initial;
                    min-height: initial;
                    box-shadow: initial;
                    background: initial;
                    page-break-inside: auto;
                    page-break-after: always;
                }
            }
        </style>
    </head>
    <body style="background: rgb(204,204,204);">
        <div class="main-page">
            <div class="sub-page">
                <h3 align='center'>LAPORAN PEMINJAMAN MOBIL RENTAL</h3>

                <div class="row mt-3">
                    <table class="table table-bordered">
                        <thead class="text-center">
                                <tr>
                                    <th>NO.</th>
                                    <th>NAMA</th>
                                    <th>NIK</th>
                                    <th>NO. POL</th>
                                    <th>MERK</th>
                                    <th>TAHUN</th>
                                    <th>CC</th>
                                    <th>HARGA</th>
                                    <th>TOKO</th>
                                    <th>TGL PINJAM</th>
                                    <th>TGL BATAS</th>
                                    <th>SISA WAKTU</th>
                                </tr>
                            </thead>
                            @foreach ($histories as $history)
                            <tbody class="text-left">
                                <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <td>{{ $history->nama_pinjam }}</td>
                                    <td>{{ $history->nik_pinjam }}</td>
                                    @foreach ($cars as $car)
                                        @if ($car->id == $history->car_id)
                                        <td>{{ $car->no_polisi }}</td>
                                            <td>{{ $car->merk->nama }}</td>
                                            <td>{{ $car->tahun_produksi->nama }}</td>
                                            <td>{{ $car->kapasitas_mesin->nama }}</td>
                                            <td>{{ number_format($car->harga_sewa->nama,2,',','.') }}</td>
                                            <td>{{ $car->shop->nm_usaha }}</td>
                                        @endif
                                    @endforeach
                                    <td>{{ $history->tgl_pinjam }}</td>
                                    <td>{{ $history->batas_pinjam }}</td>
                                    <td>{{ $history->sisa_waktu != null ? $history->sisa_waktu : '0' }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                    </table>
                </div>

            </div>
        </div>

        <script>
            window.print();
        </script>
    </body>
</html>
