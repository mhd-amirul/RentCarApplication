@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-start">
        <div class="col-lg-12 mt-4">
            <div class="card px-5 pt-5">
                <h4 class="m-b-20 p-b-5 b-b-default f-w-600 text-center">HASIL REKOMENDASI</h4>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card pt-3 pb-3">
                    <div id="container" class="mt-5 mx-3"></div>
            </div>
        </div>
        @forelse( $cars as $car )
            @if ($loop->first)
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
            @else
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
            <h1 class="text-center mt-2" style="margin-bottom: 7cm">MOBIL TIDAK DITEMUKAN</h1>
        @endforelse
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
    {{-- <script type="text/javascript">
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
                        'Tahun : {point.tahun}<br/>' +
                        'Seater : {point.seater}<br/>' +
                        'CC : {point.CC}<br/>' +
                        'BBM : {point.BBM}<br/>' +
                        'Harga : {point.Harga}<br/>' +
                        'y : {point.y}<br/>' +
                        'z : {point.z}<br/>'
                },
                series: [{
                    minPointSize: 10,
                    innerSize: '20%',
                    zMin: 0,
                    name: 'countries',
                    data: [
                        {
                            name: 'Rank. 1 : Avanza',
                            tahun: 2020,
                            seater:7,
                            CC:1500+'cc',
                            BBM:'Pertalite',
                            Harga:400000,
                            // nilai akhir
                            y: 505370,
                            z: 92.9
                        }
                    ]
                }]
            });
        });
    </script> --}}
@endpush

@push('script-map')
<script type="text/javascript">
    const array = {!! json_encode($cars) !!}
    var data = [], len = array.length, i = 0;
    console.log(array)
    for(i;i<len;i++){
        data.push({
            name: "Rank. " + array[i].merk.nama,
            tahun: array[i].tahun_produksi.nama,
            seater: array[i].muatan_penumpang.nama,
            harga: array[i].harga_sewa.nama,
            // nilai akhir
            y: array[i].nilai,
            z: 92.9
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
                    'Tahun : {point.tahun}<br/>' +
                    'Seater : {point.seater}<br/>' +
                    'Harga : {point.harga}<br/>' +
                    'y : {point.y}<br/>' +
                    'z : {point.z}<br/>'
            },
            series: [{
                minPointSize: 10,
                innerSize: '20%',
                zMin: 0,
                name: 'countries',
                data: data
                // [
                //     {
                //         name: 'Rank. 1 : Avanza',
                //         tahun: 2020,
                //         seater:7,
                //         harga:400000,
                //         // nilai akhir
                //         y: 505370,
                //         z: 92.9
                //     }
                // ]
            }]
        });
    });
</script>
@endpush
