<?php
 # start session:
 session_start();
 
 unset($_SESSION['username']); //delete the username key
 
 
 header('Location: login.php');



?>