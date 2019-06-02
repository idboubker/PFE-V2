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
<<<<<<< HEAD

<body>
	<!--main-menu end-->
	<?php include "includes/header.php" ?>


	<div class="container-fluid reg-bg" style="box-shadow: 0 12px 22px -22px rgba(0, 0, 0, 0.8) inset;">

		<div class="mx-auto sign-up row col-12">
			<div class="form col-6 text-center m-auto">


				<div class="height-part">
					<h2>LOGIN</h2>
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
									echo "<span class='text-danger pt-0 error-log-re'>This field is required!</span>";
								} else if (isset($_GET['error']) && $_GET['error'] == "reqfieldusr") {
									echo "<span class='text-danger pt-0 error-log-re'>This field is required!</span>";
								}else if (isset($_GET['error']) && $_GET['error'] == "user") {
									echo "<span class='text-danger pt-0 error-log-re'>Email or password are incorrect!</span>";
								}
								else if (isset($_GET['error']) && $_GET['error'] == "pwd") {
									echo "<span class='text-danger pt-0 error-log-re'>Password is incorrect!</span>";
								}
								?>
								<input type="text" class="form-control input_select " placeholder="Email" name="email" 
								<?php if (isset($_GET['login'])) { ?> value=<?= "{$_GET['login']}" ?> <?php } else {echo "value=''";} ?>>
							</div>
							<div class="col-md-12">
								<?php
								if (isset($_GET['error']) && $_GET['error'] == "reqfields") {
									echo "<span class='text-danger pt-0 error-log-re'>This field is required!</span>";
								} else if (isset($_GET['error']) && $_GET['error'] == "reqfieldpwd") {
									echo "<span class='text-danger pt-0 error-log-re'>This field is required!</span>";
								}
								?>
								<input type="password" class="form-control input_select " placeholder="Password" name="pwd">
							</div>
							<div class="cntr col-12">

								<div class="d-inline col-6">
									<input type="radio" name="account_type" id="radio1" value="hirafy" class="radio" checked />
									<label for="radio1">Hirafy Account</label>
								</div>

								<div class="d-inline col-6">
									<input type="radio" name="account_type" id="radio2" value="basic" class="radio" />
									<label for="radio2">Basic Account</label>
								</div>
							</div>
							<div class="col-md-12">
								<input type="submit" class="btn btn-success srh btn_grid sub" value="Sign In">
							</div>


						</div>
					</div>
				</form>




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
		$(document).ready(function() {
			$('.nav-button').click(function() {
				$('body').toggleClass('nav-open');
			});
		});
	</script>
=======
<body>
 <?php include_once("includes/loading.html");?>
 <div class="fixed-top main-menu">
    <div class="flex-center p-5">
      <ul class="nav flex-column">
