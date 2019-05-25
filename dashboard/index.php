<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Agency - Responsive Flat Admin Dashboard</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="assets/images/faviicon.png">

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
	
	</style>
</head>

<body class="fixed-left">


   
    <!-- Begin page -->
    <div id="wrapper">

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                <i class="ion-close"></i>
            </button>

            <!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center">
                    <!--<a href="index.php" class="logo">Admiry</a>-->
                    <a href="index.php" class="logo"><img src="../img/logo-white.png" height="33" alt="logo"></a>
                </div>
            </div>

            <div class="sidebar-inner slimscrollleft">

                <div class="user-details">
                    <div class="text-center">
                        <img src="https://portfolium1.cloudimg.io/s/crop/192x192/https://cdn.portfolium.com/ugcs3%2Fv3%2Favatar%2F1bGBKLrCTxurWmsdtpnH_2187603197957344.jpg" alt="" class="rounded-circle">
                    </div>
                    <div class="user-info">
                            <h4 class="font-16 text-white">Mohammed Ali</h4>
                            <span class="text-white"><i class="fa fa-dot-circle-o text-success"></i> Online</span>
                    </div>
                </div>

            <div id="sidebar-menu">
                <ul>
                        <li class="menu-title text-white">General</li>

                        <li>
                            <a href="index.php" class="waves-effect active">
                                <i class="fa fa-tachometer"></i>
                                <span> Dashboard <span class="badge badge-primary pull-right">3</span></span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="profile.php" class="non-active" style="background-color: red">
                                <i class="fa fa-user-circle-o"></i>
                                <span> Profile <span class="badge badge-primary pull-right">4</span></span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="add-projet.php" class="non-active">
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
        <!-- Left Sidebar End -->

        <!-- Start right Content here -->

        <div class="content-page">
            <!-- Start content -->
            <div class="content">

                <!-- Top Bar Start -->
                <div class="topbar">

                    <nav class="navbar-custom">

                        <ul class="list-inline float-right mb-0">
                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="mdi mdi-email-outline noti-icon fa fa-comment-o"></i>
                                    <span class="badge badge-danger noti-icon-badge">5</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5><span class="badge badge-danger float-right">745</span>Messages</h5>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon"><img src="assets/images/users/user-5.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                        <p class="notify-details"><b>Charles M. Jones</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon"><img src="assets/images/users/avatar-3.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                        <p class="notify-details"><b>Thomas J. Mimms</b><small class="text-muted">You have 87 unread messages</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon"><img src="assets/images/users/avatar-4.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                        <p class="notify-details"><b>Luis M. Konrad</b><small class="text-muted">It is a long established fact that a reader will</small></p>
                                    </a>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            View All
                                        </a>

                                </div>
                            </li>

                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="mdi mdi-bell-outline noti-icon fa fa-bell-o "></i>
                                    <span class="badge badge-success noti-icon-badge">3</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5><span class="badge badge-danger float-right">87</span>Notification</h5>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                        <p class="notify-details"><b>Your order is placed</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-success"><i class="mdi mdi-message"></i></div>
                                        <p class="notify-details"><b>New Message received</b><small class="text-muted">You have 87 unread messages</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-warning"><i class="mdi mdi-martini"></i></div>
                                        <p class="notify-details"><b>Your item is shipped</b><small class="text-muted">It is a long established fact that a reader will</small></p>
                                    </a>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            View All
                                        </a>

                                </div>
                            </li>

                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="assets/images/users/user-5.jpg" alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted fa fa-user-o"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><span class="badge badge-success pull-right">5</span><i class="mdi mdi-settings m-r-5 text-muted fa fa-gear"></i> Settings</a>
                                    
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-logout m-r-5 text-muted fa fa-sign-out	
"></i> Logout</a>
                                </div>
                            </li>

                        </ul>

                        <ul class="list-inline menu-left mb-0">
                            <li class="list-inline-item">
                                <button type="button" class="button-menu-mobile open-left waves-effect">
                                    <i class="ion-navicon"></i>
                                </button>
                            </li>
                            <li class="hide-phone list-inline-item app-search">
                                <h3 class="page-title">Dashboard</h3>
                            </li>
                        </ul>

                        <div class="clearfix"></div>

                    </nav>

                </div>
                <!-- Top Bar End -->

                <div class="page-content-wrapper ">

                    <div class="container-fluid">

                       

                        <div class="row">

                            <div class="col-xl-12">
                                <div class="card card-sec m-b-30">
                                    <div class="card-body">
                                        <h4 class="mt-0 m-b-15 header-title">Your Projects</h4>

                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                    <tr class="titles">
                                                        <th>Artisan Name</th>
                                                        <th>Company</th>
                                                        
                                                        <th>Publish date</th>
                                                        <th>Manipulate</th>
                                                        
                                                    </tr>

                                                </thead>
                                                <tbody>
                                                    <tr>
                                                       
                                                        <td class="c-table__cell">
                                                            <div class="user-wrapper">
                                                                <div class="img-user">
                                                                    <img src="assets/images/users/user-1.jpg" alt="user" class="">
                                                                </div>
                                                                <div class="text-user">
                                                                    <h6>Tiger Nixon</h6>
                                                                    <p>Web Designer</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="c-table__cell">Dribble</td>
                                                        
                                                        
                                                        <td class="c-table__cell">2011/04/25</td>
                                                        <td class="c-table__cell "><a href=""><span class="badge badge-danger del">&lt;--Delete--&gt;</span></a><br><a href=""><span class="badge badge-warning edi">&lt;--&nbsp;&nbsp;edit&nbsp;&nbsp;--&gt;</span></a><br><a href=""><span class="badge badge-info edi">&lt;--&nbsp;view&nbsp;--&gt;</span></a></td>
                                                        
                                                        
                                                    </tr>
                                                    
                                                   
                                                    
                                            

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                           
                           
                            <div class="col-xl-12">
                                <div class="card card-sec m-b-30">
                                    <div class="card-body">
                                        <h4 class="mt-0 m-b-15 header-title">Recent Projects</h4>

                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                    <tr class="titles">
                                                        <th>Artisan Name</th>
                                                        <th>Company</th>
                                                        
                                                        <th>Publish date</th>
                                                        <th>view</th>
                                                        
                                                    </tr>

                                                </thead>
                                                <tbody>
                                                    <tr>
                                                       
                                                        <td class="c-table__cell">
                                                            <div class="user-wrapper">
                                                                <div class="img-user">
                                                                    <img src="assets/images/users/user-1.jpg" alt="user" class="rounded-circle">
                                                                </div>
                                                                <div class="text-user">
                                                                    <h6>Tiger Nixon</h6>
                                                                    <p>Web Designer</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="c-table__cell">Dribble</td>
                                                        
                                                        
                                                        <td class="c-table__cell">2011/04/25</td>
                                                        <td class="c-table__cell "><a href=""><span class="badge badge-info edi">&lt;--&nbsp;view&nbsp;--&gt;</span></a></td>
                                                        
                                                        
                                                    </tr>
                                                    
                                                    
                                                    
                                            

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

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

    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/app.js"></script>
  

   

</body>

</html>