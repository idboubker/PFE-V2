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
		//var_dump($del_img);
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

			 $id_por=mysqli_insert_id($link);//$idp
			 
			
			
			$path_to_directory = "../../uploads/projet/pro-".$id_por."/img";
			if (!file_exists($path_to_directory) && !is_dir($path_to_directory)) {
			    mkdir($path_to_directory, 0777, true);
			}
			
			
				for($i=0;$i<count($myfile['name']);$i++){
					
					
				$imgs=$myfile['name'][$i];
	
					
					if(copy($myfile['tmp_name'][$i] , $path_to_directory."/".$imgs)){
		
						$addpro_pics=mysqli_query($link,"insert into `portfolio_pics`(`id`, `img`, `id_por`) values (null,'$imgs',$id_por)")or die("error upadtae");
						
		
		
		
		
	}	
				
					}
			
			//header("location: ../index.php");
					
				}else{
			
			
			if(isset($_POST['mod-pro'])){
				
			$id_por=$_POST['id_por'];
			$nom_projet=$_POST['nom_projet'];
			$date_projet=$_POST['date_projet'];
			$description_projet=$_POST['description_projet'];
				
				
				
				
			if(isset($_POST['del-img'])){
			$del_img = $_POST['del-img'];
			//echo "pro";
				
			$img_nbr=$_POST['img_nbr'];	//$i
				
			

				$proj=mysqli_query($link,"select * from portfolio  where id_por='$id_por' and id_art='$id_art' ")or die("error selecting");
				$pr=mysqli_fetch_array($proj);
				//var_dump($pr);
				
				$proj_pic=mysqli_query($link,"select * from portfolio_pics  where id_por='$id_por' ")or die("error selecting");
				//var_dump($del_img);
				//echo sizeof($del_img);
				$del_img_pri=false;
				while($ppc=mysqli_fetch_array($proj_pic)){
					
					if($pr['image']==$ppc['img'] && $ppc['id']==$del_img['ip']){
						
						
						$del_img_pri=$del_img['ip'];
						$del_img_pri_libelle=$ppc['img'];
						
						//echo "<h1 style='color: red;'>$del_img_pri_libelle</h1>";
						
						
					}else{
						for($o=0;$o<sizeof($del_img);$o++){
							echo "<h1>$o</h1>";
							$i_pd=$ppc['id'];
							if(@$del_img[$o]==$i_pd){
								
								$path_to_directory="../../uploads/projet/pro-".$id_por.'/img/'.$ppc['img'];
							if(file_exists($path_to_directory)){
								unlink($path_to_directory);
								//echo "<pre>delete file  -- ".$del_img[$o]."</pre>";
					
					}
								
								mysqli_query($link,"DELETE FROM `portfolio_pics` WHERE `portfolio_pics`.`id`=$i_pd")or die("error deleting images");
							
						}
						}//for
							
						}//else
						}//while
				
				
				
				
				
			}//if del img
				$i_o="";
				//var_dump($_FILES['myup']['name']);
				if(isset($_FILES['myup']['name'][0]) && !empty($_FILES['myup']['name'][0])){
					//var_dump($_FILES['myup']);
					echo "sqdfqsdfqsf";
					// date('Y-m-d h:m:s');	
			
			$myfile = $_FILES['myup'];
			//var_dump($myfile);
			$img_pro=$myfile['name'][0];
			/*		
			$nom_projet=$_POST['nom_projet'] ;
			$date_projet=$_POST['date_projet'] ;
			$description_projet=$_POST['description_projet'];
			*/		
			//echo count($myfile['name']);
			 //$idp=mysqli_insert_id($link);
					
					
			$path_to_directory = "../../uploads/projet/pro-".$id_por."/img";
			if (!file_exists($path_to_directory) && !is_dir($path_to_directory)) {
			    mkdir($path_to_directory, 0777, true);
			}
			
			
				for($i=0;$i<count($myfile['name']);$i++){
					
					
				$imgs=$myfile['name'][$i] ;
	
					
					if(copy($myfile['tmp_name'][$i] , $path_to_directory."/".$imgs)){
		
						$addpro_pics=mysqli_query($link,"insert into `portfolio_pics`(`id`, `img`, `id_por`) values (null,'$imgs',$id_por)")or die("error upadtae---");
						
					if($i==0){	
					$i_o=$imgs;
		}
		
	}	
				
					}
			
					
					
					
					
					
					
				}// if myup
				
				
				
				
				
				
						if(isset($_POST['del-img']) && $del_img_pri!=false){
							echo "<h1>--".$del_img['ip']."--</h1>";
							$proj_p=mysqli_query($link,"select * from portfolio_pics  where id_por='$id_por' ")or die("error selecting");
							//var_dump($proj_p);
							$catch=0;
							if(mysqli_num_rows($proj_p)>0){
							while($row=mysqli_fetch_array($proj_p)){
								
									$img_pro=$row['img'];
								echo "hi111111111111  $img_pro";
								
								if($catch==1){
									break;
								}
								$catch++;
							}//while
							
								
							$path_to_directory="../../uploads/projet/pro-".$id_por.'/img/'.$del_img_pri_libelle;
							if(file_exists($path_to_directory)){
								unlink($path_to_directory);
								echo "<pre>delete file  -- ".$del_img_pri_libelle."</pre>";
							}
							mysqli_query($link,"DELETE FROM `portfolio_pics` WHERE `portfolio_pics`.`id`=$del_img_pri")or die("error deleting images");
						echo "$img_pro";
							$mdpro=mysqli_query($link, "update `portfolio` set `image`='$img_pro',`description_projet`='$description_projet' ,`nom_projet`='$nom_projet',`date_projet`='$date_projet' where id_por='$id_por' and id_art='$id_art'") or die("error upadtae 2");	
								
								}//if
							else{
								$img_pro="../../uploads/projet/project.jpg";
									
								echo "hard";	
								$mdpro=mysqli_query($link, "update `portfolio` set `image`='$img_pro',`description_projet`='$description_projet' ,`nom_projet`='$nom_projet',`date_projet`='$date_projet' where id_por='$id_por' and id_art='$id_art'") or die("error upadtae 2");	
							}
							
						
						}else{
							echo "hard final";
							//$mdpro=mysqli_query($link,"update `portfolio` set `description_projet`='$description_projet' ,`nom_projet`='$nom_projet',`date_projet`='$date_projet' where id_por='$id_por' and id_art='$id_art'") or die("error upadtae 2");
							
						}
				if(empty($pr['image'])){
					
						
						mysqli_query($link, "update `portfolio` set `image`='$i_o' where id_por='$id_por' and id_art='$id_art'") or die("error upadtae 2");
					}
				//header("location: ../index.php");
				
						
				}//if	
				
				
}//else

$slt=mysqli_query($link,"select * from portfolio where id_por='$id_por' and id_art='$id_art'")or die("select error slt");
	$sl=mysqli_fetch_array($slt);
	if(empty($sl['image'])){
		$img_p="https://www.mediafire.com/convkey/2a1f/fna0wbrruxqgsbrzg.jpg";
		 mysqli_query($link, "update `portfolio` set image='$img_p', `description_projet`='$description_projet' ,`nom_projet`='$nom_projet',`date_projet`='$date_projet' where id_por='$id_por' and id_art='$id_art'") or die("error upadtae 2");	
	}
	echo $img_p;

		
}
	
	
	
	}


header("location: ../index.php");
/*

p.image, 
	p.date_par, 
	p.description_projet, 
	p.id_art, nom_projet, 
	p.date_projet
*/




?>