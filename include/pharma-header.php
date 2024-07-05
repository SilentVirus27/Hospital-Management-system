<?php
    include_once("include/connection.php");

    session_start();

    if(!isset($_SESSION['email'])){header('location: home-about-us.php');}
    else 
        {
            $Email=$_SESSION['email'];
        }

    $currentPage= $_SERVER['SCRIPT_NAME'];
    $currentPage = substr($currentPage, 1);

    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Hospital :: Pharmacy</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link rel="icon" href=" favicon.ico " type="image/x-icon">
        <!-- VENDOR CSS -->
        <link rel="stylesheet" href=" assets/vendor/bootstrap/css/bootstrap.min.css ">
        <link rel="stylesheet" href=" assets/vendor/font-awesome/css/font-awesome.min.css ">
        <link rel="stylesheet" href=" assets/vendor/chartist/css/chartist.min.css ">
        <link rel="stylesheet" href=" assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css ">
        <link rel="stylesheet" href=" assets/vendor/toastr/toastr.min.css ">
        <link rel="stylesheet" href=" assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css ">
        <link rel="stylesheet" href=" assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css " />
        <link rel="stylesheet" href=" assets/vendor/multi-select/css/multi-select.css ">
        <link rel="stylesheet" href=" assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css ">
        <link rel="stylesheet" href=" assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css ">
        <link rel="stylesheet" href=" assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css ">
        <link rel="stylesheet" href=" assets/vendor/jquery-steps/jquery.steps.css ">
        <link rel="stylesheet" href=" assets/vendor/parsleyjs/css/parsley.css ">
        <!-- MAIN CSS -->
        <link rel="stylesheet" href=" assets/css/main.css ">
        <link rel="stylesheet" href=" assets/css/chatapp.css ">
        <link rel="stylesheet" href=" assets/css/color_skins.css ">
    </head>
<body class="theme-cyan" background=" assets/images/image-gallery/pharmacy.jpg ">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src=" assets/images/logo-icon.svg " width="48" height="48" alt="Lucid"></div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- Overlay For Sidebars -->
    <div id="wrapper">
        <!--navbar top-->
        <nav class="navbar navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-btn">
                        <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
                    </div>
                    <div class="navbar-brand">
                        <a href=""><img src=" assets/images/logo.png " alt="Lucid Logo" class="img-responsive logo" ></a>
                    </div>
                    <div class="navbar-right">
                        <div id="navbar-menu">
                            <ul class="nav navbar-nav">
                                <!-- navbar notification -->
                                
                                <!-- navbar settings  -->
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown"><i class="icon-settings"></i></a>
                                    <ul class="dropdown-menu user-menu menu-icon">
                                        <li class="menu-heading">ACCOUNT SETTINGS</li>
                                        
                                        <li><a href="pharma-profile.php"><i class="icon-user-following"></i> <span>My Profile</span></a></li>
                                        
                                        <li><a href="pharma-profile.php"><i class="icon-lock"></i> <span>Security</span></a></li>
                                       
                                    </ul>
                                </li>
                                <!-- navbar Logout  -->
                                <li>
                                    <a href="home-logout.php" class="icon-menu"><i class="icon-login"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        <!--sidebar-->
        <div id="left-sidebar" class="sidebar">
            <div class="sidebar-scroll">
                <div class="user-account">
                    <?php
                    $result = mysqli_query($conn,"SELECT * FROM hospital.hospitalstaff where email='$Email';");
                    if($result)
                    {
                    $row=mysqli_fetch_assoc($result);
                    echo"<img src='assets/images/sm/". $row['profilename'] ." ' class='rounded-circle user-photo' alt='User Profile Picture'>";
                    }
                    ?>
                    <div class="dropdown">
                        <span>Welcome,</span>
                        <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Mr. <?php echo $row['name']; ?></strong></a>
                        <ul class="dropdown-menu dropdown-menu-right account">
                            <li><a href="pharma-profile.php"><i class="icon-user"></i>My Profile</a></li>
                            <li><a href="pharma-profile.php"><i class="icon-key"></i>Security</a></li>
                            <li class="divider"></li>
                            <li><a href="home-logout.php"><i class="icon-power"></i>Logout</a></li>
                        </ul>
                    </div>
                    <hr>
                    <span><?php echo $row['education']; ?>&nbsp;&nbsp;<?php echo $row['specialisation']; ?></small>
                </div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu">Menu</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content p-l-0 p-r-0">
                    <div class="tab-pane active" id="menu">
                        <nav class="sidebar-nav">
                            <ul class="main-menu metismenu">
                                <li><a href="pharma-home.php"><i class=" icon-home"></i>Dashboard</a></li>
                                <li><a href="pharma-priscription.php"><i class=" icon-screen-tablet"></i>View Priscription</a></li>
                                <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-info"></i><span>Stock</span> </a>
                                    <ul>
                                        <li><a href="pharma-managestock.php ">Add/Delete Stock</a></li>
                                        <li><a href="pharma-allstock.php ">View All Stock</a></li>
                                    </ul>
                                </li>
                                <li><a href="pharma-chat.php "><i class="icon-bubbles"></i>Chat App</a></li>
                                <li><a href="pharma-feedback.php "><i class="icon-calculator"></i>Feedback</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--main content-->
        <div id="main-content" class="profilepage_2" >
            <div class="container-fluid">
                <div class="block-header">
                    <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Pharmacy Section</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb"><a href="pharma-home.php"><i class="icon-home"></i></a></li>
                            &nbsp;&nbsp;
                            <li class="breadcrumb-item active"><?php echo $currentPage;?></li>
                        </ul>
                    </div>
                </div>
                </div>
 
 