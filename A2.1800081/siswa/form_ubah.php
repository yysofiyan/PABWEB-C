<?php
// jika tombol ubah diklik
if(isset($_GET['nis'])) {
// ambil data get dari form
$nis = $_GET['nis'];
// perintah query untuk menampilkan data dari tabel siswa berdasarkan nis
$query = mysqli_query($db, "SELECT * FROM tbl_siswa WHERE nis='$nis'") or die('Query error : '.mysqli_eror($db));
$data = mysqli_fetch_assoc($query);
// buat variabel untuk memnampung data
$nis = $data['nis'];
$nama = $data['nama'];
$tempat_lahir = $data['tempat_lahir'];
$tanggal_lahir = date('d-m-Y', strtotime($data['tanggal_lahir']));
$jenis_kelamin = $data['jenis_kelamin'];
$agama = $data['agama'];
$alamat = $data['alamat'];
$no_hp = $data['no_hp'];
$foto = $data['foto'];
}
//tutup koneksi
mysqli_close($db);
?>

<div class="row">
<div class="col-md-12">
<div class="alert alert-info" role="alert">
<i class="fas fa-edit"></i>ubah data siswa
</div>

<div class="card">
<div class="card-body">
<!-- form ubah data-->
<form class="needs-validation" action="proses_ubah.php" method="post" enctype="multipart/form-data" novalidate>
<div class="row">
<div class="col">
<div class="form-group col-md-12">
<label>NIS</label>
<input type="text" class="form-control" name="nis" maxlength="5" onKeyPress="return goodchars(event,'0123456789',this)" autocomplete="off" value="<?php echo $nis; ?>" readonly required>
<div class="invalid-feedback">nis tidak boleh kosong.</div>
</div>

<div class="form-group col-md-12">
<label>nama siswa</label>
<input type="text" class="form-control" name="nama" autocomplete="off" value="<?php echo $nama; ?>" readonly required>
<div class="invalid-feedback">nama siswa tidak boleh kosong.</div>
</div>

<div class="form-group col-md-12">
<label class="mb-3">jenis kelamin</label>
<?php
if($jenis_kelamin=='Laki-laki') {?>
<div class="custom-control custom-radio">
<input type="radio" class="custom-control-input" id="customControlValidation2" name="jenis_kelamin" value="Laki-laki" checked required>
<label class="custom-control-label" for="customControlValidation2">laki-laki</label>
</div>
<div class="custom-control custom-radio mb-4">
<input type="radio" class="custom-control-input" id="customControlValidation3" name="jenis_kelamin" value="Perempuan"  required>
<label class="custom-control-label" for="customControlValidation3">perempuan</label>
<div class="invalid-feedback">pilih salah satu jenis kelamin.</div>
</div>
<?php
} else {?>
<div class="custom-control custom-radio">
<input type="radio" class="custom-control-input" id="customControlValidation2" name="jenis_kelamin" value="Laki-laki" checked required>
<label class="custom-control-label" for="customControlValidation2">laki-laki</label>
</div>
<div class="custom-control custom-radio mb-4">
<input type="radio" class="custom-control-input" id="customControlValidation3" name="jenis_kelamin" value="Perempuan"  required>
<label class="custom-control-label" for="customControlValidation3">perempuan</label>
<div class="invalid-feedback">pilih salah satu jenis kelamin.</div>
</div>
<?php }?>
</div>

<div class="form-group col-md-12">
<label>agama</label>
<select class="form-control" name="agama" autocomplete="off" required>
<option value="<?php echo $agama; ?>"><?php echo $agama; ?></option>
<option value="Islam">Islam</option>
<option value="Kristen Protestan">Kristen Protestan</option>
<option value="Kristen Katolik">kristen katolik</option>
<option value="Hindu">Hindu</option>
<option value="Buddha">Buddha</option>
</select>
<div class="invalid-feedback">Agama tidak boleh kosong.</div>
</div>
</div>

<div class="col">
<div class="form-group col-md-12">
<label>tempat lahir</label>
<input type="text" class="form-control" name="tempat_lahir" autocomplete="off"  value="<?php echo $tempat_lahir; ?>" required>
<div class="invalid-feedback">tempat lahir tidak boleh kosong.</div>
</div>

<div class="col">
<div class="form-group col-md-12">
<label>tanggal lahir</label>
<input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="tanggal_lahir" autocomplete="off" value="<?php echo $tanggal_lahir; ?>" required>
<div class="invalid-feedback">tanggal lahir tidak boleh kosong.</div>
</div>

<div class="form-group col-md-12">
<label>alamat</label>
<textarea class="form-control" rows="2" name="alamat" autocomplate="off" required><?php echo $alamat; ?></textarea>
<div class="invalid-feedback">alamat tidak boleh kosong.</div>
</div>

<div class="form-group col-md-12">
<label>No.hp</label>
<input type="text" class="form-control" name="no_hp" maxlength="13" onKeyPress="return goodchars(event, '0123456789', this)" autocomplete="off" value="<?php echo $no_hp; ?>" required>
<div class="invalid-feedback">No.hp tidak boleh kosong.</div>
</div>


<div class="col">
<div class="form-group col-md-12">
<label>foto siswa</label>
<input type="file" class="form-control-file mb-3" id="foto" name="foto" onchange="return validasiFile()" autocomplete="off" value="<?php echo $foto; ?>">
<div id="imagePreview"><img class="foto-preview" src="foto/<?php echo $foto; ?>"/></div>
</div>
</div>
</div>

<div class="my-md-4 pt-md-1 border-top"> </div>

<div class="form-group col-md-12 right">
<input type="submit" class="btn btn-info btn-submit mr-2" name="simpan" value="Simpan">
<a href="index.php" class="btn btn-secondary btn-reset"> Batal</a>
</div>
</form>
</div>
</div>
</div>
</div>