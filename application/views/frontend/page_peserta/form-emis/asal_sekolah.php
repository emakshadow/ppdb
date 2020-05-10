<?php 
foreach ($peserta as $peserta) { ?>
<form class="regForm" id="form-asal-sekolah" enctype="multipart/form-data" >
 <h3>Form Asal Sekolah Peserta</h3>
<div class="form-group">
    <hr>
    <div class="row">
    <div class="col-md-6   mt-1">
    <label>Asal Sekolah</label>
    <input type="text"  placeholder="Masukan Asal Sekolah" name="asal_sekolah" id="asal_sekolah" class="form-control"value="<?php echo $peserta->asal_sekolah ?>" readonly>
    </div>
  <input type="hidden" name="id_asal_sekolah" id="id_asal_sekolah" value="<?php echo $peserta->nisn ?> ">
   
     <div class="col-md-6 mt-1">
    <label>Kabupaten/Kota Lokasi Sekolah</label>
    <input type="text" placeholder="Masukan Lokasi Sekolah Anda" name="kota_sekolah" id="kota_sekolah" class="form-control" required>
    </div>
   <div class="col-md-6 mt-1">
    <label>Jenis Sekolah</label>
    <select class="form-control" name="jenis_sekolah" id="jenis_sekolah" >
        <option value="SMP">SMP</option>
        <option value="MTS">MTS</option>
    </select>
    </div>
    <div class="col-md-6 mt-1">
    <label>Status Sekolah </label>
    <select class="form-control" name="status_sekolah" id="status_sekolah"  required>
        <option value="Negeri">Negeri</option>
        <option value="Swasta">Swasta</option>
    </select>
    </div>
   
    
    <div class="col-md-3 mt-1">
    <label>No SKHUN </label>
    <input type="text" placeholder="No SKHUN (SMP/MTS)" name="skhun" id="skhun" class="form-control"  pattern="\d+" onkeypress="number_only(event)" maxlength="25" required>
    </div>
   
    <!--row -->
   </div>
   <!--tab -->
  <span style="color: red">Perhatian!! Data tidak bisa dirubah setelah anda menyimpannya.</span>
  </div>
  <!--form-group -->
  <button type="submit" class="btn btn-primary">Simpan</button>
   <button type="button" class="btn btn-default" onclick="window.history.go(-1);">Kembali</button>

</div>
</form>
<?php }
?>