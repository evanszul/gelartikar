<?php
error_reporting("");
require_once("./sistem/cek_sesi.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lupa Password | GelarTikar.com</title>
    <link rel="stylesheet" href="./style/css/loginstyle.css">
    <meta name="viewport" content="width=device-width , initial-scale=1">
  </head>

  <body>

    <div id="login">
      <div class="center">

          <img src="./image/logo/logo_web.png" width="100%"/>

          <form class="fl" action="" method="post">
            <input class="itpw" type="email" name="email" placeholder="Email"><br>
            <input class="its" type="submit" name="kirim" value="Kirim">
          </form>

          <p><a href="./login.php">Login</a> | <a href="./daftar.php">Daftar</a>  </p>

      </div>
    </div>

  </body>
</html>
