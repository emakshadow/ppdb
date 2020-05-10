

<script type="text/javascript">
                $('.jalur').on('click', function (e) {

                var id = $(this).attr("data-id");
                var nisn = $('#nisn').val();
                e.preventDefault();
               swal.fire({
                            title: 'Konfirmasi',
                            text: "Jalur Tidak Bisa Diganti,Pastikan Ini Adalah Jalur Yang Tepat",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonText: 'Pilih',
                            cancelButtonText: 'Batal',
                            reverseButtons: true
                          }).then((result) => {
                            if (result.value) {
                              $.ajax({
                                url:"<?php echo base_url('Cpeserta/pilih_jalur')?>",  
                                method:"post",
                                dataType:"JSON",
                                beforeSend :function () {
                                swal.fire({
                                    title: 'Menunggu',
                                    html: 'Memproses data',
                                    onOpen: () => {
                                      swal.showLoading()
                                    }
                                  })      
                                },  
                                data:{id:id,nisn:nisn}, 
                                success:function(data){
                      swal.fire(
                        'Berhasil',
                        'Jalur Telah Dipilih',
                        'success'
                      ).then((result) => 
                    {
                     location.reload();
                     
                     })
                       }
                  })
              }
         })
     })

</script>

<!-- Form data diri -->
<script type="text/javascript">
  $(document).ready(function(){
      $('#form-data-diri').submit(function(e){
      e.preventDefault();
      var user = $('#form-data-diri').serialize();
       swal.fire({
                            title: 'Konfirmasi',
                            text: "Data Tidak Bisa Diganti, Pastikan Data Sudah Terisi Dengan Benar",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonText: 'Simpan',
                            cancelButtonText: 'Batal',
                            reverseButtons: true
                          }).then((result) => {
                            if (result.value) {
                              $.ajax({
                                url:"<?php echo base_url('Cpeserta/add_data_diri')?>",  
                                method:"post",
                                dataType:"JSON",
                                beforeSend :function () {
                                swal.fire({
                                    title: 'Menunggu',
                                    html: 'Memproses data',
                                    onOpen: () => {
                                      swal.showLoading()
                                    }
                                  })      
                                },  
                                data:user, 
                                success:function(data){
                      swal.fire(
                        'Berhasil',
                        'Data Telah Disimpan',
                        'success'
                      ).then((result) => 
                    {
                       window.location.href = "<?php echo base_url('Cpeserta/halaman_form')?>";
                     
                     })
                       }
                  })
              }
         }) 
        })
    })

</script>
<!-- Form asal sekolah -->
<script type="text/javascript">
  $(document).ready(function(){
      $('#form-asal-sekolah').submit(function(e){
      e.preventDefault();
      var user = $('#form-asal-sekolah').serialize();
       swal.fire({
                            title: 'Konfirmasi',
                            text: "Data Tidak Bisa Diganti, Pastikan Data Sudah Terisi Dengan Benar",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonText: 'Simpan',
                            cancelButtonText: 'Batal',
                            reverseButtons: true
                          }).then((result) => {
                            if (result.value) {
                              $.ajax({
                                url:"<?php echo base_url('Cpeserta/add_asal_sekolah')?>",  
                                method:"post",
                                dataType:"JSON",
                                beforeSend :function () {
                                swal.fire({
                                    title: 'Menunggu',
                                    html: 'Memproses data',
                                    onOpen: () => {
                                      swal.showLoading()
                                    }
                                  })      
                                },  
                                data:user, 
                                success:function(data){
                      swal.fire(
                        'Berhasil',
                        'Data Telah Disimpan',
                        'success'
                      ).then((result) => 
                    {
                       window.location.href = "<?php echo base_url('Cpeserta/halaman_form')?>";
                     
                     })
                       }
                  })
              }
         })
        })
    })

</script>
<!-- Form alamat -->
<script type="text/javascript">
  $(document).ready(function(){
      $('#form-alamat').submit(function(e){
      e.preventDefault();
      var user = $('#form-alamat').serialize();
       swal.fire({
                            title: 'Konfirmasi',
                            text: "Data Tidak Bisa Diganti, Pastikan Data Sudah Terisi Dengan Benar",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonText: 'Simpan',
                            cancelButtonText: 'Batal',
                            reverseButtons: true
                          }).then((result) => {
                            if (result.value) {
                              $.ajax({
                                url:"<?php echo base_url('Cpeserta/add_alamat')?>",  
                                method:"post",
                                dataType:"JSON",
                                beforeSend :function () {
                                swal.fire({
                                    title: 'Menunggu',
                                    html: 'Memproses data',
                                    onOpen: () => {
                                      swal.showLoading()
                                    }
                                  })      
                                },  
                                data:user, 
                                success:function(data){
                      swal.fire(
                        'Berhasil',
                        'Data Telah Disimpan',
                        'success'
                      ).then((result) => 
                    {
                       window.location.href = "<?php echo base_url('Cpeserta/halaman_form')?>";
                     
                     })
                       }
                  })
              }
         })
        })
    })

</script>
<!-- Form ortu -->
<script type="text/javascript">
  $(document).ready(function(){
      $('#form-ortu').submit(function(e){
      e.preventDefault();
      var user = $('#form-ortu').serialize();
       swal.fire({
                            title: 'Konfirmasi',
                            text: "Data Tidak Bisa Diganti, Pastikan Data Sudah Terisi Dengan Benar",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonText: 'Simpan',
                            cancelButtonText: 'Batal',
                            reverseButtons: true
                          }).then((result) => {
                            if (result.value) {
                              $.ajax({
                                url:"<?php echo base_url('Cpeserta/add_ortu')?>",  
                                method:"post",
                                dataType:"JSON",
                                beforeSend :function () {
                                swal.fire({
                                    title: 'Menunggu',
                                    html: 'Memproses data',
                                    onOpen: () => {
                                      swal.showLoading()
                                    }
                                  })      
                                },  
                                data:user, 
                                success:function(data){
                      swal.fire(
                        'Berhasil',
                        'Data Telah Disimpan',
                        'success'
                      ).then((result) => 
                    {
                       window.location.href = "<?php echo base_url('Cpeserta/halaman_form')?>";
                     
                     })
                       }
                  })
              }
         })
        })
    })

</script>

