<?php
  include("include/doctor-header.php");


  if(isset($_POST['Show5']))
    {
        if(isset($_POST['pid']))
        {
            $Pid = $_POST["pid"];
            $sql1 = "SELECT * FROM hospital.prescribedmedication where pid='$Pid'";
            $result1 = mysqli_query($conn, $sql1);
            if (mysqli_num_rows($result1) > 0) 
            {
            echo"<div class='row clearfix'>
            <div class='col-lg-12'>
                <div class='card'>
                    <div class='header'>
                        <h2>Curent Priscribed Medicine<small>All Current Medication Details</small> </h2>
                    </div>
                    <div class='body'>
                        <table class='table table-bordered table-striped table-hover dataTable js-exportable'>
                                <thead class='thead-light'>
                                    <tr>
                                        <th>Medicine Name</th>
                                        <th>Content</th>
                                        <th>Referal Doctor  Id</th>
                                        <th>Quantity</th>
                                        <th>Dose Time</th>
                                        <th>Dose Size</th>
                                        <th>Instruction</th>
                                    </tr>
                                </thead>
                                <tbody>";
                                while($row1=mysqli_fetch_assoc($result1))
                                {
                                    echo"<tr>
                                        <td>".$row1['medName']."</td>
                                        <td>".$row1['containt']."</td>
                                        <td>".$row1['referralDocID']."</td>
                                        <td>".$row1['quantity']."</td>
                                        <td>".$row1['dosetime']."</td>
                                        <td>".$row1['dosesize']."</td>
                                        <td>".$row1['instruction']."</td>
                                    </tr>";
                                }
                                echo"</tbody>
                            </table>
                        </div>
                    </div>
            </div>
            </div>";

           }else echo"<script>window.alert('No Data Found With Given Invoice/Bill Number ');</script>"; 
        }else echo"<script>window.alert('Enter Valid patient id');</script>";   
    }

if(isset($_POST['Show6']))
    {
        if(isset($_POST['pid']))
        {
            $Pid = $_POST["pid"];
            $sql1 = "SELECT * FROM hospital.permenantmedication where pid='$Pid'";
            $result2 = mysqli_query($conn, $sql1);
            if (mysqli_num_rows($result2) > 0) 
            {
            echo"<div class='row clearfix'>
            <div class='col-lg-12'>
                <div class='card'>
                    <div class='header'>
                        <h2>Medication for Chronic<small>All Current Medication Details</small> </h2>
                    </div>
                    <div class='body'>
                        <table class='table table-bordered table-striped table-hover dataTable js-exportable'>
                                <thead class='thead-light'>
                                    <tr>
                                        <th>Medicine Name</th>
                                        <th>Content</th>
                                        <th>Referal Doctor  Id</th>
                                        <th>Quantity</th>
                                        <th>Dose Time</th>
                                        <th>Dose Size</th>
                                        <th>Instruction</th>
                                    </tr>
                                </thead>
                                <tbody>";
                                while($row7=mysqli_fetch_assoc($result2))
                                {
                                    echo"<tr>
                                        <td>".$row7['Medname']."</td>
                                        <td>".$row7['Content']."</td>
                                        <td>".$row7['referalDoctor']."</td>
                                        <td>".$row7['Quantity']."</td>
                                        <td>".$row7['dosetime']."</td>
                                        <td>".$row7['dosesize']."</td>
                                        <td>".$row7['instruction']."</td>
                                    </tr>";
                                }
                                echo"</tbody>
                            </table>
                        </div>
                    </div>
            </div>
            </div>";

           }else echo"<script>window.alert('No Data Found  ');</script>"; 
        }else echo"<script>window.alert('Enter Valid patient id');</script>";   
    }

   

  ?>
