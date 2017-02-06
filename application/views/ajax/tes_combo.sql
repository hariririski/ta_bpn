-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29 Sep 2015 pada 18.19
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tes_combo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_matakuliah`
--

CREATE TABLE IF NOT EXISTS `t_matakuliah` (
  `id_matkul` int(5) NOT NULL AUTO_INCREMENT,
  `kode` varchar(10) NOT NULL,
  `kode_matkul` varchar(12) NOT NULL,
  `nama_matkul` varchar(30) NOT NULL,
  `prodi_id` int(10) NOT NULL,
  `semester_matkul` int(1) NOT NULL,
  `sks` int(2) DEFAULT NULL,
  `status_matkul` varchar(15) NOT NULL,
  `created_date` datetime NOT NULL,
  `modifed_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id_matkul`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `t_matakuliah`
--

INSERT INTO `t_matakuliah` (`id_matkul`, `kode`, `kode_matkul`, `nama_matkul`, `prodi_id`, `semester_matkul`, `sks`, `status_matkul`, `created_date`, `modifed_date`) VALUES
(2, 'MKU', 'MKU002', 'Pendidikan Agama Islam', 1, 1, 3, 'Aktif', '2015-04-09 22:57:47', '2015-04-10 14:56:30'),
(3, 'MKU', 'MKU003', 'Ilmu Komputer', 1, 1, 3, 'Aktif', '2015-04-09 23:44:25', NULL),
(4, 'MKU', 'MKU004', 'B.Inggris', 1, 1, 3, 'Aktif', '2015-04-10 14:57:23', NULL),
(5, 'MKU', 'MKU005', 'B. Inggris', 5, 1, 3, 'Aktif', '2015-04-12 12:41:27', NULL),
(6, 'MKU', 'MKU006', 'Teknik Komputer', 1, 2, 4, 'Aktif', '2015-04-29 17:08:36', '2015-04-30 17:30:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_prodi`
--

CREATE TABLE IF NOT EXISTS `t_prodi` (
  `id_prodi` int(5) NOT NULL AUTO_INCREMENT,
  `fakultas_id` int(5) NOT NULL,
  `nama_prodi` varchar(50) NOT NULL,
  `jenjang_studi` varchar(5) NOT NULL,
  `status_prodi` varchar(15) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id_prodi`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `t_prodi`
--

INSERT INTO `t_prodi` (`id_prodi`, `fakultas_id`, `nama_prodi`, `jenjang_studi`, `status_prodi`, `created_date`, `modified_date`) VALUES
(1, 1, 'Teknik Komputer', 'D1', 'Aktif', '2015-04-06 14:08:15', '2015-04-10 13:44:29'),
(4, 1, 'Teknik Komputer', 'D3', 'Non Aktif', '2015-04-06 14:11:39', '2015-04-10 13:44:37'),
(5, 1, 'Teknik Informatika', 'S1', 'Aktif', '2015-04-12 10:41:34', '2015-04-12 12:39:27');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