<li class="nav-item delay-1"><a class="nav-link" href="index.php">HOME</a></li>
        <li class="nav-item delay-2"><a class="nav-link" href="about.php">ABOUT US</a></li>
        <li class="nav-item delay-3"><a class="nav-link" href="result.php">SEARCH</a></li>
        <li class="nav-item delay-4"><a class="nav-link" href="register.php">SIGN UP</a></li>
        <li class="nav-item delay-5"><a class="nav-link" href="authentification.php">SIGN IN</a></li>

      </ul>
    </div>
  </div> <!--main-menu end-->
    <header class="container">
    <div class="row">
        <div class="left-head col-1 col-md-4 col-sm-2">
            <a href="index.php"><img src="img/logo.png" alt=""></a>
        </div>

        <div class="right-head col-8 col-md-8 col-sm-10 text-right">

           <span class="xds">
            <span class="lang hidden-md hidden">
            <label for="lang" class=""><img src="img/lang.png" alt="">
                <select id="lang" class="form-control">
                       <option value="" selected class="hidden-xm" disabled>Language</option>
                    <option>Arabic</option>
                    <option>Frensh</option>
                    <option>English</option>
                  </select>
              </label>
            </span>

            <a href="register.php"><button class="btn btn-success sign">Sign-up</button></a>
            <a href="authentification.php"><button class="btn btn-success log">Log-in</button></a>

            </span>
            <a class="nav-button"><span id="nav-icon3" class="colps"><span></span><span></span><span></span><span></span></span></a>
        </div>
    </div>
    </header>


    <div class="container-fluid reg-bg " style="box-shadow: 0 12px 22px -22px rgba(0, 0, 0, 0.8) inset;">
        <div class="container">
            <div class="sign-up row m-auto" style="width: 550px !important;">
                <div class="form offset-md-1 col-md-10 text-center m-auto" >


                        <div class="height-part">
                            <h2>SIGN IN</h2>
                        </div>
                        <div class="height-part">
                            <ul class="list-group">
                            <div class="row">
                            <span id="b-account" class="col-xs-12 col-sm-12 col-md-12 account active">

                                    <li class="list-group-item"><img src="img/logo-white.png" alt=""></li>

                            </span>

                            </div>

                            </ul>

                        </div>

                        <form action="./includes/signin.php" id="form-1" method="post" style="">
                        <div class="input">
                        <div class="row">


                        <?php
                            if(isset($_GET['error']) and $_GET['error']=="ep"){
                                echo '
                                <div class="btn-danger alert-danger text-center p-1 m-1 form-control" style="" margin="auto !important"><p>error email or password</p></div>

                                ';
                            }
							
								if(isset($_GET['error']) and $_GET['error']=="dash"){
                                echo '
                                <div class="btn-danger alert-danger text-center p-1 m-1 form-control" style="" margin="auto !important"><p>you have to login first</p></div>

                                ';
                            }
							



                            ?>

                        <div class="col-md-12">
                            <input type="text" class="form-control input_select" name="login" placeholder="Email">
                        </div>

                        <div class="col-md-12">
                            <input type="password" name="pass" class="form-control input_select " placeholder="Password">
                        </div>

                        <div class="col-md-12">
                            <input type="submit" name="auth" class="btn btn-success srh btn_grid sub" value="Sign In">
                        </div>


                        </div>
                        </div>
                    </form>


                    <form action="" id="form-2" style="display: none;">
                        <div class="input">
                        <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control input_select " placeholder="Votre Nom">
                        </div>

                        <div class="col-md-6">
                            <input type="text" class="form-control input_select " placeholder="Votre Prenom">
                        </div>
                        <div class="col-md-12">
                        <label style="align:left !important">
                            <strong class="">date de Naissance</strong>
                        </label>
                            <input type="date" class="form-control input_select " placeholder="Date de Naissance">
                        </div>



                                        <div class="col-md-12">
                             <strong class="">Gender :</strong>
                         </div>
                        <div class="col-md-12 ">
                            <div class="form-group text-center">




                                    <!-- Group of material radios - option 1 -->



                    <div class="btn-group btn-group-toggle btn-rad" data-toggle="buttons" align="center">
                        <div class="raddiv">
                            <label class="btn btn-danger rad">
                            <input type="radio" name="jb-radio" id="jb-radio-1"> Male
                        </label>
                        <label class="btn btn-danger rad">
                            <input type="radio" name="jb-radio" id="jb-radio-2"> Female
                        </label>
                        </div>

                    </div>





        </div>
                        </div>


                        <div class="col-md-12">
                            <select name="ville" id=""  class="form-control input_select ">
                                <option value="Ville" disabled selected>Ville</option>
                                <?php
                    $sql = "select * from villes";

                    $result = mysqli_query($link,$sql);
                    while($row=mysqli_fetch_assoc($result)){
                        echo '<option value="">'.$row['nom_vil'].'</option>';
                    }
                    ?>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <select name="metier" id=""  class="form-control input_select ">
                                <option value="metier" disabled selected>metier</option>
                                <?php
                    $sql2 = "select * from meties";

                    $result2 = mysqli_query($link,$sql2);
                    while($row2=mysqli_fetch_assoc($result2)){
                        echo '<option value="">'.$row2['nom_met'].'</option>';
                    }
                    ?>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control input_select " placeholder="Email">
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control input_select " placeholder="Phone Number">
                        </div>




                        <div class="col-md-6">
                            <input type="password" class="form-control input_select " placeholder="Password">
                        </div>

                        <div class="col-md-6">
                            <input type="text" class="form-control input_select " placeholder="Rpeat Password">
                        </div>
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-success srh btn_grid sub" value="Sign up">
                        </div>


                        </div>
                        </div>
                </form>


                </div>
            </div>
        </div>
    </div>



    <?php include "includes/footer.php"; ?>



<script type="text/javascript" src="js/jquery.js"></script>
<script src="js/load.js"></script>
    <script>
    $(document).ready(function(){
  $('.nav-button').click(function(){
    $('body').toggleClass('nav-open');
  });
});


    </script>
>>>>>>> 6f46262b9e0faccd9676083f449cbce099c25b7d
</body>

</html>