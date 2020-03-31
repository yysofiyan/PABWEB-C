<?php

require_once "config/database.php";

if (isset($_GET['nis'])) {

$nis = $_GET['nis'];

$query = mysqli_query($db, "SELECT foto FROM tbl_siswa WHERE nis='$nis'")
 
or die('Ada kesalahan pada query tampil data foto :'.mysqli_error($db)); 
$data = mysqli_fetch_assoc($query); 
$foto = $data['foto']; 

$hapus_file = unlink("foto/$foto");

if ($hapus_file) {

$delete = mysqli_query($db, "DELETE FROM tbl_siswa WHERE nis='$nis'")
or die('Ada kesalahan pada query delete :'.mysqli_error($db));

if ($delete) {

header("location: index.php?alert=3");
}
} 

 } 

mysqli_close($db);
?> 