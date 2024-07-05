<?php
  include("include/patient-header.php");
  ?>
<!--MAIN Content-->
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Password Change <small>All Fields are required </small> </h2>
                        </div>
                        <div class="body">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                </div>
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="uname">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-key"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" name="password">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-key"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Re-Password" aria-label="Re-Password" aria-describedby="basic-addon1" name="password">
                            </div>
                            <div class="input-group mb-3">
                                <input type="submit" class="form-submit" value="Change Password" name="submit">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Password Change <small>Remember those thing while creating new password</small> </h2>
                        </div>
                        <div class="body">
                           <p>Please Use Uppercase,Lowercase Charactor Along With Symbol and Numeric's</p>
                            <p>Don't use Name,Contact number, Birth Date as your Password</p>
                        </div>
                    </div>
                </div>
            </div>

<?php
  include("include/patient-footer.php");
  ?>