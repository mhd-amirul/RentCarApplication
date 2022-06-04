@extends('layouts.main')

@section('container')
<div class="row justify-content-center mb-5">
    <div class="col-lg-6">
        <main class="form-registration mt-3">
                <div class="card mt-2 mb-2 bg-secondary text-white text-left">
                    <div class="card-body p-2">
                        <h3 class="card-title m-0 text-center"> Atur Lokasi Toko</h3>
                    </div>
                </div>
                <div class="card-header bg-dark text-white mt-3 mb-3">
                    Map
                </div>
                <div class="card_body border border-dark">
                    <div id='map' style='width: 100%; height: 70vh;'></div>  
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
        
        map.on('click', (e) => {
                const long = e.lngLat.lng
                const lat = e.lngLat.lat
                
                // const mark = new mapboxgl.Marker()
                //     .setLngLat([long, lat])
                //     .addTo(map);

                document.getElementById("longitude").value = long;
                document.getElementById("latitude").value = lat;
            }
        )
    </script>
@endpush