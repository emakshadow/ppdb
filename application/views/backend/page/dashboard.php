 <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
  <?php echo $this->session->flashdata('notif') ?>

  <div class="row">
    <div class="col-md-5 ">
      <div class="card">
              <div class="card-header">
                <h3 class="card-title">Total Pendaftar</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Total Pendaftar BTQ</td>
                      <td>
                      <b> <?php echo $total_btq ?> Peserta </b>
                      </td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Total Pendaftar Akademik</td>
                      <td>
                         <b> <?php echo $total_akademik ?> Peserta </b> 
                      </td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Total Pendaftar Prestasi</td>
                      <td>
                         <b> <?php echo $total_prestasi ?> Peserta </b>
                      </td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Total Pendaftar KETM</td>
                      <td>
                         <b> <?php echo $total_ketm ?> Peserta </b>
                      </td>
                    </tr>
                    <tr>
                      <td>5.</td>
                      <td>Total Pendaftar PPT</td>
                      <td>
                         <b> <?php echo $total_ppt ?> Peserta </b>
                      </td>
                    </tr>
                   
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->


           <!-- aktifasi -->
       <div class="col-md-6 ml-4">
      <div class="card">
              <div class="card-header">
                <h3 class="card-title">Aktifasi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Kegiatan</th>
                      <th style="width: 30%;">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                     <?php foreach ($jadwal as $jadwal) { 
                        $id_jadwal = $jadwal->id_jadwal?>
                    <tr>
                      <td>Pendaftaran BTQ Dan Registrasi Ulang</td>
                      <td>
                       
                       <?php
                        if($id_jadwal == '1'){

                         echo '<button class="btn-sm btn-primary btnaktifasi" data-id="0">Aktif</button>';
                     
                       }
                       else if($id_jadwal != '1'){
                          echo '<button class="btn-sm btn-danger btnaktifasi" data-id="1">Tidak Aktif</button>';
                        } 
                      ?>
                      </td>
                    </tr>
                    <tr>
                    <tr>
                      <td>Pengumuman Jalur Non Akademik (PRESTASI Dan KETM)</td>
                      <td> <?php
                        if($id_jadwal == '2'){

                         echo '<button class="btn-sm btn-primary btnaktifasi" data-id="0">Aktif</button>';
                     
                       }
                       else if($id_jadwal != '2'){
                          echo '<button class="btn-sm btn-danger btnaktifasi" data-id="2">Tidak Aktif</button>';
                        } 
                      ?></td>
                    </tr>
                     <tr>
                      <td>Tes Tulis (Akademik dan PPT)</td>
                      <td> <?php
                        if($id_jadwal == '3'){

                         echo '<button class="btn-sm btn-primary btnaktifasi" data-id="0">Aktif</button>';
                     
                       }
                       else if($id_jadwal != '3'){
                          echo '<button class="btn-sm btn-danger btnaktifasi" data-id="3">Tidak Aktif</button>';
                        } 
                      ?></td>
                    </tr>
                     <tr>
                      <td>Pengumuman Tes Tulis (Akademik dan PPT)</td>
                      <td> <?php
                        if($id_jadwal == '4'){

                         echo '<button class="btn-sm btn-primary btnaktifasi" data-id="0">Aktif</button>';
                     
                       }
                       else if($id_jadwal != '4'){
                          echo '<button class="btn-sm btn-danger btnaktifasi" data-id="4">Tidak Aktif</button>';
                        } 
                      }
                      ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
  <?php foreach ($informasi as $informasi ) { ?>
 <div class="col-md-6 ">
      <div class="card">
              <div class="card-header">
                <h3 class="card-title">Informasi Jalur Akademik</h3>

              </div>
              <!-- /.card-header -->
              <div class="card-body ">
                  <form class="form-group" method="POST" action="<?php echo base_url('Cadmin/ubah_informasi')?>">
                    <label>Informasi Tes Akademik</label>
                    <textarea class="form-control" name="informasi_tes" rows="6"><?php echo $informasi->informasi_tes ?></textarea>
                    <button class="btn btn-primary mt-1 float-right">Ubah</button>
                  </form>
               </div>
            </div>
          </div>

      <div class="col-md-6">
      <div class="card">
              <div class="card-header">
                <h3 class="card-title">Info Terkini</h3>

              </div>
              <!-- /.card-header -->
              <div class="card-body ">
                  <form class="form-group" method="POST" action="<?php echo base_url('Cadmin/ubah_info')?>" >
                    <label>Info Terkini</label>
                    <textarea class="form-control" name="info_terkini" rows="6"><?php echo $informasi->info_terkini ?></textarea>
                    <button class="btn btn-primary mt-1 float-right">Ubah</button>
                  </form>
              
              </div>
            </div>
          </div>
 <?php  } ?>


        </div>
        <!-- /.row -->
 


      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
