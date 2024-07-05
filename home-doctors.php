<?php
  include("include/home-header.php");
  ?>
<!--MAIN Content-->

        <div class="container-fluid">
            <div class="vertical-align-middle ">
                <div class="row clearfix">
                    <div class="row-lg-3 col-md-12 col-sm-12">
                        <div class="card">
                           <div class="body text-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            $result = mysqli_query($conn,"SELECT * FROM hospital.hospitalstaff");
            if($result){
                echo"<div class='row clearfix'>";
                while($row=mysqli_fetch_assoc($result)){
                echo"<div class='col-lg-3 col-md-6 col-sm-12'>";
                    echo"<div class='card'>";
                        echo"<div class='body text-center'>";
                                echo"<div class='chart easy-pie-chart-1' data-percent='75'> 
                                    <span>
                                        <img src='assets/images/sm/". $row['profilename'] ."' data-toggle='tooltip' data-placement='top' title='Dr. Avatar' alt='user' class='rounded-circle'/>
                                    </span> 
                                    </div>";
                                    echo"<h6 class='mb-0'><a href='#' title='' >Dr.". $row['name'] ."</a> </h6>";
                                    echo"<small>". $row['specialisation'] ."</small>";
                                    echo"<ul class='social-links list-unstyled'>
                                        <li><a title='facebook' href='https://www.facebook.com/".$row['facebook']."/'><i class='fa fa-facebook'></i></a></li>
                                        <li><a title='twitter' href='https://www.twitter.com/".$row['twitter']."/'><i class='fa fa-twitter'></i></a></li>
                                        <li><a title='instagram' href='https://www.instagram.com/".$row['instagram']."/'><i class='fa fa-instagram'></i></a></li>
                                    </ul>";
                                echo"<span>".$row['address']."</span>";  
                        echo"</div>";
                    echo"</div>";
                echo"</div>";
                }
                echo"</div>";   
            }
            else echo"error";
            ?>           
        </div>
<?php
  include("include/home-footer.php");
  ?>