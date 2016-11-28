-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2016 at 03:45 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webl`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `kode_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(40) NOT NULL,
  `tanggal_perolehan_barang` date NOT NULL,
  `harga_perolehan_barang` varchar(30) NOT NULL,
  `kode_kategori_barang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode_barang`, `nama_barang`, `tanggal_perolehan_barang`, `harga_perolehan_barang`, `kode_kategori_barang`) VALUES
('125', 'Taroo', '0000-00-00', 'Rp 4000', 'Pilih Kategori'),
('126', 'Buku Gambar', '0000-00-00', 'Rp 20000', 'Pilih Kategori'),
('131', 'Minyak Goreng', '0000-00-00', 'Rp 30000', 'Pilih Kategori'),
('132', 'Buku', '2016-10-16', 'Rp 8000', 'Pilih Kategori'),
('134', 'Gula', '2016-09-23', 'Rp 8000', '1'),
('B010', 'Wow', '2016-11-18', '500000', '7'),
('B02', 'Pensil2', '2016-11-18', '5000', '4'),
('B07', 'Conello', '2016-11-21', '5000', '5'),
('B08', 'Extra Joss', '2016-11-23', '10000', '6'),
('b099', 'kulkas', '2016-11-17', '8000', '2');

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluar`
--

CREATE TABLE IF NOT EXISTS `barang_keluar` (
  `kode_keluar_barang` int(10) NOT NULL,
  `nama_barang_yang_keluar` varchar(20) NOT NULL,
  `tanggal_keluar_barang` date NOT NULL,
  `harga_barang_yang_keluar` varchar(30) NOT NULL,
  `kode_barang` varchar(30) NOT NULL,
  `kode_kategori_barang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_barang`
--

CREATE TABLE IF NOT EXISTS `kategori_barang` (
  `kode_kategori_barang` int(11) NOT NULL,
  `nama_kategori_barang` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_barang`
--

INSERT INTO `kategori_barang` (`kode_kategori_barang`, `nama_kategori_barang`) VALUES
(2, 'Peralatan RT'),
(3, 'Makanan Ringan'),
(4, 'Peralatan Sekolah'),
(5, 'Es'),
(6, 'Minuman'),
(7, 'Wow');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(5, 'admin1', 'e00cf25ad42683b3df678c61f42c6bda'),
(6, 'user', 'ee11cbb19052e40b07aac0ca060c23ee'),
(7, 'admin10', '4fbd41a36dac3cd79aa1041c9648ab89');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_barang`), ADD KEY `kode_kategori_barang` (`kode_kategori_barang`), ADD KEY `kode_kategori_barang_2` (`kode_kategori_barang`), ADD KEY `kode_kategori_barang_3` (`kode_kategori_barang`);

--
-- Indexes for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`kode_keluar_barang`);

--
-- Indexes for table `kategori_barang`
--
ALTER TABLE `kategori_barang`
  ADD PRIMARY KEY (`kode_kategori_barang`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  MODIFY `kode_keluar_barang` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kategori_barang`
--
ALTER TABLE `kategori_barang`
  MODIFY `kode_kategori_barang` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
