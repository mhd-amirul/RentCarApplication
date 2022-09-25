@extends('layouts.main')

@section('container')
<div class="row justify-content-center mb-5 mt-5">
    <div class="col-lg-7">
        <div class="card py-3 px-3 border border-gray-800">
            <main class="form-registration mt-3">
                <h2 class="m-b-20 f-w-600 text-center">Edit Mobil</h2>
                <form action="{{ route('updateCarAdmin', $car->slug) }}" method="post" enctype="multipart/form-data" id="editCar-form">
                    @method('put')
                    @csrf
                    <h5 class="m-b-20 p-b-5 b-b-default f-w-600">Pilih Kriteria Mobil</h5>
                    <div class="row px-2">
                        @foreach ($kriteria as $item)
                        <div class="col-sm-6">
                            <div class="form-floating mb-1">
                                <select name="{{ $item->nama."_id" }}" class="form-select" aria-label="Floating label select example">
                                    @foreach ($alternatif as $data)
                                        @if ($data->kriteria_id == $item->id)
                                            @if (old($item->nama."_id", $car[str_replace(' ','_',$item->nama.'_id')]) == $data->id)
                                                <option value="{{ $data->id }}" selected>{{ $data->nama }}</option>
                                            @else
                                                <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                            @endif
                                        @endif
                                    @endforeach
                                </select>
                                <label for="{{ $item->nama."_id" }}">{{ $item->nama }}</label>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <h5 class="m-b-20 p-b-5 b-b-default f-w-600 mt-3">Informasi Mobil</h5>
                    <div class="row px-2">
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" name="no_polisi" class="form-control rounded-top @error('no_polisi') is-invalid @enderror" id="no_polisi" placeholder="no_polisi Kendaraan" value="{{ old('no_polisi', $car->no_polisi) }}">
                                <label for="no_polisi">Plat Kendaraan</label>
                                @error('no_polisi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 mt-2">
                        <label for="deskripsi">Deskripsi</label>
                        <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi', $car->deskripsi) }}">
                        <trix-editor input="deskripsi"></trix-editor>
                        @error('deskripsi')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <h5 class="m-b-20 p-b-5 b-b-default f-w-600 mt-4">Upload Gambar Mobil</h5>
                    <div class="row px-2">
                        <div class="col-sm-6 mt-2">
                            <label for="gambar1">Gambar Profil Mobil</label>
                            <input type="file" class="form-control @error('gambar1') is-invalid @enderror" id="gambar1" name="gambar1" >
                            @error('gambar1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-6 mt-2">
                            <label for="gambar2">Gambar Mobil 1</label>
                            <input type="file" class="form-control @error('gambar2') is-invalid @enderror" id="gambar2" name="gambar2">
                            @error('gambar2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-6 mt-2">
                            <label for="gambar3">Gambar Mobil 2</label>
                            <input type="file" class="form-control @error('gambar3') is-invalid @enderror" id="gambar3" name="gambar3">
                            @error('gambar3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-6 mt-2">
                            <label for="gambar4">Gambar Mobil 3</label>
                            <input type="file" class="form-control @error('gambar4') is-invalid @enderror" id="gambar4" name="gambar4">
                            @error('gambar4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-6 mt-2">
                            <label for="gambar5">Gambar Mobil 4</label>
                            <input type="file" class="form-control @error('gambar5') is-invalid @enderror" id="gambar5" name="gambar5">
                                @error('gambar5')
                                <div class="invalid-feedback">
                                        {{ $message }}
                                </div>
                                @enderror
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-sm-10 mt-4">
                                <button class="w-100 btn btn-sm btn-primary text-decoration-none mt-3" id="editCar">SUBMIT</button>
                            </div>
                        </div>
                    </div>
                </form>
            </main>
        </div>
    </div>
</div>
@endsection

@push('trix')
    {{-- trix  --}}
    <link rel="stylesheet" href="/css/trix.css">
    <script src="/js/trix.js" type="text/javascript"></script>
    <style>
        trix-toolbar [data-trix-button-group="file-tools"]{
            display: none;
        }
    </style>
@endpush
@push('sweet')
    <script>
        $('#editCar').on('click', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            Swal.fire({
                title: 'Are you sure ?',
                text: 'Edit mobil ini ?',
                icon: 'warning',
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Confirm',
                showCancelButton: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#editCar-form').submit();
                }
            })
        });
    </script>
@endpush
