<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>mou9ef</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/load.css">


</head>
<body>
 <?php include_once("includes/loading.html");?>
 <?php include "includes/header.php";?>
    <div class="container-fluid reg-bg " style="box-shadow: 0 12px 22px -22px rgba(0, 0, 0, 0.8) inset;">
        <div class="container">
            <div class="sign-up row m-auto" style="width: 550px !important;">
                <div class="form offset-md-1 col-md-10 text-center m-auto" >


                        <div class="height-part">
                            <h2>SIGN IN</h2>
                        </div>
                        <div class="height-part">
                            <ul class="list-group">
                            <div class="row">
                            <span id="b-account" class="col-xs-12 col-sm-12 col-md-12 account active">

                                    <li class="list-group-item"><img src="img/logo-white.png" alt=""></li>

                            </span>

                            </div>

                            </ul>

                        </div>

                        <form action="./includes/signin.php" id="form-1" method="post" style="">
                        <div class="input">
                        <div class="row">


                        <?php
                            if(isset($_GET['error']) and $_GET['error']=="ep"){
                                echo '
                                <div class="btn-danger alert-danger text-center p-1 m-1 form-control" style="" margin="auto !important"><p>error email or password</p></div>

                                ';
                            }
							
								if(isset($_GET['error']) and $_GET['error']=="dash"){
                                echo '
                                <div class="btn-danger alert-danger text-center p-1 m-1 form-control" style="" margin="auto !important"><p>you have to login first</p></div>

                                ';
                            }
							



                            ?>

                        <div class="col-md-12">
                            <input type="text" class="form-control input_select" name="login" placeholder="Email">
                        </div>

                        <div class="col-md-12">
                            <input type="text" name="pass" class="form-control input_select " placeholder="Password">
                        </div>

                        <div class="col-md-12">
                            <input type="submit" name="auth" class="btn btn-success srh btn_grid sub" value="Sign In">
                        </div>


                        </div>
                        </div>
                    </form>


                    <form action="" id="form-2" style="display: none;">
                        <div class="input">
                        <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control input_select " placeholder="Votre Nom">
                        </div>

                        <div class="col-md-6">
                            <input type="text" class="form-control input_select " placeholder="Votre Prenom">
                        </div>
                        <div class="col-md-12">
                        <label style="align:left !important">
                            <strong class="">date de Naissance</strong>
                        </label>
                            <input type="date" class="form-control input_select " placeholder="Date de Naissance">
                        </div>



                                        <div class="col-md-12">
                             <strong class="">Gender :</strong>
                         </div>
                        <div class="col-md-12 ">
                            <div class="form-group text-center">




                                    <!-- Group of material radios - option 1 -->



                    <div class="btn-group btn-group-toggle btn-rad" data-toggle="buttons" align="center">
                        <div class="raddiv">
                            <label class="btn btn-danger rad">
                            <input type="radio" name="jb-radio" id="jb-radio-1"> Male
                        </label>
                        <label class="btn btn-danger rad">
                            <input type="radio" name="jb-radio" id="jb-radio-2"> Female
                        </label>
                        </div>

                    </div>





        </div>
                        </div>


                        <div class="col-md-12">
                            <select name="ville" id=""  class="form-control input_select ">
                                <option value="Ville" disabled selected>Ville</option>
                                <?php
                    $sql = "select * from villes";

                    $result = mysqli_query($link,$sql);
                    while($row=mysqli_fetch_assoc($result)){
                        echo '<option value="">'.$row['nom_vil'].'</option>';
                    }
                    ?>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <select name="metier" id=""  class="form-control input_select ">
                                <option value="metier" disabled selected>metier</option>
                                <?php
                    $sql2 = "select * from meties";

                    $result2 = mysqli_query($link,$sql2);
                    while($row2=mysqli_fetch_assoc($result2)){
                        echo '<option value="">'.$row2['nom_met'].'</option>';
                    }
                    ?>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control input_select " placeholder="Email">
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control input_select " placeholder="Phone Number">
                        </div>




                        <div class="col-md-6">
                            <input type="text" class="form-control input_select " placeholder="Password">
                        </div>

                        <div class="col-md-6">
                            <input type="text" class="form-control input_select " placeholder="Rpeat Password">
                        </div>
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-success srh btn_grid sub" value="Sign up">
                        </div>


                        </div>
                        </div>
                </form>


                </div>
            </div>
        </div>
    </div>



    <?php include "includes/footer.php"; ?>



<script type="text/javascript" src="js/jquery.js"></script>
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
