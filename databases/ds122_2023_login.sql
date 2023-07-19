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
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `login` (
  `email` varchar(255) DEFAULT NULL,
  `nick` varchar(255) NOT NULL,
  `senha` varchar(40) DEFAULT NULL,
  `confirma_senha` varchar(40) DEFAULT NULL,
  `dataincri` date DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`nick`),
  KEY `FK_login_1` (`nome`),
  CONSTRAINT `FK_login_1` FOREIGN KEY (`nome`) REFERENCES `ligas` (`nome`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES ('alex@alex','alex','534b44a19bf18d20b71ecc4eb77c572f','alex','2023-07-01','maebr'),('tricolor@tricolor.com.br','Annanda','202cb962ac59075b964b07152d234b70','123','2023-06-26',NULL),('vanessa@vanessa','bbbb','08f8e0260c64418510cefb2b06eee5cd','bbb','2023-06-25',NULL),('camilam@sesa.pr.gov.br','camila','81dc9bdb52d04dc20036dbd8313ed055','1234','2023-06-26','maebr'),('carmelita@mcorp.com.br','carmelita','81dc9bdb52d04dc20036dbd8313ed055','1234','2023-06-26',NULL),('ESTERVITENA@GMAIL.COM','ESTER','9399e0b02c73fcc14cd11d9b4e685f2e','8777','2023-06-26','maebr'),('felipe@tricolor','felipe','0e4215a8499305b7c7d9ead2f7f20253','tricolor','2023-06-26',NULL),('fellipe@boom.com','fellipelindo','63426e2e6281018dff08e00f927ed611','specspidey','2023-07-01','maebr'),('gabs@gabs','gabs','d42bdb5732712ade3f2f6a49efe040da','gabs','2023-06-24','juninho'),('igor@igor','igor','dd97813dd40be87559aaefed642c3fbb','igor','2023-07-12',NULL),('joaodomingues@gmail.com','joao','81dc9bdb52d04dc20036dbd8313ed055','1234','2023-06-26','vanessa'),('juliana.bughay@gmail.com','juli','4fd6bc770f1e5c7074e50d2a68aea35d','naosei23','2023-07-15',NULL),('MARI@MARI','Mari','81dc9bdb52d04dc20036dbd8313ed055','1234','2023-07-12',NULL),('matheushmiqueias@gmail.com','matheus','298eb2b4fa013d57db7b7629077f6d29','Mt27092005!','2023-06-26',NULL),('monica@teste','monica','dbccbbbc40fb97dd090a9da0cc5fa1a3','!@123','2023-06-26',NULL),('nath@nath','nath','320c8d45fe4ee818e1d185954c2c251d','nath','2023-06-24',NULL),('rafa@rafa','rafa','35cd2d0d62d9bc5e60a3ca9f7593b05b','rafa','2023-06-24','maebr'),('ralf@ralf.com','Ralf','0be828a48a87eaa090ecb75bd1eddb27','Ralf01','2023-07-12',NULL),('teste2@teste2','teste2','38851536d87701d2191990e24a7f8d4e','teste2','2023-06-24','maebr'),('teste3@teste3','teste3','507eb04c9c427e9f961e47a7204fac41','teste3','2023-06-24','maebr'),('vanesssa@vanessa','vanessa','282bbbfb69da08d03ff4bcf34a94bc53','vanessa','2023-06-24','maebr'),('vanessa@teste123','vanessadevdd','282bbbfb69da08d03ff4bcf34a94bc53','vanessa','2023-06-25','vanessa'),('vera@maedavanessa','vera','4341dfaa7259082022147afd371b69c3','vera','2023-07-15',NULL),('vitoriazasou@gmail.com','vik','8ae5780d22688d976ebce9d8fb3db81c','5453','2023-07-04',NULL),('vilmarize@bonita','vilmarize','bb74d0bb07f632e47ed7a921cd51ab7c','bonita','2023-07-15',NULL);
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
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
