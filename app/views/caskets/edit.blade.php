{{Form::model($casket, array('method' => 'put', 'route' => array('caskets.update', $id)))}}

	<div class="row">
		<div class="large-6 columns">
			<label>Name</label>
			{{Form::text('name')}}
		</div>

		<div class="large-6 columns">
			<label>Shell</label>
			{{Form::text('shell')}}
		</div>
	</div>
{{Form::submit('submit')}}

{{Form::close()}}