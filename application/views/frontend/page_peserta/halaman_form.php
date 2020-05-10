<section class="content">
<div class="container-fluid">

<?php 
foreach ($peserta as $peserta) {

$jalur = $peserta->id_jalur;
$nisn = $peserta->nisn;
$nik = $peserta->nik;
$id_asal_sekolah = $peserta->id_asal_sekolah;
$id_alamat = $peserta->id_alamat;
$id_ortu = $peserta->id_ortu;
$berkas = $peserta->berkas;
$id_status = $peserta->id_status;
if ($id_status == '10' or $id_status =='0') {
  redirect('Cfrontend/login_peserta');
}
else if ($jalur == '0'){
include(APPPATH.'views/frontend/page_peserta/form-emis/pilih_jalur.php');
}else{
  ?>
<!-- Timelime example  -->
        <div class="row">
          <div class="col-md-6">
            <!-- The time line -->
            <div class="timeline">
             <!-- timeline item -->
              <div>
                <i class="fas fa-user bg-red"></i>
                <div class="timeline-item">
                  <h3 class="timeline-header"><a href="#">INFORMASI</a></h3>

                  <div class="timeline-body">
                    Silahkan isi semua form dibawah untuk melengkapi data diri anda. <p style="color: red"> *Perhatian!! Data tidak bisa diubah kembali setelah ada menyimpannya</p>
                  </div>
                </div>
              </div>
              <div>
                <i class="fas  bg-blue">1</i>
                <div class="timeline-item">
                  <div class="timeline-body">
                  Form Data Diri
                  </div>
                  <div class="timeline-footer">
                    <?php if ($nik != '') {
                      ?>
                      <a href="#" class="btn btn-secondary btn-sm disabled"><i class="fas fa-check"> </i> Selesai</a>
                      <?php } else{ ?>
                    <a href="<?php echo base_url('Cpeserta/form_data_diri')?>" class="btn btn-primary btn-sm">Isi Form</a> 
                  <?php } ?>
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline item -->
              <div>
                <i class="fas  bg-green">2</i>
                <div class="timeline-item">
                  <div class="timeline-body">
                  Form Asal Sekolah
                  </div>
                  <div class="timeline-footer">
                    <?php if ($id_asal_sekolah != '') {
                      ?>
                      <a href="#" class="btn btn-secondary btn-sm disabled"><i class="fas fa-check"> </i> Selesai</a>
                      <?php } else{ ?>
                    <a href="<?php echo base_url('Cpeserta/form_asal_sekolah')?>" class="btn btn-primary btn-sm">Isi Form</a> 
                  <?php } ?>
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline item -->
              <div>
                <i class="fas  bg-yellow">3</i>
                <div class="timeline-item">
                  <div class="timeline-body">
                  Form Informasi Alamat Tempat Tinggal
                  </div>
                  <div class="timeline-footer">
                    <?php if ($id_alamat != '0') {
                      ?>
                      <a href="#" class="btn btn-secondary btn-sm disabled"><i class="fas fa-check"> </i> Selesai</a>
                      <?php } else{ ?>
                    <a href="<?php echo base_url('Cpeserta/form_alamat')?>" class="btn btn-primary btn-sm">Isi Form</a> 
                  <?php } ?>
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline item -->
              <div>
                <i class="fas  bg-red">4</i>
                <div class="timeline-item">
                  <div class="timeline-body">
                  Form Informasi Orang Tua/Wali
                  </div>
                  <div class="timeline-footer">
                    <?php if ($id_ortu != '0') {
                      ?>
                      <a href="#" class="btn btn-secondary btn-sm disabled"><i class="fas fa-check"> </i> Selesai</a>
                      <?php } else{ ?>
                    <a href="<?php echo base_url('Cpeserta/form_ortu')?>" class="btn btn-primary btn-sm">Isi Form</a> 
                  <?php } ?>
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline item -->
              <div>
                <i class="fas  bg-purple">5</i>
                <div class="timeline-item">
                  <div class="timeline-body">
                  Form Upload Persyaratan
                  </div>
                  <div class="timeline-footer">
                  <?php if ($berkas != '') {
                      ?>
                      <a href="#" class="btn btn-secondary btn-sm disabled"><i class="fas fa-check"> </i> Selesai</a>
                      <?php } else{ ?>
                    <a href="<?php echo base_url('Cpeserta/form_berkas')?>" class="btn btn-primary btn-sm">Isi Form</a> 
                  <?php } ?>
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline item -->

              <div>
                <i class="fas fa-check bg-maroon"></i>
                <div class="timeline-item">
                  <h3 class="timeline-header">Informasi</h3>
                  <div class="timeline-body">
                    <?php if($peserta->id_jalur == '1' or $peserta->id_jalur == '4' ){
                      echo $peserta->informasi_tes;
                    } else { ?>
                    Setelah Mengisi Form, Tunggu Hasil Pengumuman Jalur Non Akademik (PRESTASI Dan KETM) Yang akan Diumumkan Sesuai Jadwal Yang Telah Ditentukan.

                    <?php } 
                     if($peserta->id_asal_sekolah != '' and $peserta->id_alamat != '' and $peserta->id_jalur != '' and $peserta->id_ortu != '' ){ ?>
                     <a href="<?php echo base_url('Cpeserta/detail_peserta')?>" class="btn btn-primary col-md-12">LIHAT DETAIL DATA DIRI</a>
                      <?php } ?>
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              <div>
                <i class="fas fa-clock bg-gray"></i>
              </div>
            </div>
          </div>
          <!-- /.col -->
        </div>

<?php
 }
} ?>

</div>
</section>

<!-- wrapper -->
</div>