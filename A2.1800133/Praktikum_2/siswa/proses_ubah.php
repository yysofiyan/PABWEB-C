<?php

require_once "config/database.php";

if (isset($_POST['simpan'])) {
if (isset($_POST['nis'])) {

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
 
if (empty($nama_file)) { 
 
$update = mysqli_query($db, "UPDATE tbl_siswa SET nama = '$nama', 
 
tempat_lahir = '$tempat_lahir', 

tanggal_lahir = '$tanggal_lahir', 

jenis_kelamin = '$jenis_kelamin', 

agama = '$agama', 
 
alamat = '$alamat', 

no_hp = '$no_hp' 

WHERE nis = '$nis'") or die('Ada kesalahan pada query update : '.mysqli_error($db)); 

if ($update) { 

header("location: index.php?alert=2"); 

} 

} 

else { 

if(move_uploaded_file($tmp_file, $path)) { 

$update = mysqli_query($db, "UPDATE tbl_siswa SET nama = '$nama', 

tempat_lahir = '$tempat_lahir', 

tanggal_lahir = '$tanggal_lahir', 

jenis_kelamin = '$jenis_kelamin', 

agama = '$agama', 

alamat = '$alamat', 

no_hp = '$no_hp', 
 
foto = '$nama_file' 

WHERE nis = '$nis'") or die('Ada kesalahan pada query update : '.mysqli_error($db)); 

if ($update) { 

header("location: index.php?alert=2"); 

} 
} 
} 
} 

} 

mysqli_close($db);
?> 