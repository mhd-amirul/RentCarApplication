@extends('layouts.main')

@section('container')
{{-- @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif --}}

<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card px-4 py-4 border border-grey-500">
            <h2 class="m-b-20 p-b-5 b-b-default mt-3 text-center">LAPORAN AKTIFITAS</h2>
            <div class="row">
                <div class="col-sm-12">
                    <a href="{{ route('toko.index') }}" class="btn btn-dark"><i class="bi bi-arrow-left-circle"></i> Back</a>
                    <a href="{{ route('activityAdd',$shop->id) }}" class="btn btn-primary"><i class="bi bi-file-earmark-plus"></i> Tambah</a>
                    <a href="" class="btn btn-secondary"><i class="bi bi-clock-history"></i>  History</a>
                    <a target="blank" href="{{ route('activityViewCetak', $shop->id) }}" class="btn btn-success"><i class="bi bi-printer-fill"></i>  Print</a>
                </div>

                {{--
                <div class="col-lg-2">
                    <div class="card text-white bg-success">
                        <div class="card-body">
                            <div class="pt-1">
                                <a class="text-white fs-6" href="{{ route('allalternatif.index') }}">
                                    <i class="mr-2 bi bi-blockquote-right"> Alternatif</i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="row justify-content-start mt-3">
                <div class="col-md-12">
                    <table class="table table-responsive table-hover text-center">
                        <thead>
                            <tr >
                                <th scope="col">No</th>
                                <th scope="col">Nama Peminjam</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Tgl Peminjaman</th>
                                <th scope="col">batas Peminjaman</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($histories as $h)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $h->nama_pinjam }}</td>
                                    <td>{{ $h->nik_pinjam }}</td>
                                    <td>{{ $h->tgl_pinjam }}</td>
                                    <td>{{ $h->batas_pinjam }}</td>
                                    <td class="{{ isset($h->status) === 'late' ? 'text-danger' : 'text-success' }} text-uppercase">{{ $h->status }}</td>
                                    <td>
                                        <a href="" class="text-dark btn-sm btn-primary">
                                            <i class="bi bi-eye-fill"></i>
                                        </a>
                                    </td>

                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center h3">DATA KOSONG</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
