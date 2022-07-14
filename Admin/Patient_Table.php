<?php 
require 'include/connection.php';

if(isset($_GET['id']) && $_GET['id'] !="")
{
  $id = $_GET['id'];
  $StId = $_GET['stid'];

  if($StId == 0)
  {
    $go = mysqli_query($connect,"update patient set Patient_Status = 1 where Patient_ID = '$id'");
  }
  else
  {
    $go = mysqli_query($connect,"update patient set Patient_Status = 0 where Patient_ID = '$id'");
  }

}
if(isset($_GET['search']))
{
  $search = $_GET['search'];
  $go = mysqli_query($connect,"select * from patient where Patient_Name like '%$search%'");
}
else
{
$query = "select * from patient
inner join doctor on patient.Doctor_ID = doctor.Doctor_ID
inner join department on patient.Department_ID = department.Department_ID";
$go = mysqli_query($connect,$query);
}

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
            <h1>Records</h1>
          </div>
          <div class="col-sm-4">
            <form action="" method="get">
              <input type="text" name="search" placeholder="Search" class="form-control">
            </form>
          </div>
          <div class="col-sm-4">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <?php 
                  if(isset($_GET['msg']) && $_GET['msg'] == 'success')
                  {
                    echo "<h2 class='alert alert-success alert-dismissible fade show'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>Congratulation! Your Record Delete Successfully</h2>";
                  }
                  elseif (isset($_GET['msg']) && $_GET['msg'] == 'error') {
                    echo "<h6 class='alert alert-danger alert-dismissible fade show'>
                         <button type='button' class='close' data-dismiss='alert'>&times;</button>Sorry! Your Record is Not Delete Successfully</h6>";
                  }
                  elseif (isset($_GET['msgs']) && $_GET['msgs'] == 'success') 
                  {
                    echo "<h6 class='alert alert-success alert-dismissible fade show'>
                          <button type='button' class='close' data-dismiss='alert'>&times;</button>Congratulation! Your Record Update Successfully</h6>";
                  }
                  elseif (isset($_GET['msgs']) && $_GET['msgs'] == 'error') 
                  {
                    echo "<h6 class='alert alert-danger alert-dismissible fade show'>
                          <button type='button' class='close' data-dismiss='alert'>&times;</button>Sorry! Your Record is Not Update Successfully</h6>";
                  }
                  else
                  {
                    echo "<h3 class='card-title'>Records</h3>";
                  }
                ?>
              </div>
              <div class="row">
                <div class="col-12">
                  <a href="Patient.php"><button class="btn btn-info"><i class="fas fa-user-circle">&nbsp;Insert Record</i></button></a>
                  <a href="Patient/deleteall.php" onclick="return confirm('are you sure want to delete all these records')"><button class="btn btn-danger"><i class="fas fa-trash-alt">&nbsp;Delete All</i></button></a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone No</th>
                    <th>Appointment Date</th>
                    <th>Photo</th>
                    <th>Message</th>
                    <th>Doctor</th>
                    <th>Department</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $a=1;
                     while($show = mysqli_fetch_array($go)){ ?>
                  <tr>
                    <td><?php echo $a; ?></td>
                    <td><?php echo $show['Patient_Name'] ?></td>
                    <td><?php echo $show['Patient_Email'] ?></td>
                    <td><?php echo $show['Patient_Phone'] ?></td>
                    <td><?php echo $show['Patient_Appointment'] ?></td>
                    <td><img src="uploads/<?php echo $show['Patient_Photo'] ?>" class="img-thumbnail" width="100%" alt=""></td>
                    <td><?php echo $show['Patient_Message'] ?></td>
                    <td><?php echo $show['Doctor_Name'] ?></td>
                    <td><?php echo $show['Department_Name'] ?></td>
                    <td>
                      <?php if($show['Patient_Status'] == 0){ ?>
                        <a href="Patient_Table.php?id=<?php echo $show['Patient_ID']; ?>&&stid=<?php echo $show['Patient_Status']; ?>"><button class="btn btn-danger"><i class="fas fa-times"></i></button></a>
                        <?php } else{ ?>
                          <a href="Patient_Table.php?id=<?php echo $show['Patient_ID']; ?>&&stid=<?php echo $show['Patient_Status']; ?>"><button class="btn btn-success"><i class="fas fa-check"></i></button></a>
                          <a href="Patient/delete.php?id=<?php echo $show['Patient_ID']; ?>"onclick="return confirm('are you sure to delete this record')"><button class="btn btn-danger"><i class="fas fa-trash"></i></button></a>
                          <a href="Patient_Edit.php?id=<?php echo $show['Patient_ID']; ?>"onclick="return confirm('are you sure to edit this record')"><button class="btn btn-info"><i class="fas fa-edit"></i></button></a>
                          <a href="view.php?vid=<?php echo $show['Patient_ID']; ?>"><button class="btn btn-secondary"><i class="fas fa-eye"></i></button></a>
                          <a href="payment_patient.php?bid=<?php echo  $show['Patient_ID']; ?>"><button class="btn btn-dark"><i class="fas fa-dollar-sign"></i></button></a>
                          <?php } ?>
                    </td>
                  </tr>
                  <?php $a++; } ?>
                </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
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
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
