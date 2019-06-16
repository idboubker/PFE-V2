
        <div class="left side-menu">
            <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                <i class="ion-close"></i>
            </button>

            <!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center">
                    <!--<a href="index.php" class="logo">Admiry</a>-->
                    <a href="../index.php" class="logo"><img src="../img/logo-white.png" height="33" alt="logo"></a>
                </div>
            </div>

            <div class="sidebar-inner slimscrollleft">

             
               
                <div class="user-details">
                    <div class="text-center">
                        <img src="../uploads/artisan/art-<?= $art['id_art']."/img/".$art['photo']; ?>" alt="" class="rounded-circle">
                    </div>
                    <div class="user-info">
                            <h4 class="font-16 text-white"><?= $art['nom_art']." ".$art['prenom_art'] ?></h4>
                            <span class="text-white"><i class="fa fa-dot-circle-o text-success"></i> Online</span>
                    </div>
                </div>

           
           
           
            <div id="sidebar-menu">
                <ul>
                        <li class="menu-title text-white">General</li>
                       
                       
                        <li>
                            <a href="index.php" class="waves-effect <?php echo $index?"active":"non-active";?>">
                                <i class="fa fa-tachometer"></i>
                                <span> Dashboard <span class="badge badge-primary pull-right">3</span></span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="profile.php" class="non-active <?php echo $profile?"active":"non-active";?>" style="background-color: red">
                                <i class="fa fa-user-circle-o"></i>
                                <span> Profile <span class="badge badge-primary pull-right">4</span></span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="add-projet.php" class="non-active <?php echo $add?"active":"non-active";?>">
                                <i class="fa fa-id-card-o"></i>
                                <span> Add Projets <span class="badge badge-primary pull-right">10</span></span>
                            </a>
                        </li>

                        
                        
                            <!-- <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ti-spray"></i> <span> Icons </span> <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                          
                               
                               <ul class="list-unstyled">
                                <li><a href="icons-material.html">Material Design</a></li>
                                <li><a href="icons-ion.html">Ion Icons</a></li>
                                <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                                <li><a href="icons-themify.html">Themify Icons</a></li>
                                <li><a href="icons-dripicons.html">Dripicons</a></li>
                                <li><a href="icons-typicons.html">Typicons Icons</a></li>
                            </ul>
                            
                           
                        </li>
 -->
                       

                        

                       

                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- end sidebarinner -->
        </div>