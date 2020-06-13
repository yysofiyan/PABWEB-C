<?php
// set default timezone
date_default_timezone_set("ASIA/JAKARTA");

// deklarasi parameter koneksi database
$server   = "localhost";
$username = "root";
$password = "";
$databse  ="db_sekolah";

// koneksi database
$db = mysqli_connect($server, $username, $password, $databse);

// cek koneksi
if (!$db){
	// cek koneksi gagal, tampilkan pesan gagal
	die('Koneksi Data Base Gagal : '.mysqli_connect_error());
}
?>