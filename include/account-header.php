<?php
    include_once("include/connection.php");

    session_start();

    if(!isset($_SESSION['email'])){header('location: home-about-us.php');}
    else $Email=$_SESSION['email'];

    $currentPage= $_SERVER['SCRIPT_NAME']; 
    $currentPage = substr($currentPage, 1);

    $allpr= mysqli_query($conn,"SELECT count(*) as totalp FROM hospital.patient;");
    $allprow=mysqli_fetch_assoc($allpr);

    $newp= mysqli_query($conn,"SELECT count(*) as newp FROM hospital.patient where date(date)=curdate();");
    $newprow=mysqli_fetch_assoc($newp);

    $admitp= mysqli_query($conn,"SELECT count(*) as totaladmit FROM hospital.admitpatients;");
    $admitprow=mysqli_fetch_assoc($admitp);

    $disp= mysqli_query($conn,"SELECT count(*) as totaldis FROM hospital.patientdischarge;");
    $disprow=mysqli_fetch_assoc($disp);

    $fedp= mysqli_query($conn,"SELECT count(*) as totalfed FROM hospital.feedback;");
    $fedprow=mysqli_fetch_assoc($fedp);

    $revenue= mysqli_query($conn,"SELECT * FROM hospital.billsum;");
    $revenuerow=mysqli_fetch_assoc($revenue);


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Hospital :: Account</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link rel="icon" href=" favicon.ico " type="image/x-icon">
        <!-- VENDOR CSS -->
        <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css ">
        <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css ">
        <link rel="stylesheet" href="assets/vendor/chartist/css/chartist.min.css ">
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
        <link rel="stylesheet" href="../assets/vendor/nouislider/nouislider.min.css" />

        
    </head>
<body class="theme-cyan" background=" assets/images/image-gallery/back.jpg  ">
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
                                <!-- <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                        <i class="icon-bell"></i>
                                        <span class="notification-dot"></span>
                                    </a>
                                    <ul class="dropdown-menu notifications">
                                        <li class="header"><strong>You have 4 new Notifications</strong></li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <i class="icon-info text-warning"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text">Campaign <strong>Holiday Sale</strong> is nearly reach budget limit.</p>
                                                        <span class="timestamp">10:00 AM Today</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <i class="icon-like text-success"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text">Your New Campaign <strong>Holiday Sale</strong> is approved.</p>
                                                        <span class="timestamp">11:30 AM Today</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                         <li>
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <i class="icon-pie-chart text-info"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text">Website visits from Twitter is 27% higher than last week.</p>
                                                        <span class="timestamp">04:00 PM Today</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <i class="icon-info text-danger"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text">Error on website analytics configurations</p>
                                                        <span class="timestamp">Yesterday</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    
                                        <li class="footer"><a href="javascript:void(0);" class="more">See all notifications</a></li>
                                        
                                    </ul>
                                </li> -->
                                <!-- navbar settings  -->
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown"><i class="icon-settings"></i></a>
                                    <ul class="dropdown-menu user-menu menu-icon">
                                        <li class="menu-heading">ACCOUNT SETTINGS</li>
                                        <!--<li><a href="{% url 'labprofileup "><i class="icon-note"></i> <span>Profile Update</span></a></li>-->
                                        <li><a href="acc-profile.php"><i class="icon-user-following"></i> <span>My Profile</span></a></li>
                                        <!--<li><a href="javascript:void(0);"><i class="icon-equalizer"></i> <span>Preferences</span></a></li>-->
                                        <li><a href="acc-profile.php"><i class="icon-lock"></i> <span>Security</span></a></li>
                                       <!-- <li class="menu-heading">BILLING</li>
                                        <li><a href="{% url 'patient-payment "><i class="icon-credit-card"></i> <span>Update Test Fees</span></a></li>-->
                                    </ul>
                                </li>
                                <!-- navbar Logout  -->
                                <li>
                                    <a href="home-logout.php" class="icon-menu" ><i class="icon-login"></i></a>
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
                        <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Mr.<?php echo $row['name']; ?></strong></a>
                        <ul class="dropdown-menu dropdown-menu-right account">
                            <li><a href="acc-profile"><i class="icon-user"></i>My Profile</a></li>
                           <!-- <li><a href="{% url 'labprofileup "><i class="icon-note"></i> <span>Update</span></a></li>-->
                            <li><a href="acc-profile"><i class="icon-key"></i>Security</a></li>
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
                                <li><a href="acc-home.php"><i class=" icon-home"></i>Dashboard</a></li>
                                <li><a href="acc-all-summary.php"><i class=" icon-layers"></i>Account Summary</a></li>
                                <li><a href="acc-paymentinvoice.php"><i class=" icon-book-open"></i>Patient Invoice</a></li>
                                <li><a href="acc-chat.php"><i class="icon-bubbles"></i>Chat App</a></li>
                                <li><a href="acc-feedback.php"><i class="icon-calculator"></i>Feedback</a></li>
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
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Account Section</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb"><a href="acc-home.php"><i class="icon-home"></i></a></li>
                            &nbsp;&nbsp;
                            <li class="breadcrumb-item active"><?php echo $currentPage;?></li>
                        </ul>
                    </div>
                    <!-- <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                        <div class="bh_chart hidden-xs">
                            <div class="float-left m-r-15">
                                <small>All Patient</small>
                                <h6 class="mb-0 mt-1"><i class="icon-user"></i>5151</h6>
                            </div>
                            <span class="bh_visitors float-right">40,12,30,42,61,12,35,31</span>
                        </div>
                        
                    </div> -->
                </div>
                </div>

