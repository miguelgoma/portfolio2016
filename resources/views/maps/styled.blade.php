@extends('layouts.top-nav-maps')

@section('content')   

@stop
<script>
function initMap() {
  var customMapType = new google.maps.StyledMapType([
      {
        stylers: [
          {hue: '#890000'},
          {visibility: 'simplified'},
          {gamma: 0.5},
          {weight: 0.5}
        ]
      },
      {
        elementType: 'labels',
        stylers: [{visibility: 'true'}]
      },
      {
        featureType: 'water',
        stylers: [{color: '#2980b9'}]
      },
      {
        featureType: "road.arterial",
        elementType: "geometry",
        stylers: [
          { hue: "#d35400" },
          { saturation: 50 }
        ]
      },{
        featureType: 'landscape.natural.terrain',
        stylers: [
          { visibility: 'true' },
          { color: '#27ae60' }
        ]
      },{
        featureType: 'landscape.natural.landcover',
        stylers: [
          { visibility: 'true' },
          { color: '#34495e' }
        ]
      },{
        featureType: 'poi.park',
        stylers: [
          { visibility: 'true' },
          { color: '#27ae60' }
        ]
      },
    ], {
      name: 'Custom Style'
  });
  var customMapTypeId = 'custom_style';

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 12,
    center: {lat: 25.7616798, lng: -80.19179020000001},  // Miami.
    mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, customMapTypeId]
    }
  });

  map.mapTypes.set(customMapTypeId, customMapType);
  map.setMapTypeId(customMapTypeId);
}

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALFYAPf_3Cc1x1HjAM20LucKuJABzQXDw&signed_in=true&callback=initMap"
        async defer></script>