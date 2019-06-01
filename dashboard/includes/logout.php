<?php
session_start();
if($_SESSION['id_art']){
	session_destroy();
	header("location: ../../index.php");
}else{
	header("location: ../../error/404.html");
}



?>
