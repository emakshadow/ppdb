<?php

$this->session->sess_destroy();

echo '<!DOCTYPE html>';
echo '<html lang="en">';

	include(APPPATH.'views/backend/layout/head.php');

?>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
  	<img src="<?php echo base_url()?>assets/backend/dist/img/logo-man2.png" width="90"><br>
    <a href="#"> <b>MAN 2</b> Bandung</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Login untuk masuk kehalaman administrator</p>
      
      <div id="alert-login-admin" class="alert text-center col-12" style="margin-top:20px; display:none;">
				<button type="button" class="close" id="clearMsg"><span aria-hidden="true">&times;</span></button>
				<span id="message"></span>
			</div>
      <form id="form-login-admin">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          
          <!-- /.col -->
        
        <button type="submit" class="btn btn-block btn-primary">
         <span id="loading"></span> <span id="text-login-admin"></span>
        </button>
        <a href="<?php echo base_url('welcome');?>" class="btn btn-block btn-secondary">
          Kembali Ke Website
        </a>
          <!-- /.col -->

          
        </div>
      </form>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<?php
	//script
	include(APPPATH.'views/backend/layout/script.php');
	include(APPPATH.'views/backend/script/script_login.php');
echo '</body>';
echo '</html>';

?>