<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'gelartikar';

$koneksi_db = mysql_connect($host, $user, $pass);
$temukan_db = mysql_select_db($database);

?>
