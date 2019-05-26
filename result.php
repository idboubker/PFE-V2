<?php 


include "connexion.php";
mysqli_set_charset($link, "utf8");
$nbdata=0;
if (isset($_POST['search'])) {
	$ville = $_POST['ville'];
	$metier = $_POST['metier'];
$sql=" select * from artisan a, artisan_details d where a.ville = '$ville' and a.metier = '$metier' and a.	id_art = d.	id_art";
$rsl = mysqli_query($link,$sql);



$nbdata = mysqli_num_rows($rsl);


$found=0;

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>mou9ef</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/rating.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/check-box.css">
	<script src="js/jquery.js"></script>
</head>

<body>
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
	</div>
	<!--main-menu end-->
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
	<div class="container-fluid " style="box-shadow: 0 12px 22px -22px rgba(0, 0, 0, 0.8) inset; background: white;">
		<div class="container">
			<div class="row p-4">
				<div class="ads">
					<img src="" alt="">
				</div>
			</div>

			<div class="">
				<form action="result.php" method="POST">


					<div class="row text-center">
						<div class="col-md-2 xsd"></div>
						<div class="col-sm-6 col-md-3 p-2 p-lg-3 p-md-1 p-sm-1 ">
							<select name="ville" id="sel-vil" class="form-control chev">
								<?php
								$sql2 = "select * from villes";
								$result2 = mysqli_query($link, $sql2);
								while ($row2 = mysqli_fetch_assoc($result2)) {
									echo '<option value="'.$row2['nom_vil'].'">'.$row2['nom_vil'].'</option>';
								}
								?>
							</select>
						</div>

						<div class="col-sm-6 col-md-3 p-2 p-lg-3 p-md-1 p-sm-1">
							<select name="metier" id="sel-job" class="form-control chev">
								<?php
								$sql2 = "select * from meties";

								$result2 = mysqli_query($link, $sql2);
								while ($row2 = mysqli_fetch_assoc($result2)) {
									echo '<option value="' . $row2['nom_met'] . '">' . $row2['nom_met'] . '</option>';
								}
								?>
							</select>
						</div>

						<div class="col-sm-6 offset-sm-3 offset-md-0 col-md-2 p-2 p-lg-3 p-md-1 p-sm-1">
							<input type="submit" name="search" class="btn btn-success srh" value="SEARCH">
						</div>
						<div class="col-md-2"></div>
					</div>


				</form>
			</div>



			<div class="found">
				<div class="row">
					<span class="col-6 col-sm-6 col-md-4 col-lg-3 text-center" id="fnd">
						<p> <?= $nbdata ?> found!</p>
					</span>
					<span class="col-0 col-sm-9 col-md-8 col-lg-8 favth-hidden-sm text-right hidden-small">
						<hr></span>
				</div>
			</div>
		</div>
	</div>

	<div class="container container-sm-fluid">
		<div class="row ">
			<!--content-->

			<div class="col-sm-6 col-md-4 col-lg-3 col_filter text-center shadow m-2">
				<h3 class="ad_search">ADVANCED SEARCH</h3>
				<hr>

				<button class="btn btn_grid" type="submit">GRID</button><br>
				<button class="btn btn-info btn_map" type="submit">MAP</button>

				<form action="" method="">

					<select name="" id="" class="form-control input_select chev">
						<option value="">individual</option>
						<option value="">Marrakech</option>
						<option value="">Rabat</option>
					</select>

					<select name="" id="" class="form-control input_select chev">
						<option value="">sort by..</option>
						<option value="">Lawyer</option>
						<option value="">Plumber</option>
					</select>

					<select name="" id="" class="form-control input_select chev">
						<option value="">selector..</option>
						<option value="">Lawyer</option>
						<option value="">Plumber</option>
					</select>


					<input type="text" class="form-control input_select" placeholder="search by name, email..">







					<div class="left">
						<input type="checkbox" class="" id="ch_rate">
						<label for="ch_rate">Rate </label>
					</div>




					<br>
					<hr class="space">
					<div class="left">
						<input type="checkbox" class="" id="resume1">
						<label for="resume1">Resume included</label>
					</div>

					<br>
					<hr class="space">
					<div class="left">
						<input type="checkbox" class="" id="resume2">
						<label for="resume2">WhatsApp included</label>
					</div>

					<br>
					<hr class="space">
					<div class="left">
						<input type="checkbox" class="" id="resume3">
						<label for="resume3">Email included</label>
					</div>

					<br>
					<hr class="space">
					<button type="submit" class="btn btn-success srh btn_grid sub">Go
						<img src="img/go.png" alt="">
					</button>
				</form>

				<br><br>
				<hr class="space">
				<!--ads-->
				<div class="lb_ads xds"></div>


			</div>

			<div class="col-sm-5 col-md-7 col-lg-8">
				<div class="row">
				
				
				
			
				
								
<?php 

if( $nbdata > 0){

	while($row = mysqli_fetch_assoc($rsl)){
		
		$found++;
		$image = $row['photo'];
		if($image == ""){$image = "img/464220-PFPXU4-113.jpg";}
		
   ?>
		<div class="offset-sm-0 col-6 col-lg-4 col-md-6 col-sm-12 p-3 p-md-2 p-sm-1">
		<div class=" art shadow">
		
		
		
			<div style='background: url("<?php echo $image;?>") no-repeat;background-size:100% 100% !important; '  class="img_bg" ></div> 
				
				
			<hr>
			<div class="des_art">
				<h5><?php echo $row['nom_art']." ".$row['prenom_art'] ;?> </h5>
				<div class="rating left">
					<span class="fa fa-star "></span>
					<span class="fa fa-star "></span>
					<span class="fa fa-star-o "></span>
					<span class="fa fa-star-o "></span>
					<span class="fa fa-star-o "></span>
				</div>
				<span class="fa fa-heart-o right heart"></span>
			</div>
		</div>
    </div>

<?php 			
			
	}
}
else{
    //$found=0;
}


?>				
				
				
				
				</div>
				<!--ads center-->
				<div class="row p-3">
					<div class="ads">
						<img src="" alt="">
					</div>
				</div>

			</div>


		</div>


		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-8 text-center paging">
				<a href=""><button class="paging-num">1</button></a>
				<a href=""><button class="paging-num">2</button></a>
				<a href=""><button class="paging-num">3</button></a>
				<a href=""><button class="paging-gt"><img src="img/gt.svg" alt=""></button></a>


			</div>
		</div>

		<div class="row">
			<div class="f-ads">
				<img src="" alt="">
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
</body>

</html>