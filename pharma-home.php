<?php
  include("include/pharma-header.php");

                    

  ?>
<!--MAIN Content-->
           
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6">
                    <div class="card top_counter">
                        <div class="body">
                            <div class="icon text-info"><i class="fa fa-building"></i> </div>
                            <div class="content">
                                <div class="text">Stock about to End</div>
                                <h5 class="number"><?php $result=mysqli_query($conn,"SELECT count(*) as end FROM hospital.medicinepharmacy where stockAvai < 20");
                                    $row=mysqli_fetch_assoc($result);
                                    echo $row['end'];
                                     ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-6">
                    <div class="card top_counter">
                        <div class="body">
                            <div class="icon text-warning"><i class="fa fa-area-chart"></i> </div>
                            <div class="content">
                                <div class="text">Growth</div>
                                <h5 class="number">62%</h5>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-3 col-md-6">
                    <div class="card top_counter">
                        <div class="body">
                            <div class="icon text-danger"><i class="fa fa-shopping-cart"></i> </div>
                            <div class="content">
                                <div class="text">Total todays Sales order</div>
                                <h5 class="number"> <?php $result=mysqli_query($conn,"SELECT count(*) as ord FROM hospital.pharmacymedtotal WHERE date(`date`) = CURDATE()");
                                    if($result)
                                    {
                                    $row=mysqli_fetch_assoc($result);
                                    echo $row['ord'];
                                    }
                                    else echo "Not Avilable"; ?> </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="card top_counter">
                        <div class="body">
                            <div class="icon"><i class="fa fa-tag"></i> </div>
                            <div class="content">
                                <div class="text">Expired Medicine</div>
                                <h5 class="number"> <?php $result=mysqli_query($conn,"SELECT count(*) as tot FROM hospital.medicinepharmacy where date(`expiry`) < CURDATE()");
                                    if($result)
                                    {
                                    $row=mysqli_fetch_assoc($result);
                                    echo $row['tot'];
                                    }
                                    else echo "Not Avilable"; ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Med Status</h2>

                        </div>
                        <div class="body">
                            
                            <div class="table-responsive ">
                                <table class="table m-b-0 table table-hover js-basic-example dataTable table-custom">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Medicine ID</th>
                                            <th>Medicine Name</th>
                                            <th>Content</th>
                                            <th>Expiry Date</th>
                                            <th>Health Effect</th>
                                            <th>Stock Avail</th>
                                            <th>Uses</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $pharma=mysqli_query($conn,"SELECT * FROM hospital.medicinepharmacy");
                                    while($resultrow=mysqli_fetch_assoc($pharma))
                                    {
                                    
                                        echo"<tr>";
                                        echo"<td>". $resultrow['mid'] ."</td>";
                                        echo"<td>". $resultrow['brandName'] ."</td>";
                                        echo"<td>". $resultrow['containtQuality'] ."</td>";
                                        echo"<td>". $resultrow['expiry'] ."</td>";
                                        echo"<td>". $resultrow['healthEffect'] ."</td>";
                                        echo"<td>". $resultrow['stockAvai'] ."</td>";
                                        echo"<td>". $resultrow['uses'] ."</td>";
                                        echo"</tr>";
                                    }

                                   
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php
  include("include/pharma-footer.php");
  ?>