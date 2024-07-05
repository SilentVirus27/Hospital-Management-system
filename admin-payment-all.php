<?php
  include("include/admin-header.php");
  ?>
<!--MAIN Content-->
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Payments List</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example dataTable table-custom">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Bill No</th>
                                            <th>Bill date</th>
                                            <th>Status</th>
                                            <th>RefDoctor</th>
                                            <th>Charges</th>
                                            <th>Tax</th>
                                            <th>Discount</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                                $result7= mysqli_query($conn,"SELECT * FROM hospital.patientbill");
                                                while($row7=mysqli_fetch_assoc($result7)){
                                                    $charges=$row7['DoctorFee']+$row7['PharmacyTotal']+$row7['AmbulanceCharge']+$row7['BedCharge']+$row7['MRI']+$row7['CtScan']+$row7['btransfusion']+$row7['Dialysis']+$row7['Ultrasound']+$row7['X_ray']+$row7['ecg']+$row7['Ot'];
                                                    $tot=$row7['DoctorFee']+$row7['PharmacyTotal']+$row7['AmbulanceCharge']+$row7['BedCharge']+$row7['MRI']+$row7['CtScan']+$row7['btransfusion']+$row7['Dialysis']+$row7['Ultrasound']+$row7['X_ray']+$row7['ecg']+$row7['Ot']-$row7['GST']-$row7['discount'];
                                                echo"<tr>
                                                <td>". $row7['invoiceid'] ."</td>
                                                <td>". $row7['date'] ."</td>
                                                <td>". $row7['status'] ."</td>
                                                <td>". $row7['refDocname'] ." </td> 
                                                <td>Rs. ". $charges ."</td>
                                                <td>Rs. ". $row7['GST'] ."</td>
                                                <td>Rs. ". $row7['discount'] ."</td>
                                                <td>Rs. ". $tot ."</td>
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