@extends('layouts.main')

@section('container')
<div class="row justify-content-center mt-5 mb-5">
    <div class="col-lg-9">
        <div class="card px-4 py-4 border border-grey-500">
            <h2 class="m-b-20 p-b-5 b-b-default mt-3 text-center">BUAT DISKON</h2>
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    <form action="{{ route('dcstore') }}" method="post">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-sm-5">
                                <div class="form-floating mb-1">
                                    <select name="car_id" class="form-select" aria-label="Floating label select example">
                                        @foreach ($cars as $car)
                                            <option data-image_="" value="{{ $car->id }}" selected>{{ $loop->iteration . ' . '. $car->no_polisi .' - ' .$car->merk->nama }}</option>
                                        @endforeach
                                    </select>
                                    <label for="car_id">Mobil Rental</label>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-floating">
                                    <input type="number" maxlength="99" name="discount" class="form-control rounded-top @error('discount') is-invalid @enderror" id="discount" placeholder="Discount" value="{{ old('discount') }}" required>
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
                                <button class="w-100 btn btn-sm btn-primary mt-5" type="submit">SUBMIT</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
