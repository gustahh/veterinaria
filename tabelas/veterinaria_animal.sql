-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: veterinaria
-- ------------------------------------------------------
-- Server version	8.0.36

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
-- Table structure for table `animal`
--

DROP TABLE IF EXISTS `animal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `animal` (
  `codanim` int NOT NULL AUTO_INCREMENT,
  `especie` varchar(30) DEFAULT NULL,
  `raca` varchar(30) DEFAULT NULL,
  `nome` varchar(40) DEFAULT NULL,
  `porte` varchar(30) DEFAULT NULL,
  `dtnasc` date DEFAULT NULL,
  `peso` float(10,2) DEFAULT NULL,
  `codcli` int DEFAULT NULL,
  `foto` varchar(255) DEFAULT 'animal.jpg',
  PRIMARY KEY (`codanim`),
  KEY `codcli` (`codcli`),
  CONSTRAINT `animal_ibfk_1` FOREIGN KEY (`codcli`) REFERENCES `cliente` (`CODCLI`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `animal`
--

LOCK TABLES `animal` WRITE;
/*!40000 ALTER TABLE `animal` DISABLE KEYS */;
INSERT INTO `animal` VALUES (1,'Cachorro','Pitbull','Princesa','Grande','2021-05-21',24.00,3,'animal.jpg'),(2,'Gato','Pelo Curto Brasileiro','Mika','Pequeno','2021-02-12',5.00,1,'animal.jpg'),(3,'Gato','Pelo Curto Brasileiro','Cretino','Pequeno','2024-02-16',2.00,1,'animal.jpg'),(21,'Gato','Pelo curto brasileiro','Garfield','Grande','2021-09-28',8.00,1,'1715135416_apps.46534.13715883802827517.eee7f8a7-1e95-4335-860b-982691cd78b0.png');
/*!40000 ALTER TABLE `animal` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-07 23:41:50
