<?php
  include("include/patient-header.php");
  ?>
<!--MAIN Content-->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Update Profile <small>Basic Information </small> </h2>
                        </div>
                        <form action="#" method="post">
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Patient Name" name="pname">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Contact Number"name="cno">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <input type="date" class="form-control" placeholder="Birth Date" name="bdate">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Age" name="age">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Height" name="height">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Weight" name="weight">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <select class="form-control show-tick" name="sex">
                                            <option value="">- Gender -</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
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
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group m-t-20">
                                        <textarea rows="2" class="form-control" placeholder="Current Address" name="address"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group m-t-20">
                                        <textarea rows="2" class="form-control" placeholder="Permant Address" name="paddress"></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary" name="Submit">Submit</button>
                                    <button type="reset" class="btn btn-outline-secondary">Clear</button>
                                </div>

                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
<?php
  include("include/patient-footer.php");

  if(isset($_POST['Submit']))
    {
        if(isset($_POST['pname']) && isset($_POST['cno']) && isset($_POST['bdate']) && isset($_POST['age']) && isset($_POST['height']) && isset($_POST['weight']) && isset($_POST['sex']) && isset($_POST['bgrup']) && isset($_POST['address']) && isset($_POST['paddress']))
        {
            $pname=$_POST['pname'];
            $cno=$_POST['cno'];
          
            $bdate=$_POST['bdate'];
            $age=$_POST['age'];
            $height=$_POST['height'];
            $weight=$_POST['weight'];
            $sex=$_POST['sex'];
            $bgrup=$_POST['bgrup'];
            $address=$_POST['address'];
            $paddress=$_POST['paddress'];

            $update=mysqli_query($conn,"UPDATE `hospital`.`patient` SET `name` = '$pname', `contactNo` = '$cno', `bdate` = '$bdate', `age` = '$age', `gender` = '$sex', `weight` = '$weight', `height` = '$height', `paddress` = '$paddress', `caddress` = '$address', `bloodType` = '$bgrup' WHERE (`email` = '$Email')");
            if($update){
            echo"<script>window.alert('Successfully');</script>"; 
           }else echo"<script>window.alert('Error Occur');</script>";
        }else echo"<script>window.alert('Enter Data properly');</script>";
    }
    

  ?>