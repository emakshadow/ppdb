<?php 
foreach ($peserta as $peserta) { ?>
<form class="regForm"  id="form-ortu">
 <h3>Form Data Orang Tua Peserta</h3>
<div class="form-group">
    <hr>
    <div class="row">
    <div class="col-md-6   mt-1 mb-3">
    <label>No Kartu Keluarga</label>
    <input type="text" placeholder="Masukan No KK" name="no_kk" id="no_kk" class="form-control" maxlength="25" onkeypress="number_only(event)" pattern="\d+" required>
    </div>
     <input type="hidden" name="id_ortu" id="id_ortu" value="<?php echo $peserta->nisn ?> ">
    <div class="col-md-6   mt-1 mb-3">
    <label>Penghasilan Orang Tua</label>
    <input type="text" placeholder="Rata-Rata Penghasilan Perbulan" name="penghasilan_ortu" id="penghasilan_ortu" class="form-control" maxlength="15" onkeypress="number_only(event)" pattern="\d+" required>
    </div>
  </div>
  <h5><b>Data Ayah</b></h5>
  <hr>
  <div class="row">
     <div class="col-md-6 mt-1">
    <label>No KTP</label>
    <input type="text" placeholder="Masukan No KTP Ayah" name="no_ktp_ayah" id="no_ktp_ayah" class="form-control" maxlength="25" onkeypress="number_only(event)" pattern="\d+" required>
    </div>
    <div class="col-md-6 mt-1">
    <label>Nama Ayah</label>
    <input type="text" placeholder="Masukan Nama Ayah" name="nama_ayah" id="nama_ayah" class="form-control" required >
    </div>
     <div class="col-md-6 mt-1">
    <label>Tempat Lahir</label>
    <input type="text" placeholder="Masukan Tempat Lahir Ayah" name="tempat_lahir_ayah" id="tempat_lahir_ayah" class="form-control" required>
    </div>
 
    <div class="col-md-6 mt-1">
    <label>Pendidikan</label>
    <input type="text" placeholder="Masukan Pendidikan Ayah" name="pendidikan_ayah" id="pendidikan_ayah" class="form-control" required>
    </div>
    <div class="col-md-6 mt-1">
    <label>Pekerjaan</label>
    <input type="text" placeholder="Masukan Pekerjaan Ayah" name="pekerjaan_ayah" id="pekerjaan_ayah" class="form-control" required>
    </div>
    <div class="col-md-6 mt-1">
    <label>Tanggal Lahir</label>
    <input type="date" placeholder="Masukan Tanggal Lahir Ayah" name="tgl_lahir_ayah" id="tgl_lahir_ayah" class="form-control" required>
    </div>
    <div class="col-md-6 mt-1">
    <label>No Telepon</label>
    <input type="text" placeholder="Masukan No Telepon Ayah" name="no_hp_ayah" id="no_hp_ayah" class="form-control" maxlength="13" onkeypress="number_only(event)" pattern="\d+" required>
    </div>
     </div>
  <h5 class="mt-3"><b>Data Ibu</b></h5>
  <hr>
  <div class="row">
     <div class="col-md-6 mt-1">
    <label>No KTP</label>
    <input type="text" placeholder="Masukan No KTP ibu" name="no_ktp_ibu" id="no_ktp_ibu" class="form-control" maxlength="25" onkeypress="number_only(event)" pattern="\d+" required>
    </div>
    <div class="col-md-6 mt-1">
    <label>Nama ibu</label>
    <input type="text" placeholder="Masukan Nama ibu" name="nama_ibu" id="nama_ibu" class="form-control" required>
    </div>
     <div class="col-md-6 mt-1">
    <label>Tempat Lahir</label>
    <input type="text" placeholder="Masukan Tempat Lahir ibu" name="tempat_lahir_ibu" id="tempat_lahir_ibu" class="form-control" required>
    </div>
     <div class="col-md-6 mt-1">
    <label>Tanggal Lahir</label>
    <input type="date" placeholder="Masukan Tanggal Lahir ibu" name="tgl_lahir_ibu" id="tgl_lahir_ibu" class="form-control" required>
    </div>
    <div class="col-md-6 mt-1">
    <label>Pendidikan</label>
    <input type="text" placeholder="Masukan Pendidikan ibu" name="pendidikan_ibu" id="pendidikan_ibu" class="form-control">
    </div>
    <div class="col-md-6 mt-1">
    <label>Pekerjaan</label>
    <input type="text" placeholder="Masukan Pekerjaan ibu" name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control">
    </div>
 
    <div class="col-md-6 mt-1">
    <label>No Telepon</label>
    <input type="text" placeholder="Masukan No Telepon ibu" name="no_hp_ibu" id="no_hp_ibu" class="form-control" maxlength="13" onkeypress="number_only(event)" pattern="\d+" required>
    </div>
   
    <!--row -->
   </div>
   <!--tab -->
  <p style="color: red">Perhatian!! Data tidak bisa dirubah setelah anda menyimpannya.</p>
  </div>
  <!--form-group -->
  <button type="submit" class="btn btn-primary">Simpan</button>
   <button type="button" class="btn btn-default" onclick="window.history.go(-1);">Kembali</button>

</div>
</form>
<?php }
?>