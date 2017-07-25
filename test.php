<?php
include'./sistem/koneksi.php';

$data_barang = mysqli_query($koneksi, "SELECT * FROM tbl_barang");
$no= 1;
foreach ($data_barang as $barang) {
  echo $no." ".$barang['nama_barang']."<br>";
  $no++;
}


?>
