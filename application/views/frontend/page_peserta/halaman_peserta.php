
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

           
            <!-- About Me Box -->
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Info Saya</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?php echo base_url()?>assets/backend/dist/img/user.png"
                       alt="User profile picture">
                </div>
                <h3 class="profile-username text-center">

                  <?php
                  $peserta = $this->session->userdata('peserta');
                  extract($peserta);
                  echo $nama_siswa ?>
                 </h3>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                   
                    <b>NISN</b> <a class="float-right"><?php echo $nisn; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Asal Sekolah</b> <a class="float-right"><?php echo $asal_sekolah; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Tanggal Lahir</b> <a class="float-right"><?php echo $tgl_lahir; ?></a>
                  </li>
                   <li class="list-group-item">
                    <b>Nomor WA</b> <a class="float-right"><?php echo $no_hp; ?></a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block" style="display: none"><b>Follow</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
              <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Info Saya</h3>
              </div>
              <div class="card-body">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="<?php echo base_url()?>assets/frontend/assets/img/information.png" alt="user image">
                        <span class="username mt-2">
                          <a href="#">Informasi</a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Selamat anda telah terdaftar sebagai peserta PPDB MAN 2 Bandung. Tunggu konfirmasi selanjutnya melalui whatsapp untuk mengikuti tes BTQ.
                      </p>
                    </div>
                    <!-- /.post -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->