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
       <!-- <nav class="navbar navbar-fixed-top">
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
                                    <a href="{% url 'hospital " class="icon-menu"><i class=" icon-plus">&nbsp;Doctor</i></a>
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
                                <div class="top">

                                </div>
                                <div class="card">
                                    <div class="header">
                                        <p class="lead">Recover my password</p>
                                    </div>
                                    <div class="body">
                                        <p>Please enter your email address below to receive instructions for resetting password.</p>
                                        <form class="form-auth-small" action="{% url 'forgetaction ">
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="signup-password" placeholder="email" name="email">
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-lg btn-block">RESET PASSWORD</button>
                                            <div class="bottom">
                                                <span class="helper-text">Know your password? <a href="{% url 'signin ">Login</a></span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

<!--</div>&lt;!&ndash;container-fluid&ndash;&gt;
        </div>&lt;!&ndash;main-content&ndash;&gt;-->
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
