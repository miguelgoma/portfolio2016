@extends('layouts.top-nav')

@section('content')

    <h1>Voice Bunny api</h1>
        <ul>
            <li></li>
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
                      <label>Languages</label>
                      <select class="form-control" id="selectLanguage">
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
  $.getJSON( "http://localhost:8000/languages",function( data ) {
  var output='';
  output  += '<option>';
  output  += '</option>';
    $.each(data.languages, function(key, val) {
        var name = data.languages[key].name;
        var id = data.languages[key].id;
        output  += '<option value='+id+'>'+name+'</option>';
    });
  document.getElementById('selectLanguage').innerHTML=output;
  });
  $.getJSON( "http://localhost:8000/genderAndAge",function( gage ) {
    //console.log(gage);
  var Ageoutput='';
  Ageoutput  += '<option>';
  Ageoutput  += '</option>';
    $.each(gage.genderAndAges, function(key, val) {
        var name = gage.genderAndAges[key].name;
        var code = gage.genderAndAges[key].code;
        Ageoutput  += '<option value='+code+'>'+name+'</option>';
    });
  document.getElementById('selectAge').innerHTML=Ageoutput;
  });
  $.getJSON( "http://localhost:8000/purpose",function( pur ) {
  var Propoutput='';
  Propoutput  += '<option>';
  Propoutput  += '</option>';
    $.each(pur.purposes, function(key, val) {
        var name = pur.purposes[key].name;
        var id = pur.purposes[key].id;
        Propoutput  += '<option value='+id+'>'+name+'</option>';
    });
  document.getElementById('selectProper').innerHTML=Propoutput;
  });

  $('#register').on('click', function(e) { 
    e.preventDefault();                               // Prevent it being sent
    var details = $('#register').serialize();         // Serialize form data
    //console.log(details);
    $.getJSON('http://localhost:8000/voicesearch', details, function(caster) {  // Use $.post() to send it
      //$('#register').html(broadcaster);
      var tablefill='';
      //tablefill += '<thead>';
      //tablefill += '<tr>';
      //tablefill += '<th>#</th>';
      //tablefill += '<th>Escuchar al lotutor</th>';
      //tablefill += '<th>Idioma</th>';
      //tablefill += '<th>Precio más bajo</th>';
      //tablefill += '</tr>';
      //tablefill += '</thead>';
      //tablefill += '<tbody>';

      tablefill+='<div class="box box-info">';
            tablefill+='<div class="box-header with-border">';
              tablefill+='<div class="box-tools pull-right">';
                tablefill+='<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>';
                tablefill+='</button>';
                tablefill+='<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>';
              tablefill+='</div>';
            tablefill+='</div>';

      var count=1;
      uris = [];
      $.each(caster.samples, function(key, val) {
          var url = caster.samples[key].url;
          var language = caster.samples[key].language;
          var talentID = caster.samples[key].talentID;
          var lowestListProjectPrice = caster.samples[key].lowestListProjectPrice;
          var currency = caster.samples[key].currency;          
            tablefill+='<div class="box-body">';
              tablefill+='<div class="table-responsive">';
                tablefill+='<table class="table no-margin">';
                  tablefill+='<thead>';
                  tablefill+='<tr>';
                    tablefill+='<th>Order ID</th>';
                    tablefill+='<th>Item</th>';
                  tablefill+='</tr>';
                  tablefill+='</thead>';
                  tablefill+='<tbody>';
                  tablefill+='<tr>';
                    tablefill+='<td><h3 class="box-title">Talent ID '+ talentID +'</h3></td>';
                    tablefill+='<td><video width="280px" height="35" controls><source src="' + url + '" type="video/mp4" /></video></td>';
                  tablefill+='</tr>';
                  tablefill+='</tbody>';
                tablefill+='</table>';
              tablefill+='</div>';
            tablefill+='</div>';
            tablefill+='<div class="box-footer clearfix">';
            tablefill+='</div>';
          tablefill+='</div>';
          count++;
      });
    document.getElementById('broad').innerHTML=tablefill;
    });
  });
</script>
@stop


