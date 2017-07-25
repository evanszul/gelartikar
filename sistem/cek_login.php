<?php

include 'koneksi.php';

session_start();

$userlogin = $_SESSION['username'];

$query = mysqli_query($koneksi,"SELECT * FROM tbl_user where username='$userlogin'");
$data_user = mysqli_fetch_assoc($query);


?>
