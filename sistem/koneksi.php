<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'gelartikar';

$koneksi = mysql_connect($host,$user,$pass,$database);
if (!$koneksi){
	echo 'Tidak dapat terhubung ke database';
}
?>
