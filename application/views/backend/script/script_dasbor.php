

<script type="text/javascript">
                $('.btnaktifasi').on('click', function (e) {

                var id = $(this).attr("data-id");
                e.preventDefault();
               swal.fire({
                            title: 'Konfirmasi',
                            text: "Aktifasi ini akan merubah halaman depan website, Anda yakin?",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonText: 'Pilih',
                            cancelButtonText: 'Batal',
                            reverseButtons: true
                          }).then((result) => {
                            if (result.value) {
                              $.ajax({
                                url:"<?php echo base_url('Cadmin/aktifasi')?>",  
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
                                data:{id:id}, 
                                success:function(data){
                      swal.fire(
                        'Berhasil',
                        'Halaman Depan Telah Diupdate',
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
