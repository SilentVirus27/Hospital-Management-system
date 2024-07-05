<?php
  include("include/patient-header.php");

  if(isset($_POST['View']))
                            {
                                if(isset($_POST['bno']))
                                {
                                    $Bno = $_POST["bno"];
                                    $sql1 = "SELECT * FROM hospital.patientbill where invoiceid='$Bno' and pid='$Pid';";
                                    $result1 = mysqli_query($conn, $sql1);
                                    if (mysqli_num_rows($result1) > 0) 
                                    {
                                        $row1=mysqli_fetch_assoc($result1);

            echo"<div class='row clearfix'>";
                echo"<div class='col-lg-12 col-md-12'>";
                    echo"<div class='card invoice1'>";
                        echo"<div class='body '' >";
                            echo"<div class='invoice-top clearfix'>";
                                echo"<div class='info'>";
                                    echo"<h6>Ref Doctor :Dr. ".$row1['refDocname']." </h6>";
                                    echo"<p> ".$row1['refDocemail']." <br>";
                                        echo "+91 ".$row1['refDocNum']." ";
                                    echo"</p>";
                                echo"</div>";
                                echo"<div class='title'>";
                                    echo"<h4>Invoice #".$row1['invoiceid']."</h4>";
                                    echo"<p>Issued: ".$row1['date']."<br>";
                                        echo"Payment Status: ".$row1['status']." ";
                                    echo"</p>";
                                echo"</div>";
                            echo"</div>";
                            echo"<hr>";
                            echo"<div class='invoice-mid clearfix'>";
                                echo"<div class='info'>";
                                    echo"<h6>Patient Name : ".$row1['pname']." </h6>";
                                    echo"<p>".$row1['pemail']."<br>";
                                        echo"+91 ".$row1['pcontact']."</p>";
                                    echo"<h6>Important</h6>";
                                    echo"<p>Take complete bed Rest For a Week And get Healthy Meal</p>";
                                echo"</div>";
                            echo"</div>";
                            echo"<div class='table-responsive'>";
                                echo"<table class='table table-hover'>";
                                    echo"<thead class='thead-light'>";
                                        echo"<tr>";
                                            echo"<td>#</td>";
                                            echo"<th>Discription</th>";
                                            echo"<th style='width: 80px;''>Total</th>";
                                        echo"</tr>";
                                    echo"</thead>";
                                    echo"<tbody>";
                                        echo"<tr>";
                                            echo"<td>1</td>";
                                            echo"<td>Doctor Consultant Charges</td>";
                                            echo"<td>Rs.".$row1['DoctorFee']."</td>";
                                        echo"</tr>";
                                        echo"<tr>";
                                            echo"<td>2</td>";
                                            echo"<td>Pharmacy Total</td>";
                                            echo"<td>Rs.".$row1['PharmacyTotal']."</td>";
                                        echo"</tr>";
                                        echo"<tr>";
                                            echo"<td>3</td>";
                                            echo"<td>Ambulance Charges</td>";
                                            echo"<td>Rs.".$row1['AmbulanceCharge']."</td>";
                                        echo"</tr>";
                                        echo"<tr>";
                                            echo"<td>4</td>";
                                            echo"<td>Bed Charges(Admit patients)</td>";
                                            echo"<td>Rs.".$row1['BedCharge']."</td>";
                                        echo"</tr>";
                                        echo"<tr>";
                                            echo"<td>5</td>";
                                            echo"<td>MRI</td>";
                                            echo"<td>Rs.".$row1['MRI']."</td>";
                                        echo"</tr>";
                                        echo"<tr>";
                                            echo"<td>6</td>";
                                            echo"<td>CT-Scan</td>";
                                            echo"<td>Rs.".$row1['CtScan']."</td>";
                                        echo"</tr>";
                                        echo"<tr>";
                                            echo"<td>7</td>";
                                            echo"<td>Blood Transfusion</td>";
                                            echo"<td>Rs.".$row1['btransfusion']."</td>";
                                        echo"</tr>";
                                        echo"<tr>";
                                            echo"<td>8</td>";
                                            echo"<td>Dialysis</td>";
                                            echo"<td>Rs.".$row1['Dialysis']."</td>";
                                        echo"</tr>";
                                        echo"<tr>";
                                            echo"<td>9</td>";
                                            echo"<td>Ultrasound</td>";
                                            echo"<td>Rs.".$row1['Ultrasound']."</td>";
                                        echo"</tr>";
                                        echo"<tr>";
                                            echo"<td>10</td>";
                                            echo"<td>X-Ray</td>";
                                            echo"<td>Rs.".$row1['X_ray']."</td>";
                                        echo"</tr>";
                                        echo"<tr>";
                                            echo"<td>11</td>";
                                            echo"<td>ECG</td>";
                                            echo"<td>Rs.".$row1['ecg']."</td>";
                                        echo"</tr>";
                                        echo"<tr>";
                                            echo"<td>12</td>";
                                            echo"<td>Operation Charges(surgery)</td>";
                                            echo"<td>Rs.".$row1['Ot']."</td>";
                                        echo"</tr>";
                                    echo"</tbody>";
                                echo"</table>";
                            echo"</div>";
                            echo"<hr>";
                            echo"<div class='row clearfix'>";
                                echo"<div class='col-md-6'>";
                                    echo"<h5>Note</h5>";
                                    echo"<p>Visit Your Doctor For Regular Checkup Ontime 
                                    Also add some Physical Exercise in your Dealy Routine.</p>";
                                echo"</div>";
                                echo"<div class='col-md-6 text-right'>";
                                    echo"<p class='m-b-0 '>Tax :Rs. ".$row1['GST']."</p>";
                                    $tot=$row1['DoctorFee']+$row1['PharmacyTotal']+$row1['AmbulanceCharge']+$row1['BedCharge']+$row1['MRI']+$row1['CtScan']+$row1['btransfusion']+$row1['Dialysis']+$row1['Ultrasound']+$row1['X_ray']+$row1['ecg']+$row1['Ot']-$row1['GST'];
                                    echo"<p class='m-b-0'><b>Total :Rs.</b> ".$tot." </p>";
                                echo"</div>";
                            echo"</div>";
                        echo"</div>";
                    echo"</div>";
                echo"</div>";
            echo"</div>";
                                    }else echo"<script>window.alert('No Data Found With Given Invoice/Bill Number ');</script>"; 
                                }else echo"<script>window.alert('Enter Valid Invoice/Bill Number Properly');</script>";   
                            }
  ?>
<!--MAIN Content-->
            
             <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Enter Bill/Invoice Number To View Bill</h2>
                        </div>
                        <div class="body">
                            <form id="basic-form" action="#" method="post" novalidate>
                                <div class="form-group">
                                    <label><small>Invoice Number</small></label>
                                    <input type="text" class="form-control" required name="bno">
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary" name="View">View Invoice</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<?php
  include("include/patient-footer.php");
  ?>