<?php
//setup file:
 error_reporting(0);
 # Database connection here....
  include('../config/connection.php');
  
  #constant:
   DEFINE('D_TEMPLATE', 'template'); 
  # functions:
   include('functions/data.php');
   include('functions/template.php');
   include('functions/sandbox.php');
   #site stup:
   $debug = data_setting_value($dbc, 'debug-status');
   
   $site_title = 'TEZU CMS3.0';
  
  if(isset($_GET['page'])){
	   $page = $_GET['page']; //set $pageid equal to the given id
  }else{
	  $page = 'dashboard'; //set the page to home
  }
  
  # page setup:
  include('config/queries.php');

  
  #user setup:
  $user = data_user($dbc, $_SESSION['username']);
  
?>