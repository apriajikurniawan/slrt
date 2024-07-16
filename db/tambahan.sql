-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2024 at 06:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_latihan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tambahan`
--

CREATE TABLE `tambahan` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_klien` varchar(100) DEFAULT NULL,
  `alamat_klien` varchar(100) DEFAULT NULL,
  `jenis_layanan` varchar(100) DEFAULT NULL,
  `keterangan3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tambahan`
--

INSERT INTO `tambahan` (`id`, `tanggal`, `nama_klien`, `alamat_klien`, `jenis_layanan`, `keterangan3`) VALUES
(2, '2024-07-11', 'FATIMAH', 'JL KODOK', 'PENGAJUAN BPNT', 'jnbj'),
(3, '2024-07-10', 'FATIMAH sahra pjt', 'KJBJKB', 'KJBJ', 'jnbj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tambahan`
--
ALTER TABLE `tambahan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tambahan`
--
ALTER TABLE `tambahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;