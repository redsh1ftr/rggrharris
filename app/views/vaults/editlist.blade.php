@foreach(Vault::orderBy('name')->get() as $vault)

<a href="#" data-reveal-id="editVault_{{$vault->id}}" style="color:#ffffff">Edit {{$vault->name}}</a><br>


<div id="editVault_{{$vault->id}}" class="reveal-modal" style="overflow-y:scroll;max-height:500px;max-width:700px;background-color:transparent" data-reveal>
 
{{Form::model($vault, array('method' => 'put', 'files' => 'true', 'route' => array('vaults.update', $vault->id)))}}

	<div class="row">

		<div class="large-12 columns">
				{{Form::text('name')}}
		</div>
		<div class="large-12 columns">
				{{Form::text('liner')}}
		</div>
		<div class="large-12 columns">
				{{Form::text('description')}}
		</div>
		<div class="large-12 columns">
				{{Form::text('price')}}
		</div>

		<div class="large-12 columns">
		<label  style="color:#ffffff">Main Image</label>
		{{Form::file('image_1', '', array('style' => 'color:#ffffff'))}}
		</div>
		<div class="large-12 columns">
		<label style="color:#ffffff">Image 2</label>
		{{Form::file('image_2', '', array('style' => 'color:#ffffff'))}}
		</div>
		<div class="large-12 columns">
		<label style="color:#ffffff">Image 3</label>
		{{Form::file('image_3', '', array('style' => 'color:#ffffff'))}}
		</div>
		<div class="large-12 columns">
			<center>
				<button type="submit" style="font-size:30px;color:#ffffff;background:transparent;border:2px solid;">Update {{$vault->name}}</button>
			</center>
		</div>






	</div>

{{Form::close()}}
  <a class="close-reveal-modal">&#215;</a>
</div>


@endforeach