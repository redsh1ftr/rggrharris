{{Form::open(array('route' => 'caskettypes.store', 'method' => 'post'))}}

{{Form::text('name', '', array('placeholder' => 'Hardwood, Steel, etc.', 'style' => 'width:200px'))}}

{{Form::submit('Create New Casket Type')}}

{{Form::close()}}