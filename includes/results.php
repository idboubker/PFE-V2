<?php 



if (isset($_POST['search'])) {
	$ville = $_POST['ville'];
	$metier = $_POST['metier'];



$sql=" select * from artisan a, artisan_details d where a.ville = '$ville' and a.metier = '$metier' and a.	id_art = d.	id_art";
$rsl = mysqli_query($link,$sql);



$nbdata = mysqli_num_rows($rsl);
$_SESSION['nbdata']= $nbdata;

$found=0;

if( $nbdata> 0){

	while($row = mysqli_fetch_assoc($rsl)){
		
		$found++;
		
		$a = $row['photo'];
        if($a == ""){$a = "img/464220-PFPXU4-113.jpg";}
		echo '<div class="offset-sm-0 col-6 col-lg-4 col-md-6 col-sm-12 p-3 p-md-2 p-sm-1">
		<div class=" art shadow">
			<div class="img_bg"  ><img src="'.$a.'"></div> 
			<hr>
			<div class="des_art">
				<h5>'.$row["nom_art"].' '.$row["prenom_art"].'</h5>
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
    </div>';

	}
}
else{
    //$found=0;
}

}
?>