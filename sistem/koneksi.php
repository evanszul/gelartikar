<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'gelartikar';

$koneksi = mysqli_connect($host,$user,$pass,$database);
if (!$koneksi){
	echo 'Tidak dapat terhubung ke database';
}
?>
