@extends('layouts.main')

@section('container')

<div class="row justify-content-center mb-5">
    <div class="col-lg-6 mt-5" style="margin-bottom: 10cm;">
        <main class="form-registration mt-5">
            <form action="{{ route('hitung') }}" method="GET">
                <div class="card mt-2 mb-2 bg-secondary text-white text-left">
                    <div class="card-body p-2">
                        <h6 class="card-title m-0">Pilih Kriteria Mobil : </h6>
                    </div>
                </div>
                <div class="row">
                    @foreach ($kriteria as $item)
                        <div class="col-sm-6">
                            <div class="form-floating mb-1">
                                <select name="{{ $item->nama."_id" }}" class="form-select" aria-label="Floating label select example">
                                    @foreach ($alternatif as $data)
                                        @if ($data->kriteria_id == $item->id)
                                            <option value="" hidden>Pilih Kriteria...</option>
                                            <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                <label for="{{ $item->nama."_id" }}">{{ $item->nama }}</label>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center">
                    <button class="w-50 btn btn-sm btn-danger mt-2" type="submit">Search</button>
                </div>
            </form>
        </main>
    </div>
</div>

@endsection
