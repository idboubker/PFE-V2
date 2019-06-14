<?php

session_start();
$id_art=$_SESSION['id_art'];
if(empty($id_art)){
	header("location: ../authentification.php?error=dash");
}
$id_art=$_SESSION['id_art'];
require("../connexion.php");
mysqli_set_charset(mysqli_connect('localhost', 'root', '', 'mou9ef'),"utf8");


$artisan=mysqli_query($link,"select * from 
artisan a,
artisan_details ad, 
villes v, 
meties m 
where 
v.id_vil=a.ville and 
m.id_met=a.metier and 
a.id_art=ad.id_art and 
a.id_art='$id_art'") 
or header("location: ../error/404.html");

$art=mysqli_fetch_array($artisan);



?>


