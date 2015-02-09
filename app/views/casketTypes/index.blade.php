@foreach(CasketType::get() as $casketTypes)

	<li>{{link_to_route('casketIndex', $casketTypes->name, $casketTypes->name)}}</li>

@endforeach