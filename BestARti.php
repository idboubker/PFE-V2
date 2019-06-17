<?php

include "connexion.php";
mysqli_set_charset($link, "utf8");


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
    <?php include_once("includes/loading.html"); ?>

    <?php include "includes/header.php"; ?>
    <div id="all-all">
        <div class="container-fluid in-search" style="box-shadow: 0 30px 22px -22px rgba(0, 0, 0, 0.8) inset !important;">
            <div class="container text-center">
                <div class="row">
                    <div class="sh text-center">
                        <div class="search">
                            <div class="lg-index"><img src="img/lg-index.svg" alt=""></div>
                            <form action="result.php" method="GET">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 p-2">
                                        <select name="ville" id="sel-vil" class="form-control chev">

                                            <?php
                                            $sql2 = "select * from villes";

                                            $result2 = mysqli_query($link, $sql2);
                                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                                echo '<option value="' . $row2['id_vil'] . '">' . $row2['nom_vil'] . '</option>';
                                            }
                                            ?>



                                        </select>
                                    </div>

                                    <div class="col-md-4 col-sm-6  p-2">
                                        <select name="metier" id="sel-job" class="form-control chev">


                                            <?php
                                            $sql2 = "select * from meties";

                                            $result2 = mysqli_query($link, $sql2);
                                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                                echo '<option value="' . $row2['id_met'] . '">' . $row2['nom_met'] . '</option>';
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
        <div class="container ">

            

            <div class="seprate"></div>
            <div class="b-art">
                <h3 class=" text-center">Meilleurs Artisans</h3>
                <div class="seprate"></div>

                <div class="row">


<?php
$reslBest = mysqli_query($link,"select * from artisan a, artisan_details d where a.id_art = d.id_art order by a.nom_art");






while($BestAtisans = mysqli_fetch_assoc($reslBest) ){
        
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


                </div>



            </div>
            <!--b-art best artisan-->


            
            <div class="seprate"></div>


            <br><br>
        </div>



        




    </div>

    <?php include "includes/footer.php"; ?>





    <script src="js/jquery.js"></script>
    <script src="./js/load.js"></script>
    <script>
        function faqControl() {
            $(".answer").hide();
            $(".question").on("click", function() {
                $(this).next().slideToggle();
            });
        }
        $(document).ready(function() {
            faqControl();
        });

        $(document).ready(function() {
            $('.nav-button').click(function() {
                $('body').toggleClass('nav-open');
            });
        });
    </script>
</body>

</html>