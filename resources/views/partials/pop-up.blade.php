@if (Session::has('success'))
    <script>
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
                        <h1 style="font-size: 42px; margin-bottom: 25px; color:#5C5C5C;">{{ Session::get('success') }}</h1>
                        {{-- <p style="font-size: 20px; margin-bottom: 27px; color:#5C5C5C;"></p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

@if (Session::has('failed'))
    <script>
        $(document).ready(function () {
            $("#ifFailed").modal('show');
        });
        $(document).ready(function(){
            $("button").click(function(){
                $("#modal .close").click()
            });
        });
    </script>

    <div class="modal fade" id="ifFailed" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center" style="width:100%; padding:20px; text-align:center;">
                        <img style="width:76px; height:auto; margin:0 auto; display:block; margin-bottom:25px;" src="{{ url('images/failed.jpg') }}" alt="">
                        <h1 style="font-size: 42px; margin-bottom: 25px; color:#5C5C5C;">{{ Session::get('failed') }}</h1>
                        {{-- <p style="font-size: 20px; margin-bottom: 27px; color:#5C5C5C;"></p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
