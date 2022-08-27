@extends('layouts.main')

@section('container')
<div class="row justify-content-center mt-5">
    <div class="col-lg-9">
        <div class="card px-4 py-4 border border-grey-500">
            <h2 class="m-b-20 p-b-5 b-b-default mt-3 text-center">EDIT AKTIFITAS</h2>
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    <form action="{{ route('dcedit', $diskon->id) }}" method="post" enctype="multipart/form-data" id="editAktifitas-form">
                        @csrf
                        @method('put')
                        <div class="row justify-content-center mt-5 mb-5">
                            <div class="col-sm-5">
                                <div class="form-floating mb-1">
                                    <select disabled name="car_id" class="form-select" aria-label="Floating label select example">
                                        <option value="{{ $car->id }}">{{$car->no_polisi .' - ' .$car->merk->nama }}</option>
                                    </select>
                                    <label for="car_id">Mobil Rental</label>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-floating">
                                    <input type="number" name="discount" maxlength="99" class="form-control rounded-top @error('discount') is-invalid @enderror" id="discount" placeholder="Batas Peminjaman" value="{{ old('discount', $diskon->discount) }}" required>
                                    <label for="discount">Discount %</label>
                                    @error('discount')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
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
