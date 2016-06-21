<?php
//setup file:

//Database connection:
    include('config/connection.php');
  
  #constant:
   DEFINE('D_TEMPLATE', 'template'); 
  # functions:
   include('functions/data.php');
   include('functions/template.php');
   
   #site stup:
   $debug = data_setting_value($dbc, 'debug-status');
   
   $site_title = 'TEZU CMS3.0';
  
  if(isset($_GET['page'])){
	   $pageid = $_GET['page']; //set $pageid equal to the given id
  }else{
	  $pageid = 'home'; //set the page to home
  }
  
  # page setup:
  $page = data_page($dbc, $pageid);
  
  
  
?>