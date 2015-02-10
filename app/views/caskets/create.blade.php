
		{{Form::open(array('route' => 'caskets.store', 'method' => 'post'))}}



		




		<div class="row">
			<div class="large-6 columns">
				<select name="sort_group">
					<option value="">Choose Type...</option>
					@foreach(CasketType::get() as $casketTypes)
						<option value="{{$casketTypes->name}}">{{$casketTypes->name}}</option>
					@endforeach
				</select>
			</div>

			<div class="large-6 columns">
				<a href="#" data-reveal-id="newType" style="color:#ffffff;font-size:20px;">
					<i class="fi-plus" style="font-size:30px;color:#ffffff;"></i>
						Add New Casket Type</a>
			</div>
		</div>

		<div class="row">&nbsp
		</div>
		<div class="row">
			<div class="large-6 columns">
				{{Form::text('name', '', array('placeholder' => 'Name', 'style' => ''))}}
			</div>

			<div class="large-6 columns">
				{{Form::text('product_id', '', array('placeholder' => 'Product ID', 'style' => ''))}}
			</div>

			<div class="large-6 columns">
				{{Form::text('casket_number', '', array('placeholder' => 'Casket Number', 'style' => ''))}}
			</div>

			<div class="large-6 columns">
				{{Form::text('shell', '', array('placeholder' => 'Shell', 'style' => ''))}}
			</div>

			<div class="large-6 columns">
				{{Form::text('interior', '', array('placeholder' => 'Interior', 'style' => ''))}}
			</div>

			<div class="large-6 columns">
				{{Form::text('material', '', array('placeholder' => 'Material', 'style' => ''))}}
			</div>

			<div class="large-6 columns">
				{{Form::text('casket_group', '', array('placeholder' => 'Casket Group', 'style' => ''))}}
			</div>

			<div class="large-6 columns">
				{{Form::text('manufacturer', '', array('placeholder' => 'Manufacturer', 'style' => ''))}}
			</div>

			<div class="large-6 columns">
				{{Form::text('price', '', array('placeholder' => 'Price', 'style' => ''))}}
			</div>

			<div class="large-6 columns">
				{{Form::text('cost', '', array('placeholder' => 'Cost', 'style' => ''))}}
			</div>

			<div class="large-6 columns">
				{{Form::text('size', '', array('placeholder' => 'Size', 'style' => ''))}}
			</div>

			<div class="large-6 columns">
				{{Form::text('notes', '', array('placeholder' => 'Notes', 'style' => ''))}}
			</div>

			<div class="large-6 columns">
				{{Form::text('panel', '', array('placeholder' => 'Panel', 'style' => ''))}}
			</div>

			<div class="large-6 columns">
				{{Form::text('vault_size', '', array('placeholder' => 'Vault Size', 'style' => ''))}}
			</div>

			<div class="large-6 columns">
				{{Form::text('interior_dimensions', '', array('placeholder' => 'Interior Dimensions', 'style' => ''))}}
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
					<button type="submit" style="font-size:30px;color:#ffffff;background:transparent;border:1px solid;">Create New Casket</button>
				</center>
			</div>

		</div>


	


		{{Form::close()}}


{{-- Modal Code --}}
		<div id="newType" class="reveal-modal" style="max-height:250px;max-width:300px;background-color:transparent;" data-reveal>
		  {{View::make('caskettypes.create')}}
		  <a class="close-reveal-modal">&#215;</a>
		</div>

{{--End Modal Code --}}