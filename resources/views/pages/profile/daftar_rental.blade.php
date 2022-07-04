@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-10 mt-4">
        <div class="card py-5 px-5 border border-gray-800">
            <main class="form-registration">
                <h2 class="m-b-20 p-b-5 b-b-default text-center">Buka Toko</h2>
                <form action="{{ route('profil.store') }}" method="post" enctype="multipart/form-data" id="daftarRental-form">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6 mt-2">
                            <div class="form-floating">
                                <input name="nm_pu" type="text" class="form-control rounded-top @error('nm_pu') is-invalid @enderror" id="nm_pu" placeholder="Nama Pemilik Usaha" value="{{ old('nm_pu') }}" required>
                                <label for="nm_pu">Nama Pemilik Usaha</label>
                                @error('nm_pu')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <div class="form-floating">
                                <input name="nm_usaha" type="text" class="form-control @error('nm_usaha') is-invalid @enderror" id="nm_usaha" placeholder="Nama Usaha" value="{{ old('nm_usaha') }}" required>
                                <label for="nm_usaha">Nama Usaha</label>
                                @error('nm_usaha')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <div class="form-floating">
                                <input name="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Alamat" value="{{ old('alamat') }}" required>
                                <label for="alamat">Alamat</label>
                                @error('alamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <div class="form-floating">
                                <input name="nik" type="number" class="form-control rounded-bottom @error('nik') is-invalid @enderror" id="nik" placeholder="NIK" value="{{ old('nik') }}" required>
                                <label for="nik">NIK</label>
                                @error('nik')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <h5 class="m-b-20 p-b-5 b-b-default mt-3">Upload Berkas</h5>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="custom-file">
                                <label for="img_ktp"><i class="bi bi-file-earmark-image"></i> Scan KTP</label>
                                <input type="file" name="img_ktp" class="form-control @error('img_ktp') is-invalid @enderror" id="img_ktp">
                                @error('img_ktp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="custom-file">
                                <label for="img_siu"><i class="bi bi-file-earmark-image"></i> Surat Izin Usaha</label>
                                <input type="file" name="img_siu" class="form-control @error('img_siu') is-invalid @enderror" id="img_siu">
                                @error('img_siu')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6 mt-3">
                            <div class="custom-file">
                                <label for="pas_foto"><i class="bi bi-file-earmark-image"></i> Pas Foto</label>
                                <input type="file" name="pas_foto" class="form-control @error('pas_foto') is-invalid @enderror" id="pas_foto">
                                @error('pas_foto')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6 mt-3">
                            <div class="custom-file">
                                <label for="foto_usaha"><i class="bi bi-file-earmark-image"></i> Foto Usaha</label>
                                <input type="file" name="foto_usaha" class="form-control @error('foto_usaha') is-invalid @enderror" id="foto_usaha">
                                @error('foto_usaha')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-sm-6">
                            <button class="w-100 btn btn-sm btn-primary mt-5" id="daftarRental">SUBMIT</button>
                        </div>
                    </div>
                </form>
            </main>
        </div>
    </div>
</div>
@endsection

@push('sweet')
    <script>
        $('#daftarRental').on('click', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            Swal.fire({
                title: 'Are you sure ?',
                text: 'Cek informasi dan berkas sudah benar ?',
                icon: 'warning',
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'confirm',
                showCancelButton: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#daftarRental-form').submit();
                }
            })
        });
    </script>
@endpush
