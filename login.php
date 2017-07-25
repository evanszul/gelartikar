<?php
error_reporting("");
require_once("./sistem/cek_sesi.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Member | GelarTikar.com</title>
    <link rel="stylesheet" href="./style/css/loginstyle.css">
    <meta name="viewport" content="width=device-width , initial-scale=1">
  </head>

  <body>

    <div id="login">
      <div class="center">
          <center>
            <img src="./image/logo/logo_web.png" width="100%"/>
          </center>
          <p><b>Silakan masuk ke dalam akun kamu </b></p>
          <p style="color:red"><b>
          <?php
            $error = $_GET['error'];
            if($error == 4){
              echo "Username dan Password belum diisi!";
            } else if($error == 5){
              echo "Username masih kosong!";
            } else if($error == 6){
              echo "Password masih kosong!";
            } else if($error == 2){
              echo "Password tidak cocok!";
            } else if($error == 3){
              echo "Username tidak ditemukan!";
            }
          ?>
          </b></p>
          <form class="fl" action="./sistem/login.php" method="post">
            Belum punya akun? <a href="./daftar.php">Daftar di sini</a>
            <input class="itpw" type="text" name="username" placeholder="Username"><br>
            <input class="itpw" type="password" name="password" placeholder="Password"><br>
            <input class="its" type="submit" name="login" value="LOGIN">
          </form>

          <p><a href="./lupapassword.php">Lupa Password?</a>

      </div>
    </div>

  </body>
</html>
