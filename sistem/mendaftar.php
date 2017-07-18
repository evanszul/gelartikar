<?php

include 'koneksi.php';

$id = '';
$nama = $_POST['nama'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$no_hp_user = $_POST['no_hp_user'];
echo $nama;
echo $email;
echo $username;
echo $password;
echo $no_hp_user;
// query SQL untuk insert data
$query="INSERT INTO tbl_user SET id_user='$id', nama_user='$nama', username='$username', pwd_user='$password', email_user='$email', tlp_user='$no_hp_user'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php

?>
