@foreach(Casket::orderBy('name')->get() as $casket)

<li><a href="#" data-reveal-id="editCasket_{{$casket->id}}">Edit {{$casket->name}}</a></li>


<div id="editCasket_{{$casket->id}}" class="reveal-modal" style="max-height:500px;max-width:700px;background-color:transparent" data-reveal>
 
{{Form::model($casket, array('method' => 'put', 'route' => array('caskets.update', $casket->id)))}}

	<div class="row">
		<div class="small-6 columns">
			<label style="color:#ffffff">Name</label>
			{{Form::text('name')}}
		</div>

		<div class="small-6 columns">
			<label style="color:#ffffff">Shell</label>
			{{Form::text('shell')}}
		</div>
	</div>
{{Form::submit('submit')}}

{{Form::close()}}
  <a class="close-reveal-modal">&#215;</a>
</div>


@endforeach