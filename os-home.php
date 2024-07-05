<?php
  include("include/os-header.php");

  
    $ct1= mysqli_query($conn,"SELECT count(*) as ct FROM hospital.emergrncy");
    $ct=mysqli_fetch_assoc($ct1);
    $ecg= mysqli_query($conn,"SELECT count(*) as ct FROM hospital.ecg");
    $ecg1=mysqli_fetch_assoc($ecg);
    $x_ray= mysqli_query($conn,"SELECT count(*) as ct FROM hospital.x_ray");
    $x_ray1=mysqli_fetch_assoc($x_ray);
    $ultrasound= mysqli_query($conn,"SELECT count(*) as ct FROM hospital.ultrasound");
    $ultrasound1=mysqli_fetch_assoc($ultrasound);
    $dexa= mysqli_query($conn,"SELECT count(*) as ct FROM hospital.dexa");
    $dexa1=mysqli_fetch_assoc($dexa);
    $mri= mysqli_query($conn,"SELECT count(*) as ct FROM hospital.mri");
    $mri1=mysqli_fetch_assoc($mri);
    $ctscan= mysqli_query($conn,"SELECT count(*) as ct FROM hospital.ctscan");
    $ctscan1=mysqli_fetch_assoc($ctscan);
    $ot= mysqli_query($conn,"SELECT count(*) as ct FROM hospital.ot");
    $ot1=mysqli_fetch_assoc($ot);
    $transfusion= mysqli_query($conn,"SELECT count(*) as ct FROM hospital.transfusion");
    $transfusion1=mysqli_fetch_assoc($transfusion);
    $dialysis= mysqli_query($conn,"SELECT count(*) as ct FROM hospital.dialysis");
    $dialysis1=mysqli_fetch_assoc($dialysis);
  ?>
<!--MAIN Content-->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6">
                    <div class="card info-box-2">
                        <div class="body">
                            
                            <div class="content">
                                <div class="text">Emergency Patient</div>
                                <div class="text"><?php echo $ct['ct']; ?> Patient</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card info-box-2">
                        <div class="body">
                            
                            <div class="content">
                                <div class="text">ECG</div>
                                <div class="text"><?php echo $ecg1['ct']; ?> Patient</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card info-box-2">
                        <div class="body">
                            
                            <div class="content">
                                <div class="text">X-ray</div>
                                <div class="text"><?php echo $x_ray1['ct']; ?> Patient</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card info-box-2">
                        <div class="body">
                            
                            <div class="content">
                                <div class="text">Ultrasound</div>
                                <div class="text"><?php echo $ultrasound1['ct']; ?> Patient</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card info-box-2">
                        <div class="body">
                            
                            <div class="content">
                                <div class="text">Bone Desitometry</div>
                                <div class="text"><?php echo $dexa1['ct']; ?> Patient</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card info-box-2">
                        <div class="body">
                            
                            <div class="content">
                                <div class="text">MRI</div>
                                <div class="text"><?php echo $mri1['ct']; ?> Patient</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card info-box-2">
                        <div class="body">
                            
                            <div class="content">
                                <div class="text">CT Scan</div>
                                <div class="text"><?php echo $ctscan1['ct']; ?> Patient</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card info-box-2">
                        <div class="body">
                            
                            <div class="content">
                                <div class="text">Operation Thetor</div>
                                <div class="text"><?php echo $ot1['ct']; ?> Patient</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card info-box-2">
                        <div class="body">
                            
                            <div class="content">
                                <div class="text">Blood Transfusion</div>
                                <div class="text"><?php echo $transfusion1['ct']; ?> Patient</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card info-box-2">
                        <div class="body">
                            
                            <div class="content">
                                <div class="text">Dialysis</div>
                                <div class="text"><?php echo $dialysis1['ct']; ?> Patient</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php
  include("include/os-footer.php");
  ?>