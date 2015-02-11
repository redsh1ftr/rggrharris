<ul class="off-canvas-list">

<li class="has-submenu"><a href="#">Caskets</a>
	<ul class="right-submenu">
			<li class="back"><a href="#">Back</a></li>
				<li><a href="#" data-reveal-id="newCasket">New Casket</a></li>
				<li><a href="#" data-reveal-id="editCaskets">Edit Caskets</a></li>
				<li><a href="#" data-reveal-id="newType">New Casket Type</a></li>
				<li><a href="#" data-reveal-id="newSubType">Casket Sub-Types</a></li>
    


	</ul>
</li>
{{-- End List Items --}}



{{-- Modal Code --}}
<div id="newType" class="reveal-modal" style="max-height:250px;max-width:300px;background-color:transparent" data-reveal>
  {{View::make('caskettypes.create')}}
  <a class="close-reveal-modal">&#215;</a>
</div>

<div id="newCasket" class="reveal-modal" style="max-height:550px;max-width:700px;background-color:transparent;overflow-y:scroll;" data-reveal>
  {{View::make('caskets.create')}}
  <a class="close-reveal-modal">&#215;</a>
</div>


<div id="editCaskets" class="reveal-modal" style="max-height:550px;max-width:700px;background-color:transparent;overflow-y:scroll;" data-reveal>
  {{View::make('caskets.editlist')}}
  <a class="close-reveal-modal">&#215;</a>
</div>

<div id="newSubType" class="reveal-modal" style="max-height:550px;max-width:700px;background-color:transparent;overflow-y:scroll;" data-reveal>
  {{View::make('casketSubTypes.index')}}
  <a class="close-reveal-modal">&#215;</a>
</div>



{{-- End Modal Code --}}