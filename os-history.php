<?php
  include("include/os-header.php");

   if(isset($_POST['View']))
    {
        if(isset($_POST['pid']))
        {
            $Pid = $_POST["pid"];
            $sql1 = "SELECT * FROM hospital.casebook where pid='$Pid' ;";
            $result = mysqli_query($conn, $sql1);
            if (mysqli_num_rows($result) > 0) 
            {
                $row=mysqli_fetch_assoc($result);
                echo"<div class='row clealfix'>";
                    echo"<div class='col-lg-12 col-md-12'>";
                        echo"<div class='card'>";
                            echo"<div class='header'>";
                                echo"<h2>Casebook</h2>";
                            echo"</div>";
                            echo"<div class='body'>";
                                echo"<ul class='list-group list-group-flush'>";
                                echo"<li class='list-group-item'>Ref Doctor : ".$row['refDoc']."</li>";
                                echo"<li class='list-group-item'>Allergy Id : ".$row['allergy']."</li>";
                                echo"<li class='list-group-item'>Vaccination : ".$row['immunisation']."</li>";
                                echo"<li class='list-group-item'>Genetic Diseases : ".$row['geneticDisease']."</li>";
                                echo"<li class='list-group-item'>Current Diseases : ".$row['cTreatingDisease']."</li>";
                                echo"<li class='list-group-item'>Health Effect : ".$row['ctdHealthEffect']."</li>";
                                echo"<li class='list-group-item'>Sergical History : ".$row['surgicalHisrory']."</li>";
                                echo"<li class='list-group-item'>Social History : ".$row['social']."</li>";
                                echo"<li class='list-group-item'>Mental History : ".$row['mentalDisease']."</li>";
                                echo"<li class='list-group-item'>NewBorn Complication : ".$row['newbornComplications']."</li>";
                                echo"<li class='list-group-item'>Pregnancy/Period Details : ".$row['pregnancyPeriodDetails']."</li>";
                                echo"</ul>";
                            echo"</div>";
                        echo"</div>";
                    echo"</div>";
                echo"</div>";
            }else echo"<script>window.alert('No Data Found');</script>";
        }else echo"<script>window.alert('Enter Valid Patient ID');</script>";
    }
?>
                            
<!--MAIN Content-->
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Enter ID To View Casebook</h2>
                        </div>
                        <div class="body">
                            <form id="basic-form" action="#" method="post" novalidate>
                                <div class="form-group">
                                    <label><small>Patient Id</small></label>
                                    <input type="text" class="form-control" required name="pid">
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary" name="View">View </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<?php
  include("include/os-footer.php");
  ?>