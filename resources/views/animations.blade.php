@extends('layouts.boxed_black')

@section('title')
    Animations
@stop

@section('titledemo')    
@stop

@section('main')
<style type="text/css">
.box-body{text-align: center;}

</style>

<section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div id="first_box">
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
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
        <div id="second_box">
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
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div id="third_box">  
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
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div id="four_box">  
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
        </div>
        <!-- ./col -->

        <div class="box-body">
          <div id="using"><h1>JavaScript Animation Using</h1></div>                
          <div id="green"><h1>Green Sock Animation Platform</h1></div>
        </div>

      </div>
      <!-- /.row -->

    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/jquery.lettering-0.6.1.min.js"></script>
    <script src="../js/jquery.scrollorama.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenLite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/plugins/CSSPlugin.min.js"></script>

    <script language="javascript" type="text/javascript">

      $( document ).ready(function() {
          startTweenBox();
      });

      function startTweenBox(){
        TweenLite.from($("#first_box"),1,{delay:0, x:250, y:-225, scale: 1.5,});
        TweenLite.from($("#second_box"),1,{delay:0.5,x:250, y:-225, scale: 1.5,});
        TweenLite.from($("#third_box"),1,{delay:0.7,x:250, y:-225, scale: 1.5,});
        TweenLite.from($("#four_box"),1,{delay:0.9,x:250, y:-225, scale: 1.5,});
        TweenLite.to($("#using"), 5, {color: "ff0000",autoAlpha: 0.5});
      }

    </script>

@stop
