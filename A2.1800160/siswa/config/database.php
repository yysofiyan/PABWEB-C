<?php
date_default_timezone_set("ASIA/JAKARTA");

$server   = 'localhost';
$username = 'root';
$password = '';
$database = 'siswa';

$db = mysqli_connect($server, $username, $password, $database);

if (!$db) {
    die(mysqli_connect_error());
}