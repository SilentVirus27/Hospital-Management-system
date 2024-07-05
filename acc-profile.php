<?php
  include("include/account-header.php");
  ?>
<!--MAIN Content-->
            <div class="row clearfix">

                <div class="col-lg-4 col-md-12">
                    <div class="card profile-header">
                        <div class="body">

                            <?php
                            $result = mysqli_query($conn,"SELECT * FROM hospital.hospitalstaff where email='$Email';");
                            if($result)
                            {
                            $row=mysqli_fetch_assoc($result);
                            
                            echo"<div class='profile-image'> <img src='assets/images/sm/". $row['profilename'] ." ' class='rounded-circle' > </div>";
                            }
                            ?>
                            
                            <div>
                                <h4 class="m-b-0"><strong>Mr. <?php echo $row['name']; ?></strong></h4>
                                <span><?php echo $row['education']; ?>&nbsp;&nbsp;<?php echo $row['specialisation']; ?></span>
                            </div>
                            <!--<div class="m-t-15">
                                <button class="btn btn-primary">Follow</button>
                                <button class="btn btn-outline-secondary">Message</button>
                            </div>-->
                        </div>
                    </div>

                    <div class="card">
                        <div class="header">
                            <h2>Info</h2>
                        </div>
                        <div class="body">
                            <small class="text-muted">Address: </small>
                            <p><?php echo $row['address']; ?></p>
                            <small class="text-muted">Email address: </small>
                            <p><?php echo $row['email']; ?></p>
                            <small class="text-muted">Mobile: </small>
                            <p><?php echo $row['cNumber']; ?></p>
                            <small class="text-muted">Birth Date: </small>
                            <p class="m-b-0"><?php echo $row['bdate']; ?></p>
                            <hr>
                            <small class="text-muted">Social: </small>
                            <p><i class="fa fa-twitter m-r-5"></i> <?php echo $row['twitter']; ?></p>
                            <p><i class="fa fa-facebook  m-r-5"></i> <?php echo $row['facebook']; ?></p>
                            <p><i class="fa fa-instagram m-r-5"></i> <?php echo $row['instagram']; ?></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12">
                    <!-- <div class="card">
                        <div class="row profile_state">
                            <div class="col-lg-3 col-6">
                                <div class="body">
                                    <i class="fa fa-thumbs-up"></i>
                                    <h5 class="m-b-0 number count-to" data-from="0" data-to="2365" data-speed="1000" data-fresh-interval="700">2365</h5>
                                    <small>Experience</small>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="body">
                                    <i class="fa fa-star"></i>
                                    <h5 class="m-b-0 number count-to" data-from="0" data-to="1203" data-speed="1000" data-fresh-interval="700">1203</h5>
                                    <small>Awards</small>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="body">
                                    <i class="fa fa-user"></i>
                                    <h5 class="m-b-0 number count-to" data-from="0" data-to="324" data-speed="1000" data-fresh-interval="700">324</h5>
                                    <small>Clients</small>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="body">
                                    <i class="icon-emoticon-smile"></i>
                                    <h5 class="m-b-0 number count-to" data-from="0" data-to="1980" data-speed="1000" data-fresh-interval="700">1980</h5>
                                    <small>Monthly Visiting Client</small>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="row clearfix text-center">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="body">
                                    <input type="text" class="knob" value="<?php echo $row['experience']; ?>" data-width="70" data-height="70" data-thickness="0.1" data-fgColor="#01b2c6">
                                    <h6>Experience</h6>
                                    <span><?php echo $row['experience']; ?> year's of this month</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="body">
                                    <input type="text" class="knob" value="<?php echo $row['age']; ?>" data-width="70" data-height="70" data-thickness="0.1" data-fgColor="#2196f3">
                                    <h6>age</h6>
                                    <span><?php echo $row['age']; ?> year's of this month</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="body">
                                    <input type="text" class="knob" value="<?php echo $row['height']; ?>" data-width="70" data-height="70" data-thickness="0.1" data-fgColor="#f44336">
                                    <h6>height</h6>
                                    <span><?php echo $row['height']; ?> feet<br></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="body">
                                    <input type="text" class="knob" value="<?php echo $row['weight']; ?>" data-width="70" data-height="70" data-thickness="0.1" data-fgColor="#4caf50">
                                    <h6>weight</h6>
                                    <span><?php echo $row['weight']; ?>kg of this month<br></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="body">
                            <ul class="nav nav-tabs-new">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Basic">Basic</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Account">Account</a></li>
                                <!--<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#General">General</a></li>-->
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content padding-0">
                        <div class="tab-pane active" id="Basic">
                            <div class="card">
                                <div class="body">
                                    <h6>Basic Information</h6>
                                    <form action="#" method="post">
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Your Name" name="name">
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-mortar-board"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Specilisation" name="spec">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-institution"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Education" name="edu">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Experience in Years" name="exp">
                                            </div>
                                            
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Height" name="height">
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="weight" name="weight">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Age" name="age">
                                            </div>
                                            <div class="form-group">
                                                <div>
                                                    <label class="fancy-radio">
                                                        <input name="gen" value="Male" type="radio" checked>
                                                        <span><i></i>Male</span>
                                                    </label>
                                                    <label class="fancy-radio">
                                                        <input name="gen" value="Female" type="radio">
                                                        <span><i></i>Female</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="icon-calendar"></i></span>
                                                    </div>
                                                    <input  type="date" class="form-control" placeholder="Birthdate" name="date">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-facebook"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder=" Facebook Username" name="face">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-twitter"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Twitter Username" name="twit">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-instagram"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Instagram Username" name="insta">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Full Address" name="addr">
                                            </div>
                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-primary" name="Update1">Update</button> &nbsp;&nbsp;
                                    </form><br><hr color="gray">
                                    <form action="#" method="post">
                                        <div class="form-group">
                                               <input type="file" name="fileToUpload" id="fileToUpload" placeholder="Profile Photo">
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="Update2">Update</button> &nbsp;&nbsp;
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="Account">
                            <div class="card">
                                <div class="body">
                                    <h6>Account Security</h6>
                                    <form action="#" method="post">
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="<?php echo $row['name']; ?>" disabled placeholder="Username" name="user">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" value="<?php echo $row['email']; ?>" disabled placeholder="Email" name="email">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" disabled placeholder="Phone Number" name="phno" value="<?php echo $row['cNumber']; ?>" >
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <h6>Change Password</h6>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="New Password" name="newpass">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Confirm New Password" name="renewpass">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="Update3">Update</button> &nbsp;&nbsp;
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
<?php
  include("include/account-footer.php");

  if(isset($_POST['Update1']))
    {
        if(isset($_POST["name"])&& isset($_POST["age"]) && isset($_POST["spec"]) && isset($_POST["edu"]) && isset($_POST["exp"]) && isset($_POST["height"]) && isset($_POST["weight"]) && isset($_POST["gen"]) && isset($_POST["date"]) && isset($_POST["face"]) && isset($_POST["twit"]) && isset($_POST["insta"]) && isset($_POST["addr"]))
        {
            $Name=$_POST["name"];
            $Spec=$_POST["spec"];
            $Edu=$_POST["edu"];
            $Exp=$_POST["exp"];
            $Age=$_POST["age"];
            $Height=$_POST["height"];
            $weight=$_POST["weight"];
            $Gen=$_POST["gen"];
            $Date=$_POST["date"];
            $Face=$_POST["face"];
            $Twit=$_POST["twit"];
            $Insta=$_POST["insta"];
            $Addr=$_POST["addr"];


            $sql= "UPDATE `hospital`.`hospitalstaff` SET `name` = '$Name',`education` = '$Edu', `specialisation` = '$Spec', `experience` = '$Exp', `bdate` = '$Date', `height` = '$Height', `weight` = '$weight', `sex` = '$Gen', `age` = ' $Age', `address` = '$Addr', `facebook` = '$Face', `twitter` = '$Twit', `instagram` = '$Insta', `profilename` = 'avatar1.jpg' WHERE (`email` = '$Email');";
            $insert = mysqli_query($conn,$sql);
            if($insert)
            {
                echo"<script>window.alert('Successfully');</script>";
            }else echo"<script>window.alert('Please Retry');</script>";

        }else echo"<script>window.alert('Please Fill Information Properly');</script>";
    }

    if(isset($_POST['Update2']))
    {
        $target_file = basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;

        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image

        // Check if file already exists
        if (file_exists($target_file)) {
            echo"<script>window.alert('Sorry, file already exists. Please change your file name and Try again!!');</script>";        
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo"<script>window.alert('Sorry, your file was not uploaded');</script>";
        
        // if everything is ok, try to upload file
        } else {
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
                    echo"<script>window.alert('File Uploaded Successfully');</script>";
                }
    }

    if(isset($_POST['Update3']))
    {
        if(isset($_POST['newpass']) && isset($_POST['renewpass']))
        {
            $newpass=$_POST['newpass'];$renewpass=$_POST['renewpass'];
            if ($newpass==$renewpass) 
            {
                $sql= "UPDATE `hospital`.`hospitalstaff` SET `password` = '$newpass' WHERE (`email` = '$Email');";
                $insert = mysqli_query($conn,$sql);
                if($insert)
                {
                    echo"<script>window.alert('Successfully Updated');</script>";
                }else echo"<script>window.alert('Please Retry');</script>";
            }else echo"<script>window.alert('Password And Repassword Should be same');</script>";
        }else echo"<script>window.alert('Fill information prioperly');</script>";
    }


  ?>