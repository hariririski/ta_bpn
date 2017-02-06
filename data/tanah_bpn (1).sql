-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2016 at 05:26 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tanah_bpn`
--

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE IF NOT EXISTS `desa` (
  `id_desa` int(11) NOT NULL,
  `nama_desa` varchar(50) NOT NULL,
  `id_kecamatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE IF NOT EXISTS `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `nama_kecamatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemohon`
--

CREATE TABLE IF NOT EXISTS `pemohon` (
  `id_pemohon` int(11) NOT NULL,
  `nama_identitas` varchar(50) NOT NULL,
  `jalan` varchar(30) NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `identitas` varchar(50) NOT NULL,
  `nama_ibu_kandung` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `gelar_belakang` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `id_tipe_pekerjaan` int(11) NOT NULL,
  `id_desa` int(11) NOT NULL,
  `id_warga_negara` int(11) NOT NULL,
  `gelar_depan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tanah`
--

CREATE TABLE IF NOT EXISTS `tanah` (
  `id_tanah` int(11) NOT NULL,
  `luas` int(11) NOT NULL,
  `jumlah_bidang` int(11) NOT NULL,
  `penggunaan_tanah` varchar(50) NOT NULL,
  `biaya` int(11) NOT NULL,
  `id_pemohon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tipe_pekerjaan`
--

CREATE TABLE IF NOT EXISTS `tipe_pekerjaan` (
  `id_tipe_pekerjaan` int(11) NOT NULL,
  `nama_tipe_pekerjaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `warga_negara`
--

CREATE TABLE IF NOT EXISTS `warga_negara` (
  `id_warga_negara` int(11) NOT NULL,
  `nama_warga_negara` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `pemohon`
--
ALTER TABLE `pemohon`
  ADD PRIMARY KEY (`id_pemohon`);

--
-- Indexes for table `tanah`
--
ALTER TABLE `tanah`
  ADD PRIMARY KEY (`id_tanah`);

--
-- Indexes for table `tipe_pekerjaan`
--
ALTER TABLE `tipe_pekerjaan`
  ADD PRIMARY KEY (`id_tipe_pekerjaan`);

--
-- Indexes for table `warga_negara`
--
ALTER TABLE `warga_negara`
  ADD PRIMARY KEY (`id_warga_negara`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `desa`
--
ALTER TABLE `desa`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pemohon`
--
ALTER TABLE `pemohon`
  MODIFY `id_pemohon` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tanah`
--
ALTER TABLE `tanah`
  MODIFY `id_tanah` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tipe_pekerjaan`
--
ALTER TABLE `tipe_pekerjaan`
  MODIFY `id_tipe_pekerjaan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `warga_negara`
--
ALTER TABLE `warga_negara`
  MODIFY `id_warga_negara` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
