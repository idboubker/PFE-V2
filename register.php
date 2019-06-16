<?php 

	include "connexion.php"; 
	  mysqli_set_charset($link,"utf8");


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>mou9ef</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/register.css">
	<link rel="stylesheet" href="css/load.css">
	
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
 <?php include_once("includes/loading.html");?>
	<?php include "includes/header.php";?>
	
	<div id="all-all">
	
	<div class="container-fluid reg-bg " style="box-shadow: 0 12px 22px -22px rgba(0, 0, 0, 0.8) inset;">
		<div class="container">
			<div class="sign-up row">
				<div class="form offset-md-1 col-md-10 text-center">


					<div class="height-part">
						<h2>SIGN UP</h2>
					</div>
					<div class="height-part">
						<ul class="list-group">
							<div class="row">
								<span id="b-account" class="col-6 col-xs-6 col-sm-6 col-md-6 account active">

									<li class="list-group-item">Basic Account</li>

								</span>
								<span id="h-account" class="col-6 col-xs-6 col-sm-6 col-md-6 account">

									<li class="list-group-item">Hirafy Account</li>

								</span>
							</div>

						</ul>

					</div>
<!--  ************************* basic acc  ************************* -->
					<form action="includes/singup1.php" id="form-1" method="POST" style="">
						<div class="input">
							<div class="row">
								<div class="col-md-12">
									<input type="text" name="login" class="form-control input_select " placeholder="Full Name">
								</div>
								<div class="col-md-12">
								</div>


								<div class="col-md-12">
									<input type="text" name="email" class="form-control input_select " placeholder="Email">
								</div>
								<div class="col-md-12">
									<input type="text" name="tele" class="form-control input_select " placeholder="Phone Number">
								</div>
							
								<div class="col-md-6">
									<input type="password" name="pwd1" class="form-control input_select " placeholder="Password">
								</div>

								<div class="col-md-6">
									<input type="password" name="pwd2" class="form-control input_select " placeholder="Rpeat Password">
								</div>

								<div class="col-md-12">
									<input type="submit" name="submit1" class="btn btn-success srh btn_grid sub" value="Sign up">
								</div>


							</div>
						</div>
					</form>

<!--  ************************* hirafy acc  ************************* -->
					<form action="./includes/signup_artisan.php" method="POST" id="form-2" style="display: none;">
						<div class="input">
							<div class="row">
								<div class="col-md-6">
									<input type="text" name="nom" class="form-control input_select " placeholder="Votre Nom">
								</div>

								<div class="col-md-6">
									<input type="text" name="prenom" class="form-control input_select " placeholder="Votre Prenom">
								</div>
								<div class="col-md-12">
									<label style="align:left !important">
										<strong class="">date de Naissance</strong>
									</label>
									<input type="date" name="dateN" class="form-control input_select " placeholder="Date de Naissance">
								</div>



								<div class="col-md-12">
									<strong class="">Gender :</strong>
								</div>
								<div class="col-md-12 ">
									<div class="form-group text-center">




										<!-- Group of material radios - option 1 -->



										<div class="btn-group btn-group-toggle btn-rad"  align="center">
											<div class="raddiv">
											
													<label class="btn btn-success rad" id="rad1" for="jb-radio-1">
													<input type="radio" name="gender" id="jb-radio-1" value="Homme"> Homme
												</label>
												
												
													<label class="btn btn-success rad" id="rad2" for="jb-radio-2">
													<input type="radio" name="gender" id="jb-radio-2" value="Femme"> Femme
												</label>
												
												
											</div>

										</div>





									</div>
								</div>


								<div class="col-md-12">
									<select name="ville" id="" class="form-control input_select ">
										<option value="Ville" disabled selected>Ville</option>
										<?php
										$sql = "select * from villes";

										$result = mysqli_query($link, $sql);
										while ($row = mysqli_fetch_assoc($result)) {
											echo '<option value="">' . $row['id_vil'] . '</option>';
										}
										?>
									</select>
								</div>

								<div class="col-md-12">
									<select name="metier" id="" class="form-control input_select ">
										<option value="metier" disabled selected>Metier</option>
										<?php
										$sql = "select * from meties";

										$result = mysqli_query($link, $sql);
										while ($row = mysqli_fetch_assoc($result)) {
											echo '<option value="">' . $row['id_met'] . '</option>';
										}
										?>
									</select>
								</div>
								<div class="col-md-12">
									<input type="text" name="email" class="form-control input_select " placeholder="Email">
								</div>
								<div class="col-md-12">
									<input type="text" name="tele" class="form-control input_select " placeholder="Phone Number">
								</div>
										<!--
								<div class="col-md-12">
									<label class="col-xs-4 form-control input_select " for="up-image">

										<div class="form-group text-left">

											<span>select your <i class="fa fa-camera" style="font-size:  15px !important;"> </i> image </span>
											<input type="file" class="filestyle" accept=".jpg, .jpeg, .png" data-icon="false" id="up-image" hidden>

										</div>

									</label>
								</div>
									-->

								<div class="col-md-6">
									<input type="password" name="pwd3" class="form-control input_select " placeholder="Password">
								</div>

								<div class="col-md-6">
									<input type="password" name="pwd4" class="form-control input_select " placeholder="Rpeat Password">
								</div>
								<div class="col-md-12">
									<input type="submit" name="submit2"  class="btn btn-success srh btn_grid sub" value="Sign up">
								</div>


							</div>
						</div>
					</form>


				</div>
			</div>
		</div>
	</div>
	
	</div>



	<?php include "includes/footer.php"; ?>


<script type="text/javascript" src="js/jquery.js"></script>
<script src="js/load.js"></script>
	<script>
		$(function() {
			$('#b-account').click(function() {
				$('#b-account').attr('class', 'col-xs-6 col-sm-6 col-md-6 account active');
				$('#h-account').attr('class', 'col-xs-6 col-sm-6 col-md-6 account');
				$('#form-1').attr('style', 'display: block;');
				$('#form-2').attr('style', 'display: none;');
			});

			$('#h-account').click(function() {
				$('#b-account').attr('class', 'col-xs-6 col-sm-6 col-md-6 account');
				$('#h-account').attr('class', 'col-xs-6 col-sm-6 col-md-6 account active');
				$('#form-2').attr('style', 'display: block;');
				$('#form-1').attr('style', 'display: none;');
			});
		});
		
		
		


		$(document).ready(function() {
			$('.nav-button').click(function() {
				$('body').toggleClass('nav-open');
			});
			
			$('#rad1').click(function() {
				
					$('#rad1').addClass('red-rad');
					$('#rad2').removeClass('red-rad');
				
			});
			$('#rad2').click(function() {
				
					$('#rad2').addClass('red-rad');
					$('#rad1').removeClass('red-rad');
				
			});
		});
	</script>
</body>

</html>