  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?php echo base_url()?>assets/backend/dist/img/logo-man2.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Halaman Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url()?>assets/backend/dist/img/user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <?php 
          foreach ($user as $user) {

          ?>  
          <a href="#" class="d-block"><?php echo $user->nama; ?></a>
          <?php 
          }
          ?>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="<?php echo base_url('dasbor')?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header">Data Peserta</li>
          <li class="nav-item">
            <a href="<?php echo base_url('Cadmin/btq')?>" class="nav-link">
              <i class="nav-icon fas fa-book-open"></i>
              <p>
                Peserta BTQ
              </p>
            </a>
          </li>
         
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-chalkboard nav-icon"></i>
              <p>
                Peserta Non Tes
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
               
              <li class="nav-item">
                <a href="<?php echo base_url('Cadmin/jalur_prestasi')?>" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                  <p>Jalur Prestasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('Cadmin/jalur_ketm')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jalur KETM</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-chalkboard-teacher nav-icon"></i>
              <p>
                Peserta Tes
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item">
            <a href="<?php echo base_url('Cadmin/jalur_akademik')?>" class="nav-link">
              <i class="nav-icon far fa-circle"></i>
              <p>
                Jalur Akademik
              </p>
            </a>
          </li>
              <li class="nav-item">
                 <a href="<?php echo base_url('Cadmin/jalur_ppt')?>" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                  <p>Jalur PPT</p>
                </a>
              </li>
            </ul>
          </li>
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
               <i class="fas fa-graduation-cap nav-icon"></i>
              <p>
               Peserta Lulus
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item">
            <a href="<?php echo base_url('Cadmin/lulus_akademik')?>" class="nav-link">
              <i class="nav-icon far fa-circle"></i>
              <p>
                Jalur Akademik
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="<?php echo base_url('Cadmin/lulus_prestasi')?>" class="nav-link">
              <i class="nav-icon far fa-circle"></i>
              <p>
                Jalur Prestasi
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="<?php echo base_url('Cadmin/lulus_ketm')?>" class="nav-link">
              <i class="nav-icon far fa-circle"></i>
              <p>
                Jalur KETM
              </p>
            </a>
          </li>
              <li class="nav-item">
                 <a href="<?php echo base_url('Cadmin/lulus_ppt')?>" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                  <p>Jalur PPT</p>
                </a>
              </li>
            </ul>
          </li>
        
          <li class="nav-header">Fitur Lainnya</li>
          <li class="nav-item">
            <a href="<?php echo base_url('Cadmin/berita')?>" class="nav-link">
              <i class="nav-icon far fa-newspaper"></i>
              <p>Berita</p>
            </a>
          </li>
          
      </nav>
      <!-- /.sidebar-menu -->

    </div>
    <!-- /.sidebar -->
  </aside>
