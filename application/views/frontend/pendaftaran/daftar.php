<?php

$this->session->sess_destroy();

echo '<!DOCTYPE html>';
echo '<html lang="en">';

	include(APPPATH.'views/backend/layout/head.php');
?>

<body class="hold-transition register-page  ">
<div class="register-box">
  <div class="card">
    <div class="card-body register-card-body">
    	<div class="register-logo">
    <a href="#">PENDAFTARAN</a>
  </div>
      <p class="login-box-msg">-Silahkan Isi Form Dibawah-</p>

 
      <form  id="form-register">
        <div class="input-group">
          <input type="text" class="form-control" name="nama_peserta" id="nama_peserta" placeholder="Nama Lengkap">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
         <!-- validation -->
         <span id="nama_peserta_error" class="text-danger"></span>
         <!-- /.validation -->
        <div class="input-group mt-3">
          <input type="text" class="form-control" name="nisn" id="nisn"  placeholder="NISN" maxlength="11" onkeypress='number_only(event)' pattern="\d+">
          <div class="input-group-append">
            <div class="input-group-text">
              <i class="fas fa-address-card"></i>
            </div>
          </div>
        </div>
        <!-- validation -->
         <span id="nisn_error" class="text-danger"></span>
         <!-- /.validation -->
        <div class="input-group mt-3 ">
           <input  placeholder="Tanggal Lahir" name="tgl_lahir" id="tgl_lahir"  type="text" onfocus="(this.type='date')" id="date" class="form-control textbox-n" />
            <div class="input-group-append">
              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
        <!-- validation -->
         <span id="tgl_lahir_error" class="text-danger"></span>
         <!-- /.validation -->
        <div class="input-group mt-3 ">
          <input type="text" class="form-control" name="asal_sekolah" id="asal_sekolah" placeholder="Asal Sekolah">
          <div class="input-group-append">
            <div class="input-group-text">
              <i class="fas fa-school"></i>
            </div>
          </div>
        </div>
        <!-- validation -->
         <span id="asal_sekolah_error" class="text-danger"></span>
         <!-- /.validation -->
        <div class="input-group mt-3 ">
          <input type="text" class="form-control" name="no_hp" placeholder="No Whatsapp" maxlength="13" onkeypress='number_only(event)' pattern="\d+">
          <div class="input-group-append">
            <div class="input-group-text">
              <i class="fab fa-whatsapp"></i>
            </div>
          </div>
        </div>
        <!-- validation -->
         <span id="no_hp_error" class="text-danger"></span>
         <!-- /.validation -->
        <div class="row">
          <div class="col mt-3">
            <button type="submit" class="btn btn-primary btn-block" >
             <span id="loading"></span> <span id="text-register"></span>
            </button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <hr>
        <a href="<?php echo base_url('welcome')?>" class="btn btn-block btn-info">
          Kembali Ke Website PPDB
        </a>

      </div>

      <a href="<?php echo base_url('Cfrontend/login_peserta')?>" class="text-center">Sudah Mendaftar? Klik Disini Untuk Login</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<?php
	//script
	include(APPPATH.'views/backend/layout/script.php');
	include(APPPATH.'views/frontend/script/script_daftar.php');
echo '</body>';
echo '</html>';

?>