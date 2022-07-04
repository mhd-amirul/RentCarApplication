@if (Session::has('success'))
    <div class="flash-data" data-flashdata="{{ Session::get('success') }}"></div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const massage = $('.flash-data').data('flashdata');
        if (massage) {
            Swal.fire({
                icon: 'success',
                title: massage,
                timer: 2000,
                showConfirmButton: false,
            })
        }
    </script>

    {{-- <script>
        $(document).ready(function () {
            $("#ifSuccess").modal('show');
        });
        $(document).ready(function(){
            $("button").click(function(){
                $("#modal .close").click()
            });
        });
    </script>
    <div class="modal fade" id="ifSuccess" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center" style="width:100%; padding:20px; text-align:center;">
                        <img style="width:76px; height:auto; margin:0 auto; display:block; margin-bottom:25px;" src="{{ url('images/success2.jpg') }}" alt="">
                        <h1 style="font-size: 30px; margin-bottom: 25px; color:#5C5C5C;">{{ Session::get('success') }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endif

@if (Session::has('failed'))
    <div class="flash-data" data-flashdata="{{ Session::get('failed') }}"></div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const massage = $('.flash-data').data('flashdata');
        if (massage) {
            Swal.fire({
                icon: 'error',
                title: massage,
                timer: 2000,
                showConfirmButton: false,
            })
        }
    </script>


    {{-- <script>
        $(document).ready(function () {
            $("#failed").modal('show');
        });
        $(document).ready(function(){
            $("button").click(function(){
                $("#modal .close").click()
            });
        });
    </script>

    <div class="modal fade" id="failed" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center" style="width:100%; padding:20px; text-align:center;">
                        <img style="width:76px; height:auto; margin:0 auto; display:block; margin-bottom:25px;" src="{{ url('images/failed.jpg') }}" alt="">
                        <h1 style="font-size: 30px; margin-bottom: 25px; color:#5C5C5C;">{{ Session::get('failed') }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endif
