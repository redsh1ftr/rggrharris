@extends('layouts.master')




@section('title')

@stop





@section('right-menu')

@stop





@section('style')
	
	<style>

		.rightList{
			position: absolute;
			height: 30%;
			width: 20%;
			margin-left: 80%;
			margin-top: 10%;
		}
	</style>

@stop





@section('content')



<div class="background">
	<center>


			<div class="rightList">
				<ul class="tabs vertical" data-tab>
				  <li><a href="#panel11">Tab 1</a></li>
				  <li><a href="#panel21">Tab 2</a></li>
				  <li><a href="#panel31">Tab 3</a></li>
				  <li><a href="#panel41">Tab 4</a></li>
				</ul>

			</div>




<div class="tabs-content">
  <div class="content active" id="panel11">
    <p>This is the first panel of the basic tab example. You can place all sorts of content here including a grid.</p>
  </div>
  <div class="content" id="panel21">
    <p>This is the second panel of the basic tab example. This is the second panel of the basic tab example.</p>
  </div>
  <div class="content" id="panel31">
    <p>This is the third panel of the basic tab example. This is the third panel of the basic tab example.</p>
  </div>
  <div class="content" id="panel41">
    <p>This is the fourth panel of the basic tab example. This is the fourth panel of the basic tab example.</p>
  </div>
</div>




	</center>
</div>




@stop