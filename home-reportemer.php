<?php
    include("include/home-header.php");
?>
<!--MAIN Content-->
       <div class="container-fluid">
            <div class="vertical-align-middle ">
                <div class="row clearfix">
                    <div class="row-lg-3 col-md-12 col-sm-12">
                        <div class="card">
                           <div class="body text-center">
                               <!--blank space top-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Emergency Contact</h2>
                        </div>
                        <div class="body">
                            <li class="list-group-item">
                                    <i class="icon-call-out"></i><span>&nbsp;&nbsp;&nbsp;Hospital Phone : +91 6548923465</span>
                                </li>
                                <li class="list-group-item">
                                    <i class="icon-call-out"></i><span>&nbsp;&nbsp;&nbsp;Ambulance Phone1 : +91 9876543210
                                </li>
                                <li class="list-group-item">
                                    <i class="icon-call-out"></i><span>&nbsp;&nbsp;&nbsp;Ambulance Phone2 : +91 1234567891
                                </li>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Emergency Report</h2>
                            <small>Fill by Ambulance Staff</small>
                        </div>
                        <form action="#" method="post">
                            <div class="body">
                                <div class="form-group">
                                        <label>Check That Necessory</label>
                                        <br/>
                                        <label class="fancy-checkbox">
                                            <input type="checkbox" name="checkbox1" value="1" required data-parsley-errors-container="#error-checkbox" checked="true">
                                            <span>Emergency Staff</span>
                                        </label>
                                        <label class="fancy-checkbox">
                                            <input type="checkbox" name="checkbox2" value="1">
                                            <span>Ready Operating Theater</span>
                                        </label>
                                        <label class="fancy-checkbox">
                                            <input type="checkbox" name="checkbox3" value="1">
                                            <span>Ready ICU</span>
                                        </label>
                                        <p id="error-checkbox"></p>
                                    </div>
                                <hr>
                                <div class="col-sm-12">
                                        <div class="form-group">
                                            <label><small>Enter Your ID Number</small></label>
                                            <input type="text" class="form-control" placeholder="id" name="id">
                                        </div>
                                </div>
                                <div class="col-sm-12">
                                        <div class="form-group">
                                            <label><small>Some details About Emergency</small></label>
                                            <input type="text" class="form-control" placeholder="Remark" name="remark">
                                        </div>
                                </div>
                                <div class="col-sm-4">
                                          <div class="form-group">
                                            <button type="submit" class="btn btn-success " data-type="success" name="Submit">Report</button>
                                          </div>
                                </div>                               
                            </div>
                        </div>
                    </form>
                </div>                
            </div>
        </div>
<?php
    include("include/home-footer.php");


    if(isset($_POST['Submit']))
    {
        $check1 = $_POST["checkbox1"];
        if(isset($_POST['checkbox2'])){$check2 = $_POST["checkbox2"];}else $check2 =0;
        if(isset($_POST['checkbox3'])){$check3 = $_POST["checkbox3"];}else $check3 =0;
        $staffid= $_POST["id"];
        $remark= $_POST["remark"];

        $result = mysqli_query($conn,"SELECT * FROM hospital.hospitalstaff where hsid='$staffid';");

        if(mysqli_num_rows($result)!=0)
        {
            $sql= "INSERT INTO `hospital`.`emergrncy` (`reportingStaffId`, `esFlag`, `otFlag`, `icuFlag`, `remark`) VALUES ('$staffid', '$check1', '$check2', '$check3', '$remark')";
            $insert = mysqli_query($conn,$sql);
            if($insert)
            {
                echo"<script>window.alert('Reported Successfully');</script>";
            }else echo"<script>window.alert('An Error occur');</script>";
        }else echo"<script>window.alert('You are Not from Hospital Staff To Report');</script>";
    }
?>