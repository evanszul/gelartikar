<?php

include 'sistem/cek_login.php';

?>
<html>
<head>
  <title>Situs Mall Fashion Online Terpecaya - GelarTikar.com</title>
  <link rel="stylesheet" type="text/css" href="./style/css/styletoko.css" >
</head>
<body>
  <div class="mini-nav">
  <div class="container">
    <div class="row">
      <div class="pull-left">
        GRATIS ONGKIR | BANYAK PILIHAN | PRODUK UKM
      </div>
      <div class="pull-right">
        <a href="#"><b>Bantuan 7 x 24 Jam</b></a> | <a href="#"><b>Cek Status Pesanan</b></a> | <a href="#"><b>Jual di GelarTikar.com</b></a> | <a href="biodata.html"><b>About Us!</b></a>
      </div>
    </div>
  </div>
</div>
  <div class="bg-white">
    <div class="container">
      <div class="row">
        <div class="col2">
          <a href="http://localhost/gelartikar"><img class="logo_set" src="./image/logo/logo_web.jpg"/></a>
        </div>
        <div class="col6">
          <div class="input-group">
            <form>
              <input class="input-text" type="text" placeholder="Cari apa saja disini..." name="cari" />
              <button class="button" type="submit">Cari</button>
            </form>
          </div>
        </div>
        <div class="col4">
          <div class="input-group pull-right">
            <a class="button" href="profile_user.php">Hallo, <?php echo $data_user['nama_user']; ?></a>
            <a class="button2" href="sistem/logout.php">Keluar</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Mega Menu -->
  <div class="bg-menu">
    <div class="container">
      <div class="mega-menu">
        <ul>
          <li><a href="http://localhost/gelartikar">Beranda</a></li>
          <li><a href="#">Fashion Pria</a>
            <div class="menu-detail">
              <div class="row">
                <div class="col3">
                  <!-- Accordion A-->
                  <div class="acc-kontainer">
                     <div>
                       <input type="radio" name="acc" id="acc1" checked>
                       <label for="acc1"> <b>Atasan</b></label>
                       <div class="acc-body">
                         <a href="#"> Kaos & Polo Shirt </a>
                         <a href="#"> Kemeja</a>
                         <a href="#"> Sweater & Cardigan</a>
                         <a href="#"> Jaket & Coat</a>
                         <a href="#"> Jas </a>
                         <a href="#"> Vest </a>
                       </div>
                      </div>
                      <div>
                        <input type="radio" name="acc" id="acc2">
                        <label for="acc2"> <b>Bawahan</b></label>
                        <div class="acc-body">
                          <a href="#"> Celana Panjang </a>
                          <a href="#"> Celana Pendek </a>
                        </div>
                      </div>
                      <div>
                        <input type="radio" name="acc" id="acc3">
                        <label for="acc3"><b>Batik</b></label>
                        <div class="acc-body">
                          <a href="#"> Batik </a>
                        </div>
                      </div>
                      <div>
                        <input type="radio" name="acc" id="acc4">
                        <label for="acc4"><b>Pakaian Dalam</b></label>
                        <div class="acc-body">
                          <a href="#"> Celana Dalam </a>
                          <a href="#"> Kaos Dalam </a>
                          <a href="#"> Pakaian Dalam Lainnya </a>
                        </div>
                      </div>
                      <div>
                        <input type="radio" name="acc" id="acc5">
                        <label for="acc5"><b>Busana Muslim</b></label>
                        <div class="acc-body">
                          <a href="#"> Baju Koko </a>
                          <a href="#"> Sarung & dll </a>
                          <a href="#"> Busana Muslim lain </a>
                        </div>
                      </div>
                      <div>
                        <input type="radio" name="acc" id="acc6">
                        <label for="acc6"><b>Kostum Pria</b></label>
                        <div class="acc-body">
                          <a href="#"> Pakaian Kostum Pria </a>
                        </div>
                      </div>
                  </div>
                  <!-- Akhir Accordion A-->
                </div>
                <div class="col3">
                  <!-- Accordion B-->
                  <div class="acc-kontainer">
                  <div>
                    <input type="radio" name="acc" id="bcc1" checked>
                    <label for="bcc1"> <b>Aksesoris</b></label>
                    <div class="acc-body">
                      <a href="#"> Topi </a>
                      <a href="#"> Scarf</a>
                      <a href="#"> Aksesoris Pria Lainya</a>
                      <a href="#"> Dasi</a>
                      <a href="#"> Ikat Pinggang </a>
                      <a href="#"> Sarung Tangan </a>
                    </div>
                   </div>
                   <div>
                     <input type="radio" name="acc" id="bcc2">
                     <label for="bcc2"> <b>Jeans</b></label>
                     <div class="acc-body">
                       <a href="#"> Atasan Jeans </a>
                       <a href="#"> Bawahan Jeans </a>
                     </div>
                   </div>
                   <div>
                     <input type="radio" name="acc" id="bcc3">
                     <label for="bcc3"><b>Kacamata</b></label>
                     <div class="acc-body">
                       <a href="#"> Sunglasses </a>
                       <a href="#"> Frame Kacamata </a>
                       <a href="#"> Kacamata Baca </a>
                       <a href="#"> Soft Lense </a>
                       <a href="#"> Aksesoris Lainnya </a>
                     </div>
                   </div>
                   <div>
                     <input type="radio" name="acc" id="bcc4">
                     <label for="bcc4"><b>Sports</b></label>
                     <div class="acc-body">
                       <a href="#"> Pakaian Olahraga Lainnya </a>
                       <a href="#"> Pakaian Renang </a>
                     </div>
                   </div>
                   <div>
                     <input type="radio" name="acc" id="bcc5">
                     <label for="bcc5"><b>Sepatu</b></label>
                     <div class="acc-body">
                       <a href="#"> Sandal </a>
                       <a href="#"> Boots </a>
                       <a href="#"> Sepatu Formal </a>
                       <a href="#"> Sneakers </a>
                       <a href="#"> Sepatu Kasual </a>
                       <a href="#"> Sepatu Olahraga </a>
                       <a href="#"> Slip-On </a>
                       <a href="#"> Kaus Kaki </a>
                     </div>
                   </div>
                 </div>
                   <!-- Akhir Accordion B-->
                </div>
                <div class="col3">
                  <h3> Fashion Pria </h3>
                  <img src="./image/figure/figurepria.png" width="100%">
                </div>
              </div>
            </div>
          </li>
          <li><a href="#">Fashion Wanita</a>
            <div class="menu-detail">
              <div class="row">
                <div class="col3">
                  <!-- Accordion A-->
                  <div class="acc-kontainer">
                     <div>
                       <input type="radio" name="acc" id="awc1" checked>
                       <label for="awc1"> <b>Atasan</b></label>
                       <div class="acc-body">
                         <a href="#"> Blouse </a>
                         <a href="#"> Kaos & Polo Shirt </a>
                         <a href="#"> Kemeja </a>
                         <a href="#"> Sweater & Cardigan </a>
                         <a href="#"> Jaket & Coat </a>
                         <a href="#"> Tank Top </a>
                         <a href="#"> Blazer </a>
                         <a href="#"> Tunik </a>
                         <a href="#"> Vest </a>
                       </div>
                      </div>
                      <div>
                        <input type="radio" name="acc" id="awc2" checked>
                        <label for="awc2"> <b>Baju Muslim</b></label>
                        <div class="acc-body">
                          <a href="#"> Hijab </a>
                          <a href="#"> Dress </a>
                          <a href="#"> Atasan </a>
                          <a href="#"> Sarung & Mukena </a>
                          <a href="#"> Rok </a>
                          <a href="#"> Celana </a>
                          <a href="#"> Jaket & Cardigan </a>
                          <a href="#"> Aksesoris </a>
                        </div>
                      </div>
                      <div>
                        <input type="radio" name="acc" id="awc3" checked>
                        <label for="awc3"> <b>Pakaian Dalam</b></label>
                        <div class="acc-body">
                          <a href="#"> Bra </a>
                          <a href="#"> Celana Dalam </a>
                          <a href="#"> Lingerie </a>
                          <a href="#"> Korset & Shapewear </a>
                          <a href="#"> Pakaian Dalam Lainnya </a>
                        </div>
                      </div>
                      <div>
                        <input type="radio" name="acc" id="awc4" checked>
                        <label for="awc4"> <b>Dress</b></label>
                        <div class="acc-body">
                          <a href="#"> Midi Dress </a>
                          <a href="#"> Mini Dress </a>
                          <a href="#"> Long Dress </a>
                          <a href="#"> Kain </a>
                          <a href="#"> Gaun Pengantin </a>
                        </div>
                      </div>
                      <div>
                        <input type="radio" name="acc" id="awc5" checked>
                        <label for="awc5"> <b>Bawahan</b></label>
                        <div class="acc-body">
                          <a href="#"> Celana Panjang </a>
                          <a href="#"> Rok Wanita </a>
                          <a href="#"> Celana Pendek </a>
                          <a href="#"> Legging </a>
                        </div>
                      </div>
                  </div>
                  <!-- Akhir Accordion A-->
                </div>
                <div class="col3">
                  <!-- Accordion B-->
                  <div class="acc-kontainer">
                  <div>
                    <input type="radio" name="acc" id="bwc1" checked>
                    <label for="bwc1"> <b>Sports</b></label>
                    <div class="acc-body">
                      <a href="#"> Pakaian Olahraga </a>
                      <a href="#"> Pakaian Renang </a>
                    </div>
                   </div>
                   <div>
                     <input type="radio" name="acc" id="bwc2" checked>
                     <label for="bwc2"> <b>Jeans</b></label>
                     <div class="acc-body">
                       <a href="#"> Bawahan </a>
                       <a href="#"> Atasan </a>
                       <a href="#"> Dress </a>
                     </div>
                   </div>
                   <div>
                     <input type="radio" name="acc" id="bwc3" checked>
                     <label for="bwc3"> <b>Pakaian Ibu Hamil</b></label>
                     <div class="acc-body">
                       <a href="#"> Baju Hamil </a>
                     </div>
                   </div>
                   <div>
                     <input type="radio" name="acc" id="bwc4" checked>
                     <label for="bwc4"> <b>Baju Tidur</b></label>
                     <div class="acc-body">
                       <a href="#"> Piyama </a>
                       <a href="#"> Gaun Tidur </a>
                       <a href="#"> Kimono </a>
                     </div>
                   </div>
                   <div>
                     <input type="radio" name="acc" id="bwc5" checked>
                     <label for="bwc5"> <b>Kacamata</b></label>
                     <div class="acc-body">
                       <a href="#"> Sunglasses </a>
                       <a href="#"> Frame Kacamata </a>
                       <a href="#"> Kacamata Baca </a>
                       <a href="#"> Kacamata Presciption </a>
                     </div>
                   </div>
                   <div>
                     <input type="radio" name="acc" id="bwc6" checked>
                     <label for="bwc6"> <b>Aksesoris</b></label>
                     <div class="acc-body">
                       <a href="#"> Aksesoris Rambut </a>
                       <a href="#"> Scarf, Selendang & Pashmina </a>
                       <a href="#"> Topi </a>
                       <a href="#"> Aksesoris Sepatu </a>
                     </div>
                   </div>
                 </div>
                   <!-- Akhir Accordion B-->
                </div>
                <div class="col3">
                  <!-- Accordion C-->
                  <div class="acc-kontainer">
                  <div>
                    <input type="radio" name="acc" id="cwc1" checked>
                    <label for="cwc1"> <b>Sepatu</b></label>
                    <div class="acc-body">
                      <a href="#"> Sandal </a>
                      <a href="#"> Flat Shoes </a>
                      <a href="#"> Heels </a>
                      <a href="#"> Wedges </a>
                      <a href="#"> Slip-On </a>
                      <a href="#"> Sneakers </a>
                      <a href="#"> Boots </a>
                      <a href="#"> Sepatu Olahraga </a>
                      <a href="#"> Kaus Kaki </a>
                    </div>
                  </div>
                  </div>
                </div>
                <div class="col3">
                  <h3> Fashion Wanita </h3>
                  <img src="./image/figure/figurewanita.png" width="110%">
                </div>
              </div>
            </div>
          </li>
          <li><a href="#">Aksesoris</a>
            <div class="menu-detail">
              <div class="row">
                <div class="col3">
                  <h3> Aksesoris Pria </h3>
                </div>
                <div class="col3">
                  <h3> Aksesoris Wanita </h3>
                </div>
              </div>
            </div>
          </li>
          <li><a href="transaksi_user.php">Transaksi </a></li>
          <li><a href="pengaturan_akun_user.php">Pengaturan</a></li>
        </ul>
      </div>
    </div>
  </div>
