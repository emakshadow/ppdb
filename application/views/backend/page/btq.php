<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <!-- general form elements -->
            <div class="card card-primary card-outline ">
              <!-- form start -->
              <form method="POST" action="#" enctype="multipart/form-data">
                <div class="card-body">
                  <?php echo $this->session->flashdata('notif') ?>
                  <div class="row">
                   <div class="col-7">
                      <div class="form-group">
                        <label for="exampleInputFile">Import Data</label>
                        <div class="input-group">
                          <input type="file" name="userfile" class="form-control" >
                        <div class="input-group-append">
                        <button type="submit" class="input-group-text">  <span id="">Import</span> </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.col-->
                  <div class="col-5">
                   <a href="<?php echo base_url("excel/export_btq"); ?>" class="btn btn-success" style="margin-top: 31px;">Export ke Excel</a></h3>
                </div>
                  <!-- /.col-->
                </div>
                  <!-- /.row-->
                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <!-- /.card -->
           <!-- /.card -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Peserta BTQ 
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="tabel-responsif" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nisn</th>
                  <th>Nama Peserta</th>
                  <th>Tanggal Lahir</th>
                  <th>Asal Sekolah</th>
                  <th>No Whatsapp</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $no=1;
                  foreach ($data_peserta as $data_peserta) {
                  ?>
                  
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $data_peserta->nisn ?></td>
                  <td><?php echo $data_peserta->nama_siswa ?></td>
                  <td><?php echo $data_peserta->asal_sekolah ?></td>
                  <td><?php echo $data_peserta->tgl_lahir ?></td>
                  <td><?php echo $data_peserta->no_hp ?></td>
                  <td><?php echo $data_peserta->id_status ?></td>
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
      <!-- /.row -->
    </section>
    <!-- /.content -->