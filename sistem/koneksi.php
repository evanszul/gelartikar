<?php

$host = 'sql12.freemysqlhosting.net';
$user = 'sql12187229';
$pass = 'nitDPFxyxb';
$database = 'sql12187229';

$koneksi = mysqli_connect($host,$user,$pass,$database);
if (!$koneksi){
	echo 'Tidak dapat terhubung ke database';
}
?>
