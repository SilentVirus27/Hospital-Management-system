<?php
  include("include/home-header.php");
  ?>
<!--MAIN Content-->
<div class="container-fluid ">
    <div class="vertical-align-middle ">
        <div class="row clearfix">
            <div class="row-lg-3 col-md-12 col-sm-12">
                <div class="card">
                    <div class="body text-center">
                        <!--blank space top-->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $result = mysqli_query($conn,"SELECT * FROM hospital.servicetest;");
            if($result)
            {
               while($row=mysqli_fetch_assoc($result))
                {
                echo"<div class='col-lg-4 col-md-6 col-sm-12'>";
                    echo"<div class='card project_widget'>";
                        echo"<div class='pw_img'>";
                            echo"<img class='img-fluid' src='assets/images/image-gallery/". $row['imagename'] ."' alt='About the image'>";
                        echo"</div>";
                        echo"<div class='pw_content'>";
                            echo"<div class='pw_header'>";
                                echo"<h6>". $row['name'] ."</h6>";
                                echo"<ul class='list-unstyled team-info margin-0 p-t-15'>";
                                echo"<li class='m-r-15'><small>Service Availability :</small></li><br>";
                                echo"<spam>". $row['availableStartTime'] ."Hr</spam> To ";
                                echo"<spam>". $row['availableEndTime'] ."Hr</spam>";
                                echo"</ul>";
                            echo"</div>";
                            echo"<div class='pw_meta'>";
                                echo"<p>". $row['discription'] ."</p>";
                            echo"</div>";
                        echo"</div>";
                    echo"</div>";
                echo"</div>";
                }
            }
            else echo"error";
            ?>    
        </div>        
    </div>
</div>
<?php
  include("include/home-footer.php");
  ?>

