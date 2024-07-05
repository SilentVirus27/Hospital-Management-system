<?php
  include_once("include/connection.php");
  ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Hospital :: Home</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UAm-Copatible" content="IE=Edge">
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
        <link rel="stylesheet" href=" assets/vendor/sweetalert/sweetalert.css "/>
        <link rel="stylesheet" href=" assets/vendor/dropify/css/dropify.min.css ">

        <!-- MAIN CSS -->
        <link rel="stylesheet" href=" assets/css/main.css ">
        <link rel="stylesheet" href=" assets/css/chatapp.css ">
        <link rel="stylesheet" href=" assets/css/color_skins.css ">
         <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            -->
    </head>
<body class="theme-cyan" background=" assets/images/bg.jpg " >
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
                    <div class="navbar-brand">
                        <a href=""><img src=" assets/images/logo.png " alt="Lucid Logo" class="img-responsive logo" ></a>
                    </div>
                    <div class="navbar-right">
                        <div id="navbar-menu">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="home-about-us.php" class="icon-menu active" aria-current="page"><i class=" icon-emoticon-smile">&nbsp;About US</i></a>
                                </li>
                                <li>
                                    <a href="home-contact-us.php" class="icon-menu"><i class=" icon-bubbles">&nbsp;Contact Us</i></a>
                                </li>
                                <li>
                                    <a href="home-doctors.php" class="icon-menu"><i class=" icon-plus">&nbsp;Doctor</i></a>
                                </li>
                                <li>
                                    <a href="home-services.php" class="icon-menu"><i class=" icon-notebook">&nbsp;Service</i></a>
                                </li>
                                <li>
                                    <a href="home-reportemer.php" class="icon-menu"><i class="  icon-call-in">&nbsp;Ambulance</i></a>
                                </li>
                                <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                </li>
                                <li>
                                    <a href="home-signin.php" class="icon-menu"><i class=" icon-lock-open">&nbsp;SignIn</i></a>
                                </li>
                                <li>
                                    <a href="home-signup.php" class="icon-menu"><i class="icon-cloud-upload">&nbsp;SignUp</i></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </nav>
        <!--main content-->
        <<div id="main-content " class="profilepage_1 " >
            <!--<div class="container-fluid">-->
            <!--containt-->
            