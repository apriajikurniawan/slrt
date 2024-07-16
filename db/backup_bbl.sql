-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2024 at 04:05 PM
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
-- Table structure for table `backup_bbl`
--

CREATE TABLE `backup_bbl` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_klien` varchar(100) DEFAULT NULL,
  `alamat_klien` varchar(100) DEFAULT NULL,
  `jenis_layanan` varchar(100) DEFAULT NULL,
  `keterangan3` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `backup_bbl`
--

INSERT INTO `backup_bbl` (`id`, `tanggal`, `nama_klien`, `alamat_klien`, `jenis_layanan`, `keterangan3`, `deleted_at`) VALUES
(3, '2024-07-03', 'FATIMAH', 'JL KODOK', 'PENGAJUAN BPNT', 'jnbj', '2024-07-13 17:19:42'),
(4, '2024-07-06', 'FATIMAH sahra', 'JL KODOK', 'PENGAJUAN BPNT', 'jnbj', '2024-07-13 17:31:54'),
(5, '2024-07-19', 'FATIMAH sahra', 'KJBJKB', 'KJBJ', 'selesai', '2024-07-14 07:55:04'),
(2, '2024-07-12', 'FATIMAH zahra str brbr', 'JL KODOK', 'PENGAJUAN BPNT', 'jnbj', '2024-07-14 13:46:47');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
