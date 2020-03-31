<?php

date_default_timezone_set("ASIA/JAKARTA");

$server   = "localhost";
$username = "id13068275_root";
$password = "12345678";
$database = "id13068275_db_sekolah";

$db = mysqli_connect($server, $username, $password, $database);

if (!$db) {
    die('Koneksi Database Gagal : ' .mysqli_connect_error());
}
?>