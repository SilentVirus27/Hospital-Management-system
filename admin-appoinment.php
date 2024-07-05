<?php
  include("include/admin-header.php");
  ?>
<!--MAIN Content-->
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>All Appoinment</h2>
                                    <ul class="header-dropdown">
                                        <div class="col-sm-13">
                                            <li>
                                                <div class="form-group">
                                                    <select class="form-control show-tick" name="services" >
                                                        <option value="">- Appoin Id -</option>
                                                        <option value="Aid">1325</option>
                                                        <option value="Aid">1542</option>

                                                    </select>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="action">
                                                        <button type="button" class="btn btn-sm -m2 btn-outline-secondary  js-sweetalert" title="Edit">Mark Diagnosed</button>
                                                        <button type="button" class="btn btn-sm -m2 btn-outline-denger  js-sweetalert" title="Edit">Cancle </button>
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
                                            <th>Service</th>
                                            <th>Date</th>
                                            <th>Expected Time</th>
                                            <th>Attend Time</th>
                                            <th>Status</th>
                                        </tr>
                                        <tr data-status="Waiting">
                                            <td>1</td>
                                            <td>12</td>
                                            <td>jacob</td>
                                            <td>Consultant</td>
                                            <td>10-09-2022</td>
                                            <td>9.30AM</td>
                                            <td>9.30AM</td>
                                            <td><span class="badge badge-outline-secondary">Waiting</span></td>

                                            <!--<td width="250px">
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar l-slategray" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%;"></div>
                                                </div>
                                            </td>-->
                                        </tr>
                                        <tr data-status="Diagnosed">
                                            <td>2</td>
                                            <td>15</td>
                                            <td>shubham</td>
                                            <td>Regular Checkup</td>
                                            <td>16-06-2022</td>
                                            <td>10.00AM</td>
                                            <td>10.00AM</td>
                                            <td><span class="badge badge-info">Diagnosed</span></td>

                                            <!--<td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar l-blue" role="progressbar" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100" style="width: 16%;"></div>
                                                </div>
                                            </td>-->
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Book Appoinment <small>Fill Information </small> </h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <select class="form-control show-tick" name="doctor">
                                            <option value="">- Choose Doctor -</option>
                                            <option value="D">Doctor list from table...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <select class="form-control show-tick" name="services" >
                                            <option value="">- Choose Services -</option>
                                            <option value="D">Services list from table...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <input type="text" data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="Appoinment Date" name="apdate">
                                    </div>
                                </div>

                            </div>
                              <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group m-t-20">
                                        <textarea rows="2" class="form-control" placeholder="Symptoms" name="symptoms"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group m-t-20">
                                        <textarea rows="2" class="form-control" placeholder="Other Discription" name="otherdis"></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary">Book</button>
                                    <button type="reset" class="btn btn-outline-secondary">Clear</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php
  include("include/admin-footer.php");
  ?>