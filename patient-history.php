<?php
  include("include/patient-header.php");
  ?>
<!--MAIN Content-->
            <div class="row clealfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="header">
                            <b><U><h5>Casebook</h5></U></b>
                        </div>
                        <div class="body">
                            

                                <?php 
                                $result7= mysqli_query($conn,"SELECT * FROM hospital.casebook where pid='$Pid'");
                                while($row7=mysqli_fetch_assoc($result7)){
                                    echo"
                                <ul class='list-group list-group-flush'>
                                <li class='list-group-item'><b>Date :</b> ".$row7['date']." <br>
                                <b>Ref Doctor :</b> ".$row7['refDoc']." <br>
                                <b>Allergy :</b> ".$row7['allergy']."<br>
                                <b>Allergy Medication :</b> ".$row7['almedication']."<br>
                                <b>Vaccination :</b> ".$row7['immunisation']."<br>
                                <b>Genetic Diseases :</b> ".$row7['geneticDisease']."<br>
                                <b>Current Diseases :</b> ".$row7['cTreatingDisease']."<br>
                                <b>Health Effect :</b> ".$row7['ctdHealthEffect']."<br>
                                <b>Sergical History :</b> ".$row7['surgicalHisrory']."<br>
                                <b>Social History :</b> ".$row7['social']."<br>
                                <b>Mental History :</b> ".$row7['mentalDisease']."<br>
                                <b>NewBorn Complication :</b> ".$row7['newbornComplications']."<br>
                                <b>Pregnancy/Period Details :</b> ".$row7['pregnancyPeriodDetails']."</li>
                                </ul>
                                
                                    ";
                                    }
                                ?>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Update History</h2>
                        </div>
                        <div class="body">
                            <form action="#" method="post">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Ref Doctor" name="refdoc">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Allergy" name="allergy">
                                    </div>
                                     <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Allergy Medication" name="allergymed">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Vaccination" name="vaccination">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Genetic Diseases" name="gdiseas">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Current Diseases" name="cdiseas">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Health Effect" name="heffect">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Sergical History" name="sergicalh">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Social History" name="socialh">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Mental History" name="mentalh">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="NewBorn Complication" name="nborn">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Pregnancy/Period Details" name="ppdetail">
                                    </div>
                                    
                                    <div class="form-group">
                                        <select class="form-control show-tick" name="tid" width=300 style="width: 350px" size="4" multiple >
                                            <option value="">- Choose Symptoms -</option>
                                            <?php 
                                            $result5= mysqli_query($conn,"SELECT * FROM hospital.servicetest");
                                            while($row5=mysqli_fetch_assoc($result5)){
                                                echo"<option value='".$row5['stid']." '>".$row5['name']."</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success" name="Update3">Update</button> &nbsp;&nbsp;
                        </form>
                        </div>
                    </div>
                </div>
            </div>
<?php
  include("include/patient-footer.php");

   if(isset($_POST['Update3']))
    {
        if(isset($_POST['refdoc']) && isset($_POST['allergy']) && isset($_POST['vaccination']) && isset($_POST['gdiseas']) && isset($_POST['cdiseas']) && isset($_POST['heffect']) && isset($_POST['sergicalh']) && isset($_POST['socialh']) && isset($_POST['mentalh']) && isset($_POST['nborn']) && isset($_POST['ppdetail']) && isset($_POST['allergymed']) && isset($_POST['tid']))
        {
            $refdoc=$_POST['refdoc'];
            $tid=$_POST['tid'];
            $allergy=$_POST['allergy'];
            $allergymed=$_POST['allergymed'];
            $vaccination=$_POST['vaccination'];
            $gdiseas=$_POST['gdiseas'];
            $cdiseas=$_POST['cdiseas'];
            $heffect=$_POST['heffect'];
            $sergicalh=$_POST['sergicalh'];
            $socialh=$_POST['socialh'];
            $mentalh=$_POST['mentalh'];
            $nborn=$_POST['nborn'];
            $ppdetail=$_POST['ppdetail'];
            
            $book=mysqli_query($conn,"INSERT INTO `hospital`.`casebook` (`pid`,`tid`, `allergy`, `refDoc`, `almedication`, `immunisation`, `cTreatingDisease`, `ctdHealthEffect`, `surgicalHisrory`, `geneticDisease`, `social`, `mentalDisease`, `newbornComplications`, `pregnancyPeriodDetails`) VALUES ('$Pid',$tid, '$allergy', '$refdoc', '$allergymed', '$vaccination', '$cdiseas', '$heffect', '$sergicalh', '$gdiseas', '$socialh', '$mentalh', '$nborn', '$ppdetail')");
            if($book){
            echo"<script>window.alert('Successfully');</script>"; 
           }else echo"<script>window.alert('Error Occur');</script>";
        }else echo"<script>window.alert('Enter Data properly');</script>";
    }

  ?>