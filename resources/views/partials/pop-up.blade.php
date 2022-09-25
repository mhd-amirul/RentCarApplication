@if (Session::has('success'))
    <div class="flash-data" data-flashdata="{{ Session::get('success') }}"></div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const massage = $('.flash-data').data('flashdata');
        if (massage) {
            Swal.fire({
                icon: 'success',
                position: 'top-end',
                title: massage,
                timer: 1000,
                showConfirmButton: false,
            })
        }
    </script>
@endif

@if (Session::has('failed'))
    <div class="flash-data" data-flashdata="{{ Session::get('failed') }}"></div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const massage = $('.flash-data').data('flashdata');
        if (massage) {
            Swal.fire({
                icon: 'error',
                position: 'top-end',
                title: massage,
                timer: 2000,
                showConfirmButton: false,
            })
        }
    </script>
@endif
