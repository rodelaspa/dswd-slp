<!DOCTYPE html>
<html lang="en">
<?php include('./../include/head.php');?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <?php include('./../include/dbcon.php'); ?>

  <!-- Preloader -->
  <?php include('./../include/loader.php'); ?>

  <!-- Navigation Bar -->
  <?php include('./include/navbar.php'); ?>
  
  <!-- Sidebar -->
  <?php include('./include/sidebar.php');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Participant Details</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Participants</a></li>
              <li class="breadcrumb-item active">Participant Details</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <section class="col-lg-12 connectedSortable">
                <div class="card card-primary card-outline">
                    <!-- <div class="card-header">
                        <h3 class="card-title">Mungkahing Proyekto For Microenterprise Developement</h3>
                    </div> -->
                    <!-- /.card-header -->
                    <div class="card-body" style="padding: 0 !important;">
                        <div class="bs-stepper">
                  <div class="bs-stepper-header" role="tablist">
                    <!-- your steps here -->
                    <div class="step" data-target="#projectsummary-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="projectsummary-part" id="projectsummary-part-trigger">
                        <span class="bs-stepper-circle">I</span>
                        <span class="bs-stepper-label">Basic Information</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#basicinfo-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="basicinfo-part" id="basicinfo-part-trigger">
                        <span class="bs-stepper-circle">II</span>
                        <span class="bs-stepper-label">Address</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#information-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                        <span class="bs-stepper-circle">2</span>
                        <span class="bs-stepper-label">Other Details</span>
                      </button>
                    </div>
                    
                    
                  </div>
                  <div class="bs-stepper-content">
                    <!-- Basic Info -->
                    <div id="projectsummary-part" class="content" role="tabpanel" aria-labelledby="projectsummary-part-trigger">
                      <div class="form-group">
                        <label>Lastname</label>
                        <input type="text" class="form-control" placeholder="Participant Lastname">
                      </div>
                      <div class="form-group">
                        <label>Firstname</label>
                        <input type="text" class="form-control" placeholder="Participant Firstname">
                      </div>
                      <div class="form-group">
                        <label>Middlename</label>
                        <input type="text" class="form-control" placeholder="Participant Middlename">
                      </div>

                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <label>Suffix</label>
                            <select class="form-control select1" required>
                                <option>Select Suffix</option>
                                <option>Jr.</option>
                                <option>Sr.</option>
                            </select>
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form-group">
                            <label>Birthday</label>
                            <input type="date" class="form-control select1">
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form-group">
                            <label>Sex</label>
                            <select class="form-control select1" required>
                                <option>Select Sex</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>LGBTQ+</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label>Civil Status</label>
                            <select class="form-control select1" required>
                                <option>Select Civil Status</option>
                                <option>Single</option>
                                <option>Married</option>
                                <option>Divorced</option>
                                <option>Separated</option>
                                <option>Widowed</option>
                            </select>
                          </div>
                        </div>

                      </div>
                       

                      <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                    </div>

                    <!-- Address -->
                    <div id="basicinfo-part" class="content" role="tabpanel" aria-labelledby="basicinfo-part-trigger">
                      <div class="row">
                        <div class="col-sm-10">
                          <div class="form-group">
                            <label>Address of the SLPA</label>
                            <div class="row">
                              <select class="form-control select1 col-sm-2" required disabled>
                                <option>Select Region</option>
                                <option selected>Region V</option>
                              </select>
                              &nbsp
                              <!----- Select Province ----->
                              <select class="form-control select1 col-sm-3" id="prov_id" name="prov_id"  required>
                                <option>Select Province</option>
                                <?php
                                  $province_query = mysqli_query($conn, "SELECT DISTINCT prov_code, prov_desc FROM province ORDER BY prov_desc ASC") or die(mysqli_error());
                                  while ($province_row = mysqli_fetch_array($province_query)) {
                                ?>
                                <option value="<?php echo $province_row['prov_code']?>"><?php echo $province_row['prov_desc']?></option-->
                                <?php } ?>
                              </select>

                              &nbsp
                              <!----- Select Municipality ----->
                              <select class="form-control select1 col-sm-3" id="mc_id" name="mc_id" required>
                                <option>Select Town/City/Municipality</option>
                                <?php
                                  $tcm_query = mysqli_query($conn, "SELECT DISTINCT tcm_code, tcm_desc FROM tcm ORDER BY tcm_desc ASC") or die(mysqli_error());
                                  while ($tcm_row = mysqli_fetch_array($tcm_query)) {
                                ?>
                                <option value="<?php echo $tcm_row['tcm_code']?>"><?php echo $tcm_row['tcm_desc']?></option-->
                                <?php } ?>
                              </select>
                              &nbsp

                              <!----- Select Barangay ----->
                              <select class="form-control select1 col-sm-3" id="mc_id" name="mc_id" required>
                                <option>Select Barangay</option>
                                <?php
                                  $brgy_query = mysqli_query($conn, "SELECT DISTINCT brgy_code, brgy_desc FROM barangay ORDER BY brgy_desc ASC") or die(mysqli_error());
                                  while ($brgy_row = mysqli_fetch_array($brgy_query)) {
                                ?>
                                <option value="<?php echo $brgy_row['brgy_code']?>"><?php echo $brgy_row['brgy_desc']?></option-->
                                <?php } ?>
                              </select>            
                            </div>
                          </div>
                         
                        </div>

                      </div>
                      
                      <div class="form-group">
                        <label>Street</label>
                        <input type="text" class="form-control" placeholder="Street">
                      </div>
                      <div class="form-group">
                        <label>Zone</label>
                        <input type="text" class="form-control" placeholder="Zone">
                      </div>
                      <button class="btn btn-default" onclick="stepper.previous()">Previous</button>
                      <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                    </div>

                    <!-- Objectives -->
                    <div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                      <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                          </div>
                        </div>
                      </div>
                      <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </div>
                        
                    </div>
                </div>
            </section>
            <!-- /.section table -->

        </div>
        <!-- /.row -->



        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
  

          </section>

        
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Footer -->
  <?php require_once('./../include/footer.php');?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

  <!-- Scripts -->
  <?php require_once('./../include/script.php');?>
</body>
</html>
