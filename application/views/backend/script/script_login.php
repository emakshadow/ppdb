<script type="text/javascript">
	$(document).ready(function(){
		$('#text-login-admin').html('Masuk');
		$('#form-login-admin').submit(function(e){
			e.preventDefault();
			$('#text-login-admin').html('Loading...');
			$('#loading').addClass('spinner-border spinner-border-sm');
			var url = '<?php echo base_url(); ?>';
			var user = $('#form-login-admin').serialize();
			var login = function(){
				$.ajax({
					type: 'POST',
					url:  "<?php echo base_url('Cauth/proses_admin')?>",
					dataType: 'json',
					data: user,

					success:function(response){
						$('#message').html(response.message);
						$('#loading').removeClass('spinner-border spinner-border-sm');
						$('#text-login-admin').html('Masuk');
						if(response.error){
							$('#alert-login-admin').removeClass('alert-success').addClass('alert-danger').show();
							 $("#alert-login-admin").fadeTo(2000, 500).slideUp(500, function() {
     						 $("#alert-login-admin").slideUp(500);
     						
  							})
						}
						else{
							$('#form-login-admin')[0].reset();
								location.reload();
							;
						}
					}
				});
			};
			setTimeout(login, 3000);
		});

		$(document).on('click', '#clearMsg', function(){
			$('#alert-login-admin').hide();
		});
	});


</script>

