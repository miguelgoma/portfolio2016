@extends('layouts.top-nav')

@section('content')
<h1>Mapas
<small>¿De que tipo necesita?</small>
</h1>

<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Roadmap</h3>
        </div>
        <div class="box-body">
          Predeterminado, especifica una imagen de mapa de ruta estándar, como habitualmente se muestra en el sitio web de Google Maps. Si no se especifica un valor de maptype, Google Static Maps API proporciona mosaicos de roadmap de forma predeterminada.
        </div>
        <div class="box-body"><center><a href="maps/roadmap"><img class="img-responsive" src="{{ asset('/img/two_screenshot-culinary.png')}}" alt=""></a></center></div>
        <!-- /.box-body -->
        <div class="box-footer">
          Ver
        </div>
        <!-- /.box-footer-->
</div>

<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Satellite</h3></div>
        <div class="box-body">Especifica una imagen satelital.</div>
        <div class="box-body"><center><a href="voice"><img class="img-responsive" src="{{ asset('/img/two_screenshot-culinary.png')}}" alt=""></a></center></div>
        <!-- /.box-body -->
        <div class="box-footer">
          Ver
        </div>
        <!-- /.box-footer-->
</div>


<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Terrain</h3></div>
        <div class="box-body">Especifica una imagen de un mapa de relevamiento físico que muestra terreno y vegetación.</div>
        <div class="box-body"><center><a href="voice"><img class="img-responsive" src="{{ asset('/img/two_screenshot-culinary.png')}}" alt=""></a></center></div>
        <!-- /.box-body -->
        <div class="box-footer">
          Ver
        </div>
        <!-- /.box-footer-->
</div>

<div class="box">
        <div class="box-header with-border"><h3 class="box-title">Hybrid</h3></div>
        <div class="box-body">Especifica un híbrido de la imagen satelital y del mapa de ruta, y muestra una capa transparente de las calles principales y los nombres de los sitios que aparecen en la imagen satelital.</div>
        <div class="box-body"><center><a href="voice"><img class="img-responsive" src="{{ asset('/img/two_screenshot-culinary.png')}}" alt=""></a></center></div>
        <!-- /.box-body -->
        <div class="box-footer">
          Ver
        </div>
        <!-- /.box-footer-->
</div>




@stop
