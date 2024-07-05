<?php
  include("include/doctor-header.php");
  ?>
<!--MAIN Content-->
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>New Admition</h2>
                        </div>
                        <div class="body">
                            <form method="post" action="#">
                                <div class="row clearfix">
                                    <div class="col-sm-6 ">
                                        <div class="form-group">
                                            <select class="form-control show-tick" name="pid" >
                                            <option value="">- Patient ID -</option>
                                            <?php 
                                            $result4= mysqli_query($conn,"select * FROM hospital.appointment");
                                            while($row4=mysqli_fetch_assoc($result4)){
                                                echo"<option value='".$row4['pid']." '>".$row4['pid']."</option>";
                                                }
                                            ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 ">
                                        <div class="input-group">
                                            <!-- <select class="form-control " name="refDoc" >
                                                <option value="" selected="selected">- Doctor -</option>
                                                <option value="" selected="selected">- Doctor1 -</option>
                                                <option value="" selected="selected">- Doctor2 -</option>
                                            </select> -->
                                            <select class="form-control show-tick" name="refDoc" >
                                            <option value="">- Doctor -</option>
                                            <?php 
                                            $result4= mysqli_query($conn,"SELECT * FROM hospital.hospitalstaff where doctorFlag='1'");
                                            while($row4=mysqli_fetch_assoc($result4)){
                                                echo"<option value='".$row4['hsid']." '>".$row4['name']."</option>";
                                                }
                                            ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary" name="Admit">Admit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-6">
                    <div class="card">
                        <div class="header">
                            <h2>Discharge Patient</h2>
                        </div>
                        <div class="body">
                            <form  method="post" method="post">
                                <div class="row clearfix">
                                    <div class="col-sm-6 ">
                                        <div class="form-group">
                                            <select class="form-control show-tick" name="pid" >
                                            <option value="">- Patient ID -</option>
                                            <?php 
                                            $result4= mysqli_query($conn,"SELECT * FROM hospital.admitpatients");
                                            while($row4=mysqli_fetch_assoc($result4)){
                                                echo"<option value='".$row4['pid']." '>".$row4['pid']."</option>";
                                                }
                                            ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary" name="Discharge">Discharge</button>
                            </form>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- <div class="row clearfix">
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
                                            <th>Patients</th>
                                            <th>Adress</th>
                                            <th>Admit Date</th>
                                            <th>Priority</th>
                                            <th>Progress</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><span>John</span></td>
                                            <td><span class="text-info">70 Bowman St. South Windsor, CT 06074</span></td>
                                            <td>Sept 13, 2017</td>

                                            <td><span class="badge badge-danger">HIGH</span></td>
                                           <td><div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"> <span class="sr-only">40% Complete</span> </div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-danger">New Admit</span></td>
                                        </tr>
                                        <tr>
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
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="tab-content padding-0">
                        <div class="tab-pane active" id="Basic">
                            <div class="card">
                                <div class="header">
                                    <h6>Report Update</h6>
                                    <form action="#" method="post">
                                    <ul class="header-dropdown">
                                        <div class="col-sm-13">
                                            <li>
                                                <div class="form-group">
                                                    <select class="form-control show-tick" name="pid" >
                                                    <option value="">- Patient ID -</option>
                                                    <?php 
                                                    $result4= mysqli_query($conn,"SELECT * FROM hospital.admitpatients");
                                                    while($row4=mysqli_fetch_assoc($result4)){
                                                        echo"<option value='".$row4['pid']." '>".$row4['pid']."</option>";
                                                        }
                                                    ?>
                                                    </select>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="action">
                                                        <button type="submit" class="btn btn-sm -m2 btn-outline-secondary  js-sweetalert" title="Edit" name="Edit">Edit</button>
                                                </div>
                                            </li>
                                        </div>
                                    </ul></form>
                                </div>
        

                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Patient ID" name="pid"  disabled>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Patient Name"name="pname" disabled>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Patient Email" name="email"disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-4 ">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Refer Doctor" name="refDoc" disabled>
                                            </div>
                                        </div>
                                         <div class="col-sm-2 ">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Patient Height" name="height" disabled>
                                            </div>
                                         </div>
                                         <div class="col-sm-2 ">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Patient Weight" name="weight" disabled >
                                            </div>
                                         </div>
                                         <div class="col-sm-2 ">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Age" name="age" disabled>
                                            </div>
                                         </div>
                                        <div class="col-sm-2 ">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Admit Date" name="adate" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="header">
                                        <h2>Admit Details</h2>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-4 ">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class=" icon-direction"></i></span>
                                                    </div>
                                                    <select class="form-control show-tick" name="ward" id="ward" >
                                                        <option value="" selected="selected">- Ward -</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 ">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class=" fa fa-tasks"></i></span>
                                                    </div>
                                                    <select class="form-control show-tick" name="room" id="room">
                                                        <option value="" selected="selected">- Room -</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 ">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class=" icon-list"></i></span>
                                                    </div>
                                                    <select class="form-control show-tick" name="bed" id="bed">
                                                        <option value="" selected="selected">- Bed Number -</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 ">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class=" icon-screen-tablet"></i></span>
                                                    </div>
                                                    <select class="form-control show-tick" name="priority" >
                                                        <option value="">- Priority -</option>
                                                        <option value="high">HIGH</option>
                                                        <option value="medium">MEDIUM</option>
                                                        <option value="low">LOW</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 ">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="  icon-graph"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Progress(1-100)" name="progress">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 ">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class=" icon-tag"></i></span>
                                                    </div>
                                                    <select class="form-control show-tick" name="status" >
                                                        <option value="">- Status -</option>
                                                        <option value="new admit">NEW ADMIT</option>
                                                        <option value="under observ">UNDER OBSERV</option>
                                                        <option value="discharge">DISCHARGE</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 ">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="icon-drop"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Blood Presure" name="bp">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 ">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="icon-heart"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Heart Rate" name="hrate">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 ">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="wi wi-thermometer"></i></span>
                                                    </div>
                                                    <input type="number" class="form-control" placeholder="Temperature" name="temperature">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary">Update</button> &nbsp;&nbsp;
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="Account">
                            <div class="card">
                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12">
                                            <h6>Account Security</h6>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="Your Name" disabled placeholder="Username" name="user">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" value="Your Email" disabled placeholder="Email" name="email">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Phone Number" name="phno">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <h6>Change Password</h6>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Current Password">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="New Password">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Confirm New Password">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary">Update</button> &nbsp;&nbsp;
                                    <button class="btn btn-default">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
<?php
  include("include/doctor-footer.php");
    if(isset($_POST['Admit']))
        {
            if(isset($_POST['pid']) && isset($_POST['refDoc']))
            {
                $pid=$_POST['pid'];$doc=$_POST['refDoc'];

                $resultadmit=mysqli_query($conn,"INSERT INTO `hospital`.`admitpatients` (`pid`, `refDocID`) VALUES ('$pid', '$doc')");
                if($resultadmit)
                {
                    echo"<script>window.alert('Successfull');</script>";
                }else echo"<script>window.alert('Error Occury');</script>";
            }else echo"<script>window.alert('Enter Data Properly');</script>";
        }

  ?>