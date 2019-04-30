
@extends('site.layouts.app')

@section('content')
@endsection
<!DOCTYPE html>
<html>

    <head>		
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			
			<link rel="stylesheet" href="{{URL::to('css/Hall/HallStyle/css/HallShowText.css')}}">
			<link rel="stylesheet" type="text/css" href=" {{URL::to('css/Hall/HallStyle/Slider/style.css')}}" />

			<script type="text/javascript" src="{{URL::to('css/Hall/HallStyle/Slider/jquery.js')}}"></script> -->

		</head>
 
	<body style="background-color :#001a1f ">
		<!-- Slider Block-->
		<div id="wowslider-container1" style="height=500px">
			<div class="ws_images"><!-- make images appears in box-->
				<ul>		
					 @for($i=0;$i<4;$i++)
						<li><img src="{{URL::to('css/Hall/HallStyle/'.$Content[0]['Paths'][$i] )}}" alt="{{$i+1}}" title="{{$i+1}}" id="wows1_.$i+1"/></li>
					@endfor		 

			  </ul>

				<!-- Moving bullets -->
				<div class="ws_bullets">
						<!--  print tooltip-->
						@for($i=1;$i<5;$i++)
						<a href="#" title="{{$i}}"><span><img src="{{URL::to('css/Hall/HallStyle/Slider_body/tooltips/'.$i .'.jpg')}}" alt="{{$i}}"/>1</span></a>
						@endfor
						<br><br>
				</div>
		
			</div>
	
	
			<!-- Print Hall Data and Attribute-->
			 @for ($i=0;$i< count( $Content[2]['Attr'] )-3 ;$i++) 
					if(($Content[2]['Attr'][$i] in_array ( $Content[3]['IgnoredAttribute']))){}
						
							
							<div class="g-margin-b-0--xs">
							<h1 class="w3-xxxlarge w3-text-red"><b>{{ $Content[2]['Attr'][$i]}}</b></h1>
								<?php $Data=  $Content[2]['Attr'][$i] ?>
				
							<input name="{{$Data}}"type="text" class="form-control s-form-v3__input" value="{{	 $Content[1]['HallData']->$Data }}" placeholder="* {{$Data}}"  readonly  style="color:black;background-color:#6efffd">
							</div>
						
						@endfor
		 
		</div>
		<!-- End Slider Block-->

			</body>

</html>

 <script type="text/javascript" src="{{URL::to('css/Hall/HallStyle/Slider/wowslider.js')}}"></script> 
 <script type="text/javascript" src="{{URL::to('css/Hall/HallStyle/Slider/script.js')}}"></script>  -->