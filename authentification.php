<?php include "connexion.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>mou9ef</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/register.css">
	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<!--main-menu end-->
	<?php include "includes/header.php" ?>
	<div class="container-fluid reg-bg" style="box-shadow: 0 12px 22px -22px rgba(0, 0, 0, 0.8) inset;">

		<div class="mx-auto sign-up row col-12">
			<div class="form col-6 text-center m-auto">


				<div class="height-part">
					<h2>CONNEXION</h2>
				</div>
				<div class="height-part">
					<ul class="list-group">
						<div class="row">
							<span id="b-account" class="col-12 account active">
								<li class="list-group-item"><img src="img/logo-white.png" alt=""></li>
							</span>
						</div>
					</ul>
				</div>
				<form action="includes/login-inc.php" id="form-1" method="POST">
					<div class="input">
						<div class="row">
							<div class="col-md-12">
								<?php
								if (isset($_GET['error']) && $_GET['error'] == "reqfields") {
									echo "<span class='text-danger pt-0 error-log-re'>Ce champ est requis!</span>";
								} else if (isset($_GET['error']) && $_GET['error'] == "reqfieldusr") {
									echo "<span class='text-danger pt-0 error-log-re'>Ce champ est requis!</span>";
								}else if (isset($_GET['error']) && $_GET['error'] == "user") {
									echo "<span class='text-danger pt-0 error-log-re'>Email ou le mot de passe n'est pas correct!</span>";
								}
								else if (isset($_GET['error']) && $_GET['error'] == "pwd") {
									echo "<span class='text-danger pt-0 error-log-re'>Le mot de passe est incorrect!</span>";
								}
								?>
								<input type="text" class="form-control input_select " placeholder="Email" name="email" 
								<?php if (isset($_GET['login'])) { ?> value=<?= "{$_GET['login']}" ?> <?php } else {echo "value=''";} ?>>
							</div>
							<div class="col-md-12">
								<?php
								if (isset($_GET['error']) && $_GET['error'] == "reqfields") {
									echo "<span class='text-danger pt-0 error-log-re'>Ce champ est requis!</span>";
								} else if (isset($_GET['error']) && $_GET['error'] == "reqfieldpwd") {
									echo "<span class='text-danger pt-0 error-log-re'>Ce champ est requis!</span>";
								}
								?>
								<input type="password" class="form-control input_select " placeholder="Mot de passe" name="pwd">
							</div>
							<div class="cntr col-12">

								<div class="d-inline col-6">
									<input type="radio" name="account_type" id="radio1" value="hirafy" class="radio" checked />
									<label for="radio1">Compte Hirafy</label>
								</div>

								<div class="d-inline col-6">
									<input type="radio" name="account_type" id="radio2" value="basic" class="radio" />
									<label for="radio2">Compte Basique</label>
								</div>
							</div>
							<div class="col-md-12">
								<input type="submit" class="btn btn-success srh btn_grid sub" value="Connexion">
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>

	</div>

	<?php include "includes/footer.php"; ?>




	<script>
		$(document).ready(function() {
			$('.nav-button').click(function() {
				$('body').toggleClass('nav-open');
			});
		});
	</script>

</html>