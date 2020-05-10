<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- general form elements -->
            <div class="card card-primary card-outline ">
              <!-- form start -->
              <form method="POST" action="<?php echo base_url('Excel/import_ppt')?>" enctype="multipart/form-data">
                <div class="card-body">
                  <?php echo $this->session->flashdata('notif') ?>
                  <div class="row">
                   <div class="col-md-7">
                      <div class="form-group">
                        <label for="exampleInputFile">Import Nilai</label>
                        <div class="input-group">
                          <input type="file" name="userfile" class="form-control" >
                        <div class="input-group-append">
                        <button type="submit" class="input-group-text">  <span id="">Import</span> </button>
                        </div>
                      </div>
                      <span style="color: red">*Perhatian!! Upload file hasil nilai saja.</span>
                    </div>
                  </div>
                  <!-- /.col-->
                  <div class="col-md-5">
                   <a href="<?php echo base_url("Excel/export_ppt"); ?>" class="btn btn-success" style="margin-top: 31px;">Beri Penilaian</a></h3>
                </div>
                  <!-- /.col-->
                </div>
              </div>
                  <!-- /.row-->
                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <!-- /.card -->
           <!-- /.card -->
            </div>
           <div class="row d-flex justify-content-center">
        <div class="col-md-12">
          <!-- general form elements -->
            <div class="card">
              <!-- form start -->
                  <form action="<?php echo base_url('excel/rekap_data_peserta')?>" method="POST">
                <div class="card-body">
                   <label>REKAP DATA</label>
                  <div class="row">
                   <div class="col-md-5 mt-1">
                      Pilih Data Rekap
                      <input type="hidden" name="pilih_jalur" value="ppt">
                      <input type="hidden" name="pilih_status" value="belum">
                      <select class="form-control" name="pilih_data">
                        <option value="data_diri">Data Diri</option>
                        <option value="asal_alamat">Asal Sekolah & Alamat</option>
                        <option value="ortu">Informasi Orang Tua</option>
                      </select>
                  </div>

                  <div class="col-md-2 mt-4">
                     <button type="submit" class="btn btn-success">Rekap</button>
                  </div>
                </div>
              </div>
                <form>
                  <!-- /.row-->
                </div>
                <!-- /.card-body -->
            </div>
            <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Peserta Jalur PPT </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="tabel-responsif" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nisn</th>
                  <th>Nama Peserta</th>
                  <th>Jenis Kelamin</th>
                  <th>No Whatsapp</th>
                  <th>Jalur</th>
                  <th>Status</th>
                  <th>Berkas</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                  $no=1;
                  foreach ($data_peserta as $data_peserta) {
                    $berkas = $data_peserta->berkas;
                    $nisn = $data_peserta->nisn;
                  ?>
                  
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $data_peserta->nisn ?></td>
                  <td><?php echo $data_peserta->nama_siswa ?></td>
                  <td><?php echo $data_peserta->jenis_kelamin ?></td>
                  <td><?php echo $data_peserta->no_hp ?></td>
                  <td><?php echo $data_peserta->jalur ?></td>
                  <td><?php echo $data_peserta->status ?></td>
                  <td><a href="<?php echo base_url('Cadmin/berkas/'.$nisn)?>" target="_blank"  class="btn-sm btn-success"><i class="fas fa-download"></i></a></td>
                </tr>
                  <?php 
                  $no++;
                  }
                  ?>
                
                </tbody>
               
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col -->

      </div>
    </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->