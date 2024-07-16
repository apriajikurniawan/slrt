-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2024 at 07:03 AM
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
-- Database: `slrt`
--

-- --------------------------------------------------------

--
-- Table structure for table `bbl_1a`
--

CREATE TABLE `bbl_1a` (
  `id_bbl` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_klien` varchar(255) DEFAULT NULL,
  `alamat_klien` varchar(255) DEFAULT NULL,
  `jenis_layanan` varchar(255) DEFAULT NULL,
  `keterangan2` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bbl_1b`
--

CREATE TABLE `bbl_1b` (
  `id_bbl` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_klien` varchar(255) DEFAULT NULL,
  `alamat_klien` varchar(255) DEFAULT NULL,
  `jenis_layanan` varchar(255) DEFAULT NULL,
  `keterangan2` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bbl_1c`
--

CREATE TABLE `bbl_1c` (
  `id_bbl` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_klien` varchar(255) DEFAULT NULL,
  `alamat_klien` varchar(255) DEFAULT NULL,
  `jenis_layanan` varchar(255) DEFAULT NULL,
  `keterangan2` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bbl_1d`
--

CREATE TABLE `bbl_1d` (
  `id_bbl` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_klien` varchar(255) DEFAULT NULL,
  `alamat_klien` varchar(255) DEFAULT NULL,
  `jenis_layanan` varchar(255) DEFAULT NULL,
  `keterangan2` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bbl_1e`
--

CREATE TABLE `bbl_1e` (
  `id_bbl` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_klien` varchar(255) DEFAULT NULL,
  `alamat_klien` varchar(255) DEFAULT NULL,
  `jenis_layanan` varchar(255) DEFAULT NULL,
  `keterangan2` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bbl_1f`
--

CREATE TABLE `bbl_1f` (
  `id_bbl` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_klien` varchar(255) DEFAULT NULL,
  `alamat_klien` varchar(255) DEFAULT NULL,
  `jenis_layanan` varchar(255) DEFAULT NULL,
  `keterangan2` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laporan_1a`
--

CREATE TABLE `laporan_1a` (
  `id_laporan` int(11) NOT NULL,
  `jadwal` date DEFAULT NULL,
  `jumlah_layanan` int(11) DEFAULT NULL,
  `cek_bansos` tinyint(1) DEFAULT NULL,
  `usulan_baru` text DEFAULT NULL,
  `bbl` text DEFAULT NULL,
  `kelayakan` tinyint(1) DEFAULT NULL,
  `tugas_lain` text DEFAULT NULL,
  `keterangan1` text DEFAULT NULL,
  `tantangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laporan_1b`
--

CREATE TABLE `laporan_1b` (
  `id_laporan` int(11) NOT NULL,
  `jadwal` date DEFAULT NULL,
  `jumlah_layanan` int(11) DEFAULT NULL,
  `cek_bansos` tinyint(1) DEFAULT NULL,
  `usulan_baru` text DEFAULT NULL,
  `bbl` text DEFAULT NULL,
  `kelayakan` tinyint(1) DEFAULT NULL,
  `tugas_lain` text DEFAULT NULL,
  `keterangan1` text DEFAULT NULL,
  `tantangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laporan_1c`
--

CREATE TABLE `laporan_1c` (
  `id_laporan` int(11) NOT NULL,
  `jadwal` date DEFAULT NULL,
  `jumlah_layanan` int(11) DEFAULT NULL,
  `cek_bansos` tinyint(1) DEFAULT NULL,
  `usulan_baru` text DEFAULT NULL,
  `bbl` text DEFAULT NULL,
  `kelayakan` tinyint(1) DEFAULT NULL,
  `tugas_lain` text DEFAULT NULL,
  `keterangan1` text DEFAULT NULL,
  `tantangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laporan_1d`
--

CREATE TABLE `laporan_1d` (
  `id_laporan` int(11) NOT NULL,
  `jadwal` date DEFAULT NULL,
  `jumlah_layanan` int(11) DEFAULT NULL,
  `cek_bansos` tinyint(1) DEFAULT NULL,
  `usulan_baru` text DEFAULT NULL,
  `bbl` text DEFAULT NULL,
  `kelayakan` tinyint(1) DEFAULT NULL,
  `tugas_lain` text DEFAULT NULL,
  `keterangan1` text DEFAULT NULL,
  `tantangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laporan_1e`
--

CREATE TABLE `laporan_1e` (
  `id_laporan` int(11) NOT NULL,
  `jadwal` date DEFAULT NULL,
  `jumlah_layanan` int(11) DEFAULT NULL,
  `cek_bansos` tinyint(1) DEFAULT NULL,
  `usulan_baru` text DEFAULT NULL,
  `bbl` text DEFAULT NULL,
  `kelayakan` tinyint(1) DEFAULT NULL,
  `tugas_lain` text DEFAULT NULL,
  `keterangan1` text DEFAULT NULL,
  `tantangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laporan_1f`
--

CREATE TABLE `laporan_1f` (
  `id_laporan` int(11) NOT NULL,
  `jadwal` date DEFAULT NULL,
  `jumlah_layanan` int(11) DEFAULT NULL,
  `cek_bansos` tinyint(1) DEFAULT NULL,
  `usulan_baru` text DEFAULT NULL,
  `bbl` text DEFAULT NULL,
  `kelayakan` tinyint(1) DEFAULT NULL,
  `tugas_lain` text DEFAULT NULL,
  `keterangan1` text DEFAULT NULL,
  `tantangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laporan_bbl_slrt`
--

CREATE TABLE `laporan_bbl_slrt` (
  `id_bbl` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_klien` varchar(255) DEFAULT NULL,
  `alamat_klien` varchar(255) DEFAULT NULL,
  `jenis_layanan` varchar(255) DEFAULT NULL,
  `keterangan2` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laporan_pelayanan_slrt`
--

CREATE TABLE `laporan_pelayanan_slrt` (
  `id_layanan` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_klien` varchar(255) DEFAULT NULL,
  `alamat_klien` varchar(255) DEFAULT NULL,
  `jenis_layanan` varchar(255) DEFAULT NULL,
  `keterangan2` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `layanan_1a`
--

CREATE TABLE `layanan_1a` (
  `id_bbl` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_klien` varchar(255) DEFAULT NULL,
  `alamat_klien` varchar(255) DEFAULT NULL,
  `jenis_layanan` varchar(255) DEFAULT NULL,
  `keterangan2` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `layanan_1b`
--

CREATE TABLE `layanan_1b` (
  `id_bbl` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_klien` varchar(255) DEFAULT NULL,
  `alamat_klien` varchar(255) DEFAULT NULL,
  `jenis_layanan` varchar(255) DEFAULT NULL,
  `keterangan2` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `layanan_1c`
--

CREATE TABLE `layanan_1c` (
  `id_bbl` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_klien` varchar(255) DEFAULT NULL,
  `alamat_klien` varchar(255) DEFAULT NULL,
  `jenis_layanan` varchar(255) DEFAULT NULL,
  `keterangan2` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `layanan_1d`
--

CREATE TABLE `layanan_1d` (
  `id_bbl` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_klien` varchar(255) DEFAULT NULL,
  `alamat_klien` varchar(255) DEFAULT NULL,
  `jenis_layanan` varchar(255) DEFAULT NULL,
  `keterangan2` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `layanan_1e`
--

CREATE TABLE `layanan_1e` (
  `id_bbl` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_klien` varchar(255) DEFAULT NULL,
  `alamat_klien` varchar(255) DEFAULT NULL,
  `jenis_layanan` varchar(255) DEFAULT NULL,
  `keterangan2` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `layanan_1f`
--

CREATE TABLE `layanan_1f` (
  `id_bbl` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_klien` varchar(255) DEFAULT NULL,
  `alamat_klien` varchar(255) DEFAULT NULL,
  `jenis_layanan` varchar(255) DEFAULT NULL,
  `keterangan2` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tambahan_1a`
--

CREATE TABLE `tambahan_1a` (
  `id_bbl` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_klien` varchar(255) DEFAULT NULL,
  `alamat_klien` varchar(255) DEFAULT NULL,
  `jenis_layanan` varchar(255) DEFAULT NULL,
  `keterangan2` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tambahan_1b`
--

CREATE TABLE `tambahan_1b` (
  `id_bbl` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_klien` varchar(255) DEFAULT NULL,
  `alamat_klien` varchar(255) DEFAULT NULL,
  `jenis_layanan` varchar(255) DEFAULT NULL,
  `keterangan2` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tambahan_1c`
--

CREATE TABLE `tambahan_1c` (
  `id_bbl` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_klien` varchar(255) DEFAULT NULL,
  `alamat_klien` varchar(255) DEFAULT NULL,
  `jenis_layanan` varchar(255) DEFAULT NULL,
  `keterangan2` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tambahan_1d`
--

CREATE TABLE `tambahan_1d` (
  `id_bbl` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_klien` varchar(255) DEFAULT NULL,
  `alamat_klien` varchar(255) DEFAULT NULL,
  `jenis_layanan` varchar(255) DEFAULT NULL,
  `keterangan2` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tambahan_1e`
--

CREATE TABLE `tambahan_1e` (
  `id_bbl` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_klien` varchar(255) DEFAULT NULL,
  `alamat_klien` varchar(255) DEFAULT NULL,
  `jenis_layanan` varchar(255) DEFAULT NULL,
  `keterangan2` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tambahan_1f`
--

CREATE TABLE `tambahan_1f` (
  `id_bbl` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_klien` varchar(255) DEFAULT NULL,
  `alamat_klien` varchar(255) DEFAULT NULL,
  `jenis_layanan` varchar(255) DEFAULT NULL,
  `keterangan2` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bbl_1a`
--
ALTER TABLE `bbl_1a`
  ADD PRIMARY KEY (`id_bbl`);

--
-- Indexes for table `bbl_1b`
--
ALTER TABLE `bbl_1b`
  ADD PRIMARY KEY (`id_bbl`);

--
-- Indexes for table `bbl_1c`
--
ALTER TABLE `bbl_1c`
  ADD PRIMARY KEY (`id_bbl`);

--
-- Indexes for table `bbl_1d`
--
ALTER TABLE `bbl_1d`
  ADD PRIMARY KEY (`id_bbl`);

--
-- Indexes for table `bbl_1e`
--
ALTER TABLE `bbl_1e`
  ADD PRIMARY KEY (`id_bbl`);

--
-- Indexes for table `bbl_1f`
--
ALTER TABLE `bbl_1f`
  ADD PRIMARY KEY (`id_bbl`);

--
-- Indexes for table `laporan_1a`
--
ALTER TABLE `laporan_1a`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `laporan_1b`
--
ALTER TABLE `laporan_1b`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `laporan_1c`
--
ALTER TABLE `laporan_1c`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `laporan_1d`
--
ALTER TABLE `laporan_1d`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `laporan_1e`
--
ALTER TABLE `laporan_1e`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `laporan_1f`
--
ALTER TABLE `laporan_1f`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `laporan_bbl_slrt`
--
ALTER TABLE `laporan_bbl_slrt`
  ADD PRIMARY KEY (`id_bbl`);

--
-- Indexes for table `laporan_pelayanan_slrt`
--
ALTER TABLE `laporan_pelayanan_slrt`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `layanan_1a`
--
ALTER TABLE `layanan_1a`
  ADD PRIMARY KEY (`id_bbl`);

--
-- Indexes for table `layanan_1b`
--
ALTER TABLE `layanan_1b`
  ADD PRIMARY KEY (`id_bbl`);

--
-- Indexes for table `layanan_1c`
--
ALTER TABLE `layanan_1c`
  ADD PRIMARY KEY (`id_bbl`);

--
-- Indexes for table `layanan_1d`
--
ALTER TABLE `layanan_1d`
  ADD PRIMARY KEY (`id_bbl`);

--
-- Indexes for table `layanan_1e`
--
ALTER TABLE `layanan_1e`
  ADD PRIMARY KEY (`id_bbl`);

--
-- Indexes for table `layanan_1f`
--
ALTER TABLE `layanan_1f`
  ADD PRIMARY KEY (`id_bbl`);

--
-- Indexes for table `tambahan_1a`
--
ALTER TABLE `tambahan_1a`
  ADD PRIMARY KEY (`id_bbl`);

--
-- Indexes for table `tambahan_1b`
--
ALTER TABLE `tambahan_1b`
  ADD PRIMARY KEY (`id_bbl`);

--
-- Indexes for table `tambahan_1c`
--
ALTER TABLE `tambahan_1c`
  ADD PRIMARY KEY (`id_bbl`);

--
-- Indexes for table `tambahan_1d`
--
ALTER TABLE `tambahan_1d`
  ADD PRIMARY KEY (`id_bbl`);

--
-- Indexes for table `tambahan_1e`
--
ALTER TABLE `tambahan_1e`
  ADD PRIMARY KEY (`id_bbl`);

--
-- Indexes for table `tambahan_1f`
--
ALTER TABLE `tambahan_1f`
  ADD PRIMARY KEY (`id_bbl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bbl_1a`
--
ALTER TABLE `bbl_1a`
  MODIFY `id_bbl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bbl_1b`
--
ALTER TABLE `bbl_1b`
  MODIFY `id_bbl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bbl_1c`
--
ALTER TABLE `bbl_1c`
  MODIFY `id_bbl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bbl_1d`
--
ALTER TABLE `bbl_1d`
  MODIFY `id_bbl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bbl_1e`
--
ALTER TABLE `bbl_1e`
  MODIFY `id_bbl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bbl_1f`
--
ALTER TABLE `bbl_1f`
  MODIFY `id_bbl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporan_1a`
--
ALTER TABLE `laporan_1a`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporan_1b`
--
ALTER TABLE `laporan_1b`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporan_1c`
--
ALTER TABLE `laporan_1c`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporan_1d`
--
ALTER TABLE `laporan_1d`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporan_1e`
--
ALTER TABLE `laporan_1e`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporan_1f`
--
ALTER TABLE `laporan_1f`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporan_bbl_slrt`
--
ALTER TABLE `laporan_bbl_slrt`
  MODIFY `id_bbl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporan_pelayanan_slrt`
--
ALTER TABLE `laporan_pelayanan_slrt`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `layanan_1a`
--
ALTER TABLE `layanan_1a`
  MODIFY `id_bbl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `layanan_1b`
--
ALTER TABLE `layanan_1b`
  MODIFY `id_bbl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `layanan_1c`
--
ALTER TABLE `layanan_1c`
  MODIFY `id_bbl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `layanan_1d`
--
ALTER TABLE `layanan_1d`
  MODIFY `id_bbl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `layanan_1e`
--
ALTER TABLE `layanan_1e`
  MODIFY `id_bbl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `layanan_1f`
--
ALTER TABLE `layanan_1f`
  MODIFY `id_bbl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tambahan_1a`
--
ALTER TABLE `tambahan_1a`
  MODIFY `id_bbl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tambahan_1b`
--
ALTER TABLE `tambahan_1b`
  MODIFY `id_bbl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tambahan_1c`
--
ALTER TABLE `tambahan_1c`
  MODIFY `id_bbl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tambahan_1d`
--
ALTER TABLE `tambahan_1d`
  MODIFY `id_bbl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tambahan_1e`
--
ALTER TABLE `tambahan_1e`
  MODIFY `id_bbl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tambahan_1f`
--
ALTER TABLE `tambahan_1f`
  MODIFY `id_bbl` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
