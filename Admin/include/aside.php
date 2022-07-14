
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="home.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">
        <?php if(isset($_SESSION['ADID'])){
              echo "Admin Panel";
        } 
        ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <?php if(isset($_SESSION['ADID'])){ ?>
          <img src="uploads/<?php echo $_SESSION['ADMINPIC']; ?> " class="img-circle elevation-2" alt="User Image">
        <?php } ?>
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php if(isset($_SESSION['ADID'])){
              echo $_SESSION['ADMINNAME'];
        } 
        ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="home.php" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Manage Admin
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Admin.php" class="nav-link">
                  <i class="fas fa-edit nav-icon"></i>
                  <p>Add Admin</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Admin_Table.php" class="nav-link">
                  <i class="fas fa-list nav-icon"></i>
                  <p>Admins List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-building"></i>
              <p>
                Manage Departments
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Department.php" class="nav-link">
                  <i class="fas fa-edit nav-icon"></i>
                  <p>Add Departments</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Department_Table.php" class="nav-link">
                  <i class="fas fa-list nav-icon"></i>
                  <p>Department List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-shield "></i>
              <p>
               Manage Doctors
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Doctor.php" class="nav-link">
                  <i class="fas fa-edit nav-icon"></i>
                  <p>Add Doctor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Doctor_Table.php" class="nav-link">
                  <i class="fas fa-list nav-icon"></i>
                  <p>Doctor List</p>
                </a>
              </li>
            </ul>
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Manage Patients
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Patient.php" class="nav-link">
                  <i class="fas fa-edit nav-icon"></i>
                  <p>Add Patients</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Patient_Table.php" class="nav-link">
                  <i class="fas fa-list nav-icon"></i>
                  <p>Patients List</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-plus"></i>
              <p>
                Nurse
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Nurse.php" class="nav-link">
                  <i class="fas fa-user nav-icon"></i>
                  <p>Form</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Nurse_Table.php" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>Table</p>
                </a>
              </li>
            </ul>
          </li> -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-bed"></i>
              <p>
                Manage Room
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="room.php" class="nav-link">
                  <i class="fas fa-edit nav-icon"></i>
                  <p>Add Room</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="room_Table.php" class="nav-link">
                  <i class="fas fa-list nav-icon"></i>
                  <p>Add Room</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-eye-dropper"></i>
              <p>
                Manage Blood Bank
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="bloodbank.php" class="nav-link">
                  <i class="fas fa-edit nav-icon"></i>
                  <p>Add Blood Bank</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="bloodbank_table.php" class="nav-link">
                  <i class="fas fa-list nav-icon"></i>
                  <p>Blood Bank List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-dollar-sign"></i>
              <p>
                Manage Bill
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="bill.php" class="nav-link">
                  <i class="fas fa-edit nav-icon"></i>
                  <p>Add Bill</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="bill_table.php" class="nav-link">
                  <i class="fas fa-list nav-icon"></i>
                  <p>Bill List</p>
                </a>
              </li>
            </ul>
          </li>
          </li>
          <li class="nav nav-item"><a href="logout.php" class="nav nav-link"><i class="fas fa-sign-out-alt">Logout</i></a></li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>