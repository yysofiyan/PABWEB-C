<?php
date_default_timezone_set("ASIA/JAKARTA");

$server   = 'localhost';
$username = 'id13239906_datassekolah';
$password = '4_hm6/S936TN2BK7';
$database = 'id13239906_dbsekolah';

$db = mysqli_connect($server, $username, $password, $database);

if (!$db) {
    die(mysqli_connect_error());
}