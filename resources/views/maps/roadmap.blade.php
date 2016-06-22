@extends('layouts.top-nav-maps')

@section('content')   

@stop
@section('sctpcontent')   
  <script>
  function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 11,
      center: {lat: 40.7127837, lng: -74.00594130000002},
      mapTypeId: google.maps.MapTypeId.HYBRID
    });

    var rectangle = new google.maps.Rectangle({
      strokeColor: '#FF0000',
      strokeOpacity: 0.8,
      strokeWeight: 2,
      fillColor: '#FF0000',
      fillOpacity: 0.35,
      map: map,
      bounds: {
        north: 33.685,
        south: 33.671,
        east: -116.234,
        west: -116.251
      }
    });
  }
  </script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALFYAPf_3Cc1x1HjAM20LucKuJABzQXDw&signed_in=true&callback=initMap"></script>
@stop