                                            <?php 
                                                $result7= mysqli_query($conn,"SELECT * FROM hospital.hospitalstaff,hospital.doctoravailability where hospital.hospitalstaff.hsid=hospital.doctoravailability.docid ");
                                                while($row7=mysqli_fetch_assoc($result7)){
                                                echo"<tr>
                                                <td> Dr. ". $row7['name'] ."</td>
                                                <td>". $row7['specialisation'] ."</td>
                                                <td>". $row7['cNumber'] ."</td>
                                                <td>". $row7['experience'] ." Years </td> 
                                                <td>". $row7['startTime'] ."</td>
                                                <td>". $row7['endTime'] ."</td>
                                                </tr>";
                                                }
                                            ?>



<?php
    $result = mysqli_query($conn,"SELECT * FROM hospital.hospitalstaff");
    if($result)
    {
        echo"<div class='row clearfix'>";
        while($row=mysqli_fetch_assoc($result))
        {
                ". $row[''] ."

        }
        echo"</div>";   
    }
    else echo"error";
?>    

<div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card project_widget">
                        <div class="pw_img">
                            <img class="img-fluid" src=" assets/images/image-gallery/consultant.jpg " alt="About the image">
                        </div>
                        <div class="pw_content">
                            <div class="pw_header">
                                <h6>Consultant</h6>
                                <ul class="list-unstyled team-info margin-0 p-t-15">
                                    <li class="m-r-15"><small>Team</small></li>
                                    <li><img src=" assets/images/xs/avatar2.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                    <li><img src=" assets/images/xs/avatar3.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                    <li><img src=" assets/images/xs/avatar4.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                    <li><img src=" assets/images/xs/avatar6.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                </ul>
                            </div>
                            <div class="pw_meta">
                                <p>A senior doctor who takes full responsibility for the clinical care of patients.A medical consult by definition is “a procedure whereby, upon request by one healthcare provider, another healthcare provider reviews a patient's medical history, examines the patient, and makes recommendations as to care and treatment.</p>
                                <!--<a href="depa-more.html" class="btn btn-outline-primary">More</a>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card project_widget">
                        <div class="pw_img">
                            <img class="img-fluid" src=" assets/images/image-gallery/pharmacy.jpg " alt="About the image">
                        </div>
                        <div class="pw_content">
                            <div class="pw_header">
                                <h6>Pharmacy</h6>
                                <ul class="list-unstyled team-info margin-0 p-t-15">
                                    <li class="m-r-15"><small>Team</small></li>
                                    <li><img src=" assets/images/xs/avatar2.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                    <li><img src=" assets/images/xs/avatar3.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                    <li><img src=" assets/images/xs/avatar4.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                    <li><img src=" assets/images/xs/avatar6.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                </ul>
                            </div>
                            <div class="pw_meta">
                                <p>A pharmacy is a retail shop which provides pharmaceutical drugs, among other products. At the pharmacy, a pharmacist oversees the fulfillment of medical prescriptions and is available to counsel patients about prescription and over-the-counter drugs or about healthcare and wellness issues.</p>
                                <!--<button class="btn btn-outline-primary">More</button>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card project_widget">
                        <div class="pw_img">
                            <img class="img-fluid" src=" assets/images/image-gallery/ecg.jpg " alt="About the image">
                        </div>
                        <div class="pw_content">
                            <div class="pw_header">
                                <h6>ECG</h6>
                                <ul class="list-unstyled team-info margin-0 p-t-15">
                                    <li class="m-r-15"><small>Team</small></li>
                                    <li><img src=" assets/images/xs/avatar2.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                    <li><img src=" assets/images/xs/avatar3.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                    <li><img src=" assets/images/xs/avatar4.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                    <li><img src=" assets/images/xs/avatar6.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                </ul>
                            </div>
                            <div class="pw_meta">
                                <p>Electrocardiography is the process of producing an electrocardiogram, a recording of the heart's electrical activity. It is an electrogram of the heart which is a graph of voltage versus time of the electrical activity of the heart using electrodes placed on the skin.</p>
                               <!-- <button class="btn btn-outline-primary">More</button>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card project_widget">
                        <div class="pw_img">
                            <img class="img-fluid" src=" assets/images/image-gallery/icu.jpg " alt="About the image">
                        </div>
                        <div class="pw_content">
                            <div class="pw_header">
                                <h6>ICU</h6>
                                <ul class="list-unstyled team-info margin-0 p-t-15">
                                    <li class="m-r-15"><small>Team</small></li>
                                    <li><img src=" assets/images/xs/avatar9.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                    <li><img src=" assets/images/xs/avatar10.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                </ul>
                            </div>
                            <div class="pw_meta">
                                <p>An intensive care unit, also known as an intensive therapy unit or intensive treatment unit or critical care unit, is a special department of a hospital or health care facility that provides intensive care medicine.</p>
                                <!--<button class="btn btn-outline-primary">More</button>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card project_widget">
                        <div class="pw_img">
                            <img class="img-fluid" src=" assets/images/image-gallery/ambulance.jpg " alt="About the image">
                        </div>
                        <div class="pw_content">
                            <div class="pw_header">
                                <h6>Ambulance</h6>
                                <ul class="list-unstyled team-info margin-0 p-t-15">
                                    <li class="m-r-15"><small>Team</small></li>
                                    <li><img src=" assets/images/xs/avatar5.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                    <li><img src=" assets/images/xs/avatar7.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                    <li><img src=" assets/images/xs/avatar8.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                </ul>
                            </div>
                            <div class="pw_meta">
                                <p>An ambulance is a medically equipped vehicle which transports patients to treatment facilities. Typically, out-of-hospital medical care is provided to the patient. Ambulances are used to respond to medical emergencies by emergency medical services.</p>
                                <!--<button class="btn btn-outline-primary">More</button>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card project_widget">
                        <div class="pw_img">
                            <img class="img-fluid" src=" assets/images/image-gallery/laboratory.jpg " alt="About the image">
                        </div>
                        <div class="pw_content">
                            <div class="pw_header">
                                <h6>Laboratory</h6>
                                <ul class="list-unstyled team-info margin-0 p-t-15">
                                    <li class="m-r-15"><small>Team</small></li>
                                    <li><img src=" assets/images/xs/avatar1.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                    <li><img src=" assets/images/xs/avatar2.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                    <li><img src=" assets/images/xs/avatar8.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                    <li><img src=" assets/images/xs/avatar6.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                    <li><img src=" assets/images/xs/avatar10.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                </ul>
                            </div>
                            <div class="pw_meta">
                                <p>A medical laboratory or clinical laboratory is a laboratory where tests are carried out on clinical specimens to obtain information about the health of a patient to aid in diagnosis, treatment, and prevention of disease.</p>
                                <!--<button class="btn btn-outline-primary">More</button>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card project_widget">
                        <div class="pw_img">
                            <img class="img-fluid" src=" assets/images/image-gallery/X-ray1.jpg " alt="About the image">
                        </div>
                        <div class="pw_content">
                            <div class="pw_header">
                                <h6>X-ray</h6>
                                <ul class="list-unstyled team-info margin-0 p-t-15">
                                    <li class="m-r-15"><small>Team</small></li>
                                    <li><img src=" assets/images/xs/avatar9.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                </ul>
                            </div>
                            <div class="pw_meta">
                                <p>An X-ray, or, much less commonly, X-radiation, is a penetrating form of high-energy electromagnetic radiation. Most X-rays have a wavelength ranging from 10 picometers to 10 nanometers, corresponding to frequencies in the range 30 petahertz to 30 exahertz and energies in the range 145eV to 124 keV.</p>
                                <!--<button class="btn btn-outline-primary">More</button>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card project_widget">
                        <div class="pw_img">
                            <img class="img-fluid" src=" assets/images/image-gallery/Ultrasound.jpg " alt="About the image">
                        </div>
                        <div class="pw_content">
                            <div class="pw_header">
                                <h6>Ultrasound</h6>
                                <ul class="list-unstyled team-info margin-0 p-t-15">
                                    <li class="m-r-15"><small>Team</small></li>
                                    <li><img src=" assets/images/xs/avatar5.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                    <li><img src=" assets/images/xs/avatar8.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                </ul>
                            </div>
                            <div class="pw_meta">
                                <p>Ultrasound scanning is a diagnostic tool used to examine many different parts of the body including the liver, pelvic organs, kidneys and gallbladder.It’s also very useful in identifying musculoskeletal injuries in joints such as the shoulder, knee and ankle and Also examine blood flow and blocked blood vessels. </p>
                                <!--<button class="btn btn-outline-primary">More</button>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card project_widget">
                        <div class="pw_img">
                            <img class="img-fluid" src=" assets/images/image-gallery/Bone Densitometry(DEXA).jpg " alt="About the image">
                        </div>
                        <div class="pw_content">
                            <div class="pw_header">
                                <h6>Bone Densitometry(DEXA)</h6>
                                <ul class="list-unstyled team-info margin-0 p-t-15">
                                    <li class="m-r-15"><small>Team</small></li>
                                    <li><img src=" assets/images/xs/avatar1.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                    <li><img src=" assets/images/xs/avatar2.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                    <li><img src=" assets/images/xs/avatar8.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                    <li><img src=" assets/images/xs/avatar10.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                </ul>
                            </div>
                            <div class="pw_meta">
                                <p>Bone densitometry, also called dual-energy x-ray absorptiometry, DEXA or DXA, uses a very small dose of ionizing radiation to produce pictures of the inside of the body (usually the lower (or lumbar) spine and hips) to measure bone loss.</p>
                                <br><!--<button class="btn btn-outline-primary">More</button>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card project_widget">
                            <div class="pw_img">
                                <img class="img-fluid" src=" assets/images/image-gallery/MRI.jpg " alt="About the image">
                            </div>
                            <div class="pw_content">
                                <div class="pw_header">
                                    <h6>MRI</h6>
                                    <ul class="list-unstyled team-info margin-0 p-t-15">
                                        <li class="m-r-15"><small>Team</small></li>
                                        <li><img src=" assets/images/xs/avatar1.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                        <li><img src=" assets/images/xs/avatar2.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                        <li><img src=" assets/images/xs/avatar8.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                        <li><img src=" assets/images/xs/avatar10.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                    </ul>
                                </div>
                                <div class="pw_meta">
                                    <p>Magnetic resonance imaging is a medical imaging technique used in radiology to form pictures of the anatomy and the physiological processes of the body. MRI scanners use strong magnetic fields, magnetic field gradients, and radio waves to generate images of the organs in the body. </p>
                                    <!--<button class="btn btn-outline-primary">More</button>-->
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card project_widget">
                            <div class="pw_img">
                                <img class="img-fluid" src=" assets/images/image-gallery/CT.jpg " alt="About the image">
                            </div>
                            <div class="pw_content">
                                <div class="pw_header">
                                    <h6>CT Scan</h6>
                                    <ul class="list-unstyled team-info margin-0 p-t-15">
                                        <li class="m-r-15"><small>Team</small></li>
                                        <li><img src=" assets/images/xs/avatar1.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                        <li><img src=" assets/images/xs/avatar2.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                        <li><img src=" assets/images/xs/avatar8.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                        <li><img src=" assets/images/xs/avatar10.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                    </ul>
                                </div>
                                <div class="pw_meta">
                                    <p>A CT scan or computed tomography scan is a medical imaging technique used in radiology to obtain detailed internal images of the body noninvasively for diagnostic purposes. The personnel that perform CT scans are called radiographers or radiology technologists.</p>
                                    <!--<button class="btn btn-outline-primary">More</button>-->
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card project_widget">
                            <div class="pw_img">
                                <img class="img-fluid" src=" assets/images/image-gallery/surgery.jpg " alt="About the image">
                            </div>
                            <div class="pw_content">
                                <div class="pw_header">
                                    <h6>Surgical Services</h6>
                                    <ul class="list-unstyled team-info margin-0 p-t-15">
                                        <li class="m-r-15"><small>Team</small></li>
                                        <li><img src=" assets/images/xs/avatar1.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                        <li><img src=" assets/images/xs/avatar2.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                        <li><img src=" assets/images/xs/avatar8.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                        <li><img src=" assets/images/xs/avatar10.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                    </ul>
                                </div>
                                <div class="pw_meta">
                                    <p> An operating theater is a facility within a hospital where surgical operations are carried out in an aseptic environment. Historically, the term "operating theater" referred to a non-sterile, tiered theater or amphitheater in which students and other spectators could watch surgeons perform surgery.</p>
                                    <!--<button class="btn btn-outline-primary">More</button>-->
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card project_widget">
                            <div class="pw_img">
                                <img class="img-fluid" src=" assets/images/image-gallery/transfusion.jpg " alt="About the image">
                            </div>
                            <div class="pw_content">
                                <div class="pw_header">
                                    <h6>Blood Transfusion</h6>
                                    <ul class="list-unstyled team-info margin-0 p-t-15">
                                        <li class="m-r-15"><small>Team</small></li>
                                        <li><img src=" assets/images/xs/avatar1.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                        <li><img src=" assets/images/xs/avatar2.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                        <li><img src=" assets/images/xs/avatar8.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                        <li><img src=" assets/images/xs/avatar10.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                    </ul>
                                </div>
                                <div class="pw_meta">
                                    <p>Blood transfusion is the process of transferring blood products into one's circulation intravenously. Transfusions are used for various medical conditions to replace lost components of the blood.</p>
                                    <br><!--<button class="btn btn-outline-primary">More</button>-->
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card project_widget">
                            <div class="pw_img">
                                <img class="img-fluid" src=" assets/images/image-gallery/dialysis.jpg " alt="About the image">
                            </div>
                            <div class="pw_content">
                                <div class="pw_header">
                                    <h6>Dialysis</h6>
                                    <ul class="list-unstyled team-info margin-0 p-t-15">
                                        <li class="m-r-15"><small>Team</small></li>
                                        <li><img src=" assets/images/xs/avatar1.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                        <li><img src=" assets/images/xs/avatar2.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                        <li><img src=" assets/images/xs/avatar8.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                        <li><img src=" assets/images/xs/avatar10.jpg " data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                    </ul>
                                </div>
                                <div class="pw_meta">
                                    <p> dialysis is the process of removing excess water, solutes, and toxins from the blood in people whose kidneys can no longer perform these functions naturally. This is referred to as renal replacement therapy. The first successful dialysis was performed in 1943.</p>
                                    <!--<button class="btn btn-outline-primary">More</button>-->
                                </div>
                            </div>
                        </div>
                </div>