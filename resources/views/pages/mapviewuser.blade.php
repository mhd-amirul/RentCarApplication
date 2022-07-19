@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card px-2 pt-2 pb-2 border border-gray-800">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col">
                            <input type="text" hidden name="longitude" id="longitude" value="{{ isset($shop->longitude) ? $shop->longitude : '97.1374572505087' }}" >
                            <input type="text" hidden name="latitude" id="latitude" value="{{ isset($shop->latitude) ? $shop->latitude : '5.190902388476289' }}" >
                            <input type="text" hidden name="nm_pu" id="nm_pu" value="{{ isset($shop->nm_pu) ? $shop->nm_pu : 'Empty...' }}" >
                            <input type="text" hidden name="nm_usaha" id="nm_usaha" value="{{ isset($shop->nm_usaha) ? $shop->nm_usaha : 'Empty...' }}" >
                            <input type="text" hidden name="alamat" id="alamat" value="{{ isset($shop->alamat) ? $shop->alamat : 'Empty...' }}" >
                            <input type="text" hidden name="no_hp" id="no_hp" value="{{ isset($shop->user->no_hp) ? $shop->user->no_hp : 'Empty...' }}" >
                        </div>
                    </div>

                    <div class="card-header bg-dark text-white mt-3 mb-3">
                        Map
                    </div>
                    {{-- <div class="card_body border border-dark">
                        <div id='map' style='width: 100%; height: 70vh;'></div>
                    </div> --}}
                    <div class="row justify-content-start">
                        <div class="col-sm-12 mb-3">
                            <div class="card_body border border-dark">
                                <div id='map' style='width: 100%; height: 70vh;'></div>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <a href="#" class="arahkan btn btn-sm btn-primary w-100">Arahkan Jalur</a>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="card_body border border-dark pl-1 pr-4 py-4">
                                <div id='mapEvent' style='width: 100%;'></div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="card_body px-4 py-4 border border-dark">
                                <strong>
                                    <a href='{{ route('profileToko', $shop->id) }}' style='text-decoration: none;'>{{ $shop->nm_usaha }}</a>
                                </strong>
                                <p>No Hp : +62 {{ $shop->user->no_hp }}
                                    <br> Alamat : {{ $shop->alamat }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
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
@push('script-map-user')
    <link
        rel="stylesheet"
        href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.css"
        type="text/css">
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.js"></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.js'></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.min.js"></script>
    <script>
        const longitude = document.getElementById("longitude").value;
        const latitude = document.getElementById("latitude").value;
        const defaultLocation = [longitude, latitude]

        mapboxgl.accessToken = '{{ env('MAPBOX_KEY') }}';
        const map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11', // light-v10, outdoors-v11, satellite-v9, streets-v11, dark-v10
            center: defaultLocation,
            zoom: 10
        });
        map.addControl(new mapboxgl.FullscreenControl(),'top-left');
        map.addControl(new mapboxgl.NavigationControl(),'top-left')

        var geolocate = new mapboxgl.GeolocateControl();
        // map.addControl(geolocate);
        geolocate.on('geolocate', function(e) {
            var lon = e.coords.longitude;
            var lat = e.coords.latitude
            var position = [lon, lat];
            console.log(position);
        });
        // map.on('load', function() {
        //     geolocate.trigger();
        // });


        const mark = new mapboxgl.Marker()
        .setLngLat([longitude, latitude])
        .setPopup().addTo(map);

        const direct = new MapboxDirections({
                accessToken: mapboxgl.accessToken

            }
        );
        document.getElementById('mapEvent').appendChild(direct.onAdd(map));
        map.on('load',  function() {
            direct.setOrigin([lon, lat]);
            direct.setDestination([longitude, latitude]);
        })

    </script>
@endpush
