@extends('layouts.top-nav')

@section('content')
<div class="row">
<div class="col-md-6">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Taylor</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
<div class="box-body table-responsive no-padding">
            <table class="table table-hover">
            <tbody>
    @foreach (json_decode($response) as $r)
    <tr>
        <th>Tweet {{ $r->text }}</th>
        <th>Date {{ $r->created_at }}</th>
        </tr>
    @endforeach
              </tbody></table>
            </div>
          </div>
        </div>

<div class="col-md-6">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">El Universal</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
<div class="box-body table-responsive no-padding">
            <table class="table table-hover">
            <tbody>
    @foreach (json_decode($El_Universal_Mx) as $m)
    <tr>
        <th>Tweet {{ $m->text }}</th>
        <th>Date {{ $m->created_at }}</th>
    </tr>
    @endforeach
              </tbody></table>
            </div>
          </div>
        </div>
</div>


<div class="col-md-6">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Villalvazo</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
<div class="box-body table-responsive no-padding">
            <table class="table table-hover">
            <tbody>
    @foreach (json_decode($VILLALVAZO13) as $v)
    <tr>
        <th>Tweet {{ $v->text }}</th>
        <th>Date {{ $v->created_at }}</th>
    </tr>
    @endforeach
              </tbody></table>
            </div>
          </div>
        </div>
</div>
@stop
