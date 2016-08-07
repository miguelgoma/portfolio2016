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
    <div class="alert alert-info alert-dismissible">
	    <h1><i class="fa fa-flag-o"></i> REST Countries</h1>
	    <h2>Get information about countries via a RESTful API</h2>
    </div>

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
                    <label>Countries</label><i class="fa fa-flag"></i>
                      <select class="form-control" id="selectCountries">
                        <option></option>
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
          <div class="box" id="broad">
            <div class="box-header">
              <h3 class="box-title">Results</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tbody><tr>
                  <th>Capital</th>
                  <th>Region</th>
                  <th>Population</th>
                  <th>Area</th>
                  <th>Native Name</th>
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
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

  $('#register').on('click', function(e) { 

  	var selectedCountry = $('#selectCountries :selected').val();
  	//alert(selectedCountry);
	e.preventDefault();

	$.ajax({
      type: 'GET',
      url: 'https://restcountries.eu/rest/v1/name/' + selectedCountry + '?fullText=true'
    })
    .done(function(response) {
      	//console.log(response);
      	var countryData = response[0];
				tablefill='<table class="table table-striped"><tbody><tr>';
                  tablefill+='<td>' + countryData.capital + '</td>';
                  tablefill+='<td>' + countryData.region + '</td>';
                  tablefill+='<td><span class="badge bg-green">'+ countryData.population +'</span></td> ';
                  tablefill+='<td><span class="badge bg-yellow">'+ countryData.area +'</span></td> ';
                  tablefill+='<td>' + countryData.nativeName + '</td></tr></tbody></table>';


      	$('#broad').hide().append(tablefill).show();
    })

  });
</script>
@stop