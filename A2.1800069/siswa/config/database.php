<?php
date_default_timezone_set("ASIA/JAKARTA");

$server   = 'localhost';
$username = 'id12950641_a21800069';
$password = 'siswa';
$database = 'id12950641_db_sekolah';

$db = mysqli_connect($server, $username, $password, $database);

if (!$db) {
    die(mysqli_connect_error());
}