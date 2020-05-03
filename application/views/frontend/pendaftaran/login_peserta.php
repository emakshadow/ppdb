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
    <a href="#">LOGIN</a>
  </div>
      <p class="login-box-msg">-Silahkan Login Terlebih Dahulu-</p>
        <div id="alert-login-peserta" class="alert text-center col-12" style="margin-top:20px; display:none;">
        <button type="button" class="close" id="clearMsg"><span aria-hidden="true">&times;</span></button>
        <span id="message"></span>
      </div>
      <form id="form-login-peserta">
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="nisn" name="nisn" placeholder="NISN" maxlength="11" onkeypress='number_only(event)'>
          <div class="input-group-append">
            <div class="input-group-text">
              <i class="fas fa-address-card"></i>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="No Whatsapp" maxlength="13" onkeypress='number_only(event)'>
          <div class="input-group-append">
            <div class="input-group-text">
              <i class="fab fa-whatsapp"></i>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <button type="submit" class="btn btn-primary btn-block">
         <span id="loading"></span> <span id="text-login-peserta"></span></button>
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
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<?php
	//script
	include(APPPATH.'views/backend/layout/script.php');
	include(APPPATH.'views/frontend/script/script_login_peserta.php');
echo '</body>';
echo '</html>';

?>