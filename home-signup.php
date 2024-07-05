<?php
    include_once("include/connection.php");
    if(isset($_POST['Submit']))
    {
        if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['repassword']))
        {
            $Email = $_POST["email"];
            $Password = $_POST["password"];
            $Repassword = $_POST["repassword"];

            if ($Password==$Repassword)
            {
                $sql = "SELECT * FROM hospital.patient where email='$Email' LIMIT 1";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    echo"<script>window.alert('This Email is Already Registered, Please Login');</script>";
                }else{
                    $sql="INSERT INTO `hospital`.`patient` (`email`, `password`) VALUES ('$Email', '$Password');";
                    $result=mysqli_query($conn,$sql) or die("An Error Occur");
                    echo"<script>window.alert('Registerd Successfully');</script>"; 
                    header("Location: home-signin.php");
                }
            }else echo"<script>window.alert('Password And Repassword Should Be Same');</script>";   
        }else echo"<script>window.alert('Enter Email, Password Properly');</script>";   
    }
?>
<!doctype html>
<html lang="en">
    <head>
    <title> Hospital :: Sign Up</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="icon" href=" favicon.ico " type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href=" assets/vendor/bootstrap/css/bootstrap.min.css ">
    <link rel="stylesheet" href=" assets/vendor/font-awesome/css/font-awesome.min.css ">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href=" assets/css/main.css ">
    <link rel="stylesheet" href=" assets/css/color_skins.css ">
    </head>

    <body class="theme-cyan">
        <!-- WRAPPER -->
        <div id="wrapper">
                <div class="vertical-align-wrap">
                            <div class="vertical-align-middle auth-main">
                                <div class="auth-box">
                                    <div class="card">
                                        <div class="header">
                                            <p class="lead">Create an account</p>
                                        </div>
                                        <div class="body">
                                            <form class="form-auth-small" action="#" method="post">
                                                 <div class="mb-3">
                                                      <input type="text" id="disabledTextInput" class="form-control" placeholder="Patient" name="patient" value="Patient" disabled>
                                                 </div>
                                                <div class="form-group">
                                                    <label for="signup-email" class="control-label sr-only">Email</label>
                                                    <input type="email" class="form-control" id="signup-email" placeholder="Your email" name="email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="signup-password" class="control-label sr-only">Password</label>
                                                    <input type="password" class="form-control" id="signup-password" placeholder="Password" name="password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="signup-password" class="control-label sr-only"> Retype Password</label>
                                                    <input type="password" class="form-control" id="signup-password" placeholder="Retype Password" name="repassword">
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-lg btn-block" name="Submit" >REGISTER</button>
                                                <button type="button" class="btn btn-primary btn-lg btn-block" onclick="javascript:history.go(-1)">
                                                    <i class="fa fa-arrow-left"></i> <span>Go Home</span>
                                                </button>
                                                <div class="bottom">
                                                    <span class="helper-text">Already have an account? <a href="home-signin.php">Login</a></span>
                                                </div>
                                            </form>
                                            <!-- <div class="separator-linethrough"><span>OR</span></div>
                                            <button class="btn btn-signin-social"><i class="fa fa-facebook-official facebook-color"></i> Sign up with Facebook</button>
                                            <button class="btn btn-signin-social"><i class="fa fa-twitter twitter-color"></i> Sign up with Twitter</button> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        <!-- END WRAPPER -->
</body>
</html>

