 <ul class="off-canvas-list">
        <li><label>Caskets</label></li>



@foreach(CasketType::get() as $casketTypes)

	<li class="has-submenu"><a href="#">{{$casketTypes->name}}</a>
		<ul class="left-submenu">
			<li class="back"><a href="#">Back</a></li>
			<li>{{link_to_route('casketIndex', "All $casketTypes->name", $casketTypes->name)}}</li>

			@foreach(CasketSubType::where('type_id', $casketTypes->id)->get() as $subt)

				<li style="color:#ffffff">{{$subt->name}}</li>

			@endforeach
		</ul>
</li>
@endforeach