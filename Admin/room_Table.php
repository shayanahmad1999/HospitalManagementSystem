<?php 

require 'include/connection.php';


if(isset($_GET['id']) && $_GET['id'] !=""){
  $id = $_GET['id'];
  $rst_id = $_GET['rst_id'];
  if($rst_id == 0){
  $query = "update room set room_status = 1 where room_id = '$id'";
  $go = mysqli_query($connect,$query);
  }
  else{
    $query = "update room set room_status = 0 where room_id = '$id'";
    $go = mysqli_query($connect,$query);
  }
}

if(isset($_GET['search']))
{
  $search = $_GET['search'];
  $go = mysqli_query($connect,"select * from room where room_type like '%$search%'"); 
}
else{
$query = "select * from room";
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
                <h3 class="card-title">
                  <?php
                      if (isset($_GET['msg']) && $_GET['msg'] == 'success') {
                          echo "<h2 class='alert alert-success alert-dismissible fade show'>
                                <button type='button' class='close' data-dismiss='alert'>&times;</button>Congratulation! Your Record Delete Successfully</h2>";
                      }
                      elseif (isset($_GET['msg']) && $_GET['msg'] == 'error') {
                                echo "<h6 class='alert alert-danger alert-dismissible fade show'>
                                     <button type='button' class='close' data-dismiss='alert'>&times;</button>Sorry! Your Record is Not Delete Successfully</h6>";
                      }
                      elseif (isset($_GET['msgs']) && $_GET['msgs'] == 'success') {
                                echo "<h6 class='alert alert-success alert-dismissible fade show'>
                                      <button type='button' class='close' data-dismiss='alert'>&times;</button>Congratulation! Your Record Update Successfully</h6>";
                      }
                      elseif (isset($_GET['msgs']) && $_GET['msgs'] == 'error') {
                                echo "<h6 class='alert alert-danger alert-dismissible fade show'>
                                      <button type='button' class='close' data-dismiss='alert'>&times;</button>Sorry! Your Record is Not Update Successfully</h6>";
                      }
                      else{
                              echo " <h2>Record<small></small></h2>";
                      }

                  ?>
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <a href="room.php"><button class="btn btn-info"><i class="fas fa-address-book">Insertion</i></button></a>
              <a href="Room/DeleteAll.php"><button class="btn btn-danger"><i class="fas fa-trash">Delete All</i></button></a>  
              <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Room Type</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $a = 1;
                        while($show = mysqli_fetch_array($go)){
                  ?>
                  <tr>
                    <td><?php echo $a; ?></td>
                    <td><?php echo $show['room_type']; ?></td>
                  <td>
                      <?php if($show['room_status'] == 0){ ?>
                      <a href="room_Table.php?id=<?php echo $show['room_id']; ?>&&rst_id=<?php echo $show['room_status']; ?>"><button class="btn btn-danger"><i class="fas fa-times"></i></button></a>
                      <?php } else{ ?>
                        <a href="room_Table.php?id=<?php echo $show['room_id']; ?>&&rst_id=<?php echo $show['room_status']; ?>"><button class="btn btn-success"><i class="fas fa-check"></i></button></a>
                        <a href="room_Edit.php?id=<?php echo $show['room_id']; ?>"><button class="btn btn-info"><i class="fas fa-edit"></i></button></a>
                        <a href="Room/delete.php?id=<?php echo $show['room_id']; ?>"><button class="btn btn-danger"><i class="fas fa-trash"></i></button></a>
                    </td>
                  </tr>
                  <?php $a++; } } ?>
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
