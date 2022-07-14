<?php require 'include/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">

<?php require 'include/head.php'; ?>

<?php 

      if (isset($_POST['admin']) && $_POST['admin'] == 'login') {
        
        $email = $_POST['email'];
        $password = $_POST['password']; 

        $query = "select * from admin where Admin_Email='$email' and Admin_password = '$password' and Admin_Status = '1'";
        $login = mysqli_query($connect,$query);
        $number = mysqli_num_rows($login);
        if($number > 0)
        {
          $Admin = mysqli_fetch_array($login);
          
          $_SESSION['ADMINNAME'] = $Admin['Admin_Name'];
          $_SESSION['ADID'] = $Admin['Admin_ID'];
          $_SESSION['ADMINEMAIL'] = $Admin['Admin_Email'];
          $_SESSION['ADMINPIC'] = $Admin['Admin_Picture'];
// print_r($_SESSION); exit;
          header('location:home.php?success');
          exit();
        }
        else
        {
          header('location:index.php?error');
          exit();
        }

      }

?>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="home.php"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="index.php" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            <input type="hidden" name="admin" value="login">
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
