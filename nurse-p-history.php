<?php
  include("include/nurse-header.php");
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
                                echo"<li class='list-group-item'>Allergy  : ".$row['allergy']."</li>";
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
                                

                                ?>

                              
                           
            
           <!--  <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card">

                        <div class="body">
                            <div class="header">
                            <h2>Admit Details</h2>
                            </div>
                            <ul class="nav nav-tabs-new2">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#current">Current Activity</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#hist">History</a></li>
                            </ul>
                            <div class="tab-content mt-3">
                                
                                <div class="tab-pane active" id="current">
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                                    <div class="timeline-item green">
                                        <span class="date">Just now</span>
                                        <h5>Discharge</h5>
                                    </div>
                                    <div class="timeline-item warning   ">
                                        <span class="date">02 Jun 2018</span>
                                        <h6>Spinal Osteomyelitis Surgery</h6>
                                        <span><a href="javascript:void(0);" title="">Dr. Chandler Bing</a></span>
                                        <div class="msg">
                                            <p>web by far While that's mock-ups and this is politics, are they really so different? I think the only card she has is the Lorem card.</p>
                                            <ul class="list-unstyled team-info">
                                                <li><img src="assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" data-original-title="Dr. Chris Fox"></li>
                                                <li><img src="assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" data-original-title="Dr. Joge Lucky"></li>
                                                <li><img src="assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" data-original-title="Isabella" aria-describedby="tooltip698705"></li>
                                            </ul>
                                            <div class="timeline_img m-b-20">
                                                <img class="w-25" src="assets/images/blog/blog-page-4.jpg" alt="Awesome Image">
                                                <img class="w-25" src="assets/images/blog/blog-page-2.jpg" alt="Awesome Image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="timeline-item danger">
                                        <span class="date">01 Jun 2018</span>
                                        <h6>Blood Report</h6>
                                        <div class="msg">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <strong>Analysis IDFB-3</strong>
                                                    <table class="table table-hover">
                                                        <tbody>
                                                            <tr>
                                                                <td>Down Cluster</td>
                                                                <td>90.9% </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Down Fiber</td>
                                                                <td>1.8%</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Waterfowl Feathers </td>
                                                                <td>1.7%</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Quill</td>
                                                                <td>0.0%</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Landfowl</td>
                                                                <td>0.1%</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Total</td>
                                                                <td>100.0%</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-md-6">
                                                    <strong>Species IDFB-12</strong>
                                                    <table class="table table-hover">
                                                        <tbody>
                                                            <tr>
                                                                <td>Goose Down </td>
                                                                <td>90.9% </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Duck Down</td>
                                                                <td>1.8%</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Goose Feathers</td>
                                                                <td>1.7%</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Duck Feathers</td>
                                                                <td>0.0%</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Total Duck</td>
                                                                <td>0.1%</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Total Goose</td>
                                                                <td>100.0%</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="timeline-item danger">
                                        <span class="date">01 Jun 2018</span>
                                        <h6>Blood checkup test</h6>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                    <div class="timeline-item dark pb-0">
                                        <span class="date">01 Jun 2018</span>
                                        <h6>Admit patient ward no. 21</h6>
                                        <span><a href="javascript:void(0);" title="">Katherine Lumaad</a> Oakland, CA</span>
                                        <div class="msg">
                                            <div class="timeline_img m-b-20">
                                                <img class="w-25" src="assets/images/image-gallery/10.jpg" alt="Awesome Image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
<?php
  include("include/nurse-footer.php");
  ?>