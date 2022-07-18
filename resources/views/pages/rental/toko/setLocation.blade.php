@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card px-5 pt-4 pb-5 border border-gray-800">
            <main class="form-registration mt-3">
                    <div class="card-header bg-dark text-white mt-3 mb-3">
                        Map
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-sm-3">
                            <div class="card_body pl-1 py-3">
                                <div id='geosearch' style='width: 100%;'></div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="card_body border border-dark">
                                <div id='map' style='width: 100%; height: 60vh;'></div>
                            </div>
                        </div>
                    </div>
                    <form action="{{ route('saveLocation', $shop->id) }}" method="post" id="setLok-form">
                    @method('put')
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" name="longitude" class="form-control rounded-top" id="longitude" placeholder="longitude" hidden>
                                <input type="text" name="latitude" class="form-control rounded-top" id="latitude" placeholder="Latitude" hidden>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-sm-6">
                            <button class="w-100 btn btn-sm btn-primary mt-3" id="setLok">SET LOCATION</button>
                        </div>
                    </div>
                </form>
            </main>
        </div>
    </div>
</div>
@endsection

@push('mapbox')
    {{-- mapbox  --}}
    <link
        href='https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.css'
        rel='stylesheet'>
    <link
        rel="stylesheet"
        href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.css"
        type="text/css">
@endpush
@push('script-map')
    {{-- Mapbox --}}
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.js'></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.min.js"></script>
    <script>
        const defaultLocation = [97.1374572505087, 5.190902388476289]

        mapboxgl.accessToken = '{{ env('MAPBOX_KEY') }}';
        const map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11', // light-v10, outdoors-v11, satellite-v9, streets-v11, dark-v10
            center: defaultLocation,
            zoom: 9
        });

        const geosearch = new MapboxGeocoder({
                accessToken: mapboxgl.accessToken,
                mapboxgl: mapboxgl
            }
        );
        document.getElementById('geosearch').appendChild(geosearch.onAdd(map));

        map.addControl(new mapboxgl.NavigationControl())

        map.addControl(
            new mapboxgl.GeolocateControl({
                positionOptions: {
                    enableHighAccuracy: true
                },
                trackUserLocation: true,
                showUserHeading: true
            })
        );

        var marker = new mapboxgl.Marker();
        function add_marker (event) {
            var coordinates = event.lngLat;

            document.getElementById("longitude").value = coordinates.lng;
            document.getElementById("latitude").value = coordinates.lat;

            marker.setLngLat(coordinates).addTo(map);
        }

        map.on('click', add_marker);

    </script>
@endpush
@push('sweet')
    <script>
        $('#setLok').on('click', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            Swal.fire({
                title: 'Are you sure ?',
                text: 'Lokasi sudah tepat ?',
                icon: 'warning',
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Confirm',
                showCancelButton: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#setLok-form').submit();
                }
            })
        });
    </script>
@endpush
