<?php

date_default_timezone_set("ASIA/JAKARTA");
//deklarasi parameter koneksi database
$_server    = "localhost";
$username   = "root";
$password   = "";
$database   = "db_sekolah";

//koneksi
$db = mysqli_connect($_server, $username, $password, $database);

//cek koneksi
if (!$db) {
    die('koneksi database gagal :'.mysqli_connect_error());
}
?>