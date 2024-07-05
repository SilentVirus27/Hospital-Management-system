<?php
  include("include/lab-header.php");
  ?>
<!--MAIN Content-->
            <div class="row clearfix">
                   <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="tab-content padding-0">
                        <div class="tab-pane active" id="Basic">
                            <div class="card">
                                <div class="header">
                                    <h6>Report Update</h6>
                                    <!-- <ul class="header-dropdown">
                                        <div class="col-sm-13">
                                            <li>
                                                <div class="form-group">
                                                    <select class="form-control show-tick" name="services" >
                                                        <option value="">- Test Id -</option>
                                                        <option value="Aid">1325</option>
                                                        <option value="Aid">1542</option>
                                                        <option value="Aid">8454</option>
                                                        <option value="Aid">9547</option>
                                                    </select>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="action">
                                                        <button type="button" class="btn btn-sm -m2 btn-outline-secondary  js-sweetalert" title="Edit">SUBMIT REPORT</button>&nbsp;
                                                        <button type="button" class="btn btn-sm -m2 btn-outline-info  js-sweetalert" title="Status"> SAMPLE RECEIVED </button>
                                                        <button type="button" class="btn btn-sm -m2 btn-outline-success  js-sweetalert" title="Status"> UNDER OBSERV </button>
                                                </div>
                                            </li>
                                        </div>
                                    </ul> -->
                                </div>
                                
                                <form action="#" method="post">
                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                
                                                <select class="form-control show-tick" name="tid" >
                                                    <option value="">- Select Test Id To Update -</option>
                                                    <?php 
                                                    $result4= mysqli_query($conn,"SELECT * FROM hospital.tests;");
                                                    while($row4=mysqli_fetch_assoc($result4)){
                                                        echo"<option value='".$row4['tid']." '>".$row4['tid']."</option>";
                                                        }
                                                    ?>  
                                                </select>
                                            </div>
                                        </div>
                                       
                                        <div class="col-sm-4 ">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class=" icon-pencil"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Expected/Standard Value" name="std">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 ">
                                            <div class="form-group">
                                                 <div class="input-group">
                                                    
                                                    <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class=" icon-note"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="current/result value" name="cur">
                                                 </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 ">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class=" icon-list"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Details" name="awd">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 ">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class=" icon-screen-tablet"></i></span>
                                                    </div>
                                                    <select class="form-control show-tick" name="rmk" >
                                                        <option value="">- Remark -</option>
                                                        <option value="Positive">Positive</option>
                                                        <option value="Negative">Negative</option>
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
                                                    <select class="form-control show-tick" name="sts" >
                                                        <option value="">- Status -</option>
                                                        <option value="Under Processing">Under Processing</option>
                                                        <option value="Completed">Completed</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="Updatet">Update</button> &nbsp;&nbsp;
                                </div>
                            </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
<?php
  include("include/lab-footer.php");

if(isset($_POST['Updatet']))
    {
        if(isset($_POST['tid']) && isset($_POST['std']) && isset($_POST['cur']) && isset($_POST['awd']) && isset($_POST['rmk']) && isset($_POST['sts']))
        {
            $tid=$_POST['tid'];
            $std=$_POST['std'];
            $cur=$_POST['cur'];
            $awd=$_POST['awd'];
            $rmk=$_POST['rmk'];
            $sts=$_POST['sts'];

           $resultt= mysqli_query($conn,"UPDATE `hospital`.`tests` SET `status` = '$sts', `details` = '$awd', `result` = '$cur', `expectedrest` = '$std', `remark` = '$rmk' WHERE (`tid` = '$tid')");
           if($resultt){
            echo"<script>window.alert('Successfully');</script>"; 
           }else echo"<script>window.alert('Error');</script>";

        }else echo"<script>window.alert('select patient id');</script>";
    }

  ?>