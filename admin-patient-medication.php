<?php
  include("include/admin-header.php");
  ?>
<!--MAIN Content-->
       
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Priscribed Medicine<small> Details</small> </h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Medicine Name" name="mname">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Content" name="content">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Quantity" name="quantity">
                                    </div>
                                    <div class="form-group">
                                        <label class="fancy-checkbox">
                                            <input type="checkbox" name="morn" value="Morning" required data-parsley-errors-container="#error-checkbox">
                                            <span>Morning</span>
                                        </label>
                                        <label class="fancy-checkbox">
                                            <input type="checkbox" name="aft" value="Afternoon">
                                            <span>Afternoon</span>
                                        </label>
                                        <label class="fancy-checkbox">
                                            <input type="checkbox" name="eve" value="Evening">
                                            <span>Evening</span>
                                        </label>
                                        <label class="fancy-checkbox">
                                            <input type="checkbox" name="dayaf" value="Day After">
                                            <span>Day After</span>
                                        </label>
                                        <label class="fancy-checkbox">
                                            <input type="checkbox" name="pain" value="If Pain">
                                            <span>If Pain</span>
                                        </label>
                                        <p id="error-checkbox"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Dose Size" name="dsize">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Instruction" name="instruction">
                                    </div>
                                </div>
                        </div>
                        <button type="button" class="btn btn-info">Add</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Curent Priscribed Medicine<small>All Current Medication Details</small> </h2>
                    </div>
                    <ul class="header-dropdown">


                                <div class="action">
                                    <button type="button" class="btn btn-sm -m2 btn-outline-secondary  js-sweetalert" title="Clear Current">Clear Current</button>
                                </div>


                    </ul>
                    <div class="body">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Medicine Name</th>
                                        <th>Content</th>
                                        <th>Referal Doctor</th>
                                        <th>Quantity</th>
                                        <th>Dose Time</th>
                                        <th>Dose Size</th>
                                        <th>Instruction</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>Morning-Evening</td>
                                        <td>half tab</td>
                                        <td>adssdsad</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>Afternoon</td>
                                        <td>full tab</td>
                                        <td>adssdsad</td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>Morning-Afternoon-Evening</td>
                                        <td>20ml</td>
                                        <td>adssdsad</td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>Morning-Afternoon-Evening</td>
                                        <td>1drop</td>
                                        <td>adssdsad</td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Medication for Chronic<small>All Current Medication Details</small> </h2>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Medicine Name</th>
                                        <th>Content</th>
                                        <th>Referal Doctor</th>
                                        <th>Quantity</th>
                                        <th>Dose Time</th>
                                        <th>Dose Size</th>
                                        <th>Instruction</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>Morning-Evening</td>
                                        <td>half tab</td>
                                        <td>adssdsad</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>Afternoon</td>
                                        <td>full tab</td>
                                        <td>adssdsad</td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>Morning-Afternoon-Evening</td>
                                        <td>20ml</td>
                                        <td>adssdsad</td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>Morning-Afternoon-Evening</td>
                                        <td>1drop</td>
                                        <td>adssdsad</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Medication History<small>All Previous Medication History</small> </h2>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Medicine Name</th>
                                        <th>Content</th>
                                        <th>Referal Doctor</th>
                                        <th>Quantity</th>
                                        <th>Dose Time</th>
                                        <th>Dose Size</th>
                                        <th>Instruction</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>Morning-Evening</td>
                                        <td>half tab</td>
                                        <td>adssdsad</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>Afternoon</td>
                                        <td>full tab</td>
                                        <td>adssdsad</td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>Morning-Afternoon-Evening</td>
                                        <td>20ml</td>
                                        <td>adssdsad</td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>Morning-Afternoon-Evening</td>
                                        <td>1drop</td>
                                        <td>adssdsad</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
<?php
  include("include/admin-footer.php");
  ?>
