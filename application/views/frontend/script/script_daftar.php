<script type="text/javascript">
  $(document).ready(function(){
    $('#text-register').html('Daftar');
    $('#form-register').submit(function(e){
      $(".text-danger").html('');
      e.preventDefault();
      $('#text-register').html('Checking...');
      $('#loading').addClass('spinner-border spinner-border-sm');
      var url = '<?php echo base_url(); ?>';
      var user = $('#form-register').serialize();
      var register = function(){
        $.ajax({
          type: 'POST',
          url:  "<?php echo base_url('Cfrontend/register')?>",
          dataType: 'json',
          data: user,

          success:function(result){
            var hasil = result;
            $('#text-register').html('Daftar');
            $('#loading').removeClass('spinner-border spinner-border-sm');
                        if (hasil.hasil !== "sukses" ) {
                            $("#nama_peserta_error").html(hasil.error.nama_peserta);
                            $("#nisn_error").html(hasil.error.nisn);
                            $("#tgl_lahir_error").html(hasil.error.tgl_lahir);
                            $("#asal_sekolah_error").html(hasil.error.asal_sekolah);
                            $("#no_hp_error").html(hasil.error.no_hp);
                        }
                        else if(hasil.hasil == "sukses"){
                            swal.fire({
                            title: 'Konfirmasi',
                            text: "Data Tidak Bisa Diganti, Pastikan Data Sudah Terisi Dengan Benar",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonText: 'Registrasi',
                            cancelButtonText: 'Batal',
                            reverseButtons: true
                          }).then((result) => {
                            if (result.value) {
                               $.ajax({
                                type: 'POST',
                                url:  "<?php echo base_url('Cfrontend/proses_register')?>",
                                dataType: 'json',
                                data: user,
                                success:function(result){
                                  if(hasil.hasil == "sukses"){
                                  swal.fire(
                                  'Berhasil',
                                  'Registrasi Berhasil',
                                  'success'
                                  ).then((result) =>
                                  {
                                  $('#form-register')[0].reset();
                                   window.location.href = "<?php echo base_url('Cfrontend/login_peserta')?>";
                                   })
                                  }else if(hasil.hasil == "gagal"){
                                     swal.fire(
                                  'Gagal',
                                  'Registrasi Gagal',
                                  'error'
                                  )
                                  }
                                }
                              })
                            }
                          })
                        }
          }
        });
      };
      setTimeout(register, 3000);
    });

  });


</script>

