@extends('layouts.main')

@section('container2')
{{-- <div class="row justify-content-center" style="background-color: #43454d">
    <div class="col-lg-12">
        <div class="card border border-gray-800 rounded-0" style="width: 100%;height: 40rem;">
            <div style="height:100%; background-color: #424242; background-image: url('images/bgHome.png'); background-repeat: no-repeat; background-size:  100% 100%;">
                <div class="row justify-content-center my-5">
                    <div class="col-md-9">
                        <form action="{{ route('hitung') }}" method="GET">
                            <h3 class="text-center text-white mt-5">PILIH KRITERIA MOBIL</h3>
                            <hr>
                            <div class="row">
                                @foreach ($kriteria as $item)
                                    <div class="col-sm-6">
                                        <div class="form-floating mb-1 mx-3">
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
                                <button class="w-50 btn btn-sm btn-primary mt-2" type="submit">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="row justify-content-center" style="margin-bottom: 2cm; margin-top: 2cm">
    <div class="col-lg-8">
        <div class="card border border-gray-800 mx-3 shadow-lg">
            <div class="row justify-content-center mb-5">
                <div class="col-sm-9">
                    <form action="{{ route('hitung') }}" method="GET">
                        <h3 class="text-center mt-5">PILIH KRITERIA MOBIL</h3>
                        <hr>
                        <div class="row">
                            @foreach ($kriteria as $item)
                                <div class="col-sm-6">
                                    <div class="form-floating mb-1 mx-3">
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
                            <button class="w-50 btn btn-sm btn-primary mt-2" type="submit">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

