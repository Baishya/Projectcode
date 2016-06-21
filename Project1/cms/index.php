<?php include('config/setup.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $page['title'].' | '.$site_title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include('config/css.php');?>
	<?php include('config/js.php');?>
</head>
<body>
    <div class="wrap">
	<?php include(D_TEMPLATE.'/navigation.php'); ?>
	<br></br>
	<div class="container">
	   <h1><?php echo $page['header']; ?></h1>
	   <div class="row">
	   <div class="col-md-9">
	   <?php echo $page['body_formatted']; ?>
	   </div>
	   <div class="col-md-3">
	      <div class="list-group">
                    <a href = "#"class="list-group-item">
                        <h4 class = "list-group-item-heading">What's New</h4>
                        <p><marquee behavior="scroll" scrollamount="4" direction="up"><?php nav_main($dbc, $pageid); ?>  </p>
                  
                     </marquee></a>
	   
	   </div>
	 </div><!---end container--->  
	</div><!---end row--->
	</div><!---end wrap--->
	<br></br>
	<?php include(D_TEMPLATE.'/footer.php'); ?>
    
	 <?php if($debug == 1) {include('widgets/debug.php');} ?>

	 
</body>
</html>