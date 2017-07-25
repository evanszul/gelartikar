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
          <li><a href="#">Beranda</a></li>
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
        </ul>
      </div>
    </div>
  </div>
<!-- Akhir menu -->

<!-- Awal konten -->
   
   <div id="container">


		

        <div class="title"><h2><center>Detail Keranjang Belanja</center></h2></div>
     			<table border="0" align="center" width="75%" cellspacing="0" cellpadding="3">
				<tr style="background-color: #2196F3;">
					<th>No.</th>
					<th>Nama Barang</th>
					<th>Jumlah</th>
					<th>Harga Satuan</th>
					<th>Sub Total</th>
					<th>Action</th>
				</tr>
				
				<?php
				//Detail keranjang belanja
				$total = 0;
				$no = 1;
				foreach($_SESSION['(belum tau)'] as $name => $value){
					if($value > 0){
							$get = mysql_query('SELECT * FROM tbl_barang WHERE id_barang='.mysql_real_escape_string((int)$name));
							while($get_row = mysql_fetch_array($get)){
								if($no % 2 == 0){
									$warna = "#EAEAEA";
								} else {
									$warna = "#F4F4F4";
								}
								$sub = $get_row['harga_barang'] * $value;
								echo '
								<tr bgcolor="'.$warna.'">
									<td align="center">'.$no.'</td>
									<td align="center">'.$get_row['nama_barang'].'</td>
									<td align="center">'.$value.'</td>
									<td align="right">Rp. '.$get_row['harga_barang'].'</td>
									<td align="right">Rp. '.$sub.'</td>
									<td align="center">
										<a href="detail_keranjang.php?add='.$name.'"><button>Tambah</button></a> 
										<a href="detail_keranjang.php?remove='.$name.'"><button>Kurang</button></a> 
										<a href="detail_keranjang.php?delete='.$name.'" onclick="return confirm(\'Anda Yakin?\');"><button>Batal</button></a><br>
									</td>
								</tr>							
								';
								$no++;
							}
							$total += $sub;
						}
					}
				if($total == 0){
					echo '<tr><td colspan="5" align="center">Keranjang belanja masih kosong!</td></tr></table>';
					echo '<p><div align="right">
						<a href="daftar-produk.html"><button>Lanjutkan Belanja</button></a>
						</div></p>';
				} else {
					echo '
						<tr style="background-color: #999999;"><td colspan="4" align="right"><b>Total :</b></td><td align="right"><b>Rp. '.$total.'</b></td></td></td><td></td></tr></table>
						<p><div align="right">
						<a href="index.php"><button>Lanjutkan Belanja</button></a>
						<a href="selesai.php?total='.$total.'"><button>Lanjut ke Pembayaran</button></a>
						</div></p>
					';
				}
				?>
			    <?php
				// Menambah jumlah produk yang akan dibeli
				if(isset($_GET['add'])){
					$qt = mysql_query('SELECT barang_id, barang_jumlah FROM barang WHERE barang_id='.mysql_real_escape_string((int)$_GET['add']));
					while($qt_row = mysql_fetch_array($qt)){
						if($qt_row['barang_jumlah'] != $_SESSION['cart'][$_GET['add']]){
							$_SESSION['cart'][$_GET['add']]+='1';
							header("Location: detail_keranjang.php");
						} else {
							echo '<script language="javascript">alert("Stok barang tidak mencukupi"); document.location="detail_keranjang.php";</script>';
						}
					}
				}
				
				// Menghapus jumlah produk yang akan dibeli
				if(isset($_GET['remove'])){
					$_SESSION['cart'][$_GET['remove']]--;
					header("Location: detail_keranjang.php");
				}
				
				// Menghapus semua produk yang akan dibeli
				if(isset($_GET['delete'])){
					$_SESSION['cart'][$_GET['delete']]='0';
					header("Location: detail_keranjang.php");
				}
				?>
			</table>

		<div class="clear"></div>

<!-- Akhir konten -->

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
