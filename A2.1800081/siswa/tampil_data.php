<?php
//pengecekan pencarian data
//jika dilakukan pencarian data, maka tampilkan kata kunci pencarian 
if (isset($_POST['cari'])) {
    $cari = $_POST['cari'];
}
// jika tidak maka kosong
else {
    $cari = "";
}
?>

<div class="row">
<div class="col-md-12">
<?php
// fungsi untuk menampilkan pesan
// jika alert = ""(kosong)
// tampilkan pesan "" (kosong)
if (empty($_GET['alert'])) {
    echo "";
}
// jika alert = 1
// tampilkan pesan sukses "Data siswa berhasil disimpan"
elseif ($_GET['alert'] == 1) { ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong><i class="fas fa-check-circle"></i> sukses!</strong> Data siswa berhasil disimpan.
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<?php
}
// jika alert = 2
// tampilkan pesan sukses "data siswa berhasil diubah"
elseif ($_GET['alert']==2) {?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong><i class="fas fa-check-circle"></i> sukses!</strong> Data Siswa berhasil diubah.
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<?php
}
// jika alert = 3
// tampilkan pesan sukses "data siswa berhasil dihapus"
elseif ($_GET['alert']==3) {?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong><i class="fas fa-check-circle"></i> sukses!</strong> Data siswa berhasil dihapus.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <?php
    }
// jika alert = 4
// tampilkan pesan gagal "NIS sudah ada"
elseif ($_GET['alert']==4) {?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong><i class="fas fa-times-circle"></i>Gagal!!!</strong>Nis <b><?php
    echo $_GET['nis']; ?></b>
    sudah ada.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <?php
    }
?>
<form class="mr-3" action="index.php" method="post">
<div class="form-row">
<!-- form cari -->
<div class="col-3">
<input type="text" class="form-control" name="cari" placeholder="cari NIS atau nama siswa" value="<?php echo $cari; ?>">
</div>
<!-- tombol cari -->
<div class="col-8">
<button type="submit" class="btn btn-info">cari</button>
</div>
<!-- tombol tambah data -->
<div class="col-1">
<a class="btn btn-info" href="?page=tambah" role="button"><i class="fas fa-plus"></i> tambah</a>
</div>
</div>
</form>

<!-- tabel siswa untuk menampilkan data siswa dari database -->
<div class="table-responsive">
    <table class="table table-striped table-hover table bordered">
<table class="table table-striped table-bordered">
<thead>
<tr>
<th>No.</th>
<th>foto</th>
<th>NIS</th>
<th>nama siswa</th>
<th>tempat, tanggal lahir</th>
<th>jenis kelamin</th>
<th>agama</th>
<th>alamat</th>
<th>No.HP</th>
<th></th>
</tr>
</thead>

