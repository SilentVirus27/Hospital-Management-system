<?php
  include("include/patient-header.php");
  ?>
<!--MAIN Content-->
            <div class="row clealfix">
                <div class="col-lg-12 col-md-12">
                    <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Doctor's TimeTable <small>Check Doctor's Availability Before Booking Appoinment</small> </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example dataTable table-custom">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Doctor Name</th>
                                            <th>Specilization</th>
                                            <th>Contact</th>
                                            <th>Experience</th>
                                            <th>Start Time</th>
                                            <th>End Time</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Doctor Name</th>
                                            <th>Specilization</th>
                                            <th>Contact</th>
                                            <th>Experience</th>
                                            <th>Start Time</th>
                                            <th>End Time</th>
                                        </tr>
                                    </tfoot>
                                    
                                    <tbody>
                                        <?php 
                                                $result7= mysqli_query($conn,"SELECT * FROM hospital.hospitalstaff,hospital.doctoravailability where hospital.hospitalstaff.hsid=hospital.doctoravailability.docid ");
                                                while($row7=mysqli_fetch_assoc($result7)){
                                                echo"<tr>
                                                <td> Dr. ". $row7['name'] ."</td>
                                                <td>". $row7['specialisation'] ."</td>
                                                <td>". $row7['cNumber'] ."</td>
                                                <td>". $row7['experience'] ." Years </td> 
                                                <td>". $row7['startTime'] ."</td>
                                                <td>". $row7['endTime'] ."</td>
                                                </tr>";
                                                }
                                            ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
<?php
  include("include/patient-footer.php");
  ?>