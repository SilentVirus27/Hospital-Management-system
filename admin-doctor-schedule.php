<?php
  include("include/admin-header.php");
  ?>
<!--MAIN Content-->
            <div class="row clearfix">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="body">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="body">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="date" class="form-control" placeholder="Event Date">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Event Title">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea class="form-control no-resize" placeholder="Event Description..."></textarea>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary">Add</button>
                        </div>
                    </div>
                </div>
            </div>
<?php
  include("include/admin-footer.php");
  ?>