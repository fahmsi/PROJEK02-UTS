-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2023 at 06:01 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko_motor`
--

-- --------------------------------------------------------

--
-- Table structure for table `merk`
--

CREATE TABLE `merk` (
  `id` int(11) NOT NULL,
  `nama_merk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `merk`
--

INSERT INTO `merk` (`id`, `nama_merk`) VALUES
(1, 'Honda'),
(2, 'Yamaha'),
(3, 'Ducati'),
(4, 'Suzuki'),
(5, 'Kawasaki');

-- --------------------------------------------------------

--
-- Table structure for table `motor`
--

CREATE TABLE `motor` (
  `id` int(11) NOT NULL,
  `nama_motor` varchar(191) NOT NULL,
  `cc` int(11) NOT NULL,
  `tipe_motor_id` int(45) NOT NULL,
  `harga` int(45) NOT NULL,
  `merk_id` int(45) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `motor`
--

INSERT INTO `motor` (`id`, `nama_motor`, `cc`, `tipe_motor_id`, `harga`, `merk_id`, `stok`) VALUES
(1, 'HONDA CBR1000 FIREBLADE', 998, 3, 1000000000, 1, 2),
(2, 'SUZUKI GSX-S 1000GT', 1099, 3, 900000000, 4, 3),
(3, 'YAMAHA XMAX 255', 250, 1, 70000000, 2, 13),
(4, 'DUCATI PANIGALE V4 Full Carbon', 1009, 3, 700000000, 3, 2),
(5, 'KAWASAKI W175', 177, 3, 35000000, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `nama_pelanggan` varchar(191) NOT NULL,
  `alamat_pelanggan` text NOT NULL,
  `motor_id` int(45) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `nama_pelanggan`, `alamat_pelanggan`, `motor_id`, `quantity`) VALUES
(1, 'Joko Susanto Budiono', 'Jl.Lembayung III No.99, Cikaret, Cibinong, Kab.Bogor', 1, 1),
(2, 'Suriyanto KusumoNegoro', 'Perum Citra Grand, Cluster Ebony, Cibulao, Kota Malang', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tipe_motor`
--

CREATE TABLE `tipe_motor` (
  `id` int(11) NOT NULL,
  `tipe_motor` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tipe_motor`
--

INSERT INTO `tipe_motor` (`id`, `tipe_motor`) VALUES
(1, 'Matic'),
(2, 'Semi-Auto'),
(3, 'Manual');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motor`
--
ALTER TABLE `motor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_motor1` (`tipe_motor_id`),
  ADD KEY `fk_motor2` (`merk_id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pesanan1` (`motor_id`);

--
-- Indexes for table `tipe_motor`
--
ALTER TABLE `tipe_motor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `merk`
--
ALTER TABLE `merk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `motor`
--
ALTER TABLE `motor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tipe_motor`
--
ALTER TABLE `tipe_motor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `motor`
--
ALTER TABLE `motor`
  ADD CONSTRAINT `fk_motor1` FOREIGN KEY (`tipe_motor_id`) REFERENCES `tipe_motor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_motor2` FOREIGN KEY (`merk_id`) REFERENCES `merk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `fk_pesanan1` FOREIGN KEY (`motor_id`) REFERENCES `motor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
