<?php
  include("include/doctor-header.php");
  ?>
<!--MAIN Content-->
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Priscribed Test<small> Details</small> </h2>
                    </div>
                    <div class="body">
                        <form action="#" method="post">
                        <div class="row clearfix">
                                <div class="col-lg-12 col-md-12">
                                    
                                        <div class="form-group">
                                            <select class="form-control show-tick" name="tname" >
                                                <option value="">- Choose Services -</option>
                                                <?php 
                                                $result4= mysqli_query($conn,"SELECT * FROM hospital.servicetest");
                                                while($row4=mysqli_fetch_assoc($result4)){
                                                    echo"<option value='".$row4['name']." '>".$row4['name']."</option>";
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    
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
                                </div>
                        </div>
                        <button type="submit" class="btn btn-info" name="Add">Add</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>View Test History </h2>
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
                                                        <button type="submit" class="btn btn-sm -m2 btn-outline-secondary  js-sweetalert" title="Edit" name="Show">Show</button>
                                                </div>
                                            </li>
                                            </form>
                                        </div>
                                </ul>
                        </div>
                    </div>
                </div>
                
        </div>
<!--             <div class="row clealfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Test Name Result Are As:</h2>
                            <ul class="header-dropdown">
                                <div class="col-sm-13">
                                    <li>
                                        <div class="form-group">
                                            <select class="form-control show-tick" name="services" >
                                                <option value="">- Test ID -</option>
                                                <option value="Aid">1325</option>
                                                <option value="Aid">1542</option>
                                                <option value="Aid">8454</option>
                                                <option value="Aid">9547</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="action">
                                                <button type="button" class="btn btn-sm -m2 btn-outline-secondary" title="Edit">View</button>&nbsp;
                                        </div>
                                    </li>
                                </div>
                            </ul>
                        </div>
                        <div class="body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">abc</li>
                                <li class="list-group-item">pqr</li>
                                <li class="list-group-item">xyz</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Test History<small>All Previous Test History</small> </h2>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Test Name</th>
                                        <th>Status</th>
                                        <th>Details</th>
                                        <th>Expected Result</th>
                                        <th>Test Result</th>
                                        <th>Remark</th>
                                        <th>Sample Date</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $result7= mysqli_query($conn,"SELECT * FROM hospital.tests,hospital.servicetest where hospital.tests.pid=hospital.servicetest.stid and pid='$Pid'");
                                        while($row7=mysqli_fetch_assoc($result7)){
                                        echo"<tr>
                                        <td>". $row7['name'] ."</td>
                                        <td>". $row7['status'] ."</td>
                                        <td>". $row7['details'] ."</td>
                                        <td>". $row7['expectedrest'] ." </td> 
                                        <td>". $row7['result'] ."</td>
                                        <td>". $row7['remark'] ."</td>
                                        <td>". $row7['sampledate'] ."</td>
                                        </tr>";
                                        }
                                    ?>

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
                            <h2>Test History<small>All Previous Test History</small> </h2>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Test Name</th>
                                        <th>Referal Doctor</th>
                                        <th>Result</th>
                                        <th>Expected Value</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                    </tr>
                                    <tr>
                                        <td>Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                    </tr>
                                    <tr>
                                        <td>Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                    </tr>
                                    <tr>
                                        <td>Herrod Chandler</td>
                                        <td>Sales Assistant</td>
                                        <td>San Francisco</td>
                                        <td>59</td>
                                        <td>2012/08/06</td>
                                        <td>$137,500</td>
                                    </tr>
                                    <tr>
                                        <td>Rhona Davidson</td>
                                        <td>Integration Specialist</td>
                                        <td>Tokyo</td>
                                        <td>55</td>
                                        <td>2010/10/14</td>
                                        <td>$327,900</td>
                                    </tr>
                                    <tr>
                                        <td>Colleen Hurst</td>
                                        <td>Javascript Developer</td>
                                        <td>San Francisco</td>
                                        <td>39</td>
                                        <td>2009/09/15</td>
                                        <td>$205,500</td>
                                    </tr>
                                    <tr>
                                        <td>Sonya Frost</td>
                                        <td>Software Engineer</td>
                                        <td>Edinburgh</td>
                                        <td>23</td>
                                        <td>2008/12/13</td>
                                        <td>$103,600</td>
                                    </tr>
                                    <tr>
                                        <td>Jena Gaines</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>30</td>
                                        <td>2008/12/19</td>
                                        <td>$90,560</td>
                                    </tr>
                                    <tr>
                                        <td>Quinn Flynn</td>
                                        <td>Support Lead</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2013/03/03</td>
                                        <td>$342,000</td>
                                    </tr>
                                    <tr>
                                        <td>Charde Marshall</td>
                                        <td>Regional Director</td>
                                        <td>San Francisco</td>
                                        <td>36</td>
                                        <td>2008/10/16</td>
                                        <td>$470,600</td>
                                    </tr>
                                    <tr>
                                        <td>Haley Kennedy</td>
                                        <td>Senior Marketing Designer</td>
                                        <td>London</td>
                                        <td>43</td>
                                        <td>2012/12/18</td>
                                        <td>$313,500</td>
                                    </tr>
                                    <tr>
                                        <td>Tatyana Fitzpatrick</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td>19</td>
                                        <td>2010/03/17</td>
                                        <td>$385,750</td>
                                    </tr>
                                    <tr>
                                        <td>Michael Silva</td>
                                        <td>Marketing Designer</td>
                                        <td>London</td>
                                        <td>66</td>
                                        <td>2012/11/27</td>
                                        <td>$198,500</td>
                                    </tr>
                                    <tr>
                                        <td>Paul Byrd</td>
                                        <td>Chief Financial Officer (CFO)</td>
                                        <td>New York</td>
                                        <td>64</td>
                                        <td>2010/06/09</td>
                                        <td>$725,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gloria Little</td>
                                        <td>Systems Administrator</td>
                                        <td>New York</td>
                                        <td>59</td>
                                        <td>2009/04/10</td>
                                        <td>$237,500</td>
                                    </tr>
                                    <tr>
                                        <td>Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>2012/10/13</td>
                                        <td>$132,000</td>
                                    </tr>
                                    <tr>
                                        <td>Dai Rios</td>
                                        <td>Personnel Lead</td>
                                        <td>Edinburgh</td>
                                        <td>35</td>
                                        <td>2012/09/26</td>
                                        <td>$217,500</td>
                                    </tr>
                                    <tr>
                                        <td>Jenette Caldwell</td>
                                        <td>Development Lead</td>
                                        <td>New York</td>
                                        <td>30</td>
                                        <td>2011/09/03</td>
                                        <td>$345,000</td>
                                    </tr>
                                    <tr>
                                        <td>Yuri Berry</td>
                                        <td>Chief Marketing Officer (CMO)</td>
                                        <td>New York</td>
                                        <td>40</td>
                                        <td>2009/06/25</td>
                                        <td>$675,000</td>
                                    </tr>
                                    <tr>
                                        <td>Caesar Vance</td>
                                        <td>Pre-Sales Support</td>
                                        <td>New York</td>
                                        <td>21</td>
                                        <td>2011/12/12</td>
                                        <td>$106,450</td>
                                    </tr>
                                    <tr>
                                        <td>Doris Wilder</td>
                                        <td>Sales Assistant</td>
                                        <td>Sidney</td>
                                        <td>23</td>
                                        <td>2010/09/20</td>
                                        <td>$85,600</td>
                                    </tr>
                                    <tr>
                                        <td>Angelica Ramos</td>
                                        <td>Chief Executive Officer (CEO)</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>2009/10/09</td>
                                        <td>$1,200,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gavin Joyce</td>
                                        <td>Developer</td>
                                        <td>Edinburgh</td>
                                        <td>42</td>
                                        <td>2010/12/22</td>
                                        <td>$92,575</td>
                                    </tr>
                                    <tr>
                                        <td>Jennifer Chang</td>
                                        <td>Regional Director</td>
                                        <td>Singapore</td>
                                        <td>28</td>
                                        <td>2010/11/14</td>
                                        <td>$357,650</td>
                                    </tr>
                                    <tr>
                                        <td>Brenden Wagner</td>
                                        <td>Software Engineer</td>
                                        <td>San Francisco</td>
                                        <td>28</td>
                                        <td>2011/06/07</td>
                                        <td>$206,850</td>
                                    </tr>
                                    <tr>
                                        <td>Fiona Green</td>
                                        <td>Chief Operating Officer (COO)</td>
                                        <td>San Francisco</td>
                                        <td>48</td>
                                        <td>2010/03/11</td>
                                        <td>$850,000</td>
                                    </tr>
                                    <tr>
                                        <td>Shou Itou</td>
                                        <td>Regional Marketing</td>
                                        <td>Tokyo</td>
                                        <td>20</td>
                                        <td>2011/08/14</td>
                                        <td>$163,000</td>
                                    </tr>
                                    <tr>
                                        <td>Michelle House</td>
                                        <td>Integration Specialist</td>
                                        <td>Sidney</td>
                                        <td>37</td>
                                        <td>2011/06/02</td>
                                        <td>$95,400</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> -->
<?php
    
if(isset($_POST['Show']))
    {
        if(isset($_POST['pid']))
        {
            $Pid = $_POST["pid"];
            $sql1 = "SELECT * FROM hospital.tests where pid='$Pid'";
            $result1 = mysqli_query($conn, $sql1);
            if (mysqli_num_rows($result1) > 0) 
            {
            echo"<div class='row clearfix'>
            <div class='col-lg-12'>
                <div class='card'>
                    <div class='header'>
                        <h2>Test History<small>All Previous Test History</small> </h2>
                    </div>
                    <div class='body'>
                        <table class='table table-bordered table-striped table-hover dataTable js-exportable'>
                                <thead class='thead-light'>
                                    <tr>
                                        <th>Test Name</th>
                                        <th>Status</th>
                                        <th>Details</th>
                                        <th>Expected Result</th>
                                        <th>Test Result</th>
                                        <th>Remark</th>
                                        <th>Sample Date</th>
                                    </tr>
                                </thead>
                                <tbody>";
                                while($row1=mysqli_fetch_assoc($result1))
                                {
                                    echo"<tr>
                                        <td>".$row1['requestedTestsname']."</td>
                                        <td>".$row1['status']."</td>
                                        <td>".$row1['details']."</td>
                                        <td>".$row1['expectedrest']."</td>
                                        <td>".$row1['result']."</td>
                                        <td>".$row1['remark']."</td>
                                        <td>".$row1['sampledate']."</td>
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



  include("include/doctor-footer.php");

   if(isset($_POST['Add']))
    {
        if(isset($_POST['tname']) && isset($_POST['pid']))
        {
            $pid=$_POST['pid'];
            $tname=$_POST['tname'];

           $result5= mysqli_query($conn,"INSERT INTO `hospital`.`tests` (`pid`, `requestedTestsname`) VALUES ('$pid', '$tname');
") or die("An Error Occur");
           if($result5){
            echo"<script>window.alert('Successfully');</script>"; 
           }else echo"<script>window.alert('Error');</script>";

        }else echo"<script>window.alert('select patient id');</script>";
    }

  ?>