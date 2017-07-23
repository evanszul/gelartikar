<?php

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

if($username == NULL && $password == NULL){
  $error = "Username dan Password belum diisi!";
} else if($username == NULL){
  $error = "Username masih kosong!";
} else if($password == NULL){
  $error = "Password masih kosong!";
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
      $error2 = "Password yang tidak cocok";
      header("location:http://localhost/gelartikar/login.php?error=2");
    }
  } else {
    $error3 = "Username yang tidak ditemukan";
    header("location:http://localhost/gelartikar/login.php?error=3");
  }
}
?>
