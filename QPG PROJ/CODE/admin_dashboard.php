<?php include 'header.php'; ?>
<style>
	.sidebar{
		height:1200px;
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
                            <p class="mb-0 color-card-head">Pending Subject</p>
                            <?php
                 		$sql = "SELECT COUNT(id) from subject_request where status='Pending' ";
                        $res= mysqli_query($con, $sql) or die(mysqli_error($con));
                        while($row=mysqli_fetch_array($res)) { ?>

                        

                   
                            <h2 class="text-white"><i class="mdi mdi-file-remove"></i> <?php echo $row['COUNT(id)']; ?>
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
                            <p class="mb-0 color-card-head">Total Subject</p>
                            <?php
                 		$sql = "SELECT COUNT(subject_id) from subject";
                        $res= mysqli_query($con, $sql) or die(mysqli_error($con));
                        while($row=mysqli_fetch_array($res)) { ?>
                            <h2 class="text-white"><i class="mdi mdi-file-check"></i> <?php echo $row['COUNT(subject_id)']; ?>
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
                            <p class="mb-0 color-card-head">Total Staff</p>
                            <?php
                 		$sql = "SELECT COUNT(id) from user";
                        $res= mysqli_query($con, $sql) or die(mysqli_error($con));
                        while($row=mysqli_fetch_array($res)) { ?>
                            <h2 class="text-white"><i class="mdi mdi-file-eye"></i> <?php echo $row['COUNT(id)']; ?>
                            </h2><?php } ?>
                          </div>
                          <i class="card-icon-indicator mdi mdi-briefcase-outline bg-inverse-icon-danger"></i>
                        </div>
                      
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              



                  </div>
                </div>
              </div>
            </div>
          </div>
<?php include 'footer.php'; ?>