@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-13">
            <div class="row">
                <div class="col">
                    <input type="text" hidden name="longitude" id="longitude" value="{{ isset($shop->longitude) ? $shop->longitude : '97.1374572505087' }}" >
                    <input type="text" hidden name="latitude" id="latitude" value="{{ isset($shop->latitude) ? $shop->latitude : '5.190902388476289' }}" >
                    <input type="text" hidden name="nm_pu" id="nm_pu" value="{{ isset($shop->nm_pu) ? $shop->nm_pu : 'Empty...' }}" >
                    <input type="text" hidden name="nm_usaha" id="nm_usaha" value="{{ isset($shop->nm_usaha) ? $shop->nm_usaha : 'Empty...' }}" >
                    <input type="text" hidden name="no_hp" id="no_hp" value="{{ isset($shop->user->no_hp) ? $shop->user->no_hp : 'Empty...' }}" >
                </div>
            </div>
    
            <div class="card-header bg-dark text-white mt-3 mb-3">
                Map
            </div>
            <div class="card_body border border-dark">
                <div id='map' style='width: 100%; height: 70vh;'></div>  
            </div>
        </div>
    </div>
@endsection

@push('script-map-user')
    <link 
        rel="stylesheet" 
        href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.css" 
        type="text/css">
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.js"></script>
    <script>
        const long = document.getElementById("longitude").value;
        const lat = document.getElementById("latitude").value;
        const nm_pu = document.getElementById("nm_pu").value;
        const nm_usaha = document.getElementById("nm_usaha").value;
        const no_hp = document.getElementById("no_hp").value;

        const defaultLocation = [long, lat]

        mapboxgl.accessToken = '{{ env('MAPBOX_KEY') }}';
        const map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11', // light-v10, outdoors-v11, satellite-v9, streets-v11, dark-v10
            center: defaultLocation,
            zoom: 10
        });

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

        const mark = new mapboxgl.Marker()
                .setLngLat([long, lat])
                .setPopup(new mapboxgl.Popup({ offset: 25 }).setHTML(
                    `<p>Pemilik : ${nm_pu} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    <p>Toko : ${nm_usaha}</p>
                    <p>No Hp : +62 ${no_hp}</p>`
                ))
                .addTo(map);

        map.addControl(
            new MapboxDirections({
                    accessToken: mapboxgl.accessToken
                }
            ),'top-left'
        );
    </script>
@endpush