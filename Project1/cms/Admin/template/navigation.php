<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

   
		<ul class="nav navbar-nav">
		
		<li><a href="?page=dashboard">Dashboard</a></li>
		<li><a href="?page=pages">Pages</a></li>
		<li><a href="?page=users">Users</a></li>
		<li><a href="?page=settings">Settings</a></li>
		
		
		</ul>
       <div class="pull-right">
			   <ul class = "nav navbar-nav">
			   
				  <li>
						<?php if($debug == 1) { ?>
						<button type = "button" id="btn-debug" class="btn btn-default navbar-btn"><i class="fa fa-bug"></i></button>  
						<?php } ?>
				  </li>
			       <li class = "dropdown">
				   <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $user['fullname']; ?><span class="caret"></span></a>
				     <ul class="dropdown-menu">
				     
				     </ul>
					  <li><a href="logout.php">Logout</a></li> 
				  </li>
				  
			    </ul>
	  </div><!---pull right--> 
</nav><!----END NAV---->