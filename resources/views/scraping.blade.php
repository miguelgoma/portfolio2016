@extends('layouts.boxed_purple')

@section('title')
    Web scraping
@stop

@section('titledemo')    
@stop

@section('main')

<div class="small-box bg-green">
	<div class="inner">
	    <h3>Web scraping with Laravel<sup style="font-size: 20px"></sup></h3>
	</div>
  	<div class="icon">  </div>
  	<a href="#" class="small-box-footer"></a>
</div>

<div class="box">
  <div class="box-header">
    <h3 class="box-title">New courses in ebookee.org</h3>
  </div>
  <div class="box-body no-padding">
    <table class="table table-condensed">
      	<tbody>
	      	<tr>
	        	<th>Courses</th>
	      	</tr>
	      	@foreach (json_decode($response) as $resp)
		    	<tr>
		        	<td>{{ $resp->number }}. {{ $resp->title }}</td>
		      	</tr>
	      	@endforeach
    	</tbody>
    </table>
  </div>
</div>

<div class="callout callout-danger">
    <h4>Tip!</h4>
	    <p>This information is for informational purposes only.</p>
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
