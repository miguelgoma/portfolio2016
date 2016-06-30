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
@stop

