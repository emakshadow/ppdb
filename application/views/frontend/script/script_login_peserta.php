 <script type="text/javascript">
	$(document).ready(function(){
		$('#text-login-peserta').html('Masuk');
		$('#form-login-peserta').submit(function(e){
			e.preventDefault();
			$('#text-login-peserta').html('Checking...');
			$('#loading').addClass('spinner-border spinner-border-sm');
			var peserta = $('#form-login-peserta').serialize();
			var login = function(){
				$.ajax({
					type: 'POST',
					url:  "<?php echo base_url('Cfrontend/proses_login_peserta')?>",
					dataType: 'json',
					data: peserta,

					success:function(response){
						$('#message').html(response.message);
						$('#loading').removeClass('spinner-border spinner-border-sm');
						$('#text-login-peserta').html('Masuk');
						if(response.error){
							$('#alert-login-peserta').removeClass('alert-success').addClass('alert-danger').show();
							 $("#alert-login-peserta").fadeTo(2000, 500).slideUp(500, function() {
     						 $("#alert-login-peserta").slideUp(500);
     						
  							})
						}
						else{
							$('#form-login-peserta')[0].reset();
								 window.location.href = "<?php echo base_url('Cpeserta/halaman_peserta')?>";
							;
						}
					}
				});
			};
			setTimeout(login, 3000);
		});

		$(document).on('click', '#clearMsg', function(){
			$('#alert-login-peserta').hide();
		});
	});


</script>

