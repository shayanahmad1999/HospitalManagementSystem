<?php require 'Admin/include/connection.php'; ?>
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="assest/style.css">

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hospital Management System</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
</head>
<body>

	<nav id="navbar-nav" class="navbar navbar-expand navbar-light justify-content-around shadow-lg toast-body toast-header sticky-top">
		<li class="nav nav-item"><a href="" id="brand" class="nav navbar-brand text-dark font-italic font-weight-bolder">Hospital Logo</a></li>
		<ul class="navbar nav">
			<li class="nav nav-item"><a href="index.php" class="nav nav-link text-secondary active" style="border-bottom:2px solid black;">Home</a></li>
			<li class="nav nav-item"><a href="#about" class="nav nav-link text-secondary">About</a></li>
			<li class="nav nav-item"><a href="#deparment" class="nav nav-link text-secondary">Departments</a></li>
			<li class="nav nav-item"><a href="#doctors" class="nav nav-link text-secondary">Doctors</a></li>
			<li class="nav nav-item"><a href="#appoinment" class="nav nav-link text-secondary"><button class="btn btn-primary p-1 badge-pill">Make an Appointment </button></a></li>
		</ul>
	</nav> 

	<div class="container-fluid">
	<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">

      <img src="images/hero-bg.jpg" alt="Los Angeles" width="1370" height="500">
      <div class="carousel-caption">
        <h1 class="card-deck text-dark">Welcome to our Hospital</h1>
        <h4 class="card-deck text-dark">We had such a great time in LA!</h4>
        <button class="btn btn-primary badge-pill p-2 font-weight-light btn-outline-primary w-25 float-left" style="font-size:20px;">Get Started</button>
        <br><br><br><br><br><br><br><br><br><br><br><br>
      </div>   
    </div>
    <div class="carousel-item">
        <img src="images/hero-bg.jpg" alt="Los Angeles" width="1370" height="500">
      <div class="carousel-caption">
          <h1 class="card-deck text-dark">Welcome to our Hospital</h1>
        <h4 class="card-deck text-dark">We had such a great time in LA!</h4>
        <button class="btn btn-primary badge-pill p-2 font-weight-light btn-outline-primary w-25 float-left" style="font-size:20px;">Get Started</button>
        <br><br><br><br><br><br><br><br><br><br><br><br>
      </div>   
    </div>
    <div class="carousel-item">
        <img src="images/hero-bg.jpg" alt="Los Angeles" width="1370" height="500">
      <div class="carousel-caption">
         <h1 class="card-deck text-dark">Welcome to our Hospital</h1>
        <h4 class="card-deck text-dark">We had such a great time in LA!</h4>
        <button class="btn btn-primary badge-pill p-2 font-weight-light btn-outline-primary w-25 float-left" style="font-size:20px;">Get Started</button>
        <br><br><br><br><br><br><br><br><br><br><br><br>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<br>
	<div class="row">
		<div class="col-2"></div>
		<div class="col-3">
			<div class="card">
				<div class="card-body bg-primary">
					<h2 class="text text-light">Why Choose this Hospital</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut laboreet dolore magna aliqua. Duis aute irure dolor in reprehenderit Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.</p>
                <button class="btn btn-light badge-pill">Lern more ></button>
				</div>
			</div>
		</div>
		<div class="col-sm-2 col-md-2 col-lg-2">
			<div class="card badge-info border-warning">
				<div class="card-body">
					<i class="fas fa-car">icon</i>
					<p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
				</div>
			</div>
		</div>
		<div class="col-sm-2 col-md-2 col-lg-2">
			<div class="card badge-info border-warning">
				<div class="card-body">
					<i class="fas fa-car">icon</i>
					<p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
				</div>
			</div>
		</div>
		<div class="col-sm-2 col-md-2 col-lg-2">
			<div class="card badge-info border-warning">
				<div class="card-body">
					<i class="fas fa-car">icon</i>
					<p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
				</div>
			</div>
		</div>
	</div>
	</div>

<br><br><br><br><br>

<section id="about" class="about">
	<br><br><br>
	<div class="container-fluid">
		<br>
		<h1 class="text-center">About Us</h1>
		<hr style="width: 100px; height: 2px; background-color: rgb(146, 148, 148);">
	<div class="row">
	<div class="col-sm-6 col-md-6 col-lg-6">
		<img src="images/about.jpg" class="img-thumbnail" style="border-radius:50px;">
	</div>
	<div class="col-sm-6 col-md-6 col-lg-6">
		<h1 class="text text-dark" class="title">this is About our hospital</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut laboreet dolore magna aliqua. Duis aute irure dolor in reprehenderit Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.</p>

		  <div>
       <div><i class="fas fa-fingerprint"></i></div>
       <h4 class="title"><a href="" class="text text-dark">Lorem Ipsum</a></h4>
       <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
      </div>

        <div>
        	<div><i class="fas fa-gift"></i></div>
          <h4 class="title"><a href="" class="text text-dark">Nemo Enim</a></h4>
          <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
        </div>

            <div>
             <div><i class="fas fa-atom"></i></div>
             <h4 class="title"><a href="" class="text text-dark">Dine Pad</a></h4>
             <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
            </div>
	</div>
</div>
</div>
</section>

<br><br><br>

