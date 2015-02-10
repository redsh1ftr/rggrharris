@extends('layouts.master')




@section('title')

@stop





@section('right-menu')

<li>NEW ACTION</li>

@stop





@section('style')

	<style>

		.rightList{
			position: absolute;
			max-height: 30%;
			max-width: 20%;
			overflow-y:scroll;
			margin-left: 80%;
			margin-top: 1%;
		}

		.thumbnails{
			position: absolute;
			margin-top: 10%;
			margin-left: 60%;
		}

		.navi{
			position: absolute;
			margin-bottom: 1%;
			margin-left: 40%;
		}



	</style>

@stop





@section('content')

<div class="background">
	<center>


			<div class="rightList">
				<ul class="tabs" data-tab>
				  
				  	@foreach($casket as $cas)
				  <li style="width:180px"><a href="#panel_{{$cas->id}}" style="background:transparent" class="button tiny round">{{$cas->name}}</a></li>
				  	@endforeach
				  
				</ul>

			</div>




<div class="tabs-content">

	@foreach($casket as $cas)


			  <div class="content" id="panel_{{$cas->id}}">

			  	<div class="thumbnails">

					<a href="#" data-reveal-id="image1{{$cas->id}}">
						<img style="max-height:100px;max-width:100px;overflow:hidden;" src="http://www.tavaresoft.com/harris/web/public/images/{{$cas->image_2}}"></a>
					<a href="#" data-reveal-id="image2{{$cas->id}}">
						<img style="max-height:100px;max-width:100px;overflow:hidden;" src="http://www.tavaresoft.com/harris/web/public/images/{{$cas->image_3}}"></a>
				
				</div>


<div id="image1{{$cas->id}}" class="reveal-modal" data-reveal>

	<?php $image = Casket::where('id', $cas->id)->pluck('id');?>



  <img style="height:600px;" id="interiorImage_{{$cas->id}}" src="http://www.tavaresoft.com/harris/web/public/images/{{$cas->image_2}}" onclick="changeImage({{$image}})"  />




  <a class="close-reveal-modal">&#215;</a>
</div>

<div id="image2{{$cas->id}}" class="reveal-modal" data-reveal>

<img style="height:600px;" id="hardwareImage_{{$cas->id}}" onclick="changeImage()" src="http://www.tavaresoft.com/harris/web/public/images/{{$cas->image_3}}" onclick="changeImage()"  />



  
   <a class="close-reveal-modal">&#215;</a>
</div>


			  	<div class="row">
					<img style="height:600px;" src="http://www.tavaresoft.com/harris/web/public/images/{{$cas->image_1}}">
				</div>

				<div class="row">
					{{$cas->name}}
				</div>


			<div class="row">
					DATA
			</div>

		
			<div class="navi">
					<ul class="tabs" data-tab>
					  <li class="tab-title"><a style="background-color:transparent" href="#panel_{{$cas->GetPrev($cas->sort_group)}}">
					  	<i class="fi-arrow-left" style="color:#ffffff;font-size:30px;"></i></a></li>
					  <li class="tab-title"><a style="background-color:transparent" href="#panel_{{$cas->GetNext($cas->sort_group)}}">
					  	<i class="fi-arrow-right" style="color:#ffffff;font-size:30px;"></i></a></li>
					</ul>
				
		

			  </div>

			</div>



			


	@endforeach
</div>




	</center>
</div>













@stop