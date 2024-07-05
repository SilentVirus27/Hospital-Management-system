<?php
  include("include/pharma-header.php");

if(isset($_POST['Show']))
    {
        if(isset($_POST['pid']))
        {
            $Pid = $_POST["pid"];
            $sql1 = "SELECT * FROM hospital.prescribedmedication where pid='$Pid'";
            $result1 = mysqli_query($conn, $sql1);
            if (mysqli_num_rows($result1) > 0) 
            {
            echo"<div class='row clearfix'>
            <div class='col-lg-12'>
                <div class='card'>
                    <div class='header'>
                        <h2>Curent Priscribed Medicine<small>All Current Medication Details</small> </h2>
                    </div>
                    <div class='body'>
                        <table class='table table-bordered table-striped table-hover dataTable js-exportable'>
                                <thead class='thead-light'>
                                    <tr>
                                        <th>Medicine Name</th>
                                        <th>Content</th>
                                        <th>Referal Doctor  Id</th>
                                        <th>Quantity</th>
                                        <th>Dose Time</th>
                                        <th>Dose Size</th>
                                        <th>Instruction</th>
                                    </tr>
                                </thead>
                                <tbody>";
                                while($row1=mysqli_fetch_assoc($result1))
                                {
                                    echo"<tr>
                                        <td>".$row1['medName']."</td>
                                        <td>".$row1['containt']."</td>
                                        <td>".$row1['referralDocID']."</td>
                                        <td>".$row1['quantity']."</td>
                                        <td>".$row1['dosetime']."</td>
                                        <td>".$row1['dosesize']."</td>
                                        <td>".$row1['instruction']."</td>
                                    </tr>";
                                }
                                echo"</tbody>
                            </table>
                        </div>
                    </div>
            </div>
            </div>";

           }else echo"<script>window.alert('No Data Found With Given Invoice/Bill Number ');</script>"; 
        }else echo"<script>window.alert('Enter Valid patient id');</script>";   
    }
  ?>
<!--MAIN Content-->
        <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>View Proscription </h2>
                                    <ul class="header-dropdown">
                                        <div class="col-sm-13">
                                            <form action="#" method="post">
                                            <li>
                                                <div class="form-group">
                                                    <select class="form-control show-tick" name="pid" >
                                                        <option value="">- Appoin Id -</option>
                                                        <?php 
                                                        $result4= mysqli_query($conn,"SELECT * FROM hospital.prescribedmedication");
                                                        while($row=mysqli_fetch_assoc($result4)){
                                                            echo"<option value='".$row['pid']." '>".$row['pid']."</option>";
                                                        }
                                                        ?>

                                                    </select>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="action">
                                                        <button type="submit" class="btn btn-sm -m2 btn-outline-secondary  js-sweetalert" title="Edit" name="Show">Show</button>
                                                </div>
                                            </li>
                                            </form>
                                        </div>
                                </ul>
                        </div>
                    </div>
                </div>
                
        </div>
            
<?php
  include("include/pharma-footer.php");
  ?>