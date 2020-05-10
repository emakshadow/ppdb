<?php 
foreach ($peserta as $peserta) { ?>
<form class="regForm" method="POST" action="<?php echo base_url('Cpeserta/upload_berkas')?>" enctype="multipart/form-data"  id="form-berkas">
 <h3>Form Upload Berkas</h3>

<div class="form-group">
    <hr>
     <?php echo $this->session->flashdata('notif') ?>
    <div class="row">
    <div class="col-md-6 ">
    <label>Jalur Pendaftaran Yang Dipilih</label>
    <input type="text"  name="jalur" id="jalur" class="form-control"value="<?php echo $peserta->jalur ?>" readonly>
     <label class="mt-3">Upload Persyaratan</label>
    <input type="file"  name="berkas" id="berkas">
     <input type="hidden"  placeholder="hidden" name="nisn" id="nisn" value="<?php echo $peserta->nisn ?>">
    <span style="color: red">- Semua Persyaratan Digabungkan Menjadi Satu File Berbentuk PDF</span><br>
    <span style="color: red">- Format Nama File yang Di Upload Adalah NISN Anda. Contoh : 0059214269.pdf</span><br>
    <span style="color: red">- Maksimal Ukuran File 10 Mb.</span><br>
     <span style="color: red">- Data tidak bisa dirubah setelah anda menguploadnya.</span><br>
     <!--form-group -->
  <button type="submit" class="btn btn-primary">Upload</button>
   <button type="button" class="btn btn-default" onclick="window.history.go(-1);">Kembali</button>
    </div>
     <div class="col-md-5 ">
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Persyaratan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <p style="text-align: left; font-size: 13px;">
              <?php echo $peserta->persyaratan_umum ?><br>
              <?php echo $peserta->persyaratan_khusus ?>
                                </p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
    <!--row -->
   </div>
   <!--tab -->
  
  </div>

 

</div>
</form>
<?php }
?>