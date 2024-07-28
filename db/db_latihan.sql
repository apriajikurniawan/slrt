-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2024 at 05:44 AM
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
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `session_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `backup_bbl`
--

INSERT INTO `backup_bbl` (`id`, `tanggal`, `nama_klien`, `alamat_klien`, `jenis_layanan`, `keterangan3`, `deleted_at`, `session_id`) VALUES
(6, '2024-07-14', 'FATIMAH srg', 'situ', 'bpnt', 'selesai', '2024-07-14 14:10:18', NULL),
(7, NULL, 'amin', 'jln', 'bpnt', '-', '2024-07-14 14:13:51', NULL),
(8, '2024-07-15', 'diki', 'jlnnnnn', 'pkh', 'selesai', '2024-07-14 14:49:48', NULL),
(9, '2024-07-16', 'puja', 'KJBJKB', 'bpnt', 'selesai', '2024-07-14 14:19:27', NULL),
(10, '2024-07-15', 'jomah', 'itu', 'pkh', '-', '2024-07-20 08:17:51', NULL),
(12, '2024-07-26', 'ISNAINI LUBIS', 'TURANG', 'BPJS', 'SELESAI', '2024-07-27 06:12:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `backup_pelayanan`
--

CREATE TABLE `backup_pelayanan` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_klien` varchar(100) DEFAULT NULL,
  `alamat_klien` varchar(100) DEFAULT NULL,
  `jenis_layanan` varchar(100) DEFAULT NULL,
  `keterangan2` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `session_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `backup_pelayanan`
--

INSERT INTO `backup_pelayanan` (`id`, `tanggal`, `nama_klien`, `alamat_klien`, `jenis_layanan`, `keterangan2`, `deleted_at`, `session_id`) VALUES
(3, '2024-07-13', 'FATIMAH', 'KJBJKB', 'PENGAJUAN BPNT', '', '2024-07-14 14:49:48', NULL),
(4, '2024-07-13', 'FATIMAH', 'JL KODOK', 'KJBJ', '', '2024-07-14 14:08:09', NULL),
(6, '2024-07-19', 'budi', 'kelong', 'bpnt', 'selesai', '2024-07-20 08:17:47', NULL),
(7, '2024-07-27', 'timah', 'sei kamah', 'PKH', 'selesai', '2024-07-27 06:09:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `backup_percobaan`
--

CREATE TABLE `backup_percobaan` (
  `id` int(11) NOT NULL,
  `jadwal` varchar(255) DEFAULT NULL,
  `jlh_layanan` int(100) DEFAULT NULL,
  `cek_bansos` int(100) DEFAULT NULL,
  `usulan_baru` int(100) DEFAULT NULL,
  `bbl` int(100) DEFAULT NULL,
  `kelayakan` int(100) DEFAULT NULL,
  `tugas_lain` varchar(255) DEFAULT NULL,
  `keterangan1` varchar(255) DEFAULT NULL,
  `tantangan` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `session_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `backup_percobaan`
--

