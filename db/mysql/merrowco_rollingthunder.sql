-- MySQL dump 10.13  Distrib 5.7.42, for Linux (x86_64)
--
-- Host: localhost    Database: merrowco_rollingthunder
-- ------------------------------------------------------
-- Server version	5.7.42

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `merrowco_rollingthunder`
--


--
-- Table structure for table `sandbox_management`
--

DROP TABLE IF EXISTS `sandbox_management`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sandbox_management` (
  `id` int(11) NOT NULL,
  `parent` varchar(100) NOT NULL,
  `application` varchar(30) NOT NULL,
  `left_box1` varchar(30) NOT NULL,
  `left_box_sub1` varchar(20) NOT NULL,
  `left_box2` varchar(30) NOT NULL,
  `left_box3` varchar(30) NOT NULL,
  `right_box1` varchar(30) NOT NULL,
  `right_box2` varchar(30) NOT NULL,
  `right_box3` varchar(30) NOT NULL,
  `right_box4` varchar(30) NOT NULL,
  `right_box5` varchar(30) NOT NULL,
  `center_line1` varchar(100) NOT NULL,
  `center_line2` varchar(100) NOT NULL,
  `center_line3` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sandbox_management`
--

LOCK TABLES `sandbox_management` WRITE;
/*!40000 ALTER TABLE `sandbox_management` DISABLE KEYS */;
INSERT INTO `sandbox_management` (`id`, `parent`, `application`, `left_box1`, `left_box_sub1`, `left_box2`, `left_box3`, `right_box1`, `right_box2`, `right_box3`, `right_box4`, `right_box5`, `center_line1`, `center_line2`, `center_line3`) VALUES (1,'yli','test1','Thread Name & Type','','Thread Name','Weight','Thread Choices','','Applications','Length','Material','Available Length','NO WAY!','Material'),(2,'yli','tes','','','','','','','','','','','','');
/*!40000 ALTER TABLE `sandbox_management` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'merrowco_rollingthunder'
--

--
-- Dumping routines for database 'merrowco_rollingthunder'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-12-11  8:39:46
