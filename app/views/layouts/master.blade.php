<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RG&GR Harris</title>
   <link rel="stylesheet" href="//http://54.149.206.42/rggrharris/public/foundation/css/foundation.css">
   <link rel="stylesheet" href="//http://54.149.206.42/rggrharris/public/foundation/css/normalize.css">
   <link rel="stylesheet" href="//http://54.149.206.42/rggrharris/public/foundation/foundation-icons/foundation-icons.css" />

 <script src="//http://54.149.206.42/rggrharris/public/foundation/js/vendor/modernizr.js"></script>


<style>

	.background{
		background-color: #546544;
		height: 100%;
		width: 100%;
		min-height: 900px;
	}

</style>


@yield('style')


</head>


  		<div class="off-canvas-wrap" data-offcanvas>
		  <div class="inner-wrap">
		    <nav class="tab-bar" style="background-color:#546544">
		      <section class="left-small">
		        <a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
		      </section>

@yield('title')

<section class="right-small">
        <a class="right-off-canvas-toggle menu-icon" href="#"><span></span></a>
      </section>
    </nav>

    <aside class="left-off-canvas-menu" style="background-color:#546544">
      <ul class="off-canvas-list">
        <li><label>Caskets</label></li>
       
        {{View::make('caskettypes.index')}}



</ul>
    </aside>


        <aside class="right-off-canvas-menu" style="background-color:#546544">
      <ul class="off-canvas-list">
        <li><label style="background-color:#546544; color:#ffffff">Actions</label></li>
        {{View::make('layouts.adminmenu')}}
        @yield('right-menu')
</ul>
    </aside>


@yield('content')




  <script src="//http://54.149.206.42/rggrharris/public/foundation/js/vendor/jquery.js"></script>
  <script src="//http://54.149.206.42/rggrharris/public/foundation/js/foundation.min.js"></script>

  <script>
    $(document).foundation();
  </script>


</body>
</html>