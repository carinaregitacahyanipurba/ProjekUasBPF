-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2022 at 06:25 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gotravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `harga` varchar(120) NOT NULL,
  `denda` varchar(120) NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `status_pengembalian` varchar(50) NOT NULL,
  `status_rental` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `password` varchar(120) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `username`, `alamat`, `gender`, `no_telepon`, `no_ktp`, `password`, `role_id`) VALUES
(7, 'Admin', 'admin', 'Pekanbaru', 'perempuan', '065423624', '1764578345', '0192023a7bbd73250516f069df18b500', 1),
(11, 'carina', 'carina', 'rowosari', 'perempuan', '081234567', '123456', 'a0b4e68dcddfc4fe5dada5f09bea9bb7', 2),
(13, 'regita', 'regita', 'rowosari', 'perempuan', '09863745', '4567894', 'f11b723d5fa1b557c78721645d4a778e', 2),
(15, 'purba', 'purba', 'intisari', 'laki-laki', '09863745', '34256', '3905036f347fe06a49d5e2655f782df7', 0),
(17, 'yuda', 'yuda', 'intisari', 'laki-laki', '086453426', '097435', '25eb2b81c8a546737d0853c1695d2122', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(11) NOT NULL,
  `kode_tipe` varchar(120) NOT NULL,
  `Tujuan` varchar(120) NOT NULL,
  `no_plat` varchar(20) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `status` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `persediaan_kursi` varchar(20) NOT NULL,
  `ac` int(11) NOT NULL,
  `bagasi` int(11) NOT NULL,
  `bersih` int(11) NOT NULL,
  `air` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `kode_tipe`, `Tujuan`, `no_plat`, `warna`, `tahun`, `status`, `harga`, `persediaan_kursi`, `ac`, `bagasi`, `bersih`, `air`, `gambar`) VALUES
(22, 'APV', 'Pekanbaru - Bukittinggi', 'BM 023', 'Putih', '2019', '1', 100000, '7', 1, 1, 1, 1, '24.jpg'),
(23, 'APV', 'Pekanbaru - Bangkinang', 'BM 024', 'Hitam', '2019', '1', 80000, '7', 1, 1, 1, 1, '91.jpg'),
(24, 'Hiace', 'Pekanbaru - Dumai', 'BM 025', 'Abu - Abu', '2020', '1', 110000, '7', 1, 1, 1, 1, '42.jpg'),
(25, 'Ertiga', 'Pekanbaru - Pasaman', 'BM 027', 'Abu - Abu', '2019', '1', 250000, '7', 1, 1, 1, 1, '55.png'),
(26, 'APV', 'Pekanbaru - Dumai', 'BM 028', 'Hitam', '2020', '1', 100000, '7', 1, 1, 1, 1, 'blog-4-720x480.jpg'),
(27, 'Fortuner', 'Pekanbaru - Padang', 'BM7789BD', 'Hitam', '2022', '0', 120000, '7', 1, 1, 1, 1, '9.jpg'),
(28, 'Avanza', 'Pekanbaru - Dumai', 'BM 030', 'Biru', '2020', '1', 300000, '7', 1, 1, 1, 1, '61.png');

-- --------------------------------------------------------

--
-- Table structure for table `tipe`
--

CREATE TABLE `tipe` (
  `id_tipe` int(11) NOT NULL,
  `kode_tipe` varchar(120) NOT NULL,
  `nama_tipe` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe`
--

INSERT INTO `tipe` (`id_tipe`, `kode_tipe`, `nama_tipe`) VALUES
(4, 'DHS', 'Daihatsu Luxio'),
(5, 'APV', 'Suzuki APV'),
(7, 'Hiace', 'Toyota Hiace'),
(8, 'Fortuner', 'Toyota Fortuner'),
(9, 'Ertiga', 'Suzuki Ertiga'),
(14, 'Avanza', 'Avanza');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_booking` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `jumlah_kursi` varchar(20) NOT NULL,
  `harga` varchar(120) NOT NULL,
  `totbayar` varchar(100) NOT NULL,
  `total_bayar` varchar(120) NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `status_pengembalian` varchar(50) NOT NULL,
  `status_booking` varchar(50) NOT NULL,
  `bukti_pembayaran` varchar(120) NOT NULL,
  `status_pembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_booking`, `id_customer`, `id_mobil`, `tgl_pesan`, `jumlah_kursi`, `harga`, `totbayar`, `total_bayar`, `tgl_pengembalian`, `status_pengembalian`, `status_booking`, `bukti_pembayaran`, `status_pembayaran`) VALUES
(45, 17, 27, '2022-07-20', '2', '120000', '', '0', '0000-00-00', 'Belum Kembali', 'Belum Selesai', 'about-fullscreen-1-1920x7005.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_mobil` (`id_mobil`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `tipe`
--
ALTER TABLE `tipe`
  ADD PRIMARY KEY (`id_tipe`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `FK_id_customer` (`id_customer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tipe`
--
ALTER TABLE `tipe`
  MODIFY `id_tipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `id_customer` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  ADD CONSTRAINT `id_mobil` FOREIGN KEY (`id_mobil`) REFERENCES `mobil` (`id_mobil`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `FK_id_customer` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
