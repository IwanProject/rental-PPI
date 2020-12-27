-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2020 at 03:30 PM
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
(16, 'Mobilio', 'kijang', 'Honda', 2020, 'AD123XX', 100000, 'Tersedia', 'Hitam', 4, 'pexels-cottonbro-46208624.jpg');

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
(3, 'Beat X', 'beat', 'Honda', 2019, 'AD123XX', 100000, 'Hitam', 'Tersedia', 'pexels-daria-shevtsova-14674353.jpg');

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
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `motor`
--
ALTER TABLE `motor`
  MODIFY `id_motor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
