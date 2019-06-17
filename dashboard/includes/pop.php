<?php

if(isset($_GET['idp'])){
include "../../connexion.php";	
$info="";
	$idp=$_GET['idp'];

	$proo=mysqli_query($link,"select * from portfolio p,villes v, artisan a,meties m, artisan_details ad where m.id_met=a.metier and a.id_art=ad.id_art and a.id_art=p.id_art and v.id_vil=a.ville and p.id_por='$idp'")or die("error selecting");
	$img_s=mysqli_query($link,"select * from portfolio_pics where id_por='$idp'")or die("error selectingff");
	



?>

<div id="pop-it" class="showit">
<div class="pop-up container-fluid">
			<div class="container">
				<div class="pop">

				<?php 

				while ($info=mysqli_fetch_array($proo)) {

					$id_art=$info['id_art'];
					 $nom_art=$info['nom_art'];
					  $prenom_art=$info['prenom_art'];
					   $sexe_art=$info['sexe_art'];
					    $dateNaissance=$info['dateNaissance'];
					     $ville=$info['nom_vil'];
					      $metier=$info['nom_met'];
					       $email_art=$info['email_art'];
					        $tele=$info['tele'];
					        $photo=$info['photo'];
					$image=$info['image'];
					 $date_par=$info['date_par'];
					  $description_projet=$info['description_projet'];
					   $nom_projet=$info['nom_projet'];
					    $date_projet=$info['date_projet'];


					echo '<div id="popup1" class="overlay">
						<div class="popup">
							<div class="row">
								<div class="col-6 text-left pop-left">
									<img src="../uploads/artisan/art-'.$id_art.'/img/'.$photo.'" alt="sdfqsdfqsdfqs">
									<p class="">
										<strong>'.$nom_art.' '.$prenom_art.'</strong> <br>
										<small>'.$metier.'</small>
									</p>
								</div>
							</div>
							<span onClick="return hideit()" id="closeit" class="close" href="#"><img style="height:35px;width:35px;" src="../img/our-font-awesome/x.png" alt=""></span>
							<br>
							<div class="content">

								<h5>Project:</h5>
								<p>
								'.$nom_projet.'<br>'.$ville.'
								</p>

								<h5>Date:</h5>
								<p>'.$date_projet.'</p>

								<h5>Interior design and renderings produced by:</h5>
								<p>'.$description_projet.'</p>
								';

								 
									while($ims = mysqli_fetch_assoc($img_s)){
								 echo '<div class="primary-img">
                                <img src="../uploads/projet/pro-'.$idp.'/img/'.$ims['img'].'" alt="'.$ims['img'].'">
							</div>';}
							
						

								
								echo '
							</div>
						</div>
					</div>';
				}
					?>

				</div>
			</div>
</div>

<?php 	
	
}else{
	//header("location: ../../error/404.html");
}


 ?>		
<script type="text/javascript">
	
function hideit(){
	$('#pop-it').removeClass("showit");
}

</script>	
