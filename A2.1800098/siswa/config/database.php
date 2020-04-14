<?php
date_default_timezone_set("ASIA/JAKARTA");

$server   = 'localhost';
$username = 'root';
$password = '';
$database = 'db_sekolah';

$db = mysqli_connect($server, $username, $password, $database);

if (!$db) {
    die(mysqli_connect_error());
}