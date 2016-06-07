@extends('layouts.top-nav')

@section('content')
<img src="https://maps.googleapis.com/maps/api/staticmap?center=Brooklyn+Bridge,New+York,NY&zoom=13&size=600x300&maptype=roadmap
&markers=color:blue%7Clabel:S%7C40.702147,-74.015794&markers=color:green%7Clabel:G%7C40.711614,-74.012318
&markers=color:red%7Clabel:C%7C40.718217,-73.998284&key=AIzaSyBpOXTHWz5Bv1hM63uP_vLTnAB2NQBiQ3g" alt="myMap">

<img src="https://maps.googleapis.com/maps/api/staticmap?center=40.714728,-73.998672&zoom=12&size=400x400&maptype=roadmap&key=AIzaSyBpOXTHWz5Bv1hM63uP_vLTnAB2NQBiQ3g" alt="myMap2">
<img src="https://maps.googleapis.com/maps/api/staticmap?center=40.714728,-73.998672&zoom=12&size=400x400&maptype=terrain&key=AIzaSyBpOXTHWz5Bv1hM63uP_vLTnAB2NQBiQ3g" alt="myMap3">
@stop
