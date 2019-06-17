<?php  include('includes/artisan.php')?>
<?php include('includes/delete-pro.php')?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta content="text/html" charset="windows-1252" http-equiv="Content-Type">

    <title>Mou9ef - Responsive Flat Admin Dashboard</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="assets/images/faviicon.png">
<link rel="stylesheet" href="../css/pop-up.css">
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="assets/plugins/morris/morris.css">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    
     
    
    
    <style>
        .edi,.del{
            
            height: 20px;
            width: 80px;
            margin: 2px;
            line-height: 15px;
        }
        .edi:hover,.del:hover{
            
            box-shadow: inset 0px 2px 5px rgba(57, 57, 57, 0.55);
        }
        .card-sec{
            height: auto;
        }
    
        *{
            z-index: 5000 !important;
        }
        .showit{
            display: block !important;
            visibility: visible !important;
        }
        .pop-left img{
            border-radius: 100%; 
            width: 90px;
            height: 90px;
        }

    </style>
</head>

<body class="fixed-left">


   
    <!-- Begin page -->
    <div id="wrapper">

        <!-- ========== Left Sidebar Start ========== -->
        <?php $index="active";$profile="";$add=""; include("includes/leftBar.php")?>
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
                        
                            <div class=" col-md-12 col-xl-12">
                                <div class="mini-stat clearfix bg-white row">
                                    <div class="form-group col-12 offset-1">
                                            <form action="includes/upload.php" method="post" enctype="multipart/form-data">   
                                                <label for="example-email-input" class="col-sm-2 col-form-label">Votre image</label>
                                                <div class="row">
                                                <div class="col-8">
                                                    <input class="form-control" name="avatar" type="file" id="example-email-input" required>
                                                </div>
                                                <div class="col-2">
                                                    <input type="submit" name="addavatar" class="btn badge-danger " value="Envoyer">
                                                </div>
                                                </div>
                                              </form>  
                                            </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-12">
                                <div class="card card-sec m-b-30">
                                    <div class="card-body">
                                        <h4 class="mt-0 m-b-15 header-title">Your Projects</h4>

                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                    <tr class="titles">
                                                        <th>Nom de projet</th>
                                                        <th>Description</th>
                                                        
                                                        <th>Date</th>
                                                        <th>Actions</th>
                                                        
                                                    </tr>

                                                </thead>
                                                <tbody>
                                                   <?php
                                                    $projet=mysqli_query($link,"select * from portfolio p,artisan a where  a.id_art=p.id_art and p.id_art=$id_art")or header("../error/404.php");
                                                    //$idp="";
                                                    while($pro=mysqli_fetch_array($projet)){
                                                        $idp=$pro['id_por'];
                                                    ?>
                                                    <tr>
                                                       
                                                        <td class="c-table__cell">
                                                            <div class="user-wrapper">
                                                                <div class="img-user">
                                                                    <?php
																	$img_url="https://www.mediafire.com/convkey/2a1f/fna0wbrruxqgsbrzg.jpg";
																	if($pro['image']!=$img_url){
																		
																	echo "
																	
																	<img style='width:70px;height:70px;border-radius:5px;' src='../uploads/projet/pro-{$pro['id_por']}/img/{$pro['image']}' alt='{$pro['nom_projet']}' class=''>
																	
																	";
																	
																	}else{
																		
																	echo "
																	
																	<img style='width:70px;height:70px;border-radius:5px;' src='{$img_url}' alt='{$pro['nom_projet']}' class=''>
																	
																	";
																	
																	}
																	?>
                                                                   
                                                                </div>
                                                                <div class="text-user">
                                                                    <h6><?=$pro['nom_projet'] ?></h6>
                                                                    <p><?=$art['nom_met'] ?></p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="c-table__cell"><?=mb_strimwidth($pro['description_projet'],0,40) ?>...</td>
                                                        
                                                        
                                                        <td class="c-table__cell"><?=$pro['date_projet'] ?></td>
                                                        
                                                        <td class="c-table__cell ">
                                                        <a href="index.php?id_por_del=<?=$pro['id_por'] ?>"><span class="badge badge-danger del">&lt;--delete--&gt;</span></a>
                                                        <br>
                                                      
                                                        <a  href="add-projet.php?id_por=<?=$pro['id_por']?>&&id_art=<?=$id_art?>" id="confirmation"><span class="badge badge-warning edi">&lt;--&nbsp;&nbsp;edit&nbsp;&nbsp;--&gt;</span>
                                                        </a>
                                                        <br>
                                                        <span style="cursor:pointer;" onClick='return popup(<?=$idp?>)' class="badge badge-info edi" >&lt;--&nbsp;view&nbsp;--&gt;</span>
                                                        
                                                        
                                                        </td>
                                                        
                                                        
                                                    </tr>
                                                    
                                                   <?php }?>
                                                    
                                           

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                            <div class="col-xl-12">
                                <div class="card card-sec m-b-30">
                                    <div class="card-body">
                                        <h4 class="mt-0 m-b-15 header-title">Recent Projets</h4>

                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                    <tr class="titles">
                                                        <th>Nom de projet</th>
                                                        <th>Description</th>
                                                        
                                                        <th>Date</th>
                                                        <th>Actions</th>
                                                        
                                                    </tr>

                                                </thead>
                                                <tbody>
                                                   <?php
                                                    $projet2=mysqli_query($link,"select * from portfolio p,artisan a where  a.id_art=p.id_art and p.id_art!=$id_art")or header("../error/404.php");
                                                    //and metier=$pro['metier]
                                                    while($pro2=mysqli_fetch_array($projet2)){
                                                        $idp2=$pro2['id_por'];
                                                    ?>
                                                    <tr>
                                                       
                                                        <td class="c-table__cell">
                                                            <div class="user-wrapper">
                                                                <div class="img-user">
                                                                    <img style="width:70px;height:70px;border-radius:5px;" src="../uploads/projet/pro-<?= $pro2['id_por']."/img/".$pro2['image'] ?>" alt="<?=$pro2['nom_projet'] ?>" class="">
                                                                </div>
                                                                <div class="text-user">
                                                                    <h6><?=$pro2['nom_projet'] ?></h6>
                                                                    <p><?=$art['nom_met'] ?></p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="c-table__cell"><?=mb_strimwidth($pro2['description_projet'],0,40) ?>...</td>
                                                        
                                                        
                                                        <td class="c-table__cell"><?=$pro2['date_projet'] ?></td>
                                                        
                                                        <td class="c-table__cell ">
                                                        
                                                        <span  style="cursor:pointer;" onClick='return popup(<?=$idp2?>)'><span class="badge badge-info edi">&lt;--&nbsp;view&nbsp;--&gt;</span>
                                                        </span>
                                                        </td>
                                                        
                                                        
                                                    </tr>
                                                    
                                                   <?php }?>
                                                    
                                            

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                           
                           <!--
                            <div class="col-xl-4">
                                <div class="card card-sec m-b-30">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">XXXXXX XXXXXX</h4>

                                        <ul class="list-inline widget-chart m-t-20 text-center">
                                            <li>
                                                <h4 class=""><b>3654</b></h4>
                                                <p class="text-muted m-b-0">Marketplace</p>
                                            </li>
                                            
                                            
                                        </ul>

                                        <div id="morris-donut-example" style="height: 265px"></div>
                                    </div>
                                </div>
                            </div>
                            -->
                        </div>
                        <!-- end row -->

                    </div>
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

   <div id="popit212">
    
   </div>
   
   
    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
     
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/app.js"></script>

    
    <script type="text/javascript">
    
function popup(current){
     var a = $('#popit212').load('includes/pop.php','idp='+current);

     $('#pop-it').addClass("showit");
            
    
  }

 

</script>
   

</body>

</html>