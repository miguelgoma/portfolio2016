@extends('layouts.boxed_black')

@section('title')
    Animations
@stop

@section('titledemo')    
@stop

@section('main')

<section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>New Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Bounce Rate</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

      <h2>JavaScript Animation Using</h2>
      <h2>Green Sock Animation Platform</h2>

    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/jquery.lettering-0.6.1.min.js"></script>
    <script src="../js/jquery.scrollorama.js"></script>
    <script type="text/javascript" src="../js/plugins/CSSPlugin.js"></script>
    <script type="text/javascript" src="../js/easing/EasePack.js"></script>
    <script type="text/javascript" src="../js/TimelineLite.js"></script>
    <script type="text/javascript" src="../js/TweenLite.js"></script>

    <script language="javascript" type="text/javascript">
             $( document ).ready(function() {
                var ball = document.getElementById('ball'),
                    colors = ["#480e6e","#fc4239","#ffd400","#00c4df"];
                function play() {
                    ball.style.marginLeft = "0px";
                    ball.style.marginTop = "350px";
                    var tl = new TimelineLite({delay:0.5});
                    tl.to(ball, 0.5, {css:{marginTop:0}})
                      .to(ball, 1.25, {css:{marginTop:350}, ease:Bounce.easeOut})
                      .to(ball, 3.5, {css:{marginLeft:"+=450px"}}, -1.75)
                      .to(ball, 1, {css:{marginLeft:0, backgroundColor:colors[ Math.floor(Math.random() * colors.length) ]}}, 1)
                      .call(play);
                }
                play();
            });
    </script>

@stop