<tbody>
<?php
// pagonation----------------
// jumlah dtaaa yang ditampilkan setiap halaman
$batas = 5;
// jika dilakukan pencarian data
if (isset($cari)) {
    // perintah query untuk menampilkan jumlah data siswa dari databse berdasarkan nis atau nama yang sesuai dengan kata kunci pencarian
    $query_jumlah = mysqli_query($db, "SELECT count(nis) as jumlah FROM tbl_siswa WHERE nis LIKE '%$cari%' OR nama LIKE '%$cari%'") 
    or die ('ada kesalahan pada query jumlah:'.mysqli_error($db));
}
// jika tidak dilakukan pencarian data
else{
    // perintah query untuk menampilkan jumlah data siswa dari database 
    $query_jumlah = mysqli_query($db, "SELECT count(nis) as jumlah FROM tbl_siswa WHERE nis LIKE '%$cari%' OR nama LIKE '%$cari%'") 
    or die ('ada kesalahan pada query jumlah:'.mysqli_error($db));
}
// tampilkan jumlah data
$data_jumlah = mysqli_fetch_assoc($query_jumlah);
$jumlah = $data_jumlah['jumlah'];
$halaman = ceil($jumlah/ $batas);
$page = (isset($_GET['hal'])) ? (int)$_GET['hal'] :1;
$mulai = ($page - 1) *$batas;
// -------------
// nomor urut table
$no = $mulai + 1;
// jika dilakukan pencarian data
if (isset($cari)) {
    // perintah query untuk menampilkan data siswa dari database berdasarkan nis atau nama yang sesuai dengan kata kunci pencarian
    // data yang ditampilkan mulai = $mulai sampai batas = $batas
$query = mysqli_query($db, "SELECT * FROM tbl_siswa WHERE nis LIKE '%$cari%' OR nama LIKE '%$cari%' ORDER BY nis DESC LIMIT $mulai, $batas")
or die ('ada kesalahan data query siswa: '.mysqli_error($db));
}
// jika tidak dilakukan pencarian  data
else{
    // jika query untuk menampilkan data siswa di database 
    // jika data ditampilkan mulai = $mulai sampai dengan batas = $batas
    $query = mysqli_query($db, "SELECT * FORM tbl_siswa ORDER BY nis DESC LIMIT $mulai, $batas")
    or die ('ada kesalahan pada query siswa: '.mysqli_erorr($bd));
}
// tampilkan data
while($data = mysqli_fetch_assoc($query)) {?>
    <tr>
    <td width="30" class="center"><?php echo $no; ?></td>
    <td width="45"><img class="foto_thumbnail" src='foto/<?php echo $data['foto'];?>' alt="foto siswa"></td>
<td width="80" class="center"><?php echo $data['nis']; ?></td>
<td width="180"><?php echo $data['nama'] ?></td>
<td width="180"><?php echo $data['tempat_lahir']; ?>, <?php echo date('d-m-Y', strtotime($data['tanggal_lahir'])); ?></td>
<td width="120"><?php echo $data['jenis_kelamin']; ?></td>
<td width="100"><?php echo $data['agama']; ?></td>
<td width="180"><?php echo $data['alamat']; ?></td>
<td width="70" class="center"><?php echo $data['no_hp']; ?></td>

<td width="120" class="center">
<a title="ubah" class="btn btn-outline-info" href="?page=ubah&nis=<?php echo $data['nis']; ?>"><i class="fas fa-edit"></i></a>
<a title="hapus" class="btn btn-outline-danger" href="proses_hapus.php?nis=<?php echo $data['nis'];?>" onclick="return confirm('anda yakin ingin menghapus siswa <?php echo $data['nama']; ?>?');"><i class="fas fa-trash"></i></a>
</td>
</tr>
<?php
$no++;
} ?>
</tbody>
</table>
<!-- tampilakan pagination -->
<?php
// fungsi untuk pengecekan halaman aktif
// jika halaman kosong atau tidak ada yang dipilih
if (empty($_GET['hal'])) {
    // ha;aman aktif = 1
    $halaman_aktif = '1';
}
// selain itu
else {
    // halaman aktig = sesuai yang dipilih
    $halaman_aktif = $_GET['hal'];
}
?>
<div class="row">
<div class="col">
<!-- tampilkan informasi jumlah halaman dan jumlah data-->
<a>
halaman <?php echo $halaman_aktif; ?> dari <?php echo $halaman; ?> -
total <?php echo $jumlah; ?> data
</a>
</div>
<div class="col">
<nav aria-label="Page navigation example">
<ul class="pagination justify-content-end">
<!-- button untuk halaman sebelumnya -->
<?php
//jika halaman aktif= 0 atau = 1, maka button sebelumnya = disable
if ($halaman_aktif<='1') {?>
<li class="page-item disabled"> <span class="page-link">sebelumnya</span></li>
<?php
}
// jika halaman aktif > 1, maka button sebelumnya = aktif
else {?>
<li class="page-item"><a class="page-link" href="?hal<?php echo $page -1 ?>">sebelumnya</a></li>
<?php } ?>

<!--button untuk link halaman 1 2 3 ... -->
<?php
for($x=1; $x<=$halaman; $x++) { ?>
<li class="page-item"><a class="page-link" href="?hal=<?php echo $x ?>"><?php echo $x?></a></li>
<?php } ?>

<!-- button untuk halaman selanjunya -->
<?php
// jika halaman aktif >=jumlah halaman, maka button selanjutnya = disable
if ($halaman_aktif>=$halaman) { ?>
<li class="page-item disabled"> <span class="page-link"> selanjunya</span></li>
<?php
}
// jika halam aktif <= jumlah halaman, mka button selanjunya = aktif
else{ ?>
<li class="page-item"><a class="page-link" href="?hal=<?php echo $page +1 ?>"> selanjunya</a></li>
<?php }?>
</ul>
</nav>
</div>
</div>
</div>
</div>