@extends('layouts.main')

@section('container')
    <div class="row justify-content-center" style="margin-top: 2cm">
        <div class="col-lg-6">
            <main class="form-signin">
                <div class="card py-5 px-5 border border-gray-800">
                    <h1 class="h3 mb-3 fw-normal text-center">Rating Dan Ulasan</h1>
                <form action="{{ route('ulasanU', $car->id) }}" method="post">
                    @method('put')
                    @csrf
                    <input name="car_id" type="hidden" value="{{ $car->id }}">
                    <div class="form-floating mb-1">
                        <select name="rating" class="form-select" aria-label="Floating label select example">
                                <option value="1">Bintang 1</option>
                                <option value="2">Bintang 2</option>
                                <option value="3">Bintang 3</option>
                                <option value="4">Bintang 4</option>
                                <option value="5" selected>Bintang 5</option>
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
                    <div class="modal fade" id="ulasan" role="dialog" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="text-center" style="width:100%; padding:20px; text-align:center;">
                                        <img style="width:150px; height:auto; margin:0 auto; display:block; margin-bottom:25px;" src="{{ url('images/question.png') }}" alt="">
                                        <h1 style="font-size: 42px; margin-bottom: 25px; color:#5C5C5C;">Berikan Rating?</h1>
                                        {{-- <p style="font-size: 20px; margin-bottom: 27px; color:#5C5C5C;"></p> --}}
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Confirm</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="w-100 btn btn-sm btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#ulasan">SUBMIT</a>
                </form>
                </div>
            </main>
        </div>
    </div>
@endsection
