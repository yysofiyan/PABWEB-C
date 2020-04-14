-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 21, 2020 at 03:09 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE IF NOT EXISTS `tbl_siswa` (
  `nis` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nomor Induk Siswa',
  `nama` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nama Siswa',
  `tempat_lahir` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tempat Lahir Siswa',
  `tanggal_lahir` date NOT NULL COMMENT 'Tanggal Lahir Siswa',
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8_unicode_ci NOT NULL COMMENT 'Jenis Kelamin Siswa',
  `agama` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Agama Siswa',
  `alamat` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Alamat Siswa',
  `no_hp` varchar(13) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'No. Handphone Siswa',
  `foto` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Foto Siswa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`nis`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat`, `no_hp`, `foto`) VALUES
('1821', 'Rizki Abdul Hamid', 'sumedang', '2000-07-11', 'Laki-laki', 'Islam', 'link parigi\r\nparigi baru', '081394131271', 'DSC_1878mm.jpg');