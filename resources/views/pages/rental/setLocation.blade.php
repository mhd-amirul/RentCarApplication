@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-12">
        <main class="form-registration mt-3">
                <div class="card-header bg-dark text-white mt-3 mb-3">
                    Atur Lokasi Toko
                </div>
                <div class="card_body border border-dark">
                    <div id='map' style='width: 100%; height: 60vh;'></div>  
                </div>
                <form action="{{ route('saveLocation', $shop->id) }}" method="post">
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
                <button class="w-100 btn btn-lg btn-secondary mt-3" type="submit">Atur</button>
            </form>
        </main>
    </div>
</div>
@endsection

@push('script-map')
    {{-- mapbox --}}
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

        map.addControl(
            new MapboxGeocoder({
                accessToken: mapboxgl.accessToken,
                mapboxgl: mapboxgl
            })
        );

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