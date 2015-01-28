<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RGGR Harris</title>
   <link href="http://www.eternallynocturnal.com/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
   <link rel="stylesheet" href="http://www.eternallynocturnal.com/foundation/css/foundation.css">
   <link rel="stylesheet" href="http://www.eternallynocturnal.com/foundation/css/normalize.css">

 <script src="http://www.eternallynocturnal.com/foundation/js/vendor/modernizr.js"></script>


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
<li>Test</li>



</ul>
    </aside>


        <aside class="right-off-canvas-menu" style="background-color:#546544">
      <ul class="off-canvas-list">
        <li><label style="background-color:#546544; color:#ffffff">Actions</label></li>
        @yield('right-menu')
</ul>
    </aside>


@yield('content')










   <script src="http://www.eternallynocturnal.com/bootstrap/js/bootstrap.min.js"></script>

  <script src="http://www.eternallynocturnal.com/foundation/js/vendor/jquery.js"></script>
  <script src="http://www.eternallynocturnal.com/foundation/js/foundation.min.js"></script>

  <script>
    $(document).foundation();
  </script>


</body>
</html>