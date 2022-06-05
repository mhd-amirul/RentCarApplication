@extends('layouts.main')

@section('container')

<div class="row justify-content-center mb-5 mt-5">
    <div class="col-lg-6 mt-5">
        <main class="form-registration mt-5">
            <form action="{{ route('hitung') }}" method="GET">
                <div class="card mt-2 mb-2 bg-secondary text-white text-left">
                    <div class="card-body p-2">
                        <h6 class="card-title m-0">Pilih Merk Mobil : </h6>
                    </div>
                </div>
                <div class="form-floating mb-1">
                        <select name="kritmerk" class="form-select" aria-label="Floating label select example">
                            @foreach ($merk as $data)
                                <option value="{{ $data->id }}">{{ $data->nama }}</option>
                            @endforeach
                    </select>
                    <label for="merk_id">Merk</label>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="w-50 btn btn-sm btn-secondary mt-2" type="submit">Search</button>
                </div>
            </form>
        </main>
    </div>
</div>

@endsection
