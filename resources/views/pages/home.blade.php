@extends('layouts.main')

@section('container')

<div class="row justify-content-center mb-5">
    <div class="col-lg-10 mt-5">
        <div class="card py-3 px-3 border border-gray-800">
            <div class="row justify-content-center my-5">
                <div class="col-md-9">
                    <form action="{{ route('hitung') }}" method="GET">
                        <h3 class="text-center">PILIH KRITERIA MOBIL</h3>
                        <hr>
                        <div class="row">
                            @foreach ($kriteria as $item)
                                <div class="col-sm-6">
                                    <div class="form-floating mb-1">
                                        <select name="{{ str_replace(' ', '_',$item->nama.'_id') }}" class="form-select" aria-label="Floating label select example">
                                            @foreach ($alternatif as $data)
                                                @if ($data->kriteria_id == $item->id)
                                                    <option value="" hidden>Pilih Kriteria...</option>
                                                    <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        <label for="{{ str_replace(' ', '_',$item->nama.'_id') }}">{{ $item->nama }}</label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="d-flex justify-content-center">
                            <button class="w-50 btn btn-sm btn-danger mt-2" type="submit">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
