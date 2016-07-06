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
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Trends</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>User</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Reason</th>
                </tr>
                <tr>
                  <td>183</td>
                  <td>John Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-success">Approved</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>219</td>
                  <td>Alexander Pierce</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-warning">Pending</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>657</td>
                  <td>Bob Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-primary">Approved</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>175</td>
                  <td>Mike Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-danger">Denied</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

      {{$trend}}
@stop
