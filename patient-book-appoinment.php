<?php
  include("include/patient-header.php");
  ?>
<!--MAIN Content-->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Book Appoinment <small>Fill Information </small> </h2>
                        </div>
                        <div class="body">
                            <form action="#" method="post">
                            <div class="row clearfix">

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <select class="form-control show-tick" name="doctor">
                                            <option value="">- Choose Doctor -</option>
                                            <?php 
                                            $result3= mysqli_query($conn,"SELECT * FROM hospital.hospitalstaff where doctorFlag='1'");
                                            while($row3=mysqli_fetch_assoc($result3)){
                                                echo"<option value='".$row3['hsid']." '>".$row3['name']."</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <select class="form-control show-tick" name="services" >
                                            <option value="">- Choose Services -</option>
                                            <?php 
                                            $result4= mysqli_query($conn,"SELECT * FROM hospital.servicetest");
                                            while($row4=mysqli_fetch_assoc($result4)){
                                                echo"<option value='".$row4['stid']." '>".$row4['name']."</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <input type="date" class="form-control" placeholder="Appoinment Date" name="apdate">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <input type="time" class="form-control" placeholder="Appoinment Date" name="time">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <select class="form-control show-tick" name="symptoms" width=300 style="width: 350px" size="4" multiple >
                                            <option value="">- Choose Symptoms -</option>
                                            <?php 
                                            $result5= mysqli_query($conn,"SELECT * FROM hospital.symptoms");
                                            while($row5=mysqli_fetch_assoc($result5)){
                                                echo"<option value='".$row5['sid']." '>".$row5['commonSymptoms']."</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group m-t-20">
                                        <textarea rows="2" class="form-control" placeholder="Other Discription" name="otherdis"></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary" name="Book">Book</button>&nbsp;&nbsp;&nbsp;
                                    <button type="reset" class="btn btn-outline-secondary">Clear</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
<?php
  include("include/patient-footer.php");


  if(isset($_POST['Book']))
    {
        if(isset($_POST['doctor']) && isset($_POST['services']) && isset($_POST['apdate']) && isset($_POST['time']) && isset($_POST['symptoms']) && isset($_POST['otherdis']))
        {
            $pid=$_SESSION['id'];
            $doctor=$_POST['doctor'];
            $services=$_POST['services'];
            $apdate=$_POST['apdate'];
            $time=$_POST['time'];
            $symptoms=$_POST['symptoms'];
            $otherdis=$_POST['otherdis'];

            $book=mysqli_query($conn,"INSERT INTO `hospital`.`appointment` (`pid`, `requestedDocId`, `requestedServiceId`, `symptomsId`, `disease`, `approxScheduledTime`, `date`, `status`, `discription`) VALUES ('$pid', ' $doctor', '$services', '$symptoms', '__', ' $time', ' $apdate', 'Waiting', '$otherdis')");
            if($book){
            echo"<script>window.alert('Successfully');</script>"; 
           }else echo"<script>window.alert('Error Occur');</script>";
        }else echo"<script>window.alert('Enter Data properly');</script>";
    }
  ?>