-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2017 at 07:35 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gelartikar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `username_admin` varchar(20) NOT NULL,
  `pwd_admin` varchar(100) NOT NULL,
  `email_admin` varchar(30) NOT NULL,
  `deskripsi_admin` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alamat_user`
--

CREATE TABLE IF NOT EXISTS `tbl_alamat_user` (
  `id_alamat_user` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `kota_au` varchar(50) NOT NULL,
  `provinsi_au` varchar(50) NOT NULL,
  `kodepos_au` int(11) NOT NULL,
  `desakel_au` varchar(50) NOT NULL,
  `kecamatan_au` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE IF NOT EXISTS `tbl_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(150) NOT NULL,
  `id_kategori_barang` int(11) NOT NULL,
  `id_brand` int(11) NOT NULL,
  `deskripsi_barang` text NOT NULL,
  `berat_barang` int(90) NOT NULL,
  `harga_barang` bigint(250) NOT NULL,
  `stok_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE IF NOT EXISTS `tbl_brand` (
  `id_brand` int(11) NOT NULL,
  `nama_brand` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori_barang`
--

CREATE TABLE IF NOT EXISTS `tbl_kategori_barang` (
  `id_kategori_barang` int(11) NOT NULL,
  `nama_kategori_barang` varchar(30) NOT NULL,
  `url` varchar(30) NOT NULL,
  `id_kategori_utama` int(11) NOT NULL,
  `deskripsi_kategori_barang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rekening_user`
--

CREATE TABLE IF NOT EXISTS `tbl_rekening_user` (
  `id_rekening_user` int(11) NOT NULL,
  `bank_ru` varchar(50) NOT NULL,
  `an_ru` varchar(150) NOT NULL,
  `no_ru` varchar(150) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE IF NOT EXISTS `tbl_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `kode_transaksi` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_rekening_user` int(11) NOT NULL,
  `id_alamat_user` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `tgl_pengiriman` date NOT NULL,
  `tipe_pengiriman` varchar(100) NOT NULL,
  `kode_pengiriman` int(100) NOT NULL,
  `status_konfirmasi` date NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi_barang`
--

CREATE TABLE IF NOT EXISTS `tbl_transaksi_barang` (
  `id_transaksi_barang` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_ukuran` int(11) NOT NULL,
  `jumlah_tb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transfer`
--

CREATE TABLE IF NOT EXISTS `tbl_transfer` (
  `id_transfer` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_rekening_user` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `jumlah_tf` bigint(250) NOT NULL,
  `tgl_tf` date NOT NULL,
  `tgl_konfirmasi_tf` date NOT NULL,
  `id_admin` int(11) NOT NULL,
  `status_tf` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ukuran`
--

CREATE TABLE IF NOT EXISTS `tbl_ukuran` (
  `id_ukuran` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `ukuran` varchar(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pwd_user` varchar(100) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `tlp_user` bigint(250) NOT NULL,
  `catatan_user` varchar(250) NOT NULL,
  `status_user` varchar(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `pwd_user`, `email_user`, `tlp_user`, `catatan_user`, `status_user`) VALUES
(3, 'Evans Zulhendy', 'evanszul', '$2y$10$ql.lt0y8hy236JFsN7uzW.zEhpkvnNAbXvnEKdmGFaLv0gdsat3b.', 'evanszul@gmail.com', 2147483647, '', ''),
(4, 'Kevin Ismail', 'kevinmail', '$2y$10$KcyNMP3.dw9X1XA4fEIyiuqWhVIEYe8rXIFXO1W0RmJqDpNBTD1w6', 'kevin@gmail.com', 2147483647, '', ''),
(5, 'Rio Juliansyah', 'rio', '$2y$10$bJO3qCT910aC1niqWEawZ.NqIWum8ZZUFKEdkMpfY/O8YBYnRokFm', 'rio.minang@gmail.com', 2147483647, '', ''),
(6, 'Oklan', 'ocland', '$2y$10$IqdNHIY/LmxynlhCuQVqwu8F9P498Ukxlvtk/.ezoeFWw24CWw04G', 'ocland@mail.com', 81261202102, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_alamat_user`
--
ALTER TABLE `tbl_alamat_user`
  ADD PRIMARY KEY (`id_alamat_user`);

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`id_brand`);

--
-- Indexes for table `tbl_kategori_barang`
--
ALTER TABLE `tbl_kategori_barang`
  ADD PRIMARY KEY (`id_kategori_barang`);

--
-- Indexes for table `tbl_rekening_user`
--
ALTER TABLE `tbl_rekening_user`
  ADD PRIMARY KEY (`id_rekening_user`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `tbl_transaksi_barang`
--
ALTER TABLE `tbl_transaksi_barang`
  ADD PRIMARY KEY (`id_transaksi_barang`);

--
-- Indexes for table `tbl_transfer`
--
ALTER TABLE `tbl_transfer`
  ADD PRIMARY KEY (`id_transfer`);

--
-- Indexes for table `tbl_ukuran`
--
ALTER TABLE `tbl_ukuran`
  ADD PRIMARY KEY (`id_ukuran`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`), ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_alamat_user`
--
ALTER TABLE `tbl_alamat_user`
  MODIFY `id_alamat_user` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `id_brand` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_kategori_barang`
--
ALTER TABLE `tbl_kategori_barang`
  MODIFY `id_kategori_barang` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_rekening_user`
--
ALTER TABLE `tbl_rekening_user`
  MODIFY `id_rekening_user` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_transaksi_barang`
--
ALTER TABLE `tbl_transaksi_barang`
  MODIFY `id_transaksi_barang` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_transfer`
--
ALTER TABLE `tbl_transfer`
  MODIFY `id_transfer` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_ukuran`
--
ALTER TABLE `tbl_ukuran`
  MODIFY `id_ukuran` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
