<?php
  include("include/admin-header.php");
  ?>
<!--MAIN Content-->

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>View Feedback</h2>

                        </div>
                        <div class="body">
                            <!--<p class="float-md-right">
                                <span class="badge badge-success">3 Admit</span>
                                <span class="badge badge-default">2 Discharge</span>
                            </p>-->
                            <div class="table-responsive ">
                                <table class="table m-b-0 table table-hover js-basic-example dataTable table-custom">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Feedback ID</th>
                                            <th>User Name</th>
                                            <th>User Type</th>
                                            <th>Date</th>
                                            <th>Feedback</th>
                                            <th>Rate</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $result7= mysqli_query($conn,"SELECT * FROM hospital.feedback");
                                                while($row7=mysqli_fetch_assoc($result7)){  
                                                echo"<tr>
                                                <td>". $row7['fid'] ."</td>
                                                <td>". $row7['name'] ."</td>
                                                <td>". $row7['user'] ."</td>
                                                <td>". $row7['date'] ." </td> 
                                                <td>". $row7['feedbacks'] ."</td>
                                                <td>". $row7['rate'] ."</td>
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
<?php
  include("include/admin-footer.php");
  ?>