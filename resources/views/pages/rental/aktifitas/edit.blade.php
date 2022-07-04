@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-9">
        <div class="card px-4 py-4 border border-grey-500">
            <h2 class="m-b-20 p-b-5 b-b-default mt-3 text-center">EDIT AKTIFITAS</h2>
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    <form action="{{ route('activityUpdate', $history->id) }}" method="post" enctype="multipart/form-data" id="editAktifitas-form">
                        @csrf
                        @method('put')
                        <div class="row justify-content-center">
                            <div class="col-sm-5">
                                <div class="form-floating">
                                    <input type="text" name="nama_pinjam" class="form-control rounded-top @error('nama_pinjam') is-invalid @enderror" id="nama_pinjam" placeholder="Nama Peminjam" value="{{ old('nama_pinjam', $history->nama_pinjam) }}" required>
                                    <label for="nama_pinjam">Nama Peminjam</label>
                                    @error('nama_pinjam')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-floating">
                                    <input type="datetime-local" name="tgl_pinjam" class="form-control rounded-top @error('tgl_pinjam') is-invalid @enderror" id="tgl_pinjam" placeholder="Tanggal Peminjaman" value="{{ old('tgl_pinjam', $history->tgl_pinjam) }}" required>
                                    <label for="tgl_pinjam">Tanggal Peminjaman</label>
                                    @error('tgl_pinjam')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-2">
                            <div class="col-sm-5">
                                <div class="form-floating">
                                    <input type="text" name="nik_pinjam" class="form-control rounded-top @error('nik_pinjam') is-invalid @enderror" id="nik_pinjam" placeholder="NIK" value="{{ old('nik_pinjam', $history->nik_pinjam) }}" required>
                                    <label for="nik_pinjam">NIK</label>
                                    @error('nik_pinjam')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-floating">
                                    <input type="datetime-local" name="batas_pinjam" class="form-control rounded-top @error('batas_pinjam') is-invalid @enderror" id="batas_pinjam" placeholder="Batas Peminjaman" value="{{ old('batas_pinjam', $history->batas_pinjam) }}" required>
                                    <label for="batas_pinjam">Batas Peminjaman</label>
                                    @error('batas_pinjam')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-2">
                            <div class="col-sm-5 mt-3">
                                <div class="form-floating mb-1">
                                    <select disabled name="car_id" class="form-select" aria-label="Floating label select example">
                                        <option value="{{ $car->id }}">{{ $car->merk->nama.' (Plat : '. $car->no_polisi .' )' }}</option>
                                    </select>
                                    <label for="car_id">Mobil Rental</label>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <label for="berkas_pinjam">Upload Berkas (PDF)</label>
                                <input type="hidden" name="oldgambar1" value="{{ $history->berkas_pinjam }}">
                                <input type="file" class="form-control @error('berkas_pinjam') is-invalid @enderror" id="berkas_pinjam" name="berkas_pinjam">
                                    @error('berkas_pinjam')
                                    <div class="invalid-feedback">
                                            {{ $message }}
                                    </div>
                                    @enderror
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-sm-5">
                                <button class="w-100 btn btn-sm btn-primary text-decoration-none mt-3" id="editAktifitas">SUBMIT</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('sweet')
    <script>
        $('#editAktifitas').on('click', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            Swal.fire({
                title: 'Are you sure ?',
                text: 'Ubah informasi aktifitas ?',
                icon: 'warning',
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'confirm',
                showCancelButton: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#editAktifitas-form').submit();
                }
            })
        });
    </script>
@endpush
