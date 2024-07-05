<?php
  include("include/os-header.php");
  ?>
<!--MAIN Content-->
           

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="header">
                            <h2>Appoinments</h2>
                            <ul class="header-dropdown">
                                <div class="col-sm-13">
                                    <form action="#" method="post"> 
                                        <li>
                                            <div class="form-group">
                                                <select class="form-control show-tick" name="pid" >
                                                    <option value="">- Patient Id -</option>
                                                    <?php 
                                                    $result4= mysqli_query($conn,"SELECT * FROM hospital.appointment where requestedServiceId='13'");
                                                    while($row=mysqli_fetch_assoc($result4)){
                                                        echo"<option value='".$row['apid']." '>".$row['apid']."</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="action">
                                                    <button type="submit" class="btn btn-sm -m2 btn-outline-secondary  js-sweetalert" title="Edit" name="Mark">Mark Diagnosed</button>
                                            </div>
                                        </li>
                                    </form>
                                </div>
                            </ul>
                        </div>

                        <div class="body">
                            <button type="button" class="btn  btn-simple btn-sm btn-outline-warning btn-filter" data-target="all">All</button>
                            <button type="button" class="btn  btn-simple btn-sm btn-outline-secondary btn-filter" data-target="Waiting">Waiting</button>
                            <button type="button" class="btn  btn-simple btn-sm btn-outline-info btn-filter" data-target="Diagnosed">Diagnosed</button>

                            <div class="table-responsive m-t-20">
                                <table class="table table-filter table-hover m-b-0 ">
                                    <tbody>
                                        <tr>
                                            <th>Appoinment ID</th>
                                            <th>Patient ID</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Status</th>
                                            <th>Attend Time</th>
                                        </tr>

                                        <?php 
                                        $result6= mysqli_query($conn,"SELECT * FROM hospital.appointment where requestedServiceId='13'");
                                        while($result6row=mysqli_fetch_assoc($result6))
                                        {
                                            if($result6row['status']=='Waiting')
                                            {
                                                echo"<tr data-status='Waiting'>";
                                                    echo"<td>". $result6row['apid'] ."</td>";
                                                    echo"<td>". $result6row['pid'] ."</td>";
                                                    echo"<td>". $result6row['date'] ."</td>";
                                                    echo"<td>". $result6row['approxScheduledTime'] ."</td>";
                                                    echo"<td><span class='badge badge-outline-secondary' >". $result6row['status'] ."</span></td>";
                                                    echo"<td>". $result6row['attendTime'] ."</td>";
                                                echo"</tr>";
                                            }else{
                                                echo"<tr data-status='Diagnosed'>";
                                                    echo"<td>". $result6row['apid'] ."</td>";
                                                    echo"<td>". $result6row['pid'] ."</td>";
                                                    echo"<td>". $result6row['date'] ."</td>";
                                                    echo"<td>". $result6row['approxScheduledTime'] ."</td>";
                                                    echo"<td><span class='badge badge-outline-secondary' >". $result6row['status'] ."</span></td>";
                                                    echo"<td>". $result6row['attendTime'] ."</td>";
                                                echo"</tr>";
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>RBC Compatability <small>RBC Compatability with different types of blood</small> </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Recipient</th>
                                            <th colspan="8">Donor</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>O-</td>
                                            <td>O+</td>
                                            <td>A-</td>
                                            <td>A+</td>
                                            <td>B-</td>
                                            <td>B+</td>
                                            <td>AB-</td>
                                            <td>AB+</td>
                                        </tr>
                                        <tr>
                                            <td>O-</td>
                                            <td><i class="icon-like"></i></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>O+</td>
                                            <td><i class="icon-like"></i></td>
                                            <td><i class="icon-like"></i></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>A-</td>
                                            <td><i class="icon-like"></i></td>
                                            <td></td>
                                            <td><i class="icon-like"></i></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>A+</td>
                                            <td><i class="icon-like"></i></td>
                                            <td><i class="icon-like"></i></td>
                                            <td><i class="icon-like"></i></td>
                                            <td><i class="icon-like"></i></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>B-</td>
                                            <td><i class="icon-like"></i></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><i class="icon-like"></i></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>B+</td>
                                            <td><i class="icon-like"></i></td>
                                            <td><i class="icon-like"></i></td>
                                            <td></td>
                                            <td></td>
                                            <td><i class="icon-like"></i></td>
                                            <td><i class="icon-like"></i></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>AB-</td>
                                            <td><i class="icon-like"></i></td>
                                            <td></td>
                                            <td><i class="icon-like"></i></td>
                                            <td></td>
                                            <td><i class="icon-like"></i></td>
                                            <td></td>
                                            <td><i class="icon-like"></i></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>AB+</td>
                                            <td><i class="icon-like"></i></td>
                                            <td><i class="icon-like"></i></td>
                                            <td><i class="icon-like"></i></td>
                                            <td><i class="icon-like"></i></td>
                                            <td><i class="icon-like"></i></td>
                                            <td><i class="icon-like"></i></td>
                                            <td><i class="icon-like"></i></td>
                                            <td><i class="icon-like"></i></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Blood Availability <small> </small> </h2>
                        </div>
                        <div class="body">
                            <form action="#" method="post">
                            <div class="row clearfix">
                                
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <select class="form-control show-tick" name="bgrup">
                                            <option value="">- Blood Grup -</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                      <div class="form-group">
                                        <button type="submit" class="btn btn-warning" name="Check">Check</button>
                                      </div>
                                </div>

                            </div>
                            </form>
                        </div>
                        <div class="header">
                            <h2>Report <small> </small> </h2>
                        </div>
                        <div class="body">
                            <form action="#" method="post">
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <select class="form-control show-tick" name="apid" >
                                            <option value="">- patient Id -</option>
                                            <?php 
                                            $result4= mysqli_query($conn,"SELECT * FROM hospital.appointment where requestedServiceId='13'");
                                            while($row=mysqli_fetch_assoc($result4)){
                                                echo"<option value='".$row['apid']." '>".$row['apid']."</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Blood Pressure" name="bp">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Heart Rate" name="hrate">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Temperature" name="temperatuer">
                                    </div>
                                </div>
                                
                                 <div class="col-sm-12">
                                    <div class="form-group m-t-20">
                                        <textarea rows="2" class="form-control" placeholder="In Detail Report Of Transfusion" name="report"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                      <div class="form-group">
                                        <button type="submit" class="btn btn-success" name="Update1">Update</button>
                                      </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<?php
  include("include/os-footer.php");

  if(isset($_POST['Mark']))
    {
        if(isset($_POST['pid']))
        {
            $apid=$_POST['pid'];
           $result5= mysqli_query($conn,"UPDATE `hospital`.`appointment` SET `status` = 'Diagnosed' WHERE (`apid` = '$apid')") or die("An Error Occur");
           if($result5){
            echo"<script>window.alert('Successfully');</script>"; 
           }else echo"<script>window.alert('Error');</script>";

        }else echo"<script>window.alert('select patient id');</script>";
    }


    if(isset($_POST['Update1']))
    {
        if(isset($_POST['apid']) && isset($_POST['bp']) && isset($_POST['hrate']) && isset($_POST['temperatuer']) && isset($_POST['report']))
        {
            $Apid=$_POST['apid'];
            $Bp=$_POST['bp'];
            $Hrate=$_POST['hrate'];
            $Temp=$_POST['temperatuer'];
            $Report=$_POST['report'];

            $result7=mysqli_query($conn,"INSERT INTO `hospital`.`transfusion` (`pid`,`bp`, `hrate`, `temperature`, `Report`) VALUES ( '$Apid','$Bp', '$Hrate', '$Temp', '$Report')");

            if($result7){
            echo"<script>window.alert('Successfully');</script>"; 
           }else echo"<script>window.alert('Already Report Submited');</script>";
        }else echo"<script>window.alert('Enter Data properly');</script>";
    }


    if(isset($_POST['Check']))
    {
        if(isset($_POST['bgrup']))
        {
            $Bgrup=$_POST['bgrup'];

            $Sql=mysqli_query($conn,"SELECT availBloodBag FROM hospital.bloodavail where bloodtype='A+';");
            $Ba=mysqli_fetch_assoc($Sql);
            if($Sql){
                echo"<script>window.alert('".$Ba['availBloodBag']." Bags available');</script>";
            }else echo"<script>window.alert('Error Occur');</script>";
        }else echo"<script>window.alert('Select Blood Group');</script>";
    }


  ?>