INSERT INTO `backup_percobaan` (`id`, `jadwal`, `jlh_layanan`, `cek_bansos`, `usulan_baru`, `bbl`, `kelayakan`, `tugas_lain`, `keterangan1`, `tantangan`, `deleted_at`, `session_id`) VALUES
(26, 'MINGGU 2', 1, 2, 3, 4, 5, '-', '-', '-', '2024-07-14 14:49:48', NULL),
(27, 'MINGGU 1', 6, 0, 0, 2, 0, '-', '-', '-', '2024-07-13 16:44:05', NULL),
(28, 'MINGGU 1', 6, 0, 0, 4, 0, '-', 'selesai', '-', '2024-07-15 16:50:10', NULL),
(29, 'MINGGU 2', 5, 1, 1, 0, 0, '-', '-', '-', '2024-07-20 08:17:33', NULL),
(30, 'MINGGU 1', 3, 0, 0, 4, 1, '-', '-', '-', '2024-07-27 06:08:57', NULL),
(31, 'MINGGU 2', 6, 1, 1, 6, 0, '-', 'selesai', '-', '2024-07-27 14:02:15', NULL),
(32, 'MINGGU 5', 4, 1, 5, 1, 4, '23', '4', '6', '2024-07-27 14:02:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `backup_tambahan`
--

CREATE TABLE `backup_tambahan` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_klien` varchar(100) DEFAULT NULL,
  `alamat_klien` varchar(100) DEFAULT NULL,
  `jenis_layanan` varchar(100) DEFAULT NULL,
  `keterangan4` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `session_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `backup_tambahan`
--

INSERT INTO `backup_tambahan` (`id`, `tanggal`, `nama_klien`, `alamat_klien`, `jenis_layanan`, `keterangan4`, `deleted_at`, `session_id`) VALUES
(8, '2024-07-15', 'kjhbKJBJK000000000000000', 'dfg', 'ppp', 'pppp', '2024-07-14 14:02:27', NULL),
(6, '2024-07-15', 'siti', 'JL KODOK', 'PENGAJUAN BPNT', '', '2024-07-14 14:21:58', NULL),
(2, '2024-07-11', 'FATIMAH', 'JL KODOK', 'PENGAJUAN BPNT', 'jnbj', '2024-07-14 14:49:48', NULL),
(3, '2024-07-10', 'FATIMAH sahra pjt', 'KJBJKB', 'KJBJ', 'jnbj', '2024-07-14 14:49:48', NULL),
(4, '2024-07-12', 'FATIMAH sahra pjt', 'KJBJKB', 'KJBJ', 'jnbj', '2024-07-14 14:49:48', NULL),
(5, '2024-07-12', 'siti', 'jln', 'bpnt', '', '2024-07-14 14:49:48', NULL),
(7, '2024-07-13', 'siti', 'jljl', 'pkh', 'selesai', '2024-07-14 14:49:48', NULL),
(10, '2024-07-26', 'putri', 'j l jenaha', 'bpjs', 'selesai', '2024-07-27 06:21:29', NULL),
(11, '2024-07-27', '', '', '', '', '2024-07-27 07:16:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bbl`
--

CREATE TABLE `bbl` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_klien` varchar(100) DEFAULT NULL,
  `alamat_klien` varchar(100) DEFAULT NULL,
  `jenis_layanan` varchar(100) DEFAULT NULL,
  `keterangan3` varchar(255) DEFAULT NULL,
  `session_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bbl`
--

INSERT INTO `bbl` (`id`, `tanggal`, `nama_klien`, `alamat_klien`, `jenis_layanan`, `keterangan3`, `session_id`) VALUES
(11, '2024-07-27', 'NYONYA LENI', 'KELONG', 'BPJS', 'SELESAI', NULL);

--
-- Triggers `bbl`
--
DELIMITER $$
CREATE TRIGGER `after_insert_bbl` AFTER INSERT ON `bbl` FOR EACH ROW BEGIN
    INSERT INTO tujuan (id, tanggal, nama_klien, alamat_klien, jenis_layanan, keterangan)
    VALUES (NEW.id, NEW.tanggal, NEW.nama_klien, NEW.alamat_klien, NEW.jenis_layanan, NEW.keterangan3);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `backup_data_bbl` BEFORE DELETE ON `bbl` FOR EACH ROW BEGIN
    INSERT INTO `backup_bbl` (id, tanggal, nama_klien, alamat_klien, jenis_layanan, keterangan3, deleted_at)
    VALUES (OLD.id, OLD.tanggal, OLD.nama_klien, OLD.alamat_klien, OLD.jenis_layanan, OLD.keterangan3, NOW());
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `data_usulan_bansos`
--

CREATE TABLE `data_usulan_bansos` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `kelurahan` varchar(200) DEFAULT NULL,
  `kecamatan` varchar(200) DEFAULT NULL,
  `nama_klien` varchar(200) DEFAULT NULL,
  `pekerjaan_krt` varchar(200) DEFAULT NULL,
  `alamat_klien` varchar(200) DEFAULT NULL,
  `nomor_tlp` varchar(200) DEFAULT NULL,
  `dokumen` varchar(200) DEFAULT NULL,
  `status_dtks` varchar(200) DEFAULT NULL,
  `bantuan_diperoleh` varchar(200) DEFAULT NULL,
  `status_rumah` varchar(200) DEFAULT NULL,
  `jenis_penerangan` varchar(200) DEFAULT NULL,
  `mck` varchar(200) DEFAULT NULL,
  `pendapatan` varchar(200) DEFAULT NULL,
  `nama_ibu_kandung` varchar(200) DEFAULT NULL,
  `jenis_pengaduan` varchar(200) DEFAULT NULL,
  `jenis_layanan` varchar(200) DEFAULT NULL,
  `session_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_usulan_bansos`
--

INSERT INTO `data_usulan_bansos` (`id`, `tanggal`, `kelurahan`, `kecamatan`, `nama_klien`, `pekerjaan_krt`, `alamat_klien`, `nomor_tlp`, `dokumen`, `status_dtks`, `bantuan_diperoleh`, `status_rumah`, `jenis_penerangan`, `mck`, `pendapatan`, `nama_ibu_kandung`, `jenis_pengaduan`, `jenis_layanan`, `session_id`) VALUES
(2, '2024-07-26', 'BKK', 'ukg', 'kuig', 'iug', 'iug', 'iug', 'tuf', 'iug', 'tf', 'ioh', 't', 'oih', 'yf', 'oh', 'utfc', 'ohu', NULL),
(3, '2024-07-27', 'jkh', 'jnh', 'jklhn', 'jhn', 'jklh', 'jbn', 'jnb', 'kjn', 'kljbn', 'j', 'jb', 'ju', 'ujb', 'b', 'uujbh', 'uh', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pelayanan`
--

CREATE TABLE `pelayanan` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_klien` varchar(100) DEFAULT NULL,
  `alamat_klien` varchar(100) DEFAULT NULL,
  `jenis_layanan` varchar(100) DEFAULT NULL,
  `keterangan2` varchar(255) DEFAULT NULL,
  `session_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelayanan`
--

INSERT INTO `pelayanan` (`id`, `tanggal`, `nama_klien`, `alamat_klien`, `jenis_layanan`, `keterangan2`, `session_id`) VALUES
(8, '2024-07-27', 'rudi', 'pustu', 'PKH', 'SELESAI', NULL);

--
-- Triggers `pelayanan`
--
DELIMITER $$
CREATE TRIGGER `after_insert_pelayanan` AFTER INSERT ON `pelayanan` FOR EACH ROW BEGIN
    INSERT INTO tujuan (id, tanggal, nama_klien, alamat_klien, jenis_layanan, keterangan)
    VALUES (NEW.id, NEW.tanggal, NEW.nama_klien, NEW.alamat_klien, NEW.jenis_layanan, NEW.keterangan2);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `backup_pelayanan` BEFORE DELETE ON `pelayanan` FOR EACH ROW BEGIN
    INSERT INTO `backup_pelayanan` (id, tanggal, nama_klien, alamat_klien, jenis_layanan, keterangan2, deleted_at)
    VALUES (OLD.id, OLD.tanggal, OLD.nama_klien, OLD.alamat_klien, OLD.jenis_layanan, OLD.keterangan2, NOW());
END
$$
DELIMITER ;

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
  `tantangan` varchar(255) DEFAULT NULL,
  `session_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Triggers `percobaan`
--
DELIMITER $$
CREATE TRIGGER `after_insert_percobaan` AFTER INSERT ON `percobaan` FOR EACH ROW BEGIN
    INSERT INTO tujuan (id, jadwal, jlh_layanan, cek_bansos, usulan_baru, bbl, kelayakan, tugas_lain, keterangan, tantangan)
    VALUES (NEW.id, NEW.jadwal, NEW.jlh_layanan, NEW.cek_bansos, NEW.usulan_baru, NEW.bbl, NEW.kelayakan, NEW.tugas_lain, NEW.keterangan1, NEW.tantangan);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `backup_percobaan` BEFORE DELETE ON `percobaan` FOR EACH ROW BEGIN
    INSERT INTO `backup_percobaan` (id, jadwal, jlh_layanan, cek_bansos, usulan_baru, bbl, kelayakan, tugas_lain, keterangan1, tantangan, deleted_at)
    VALUES (OLD.id, OLD.jadwal, OLD.jlh_layanan, OLD.cek_bansos, OLD.usulan_baru, OLD.bbl, OLD.kelayakan, OLD.tugas_lain, OLD.keterangan1, OLD.tantangan, NOW());
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `registrasi_bansos`
--

CREATE TABLE `registrasi_bansos` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `kelurahan` varchar(200) DEFAULT NULL,
  `kecamatan` varchar(200) DEFAULT NULL,
  `nama_klien` varchar(200) DEFAULT NULL,
  `pekerjaan_krt` varchar(200) DEFAULT NULL,
  `alamat_klien` varchar(200) DEFAULT NULL,
  `nomor_tlp` varchar(200) DEFAULT NULL,
  `dokumen` varchar(200) DEFAULT NULL,
  `status_dtks` varchar(200) DEFAULT NULL,
  `bantuan_diperoleh` varchar(200) DEFAULT NULL,
  `status_rumah` varchar(200) DEFAULT NULL,
  `jenis_penerangan` varchar(200) DEFAULT NULL,
  `mck` varchar(200) DEFAULT NULL,
  `pendapatan` varchar(200) DEFAULT NULL,
  `nama_ibu_kandung` varchar(200) DEFAULT NULL,
  `jenis_pengaduan` varchar(200) DEFAULT NULL,
  `jenis_layanan` varchar(200) DEFAULT NULL,
  `session_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrasi_bansos`
--

INSERT INTO `registrasi_bansos` (`id`, `tanggal`, `kelurahan`, `kecamatan`, `nama_klien`, `pekerjaan_krt`, `alamat_klien`, `nomor_tlp`, `dokumen`, `status_dtks`, `bantuan_diperoleh`, `status_rumah`, `jenis_penerangan`, `mck`, `pendapatan`, `nama_ibu_kandung`, `jenis_pengaduan`, `jenis_layanan`, `session_id`) VALUES
(3, '2024-07-27', 'oooooooooooooooo', 'jnh', 'jklhn', 'jhn', 'jklh', 'jbn', 'jnb', 'kjn', 'kljbn', 'j', 'jb', 'ju', 'ujb', 'b', 'uujbh', 'uh', NULL);

--
-- Triggers `registrasi_bansos`
--
DELIMITER $$
CREATE TRIGGER `after_insert_registrasi_bansos` AFTER INSERT ON `registrasi_bansos` FOR EACH ROW BEGIN
  INSERT INTO data_usulan_bansos (
    tanggal, kelurahan, kecamatan, nama_klien, pekerjaan_krt, 
    alamat_klien, nomor_tlp, dokumen, status_dtks, bantuan_diperoleh, 
    status_rumah, jenis_penerangan, mck, pendapatan, nama_ibu_kandung, 
    jenis_pengaduan, jenis_layanan
  )
  VALUES (
    NEW.tanggal, NEW.kelurahan, NEW.kecamatan, NEW.nama_klien, NEW.pekerjaan_krt, 
    NEW.alamat_klien, NEW.nomor_tlp, NEW.dokumen, NEW.status_dtks, NEW.bantuan_diperoleh, 
    NEW.status_rumah, NEW.jenis_penerangan, NEW.mck, NEW.pendapatan, NEW.nama_ibu_kandung, 
    NEW.jenis_pengaduan, NEW.jenis_layanan
  );
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `salinan_bbl`
--

CREATE TABLE `salinan_bbl` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_klien` varchar(100) DEFAULT NULL,
  `alamat_klien` varchar(100) DEFAULT NULL,
  `jenis_layanan` varchar(100) DEFAULT NULL,
  `keterangan3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `salinan_pelayanan`
--

CREATE TABLE `salinan_pelayanan` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_klien` varchar(100) DEFAULT NULL,
  `alamat_klien` varchar(100) DEFAULT NULL,
  `jenis_layanan` varchar(100) DEFAULT NULL,
  `keterangan2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `salinan_percobaan`
--

CREATE TABLE `salinan_percobaan` (
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

-- --------------------------------------------------------

--
-- Table structure for table `salinan_tambahan`
--

CREATE TABLE `salinan_tambahan` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_klien` varchar(100) DEFAULT NULL,
  `alamat_klien` varchar(100) DEFAULT NULL,
  `jenis_layanan` varchar(100) DEFAULT NULL,
  `keterangan4` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `keterangan4` varchar(255) DEFAULT NULL,
  `session_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tambahan`
--

INSERT INTO `tambahan` (`id`, `tanggal`, `nama_klien`, `alamat_klien`, `jenis_layanan`, `keterangan4`, `session_id`) VALUES
(9, '2024-07-27', 'FATIMAH', 'pancing', 'BPJS', 'selesai', NULL);

--
-- Triggers `tambahan`
--
DELIMITER $$
CREATE TRIGGER `after_insert_tambahan` AFTER INSERT ON `tambahan` FOR EACH ROW BEGIN
    INSERT INTO tujuan (id, tanggal, nama_klien, alamat_klien, jenis_layanan, keterangan)
    VALUES (NEW.id, NEW.tanggal, NEW.nama_klien, NEW.alamat_klien, NEW.jenis_layanan, NEW.keterangan4);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `backup_data_tambahan` BEFORE DELETE ON `tambahan` FOR EACH ROW BEGIN
    INSERT INTO `backup_tambahan` (id, tanggal, nama_klien, alamat_klien, jenis_layanan, keterangan4, deleted_at)
    VALUES (OLD.id, OLD.tanggal, OLD.nama_klien, OLD.alamat_klien, OLD.jenis_layanan, OLD.keterangan4, NOW());
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(200) DEFAULT NULL,
  `nama_lengkap` varchar(200) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level` enum('fasilitator','tksk','operator','koordinator','sekretariat','kabid') DEFAULT NULL,
  `area_tugas` varchar(100) DEFAULT NULL,
  `kecamatan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `nama_lengkap`, `password`, `level`, `area_tugas`, `kecamatan`) VALUES
(1, 'izal', 'IZAL HENDRAWAN', '2542b48c7efbadf2151b107ab1fb6f95', 'fasilitator', 'Kapias Pulau Buaya', 'Teluk Nibung'),
(2, 'aji', 'APRIAJI KURNIAWAN', '8d045450ae16dc81213a75b725ee2760', 'fasilitator', 'Sei Merbau', 'Teluk Nibung'),
(3, 'boy', 'BOY GULO', '1a699ad5e06aa8a6db3bcf9cfb2f00f2', 'operator', 'operator 1', 'not found');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `backup_bbl`
--
ALTER TABLE `backup_bbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `backup_pelayanan`
--
ALTER TABLE `backup_pelayanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `backup_percobaan`
--
ALTER TABLE `backup_percobaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bbl`
--
ALTER TABLE `bbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_usulan_bansos`
--
ALTER TABLE `data_usulan_bansos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelayanan`
--
ALTER TABLE `pelayanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `percobaan`
--
ALTER TABLE `percobaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrasi_bansos`
--
ALTER TABLE `registrasi_bansos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tambahan`
--
ALTER TABLE `tambahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `backup_bbl`
--
ALTER TABLE `backup_bbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `backup_pelayanan`
--
ALTER TABLE `backup_pelayanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bbl`
--
ALTER TABLE `bbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `data_usulan_bansos`
--
ALTER TABLE `data_usulan_bansos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pelayanan`
--
ALTER TABLE `pelayanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `percobaan`
--
ALTER TABLE `percobaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `registrasi_bansos`
--
ALTER TABLE `registrasi_bansos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tambahan`
--
ALTER TABLE `tambahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
