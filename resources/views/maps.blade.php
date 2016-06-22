@extends('layouts.top-nav')

@section('content')
<h1>I´m
<small> the map</small>
</h1>

<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Styled</h3>
        </div>
        <div class="box-body">
          Styled maps allow you to customize the presentation of the standard Google base maps, changing the visual display of such elements as roads, parks, and built-up areas.
        </div>
        <div class="box-body"><center><a href="maps/styled"><img class="img-responsive" src="{{ asset('/img/two_screenshot-culinary.png')}}" alt=""></a></center></div>
        <!-- /.box-body -->
        <div class="box-footer">
          Show me
        </div>
        <!-- /.box-footer-->
</div>

<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Roadmap</h3></div>
        <div class="box-body">Especifica una imagen satelital.</div>
        <div class="box-body"><center><a href="maps/roadmap"><img class="img-responsive" src="{{ asset('/img/two_screenshot-culinary.png')}}" alt=""></a></center></div>
        <!-- /.box-body -->
        <div class="box-footer">
          Show me
        </div>
        <!-- /.box-footer-->
</div>


<div class="box">
        <div class="box-header with-border"><h3 class="box-title">Marker</h3></div>
        <div class="box-body">Especifica una imagen de un mapa de relevamiento físico que muestra terreno y vegetación.</div>
        <div class="box-body"><center><a href="maps/marksicons"><img class="img-responsive" src="{{ asset('/img/two_screenshot-culinary.png')}}" alt=""></a></center></div>
        <!-- /.box-body -->
        <div class="box-footer">
          Show me
        </div>
        <!-- /.box-footer-->
</div>

<div class="box">
        <div class="box-header with-border"><h3 class="box-title">Terrain</h3></div>
        <div class="box-body">Especifica un híbrido de la imagen satelital y del mapa de ruta, y muestra una capa transparente de las calles principales y los nombres de los sitios que aparecen en la imagen satelital.</div>
        <div class="box-body"><center><a href="maps/reczoom"><img class="img-responsive" src="{{ asset('/img/two_screenshot-culinary.png')}}" alt=""></a></center></div>
        <!-- /.box-body -->
        <div class="box-footer">
          Show me
        </div>
        <!-- /.box-footer-->
</div>
@stop
