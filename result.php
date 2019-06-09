<?php 

include "connexion.php";
mysqli_set_charset($link, "utf8");
session_start();

$nbdata=0;
if (isset($_GET['search']) || isset($_GET['fp'])) {
			$ville = $_GET['ville'];
			$metier = $_GET['metier'];
			$sql=" select * from artisan a, artisan_details d where a.ville = '$ville' and a.metier = '$metier' and a.	id_art = d.	id_art";
			$rsl = mysqli_query($link,$sql);
			$nbdata = mysqli_num_rows($rsl);


			$_SESSION['ville'] = $ville;
			$_SESSION['metier'] = $metier;
}



if (isset($_GET['searchFilter'])) {
			$ville =	$_SESSION['ville'];
			$metier = $_SESSION['metier'];
			
			

			// d.typeTravail
			$typeTrav = $_GET['typeTrav'];
			if($typeTrav == ''){
				$typeTrav = '%';
			}

			// order by  d.dateInscription	
			$sortby = $_GET['sortBy'];

			//Email Filter
			if (isset($_GET['emailF'])) { $EmInc = '%@%'; }
			else { $EmInc = '%'; }

			//Whatsapp Filter  d.whatsapp
			if (isset($_GET['whatsappF'])) { $whtsinc = '%0%'; }
			else { $whtsinc = '%'; }

			// Discription Filter
			if (isset($_GET['descrF'])) { $resumInc = '%a%'; } 
			else { $resumInc = '%';	}

			// Email or Last Name Filter on First Name 
			$filter2 = $_GET['searchBy'];
			if($filter2==""){$filter2='%';}


			$sql=" select * from artisan a, artisan_details d where d.typeTravail like '$typeTrav' and a.email_art like '$EmInc' and d.whatsapp like '$whtsinc' and d.description like '$resumInc' and (a.nom_art like '$filter2' or a.prenom_art like '$filter2' or a.email_art like '$filter2') and a.ville = '$ville' and a.metier = '$metier' and a.	id_art = d.	id_art order by $sortby";
			$rsl = mysqli_query($link,$sql);
			$nbdata = mysqli_num_rows($rsl);
}








$conn = mysqli_connect('localhost', 'root', '', 'mou9ef');

if (isset($_GET['save'])) {
    $uID = $conn->real_escape_string($_GET['uID']);
    $ratedIndex = $conn->real_escape_string($_GET['note_eva']);
    $ratedIndex++;

    if (!$uID) {
        $conn->query("INSERT INTO evaluation (rateIndex) VALUES ('$ratedIndex')");
        $sql = $conn->query("SELECT id_eva FROM evaluation ORDER BY id_eva DESC LIMIT 1");
        $uData = $sql->fetch_assoc();
        $uID = $uData['id_eva'];
    } else
        $conn->query("UPDATE evaluation SET note_eva='$ratedIndex' WHERE id_eva='$uID'");

    exit(json_encode(array('id_eva' => $uID)));
}

$sql = $conn->query("SELECT id_eva FROM evaluation");
$numR = $sql->num_rows;

$sql = $conn->query("SELECT SUM(note_eva) AS total FROM evaluation");
$rData = $sql->fetch_array();
$total = $rData['total'];

$avg = $total / $numR;
?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>mou9ef</title>
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/rating.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/check-box.css">
	<link rel="stylesheet" href="css/load.css">
	
	
	
</head>

