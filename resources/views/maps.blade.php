@extends('layouts.top-nav')

@section('content')

<h1><i class="fa fa-map-pin" aria-hidden="true"></i>´m
<small> the map</small>
</h1>

<div class="row">
        <div class="col-md-6">
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-warningfa fa-map-marker"></i>

              <h3 class="box-title">Roadmap</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">              
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                Especifica una imagen satelital.
              </div>
              <div class="box-body"><center><a href="maps/roadmap"><img class="img-responsive" src="{{ asset('/img/maps_newyork.png')}}" alt=""></a></center></div>
                <!-- /.box-body -->
                <div class="box-footer">
                  Show me
                </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-md-6">
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-map-marker"></i>
              <h3 class="box-title">Styled</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">              
              <div class="callout callout-info">
              <h4><i class="icon fa fa-check"></i> Styled!</h4>
                <p>Styled maps allow you to customize the presentation of the standard Google maps.</p>
              </div>
              <div class="box-body"><center><a href="maps/styled"><img class="img-responsive" src="{{ asset('/img/maps_miami.png')}}" alt=""></a></center></div>
              <!-- /.box-body -->
              <div class="box-footer">
                Show me
              </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>

<div class="row">
        <div class="col-md-6">
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-map-marker"></i>

              <h3 class="box-title">Marker</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">              
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                Especifica una imagen de un mapa de relevamiento físico que muestra terreno y vegetación.
              </div>
              <div class="box-body"><center><a href="maps/marksicons"><img class="img-responsive" src="{{ asset('/img/two_screenshot-culinary.png')}}" alt=""></a></center></div>
             <!-- /.box-body -->
             <div class="box-footer">
               Show me
             </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-md-6">
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-bullhornfa fa-map-marker"></i>
              <h3 class="box-title">Terrain</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">              
              <div class="callout callout-info">
              <h4><i class="icon fa fa-check"></i> Terrain!</h4>
                <p>Especifica un híbrido de la imagen satelital y del mapa de ruta, y muestra una capa transparente de las calles principales y los nombres de los sitios.</p>
              </div>
              <div class="box-body"><center><a href="maps/reczoom"><img class="img-responsive" src="{{ asset('/img/two_screenshot-culinary.png')}}" alt=""></a></center></div>
             <!-- /.box-body -->
             <div class="box-footer">
               Show me
             </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
@stop