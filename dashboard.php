<?php
include 'showDB.php';

$sql1 = mysqli_query ($conn,"SELECT * FROM elev;");
$result1 = mysqli_num_rows($sql1);

$sql2 = mysqli_query ($conn,"SELECT * FROM profesor;");
$result2 = mysqli_num_rows($sql2);

$sql3 = mysqli_query ($conn,"SELECT * FROM clasa;");
$result3 = mysqli_num_rows($sql3);

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>School Management</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
   <link href="css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<style>
   th, td {
  border: transparent;
  padding: 15px;
}



			html {
				font-family: Tahoma, Geneva, sans-serif;
				padding: 20px;
				background-color: #F8F9F9;
			}

                                
        .elevi, .profesori, .clase{
            width: 290px;
            height: 200px;
            background-color: white;
            padding-top: 10px;
            box-shadow: 2px 2px 3px 3px gray;
        }
        
        .numberpeople{
            margin-left: auto;
            margin-right: auto;
        }



</style>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="dashboard.php">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="plugins/images/logo-icon.png" alt="homepage" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="plugins/images/logo-text.png" alt="homepage" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!--  
                        <li class=" in">
                            <form role="search" class="app-search d-none d-md-block me-3">
                                <input type="text" placeholder="Search..." class="form-control mt-0">
                                <a href="" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>
                        -->
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!--  
                        <li>
                            <a class="profile-pic" href="#">
                                <img src="plugins/images/users/varun.jpg" alt="user-img" width="36"
                                    class="img-circle"><span class="text-white font-medium">Steave</span></a>
                        </li>
                        -->
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="home.php"
                                aria-expanded="false">
                                
                                <span class="hide-menu" style="margin-left: 20px;  font-size: 14px;">Elevi</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="profesori.php"
                                aria-expanded="false">
                                
                                <span class="hide-menu" style="margin-left: 20px;  font-size: 14px;">Profesori</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="clase.php"
                                aria-expanded="false">
                                
                                <span class="hide-menu" style="margin-left: 20px;  font-size: 14px;">Clase</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="elevi_premiati.php"
                                aria-expanded="false">
                                
                                <span class="hide-menu" style="margin-left: 20px;  font-size: 14px;">Elevi cu rezultate excelente</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                                                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="logout.php"
                                aria-expanded="false">
                                
                                <span class="hide-menu" style="margin-left: 20px;  font-size: 14px;">Logout</span>
                            </a>
                        </li>

                    </ul>
                    

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4>

                    </div>


                </div>
                <!-- /.col-lg-12 -->
                
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">

                            <div class="table-responsive">
                                        <table cellpadding="30" class="numberpeople">

                <tr>
                    <td>
                        <div class="elevi">
                            <h5 style="text-align: center; margin-top: 0; padding-top:10px;color: gray;font-size: 20px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Elevi</h5>
                            <h5 style="text-align: center; margin-top: 0; padding-top:10px;color: gray;font-size: 20px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><?php echo $result1; ?></h5>
                            <h5 style="text-align: center; margin-top: 0; padding-top:10px;color: gray;font-size: 20px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Numarul total de elevi</h5>
                            
                        </div>
                     </td>
                    <td>
                        <div class="profesori">
                            <h5 style="text-align: center; margin-top: 0; padding-top:10px;color: gray;font-size: 20px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Profesori</h5>
                            <h5 style="text-align: center; margin-top: 0; padding-top:10px;color: gray;font-size: 20px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><?php echo $result2; ?></h5>
                            <h5 style="text-align: center; margin-top: 0; padding-top:10px;color: gray;font-size: 20px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Numarul total de profesori</h5>
                     </td>
                    <td>
                        <div class="clase">
                            <h5 style="text-align: center; margin-top: 0; padding-top:10px;color: gray;font-size: 20px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Clase</h5>
                            <h5 style="text-align: center; margin-top: 0; padding-top:10px;color: gray;font-size: 20px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><?php echo $result3; ?></h5>
                            <h5 style="text-align: center; margin-top: 0; padding-top:10px;color: gray;font-size: 20px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Numarul total de clase</h5>
                        </div>
                     </td>
                    
     
                </tr>
                <tr>
     
                </tr>
     
        
               </table>


			
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center"> 2021 © Ample Admin brought to you by <a
                    href="https://www.wrappixel.com/">wrappixel.com</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
</body>

</html>

