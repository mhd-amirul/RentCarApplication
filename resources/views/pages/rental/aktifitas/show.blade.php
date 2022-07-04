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
                        <input type="text" class="form-control rounded-top" disabled value="{{ $sisa_waktu }}">
                        <label>Sisa Waktu</label>
                    </div>
                </div>
                <div class="col-sm-4 mb-4">
                    <div class="form-floating text-white">
                        <input type="text" class="form-control rounded-top text-white {{ $history->status == 'on' ? 'bg-success' : '' }}{{ $history->status == 'late' ? 'bg-danger' : '' }}{{ $history->status == 'off' ? 'bg-secondary' : '' }}" disabled value="{{ $history->status }}">
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
                    <form action="{{ route('activityDelete', $history->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('delete')
                        <div class="modal fade" id="deleteAct" tabindex="-1" aria-labelledby="deleteActLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteActLabel">Confirmation</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Yakin Ingin Menghapus Aktifitas Ini?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Confirm</button>
                                </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn btn-danger text-decoration-none" data-bs-toggle="modal" data-bs-target="#deleteAct"><i class="bi bi-trash-fill"></i> Delete</a>
                    </form>
                    @if ($history->status == 'on')
                        <a href="{{ route('activityEdit', $history->id) }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Edit</a>
                        <form action="{{ route('activityReturn', $history->id) }}" method="POST" class="d-inline" id="returnAct-form">
                            @csrf
                            @method('put')
                            <button class="btn btn-success text-decoration-none" id="returnAct"><i class="bi bi-calendar2-check"></i> Returned</button>
                        </form>
                    @else
                        <p></p>
                    @endif
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
                confirmButtonText: 'confirm',
                showCancelButton: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#returnAct-form').submit();
                }
            })
        });
    </script>
@endpush
