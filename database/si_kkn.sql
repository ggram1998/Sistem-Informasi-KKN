-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2019 at 03:05 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_kkn`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(6) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` int(20) NOT NULL,
  `id_role` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `daerah_penempatan`
--

CREATE TABLE `daerah_penempatan` (
  `id_daerah` int(6) NOT NULL,
  `nama_daerah` varchar(30) NOT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kabkot` varchar(30) NOT NULL,
  `provinsi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dpl`
--

CREATE TABLE `dpl` (
  `nip` int(20) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `keahlian` varchar(50) NOT NULL,
  `penghargaan` varchar(50) NOT NULL,
  `id_peng_masy` int(6) NOT NULL,
  `id_penelitian` int(6) NOT NULL,
  `id_role` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `esai` varchar(500) NOT NULL,
  `surat_perizinan` varchar(100) NOT NULL,
  `id_wali` int(6) NOT NULL,
  `nip` int(20) NOT NULL,
  `id_daerah` int(6) NOT NULL,
  `id_role` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penelitian`
--

CREATE TABLE `penelitian` (
  `id_penelitian` int(6) NOT NULL,
  `judul` varchar(35) NOT NULL,
  `tahun` int(4) NOT NULL,
  `sumber_dana` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengabdian_masyarakat`
--

CREATE TABLE `pengabdian_masyarakat` (
  `id_peng_masy` int(6) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tahun` int(4) NOT NULL,
  `lokasi` varchar(70) NOT NULL,
  `sumber_dana` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengumpulan_tugas`
--

CREATE TABLE `pengumpulan_tugas` (
  `id_peng_tugas` int(6) NOT NULL,
  `laporan_harian` varchar(100) NOT NULL,
  `laporan_akhir` varchar(100) NOT NULL,
  `link_video` varchar(100) NOT NULL,
  `pengaduan` varchar(100) NOT NULL,
  `nim` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(6) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `role`) VALUES
(1, 'admin'),
(2, 'dpl'),
(3, 'mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(3, 'vicko', 'vicko@gmail.com', 'default.jpg', '$2y$10$sWkgx6g.XzYp72nYuJr59erms22jz1Hk7NlRX7ADTS8A6eN4.28mO', 2, 1, 1556338519),
(4, 'pratama', 'pratama@gmail.com', 'default.jpg', '$2y$10$lmsE5A1CKUwHO2c68ywnm.Xc2T9n.UvDfJF9N8yxkXjCztroGTuD2', 2, 1, 1556343358);

-- --------------------------------------------------------

--
-- Table structure for table `wali`
--

CREATE TABLE `wali` (
  `id_wali` int(6) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `no_telp` int(14) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `hubungan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_role` (`id_role`);

--
-- Indexes for table `daerah_penempatan`
--
ALTER TABLE `daerah_penempatan`
  ADD PRIMARY KEY (`id_daerah`);

--
-- Indexes for table `dpl`
--
ALTER TABLE `dpl`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `id_peng_masy` (`id_peng_masy`),
  ADD KEY `id_penelitian` (`id_penelitian`),
  ADD KEY `id_role` (`id_role`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `id_wali` (`id_wali`),
  ADD KEY `nip` (`nip`),
  ADD KEY `id_daerah` (`id_daerah`),
  ADD KEY `id_role` (`id_role`);

--
-- Indexes for table `penelitian`
--
ALTER TABLE `penelitian`
  ADD PRIMARY KEY (`id_penelitian`);

--
-- Indexes for table `pengabdian_masyarakat`
--
ALTER TABLE `pengabdian_masyarakat`
  ADD PRIMARY KEY (`id_peng_masy`);

--
-- Indexes for table `pengumpulan_tugas`
--
ALTER TABLE `pengumpulan_tugas`
  ADD PRIMARY KEY (`id_peng_tugas`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wali`
--
ALTER TABLE `wali`
  ADD PRIMARY KEY (`id_wali`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `daerah_penempatan`
--
ALTER TABLE `daerah_penempatan`
  MODIFY `id_daerah` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penelitian`
--
ALTER TABLE `penelitian`
  MODIFY `id_penelitian` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengabdian_masyarakat`
--
ALTER TABLE `pengabdian_masyarakat`
  MODIFY `id_peng_masy` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengumpulan_tugas`
--
ALTER TABLE `pengumpulan_tugas`
  MODIFY `id_peng_tugas` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wali`
--
ALTER TABLE `wali`
  MODIFY `id_wali` int(6) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);

--
-- Constraints for table `dpl`
--
ALTER TABLE `dpl`
  ADD CONSTRAINT `dpl_ibfk_1` FOREIGN KEY (`id_peng_masy`) REFERENCES `pengabdian_masyarakat` (`id_peng_masy`),
  ADD CONSTRAINT `dpl_ibfk_2` FOREIGN KEY (`id_penelitian`) REFERENCES `penelitian` (`id_penelitian`),
  ADD CONSTRAINT `dpl_ibfk_3` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`id_wali`) REFERENCES `wali` (`id_wali`),
  ADD CONSTRAINT `mahasiswa_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `dpl` (`nip`),
  ADD CONSTRAINT `mahasiswa_ibfk_3` FOREIGN KEY (`id_daerah`) REFERENCES `daerah_penempatan` (`id_daerah`),
  ADD CONSTRAINT `mahasiswa_ibfk_4` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);

--
-- Constraints for table `pengumpulan_tugas`
--
ALTER TABLE `pengumpulan_tugas`
  ADD CONSTRAINT `pengumpulan_tugas_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
