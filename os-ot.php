<?php
  include("include/os-header.php");
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
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Report <small> </small> </h2>
                        </div>
                        <!--<div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <select class="form-control show-tick" name="services" >
                                            <option value="">- patient Id -</option>
                                            <option value="Aid">1325</option>
                                            <option value="Aid">1542</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="In Detail Report Of Dialysis" name="report">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                      <div class="form-group">
                                        <button type="submit" class="btn btn-success">Update</button>
                                      </div>
                                </div>
                            </div>
                        </div>-->
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label><small>Patient Id to Update</small></label>
                                        <select class="form-control show-tick" name="pid" >
                                            <option value="">- patient Id -</option>
                                            <option value="Aid">1325</option>
                                            <option value="Aid">1542</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label><small>Choose Anesthetist</small></label>
                                        <select class="form-control show-tick" name="anesthetist" >
                                            <option value="">- Anesthetist -</option>
                                            <option value="Name1">Name1</option>
                                            <option value="Name2">Name2</option>
                                            <option value="Name3">Name3</option>
                                            <option value="Name4">Name4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label><small>Choose Surgeon</small></label>
                                        <select class="form-control show-tick" name="Surgeon" >
                                            <option value="">- Surgeon -</option>
                                            <option value="Aid">Surgeon1</option>
                                            <option value="Aid">Surgeon2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label><small>Choose Nurse</small></label>
                                        <select class="form-control show-tick" name="Nurse" >
                                            <option value="">- Nurse -</option>
                                            <option value="Aid">Nurse1</option>
                                            <option value="Aid">Nurse2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label><small>Patient Arival Time</small></label>
                                        <input type="time" class="form-control" placeholder="Patient Arival Time" name="pat">
                                    </div>
                                </div>
                                 <div class="col-sm-4">
                                    <div class="form-group">
                                        <label><small>Anesthesia start Time</small></label>
                                        <input type="time" class="form-control" placeholder="Anesthesia start Time" name="ast">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label><small>Anesthesia Used</small></label>
                                        <input type="text" class="form-control" placeholder="Anesthesia" name="anesthesia">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label><small>Anesthesia Ready Time</small></label>
                                        <input type="time" class="form-control" placeholder="Anesthesia start Time" name="art">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label><small>Procedure Start Time</small></label>
                                        <input type="time" class="form-control" placeholder="Procedure Start Time" name="pst">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label><small>Remark</small></label>
                                        <input type="text" class="form-control" placeholder="Remark" name="remark">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label><small>Procedure End Time</small></label>
                                        <input type="time" class="form-control" placeholder="Procedure End Time" name="pet">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label><small>Choose Document if any</small></label>
                                        <input type="file" class="form-control" placeholder="reportfile if any" name="reportfile">
                                    </div>
                                </div>
                                 <div class="col-sm-12">
                                    <div class="form-group m-t-20">
                                        <label><small>Detail Report </small></label>
                                        <textarea rows="2" class="form-control" placeholder="In Detail Report Of Operation" name="report"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                      <div class="form-group">
                                        <button type="submit" class="btn btn-success">Update</button>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php
  include("include/os-footer.php");
  ?>