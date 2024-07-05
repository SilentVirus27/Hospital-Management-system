
<?php
  include("include/home-header.php");
  include_once 'include/connection.php';
  ?>
<!--MAIN Content-->
<div class="container-fluid">
    <div class="vertical-align-middle ">
        <div class="row clearfix">
                    <div class="row-lg-3 col-md-12 col-sm-12">
                        <div class="card">
                           <div class="body text-center">
                               <!--blank space top-->
                            </div>
                        </div>
                    </div>
                </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                    <div class="card tasks_report">
                        <div class="body">
                            <?php
                                $result = mysqli_query($conn,"SELECT avg(rate) FROM hospital.feedback;");
                                if($result)
                                {                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        echo"<input type='text' class='knob' value='".$row['avg(rate)']."' data-width='90' data-height='90' data-thickness='0.1' data-fgColor='#26dad2' readonly>";
                                    }                                 
                                }
                                else echo"error";
                            ?>    
                            <h6 class="m-t-20">Satisfaction Rate</h6>
                            <p class="displayblock m-b-0">The patient Satisfaction as per there feedback, Don't forget to give us feedback <i class="zmdi zmdi-trending-up"></i></p>
                        </div>
                    </div>
                </div>
            <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                                <div class="card tasks_report">
                                    <div class="body">
                                        <input type="text" class="knob" value="95" data-width="90" data-height="90" data-thickness="0.1" data-fgColor="#7b69ec" readonly>
                                        <h6 class="m-t-20">Patient Recovery Rate</h6>
                                        <p class="displayblock m-b-0">Patient Recovery Rate is 95% Which is average of total patient visited in hospital. <i class="zmdi zmdi-trending-down"></i></p>
                                    </div>
                                </div>
                            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                    <div class="card tasks_report">
                         <div class="body">
                              <input type="text" class="knob" value="10" data-width="90" data-height="90" data-thickness="0.1" data-fgColor="#f9bd53" readonly>
                              <h6 class="m-t-20">Required surgery Rate</h6>
                              <p class="displayblock m-b-0"> Rate of required Surgery for tratement is comparatively very less(10%) . <i class="zmdi zmdi-trending-up"></i></p>
                         </div>
                    </div>
                </div>
            <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                    <div class="card tasks_report">
                        <div class="body">
                            <input type="text" class="knob" value="5" data-width="90" data-height="90" data-thickness="0.1" data-fgColor="#00adef" readonly>
                            <h6 class="m-t-20">Hospital Transfer Rate</h6>
                            <p class="displayblock m-b-0">there is very low rate (5%) of intrahospital transfer of patient During treatment.  <i class="zmdi zmdi-trending-up"></i></p>
                        </div>
                    </div>
                </div>
        </div>
    </div>
     <div class="row clearfix">
         <div class="col-lg-6 col-md-12">
             <div class="card planned_task">
                 <div class="header l-blue">
                     <h2>Introduction </h2>
                     <ul class="header-dropdown">
                         <li class="dropdown">
                             <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                             <ul class="dropdown-menu dropdown-menu-right">
                                 <li><a href="javascript:void(0);">Action</a></li>
                                 <!--<li><a href="javascript:void(0);">Another Action</a></li>
                                 <li><a href="javascript:void(0);">Something else</a></li>-->
                             </ul>
                         </li>
                     </ul>
                 </div>
                 <div class="body">
                     <div class="col-md-12">
                         <div class="align-center text-muted">SMBT Hospital has endured a modern voyage since 2001 to accomplish its mission to achieve excellence as an educational institution for an ideal academic and cultural environment for the growth and development of students. The college has been continuously ranked amongst the top colleges in the country and is affiliated to Maharashtra University of Health Sciences (MUHS), Nashik. Located in the heart of Sangamner city, Ahmednagar district on Nashik-Pune National Highway the institution is spread across a vast 5 acres area surrounded by lush green environment making it an ideal location to pursue phenomenal education. We currently offers a five year undergraduate course in Bachelor of Dental Science [BDS], a three year Post graduation courses [MDS] and Diploma in Dental Mechanics [DMS] approved by Dental Council of India (DCI). The college has highly experienced teaching faculty members who provide dynamic teaching, practical experience and impel students to undertake research. The college aims at providing sound academic foundation and motivation for the students to continue his/her education through professional life. </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-lg-6 col-md-12">
             <div class="card planned_task">
                 <div class="header l-pink">
                     <h2>Vision/Mision </h2>
                     <ul class="header-dropdown">
                         <li class="dropdown">
                             <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                             <ul class="dropdown-menu dropdown-menu-right">
                                 <li><a href="javascript:void(0);">Action</a></li>
                                 <!--<li><a href="javascript:void(0);">Another Action</a></li>
                                 <li><a href="javascript:void(0);">Something else</a></li>-->
                             </ul>
                         </li>
                     </ul>
                 </div>
                 <div class="body">
                     <div class="col-md-12">
                         <div class="align-center text-muted">To make SMBT the most trusted and respected group of institutions in the field of health care education, health care training and health care delivery.
                         <hr>
                             To educate and train our students to provide "fit for purpose" quality health care services to the society they will serve and, in the process, become the most trusted and respected members of the society.
                             To make our patients aware about their overall health and deploy all the measures of timely prevention, intervention and timely delivery of quality health care in the most efficient and effective manner.
                             To address "Learning and Growth" aspirations of our employees and also, address the education & health care needs of the society in general.
                             <br>
                             <br>
                             <br>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
</div>
<?php
  include("include/home-footer.php");
  ?>
