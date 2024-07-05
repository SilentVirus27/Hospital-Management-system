<?php
  include("include/patient-header.php");
  ?>
<!--MAIN Content-->
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>All Appoinments</h2>
                            <form action="#" method="post">
                             <ul class="header-dropdown">
                                <div class="col-sm-15">
                                    <table>
                                <tr>
                                    <th>
                                        <div class="form-group">
                                            <select class="form-control " name="apid" >
                                                <option value="">- Appoinment Id -</option>
                                                <?php 
                                                $result6= mysqli_query($conn,"SELECT * FROM hospital.appointment where pid='$Pid' and status='Waiting'");
                                                while($row6=mysqli_fetch_assoc($result6)){
                                                    echo"<option value='".$row6['apid']." '>".$row6['apid']."</option>";
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="form-group ">
                                                <button type="submit" class="btn btn-sm btn-outline-danger form-control" title="Delete" name="Delete"><i class="icon-trash"></i></button>
                                        </div>
                                    </th>
                                </tr>
                                    </table>
                                </div>
                            </ul></form>
                        </div>
                        <div class="body">
                            <div class="table-responsive ">
                                <table class="table m-b-0 table table-hover js-basic-example dataTable table-custom">
                                    <thead class="thead-datk">
                                        <tr>
                                            <th>Appoinment ID</th>
                                            <th>Dr.Contact</th>
                                            <th>Services</th>
                                            <th>Scheduled Time</th>
                                            <th>Scheduled Date</th>
                                            <th>Status</th>
                                            <th>Discription</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $result6=mysqli_query($conn,"SELECT hospital.appointment.apid,hospital.hospitalstaff.cNumber,hospital.servicetest.name,hospital.appointment.approxScheduledTime,hospital.appointment.date,hospital.appointment.status,hospital.appointment.discription FROM hospital.appointment,hospital.hospitalstaff,hospital.servicetest where hospital.appointment.pid='$Pid' and hospital.appointment.requestedDocId=hospital.hospitalstaff.hsid and hospital.appointment.requestedServiceId=hospital.servicetest.stid");

                                        while($result6row=mysqli_fetch_assoc($result6))
                                        {
                                             echo"<tr>
                                                <td>".$result6row['apid']."</td>
                                                <td><span class='text-info'>".$result6row['cNumber']."</span></td>
                                                <td>".$result6row['name']."</td>
                                                <td>".$result6row['approxScheduledTime']."</td>
                                                <td>".$result6row['date']."</td>
                                                <td><span class='badge badge-Primary'>".$result6row['status']."</span></td>
                                                 <td>".$result6row['discription']."</td>
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
  include("include/patient-footer.php");

  if(isset($_POST['Delete']))
    {
        if(isset($_POST["apid"]))
        {
            $Apid=$_POST["apid"];
            $sql="DELETE FROM hospital.appointment where apid='$Apid'";
            $result=mysqli_query($conn,$sql);
            if($result)
            {
                echo"<script>window.alert('Successfully');</script>";
            }else echo"<script>window.alert('Please Retry');</script>";
        }else echo"<script>window.alert('Select Properly');</script>";
    }

?>