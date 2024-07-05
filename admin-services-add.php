<?php
  include("include/admin-header.php");
  ?>
<!--MAIN Content-->
            <div class="row clearfix">
                <div class="col-md-6">
                    <div class="card">
                        <div class="body">
                            <form action="#" method="post">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12">
                                    <h6>Add New Service</h6>
                                    <div class="form-group">
                                        <label><small>Service Name</small></label>
                                        <input type="text" class="form-control"  placeholder="Service Name" name="sname">
                                    </div>
                                    <div class="form-group">
                                        <label><small>Service Discription</small></label>
                                        <input type="text" class="form-control"  placeholder="Service Discription" name="disc">
                                    </div>
                                    <div class="form-group">
                                        <label><small>Dealy Available Time </small></label>
                                        <input type="time" class="form-control" placeholder="Available Time" name="atime">
                                    </div>
                                    <div class="form-group">
                                        <label><small>Dealy End Time </small></label>
                                        <input type="time" class="form-control" placeholder="End Time" name="etime">
                                    </div>
                                    <div class="form-group">
                                        <label><small>Service Charge</small></label>
                                        <input type="text" class="form-control" placeholder="Fee" name="fee">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" name="Add">Add Service</button> &nbsp;&nbsp;
                        </form>
                        </div>
                    </div>
                </div>
               
            </div>
<?php
  include("include/admin-footer.php");

    if(isset($_POST['Add']))
        {
            if(isset($_POST["sname"])&& isset($_POST["atime"]) && isset($_POST["etime"]) && isset($_POST["fee"]) && isset($_POST["disc"]))
            {
                $sname=$_POST["sname"];
                $atime=$_POST["atime"];
                $etime=$_POST["etime"];
                $fee=$_POST["fee"];
                $disc=$_POST["disc"];
                
              
                $sql= "INSERT INTO `hospital`.`servicetest` (`name`, `availableStartTime`, `availableEndTime`, `serviceCharges`, `discription`) VALUES ('$sname', '$atime', '$etime', '$fee', '$disc');
";
                $insert = mysqli_query($conn,$sql);
                if($insert)
                {
                    echo"<script>window.alert('Successfully');</script>";
                }else echo"<script>window.alert('Please Retry');</script>";
            }else echo"<script>window.alert('Please Fill Information Properly');</script>";
        }



  ?>