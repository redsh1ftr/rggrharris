

{{-- List Items --}}
<li><a href="#" data-reveal-id="newCasket">New Casket</a></li>
<li><a href="#" data-reveal-id="newType">New Casket Type</a></li>
{{-- End List Items --}}



{{-- Modal Code --}}
<div id="newType" class="reveal-modal" style="max-height:250px;max-width:300px;background-color:transparent" data-reveal>
  {{View::make('caskettypes.create')}}
  <a class="close-reveal-modal">&#215;</a>
</div>

<div id="newCasket" class="reveal-modal" style="max-height:650px;max-width:700px;background-color:transparent;overflow-y:scroll;" data-reveal>
  {{View::make('caskets.create')}}
  <a class="close-reveal-modal">&#215;</a>
</div>

{{-- End Modal Code --}}