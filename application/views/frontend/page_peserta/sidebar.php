<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
   <?php 
foreach ($peserta as $nav) {
?>
   <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-th-large"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
          <span class="dropdown-item dropdown-header">Menu</span>
          <div class="dropdown-divider"></div>
          <a href="<?php echo base_url(); ?>Cpeserta/logout_peserta" class="dropdown-item">
           <i class="fas fa-sign-out-alt mr-3"></i> Logout
          </a>
         
      </li>
     
    </ul>
  </nav>
  <!-- /.navbar -->
   <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?php echo base_url()?>assets/backend/dist/img/logo-man2.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Halaman Peserta</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url()?>assets/backend/dist/img/user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">

        
          <a href="#" class="d-block">
         <?php echo $nav->nama_siswa ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="<?php echo base_url('Cpeserta/halaman_peserta')?>" class="nav-link ">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profil Saya
              </p>
            </a>
          </li>
          <?php 
          if($nav->id_status == '1'){
          ?></a>
           <li class="nav-item ">
            <a href="<?php echo base_url('Cpeserta/halaman_form')?>" class="nav-link ">
              <i class="nav-icon fas fa-id-card"></i>
              <p>
                Form Data Diri
              </p>
            </a>
          </li>
          <?php 
          }?>
            </ul>
          </li>
        
        </ul>
      <?php } ?>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>