@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-13">
            <div class="row">
                <div class="col">
                    <input type="text" name="longitude" id="longitude" value="{{ isset($shop->longitude) ? $shop->longitude : '97.1374572505087' }}" hidden>
                </div>
                <div class="col">
                    <input type="text" name="latitude" id="latitude" value="{{ isset($shop->latitude) ? $shop->latitude : '5.190902388476289' }}" hidden>
                </div>
            </div>
    
            <div class="card-header bg-dark text-white mt-3 mb-3">
                Map
            </div>
            <div class="card_body border border-dark">
                <div id='map' style='width: 100%; height: 70vh;'></div>  
            </div>
    
            {{-- <form action="" method="post">
                @csrf
                <button class="w-100 btn btn-lg btn-secondary mt-2" type="submit">Atur</button>
            </form> --}}
        </div>
    </div>
@endsection

@push('script-map-user')
    {{-- mapbox --}}
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.js'></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.min.js"></script>

    <script>
        const long = document.getElementById("longitude").value;
        const lat = document.getElementById("latitude").value;

        const defaultLocation = [long, lat]

        mapboxgl.accessToken = '{{ env('MAPBOX_KEY') }}';
        const map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11', // light-v10, outdoors-v11, satellite-v9, streets-v11, dark-v10
            center: defaultLocation,
            zoom: 14.5
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
                .addTo(map);
    </script>
@endpush