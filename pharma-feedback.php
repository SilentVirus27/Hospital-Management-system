<?php
  include("include/pharma-header.php");
  ?>
<!--MAIN Content-->
           <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Fill Form <small>Please Provide Us Your Valuable Feedback To Improve Our System </small> </h2>
                        </div>
                        <div class="body">
                            <form action="#" method="post">
                                <div class="col clearfix">
                                    
                                    <div class="col-sm-3">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Pharmacist" value="Other Services" name="usrtyp" >
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="col clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group m-t-24">
                                            <input type="text" class="form-control" placeholder="Your Name" name="uname">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group m-t-24">
                                            <textarea rows="2" class="form-control" placeholder="Feedback" name="feedback"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                        <label>Rate Us</label>
                                        <br/>
                                        <label >
                                            <input type="radio" name="rate" value="10">
                                            10 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </label>
                                        <label >
                                            <input type="radio" name="rate" value="20">
                                            20 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </label>
                                        <label >
                                            <input type="radio" name="rate" value="30">
                                            30 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </label>
                                        <label >
                                            <input type="radio" name="rate" value="40">
                                            40 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </label>
                                        <label >
                                            <input type="radio" name="rate" value="50">
                                            50 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </label>
                                        <label >
                                            <input type="radio" name="rate" value="60">
                                            60 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </label>
                                        <label >
                                            <input type="radio" name="rate" value="70">
                                            70 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </label>
                                        <label >
                                            <input type="radio" name="rate" value="80">
                                            80 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </label>
                                        <label >
                                            <input type="radio" name="rate" value="90">
                                            90 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </label>
                                        <label >
                                            <input type="radio" name="rate" value="100">
                                            100 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </label>
                                    </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary" name="Submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<?php
  include("include/pharma-footer.php");

  if(isset($_POST['Submit']))
    {
        if(isset($_POST["usrtyp"]) && isset($_POST["uname"]) && isset($_POST["feedback"]) && isset($_POST["rate"]))
        {
            
            $Rate = $_POST["rate"];
            $User = $_POST["usrtyp"];
            $Name = $_POST["uname"];
            $Feedback = $_POST["feedback"];
            $sql= "INSERT INTO `hospital`.`feedback` (`name`, `feedbacks`, `user`, `rate`) VALUES ('$Name', '$Feedback', '$User', '$Rate')";
            $insert = mysqli_query($conn,$sql);
            if($insert)
            {
                echo"<script>window.alert('Successfully');</script>";
            }else echo"<script>window.alert('Please Retry');</script>";

        }else echo"<script>window.alert('Please Fill Information Properly');</script>";
    }

  ?>