<?php include 'officer_header.php'; ?>
<style>
  .sidebar{
    height:700px;
  }
  </style>
  <div class="main-panel">
          <div class="content-wrapper pb-0">
            <div class="page-header flex-wrap">
              <h3 class="mb-0"> Hi, welcome back! 
              </h3>
  
            </div>
            <div class="row">
              <div class="col-xl-3 col-lg-12 stretch-card grid-margin">
                <div class="row">
                  <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                    <div class="card bg-warning">
                      <div class="card-body px-3 py-4">
                        <div class="d-flex justify-content-between align-items-start">
                          <div class="color-card">
                            <p class="mb-0 color-card-head">Approved  Hospitals</p>
                            <?php
                    $sql = "SELECT COUNT(id) from hospital_detail where status='Approved' ";
                        $res= mysqli_query($con, $sql) or die(mysqli_error($con));
                        while($row=mysqli_fetch_array($res)) { ?>

                        

                   
                            <h2 class="text-white"><i class="mdi mdi-hospital-building"></i> <?php echo $row['COUNT(id)']; ?>
                            </h2><?php  } ?>
                          </div>
                          <i class="card-icon-indicator mdi mdi-basket bg-inverse-icon-warning"></i>
                        </div>
                       
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3 pb-lg-0 pb-xl-3">
                    <div class="card bg-primary">
                      <div class="card-body px-3 py-4">
                        <div class="d-flex justify-content-between align-items-start">
                          <div class="color-card">
                            <p class="mb-0 color-card-head">Total Children</p>
                            <?php
                    $sql = "SELECT COUNT(child_id) from child_detail ";
                        $res= mysqli_query($con, $sql) or die(mysqli_error($con));
                        while($row=mysqli_fetch_array($res)) { ?>
                            <h2 class="text-white"><i class="mdi mdi-account-multiple"></i> <?php echo $row['COUNT(child_id)']; ?>
                            </h2><?php } ?>
                          </div>
                          <i class="card-icon-indicator mdi mdi-briefcase-outline bg-inverse-icon-primary"></i>
                        </div>
                      
                      </div>
                    </div>
                  </div>
                   <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3 pb-lg-0 pb-xl-3">
                    <div class="card bg-danger">
                      <div class="card-body px-3 py-4">
                        <div class="d-flex justify-content-between align-items-start">
                          <div class="color-card">
                            <p class="mb-0 color-card-head">Total Vaccine</p>
                            <?php
                    $sql = "SELECT COUNT(vaccine_id) from vaccination_detail ";
                        $res= mysqli_query($con, $sql) or die(mysqli_error($con));
                        while($row=mysqli_fetch_array($res)) { ?>
                            <h2 class="text-white"><i class="mdi mdi-needle"></i> <?php echo $row['COUNT(vaccine_id)']; ?>
                            </h2><?php } ?>
                          </div>
                          <i class="card-icon-indicator mdi mdi-briefcase-outline bg-inverse-icon-danger"></i>
                        </div>
                      
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-9 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-7">
                        <h5>Today's Vaccine Status</h5>
                       <p>
                        </p>
                      </div>
                      
                    </div>
          
                    <div class="row">
            <div class="col-xl-6 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3 pb-lg-0 pb-xl-3">
            <div class="card bg-success" style="margin-top:20px;">
                      <div class="card-body px-3 py-4">
                        <div class="d-flex justify-content-between align-items-start">
                          <div class="color-card">
                             <p class="mb-0 color-card-head">Today's Total Due Vaccine</p>

            <?php
            $date = date('d-m-Y');
            //echo $date;
                    $sql = "SELECT COUNT(sch_id) from vaccine_schedule where vaccine_date='$date' ";
                        $res= mysqli_query($con, $sql) or die(mysqli_error($con));
                        while($row=mysqli_fetch_array($res)) { ?>
                            <h2 class="text-white"><i class="mdi mdi-calendar-check"></i> <?php echo $row['COUNT(sch_id)']; ?>
                            </h2><?php } ?>
                           
              
                          </div>

                        </div>
                      
                      </div>
                    </div></div>
                    </div>

                    <div class="row">
            <div class="col-xl-6 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3 pb-lg-0 pb-xl-3">
            <div class="card bg-success" style="margin-top:20px;background: green !important;">
                      <div class="card-body px-3 py-4">
                        <div class="d-flex justify-content-between align-items-start">
                          <div class="color-card">
                             <p class="mb-0 color-card-head">Total Vaccine Done Today</p>

            <?php
            $date = date('d-m-Y');
            //echo $date;
                    $sql = "SELECT COUNT(sch_id) from vaccine_schedule where vaccine_date='$date' AND Status='Done' ";
                        $res= mysqli_query($con, $sql) or die(mysqli_error($con));
                        while($row=mysqli_fetch_array($res)) { ?>
                            <h2 class="text-white"><i class="mdi mdi-calendar-check"></i> <?php echo $row['COUNT(sch_id)']; ?>
                            </h2><?php } ?>
                           
              
                          </div>

                        </div>
                      
                      </div>
                    </div></div>
                    </div>

                    <div class="row">
            <div class="col-xl-6 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3 pb-lg-0 pb-xl-3">
            <div class="card bg-success" style="margin-top:20px;background: red !important;">
                      <div class="card-body px-3 py-4">
                        <div class="d-flex justify-content-between align-items-start">
                          <div class="color-card">
                             <p class="mb-0 color-card-head">Total Vaccine Pending Today</p>

            <?php
            $date = date('d-m-Y');
            //echo $date;
                    $sql = "SELECT COUNT(sch_id) from vaccine_schedule where vaccine_date='$date' AND Status='Pending' ";
                        $res= mysqli_query($con, $sql) or die(mysqli_error($con));
                        while($row=mysqli_fetch_array($res)) { ?>
                            <h2 class="text-white"><i class="mdi mdi-calendar-check"></i> <?php echo $row['COUNT(sch_id)']; ?>
                            </h2><?php } ?>
                           
              
                          </div>

                        </div>
                      
                      </div>
                    </div></div>
                    </div>



                  </div>
                </div>
              </div>
            </div>
          </div>
<?php include 'footer.php'; ?>