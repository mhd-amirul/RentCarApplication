@extends('layouts.main')

@section('container')
<div class="row justify-content-center mt-5" style="margin-bottom: 4cm">
    <div class="col-lg-8 mt-4">
        <div class="card px-3 py-3 border border-gray-800">
            <div class="row justify-content-center">
                <div class="col-sm-6">
                    <main class="form-registration mt-3 mb-3">
                        <h1 class="h3 mb-3 fw-normal text-center">EDIT ALTERNATIF</h1>
                        <form action="{{ route('allalternatif.update', $alternatif->id) }}" method="post" id="editAlter-form">
                            @method('put')
                            @csrf
                            <div class="form-floating">
                                <input type="text" name="nama" class="form-control rounded-top @error('nama') is-invalid @enderror" id="nama" placeholder="Kriteria" value="{{ old('nama', $alternatif->nama) }}" required>
                                <label for="nama">Alternatif</label>
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="text" name="nilai" class="form-control @error('nilai') is-invalid @enderror" id="nilai" placeholder="nilai" value="{{ old('nilai', $alternatif->nilai) }}" required>
                                <label for="nilai">Nilai</label>
                                @error('nilai')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="card mt-2 mb-2 bg-secondary text-white text-left">
                                <div class="card-body p-2">
                                    <h6 class="card-title m-0">Nama Kriteria :</h6>
                                </div>
                            </div>
                            <div class="">
                                <select name="kriteria_id" class="form-control mb-3">
                                    @foreach ($kriteria as $data)
                                        @if (old('kriteria', $alternatif->kriteria_id) == $data->id)
                                            <option value="{{ $data->id }}" selected>{{ $data->nama }}</option>
                                        @else
                                            <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <a href="#" class="w-100 btn btn-primary text-decoration-none mt-2 mb-2" id="editAlter">SUBMIT</a>
                        </form>
                    </main>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('sweet')
    <script>
        $('#editAlter').on('click', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            Swal.fire({
                title: 'Are you sure ?',
                text: 'Edit alternatif ini ?',
                icon: 'warning',
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Confirm',
                showCancelButton: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#editAlter-form').submit();
                }
            })
        });
    </script>
@endpush
