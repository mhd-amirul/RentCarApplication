@extends('layouts.main')

@section('container')
@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<h2 class="text-center">DASHBOARD ADMIN</h2><hr>
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-primary">
                <div class="card-body">
                    <div class="pt-1">
                        <a class="text-white fs-3" href="{{ route('allusers.index') }}">
                            <i class="mr-2 bi bi-person-fill"> Pengguna</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--/.col-->
        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-danger">
                <div class="card-body">
                    <div class="pt-1">
                        <a class="text-white fs-3" href="{{ route('allshops.index') }}">
                            <i class="mr-2 bi bi-house-fill"> Toko</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--/.col-->
        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-warning">
                <div class="card-body">
                    <div class="pt-1">
                        <a class="text-white fs-3" href="{{ route('allkriteria.index') }}">
                            <i class="mr-2 bi bi-card-list"> Kriteria</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--/.col-->
        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-success">
                <div class="card-body">
                    <div class="pt-1">
                        <a class="text-white fs-3" href="{{ route('allalternatif.index') }}">
                            <i class="mr-2 bi bi-blockquote-right"> Alternatif</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="card mb-3 mt-2 bg-secondary text-white">
    <div class="card-body p-2">
        <h6 class="card-title m-0">Pendaftar Toko : </h5>
    </div>
</div>

<form action="{{ route('dashboard.index') }}">
    <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="search.." name="searchms" value="{{ request('searchms') }}">
    <button class="btn btn-secondary" type="submit">Search</button>
</div>
</form>

@if ($makeshop->count())
<div class="container">
    <div class="row">
        @foreach( $makeshop as $ms )
            <div class="col-md-3 mb-3">
                <div class="card">
                    @if ($ms->pas_foto)
                        <div style="max-height: 166px; overflow: hidden;" class="bg-dark">
                            <img src="{{ asset('storage/' . $ms->pas_foto) }}" alt="" class="img-fluid">
                        </div>
                    @else
                        <img src="{{ url('images/notfound.png') }}" alt="null" class="card-img-top">
                    @endif
                    <div class="card-body">
                        <p class="card-text">
                            User ID : {{ $ms->user_id }} <br>
                            Nama Pemilik : {{ $ms->nm_pu }} <br>
                            Nama Usaha : {{ $ms->nm_usaha }} <br>
                        </p>
                        <a href="{{ route('dashboard.show',$ms->id) }}" class="btn-sm btn-primary">
                            <i class="bi bi-eye-fill" style="color: rgb(0, 0, 0);"></i> Detail
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@else
    <p class="text-center fs-4 mt-5 mb-5">Pencarian tidak ditemukan!</p>
@endif

<div class="panel">
    <div id="Chart-admin">

    </div>
</div>
@endsection

{{-- @section('chart-Script')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>

    Highcharts.chart('Chart-admin', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Data Rekam Sistem Rekomendasi Rental'
    },
    subtitle: {
        text: 'Source: CarRental.com'
    },
    xAxis: {
        categories: [
            'Jumlah Data'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah Data'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'User',
        data: [49.9]

    }, {
        name: 'Shop',
        data: [83.6]

    }, {
        name: 'Car',
        data: [48.9]

    },{
        name: 'Kriteria',
        data: [48.9]

    }, {
        name: 'Alternatif',
        data: [42.4]

    }]
});
</script>
@endsection --}}

