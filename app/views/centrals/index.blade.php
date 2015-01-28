@extends('layouts.master')




@section('title')

@stop





@section('right-menu')

<li>NEW ACTION</li>

@stop





@section('style')

@stop





@section('content')

<div class="background">
	<center>

		{{View::make('vaults.index')}}
	</center>
</div>


@stop