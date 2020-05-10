
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

<?php 
foreach ($peserta as $peserta) {

?>       <button type="button" class="btn-sm btn-success mb-2" onclick="window.history.go(-1);">Kembali</button>
        <div class="row">
          <div class="col-md-6">
            <!-- About Me Box -->
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Data Diri</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-unbordered">
                  <tr>
                    <td>Nama Peserta</td> <td><b><?php echo $peserta->nama_siswa; ?></b></td>
                  </tr>
                  <tr>
                    <td>NISN</td> <td><b><?php echo $peserta->nisn; ?></b></td>
                  </tr>
                  <tr>
                    <td>NIK</td> <td><b><?php echo $peserta->nik; ?></b></td>
                  </tr>
                  <tr>
                    <td>Tempat Lahir</td> <td><b><?php echo $peserta->tempat_lahir; ?></b></td>
                  </tr>
                  <tr>
                    <td>Tanggal Lahir</td> <td><b><?php echo $peserta->tgl_lahir; ?></b></td>
                  </tr>
                  <tr>
                    <td>Jenis Kelamin</td> <td><b><?php echo $peserta->jenis_kelamin; ?></b></td>
                  </tr>
                  <tr>
                    <td>Hobi</td> <td><b><?php echo $peserta->hobi; ?></b></td>
                  </tr>
                  <tr>
                    <td>Cita-cita</td> <td><b><?php echo $peserta->cita; ?></b></td>
                  </tr>
                  <tr>
                    <td>Email</td> <td><b><?php echo $peserta->email; ?></b></td>
                  </tr>
                   <tr>
                    <td>Nomor WA</td> <td><b><?php echo $peserta->no_hp; ?></b></td>
                  </tr>
                   <tr>
                    <td>Jumlah Saudara</td> <td><b><?php echo $peserta->jumlah_saudara; ?></b></td>
                  </tr>
                   <tr>
                    <td>Anak Ke</td> <td><b><?php echo $peserta->anak_ke; ?></b></td>
                  </tr>
                </table>

                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
              <!-- About Me Box -->
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Informasi Orang Tua</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-unbordered">
                  <tr>
                    <td>No KK</td> <td><b><?php echo $peserta->no_kk; ?></b></td>
                  </tr>
                   <tr>
                    <td>Penghasilan Orang tua</td> <td><b><?php echo $peserta->penghasilan_ortu; ?></b></td>
                  </tr>
                  <tr>
                    <td><b>INFO AYAH</b></td>
                  </tr>
                  <tr>
                    <td>No KTP</td> <td><b><?php echo $peserta->no_ktp_ayah; ?></b></td>
                  </tr>
                  <tr>
                    <td>Nama</td> <td><b><?php echo $peserta->nama_ayah; ?></b></td>
                  </tr>
                  <tr>
                    <td>Tempat Lahir</td> <td><b><?php echo $peserta->tempat_lahir_ayah; ?></b></td>
                  </tr>
                  <tr>
                    <td>Tanggal Lahir</td> <td><b><?php echo $peserta->tgl_lahir_ayah; ?></b></td>
                  </tr>
                  <tr>
                    <td>Pendidikan</td> <td><b><?php echo $peserta->pendidikan_ayah; ?></b></td>
                  </tr>
                  <tr>
                    <td>Pekerjaan</td> <td><b><?php echo $peserta->pekerjaan_ayah; ?></b></td>
                  </tr>
                  <tr>
                    <td>No HP</td> <td><b><?php echo $peserta->no_hp_ayah; ?></b></td>
                  </tr>
                      <tr>
                    <td><b>INFO IBU</b></td>
                  </tr>
                  <tr>
                    <td>No KTP</td> <td><b><?php echo $peserta->no_ktp_ibu; ?></b></td>
                  </tr>
                  <tr>
                    <td>Nama</td> <td><b><?php echo $peserta->nama_ibu; ?></b></td>
                  </tr>
                  <tr>
                    <td>Tempat Lahir</td> <td><b><?php echo $peserta->tempat_lahir_ibu; ?></b></td>
                  </tr>
                  <tr>
                    <td>Tanggal Lahir</td> <td><b><?php echo $peserta->tgl_lahir_ibu; ?></b></td>
                  </tr>
                  <tr>
                    <td>Pendidikan</td> <td><b><?php echo $peserta->pendidikan_ibu; ?></b></td>
                  </tr>
                  <tr>
                    <td>Pekerjaan </td> <td><b><?php echo $peserta->pekerjaan_ibu; ?></b></td>
                  </tr>
                  <tr>
                    <td>No HP</td> <td><b><?php echo $peserta->no_hp_ibu; ?></b></td>
                  </tr>
                </table>

                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
     
          </div>
          <!-- /.col -->
           <div class="col-md-6">
              <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Informasi Terkait</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-unbordered">
                  <tr>
                    <td>Jalur Yang Dipilih</td> <td><b><?php echo $peserta->jalur; ?></b></td>
                  </tr>
                  <tr>
                    <td>Status</td> <td><b><?php echo $peserta->status; ?></b></td>
                  </tr>
                  
                </table>

                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- About Me Box -->
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Asal Sekolah</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-unbordered">
                  <tr>
                    <td>Asal Sekolah</td> <td><b><?php echo $peserta->asal_sekolah; ?></b></td>
                  </tr>
                  <tr>
                    <td>Jenis Sekolah</td> <td><b><?php echo $peserta->jenis_sekolah; ?></b></td>
                  </tr>
                  <tr>
                    <td>Status Sekolah</td> <td><b><?php echo $peserta->status_sekolah; ?></b></td>
                  </tr>
                  <tr>
                    <td>Kota/Kab Sekolah</td> <td><b><?php echo $peserta->kota_sekolah; ?></b></td>
                  </tr>
                  <tr>
                    <td>No SKHUN</td> <td><b><?php echo $peserta->skhun; ?></b></td>
                  </tr>
                 
                </table>

                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
           
            <!-- /.card -->
              <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Informasi Alamat</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-unbordered">
                  <tr>
                    <td>Alamat</td> <td><b><?php echo $peserta->alamat; ?></b></td>
                  </tr>
                  <tr>
                    <td>Provinsi</td> <td><b><?php echo $peserta->provinsi; ?></b></td>
                  </tr>
                  <tr>
                    <td>Kab/Kota</td> <td><b><?php echo $peserta->kota; ?></b></td>
                  </tr>
                  <tr>
                    <td>Kecamatan</td> <td><b><?php echo $peserta->kecamatan; ?></b></td>
                  </tr>
                  <tr>
                    <td>Kode Pos</td> <td><b><?php echo $peserta->kode_pos; ?></b></td>
                  </tr>
                  <tr>
                    <td>Jarak Rumah</td> <td><b><?php echo $peserta->jarak_rumah; ?></b></td>
                  </tr>
                  <tr>
                    <td>Transportasi</td> <td><b><?php echo $peserta->transportasi; ?></b></td>
                  </tr>
                  
                </table>

                
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          
        

          
          
          <!-- /.col -->
        </div>

        <!-- /.row -->
      </div><!-- /.container-fluid -->


    <?php } ?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->