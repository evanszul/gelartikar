<?php error_reporting(""); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Berhasil Mendaftar | GelarTikar.com</title>
    <link rel="stylesheet" href="./style/css/loginstyle.css">
    <meta name="viewport" content="width=device-width , initial-scale=1">
  </head>

  <body>

    <div id="login">
      <div class="center">
          <center>
            <img src="./image/logo/logo_web.png" width="100%"/>
          </center>
          <p><b>Terima kasih telah mendaftar di GelarTikar. </b></p>
          <p style="color:red"> <b> <?php echo $_GET['error']; ?> </b> </p>
          <p><a href="./login.php">Login di sini</a></p>

      </div>
    </div>

  </body>
</html>
