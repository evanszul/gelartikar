<?php

include 'koneksi.php';

$id = '';
$nama = $_POST['nama'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$no_hp_user = $_POST['no_hp_user'];

// Periksa masukan
if($nama == NULL && $email == NULL && $username == NULL && $password == NULL && $no_hp_user == NULL){
  $emptynama= "Semua data belum diisi!";
} if ($nama == NULL){
  $error="Nama belum diisi!";
} if ($email == NULL){
  $error="Email belum diisi!";
} if ($username == NULL){
  $error="Username belum diisi!";
} if ($password == NULL){
  $error="Password belum diisi!";
} if ($no_hp_user == NULL){
  $error="No Handphone belum diisi!";
}

if ($nama == NULL OR $email == NULL OR $username == NULL OR $password == NULL OR $no_hp_user == NULL){
  header("location:http://localhost/gelartikar/daftar.php?nama=$nama&username=$username&email=$email&no_hp_user=$no_hp_user&error=$error");
} else {

  // query SQL untuk insert data
  $query="INSERT INTO tbl_user SET id_user='$id', nama_user='$nama', username='$username', pwd_user='$password', email_user='$email', tlp_user='$no_hp_user'";
  mysqli_query($koneksi, $query);
  header("location:http://localhost/gelartikar/daftar_berhasil.php");

}




?>
