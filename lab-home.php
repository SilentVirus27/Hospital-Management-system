<?php
  include("include/lab-header.php");
  ?>
<!--MAIN Content-->
            <!-- <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                    <div class="card overflowhidden">
                        <div class="body">
                            <h2 class="m-t-0 m-b-5">58</h2>
                            <p class="text-muted">Total Sample Received</p>
                        </div>
                        <span id="linecustom1">10,20,45,68,12,34,65,12,93,45</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                    <div class="card overflowhidden">
                        <div class="body">
                            <h2 class="m-t-0 m-b-5">40</h2>
                            <p class="text-muted ">Under Observation</p>
                        </div>
                        <span id="linecustom2">21,42,51,63,25,34,31,65,24,15</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                    <div class="card overflowhidden">
                        <div class="body">
                            <h2 class="m-t-0 m-b-5">18</h2>
                            <p class="text-muted">Report Submit</p>
                        </div>
                        <span id="linecustom3">1,5,3,6,6,3,6,8,4,2</span>
                    </div>
                </div>
            </div> -->

            <!-- <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Test Status</h2>
                            
                        </div>
                        <div class="body">
                            <div class="table-responsive ">
                                <table class="table m-b-0 table table-hover js-basic-example dataTable table-custom">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Test ID</th>
                                            <th>Patient Name</th>
                                            <th>Adress</th>
                                            <th>Sample Date</th>
                                            <th>Report Date</th>
                                            <th>Priority</th>
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

                                        <tr>
                                            <td>1</td>
                                            <td><span>John</span></td>
                                            <td><span class="text-info">70 Bowman St. South Windsor, CT 06074</span></td>
                                            <td>Sept 13, 2017</td>
                                            <td>Sept 16, 2017</td>
                                            <td><span class="badge badge-warning">MEDIUM</span></td>
                                           
                                            <td><span class="badge badge-Primary">Sample Received</span></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><span>Jack Bird</span></td>
                                            <td><span class="text-info">123 6th St. Melbourne, FL 32904</span></td>
                                            <td>Sept 13, 2017</td>
                                            <td>Sept 22, 2017</td>
                                            <td><span class="badge badge-warning">MEDIUM</span></td>
                                            
                                            <td><span class="badge badge-default">Under Observ</span></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><span>Dean Otto</span></td>
                                            <td><span class="text-info">123 6th St. Melbourne, FL 32904</span></td>
                                            <td>Sept 13, 2017</td>
                                            <td>Sept 23, 2017</td>
                                            <td><span class="badge badge-warning">MEDIUM</span></td>
                                            
                                            <td><span class="badge badge-success">Reported</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td><span>Jack Bird</span></td>
                                            <td><span class="text-info">4 Shirley Ave. West Chicago, IL 60185</span></td>
                                            <td>Sept 17, 2017</td>
                                            <td>Sept 16, 2017</td>
                                            <td><span class="badge badge-success">LOW</span></td>
                                            <td><span class="badge badge-default">Under Observ</span></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td><span>Hughe L.</span></td>
                                            <td><span class="text-info">4 Shirley Ave. West Chicago, IL 60185</span></td>
                                            <td>Sept 18, 2017</td>
                                            <td>Sept 18, 2017</td>
                                            <td><span class="badge badge-danger">HIGH</span></td>
                                            <td><span class="badge badge-success">Reported</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Test History<small>All Previous Test History</small> </h2>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Test Name</th>
                                        <th>Status</th>
                                        <th>Details</th>
                                        <th>Expected Result</th>
                                        <th>Test Result</th>
                                        <th>Remark</th>
                                        <th>Sample Date</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $result7= mysqli_query($conn,"SELECT * FROM hospital.tests,hospital.servicetest where hospital.tests.tid=hospital.servicetest.stid ");
                                        while($row7=mysqli_fetch_assoc($result7)){
                                        echo"<tr>
                                        <td>". $row7['name'] ."</td>
                                        <td>". $row7['status'] ."</td>
                                        <td>". $row7['details'] ."</td>
                                        <td>". $row7['expectedrest'] ." </td> 
                                        <td>". $row7['result'] ."</td>
                                        <td>". $row7['remark'] ."</td>
                                        <td>". $row7['sampledate'] ."</td>
                                        </tr>";
                                        }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
<?php
  include("include/lab-footer.php");
  ?>