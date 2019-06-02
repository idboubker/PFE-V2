<?php
session_start();
?>
<div class="fixed-top main-menu">
    <div class="flex-center p-5">
      <ul class="nav flex-column">
<li class="nav-item delay-1"><a class="nav-link" href="index.php">HOME</a></li>
        <li class="nav-item delay-2"><a class="nav-link" href="about.php">ABOUT US</a></li>
        <li class="nav-item delay-3"><a class="nav-link" href="result.php">SEARCH</a></li>
        <li class="nav-item delay-4"><a class="nav-link" href="register_hirafy.php">SIGN UP Hirafy</a></li>
        <li class="nav-item delay-4"><a class="nav-link" href="register_basic.php">SIGN UP Basic</a></li>
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

            <!-- <a href="register.php"><button class="btn btn-success sign"></button></a> -->
            <?php
             if(!isset($_SESSION['username'])){
            echo '<a href="register_basic.php"><button class="btn btn-success sign">Basic</button></a>
            <a href="register_hirafy.php"><button class="btn btn-success sign">Hirafy</button></a>
            <a href="authentification.php"><button class="btn btn-success log">Login</button></a>';}
            else {
              echo '<a href="includes/logout-inc.php"><button class="btn btn-success log">Logout</button></a>';
            }
            ?>
            </span>
            <a class="nav-button"><span id="nav-icon3" class="colps"><span></span><span></span><span></span><span></span></span></a>
        </div>
    </div>
    </header>