<?php
  include("include/doctor-header.php");
  ?>
<!--MAIN Content-->
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Schedule Operation<small> Details</small> </h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label><small>Service</small></label>
                                        <input type="text" class="form-control" placeholder="Operation" name="service" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label><small>Operation Date</small></label>
                                        <input type="date" class="form-control" placeholder="Operation Date" name="odate">
                                    </div>
                                    <div class="form-group">
                                        <label><small>Operation Time</small></label>
                                        <input type="time" class="form-control" placeholder="Operation Time" name="otime">
                                    </div>
                                    <div class="form-group">
                                        <label><small>Priority</small></label>
                                        <input type="text" class="form-control" placeholder="HIGH/LOW" name="priority">
                                    </div>
                                    <div class="form-group">
                                        <label><small>Detail</small></label>
                                        <input type="text" class="form-control" placeholder="Instruction" name="instruction">
                                    </div>
                                </div>
                        </div>
                        <button type="button" class="btn btn-info">Book </button>
                    </div>
                </div>
            </div>
        </div>
<?php
  include("include/doctor-footer.php");
  ?>