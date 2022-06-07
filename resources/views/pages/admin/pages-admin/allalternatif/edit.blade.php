@extends('layouts.main')

@section('container')
<div class="row justify-content-center mt-5 mb-5">
    <div class="col-lg-5 mt-4">
        <main class="form-registration mt-5">
            <h1 class="h3 mb-3 fw-normal text-center">Edit Alternatif</h1>
            <form action="{{ route('allalternatif.update', $alternatif->id) }}" method="post">
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
                    <label for="nilai">nilai</label>
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
                    <select name="kriteria_id" class="form-control mb-3" disabled>
                        @foreach ($kriteria as $data)
                            @if (old('kriteria', $alternatif->kriteria_id) == $data->id)
                                <option value="{{ $data->id }}" selected>{{ $data->nama }}</option>
                            @else
                                <option value="{{ $data->id }}">{{ $data->nama }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <button class="w-100 btn btn-lg btn-secondary mt-3" type="submit">Edit</button>
            </form>
        </main>
    </div>
</div>
@endsection