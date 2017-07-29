<?php

include 'koneksi.php';

session_start();

$userlogin = $_SESSION['username'];

if($userlogin == ""){
    header("location:./admin/index.php");
} else{

    $query = mysqli_query($koneksi,"SELECT * FROM tbl_user where username='$userlogin'");
    $data_user = mysqli_fetch_assoc($query);
    $id_user = $data_user['id_user'];

}

?>
