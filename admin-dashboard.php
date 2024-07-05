<?php
  include("include/admin-header.php");
  ?>
<!--MAIN Content-->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-12">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-6">
                            <div class="card top_counter">
                                <div class="body">
                                    <div id="top_counter1" class="carousel vert slide" data-ride="carousel" data-interval="2500">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="icon"><i class="fa fa-user"></i> </div>
                                                <div class="content">
                                                    <div class="text">Total Patient</div>
                                                    <h5 class="number"><?php echo $allprow['totalp']; ?></h5>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="icon"><i class="fa fa-user"></i> </div>
                                                <div class="content">
                                                    <div class="text">New Patient</div>
                                                    <h5 class="number"><?php echo $newprow['newp']; ?></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div id="top_counter2" class="carousel vert slide" data-ride="carousel" data-interval="2100">
                                        <div class="carousel-inner">
                                            <!-- <div class="carousel-item active">
                                                <div class="icon"><i class="fa fa-user-md"></i> </div>
                                                <div class="content">
                                                    <div class="text">Operations</div>
                                                    <h5 class="number">06</h5>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="icon"><i class="fa fa-user-md"></i> </div>
                                                <div class="content">
                                                    <div class="text">Surgery</div>
                                                    <h5 class="number">04</h5>
                                                </div>
                                            </div> -->
                                            <div class="carousel-item active">
                                                <div class="icon"><i class="fa fa-user-md"></i> </div>
                                                <div class="content">
                                                    <div class="text">Treatment</div>
                                                    <h5 class="number"><?php echo $admitprow['totaladmit']; ?></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="card top_counter">
                                <div class="body">
                                    <div id="top_counter3" class="carousel vert slide" data-ride="carousel" data-interval="2300">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="icon"><i class="fa fa-eye"></i> </div>
                                                <div class="content">
                                                    <div class="text">Total Visitors</div>
                                                    <h5 class="number"><?php echo $allprow['totalp']; ?></h5>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="icon"><i class="fa fa-eye"></i> </div>
                                                <div class="content">
                                                    <div class="text">Today Visitors</div>
                                                    <h5 class="number"><?php echo $newprow['newp']; ?></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="icon"><i class="fa fa-university"></i> </div>
                                    <div class="content">
                                        <div class="text">Revenue</div>
                                        <h5 class="number">Rs. <?php echo $revenuerow['grandtotal']; ?></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card top_counter">
                                <div class="body">
                                    <div class="icon"><i class="fa fa-thumbs-o-up"></i> </div>
                                    <div class="content">
                                        <div class="text">Happy Clients</div>
                                        <h5 class="number"><?php echo $fedprow['totalfed']; ?></h5>
                                    </div>
                                    <hr>
                                    <div class="icon"><i class="fa fa-smile-o"></i> </div>
                                    <div class="content">
                                        <div class="text">Smiley Faces</div>
                                        <h5 class="number"><?php echo $disprow['totaldis']; ?></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Total Revenue</h2>
                            <ul class="header-dropdown">
                                <!--<li><a class="tab_btn" href="javascript:void(0);" title="Weekly">W</a></li>
                                <li><a class="tab_btn" href="javascript:void(0);" title="Monthly">M</a></li>
                                <li><a class="tab_btn active" href="javascript:void(0);" title="Yearly">Y</a></li>-->
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <!--<ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>-->
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <div class="body bg-success text-light">
                                        <h4><i class="icon-wallet"></i>Rs. <?php echo $revenuerow['operationincome']; ?> </h4>
                                        <span>Operation Income</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="body bg-warning text-light">
                                        <h4><i class="icon-wallet"></i> Rs. <?php echo $revenuerow['pharmacyincome']; ?> </h4>
                                        <span>Pharmacy Income</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="body bg-danger text-light">
                                        <h4><i class="icon-wallet"></i>Rs. <?php echo $revenuerow['hospitalexpenses']; ?> </h4>
                                        <span>Hospital Expenses</span>
                                    </div>
                                </div>
                            </div>
                            <div id="total_revenue" class="ct-chart m-t-20"></div>
                        </div>
                    </div>
                </div>
            </div>

<?php
  include("include/admin-footer.php");
  ?>