<?php
  include("include/account-header.php");
  if(isset($_POST['Add1']))
    {
        if(isset($_POST['edetail']) && isset($_POST['ecost']))
        {
            $Date = date('Y/m/d');
            $Detail = $_POST["edetail"];
            $Cost = $_POST["ecost"];
           
            $sql="INSERT INTO `hospital`.`expenses` (`date`, `details`, `total`) VALUES ('$Date', '$Detail', '$Cost');";
            $result1=mysqli_query($conn,$sql) or die("An Error Occur");
            echo"<script>window.alert('Expenses Added Successfully');</script>"; 
        }else echo"<script>window.alert('Enter Data Properly');</script>"; 
    }

    if(isset($_POST['Add2']))
    {
        if(isset($_POST['isource']) && isset($_POST['itotal']))
        {
            $Source = $_POST["isource"];
            $Total = $_POST["itotal"];
           
            $sql="INSERT INTO `hospital`.`income` (`incomesource`, `total`) VALUES ('$Source', '$Total');";
            $result2=mysqli_query($conn,$sql) or die("An Error Occur");
            echo"<script>window.alert('Income Added Successfully');</script>"; 
        }else echo"<script>window.alert('Enter Data Properly');</script>"; 
    }
  ?>
<!--MAIN Content-->
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>All Expenses</h2>
                            <ul class="header-dropdown">
                                <div class="row-sm-13">
                                    <form action="#" method="post">
                                    <li>
                                        <div class="form-group m-t-24">
                                            <input type="text" class="form-control" placeholder="Expense Detail" name="edetail">

                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group m-t-24">
                                            <input type="text" class="form-control" placeholder="Cost" name="ecost">
                                        </div>
                                    </li>

                                    <li>
                                        <div class="action">
                                                <button type="submit" class="btn btn-sm -m2 btn-outline-secondary" title="Edit" name="Add1">Add</button>&nbsp;
                                        </div>
                                    </li>
                                    </form>
                                </div>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive ">
                                <table class="table m-b-0 table table-hover js-basic-example dataTable table-custom">
                                    <thead class="thead-datk">
                                        <tr>
                                            <th>#</th>
                                            <th>Date</th>
                                            <th>Expenses Details</th>
                                            <th>Total Cost</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $expenses= mysqli_query($conn,"SELECT * FROM hospital.expenses;");
                                        while($expensesrow=mysqli_fetch_assoc($expenses))
                                        {
                                        echo"<tr>";
                                            echo"<td>". $expensesrow['expid'] ."</td>";
                                            echo"<td>". $expensesrow['date'] ."</td>";
                                            echo"<td><span>". $expensesrow['details'] ."</span></td>";
                                            echo"<td>". $expensesrow['total'] ."</td>";
                                        echo"</tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>All Income</h2>
                            <ul class="header-dropdown">
                                <div class="row-sm-13">
                                    <form action="#" method="post">
                                    <li>
                                        <div class="form-group m-t-24">
                                            <input type="text" class="form-control" placeholder="Income Source" name="isource">

                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group m-t-24">
                                            <input type="text" class="form-control" placeholder="Total" name="itotal">
                                        </div>
                                    </li>

                                    <li>
                                        <div class="action">
                                                <button type="submit" class="btn btn-sm -m2 btn-outline-secondary" title="Edit" name="Add2">Add</button>&nbsp;

                                        </div>
                                    </li>
                                    </form>
                                </div>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive ">
                                <table class="table m-b-0 table table-hover js-basic-example dataTable table-custom">
                                    <thead class="thead-datk">
                                        <tr>
                                            <th>#</th>
                                            <th>Date</th>
                                            <th>Income Source</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $income= mysqli_query($conn,"SELECT * FROM hospital.income;");
                                        while($incomerow=mysqli_fetch_assoc($income))
                                        {
                                        echo"<tr>";
                                            echo"<td>". $incomerow['incid'] ."</td>";
                                            echo"<td>". $incomerow['date'] ."</td>";
                                            echo"<td><span>". $incomerow['incomesource'] ."</span></td>";
                                            echo"<td>". $incomerow['total'] ."</td>";
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

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>All Patient Bill's</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive ">
                                <table class="table m-b-0 table table-hover js-basic-example dataTable table-custom">
                                    <thead class="thead-datk">
                                        <tr>
                                            
                                            <th>Patient Id</th>
                                            <th>Invoice No</th>
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php 
                                        $pbill= mysqli_query($conn,"SELECT * FROM hospital.patientbill;");
                                        while($pbillrow=mysqli_fetch_assoc($pbill))
                                        {
                                        echo"<tr>";
                                            echo"<td>". $pbillrow['pid'] ."</td>";
                                            echo"<td>". $pbillrow['invoiceid'] ."</td>";
                                            echo"<td><span>". $pbillrow['pname'] ."</span></td>";
                                            echo"<td>". $pbillrow['date'] ."</td>";
                                            echo"<td>". $pbillrow['GrandTotal'] ."</td>";
                                            echo"<td>". $pbillrow['status'] ."</td>";
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
  include("include/account-footer.php");
  ?>