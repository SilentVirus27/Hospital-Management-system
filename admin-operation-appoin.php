<?php
  include("include/admin-header.php");
  ?>
<!--MAIN Content-->
        <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Operating Theater Appoinments</h2>
                                    <ul class="header-dropdown">
                                        <div class="col-sm-13">
                                            <li>
                                                <div class="form-group">
                                                    <select class="form-control show-tick" name="services" >
                                                        <option value="">- Patient Id -</option>
                                                        <option value="Aid">1325</option>
                                                        <option value="Aid">1542</option>

                                                    </select>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="action">
                                                        <button type="button" class="btn btn-sm -m2 btn-outline-secondary  js-sweetalert" title="Edit">Mark Diagnosed</button>
                                                </div>
                                            </li>
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
                                            <th>#</th>
                                            <th>Patient ID</th>
                                            <th>Patient Name</th>
                                            <th>Refer Doctor</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Status</th>
                                            <th>Priority</th>
                                            <th>Detail</th>
                                        </tr>
                                        <tr data-status="Waiting">
                                             <th>1</th>
                                            <td>12</td>
                                            <td>jacob</td>
                                            <td>dr.jone</td>
                                            <td>10-09-2022</td>
                                            <td>9.30AM</td>
                                            <td><span class="badge badge-outline-secondary">Waiting</span></td>
                                            <td><span class="badge badge-danger">HIGH</span></td>
                                            <td>hand Surgery</td>
                                        </tr>
                                        <tr data-status="Diagnosed">
                                             <th>1</th>
                                            <td>15</td>
                                            <td>shubham</td>
                                            <td>dr.roshan</td>
                                            <td>16-06-2022</td>
                                            <td>10.00AM</td>
                                            <td><span class="badge badge-info">Diagnosed</span></td>
                                            <td><span class="badge badge-success">LOW</span></td>
                                            <td>leg surgery</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
  include("include/admin-footer.php");
  ?>