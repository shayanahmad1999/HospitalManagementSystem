<?php 

require 'include/connection.php';

$id = $_GET['id'];
$query = "SELECT Doctor_ID, Doctor_Name, Doctor_Email, Doctor_Phone, Doctor_Address,  Doctor_Photo FROM `doctor` where Doctor_ID = '$id'";
$go = mysqli_query($connect,$query);
$profile = mysqli_fetch_array($go);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'include/head.php'; ?>

    <style>

      tr{
        border-top-style: dotted;
        border-bottom-style: dotted;
      }
      @media print{
        button,footer,section{
          visibility: hidden;
        }
      }

    </style>

</head>
<body>
<?php require 'include/navbar.php'; ?>
<?php require 'include/aside.php'; ?>
<div class="row">
  <div class="col-6"></div>
      <div class="col-4">
<br><br>  
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header bg-danger">
        <h4 class="modal-title">Doctor Record</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">
          <div class="col-12">
           <div class="x_content">
            <table class="table table-striped table-hover table-striped">
              <div class="row">
             <tr>
             <div class="col-6">
                <img src="uploads/<?php echo  $profile['Doctor_Photo']; ?>" class="img-thumbnail" width="50%" alt="">
                </div>
             </tr>
              </div>
              <br>
             <tr>
            <td>
            <label for="">ID</label>
            </td>
            <td><?php echo $profile['Doctor_ID']; ?></td>
             </tr>
             <tr>
            <td>
            <label for="">Name</label>
            </td>
            <td><?php echo $profile['Doctor_Name']; ?></td>
             </tr>
             <tr>
            <td>
            <label for="">Email</label>
            </td>
            <td><?php echo $profile['Doctor_Email']; ?></td>
             </tr>
             <tr>
            <td>
            <label for="">Phone</label>
            </td>
            <td><?php echo $profile['Doctor_Phone']; ?></td>
             </tr>
             <tr>
            <td>
            <label for="">Address</label>
            </td>
            <td><?php echo $profile['Doctor_Address']; ?></td>
             </tr>
            </table>
          </div>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-info" onclick="window.print()"><i class="fas fa-print"></i></button>
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-window-close"></i></button>
      </div>

    </div>
  </div>
</div>
      </div>
    </div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Doctor &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="uploads/<?php echo $profile['Doctor_Photo']; ?>"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $profile['Doctor_Name']; ?></h3>

                <p class="text-muted text-center"><?php echo $profile['Doctor_Email']; ?></p>

                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
     <div class="col-md-8"><div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Profile</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="img-fluid img-circle"
                       src="uploads/<?php echo $profile['Doctor_Photo']; ?>"
                       alt="User profile picture" width="60%">
                </div>
              </div>
                <hr>
               <strong><button class="btn btn-dark"><i class="fas fa-upload"></i><b> Change image</b></button></strong>&nbsp;
               <strong><button class="btn btn-danger"><b> Upload</b></button></strong>&nbsp;
               <strong><button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#myModal"><i class="fas fa-eye"></i><b> View</b></button></strong>
              
              </div>
              <!-- /.card-body -->
            </div>
        </div>
    </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
    
</body>
</html>

