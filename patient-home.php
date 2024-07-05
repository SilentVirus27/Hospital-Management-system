<?php
  include("include/patient-header.php");
  ?>
<!--MAIN Content-->
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12">
                    <div class="card member-card">
                        <div class="header l-blue">
                            <h4 class="m-t-10 text-light"> Mr. <?php echo $row['name']; ?></h4>
                        </div>
                        <div class="member-img">
                            <a href="patient-invoice.html">

                            <?php
                            $result = mysqli_query($conn,"SELECT * FROM hospital.patient where email='$Email'");
                            if($result)
                            {
                            $row=mysqli_fetch_assoc($result);
                            echo"<img src='assets/images/sm/". $row['profilename'] ." ' class='rounded-circle' alt='Profile Picture'>";
                            }
                            ?>
                            
                            </a>
                        </div>
                        <div class="body">
                            <hr>
                            <strong>Email ID</strong>
                            <p><?php echo $row['email']; ?></p>
                            <strong>Phone</strong>
                            <p>+91 <?php echo $row['contactNo']; ?></p>
                            <hr>
                            <strong>Address</strong>
                            <address><?php echo $row['paddress']; ?></address>
                        </div>
                    </div>
                </div>
            </div>
<?php
  include("include/patient-footer.php");
  ?>