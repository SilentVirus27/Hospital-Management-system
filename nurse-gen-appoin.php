<?php
  include("include/nurse-header.php");
  ?>
<!--MAIN Content-->
             <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="header">
                            <h2>Appoinments</h2>
                            <ul class="header-dropdown">
                                <div class="col-sm-13">
                                    <form action="#" method="post"> 
                                        <li>
                                            <div class="form-group">
                                                <select class="form-control show-tick" name="pid" >
                                                    <option value="">- Patient Id -</option>
                                                    <?php 
                                                    $result4= mysqli_query($conn,"SELECT * FROM hospital.appointment where status='Waiting' and requestedServiceId='15'");
                                                    while($row=mysqli_fetch_assoc($result4)){
                                                        echo"<option value='".$row['apid']." '>".$row['apid']."</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="action">
                                                    <button type="submit" class="btn btn-sm -m2 btn-outline-secondary  js-sweetalert" title="Edit" name="Mark">Mark Diagnosed</button>
                                            </div>
                                        </li>
                                    </form>
                                </div>
                            </ul>
                        </div>

                        <div class="body">
                            <button type="button" class="btn  btn-simple btn-sm btn-outline-warning btn-filter" data-target="all">All</button>
                            <button type="button" class="btn  btn-simple btn-sm btn-outline-secondary btn-filter" data-target="Waiting">Waiting</button>
                            <button type="button" class="btn  btn-simple btn-sm btn-outline-info btn-filter" data-target="Diagnosed">Diagnosed</button>

                            <div class="table-responsive m-t-20">
                                <table class="table table-filter table-hover m-b-0 ">
                                    <tbody>
                                        <tr>
                                            <th>Appoinment ID</th>
                                            <th>Patient ID</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Status</th>
                                            <th>Attend Time</th>
                                        </tr>

                                        <?php 
                                        $result6= mysqli_query($conn,"SELECT * FROM hospital.appointment where requestedServiceId='15'");
                                        while($result6row=mysqli_fetch_assoc($result6))
                                        {
                                            if($result6row['status']=='Waiting')
                                            {
                                                echo"<tr data-status='Waiting'>";
                                                    echo"<td>". $result6row['apid'] ."</td>";
                                                    echo"<td>". $result6row['pid'] ."</td>";
                                                    echo"<td>". $result6row['date'] ."</td>";
                                                    echo"<td>". $result6row['approxScheduledTime'] ."</td>";
                                                    echo"<td><span class='badge badge-outline-secondary' >". $result6row['status'] ."</span></td>";
                                                    echo"<td>". $result6row['attendTime'] ."</td>";
                                                echo"</tr>";
                                            }else{
                                                echo"<tr data-status='Waiting'>";
                                                    echo"<td>". $result6row['apid'] ."</td>";
                                                    echo"<td>". $result6row['pid'] ."</td>";
                                                    echo"<td>". $result6row['date'] ."</td>";
                                                    echo"<td>". $result6row['approxScheduledTime'] ."</td>";
                                                    echo"<td><span class='badge badge-outline-secondary' >". $result6row['status'] ."</span></td>";
                                                    echo"<td>". $result6row['attendTime'] ."</td>";
                                                echo"</tr>";
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php
  include("include/nurse-footer.php");

  if(isset($_POST['Mark']))
    {
        if(isset($_POST['pid']))
        {
            $apid=$_POST['pid'];
           $result5= mysqli_query($conn,"UPDATE `hospital`.`appointment` SET `status` = 'Diagnosed' WHERE (`apid` = '$apid')") or die("An Error Occur");
           if($result5){
            echo"<script>window.alert('Successfully');</script>"; 
           }else echo"<script>window.alert('Error');</script>";

        }else echo"<script>window.alert('select patient id');</script>";
    }
  ?>