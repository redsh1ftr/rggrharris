@foreach(Casket::orderBy('name')->get() as $casket)

<a href="#" data-reveal-id="editCasket_{{$casket->id}}" style="color:#ffffff">Edit {{$casket->name}}</a><br>


<div id="editCasket_{{$casket->id}}" class="reveal-modal" style="overflow-y:scroll;max-height:500px;max-width:700px;background-color:transparent" data-reveal>
 
{{Form::model($casket, array('method' => 'put', 'files' => 'truee', 'route' => array('caskets.update', $casket->id)))}}

	<div class="row">
		<div class="small-6 columns">
			<label style="color:#ffffff">Name</label>
			{{Form::text('name')}}
		</div>

		<div class="small-6 columns">
			<label style="color:#ffffff">Product ID</label>
			{{Form::text('product_id')}}
		</div>

		<div class="small-6 columns">
			<label style="color:#ffffff">Casket Number</label>
			{{Form::text('casket_number')}}
		</div>

		<div class="small-6 columns">
			<label style="color:#ffffff">Shell</label>
			{{Form::text('shell')}}
		</div>

		<div class="small-6 columns">
			<label style="color:#ffffff">Interior</label>
			{{Form::text('interior')}}
		</div>

		<div class="small-6 columns">
			<label style="color:#ffffff">Material</label>
			{{Form::text('material')}}
		</div>

		<div class="small-6 columns">
			<label style="color:#ffffff">Casket Group</label>
			{{Form::text('casket_group')}}
		</div>

		<div class="small-6 columns">
			<label style="color:#ffffff">Manufacturer</label>
			{{Form::text('manufacturer')}}
		</div>

		<div class="small-6 columns">
			<label style="color:#ffffff">Price</label>
			{{Form::text('price')}}
		</div>

		<div class="small-6 columns">
			<label style="color:#ffffff">Cost</label>
			{{Form::text('cost')}}
		</div>

		<div class="small-6 columns">
			<label style="color:#ffffff">Size</label>
			{{Form::text('size')}}
		</div>

		<div class="small-6 columns">
			<label style="color:#ffffff">Notes</label>
			{{Form::text('notes')}}
		</div>

		<div class="small-6 columns">
			<label style="color:#ffffff">Panel</label>
			{{Form::text('panel')}}
		</div>

		<div class="small-6 columns">
			<label style="color:#ffffff">Vault Size</label>
			{{Form::text('vault_size')}}
		</div>

		<div class="small-6 columns">
			<label style="color:#ffffff">Interior Dimensions</label>
			{{Form::text('interior_dimensions')}}
		</div>

		<div class="large-6 columns">
		<label style="color:#ffffff"><i class="fi-camera" style="font-size:20px;color:#ffffff"></i> Main Image</label>	
			{{Form::file('image_1', array('style' => 'color:#ffffff'))}}
		</div>
		
		<div class="large-6 columns">
		<label style="color:#ffffff"><i class="fi-camera" style="font-size:20px;color:#ffffff"></i> Interior Image</label>
			{{Form::file('image_2', array('style' => 'color:#ffffff'))}}
		</div>

		<div class="large-6 columns">
		<label style="color:#ffffff"><i class="fi-camera" style="font-size:20px;color:#ffffff"></i> Hardware Image</label>	
			{{Form::file('image_3', array('style' => 'color:#ffffff'))}}
		</div>

		<div class="large-12 columns">
			<center>
				<button type="submit" style="font-size:30px;color:#ffffff;background:transparent;border:2px solid;">Update {{$casket->name}}</button>
			</center>
		</div>














	</div>

{{Form::close()}}
  <a class="close-reveal-modal">&#215;</a>
</div>


@endforeach