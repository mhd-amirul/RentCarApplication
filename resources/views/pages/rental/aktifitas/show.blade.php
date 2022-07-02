@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card px-4 py-4 border border-grey-500">
            <h2 class="m-b-20 p-b-5 b-b-default mt-3 text-center">DETAIL AKTIFITAS</h2>
            <div class="row justify-content-start mt-3">
                <div class="col-sm-4 mb-4">
                    <div class="form-floating">
                        <input type="text" class="form-control rounded-top" disabled value="{{ $history->nama_pinjam }}">
                        <label>Nama Peminjam</label>
                    </div>
                </div>
                <div class="col-sm-4 mb-4">
                    <div class="form-floating">
                        <input type="text" class="form-control rounded-top" disabled value="{{ $history->nik_pinjam }}">
                        <label>NIK</label>
                    </div>
                </div>
                <div class="col-sm-4 mb-4">
                    <div class="form-floating">
                        <input type="text" class="form-control rounded-top" disabled value="{{ $history->tgl_pinjam }}">
                        <label>Tanggal Peminjaman</label>
                    </div>
                </div>
                <div class="col-sm-4 mb-4">
                    <div class="form-floating">
                        <input type="text" class="form-control rounded-top" disabled value="{{ $history->batas_pinjam }}">
                        <label>Batas Peminjaman</label>
                    </div>
                </div>
                <div class="col-sm-4 mb-4">
                    <div class="form-floating">
                        <input type="text" class="form-control rounded-top" disabled value="">
                        <label>Sisa Waktu</label>
                    </div>
                </div>
                <div class="col-sm-4 mb-4">
                    <div class="form-floating text-white">
                        <input type="text" class="form-control rounded-top text-white {{ $history->status == 'on' ? 'bg-success' : 'bg-danger' }}" disabled value="{{ $history->status }}">
                        <label>Status</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 mb-4">
                        <a href="{{ route('shop.show', $history->car_id) }}" class="text-dark btn btn-primary">
                            <i class="bi bi-eye-fill"> Detail Mobil</i>
                        </a>
                        <a target="blank" href="{{ isset($history->berkas_pinjam) ?  asset('storage/' . $history->berkas_pinjam) : url('images/notfound.png') }}" class="text-dark btn btn-primary">
                            <i class="bi bi-eye-fill"> Berkas Peminjaman</i>
                        </a>
                    </div>
                </div>
            </div>
            <h2 class="m-b-20 p-b-5 b-b-default mt-3"></h2>
            <div class="row">
                <div class="col-sm-12">
                    <a href="{{ route('activityEdit', $history->id) }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Edit</a>
                    <form action="{{ route('activityReturn', $history->id) }}" class="d-inline">
                        @csrf
                        @method('put')
                        {{-- <a href="" class="btn btn-success"><i class="bi bi-calendar2-check"></i> Returned</a> --}}
                        <button class="btn btn-success" type="submit"><i class="bi bi-calendar2-check"></i> Returned</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
