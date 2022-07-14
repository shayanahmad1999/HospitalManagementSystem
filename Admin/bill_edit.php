<?php 
require 'include/connection.php';

$id = $_GET['id'];
$query = "select * from bill where Bill_ID = '$id'";
$go = mysqli_query($connect,$query);
$show = mysqli_fetch_array($go);

?>
<!DOCTYPE html>
<html lang="en">

<?php require 'include/head.php'; ?>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

<?php require 'include/navbar.php'; ?>

<?php require 'include/aside.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-4">
            <h1>Bill</h1>
          </div>
          <div class="col-sm-4">
            <a href="bill_table.php"><button class="btnn btn-info"><i class="fas fa-table">Move to Table</i></button></a>
            </div>
          <div class="col-sm-4">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Validation</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
              <?php 
                
                if (isset($_GET['msg']) && $_GET['msg'] == 'success') {
                  echo "<div class='alert alert-success alert-dismissible'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                  <a href='#' class='alert-link'>Record Submit Successfully</a>.
              </div>";
                }
              elseif (isset($_GET['msg']) && $_GET['msg'] == 'error') {
                echo "<div class='alert alert-danger alert-dismissible'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                  <a href='#' class='alert-link'>Record is not Submit Successfully</a>.
              </div>";
                }
                else{
                echo "<h3 class='card-title'>Bill <small></small></h3>";
                }
                
                ?>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="Bill/update.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group">
                    <label>Doctor Charge</label>
                    <input type="number" name="doctor" class="form-control" placeholder="Enter Money" value="<?php echo  $show['Doctor_Charge']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Room Charge</label>
                    <input type="number" name="room" class="form-control" placeholder="Enter Money" value="<?php echo  $show['Room_Charge']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Laboratory Charge</label>
                    <input type="number" name="laboratory" class="form-control" placeholder="Enter Money" value="<?php echo $show['Laboratory_Charge']; ?>">
                  </div>
                  <div class="form-group">
                    <label>No of Days</label>
                    <input type="number" name="days" class="form-control" placeholder="Enter Days" value="<?php echo  $show['No_of_Days']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Patient</label>
                    <select name="patient" class="form-control">
                        <option>Select Patient</option>
                        <?php 
                            $query  = "select * from patient where Patient_Status = 1";
                            $go = mysqli_query($connect,$query);
                            while($list = mysqli_fetch_array($go)){
                                if($list['Patient_ID'] == $show['Patient_ID'])
                                {
                                    $select = "selected=selected";
                                }
                                else
                                {
                                    $select = "";
                                }
                        ?>
                        <option <?php echo $select; ?> value="<?php echo $list['Patient_ID'] ?>"><?php echo $list['Patient_Name']; ?></option>
                        <?php } ?>
                    </select>
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-danger">Reset</button>
                  <input type="hidden" name="bill" value="update">
                  <input type="hidden" name="update" value="<?php echo $show['Bill_ID']; ?>">
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

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
<!-- jquery-validation -->
<script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#quickForm').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      
      password: {
        required: true,
        minlength: 5
      },
      terms: {
        required: true
      },
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
</body>
</html>