<div class="container">
	<section id="deparment" class="departments">
	<div class="">
		<br><br><br><br>
		<h1 class="text-center">Departments</h1>
		<hr style="width: 100px; height: 2px; background-color: rgb(146, 148, 148);">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut laboreet dolore magna aliqua. Duis aute irure dolor in reprehenderit Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.</p>
	</div>
	<div class="row">
        <?php 
        $query = "Select * from department where Department_Status = 1";
        $submit = mysqli_query($connect,$query);
        while($dept = mysqli_fetch_array($submit)){
        ?>
		<div class="col-sm-4 col-md-4 col-lg-4 d-flex align-items-stretch">
			<div class="card">
				<div class="card-header">
					<h3><?php echo $dept['Department_Name']; ?></h3>
				</div>
				<div class="card-body">
					<img id="imgs" src="Admin/uploads/<?php echo $dept['Department_Photo']; ?>" class="card-img img-thumbnail">
				</div>
				<div class="card-footer">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut laboreet dolore magna aliqua. Duis aute irure dolor in reprehenderit Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.</p>
				</div>
			</div>
		</div>
        <?php } ?>
	</div>
</section>
</div>

<br><br><br><br><br>

<section id="appoinment">
		<div class="container bg-light text-center">
			<br><br><br><br>
		<a href="#appoinment"><marquee><h1>Make an Appointment</h1></marquee></a>
		<h3>Appointment</h3>
		<hr style="width: 300px; height: 2px; background-color: rgb(0, 100, 255);">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut laboreet dolore magna aliqua. Duis aute irure dolor in reprehenderit Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.</p>
		<div class="card shadow btn-outline-primary">
			<div class="card-body shadow card-block bg-secondary">
				<form action="php/insert.php" method="post">
					<div class="row">
						<div class="col-sm-4 col-md-4 col-lg-4">
							<input type="text" name="name" placeholder="Your Name" class="form-control">
						</div>
						<div class="col-sm-4 col-md-4 col-lg-4">
							<input type="text" name="email" placeholder="Your Email" class="form-control">
						</div>
							<div class="col-sm-4 col-md-4 col-lg-4">
							<input type="text" name="phone" placeholder="Your Phone" class="form-control">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-sm-4 col-md-4 col-lg-4">
							<input type="date" name="appointment" class="form-control">
						</div>
						<div class="col-sm-4 col-md-4 col-lg-4">
							<select name="department" class="form-control">
                                <option>Select Department</option>
                                <?php 
                                $query = "Select * from department where Department_Status = 1";
                                $submit = mysqli_query($connect,$query);
                                while($SelDept = mysqli_fetch_array($submit)){
                                ?>
								<option value="<?php echo $SelDept['Department_ID']; ?>"><?php echo $SelDept['Department_Name']; ?></option>
                                <?php } ?>
							</select>
						</div>
							<div class="col-sm-4 col-md-4 col-lg-4">
							<select name="doctor" class="form-control">
								<option>Select Doctor</option>
                                <?php 
                                $query = "Select * from Doctor where Doctor_Status = 1";
                                $submit = mysqli_query($connect,$query);
                                while($SelDoc = mysqli_fetch_array($submit)){
                                ?>
								<option value="<?php echo $SelDoc['Doctor_ID']; ?>"><?php echo $SelDoc['Doctor_Name']; ?></option>
                                <?php } ?>
							</select>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">
							<textarea class="form-control" name="message" placeholder="Message (Optional)" rows="6"></textarea>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-sm-4 col-md-4 col-lg-4"></div>
						<div class="col-sm-4 col-md-4 col-lg-4">
							<button type="submit" class="btn btn-primary p-1 badge-pill">Make Appoinment</button>
							<input type="hidden" name="patient" value="insert">
						</div>
					</div>
				</form>
			</div>
		</div>
		<br>
	</div>
</section>


<br><br>

	<div class="container">
		<section id="doctors">
	<div class="">
		<br><br><br><br>
		<h1 class="text-center">Doctors</h1>
		<hr style="width: 100px; height: 2px; background-color: rgb(146, 148, 148);">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut laboreet dolore magna aliqua. Duis aute irure dolor in reprehenderit Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.</p>
	</div>
	<div class="row">
    <?php 
    $query = "Select * from doctor where Doctor_Status = 1";
    $submit = mysqli_query($connect,$query);
    while($doct = mysqli_fetch_array($submit)){
    ?>
		<div class="col-sm-6 col-md-6 col-lg-6">
			<div class="card shadow">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-6 col-md-6 col-lg-6">
                            <a href="" class="nav-link-dark"><img id="imgs" src="Admin/uploads/<?php echo $doct['Doctor_Photo']; ?>" class="rounded-circle" width="100%"></a>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6">
							<h3><?php echo  $doct['Doctor_Name']; ?></h3>
							<h6><?php echo  $doct['Doctor_Email']; ?></h6>
							<hr style="width: 100%; height: 1px; background-color: rgb(146, 148, 148);">
							<p style="font-size:12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
							<h6>facebook,twitter,insta</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
    <?php } ?>
	</div>
	<br>
</section>
</div>


  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Hospital</h3>
            <p>
              Province KPK <br>
              Pabbi, near Nowshera<br>
              Pakistan <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#deparment">Department</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#doctors">Doctors</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

	<a href="" class="nav-link float-right text text-primary">Back to top&#128512;</a>
</body>
</html>
