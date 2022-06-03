@extends('layouts.main')

@section('container')
    <div class="row justify-content-center mt-5">
        <div class="col-lg-5 mt-4">
            <main class="form-signin mt-5">
                <h1 class="h3 mb-3 fw-normal text-center">Rating Dan Ulasan</h1>
                <form action="{{ route('ulasanU', $car->id) }}" method="post">
                    @method('put')
                    @csrf
                    <input name="car_id" type="hidden" value="{{ $car->id }}">
                    <div class="form-floating mb-1">
                        <select name="rating" class="form-select" aria-label="Floating label select example">
                                <option value="1" selected>1</option>
                                <option value="2" selected>2</option>
                                <option value="3" selected>3</option>
                                <option value="4" selected>4</option>
                                <option value="5" selected>5</option>
                        </select>
                        <label for="merk_id">Rating</label>
                    </div>
                    <div class="form-floating">
                        <textarea name="komentar" style="height: 100px" type="textarea" class="form-control mb-2 @error('komentar') is-invalid @enderror" id="komentar" placeholder="komentar" cols="30" rows="10"></textarea>
                        <label for="komentar">Ulasan</label>
                        @error('komentar')
                            <div class="invalid-feedback mb-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="w-100 btn btn-lg btn-secondary " type="submit">Tambahkan</button>
                </form>
            </main>
        </div>
    </div>
@endsection