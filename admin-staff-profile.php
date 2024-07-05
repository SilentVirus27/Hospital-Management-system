<?php
  include("include/admin-header.php");
  ?>
<!--MAIN Content-->
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12">
                    <div class="card profile-header">
                        <div class="body">
                            <div class="profile-image"> <img src="assets/images/user.png" class="rounded-circle" alt=""> </div>
                            <div>
                                <h4 class="m-b-0"><strong>Chandler</strong> Bing</h4>
                                <span>Washington, d.c.</span>
                            </div>
                            <!--<div class="m-t-15">
                                <button class="btn btn-primary">Follow</button>
                                <button class="btn btn-outline-secondary">Message</button>
                            </div>-->
                        </div>
                    </div>

                    <div class="card">
                        <div class="header">
                            <h2>Info</h2>
                        </div>
                        <div class="body">
                            <small class="text-muted">Address: </small>
                            <p>795 Folsom Ave, Suite 600 San Francisco, 94107</p>
                            <div>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30068.350780082437!2d74.20025920626085!3d19.60403381156577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdd002d34130cef%3A0xa60f656f8dab7a37!2sSMBT%20Dental%20College%20%26%20Hospital!5e0!3m2!1sen!2sin!4v1645928742020!5m2!1sen!2sin" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                            <small class="text-muted">Email address: </small>
                            <p>michael@gmail.com</p>
                            <small class="text-muted">Mobile: </small>
                            <p>+ 202-555-2828</p>
                            <small class="text-muted">Birth Date: </small>
                            <p class="m-b-0">October 22th, 1990</p>
                            <hr>
                            <small class="text-muted">Social: </small>
                            <p><i class="fa fa-twitter m-r-5"></i> twitter.com/example</p>
                            <p><i class="fa fa-facebook  m-r-5"></i> facebook.com/example</p>
                            <p><i class="fa fa-instagram m-r-5"></i> instagram.com/example</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="body">
                            <ul class="nav nav-tabs-new">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Basic">Basic</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Account">Account</a></li>
                                <!--<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#General">General</a></li>-->
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content padding-0">
                        <div class="tab-pane active" id="Basic">
                            <div class="card">
                                <div class="body">
                                    <h6>Basic Information</h6>
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Your Name" name="name">
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-mortar-board"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Specilisation" name="spec">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-institution"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Education" name="edu">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Experience in Years" name="exp">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Total award Received" name="awd">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Height" name="height">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="weight" name="weight">
                                            </div>
                                            <div class="form-group">
                                                <div>
                                                    <label class="fancy-radio">
                                                        <input name="gen" value="male" type="radio" checked>
                                                        <span><i></i>Male</span>
                                                    </label>
                                                    <label class="fancy-radio">
                                                        <input name="gen" value="female" type="radio">
                                                        <span><i></i>Female</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="icon-calendar"></i></span>
                                                    </div>
                                                    <input data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="Birthdate">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-facebook"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder=" Facebook Username" name="face">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-twitter"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Twitter Username" name="twit">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-instagram"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Instagram Username" name="insta">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Full Address" name="addr">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary">Update</button> &nbsp;&nbsp;
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="Account">
                            <div class="card">
                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12">
                                            <h6>Account Security</h6>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="Your Name" disabled placeholder="Username" name="user">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" value="Your Email" disabled placeholder="Email" name="email">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Phone Number" name="phno">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <h6>Change Password</h6>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Current Password">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="New Password">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Confirm New Password">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary">Update</button> &nbsp;&nbsp;

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Staff Details</h2>
                                    <ul class="header-dropdown">
                                        <div class="col-sm-13">
                                            <li>
                                                <div class="form-group">
                                                    <select class="form-control show-tick" name="services" >
                                                        <option value="">- Staff Id -</option>
                                                        <option value="Aid">1325</option>
                                                        <option value="Aid">1542</option>

                                                    </select>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="action">
                                                        <button type="button" class="btn btn-sm -m2 btn-outline-secondary  js-sweetalert" title="Edit">Update Profile</button>
                                                        <button type="button" class="btn btn-sm -m2 btn-outline-denger  js-sweetalert" title="Edit">Delete </button>
                                                </div>
                                            </li>
                                        </div>
                                    </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive m-t-20">
                                <table class="table table-filter table-hover m-b-0 ">
                                    <tbody>
                                        <tr>
                                            <th>#</th>
                                            <th>Staff ID</th>
                                            <th>Staff Name</th>
                                            <th>Staff Role</th>
                                        </tr>
                                        <tr data-status="Waiting">
                                            <td>1</td>
                                            <td>12</td>
                                            <td>jacob</td>
                                            <td>Nurse</td>

                                        </tr>
                                        <tr data-status="Diagnosed">
                                            <td>2</td>
                                            <td>15</td>
                                            <td>shubham</td>
                                            <td>Doctor</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php
  include("include/admin-footer.php");
  ?>