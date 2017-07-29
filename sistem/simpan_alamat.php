<?php

include 'koneksi.php';
include 'cek_login.php';

$id = $_POST['id'];
$kecamatan = $_POST['kecamatan'];
$kota = $_POST['kota'];
$kodepos = $_POST['kodepos'];
$provinsi = $_POST['provinsi'];
$alamat = $_POST['alamat'];
$id_user = $data_user['id_user'];

if($id == NULL) {
  // query SQL untuk insert data
  $query = "INSERT INTO tbl_alamat_user SET id_alamat_user='$id', id_user='$id_user', kota_au='$kota', provinsi_au='$provinsi', kodepos_au='$kodepos', kecamatan_au='$kecamatan', alamat_au='$alamat'";
  $hasil = mysqli_query($koneksi, $query);
  if(!$hasil = NULL){
    header("location:http://localhost/gelartikar/pengaturan_akun_user.php?hasil=berhasil");
  } else {
    header("location:http://localhost/gelartikar/pengaturan_akun_user.php?hasil=gagal");
  }
} else {
  // query SQL untuk update data
  $query = "UPDATE tbl_alamat_user SET id_alamat_user='$id', id_user='$id_user', kota_au='$kota', provinsi_au='$provinsi', kodepos_au='$kodepos', kecamatan_au='$kecamatan', alamat_au='$alamat' where id_alamat_user='$id'";
  $hasil = mysqli_query($koneksi, $query);
  if(!$hasil = NULL){
    header("location:http://localhost/gelartikar/pengaturan_akun_user.php?hasil=berhasil");
  } else {
    header("location:http://localhost/gelartikar/pengaturan_akun_user.php?hasil=gagal");
  }
}


?>
