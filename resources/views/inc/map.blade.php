<!-- Import leaflet.js untuk maps -->
<link rel="stylesheet" href="{{ asset('css/leaflet.css') }}"/>
<script src="{{ asset('js/leaflet.js') }}"></script>

<!-- Style untuk maps (tinggi) -->
<style> #mapid { height: 300px; } </style>

<script>
    
    var mapCenter = [{{  $taxpayer->lat ?? (request('latitude') ?? -4.0185)  }}, {{ $taxpayer->long ?? (request('longitude') ?? 119.6710) }}];
    console.log(mapCenter);
    
    var map = L.map('mapid').setView(mapCenter, 12);
    
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    
    var marker = L.marker(mapCenter).addTo(map);
    
    function updateMarker(lat, lng) {
        marker
        .setLatLng([lat, lng])
        .bindPopup("Your location :  " + marker.getLatLng().toString())
        .openPopup();
        return false;
    };
    
    map.on('click', function(e) {
        let lat = e.latlng.lat.toString().substring(0, 15);
        let long = e.latlng.lng.toString().substring(0, 15);
        
        $('#latitude').val(lat);
        $('#longitude').val(long);
        updateMarker(lat, long);
    });
    
    var updateMarkerByInputs = function() {
        return updateMarker( $('#latitude').val() , $('#longitude').val());
    }
    
    $('#latitude').on('input', updateMarkerByInputs);
    $('#longitude').on('input', updateMarkerByInputs);
</script>