<?php
  include("include/patient-header.php");
  ?>
<!--MAIN Content-->
            <!-- <div class="row clealfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Test Result :</h2>
                        </div>
                        <div class="body">
                            <ul class="list-group list-group-flush">

                                
                                
                            </ul>
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
                                <thead class="thead-dark">
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
                                        $result7= mysqli_query($conn,"SELECT * FROM hospital.tests,hospital.servicetest where hospital.tests.pid=hospital.servicetest.stid and pid='$Pid'");
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
  include("include/patient-footer.php");
  ?>