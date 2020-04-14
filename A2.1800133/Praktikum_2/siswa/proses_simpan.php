<?php

require_once "config/database.php";

if (isset($_POST['simpan'])) { 
 
$nis = mysqli_real_escape_string($db, trim($_POST['nis']));
$nama = mysqli_real_escape_string($db, trim($_POST['nama']));
$tempat_lahir = mysqli_real_escape_string($db, trim($_POST['tempat_lahir']));
$tanggal_lahir = mysqli_real_escape_string($db, trim(date('Y-m-d',
strtotime($_POST['tanggal_lahir']))));
$jenis_kelamin = mysqli_real_escape_string($db, trim($_POST['jenis_kelamin']));
$agama = mysqli_real_escape_string($db, trim($_POST['agama'])); 
$alamat = mysqli_real_escape_string($db, trim($_POST['alamat'])); 
$no_hp = mysqli_real_escape_string($db, trim($_POST['no_hp'])); 
$nama_file = $_FILES['foto']['name'];
$tmp_file = $_FILES['foto']['tmp_name']; 

$path = "foto/".$nama_file; 

$query = mysqli_query($db, "SELECT nis FROM tbl_siswa WHERE nis='$nis'")
or die('Ada kesalahan pada query tampil data nis: '.mysqli_error($db)); 
$rows = mysqli_num_rows($query);

if ($rows > 0) {



header("location: index.php?alert=4&nis=$nis"); 
}

else {
if(move_uploaded_file($tmp_file, $path)) { 
$insert = mysqli_query($db, "INSERT INTO tbl_siswa(nis,nama,tempat_lahir,tanggal_lahir,
jenis_kelamin,agama,alamat,no_hp,foto)

VALUES('$nis','$nama','$tempat_lahir','$tanggal_lahir',
'$jenis_kelamin','$agama','$alamat','$no_hp','$nama_file')")

or die('Ada kesalahan pada query insert : '.mysqli_error($db)); 

if ($insert) { 

header("location: index.php?alert=1"); 

} 
 
} 
}
}

mysqli_close($db);
?>