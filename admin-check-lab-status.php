<?php
  include("include/admin-header.php");
  ?>
<!--MAIN Content-->
                    <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Test Status</h2>
                            <!--<ul class="header-dropdown">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>-->
                        </div>
                        <div class="body">
                            <!--<p class="float-md-right">
                                <span class="badge badge-success">3 Admit</span>
                                <span class="badge badge-default">2 Discharge</span>
                            </p>-->
                            <div class="table-responsive ">
                                <table class="table m-b-0 table table-hover js-basic-example dataTable table-custom">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Test ID</th>
                                            <th>Patients</th>
                                            <th>Adress</th>
                                            <th>Sample Date</th>
                                            <th>Report Date</th>
                                            <th>Priority</th>
                                            <!--<th>Progress</th>-->
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><span>John</span></td>
                                            <td><span class="text-info">70 Bowman St. South Windsor, CT 06074</span></td>
                                            <td>Sept 13, 2017</td>
                                            <td>Sept 16, 2017</td>
                                            <td><span class="badge badge-warning">MEDIUM</span></td>
                                           <!-- <td><div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"> <span class="sr-only">40% Complete</span> </div>
                                                </div>
                                            </td>-->
                                            <td><span class="badge badge-Primary">Sample Received</span></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><span>Jack Bird</span></td>
                                            <td><span class="text-info">123 6th St. Melbourne, FL 32904</span></td>
                                            <td>Sept 13, 2017</td>
                                            <td>Sept 22, 2017</td>
                                            <td><span class="badge badge-warning">MEDIUM</span></td>
                                            <!--<td><div class="progress progress-xs">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">100% Complete</span> </div>
                                                </div>
                                            </td>-->
                                            <td><span class="badge badge-default">Under Observ</span></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><span>Dean Otto</span></td>
                                            <td><span class="text-info">123 6th St. Melbourne, FL 32904</span></td>
                                            <td>Sept 13, 2017</td>
                                            <td>Sept 23, 2017</td>
                                            <td><span class="badge badge-warning">MEDIUM</span></td>
                                            <!--<td><div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%;"> <span class="sr-only">15% Complete</span> </div>
                                                </div>
                                            </td>-->
                                            <td><span class="badge badge-success">Reported</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td><span>Jack Bird</span></td>
                                            <td><span class="text-info">4 Shirley Ave. West Chicago, IL 60185</span></td>
                                            <td>Sept 17, 2017</td>
                                            <td>Sept 16, 2017</td>
                                            <td><span class="badge badge-success">LOW</span></td>
                                            <!--<td><div class="progress progress-xs">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">100% Complete</span> </div>
                                                </div>
                                            </td>-->
                                            <td><span class="badge badge-default">Under Observ</span></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td><span>Hughe L.</span></td>
                                            <td><span class="text-info">4 Shirley Ave. West Chicago, IL 60185</span></td>
                                            <td>Sept 18, 2017</td>
                                            <td>Sept 18, 2017</td>
                                            <td><span class="badge badge-danger">HIGH</span></td>
                                            <!--<td><div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"> <span class="sr-only">85% Complete</span> </div>
                                                </div>
                                            </td>-->
                                            <td><span class="badge badge-success">Reported</span></td>
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
