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
{{-- <div class="table-responsive">
	<table class="table table-bordered table-striped">
	</table>
</div> --}}
@if ($makeshop->count())
<div class="container">
    <div class="row">
        @foreach( $makeshop as $ms )
            <div class="col-md-3 mb-3">
                <div class="card">
                    @if ($ms->pas_foto)
                        {{-- <img src="{{ asset('storage/' . $ms->pas_foto) }}" alt="{{ $ms->pas_foto }}" class="card-img-top"> --}}
                        <div style="max-height: 166px; overflow: hidden;" class="bg-dark">
                            <img src="{{ asset('storage/' . $ms->pas_foto) }}" alt="" class="img-fluid">
                        </div>
                    @else
                        <img src="{{ url('images/notfound.png') }}" alt="null" class="card-img-top">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $ms->nm_usaha }}</h5>
                        <p>
                            <small>
                                Pemilik : <a href="#" class="text-decoration-none text-black">{{ $ms->nm_pu }}</a>
                            </small>
                        </p>
                        <p class="card-text">
                            User ID : {{ $ms->user_id }} <br> Alamat : {{ $ms->alamat }} <br> NIK : {{ $ms->nik }} <br> Created At : {{ $ms->created_at }}
                        </p>

                        <form action="{{ route('dashboard.store') }}" method="post" class="d-inline">
                        @csrf
                            <input type="text" name="user_id" value="{{ $ms->user_id }}" hidden>
                            <input type="text" name="nm_pu" value="{{ $ms->nm_pu }}" hidden>
                            <input type="text" name="nm_usaha" value="{{ $ms->nm_usaha }}" hidden>
                            <input type="text" name="alamat" value="{{ $ms->alamat }}" hidden>
                            <input type="text" name="nik" value="{{ $ms->nik }}" hidden>
                            <input type="text" name="img_ktp" value="{{ $ms->img_ktp }}" hidden>
                            <input type="text" name="img_siu" value="{{ $ms->img_siu }}" hidden>
                            <input type="text" name="pas_foto" value="{{ $ms->pas_foto }}" hidden>
                            <input type="text" name="foto_usaha" value="{{ $ms->foto_usaha }}" hidden>
                            <button class="btn-sm btn-success border-0" style="color: rgb(0, 0, 0);" onclick="return confirm('Yakin Ingin Menghapus?')">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                        </form>
                        <a href="{{ route('dashboard.show',$ms->id) }}" class="btn-sm btn-primary"><i class="bi bi-eye-fill" style="color: rgb(0, 0, 0);"></i></a>

                        <form action="{{ route('dashboard.destroy', $ms->id) }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn-sm btn-danger border-0" style="color: rgb(0, 0, 0);" onclick="return confirm('Yakin Ingin Menghapus?')">
                                <i class="bi bi-trash-fill"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@else
    <p class="text-center fs-4 mt-5 mb-5">Empty !!!</p>
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

