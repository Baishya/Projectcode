<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

      <?php if($debug == 1) { ?>
     <button id="btn-debug" class="btn btn-default"><i class="fa fa-bug"></i></button>  
      <?php } ?>
   <div class="container">
   
		<ul class="nav navbar-nav">
		<?php nav_main($dbc, $pageid); ?>
		
		<li><a href="#">FAQ</a></li>
		<li><a href="#">CONTACT</a></li>
		</ul>
   </div>
</nav><!----END NAV---->