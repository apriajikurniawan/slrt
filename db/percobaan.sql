-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2024 at 03:54 PM
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
-- Table structure for table `percobaan`
--

CREATE TABLE `percobaan` (
  `id` int(11) NOT NULL,
  `jadwal` varchar(100) DEFAULT NULL,
  `jlh_layanan` int(100) DEFAULT NULL,
  `cek_bansos` int(100) DEFAULT NULL,
  `usulan_baru` int(100) DEFAULT NULL,
  `bbl` int(100) DEFAULT NULL,
  `kelayakan` int(100) DEFAULT NULL,
  `tugas_lain` varchar(255) DEFAULT NULL,
  `keterangan1` varchar(255) DEFAULT NULL,
  `tantangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `percobaan`
--

INSERT INTO `percobaan` (`id`, `jadwal`, `jlh_layanan`, `cek_bansos`, `usulan_baru`, `bbl`, `kelayakan`, `tugas_lain`, `keterangan1`, `tantangan`) VALUES
(1, 'MINGGU 1', 600, 1, 2, 4, 3, 'konfirmasi dengan kepling', 'selesai', '-'),
(6, 'MINGGU 5', 500000, 100, 400, 20, 4, '25', '-', '---'),
(9, 'MINGGU 5', 4, 5, 1, 2, 1, 'konfirmasi', '-', '-'),
(10, 'MINGGU 5', 4, 5, 1, 2, 1, 'konfirmasi', '-', '-'),
(11, 'MINGGU 5', 4, 5, 1, 2, 1, 'konfirmasi', '-', '-'),
(12, 'MINGGU 10', 4, 5, 1, 1, 2, '4', '-', '-'),
(13, 'MINGGU 500', 1, 5, 4, 5, 4, '5', '-', '-'),
(15, 'MINGGU 2', 4, 1, 2, 5, 4, '5', '-', '-'),
(16, 'MINGGU 10', 645, 5, 2, 1, 2, '1', '-', '-'),
(17, 'MINGGU 10', 645, 5, 2, 1, 2, '1', '-', '-'),
(18, 'MINGGU 5', 5, 5, 5, 5, 5, '5', '5', '5'),
(19, 'MINGGU 5', 5, 5, 5, 5, 5, '5', '5', '5'),
(20, 'MINGGU 5', 2, 2, 2, 2, 2, '2', '-', '-'),
(21, 'MINGGU 5', 2, 2, 2, 2, 2, '2', '-', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `percobaan`
--
ALTER TABLE `percobaan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `percobaan`
--
ALTER TABLE `percobaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
