<?php
  include("include/pharma-header.php");
  ?>
<!--MAIN Content-->
            <div class="row clearfix">
                   <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="tab-content padding-0">
                        <div class="tab-pane active" id="Basic">
                            <div class="card">
                                <div class="header">
                                    <h6>Manage Stock</h6>
                                    <ul class="header-dropdown">
                                        <div class="col-sm-13">
                                            <form action="#" method="post">
                                            <li>
                                                <div class="form-group">
                                                    <select class="form-control show-tick" name="mid" >
                                                        <option value="">- Medicine Id -</option>
                                                        <?php 
                                                        $result4= mysqli_query($conn,"SELECT mid FROM hospital.medicinepharmacy");
                                                        while($row=mysqli_fetch_assoc($result4)){
                                                            echo"<option value='".$row['mid']." '>".$row['mid']."</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="action">
                                                        <button type="submit" class="btn btn-sm -m2 btn-outline-danger  js-sweetalert" title="Delete" name="delete">Delete</button>
                                                </div>
                                            </li>
                                        </form>
                                        </div>
                                    </ul>
                                </div>
                                <form action="#" method="post">
                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label><small>Brand Name :</small></label>
                                                <input type="text" class="form-control" placeholder="Brand Name" name="bname" >
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label><small>Content With Quantity :</small></label>
                                                <input type="text" class="form-control" placeholder="content:20mg,content2:10mg"name="content">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label><small>Use of Medicine :</small></label>
                                                <input type="text" class="form-control" placeholder="Use of Medicine" name="uses">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-4 ">
                                            <div class="form-group">
                                                <label><small>Mfg Date :</small></label>
                                                <input type="date" class="form-control" placeholder="Mfg Date" name="mfgdate">
                                            </div>
                                        </div>
                                        <div class="col-sm-4 ">
                                            <div class="form-group">
                                                <label><small>Expiry Date :</small></label>
                                                <input type="date" class="form-control" placeholder="Expiry Date" name="expdate">
                                            </div>
                                        </div>
                                        <!-- <div class="col-sm-4 ">
                                            <div class="form-group">
                                                <label><small>Package Type :</small></label>
                                                <select class="form-control show-tick" name="packaget">
                                                        <option value="" selected="selected">- Select Pkg Type -</option>
                                                        <option value="Tablet">Tablet</option>
                                                        <option value="Capsule">Capsule</option>
                                                        <option value="liquid">liquid</option>
                                                        <option value="Cream">Cream</option>
                                                </select>
                                            </div>
                                        </div> -->
                                        <div class="col-sm-4 ">
                                            <div class="form-group">
                                                <label><small>Package Size :</small></label>
                                                <input type="text" class="form-control" placeholder="Ex :10tab/15tab/100ml/20mg" name="packages">
                                            </div>
                                        </div>
                                        <div class="col-sm-4 ">
                                            <div class="form-group">
                                                <label><small>Batch No :</small></label>
                                                <input type="text" class="form-control" placeholder="abc12564" name="batch">
                                            </div>
                                        </div>
                                        <div class="col-sm-4 ">
                                            <div class="form-group ">
                                                <label><small>Prise per Tablet :</small></label>
                                                <input type="number" class="form-control" placeholder="10.15" name="ppt">
                                            </div>
                                        </div>
                                        <div class="col-sm-4 ">
                                            <div class="form-group ">
                                                <label><small>Prise per Pack :</small></label>
                                                <input type="number" class="form-control" placeholder="100.15" name="ppp">
                                            </div>
                                        </div>
                                        <div class="col-sm-4 ">
                                            <div class="form-group ">
                                                <label><small>Add Stock:</small></label>
                                                <input type="number" class="form-control" placeholder="Quantity of Pack" name="addstock">
                                            </div>
                                        </div>
                                        <div class="col-sm-4 ">
                                            <div class="form-group ">
                                                <label><small>Health Effect:</small></label>
                                                <input type="text" class="form-control" placeholder="headache fever weakness" name="healthEffect">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="Add">Add Stock</button> &nbsp;&nbsp;
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php
  include("include/pharma-footer.php");

    if(isset($_POST['delete']))
    {
        if(isset($_POST["mid"]))
        {
            $Mid=$_POST["mid"];
            $sql="DELETE FROM hospital.medicinepharmacy where mid='$Mid'";
            $result=mysqli_query($conn,$sql);
            if($result)
            {
                echo"<script>window.alert('Successfully');</script>";
            }else echo"<script>window.alert('Please Retry');</script>";
        }else echo"<script>window.alert('Select Properly');</script>";
    }

    if(isset($_POST['Add']))
    {
        if(isset($_POST["bname"]) && isset($_POST["content"]) && isset($_POST["uses"]) && isset($_POST["mfgdate"]) && isset($_POST["expdate"]) && isset($_POST["packages"]) && isset($_POST["batch"]) && isset($_POST["ppt"]) && isset($_POST["ppp"]) && isset($_POST["addstock"]) && isset($_POST["healthEffect"]))
        {
            
            $bname = $_POST["bname"];
            $content = $_POST["content"];
            $uses = $_POST["uses"];
            $mfgdate = $_POST["mfgdate"];
            $expdate = $_POST["expdate"];
            $packages = $_POST["packages"];
            $ppt = $_POST["ppt"];
            $ppp = $_POST["ppp"];
            $batch = $_POST["batch"];
            $addstock = $_POST["addstock"];
            $healthEffect = $_POST["healthEffect"];

           
            $sql= "INSERT INTO `hospital`.`medicinepharmacy` (`brandName`, `containtQuality`, `uses`, `pkg`, `mfgDate`, `expiry`, `ratepartab`, `priceparpacket`, `stockAvai`, `healthEffect`, `batch`) VALUES ('$bname', '$content', '$uses', '$packages', '$mfgdate', '$expdate', '$ppt', '$ppp', '$addstock', '$healthEffect', '$batch');
";
            $insert = mysqli_query($conn,$sql);
            if($insert)
            {
                echo"<script>window.alert('Successfully');</script>";
            }else echo"<script>window.alert('Please Retry');</script>";

        }else echo"<script>window.alert('Please Fill Information Properly');</script>";
    }


  ?>