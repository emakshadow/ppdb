<?php 
foreach ($peserta as $peserta) { ?>
<form class="regForm" id="form-data-diri"  >
 <h3>Form Data Diri</h3>
<div class="form-group">
    <hr>
    <div class="row">
    <div class="col-md-6   mt-1">
    <label>NISN</label>
    <input placeholder="Masukan NISN" name="nisn" id="nisn" class="form-control" value="<?php echo $peserta->nisn ?>" readonly>
    </div>
    <div class="col-md-6 mt-1">
    <label>Nama Lengkap </label>
    <input placeholder="Masukan Nama Lengkap" name="nama_siswa" id="nama_siswa" class="form-control" value="<?php echo $peserta->nama_siswa ?>" readonly>
    </div>
    <div class="col-md-6 mt-1">
    <label>NIK Peserta</label>
    <input placeholder="Masukan NIK Anda" name="nik" id="nik" class="form-control" pattern="\d+" onkeypress='number_only(event)' maxlength="18" required >
    </div>
    <div class="col-md-6 mt-1">
    <label>Tempat Lahir </label>
    <input placeholder="Masukan Tempat Lahir" name="tempat_lahir" id="tempat_lahir" class="form-control" required>
    </div>
    <div class="col-md-6 mt-1">
    <label>Tanggal Lahir </label>
    <input type="date" placeholder="Masukan Tanggal Lahir" name="tgl_lahir" id="tgl_lahir" class="form-control" value="<?php echo $peserta->tgl_lahir ?>" readonly>
    </div>
    <div class="col-md-6 mt-1">
    <label>Jenis Kelamin </label>
    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
        <option value="Laki-Laki">Laki-Laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>
    </div>
    <div class="col-md-6 mt-1">
    <label>Hobi </label>
    <select class="form-control" name="hobi" id="hobi">
        <option value="Olahraga">Olahraga</option>
        <option value="Membaca">Membaca</option>
        <option value="Kesenian">Kesenian</option>
        <option value="Menulis">Menulis</option>
        <option value="Traveling">Traveling</option>
        <option value="Lainnya">Lainnya</option>
    </select>
    </div>
    <div class="col-md-6 mt-1">
    <label>Cita-cita </label>
    <select class="form-control" name="cita" id="cita">
        <option value="PNS">PNS</option>
        <option value="TNI/POLRI">TNI/POLRI</option>
        <option value="Guru/Dosen">Guru/Dosen</option>
        <option value="Dokter">Dokter</option>
        <option value="Politikus">Politikus</option>
        <option value="Wiraswasta">Wiraswasta</option>
        <option value="Seni">Seni</option>
    </select>
    </div>
    <div class="col-md-3 mt-1">
    <label>Email </label>
    <input type="email" placeholder="contoh example@gmail.com" name="email" id="email" class="form-control" required>
    </div>
    <div class="col-md-3 mt-1">
    <label>No HP/Whatsapp </label>
    <input type="text" placeholder="Masukan No Whatsapp" name="no_hp" id="no_hp" class="form-control" value="<?php echo $peserta->no_hp ?>" readonly>
    </div>
    <div class="col-md-3 mt-1">
    <label>Anak ke </label>
    <input type="text" placeholder="Anak ke?" name="anak_ke" id="anak_ke" class="form-control" pattern="\d+" onkeypress='number_only(event)' maxlength="4" required  >
    </div>
     <div class="col-md-3 mt-1">
    <label>Jumlah Saudara </label>
    <input type="text" placeholder="Masukan Jumlah Saudara" name="jumlah_saudara" id="jumlah_saudara" class="form-control" pattern="\d+" onkeypress='number_only(event)' maxlength="4" required >
    </div>
    <!--row -->
   </div>
   <!--tab -->
   <p style="color: red">Perhatian!! Data tidak bisa dirubah setelah anda menyimpannya.</p>
  </div>
  <!--form-group -->
  <button type="submit" class="btn btn-primary">Simpan</span></button>
   <button type="button" class="btn btn-default" onclick="window.history.go(-1);">Kembali</button>
</div>
</form>
<?php }
?>