-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2021 at 02:28 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gorental`
--

-- --------------------------------------------------------

--
-- Table structure for table `merk`
--

CREATE TABLE `merk` (
  `id_merk` int(11) NOT NULL,
  `nama_merk` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `merk`
--

INSERT INTO `merk` (`id_merk`, `nama_merk`, `type`, `image`) VALUES
(2, 'Yamaha', 'Mobil', 'spyder3.png'),
(3, 'Honda', 'Mobil', 'spyder5.png'),
(4, 'Tesla', 'Mobil', 'spyder6.png'),
(5, 'Toyota', 'Mobil', 'spyder7.png'),
(6, 'Honda', 'Motor', 'spyder8.png'),
(7, 'Ducati', 'Motor', 'spyder9.png');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(11) NOT NULL,
  `nama_mobil` varchar(30) NOT NULL,
  `slug` varchar(30) NOT NULL,
  `merk` varchar(30) NOT NULL,
  `tahun` int(30) NOT NULL,
  `plat_nomor` varchar(30) NOT NULL,
  `tarif_sewa` int(30) NOT NULL,
  `status` varchar(30) DEFAULT NULL,
  `warna` varchar(30) NOT NULL,
  `kursi` int(30) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `nama_mobil`, `slug`, `merk`, `tahun`, `plat_nomor`, `tarif_sewa`, `status`, `warna`, `kursi`, `image`) VALUES
(16, 'Mobilio', 'kijang', 'Honda', 2020, 'AD123XX', 100000, 'sewa', 'Hitam', 4, 'pexels-cottonbro-46208624.jpg'),
(17, 'Tesla', 'tesla', 'Tesla', 2020, 'AD111ZZ', 1000, 'sewa', 'black', 4, 'spyder13.png');

-- --------------------------------------------------------

--
-- Table structure for table `motor`
--

CREATE TABLE `motor` (
  `id_motor` int(11) NOT NULL,
  `nama_motor` varchar(30) NOT NULL,
  `slug` varchar(30) NOT NULL,
  `merk` varchar(30) NOT NULL,
  `tahun` int(30) NOT NULL,
  `plat_nomor` varchar(30) NOT NULL,
  `tarif_sewa` int(30) NOT NULL,
  `warna` varchar(30) NOT NULL,
  `status` varchar(30) DEFAULT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `motor`
--

INSERT INTO `motor` (`id_motor`, `nama_motor`, `slug`, `merk`, `tahun`, `plat_nomor`, `tarif_sewa`, `warna`, `status`, `image`) VALUES
(3, 'Beat X', 'beat', 'Honda', 2019, 'AD123X', 100000, 'Hitam', 'Tersedia', 'pexels-daria-shevtsova-14674353.jpg'),
(4, 'Supra 125', 'supra-125', 'Honda', 2016, 'AD1234XX', 50000, 'Merah', 'Tersedia', 'd.png');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `idtr` int(7) NOT NULL,
  `no_plat` varchar(10) NOT NULL,
  `tgl_sewa` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `biaya` int(11) NOT NULL,
  `status` set('sewa','selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`idtr`, `no_plat`, `tgl_sewa`, `tgl_kembali`, `no_ktp`, `nama`, `no_hp`, `alamat`, `biaya`, `status`) VALUES
(1, 'AD1234XX', '2020-12-29', '2020-12-31', '160103074', 'eris', '0814555', 'ngawi', 200000, 'selesai'),
(2, '', '0000-00-00', '0000-00-00', '', 'as', '', '', 0, ''),
(3, '2453j', '2020-12-30', '2020-12-31', 'no_ktp', 'Eris s', '024545', 'ngawi', 0, 'selesai'),
(4, 'AD1234XX', '2020-12-30', '2021-01-01', 'no_ktp', 'Supra', '235235', 'adfasf', 0, 'selesai'),
(5, 'AD1234XX', '2020-12-19', '2020-12-19', 'no_ktp', 'fxf', '6434664', 'hfdfd', 0, 'selesai'),
(6, 'AD1234XX', '2020-12-19', '2020-12-19', 'no_ktp', 'aku', '1341431234', 'sf', 0, 'sewa'),
(7, 'AD1234XX', '2020-12-19', '2020-12-19', 'no_ktp', 'aku', '1341431234', 'sf', 0, 'sewa'),
(8, 'AD1234XX', '2020-12-19', '2020-12-19', 'no_ktp', 'aku', '1341431234', 'sf', 0, 'selesai'),
(9, 'AD1234XX', '2020-12-19', '2020-12-19', 'no_ktp', 'wd', '1345', '3453', 0, 'selesai'),
(10, 'AD1234XX', '2020-12-19', '2020-12-19', 'no_ktp', 'adsf', 'ergeq', '234', 0, 'selesai'),
(11, 'AD1234XX', '2020-12-19', '2020-12-19', 'no_ktp', 'adsf', 'ergeq', '234', 0, 'selesai'),
(12, 'AD1234XX', '2020-12-19', '2020-12-19', 'no_ktp', 'ad', '1345', 'dfdg', 0, 'selesai'),
(13, 'AD1234XX', '2020-12-19', '2020-12-19', 'no_ktp', 'plat', '2345', '533334', 0, 'selesai'),
(14, 'AD123XX', '2020-12-19', '2020-12-19', 'no_ktp', 'mobil', '45643434', 'fgerr', 0, 'selesai'),
(15, 'AD123XX', '2020-12-19', '2020-12-19', 'no_ktp', 'mobil', '45643434', 'fgerr', 0, 'selesai'),
(16, 'AD123X', '2020-12-19', '2020-12-19', 'no_ktp', 'asdf', '4534', '34dgf', 0, 'selesai'),
(17, 'AD123X', '2020-12-19', '2020-12-19', 'no_ktp', 'sds', '3454', 'ergearg', 0, 'selesai'),
(18, 'AD1234XX', '2020-12-19', '2020-12-19', 'no_ktp', 'zdg', '4564', 'sfghah', 0, 'selesai'),
(19, 'AD123X', '2020-12-19', '2020-12-19', 'no_ktp', 'adsfs', '3463464', 'sdsd', 0, 'selesai'),
(22, 'AD111ZZ', '2021-01-01', '2021-01-09', 'no_ktp', 'iwan', '0829389', 'solo', 1000, 'selesai'),
(23, 'AD111ZZ', '2020-12-21', '2020-12-31', 'no_ktp', 'DFDSF', '23432', 'dfd', 1000, 'sewa');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$f8345GPciW/ZemQKyu50kOlU4BuQUPbADrVIt/3HWn8TlNf0Fhwyy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`id_merk`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `motor`
--
ALTER TABLE `motor`
  ADD PRIMARY KEY (`id_motor`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idtr`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `merk`
--
ALTER TABLE `merk`
  MODIFY `id_merk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `motor`
--
ALTER TABLE `motor`
  MODIFY `id_motor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idtr` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
