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
	
		
		echo "<h1>$id_art</h1>";
	
		
	if(copy($myfile['tmp_name'] , $path_to_directory."/".$nom)){
		
		$del_i=mysqli_query($link,"select * from artisan_details where id_art='$id_art'")or die("error select !!:");
		
		$del_img=mysqli_fetch_array($del_i);
		var_dump($del_img);
		if(!empty($del_img)){
			$myFile = $path_to_directory.'/'.$del_img['photo'] ;
			//echo '../../uploads/artisan/art-'.$id_art.'/img/'.$del_img['photo'];
		}
		//echo "<hr>$myFile<hr>";
		if(file_exists($myFile)){
			unlink($myFile) or die("Couldn't delete file");
		}
		
		$update=mysqli_query($link,"update artisan_details set photo='$nom' where id_art='$id_art'")or die("error upadtae");
		header("location: ../index.php");
	}
		
}else{
		
		
		if(isset($_POST['add-pro'])){
			
			// date('Y-m-d h:m:s');	
			
			$myfile = $_FILES['myup'];
			
			$img_pro=$myfile['name'][0];
			$nom_projet=$_POST['nom_projet'] ;
			$date_projet=$_POST['date_projet'] ;
			$description_projet=$_POST['description_projet'];
			//echo count($myfile['name']);

			$addpro=mysqli_query($link,
								 "insert into `portfolio` (`id_por`,`image`,`description_projet`,`id_art`,`nom_projet`,`date_projet`) VALUES 
								 (null,'$img_pro','$description_projet','$id_art','$nom_projet','$date_projet')") or die("error upadtae 2");	

			 $idp=mysqli_insert_id($link);
			 
			
			
			$path_to_directory = "../../uploads/projet/pro-".$idp."/img";
			if (!file_exists($path_to_directory) && !is_dir($path_to_directory)) {
			    mkdir($path_to_directory, 0777, true);
			}
			
			
				for($i=0;$i<count($myfile['name']);$i++){
					
					
				$imgs=$myfile['name'][$i] ;
	
					
					if(copy($myfile['tmp_name'][$i] , $path_to_directory."/".$imgs)){
		
						$addpro_pics=mysqli_query($link,"insert into `portfolio_pics`(`id`, `img`, `id_por`) values (null,'$imgs',$idp)")or die("error upadtae");
						
		
		
		
		
	}	
				
					}
			
			header("location: ../index.php");
					
				}else{
			if(isset($_POST['mod-pro'])){
				if(isset($_POST['del-img-pri'])){
					$primary_img = $_POST['del-img-pri'];
					$libelle_pri = $_POST['libelle-img-pri'];
				}else{
					$primary_img=false;
				}
			//$del_img[] = $_POST['del-img'];
				//echo $primary_img;
			$id_por=$_POST['id_por'];
			$img_nbr=$_POST['img_nbr'];	
			$nom_projet=$_POST['nom_projet'];
			$date_projet=$_POST['date_projet'];
			$description_projet=$_POST['description_projet'];
			
				
				
				
				/*
				$projet=mysqli_query($link,"select * from portfolio where id_art='$id_art'");
				$pro=mysqli_fetch_array($projet);
			*/
				$path_to_directory = "../../uploads/projet/pro-".$id_por;
				
				$lib_dp=$_POST['libelle-img'];
				$id_dp=$_POST['del-img'];
				$i_pd="";
				$l_pd="";
				echo $img_nbr;
			for($k=0;$k<$img_nbr;$k++){
				if($primary_img!=false){
					echo " one ";
				}else{
					
					$i_pd=@$id_dp[$k];
					$l_pd=@$lib_dp[$k];
					
					$path_to_directory.='/img/'.$l_pd;
					if(file_exists($path_to_directory)){
					unlink($path_to_directory);
					}
					
					
					var_dump($lib_dp);
					mysqli_query($link,"DELETE FROM `portfolio_pics` WHERE `portfolio_pics`.`id`=$i_pd")or die("error deleting images");
				
				}
				
			}
			
			
			/*
			$addpro=mysqli_query($link,
								 "insert into `portfolio` (`id_por`,`image`,`description_projet`,`id_art`,`nom_projet`,`date_projet`) VALUES 
								 (null,'$img_pro','$description_projet','$id_art','$nom_projet','$date_projet')") or die("error upadtae 2");	
			*/	
			
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