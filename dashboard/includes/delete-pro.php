<?php

if(isset($_GET['id_por_del'])){
	$id_por_del=$_GET['id_por_del'];
$delete=mysqli_query($link,"delete from portfolio where id_por=$id_por_del and id_art=$id_art")or header("location: ../error/404.html");
	
	}

?>