<!--MAIN Content-->
        <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>View Proscription </h2>
                                    <ul class="header-dropdown">
                                        <div class="col-sm-13">
                                            <form action="#" method="post">
                                            <li>
                                                <div class="form-group">
                                                    
                                                        <select class="form-control show-tick" name="pid" >
                                                            <option value="">- Choose Patient -</option>
                                                            <?php 
                                                            $result4= mysqli_query($conn,"SELECT hospital.appointment.pid,name FROM hospital.appointment,hospital.patient where hospital.appointment.pid=hospital.patient.pid ");
                                                            while($row4=mysqli_fetch_assoc($result4)){
                                                                echo"<option value='".$row4['pid']." '>".$row4['name']."</option>";
                                                                }
                                                            ?>
                                                        </select>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="action">
                                                        <button type="submit" class="btn btn-sm -m2 btn-outline-secondary  js-sweetalert" title="Edit" name="Show5">Show Current</button>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="action">

                                                        <button type="submit" class="btn btn-sm -m2 btn-outline-secondary  js-sweetalert" title="Edit" name="Show6">Show Chronic</button>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="action">
                                                        <button type="submit" class="btn btn-sm -m2 btn-outline-secondary  js-sweetalert" title="Clear Current" name="Clearc">Clear Current</button>
                                                </div>
                                            </li>
                                            </form>
                                        </div>
                                </ul>
                        </div>
                    </div>
                </div>  
        </div>
        
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Priscribed Medicine<small> Details</small> </h2>
                    </div>
                    <div class="body">
                        <form action="#" method="post">
                        <div class="row clearfix">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                                    
                                        <select class="form-control show-tick" name="pid" >
                                            <option value="">- Choose Patient -</option>
                                            <?php 
                                            $result4= mysqli_query($conn,"SELECT hospital.appointment.pid,name FROM hospital.appointment,hospital.patient where hospital.appointment.pid=hospital.patient.pid and hospital.appointment.status='Waiting'");
                                            while($row4=mysqli_fetch_assoc($result4)){
                                                echo"<option value='".$row4['pid']." '>".$row4['name']."</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Medicine Name" name="mname">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Content" name="content">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Quantity" name="quantity">
                                    </div>
                                    <div class="form-group">
                                        <label class="fancy-checkbox">
                                            <input type="checkbox" name="check" value="Morning" required data-parsley-errors-container="#error-checkbox">
                                            <span>Morning</span>
                                        </label>
                                        <label class="fancy-checkbox">
                                            <input type="checkbox" name="check" value="Afternoon">
                                            <span>Afternoon</span>
                                        </label>
                                        <label class="fancy-checkbox">
                                            <input type="checkbox" name="check" value="Evening">
                                            <span>Evening</span>
                                        </label>
                                        <label class="fancy-checkbox">
                                            <input type="checkbox" name="check" value="Day_After">
                                            <span>Day After</span>
                                        </label>
                                        <label class="fancy-checkbox">
                                            <input type="checkbox" name="check" value="If_Pain">
                                            <span>If Pain</span>
                                        </label>
                                        <p id="error-checkbox"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Dose Size" name="dsize">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Instruction" name="instruction">
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-info" name="Add">Add</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>

        


      <!--   <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Curent Priscribed Medicine<small>All Current Medication Details</small> </h2>
                    </div>
                    <ul class="header-dropdown">


                                <div class="action">
                                    <button type="button" class="btn btn-sm -m2 btn-outline-secondary  js-sweetalert" title="Clear Current">Clear Current</button>
                                </div>


                    </ul>
                    <div class="body">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Medicine Name</th>
                                        <th>Content</th>
                                        <th>Referal Doctor</th>
                                        <th>Quantity</th>
                                        <th>Dose Time</th>
                                        <th>Dose Size</th>
                                        <th>Instruction</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>Morning-Evening</td>
                                        <td>half tab</td>
                                        <td>adssdsad</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>Afternoon</td>
                                        <td>full tab</td>
                                        <td>adssdsad</td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>Morning-Afternoon-Evening</td>
                                        <td>20ml</td>
                                        <td>adssdsad</td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>Morning-Afternoon-Evening</td>
                                        <td>1drop</td>
                                        <td>adssdsad</td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Medication for Chronic<small>All Current Medication Details</small> </h2>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Medicine Name</th>
                                        <th>Content</th>
                                        <th>Referal Doctor</th>
                                        <th>Quantity</th>
                                        <th>Dose Time</th>
                                        <th>Dose Size</th>
                                        <th>Instruction</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>Morning-Evening</td>
                                        <td>half tab</td>
                                        <td>adssdsad</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>Afternoon</td>
                                        <td>full tab</td>
                                        <td>adssdsad</td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>Morning-Afternoon-Evening</td>
                                        <td>20ml</td>
                                        <td>adssdsad</td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>Morning-Afternoon-Evening</td>
                                        <td>1drop</td>
                                        <td>adssdsad</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> -->
        <!-- <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Medication History<small>All Previous Medication History</small> </h2>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Medicine Name</th>
                                        <th>Content</th>
                                        <th>Referal Doctor</th>
                                        <th>Quantity</th>
                                        <th>Dose Time</th>
                                        <th>Dose Size</th>
                                        <th>Instruction</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>Morning-Evening</td>
                                        <td>half tab</td>
                                        <td>adssdsad</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>Afternoon</td>
                                        <td>full tab</td>
                                        <td>adssdsad</td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>Morning-Afternoon-Evening</td>
                                        <td>20ml</td>
                                        <td>adssdsad</td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>Morning-Afternoon-Evening</td>
                                        <td>1drop</td>
                                        <td>adssdsad</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> -->
<?php
  include("include/doctor-footer.php");

    if(isset($_POST['Clearc']))
       {
        if(isset($_POST['pid']))
            {
                $Pid = $_POST["pid"];
                $sql1 = "DELETE  FROM hospital.prescribedmedication where pid='$Pid'";
                $result1 = mysqli_query($conn, $sql1);
                if($result1)
                {
                    echo"<script>window.alert('Clear Successfully');</script>";
                }else echo"<script>window.alert('Error Occur');</script>";
            }else echo"<script>window.alert('Select Valid patient id');</script>";
       }

    if(isset($_POST['Add']))
    {

        if(isset($_POST['pid']) && isset($_POST['mname']) && isset($_POST['content']) && isset($_POST['quantity']) && isset($_POST['dsize'])  && isset($_POST['instruction'])  && isset($_POST['check']))
            {
                $pid=$_POST['pid'];
                $refdoc=$_SESSION['id'];
                $mname=$_POST['mname'];
                $content=$_POST['content'];
                $quantity=$_POST['quantity'];
                $dsize=$_POST['dsize'];
                $instruction=$_POST['instruction'];
                $check=$_POST['check'];

                $resultadd=mysqli_query($conn,"INSERT INTO `hospital`.`prescribedmedication` (`pid`, `referralDocID`, `medName`, `containt`, `quantity`, `dosetime`, `dosesize`, `instruction`) VALUES ('$pid', '$refdoc', '$mname', '$content', '$quantity', '$check', '$dsize', '$instruction')");
                if($resultadd)
                {
                    echo"<script>window.alert('add Successfully');</script>";
                }else echo"<script>window.alert('Error Occur');</script>";
            }else echo"<script>window.alert('Enter Data Properly');</script>";
    }

  ?>
