<?php
date_default_timezone_set("ASIA/JAKARTA");

$server   = '192.168.10.10';
$username = 'homestead';
$password = 'secret';
$database = 'db_sekolah';

$db = mysqli_connect($server, $username, $password, $database);

if (!$db) {
    die(mysqli_connect_error());
}