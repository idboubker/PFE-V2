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
						<h2>S'INSCRIRE</h2>
					</div>
					<div class="height-part">
						<ul class="list-group">
							<div class="row">
								<span id="b-account" class="col-xs-12 col-sm-12 col-md-12 account active">

									<li class="list-group-item">Basique Account</li>

								</span>
							</div>

						</ul>

					</div>
<!--  ************************* basic acc  ************************* -->
					<form action="includes/register-basic-inc.php" id="form-1" method="POST" style="">
						<div class="input">
							<div class="row">
								<div class="col-md-12">
									<?php
									if (isset($_GET['error']) && ($_GET['error'] == "emptyfields" || $_GET['error'] == "emptyfieldlogin")) {
										echo "<span class='text-danger pt-0 error-log-re'>Ce champ est requis!</span>";
									} 
									else if(isset($_GET['error']) && $_GET['error'] == "invalidname")
									{
										echo "<span class='text-danger pt-0 error-log-re'>Invalid name</span>";
									}
									?>
									<input type="text" name="login" class="form-control input_select " placeholder="Nom Complet" 
									value=<?= isset($_GET['login'])? "{$_GET['login']}":"";?>>
								</div>
								<div class="col-md-12">
								</div>


								<div class="col-md-12">
								<?php
									if (isset($_GET['error']) && ($_GET['error'] == "emptyfields" || $_GET['error'] == "emptyfieldmail")){
										echo "<span class='text-danger pt-0 error-log-re'>Ce champ est requis!</span>";
									} 
									else if(isset($_GET['error']) && $_GET['error'] == "invalidmail")
									{
										echo "<span class='text-danger pt-0 error-log-re'>Invalid email</span>";
									}
									else if(isset($_GET['error']) && $_GET['error'] == "usertaken")
									{
										echo "<span class='text-danger pt-0 error-log-re'>This email is already taken</span>";
									}
									?>
									<input type="text" name="email" class="form-control input_select " placeholder="Email"
									value=<?= isset($_GET['email'])? "{$_GET['email']}":"";?>>
								</div>
								<div class="col-md-12">
								<?php
									if (isset($_GET['error']) && ($_GET['error'] == "emptyfields" || $_GET['error'] == "emptyfieldtele")) {
										echo "<span class='text-danger pt-0 error-log-re'>Ce champ est requis!</span>";
									}
									?>
									<input type="text" name="tele" class="form-control input_select " placeholder="Numéro de téléphone"
									value=<?= isset($_GET['tele'])? "{$_GET['tele']}":"";?>>
								</div>
							
								<div class="col-md-6">
								<?php
									if (isset($_GET['error']) && ($_GET['error'] == "emptyfields" || $_GET['error'] == "emptyfieldpwd") ){
										echo "<span class='text-danger pt-0 error-log-re'>Ce champ est requis!</span>";
									} 
									else if(isset($_GET['error']) && $_GET['error'] == "pwdmatch")
									{
										echo "<span class='text-danger pt-0 error-log-re'>Les mots de passe ne correspondent pas</span>";
									}
									?>
									<input type="password" name="pwd" class="form-control input_select " placeholder="Mot de passe">
								</div>

								<div class="col-md-6">
									<?php
									if (isset($_GET['error']) && ($_GET['error'] == "emptyfields" || $_GET['error'] == "emptyfieldpwd") ){
										echo "<span class='text-danger pt-0 error-log-re'>&nbsp;</span>";
									} 
									else if(isset($_GET['error']) && $_GET['error'] == "pwdmatch")
									{
										echo "<span class='text-danger pt-0 error-log-re'>&nbsp;</span>";
									}
									?>
								
									<input type="password" name="pwdrep" class="form-control input_select " placeholder="Répéter le mot de passe">
								</div>

								<div class="col-md-12">
									<input type="submit" name="basic-reg" class="btn btn-success srh btn_grid sub" value="S'inscrire">
								</div>


							</div>
						</div>
					</form>


				</div>
			</div>
		</div>
	</div>




	<?php include "includes/footer.php"; ?>



</body>

</html>