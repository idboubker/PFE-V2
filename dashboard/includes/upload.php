<?php

session_start();
$id_art=$_SESSION['id_art'];
if(empty($id_art)){
	header("location: ../authentification.php?error=dash");
}
include "../../connexion.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
	
	if(isset($_POST['addavatar'])){
	$myfile = $_FILES['avatar'];
	
	$path_to_directory = '../../uploads/artisan/art-'.$id_art.'/img';
if (!file_exists($path_to_directory) && !is_dir($path_to_directory)) {
    mkdir($path_to_directory, 0777, true);
}
	$nom=$myfile['name'];
	if(copy($myfile['tmp_name'] , $path_to_directory."/".$nom)){
		
		$del_i=mysqli_query($link,"select * from artisan_details where id_art='$id_art'")or die("error select !!:");
		
		$del_img=mysqli_fetch_array($del_i);
		echo "<h1>$del_img</h1>";
		if(!empty($del_img)){
			$myFile = '../../uploads/artisan/art-'.$id_art.'/img/'.$del_img['photo'] ;
			echo '../../uploads/artisan/art-'.$id_art.'/img/'.$del_img['photo'];
		}
		
		unlink($myFile) or die("Couldn't delete file");
		$update=mysqli_query($link,"update artisan_details set photo='$nom' where id_art='$id_art'")or die("error upadtae");
		header("location: ../index.php");
	}
		
}else{
		
		
		if(isset($_POST['add-pro'])){
			$projet=mysqli_query($link,"select max(id_por) m from portfolio")or header("../error/404.php");
			$pro_j=mysqli_fetch_array($projet);
			$idp=$pro_j['m']+1;
			
			$myfile = $_FILES['myup'];
	
			$path_to_directory = "../../uploads/projet/pro-".$idp."/img";
			if (!file_exists($path_to_directory) && !is_dir($path_to_directory)) {
			    mkdir($path_to_directory, 0777, true);
			}
			$nom=$myfile['name'];	
				
				
				for($i=0;$i<count($myfile['name']);$i++){
					
	if(copy($myfile['tmp_name'] , $path_to_directory."/".$nom)){
		
		$addpro=mysqli_query($link,"insert into portfolio_pics
		
	(
	img,
	id_por,
	
	)
	values
	('$nom',$id)
	where photo='$nom' where id_art='$id_art'")or die("error upadtae");
		
		
		
		header("location: ../index.php");
	}	
				
					}
					
				}
}//else


}

/*

p.image, 
	p.date_par, 
	p.description_projet, 
	p.id_art, nom_projet, 
	p.date_projet
*/


?>