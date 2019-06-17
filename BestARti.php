<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>mou9ef</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sh-index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/load.css">
    
   
<style>
</style>
</head>
<body>
    <?php include_once("includes/loading.html");?>
  
  <?php include "includes/header.php";?>



    <!-- *********************** -->

    <?php
$reslBest = mysqli_query($link,"select * from artisan a, artisan_details d where a.id_art = d.id_art");

while( $BestAtisans = mysqli_fetch_assoc($reslBest) ){
        $ida= $BestAtisans['id_art'];
		$image = $BestAtisans['photo'];
		if($image == ""){$image = "img/464220-PFPXU4-113.jpg";}


?>

                    <div class="offset-2 offset-sm-0 col-8 col-lg-3 col-md-4 col-sm-6 p-3">
                        <div class="no_p_m art shadow">
                        <a href="profile.php?ida=<?=$ida?>" class="clickable">   
                        <div style='background: url("<?php echo $image;?>") no-repeat;background-size:100% 100% !important;' class="img_bg"></div>
                        </a>    
                        <hr>
                            <div class="des_art">   
                                <!-- style="text-align:center;" -->
                                <h5><?php echo $BestAtisans['nom_art']." ".$BestAtisans['prenom_art'] ;?></h5>
                                <div class="rating left">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <span class="fa fa-heart-o right heart"></span>
                            </div>
                        </div>
                    </div>


<?php   }  ?>

    <!-- *********************** -->
    
    
   
    
    <?php include "includes/footer.php"; ?>
 
 <script src="js/jquery.js"></script>
 <script src="js/load.js"></script>
<script>
	
		$(document).ready(function(){
  $('.nav-button').click(function(){
	$('body').toggleClass('nav-open');
  });
});
	
	
	</script>
 
</body>
</html>
