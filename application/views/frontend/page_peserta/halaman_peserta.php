
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

<?php 
foreach ($peserta as $peserta) {
?>
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
                  <?php echo $peserta->nama_siswa; ?>
                 </h3>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                   
                    <b>NISN</b> <a class="float-right"><?php echo $peserta->nisn; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Asal Sekolah</b> <a class="float-right"><?php echo $peserta->asal_sekolah; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Tanggal Lahir</b> <a class="float-right"><?php echo $peserta->tgl_lahir; ?></a>
                  </li>
                   <li class="list-group-item">
                    <b>Nomor WA</b> <a class="float-right"><?php echo $peserta->no_hp; ?></a>
                  </li>
                </ul>
                
                <?php if($peserta->id_asal_sekolah != '' and $peserta->id_alamat != '' and $peserta->id_jalur != '' and $peserta->id_ortu != '' ){ ?>
                <a href="<?php echo base_url('Cpeserta/detail_peserta')?>" class="btn btn-primary btn-block"><b>Lihat Semua</b></a>
              <?php } ?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
              <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Pengumuman</h3>
              </div>
              <div class="card-body">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="<?php echo base_url()?>assets/frontend/assets/img/toa.png" alt="user image">
                        <span class="username mt-2">
                          <a href="#">Pengumuman Hasil</a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                     <?php echo $peserta->nama_siswa; ?>, <b><?php echo $peserta->pengumuman ?></b>
                      </p>
                    </div>
                    
                    <?php if ($peserta->id_status == '9' or $peserta->id_status == '2' or $peserta->id_status == '8' or $peserta->id_status == '90' or $peserta->id_status == '80' or $peserta->id_status == '10'  ){ ?>

                   <?php  }else if($peserta->id_jalur == '1' or $peserta->id_jalur == '4' or $peserta->id_status == '20'){ ?>
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="<?php echo base_url()?>assets/frontend/assets/img/information.png" alt="user image">
                        <span class="username mt-2">
                          <a href="#">Informasi Tes Tulis</a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                       <?php echo $peserta->informasi_tes; ?>
                      </p>
                    </div>
                  <?php }else if($peserta->id_jalur == '3' or $peserta->id_jalur == '2'){ ?>
                      <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="<?php echo base_url()?>assets/frontend/assets/img/information.png" alt="user image">
                        <span class="username mt-2">
                          <a href="#">Informasi Pengumuman Jalur Non Akademik</a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Setelah Mengisi Form, Tunggu Hasil Pengumuman Jalur Non Akademik (PRESTASI Dan KETM) Yang akan Diumumkan Sesuai Jadwal Yang Telah Ditentukan.
                      </p>
                    </div>
                <?php   } ?>

                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="<?php echo base_url()?>assets/frontend/assets/img/information.png" alt="user image">
                        <span class="username mt-2">
                          <a href="#">Informasi</a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        <?php echo $peserta->informasi ?>
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


    <?php } ?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->