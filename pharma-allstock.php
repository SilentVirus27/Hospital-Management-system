<?php
  include("include/pharma-header.php");
  ?>
<!--MAIN Content-->
           
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