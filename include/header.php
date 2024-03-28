<?php
include("backend/config.php");
if  (isset($_SESSION['stf_id']) && $_SESSION['stf_id'] !=""){
  
}else {
  echo "<script>window.location='login.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>FMS - Admin</title>
	<!-- <link rel="icon" sizes="50*50"  href="assests/img/FMS.png" type="image/ico" /> -->
  <!-- <link rel="icon" sizes="50*50" href="assests/img/images.png" type="image/ico" /> -->
    <!-- Bootstrap -->
    <link href="assests/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assests/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assests/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="assests/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="assests/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="assests/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="assests/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="assests/build/css/custom.min.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="assests/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    
    <link href="assests/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="assests/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="assests/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="assests/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="assests/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <link href="cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">
    
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<style>

.footer_fixed footer {
    position: fixed;
    left: 0px;
    bottom: 0px;
    width: 100%;
}

</style>
  </head>

  <body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view ">
            <div class="navbar nav_title" style="border: 0;">
              <a href="#" class="site_title"><i class="fa fa-paw"></i> <span>FMS</span></a>
            </div>

            <div class="clearfix"></div>

         
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
               
                <ul class="nav side-menu">
                  <li><a href="index.php"><i class="fa fa-home"></i> Home </a>  </li>

                 <li><a><i class="fa fa-money"></i> Fees Pay <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li ><a href="paid_add.php">Add Fees Pay  </a></li>
                      <li><a href="paid.php">Fees Paid List  </a></li>
                    </ul>
                  </li>
                
                  <li><a><i class="fa fa-edit"></i> Fees <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li ><a href="fees_add.php">Add Fees </a></li>
                      <li><a href="fees.php">Fees List  </a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-user"></i> Student <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li ><a href="student_add.php">Add Student </a></li>
                      <li><a href="student.php">Student List  </a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-user"></i> User <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li ><a href="user_add.php">Add User </a></li>
                      <li><a href="user.php">User List  </a></li>
                    </ul>
                  </li>
                 
                </ul>
              </div>
             

            </div>
            <!-- /sidebar menu -->

           
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo $_SESSION['img']; ?>" alt=""><?php echo $_SESSION['name']; ?>
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                   
                    <a class="dropdown-item"  href="backend/get_ajax.php?table=logout&des=1"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>

               
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
