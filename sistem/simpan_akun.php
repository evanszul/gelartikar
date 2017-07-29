<?php

include 'koneksi.php';
include 'cek_login.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];

if($id == NULL) {
  // gagal tidak ada id
    header("location:http://localhost/gelartikar/pengaturan_akun_user.php?hasil=gagal");
} else {
  // query SQL untuk update data
  $query = "UPDATE tbl_user SET id_user='$id_user', nama_user='$nama', email_user='$email', tlp_user='$no_hp' where id_user='$id'";
  $hasil = mysqli_query($koneksi, $query);
  if(!$hasil = NULL){
    header("location:http://localhost/gelartikar/pengaturan_akun_user.php?hasil=berhasil");
  } else {
    header("location:http://localhost/gelartikar/pengaturan_akun_user.php?hasil=gagal");
  }
}


?>
