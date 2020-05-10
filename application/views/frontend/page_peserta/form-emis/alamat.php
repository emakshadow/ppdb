<?php 
foreach ($peserta as $peserta) { ?>
<form class="regForm"  id="form-alamat">
 <h3>Form Alamat Peserta</h3>
<div class="form-group">
    <hr>
    <div class="row">
    <div class="col-md-6   mt-1">
    <label>Alamat</label>
    <input type="text" placeholder="Masukan Alamat Lengkap" name="alamat" id="alamat" class="form-control"  required>
    </div>
     <input type="hidden" name="id_alamat" id="id_alamat" value="<?php echo $peserta->nisn ?> ">
     <div class="col-md-6 mt-1">
    <label>Provinsi</label>
    <input type="text" placeholder="Masukan Provinsi" name="provinsi" id="provinsi" class="form-control"  required>
    </div>
    <div class="col-md-6 mt-1">
    <label>Kota/Kabupaten</label>
    <input type="text" placeholder="Masukan Kota/Kabupaten" name="kota" id="kota" class="form-control"  required>
    </div>
    <div class="col-md-6 mt-1">
    <label>Kencamatan</label>
    <input type="text" placeholder="Masukan Kencamatan" name="kecamatan" id="kecamatan" class="form-control" required >
    </div>
    <div class="col-md-6 mt-1">
    <label>Kelurahan/Desa</label>
    <input type="text" placeholder="Masukan Kelurahan/Desa" name="kelurahan" id="kelurahan" class="form-control" required >
    </div>
    <div class="col-md-6 mt-1">
    <label>Kode Pos</label>
    <input type="text" placeholder="Masukan Kode Pos" name="kode_pos" id="kode_pos" class="form-control" maxlength="7" onkeypress="number_only(event)"  pattern="\d+" required >
    </div>
   <div class="col-md-6 mt-1">
    <label>Jarak Rumah Kemadrasah</label>
    <select class="form-control" name="jarak_rumah" id="jarak_rumah">
        <option value="< 1 Km">< 1 Km</option>
        <option value="1-3 Km">1-3 Km</option>
        <option value="3-5 Km">3-5 Km</option>
        <option value="5-10 Km">5-10 Km</option>
        <option value="> 10 Km">> 10 Km</option>
    </select>
    </div>
    <div class="col-md-6 mt-1">
    <label>Transportasi Dari Rumah Ke Madrasah </label>
    <select class="form-control" name="transportasi" id="transportasi">
        <option value="Jalan Kaki">Jalan Kaki</option>
        <option value="Motor">Motor</option>
        <option value="Angkot">Angkot</option>
        <option value="Antar Jemput">Antar Jemput</option>
        <option value="Mobil Pribadi">Mobil Pribadi</option>
    </select>
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