@foreach(CasketType::orderBy('name')->get() as $casket)

<a href="#" data-reveal-id="newSubType_{{$casket->id}}" style="color:#ffffff">Add Subtype to {{$casket->name}}</a><br>


<div id="newSubType_{{$casket->id}}" class="reveal-modal" style="max-height:500px;max-width:700px;overflow-y:scroll;background-color:transparent" data-reveal>

<div style="color:#ffffff">Current Subtypes for {{$casket->name}} (click to edit):<br>

<?php $count = 1;?>

	@foreach(CasketSubType::where('type_id', $casket->id)->get() as $current)
		{{$count++}}. <a href="#" data-reveal-id="editSubType_{{$current->id}}" style="color:#ffffff">{{$current->name}}</a><br>

			<div id="editSubType_{{$current->id}}" class="reveal-modal" style="max-height:500px;max-width:700px;background-color:transparent;overflow-y:scroll;" data-reveal>

		




				{{Form::model($current, array('method' => 'put', 'route' => array('casketsubtypes.update', $current->id)))}}

				{{Form::text('name')}}

				<div class="large-12 columns">
					<center>
						<button type="submit" style="font-size:30px;color:#ffffff;background:transparent;">Update {{$current->name}}'s name</button>
					</center>
				</div>

				{{Form::close()}}


				{{Form::open(array('route' => 'caskettypesindex.store', 'method' => 'post'))}}
	
					{{Form::hidden('subtype_id', $current->name)}}
			
				<table style="align:center"><th>Check to Add<th>&nbsp<th>Check to Remove<tr>
					@foreach(Casket::all() as $caskets)
					
						<?php $checkindex = CasketTypeIndex::where('subtype_id', $current->name)->where('casket_id', $caskets->id)->pluck('casket_id');?>

						<td>{{Form::checkbox("casket_id[$caskets->id]", $caskets->id, $checkindex)}}
						<td>{{$caskets->name}}
						<td>{{Form::checkbox("removecasket_id[$caskets->id]", $caskets->id, '')}}
							<tr>
						
					@endforeach
				</table>

				{{Form::submit('sub')}}

				{{Form::close()}}




			 <a class="close-reveal-modal">&#215;</a>
			</div>


	@endforeach
</div>

<br>
{{Form::open(array('route' => 'casketsubtypes.store', 'method' => 'post'))}}

{{Form::hidden('type_id', $casket->id)}}
{{Form::text('name')}}
<div class="large-12 columns">
				<center>
					<button type="submit" style="font-size:30px;color:#ffffff;background:transparent;border:2px solid;">Create New Subtype</button>
				</center>
			</div>

{{Form::close()}}
  <a class="close-reveal-modal">&#215;</a>
</div>


@endforeach