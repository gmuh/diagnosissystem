<?php 
session_start();
$_SESSION = array();
session_destroy();
setcookie (session_name(), '', time()-300);
header("location:home.php");
?>