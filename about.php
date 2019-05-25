<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>mou9ef</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sh-index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/about.css">
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



    
    
    
	
   
   <div class="aboutus-section" style>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="aboutus">
                        <h2 class="aboutus-title">About Us</h2>
                        <p class="aboutus-text">Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in.</p>
                        <p class="aboutus-text">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem</p>
                        
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="aboutus-banner">
                        <img src="http://themeinnovation.com/demo2/html/build-up/img/home1/about1.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-5 col-sm-6 col-xs-12">
                    <div class="feature">
                        <div class="feature-box">
                            <div class="clearfix">
                                <div class="iconset">
                                    <span class="glyphicon glyphicon-cog icon"></span>
                                </div>
                                <div class="feature-content">
                                    <h4>Work with heart</h4>
                                    <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in.</p>
                                </div>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="clearfix">
                                <div class="iconset">
                                    <span class="glyphicon glyphicon-cog icon"></span>
                                </div>
                                <div class="feature-content">
                                    <h4>Reliable services</h4>
                                    <p>Donec vitae sapien ut libero venenatis faucibu. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt</p>
                                </div>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="clearfix">
                                <div class="iconset">
                                    <span class="glyphicon glyphicon-cog icon"></span>
                                </div>
                                <div class="feature-content">
                                    <h4>Great support</h4>
                                    <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in.</p>
                                </div>
                            </div>
                        </div>
                    </div>
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
	
		$(document).ready(function(){
  $('.nav-button').click(function(){
	$('body').toggleClass('nav-open');
  });
});
	
	
	</script>
 
</body>
</html>
