<!DOCTYPE html>
<html lang="en">
<?php require_once('./../include/head.php');?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <?php require_once('./../include/loader.php'); ?>

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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                <div class="card">
                    <!-- <div class="card-header">
                        <h3 class="card-title">Mungkahing Proyekto For Microenterprise Developement</h3>
                    </div> -->
                    <!-- /.card-header -->
                    <div class="card-body">
                        <a href="add_participant_details.php"  class="btn btn-primary "><i class="fas fa-plus-circle"></i> Add Participant</a>
                        <br><br>
                        <table id="cvaTable" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Lastname</th>
                                    <th>Fistname</th>
                                    <th>Middlename</th>
                                    <th>Suffix</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
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
