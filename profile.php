<?php
include "connexion.php";


mysqli_set_charset($link,"utf8");
include "includes/profile.inc.php";

$age = $info['dateNaissance'];
$whatsapp = $info['whatsapp'];
if($whatsapp==""){
	$whatsapp = $info['tele'];
}

$facebook = $info['facebook'];
if($facebook==""){
	$facebook = "Inconnu";
}

$nom = strtoupper($info['nom_art']);


$photo = $info['photo'];
if($photo == ""){
	$photo = "img/464220-PFPXU4-113.jpg";
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>mou9ef</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/rating.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/profile.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/pop-up.css">
	<link rel="stylesheet" href="css/load.css">
	
	
</head>

<body>


 <?php include_once("includes/loading.html");?>

	<?php include "includes/header.php";?>

	<div class="container-fluid all" style="box-shadow: 0 12px 22px -22px rgba(0, 0, 0, 0.8) inset;">
		<div class="container a-info">

			<br><br>

			<div class="row">
				<div class="f-ads">
					<img src="" alt="">
				</div>
			</div>




			<div class="row a-in">
				<div class="offset-1 col-10 offset-sm-2 col-sm-8  offset-md-0 col-md-4 col-lg-3 p-2">
					<div class="con text-center shadow">
						<div class="information text-center">
							<div class="image">
								<img src="<?php  echo $photo;  ?>" alt="">
								<div class="circle"></div>
							</div>
							<h1><?php	echo $info['prenom_art']." ".$nom;	?></h1>
							<hr>
							<table class="text-left">

								<tr>
									<td width="40"><img src="img/our-font-awesome/job.svg" alt=""></td>
									<td><?php	echo $info['nom_met'];	?></td>
								</tr>

								<tr>
									<td><img src="img/our-font-awesome/location.svg" alt=""></td>
									<td><?php	
									echo $info['nom_vil'];
									?></td>
								</tr>
								<tr>
									<td><img src="img/our-font-awesome/tel.svg" alt=""></td>
									<td><?php	
									echo $info['tele'];
									?></td>
								</tr>
							</table>
							<hr>


							<nav>
								<table class="text-left">
									<tr id="ABOUT" class="active pointer">
										<td width="40"><img src="img/our-font-awesome/about.svg" alt=""></td>
										<td>À PROPOS</td>
									</tr>
									<tr id="VIEW-ON-MAP" class="pointer">
										<td><img src="img/our-font-awesome/view_on_map.svg" alt=""></td>
										<td>VOIR SUR LA CARTE</td>
									</tr>
									<tr id="REVIEWS" class="pointer">
										<td><img src="img/our-font-awesome/reviews.svg" alt=""></td>
										<td>AVIS</td>
									</tr>
									<tr id="PORTFOLIO" class="pointer">
										<td><img src="img/our-font-awesome/stars.svg" alt=""></td>
										<td>PORTEFEUILLE</td>
									</tr>
								</table>
							</nav>
						</div>

					</div>

				</div>
				<div class="offset-1 col-10 offset-sm-0 col-sm-12 offset-md-0 col-md-8 col-lg-6  p-2">
					<div class="con shadow">
						<div class="information">
							<div class="about">
								<h1>À PROPOS</h1>
								<hr class="h">

								<table class="text-left">
									<tr>
										<td colspan="3" class="table_head">Infos générales</td>
									</tr>
									<tr>
										<td width="40"><img src="img/our-font-awesome/gender.svg" alt=""></td>
										<td width="150">SEXE</td>
										<td><?php	
										echo $info['sexe_art'];
										?></td>
									</tr>
									<tr>
										<td><img src="img/our-font-awesome/calendar.svg" alt=""></td>
										<td>ÂGE</td>
										<td><?php
										if($age = ""){echo "Inconnu";}
										else echo age($age);
										?> ans</td>
									</tr>
									<tr>
										<td><img src="img/our-font-awesome/eye.svg" alt=""></td>
										<td>VUES</td>
										<td>13 personnes</td>
									</tr>
									<tr>
										<td><img src="img/our-font-awesome/half_star.svg" alt=""></td>
										<td>RATE</td>
										<td>3.5/5</td>
									</tr>
								</table>

								<br>

								<table class="text-left">
									<tr>
										<td colspan="3" class="table_head">Contact Infos</td>
									</tr>
									<tr>
										<td width="40"><img src="img/our-font-awesome/tel.svg" alt=""></td>
										<td width="150">NUMÉRO TÉLÉPHONE</td>
										<td> <?php	
										if($info['tele'] = ""){echo "Inconnu";}
										else	echo $info['tele'];
									?></td>
									</tr>
									<tr>
										<td><img src="img/our-font-awesome/whatsapp.svg" alt=""></td>
										<td>WHATSAPP</td>
										<td><?php 	echo $whatsapp;		?></td>
									</tr>
									<tr>
										<td><img src="img/our-font-awesome/message.svg" alt=""></td>
										<td>EMAIL</td>
										<td> <?php	echo $info['email_art'];	?> </td>
									</tr>
									<tr>
										<td><img src="img/our-font-awesome/facebook.svg" alt=""></td>
										<td>FACEBOOK</td>
										<td><?php	echo $facebook;	?></td>
									</tr>
								</table>

								<br>

								<table class="text-left">
									<tr>
										<td colspan="3" class="table_head">Diplômes et expériences</td>
									</tr>
									<tr>
										<td width="30" valign="top"><img src="img/our-font-awesome/job.svg" alt=""></td>
										<td>

											<table class="sous_diploma">
												<tr>
													<td>RESPONSABLE TECHNIQUE</td>
												</tr>
												<tr>
													<td>Sté AMAPUB</td>
												</tr>
												<tr>
													<td>De 2012-09-01 jusqu'à 2017-07-30</td>
												</tr>
											</table>

										</td>

									</tr>
									<tr>
										<td valign="top"><img src="img/our-font-awesome/college-graduation.svg" alt=""></td>
										<td>
											<table class="sous_diploma">
												<tr>
													<td>RESPONSABLE TECHNIQUE</td>
												</tr>
												<tr>
													<td>Sté AMAPUB</td>
												</tr>
												<tr>
													<td>De 2012-09-01 jusqu'à 2017-07-30</td>
												</tr>
											</table>
										</td>

									</tr>
									<tr>
										<td valign="top"><img src="img/our-font-awesome/college-graduation.svg" alt=""></td>
										<td>
											<table class="sous_diploma">
												<tr>
													<td>RESPONSABLE TECHNIQUE</td>
												</tr>
												<tr>
													<td>Sté AMAPUB</td>
												</tr>
												<tr>
													<td>De 2012-09-01 jusqu'à 2017-07-30</td>
												</tr>
											</table>

										</td>

									</tr>
									<tr>
										<td valign="top"><img src="img/our-font-awesome/college-graduation.svg" alt=""></td>
										<td>

											<table class="sous_diploma">
												<tr>
													<td>RESPONSABLE TECHNIQUE</td>
												</tr>
												<tr>
													<td>Sté AMAPUB</td>
												</tr>
												<tr>
													<td>De 2012-09-01 jusqu'à 2017-07-30</td>
												</tr>
											</table>


										</td>

									</tr>
								</table>

							</div>
							<div class="view-on-map">
								<h1>Voir sur la carte</h1>
								<hr class="h"><br>
								<div class="map">
									<iframe src="<?php	echo $info['map'];	?>" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div>
							</div>
							
							
							<div class="reviews">

								<h1>AVIS</h1>
								<hr class="h">

								<div class="rate-all">
									<div class="r-first">

										<h4>3.6</h4>
										<div class="stars-rate">
											<td>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star "></span>
											</td>
										</div>
										<p>129 rated<br>this artisan</p>

									</div>

									<div class="r-second">


										<table>
											<tr>
												<td>
													<div class="holder-1">
														<div class="inside-holder"></div>
													</div>
												</td>
												<td>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star checked"></span>
												</td>
												<td>60%</td>
											</tr>
											<tr>
												<td>
													<div class="holder-1">
														<div class="inside-holder"></div>
													</div>
												</td>
												<td>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star  checked"></span>
													<span class="fa fa-star  checked"></span>
													<span class="fa fa-star"></span>
												</td>
												<td>51%</td>
											</tr>
											<tr>
												<td>
													<div class="holder-1">
														<div class="inside-holder"></div>
													</div>
												</td>
												<td>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
												</td>
												<td>30%</td>
											</tr>
											<tr>
												<td>
													<div class="holder-1">
														<div class="inside-holder"></div>
													</div>
												</td>
												<td>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star "></span>
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
												</td>
												<td>10%</td>
											</tr>
											<tr>
												<td>
													<div class="holder-1">
														<div class="inside-holder"></div>
													</div>
												</td>
												<td>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star "></span>
													<span class="fa fa-star "></span>
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
												</td>
												<td>2%</td>
											</tr>
										</table>

									</div>
								</div>



								<br>

								<select name="" id="" class="question chev">
									<option value="">Dernière</option>
									<option value="">Dernière</option>
									<option value="">Meilleur</option>
								</select>

								<div class="com-section">
									<hr>
									<div class="com-num">
										<div class="comment-all">
											<table>
												<tr>
													<td>
														<div class="avatar-comment">
															<img src="img/profile/avatar2.jpg" alt="">
														</div>
													</td>
													<td>
														<small>7 days ago</small><br>
														<small>Hamza ELMAKHELOF</small>
													</td>
													<td align="center">
														<span class="fa fa-star checked"></span>
														<span class="fa fa-star "></span>
														<span class="fa fa-star "></span>
														<span class="fa fa-star"></span>
														<span class="fa fa-star"></span>
													</td>
												</tr>
												<tr>
													<td></td>
													<td colspan="2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas eius iste aliquam ex accusamus beatae, nemo fugiat, vel harum, doloremque atque doloribus eaque dolorum officiis ratione, cupiditate cum quasi molestias!</td>

												</tr>
												<tr>
													<td></td>
													<td></td>
													<td align="right"><a href="">Report</a></td>
												</tr>
											</table>
										</div>

									</div>
									<div class="com-num">
										<div class="comment-all">
											<table>
												<tr>
													<td>
														<div class="avatar-comment">
															<img src="img/profile/avatar2.jpg" alt="">
														</div>
													</td>
													<td>
														<small>7 days ago</small><br>
														<small>Hamza ELMAKHELOF</small>
													</td>
													<td align="center">
														<span class="fa fa-star checked"></span>
														<span class="fa fa-star "></span>
														<span class="fa fa-star "></span>
														<span class="fa fa-star"></span>
														<span class="fa fa-star"></span>
													</td>
												</tr>
												<tr>
													<td></td>
													<td colspan="2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas eius iste aliquam ex accusamus beatae, nemo fugiat, vel harum, doloremque atque doloribus eaque dolorum officiis ratione, cupiditate cum quasi molestias!</td>

												</tr>
												<tr>
													<td></td>
													<td></td>
													<td align="right"><a href="">Report</a></td>
												</tr>
											</table>
										</div>

									</div>
									<div class="com-num">
										<div class="comment-all">
											<table>
												<tr>
													<td>
														<div class="avatar-comment">
															<img src="img/profile/avatar2.jpg" alt="">
														</div>
													</td>
													<td>
														<small>7 days ago</small><br>
														<small>Hamza ELMAKHELOF</small>
													</td>
													<td align="center">
														<span class="fa fa-star checked"></span>
														<span class="fa fa-star "></span>
														<span class="fa fa-star "></span>
														<span class="fa fa-star"></span>
														<span class="fa fa-star"></span>
													</td>
												</tr>
												<tr>
													<td></td>
													<td colspan="2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas eius iste aliquam ex accusamus beatae, nemo fugiat, vel harum, doloremque atque doloribus eaque dolorum officiis ratione, cupiditate cum quasi molestias!</td>

												</tr>
												<tr>
													<td></td>
													<td></td>
													<td align="right"><a href="">Report</a></td>
												</tr>
											</table>
										</div>

									</div>
									<div class="com-num">
										<div class="comment-all">
											<table>
												<tr>
													<td>
														<div class="avatar-comment">
															<img src="img/profile/avatar2.jpg" alt="">
														</div>
													</td>
													<td>
														<small>7 days ago</small><br>
														<small>Hamza ELMAKHELOF</small>
													</td>
													<td align="center">
														<span class="fa fa-star checked"></span>
														<span class="fa fa-star "></span>
														<span class="fa fa-star "></span>
														<span class="fa fa-star"></span>
														<span class="fa fa-star"></span>
													</td>
												</tr>
												<tr>
													<td></td>
													<td colspan="2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas eius iste aliquam ex accusamus beatae, nemo fugiat, vel harum, doloremque atque doloribus eaque dolorum officiis ratione, cupiditate cum quasi molestias!</td>

												</tr>
												<tr>
													<td></td>
													<td></td>
													<td align="right"><a href="">Report</a></td>
												</tr>
											</table>
										</div>
										<div class="container-fluid text-center">
											<button class="btn btn-primary btn_grid text-center" type="submit" style="margin: auto; text-algn:center;;width: 150px !important;">Show more</button>
										</div>
									</div>

									<div class="container">
										<div class="container pb-cmnt-container">
											<div class="row">
												<div class="col-md-12 col-md-offset-3">
													<div class="panel panel-info">
														<div class="panel-body">
															<h5>Ajouter un nouveau commentaire:</h5>

															<form class="form-inline">
																<textarea placeholder="Écrivez votre commentaire ici!" class="pb-cmnt-textarea"></textarea>
																<button class="btn btn-primary mt-2" type="button">Partager</button>
															</form>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
							<div class="portfolio">
								<h1>PORTEFEUILLE</h1>
								<hr class="h">
								<!-- <div class="portfolio-search">
									<form action="">
										<select name="" id="" class="question chev q1">
											<option value="">Latest</option>
											<option value="">Latest</option>
											<option value="">Best</option>
										</select>
										<div class="input"><img src="img/search.svg" alt="">
											<input type="text" name="" placeholder="search.......">
										</div>
									</form>
								</div> -->
								<div class="portfolio-result">
									<div class="row">
										<?php 
										while($port = mysqli_fetch_assoc($rsl)){ ?>
											
											<div class="col-8 offset-2 offset-sm-1 col-sm-5 offset-md-0 col-md-6 offset-lg-1 col-lg-5 offset-xl-0 col-xl-4 res">
												<div class="result-port" style="background: url('<?=$port['image'];?>') no-repeat 20% 30%;">
													<div class="res-info">
														<h3><?php echo $port['nom_projet'] ?></h3>
														<!-- <span>102 <br><i class="fa fa-thumbs-up"></i></span> -->
														<span><?php echo $port['date_par']?></span>
													</div>
												</div>
											</div>';

										<?php } ?>

									</div>
								</div>
							</div>
							<br><br>
						</div>


					</div>
				</div>
				<div class="offset-2 col-8 col-sm-6 offset-sm-3  offset-md-3 offset-lg-0 col-md-6 col-lg-3 pro-container">
					<div class="con similar">

						<div class="information no_p">
							<h1>Similaire</h1>
							<hr class="h h_similar">
							
						<!--         similar             -->
							<?php
							while($similar = mysqli_fetch_assoc($rslt)){
								 echo '<a href="profile.php?ida='.$similar["id_art"].'" class="clickable"><div class="sim_art">

								<div class="sim_img">

									<img src="'.$similar['photo'].'" alt="">

								</div>


								<div class="sim_info">

									<table>
										<tr>
											<td><strong>'.$similar['nom_art'].' '.$similar['prenom_art'].'</strong></td>
										</tr>
										<tr>
											<td><small>'.$similar['nom_met'].'</small></td>
										</tr>
										<tr>
											<td><small>'.$similar['quartier'].', '.$similar['nom_vil'].'</small></td>
										</tr>
									</table>

								</div>


								<div class="sim_view" align="center">

									<img src="img/our-font-awesome/eye.svg" alt="">

								</div>

							</div></a>';
							} 
							?>
							<!--         /similar             -->

						</div>

					</div>
				</div>
			</div>



		</div>
	</div>

	<?php include "includes/footer.php"; ?>








	<!-------------------- pop up ------------------>

	<div id="pop-it">
		<div class="pop-up container-fluid">
			<div class="container">
				<div class="pop">

				<?php 
					echo '<div id="popup1" class="overlay">
						<div class="popup">
							<div class="row">
								<div class="col-6 text-left pop-left">
									<img src="'.$info['photo'].'" alt="">
									<p class="">
										<strong>'.$info['nom_art'].' '.$info['prenom_art'].'</strong> <br>
										<small>'.$info['nom_met'].'</small>
									</p>
								</div>
							</div>
							<a class="close" href="#"><img style="height:35px;width:35px;" src="img/our-font-awesome/x.png" alt=""></a>
							<br>
							<div class="content">

								<h5>Projet:</h5>
								<p>
								'.$port1['nom_projet'].' <br>
									'.$info['nom_vil'].'
								</p>

								<h5>Date:</h5>
								<p>'.$port1['date_projet'].'</p>

								<h5>Description de projet:</h5>
								<p>
								'.$port1['description_projet'].'
								</p>
								';

								 //------ project images ------------
									
									$pics = "select * from portfolio_pics f, portfolio p where p.id_art = $user and f.id_por = p.id_por";
									$picc = mysqli_query($link,$pics);
									while($row = mysqli_fetch_assoc($picc)){
								 		echo '<div class="primary-img">
                                			  <img src="img/'.$row['img'].'" alt="">
											  </div> <br><br>';} 
									
							//------------------------------------
								

								
								echo '
							</div>
						</div>
					</div>';
					?>

				</div>
			</div>
		</div>
	</div>


<script src="js/jquery.js"></script>
<script src="js/load.js"></script>
	<script>
		$('.view-on-map').hide();
		$('.reviews').hide();
		$('.portfolio').hide();
		$('#ABOUT').click(function() {
			$("#ABOUT").addClass("active");
			$("#REVIEWS").removeClass("active");
			$("#PORTFOLIO").removeClass("active");
			$("#VIEW-ON-MAP").removeClass("active");

			$('.about').show();
			$('.view-on-map').hide();
			$('.reviews').hide();
			$('.portfolio').hide();

		});

		$('#VIEW-ON-MAP').click(function() {
			$("#ABOUT").removeClass("active");
			$("#REVIEWS").removeClass("active");
			$("#PORTFOLIO").removeClass("active");
			$("#VIEW-ON-MAP").addClass("active");

			$('.about').hide();
			$('.view-on-map').show();
			$('.reviews').hide();
			$('.portfolio').hide();

		});

		$('#REVIEWS').click(function() {
			$("#ABOUT").removeClass("active");
			$("#REVIEWS").addClass("active");
			$("#PORTFOLIO").removeClass("active");
			$("#VIEW-ON-MAP").removeClass("active");

			$('.about').hide();
			$('.view-on-map').hide();
			$('.reviews').show();
			$('.portfolio').hide();
		});

		$('#PORTFOLIO').click(function() {
			$("#ABOUT").removeClass("active");
			$("#REVIEWS").removeClass("active");
			$("#PORTFOLIO").addClass("active");
			$("#VIEW-ON-MAP").removeClass("active");


			$('.about').hide();
			$('.view-on-map').hide();
			$('.reviews').hide();
			$('.portfolio').show();
		});



		$('.result-port').hover(function() {
			$('.res-info', this).show();
		}, function() {
			$('.res-info', this).hide();
		});


		$('.result-port').click(function() {
			$('#pop-it').show();
			$('.close').click(function() {
				$('#pop-it').hide();

			});
		});


		/**** nav collapse**/
		$(document).ready(function() {
			$('.nav-button').click(function() {
				$('body').toggleClass('nav-open');
			});
		});

		/*function portfolio(){
    $('.res-info').hide();
    $(".result-port").hover(function(){

        $(this).next().show();


    },function(){

        $(this).next().hide();


    });


}
        $(document).ready(function(){
      portfolio();
 });
        */
	</script>
</body>

</html>