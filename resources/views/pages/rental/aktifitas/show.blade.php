@extends('layouts.main')

@section('container')
<div class="row justify-content-center mt-5">
    <div class="col-lg-8">
        <div class="card px-4 py-4 border border-grey-500">
            <h2 class="m-b-20 p-b-5 b-b-default mt-3 text-center">DETAIL AKTIFITAS</h2>
            <div class="row">
                <div class="col-sm-12">
                    @if ($history->status == 'on')
                        <a href="{{ route('activityView', $history->shop_id) }}" class="mt-1 btn btn-dark">
                            <i class="bi bi-arrow-left-circle"></i> Back
                        </a>
                        <a href="{{ route('activityEdit', $history->id) }}" class="mt-1 btn btn-warning"><i class="bi bi-pencil-square"></i> Edit</a>
                        <form action="{{ route('activityReturn', $history->id) }}" method="POST" class="d-inline" id="returnAct-form">
                            @csrf
                            @method('put')
                            <button class="mt-1 btn btn-success text-decoration-none" id="returnAct"><i class="bi bi-calendar2-check"></i> Returned</button>
                        </form>
                    @else
                        <a href="{{ route('activityHistory', $history->shop_id) }}" style="color: rgb(0, 0, 0);" class="mt-1 btn btn-dark">
                            <i class="bi bi-arrow-left-circle"></i> Back
                        </a>
                    @endif
                    <form action="{{ route('activityDelete', $history->id) }}" method="POST" class="d-inline" id="deleteAct-form">
                        @csrf
                        @method('delete')
                        <a href="#" class="mt-1 btn btn-danger text-decoration-none" id="deleteAct"><i class="bi bi-trash-fill"></i> Delete</a>
                    </form>
                </div>
            </div>
            <h2 class="m-b-20 p-b-5 b-b-default mt-3"></h2>
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
                    <div class="form-floating text-white">
                        <input type="text" class="form-control rounded-top text-white {{ $history->status == 'on' ? 'bg-success' : '' }}{{ $history->status == 'late' ? 'bg-danger' : '' }}{{ $history->status == 'off' ? 'bg-secondary' : '' }}" disabled value="{{ $history->status }}">
                        <label>Status</label>
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
                        <input type="text" class="form-control rounded-top {{ $color }}" disabled value="{{ $sisa_waktu }}">
                        <label>Sisa Waktu</label>
                    </div>
                </div>
                <div class="col-sm-4 mb-4">
                    <p class="m-b-10 f-w-600">KTP</p>
                        <div style="max-height: 200px; max-width: 376px; overflow: hidden;" class="border border-dark">
                            <img src="{{ isset($history->ktp_peminjam) == null ? url('images/notfound.png') : asset('storage/' . $history->ktp_peminjam) }}" alt="#" class="img-fluid">
                        </div>
                </div>
                <div class="col-sm-4 mb-4">
                    <p class="m-b-10 f-w-600">SIM</p>
                        <div style="max-height: 200px; max-width: 376px; overflow: hidden;" class="border border-dark">
                            <img src="{{ isset($history->sim_peminjam) == null ? url('images/notfound.png') : asset('storage/' . $history->sim_peminjam) }}" alt="#" class="img-fluid">
                        </div>
                </div>
                <div class="col-sm-4 mb-4">
                    <p class="m-b-10 f-w-600">Pas Foto</p>
                        <div style="max-height: 200px; max-width: 376px; overflow: hidden;" class="border border-dark">
                            <img src="{{ isset($history->foto_peminjam) == null ? url('images/notfound.png') : asset('storage/' . $history->foto_peminjam) }}" alt="#" class="img-fluid">
                        </div>
                </div>
            </div>
            <h2 class="m-b-20 p-b-5 b-b-default mt-3"></h2>
            <div class="row">
                <div class="col-sm-12 mb-4">
                    <a href="{{ route('shop.show', $history->car_id) }}" class="text-dark mt-1 btn btn-primary">
                        <i class="bi bi-eye-fill"> Detail Mobil</i>
                    </a>
                    <a target="blank" href="{{ isset($history->berkas_pinjam) ?  asset('storage/' . $history->berkas_pinjam) : url('images/notfound.png') }}" class="text-dark mt-1 btn btn-primary">
                        <i class="bi bi-eye-fill"> Berkas Peminjaman</i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('sweet')
    <script>
        $('#returnAct').on('click', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            Swal.fire({
                title: 'Are you sure ?',
                text: 'Mobil sudah dikembalikan ?',
                icon: 'warning',
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Confirm',
                showCancelButton: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#returnAct-form').submit();
                }
            })
        });

        $('#deleteAct').on('click', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            Swal.fire({
                title: 'Are you sure ?',
                text: 'Hapus aktifitas peminjaman ?',
                icon: 'warning',
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Confirm',
                showCancelButton: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#deleteAct-form').submit();
                }
            })
        });
    </script>
@endpush
