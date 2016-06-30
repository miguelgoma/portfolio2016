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
                    <button type="submit" class="btn btn-primary">Buscar</button>
                  </div>
                {!! Form::close() !!}
            </div>
        </div>
        <!-- right column -->
        <div class="col-md-8">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Horizontal Form</h3>
                </div>
                <!-- form start -->
                <form class="form-horizontal">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> Remember me
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-info pull-right">Sign in</button>
                  </div>
                </form>
              </div>
            </div>
        </div>
    </div>
@stop

@section('includejs')
<script language="javascript" type="text/javascript">
  $.getJSON( "https://doberman.herokuapp.com/languages",function( data ) {
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
  $.getJSON( "https://doberman.herokuapp.com/genderAndAge",function( gage ) {
    console.log(gage);
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
  $.getJSON( "https://doberman.herokuapp.com/purpose",function( pur ) {
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

  $('#register').on('submit', function(e) {           // When form is submitted
    e.preventDefault();                               // Prevent it being sent
    var details = $('#register').serialize();         // Serialize form data
    console.log(details);
    $.getJSON('../voiceb/voicebws/voiceb.php', details, function(caster) {  // Use $.post() to send it
      //$('#register').html(broadcaster);
      var tablefill='';
      tablefill += '<thead>';
      tablefill += '<tr>';
      tablefill += '<th>#</th>';
      tablefill += '<th>Escuchar al lotutor</th>';
      tablefill += '<th>Idioma</th>';
      tablefill += '<th>Precio más bajo</th>';
      tablefill += '</tr>';
      tablefill += '</thead>';
      tablefill += '<tbody>';

      var count=1;
      uris = [];
      $.each(caster.samples, function(key, val) {
          var url = caster.samples[key].url;
          var language = caster.samples[key].language;
          var lowestListProjectPrice = caster.samples[key].lowestListProjectPrice;
          var currency = caster.samples[key].currency;
      tablefill += '<tr">';
      tablefill += '<td>'+count+'</td>';
      //var b='<button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target=".bs-example-modal-sm">About</button>';
      //var a='<a href="#" class="listenBroadcaster" onclick="listenBroadcaster('+count+')">Escuchar</a>';
      tablefill += '<td>'+'<video width="280px" height="25" controls><source src="' + url + '" type="video/mp4" /></video>'+'</td>';
        tablefill += '<td>'+language+'</td>';
          tablefill += '<td>'+currency+' '+lowestListProjectPrice+'</td>';
            tablefill += '</tr>';
            count++;
      });
    document.getElementById('broad').innerHTML=tablefill;
    });
  });
</script>
@stop
