<?php
  include("include/admin-header.php");
  ?>
<!--MAIN Content-->
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                                <div class="body">
                                    <form action="#" method="post">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-12">
                                            <h6>Add New Staff</h6>
                                            <div class="form-group">
                                                <input type="text" class="form-control"  placeholder="Name" name="user">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Email" name="email">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Phone Number" name="phno">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="GMap Address Link" name="glink">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control"  placeholder="Specialization" name="spec">
                                            </div>
                                            
                                        </div>

                                        <div class="col-lg-6 col-md-12">
                                            <h6>Change Password</h6>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="New Password" name="pass">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Confirm New Password" name="repass">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="Add">Add Doctor</button> &nbsp;&nbsp;
                                </form>
                                </div>
                            </div>
                </div>
<?php
  include("include/admin-footer.php");

  if(isset($_POST['Add']))
    {
        if(isset($_POST["user"])&& isset($_POST["email"]) && isset($_POST["phno"]) && isset($_POST["glink"]) && isset($_POST["spec"])  && isset($_POST["pass"]) && isset($_POST["repass"]))
        {
            $Name=$_POST["user"];
            $email=$_POST["email"];
            $phno=$_POST["phno"];
            $glink=$_POST["glink"];
            $spec=$_POST["spec"];
            $pass=$_POST["pass"];
            $repass=$_POST["repass"];
            if($pass==$repass)
            {
                $sql= "INSERT INTO `hospital`.`hospitalstaff` (`name`, `email`, `cNumber`, `password`, `education`, `specialisation`, `glink`) VALUES ('$Name', '$email', '$phno', '$pass', 'NA', '$spec', ' $glink')";
                $insert = mysqli_query($conn,$sql);
                if($insert)
                {
                    echo"<script>window.alert('Successfully');</script>";
                }else echo"<script>window.alert('Please Retry');</script>";
            }else echo"<script>window.alert('Password And Repassword Should Be Same');</script>";
        }else echo"<script>window.alert('Please Fill Information Properly');</script>";
    }

  ?>