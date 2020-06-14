-- MySQL dump 10.13  Distrib 5.7.28, for Linux (x86_64)
--
-- Host: localhost    Database: db_sekolah
-- ------------------------------------------------------
-- Server version	5.7.28-0ubuntu0.18.04.4

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tbl_siswa`
--

DROP TABLE IF EXISTS `tbl_siswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_siswa`
--

LOCK TABLES `tbl_siswa` WRITE;
/*!40000 ALTER TABLE `tbl_siswa` DISABLE KEYS */;
INSERT INTO `tbl_siswa` VALUES ('18001','Luthfi Izzuddin','Sumedang','1999-08-17','Laki-laki','Islam','Sumedang','083524673','image.jpg');
/*!40000 ALTER TABLE `tbl_siswa` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-03-11 14:26:01
