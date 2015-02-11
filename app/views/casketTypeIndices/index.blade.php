<?php $type = 'candy';?>
{{Form::open(array('route' => 'caskettypesindex.store', 'method' => 'post'))}}
	
	{{Form::hidden('subtype_id', $type)}}

	@foreach(Casket::all() as $caskets)
	
		<?php $checkindex = CasketTypeIndex::where('subtype_id', $type)->where('casket_id', $caskets->id)->pluck('id');?>

		{{$caskets->name}}{{Form::checkbox("casket_id[$caskets->id]", $caskets->id, $checkindex)}}<br>
		
	@endforeach

{{Form::submit('sub')}}

{{Form::close()}}