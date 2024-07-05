<?php
    include_once("include/connection.php");
    if(isset($_POST['Submit']))
    {
        if(isset($_POST['user']) && isset($_POST['email']) && isset($_POST['password']))
        {
            $User = $_POST["user"];
            $Email = $_POST["email"];
            $Password = $_POST["password"];

           /* $regex_email="/^[a-z0-9]+@[a-z0-9.]+\.[a-z]$/";
            if(preg_match($regex_email,$Email))
            {*/
                if($User=="Pa")
                {
                    $sql="SELECT * FROM hospital.patient where email='$Email' and password='$Password'";
                    $uaresult=mysqli_query($conn,$sql);
                    $data=mysqli_num_rows($uaresult);
                    if($data!=0)
                    {
                        session_start();
                        $row=mysqli_fetch_assoc($uaresult);
                        $_SESSION['id']=trim($row['pid']);  //patient id
                        $_SESSION['email']=$Email;
                        $_SESSION['name']=trim($row['name']);
                        $_SESSION['user']=$User;
                        header('location: patient-home.php');
                    }
                    else echo "<script>window.alert('Wrong Email Or Password');</script>";
                }else{
                    $sql="SELECT * FROM hospital.hospitalstaff where email='$Email' and password='$Password'";
                    $uaresult=mysqli_query($conn,$sql) or die("An Error Occur");
                    $data=mysqli_num_rows($uaresult);
                    if($data!=0)
                    {
                        session_start();
                        $row=mysqli_fetch_assoc($uaresult);
                        $_SESSION['id']=trim($row['hsid']);  //patient id
                        $_SESSION['email']=$Email;
                        $_SESSION['name']=trim($row['name']);
                        $_SESSION['user']=$User;

                        if($User=="Doc"){header('location: doctor-home.php');}
                        elseif($User=="Ad"){header('location: admin-dashboard.php');}
                        elseif($User=="Nu"){header('location: nurse-home.php');}
                        elseif($User=="La"){header('location: lab-home.php');}
                        elseif($User=="Ph"){header('location: pharma-home.php');}
                        elseif($User=="Ac"){header('location: acc-home.php');}
                        elseif($User=="Os"){header('location: os-home.php');} 
                    }
                    else echo "<script>window.alert('Wrong Email Or Password');</script>";
                }                   

            /*}else echo "<script>window.alert('Enter Email Properly');</script>";*/
        }else echo"<script>window.alert('Select User And Enter Email, Password Properly');</script>";   
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Hospital :: Home</title>
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
        <link rel="stylesheet" href=" assets/vendor/sweetalert/sweetalert.css "/>
        <!-- MAIN CSS -->
        <link rel="stylesheet" href=" assets/css/main.css ">
        <link rel="stylesheet" href=" assets/css/chatapp.css ">
        <link rel="stylesheet" href=" assets/css/color_skins.css ">
         <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            -->
    </head>
<body class="theme-cyan" >
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
        <!--<nav class="navbar navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-brand">
                        <a href=""><img src=" assets/images/logo.png " alt="Lucid Logo" class="img-responsive logo" ></a>
                    </div>
                    <div class="navbar-right">
                        <div id="navbar-menu">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="{% url 'hospital " class="icon-menu active" aria-current="page"><i class=" icon-emoticon-smile">&nbsp;About US</i></a>
                                </li>
                                <li>
                                    <a href="{% url 'hospital " class="icon-menu"><i class=" icon-bubbles">&nbsp;Contact Us</i></a>
                                </li>
                                <li>
                                    <a href="{% url 'alldoctor " class="icon-menu"><i class=" icon-plus">&nbsp;Doctor</i></a>
                                </li>
                                <li>
                                    <a href="{% url 'hospital " class="icon-menu"><i class=" icon-notebook">&nbsp;Service</i></a>
                                </li>
                                <li>
                                    <a href="{% url 'signin " class="icon-menu"><i class=" icon-lock-open">&nbsp;SignIn</i></a>
                                </li>
                                <li>
                                    <a href="{% url 'signup " class="icon-menu"><i class="icon-cloud-upload">&nbsp;SignUp</i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>-->
        <!--main content-->
        <!--<div id="main-content" class="profilepage_1">
            <div class="container-fluid">-->
            <!--containt-->
            <div class="vertical-align-wrap">
                    <div class="vertical-align-middle auth-main">
                        <div class="auth-box">
                            <div class="card">
                                <div class="header">
                                    <p class="lead">Login to your account</p>
                                </div>
                                <div class="body">
                                    <form class="form-auth-small" action="#" method="post">
                                        <div class="form-group">
                                            <label for="signin-email" class="control-label sr-only">Signin User</label>
                                                <select class="form-control show-tick" name="user">
                                                        <option value="" >- User -</option>
                                                        <option value="Pa">Patient</option>
                                                        <option value="Doc">Doctor</option>
                                                        <option value="Ad">Admin</option>
                                                        <option value="Nu">Nurse</option>
                                                        <option value="La">Laboritrist</option>
                                                        <option value="Ph">Pharmacy</option>
                                                        <option value="Ac">Accountant</option>
                                                        <option value="Os">Other Services</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="signin-email" class="control-label sr-only">Email</label>
                                            <input type="email" class="form-control" id="signin-email" value="user@domain.com" placeholder="Email" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="signin-password" class="control-label sr-only">Password</label>
                                            <input type="password" class="form-control" id="signin-password" value="thisisthepassword" placeholder="Password" name="password">
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="fancy-checkbox ">
                                                <input type="checkbox">
                                                <span>Remember me</span>
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block" name="Submit" >SIGN IN 
                                        </button>
                                        <button type="button" class="btn btn-primary btn btn-block " onclick="javascript:history.go(-1)">
                                            <i class="fa fa-arrow-left"></i> <span>Go Home</span>
                                        </button>
                                        <br>
                                        <span class="helper-text m-b-10"><i class="fa fa-lock"></i> Forgot password ? <a href="home-forgot-pass.php"> Click me</a>
                                        </span>
                                        <span class="helper-text m-b-10 ">Don't have an account ? <a href="home-signup.php">Register</a></span>
                                    </form>
                                </div>
                                        <!-- <div class="separator-linethrough"><span>OR</span></div>
                                        <button class="btn btn-signin-social"><i class="fa fa-facebook-official facebook-color"></i> Sign in with Facebook</button>
                                        <button class="btn btn-signin-social"><i class="fa fa-twitter twitter-color"></i> Sign in with Twitter</button> -->
                            </div>
                        </div>
                    </div>
            </div>
    </div><!--wrapper-->

    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src=" assets/bundles/libscripts.bundle.js "></script>
    <script src=" assets/bundles/vendorscripts.bundle.js "></script>
    <script src=" assets/bundles/chartist.bundle.js "></script>
    <script src=" assets/bundles/knob.bundle.js "></script> <!-- Jquery Knob-->
    <script src=" assets/bundles/flotscripts.bundle.js "></script> <!-- flot charts Plugin Js -->
    <script src=" assets/bundles/easypiechart.bundle.js "></script> <!-- easypiechart Plugin Js -->
    <script src=" assets/bundles/mainscripts.bundle.js "></script>
    <script src=" assets/bundles/datatablescripts.bundle.js "></script>
    <script src=" assets/vendor/toastr/toastr.js "></script>
    <script src=" assets/vendor/flot-charts/jquery.flot.selection.js "></script>
    <script src=" assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js "></script>
    <script src=" assets/vendor/nestable/jquery.nestable.js "></script> <!-- Jquery Nestable -->
    <script src=" assets/vendor/sweetalert/sweetalert.min.js "></script> <!-- SweetAlert Plugin Js -->
    <script src=" assets/js/index.js "></script>
    <script src=" assets/js/pages/ui/sortable-nestable.js "></script>
    <script src=" assets/js/pages/ui/dialogs.js "></script>
    <script src=" assets/js/pages/tables/jquery-datatable.js "></script>
    <script src=" assets/js/pages/forms/form-wizard.js "></script>
    <script src=" assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js "></script>
    <script src=" assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js "></script>
    <script src=" assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js "></script>
    <script src=" assets/vendor/jquery-datatable/buttons/buttons.html5.min.js "></script>
    <script src=" assets/vendor/jquery-datatable/buttons/buttons.print.min.js "></script>
    <script src=" assets/vendor/jquery-validation/jquery.validate.js "></script> <!-- Jquery Validation Plugin Css -->
    <script src=" assets/vendor/jquery-steps/jquery.steps.js "></script> <!-- JQuery Steps Plugin Js -->
    <script src=" assets/vendor/parsleyjs/js/parsley.min.js "></script>
   <script>
        $(document).ready(function () {
            $('.star').on('click', function () {
                $(this).toggleClass('star-checked');
            });

            $('.ckbox label').on('click', function () {
                $(this).parents('tr').toggleClass('selected');
            });

            $('.btn-filter').on('click', function () {
                var $target = $(this).data('target');
                if ($target != 'all') {
                    $('.table tr').css('display', 'none');
                    $('.table tr[data-status="' + $target + '"]').fadeIn('slow');
                } else {
                    $('.table tr').css('display', 'none').fadeIn('slow');
                }
            });
        });
    </script>
</body>
</html>

