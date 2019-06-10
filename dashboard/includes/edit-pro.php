<?php

$nom_projet="";
$date_projet="";
$description_projet="";
$answer=false;
if(isset($_GET['id_por'])){
	
	$id_por=$_GET['id_por'];
	/*
	$projet=mysqli_query($link,"select * from portfolio p, portfolio_pics pc where p.id_por=pc.id_por and id_art='{$id_art}'");
	$pro=mysqli_fetch_array($projet);
	*/
	
	$projet=mysqli_query($link,"select * from portfolio  where id_por='$id_por' and id_art='$id_art'") or die("error select num 1");
	$pro=mysqli_fetch_array($projet);
	
$nom_projet=$pro['nom_projet'] ;
$date_projet=$pro['date_projet'] ;
$description_projet=$pro['description_projet'] ;
	
	//echo $id_por." ".$id_art;
	
	$images=mysqli_query($link,"select * from portfolio_pics where id_por='$id_por'") or die("error select num 2");
	$answer=true;
	
	
	
	
}

//header("location: ../add-projet.php");



?>