<body>
 
	 <?php include_once("includes/loading.html");?>

	<?php include "includes/header.php";?>
	<div class="container-fluid " style="box-shadow: 0 12px 22px -22px rgba(0, 0, 0, 0.8) inset; background: white;">
		<div class="container">
			<div class="row p-4">
				<div class="ads">
					<img src="" alt="">
				</div>
			</div>

			<div class="">
				<form action="result.php" method="GET">


					<div class="row text-center">
						<div class="col-md-2 xsd"></div>
						<div class="col-sm-6 col-md-3 p-2 p-lg-3 p-md-1 p-sm-1 ">
							<select name="ville" id="sel-vil" class="form-control chev">
								<?php
								$sql2 = "select * from villes";
								$result2 = mysqli_query($link, $sql2);
								
								if($_GET['ville'] != ""){
								$selectedVille = mysqli_query($link, "select * from villes where id_vil = {$_GET['ville']}");
								$villeselected = mysqli_fetch_assoc($selectedVille);
								echo '<option value="'.$villeselected['id_vil'].'">'.$villeselected['nom_vil'].'</option>';
								}
								while ($row2 = mysqli_fetch_assoc($result2)) {
									echo '<option value="'.$row2['id_vil'].'">'.$row2['nom_vil'].'</option>';
								}
								?>
							</select>
						</div>

						<div class="col-sm-6 col-md-3 p-2 p-lg-3 p-md-1 p-sm-1">
							<select name="metier" id="sel-job" class="form-control chev">
								<?php
								$sql2 = "select * from meties";
								$result2 = mysqli_query($link, $sql2);
								if($_GET['metier'] != ""){
								$selectedMet = mysqli_query($link, "select * from meties where id_met = {$_GET['metier']}");
								$Metselected = mysqli_fetch_assoc($selectedMet);
								echo '<option value="'.$Metselected['id_met'].'">'.$Metselected['nom_met'].'</option>';
							}
								while ($row2 = mysqli_fetch_assoc($result2)) {
									echo '<option value="' . $row2['id_met'] . '">' . $row2['nom_met'] . '</option>';
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

				<!-- <button class="btn btn_grid" type="submit">GRID</button><br>
				<button class="btn btn-info btn_map" type="submit">MAP</button> -->

				<form action="result.php" method="GET">

					<select name="typeTrav" id="" class="form-control input_select chev">
					<option value="" >Individual or Company</option>
						<option value="individual">individual</option>
						<option value="company">company</option>
					</select>

					<select name="sortBy" id="" class="form-control input_select chev">
							<option value="a.id_art" >Sort By ..</option>
							<option value="a.nom_art">Name</option>
							<option value="a.dateInscription">Registration date</option>
					</select>

					<!-- <select name="" id="" class="form-control input_select chev">
						<option value="">selector..</option>
						<option value="">Lawyer</option>
						<option value="">Plumber</option>
					</select> -->


					<input type="text" class="form-control input_select" name="searchBy" placeholder="search by name, email..">







					<!-- <div class="left">
						<input type="checkbox" class="" id="ch_rate">
						<label for="ch_rate">Rate </label>
					</div> -->




					<br>
					<hr class="space">
					<div class="left">
						<input type="checkbox" name="descrF" class="" id="resume1">
						<label for="resume1"> Resume included</label>
					</div>

					<br>
					<hr class="space">
					<div class="left">
						<input type="checkbox" name="whatsappF" class="" id="resume2">
						<label for="resume2"> WhatsApp included</label>
					</div>

					<br>
					<hr class="space">
					<div class="left">
						<input type="checkbox" name="emailF" class="" id="resume3">
						<label for="resume3"> Email included</label>
					</div>

					<br><br>
					<hr class="space">
					<button type="submit" name="searchFilter" class="btn btn-success srh btn_grid sub">Go
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
		
		$ida=$row['id_art'];
		$image = $row['photo'];
		if($image == ""){$image = "img/464220-PFPXU4-113.jpg";}

   ?>
  
		<div class="offset-sm-0 col-6 col-lg-4 col-md-6 col-sm-12 p-3 p-md-2 p-sm-1">
		<div class=" art shadow">
		 <a href="profile.php?ida=<?=$ida?>" class="clickable">
		
		
			<div style='background: url("<?php echo $image;?>") no-repeat;background-size:100% 100% !important; '  class="img_bg" ></div> 
				
		</a>		
			<hr>
			<div class="des_art">
				<h5><?php echo $row['nom_art']." ".$row['prenom_art'] ;?> </h5>
				<div class="rating left">
				<i class="fa fa-star fa-2x" data-index="0"></i>
        <i class="fa fa-star fa-2x" data-index="1"></i>
        <i class="fa fa-star fa-2x" data-index="2"></i>
        <i class="fa fa-star fa-2x" data-index="3"></i>
        <i class="fa fa-star fa-2x" data-index="4"></i>
				</div>
				
				<span class="right"><?php echo round($avg, 2) ?></span>
			</div>
			
		</div>
    </div>
	
<?php 			
			
	}
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
	</div>
	<?php include "includes/footer.php"; ?>


<script src="js/jquery.js"></script>
<script src="js/load.js"></script>
	<script>
		$(document).ready(function() {
			$('.nav-button').click(function() {
				$('body').toggleClass('nav-open');
			});
		});
		
	
		
	</script>
</body>

</html>