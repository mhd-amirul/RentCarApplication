@extends('layouts.main')

@section('container')
{{--  <div class="row justify-content-center" style="background-color: #43454d">
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
</div>  --}}

<div class="row justify-content-center mt-5" style="margin-bottom: 2cm">
    {{-- <div class="col-lg-10">
        <div class="card border border-gray-800 mx-3 shadow-lg">
            <h1>KATA KATA</h1>
        </div>
    </div> --}}
    <div class="col-lg-10">
        <div class="card border border-gray-800 mx-3 shadow-lg">
            <section class="ftco-section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="text-dark mt-3">Top Rated :</h3>
                            <hr>
                        </div>
                        <div class="col-md-12">
                            <div class="featured-carousel owl-carousel mb-4">
                                @forelse ($cars as $car)
                                    <div class="item">
                                        <div class="work">
                                            <div class="img d-flex align-items-center justify-content-center rounded">
                                                <img src="{{ asset('storage/' . $car->gambar1) }}" alt="" width="200" height="200" class="mt-2">
                                            </div>
                                            <div class="text pt-3 w-100 text-center">
                                                <h5><a href="{{ route('detailMobil', $car->slug) }}" class="text-dark">{{ $car->merk->nama }}</a></h5>
                                                <span><a href="{{ route('profileToko', $car->shop->slug) }}" class="text-decoration-none text-dark">{{ $car->shop->nm_usaha }}</a></span>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <h4 class="text-center mx-3 my-3"> - </h4>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>
    <div class="col-lg-10">
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
                                        <select name="{{ str_replace(' ', '_',$item->nama.'_id') }}" class="form-select" aria-label="Floating label select example" {{ $item->id == 1 ? 'required' : '' }}>
                                            @foreach ($alternatif as $data)
                                                @if ($data->kriteria_id == $item->id)
                                                    <option value="" hidden>Pilih Kriteria...</option>
                                                    @if ($item->id == 8)
                                                        <option value="{{ $data->id }}">{{ "Rp. " . number_format($data->nama,2,',','.') }}/hari</option>
                                                    @else
                                                        <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </select>
                                        <label for="{{ str_replace(' ', '_',$item->nama.'_id') }}">{{ $item->nama }}</label>
                                    </div>
                                </div>
                            @endforeach
                            <div class="col-sm-6">
                                <div class="form-floating mb-1 mx-3">
                                    <select name="shop_id" class="form-select" aria-label="Floating label select example">
                                        <option value="" hidden>Pilih Toko...</option>
                                        @foreach ($shop as $item)
                                            <option value="{{ $item->id }}">{{ $item->nm_usaha }}</option>
                                        @endforeach
                                    </select>
                                    <label for="shop_id">Toko</label>
                                </div>
                            </div>
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

@push('trix')
    <link rel="stylesheet" href="{{ url('css/owl.carousel.min.css') }}">
@endpush
@push('script-map')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ url('js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('js/main.js') }}"></script>
@endpush
