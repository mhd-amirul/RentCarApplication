@extends('layouts.main')

@section('container')
<div class="row justify-content-center mt-5">
    {{-- <div class="col-lg-12">
        <div class="card px-5 py-5">
            <h2 class="text-center m-b-20 p-b-5 b-b-default f-w-600">PERHITUNGAN HASIL SISTEM REKOMENDASI RENTAL MOBIL</h2>
        </div>
    </div> --}}
    <div class="col-lg-12 justify-content-center">
        <div class="row">
            <div class="col-lg-12">
                <div class="card px-5 pt-5">
                    <h4 class="m-b-20 p-b-5 b-b-default f-w-600">Pengambilan data kriteria dan alternatif dari database</h4>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card px-5 py-5">
                    <h3>Kriteria</h3>
                    <table class="table table-responsive table-hover">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Bobot</th>
                                <th>Type</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kriteria as $krit)
                                <tr>
                                    <td>{{ $krit->nama }}</td>
                                    <td>{{ $krit->bobot }}</td>
                                    <td>{{ $krit->type }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card px-5 py-5">
                    <h3>Alternatif</h3>
                    <table class="table table-responsive table-hover">
                        <thead>
                            <tr>
                                <th>Kriteria</th>
                                <th>Alternatif</th>
                                <th>Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($alternatif as $alter)
                                <tr>
                                    <td>{{ $alter->kriteria->nama }}</td>
                                    <td>{{ $alter->nama }}</td>
                                    <td>{{ $alter->nilai }}</td>
                                </tr>
                            @endforeach
                                <tr>{{ $alternatif->links() }}</tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card px-5 pt-5">
                    <h4 class="m-b-20 p-b-5 b-b-default f-w-600">Pengambilan mobil hasil filter pengguna beserta nilainya yang akan dibentuk ke matriks keputusan</h4>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card px-5 py-5">
                    <h3>Mobil filter (belum diproses)</h3>
                    <table class="table table-responsive table-hover text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                @foreach ($kriteria as $krit)
                                    <th>{{ $krit->nama }}_id</th>
                                @endforeach
                                </tr>
                        </thead>
                        <tbody>
                            @foreach ($allCars as $car)
                                <tr>
                                    <td>{{ $car->id }}</td>
                                    <td>{{ $car->merk_id }}</td>
                                    <td>{{ $car->Tahun_Produksi_id }}</td>
                                    <td>{{ $car->Kondisi_Fisik_id }}</td>
                                    <td>{{ $car->Kondisi_Mesin_id }}</td>
                                    <td>{{ $car->Muatan_Penumpang_id }}</td>
                                    <td>{{ $car->Kapasitas_Mesin_id }}</td>
                                    <td>{{ $car->Jenis_BBM_id }}</td>
                                    <td>{{ $car->Harga_Sewa_id }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card px-5 py-5">
                    <h3>Nilai alternatif</h3>
                    <table class="table table-responsive table-hover text-center">
                        <thead>
                            <tr>
                                <th>ID Mobil</th>
                                <th colspan="8">Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sample as $id_car => $value)
                                <tr>
                                    <td>{{ $id_car }}</td>
                                    @foreach ($kriteria2 as $id_kriteria => $value)
                                        @if (isset($sample[$id_car][$id_kriteria]))
                                            <td>{{ $sample[$id_car][$id_kriteria] }}</td>
                                        @endif
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card px-5 pt-5">
                    <div class="row">
                        <div class="col-sm-6">
                            <h4 class="m-b-20 p-b-5 b-b-default f-w-600">Normalisasi matriks keputusan</h4>
                        </div>
                        <div class="col-sm-6">
                            <h4 class="m-b-20 p-b-5 b-b-default f-w-600">Kemudian optimasi hasil normalisasi</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card px-5 py-5">
                    <h3>Normalisasi</h3>
                    <table class="table table-responsive table-hover text-center">
                        <thead>
                            <tr>
                                <th>ID Mobil</th>
                                <th colspan="8">Hasil Normalisasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($normal as $id_car => $value)
                                <tr>
                                    <td>{{ $id_car }}</td>
                                    @foreach ($kriteria2 as $id_kriteria => $value)
                                        @if (isset($normal[$id_car][$id_kriteria]))
                                            <td>{{ $normal[$id_car][$id_kriteria] }}</td>
                                        @endif
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card px-5 pt-5">
                    <div class="row">
                        <div class="col-sm-6">
                            <h4 class="m-b-20 p-b-5 b-b-default f-w-600">Hasil Optimasi</h4>
                        </div>
                        <div class="col-sm-6">
                            <h4 class="m-b-20 p-b-5 b-b-default f-w-600">Perangkingan</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card px-5 py-5">
                    <h3>Optimasi</h3>
                    <table class="table table-responsive table-hover text-center">
                        <thead>
                            <tr>
                                <th>ID Mobil</th>
                                <th>Hasil Optimasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($optimasi as $id_car => $value)
                                <tr>
                                    <td>{{ $id_car }}</td>
                                    <td>{{ $optimasi[$id_car] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card px-5 py-5">
                    <h3>Perangkingan</h3>
                    <table class="table table-responsive table-hover text-center">
                        <thead>
                            <tr>
                                <th>Rangking</th>
                                <th>ID Mobil</th>
                                <th>Nilai Akhir</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cars as $id)
                                <tr>
                                    <td>{{ $id->ranking }}</td>
                                    <td>{{ $id->id }}</td>
                                    <td>{{ $id->nilai }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card px-5 pt-5">
                    <h4 class="m-b-20 p-b-5 b-b-default f-w-600">Hasil rekomendasi mobil rental</h4>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card px-5 py-5">
                    <table class="table table-responsive table-hover text-center">
                        <thead>
                            <tr>
                                <th scope="col">Ranking</th>
                                <th scope="col">ID</th>
                                <th scope="col">No Polisi</th>
                                <th scope="col">Merk</th>
                                <th scope="col">Tahun</th>
                                <th scope="col">Konfisi Fisik</th>
                                <th scope="col">Kondisi Mesin</th>
                                <th scope="col">Seater</th>
                                <th scope="col">CC</th>
                                <th scope="col">Jenis BBM</th>
                                <th scope="col">Harga Sewa</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cars as $car)
                                <tr>
                                    <th scope="row">{{ $car->ranking }}</th>
                                    <td>{{ $car->id }}</td>
                                    <td>{{ $car->no_polisi }}</td>
                                    <td>{{ $car->merk->nama }}</td>
                                    <td>{{ $car->tahun_produksi->nama }}</td>
                                    <td>{{ $car->kondisi_fisik->nama }}</td>
                                    <td>{{ $car->kondisi_mesin->nama }}</td>
                                    <td>{{ $car->muatan_penumpang->nama }}</td>
                                    <td>{{ $car->kapasitas_mesin->nama }}</td>
                                    <td>{{ $car->jenis_bbm->nama }}</td>
                                    <td>{{ "Rp. " . number_format($car->harga_sewa->nama,2,',','.') . '\hari' }}</td>
                                    <td>{{ $car->stok }}</td>
                                    <td>
                                        <a href="{{ route('detailMobil', $car->slug) }}" class="btn btn-sm btn-info">
                                            <i class="bi bi-eye-fill" style="color: rgb(0, 0, 0);"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        {{-- <div class="row justify-content-start">
            <div class="col-lg-12 mt-4">
                <div class="card px-5 pt-5">
                    <h4 class="m-b-20 p-b-5 b-b-default f-w-600 text-center">HASIL REKOMENDASI</h4>
                </div>
            </div>
            @if ($cars)
                <div class="col-lg-6">
                    <div class="card pt-3 pb-3">
                        <div id="container" class="mt-5 mx-3"></div>
                    </div>
                </div>
            @else
            @endif
            @forelse( $cars as $car )
                @if ($car->ranking == 1)
                    <div class="col-sm-6">
                        <div class="card mb-3 text-center">
                            <div style="max-height: 350px; overflow: hidden;" class="bg-dark">
                                <img src="{{ isset($car->gambar1) == null ? url('images/notfound.png') : asset('storage/' . $car->gambar1) }}" alt="" class="img-fluid">
                            </div>

                            <div class="card-body">
                                <h4 class="card-title" id="rank{{ $car->ranking }}">Rank. {{ $car->ranking }}</h4>
                                <h3 class="card-title">Merk : {{ $car->merk->nama }}</h3>
                                <p>
                                    <small>
                                        <a href="{{ route('profileToko', $car->shop->slug) }}" class="text-decoration-none">{{ $car->shop->nm_usaha }}</a> {{ $car->created_at->diffForHumans() }}
                                    </small>
                                </p>
                                <div class="row justify-content-center">
                                    <div class="col-sm-5">
                                        <p class="card-text">Tahun Produksi : {{ $car->tahun_produksi->nama }}, Muatan Penumpang : {{ $car->muatan_penumpang->nama }}, Harga Sewa : {{ "Rp. " . number_format($car->harga_sewa->nama,2,',','.') }}/hari</p>
                                        <a href="{{ route('detailMobil', $car->slug) }}" class="btn btn-sm btn-primary w-100">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @empty
                <h1 class="text-center mt-2" style="margin-bottom: 7cm">MOBIL TIDAK DITEMUKAN</h1>
            @endforelse
            <div class="row justify-content-center ml-1">
                @forelse ($cars as $car)
                    @if ($car->ranking != 1)
                        <div class="col-sm-4 mb-3">
                            <div class="card">
                                <img src="{{ isset($car->gambar1) == null ? url('images/notfound.png') : asset('storage/' . $car->gambar1) }}" alt="{{ $car->merk->nama }}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Rank. {{ $car->ranking }}</h5>
                                    <h4 class="card-title">Merk : {{ $car->merk->nama }}</h4>
                                    <p>
                                        <small>
                                            <a href="{{ route('profileToko', $car->shop->slug) }}" class="text-decoration-none">{{ $car->shop->nm_usaha }}</a>
                                            {{ $car->created_at->diffForHumans() }}
                                        </small>
                                    </p>
                                    <p class="card-text">Tahun Produksi : {{ $car->tahun_produksi->nama }}, Muatan Penumpang : {{ $car->muatan_penumpang->nama }}, Harga Sewa : {{ "Rp. " . number_format($car->harga_sewa->nama,2,',','.') }}</p>
                                    <a href="{{ route('detailMobil', $car->slug) }}" class="btn btn-sm btn-primary">Detail</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @empty
                    <p></p>
                @endforelse
            </div>
        </div> --}}
    </div>
</div>
@endsection

@push('trix')
    <style>
        #container {
            height: 500px;
        }

        .highcharts-figure,
        .highcharts-data-table table {
            min-width: 320px;
            max-width: 700px;
            /* margin: 1em auto; */
        }

        .highcharts-data-table table {
            font-family: Verdana, sans-serif;
            border-collapse: collapse;
            border: 1px solid #ebebeb;
            margin: 10px auto;
            text-align: center;
            width: 100%;
            max-width: 500px;
        }

        .highcharts-data-table caption {
            padding: 1em 0;
            font-size: 1.2em;
            color: #555;
        }

        .highcharts-data-table th {
            font-weight: 600;
            padding: 0.5em;
        }

        .highcharts-data-table td,
        .highcharts-data-table th,
        .highcharts-data-table caption {
            padding: 0.5em;
        }

        .highcharts-data-table thead tr,
        .highcharts-data-table tr:nth-child(even) {
            background: #f8f8f8;
        }

        .highcharts-data-table tr:hover {
            background: #f1f7ff;
        }
    </style>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/variable-pie.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

@endpush

@push('script-map')
    <script type="text/javascript">
        const array = {!! json_encode($cars) !!}
        var data = [], len = array.length, i = 0;
        console.log(array)
        for(i;i<len;i++){
            data.push({
                name: array[i].merk.nama,
                rank: "Rank. " + array[i].ranking,
                tahun: array[i].tahun_produksi.nama,
                seater: array[i].muatan_penumpang.nama,
                harga: array[i].harga_sewa.nama,
                // nilai akhir
                y: array[i].nilai,
                z: array[i].nilai
            });
        }

        $(function() {
            Highcharts.chart('container', {
                chart: {
                    type: 'variablepie'
                },
                title: {
                    text: 'Chart Hasil Rekomendasi Mobil Rental'
                },
                tooltip: {
                    headerFormat: '',
                    pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
                        'Rank : {point.rank}<br/>' +
                        'Tahun : {point.tahun}<br/>' +
                        'Seater : {point.seater}<br/>' +
                        'Harga : {point.harga}<br/>' +
                        'Rasio : {point.y}<br/>'
                        // 'Nilai  : {point.z}<br/>'
                },
                series: [{
                    minPointSize: 10,
                    innerSize: '20%',
                    zMin: 0,
                    name: 'countries',
                    data: data
                }]
            });
        });
    </script>
@endpush
