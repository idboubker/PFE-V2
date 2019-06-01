<?php


if(isset($_POST['mod-prof'])){
$link = mysqli_connect("localhost","root","","mou9ef");
	
session_start();
$id_art=$_SESSION['id_art'];
	
$nom_art=$_POST['nom_art'];
$prenom_art=$_POST['prenom_art'];
$sexe_art=$_POST['sexe_art'];
$email_art=$_POST['email_art'];	
$dateNaissance=$_POST['dateNaissance'];
$ville=$_POST['ville'];
$metier=$_POST['metier'];
$tele=$_POST['tele'];

$whatsapp=$_POST['whatsapp'];
$facebook=$_POST['facebook'];
$description=$_POST['description'];
$code_postal=$_POST['code_postal'];
$quartier=$_POST['quartier'];
$pwd_art=$_POST['pwd_art'];
	
	
	
/*	echo $nom_art."<br>".
$prenom_art."<br>".
$sexe_art."<br>".
$email_art."<br>".
$dateNaissance."<br>".
$ville."<br>".
$metier."<br>".
$tele."<br>".

$whatsapp."<br>".
$facebook."<br>".
$description."<br>".
$code_postal."<br>".
$quartier."<br>".
$pwd_art."<br>$id_art<br>";
*/
	
	
		$modify="update artisan a,artisan_details ad set     
		  a.nom_art='$nom_art'
		, a.prenom_art='$prenom_art'
		, a.sexe_art='$sexe_art'
		, a.dateNaissance='$dateNaissance'
		, a.ville='$ville'
		, a.metier='$metier'
		, a.email_art='$email_art'
		, a.tele='$tele'
		
		, ad.whatsapp='$whatsapp'
		, ad.facebook='$facebook'
		, ad.description='$description'
		, ad.code_postal='$code_postal'
		, ad.quartier='$quartier'
		
		where a.id_art=ad.id_art and a.id_art='$id_art' and a.pwd_art='$pwd_art' ";
	
		$modifier=mysqli_query($link,$modify)or die("location: ../profile.php?error=modifier");

		header("location: ../profile.php");
	}else{
	header("location: ../error/404.html");
}


?>
 