<!-- Akhir menu -->


<!-- Awal konten -->
<div class="container bg-white">
  <div class="row">
      <div class="box-kategori">
        <span class="judul-kategori"> Detail Transaksi</span>
      </div>
      <div class="breadcrumb">
        <span> <a href=""> Beranda </a> </span> /
        <span class="breadcrumb-active"> <a href="#"> Detail Transaksi </a></span>
      </div>
  </div>
  <div class="row">
      <div class="col3">
        <div class="card">
          <div class="card-header">
            <span> Brand </span>
          </div>
          <div class="card-body">
            <a href="#"><div class="list-brand">kim</div></a>
            <a href="#"><div class="list-brand">gatsuone</div></a>
            <a href="#"><div class="list-brand">jessica tan</div></a>
            <a href="#"><div class="list-brand">innara</div></a>
            <a href="#"><div class="list-brand">mint</div></a>
            <a href="#"><div class="list-brand">mosarstwo</div></a>
            <a href="#"><div class="list-brand">sophistix</div></a>
            <a href="#"><div class="list-brand">accent</div></a>
            <a href="#"><div class="list-brand">hope</div></a>
            <a href="#"><div class="list-brand">gee eight</div></a>
            <a href="#"><div class="list-brand">dei reich</div></a>
            <a href="#"><div class="list-brand">gaff</div></a>
            <a href="#"><div class="list-brand">veyl</div></a>
            <a href="#"><div class="list-brand">carvil</div></a>
            <a href="#"><div class="list-brand">purplejadebutik</div></a>
            <a href="#"><div class="list-brand">novo</div></a>
            <a href="#"><div class="list-brand">bandidas</div></a>
            <a href="#"><div class="list-brand">boontie</div></a>
            <a href="#"><div class="list-brand">sahara</div></a>
          </div>
        </div>
      </div>
    </div>
