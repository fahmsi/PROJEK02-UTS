-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2023 at 09:43 AM
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
(5, 'Kawasaki'),
(6, 'BMW');

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
(1, 'HONDA CBR1000 FIREBLADE', 998, 2, 1000000000, 1, 2),
(2, 'YAMAHA XMAX 255', 250, 1, 70000000, 2, 13),
(3, 'DUCATI MULTISTRADA V4', 400, 2, 300000000, 3, 3),
(4, 'HONDA ADV 160', 158, 1, 36000000, 1, 12),
(5, 'SUZUKI GSX-S 1000GT', 1010, 2, 700000000, 4, 3),
(6, 'KAWASAKI ZXR10 ', 998, 2, 770000000, 5, 4),
(7, 'BMW C400 GT', 350, 1, 450000000, 6, 5),
(8, 'BMW M1000 RR', 999, 2, 750000000, 6, 2);

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
(2, 'SURYONO SUTANTO', 'Jl. Petamburan Selatan No.45, Petamburan, Jakarta Selatan', 5, 1),
(3, 'Putu Gede Adiwara', 'Jl. sakti budha No30, kuta, Bali', 4, 1),
(4, 'Fajar Asmara', 'Jl. aceh merdeka No.01, Banda Aceh', 2, 2),
(5, 'Putri Felicia', 'Citra Lake, cluster eboni, surabaya', 8, 1);

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
(2, 'Manual'),
(3, 'semi-auto');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
