<?php  include('includes/artisan.php')?>
<?php  include('includes/edit-pro.php')?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Mou9ef - Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- <link rel="shortcut icon" href="assets/images/faviicon.png"> -->
        <!-- Dropzone css -->
        <link href="assets/plugins/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"> 
           <style>  
           .file_drag_area  
           {  
                width:600px;  
                height:400px;  
                border:2px dashed #ccc;  
                line-height:400px;  
                text-align:center;  
                font-size:24px;  
           }  
           .file_drag_over{  
                color:#000;  
                border-color:#000;  
           } 
			   
			   
			   #dropZone {
				border: 3px dashed #0088cc;
				padding: 50px;
				width: 500px;
				margin-top: 20px;
			}

			#files {
				border: 1px dotted #0088cc;
				padding: 20px;
				width: 200px;
				display: none;
			}

            #error {
                color: red;
            }
			   
			   
			   .sel_img{
				   width: 100%;
				   height: 220px; 
				   overflow: hidden; 
				   
				   background-position: center; /* Center the image */
 					background-repeat: no-repeat; /* Do not repeat the image */
  					background-size: cover; 
				   padding: 2px;
			   }
			   .sel_del input{
				   position: absolute ;
				   top: 5px;
				   left: 5px;
				   transform: scale(1.5);
			   }
			   .selected_del{
				  
				   border: 2px solid black;
			   }
           </style>  

    </head>


    <body class="fixed-left">

        <!-- Loader -->
       

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
			<?php  $index="";$profile="";$add="active";  include('includes/leftBar.php')?>
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
                                        
                                        
													<form action="includes/upload.php" method="post" enctype="multipart/form-data" method="post">
                                           
                                           
                                            <h4 class="mt-0 header-title">Add New Project</h4>
                                            <p class="text-muted m-b-30 font-14"> 
                                            </p>

                                           
                          					
                          						
                          						<div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">le nom de projet</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" type="text" name="nom_projet" value="<?= $nom_projet?>" placeholder="entrer le nom de votre projet" id="example-text-input" >
                                                </div>
                                            </div> 
                                            <!--
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Ville</label>
                                                <div class="col-sm-8">
                                                    <select name="" class="form-control">
                                                        <option disabled>Select</option>
                                                        <option value="">Large select</option>
                                                        <option value="">Small select</option>
                                                    </select>
                                                </div>
                                            </div>
                                            -->
                                            <div class="form-group row">
                                                <label for="example-date-input" class="col-sm-2 col-form-label">Date</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" name="date_projet" type="date" value="<?= $date_projet ?>" id="example-date-input">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label for="Description" class="col-sm-2 col-form-label">Description</label>
                                                <div class="col-sm-8 ">
                                                    <textarea class="form-control" style="align-content:left ;" type="text" name="description_projet" id="Description"><?= $description_projet ?></textarea>
                                                </div>
                                            </div> 
                                             
                                             
                          						 
                          				      
                          						 
                          				              
        <?php
													if($answer==true){
															
														$i=1;
														echo '
														
														<div class="form-group row text-center">
                                                <label class="col-sm-12 col-form-label">Selection une ou plusieurs images pour la/les supprimees</label>
                                               
                                            </div> 
														
														<div class="form-group ">
                                           	<div class="row">
														';
													while($imgs=mysqli_fetch_array($images)){
														
													
														
												
														if( $imgs['img'] == $pro['image'] ){
															
														
														?>                                  
                                          
                                          
                                           	
                                           	<div class="col-4 sel_del p-0">
                                           		<label for="idpp-<?=$imgs['id']?>" class="sld">
                                           			 <img src="../uploads/projet/pro-<?=$id_por?>/img/<?=$imgs['img'] ?>" class="sel_img" alt="">
                                           		</label>
                                           		<input type="checkbox" id="idpp-<?=$imgs['id'] ?>" name="del-img[ip]" value="<?=$imgs['id']?>">
                                           		
                                           	</div>
                                           	
                                           
                                           	
                                           	
											  
                                          
                               <?php
															}else{
															
															?>
															
															
                                           	<div class="col-4 sel_del p-0">
                                           		<label for="idpp-<?=$imgs['id']?>" class="sld">
                                           			 <img src="../uploads/projet/pro-<?=$id_por?>/img/<?=$imgs['img'] ?>" class="sel_img" alt="">
                                           		</label>
                                           		<input type="checkbox" id="idpp-<?=$imgs['id'] ?>" value="<?=$imgs['id']?>" name="del-img[]">
                                           		
                                           	</div>
															
															<?php
															
															
														}
															
															
															
													$i++;		
														}//while
														
													echo "</div></div><input type='hidden' name='img_nbr' value='$i'><input type='hidden' name='id_por' value='$id_por'>";	
														
															}//if
														
														?>            
                                           
                                           
                                              
                                           
                                           
                                           
                                            <div class="m-b-30">
                                                
 

           
  

           <br />   
           
           <h1 align="center">Drag & Drop Images...</h1>         
           <div class="container" align="center">  
                <label id="dropZone" for="fileupload">
				
				<input type="file" id="fileupload" name="myup[]" multiple>
			</label>
           </div>  
           
           
           <br />  
        
        
        
  
    
                                        </div>
											
                                           <?php  if($answer==true){ ?>
                                            <div class="text-center m-t-15">
                                                <input type="submit" name="mod-pro" class="btn btn-warning waves-effect waves-light" value="Publish">
                                            </div>
                                            <?php }else{ ?>
                                            <div class="text-center m-t-15">
                                                <input type="submit" name="add-pro" class="btn btn-primary waves-effect waves-light" value="Publish">
                                            </div>
                                            <?php }?>
                                            
							</form>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                        </div><!-- container -->


                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

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
        
     <script>
		
		 
		  $( ".sel_img" ).on({
            click: function() {
                $( this ).toggleClass( "selected_del" );
            }
        });
		 
		</script>
    </body>
</html>