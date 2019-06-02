<?php include "connexion.php"; 
	  mysqli_set_charset($link,"utf8");


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>mou9ef</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/style.css">
     
	<link rel="stylesheet" href="css/register.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	 	<!--main-menu end-->
	<?php include "includes/header.php"?>

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
								<span id="h-account" class="col-xs-12 col-sm-12 col-md-12 account active">

									<li class="list-group-item">Hirafy Account</li>

								</span>
							</div>

						</ul>

					</div>
<!--  ************************* hirafy acc  ************************* -->
					<form action="./includes/register-hirafy-inc.php" method="POST" id="form-2">
						<div class="input">
							<div class="row">
								<div class="col-md-6">
								<?php
									if (isset($_GET['errn'])){
										echo "<span class='text-danger pt-0 error-log-re'>This field is required!</span>";
									} 
									if (isset($_GET['errpn'])){
										echo "<span class='text-danger pt-0 error-log-re'>&nbsp;</span>";
									} 
									?>
									<input type="text" name="nom" class="form-control input_select " placeholder="Votre Nom"
									<?= isset($_GET['nom'])? "value='{$_GET['nom']}'":"";?>>
								</div>

								<div class="col-md-6">
									<?php
									if (isset($_GET['errpn'])){
										echo "<span class='text-danger pt-0 error-log-re'>This field is required!</span>";
									} 
									if (isset($_GET['errn'])){
										echo "<span class='text-danger pt-0 error-log-re'>&nbsp;</span>";
									} 
									?>
									<input type="text" name="prenom" class="form-control input_select " placeholder="Votre Prenom"
									<?= isset($_GET['prenom'])? "value='{$_GET['prenom']}'":"";?>>
								</div>
								<div class="col-md-12">
									<?php
									if (isset($_GET['errdn']) ){
										echo "<span class='text-danger pt-0 error-log-re'>This field is required!</span>";
									} 
									?>
									<label style="align:left !important">
										<strong class="">date de Naissance</strong>
									</label>
									<input type="date" name="dateNaissance" class="form-control input_select " placeholder="Date de Naissance"
									value=<?= isset($_GET['dateNaissance'])? "{$_GET['dateNaissance']}":"";?>>
								</div>



								<div class="col-md-12">
									<?php
									// if (isset($_GET['error']) && $_GET['error'] == "emptyfields" ){
									// 	echo "<span class='text-danger pt-0 error-log-re'>This field is required!</span>";
									// } 
									?>
									<strong class="">Gender :</strong>
								</div>
								<div class="col-md-12 ">
									<div class="form-group text-center">




										<!-- Group of material radios - option 1 -->



										<div class="btn-group btn-group-toggle btn-rad" data-toggle="buttons" align="center">
											<div class="raddiv">
												<label class="btn btn-danger rad">
													<input type="radio" name="gender" id="jb-radio-1" value="Male" selected> Male
												</label>
												<label class="btn btn-danger rad">
													<input type="radio" name="gender" id="jb-radio-2" value="Female"> Female
												</label>
											</div>

										</div>





									</div>
								</div>


								<div class="col-md-12">
									<?php
									if (isset($_GET['errville'])){
										echo "<span class='text-danger pt-0 error-log-re'>This field is required!</span>";
										
									} 
									?>
									<select name="ville" id="" class="form-control input_select ">
										<option value=<?= isset($_GET['ville'])? "{$_GET['ville']}":"ville";?>  selected>Ville</option>
										<?php
										$sql = "select * from villes";
										$result = mysqli_query($link, $sql);
										while ($row = mysqli_fetch_assoc($result)) {
										
										
											echo '<option value="' . $row['nom_vil'] . '">' . $row['nom_vil'] . '</option>';
										
									}
										
										?>
									</select>
								</div>

								<div class="col-md-12">
									<?php
									if (isset($_GET['errmet'])){
										echo "<span class='text-danger pt-0 error-log-re'>This field is required!</span>";
									} 
									?>
									<select name="metier" id="" class="form-control input_select ">
										<option value=<?= isset($_GET['metier'])? "{$_GET['metier']}":"metier";?>>metier</option>
										<?php
										$sql = "select * from meties";

										$result = mysqli_query($link, $sql);
										while ($row = mysqli_fetch_assoc($result)) {
											echo '<option value="' . $row['nom_met'] . '">' . $row['nom_met'] . '</option>';
										}
										?>
									</select>
								</div>
								<div class="col-md-12">
									<?php
									if (isset($_GET['errmail']) ){
								 		echo "<span class='text-danger pt-0 error-log-re'>This field is required!</span>";
									} 
									if (isset($_GET['error']) && $_GET['error'] == "invalidmail" ){
										echo "<span class='text-danger pt-0 error-log-re'>Invalid email</span>";
								   }
								    if (isset($_GET['error']) && $_GET['error'] == "usertaken" ){
										echo "<span class='text-danger pt-0 error-log-re'>This email is already taken</span>";
								   } 
									?>
									<input type="text" name="email" class="form-control input_select " placeholder="Email">
								</div>

								<div class="col-md-12">
									<?php
									if (isset($_GET['errtele'])){
										echo "<span class='text-danger pt-0 error-log-re'>This field is required!</span>";
									} 
									?>
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
									<?php
									if (isset($_GET['errpwd'])){
										echo "<span class='text-danger pt-0 error-log-re'>This field is required!</span>";
									} 
									if (isset($_GET['error']) && $_GET['error'] == "notmatch" ){
										echo "<span class='text-danger pt-0 error-log-re'>Passwords are not much</span>";
									} 
									?>
									<input type="password" name="pwd" class="form-control input_select " placeholder="Password">
								</div>

								<div class="col-md-6">
									<?php
									if (isset($_GET['errpwd']) ){
										echo "<span class='text-danger pt-0 error-log-re'>&nbsp;</span>";
									} 
									if (isset($_GET['error']) && $_GET['error'] == "notmatch" ){
										echo "<span class='text-danger pt-0 error-log-re'>&nbsp;</span>";
									} 
									?>
									<input type="password" name="pwdrep" class="form-control input_select " placeholder="Rpeat Password">
								</div>
								<div class="col-md-12">
									<input type="submit" name="hirafy-reg"  class="btn btn-success srh btn_grid sub" value="Sign up">
								</div>


							</div>
						</div>
					</form>


				</div>
			</div>
		</div>
	</div>




	<?php include "includes/footer.php"; ?>

	<div class="container-fluid golden-footer">
		<div class="container ">
			<div class="row ">
				<span class="text-left col-6">&copy; Mou9ef.com 2019</span>
				<span class="text-right col-6">

					<span><a href=""><img src="img/f-instg.svg" alt=""></a></span>
					<span><a href=""><img src="img/f-twiter.svg" alt=""></a></span>
					<span><a href=""><img src="img/f-facebook.svg" alt=""></a></span>

				</span>
			</div>
		</div>
	</div>


	<script>
		// $(function() {
		// 	$('#b-account').click(function() {
		// 		$('#b-account').attr('class', 'col-xs-6 col-sm-6 col-md-6 account active');
		// 		$('#h-account').attr('class', 'col-xs-6 col-sm-6 col-md-6 account');
		// 		$('#form-1').attr('style', 'display: block;');
		// 		$('#form-2').attr('style', 'display: none;');
		// 	});

		// 	$('#h-account').click(function() {
		// 		$('#b-account').attr('class', 'col-xs-6 col-sm-6 col-md-6 account');
		// 		$('#h-account').attr('class', 'col-xs-6 col-sm-6 col-md-6 account active');
		// 		$('#form-2').attr('style', 'display: block;');
		// 		$('#form-1').attr('style', 'display: none;');
		// 	});
		// });



		// $(document).ready(function() {
		// 	$('.nav-button').click(function() {
		// 		$('body').toggleClass('nav-open');
		// 	});
		// });
	</script>
</body>

</html>