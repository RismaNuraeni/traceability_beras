-- MySQL dump 10.13  Distrib 9.5.0, for macos14.8 (x86_64)
--
-- Host: localhost    Database: traceability_beras
-- ------------------------------------------------------
-- Server version	9.5.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;



--
-- GTID state at the beginning of the backup 
--



--
-- Table structure for table `distribusi`
--

DROP TABLE IF EXISTS `distribusi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `distribusi` (
  `id` int NOT NULL AUTO_INCREMENT,
  `penggilingan_id` int NOT NULL,
  `tujuan_distribusi` varchar(150) NOT NULL,
  `tanggal_distribusi` date NOT NULL,
  `status_distribusi` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `penggilingan_id` (`penggilingan_id`),
  CONSTRAINT `distribusi_ibfk_1` FOREIGN KEY (`penggilingan_id`) REFERENCES `penggilingan` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `distribusi`
--

LOCK TABLES `distribusi` WRITE;
/*!40000 ALTER TABLE `distribusi` DISABLE KEYS */;
INSERT INTO `distribusi` VALUES (1,1,'Toko Beras Banjar','2026-05-27','Sudah Dikirim');
/*!40000 ALTER TABLE `distribusi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `panen`
--

DROP TABLE IF EXISTS `panen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `panen` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `kode_batch` varchar(50) NOT NULL,
  `lokasi_sawah` varchar(255) NOT NULL,
  `jenis_padi` varchar(100) NOT NULL,
  `tanggal_panen` date NOT NULL,
  `jumlah_panen` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `panen_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `panen`
--

LOCK TABLES `panen` WRITE;
/*!40000 ALTER TABLE `panen` DISABLE KEYS */;
INSERT INTO `panen` VALUES (1,1,'113','Tasikmalaya','Pandan Wangi','2026-05-20',500);
/*!40000 ALTER TABLE `panen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penggilingan`
--

DROP TABLE IF EXISTS `penggilingan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `penggilingan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `panen_id` int NOT NULL,
  `tanggal_giling` date NOT NULL,
  `kualitas_beras` varchar(100) NOT NULL,
  `catatan` text,
  PRIMARY KEY (`id`),
  KEY `panen_id` (`panen_id`),
  CONSTRAINT `penggilingan_ibfk_1` FOREIGN KEY (`panen_id`) REFERENCES `panen` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penggilingan`
--

LOCK TABLES `penggilingan` WRITE;
/*!40000 ALTER TABLE `penggilingan` DISABLE KEYS */;
INSERT INTO `penggilingan` VALUES (1,1,'2026-05-25','Premium','-');
/*!40000 ALTER TABLE `penggilingan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('petani','penggilingan','distributor') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'petani','$2y$12$zAYTan0w8H7/AG720yylBu410UX9xIGXYCfX1JxLdt0yTJ5M/8f36','petani'),(2,'penggilingan','$2y$12$zAYTan0w8H7/AG720yylBu410UX9xIGXYCfX1JxLdt0yTJ5M/8f36','penggilingan'),(3,'distributor','$2y$12$zAYTan0w8H7/AG720yylBu410UX9xIGXYCfX1JxLdt0yTJ5M/8f36','distributor');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-05-29  5:09:55
