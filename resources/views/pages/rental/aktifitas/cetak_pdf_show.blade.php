<html>
    <head>
        <title>Laporan Rental Mobil</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <style>
            h3 {
                font-size: 23pt !important;
            }
            body {
                width: 230mm;
                height: 100%;
                margin: 0 auto;
                padding: 0;
                background: rgb(204,204,204);
            }
            * {
                box-sizing: border-box;
                -moz-box-sizing: border-box;
            }
            table {
                font-size: 16pt;
            }
            td, h3, h4, p {
                font-family: 'Times New Roman', Times, serif;
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
        <div class="main-page">
            <div class="sub-page">
                <h3 align='center' class="mt-3">LAPORAN PERSONAL PEMINJAMAN MOBIL {{ $shop->nm_usaha }}</h3>
                    <table class="mt-5" style="margin-left: 1cm;">
                        <tr class="mb-5">
                            <td style="width: 40%;">Nama Peminjam</td>
                            <td style="width: 10%;">&nbsp;&nbsp;&nbsp;:</td>
                            <td style="width: 50%;">{{ $histories->nama_pinjam }}</td>
                        </tr>
                        <tr>
                            <td style="width: 40%;">NIK Peminjam</td>
                            <td style="width: 10%;">&nbsp;&nbsp;&nbsp;:</td>
                            <td style="width: 50%;">{{ $histories->nik_pinjam }}</td>
                        </tr>
                        <tr>
                            <td style="width: 40%;">No Polisi</td>
                            <td style="width: 10%;">&nbsp;&nbsp;&nbsp;:</td>
                            <td style="width: 50%;">{{ $cars->no_polisi }}</td>
                        </tr>
                        <tr>
                            <td style="width: 40%;">Merk Mobil</td>
                            <td style="width: 10%;">&nbsp;&nbsp;&nbsp;:</td>
                            <td style="width: 50%;">{{ $cars->merk->nama }}</td>
                        </tr>
                        <tr>
                            <td style="width: 40%;">Tahun Mobil</td>
                            <td style="width: 10%;">&nbsp;&nbsp;&nbsp;:</td>
                            <td style="width: 50%;">{{ $cars->tahun_produksi->nama }}</td>
                        </tr>
                        <tr>
                            <td style="width: 40%;">CC Mobil</td>
                            <td style="width: 10%;">&nbsp;&nbsp;&nbsp;:</td>
                            <td style="width: 50%;">{{ $cars->kapasitas_mesin->nama }}</td>
                        </tr>
                        <tr>
                            <td style="width: 40%;">Harga Mobil</td>
                            <td style="width: 10%;">&nbsp;&nbsp;&nbsp;:</td>
                            <td style="width: 50%;">{{ "Rp. " . number_format($cars->harga_sewa->nama,2,',','.') }}/hari</td>
                        </tr>
                        <tr>
                            <td style="width: 40%;">Tanggal Peminjaman</td>
                            <td style="width: 10%;">&nbsp;&nbsp;&nbsp;:</td>
                            <td style="width: 50%;">{{ $histories->tgl_pinjam }}</td>
                        </tr>
                        <tr>
                            <td style="width: 40%;">Batas Peminjaman</td>
                            <td style="width: 10%;">&nbsp;&nbsp;&nbsp;:</td>
                            <td style="width: 50%;">{{ $histories->batas_pinjam }}</td>
                        </tr>
                    </table>
                    <h4 style="margin-top: 2cm; margin-left: 0.5cm">Berkas Pemijaman Mobil Rental :</h4>
                    <div class="row">
                        <div class="col-sm-6 mb-4">
                            <p class="m-b-10 f-w-600">KTP</p>
                            <img src="{{ isset($histories->ktp_peminjam) == null ? url('images/notfound.png') : asset('storage/' . $histories->ktp_peminjam) }}" alt="#" class="img-fluid">
                        </div>
                        <div class="col-sm-6 mb-4">
                            <p class="m-b-10 f-w-600">SIM</p>
                            <img src="{{ isset($histories->sim_peminjam) == null ? url('images/notfound.png') : asset('storage/' . $histories->sim_peminjam) }}" alt="#" class="img-fluid">
                        </div>
                        <div class="col-sm-6 mb-4">
                            <p class="m-b-10 f-w-600">PAS PHOTO</p>
                            <img src="{{ isset($histories->foto_peminjam) == null ? url('images/notfound.png') : asset('storage/' . $histories->foto_peminjam) }}" alt="#" class="img-fluid">
                        </div>
                        <div class="col-sm-6 mb-4">
                            <img src="" alt="#" class="img-fluid" hidden>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
        <script>
            window.print();
        </script>
    </body>
</html>
