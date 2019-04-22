-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Apr 2019 pada 17.21
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kkn`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(6) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `daerah_penempatan`
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
-- Struktur dari tabel `dpl`
--

CREATE TABLE `dpl` (
  `nip` int(20) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `keahlian` varchar(50) NOT NULL,
  `penghargaan` varchar(50) NOT NULL,
  `id_peng_masy` int(6) NOT NULL,
  `id_penelitian` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
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
  `id_daerah` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penelitian`
--

CREATE TABLE `penelitian` (
  `id_penelitian` int(6) NOT NULL,
  `judul` varchar(35) NOT NULL,
  `tahun` int(4) NOT NULL,
  `sumber_dana` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengabdian_masyarakat`
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
-- Struktur dari tabel `pengumpulan_tugas`
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
-- Struktur dari tabel `wali`
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
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `daerah_penempatan`
--
ALTER TABLE `daerah_penempatan`
  ADD PRIMARY KEY (`id_daerah`);

--
-- Indeks untuk tabel `dpl`
--
ALTER TABLE `dpl`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `id_peng_masy` (`id_peng_masy`),
  ADD KEY `id_penelitian` (`id_penelitian`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `id_wali` (`id_wali`),
  ADD KEY `nip` (`nip`),
  ADD KEY `id_daerah` (`id_daerah`);

--
-- Indeks untuk tabel `penelitian`
--
ALTER TABLE `penelitian`
  ADD PRIMARY KEY (`id_penelitian`);

--
-- Indeks untuk tabel `pengabdian_masyarakat`
--
ALTER TABLE `pengabdian_masyarakat`
  ADD PRIMARY KEY (`id_peng_masy`);

--
-- Indeks untuk tabel `pengumpulan_tugas`
--
ALTER TABLE `pengumpulan_tugas`
  ADD PRIMARY KEY (`id_peng_tugas`),
  ADD KEY `nim` (`nim`);

--
-- Indeks untuk tabel `wali`
--
ALTER TABLE `wali`
  ADD PRIMARY KEY (`id_wali`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `daerah_penempatan`
--
ALTER TABLE `daerah_penempatan`
  MODIFY `id_daerah` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `penelitian`
--
ALTER TABLE `penelitian`
  MODIFY `id_penelitian` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengabdian_masyarakat`
--
ALTER TABLE `pengabdian_masyarakat`
  MODIFY `id_peng_masy` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengumpulan_tugas`
--
ALTER TABLE `pengumpulan_tugas`
  MODIFY `id_peng_tugas` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `wali`
--
ALTER TABLE `wali`
  MODIFY `id_wali` int(6) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dpl`
--
ALTER TABLE `dpl`
  ADD CONSTRAINT `dpl_ibfk_1` FOREIGN KEY (`id_peng_masy`) REFERENCES `pengabdian_masyarakat` (`id_peng_masy`),
  ADD CONSTRAINT `dpl_ibfk_2` FOREIGN KEY (`id_penelitian`) REFERENCES `penelitian` (`id_penelitian`);

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`id_wali`) REFERENCES `wali` (`id_wali`),
  ADD CONSTRAINT `mahasiswa_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `dpl` (`nip`),
  ADD CONSTRAINT `mahasiswa_ibfk_3` FOREIGN KEY (`id_daerah`) REFERENCES `daerah_penempatan` (`id_daerah`);

--
-- Ketidakleluasaan untuk tabel `pengumpulan_tugas`
--
ALTER TABLE `pengumpulan_tugas`
  ADD CONSTRAINT `pengumpulan_tugas_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
