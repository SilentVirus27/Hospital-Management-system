<?php
  include("include/patient-header.php");
  ?>
<!--MAIN Content-->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="body">
                            <ul class="nav nav-tabs-new2">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#current">Admit Patient Details</a></li>
                                <!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#hist">History</a></li> -->
                            </ul>
                            <div class="tab-content mt-3">
                                <!--Current -->
                                <?php
                                $sql1 = "SELECT * FROM hospital.admitpatients where pid='$Pid' ";
                                $result = mysqli_query($conn, $sql1);
                                while($row=mysqli_fetch_assoc($result)){
                                    $did=$row['refDocID'];
                                    $result = mysqli_query($conn,"SELECT * FROM hospital.hospitalstaff where hsid=$did");
                                    $row1=mysqli_fetch_assoc($result);
                                    
                                
                                    echo"
                                <div class='tab-pane active' id='current'>
                                    
                                    <div class='timeline-item green'>
                                        <span class='date'>".$row['status']."</span>
                                        <p> Admit Date : ".$row['dateTime']."</p>
                                        <span>Attend by :<a href='javascript:void(0);' title=''> Dr. ". $row1['name']."<br>
                                       </a>
                                       Contact Number :".$row1['cNumber']."
                                       Email :".$row1['email']."
                                        </span>

                                    </div>
                                    <div class='timeline-item warning   '>
                                        <span class='date'>Admit Address</span>
                                        <span> Ward Name:".$row['ward']."<br>
                                         <i class=' fa fa-arrow-down'></i> <br>
                                         Room Number :".$row['room']." <br>
                                         <i class='' fa fa-arrow-down'></i> <br>
                                         Bed Number :".$row['bedNumber']."   </span>
                                    </div>

                                    <div class='timeline-item warning   '>
                                        <span class='date'>Vitals </span>
                                        <p> Blood Pressur :".$row['bloodpressure']."</p>
                                        <p> Heart Rate :".$row['heartrate']."</p>
                                        <p> Temprature :".$row['temprature']."</p>
                                    </div>

                                     <div class='timeline-item danger'>
                                        <span class='date'>Discription </span>
                                        <p>".$row['admitDiscription']."</p>
                                    </div>
                                    
                                </div>
                                ";
                                }
                                ?>

                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php
  include("include/patient-footer.php");
  ?>