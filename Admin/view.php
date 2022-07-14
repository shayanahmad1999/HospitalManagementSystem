<?php 

require 'include/connection.php';

$vid = $_GET['vid'];
$query = "SELECT Patient_ID, Patient_Name, Patient_Email, Patient_Phone, Patient_Appointment, Patient_Photo, Patient_Message FROM `patient` where Patient_ID = '$vid'";
$go = mysqli_query($connect,$query);
$view = mysqli_fetch_array($go);

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
        <h4 class="modal-title">Patient Details</h4>
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
                <img src="uploads/<?php echo  $view['Patient_Photo']; ?>" class="img-thumbnail" width="50%" alt="">
                </div>
             </tr>
              </div>
              <br>
             <tr>
            <td>
            <label for="">ID</label>
            </td>
            <td><?php echo $view['Patient_ID']; ?></td>
             </tr>
             <tr>
            <td>
            <label for="">Name</label>
            </td>
            <td><?php echo $view['Patient_Name']; ?></td>
             </tr>
             <tr>
            <td>
            <label for="">Email</label>
            </td>
            <td><?php echo $view['Patient_Email']; ?></td>
             </tr>
             <tr>
            <td>
            <label for="">Phone</label>
            </td>
            <td><?php echo $view['Patient_Phone']; ?></td>
             </tr>
             <tr>
            <td>
            <label for="">Appointment Date</label>
            </td>
            <td><?php echo $view['Patient_Appointment']; ?></td>
             </tr>
             <tr>
            <td>
            <label for="">Description</label>
            </td>
            <td><?php echo $view['Patient_Message']; ?></td>
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
              <li class="breadcrumb-item active">User Profile</li>
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
                       src="uploads/<?php echo  $view['Patient_Photo']; ?>"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo  $view['Patient_Name']; ?></h3>

                <p class="text-muted text-center"><?php echo  $view['Patient_Message']; ?></p>
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
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class=" img-fluid img-circle"
                       src="uploads/<?php echo  $view['Patient_Photo']; ?>"
                       alt="User profile picture" width="60%">
                </div>
              </div>
                <hr>
               <strong><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fas fa-eye"></i><b> View Record</b></button></strong>
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