</div>

<!-- Akhir Konten -->


<!-- Awal footer -->
       <div class="footer">
          <div class="container">
            <div class="row">
           <div class="col3">
              <div class="panel-footer">
                    <img class="logo_set_footer" src="./image/logo/logo_web_white.png"/>
              </div>
           </div>
           <div class="col3">
             <div class="panel-footer">
               <div class="panel-footer-header">
                 Bantuan
               </div>
               <div class="panel-footer-body">

                   <a href="#" class="footer-link">Pembayaran </a>
                   <a href="#" class="footer-link">Pengiriman </a>
                   <a href="#" class="footer-link">Status Pesanan </a>
                   <a href="#" class="footer-link">Pengembalian Produk </a>
                   <a href="#" class="footer-link">Cara Belanja </a>
                   <a href="#" class="footer-link">Hubungi Kami </a>

               </div>
             </div>
           </div>
           <div class="col3">
              <div class="panel-footer-header">
                Info GelarTikar.com
              </div>
              <div class="panel-footer-body">

                  <a href="#" class="footer-link">Tentang GelarTikar.com </a>
                  <a href="#" class="footer-link">Blog </a>
                  <a href="#" class="footer-link">Siaran Pers </a>
                  <a href="#" class="footer-link">Kabar Terbaru </a>
                  <a href="#" class="footer-link">Daftar Brand </a>
                  <a href="#" class="footer-link">Ulasan Puas </a>
                  <a href="#" class="footer-link">Blog Competition </a>

              </div>
           </div>
           <div class="col3">
              <div class="panel-footer-header">
                Customer Care
              </div>
              <div class="panel-footer-body">

                  <span class="footer-link">Buka 24 jam setiap hari </span>
                  <span class="footer-link">082220326193 </span>
                  <a class="footer-link" href="mailto:customer.care@gelartikar.com"> customer.care@gelartikar.com </a>
                  </ul>
              </div>
           </div>
         </div>
          </div>
        </div>
      <div class="footer-paling-bawah">
          <div class="container">
            <div class="row">
              <div class="col8">
                &copy 2017 PT GelarTikar.com
              </div>
              <div class="col4 pull-right">
                <img src="./image/logo_pembayaran_pengiriman.png" height="30px"/>
              </div>
            </div>
          </div>
       </div>
   </body>
</html>
