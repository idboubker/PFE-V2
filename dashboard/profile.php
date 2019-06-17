<?php  include('includes/artisan.php')?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Mou9ef - Responsive Flat Admin Dashboard</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- <link rel="shortcut icon" href="assets/images/faviicon.png"> -->

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="assets/plugins/morris/morris.css">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">

</head>

<body class="fixed-left">


   
    <!-- Begin page -->
    <div id="wrapper">

        <!-- ========== Left Sidebar Start ========== -->
		<?php  $index="";$profile="active";$add=""; include('includes/leftBar.php')?>
        <!-- Left Sidebar End -->

        <!-- Start right Content here -->

        <div class="content-page">
            <!-- Start content -->
            <div class="content">

                <!-- Top Bar Start -->
                <?php include('includes/topBar.php')?>
                <!-- Top Bar End -->

                <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                        
                                       
									<form action="includes/profile-mod.php" method="post">
                                            <h4 class="mt-0 header-title">Profile / ( View - Edit )</h4>
                                            <p class="text-muted m-b-30 font-14"><code
                                                    class="highlighter-rouge"></code> 
                                                    </p>

                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Nom </label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="<?=$art['nom_art'] ?>" id="example-text-input" name="nom_art" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-search-input" class="col-sm-2 col-form-label">Prenom</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="search" value="<?=$art['prenom_art'] ?>" id="example-search-input" name="prenom_art" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-search-input" class="col-sm-2 col-form-label">Genre</label>
                                                <div class="col-sm-10">
                                                   <div class="row">
                                                   	
                                                  
                                                    <div class="custom-control col-2" style="margin-left: 15px;margin-right: 5px;">
                                                           <?php
														$homme="";$femme="";
														if($art['sexe_art']=='Homme'){
															$homme=" checked";
														}
														if($art['sexe_art']=='Femme'){
															$femme=" checked";
														}
														
														?>
                                                            <input type="radio" class="custom-control-input" id="customCheck1" name="sexe_art" value="Homme" <?=$homme?>>
                                                            <label class="custom-control-label" for="customCheck1">Homme</label>
                                                        </div>
                                                        <div class="custom-control col-2">
                                                            <input type="radio" class="custom-control-input" value="Femme" id="customCheck2" name="sexe_art" <?=$femme?>>
                                                            <label class="custom-control-label" for="customCheck2">Femme</label>
                                                        </div>
                                                         </div>
                                                </div>
                                                
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-email-input" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="email_art" type="email" value="<?=$art['email_art'] ?>" id="example-email-input" required>
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label for="example-date-input" class="col-sm-2 col-form-label">Date Naissance</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="date" name="dateNaissance" value="<?=$art['dateNaissance'] ?>" id="example-date-input" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-tel-input" class="col-sm-2 col-form-label">Telephone</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="tele" type="tel" value="<?=$art['tele'] ?>" id="example-tel-input" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-tel-input" class="col-sm-2 col-form-label">Whatsapp</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="whatsapp" type="tel" value="<?=$art['whatsapp'] ?>" id="example-tel-input">
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Metier</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control"  name="metier" required>
                                                        <option disabled>Metier : </option>
                                                        
                                                        
                                                        <?php
														

														$metiers=mysqli_query($link,"select * from meties");
														while($met=mysqli_fetch_array($metiers)){
															if($met['id_met']==$art['metier']){
																echo "<option value='{$met['id_met']}' selected>".$met['nom_met']." </option>";
															}else{
																echo "<option  value='{$met['id_met']}'>".$met['nom_met']." </option>";
															}
														}

														
														?>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Ville</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="ville" required>
                                                        <option disabled>ville : </option>
                                                         <?php
														

														$villes=mysqli_query($link,"select * from villes");
														while($vil=mysqli_fetch_array($villes)){
															if($vil['id_vil']==$art['ville']){
																echo "<option value='{$vil['id_vil']}' selected>".$vil['nom_vil']." </option>";
															}else{
																echo "<option value='{$vil['id_vil']}'>".$vil['nom_vil']." </option>";
															}
														}

														
														?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-tel-input" class="col-sm-2 col-form-label">Quartier</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="quartier" type="tel" value="<?=$art['quartier'] ?>" id="example-tel-input" required>
                                                </div>
                                            </div>
                                            
                                           
                                            
                                            <div class="form-group row">
                                                <label for="example-tel-input" class="col-sm-2 col-form-label">Code Postal</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="code_postal" type="tel" value="<?=$art['code_postal'] ?>" id="example-tel-input" required>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label for="example-url-input" class="col-sm-2 col-form-label">Facebook</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="facebook" type="text" value="<?=$art['facebook'] ?>" id="example-url-input">
                                                </div>
                                            </div>
                                           
                                            
                                            <div class="form-group row">
                                                <label for="example-date-input" class="col-sm-2 col-form-label">Description</label>
                                                <div class="col-sm-10">
                                                   <textarea id="description" name="description" required="" class="form-control" required><?=$art['description'] ?></textarea>
                                                   
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label for="example-password-input" class="col-sm-2 col-form-label">Mot de passe</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="password"  name="pwd_art" id="example-password-input" placeholder="pour modifier vos informations vous devez entrer votre mot de passe" required>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group text-center">
                                                    <div>
                                                        <input type="submit" class="btn btn-primary waves-effect waves-light" name="mod-prof" value="modifier">
                                                            
                                                    </div>
                                                </div>
                                            
                                            
                                           
                                            
                                            
                                            
                                            
                                           
                                           
                                            
                                            
                                            </form>
                                            
                                            
                                            
                                            
                                            
                                        </div>
                                        
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                        </div><!-- container -->

                    <!-- container -->

                </div>
                <!-- Page content Wrapper -->

            </div>
            <!-- content -->

            <footer class="footer">
                    © 2019 Mou9ef - All Rights Reserved.
                </footer>

        </div>
        <!-- End Right content here -->

    </div>
    <!-- END wrapper -->

    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/app.js"></script>
  

   

</body>

</html>






