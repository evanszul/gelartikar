<?php

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

if($username == NULL && $password == NULL){
  // Username dan Password belum diisi!
  $error = 4;
} else if($username == NULL){
  // Username masih kosong!
  $error = 5;
} else if($password == NULL){
  // Password masih kosong!
  $error = 6;
}

if($username == NULL OR $password == NULL){
  header("location:http://localhost/gelartikar/login.php?error=$error");
} else {

  $query = mysqli_query($koneksi, "SELECT * FROM tbl_user where username='$username'");
  $cek_user = mysql_num_rows($query);
  $user = mysqli_fetch_assoc($query);
  if($cek_user>0){
    if( password_verify($_POST['password'], $user['pwd_user']) ) {
      session_start();
      $_SESSION['username'] = $user['username'];
      header("location:http://localhost/gelartikar/beranda_user.php");
    } else {
      //Password yang tidak cocok
      header("location:http://localhost/gelartikar/login.php?error=2");
    }
  } else {
    // Username yang tidak ditemukan
    header("location:http://localhost/gelartikar/login.php?error=3");
  }
}
?>
