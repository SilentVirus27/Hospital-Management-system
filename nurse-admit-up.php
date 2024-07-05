<?php
  include("include/nurse-header.php");
  ?>
<!--MAIN Content-->
            <div class="row clearfix">
                   <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="tab-content padding-0">
                        <div class="tab-pane active" id="Basic">
                            <div class="card">
                                <div class="body">
                                    <form action="#" method="post">
                                    <div class="row clearfix">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <select class="form-control show-tick" name="pid" >
                                                            <option value="">- Choose Patient -</option>
                                                            <?php 
                                                            $result4= mysqli_query($conn,"SELECT * FROM hospital.admitpatients;");
                                                            while($row4=mysqli_fetch_assoc($result4)){
                                                                echo"<option value='".$row4['pid']." '>".$row4['pid']."</option>";
                                                                }
                                                            ?>
                                                    </select>
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
                                                            <span class="input-group-text"><i class="wi-thermometer"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Temperature" name="temperature">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 ">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="icon-notebook"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Discription" name="disc">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="Update">Update</button> &nbsp;&nbsp;
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php
  include("include/nurse-footer.php");

  if(isset($_POST['Update']))
    {
        if(isset($_POST["pid"]) && isset($_POST["ward"]) && isset($_POST["room"]) && isset($_POST["bed"]) && isset($_POST["priority"]) && isset($_POST["progress"]) && isset($_POST["status"]) && isset($_POST["bp"]) && isset($_POST["hrate"]) && isset($_POST["temperature"]) && isset($_POST["disc"]))
        {
            
            $pid = $_POST["pid"];
            $ward = $_POST["ward"];
            $room = $_POST["room"];
            $bed = $_POST["bed"];
            $priority = $_POST["priority"];
            $progress = $_POST["progress"];
            $status = $_POST["status"];
            $bp = $_POST["bp"];
            $hrate = $_POST["hrate"];
            $temperature = $_POST["temperature"];
            $disc = $_POST["disc"];
            
            $sql= "UPDATE `hospital`.`admitpatients` SET `ward` = '$ward', `room` = '$room', `bedNumber` = '$bed', `admitDiscription` = '$disc', `bloodpressure` = '$bp', `heartrate` = '$hrate', `temprature` = '$temperature', `status` = '$status', `priority` = '$priority', `progress` = '$progress' WHERE (`apid` = '$pid')";
            $insert = mysqli_query($conn,$sql);
            if($insert)
            {
                echo"<script>window.alert('Successfully');</script>";
            }else echo"<script>window.alert('Please Retry');</script>";

        }else echo"<script>window.alert('Please Fill Information Properly');</script>";
    }

  ?>