@extends('layouts.app')

@section('title')
    Ajax example
@stop

@section('titledemo')
    Ajax example
@stop

@section('descrdemo')
	Ajax example1
@stop

@section('main-content')
    <h1>REST Countries</h1>
        <ul>
            <li>Get information about countries via a RESTful API</li>
        </ul>

    <div class="row">
        <!-- left column -->
        <div class="col-md-4">
          <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Quick Example</h3>
                </div>
                <!-- form start -->
                {!! Form::open(array('route' => 'voice.store','method'=>'POST')) !!}
                <form role="form">
                  <div class="box-body">
                    <div class="form-group">
                      <label>Countries</label>
                      <select class="form-control" id="selectCountries">
                        <option></option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Age</label>
                      <select class="form-control" id="selectAge">
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Proper</label>
                      <select class="form-control" id="selectProper">
                      </select>
                    </div>
                  </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" id="register">Buscar</button>
                  </div>
                {!! Form::close() !!}
            </div>
        </div>
        <!-- right column -->
        <div class="col-md-8">
            <!-- Horizontal Form -->
            <div class="box box-info" id="broad">
                <div class="box-header with-border">
                  <h3 class="box-title">Horizontal Form</h3>
                </div>
                
              </div>
            </div>
        </div>
    </div>
@stop

@section('includejs')
<script language="javascript" type="text/javascript">
  $.getJSON( "https://doberman.herokuapp.com/countries",function( data ) {
  var output='';
  output  += '<option>';
  output  += '</option>';
    $.each(data, function(key, val) {
        var name = data[key].name;
        output  += '<option value='+name+'>'+name+'</option>';
    });
  document.getElementById('selectCountries').innerHTML=output;
  });
</script>
@stop