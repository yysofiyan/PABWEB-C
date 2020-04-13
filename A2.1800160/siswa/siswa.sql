-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Mar 2020 pada 09.48
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `nis` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Nomor Induk Siswa',
  `nama` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Nama Siswa',
  `tempat_lahir` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tempat Lahir Siswa',
  `tanggal_lahir` date NOT NULL COMMENT 'Tanggal Lahir Siswa',
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Jenis Kelamin Siswa',
  `agama` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Agama Siswa',
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Alamat Siswa',
  `no_hp` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'No. Handphone Siswa',
  `foto` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Foto Siswa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`nis`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat`, `no_hp`, `foto`) VALUES
('18900', 'yogi mahendra', 'Sumedang', '1999-04-01', 'Laki-laki', 'Islam', 'situraja', '081221796006', 'Penguins.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
