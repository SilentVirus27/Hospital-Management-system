<?php
  include("include/nurse-header.php");
  ?>
<!--MAIN Content-->
            <!-- <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                    <div class="card overflowhidden">
                        <div class="body">
                            <h2 class="m-t-0 m-b-5">58</h2>
                            <p class="text-muted">General Appoinment Received</p>
                        </div>
                        <span id="linecustom1">10,20,45,68,12,34,65,12,93,45</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                    <div class="card overflowhidden">
                        <div class="body">
                            <h2 class="m-t-0 m-b-5">40</h2>
                            <p class="text-muted ">Today's Total Admit </p>
                        </div>
                        <span id="linecustom2">21,42,51,63,25,34,31,65,24,15</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                    <div class="card overflowhidden">
                        <div class="body">
                            <h2 class="m-t-0 m-b-5">18</h2>
                            <p class="text-muted">Today's Discharge</p>
                        </div>
                        <span id="linecustom3">1,5,3,6,6,3,6,8,4,2</span>
                    </div>
                </div>
            </div> -->

            <div class="row clearfix"> 
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Patient Status</h2>
                            
                        </div>
                        <div class="body">
                            <div class="table-responsive ">
                                <table class="table m-b-0 table table-hover js-basic-example dataTable table-custom">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Patient ID</th>
                                            <th>Patients Name</th>
                                            <th>Adress</th>
                                            <th>Admit Date</th>
                                            <th>Priority</th>
                                            <th>Discription</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $result = mysqli_query($conn,"SELECT * FROM hospital.admitpatients,hospital.patient where hospital.admitpatients.pid=hospital.patient.pid");
                                        if($result){
                                            while($row=mysqli_fetch_assoc($result)){
                                                
                                                echo"
                                        <tr>
                                            <td>". $row['pid'] ."</td>
                                            <td><span>". $row['name'] ."</span></td>
                                            <td><span class='text-info'>". $row['caddress'] ."</span></td>
                                            <td>". $row['dateTime'] ."</td>

                                            <td><span class='badge badge-danger'>". $row['priority'] ."</span></td>
                                           <td>". $row['admitDiscription'] ."</td>
                                            </td>
                                            <td><span class='badge badge-danger'>". $row['status'] ."</span></td>
                                        </tr>";
                                            
                                          }
                                        }
                                        ?>
                                        <!-- <tr>
                                            <td>2</td>
                                            <td><span>Jack Bird</span></td>
                                            <td><span class="text-info">123 6th St. Melbourne, FL 32904</span></td>
                                            <td>Sept 13, 2017</td>

                                            <td><span class="badge badge-warning">MEDIUM</span></td>
                                            <td><div class="progress progress-xs">
                                                    <div class="progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">100% Complete</span> </div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-warning">Under Observ</span></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><span>Dean Otto</span></td>
                                            <td><span class="text-info">123 6th St. Melbourne, FL 32904</span></td>
                                            <td>Sept 13, 2017</td>

                                            <td><span class="badge badge-success">LOW</span></td>
                                           <td><div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%;"> <span class="sr-only">15% Complete</span> </div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success">Discharge</span></td>
                                        </tr> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php
  include("include/nurse-footer.php");
  ?>