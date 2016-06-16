<!DOCTYPE html>
<html>
  <head>
    <title>Simple styled maps</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
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
      },
    ], {
      name: 'Custom Style'
  });
  var customMapTypeId = 'custom_style';

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 12,
    center: {lat: 40.674, lng: -73.946},  // Brooklyn.
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
  </body>
</html>