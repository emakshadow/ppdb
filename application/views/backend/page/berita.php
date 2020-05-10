  <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        
          <!-- /.col -->
          <div class="col-md-12">
            <form action="<?php echo base_url('Cadmin/add_berita')?>" method="POST" enctype="multipart/form-data" >
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Tambah Berita Baru</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php echo $this->session->flashdata('notif') ?>
                <div class="form-group">
                  <input class="form-control" type="text" name="judul" placeholder="Judul">
                </div>
                <div class="form-group">
                  <input class="form-control" type="file" name="file">
                </div>
                  <input type="hidden" value="<?php echo date('Y-m-d'); ?>" name="tanggal">
                <div class="form-group">
                    <textarea id="compose-textarea" class="form-control" name="isi" >
                     
                    </textarea>
                </div>
                
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <div class="float-right">
                  <button type="submit" class="btn btn-default"><i class="fas fa-pencil-alt"></i> Posting Berita</button>
                </div>
               
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
            </form>
          </div>
          <!-- /.col -->
          <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">List Berita </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="tabel-responsif" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Tanggal</th>
                  <th>File</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                  $no=1;
                  foreach ($berita as $berita) {
                  ?>
                  
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $berita->judul ?></td>
                  <td><?php echo $berita->tanggal ?></td>
                  <td><?php echo $berita->file ?></td>
                  <td>
                    <a href="<?php echo base_url('Cadmin/delete_berita/'.$berita->id_berita)?>"  class="btn-sm btn-danger"><i class="fas fa-trash"></i></a></td>
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
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>