
<div class="row">
	
			{{Form::open(array('route' => 'vaults.store', 'method' => 'post', 'files' => 'true'))}}
	
	<div class="large-12 columns">
			{{Form::text('name', '', array('placeholder' => 'Name'))}}
	</div>
	<div class="large-12 columns">
			{{Form::text('liner', '', array('placeholder' => 'Liner'))}}
	</div>
	<div class="large-12 columns">
			{{Form::text('description', '', array('placeholder' => 'Description'))}}
	</div>
	<div class="large-12 columns">
			{{Form::text('price', '', array('placeholder' => 'Price'))}}
	</div>
	<div class="large-12 columns">
			{{Form::file('image_1')}}
	</div>
	<div class="large-12 columns">
			{{Form::file('image_2')}}
	</div>
	<div class="large-12 columns">
			{{Form::file('image_3')}}
	</div>

	<div class="large-12 columns">
				<center>
					<button type="submit" style="font-size:30px;color:#ffffff;background:transparent;border:1px solid;">Create New Vault</button>
				</center>
	</div>

