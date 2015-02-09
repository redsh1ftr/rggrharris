
		{{Form::open(array('route' => 'caskets.store', 'method' => 'post'))}}


'product_id',
		'name',
		'type',
		'subtype',
		'casket_number',
		'shell',
		'interior',
		'material',
		'manufacturer',
		'casket_group',
		'sort_group',
		'price',
		'cost',
		'size',
		'notes',
		'panel',
		'vault_size',
		'interior_dimensions',
		'image_1',
		'image_2',
		'image_3',




		<div class="row">
			<div class="large-6 columns">
				{{Form::text('name', '', array('placeholder' => 'Name', 'style' => ''))}}
			</div>

			<div class="large-6 columns">
				{{Form::text('casket_number', '', array('placeholder' => 'Casket Number', 'style' => ''))}}
			</div>

			<div class="large-6 columns">
				{{Form::text('shell', '', array('placeholder' => 'Shell', 'style' => ''))}}
			</div>
		</div>


		<div class="row">
			<div class="large-12 columns">
				{{Form::text('', '', array('placeholder' => '', 'style' => ''))}}
				{{Form::text('', '', array('placeholder' => '', 'style' => ''))}}
				{{Form::text('', '', array('placeholder' => '', 'style' => ''))}}
			</div>
		</div>

		<div class="row">
			<div class="large-12 columns">

			</div>
		</div>
		
		<div class="row">
			<div class="large-12 columns">

			</div>
		</div>


		{{Form::submit('')}}

		{{Form::close()}}

