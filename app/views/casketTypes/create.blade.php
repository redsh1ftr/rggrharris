{{Form::open(array('route' => 'caskettypes.store', 'method' => 'post'))}}

{{Form::text('name', '', array('placeholder' => 'Hardwood, Steel, etc.', 'style' => 'width:200px'))}}

<div class="large-12 columns">
				<center>
					<button type="submit" style="font-size:15px;color:#ffffff;background:transparent;border:1px solid;">Create Casket Type</button>
				</center>
			</div>

{{Form::close()}}