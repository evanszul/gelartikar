<?php

include 'koneksi.php';

$id = '';
$nama = $_POST['nama'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$no_hp_user = $_POST['no_hp_user'];

// Periksa masukan
if($nama == NULL && $email == NULL && $username == NULL && $password == NULL && $no_hp_user == NULL){
  $emptynama= "Semua data belum diisi!";
} if ($nama == NULL){
  echo "Nama belum diisi!";
} if ($email == NULL){
  echo "Email belum diisi!";
} if ($username == NULL){
  echo "Username belum diisi!";
} if ($password == NULL){
  echo "Password belum diisi!";
} if ($no_hp_user == NULL){
  echo "No Handphone belum diisi!";
}

if ($nama == NULL OR $email == NULL OR $username == NULL OR $password OR NULL OR $no_hp_user == NULL){
  redirect("./daftar.html");
  header("Location:http://localhost/gelartikar/daftar.html");
} else {

  // query SQL untuk insert data
  $query="INSERT INTO tbl_user SET id_user='$id', nama_user='$nama', username='$username', pwd_user='$password', email_user='$email', tlp_user='$no_hp_user'";
  mysqli_query($koneksi, $query);

}




?>
