<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
?>
<div class="fixed-top main-menu" id="navb">
    <div class="flex-center p-5">
      <ul class="nav flex-column">
<li class="nav-item delay-1"><a class="nav-link" href="index.php">ACCUEIL</a></li>
        <li class="nav-item delay-2"><a class="nav-link" href="about.php">À PROPOS</a></li>
        <li class="nav-item delay-3"><a class="nav-link" href="result.php">CHERCHER</a></li>
        <?php if(!isset($_SESSION['username'])){
        echo '<li class="nav-item delay-4"><a class="nav-link" href="register_hirafy.php">INSCRIPTION HIRAFY</a></li>
        <li class="nav-item delay-4"><a class="nav-link" href="register_basic.php">S\'INSCRIPTION BASIQUE</a></li>
        <li class="nav-item delay-5"><a class="nav-link" href="authentification.php">DASHBOARD</a></li>
        <li class="nav-item delay-5"><a class="nav-link" href="authentification.php">CONNEXION</a></li>';
        }else {
          echo '<li class="nav-item delay-5"><a class="nav-link" href="dashboard/index.php">DASHBOARD</a></li>
          <li class="nav-item delay-5"><a class="nav-link" href="includes/logout-inc.php">DÉCONNEXION</a></li>';
        }
        ?>
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
                       <option value="" selected class="hidden-xm" disabled>Langue</option>
                   <!-- <option>Arabic</option>
                    <option>Frensh</option> -->
                    <option value="0">Français</option>
                    <option value="1" disabled>Anglais</option>
                    <option value="2" disabled>Arabe</option>
                  </select>
              </label>
            </span>

            <!-- <a href="register.php"><button class="btn btn-success sign"></button></a> -->
            <?php
             if(!isset($_SESSION['username'])){
            echo '<a href="register_basic.php"><button class="btn btn-success sign">Basique</button></a>
            <a href="register_hirafy.php"><button class="btn btn-success sign">Hirafy</button></a>
            <a href="authentification.php"><button class="btn btn-success log">Connexion</button></a>';}
            else {
              echo '<a href="includes/logout-inc.php"><button class="btn btn-success log" >Logout</button></a>';
            }
            ?>
            </span>
            <a class="nav-button"><span id="nav-icon3" class="colps"><span></span><span></span><span></span><span></span></span></a>
        </div>
    </div>
    </header>