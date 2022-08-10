@extends('layouts.main')

@section('container')
<div class="row justify-content-center mt-5" style="margin-bottom: 7cm">
    <div class="col-lg-10">
        <div class="card px-4 py-4 border border-grey-500">
            <h2 class="m-b-20 p-b-5 b-b-default mt-3 text-center">HISTORIES</h2>
            <div class="row">
                <div class="col-sm-12">
                    <a href="{{ route('toko.index') }}" class="btn btn-dark"><i class="bi bi-arrow-left-circle"></i> Back</a>
                    <a href="{{ route('activityView', $shop->slug) }}" class="btn btn-secondary"><i class="bi bi-activity"></i>  Activity</a>
                    <form action="{{ route('activityViewCetak', $shop->slug) }}" method="GET" class="d-inline">
                        @csrf
                        <input type="text" name="type" value="histories" hidden>
                        <input type="datetime-local" name="date_from" value="{{ $date_from != null ? $date_from : '' }}" hidden>
                        <input type="datetime-local" name="date_to" value="{{ $date_to != null ? $date_to : '' }}" hidden>
                        <button class="btn btn-success text-decoration-none"><i class="bi bi-printer-fill"></i> Print</button>
                    </form>
                </div>
                <div class="col-sm-12">
                    <h2 class="m-b-20 p-b-5 b-b-default mt-3 text-center"></h2>
                </div>
                <div class="col-sm-12">
                    <form action="" method="GET" class="d-inline">
                        @csrf
                        <input type="text" name="type" value="filter" hidden>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="form-floating">
                                    <input type="datetime-local" name="date_from" class="form-control rounded-top" id="date_from">
                                    <label for="date_from">Date From</label>
                                    @error('batas_pinjam')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-floating">
                                    <input type="datetime-local" name="date_to" class="form-control rounded-top" id="date_to">
                                    <label for="date_to">Date To</label>
                                    @error('batas_pinjam')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <button class="btn btn-lg btn-success text-decoration-none"><i class="bi bi-printer-fill"></i> Filter</button>
                            </div>
                        </div>
                    </form>
                </div>
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
                                    <td class="text-secondary text-uppercase">{{ $h->status }}</td>
                                    <td>
                                        <a href="{{ route('activityShow', $h->slug) }}" class="text-dark btn-sm btn-primary">
                                            <i class="bi bi-eye-fill"></i>
                                        </a>
                                    </td>

                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center h3 mb-5">DATA KOSONG</td>
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
