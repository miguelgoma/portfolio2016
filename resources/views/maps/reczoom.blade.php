<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Rectangle Zoom</title>
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
// This example creates a rectangle based on the viewport
// on any 'zoom-changed' event.

function initMap() {

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 11,
    center: {lat: 40.748520, lng: -73.981687},
    mapTypeId: google.maps.MapTypeId.TERRAIN
  });

  var rectangle = new google.maps.Rectangle();

  map.addListener('zoom_changed', function() {

    // Get the current bounds, which reflect the bounds before the zoom.
    rectangle.setOptions({
      strokeColor: '#FF0000',
      strokeOpacity: 0.8,
      strokeWeight: 2,
      fillColor: '#FF0000',
      fillOpacity: 0.35,
      map: map,
      bounds: map.getBounds()
    });
  });
}

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALFYAPf_3Cc1x1HjAM20LucKuJABzQXDw&callback=initMap&signed_in=true" async defer>
    </script>
  </body>
</html>