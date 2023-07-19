-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: ds122_2023
-- ------------------------------------------------------
-- Server version	8.0.32

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `pontuacao`
--

DROP TABLE IF EXISTS `pontuacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pontuacao` (
  `nick` varchar(255) DEFAULT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  `pont` int DEFAULT NULL,
  `dia` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pontuacao`
--

LOCK TABLES `pontuacao` WRITE;
/*!40000 ALTER TABLE `pontuacao` DISABLE KEYS */;
INSERT INTO `pontuacao` VALUES ('vanessa',1,14010,'2023-06-24 21:29:16'),('gabs',2,9320,'2023-06-24 21:31:09'),('vanessa',3,880,'2023-06-24 21:35:22'),('vanessa',4,880,'2023-06-24 21:35:48'),('gabs',5,14940,'2023-06-24 21:50:17'),('vanessa',6,13730,'2023-06-24 22:38:05'),('vanessa',7,14890,'2023-06-24 22:54:17'),('vanessa',8,14130,'2023-06-24 23:02:53'),('vanessa',9,830,'2023-06-24 23:10:56'),('vanessa',10,11320,'2023-06-24 23:28:24'),('vanessa',11,1680,'2023-06-24 23:38:33'),('vanessa',12,2470,'2023-06-24 23:54:56'),('teste3',13,740,'2023-06-25 00:18:57'),('rafa',14,12000,'2023-06-25 00:22:34'),('vanessa',15,920,'2023-06-25 02:00:25'),('nath',16,10300,'2023-06-25 02:03:28'),('rafa',17,11230,'2023-06-25 02:07:16'),('rafa',18,14080,'2023-06-25 02:12:18'),('vanessa',19,13940,'2023-06-25 04:51:31'),('vanessadevdd',20,13060,'2023-06-25 04:54:32'),('vanessa',21,8090,'2023-06-25 23:52:52'),('vanessa',22,15910,'2023-06-26 00:08:27'),('vanessa',23,14180,'2023-06-26 00:27:11'),('vanessadevdd',24,10310,'2023-06-26 01:36:32'),('vanessadevdd',25,11220,'2023-06-26 01:39:44'),('vanessa',26,17750,'2023-06-26 01:46:07'),('vanessadevdd',27,14970,'2023-06-26 01:55:14'),('felipe',28,7540,'2023-06-26 12:10:59'),('Annanda',29,10390,'2023-06-26 12:13:31'),('Annanda',30,17600,'2023-06-26 12:15:32'),('ESTER',31,5220,'2023-06-26 12:22:22'),('monica',32,8870,'2023-06-26 12:30:25'),('monica',33,4100,'2023-06-26 12:31:50'),('matheus',34,8770,'2023-06-26 12:35:04'),('carmelita',35,3520,'2023-06-26 12:40:13'),('camila',36,4900,'2023-06-26 13:52:31'),('camila',37,12370,'2023-06-26 13:54:52'),('felipe',38,13440,'2023-06-26 13:57:31'),('joao',39,5100,'2023-06-26 14:00:38'),('joao',40,9730,'2023-06-26 14:02:05'),('vanessadevdd',41,12920,'2023-06-26 15:16:32'),('vanessa',42,8540,'2023-06-26 15:52:32'),('vanessa',43,13760,'2023-06-26 15:53:42'),('vanessa',44,17580,'2023-07-01 03:22:36'),('vanessadevdd',45,15700,'2023-07-01 03:24:39'),('vanessa',46,890,'2023-07-01 04:11:40'),('vanessa',47,-160,'2023-07-01 04:13:36'),('alex',48,9680,'2023-07-01 13:12:48'),('fellipelindo',49,14840,'2023-07-01 13:38:50'),('fellipelindo',50,16610,'2023-07-01 13:41:33'),('vanessa',51,13740,'2023-07-10 00:36:17'),('vanessadevdd',52,13940,'2023-07-12 23:24:41'),('Mari',53,15860,'2023-07-12 23:33:42'),('Ralf',54,12920,'2023-07-12 23:36:51'),('Ralf',55,17540,'2023-07-12 23:38:06'),('Ralf',56,13780,'2023-07-12 23:43:57'),('igor',57,15740,'2023-07-12 23:50:34'),('vanessa',58,12130,'2023-07-15 23:03:05'),('juli',59,15790,'2023-07-15 23:06:15'),('vilmarize',60,8760,'2023-07-15 23:09:30'),('vera',61,7870,'2023-07-15 23:11:41');
/*!40000 ALTER TABLE `pontuacao` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-07-18 21:10:28
