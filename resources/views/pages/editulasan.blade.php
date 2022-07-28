@extends('layouts.main')

@section('container')
    <div class="row justify-content-center" style="margin-top: 2cm;margin-bottom: 4cm">
        <div class="col-lg-6">
            <main class="form-signin">
                <div class="card py-5 px-5 border border-gray-800">
                    <h1 class="h3 mb-3 fw-normal text-center">Rating Dan Ulasan</h1>
                <form action="{{ route('updateUlasan', $ulasan->slug) }}" method="post" id="updateUlasan-form">
                    @method('put')
                    @csrf
                    <div class="form-floating mb-1">
                        <select name="rating" class="form-select" aria-label="Floating label select example">
                                <option value="{{ $ulasan->rating }}" hidden>Bintang {{ $ulasan->rating }}</option>
                                <option value="1">Bintang 1</option>
                                <option value="2">Bintang 2</option>
                                <option value="3">Bintang 3</option>
                                <option value="4">Bintang 4</option>
                                <option value="5" selected>Bintang 5</option>
                        </select>
                        <label for="merk_id">Rating</label>
                    </div>
                    <div class="form-floating">
                        <textarea name="komentar" style="height: 100px" type="textarea" class="form-control mb-2 @error('komentar') is-invalid @enderror" id="komentar" placeholder="komentar" cols="30" rows="10">{{ $ulasan->komentar }}</textarea>
                        <label for="komentar">Ulasan</label>
                        @error('komentar')
                            <div class="invalid-feedback mb-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="w-100 btn btn-sm btn-primary mt-3" id="updateUlasan" type="submit">SUBMIT</button>
                </form>
                </div>
            </main>
        </div>
    </div>
@endsection
@push('sweet')
    <script>
        $('#updateUlasan').on('click', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            Swal.fire({
                title: 'Are you sure ?',
                text: 'Update rating dan ulasan?',
                icon: 'warning',
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Confirm',
                showCancelButton: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#updateUlasan-form').submit();
                }
            })
        });
    </script>
@endpush
