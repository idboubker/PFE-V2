<?php    include "connexion.php"; 
 mysqli_set_charset($link,"utf8");  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>mou9ef</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sh-index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/jquery.js"></script>
<style>
</style>
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



    <div class="container-fluid in-search"  style="box-shadow: 0 30px 22px -22px rgba(0, 0, 0, 0.8) inset !important;">
         <div class="container text-center">
             <div class="row">
             <div class="sh text-center">
            <div class="search">
            <div class="lg-index"><img src="img/lg-index.svg" alt=""></div>
                <form action="result.php" method="POST" >
                <div class="row">
                <div class="col-md-4 col-sm-6 p-2">
                    <select name="ville" id="sel-vil" class="form-control chev">
                    <?php
                    $sql2 = "select * from villes";
                      
                    $result2 = mysqli_query($link,$sql2);
                    while($row2=mysqli_fetch_assoc($result2)){
                        echo '<option value="'.$row2['nom_vil'].'">'.$row2['nom_vil'].'</option>';
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
                        echo '<option value="'.$row2['nom_met'].'">'.$row2['nom_met'].'</option>';
                    }
                    ?>
                    </select>
                </div>
                <div class="col-md-3  p-2">
                    <input type="submit" name="search" class="btn btn-success srh " value="SEARCH">
                </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
         </div>
    </div>
    <div class="seprate"></div>
    <div class="container ">

    <div class="wum"><!--wum=why use mo9ef-->
    <h3 class="text-center">WHY USE MOU9EF ?</h3><div class="seprate"></div>
        <div class="row">
        <div class="offset-2 offset-sm-0 col-8 col-sm-6 col-md-3 ">
            <div class="feature text-center o shadow">
                <div class="feature-image">
                    <img src="img/star.svg" alt="">
                </div>
                <div class="feature-title">
                    <p>find the best <br>talent in one click</p>
                </div>

            </div>
        </div>


        <div class="offset-2 offset-sm-0 col-8 col-sm-6 col-md-3 ">
            <div class="feature text-center y shadow">
                <div class="feature-image">
                    <img src="img/sut.svg" alt="">
                </div>
                <div class="feature-title">
                    <p>save your time <br>and your effort</p>
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
                    <p>multidisciplinary<br>profiles</p>
                </div>

            </div>
        </div>


        <div class="offset-2 offset-sm-0 col-8 col-sm-6 col-md-3 ">
            <div class="feature text-center v shadow">
                <div class="feature-image">
                    <img src="img/money.svg" alt="">
                </div>
                <div class="feature-title">
                    <p>totally free</p>
                </div>

            </div>
        </div>



        </div>
    </div>

    <div class="seprate"></div>
    <div class="b-art"><h3 class=" text-center">BEST ARTISANS</h3>
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
                    See More ! <img src="img/seemore.svg" alt="">
                    </div>
                </div>
            </a>

        </div>



            </div>



        </div><!--b-art best artisan-->


        <div class="network b-art">
        <div class="seprate"></div>
            <h3 class=" text-center">BEST ARTISANS</h3>
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

            <div class="faq-title text-center shadow">FREQUENCY ASKED QUESTIONS</div>
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
