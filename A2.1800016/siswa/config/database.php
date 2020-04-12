<?php                           // tag pembuka syntax php
// set default timezone
date_default_timezone_set("ASIA/JAKARTA");

// deklarasi parameter koneksi database
$server   = "localhost";            // server database, default "localhost" atau "127.0.0.1"
$username = "id13234747_andiniputrimr";                 // username database, default "root"
$password = "Anptmr_/15091999";                     // password database, default kosong
$database = "id13234747_sekolah";           // memilih database yang akan digunakan

// koneksi database
$db = mysqli_connect($server, $username, $password, $database);

// cek koneksi
if (!$db) {
    // cek koneksi gagal, tampilkan pesan gagal
    die('Koneksi Database Gagal : '.mysqli_connect_error());
}
?>                              <!-- tag penutup syntax PHP -->


