@extends('layouts.app')

@section('contentheader_title')
Twitter API
@stop

@section('main-content')
<div class="row">
  <div class="col-md-4 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">CPU Traffic</span>
        <span class="info-box-number">90<small>%</small></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-md-4 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Likes</span>
        <span class="info-box-number">41,410</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->

  <!-- fix for small devices only -->
  <div class="clearfix visible-sm-block"></div>

  <div class="col-md-4 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Sales</span>
        <span class="info-box-number">760</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
</div>

<div class="row">
<div class="col-md-4">
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Barackobama</h3>
  </div>
  <div class="box-body no-padding">
    <table class="table table-striped">
      <tbody><tr>
        <th>Tweet</th>
        <th>Date</th>
      </tr>
      @foreach (json_decode($barackobama) as $r)
      <tr>
        <th><?PHP echo Twitter::linkify($r->text)?></th>
        <th>{{ date("Y-m-d h:i:sa",strtotime($r->created_at)) }}</th>
      </tr>
      @endforeach
    </tbody></table>
    </div>
  </div>
</div>

<div class="col-md-4">
<div class="box">
    <div class="box-header">
      <h3 class="box-title">El Universal</h3>
    </div>
    <div class="box-body no-padding">
      <table class="table table-striped">
        <tbody><tr>
          <th>Tweet</th>
          <th>Date</th>
        </tr>
      @foreach (json_decode($El_Universal_Mx) as $m)
      <tr>
        <th><?PHP echo Twitter::linkify($m->text)?></th>
        <th>{{ date("Y-m-d h:i:sa",strtotime($m->created_at)) }}</th>
      </tr>
      @endforeach
    </tbody></table>
    </div>
  </div>
</div>

<div class="col-md-4">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Villalvazo</h3>
    </div>
    <div class="box-body no-padding">
      <table class="table table-striped">
        <tbody>
        <tr>
          <th>Tweet</th>
          <th>Date</th>
        </tr>
        @foreach (json_decode($VILLALVAZO13) as $v)
          <tr>
              <th><?PHP echo Twitter::linkify($v->text)?></th>
              <th>{{ date("Y-m-d h:i:sa",strtotime($v->created_at)) }}</th>
          </tr>
          @endforeach
      </tbody></table>
    </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-4">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Trends of México</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tbody><tr>
            <th>name</th>
            <th>url</th>
            <th># vol</th>
          </tr>
          <?php $jsontrend = json_decode($trend,true); ?>
          @for ($i = 0; $i < 11; $i++)
            <tr>
              <td>{{$jsontrend[0]["trends"][$i]["name"]}}</td>
              <td>{{$jsontrend[0]["trends"][$i]["url"]}}</td>
              <td>{{$jsontrend[0]["trends"][$i]["tweet_volume"]}}</td>                    
            </tr>
          @endfor
        </tbody></table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>

  <div class="col-md-4">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Trends of Miami</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tbody><tr>
            <th>name</th>
            <th>url</th>
            <th># vol</th>
          </tr>
          <?php $jsonmiamitrend = json_decode($miamitrend,true); ?>
          @for ($i = 0; $i < 11; $i++)
            <tr>
              <td>{{$jsonmiamitrend[0]["trends"][$i]["name"]}}</td>
              <td>{{$jsonmiamitrend[0]["trends"][$i]["url"]}}</td>
              <td>{{$jsonmiamitrend[0]["trends"][$i]["tweet_volume"]}}</td>                    
            </tr>
          @endfor
        </tbody></table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>

  <div class="col-md-4">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Trends of Barcelona</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tbody><tr>
            <th>name</th>
            <th>url</th>
            <th># vol</th>
          </tr>
          <?php $jsonbarcelonaTrend = json_decode($barcelonaTrend,true); ?>
          @for ($i = 0; $i < 11; $i++)
            <tr>
              <td>{{$jsonbarcelonaTrend[0]["trends"][$i]["name"]}}</td>
              <td>{{$jsonbarcelonaTrend[0]["trends"][$i]["url"]}}</td>
              <td>{{$jsonbarcelonaTrend[0]["trends"][$i]["tweet_volume"]}}</td>                    
            </tr>
          @endfor
        </tbody></table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-85164732-1', 'auto');
  ga('send', 'pageview');

</script>
      
@stop
