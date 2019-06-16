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
    <link rel="stylesheet" href="css/sh-index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/load.css">
    
<style>
</style>
</head>
<body>
  <?php include_once("includes/loading.html");?>
  
  <?php include "includes/header.php";?>
<div id="all-all">
    <div class="container-fluid in-search"  style="box-shadow: 0 30px 22px -22px rgba(0, 0, 0, 0.8) inset !important;">
         <div class="container text-center">
             <div class="row">
             <div class="sh text-center">
            <div class="search">
            <div class="lg-index"><img src="img/lg-index.svg" alt=""></div>
                <form action="result.php" method="GET" >
                <div class="row">
                <div class="col-md-4 col-sm-6 p-2">
                    <select name="ville" id="sel-vil" class="form-control chev">
                    
                    <?php
                    $sql2 = "select * from villes";
                      
                    $result2 = mysqli_query($link,$sql2);
                    while($row2=mysqli_fetch_assoc($result2)){
                        echo '<option value="'.$row2['id_vil'].'">'.$row2['nom_vil'].'</option>';
                    }
                    ?>
                    
                    
                    
                    </select>
                </div>

                <div class="col-md-4 col-sm-6  p-2">
                    <select name="metier" id="sel-job" class="form-control chev">
                    
                    
                    <?php
                    $sql2 = "select * from meties";
                      
                    $result2 = mysqli_query($link,$sql2);
                    while($row2=mysqli_fetch_assoc($result2)){
                        echo '<option value="'.$row2['id_met'].'">'.$row2['nom_met'].'</option>';
                    }
                    ?>
                    
                    
                    
                    </select>
                </div>
                <div class="col-md-3  p-2">
                    <input type="submit" name="search" class="btn btn-success srh " value="CHERCHER">
                </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
         </div>
    </div>
    <div class="seprate"></div>
    <div class="container " >

    <div class="wum"><!--wum=why use mo9ef-->
    <h3 class="text-center">POURQUOI DEVRAIS-JE UTILISER MOU9EF?</h3><div class="seprate"></div>
        <div class="row">
        <div class="offset-2 offset-sm-0 col-8 col-sm-6 col-md-3 ">
            <div class="feature text-center o shadow">
                <div class="feature-image">
                    <img src="img/star.svg" alt="">
                </div>
                <div class="feature-title">
                    <p>Trouver le meilleur <br>talent en un clic</p>
                </div>

            </div>
        </div>


        <div class="offset-2 offset-sm-0 col-8 col-sm-6 col-md-3 ">
            <div class="feature text-center y shadow">
                <div class="feature-image">
                    <img src="img/sut.svg" alt="">
                </div>
                <div class="feature-title">
                    <p>Économisez votre temps <br> et vos efforts</p>
                </div>

            </div>
        </div>

        <br class="visible-sm-block">

        <div class="offset-2 offset-sm-0 col-8 col-sm-6 col-md-3 ">
            <div class="feature text-center r shadow">
                <div class="feature-image">
                    <img src="img/mp.svg" alt="">
                </div>
                <div class="feature-title">
                    <p>Profils <br> multidisciplinaires</p>
                </div>

            </div>
        </div>


        <div class="offset-2 offset-sm-0 col-8 col-sm-6 col-md-3 ">
            <div class="feature text-center v shadow">
                <div class="feature-image">
                    <img src="img/money.svg" alt="">
                </div>
                <div class="feature-title">
                    <p>Complètement gratuit</p>
                </div>

            </div>
        </div>



        </div>
    </div>

    <div class="seprate"></div>
    <div class="b-art"><h3 class=" text-center">MEILLEURS ARTISANS</h3>
    <div class="seprate"></div>

        <div class="row">





        <div class="offset-2 offset-sm-0 col-8 col-lg-3 col-md-4 col-sm-6 p-3">

	<div class="no_p_m art shadow">
		<div class="img_bg"></div>
		<hr>
		<div class="des_art">
			<h5>John doe</h5>



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
       
       
       
       <div class="offset-2 offset-sm-0 col-8 col-lg-3 col-md-4 col-sm-6 p-3">

	<div class="no_p_m art shadow">
		<div class="img_bg"></div>
		<hr>
		<div class="des_art">
			<h5>John doe</h5>



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
       
       
			<div class="offset-2 offset-sm-0 col-8 col-lg-3 col-md-4 col-sm-6 p-3">

	<div class="no_p_m art shadow">
		<div class="img_bg"></div>
		<hr>
		<div class="des_art">
			<h5>John doe</h5>



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
       
       <div class="offset-2 offset-sm-0 col-8 col-lg-3 col-md-4 col-sm-6 p-3">

	<div class="no_p_m art shadow">
		<div class="img_bg"></div>
		<hr>
		<div class="des_art">
			<h5>John doe</h5>



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
       
       
       <div class="offset-2 offset-sm-0 col-8 col-lg-3 col-md-4 col-sm-6 p-3">

	<div class="no_p_m art shadow">
		<div class="img_bg"></div>
		<hr>
		<div class="des_art">
			<h5>John doe</h5>



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
       
       
       <div class="offset-2 offset-sm-0 col-8 col-lg-3 col-md-4 col-sm-6 p-3">

	<div class="no_p_m art shadow">
		<div class="img_bg"></div>
		<hr>
		<div class="des_art">
			<h5>John doe</h5>



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
       
       <div class="offset-2 offset-sm-0 col-8 col-lg-3 col-md-4 col-sm-6 p-3">

	<div class="no_p_m art shadow">
		<div class="img_bg"></div>
		<hr>
		<div class="des_art">
			<h5>John doe</h5>



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





       


        <div class="offset-2 offset-sm-0 col-8 col-lg-3 col-md-4 col-sm-6 p-3">
            <a href="">
                <div class="no_p_m art shadow">
                    <div class="see-more text-center">
                    Voir Plus ! <img src="img/seemore.svg" alt="">
                    </div>
                </div>
            </a>

        </div>



            </div>



        </div><!--b-art best artisan-->


        <div class="network b-art">
        <div class="seprate"></div>
            <h3 class=" text-center">MEILLEURS ARTISANS</h3>
            <div class="seprate"></div>
            <div class="row text-center">
                <div class="offset-2 offset-sm-0 col-8 col-sm-6 col-md-3 margin-seprate">
                    <div class="fb social shadow">
                        <div class="social-title">FACEBOOK</div>
                        <div class="social-url">
                            <div class="social-img p-2"><img src="./img/f.svg" alt=""></div>
                            <div class="social-btn"><a href=""><button>LIKE</button></a></div>
                        </div>
                    </div>
                </div>

                <div class="offset-2 offset-sm-0 col-8 col-sm-6 col-md-3 margin-seprate">
                    <div class="yt social shadow">
                        <div class="social-title">YOUTUBE</div>
                        <div class="social-url">
                            <div class="social-img p-2"><img src="./img/yt.svg" alt="" style="width: 90px !important"></div>
                            <div class="social-btn"><a href=""><button>SUBSCRIBE</button></a></div>
                        </div>
                    </div>
                </div>

                <div class="offset-2 offset-sm-0 col-8 col-sm-6 col-md-3 margin-seprate">
                    <div class="tw social shadow">
                        <div class="social-title">TWITER</div>
                        <div class="social-url">
                            <div class="social-img p-3"><i class="fa fa-twitter"></i></div>
                            <div class="social-btn"><a href=""><button>LIKE</button></a></div>
                        </div>
                    </div>
                </div>

                <div class="offset-2 offset-sm-0 col-8 col-sm-6 col-md-3 margin-seprate">
                    <div class="ista social shadow">
                        <div class="social-title">INSTAGRAM</div>
                        <div class="social-url">
                            <div class="social-img p-3"><img src="./img/instg.svg" alt="" style="width: 60px !important"></div>
                            <div class="social-btn"><a href=""><button>LIKE</button></a></div>
                        </div>
                    </div>
                </div>





            </div>
        </div>
        <div class="seprate"></div>


    <br><br>
    </div>


    
    <div class="container-fluid faq">

        <div class="container">

            <div class="faq-title text-center shadow">QUESTIONS FRÉQUEMMENT POSÉES</div>
            <div class="seprate"></div>
            <div class="row">
                <div class="col-md-6 margin-seprate q-a">

                    <div class="question q1">Is mou9ef website free for use ?</div>
                    <div class="answer a1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ratione rerum.</div>
                </div>
                <div class="col-md-6 margin-seprate q-a">
                    <div class="question q2">Is mou9ef website free for use ?</div>
                    <div class="answer a2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ratione rerum.</div>
                </div>



            <br>


                <div class="col-md-6 margin-seprate q-a">
                    <div class="question q3">Is mou9ef website free for use ?</div>
                    <div class="answer  a3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ratione rerum.</div>
                </div>
                <div class="col-md-6  margin-seprate q-a">
                    <div class="question q4">Is mou9ef website free for use ?</div>
                    <div class="answer a4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ratione rerum.</div>
                </div>



            <br>


                <div class="col-md-6 margin-seprate q-a">
                    <div class="question q5">Is mou9ef website free for use ?</div>
                    <div class="answer a5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ratione rerum.</div>
                </div>
                <div class="col-md-6 margin-seprate q-a">
                    <div class="question q6">Is mou9ef website free for use ?</div>
                    <div class="answer a6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ratione rerum.</div>
                </div>

            </div>
            <div class="seprate"></div><div class="seprate"></div>
        </div>
    </div>

   
   
   
 </div>  
   
    <?php include "includes/footer.php"; ?>



   
    
    <script src="js/jquery.js"></script>
   	<script src="./js/load.js"></script>
    <script>
        function faqControl(){
    $(".answer").hide();
    $(".question").on("click",function(){
        $(this).next().slideToggle();
    });
}
        $(document).ready(function(){
      faqControl();
 });

$(document).ready(function(){
  $('.nav-button').click(function(){
	$('body').toggleClass('nav-open');
  });
});
		
		
		
	

    </script>
</body>
</html>
