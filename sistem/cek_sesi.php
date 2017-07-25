<?php
error_reporting("");
session_start();

$username = $_SESSION['username'];

if(!$username == NULL){
  header("location:beranda_user.php");
}

?>
