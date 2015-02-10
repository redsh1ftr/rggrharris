
{{Form::open(array('route' => 'caskettypesindex.store', 'method' => 'post'))}}


	@foreach(Casket::all() as $caskets)

		{{$caskets->name}}{{Form::checkbox("casket_id[$caskets->id]", $caskets->id, '')}}<br>

	@endforeach

{{Form::submit('sub')}}

{{Form::close()}}