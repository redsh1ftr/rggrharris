<?php $cask = Casket::take(2)->get();?>


@foreach($cask as $cas)


<script language="javascript">
	    function changeImage().("{{$cas->id}}") {

	        if (document.getElementById("interiorImage_{{$cas->id}}").src == "http://www.tavaresoft.com/harris/web/public/images/{{$cas->image_2}}") 
	        {
	            document.getElementById("interiorImage_{{$cas->id}}").src = "http://www.tavaresoft.com/harris/web/public/images/{{$cas->image_3}}";
	        }
	        else 
	        {
	            document.getElementById("interiorImage_{{$cas->id}}").src = "http://www.tavaresoft.com/harris/web/public/images/{{$cas->image_2}}";
	        }
	    }
	</script>

  <img style="height:600px;" id="interiorImage_{{$cas->id}}" src="http://www.tavaresoft.com/harris/web/public/images/{{$cas->image_2}}" onclick="changeImage()"  />



@endforeach


