-- MySQL dump 10.13  Distrib 5.7.42, for Linux (x86_64)
--
-- Host: localhost    Database: merrowco_zc1
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
-- Current Database: `merrowco_zc1`
--


--
-- Table structure for table `zen_address_book`
--

DROP TABLE IF EXISTS `zen_address_book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_address_book` (
  `address_book_id` int(11) NOT NULL AUTO_INCREMENT,
  `customers_id` int(11) NOT NULL DEFAULT '0',
  `entry_gender` char(1) NOT NULL DEFAULT '',
  `entry_company` varchar(32) DEFAULT NULL,
  `entry_firstname` varchar(32) NOT NULL DEFAULT '',
  `entry_lastname` varchar(32) NOT NULL DEFAULT '',
  `entry_street_address` varchar(64) NOT NULL DEFAULT '',
  `entry_suburb` varchar(32) DEFAULT NULL,
  `entry_postcode` varchar(10) NOT NULL DEFAULT '',
  `entry_city` varchar(32) NOT NULL DEFAULT '',
  `entry_state` varchar(32) DEFAULT NULL,
  `entry_country_id` int(11) NOT NULL DEFAULT '0',
  `entry_zone_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`address_book_id`),
  KEY `idx_address_book_customers_id_zen` (`customers_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_address_book`
--

LOCK TABLES `zen_address_book` WRITE;
/*!40000 ALTER TABLE `zen_address_book` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_address_book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_address_format`
--

DROP TABLE IF EXISTS `zen_address_format`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_address_format` (
  `address_format_id` int(11) NOT NULL AUTO_INCREMENT,
  `address_format` varchar(128) NOT NULL DEFAULT '',
  `address_summary` varchar(48) NOT NULL DEFAULT '',
  PRIMARY KEY (`address_format_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_address_format`
--

LOCK TABLES `zen_address_format` WRITE;
/*!40000 ALTER TABLE `zen_address_format` DISABLE KEYS */;
INSERT INTO `zen_address_format` (`address_format_id`, `address_format`, `address_summary`) VALUES (1,'$firstname $lastname$cr$streets$cr$city, $postcode$cr$statecomma$country','$city / $country'),(2,'$firstname $lastname$cr$streets$cr$city, $state    $postcode$cr$country','$city, $state / $country'),(3,'$firstname $lastname$cr$streets$cr$city$cr$postcode - $statecomma$country','$state / $country'),(4,'$firstname $lastname$cr$streets$cr$city ($postcode)$cr$country','$postcode / $country'),(5,'$firstname $lastname$cr$streets$cr$postcode $city$cr$country','$city / $country');
/*!40000 ALTER TABLE `zen_address_format` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_admin`
--

DROP TABLE IF EXISTS `zen_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(32) NOT NULL DEFAULT '',
  `admin_email` varchar(96) NOT NULL DEFAULT '',
  `admin_pass` varchar(40) NOT NULL DEFAULT '',
  `admin_level` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`admin_id`),
  KEY `idx_admin_name_zen` (`admin_name`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_admin`
--

LOCK TABLES `zen_admin` WRITE;
/*!40000 ALTER TABLE `zen_admin` DISABLE KEYS */;
INSERT INTO `zen_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_level`) VALUES (1,'admin','merrowco@merrow.com','b7c0b10d041cf41f20c5bd3411772d38:f0',1);
/*!40000 ALTER TABLE `zen_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_admin_activity_log`
--

DROP TABLE IF EXISTS `zen_admin_activity_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_admin_activity_log` (
  `log_id` int(15) NOT NULL AUTO_INCREMENT,
  `access_date` datetime NOT NULL DEFAULT '0001-01-01 00:00:00',
  `admin_id` int(11) NOT NULL DEFAULT '0',
  `page_accessed` varchar(80) NOT NULL DEFAULT '',
  `page_parameters` varchar(150) DEFAULT NULL,
  `ip_address` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`log_id`),
  KEY `idx_page_accessed_zen` (`page_accessed`),
  KEY `idx_access_date_zen` (`access_date`),
  KEY `idx_ip_zen` (`ip_address`)
) ENGINE=MyISAM AUTO_INCREMENT=165 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_admin_activity_log`
--

LOCK TABLES `zen_admin_activity_log` WRITE;
/*!40000 ALTER TABLE `zen_admin_activity_log` DISABLE KEYS */;
INSERT INTO `zen_admin_activity_log` (`log_id`, `access_date`, `admin_id`, `page_accessed`, `page_parameters`, `ip_address`) VALUES (8,'2005-11-01 09:24:36',1,'configuration.php','gID=1&','65.96.199.154'),(9,'2005-11-01 09:24:42',1,'configuration.php','gID=1&cID=4&action=edit&','65.96.199.154'),(10,'2005-11-01 09:24:48',1,'configuration.php','gID=1&cID=4&action=save&','65.96.199.154'),(11,'2005-11-01 09:24:49',1,'configuration.php','gID=1&cID=4&','65.96.199.154'),(12,'2005-11-01 09:24:56',1,'configuration.php','gID=1&cID=11&action=edit&','65.96.199.154'),(13,'2005-11-01 09:25:17',1,'configuration.php','gID=1&cID=11&action=save&','65.96.199.154'),(14,'2005-11-01 09:25:17',1,'configuration.php','gID=1&cID=11&','65.96.199.154'),(15,'2005-11-01 09:25:28',1,'configuration.php','gID=1&cID=22&action=edit&','65.96.199.154'),(16,'2005-11-01 09:25:42',1,'configuration.php','gID=4&','65.96.199.154'),(17,'2005-11-01 09:26:01',1,'configuration.php','gID=5&','65.96.199.154'),(18,'2005-11-01 11:31:11',1,'products_price_manager.php','','65.96.199.154'),(19,'2005-11-01 11:31:11',1,'categories.php','','65.96.199.154'),(20,'2005-11-01 11:31:33',1,'categories.php','cPath=&action=new_category&','65.96.199.154'),(21,'2005-11-01 11:31:47',1,'categories.php','action=insert_category&cPath=&','65.96.199.154'),(22,'2005-11-01 11:31:47',1,'categories.php','cPath=&cID=1&','65.96.199.154'),(23,'2005-11-01 11:31:54',1,'categories.php','cPath=1&','65.96.199.154'),(24,'2005-11-01 11:31:54',1,'categories.php','cPath=1&','65.96.199.154'),(25,'2005-11-01 11:32:05',1,'categories.php','x=53&y=12&product_type=1&cPath=1&action=new_product&','65.96.199.154'),(26,'2005-11-01 11:32:05',1,'product.php','x=53&y=12&product_type=1&cPath=1&action=new_product&','65.96.199.154'),(27,'2005-11-01 11:33:54',1,'product.php','cPath=1&product_type=1&action=new_product_preview&','65.96.199.154'),(28,'2005-11-01 11:34:15',1,'product.php','cPath=1&product_type=1&action=insert_product&','65.96.199.154'),(29,'2005-11-01 11:34:15',1,'categories.php','cPath=1&pID=1&','65.96.199.154'),(30,'2005-11-01 11:34:19',1,'product.php','page=1&product_type=1&cPath=1&pID=1&action=new_product&','65.96.199.154'),(31,'2005-11-01 11:34:32',1,'manufacturers.php','','65.96.199.154'),(32,'2005-11-01 11:34:37',1,'manufacturers.php','page=0&mID=&action=new&','65.96.199.154'),(33,'2005-11-01 11:35:06',1,'manufacturers.php','action=insert&','65.96.199.154'),(34,'2005-11-01 11:35:06',1,'manufacturers.php','mID=1&','65.96.199.154'),(35,'2005-11-01 11:35:10',1,'manufacturers.php','page=1&mID=1&action=new&','65.96.199.154'),(36,'2005-11-01 11:35:24',1,'options_name_manager.php','','65.96.199.154'),(37,'2005-11-01 11:35:39',1,'reviews.php','','65.96.199.154'),(38,'2005-11-01 11:35:45',1,'configuration.php','gID=17&','65.96.199.154'),(39,'2005-11-01 11:35:53',1,'configuration.php','gID=17&cID=262&action=edit&','65.96.199.154'),(40,'2005-11-01 11:36:05',1,'alt_nav.php','','65.96.199.154'),(41,'2005-11-01 11:36:12',1,'configuration.php','gID=19&','65.96.199.154'),(42,'2005-11-01 11:36:28',1,'salemaker.php','','65.96.199.154'),(43,'2005-11-01 11:39:36',1,'configuration.php','gID=1&','65.96.199.154'),(44,'2005-11-01 11:39:42',1,'configuration.php','gID=4&','65.96.199.154'),(45,'2005-11-01 11:39:48',1,'configuration.php','gID=4&cID=90&action=edit&','65.96.199.154'),(46,'2005-11-01 11:40:27',1,'template_select.php','','65.96.199.154'),(47,'2005-11-01 11:41:02',1,'template_select.php','page=1&tID=1&action=edit&','65.96.199.154'),(48,'2005-11-01 11:41:10',1,'template_select.php','page=1&tID=1&action=save&','65.96.199.154'),(49,'2005-11-01 11:41:42',1,'layout_controller.php','','65.96.199.154'),(50,'2005-11-01 11:41:53',1,'layout_controller.php','page=&cID=14&','65.96.199.154'),(51,'2005-11-01 11:41:53',1,'layout_controller.php','page=&cID=14&action=edit&','65.96.199.154'),(52,'2005-11-01 11:42:00',1,'layout_controller.php','page=&cID=14&action=save&layout_box_name=order_history.php&','65.96.199.154'),(53,'2005-11-01 11:42:00',1,'layout_controller.php','page=&cID=14&','65.96.199.154'),(54,'2005-11-01 11:51:34',1,'layout_controller.php','page=&cID=13&','65.96.199.154'),(55,'2005-11-01 11:51:38',1,'layout_controller.php','page=&cID=13&action=edit&','65.96.199.154'),(56,'2005-11-01 11:51:43',1,'layout_controller.php','page=&cID=13&action=save&layout_box_name=music_genres.php&','65.96.199.154'),(57,'2005-11-01 11:51:43',1,'layout_controller.php','page=&cID=13&','65.96.199.154'),(58,'2005-11-01 11:51:47',1,'layout_controller.php','page=&cID=16&','65.96.199.154'),(59,'2005-11-01 11:51:47',1,'layout_controller.php','page=&cID=16&','65.96.199.154'),(60,'2005-11-01 11:51:51',1,'layout_controller.php','page=&cID=16&action=edit&','65.96.199.154'),(61,'2005-11-01 11:51:56',1,'layout_controller.php','page=&cID=16&action=save&layout_box_name=record_companies.php&','65.96.199.154'),(62,'2005-11-01 11:51:57',1,'layout_controller.php','page=&cID=16&','65.96.199.154'),(63,'2005-11-01 11:51:59',1,'layout_controller.php','page=&cID=116&','65.96.199.154'),(64,'2005-11-01 11:51:59',1,'layout_controller.php','page=&cID=116&','65.96.199.154'),(65,'2005-11-01 11:52:02',1,'layout_controller.php','page=&cID=116&action=edit&','65.96.199.154'),(66,'2005-11-01 11:52:06',1,'layout_controller.php','page=&cID=116&action=save&layout_box_name=banner_box_all.php&','65.96.199.154'),(67,'2005-11-01 11:52:06',1,'layout_controller.php','page=&cID=116&','65.96.199.154'),(68,'2005-11-01 11:52:10',1,'layout_controller.php','page=&cID=2&','65.96.199.154'),(69,'2005-11-01 11:52:10',1,'layout_controller.php','page=&cID=2&','65.96.199.154'),(70,'2005-11-01 11:52:13',1,'layout_controller.php','page=&cID=2&action=edit&','65.96.199.154'),(71,'2005-11-01 11:52:17',1,'layout_controller.php','page=&cID=2&action=save&layout_box_name=banner_box2.php&','65.96.199.154'),(72,'2005-11-01 11:52:17',1,'layout_controller.php','page=&cID=2&','65.96.199.154'),(73,'2005-11-01 11:52:38',1,'layout_controller.php','page=&cID=24&','65.96.199.154'),(74,'2005-11-01 11:52:41',1,'layout_controller.php','page=&cID=24&action=edit&','65.96.199.154'),(75,'2005-11-01 11:52:45',1,'layout_controller.php','page=&cID=24&action=save&layout_box_name=whos_online.php&','65.96.199.154'),(76,'2005-11-01 11:52:46',1,'layout_controller.php','page=&cID=24&','65.96.199.154'),(77,'2005-11-01 11:52:54',1,'layout_controller.php','page=&cID=23&','65.96.199.154'),(78,'2005-11-01 11:52:54',1,'layout_controller.php','page=&cID=23&','65.96.199.154'),(79,'2005-11-01 11:52:57',1,'layout_controller.php','page=&cID=23&action=edit&','65.96.199.154'),(80,'2005-11-01 11:53:02',1,'layout_controller.php','page=&cID=23&action=save&layout_box_name=whats_new.php&','65.96.199.154'),(81,'2005-11-01 11:53:02',1,'layout_controller.php','page=&cID=23&','65.96.199.154'),(82,'2005-11-01 11:53:22',1,'layout_controller.php','page=&cID=23&action=edit&','65.96.199.154'),(83,'2005-11-01 11:53:33',1,'layout_controller.php','page=&cID=1&','65.96.199.154'),(84,'2005-11-01 11:53:36',1,'layout_controller.php','page=&cID=1&','65.96.199.154'),(85,'2005-11-01 11:53:38',1,'layout_controller.php','page=&cID=1&action=edit&','65.96.199.154'),(86,'2005-11-01 11:53:43',1,'layout_controller.php','page=&cID=1&action=save&layout_box_name=banner_box.php&','65.96.199.154'),(87,'2005-11-01 11:53:43',1,'layout_controller.php','page=&cID=1&','65.96.199.154'),(88,'2005-11-01 11:53:57',1,'layout_controller.php','page=&cID=17&','65.96.199.154'),(89,'2005-11-01 11:53:57',1,'layout_controller.php','page=&cID=17&','65.96.199.154'),(90,'2005-11-01 11:54:03',1,'layout_controller.php','page=&cID=17&action=edit&','65.96.199.154'),(91,'2005-11-01 11:54:10',1,'layout_controller.php','page=&cID=17&action=save&layout_box_name=reviews.php&','65.96.199.154'),(92,'2005-11-01 11:54:10',1,'layout_controller.php','page=&cID=17&','65.96.199.154'),(93,'2005-11-01 11:55:14',1,'banner_manager.php','','65.96.199.154'),(94,'2005-11-01 11:55:31',1,'banner_manager.php','action=new&','65.96.199.154'),(95,'2005-11-01 11:56:33',1,'banner_manager.php','action=insert&','65.96.199.154'),(96,'2005-11-01 11:56:33',1,'banner_manager.php','bID=9&','65.96.199.154'),(97,'2005-11-01 11:56:47',1,'banner_manager.php','page=1&bID=8&','65.96.199.154'),(98,'2005-11-01 11:56:48',1,'banner_manager.php','page=1&bID=8&','65.96.199.154'),(99,'2005-11-01 11:56:50',1,'banner_manager.php','page=1&bID=8&action=new&','65.96.199.154'),(100,'2005-11-01 11:56:56',1,'banner_manager.php','page=1&action=update&','65.96.199.154'),(101,'2005-11-01 11:56:56',1,'banner_manager.php','page=1&bID=8&','65.96.199.154'),(102,'2005-11-01 11:56:58',1,'banner_manager.php','page=1&bID=5&','65.96.199.154'),(103,'2005-11-01 11:56:58',1,'banner_manager.php','page=1&bID=5&','65.96.199.154'),(104,'2005-11-01 11:57:01',1,'banner_manager.php','page=1&bID=5&action=new&','65.96.199.154'),(105,'2005-11-01 11:57:06',1,'banner_manager.php','page=1&action=update&','65.96.199.154'),(106,'2005-11-01 11:57:06',1,'banner_manager.php','page=1&bID=5&','65.96.199.154'),(107,'2005-11-01 11:57:12',1,'banner_manager.php','page=1&bID=4&','65.96.199.154'),(108,'2005-11-01 11:57:12',1,'banner_manager.php','page=1&bID=4&','65.96.199.154'),(109,'2005-11-01 11:57:16',1,'banner_manager.php','page=1&bID=4&action=new&','65.96.199.154'),(110,'2005-11-01 11:57:20',1,'banner_manager.php','page=1&action=update&','65.96.199.154'),(111,'2005-11-01 11:57:20',1,'banner_manager.php','page=1&bID=4&','65.96.199.154'),(112,'2005-11-01 11:57:24',1,'banner_manager.php','page=1&bID=6&','65.96.199.154'),(113,'2005-11-01 11:57:24',1,'banner_manager.php','page=1&bID=6&','65.96.199.154'),(114,'2005-11-01 11:57:27',1,'banner_manager.php','page=1&bID=6&action=new&','65.96.199.154'),(115,'2005-11-01 11:57:31',1,'banner_manager.php','page=1&action=update&','65.96.199.154'),(116,'2005-11-01 11:57:31',1,'banner_manager.php','page=1&bID=6&','65.96.199.154'),(117,'2005-11-01 11:57:36',1,'banner_manager.php','page=1&bID=1&','65.96.199.154'),(118,'2005-11-01 11:57:36',1,'banner_manager.php','page=1&bID=1&','65.96.199.154'),(119,'2005-11-01 11:57:38',1,'banner_manager.php','page=1&bID=1&action=new&','65.96.199.154'),(120,'2005-11-01 11:57:43',1,'banner_manager.php','page=1&action=update&','65.96.199.154'),(121,'2005-11-01 11:57:44',1,'banner_manager.php','page=1&bID=1&','65.96.199.154'),(122,'2005-11-01 11:57:46',1,'banner_manager.php','page=1&bID=7&','65.96.199.154'),(123,'2005-11-01 11:57:47',1,'banner_manager.php','page=1&bID=7&','65.96.199.154'),(124,'2005-11-01 11:57:50',1,'banner_manager.php','page=1&bID=7&action=new&','65.96.199.154'),(125,'2005-11-01 11:57:55',1,'banner_manager.php','page=1&action=update&','65.96.199.154'),(126,'2005-11-01 11:57:55',1,'banner_manager.php','page=1&bID=7&','65.96.199.154'),(127,'2005-11-01 11:58:00',1,'layout_controller.php','','65.96.199.154'),(128,'2005-11-01 11:58:12',1,'layout_controller.php','page=&cID=19&','65.96.199.154'),(129,'2005-11-01 11:58:13',1,'layout_controller.php','page=&cID=19&','65.96.199.154'),(130,'2005-11-01 11:58:15',1,'layout_controller.php','page=&cID=19&action=edit&','65.96.199.154'),(131,'2005-11-01 11:58:19',1,'layout_controller.php','page=&cID=19&action=save&layout_box_name=search_header.php&','65.96.199.154'),(132,'2005-11-01 11:58:20',1,'layout_controller.php','page=&cID=19&','65.96.199.154'),(133,'2005-11-01 11:58:55',1,'layout_controller.php','page=&cID=116&','65.96.199.154'),(134,'2005-11-01 11:58:57',1,'layout_controller.php','page=&cID=116&action=edit&','65.96.199.154'),(135,'2005-11-01 11:59:03',1,'layout_controller.php','page=&cID=116&action=save&layout_box_name=banner_box_all.php&','65.96.199.154'),(136,'2005-11-01 11:59:04',1,'layout_controller.php','page=&cID=116&','65.96.199.154'),(137,'2005-11-01 11:59:31',1,'layout_controller.php','page=&cID=116&action=edit&','65.96.199.154'),(138,'2005-11-01 11:59:36',1,'layout_controller.php','page=&cID=116&action=save&layout_box_name=banner_box_all.php&','65.96.199.154'),(139,'2005-11-01 11:59:36',1,'layout_controller.php','page=&cID=116&','65.96.199.154'),(140,'2005-11-01 11:59:44',1,'layout_controller.php','page=&cID=116&action=edit&','65.96.199.154'),(141,'2005-11-01 11:59:53',1,'layout_controller.php','page=&cID=116&action=save&layout_box_name=banner_box_all.php&','65.96.199.154'),(142,'2005-11-01 11:59:53',1,'layout_controller.php','page=&cID=116&','65.96.199.154'),(143,'2005-11-01 12:00:14',1,'layout_controller.php','page=&cID=19&','65.96.199.154'),(144,'2005-11-01 12:00:15',1,'layout_controller.php','page=&cID=19&action=edit&','65.96.199.154'),(145,'2005-11-01 12:00:18',1,'layout_controller.php','page=&cID=19&action=save&layout_box_name=search_header.php&','65.96.199.154'),(146,'2005-11-01 12:00:18',1,'layout_controller.php','page=&cID=19&','65.96.199.154'),(147,'2005-11-01 12:00:30',1,'layout_controller.php','page=&cID=1&','65.96.199.154'),(148,'2005-11-01 12:00:30',1,'layout_controller.php','page=&cID=1&','65.96.199.154'),(149,'2005-11-01 12:00:32',1,'layout_controller.php','page=&cID=1&action=edit&','65.96.199.154'),(150,'2005-11-01 12:00:39',1,'layout_controller.php','page=&cID=1&action=save&layout_box_name=banner_box.php&','65.96.199.154'),(151,'2005-11-01 12:00:39',1,'layout_controller.php','page=&cID=1&','65.96.199.154'),(152,'2005-11-01 12:46:19',1,'template_select.php','','65.96.199.154'),(153,'2005-11-01 12:46:26',1,'template_select.php','page=1&tID=1&action=edit&','65.96.199.154'),(154,'2005-11-01 12:47:41',1,'template_select.php','','65.96.199.154'),(155,'2005-11-01 12:48:38',1,'store_manager.php','','65.96.199.154'),(156,'2005-11-01 12:48:46',1,'developers_tool_kit.php','','65.96.199.154'),(157,'2005-11-01 12:49:07',1,'template_select.php','','65.96.199.154'),(158,'2005-11-01 12:49:13',1,'template_select.php','page=1&action=new&','65.96.199.154'),(159,'2005-11-01 12:49:22',1,'template_select.php','page=1&tID=1&','65.96.199.154'),(160,'2005-11-01 12:49:27',1,'template_select.php','page=1&action=new&','65.96.199.154'),(161,'2005-11-11 14:15:46',1,'template_select.php','','65.96.199.153'),(162,'2006-02-08 14:21:36',1,'alt_nav.php','','65.96.199.153'),(163,'2006-04-11 14:08:31',1,'configuration.php','gID=8&','65.96.199.153'),(164,'2006-04-11 14:08:34',1,'configuration.php','gID=8&cID=170&action=edit&','65.96.199.153');
/*!40000 ALTER TABLE `zen_admin_activity_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_authorizenet`
--

DROP TABLE IF EXISTS `zen_authorizenet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_authorizenet` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL DEFAULT '0',
  `order_id` int(11) NOT NULL DEFAULT '0',
  `response_code` int(1) NOT NULL DEFAULT '0',
  `response_text` varchar(255) NOT NULL DEFAULT '',
  `authorization_type` text NOT NULL,
  `transaction_id` int(15) NOT NULL DEFAULT '0',
  `sent` longtext NOT NULL,
  `received` longtext NOT NULL,
  `time` varchar(50) NOT NULL DEFAULT '',
  `session_id` varchar(255) NOT NULL DEFAULT '',
  UNIQUE KEY `idx_auth_net_id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_authorizenet`
--

LOCK TABLES `zen_authorizenet` WRITE;
/*!40000 ALTER TABLE `zen_authorizenet` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_authorizenet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_banners`
--

DROP TABLE IF EXISTS `zen_banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_banners` (
  `banners_id` int(11) NOT NULL AUTO_INCREMENT,
  `banners_title` varchar(64) NOT NULL DEFAULT '',
  `banners_url` varchar(255) NOT NULL DEFAULT '',
  `banners_image` varchar(64) NOT NULL DEFAULT '',
  `banners_group` varchar(15) NOT NULL DEFAULT '',
  `banners_html_text` text,
  `expires_impressions` int(7) DEFAULT '0',
  `expires_date` datetime DEFAULT NULL,
  `date_scheduled` datetime DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT '0001-01-01 00:00:00',
  `date_status_change` datetime DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `banners_open_new_windows` int(1) NOT NULL DEFAULT '1',
  `banners_on_ssl` int(1) NOT NULL DEFAULT '1',
  `banners_sort_order` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`banners_id`),
  KEY `idx_status_group_zen` (`status`,`banners_group`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_banners`
--

LOCK TABLES `zen_banners` WRITE;
/*!40000 ALTER TABLE `zen_banners` DISABLE KEYS */;
INSERT INTO `zen_banners` (`banners_id`, `banners_title`, `banners_url`, `banners_image`, `banners_group`, `banners_html_text`, `expires_impressions`, `expires_date`, `date_scheduled`, `date_added`, `date_status_change`, `status`, `banners_open_new_windows`, `banners_on_ssl`, `banners_sort_order`) VALUES (1,'Zen Cart','http://www.zen-cart.com','banners/zencart_468_60_02.gif','Wide-Banners','',0,NULL,NULL,'2005-11-01 09:12:13',NULL,0,1,1,0),(2,'Zen Cart the art of e-commerce','http://www.zen-cart.com','banners/125zen_logo.gif','SideBox-Banners','',0,NULL,NULL,'2005-11-01 09:12:13',NULL,1,1,1,0),(3,'Zen Cart the art of e-commerce','http://www.zen-cart.com','banners/125x125_zen_logo.gif','SideBox-Banners','',0,NULL,NULL,'2005-11-01 09:12:13',NULL,1,1,1,0),(4,'if you have to think ... you haven\'t been Zenned!','http://www.zen-cart.com','banners/think_anim.gif','Wide-Banners','',0,NULL,NULL,'2005-11-01 09:12:13',NULL,0,1,1,0),(5,'Chain Reaction Web','http://www.chainreactionweb.com','banners/crw-zen-banner.gif','Wide-Banners','',0,NULL,NULL,'2005-11-01 09:12:13',NULL,0,1,1,0),(6,'Sashbox.net - the ultimate e-commerce hosting solution','http://www.sashbox.net','banners/sashbox_125x50.jpg','BannersAll','',0,NULL,NULL,'2005-11-01 09:12:13',NULL,0,1,1,20),(7,'Zen Cart the art of e-commerce','http://www.zen-cart.com','banners/bw_zen_88wide.gif','BannersAll','',0,NULL,NULL,'2005-11-01 09:12:13',NULL,0,1,1,10),(8,'Sashbox.net - the ultimate e-commerce hosting solution','http://www.sashbox.net','banners/sashbox_468x60.jpg','Wide-Banners','',0,NULL,NULL,'2005-11-01 09:12:13',NULL,0,1,1,0),(9,'Merrow Sewing Machines','http://www.merrow.com','logo_PHBB.jpg','BannersAll','',0,NULL,NULL,'2005-11-01 11:56:33',NULL,1,1,1,0);
/*!40000 ALTER TABLE `zen_banners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_banners_history`
--

DROP TABLE IF EXISTS `zen_banners_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_banners_history` (
  `banners_history_id` int(11) NOT NULL AUTO_INCREMENT,
  `banners_id` int(11) NOT NULL DEFAULT '0',
  `banners_shown` int(5) NOT NULL DEFAULT '0',
  `banners_clicked` int(5) NOT NULL DEFAULT '0',
  `banners_history_date` datetime NOT NULL DEFAULT '0001-01-01 00:00:00',
  PRIMARY KEY (`banners_history_id`),
  KEY `idx_banners_id_zen` (`banners_id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_banners_history`
--

LOCK TABLES `zen_banners_history` WRITE;
/*!40000 ALTER TABLE `zen_banners_history` DISABLE KEYS */;
INSERT INTO `zen_banners_history` (`banners_history_id`, `banners_id`, `banners_shown`, `banners_clicked`, `banners_history_date`) VALUES (1,3,26,0,'2005-11-01 09:12:13'),(2,7,27,0,'2005-11-01 09:12:13'),(3,6,27,0,'2005-11-01 09:12:13'),(4,2,32,0,'2005-11-01 09:12:13'),(5,4,9,0,'2005-11-01 09:12:13'),(6,5,8,0,'2005-11-01 09:12:13'),(7,8,12,0,'2005-11-01 09:12:26'),(8,1,4,0,'2005-11-01 09:14:37'),(9,9,6,0,'2005-11-01 11:59:07'),(10,2,1,0,'2005-11-02 10:22:46'),(11,9,1,0,'2005-11-02 10:22:47'),(12,2,2,0,'2005-11-10 16:43:10'),(13,9,2,0,'2005-11-10 16:43:10'),(14,2,2,0,'2005-11-11 14:12:53'),(15,9,5,0,'2005-11-11 14:12:54'),(16,3,3,0,'2005-11-11 14:13:05'),(17,3,3,0,'2006-02-08 14:20:13'),(18,9,4,0,'2006-02-08 14:20:14'),(19,2,1,0,'2006-02-08 14:21:13'),(20,2,1,0,'2006-04-04 15:25:04'),(21,9,1,0,'2006-04-04 15:25:04'),(22,3,1,0,'2006-04-11 14:07:35'),(23,9,2,0,'2006-04-11 14:07:35'),(24,2,1,0,'2006-04-11 14:07:39');
/*!40000 ALTER TABLE `zen_banners_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_categories`
--

DROP TABLE IF EXISTS `zen_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_categories` (
  `categories_id` int(11) NOT NULL AUTO_INCREMENT,
  `categories_image` varchar(64) DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `sort_order` int(3) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `last_modified` datetime DEFAULT NULL,
  `categories_status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`categories_id`),
  KEY `idx_parent_id_cat_id_zen` (`parent_id`,`categories_id`),
  KEY `idx_status_zen` (`categories_status`),
  KEY `idx_categories_parent_id_zen` (`parent_id`),
  KEY `idx_sort_order_zen` (`sort_order`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_categories`
--

LOCK TABLES `zen_categories` WRITE;
/*!40000 ALTER TABLE `zen_categories` DISABLE KEYS */;
INSERT INTO `zen_categories` (`categories_id`, `categories_image`, `parent_id`, `sort_order`, `date_added`, `last_modified`, `categories_status`) VALUES (1,NULL,0,0,'2005-11-01 11:31:47',NULL,1);
/*!40000 ALTER TABLE `zen_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_categories_description`
--

DROP TABLE IF EXISTS `zen_categories_description`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_categories_description` (
  `categories_id` int(11) NOT NULL DEFAULT '0',
  `language_id` int(11) NOT NULL DEFAULT '1',
  `categories_name` varchar(32) NOT NULL DEFAULT '',
  `categories_description` text NOT NULL,
  PRIMARY KEY (`categories_id`,`language_id`),
  KEY `idx_categories_name_zen` (`categories_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_categories_description`
--

LOCK TABLES `zen_categories_description` WRITE;
/*!40000 ALTER TABLE `zen_categories_description` DISABLE KEYS */;
INSERT INTO `zen_categories_description` (`categories_id`, `language_id`, `categories_name`, `categories_description`) VALUES (1,1,'Loopers','Merrow Loopers');
/*!40000 ALTER TABLE `zen_categories_description` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_configuration`
--

DROP TABLE IF EXISTS `zen_configuration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_configuration` (
  `configuration_id` int(11) NOT NULL AUTO_INCREMENT,
  `configuration_title` text NOT NULL,
  `configuration_key` varchar(255) NOT NULL DEFAULT '',
  `configuration_value` text NOT NULL,
  `configuration_description` text NOT NULL,
  `configuration_group_id` int(11) NOT NULL DEFAULT '0',
  `sort_order` int(5) DEFAULT NULL,
  `last_modified` datetime DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT '0001-01-01 00:00:00',
  `use_function` text,
  `set_function` text,
  PRIMARY KEY (`configuration_id`),
  UNIQUE KEY `unq_config_key_zen` (`configuration_key`),
  KEY `idx_key_value_zen` (`configuration_key`,`configuration_value`(10)),
  KEY `idx_cfg_grp_id_zen` (`configuration_group_id`)
) ENGINE=MyISAM AUTO_INCREMENT=458 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_configuration`
--

LOCK TABLES `zen_configuration` WRITE;
/*!40000 ALTER TABLE `zen_configuration` DISABLE KEYS */;
INSERT INTO `zen_configuration` (`configuration_id`, `configuration_title`, `configuration_key`, `configuration_value`, `configuration_description`, `configuration_group_id`, `sort_order`, `last_modified`, `date_added`, `use_function`, `set_function`) VALUES (1,'Store Name','STORE_NAME','merrow.com','The name of my store',1,1,NULL,'2005-11-01 09:12:13',NULL,NULL),(2,'Store Owner','STORE_OWNER','admin','The name of my store owner',1,2,NULL,'2005-11-01 09:12:13',NULL,NULL),(3,'Country','STORE_COUNTRY','223','The country my store is located in <br /><br /><strong>Note: Please remember to update the store zone.</strong>',1,6,NULL,'2005-11-01 09:12:13','zen_get_country_name','zen_cfg_pull_down_country_list('),(4,'Zone','STORE_ZONE','32','The zone my store is located in',1,7,'2005-11-01 09:24:48','2005-11-01 09:12:13','zen_cfg_get_zone_name','zen_cfg_pull_down_zone_list('),(5,'Expected Sort Order','EXPECTED_PRODUCTS_SORT','desc','This is the sort order used in the expected products box.',1,8,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'asc\', \'desc\'), '),(6,'Expected Sort Field','EXPECTED_PRODUCTS_FIELD','date_expected','The column to sort by in the expected products box.',1,9,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'products_name\', \'date_expected\'), '),(7,'Switch To Default Language Currency','USE_DEFAULT_LANGUAGE_CURRENCY','false','Automatically switch to the language\'s currency when it is changed',1,10,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(8,'Use Search-Engine Safe URLs (still in development)','SEARCH_ENGINE_FRIENDLY_URLS','false','Use search-engine safe urls for all site links',6,12,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(9,'Display Cart After Adding Product','DISPLAY_CART','true','Display the shopping cart after adding a product (or return back to their origin)',1,14,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(10,'Default Search Operator','ADVANCED_SEARCH_DEFAULT_OPERATOR','and','Default search operators',1,17,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'and\', \'or\'), '),(11,'Store Address and Phone','STORE_NAME_ADDRESS','Merrow Sewing Machine Company\r\n11 Patterson Brook Rd\r\nWareham, MA 02576 USA','This is the Store Name, Address and Phone used on printable documents and displayed online',1,18,'2005-11-01 09:25:17','2005-11-01 09:12:13',NULL,'zen_cfg_textarea('),(12,'Show Category Counts','SHOW_COUNTS','true','Count recursively how many products are in each category',1,19,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(13,'Tax Decimal Places','TAX_DECIMAL_PLACES','0','Pad the tax value this amount of decimal places',1,20,NULL,'2005-11-01 09:12:13',NULL,NULL),(14,'Display Prices with Tax','DISPLAY_PRICE_WITH_TAX','false','Display prices with tax included (true) or add the tax at the end (false)',1,21,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(15,'Display Prices with Tax in Admin','DISPLAY_PRICE_WITH_TAX_ADMIN','false','Display prices with tax included (true) or add the tax at the end (false) in Admin(Invoices)',1,21,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(16,'Basis of Product Tax','STORE_PRODUCT_TAX_BASIS','Shipping','On what basis is Product Tax calculated. Options are<br />Shipping - Based on customers Shipping Address<br />Billing Based on customers Billing address<br />Store - Based on Store address if Billing/Shipping Zone equals Store zone',1,21,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'Shipping\', \'Billing\', \'Store\'), '),(17,'Basis of Shipping Tax','STORE_SHIPPING_TAX_BASIS','Shipping','On what basis is Shipping Tax calculated. Options are<br />Shipping - Based on customers Shipping Address<br />Billing Based on customers Billing address<br />Store - Based on Store address if Billing/Shipping Zone equals Store zone - Can be overriden by correctly written Shipping Module',1,21,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'Shipping\', \'Billing\', \'Store\'), '),(18,'Sales Tax Display Status','STORE_TAX_DISPLAY_STATUS','0','Always show Sales Tax even when amount is $0.00?<br />0= Off<br />1= On',1,21,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(19,'Admin Session Time Out in Seconds','SESSION_TIMEOUT_ADMIN','3600','Enter the time in seconds. Default=3600<br />Example: 3600= 1 hour<br /><br />Note: Too few seconds can result in timeout issues when adding/editing products',1,40,NULL,'2005-11-01 09:12:13',NULL,NULL),(20,'Admin Set max_execution_time for processes','GLOBAL_SET_TIME_LIMIT','60','Enter the time in seconds for how long the max_execution_time of processes should be. Default=60<br />Example: 60= 1 minute<br /><br />Note: Changing the time limit is only needed if you are having problems with the execution time of a process',1,42,NULL,'2005-11-01 09:12:13',NULL,NULL),(21,'Show if version update available','SHOW_VERSION_UPDATE_IN_HEADER','true','Automatically check to see if a new version of Zen-Cart is available. Enabling this can sometimes slow down the loading of Admin pages. (Displayed on main Index page after login, and Server Info page.)',1,44,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(22,'Store Status','STORE_STATUS','0','What is your Store Status<br />0= Normal Store<br />1= Showcase no prices<br />2= Showcase with prices',1,25,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\', \'2\'), '),(23,'Server Uptime','DISPLAY_SERVER_UPTIME','true','Displaying Server uptime can cause entries in error logs on some servers. (true = Display, false = don\'t display)',1,46,'2003-11-08 20:24:47','0001-01-01 00:00:00','','zen_cfg_select_option(array(\'true\', \'false\'),'),(24,'Missing Page Check','MISSING_PAGE_CHECK','true','Zen-Cart can check for missing pages in the URL and redirect to Index page. For debugging you may want to turn this off. (true = Check for missing pages, false = Don\'t check for missing pages)',1,48,'2003-11-08 20:24:47','0001-01-01 00:00:00','','zen_cfg_select_option(array(\'true\', \'false\'),'),(25,'HTML Editor','HTML_EDITOR_PREFERENCE','NONE','Please select the HTML/Rich-Text editor you wish to use for composing Admin-related emails, newsletters, and product descriptions',1,110,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'HTMLAREA\', \'NONE\'),'),(26,'Enable phpBB linkage?','PHPBB_LINKS_ENABLED','false','Should Zen Cart synchronize new account information to your (already-installed) phpBB forum?',1,120,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'),'),(27,'Show Category Counts - Admin','SHOW_COUNTS_ADMIN','true','Show Category Counts in Admin?',1,130,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(28,'First Name','ENTRY_FIRST_NAME_MIN_LENGTH','2','Minimum length of first name',2,1,NULL,'2005-11-01 09:12:13',NULL,NULL),(29,'Last Name','ENTRY_LAST_NAME_MIN_LENGTH','2','Minimum length of last name',2,2,NULL,'2005-11-01 09:12:13',NULL,NULL),(30,'Date of Birth','ENTRY_DOB_MIN_LENGTH','10','Minimum length of date of birth',2,3,NULL,'2005-11-01 09:12:13',NULL,NULL),(31,'E-Mail Address','ENTRY_EMAIL_ADDRESS_MIN_LENGTH','6','Minimum length of e-mail address',2,4,NULL,'2005-11-01 09:12:13',NULL,NULL),(32,'Street Address','ENTRY_STREET_ADDRESS_MIN_LENGTH','5','Minimum length of street address',2,5,NULL,'2005-11-01 09:12:13',NULL,NULL),(33,'Company','ENTRY_COMPANY_MIN_LENGTH','2','Minimum length of company name',2,6,NULL,'2005-11-01 09:12:13',NULL,NULL),(34,'Post Code','ENTRY_POSTCODE_MIN_LENGTH','4','Minimum length of post code',2,7,NULL,'2005-11-01 09:12:13',NULL,NULL),(35,'City','ENTRY_CITY_MIN_LENGTH','3','Minimum length of city',2,8,NULL,'2005-11-01 09:12:13',NULL,NULL),(36,'State','ENTRY_STATE_MIN_LENGTH','2','Minimum length of state',2,9,NULL,'2005-11-01 09:12:13',NULL,NULL),(37,'Telephone Number','ENTRY_TELEPHONE_MIN_LENGTH','3','Minimum length of telephone number',2,10,NULL,'2005-11-01 09:12:13',NULL,NULL),(38,'Password','ENTRY_PASSWORD_MIN_LENGTH','5','Minimum length of password',2,11,NULL,'2005-11-01 09:12:13',NULL,NULL),(39,'Credit Card Owner Name','CC_OWNER_MIN_LENGTH','3','Minimum length of credit card owner name',2,12,NULL,'2005-11-01 09:12:13',NULL,NULL),(40,'Credit Card Number','CC_NUMBER_MIN_LENGTH','10','Minimum length of credit card number',2,13,NULL,'2005-11-01 09:12:13',NULL,NULL),(41,'Credit Card CVV Number','CC_CVV_MIN_LENGTH','3','Minimum length of credit card CVV number',2,13,NULL,'2005-11-01 09:12:13',NULL,NULL),(42,'Product Review Text','REVIEW_TEXT_MIN_LENGTH','50','Minimum length of product review text',2,14,NULL,'2005-11-01 09:12:13',NULL,NULL),(43,'Best Sellers','MIN_DISPLAY_BESTSELLERS','1','Minimum number of best sellers to display',2,15,NULL,'2005-11-01 09:12:13',NULL,NULL),(44,'Also Purchased Products','MIN_DISPLAY_ALSO_PURCHASED','1','Minimum number of products to display in the \'This Customer Also Purchased\' box',2,16,NULL,'2005-11-01 09:12:13',NULL,NULL),(45,'Nick Name','ENTRY_NICK_MIN_LENGTH','3','Minimum length of Nick Name',2,1,NULL,'2005-11-01 09:12:13',NULL,NULL),(46,'Address Book Entries','MAX_ADDRESS_BOOK_ENTRIES','5','Maximum address book entries a customer is allowed to have',3,1,NULL,'2005-11-01 09:12:13',NULL,NULL),(47,'Search Results Per Page','MAX_DISPLAY_SEARCH_RESULTS','20','Number of products to list on a search result page',3,2,NULL,'2005-11-01 09:12:13',NULL,NULL),(48,'Prev/Next Navigation Page Links','MAX_DISPLAY_PAGE_LINKS','5','Number of \'number\' links use for page-sets',3,3,NULL,'2005-11-01 09:12:13',NULL,NULL),(49,'Products on Special ','MAX_DISPLAY_SPECIAL_PRODUCTS','9','Number of products on special to display',3,4,NULL,'2005-11-01 09:12:13',NULL,NULL),(50,'New Products Module','MAX_DISPLAY_NEW_PRODUCTS','9','Number of new products to display in a category',3,5,NULL,'2005-11-01 09:12:13',NULL,NULL),(51,'Upcoming Products ','MAX_DISPLAY_UPCOMING_PRODUCTS','10','Number of \'upcoming\' products to display',3,6,NULL,'2005-11-01 09:12:13',NULL,NULL),(52,'Manufacturers List - Scroll Box Size/Style','MAX_MANUFACTURERS_LIST','3','Number of manufacturers names to be displayed in the scroll box window. Setting this to 1 or 0 will display a dropdown list.',3,7,NULL,'2005-11-01 09:12:13',NULL,NULL),(53,'Manufacturers List - Verify Product Exist','PRODUCTS_MANUFACTURERS_STATUS','1','Verify that at least 1 product exists and is active for the manufacturer name to show<br /><br />Note: When this feature is ON it can produce slower results on sites with a large number of products and/or manufacturers<br />0= off 1= on',3,7,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(54,'Music Genre List - Scroll Box Size/Style','MAX_MUSIC_GENRES_LIST','3','Number of music genre names to be displayed in the scroll box window. Setting this to 1 or 0 will display a dropdown list.',3,7,NULL,'2005-11-01 09:12:13',NULL,NULL),(55,'Record Company List - Scroll Box Size/Style','MAX_RECORD_COMPANY_LIST','3','Number of record company names to be displayed in the scroll box window. Setting this to 1 or 0 will display a dropdown list.',3,7,NULL,'2005-11-01 09:12:13',NULL,NULL),(56,'Length of Record Company Name','MAX_DISPLAY_RECORD_COMPANY_NAME_LEN','15','Used in record companies box; maximum length of record company name to display. Longer names will be truncated.',3,8,NULL,'2005-11-01 09:12:13',NULL,NULL),(57,'Length of Music Genre Name','MAX_DISPLAY_MUSIC_GENRES_NAME_LEN','15','Used in music genres box; maximum length of music genre name to display. Longer names will be truncated.',3,8,NULL,'2005-11-01 09:12:13',NULL,NULL),(58,'Length of Manufacturers Name','MAX_DISPLAY_MANUFACTURER_NAME_LEN','15','Used in manufacturers box; maximum length of manufacturers name to display. Longer names will be truncated.',3,8,NULL,'2005-11-01 09:12:13',NULL,NULL),(59,'New Product Reviews Per Page','MAX_DISPLAY_NEW_REVIEWS','6','Number of new reviews to display on each page',3,9,NULL,'2005-11-01 09:12:13',NULL,NULL),(60,'Random Product Reviews For Box','MAX_RANDOM_SELECT_REVIEWS','10','Number of random product reviews to rotate in the box',3,10,NULL,'2005-11-01 09:12:13',NULL,NULL),(61,'Random New Products For Box','MAX_RANDOM_SELECT_NEW','10','Number of random new product to display in box',3,11,NULL,'2005-11-01 09:12:13',NULL,NULL),(62,'Random Products On Special For Box','MAX_RANDOM_SELECT_SPECIALS','10','Number of random products on special to display in box',3,12,NULL,'2005-11-01 09:12:13',NULL,NULL),(63,'Categories To List Per Row','MAX_DISPLAY_CATEGORIES_PER_ROW','3','How many categories to list per row',3,13,NULL,'2005-11-01 09:12:13',NULL,NULL),(64,'New Products Listing- Number Per Page','MAX_DISPLAY_PRODUCTS_NEW','10','Number of new products\' listings per page',3,14,NULL,'2005-11-01 09:12:13',NULL,NULL),(65,'Best Sellers For Box','MAX_DISPLAY_BESTSELLERS','10','Number of best sellers to display in box',3,15,NULL,'2005-11-01 09:12:13',NULL,NULL),(66,'Also Purchased Products','MAX_DISPLAY_ALSO_PURCHASED','6','Number of products to display in the \'This Customer Also Purchased\' box',3,16,NULL,'2005-11-01 09:12:13',NULL,NULL),(67,'Recent Purchases Box- NOTE: box is disabled ','MAX_DISPLAY_PRODUCTS_IN_ORDER_HISTORY_BOX','6','Number of products to display in the recent purchases box',3,17,NULL,'2005-11-01 09:12:13',NULL,NULL),(68,'Customer Order History List Per Page','MAX_DISPLAY_ORDER_HISTORY','10','Number of orders to display in the order history list in \'My Account\'',3,18,NULL,'2005-11-01 09:12:13',NULL,NULL),(69,'Maximum Display of Customers on Customers Page','MAX_DISPLAY_SEARCH_RESULTS_CUSTOMER','20','',3,19,NULL,'2005-11-01 09:12:13',NULL,NULL),(70,'Maximum Display of Orders on Orders Page','MAX_DISPLAY_SEARCH_RESULTS_ORDERS','20','',3,20,NULL,'2005-11-01 09:12:13',NULL,NULL),(71,'Maximum Display of Products on Reports','MAX_DISPLAY_SEARCH_RESULTS_REPORTS','20','',3,21,NULL,'2005-11-01 09:12:13',NULL,NULL),(72,'Maximum Categories Products Display List','MAX_DISPLAY_RESULTS_CATEGORIES','10','Number of products to list per screen',3,22,NULL,'2005-11-01 09:12:13',NULL,NULL),(73,'Products Listing- Number Per Page','MAX_DISPLAY_PRODUCTS_LISTING','10','Maximum Number of Products to list per page on main page',3,30,NULL,'2005-11-01 09:12:13',NULL,NULL),(74,'Products Attributes - Option Names and Values Display','MAX_ROW_LISTS_OPTIONS','10','Maximum number of option names and values to display in the products attributes page',3,24,NULL,'2005-11-01 09:12:13',NULL,NULL),(75,'Products Attributes - Attributes Controller Display','MAX_ROW_LISTS_ATTRIBUTES_CONTROLLER','30','Maximum number of attributes to display in the Attributes Controller page',3,25,NULL,'2005-11-01 09:12:13',NULL,NULL),(76,'Products Attributes - Downloads Manager Display','MAX_DISPLAY_SEARCH_RESULTS_DOWNLOADS_MANAGER','30','Maximum number of attributes downloads to display in the Downloads Manager page',3,26,NULL,'2005-11-01 09:12:13',NULL,NULL),(77,'Featured Products - Number to Display Admin','MAX_DISPLAY_SEARCH_RESULTS_FEATURED_ADMIN','10','Number of featured products to list per screen - Admin',3,27,NULL,'2005-11-01 09:12:13',NULL,NULL),(78,'Maximum Display of Featured Products - Main Page','MAX_DISPLAY_SEARCH_RESULTS_FEATURED','9','Number of featured products to list on main page',3,28,NULL,'2005-11-01 09:12:13',NULL,NULL),(79,'Maximum Display of Featured Products Page','MAX_DISPLAY_PRODUCTS_FEATURED_PRODUCTS','10','Number of featured products to list per screen',3,29,NULL,'2005-11-01 09:12:13',NULL,NULL),(80,'Random Featured Products For Box','MAX_RANDOM_SELECT_FEATURED_PRODUCTS','10','Number of random featured products to display in box',3,30,NULL,'2005-11-01 09:12:13',NULL,NULL),(81,'Maximum Display of Specials Products - Main Page','MAX_DISPLAY_SPECIAL_PRODUCTS_INDEX','9','Number of special products to list on main page',3,31,NULL,'2005-11-01 09:12:13',NULL,NULL),(82,'New Product Listing - Limited to ...','SHOW_NEW_PRODUCTS_LIMIT','0','Limit the New Product Listing to<br />0= All desc<br />1= Current Month<br />30= 30 Days<br />60= 60 Days<br />90= 90 Days<br />120= 120 Days',3,40,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\', \'30\', \'60\', \'90\', \'120\'), '),(83,'Maximum Display of Products All Page','MAX_DISPLAY_PRODUCTS_ALL','10','Number of products to list per screen',3,45,NULL,'2005-11-01 09:12:13',NULL,NULL),(84,'Maximum Display of Language Flags in Language Side Box','MAX_LANGUAGE_FLAGS_COLUMNS','3','Number of Language Flags per Row',3,50,NULL,'2005-11-01 09:12:13',NULL,NULL),(85,'Maximum File Upload Size','MAX_FILE_UPLOAD_SIZE','2048000','What is the Maximum file size for uploads?<br />Default= 2048000',3,60,NULL,'2005-11-01 09:12:13',NULL,NULL),(86,'Allowed Filename Extensions for uploading','UPLOAD_FILENAME_EXTENSIONS','jpg,jpeg,gif,png,eps,cdr,ai,pdf,tif,tiff,bmp,zip','List the permissible filetypes (filename extensions) to be allowed when files are uploaded to your site by customers. Separate multiple values with commas(,). Do not include the dot(.).<br /><br />Suggested setting: \"jpg,jpeg,gif,png,eps,cdr,ai,pdf,tif,tiff,bmp,zip\"',3,61,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_textarea('),(87,'Maximum Orders Detail Display on Admin Orders Listing','MAX_DISPLAY_RESULTS_ORDERS_DETAILS_LISTING','0','Maximum number of Order Details<br />0 = Unlimited',3,65,NULL,'2005-11-01 09:12:13',NULL,NULL),(88,'Maximum Display Columns Products to Multiple Categories Manager','MAX_DISPLAY_PRODUCTS_TO_CATEGORIES_COLUMNS','3','Maximum Display Columns Products to Multiple Categories Manager<br />3 = Default',3,70,NULL,'2005-11-01 09:12:13',NULL,NULL),(89,'Small Image Width','SMALL_IMAGE_WIDTH','100','The pixel width of small images',4,1,NULL,'2005-11-01 09:12:13',NULL,NULL),(90,'Small Image Height','SMALL_IMAGE_HEIGHT','80','The pixel height of small images',4,2,NULL,'2005-11-01 09:12:13',NULL,NULL),(91,'Heading Image Width','HEADING_IMAGE_WIDTH','57','The pixel width of heading images',4,3,NULL,'2005-11-01 09:12:13',NULL,NULL),(92,'Heading Image Height','HEADING_IMAGE_HEIGHT','40','The pixel height of heading images',4,4,NULL,'2005-11-01 09:12:13',NULL,NULL),(93,'Subcategory Image Width','SUBCATEGORY_IMAGE_WIDTH','100','The pixel width of subcategory images',4,5,NULL,'2005-11-01 09:12:13',NULL,NULL),(94,'Subcategory Image Height','SUBCATEGORY_IMAGE_HEIGHT','57','The pixel height of subcategory images',4,6,NULL,'2005-11-01 09:12:13',NULL,NULL),(95,'Calculate Image Size','CONFIG_CALCULATE_IMAGE_SIZE','true','Calculate the size of images?',4,7,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(96,'Image Required','IMAGE_REQUIRED','true','Enable to display broken images. Good for development.',4,8,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(97,'Image - Shopping Cart Status','IMAGE_SHOPPING_CART_STATUS','1','Show product image in the shopping cart?<br />0= off 1= on',4,9,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(98,'Image - Shopping Cart Width','IMAGE_SHOPPING_CART_WIDTH','50','Default = 50',4,10,NULL,'2005-11-01 09:12:13',NULL,NULL),(99,'Image - Shopping Cart Height','IMAGE_SHOPPING_CART_HEIGHT','40','Default = 40',4,11,NULL,'2005-11-01 09:12:13',NULL,NULL),(100,'Product Info - Image Width','MEDIUM_IMAGE_WIDTH','150','The pixel width of Product Info images',4,20,NULL,'2005-11-01 09:12:13',NULL,NULL),(101,'Product Info - Image Height','MEDIUM_IMAGE_HEIGHT','120','The pixel height of Product Info images',4,21,NULL,'2005-11-01 09:12:13',NULL,NULL),(102,'Product Info - Image Medium Suffix','IMAGE_SUFFIX_MEDIUM','_MED','Product Info Medium Image Suffix<br />Default = _MED',4,22,NULL,'2005-11-01 09:12:13',NULL,NULL),(103,'Product Info - Image Large Suffix','IMAGE_SUFFIX_LARGE','_LRG','Product Info Large Image Suffix<br />Default = _LRG',4,23,NULL,'2005-11-01 09:12:13',NULL,NULL),(104,'Product Info - Number of Additional Images per Row','IMAGES_AUTO_ADDED','3','Product Info - Enter the number of additional images to display per row<br />Default = 3',4,30,NULL,'2005-11-01 09:12:13',NULL,NULL),(105,'Image - Product Listing Width','IMAGE_PRODUCT_LISTING_WIDTH','100','Default = 100',4,40,NULL,'2005-11-01 09:12:13',NULL,NULL),(106,'Image - Product Listing Height','IMAGE_PRODUCT_LISTING_HEIGHT','80','Default = 80',4,41,NULL,'2005-11-01 09:12:13',NULL,NULL),(107,'Image - Product New Listing Width','IMAGE_PRODUCT_NEW_LISTING_WIDTH','100','Default = 100',4,42,NULL,'2005-11-01 09:12:13',NULL,NULL),(108,'Image - Product New Listing Height','IMAGE_PRODUCT_NEW_LISTING_HEIGHT','80','Default = 80',4,43,NULL,'2005-11-01 09:12:13',NULL,NULL),(109,'Image - New Products Width','IMAGE_PRODUCT_NEW_WIDTH','100','Default = 100',4,44,NULL,'2005-11-01 09:12:13',NULL,NULL),(110,'Image - New Products Height','IMAGE_PRODUCT_NEW_HEIGHT','80','Default = 80',4,45,NULL,'2005-11-01 09:12:13',NULL,NULL),(111,'Image - Featured Products Width','IMAGE_FEATURED_PRODUCTS_LISTING_WIDTH','100','Default = 100',4,46,NULL,'2005-11-01 09:12:13',NULL,NULL),(112,'Image - Featured Products Height','IMAGE_FEATURED_PRODUCTS_LISTING_HEIGHT','80','Default = 80',4,47,NULL,'2005-11-01 09:12:13',NULL,NULL),(113,'Image - Product All Listing Width','IMAGE_PRODUCT_ALL_LISTING_WIDTH','100','Default = 100',4,48,NULL,'2005-11-01 09:12:13',NULL,NULL),(114,'Image - Product All Listing Height','IMAGE_PRODUCT_ALL_LISTING_HEIGHT','80','Default = 80',4,49,NULL,'2005-11-01 09:12:13',NULL,NULL),(115,'Product Image - No Image Status','PRODUCTS_IMAGE_NO_IMAGE_STATUS','1','Use automatic No Image when none is added to product<br />0= off<br />1= On',4,60,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(116,'Product Image - No Image picture','PRODUCTS_IMAGE_NO_IMAGE','no_picture.gif','Use automatic No Image when none is added to product<br />Default = no_picture.gif',4,61,NULL,'2005-11-01 09:12:13',NULL,NULL),(117,'Image - Use Proportional Images on Products and Categories','PROPORTIONAL_IMAGES_STATUS','1','Use Proportional Images on Products and Categories?<br /><br />NOTE: Do not use 0 height or width settings for Proportion Images<br />0= off 1= on',4,75,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(118,'Email Salutation','ACCOUNT_GENDER','true','Display salutation choice during account creation and with account information',5,1,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(119,'Date of Birth','ACCOUNT_DOB','true','Display date of birth field during account creation and with account information',5,2,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(120,'Company','ACCOUNT_COMPANY','true','Display company field during account creation and with account information',5,3,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(121,'Address Line 2','ACCOUNT_SUBURB','true','Display address line 2 field during account creation and with account information',5,4,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(122,'State','ACCOUNT_STATE','true','Display state field during account creation and with account information',5,5,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(123,'Create Account Default Country ID','SHOW_CREATE_ACCOUNT_DEFAULT_COUNTRY','223','Set Create Account Default Country ID to:<br />Default is 223',5,6,NULL,'2005-11-01 09:12:13','zen_get_country_name','zen_cfg_pull_down_country_list_none('),(124,'Show Newsletter Checkbox','ACCOUNT_NEWSLETTER_STATUS','1','Show Newsletter Checkbox<br />0= off<br />1= Display Unchecked<br />2= Display Checked<br /><strong>Note: Defaulting this to accepted may be in violation of certain regulations for your state or country</strong>',5,45,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\', \'2\'), '),(125,'Customer Default Email Preference','ACCOUNT_EMAIL_PREFERENCE','0','Set the Default Customer Default Email Preference<br />0= Text<br />1= HTML<br /><strong>Note: Defaulting this to accepted may be in violation of certain regulations for your state or country</strong>',5,46,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(126,'Customer Product Notification Status','CUSTOMERS_PRODUCTS_NOTIFICATION_STATUS','1','Customer should be asked about product notifications after checkout success<br />0= Never ask<br />1= Ask, unless already set to global<br /><br />Note: Sidebox must be turned off separately',5,50,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(127,'Customer Shop Status - View Shop and Prices','CUSTOMERS_APPROVAL','0','Customer must be approved to shop<br />0= Not required<br />1= Must login to browse<br />2= May browse but no prices unless logged in<br />3= Showroom Only<br /><br />It is recommended that Option 2 be used for the purposes of Spiders if you wish customers to login to see prices.',5,55,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\', \'2\', \'3\'), '),(128,'Customer Approval Status - Authorization Pending','CUSTOMERS_APPROVAL_AUTHORIZATION','0','Customer must be Authorized to shop<br />0= Not required<br />1= Must be Authorized to Browse<br />2= May browse but no prices unless Authorized<br />3= Customer May Browse and May see Prices but Must be Authorized to Buy<br /><br />It is recommended that Option 2 or 3 be used for the purposes of Spiders',5,65,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\', \'2\', \'3\'), '),(129,'Customer Authorization: filename','CUSTOMERS_AUTHORIZATION_FILENAME','customers_authorization','Customer Authorization filename<br />Note: Do not include the extention<br />Default=customers_authorization',5,66,NULL,'2005-11-01 09:12:13',NULL,''),(130,'Customer Authorization: Hide Header','CUSTOMERS_AUTHORIZATION_HEADER_OFF','false','Customer Authorization: Hide Header <br />(true=hide false=show)',5,67,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(131,'Customer Authorization: Hide Column Left','CUSTOMERS_AUTHORIZATION_COLUMN_LEFT_OFF','false','Customer Authorization: Hide Column Left <br />(true=hide false=show)',5,68,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(132,'Customer Authorization: Hide Column Right','CUSTOMERS_AUTHORIZATION_COLUMN_RIGHT_OFF','false','Customer Authorization: Hide Column Right <br />(true=hide false=show)',5,69,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(133,'Customer Authorization: Hide Footer','CUSTOMERS_AUTHORIZATION_FOOTER_OFF','false','Customer Authorization: Hide Footer <br />(true=hide false=show)',5,70,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(134,'Customer Authorization: Hide Prices','CUSTOMERS_AUTHORIZATION_PRICES_OFF','false','Customer Authorization: Hide Prices <br />(true=hide false=show)',5,71,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(135,'Customers Referral Status','CUSTOMERS_REFERRAL_STATUS','0','Customers Referral Code is created from<br />0= Off<br />1= 1st Discount Coupon Code used<br />2= Customer can add during create account or edit if blank<br /><br />NOTE: Once the Customers Referral Code has been set it can only be changed in the Admin Customer',5,80,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\', \'2\'), '),(136,'Installed Modules','MODULE_PAYMENT_INSTALLED','cc.php;cod.php','List of payment module filenames separated by a semi-colon. This is automatically updated. No need to edit. (Example: cc.php;cod.php;paypal.php)',6,0,NULL,'2005-11-01 09:12:13',NULL,NULL),(137,'Installed Modules','MODULE_ORDER_TOTAL_INSTALLED','ot_subtotal.php;ot_tax.php;ot_shipping.php;ot_gv.php;ot_coupon.php;ot_total.php','List of order_total module filenames separated by a semi-colon. This is automatically updated. No need to edit. (Example: ot_subtotal.php;ot_tax.php;ot_shipping.php;ot_total.php)',6,0,NULL,'2005-11-01 09:12:13',NULL,NULL),(138,'Installed Modules','MODULE_SHIPPING_INSTALLED','flat.php','List of shipping module filenames separated by a semi-colon. This is automatically updated. No need to edit. (Example: ups.php;flat.php;item.php)',6,0,NULL,'2005-11-01 09:12:13',NULL,NULL),(139,'Enable Cash On Delivery Module','MODULE_PAYMENT_COD_STATUS','True','Do you want to accept Cash On Delevery payments?',6,1,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'True\', \'False\'), '),(140,'Payment Zone','MODULE_PAYMENT_COD_ZONE','0','If a zone is selected, only enable this payment method for that zone.',6,2,NULL,'2005-11-01 09:12:13','zen_get_zone_class_title','zen_cfg_pull_down_zone_classes('),(141,'Sort order of display.','MODULE_PAYMENT_COD_SORT_ORDER','0','Sort order of display. Lowest is displayed first.',6,0,NULL,'2005-11-01 09:12:13',NULL,NULL),(142,'Set Order Status','MODULE_PAYMENT_COD_ORDER_STATUS_ID','0','Set the status of orders made with this payment module to this value',6,0,NULL,'2005-11-01 09:12:13','zen_get_order_status_name','zen_cfg_pull_down_order_statuses('),(143,'Enable Credit Card Module','MODULE_PAYMENT_CC_STATUS','True','Do you want to accept credit card payments?',6,0,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'True\', \'False\'), '),(144,'Split Credit Card E-Mail Address','MODULE_PAYMENT_CC_EMAIL','','If an e-mail address is entered, the middle digits of the credit card number will be sent to the e-mail address (the outside digits are stored in the database with the middle digits censored)',6,0,NULL,'2005-11-01 09:12:13',NULL,NULL),(145,'Collect & store the CVV number','MODULE_PAYMENT_CC_COLLECT_CVV','True','Do you want to collect the CVV number. Note: If you do the CVV number will be stored in the database in an encoded format.',6,0,NULL,'2004-01-11 22:55:51',NULL,'zen_cfg_select_option(array(\'True\', \'False\'),'),(146,'Store the Credit Card Number','MODULE_PAYMENT_CC_STORE_NUMBER','False','Do you want to store the Credit Card Number. Note: The Credit Card Number will be stored unenecrypted, and as such may represent a security problem',6,0,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'True\', \'False\'),'),(147,'Sort order of display.','MODULE_PAYMENT_CC_SORT_ORDER','0','Sort order of display. Lowest is displayed first.',6,0,NULL,'2005-11-01 09:12:13',NULL,NULL),(148,'Payment Zone','MODULE_PAYMENT_CC_ZONE','0','If a zone is selected, only enable this payment method for that zone.',6,2,NULL,'2005-11-01 09:12:13','zen_get_zone_class_title','zen_cfg_pull_down_zone_classes('),(149,'Set Order Status','MODULE_PAYMENT_CC_ORDER_STATUS_ID','0','Set the status of orders made with this payment module to this value',6,0,NULL,'2005-11-01 09:12:13','zen_get_order_status_name','zen_cfg_pull_down_order_statuses('),(150,'Enable Flat Shipping','MODULE_SHIPPING_FLAT_STATUS','True','Do you want to offer flat rate shipping?',6,0,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'True\', \'False\'), '),(151,'Shipping Cost','MODULE_SHIPPING_FLAT_COST','5.00','The shipping cost for all orders using this shipping method.',6,0,NULL,'2005-11-01 09:12:13',NULL,NULL),(152,'Tax Class','MODULE_SHIPPING_FLAT_TAX_CLASS','0','Use the following tax class on the shipping fee.',6,0,NULL,'2005-11-01 09:12:13','zen_get_tax_class_title','zen_cfg_pull_down_tax_classes('),(153,'Tax Basis','MODULE_SHIPPING_FLAT_TAX_BASIS','Shipping','On what basis is Shipping Tax calculated. Options are<br />Shipping - Based on customers Shipping Address<br />Billing Based on customers Billing address<br />Store - Based on Store address if Billing/Shipping Zone equals Store zone',6,0,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'Shipping\', \'Billing\', \'Store\'), '),(154,'Shipping Zone','MODULE_SHIPPING_FLAT_ZONE','0','If a zone is selected, only enable this shipping method for that zone.',6,0,NULL,'2005-11-01 09:12:13','zen_get_zone_class_title','zen_cfg_pull_down_zone_classes('),(155,'Sort Order','MODULE_SHIPPING_FLAT_SORT_ORDER','0','Sort order of display.',6,0,NULL,'2005-11-01 09:12:13',NULL,NULL),(156,'Default Currency','DEFAULT_CURRENCY','USD','Default Currency',6,0,NULL,'2005-11-01 09:12:13',NULL,NULL),(157,'Default Language','DEFAULT_LANGUAGE','en','Default Language',6,0,NULL,'2005-11-01 09:12:13',NULL,NULL),(158,'Default Order Status For New Orders','DEFAULT_ORDERS_STATUS_ID','1','When a new order is created, this order status will be assigned to it.',6,0,NULL,'2005-11-01 09:12:13',NULL,NULL),(159,'Admin configuration_key shows','ADMIN_CONFIGURATION_KEY_ON','0','Manually switch to value of 1 to see the configuration_key name in configuration displays',6,0,NULL,'2005-11-01 09:12:13',NULL,NULL),(160,'Country of Origin','SHIPPING_ORIGIN_COUNTRY','223','Select the country of origin to be used in shipping quotes.',7,1,NULL,'2005-11-01 09:12:13','zen_get_country_name','zen_cfg_pull_down_country_list('),(161,'Postal Code','SHIPPING_ORIGIN_ZIP','NONE','Enter the Postal Code (ZIP) of the Store to be used in shipping quotes. NOTE: For USA zip codes, only use your 5 digit zip code.',7,2,NULL,'2005-11-01 09:12:13',NULL,NULL),(162,'Enter the Maximum Package Weight you will ship','SHIPPING_MAX_WEIGHT','50','Carriers have a max weight limit for a single package. This is a common one for all.',7,3,NULL,'2005-11-01 09:12:13',NULL,NULL),(163,'Package Tare Small to Medium - added percentage:weight','SHIPPING_BOX_WEIGHT','0:3','What is the weight of typical packaging of small to medium packages?<br />Example: 10% + 1lb 10:1<br />10% + 0lbs 10:0<br />0% + 5lbs 0:5<br />0% + 0lbs 0:0',7,4,NULL,'2005-11-01 09:12:13',NULL,NULL),(164,'Larger packages - added packaging percentage:weight','SHIPPING_BOX_PADDING','10:0','What is the weight of typical packaging for Large packages?<br />Example: 10% + 1lb 10:1<br />10% + 0lbs 10:0<br />0% + 5lbs 0:5<br />0% + 0lbs 0:0',7,5,NULL,'2005-11-01 09:12:13',NULL,NULL),(165,'Display Number of Boxes and Weight Status','SHIPPING_BOX_WEIGHT_DISPLAY','3','Display Shipping Weight and Number of Boxes?<br /><br />0= off<br />1= Boxes Only<br />2= Weight Only<br />3= Both Boxes and Weight',7,15,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\', \'2\', \'3\'), '),(166,'Shipping Estimator Display Settings for Shopping Cart','SHOW_SHIPPING_ESTIMATOR_BUTTON','1','<br />0= Off<br />1= Display as Button on Shopping Cart',7,20,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(167,'Order Free Shipping 0 Weight Status','ORDER_WEIGHT_ZERO_STATUS','0','If there is no weight to the order, does the order have Free Shipping?<br />0= no<br />1= yes<br /><br />Note: When using Free Shipping, Enable the Free Shipping Module this will only show when shipping is free.',7,15,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(168,'Display Product Image','PRODUCT_LIST_IMAGE','1','Do you want to display the Product Image?',8,1,NULL,'2005-11-01 09:12:13',NULL,NULL),(169,'Display Product Manufacturer Name','PRODUCT_LIST_MANUFACTURER','0','Do you want to display the Product Manufacturer Name?',8,2,NULL,'2005-11-01 09:12:13',NULL,NULL),(170,'Display Product Model','PRODUCT_LIST_MODEL','0','Do you want to display the Product Model?',8,3,NULL,'2005-11-01 09:12:13',NULL,NULL),(171,'Display Product Name','PRODUCT_LIST_NAME','2','Do you want to display the Product Name?',8,4,NULL,'2005-11-01 09:12:13',NULL,NULL),(172,'Display Product Price/Add to Cart','PRODUCT_LIST_PRICE','3','Do you want to display the Product Price/Add to Cart',8,5,NULL,'2005-11-01 09:12:13',NULL,NULL),(173,'Display Product Quantity','PRODUCT_LIST_QUANTITY','0','Do you want to display the Product Quantity?',8,6,NULL,'2005-11-01 09:12:13',NULL,NULL),(174,'Display Product Weight','PRODUCT_LIST_WEIGHT','0','Do you want to display the Product Weight?',8,7,NULL,'2005-11-01 09:12:13',NULL,NULL),(175,'Display Product Price/Add to Cart Column Width','PRODUCTS_LIST_PRICE_WIDTH','125','Define the width of the Price/Add to Cart column<br />Default= 125',8,8,NULL,'2005-11-01 09:12:13',NULL,NULL),(176,'Display Category/Manufacturer Filter (0=off; 1=on)','PRODUCT_LIST_FILTER','1','Do you want to display the Category/Manufacturer Filter?',8,9,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(177,'Prev/Next Split Page Navigation (1-top, 2-bottom, 3-both)','PREV_NEXT_BAR_LOCATION','3','Sets the location of the Prev/Next Split Page Navigation',8,10,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'1\', \'2\', \'3\'), '),(178,'Display Product Listing Default Sort Order','PRODUCT_LISTING_DEFAULT_SORT_ORDER','','Product Listing Default sort order?<br />NOTE: Leave Blank for Product Sort Order. Sort the Product Listing in the order you wish for the default display to start in to get the sort order setting. Example: 2a',8,15,NULL,'2005-11-01 09:12:13',NULL,NULL),(179,'Display Product Add to Cart Button (0=off; 1=on)','PRODUCT_LIST_PRICE_BUY_NOW','1','Do you want to display the Add to Cart Button?',8,20,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(180,'Display Multiple Products Qty Box Status and Set Button Location','PRODUCT_LISTING_MULTIPLE_ADD_TO_CART','3','Do you want to display Add Multiple Products Qty Box and Set Button Location?<br />0= off<br />1= Top<br />2= Bottom<br />3= Both',8,25,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\', \'2\', \'3\'), '),(181,'Display Product Description','PRODUCT_LIST_DESCRIPTION','150','Do you want to display the Product Description?<br /><br />0= OFF<br />150= Suggested Length, or enter the maximum number of characters to display',8,30,NULL,'2005-11-01 09:12:13',NULL,NULL),(182,'Check stock level','STOCK_CHECK','true','Check to see if sufficent stock is available',9,1,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(183,'Subtract stock','STOCK_LIMITED','true','Subtract product in stock by product orders',9,2,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(184,'Allow Checkout','STOCK_ALLOW_CHECKOUT','true','Allow customer to checkout even if there is insufficient stock',9,3,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(185,'Mark product out of stock','STOCK_MARK_PRODUCT_OUT_OF_STOCK','***','Display something on screen so customer can see which product has insufficient stock',9,4,NULL,'2005-11-01 09:12:13',NULL,NULL),(186,'Stock Re-order level','STOCK_REORDER_LEVEL','5','Define when stock needs to be re-ordered',9,5,NULL,'2005-11-01 09:12:13',NULL,NULL),(187,'Products status in Catalog when out of stock should be set to','SHOW_PRODUCTS_SOLD_OUT','0','Show Products when out of stock<br /><br />0= set product status to OFF<br />1= leave product status ON',9,10,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(188,'Show Sold Out Image in place of Add to Cart','SHOW_PRODUCTS_SOLD_OUT_IMAGE','1','Show Sold Out Image instead of Add to Cart Button<br /><br />0= off<br />1= on',9,11,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(189,'Product Quantity Decimals','QUANTITY_DECIMALS','0','Allow how many decimals on Quantity<br /><br />0= off',9,15,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\', \'2\', \'3\'), '),(190,'Show Shopping Cart - Delete Checkboxes or Delete Button','SHOW_SHOPPING_CART_DELETE','3','Show on Shopping Cart Delete Button and/or Checkboxes<br /><br />1= Delete Button Only<br />2= Checkbox Only<br />3= Delete Button and Checkbox Only',9,20,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'1\', \'2\', \'3\'), '),(191,'Show Shopping Cart - Update Cart Button Location','SHOW_SHOPPING_CART_UPDATE','3','Show on Shopping Cart Update Cart Button Location as:<br /><br />1= Next to each Qty Box<br />2= Below all Products<br />3= Both Next to each Qty Box and Below all Products<br /><br />Note: this setting controls which of 3 tpl_shopping_cart_default files are called',9,22,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'1\', \'2\', \'3\'), '),(192,'Store Page Parse Time','STORE_PAGE_PARSE_TIME','false','Store the time it takes to parse a page',10,1,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(193,'Log Destination','STORE_PAGE_PARSE_TIME_LOG','/var/log/www/zen/page_parse_time.log','Directory and filename of the page parse time log',10,2,NULL,'2005-11-01 09:12:13',NULL,NULL),(194,'Log Date Format','STORE_PARSE_DATE_TIME_FORMAT','%d/%m/%Y %H:%M:%S','The date format',10,3,NULL,'2005-11-01 09:12:13',NULL,NULL),(195,'Display The Page Parse Time','DISPLAY_PAGE_PARSE_TIME','true','Display the page parse time on the bottom of each page<br />You do not need to store the times to display them in the Catalog',10,4,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(196,'Store Database Queries','STORE_DB_TRANSACTIONS','false','Store the database queries in the page parse time log (PHP4 only)',10,5,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(197,'E-Mail Transport Method','EMAIL_TRANSPORT','sendmail','Defines if this server uses a local connection to sendmail or uses an SMTP connection via TCP/IP. Servers running on Windows and MacOS should change this setting to SMTP.<br /><br />SMTPAUTH should only be used if your server requires SMTP authorization to send messages. You must also configure your SMTPAUTH settings in the appropriate fields in this admin section.<br /><br />\"Sendmail -f\" is only for servers which require the use of the -f parameter to send mail. This is a security setting often used to prevent spoofing. Will cause errors if your host mailserver is not configured to use it.',12,1,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'sendmail\', \'sendmail-f\', \'smtp\', \'smtpauth\'),'),(198,'SMTP Email Account Mailbox','EMAIL_SMTPAUTH_MAILBOX','YourEmailAccountNameHere','Enter the mailbox account name (me@mydomain.com) supplied by your host. This is the account name that your host requires for SMTP authentication.<br />Only required if using SMTP Authentication for email.',12,101,NULL,'2005-11-01 09:12:13',NULL,NULL),(199,'SMTP Email Account Password','EMAIL_SMTPAUTH_PASSWORD','YourPasswordHere','Enter the password for your SMTP mailbox. <br />Only required if using SMTP Authentication for email.',12,101,NULL,'2005-11-01 09:12:13',NULL,NULL),(200,'SMTP Email Mail Host','EMAIL_SMTPAUTH_MAIL_SERVER','mail.EnterYourDomain.com','Enter the DNS name of your SMTP mail server.<br />ie: mail.mydomain.com<br />or 55.66.77.88<br />Only required if using SMTP Authentication for email.',12,101,NULL,'2005-11-01 09:12:13',NULL,NULL),(201,'SMTP Email Mail Server Port','EMAIL_SMTPAUTH_MAIL_SERVER_PORT','25','Enter the IP port number that your SMTP mailserver operates on.<br />Only required if using SMTP Authentication for email.',12,101,NULL,'2005-11-01 09:12:13',NULL,NULL),(202,'E-Mail Linefeeds','EMAIL_LINEFEED','LF','Defines the character sequence used to separate mail headers.',12,2,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'LF\', \'CRLF\'),'),(203,'Use MIME HTML When Sending Emails','EMAIL_USE_HTML','false','Send e-mails in HTML format',12,3,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'),'),(204,'Verify E-Mail Addresses Through DNS','ENTRY_EMAIL_ADDRESS_CHECK','false','Verify e-mail address through a DNS server',12,4,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(205,'Send E-Mails','SEND_EMAILS','true','Send out e-mails',12,5,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(206,'Email Archiving Active?','EMAIL_ARCHIVE','false','If you wish to have email messages archived/stored when sent, set this to \"true\".',12,6,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'),'),(207,'E-Mail Friendly-Errors','EMAIL_FRIENDLY_ERRORS','false','Do you want to display friendly errors if emails fail?  Setting this to false will display PHP errors and likely cause the script to fail. Only set to false while troubleshooting, and true for a live shop.',12,7,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'),'),(208,'Email Address (Displayed to Contact you)','STORE_OWNER_EMAIL_ADDRESS','merrowco@merrow.com','Email address of Store Owner.  Used as \"display only\" when informing customers of how to contact you.',12,10,NULL,'2005-11-01 09:12:13',NULL,NULL),(209,'Email Address (sent FROM)','EMAIL_FROM','merrowco@merrow.com','Address from which email messages will be \"sent\" by default. Can be over-ridden at compose-time in admin modules.',12,11,NULL,'2005-11-01 09:12:13',NULL,NULL),(210,'Email Admin Format?','ADMIN_EXTRA_EMAIL_FORMAT','TEXT','Please select the Admin extra email format',12,12,NULL,'0001-01-01 00:00:00',NULL,'zen_cfg_select_option(array(\'TEXT\', \'HTML\'), '),(211,'Send Copy of Order Confirmation Emails To','SEND_EXTRA_ORDER_EMAILS_TO','merrowco@merrow.com','Send COPIES of order confirmation emails to the following email addresses, in this format: Name 1 &lt;email@address1&gt;, Name 2 &lt;email@address2&gt;',12,12,NULL,'2005-11-01 09:12:13',NULL,NULL),(212,'Send Copy of Create Account Emails To - Status','SEND_EXTRA_CREATE_ACCOUNT_EMAILS_TO_STATUS','0','Send copy of Create Account Status<br />0= off 1= on',12,13,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'),'),(213,'Send Copy of Create Account Emails To','SEND_EXTRA_CREATE_ACCOUNT_EMAILS_TO','merrowco@merrow.com','Send copy of Create Account emails to the following email addresses, in this format: Name 1 &lt;email@address1&gt;, Name 2 &lt;email@address2&gt;',12,14,NULL,'2005-11-01 09:12:13',NULL,NULL),(214,'Send Copy of Tell a Friend Emails To - Status','SEND_EXTRA_TELL_A_FRIEND_EMAILS_TO_STATUS','0','Send copy of Tell a Friend Status<br />0= off 1= on',12,15,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'),'),(215,'Send Copy of Tell a Friend Emails To','SEND_EXTRA_TELL_A_FRIEND_EMAILS_TO','merrowco@merrow.com','Send copy of Tell a Friend emails to the following email addresses, in this format: Name 1 &lt;email@address1&gt;, Name 2 &lt;email@address2&gt;',12,16,NULL,'2005-11-01 09:12:13',NULL,NULL),(216,'Send Copy of Customer GV Send Emails To - Status','SEND_EXTRA_GV_CUSTOMER_EMAILS_TO_STATUS','0','Send copy of Customer GV Send Status<br />0= off 1= on',12,17,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'),'),(217,'Send Copy of Customer GV Send Emails To','SEND_EXTRA_GV_CUSTOMER_EMAILS_TO','merrowco@merrow.com','Send copy of Customer GV Send emails to the following email addresses, in this format: Name 1 &lt;email@address1&gt;, Name 2 &lt;email@address2&gt;',12,18,NULL,'2005-11-01 09:12:13',NULL,NULL),(218,'Send Copy of Admin GV Mail Emails To - Status','SEND_EXTRA_GV_ADMIN_EMAILS_TO_STATUS','0','Send copy of Admin GV Mail Status<br />0= off 1= on',12,19,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'),'),(219,'Send Copy of Customer Admin GV Mail Emails To','SEND_EXTRA_GV_ADMIN_EMAILS_TO','merrowco@merrow.com','Send copy of Admin GV Mail emails to the following email addresses, in this format: Name 1 &lt;email@address1&gt;, Name 2 &lt;email@address2&gt;',12,20,NULL,'2005-11-01 09:12:13',NULL,NULL),(220,'Send Copy of Admin Discount Coupon Mail Emails To - Status','SEND_EXTRA_DISCOUNT_COUPON_ADMIN_EMAILS_TO_STATUS','0','Send copy of Admin Discount Coupon Mail Status<br />0= off 1= on',12,21,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'),'),(221,'Send Copy of Customer Admin Discount Coupon Mail Emails To','SEND_EXTRA_DISCOUNT_COUPON_ADMIN_EMAILS_TO','merrowco@merrow.com','Send copy of Admin Discount Coupon Mail emails to the following email addresses, in this format: Name 1 &lt;email@address1&gt;, Name 2 &lt;email@address2&gt;',12,22,NULL,'2005-11-01 09:12:13',NULL,NULL),(222,'Send Copy of Admin Orders Status Emails To - Status','SEND_EXTRA_ORDERS_STATUS_ADMIN_EMAILS_TO_STATUS','0','Send copy of Admin Orders Status Status<br />0= off 1= on',12,23,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'),'),(223,'Send Copy of Admin Orders Status Emails To','SEND_EXTRA_ORDERS_STATUS_ADMIN_EMAILS_TO','merrowco@merrow.com','Send copy of Admin Orders Status emails to the following email addresses, in this format: Name 1 &lt;email@address1&gt;, Name 2 &lt;email@address2&gt;',12,24,NULL,'2005-11-01 09:12:13',NULL,NULL),(224,'Send Copy of Pending Reviews Emails To - Status','SEND_EXTRA_REVIEW_NOTIFICATION_EMAILS_TO_STATUS','0','Send copy of Pending Reviews Status<br />0= off 1= on',12,25,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'),'),(225,'Send Copy of Pending Reviews Emails To','SEND_EXTRA_REVIEW_NOTIFICATION_EMAILS_TO','merrowco@merrow.com','Send copy of Pending Reviews emails to the following email addresses, in this format: Name 1 &lt;email@address1&gt;, Name 2 &lt;email@address2&gt;',12,26,NULL,'2005-11-01 09:12:13',NULL,NULL),(226,'Set \"Contact Us\" Email Dropdown List','CONTACT_US_LIST','','On the \"Contact Us\" Page, set the list of email addresses , in this format: Name 1 &lt;email@address1&gt;, Name 2 &lt;email@address2&gt;',12,40,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_textarea('),(227,'Allow Guest To Tell A Friend','ALLOW_GUEST_TO_TELL_A_FRIEND','true','Allow guests to tell a friend about a product',12,50,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(228,'Contact Us - Show Store Name and Address','CONTACT_US_STORE_NAME_ADDRESS','1','Include Store Name and Address<br />0= off 1= on',12,50,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(229,'Send Extra Low Stock Emails','SEND_LOWSTOCK_EMAIL','0','When stock level is at or below low stock level send an email<br />0= off<br />1= on',12,60,'2005-11-01 09:12:13','2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'),'),(230,'Send Extra Low Stock Emails To','SEND_EXTRA_LOW_STOCK_EMAILS_TO','merrowco@merrow.com','When stock level is at or below low stock level send an email to this address, in this format: Name 1 &lt;email@address1&gt;, Name 2 &lt;email@address2&gt;',12,61,NULL,'2005-11-01 09:12:13',NULL,NULL),(231,'Display \"Newsletter Unsubscribe\" Link?','SHOW_NEWSLETTER_UNSUBSCRIBE_LINK','true','Show \"Newsletter Unsubscribe\" link in the \"Information\" side-box?',12,70,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'),'),(232,'Audience-Select Count Display','AUDIENCE_SELECT_DISPLAY_COUNTS','true','When displaying lists of available audiences/recipients, should the recipients-count be included? <br /><em>(This may make things slower if you have a lot of customers or complex audience queries)</em>',12,90,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'),'),(233,'Enable Downloads','DOWNLOAD_ENABLED','true','Enable the products download functions.',13,1,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(234,'Download by Redirect','DOWNLOAD_BY_REDIRECT','true','Use browser redirection for download. Disable on non-Unix systems.<br /><br />Note: Set /pub to 777 when redirect is true',13,2,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(235,'Download Expiration (Number of Days)','DOWNLOAD_MAX_DAYS','7','Set number of days before the download link expires. 0 means no limit.',13,3,NULL,'2005-11-01 09:12:13',NULL,''),(236,'Number of Downloads Allowed - Per Product','DOWNLOAD_MAX_COUNT','5','Set the maximum number of downloads. 0 means no download authorized.',13,4,NULL,'2005-11-01 09:12:13',NULL,''),(237,'Downloads Controller Update Status Value','DOWNLOADS_ORDERS_STATUS_UPDATED_VALUE','4','What orders_status resets the Download days and Max Downloads - Default is 4',13,10,'2005-11-01 09:12:13','0000-00-00 00:00:00',NULL,NULL),(238,'Downloads Controller Order Status Value >= lower value','DOWNLOADS_CONTROLLER_ORDERS_STATUS','2','Downloads Controller Order Status Value - Default >= 2<br /><br />Downloads are available for checkout based on the orders status. Orders with orders status greater than this value will be available for download. The orders status is set for an order by the Payment Modules. Set the lower range for this range.',13,12,'2005-11-01 09:12:13','0000-00-00 00:00:00',NULL,NULL),(239,'Downloads Controller Order Status Value <= upper value','DOWNLOADS_CONTROLLER_ORDERS_STATUS_END','4','Downloads Controller Order Status Value - Default <= 4<br /><br />Downloads are available for checkout based on the orders status. Orders with orders status less than this value will be available for download. The orders status is set for an order by the Payment Modules.  Set the upper range for this range.',13,13,'2005-11-01 09:12:13','0000-00-00 00:00:00',NULL,NULL),(240,'Enable Price Factor','ATTRIBUTES_ENABLED_PRICE_FACTOR','true','Enable the Attributes Price Factor.',13,25,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(241,'Enable Qty Price Discount','ATTRIBUTES_ENABLED_QTY_PRICES','true','Enable the Attributes Quantity Price Discounts.',13,26,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(242,'Enable Attribute Images','ATTRIBUTES_ENABLED_IMAGES','true','Enable the Attributes Images.',13,28,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(243,'Enable Text Pricing by word or letter','ATTRIBUTES_ENABLED_TEXT_PRICES','true','Enable the Attributes Text Pricing by word or letter.',13,35,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(244,'Text Pricing - Spaces are Free','TEXT_SPACES_FREE','1','On Text pricing Spaces are Free<br /><br />0= off 1= on',13,36,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(245,'Read Only option type - Ignore for Add to Cart','PRODUCTS_OPTIONS_TYPE_READONLY_IGNORED','1','When a Product only uses READONLY attributes, should the Add to Cart button be On or Off?<br />0= OFF<br />1= ON',13,37,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(246,'Enable GZip Compression','GZIP_LEVEL','0','0= off 1= on',14,1,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'),'),(247,'Session Directory','SESSION_WRITE_DIRECTORY','/home/merrowco/public_html/buy/cache','If sessions are file based, store them in this directory.',15,1,NULL,'2005-11-01 09:12:13',NULL,NULL),(248,'Cookie Domain','SESSION_USE_FQDN','True','If True the full domain name will be used to store the cookie, e.g. www.mydomain.com. If False only a partial domain name will be used, e.g. mydomain.com. If you are unsure about this, always leave set to true.',15,2,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'True\', \'False\'), '),(249,'Force Cookie Use','SESSION_FORCE_COOKIE_USE','False','Force the use of sessions when cookies are only enabled.',15,2,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'True\', \'False\'), '),(250,'Check SSL Session ID','SESSION_CHECK_SSL_SESSION_ID','False','Validate the SSL_SESSION_ID on every secure HTTPS page request.',15,3,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'True\', \'False\'), '),(251,'Check User Agent','SESSION_CHECK_USER_AGENT','False','Validate the clients browser user agent on every page request.',15,4,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'True\', \'False\'), '),(252,'Check IP Address','SESSION_CHECK_IP_ADDRESS','False','Validate the clients IP address on every page request.',15,5,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'True\', \'False\'), '),(253,'Prevent Spider Sessions','SESSION_BLOCK_SPIDERS','True','Prevent known spiders from starting a session.',15,6,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'True\', \'False\'), '),(254,'Recreate Session','SESSION_RECREATE','False','Recreate the session to generate a new session ID when the customer logs on or creates an account (PHP >=4.1 needed).',15,7,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'True\', \'False\'), '),(255,'IP to Host Conversion Status','SESSION_IP_TO_HOST_ADDRESS','true','Convert IP Address to Host Address<br /><br />Note: on some servers this can slow down the initial start of a session or execution of Emails',15,10,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(256,'Length of the redeem code','SECURITY_CODE_LENGTH','10','Enter the length of the redeem code<br />The longer the more secure',16,1,NULL,'2005-11-01 09:12:13',NULL,NULL),(257,'Default Order Status For Zero Balance Orders','DEFAULT_ZERO_BALANCE_ORDERS_STATUS_ID','2','When an order\'s balance is zero, this order status will be assigned to it.',16,0,NULL,'2005-11-01 09:12:13','zen_get_order_status_name','zen_cfg_pull_down_order_statuses('),(258,'New Signup Discount Coupon ID#','NEW_SIGNUP_DISCOUNT_COUPON','','Select the coupon<br />',16,75,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_coupon_id('),(259,'New Signup Gift Voucher Amount','NEW_SIGNUP_GIFT_VOUCHER_AMOUNT','','Leave blank for none<br />Or enter an amount ie. 10 for $10.00',16,76,NULL,'2005-11-01 09:12:13',NULL,NULL),(260,'Maximum Discount Coupons Per Page','MAX_DISPLAY_SEARCH_RESULTS_DISCOUNT_COUPONS','20','Number of Discount Coupons to list per Page',16,81,NULL,'2005-11-01 09:12:13',NULL,NULL),(261,'Maximum Discount Coupon Report Results Per Page','MAX_DISPLAY_SEARCH_RESULTS_DISCOUNT_COUPONS_REPORTS','20','Number of Discount Coupons to list on Reports Page',16,81,NULL,'2005-11-01 09:12:13',NULL,NULL),(262,'Credit Card Enable Status - VISA','CC_ENABLED_VISA','1','Accept VISA 0= off 1= on',17,1,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(263,'Credit Card Enable Status - MasterCard','CC_ENABLED_MC','1','Accept MasterCard 0= off 1= on',17,2,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(264,'Credit Card Enable Status - AmericanExpress','CC_ENABLED_AMEX','0','Accept AmericanExpress 0= off 1= on',17,3,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(265,'Credit Card Enable Status - Diners Club','CC_ENABLED_DINERS_CLUB','0','Accept Diners Club 0= off 1= on',17,4,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(266,'Credit Card Enable Status - Discover Card','CC_ENABLED_DISCOVER','0','Accept Discover Card 0= off 1= on',17,5,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(267,'Credit Card Enable Status - JCB','CC_ENABLED_JCB','0','Accept JCB 0= off 1= on',17,6,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(268,'Credit Card Enable Status - AUSTRALIAN BANKCARD','CC_ENABLED_AUSTRALIAN_BANKCARD','0','Accept AUSTRALIAN BANKCARD 0= off 1= on',17,7,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(269,'Credit Card Enabled - Show on Payment','SHOW_ACCEPTED_CREDIT_CARDS','0','Show accepted credit cards on Payment page?<br />0= off<br />1= As Text<br />2= As Images<br /><br />Note: images and text must be defined in both the database and language file for specific credit card types.',17,50,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\', \'2\'), '),(270,'This module is installed','MODULE_ORDER_TOTAL_GV_STATUS','true','',6,1,NULL,'2003-10-30 22:16:40',NULL,'zen_cfg_select_option(array(\'true\'),'),(271,'Sort Order','MODULE_ORDER_TOTAL_GV_SORT_ORDER','840','Sort order of display.',6,2,NULL,'2003-10-30 22:16:40',NULL,NULL),(272,'Queue Purchases','MODULE_ORDER_TOTAL_GV_QUEUE','true','Do you want to queue purchases of the Gift Voucher?',6,3,NULL,'2003-10-30 22:16:40',NULL,'zen_cfg_select_option(array(\'true\', \'false\'),'),(273,'Include Shipping','MODULE_ORDER_TOTAL_GV_INC_SHIPPING','true','Include Shipping in calculation',6,5,NULL,'2003-10-30 22:16:40',NULL,'zen_cfg_select_option(array(\'true\', \'false\'),'),(274,'Include Tax','MODULE_ORDER_TOTAL_GV_INC_TAX','true','Include Tax in calculation.',6,6,NULL,'2003-10-30 22:16:40',NULL,'zen_cfg_select_option(array(\'true\', \'false\'),'),(275,'Re-calculate Tax','MODULE_ORDER_TOTAL_GV_CALC_TAX','None','Re-Calculate Tax',6,7,NULL,'2003-10-30 22:16:40',NULL,'zen_cfg_select_option(array(\'None\', \'Standard\', \'Credit Note\'),'),(276,'Tax Class','MODULE_ORDER_TOTAL_GV_TAX_CLASS','0','Use the following tax class when treating Gift Voucher as Credit Note.',6,0,NULL,'2003-10-30 22:16:40','zen_get_tax_class_title','zen_cfg_pull_down_tax_classes('),(277,'Credit including Tax','MODULE_ORDER_TOTAL_GV_CREDIT_TAX','false','Add tax to purchased Gift Voucher when crediting to Account',6,8,NULL,'2003-10-30 22:16:40',NULL,'zen_cfg_select_option(array(\'true\', \'false\'),'),(278,'This module is installed','MODULE_ORDER_TOTAL_LOWORDERFEE_STATUS','true','',6,1,NULL,'2003-10-30 22:16:43',NULL,'zen_cfg_select_option(array(\'true\'),'),(279,'Sort Order','MODULE_ORDER_TOTAL_LOWORDERFEE_SORT_ORDER','400','Sort order of display.',6,2,NULL,'2003-10-30 22:16:43',NULL,NULL),(280,'Allow Low Order Fee','MODULE_ORDER_TOTAL_LOWORDERFEE_LOW_ORDER_FEE','false','Do you want to allow low order fees?',6,3,NULL,'2003-10-30 22:16:43',NULL,'zen_cfg_select_option(array(\'true\', \'false\'),'),(281,'Order Fee For Orders Under','MODULE_ORDER_TOTAL_LOWORDERFEE_ORDER_UNDER','50','Add the low order fee to orders under this amount.',6,4,NULL,'2003-10-30 22:16:43','currencies->format',NULL),(282,'Order Fee','MODULE_ORDER_TOTAL_LOWORDERFEE_FEE','5','For Percentage Calculation - include a % Example: 10%<br />For a flat amount just enter the amount - Example: 5 for $5.00',6,5,NULL,'2003-10-30 22:16:43','',NULL),(283,'Attach Low Order Fee On Orders Made','MODULE_ORDER_TOTAL_LOWORDERFEE_DESTINATION','both','Attach low order fee for orders sent to the set destination.',6,6,NULL,'2003-10-30 22:16:43',NULL,'zen_cfg_select_option(array(\'national\', \'international\', \'both\'),'),(284,'Tax Class','MODULE_ORDER_TOTAL_LOWORDERFEE_TAX_CLASS','0','Use the following tax class on the low order fee.',6,7,NULL,'2003-10-30 22:16:43','zen_get_tax_class_title','zen_cfg_pull_down_tax_classes('),(285,'No Low Order Fee on Virtual Products','MODULE_ORDER_TOTAL_LOWORDERFEE_VIRTUAL','false','Do not charge Low Order Fee when cart is Virtual Products Only',6,8,NULL,'2004-04-20 22:16:43',NULL,'zen_cfg_select_option(array(\'true\', \'false\'),'),(286,'No Low Order Fee on Gift Vouchers','MODULE_ORDER_TOTAL_LOWORDERFEE_GV','false','Do not charge Low Order Fee when cart is Gift Vouchers Only',6,9,NULL,'2004-04-20 22:16:43',NULL,'zen_cfg_select_option(array(\'true\', \'false\'),'),(287,'This module is installed','MODULE_ORDER_TOTAL_SHIPPING_STATUS','true','',6,1,NULL,'2003-10-30 22:16:46',NULL,'zen_cfg_select_option(array(\'true\'),'),(288,'Sort Order','MODULE_ORDER_TOTAL_SHIPPING_SORT_ORDER','200','Sort order of display.',6,2,NULL,'2003-10-30 22:16:46',NULL,NULL),(289,'Allow Free Shipping','MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING','false','Do you want to allow free shipping?',6,3,NULL,'2003-10-30 22:16:46',NULL,'zen_cfg_select_option(array(\'true\', \'false\'),'),(290,'Free Shipping For Orders Over','MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING_OVER','50','Provide free shipping for orders over the set amount.',6,4,NULL,'2003-10-30 22:16:46','currencies->format',NULL),(291,'Provide Free Shipping For Orders Made','MODULE_ORDER_TOTAL_SHIPPING_DESTINATION','national','Provide free shipping for orders sent to the set destination.',6,5,NULL,'2003-10-30 22:16:46',NULL,'zen_cfg_select_option(array(\'national\', \'international\', \'both\'),'),(292,'This module is installed','MODULE_ORDER_TOTAL_SUBTOTAL_STATUS','true','',6,1,NULL,'2003-10-30 22:16:49',NULL,'zen_cfg_select_option(array(\'true\'),'),(293,'Sort Order','MODULE_ORDER_TOTAL_SUBTOTAL_SORT_ORDER','100','Sort order of display.',6,2,NULL,'2003-10-30 22:16:49',NULL,NULL),(294,'This module is installed','MODULE_ORDER_TOTAL_TAX_STATUS','true','',6,1,NULL,'2003-10-30 22:16:52',NULL,'zen_cfg_select_option(array(\'true\'),'),(295,'Sort Order','MODULE_ORDER_TOTAL_TAX_SORT_ORDER','300','Sort order of display.',6,2,NULL,'2003-10-30 22:16:52',NULL,NULL),(296,'This module is installed','MODULE_ORDER_TOTAL_TOTAL_STATUS','true','',6,1,NULL,'2003-10-30 22:16:55',NULL,'zen_cfg_select_option(array(\'true\'),'),(297,'Sort Order','MODULE_ORDER_TOTAL_TOTAL_SORT_ORDER','999','Sort order of display.',6,2,NULL,'2003-10-30 22:16:55',NULL,NULL),(298,'Tax Class','MODULE_ORDER_TOTAL_COUPON_TAX_CLASS','0','Use the following tax class when treating Discount Coupon as Credit Note.',6,0,NULL,'2003-10-30 22:16:36','zen_get_tax_class_title','zen_cfg_pull_down_tax_classes('),(299,'Include Tax','MODULE_ORDER_TOTAL_COUPON_INC_TAX','true','Include Tax in calculation.',6,6,NULL,'2003-10-30 22:16:36',NULL,'zen_cfg_select_option(array(\'true\', \'false\'),'),(300,'Sort Order','MODULE_ORDER_TOTAL_COUPON_SORT_ORDER','280','Sort order of display.',6,2,NULL,'2003-10-30 22:16:36',NULL,NULL),(301,'Include Shipping','MODULE_ORDER_TOTAL_COUPON_INC_SHIPPING','false','Include Shipping in calculation',6,5,NULL,'2003-10-30 22:16:36',NULL,'zen_cfg_select_option(array(\'true\', \'false\'),'),(302,'This module is installed','MODULE_ORDER_TOTAL_COUPON_STATUS','true','',6,1,NULL,'2003-10-30 22:16:36',NULL,'zen_cfg_select_option(array(\'true\'),'),(303,'Re-calculate Tax','MODULE_ORDER_TOTAL_COUPON_CALC_TAX','Standard','Re-Calculate Tax',6,7,NULL,'2003-10-30 22:16:36',NULL,'zen_cfg_select_option(array(\'None\', \'Standard\', \'Credit Note\'),'),(304,'Admin Demo Status','ADMIN_DEMO','0','Admin Demo should be on?<br />0= off 1= on',6,0,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(305,'Product option type Select','PRODUCTS_OPTIONS_TYPE_SELECT','0','The number representing the Select type of product option.',0,NULL,'2005-11-01 09:12:13','2005-11-01 09:12:13',NULL,NULL),(306,'Text product option type','PRODUCTS_OPTIONS_TYPE_TEXT','1','Numeric value of the text product option type',6,NULL,'2005-11-01 09:12:13','2005-11-01 09:12:13',NULL,NULL),(307,'Radio button product option type','PRODUCTS_OPTIONS_TYPE_RADIO','2','Numeric value of the radio button product option type',6,NULL,'2005-11-01 09:12:13','2005-11-01 09:12:13',NULL,NULL),(308,'Check box product option type','PRODUCTS_OPTIONS_TYPE_CHECKBOX','3','Numeric value of the check box product option type',6,NULL,'2005-11-01 09:12:13','2005-11-01 09:12:13',NULL,NULL),(309,'File product option type','PRODUCTS_OPTIONS_TYPE_FILE','4','Numeric value of the file product option type',6,NULL,'2005-11-01 09:12:13','2005-11-01 09:12:13',NULL,NULL),(310,'ID for text and file products options values','PRODUCTS_OPTIONS_VALUES_TEXT_ID','0','Numeric value of the products_options_values_id used by the text and file attributes.',6,NULL,'2005-11-01 09:12:13','2005-11-01 09:12:13',NULL,NULL),(311,'Upload prefix','UPLOAD_PREFIX','upload_','Prefix used to differentiate between upload options and other options',0,NULL,'2005-11-01 09:12:13','2005-11-01 09:12:13',NULL,NULL),(312,'Text prefix','TEXT_PREFIX','txt_','Prefix used to differentiate between text option values and other option values',0,NULL,'2005-11-01 09:12:13','2005-11-01 09:12:13',NULL,NULL),(313,'Read Only option type','PRODUCTS_OPTIONS_TYPE_READONLY','5','Numeric value of the file product option type',6,NULL,'2005-11-01 09:12:13','2005-11-01 09:12:13',NULL,NULL),(314,'Products Info - Products Option Name Sort Order','PRODUCTS_OPTIONS_SORT_ORDER','0','Sort order of Option Names for Products Info<br />0= Sort Order, Option Name<br />1= Option Name',18,35,'2005-11-01 09:12:13','2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'),'),(315,'Products Info - Product Option Value of Attributes Sort Order','PRODUCTS_OPTIONS_SORT_BY_PRICE','1','Sort order of Product Option Values of Attributes for Products Info<br />0= Sort Order, Price<br />1= Sort Order, Option Value Name',18,36,'2005-11-01 09:12:13','2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'),'),(316,'Product Info - Show Option Values Name Below Attributes Image','PRODUCT_IMAGES_ATTRIBUTES_NAMES','1','Product Info - Show the name of the Option Value beneath the Attribute Image?<br />0= off 1= on',18,41,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(317,'Product Info - Show Sales Discount Savings Status','SHOW_SALE_DISCOUNT_STATUS','1','Product Info - Show the amount of discount savings?<br />0= off 1= on',18,45,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(318,'Product Info - Show Sales Discount Savings Dollars or Percentage','SHOW_SALE_DISCOUNT','1','Product Info - Show the amount of discount savings display as:<br />1= % off 2= $amount off',18,46,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'1\', \'2\'), '),(319,'Product Info - Show Sales Discount Savings Percentage Decimals','SHOW_SALE_DISCOUNT_DECIMALS','0','Product Info - Show discount savings display as a Percentage with how many decimals?:<br />Default= 0',18,47,NULL,'2005-11-01 09:12:13',NULL,NULL),(320,'Product Info - Price is Free Image or Text Status','OTHER_IMAGE_PRICE_IS_FREE_ON','1','Product Info - Show the Price is Free Image or Text on Displayed Price<br />0= Text<br />1= Image',18,50,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(321,'Product Info - Price is Call for Price Image or Text Status','PRODUCTS_PRICE_IS_CALL_IMAGE_ON','1','Product Info - Show the Price is Call for Price Image or Text on Displayed Price<br />0= Text<br />1= Image',18,51,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(322,'Product Quantity Box Status - Adding New Products','PRODUCTS_QTY_BOX_STATUS','1','What should the Default Quantity Box Status be set to when adding New Products?<br /><br />0= off<br />1= on<br />NOTE: This will show a Qty Box when ON and default the Add to Cart to 1',18,55,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(323,'Product Reviews Require Approval','REVIEWS_APPROVAL','1','Do product reviews require approval?<br /><br />Note: When Review Status is off, it will also not show<br /><br />0= off 1= on',18,62,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(324,'Meta Tags - Include Product Price in Title','META_TAG_INCLUDE_PRICE','1','Do you want to include the Product Price in the Meta Tag Title?<br /><br />0= off 1= on',18,70,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(325,'Also Purchased Products Columns per Row','SHOW_PRODUCT_INFO_COLUMNS_ALSO_PURCHASED_PRODUCTS','3','Also Purchased Products Columns per Row<br />0= off or set the sort order',18,72,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\', \'2\', \'3\', \'4\'), '),(326,'Previous Next - Navigation Bar Position','PRODUCT_INFO_PREVIOUS_NEXT','1','Location of Previous/Next Navigation Bar<br />0= off<br />1= Top of Page<br />2= Bottom of Page<br />3= Both Top and Bottom of Page',18,21,'2005-11-01 09:12:13','2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'0\', \'text\'=>\'Off\'), array(\'id\'=>\'1\', \'text\'=>\'Top of Page\'), array(\'id\'=>\'2\', \'text\'=>\'Bottom of Page\'), array(\'id\'=>\'3\', \'text\'=>\'Both Top & Bottom of Page\')),'),(327,'Previous Next - Sort Order','PRODUCT_INFO_PREVIOUS_NEXT_SORT','1','Products Display Order by<br />0= Product ID<br />1= Product Name<br />2= Model<br />3= Price, Product Name<br />4= Price, Model<br />5= Product Name, Model<br />6= Product Sort Order',18,22,'2005-11-01 09:12:13','2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'0\', \'text\'=>\'Product ID\'), array(\'id\'=>\'1\', \'text\'=>\'Name\'), array(\'id\'=>\'2\', \'text\'=>\'Product Model\'), array(\'id\'=>\'3\', \'text\'=>\'Product Price - Name\'), array(\'id\'=>\'4\', \'text\'=>\'Product Price - Model\'), array(\'id\'=>\'5\', \'text\'=>\'Product Name - Model\'), array(\'id\'=>\'6\', \'text\'=>\'Product Sort Order\')),'),(328,'Previous Next - Button and Image Status','SHOW_PREVIOUS_NEXT_STATUS','0','Button and Product Image status settings are:<br />0= Off<br />1= On',18,20,'2005-11-01 09:12:13','2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'0\', \'text\'=>\'Off\'), array(\'id\'=>\'1\', \'text\'=>\'On\')),'),(329,'Previous Next - Button and Image Settings','SHOW_PREVIOUS_NEXT_IMAGES','0','Show Previous/Next Button and Product Image Settings<br />0= Button Only<br />1= Button and Product Image<br />2= Product Image Only',18,21,'2005-11-01 09:12:13','2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'0\', \'text\'=>\'Button Only\'), array(\'id\'=>\'1\', \'text\'=>\'Button and Product Image\'), array(\'id\'=>\'2\', \'text\'=>\'Product Image Only\')),'),(330,'Previous Next - Image Width?','PREVIOUS_NEXT_IMAGE_WIDTH','50','Previous/Next Image Width?',18,22,NULL,'2005-11-01 09:12:13','',''),(331,'Previous Next - Image Height?','PREVIOUS_NEXT_IMAGE_HEIGHT','40','Previous/Next Image Height?',18,23,NULL,'2005-11-01 09:12:13','',''),(332,'Previous Next - Navigation Includes Category','PRODUCT_INFO_CATEGORIES','1','Product\'s Category Image and Name Alignment Above Previous/Next Navigation Bar<br />0= off<br />1= Align Left<br />2= Align Center<br />3= Align Right',18,20,'2005-11-01 09:12:13','2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'0\', \'text\'=>\'Off\'), array(\'id\'=>\'1\', \'text\'=>\'Align Left\'), array(\'id\'=>\'2\', \'text\'=>\'Align Center\'), array(\'id\'=>\'3\', \'text\'=>\'Align Right\')),'),(333,'Column Width - Left Boxes','BOX_WIDTH_LEFT','150px','Width of the Left Column Boxes<br />px may be included<br />Default = 150px',19,1,NULL,'2003-11-21 22:16:36',NULL,NULL),(334,'Column Width - Right Boxes','BOX_WIDTH_RIGHT','150px','Width of the Right Column Boxes<br />px may be included<br />Default = 150px',19,2,NULL,'2003-11-21 22:16:36',NULL,NULL),(335,'Bread Crumbs Navigation Separator','BREAD_CRUMBS_SEPARATOR','&nbsp;::&nbsp;','Enter the separator symbol to appear between the Navigation Bread Crumb trail<br />Note: Include spaces with the &amp;nbsp; symbol if you want them part of the separator.<br />Default = &amp;nbsp;::&amp;nbsp;',19,3,NULL,'2003-11-21 22:16:36',NULL,'zen_cfg_textarea_small('),(336,'Bestsellers - Number Padding','BEST_SELLERS_FILLER','&nbsp;','What do you want to Pad the numbers with?<br />Default = &amp;nbsp;',19,5,NULL,'2003-11-21 22:16:36',NULL,'zen_cfg_textarea_small('),(337,'Bestsellers - Truncate Product Names','BEST_SELLERS_TRUNCATE','35','What size do you want to truncate the Product Names?<br />Default = 35',19,6,NULL,'2003-11-21 22:16:36',NULL,NULL),(338,'Bestsellers - Truncate Product Names followed by ...','BEST_SELLERS_TRUNCATE_MORE','true','When truncated Product Names follow with ...<br />Default = true',19,7,'2003-03-21 13:08:25','2003-03-21 11:42:47',NULL,'zen_cfg_select_option(array(\'true\', \'false\'),'),(339,'Categories Box - Show Specials Link','SHOW_CATEGORIES_BOX_SPECIALS','true','Show Specials Link in the Categories Box',19,8,'2003-03-21 13:08:25','2003-03-21 11:42:47',NULL,'zen_cfg_select_option(array(\'true\', \'false\'),'),(340,'Categories Box - Show Products New Link','SHOW_CATEGORIES_BOX_PRODUCTS_NEW','true','Show Products New Link in the Categories Box',19,9,'2003-03-21 13:08:25','2003-03-21 11:42:47',NULL,'zen_cfg_select_option(array(\'true\', \'false\'),'),(341,'Shopping Cart Box Status','SHOW_SHOPPING_CART_BOX_STATUS','1','Shopping Cart Shows<br />0= Always<br />1= Only when full<br />2= Only when full but when viewing the Shopping Cart',19,10,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\', \'2\'), '),(342,'Categories Box - Show Featured Products Link','SHOW_CATEGORIES_BOX_FEATURED_PRODUCTS','true','Show Featured Products Link in the Categories Box',19,11,'2003-03-21 13:08:25','2003-03-21 11:42:47',NULL,'zen_cfg_select_option(array(\'true\', \'false\'),'),(343,'Categories Box - Show Products All Link','SHOW_CATEGORIES_BOX_PRODUCTS_ALL','true','Show Products All Link in the Categories Box',19,12,'2003-03-21 13:08:25','2003-03-21 11:42:47',NULL,'zen_cfg_select_option(array(\'true\', \'false\'),'),(344,'Column Left Status - Global','COLUMN_LEFT_STATUS','1','Show Column Left, unless page override exists?<br />0= Column Left is always off<br />1= Column Left is on, unless page override',19,15,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(345,'Column Right Status - Global','COLUMN_RIGHT_STATUS','1','Show Column Right, unless page override exists?<br />0= Column Right is always off<br />1= Column Right is on, unless page override',19,16,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(346,'Column Width - Left','COLUMN_WIDTH_LEFT','150px','Width of the Left Column<br />px may be included<br />Default = 150px',19,20,NULL,'2003-11-21 22:16:36',NULL,NULL),(347,'Column Width - Right','COLUMN_WIDTH_RIGHT','150px','Width of the Right Column<br />px may be included<br />Default = 150px',19,21,NULL,'2003-11-21 22:16:36',NULL,NULL),(348,'Categories Separator between links Status','SHOW_CATEGORIES_SEPARATOR_LINK','1','Show Category Separator between Category Names and Links?<br />0= off<br />1= on',19,24,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(349,'Categories Separator between the Category Name and Count','CATEGORIES_SEPARATOR','-&gt;','What separator do you want between the Category name and the count?<br />Default = -&amp;gt;',19,25,NULL,'2003-11-21 22:16:36',NULL,'zen_cfg_textarea_small('),(350,'Categories Separator between the Category Name and Sub Categories','CATEGORIES_SEPARATOR_SUBS','|_&nbsp;','What separator do you want between the Category name and Sub Category Name?<br />Default = |_&amp;nbsp;',19,26,NULL,'2004-03-25 22:16:36',NULL,'zen_cfg_textarea_small('),(351,'Categories Count Prefix','CATEGORIES_COUNT_PREFIX','&nbsp;(','What do you want to Prefix the count with?<br />Default= (',19,27,NULL,'2003-01-21 22:16:36',NULL,'zen_cfg_textarea_small('),(352,'Categories Count Suffix','CATEGORIES_COUNT_SUFFIX',')','What do you want as a Suffix to the count?<br />Default= )',19,28,NULL,'2003-01-21 22:16:36',NULL,'zen_cfg_textarea_small('),(353,'Categories SubCategories Indent','CATEGORIES_SUBCATEGORIES_INDENT','&nbsp;&nbsp;','What do you want to use as the subcategories indent?<br />Default= &nbsp;&nbsp;',19,29,NULL,'2004-06-24 22:16:36',NULL,'zen_cfg_textarea_small('),(354,'Categories with 0 Products Status','CATEGORIES_COUNT_ZERO','0','Show Category Count for 0 Products?<br />0= off<br />1= on',19,30,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(355,'Split Categories Box','CATEGORIES_SPLIT_DISPLAY','True','Split the categories box display by product type',19,31,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'True\', \'False\'), '),(356,'Shopping Cart - Show Totals','SHOW_TOTALS_IN_CART','1','Show Totals Above Shopping Cart?<br />0= off<br />1= on<br />2= on, no weight when 0',19,31,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\', \'2\'), '),(357,'Categories - Always Show on Main Page','SHOW_CATEGORIES_ALWAYS','0','Always Show Categories on Main Page<br />0= off<br />1= on<br />Default category can be set to Top Level or a Specific Top Level',19,45,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(358,'Main Page - Opens with Category','CATEGORIES_START_MAIN','0','0= Top Level Categories<br />Or enter the Category ID#<br />Note: Sub Categories can also be used Example: 3_10',19,46,NULL,'2005-11-01 09:12:13','',''),(359,'Categories - Always Open to Show SubCategories','SHOW_CATEGORIES_SUBCATEGORIES_ALWAYS','1','Always Show Categories and SubCategories<br />0= off, just show Top Categories<br />1= on, Always show Categories and SubCategories when selected',19,47,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(360,'Banner Display Groups - Header Position 1','SHOW_BANNERS_GROUP_SET1','','The Banner Display Groups can be from 1 Banner Group or Multiple Banner Groups<br /><br />For Multiple Banner Groups enter the Banner Group Name separated by a colon <strong>:</strong><br /><br />Example: Wide-Banners:SideBox-Banners<br /><br />What Banner Group(s) do you want to use in the Header Position 1?<br />Leave blank for none',19,55,NULL,'2005-11-01 09:12:13','',''),(361,'Banner Display Groups - Header Position 2','SHOW_BANNERS_GROUP_SET2','','The Banner Display Groups can be from 1 Banner Group or Multiple Banner Groups<br /><br />For Multiple Banner Groups enter the Banner Group Name separated by a colon <strong>:</strong><br /><br />Example: Wide-Banners:SideBox-Banners<br /><br />What Banner Group(s) do you want to use in the Header Position 2?<br />Leave blank for none',19,56,NULL,'2005-11-01 09:12:13','',''),(362,'Banner Display Groups - Header Position 3','SHOW_BANNERS_GROUP_SET3','','The Banner Display Groups can be from 1 Banner Group or Multiple Banner Groups<br /><br />For Multiple Banner Groups enter the Banner Group Name separated by a colon <strong>:</strong><br /><br />Example: Wide-Banners:SideBox-Banners<br /><br />What Banner Group(s) do you want to use in the Header Position 3?<br />Leave blank for none',19,57,NULL,'2005-11-01 09:12:13','',''),(363,'Banner Display Groups - Footer Position 1','SHOW_BANNERS_GROUP_SET4','','The Banner Display Groups can be from 1 Banner Group or Multiple Banner Groups<br /><br />For Multiple Banner Groups enter the Banner Group Name separated by a colon <strong>:</strong><br /><br />Example: Wide-Banners:SideBox-Banners<br /><br />What Banner Group(s) do you want to use in the Footer Position 1?<br />Leave blank for none',19,65,NULL,'2005-11-01 09:12:13','',''),(364,'Banner Display Groups - Footer Position 2','SHOW_BANNERS_GROUP_SET5','','The Banner Display Groups can be from 1 Banner Group or Multiple Banner Groups<br /><br />For Multiple Banner Groups enter the Banner Group Name separated by a colon <strong>:</strong><br /><br />Example: Wide-Banners:SideBox-Banners<br /><br />What Banner Group(s) do you want to use in the Footer Position 2?<br />Leave blank for none',19,66,NULL,'2005-11-01 09:12:13','',''),(365,'Banner Display Groups - Footer Position 3','SHOW_BANNERS_GROUP_SET6','Wide-Banners','The Banner Display Groups can be from 1 Banner Group or Multiple Banner Groups<br /><br />For Multiple Banner Groups enter the Banner Group Name separated by a colon <strong>:</strong><br /><br />Example: Wide-Banners:SideBox-Banners<br /><br />Default Group is Wide-Banners<br /><br />What Banner Group(s) do you want to use in the Footer Position 3?<br />Leave blank for none',19,67,NULL,'2005-11-01 09:12:13','',''),(366,'Banner Display Groups - Side Box banner_box','SHOW_BANNERS_GROUP_SET7','SideBox-Banners','The Banner Display Groups can be from 1 Banner Group or Multiple Banner Groups<br /><br />For Multiple Banner Groups enter the Banner Group Name separated by a colon <strong>:</strong><br /><br />Example: Wide-Banners:SideBox-Banners<br />Default Group is SideBox-Banners<br /><br />What Banner Group(s) do you want to use in the Side Box - banner_box?<br />Leave blank for none',19,70,NULL,'2005-11-01 09:12:13','',''),(367,'Banner Display Groups - Side Box banner_box2','SHOW_BANNERS_GROUP_SET8','SideBox-Banners','The Banner Display Groups can be from 1 Banner Group or Multiple Banner Groups<br /><br />For Multiple Banner Groups enter the Banner Group Name separated by a colon <strong>:</strong><br /><br />Example: Wide-Banners:SideBox-Banners<br />Default Group is SideBox-Banners<br /><br />What Banner Group(s) do you want to use in the Side Box - banner_box2?<br />Leave blank for none',19,71,NULL,'2005-11-01 09:12:13','',''),(368,'Banner Display Group - Side Box banner_box_all','SHOW_BANNERS_GROUP_SET_ALL','BannersAll','The Banner Display Group may only be from one (1) Banner Group for the Banner All sidebox<br /><br />Default Group is BannersAll<br /><br />What Banner Group do you want to use in the Side Box - banner_box_all?<br />Leave blank for none',19,72,NULL,'2005-11-01 09:12:13','',''),(369,'Footer - Show IP Address status','SHOW_FOOTER_IP','1','Show Customer IP Address in the Footer<br />0= off<br />1= on<br />Should the Customer IP Address show in the footer?',19,80,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(370,'Product Discount Quantities - Add how many blank discounts?','DISCOUNT_QTY_ADD','5','How many blank discount quantities should be added for Product Pricing?',19,90,NULL,'2005-11-01 09:12:13','',''),(371,'Product Discount Quantities - Display how many per row?','DISCOUNT_QUANTITY_PRICES_COLUMN','5','How many discount quantities should show per row on Product Info Pages?',19,95,NULL,'2005-11-01 09:12:13','',''),(372,'Categories/Products Display Sort Order','CATEGORIES_PRODUCTS_SORT_ORDER','0','Categories/Products Display Sort Order<br />0= Products Sort Order/Name<br />1= Products Name<br />2= Products Model',19,100,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\', \'2\'), '),(373,'Option Names and Values Global Add, Copy and Delete Features Status','OPTION_NAMES_VALUES_GLOBAL_STATUS','1','Option Names and Values Global Add, Copy and Delete Features Status<br />0= Hide Features<br />1= Show Features<br />2= Products Model',19,110,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(374,'Categories-Tabs Menu ON/OFF','CATEGORIES_TABS_STATUS','0','Categories-Tabs<br />This enables the display of your store\'s categories as a menu across the top of your header. There are many potential creative uses for this.<br />0= Hide Categories Tabs<br />1= Show Categories Tabs',19,112,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(375,'<strong>Down for Maintenance: ON/OFF</strong>','DOWN_FOR_MAINTENANCE','false','Down for Maintenance <br />(true=on false=off)',20,1,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(376,'Down for Maintenance: filename','DOWN_FOR_MAINTENANCE_FILENAME','down_for_maintenance','Down for Maintenance filename<br />Note: Do not include the extention<br />Default=down_for_maintenance',20,2,NULL,'2005-11-01 09:12:13',NULL,''),(377,'Down for Maintenance: Hide Header','DOWN_FOR_MAINTENANCE_HEADER_OFF','false','Down for Maintenance: Hide Header <br />(true=hide false=show)',20,3,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(378,'Down for Maintenance: Hide Column Left','DOWN_FOR_MAINTENANCE_COLUMN_LEFT_OFF','false','Down for Maintenance: Hide Column Left <br />(true=hide false=show)',20,4,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(379,'Down for Maintenance: Hide Column Right','DOWN_FOR_MAINTENANCE_COLUMN_RIGHT_OFF','false','Down for Maintenance: Hide Column Right <br />(true=hide false=show)',20,5,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(380,'Down for Maintenance: Hide Footer','DOWN_FOR_MAINTENANCE_FOOTER_OFF','false','Down for Maintenance: Hide Footer <br />(true=hide false=show)',20,6,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(381,'Down for Maintenance: Hide Prices','DOWN_FOR_MAINTENANCE_PRICES_OFF','false','Down for Maintenance: Hide Prices <br />(true=hide false=show)',20,7,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(382,'Down For Maintenance (exclude this IP-Address)','EXCLUDE_ADMIN_IP_FOR_MAINTENANCE','your IP (ADMIN)','This IP Address is able to access the website while it is Down For Maintenance (like webmaster)<br />To enter multiple IP Addresses, separate with a comma. If you do not know your IP Address, check in the Footer of your Shop.',20,8,'2003-03-21 13:43:22','2003-03-21 21:20:07',NULL,NULL),(383,'NOTICE PUBLIC Before going Down for Maintenance: ON/OFF','WARN_BEFORE_DOWN_FOR_MAINTENANCE','false','Give a WARNING some time before you put your website Down for Maintenance<br />(true=on false=off)<br />If you set the \'Down For Maintenance: ON/OFF\' to true this will automaticly be updated to false',20,9,'2003-03-21 13:08:25','2003-03-21 11:42:47',NULL,'zen_cfg_select_option(array(\'true\', \'false\'),'),(384,'Date and hours for notice before maintenance','PERIOD_BEFORE_DOWN_FOR_MAINTENANCE','15/05/2003  2-3 PM','Date and hours for notice before maintenance website, enter date and hours for maintenance website',20,10,'2003-03-21 13:08:25','2003-03-21 11:42:47',NULL,NULL),(385,'Display when webmaster has enabled maintenance','DISPLAY_MAINTENANCE_TIME','false','Display when Webmaster has enabled maintenance <br />(true=on false=off)<br />',20,11,'2003-03-21 13:08:25','2003-03-21 11:42:47',NULL,'zen_cfg_select_option(array(\'true\', \'false\'),'),(386,'Display website maintenance period','DISPLAY_MAINTENANCE_PERIOD','false','Display Website maintenance period <br />(true=on false=off)<br />',20,12,'2003-03-21 13:08:25','2003-03-21 11:42:47',NULL,'zen_cfg_select_option(array(\'true\', \'false\'),'),(387,'Website maintenance period','TEXT_MAINTENANCE_PERIOD_TIME','2h00','Enter Website Maintenance period (hh:mm)',20,13,'2003-03-21 13:08:25','2003-03-21 11:42:47',NULL,NULL),(388,'Confirm Terms and Conditions During Checkout Procedure','DISPLAY_CONDITIONS_ON_CHECKOUT','false','Show the Terms and Conditions during the checkout procedure which the customer must agree to.',11,1,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(389,'Confirm Privacy Notice During Account Creation Procedure','DISPLAY_PRIVACY_CONDITIONS','false','Show the Privacy Notice during the account creation procedure which the customer must agree to.',11,2,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'true\', \'false\'), '),(390,'Display Product Image','PRODUCT_NEW_LIST_IMAGE','1102','Do you want to display the Product Image?<br /><br />0= off<br />1st digit Left or Right<br />2nd and 3rd digit Sort Order<br />4th digit number of breaks after<br />',21,1,NULL,'2005-11-01 09:12:13',NULL,NULL),(391,'Display Product Quantity','PRODUCT_NEW_LIST_QUANTITY','1202','Do you want to display the Product Quantity?<br /><br />0= off<br />1st digit Left or Right<br />2nd and 3rd digit Sort Order<br />4th digit number of breaks after<br />',21,2,NULL,'2005-11-01 09:12:13',NULL,NULL),(392,'Display Product Buy Now Button','PRODUCT_NEW_BUY_NOW','1300','Do you want to display the Product Buy Now Button<br /><br />0= off<br />1st digit Left or Right<br />2nd and 3rd digit Sort Order<br />4th digit number of breaks after<br />',21,3,NULL,'2005-11-01 09:12:13',NULL,NULL),(393,'Display Product Name','PRODUCT_NEW_LIST_NAME','2101','Do you want to display the Product Name?<br /><br />0= off<br />1st digit Left or Right<br />2nd and 3rd digit Sort Order<br />4th digit number of breaks after<br />',21,4,NULL,'2005-11-01 09:12:13',NULL,NULL),(394,'Display Product Model','PRODUCT_NEW_LIST_MODEL','2201','Do you want to display the Product Model?<br /><br />0= off<br />1st digit Left or Right<br />2nd and 3rd digit Sort Order<br />4th digit number of breaks after<br />',21,5,NULL,'2005-11-01 09:12:13',NULL,NULL),(395,'Display Product Manufacturer Name','PRODUCT_NEW_LIST_MANUFACTURER','2302','Do you want to display the Product Manufacturer Name?<br /><br />0= off<br />1st digit Left or Right<br />2nd and 3rd digit Sort Order<br />4th digit number of breaks after<br />',21,6,NULL,'2005-11-01 09:12:13',NULL,NULL),(396,'Display Product Price','PRODUCT_NEW_LIST_PRICE','2402','Do you want to display the Product Price<br /><br />0= off<br />1st digit Left or Right<br />2nd and 3rd digit Sort Order<br />4th digit number of breaks after<br />',21,7,NULL,'2005-11-01 09:12:13',NULL,NULL),(397,'Display Product Weight','PRODUCT_NEW_LIST_WEIGHT','2502','Do you want to display the Product Weight?<br /><br />0= off<br />1st digit Left or Right<br />2nd and 3rd digit Sort Order<br />4th digit number of breaks after<br />',21,8,NULL,'2005-11-01 09:12:13',NULL,NULL),(398,'Display Product Date Added','PRODUCT_NEW_LIST_DATE_ADDED','2601','Do you want to display the Product Date Added?<br /><br />0= off<br />1st digit Left or Right<br />2nd and 3rd digit Sort Order<br />4th digit number of breaks after<br />',21,9,NULL,'2005-11-01 09:12:13',NULL,NULL),(399,'Display Product Description','PRODUCT_NEW_LIST_DESCRIPTION','1','Do you want to display the Product Description - First 150 characters?<br />0= off<br />1= on',21,10,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(400,'Display Product Display - Default Sort Order','PRODUCT_NEW_LIST_SORT_DEFAULT','6','What Sort Order Default should be used for New Products Display?<br />Default= 6 for Date New to Old<br /><br />1= Products Name<br />2= Products Name Desc<br />3= Price low to high, Products Name<br />4= Price high to low, Products Name<br />5= Model<br />6= Date Added desc<br />7= Date Added<br />8= Product Sort Order',21,11,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'1\', \'2\', \'3\', \'4\', \'5\', \'6\', \'7\', \'8\'), '),(401,'Default Products New Group ID','PRODUCT_NEW_LIST_GROUP_ID','21','Warning: Only change this if your Products New Group ID has changed from the default of 21<br />What is the configuration_group_id for New Products Listings?',21,12,NULL,'2005-11-01 09:12:13',NULL,NULL),(402,'Display Multiple Products Qty Box Status and Set Button Location','PRODUCT_NEW_LISTING_MULTIPLE_ADD_TO_CART','3','Do you want to display Add Multiple Products Qty Box and Set Button Location?<br />0= off<br />1= Top<br />2= Bottom<br />3= Both',21,25,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\', \'2\', \'3\'), '),(403,'Display Product Image','PRODUCT_FEATURED_LIST_IMAGE','1102','Do you want to display the Product Image?<br /><br />0= off<br />1st digit Left or Right<br />2nd and 3rd digit Sort Order<br />4th digit number of breaks after<br />',22,1,NULL,'2005-11-01 09:12:13',NULL,NULL),(404,'Display Product Quantity','PRODUCT_FEATURED_LIST_QUANTITY','1202','Do you want to display the Product Quantity?<br /><br />0= off<br />1st digit Left or Right<br />2nd and 3rd digit Sort Order<br />4th digit number of breaks after<br />',22,2,NULL,'2005-11-01 09:12:13',NULL,NULL),(405,'Display Product Buy Now Button','PRODUCT_FEATURED_BUY_NOW','1300','Do you want to display the Product Buy Now Button<br /><br />0= off<br />1st digit Left or Right<br />2nd and 3rd digit Sort Order<br />4th digit number of breaks after<br />',22,3,NULL,'2005-11-01 09:12:13',NULL,NULL),(406,'Display Product Name','PRODUCT_FEATURED_LIST_NAME','2101','Do you want to display the Product Name?<br /><br />0= off<br />1st digit Left or Right<br />2nd and 3rd digit Sort Order<br />4th digit number of breaks after<br />',22,4,NULL,'2005-11-01 09:12:13',NULL,NULL),(407,'Display Product Model','PRODUCT_FEATURED_LIST_MODEL','2201','Do you want to display the Product Model?<br /><br />0= off<br />1st digit Left or Right<br />2nd and 3rd digit Sort Order<br />4th digit number of breaks after<br />',22,5,NULL,'2005-11-01 09:12:13',NULL,NULL),(408,'Display Product Manufacturer Name','PRODUCT_FEATURED_LIST_MANUFACTURER','2302','Do you want to display the Product Manufacturer Name?<br /><br />0= off<br />1st digit Left or Right<br />2nd and 3rd digit Sort Order<br />4th digit number of breaks after<br />',22,6,NULL,'2005-11-01 09:12:13',NULL,NULL),(409,'Display Product Price','PRODUCT_FEATURED_LIST_PRICE','2402','Do you want to display the Product Price<br /><br />0= off<br />1st digit Left or Right<br />2nd and 3rd digit Sort Order<br />4th digit number of breaks after<br />',22,7,NULL,'2005-11-01 09:12:13',NULL,NULL),(410,'Display Product Weight','PRODUCT_FEATURED_LIST_WEIGHT','2502','Do you want to display the Product Weight?<br /><br />0= off<br />1st digit Left or Right<br />2nd and 3rd digit Sort Order<br />4th digit number of breaks after<br />',22,8,NULL,'2005-11-01 09:12:13',NULL,NULL),(411,'Display Product Date Added','PRODUCT_FEATURED_LIST_DATE_ADDED','2601','Do you want to display the Product Date Added?<br /><br />0= off<br />1st digit Left or Right<br />2nd and 3rd digit Sort Order<br />4th digit number of breaks after<br />',22,9,NULL,'2005-11-01 09:12:13',NULL,NULL),(412,'Display Product Description','PRODUCT_FEATURED_LIST_DESCRIPTION','1','Do you want to display the Product Description - First 150 characters?',22,10,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(413,'Display Product Display - Default Sort Order','PRODUCT_FEATURED_LIST_SORT_DEFAULT','1','What Sort Order Default should be used for Featured Product Display?<br />Default= 1 for Product Name<br /><br />1= Products Name<br />2= Products Name Desc<br />3= Price low to high, Products Name<br />4= Price high to low, Products Name<br />5= Model<br />6= Date Added desc<br />7= Date Added<br />8= Product Sort Order',22,11,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'1\', \'2\', \'3\', \'4\', \'5\', \'6\', \'7\', \'8\'), '),(414,'Default Featured Products Group ID','PRODUCT_FEATURED_LIST_GROUP_ID','22','Warning: Only change this if your Featured Products Group ID has changed from the default of 22<br />What is the configuration_group_id for Featured Products Listings?',22,12,NULL,'2005-11-01 09:12:13',NULL,NULL),(415,'Display Multiple Products Qty Box Status and Set Button Location','PRODUCT_FEATURED_LISTING_MULTIPLE_ADD_TO_CART','3','Do you want to display Add Multiple Products Qty Box and Set Button Location?<br />0= off<br />1= Top<br />2= Bottom<br />3= Both',22,25,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\', \'2\', \'3\'), '),(416,'Display Product Image','PRODUCT_ALL_LIST_IMAGE','1102','Do you want to display the Product Image?<br /><br />0= off<br />1st digit Left or Right<br />2nd and 3rd digit Sort Order<br />4th digit number of breaks after<br />',23,1,NULL,'2005-11-01 09:12:13',NULL,NULL),(417,'Display Product Quantity','PRODUCT_ALL_LIST_QUANTITY','1202','Do you want to display the Product Quantity?<br /><br />0= off<br />1st digit Left or Right<br />2nd and 3rd digit Sort Order<br />4th digit number of breaks after<br />',23,2,NULL,'2005-11-01 09:12:13',NULL,NULL),(418,'Display Product Buy Now Button','PRODUCT_ALL_BUY_NOW','1300','Do you want to display the Product Buy Now Button<br /><br />0= off<br />1st digit Left or Right<br />2nd and 3rd digit Sort Order<br />4th digit number of breaks after<br />',23,3,NULL,'2005-11-01 09:12:13',NULL,NULL),(419,'Display Product Name','PRODUCT_ALL_LIST_NAME','2101','Do you want to display the Product Name?<br /><br />0= off<br />1st digit Left or Right<br />2nd and 3rd digit Sort Order<br />4th digit number of breaks after<br />',23,4,NULL,'2005-11-01 09:12:13',NULL,NULL),(420,'Display Product Model','PRODUCT_ALL_LIST_MODEL','2201','Do you want to display the Product Model?<br /><br />0= off<br />1st digit Left or Right<br />2nd and 3rd digit Sort Order<br />4th digit number of breaks after<br />',23,5,NULL,'2005-11-01 09:12:13',NULL,NULL),(421,'Display Product Manufacturer Name','PRODUCT_ALL_LIST_MANUFACTURER','2302','Do you want to display the Product Manufacturer Name?<br /><br />0= off<br />1st digit Left or Right<br />2nd and 3rd digit Sort Order<br />4th digit number of breaks after<br />',23,6,NULL,'2005-11-01 09:12:13',NULL,NULL),(422,'Display Product Price','PRODUCT_ALL_LIST_PRICE','2402','Do you want to display the Product Price<br /><br />0= off<br />1st digit Left or Right<br />2nd and 3rd digit Sort Order<br />4th digit number of breaks after<br />',23,7,NULL,'2005-11-01 09:12:13',NULL,NULL),(423,'Display Product Weight','PRODUCT_ALL_LIST_WEIGHT','2502','Do you want to display the Product Weight?<br /><br />0= off<br />1st digit Left or Right<br />2nd and 3rd digit Sort Order<br />4th digit number of breaks after<br />',23,8,NULL,'2005-11-01 09:12:13',NULL,NULL),(424,'Display Product Date Added','PRODUCT_ALL_LIST_DATE_ADDED','2601','Do you want to display the Product Date Added?<br /><br />0= off<br />1st digit Left or Right<br />2nd and 3rd digit Sort Order<br />4th digit number of breaks after<br />',23,9,NULL,'2005-11-01 09:12:13',NULL,NULL),(425,'Display Product Description','PRODUCT_ALL_LIST_DESCRIPTION','1','Do you want to display the Product Description - First 150 characters?',23,10,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(426,'Display Product Display - Default Sort Order','PRODUCT_ALL_LIST_SORT_DEFAULT','1','What Sort Order Default should be used for All Products Display?<br />Default= 1 for Product Name<br /><br />1= Products Name<br />2= Products Name Desc<br />3= Price low to high, Products Name<br />4= Price high to low, Products Name<br />5= Model<br />6= Date Added desc<br />7= Date Added<br />8= Product Sort Order',23,11,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'1\', \'2\', \'3\', \'4\', \'5\', \'6\', \'7\', \'8\'), '),(427,'Default Products All Group ID','PRODUCT_ALL_LIST_GROUP_ID','23','Warning: Only change this if your Products All Group ID has changed from the default of 23<br />What is the configuration_group_id for Products All Listings?',23,12,NULL,'2005-11-01 09:12:13',NULL,NULL),(428,'Display Multiple Products Qty Box Status and Set Button Location','PRODUCT_ALL_LISTING_MULTIPLE_ADD_TO_CART','3','Do you want to display Add Multiple Products Qty Box and Set Button Location?<br />0= off<br />1= Top<br />2= Bottom<br />3= Both',23,25,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\', \'2\', \'3\'), '),(429,'Show New Products on Main Page','SHOW_PRODUCT_INFO_MAIN_NEW_PRODUCTS','1','Show New Products on Main Page<br />0= off or set the sort order',24,65,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\', \'2\', \'3\', \'4\'), '),(430,'Show Featured Products on Main Page','SHOW_PRODUCT_INFO_MAIN_FEATURED_PRODUCTS','2','Show Featured Products on Main Page<br />0= off or set the sort order',24,66,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\', \'2\', \'3\', \'4\'), '),(431,'Show Special Products on Main Page','SHOW_PRODUCT_INFO_MAIN_SPECIALS_PRODUCTS','3','Show Special Products on Main Page<br />0= off or set the sort order',24,67,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\', \'2\', \'3\', \'4\'), '),(432,'Show Upcoming Products on Main Page','SHOW_PRODUCT_INFO_MAIN_UPCOMING','4','Show Upcoming Products on Main Page<br />0= off or set the sort order',24,68,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\', \'2\', \'3\', \'4\'), '),(433,'Show New Products on Main Page - Category with SubCategories','SHOW_PRODUCT_INFO_CATEGORY_NEW_PRODUCTS','1','Show New Products on Main Page - Category with SubCategories<br />0= off or set the sort order',24,70,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\', \'2\', \'3\', \'4\'), '),(434,'Show Featured Products on Main Page - Category with SubCategories','SHOW_PRODUCT_INFO_CATEGORY_FEATURED_PRODUCTS','2','Show Featured Products on Main Page - Category with SubCategories<br />0= off or set the sort order',24,71,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\', \'2\', \'3\', \'4\'), '),(435,'Show Special Products on Main Page - Category with SubCategories','SHOW_PRODUCT_INFO_CATEGORY_SPECIALS_PRODUCTS','3','Show Special Products on Main Page - Category with SubCategories<br />0= off or set the sort order',24,72,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\', \'2\', \'3\', \'4\'), '),(436,'Show Upcoming Products on Main Page - Category with SubCategories','SHOW_PRODUCT_INFO_CATEGORY_UPCOMING','4','Show Upcoming Products on Main Page - Category with SubCategories<br />0= off or set the sort order',24,73,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\', \'2\', \'3\', \'4\'), '),(437,'Show New Products on Main Page - Errors and Missing Products Page','SHOW_PRODUCT_INFO_MISSING_NEW_PRODUCTS','1','Show New Products on Main Page - Errors and Missing Product<br />0= off or set the sort order',24,75,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\', \'2\', \'3\', \'4\'), '),(438,'Show Featured Products on Main Page - Errors and Missing Products Page','SHOW_PRODUCT_INFO_MISSING_FEATURED_PRODUCTS','2','Show Featured Products on Main Page - Errors and Missing Product<br />0= off or set the sort order',24,76,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\', \'2\', \'3\', \'4\'), '),(439,'Show Special Products on Main Page - Errors and Missing Products Page','SHOW_PRODUCT_INFO_MISSING_SPECIALS_PRODUCTS','3','Show Special Products on Main Page - Errors and Missing Product<br />0= off or set the sort order',24,77,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\', \'2\', \'3\', \'4\'), '),(440,'Show Upcoming Products on Main Page - Errors and Missing Products Page','SHOW_PRODUCT_INFO_MISSING_UPCOMING','4','Show Upcoming Products on Main Page - Errors and Missing Product<br />0= off or set the sort order',24,78,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\', \'2\', \'3\', \'4\'), '),(441,'Show New Products - below Product Listing','SHOW_PRODUCT_INFO_LISTING_BELOW_NEW_PRODUCTS','1','Show New Products below Product Listing<br />0= off or set the sort order',24,85,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\', \'2\', \'3\', \'4\'), '),(442,'Show Featured Products - below Product Listing','SHOW_PRODUCT_INFO_LISTING_BELOW_FEATURED_PRODUCTS','2','Show Featured Products below Product Listing<br />0= off or set the sort order',24,86,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\', \'2\', \'3\', \'4\'), '),(443,'Show Special Products - below Product Listing','SHOW_PRODUCT_INFO_LISTING_BELOW_SPECIALS_PRODUCTS','3','Show Special Products below Product Listing<br />0= off or set the sort order',24,87,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\', \'2\', \'3\', \'4\'), '),(444,'Show Upcoming Products - below Product Listing','SHOW_PRODUCT_INFO_LISTING_BELOW_UPCOMING','4','Show Upcoming Products below Product Listing<br />0= off or set the sort order',24,88,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\', \'2\', \'3\', \'4\'), '),(445,'New Products Columns per Row','SHOW_PRODUCT_INFO_COLUMNS_NEW_PRODUCTS','3','New Products Columns per Row',24,95,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'1\', \'2\', \'3\', \'4\'), '),(446,'Featured Products Columns per Row','SHOW_PRODUCT_INFO_COLUMNS_FEATURED_PRODUCTS','3','Featured Products Columns per Row',24,96,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'1\', \'2\', \'3\', \'4\'), '),(447,'Special Products Columns per Row','SHOW_PRODUCT_INFO_COLUMNS_SPECIALS_PRODUCTS','3','Special Products Columns per Row',24,97,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'1\', \'2\', \'3\', \'4\'), '),(448,'Filter Product Listing for Current Top Level Category When Enabled','SHOW_PRODUCT_INFO_ALL_PRODUCTS','1','Filter the products when Product Listing is enabled for current Main Category or show products from all categories?<br />0= Filter Off 1=Filter On ',24,100,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'), '),(449,'Define Main Page Status','DEFINE_MAIN_PAGE_STATUS','1','Enable the Defined Main Page text?<br />0= OFF<br />1= ON',25,60,'2005-11-01 09:12:13','2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'),'),(450,'Define Contact Us Status','DEFINE_CONTACT_US_STATUS','1','Enable the Defined Contact Us text?<br />0= OFF<br />1= ON',25,61,'2005-11-01 09:12:13','2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'),'),(451,'Define Privacy Status','DEFINE_PRIVACY_STATUS','1','Enable the Defined Privacy text?<br />0= OFF<br />1= ON',25,62,'2005-11-01 09:12:13','2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'),'),(452,'Define Shipping & Returns','DEFINE_SHIPPINGINFO_STATUS','1','Enable the Defined Shipping & Returns text?<br />0= OFF<br />1= ON',25,63,'2005-11-01 09:12:13','2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'),'),(453,'Define Conditions of Use','DEFINE_CONDITIONS_STATUS','1','Enable the Defined Conditions of Use text?<br />0= OFF<br />1= ON',25,64,'2005-11-01 09:12:13','2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'),'),(454,'Define Checkout Success','DEFINE_CHECKOUT_SUCCESS_STATUS','1','Enable the Defined Checkout Success text?<br />0= OFF<br />1= ON',25,65,'2005-11-01 09:12:13','2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'),'),(455,'Define Page 2','DEFINE_PAGE_2_STATUS','1','Enable the Defined Page 2 text?<br />0= OFF<br />1= ON',25,82,'2005-11-01 09:12:13','2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'),'),(456,'Define Page 3','DEFINE_PAGE_3_STATUS','1','Enable the Defined Page 3 text?<br />0= OFF<br />1= ON',25,83,'2005-11-01 09:12:13','2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'),'),(457,'Define Page 4','DEFINE_PAGE_4_STATUS','1','Enable the Defined Page 4 text?<br />0= OFF<br />1= ON',25,84,'2005-11-01 09:12:13','2005-11-01 09:12:13',NULL,'zen_cfg_select_option(array(\'0\', \'1\'),');
/*!40000 ALTER TABLE `zen_configuration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_configuration_group`
--

DROP TABLE IF EXISTS `zen_configuration_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_configuration_group` (
  `configuration_group_id` int(11) NOT NULL AUTO_INCREMENT,
  `configuration_group_title` varchar(64) NOT NULL DEFAULT '',
  `configuration_group_description` varchar(255) NOT NULL DEFAULT '',
  `sort_order` int(5) DEFAULT NULL,
  `visible` int(1) DEFAULT '1',
  PRIMARY KEY (`configuration_group_id`),
  KEY `idx_visible_zen` (`visible`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_configuration_group`
--

LOCK TABLES `zen_configuration_group` WRITE;
/*!40000 ALTER TABLE `zen_configuration_group` DISABLE KEYS */;
INSERT INTO `zen_configuration_group` (`configuration_group_id`, `configuration_group_title`, `configuration_group_description`, `sort_order`, `visible`) VALUES (1,'My Store','General information about my store',1,1),(2,'Minimum Values','The minimum values for functions / data',2,1),(3,'Maximum Values','The maximum values for functions / data',3,1),(4,'Images','Image parameters',4,1),(5,'Customer Details','Customer account configuration',5,1),(6,'Module Options','Hidden from configuration',6,0),(7,'Shipping/Packaging','Shipping options available at my store',7,1),(8,'Product Listing','Product Listing configuration options',8,1),(9,'Stock','Stock configuration options',9,1),(10,'Logging','Logging configuration options',10,1),(11,'Regulations','Regulation options',16,1),(12,'E-Mail Options','General setting for E-Mail transport and HTML E-Mails',12,1),(13,'Attribute Settings','Configure products attributes settings',13,1),(14,'GZip Compression','GZip compression options',14,1),(15,'Sessions','Session options',15,1),(16,'GV Coupons','Gift Vouchers and Coupons',16,1),(17,'Credit Cards','Credit Cards Accepted',17,1),(18,'Product Info','Product Info Display Options',18,1),(19,'Layout Settings','Layout Options',19,1),(20,'Website Maintenance','Website Maintenance Options',20,1),(21,'New Listing','New Products Listing',21,1),(22,'Featured Listing','Featured Products Listing',22,1),(23,'All Listing','All Products Listing',23,1),(24,'Index Listing','Index Products Listing',24,1),(25,'Define Page Status','Define Main Pages and HTMLArea Options',25,1);
/*!40000 ALTER TABLE `zen_configuration_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_counter`
--

DROP TABLE IF EXISTS `zen_counter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_counter` (
  `startdate` char(8) DEFAULT NULL,
  `counter` int(12) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_counter`
--

LOCK TABLES `zen_counter` WRITE;
/*!40000 ALTER TABLE `zen_counter` DISABLE KEYS */;
INSERT INTO `zen_counter` (`startdate`, `counter`) VALUES ('20051101',52);
/*!40000 ALTER TABLE `zen_counter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_counter_history`
--

DROP TABLE IF EXISTS `zen_counter_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_counter_history` (
  `month` char(8) DEFAULT NULL,
  `counter` int(12) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_counter_history`
--

LOCK TABLES `zen_counter_history` WRITE;
/*!40000 ALTER TABLE `zen_counter_history` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_counter_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_countries`
--

DROP TABLE IF EXISTS `zen_countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_countries` (
  `countries_id` int(11) NOT NULL AUTO_INCREMENT,
  `countries_name` varchar(64) NOT NULL DEFAULT '',
  `countries_iso_code_2` char(2) NOT NULL DEFAULT '',
  `countries_iso_code_3` char(3) NOT NULL DEFAULT '',
  `address_format_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`countries_id`),
  KEY `idx_countries_name_zen` (`countries_name`)
) ENGINE=MyISAM AUTO_INCREMENT=240 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_countries`
--

LOCK TABLES `zen_countries` WRITE;
/*!40000 ALTER TABLE `zen_countries` DISABLE KEYS */;
INSERT INTO `zen_countries` (`countries_id`, `countries_name`, `countries_iso_code_2`, `countries_iso_code_3`, `address_format_id`) VALUES (1,'Afghanistan','AF','AFG',1),(2,'Albania','AL','ALB',1),(3,'Algeria','DZ','DZA',1),(4,'American Samoa','AS','ASM',1),(5,'Andorra','AD','AND',1),(6,'Angola','AO','AGO',1),(7,'Anguilla','AI','AIA',1),(8,'Antarctica','AQ','ATA',1),(9,'Antigua and Barbuda','AG','ATG',1),(10,'Argentina','AR','ARG',1),(11,'Armenia','AM','ARM',1),(12,'Aruba','AW','ABW',1),(13,'Australia','AU','AUS',1),(14,'Austria','AT','AUT',5),(15,'Azerbaijan','AZ','AZE',1),(16,'Bahamas','BS','BHS',1),(17,'Bahrain','BH','BHR',1),(18,'Bangladesh','BD','BGD',1),(19,'Barbados','BB','BRB',1),(20,'Belarus','BY','BLR',1),(21,'Belgium','BE','BEL',1),(22,'Belize','BZ','BLZ',1),(23,'Benin','BJ','BEN',1),(24,'Bermuda','BM','BMU',1),(25,'Bhutan','BT','BTN',1),(26,'Bolivia','BO','BOL',1),(27,'Bosnia and Herzegowina','BA','BIH',1),(28,'Botswana','BW','BWA',1),(29,'Bouvet Island','BV','BVT',1),(30,'Brazil','BR','BRA',1),(31,'British Indian Ocean Territory','IO','IOT',1),(32,'Brunei Darussalam','BN','BRN',1),(33,'Bulgaria','BG','BGR',1),(34,'Burkina Faso','BF','BFA',1),(35,'Burundi','BI','BDI',1),(36,'Cambodia','KH','KHM',1),(37,'Cameroon','CM','CMR',1),(38,'Canada','CA','CAN',1),(39,'Cape Verde','CV','CPV',1),(40,'Cayman Islands','KY','CYM',1),(41,'Central African Republic','CF','CAF',1),(42,'Chad','TD','TCD',1),(43,'Chile','CL','CHL',1),(44,'China','CN','CHN',1),(45,'Christmas Island','CX','CXR',1),(46,'Cocos (Keeling) Islands','CC','CCK',1),(47,'Colombia','CO','COL',1),(48,'Comoros','KM','COM',1),(49,'Congo','CG','COG',1),(50,'Cook Islands','CK','COK',1),(51,'Costa Rica','CR','CRI',1),(52,'Cote D\'Ivoire','CI','CIV',1),(53,'Croatia','HR','HRV',1),(54,'Cuba','CU','CUB',1),(55,'Cyprus','CY','CYP',1),(56,'Czech Republic','CZ','CZE',1),(57,'Denmark','DK','DNK',1),(58,'Djibouti','DJ','DJI',1),(59,'Dominica','DM','DMA',1),(60,'Dominican Republic','DO','DOM',1),(61,'East Timor','TP','TMP',1),(62,'Ecuador','EC','ECU',1),(63,'Egypt','EG','EGY',1),(64,'El Salvador','SV','SLV',1),(65,'Equatorial Guinea','GQ','GNQ',1),(66,'Eritrea','ER','ERI',1),(67,'Estonia','EE','EST',1),(68,'Ethiopia','ET','ETH',1),(69,'Falkland Islands (Malvinas)','FK','FLK',1),(70,'Faroe Islands','FO','FRO',1),(71,'Fiji','FJ','FJI',1),(72,'Finland','FI','FIN',1),(73,'France','FR','FRA',1),(74,'France, Metropolitan','FX','FXX',1),(75,'French Guiana','GF','GUF',1),(76,'French Polynesia','PF','PYF',1),(77,'French Southern Territories','TF','ATF',1),(78,'Gabon','GA','GAB',1),(79,'Gambia','GM','GMB',1),(80,'Georgia','GE','GEO',1),(81,'Germany','DE','DEU',5),(82,'Ghana','GH','GHA',1),(83,'Gibraltar','GI','GIB',1),(84,'Greece','GR','GRC',1),(85,'Greenland','GL','GRL',1),(86,'Grenada','GD','GRD',1),(87,'Guadeloupe','GP','GLP',1),(88,'Guam','GU','GUM',1),(89,'Guatemala','GT','GTM',1),(90,'Guinea','GN','GIN',1),(91,'Guinea-bissau','GW','GNB',1),(92,'Guyana','GY','GUY',1),(93,'Haiti','HT','HTI',1),(94,'Heard and Mc Donald Islands','HM','HMD',1),(95,'Honduras','HN','HND',1),(96,'Hong Kong','HK','HKG',1),(97,'Hungary','HU','HUN',1),(98,'Iceland','IS','ISL',1),(99,'India','IN','IND',1),(100,'Indonesia','ID','IDN',1),(101,'Iran (Islamic Republic of)','IR','IRN',1),(102,'Iraq','IQ','IRQ',1),(103,'Ireland','IE','IRL',1),(104,'Israel','IL','ISR',1),(105,'Italy','IT','ITA',1),(106,'Jamaica','JM','JAM',1),(107,'Japan','JP','JPN',1),(108,'Jordan','JO','JOR',1),(109,'Kazakhstan','KZ','KAZ',1),(110,'Kenya','KE','KEN',1),(111,'Kiribati','KI','KIR',1),(112,'Korea, Democratic People\'s Republic of','KP','PRK',1),(113,'Korea, Republic of','KR','KOR',1),(114,'Kuwait','KW','KWT',1),(115,'Kyrgyzstan','KG','KGZ',1),(116,'Lao People\'s Democratic Republic','LA','LAO',1),(117,'Latvia','LV','LVA',1),(118,'Lebanon','LB','LBN',1),(119,'Lesotho','LS','LSO',1),(120,'Liberia','LR','LBR',1),(121,'Libyan Arab Jamahiriya','LY','LBY',1),(122,'Liechtenstein','LI','LIE',1),(123,'Lithuania','LT','LTU',1),(124,'Luxembourg','LU','LUX',1),(125,'Macau','MO','MAC',1),(126,'Macedonia, The Former Yugoslav Republic of','MK','MKD',1),(127,'Madagascar','MG','MDG',1),(128,'Malawi','MW','MWI',1),(129,'Malaysia','MY','MYS',1),(130,'Maldives','MV','MDV',1),(131,'Mali','ML','MLI',1),(132,'Malta','MT','MLT',1),(133,'Marshall Islands','MH','MHL',1),(134,'Martinique','MQ','MTQ',1),(135,'Mauritania','MR','MRT',1),(136,'Mauritius','MU','MUS',1),(137,'Mayotte','YT','MYT',1),(138,'Mexico','MX','MEX',1),(139,'Micronesia, Federated States of','FM','FSM',1),(140,'Moldova, Republic of','MD','MDA',1),(141,'Monaco','MC','MCO',1),(142,'Mongolia','MN','MNG',1),(143,'Montserrat','MS','MSR',1),(144,'Morocco','MA','MAR',1),(145,'Mozambique','MZ','MOZ',1),(146,'Myanmar','MM','MMR',1),(147,'Namibia','NA','NAM',1),(148,'Nauru','NR','NRU',1),(149,'Nepal','NP','NPL',1),(150,'Netherlands','NL','NLD',1),(151,'Netherlands Antilles','AN','ANT',1),(152,'New Caledonia','NC','NCL',1),(153,'New Zealand','NZ','NZL',1),(154,'Nicaragua','NI','NIC',1),(155,'Niger','NE','NER',1),(156,'Nigeria','NG','NGA',1),(157,'Niue','NU','NIU',1),(158,'Norfolk Island','NF','NFK',1),(159,'Northern Mariana Islands','MP','MNP',1),(160,'Norway','NO','NOR',1),(161,'Oman','OM','OMN',1),(162,'Pakistan','PK','PAK',1),(163,'Palau','PW','PLW',1),(164,'Panama','PA','PAN',1),(165,'Papua New Guinea','PG','PNG',1),(166,'Paraguay','PY','PRY',1),(167,'Peru','PE','PER',1),(168,'Philippines','PH','PHL',1),(169,'Pitcairn','PN','PCN',1),(170,'Poland','PL','POL',1),(171,'Portugal','PT','PRT',1),(172,'Puerto Rico','PR','PRI',1),(173,'Qatar','QA','QAT',1),(174,'Reunion','RE','REU',1),(175,'Romania','RO','ROM',1),(176,'Russian Federation','RU','RUS',1),(177,'Rwanda','RW','RWA',1),(178,'Saint Kitts and Nevis','KN','KNA',1),(179,'Saint Lucia','LC','LCA',1),(180,'Saint Vincent and the Grenadines','VC','VCT',1),(181,'Samoa','WS','WSM',1),(182,'San Marino','SM','SMR',1),(183,'Sao Tome and Principe','ST','STP',1),(184,'Saudi Arabia','SA','SAU',1),(185,'Senegal','SN','SEN',1),(186,'Seychelles','SC','SYC',1),(187,'Sierra Leone','SL','SLE',1),(188,'Singapore','SG','SGP',4),(189,'Slovakia (Slovak Republic)','SK','SVK',1),(190,'Slovenia','SI','SVN',1),(191,'Solomon Islands','SB','SLB',1),(192,'Somalia','SO','SOM',1),(193,'South Africa','ZA','ZAF',1),(194,'South Georgia and the South Sandwich Islands','GS','SGS',1),(195,'Spain','ES','ESP',3),(196,'Sri Lanka','LK','LKA',1),(197,'St. Helena','SH','SHN',1),(198,'St. Pierre and Miquelon','PM','SPM',1),(199,'Sudan','SD','SDN',1),(200,'Suriname','SR','SUR',1),(201,'Svalbard and Jan Mayen Islands','SJ','SJM',1),(202,'Swaziland','SZ','SWZ',1),(203,'Sweden','SE','SWE',1),(204,'Switzerland','CH','CHE',1),(205,'Syrian Arab Republic','SY','SYR',1),(206,'Taiwan','TW','TWN',1),(207,'Tajikistan','TJ','TJK',1),(208,'Tanzania, United Republic of','TZ','TZA',1),(209,'Thailand','TH','THA',1),(210,'Togo','TG','TGO',1),(211,'Tokelau','TK','TKL',1),(212,'Tonga','TO','TON',1),(213,'Trinidad and Tobago','TT','TTO',1),(214,'Tunisia','TN','TUN',1),(215,'Turkey','TR','TUR',1),(216,'Turkmenistan','TM','TKM',1),(217,'Turks and Caicos Islands','TC','TCA',1),(218,'Tuvalu','TV','TUV',1),(219,'Uganda','UG','UGA',1),(220,'Ukraine','UA','UKR',1),(221,'United Arab Emirates','AE','ARE',1),(222,'United Kingdom','GB','GBR',1),(223,'United States','US','USA',2),(224,'United States Minor Outlying Islands','UM','UMI',1),(225,'Uruguay','UY','URY',1),(226,'Uzbekistan','UZ','UZB',1),(227,'Vanuatu','VU','VUT',1),(228,'Vatican City State (Holy See)','VA','VAT',1),(229,'Venezuela','VE','VEN',1),(230,'Viet Nam','VN','VNM',1),(231,'Virgin Islands (British)','VG','VGB',1),(232,'Virgin Islands (U.S.)','VI','VIR',1),(233,'Wallis and Futuna Islands','WF','WLF',1),(234,'Western Sahara','EH','ESH',1),(235,'Yemen','YE','YEM',1),(236,'Yugoslavia','YU','YUG',1),(237,'Zaire','ZR','ZAR',1),(238,'Zambia','ZM','ZMB',1),(239,'Zimbabwe','ZW','ZWE',1);
/*!40000 ALTER TABLE `zen_countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_coupon_email_track`
--

DROP TABLE IF EXISTS `zen_coupon_email_track`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_coupon_email_track` (
  `unique_id` int(11) NOT NULL AUTO_INCREMENT,
  `coupon_id` int(11) NOT NULL DEFAULT '0',
  `customer_id_sent` int(11) NOT NULL DEFAULT '0',
  `sent_firstname` varchar(32) DEFAULT NULL,
  `sent_lastname` varchar(32) DEFAULT NULL,
  `emailed_to` varchar(32) DEFAULT NULL,
  `date_sent` datetime NOT NULL DEFAULT '0001-01-01 00:00:00',
  PRIMARY KEY (`unique_id`),
  KEY `idx_coupon_id_zen` (`coupon_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_coupon_email_track`
--

LOCK TABLES `zen_coupon_email_track` WRITE;
/*!40000 ALTER TABLE `zen_coupon_email_track` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_coupon_email_track` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_coupon_gv_customer`
--

DROP TABLE IF EXISTS `zen_coupon_gv_customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_coupon_gv_customer` (
  `customer_id` int(5) NOT NULL DEFAULT '0',
  `amount` decimal(8,4) NOT NULL DEFAULT '0.0000',
  PRIMARY KEY (`customer_id`),
  KEY `idx_customer_id_zen` (`customer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_coupon_gv_customer`
--

LOCK TABLES `zen_coupon_gv_customer` WRITE;
/*!40000 ALTER TABLE `zen_coupon_gv_customer` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_coupon_gv_customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_coupon_gv_queue`
--

DROP TABLE IF EXISTS `zen_coupon_gv_queue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_coupon_gv_queue` (
  `unique_id` int(5) NOT NULL AUTO_INCREMENT,
  `customer_id` int(5) NOT NULL DEFAULT '0',
  `order_id` int(5) NOT NULL DEFAULT '0',
  `amount` decimal(8,4) NOT NULL DEFAULT '0.0000',
  `date_created` datetime NOT NULL DEFAULT '0001-01-01 00:00:00',
  `ipaddr` varchar(32) NOT NULL DEFAULT '',
  `release_flag` char(1) NOT NULL DEFAULT 'N',
  PRIMARY KEY (`unique_id`),
  KEY `idx_cust_id_order_id_zen` (`customer_id`,`order_id`),
  KEY `idx_release_flag_zen` (`release_flag`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_coupon_gv_queue`
--

LOCK TABLES `zen_coupon_gv_queue` WRITE;
/*!40000 ALTER TABLE `zen_coupon_gv_queue` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_coupon_gv_queue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_coupon_redeem_track`
--

DROP TABLE IF EXISTS `zen_coupon_redeem_track`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_coupon_redeem_track` (
  `unique_id` int(11) NOT NULL AUTO_INCREMENT,
  `coupon_id` int(11) NOT NULL DEFAULT '0',
  `customer_id` int(11) NOT NULL DEFAULT '0',
  `redeem_date` datetime NOT NULL DEFAULT '0001-01-01 00:00:00',
  `redeem_ip` varchar(32) NOT NULL DEFAULT '',
  `order_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`unique_id`),
  KEY `idx_coupon_id_zen` (`coupon_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_coupon_redeem_track`
--

LOCK TABLES `zen_coupon_redeem_track` WRITE;
/*!40000 ALTER TABLE `zen_coupon_redeem_track` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_coupon_redeem_track` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_coupon_restrict`
--

DROP TABLE IF EXISTS `zen_coupon_restrict`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_coupon_restrict` (
  `restrict_id` int(11) NOT NULL AUTO_INCREMENT,
  `coupon_id` int(11) NOT NULL DEFAULT '0',
  `product_id` int(11) NOT NULL DEFAULT '0',
  `category_id` int(11) NOT NULL DEFAULT '0',
  `coupon_restrict` char(1) NOT NULL DEFAULT 'N',
  PRIMARY KEY (`restrict_id`),
  KEY `idx_coup_id_prod_id_zen` (`coupon_id`,`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_coupon_restrict`
--

LOCK TABLES `zen_coupon_restrict` WRITE;
/*!40000 ALTER TABLE `zen_coupon_restrict` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_coupon_restrict` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_coupons`
--

DROP TABLE IF EXISTS `zen_coupons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_coupons` (
  `coupon_id` int(11) NOT NULL AUTO_INCREMENT,
  `coupon_type` char(1) NOT NULL DEFAULT 'F',
  `coupon_code` varchar(32) NOT NULL DEFAULT '',
  `coupon_amount` decimal(8,4) NOT NULL DEFAULT '0.0000',
  `coupon_minimum_order` decimal(8,4) NOT NULL DEFAULT '0.0000',
  `coupon_start_date` datetime NOT NULL DEFAULT '0001-01-01 00:00:00',
  `coupon_expire_date` datetime NOT NULL DEFAULT '0001-01-01 00:00:00',
  `uses_per_coupon` int(5) NOT NULL DEFAULT '1',
  `uses_per_user` int(5) NOT NULL DEFAULT '0',
  `restrict_to_products` varchar(255) DEFAULT NULL,
  `restrict_to_categories` varchar(255) DEFAULT NULL,
  `restrict_to_customers` text,
  `coupon_active` char(1) NOT NULL DEFAULT 'Y',
  `date_created` datetime NOT NULL DEFAULT '0001-01-01 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0001-01-01 00:00:00',
  PRIMARY KEY (`coupon_id`),
  KEY `idx_active_type_zen` (`coupon_active`,`coupon_type`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_coupons`
--

LOCK TABLES `zen_coupons` WRITE;
/*!40000 ALTER TABLE `zen_coupons` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_coupons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_coupons_description`
--

DROP TABLE IF EXISTS `zen_coupons_description`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_coupons_description` (
  `coupon_id` int(11) NOT NULL DEFAULT '0',
  `language_id` int(11) NOT NULL DEFAULT '0',
  `coupon_name` varchar(32) NOT NULL DEFAULT '',
  `coupon_description` text,
  PRIMARY KEY (`coupon_id`,`language_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_coupons_description`
--

LOCK TABLES `zen_coupons_description` WRITE;
/*!40000 ALTER TABLE `zen_coupons_description` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_coupons_description` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_currencies`
--

DROP TABLE IF EXISTS `zen_currencies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_currencies` (
  `currencies_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(32) NOT NULL DEFAULT '',
  `code` char(3) NOT NULL DEFAULT '',
  `symbol_left` varchar(24) DEFAULT NULL,
  `symbol_right` varchar(24) DEFAULT NULL,
  `decimal_point` char(1) DEFAULT NULL,
  `thousands_point` char(1) DEFAULT NULL,
  `decimal_places` char(1) DEFAULT NULL,
  `value` float(13,8) DEFAULT NULL,
  `last_updated` datetime DEFAULT NULL,
  PRIMARY KEY (`currencies_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_currencies`
--

LOCK TABLES `zen_currencies` WRITE;
/*!40000 ALTER TABLE `zen_currencies` DISABLE KEYS */;
INSERT INTO `zen_currencies` (`currencies_id`, `title`, `code`, `symbol_left`, `symbol_right`, `decimal_point`, `thousands_point`, `decimal_places`, `value`, `last_updated`) VALUES (1,'US Dollar','USD','$','','.',',','2',1.00000000,'2005-11-01 09:12:13'),(2,'Euro','EUR','','EUR','.',',','2',1.10360003,'2005-11-01 09:12:13');
/*!40000 ALTER TABLE `zen_currencies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_customers`
--

DROP TABLE IF EXISTS `zen_customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_customers` (
  `customers_id` int(11) NOT NULL AUTO_INCREMENT,
  `customers_gender` char(1) NOT NULL DEFAULT '',
  `customers_firstname` varchar(32) NOT NULL DEFAULT '',
  `customers_lastname` varchar(32) NOT NULL DEFAULT '',
  `customers_dob` datetime NOT NULL DEFAULT '0001-01-01 00:00:00',
  `customers_email_address` varchar(96) NOT NULL DEFAULT '',
  `customers_nick` varchar(96) NOT NULL DEFAULT '',
  `customers_default_address_id` int(11) NOT NULL DEFAULT '0',
  `customers_telephone` varchar(32) NOT NULL DEFAULT '',
  `customers_fax` varchar(32) DEFAULT NULL,
  `customers_password` varchar(40) NOT NULL DEFAULT '',
  `customers_newsletter` char(1) DEFAULT NULL,
  `customers_group_pricing` int(11) NOT NULL DEFAULT '0',
  `customers_email_format` varchar(4) NOT NULL DEFAULT 'TEXT',
  `customers_authorization` int(1) NOT NULL DEFAULT '0',
  `customers_referral` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`customers_id`),
  KEY `idx_email_address_zen` (`customers_email_address`),
  KEY `idx_referral_zen` (`customers_referral`(10)),
  KEY `idx_grp_pricing_zen` (`customers_group_pricing`),
  KEY `idx_nick_zen` (`customers_nick`),
  KEY `idx_newsletter_zen` (`customers_newsletter`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_customers`
--

LOCK TABLES `zen_customers` WRITE;
/*!40000 ALTER TABLE `zen_customers` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_customers_basket`
--

DROP TABLE IF EXISTS `zen_customers_basket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_customers_basket` (
  `customers_basket_id` int(11) NOT NULL AUTO_INCREMENT,
  `customers_id` int(11) NOT NULL DEFAULT '0',
  `products_id` tinytext NOT NULL,
  `customers_basket_quantity` float NOT NULL DEFAULT '0',
  `final_price` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `customers_basket_date_added` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`customers_basket_id`),
  KEY `idx_customers_id_zen` (`customers_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_customers_basket`
--

LOCK TABLES `zen_customers_basket` WRITE;
/*!40000 ALTER TABLE `zen_customers_basket` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_customers_basket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_customers_basket_attributes`
--

DROP TABLE IF EXISTS `zen_customers_basket_attributes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_customers_basket_attributes` (
  `customers_basket_attributes_id` int(11) NOT NULL AUTO_INCREMENT,
  `customers_id` int(11) NOT NULL DEFAULT '0',
  `products_id` tinytext NOT NULL,
  `products_options_id` varchar(64) NOT NULL DEFAULT '0',
  `products_options_value_id` int(11) NOT NULL DEFAULT '0',
  `products_options_value_text` varchar(64) DEFAULT NULL,
  `products_options_sort_order` text NOT NULL,
  PRIMARY KEY (`customers_basket_attributes_id`),
  KEY `idx_cust_id_prod_id_zen` (`customers_id`,`products_id`(36))
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_customers_basket_attributes`
--

LOCK TABLES `zen_customers_basket_attributes` WRITE;
/*!40000 ALTER TABLE `zen_customers_basket_attributes` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_customers_basket_attributes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_customers_info`
--

DROP TABLE IF EXISTS `zen_customers_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_customers_info` (
  `customers_info_id` int(11) NOT NULL DEFAULT '0',
  `customers_info_date_of_last_logon` datetime DEFAULT NULL,
  `customers_info_number_of_logons` int(5) DEFAULT NULL,
  `customers_info_date_account_created` datetime DEFAULT NULL,
  `customers_info_date_account_last_modified` datetime DEFAULT NULL,
  `global_product_notifications` int(1) DEFAULT '0',
  PRIMARY KEY (`customers_info_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_customers_info`
--

LOCK TABLES `zen_customers_info` WRITE;
/*!40000 ALTER TABLE `zen_customers_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_customers_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_customers_wishlist`
--

DROP TABLE IF EXISTS `zen_customers_wishlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_customers_wishlist` (
  `products_id` int(13) NOT NULL DEFAULT '0',
  `customers_id` int(13) NOT NULL DEFAULT '0',
  `products_model` varchar(13) DEFAULT NULL,
  `products_name` varchar(64) NOT NULL DEFAULT '',
  `products_price` decimal(8,2) NOT NULL DEFAULT '0.00',
  `final_price` decimal(8,2) NOT NULL DEFAULT '0.00',
  `products_quantity` int(2) NOT NULL DEFAULT '0',
  `wishlist_name` varchar(64) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_customers_wishlist`
--

LOCK TABLES `zen_customers_wishlist` WRITE;
/*!40000 ALTER TABLE `zen_customers_wishlist` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_customers_wishlist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_db_cache`
--

DROP TABLE IF EXISTS `zen_db_cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_db_cache` (
  `cache_entry_name` varchar(64) NOT NULL DEFAULT '',
  `cache_data` blob,
  `cache_entry_created` int(15) DEFAULT NULL,
  PRIMARY KEY (`cache_entry_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_db_cache`
--

LOCK TABLES `zen_db_cache` WRITE;
/*!40000 ALTER TABLE `zen_db_cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_db_cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_email_archive`
--

DROP TABLE IF EXISTS `zen_email_archive`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_email_archive` (
  `archive_id` int(11) NOT NULL AUTO_INCREMENT,
  `email_to_name` varchar(96) NOT NULL DEFAULT '',
  `email_to_address` varchar(96) NOT NULL DEFAULT '',
  `email_from_name` varchar(96) NOT NULL DEFAULT '',
  `email_from_address` varchar(96) NOT NULL DEFAULT '',
  `email_subject` varchar(255) NOT NULL DEFAULT '',
  `email_html` text NOT NULL,
  `email_text` text NOT NULL,
  `date_sent` datetime NOT NULL DEFAULT '0001-01-01 00:00:00',
  `module` varchar(64) NOT NULL DEFAULT '',
  PRIMARY KEY (`archive_id`),
  KEY `idx_email_to_address_zen` (`email_to_address`),
  KEY `idx_module_zen` (`module`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_email_archive`
--

LOCK TABLES `zen_email_archive` WRITE;
/*!40000 ALTER TABLE `zen_email_archive` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_email_archive` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_featured`
--

DROP TABLE IF EXISTS `zen_featured`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_featured` (
  `featured_id` int(11) NOT NULL AUTO_INCREMENT,
  `products_id` int(11) NOT NULL DEFAULT '0',
  `featured_date_added` datetime DEFAULT NULL,
  `featured_last_modified` datetime DEFAULT NULL,
  `expires_date` date NOT NULL DEFAULT '0001-01-01',
  `date_status_change` datetime DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `featured_date_available` date NOT NULL DEFAULT '0001-01-01',
  PRIMARY KEY (`featured_id`),
  KEY `idx_status_zen` (`status`),
  KEY `idx_products_id_zen` (`products_id`),
  KEY `idx_date_avail_zen` (`featured_date_available`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_featured`
--

LOCK TABLES `zen_featured` WRITE;
/*!40000 ALTER TABLE `zen_featured` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_featured` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_files_uploaded`
--

DROP TABLE IF EXISTS `zen_files_uploaded`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_files_uploaded` (
  `files_uploaded_id` int(11) NOT NULL AUTO_INCREMENT,
  `sesskey` varchar(32) DEFAULT NULL,
  `customers_id` int(11) DEFAULT NULL,
  `files_uploaded_name` varchar(64) NOT NULL DEFAULT '',
  PRIMARY KEY (`files_uploaded_id`),
  KEY `idx_customers_id_zen` (`customers_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Must always have either a sesskey or customers_id';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_files_uploaded`
--

LOCK TABLES `zen_files_uploaded` WRITE;
/*!40000 ALTER TABLE `zen_files_uploaded` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_files_uploaded` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_geo_zones`
--

DROP TABLE IF EXISTS `zen_geo_zones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_geo_zones` (
  `geo_zone_id` int(11) NOT NULL AUTO_INCREMENT,
  `geo_zone_name` varchar(32) NOT NULL DEFAULT '',
  `geo_zone_description` varchar(255) NOT NULL DEFAULT '',
  `last_modified` datetime DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT '0001-01-01 00:00:00',
  PRIMARY KEY (`geo_zone_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_geo_zones`
--

LOCK TABLES `zen_geo_zones` WRITE;
/*!40000 ALTER TABLE `zen_geo_zones` DISABLE KEYS */;
INSERT INTO `zen_geo_zones` (`geo_zone_id`, `geo_zone_name`, `geo_zone_description`, `last_modified`, `date_added`) VALUES (1,'Florida','Florida local sales tax zone',NULL,'2005-11-01 09:12:13');
/*!40000 ALTER TABLE `zen_geo_zones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_get_terms_to_filter`
--

DROP TABLE IF EXISTS `zen_get_terms_to_filter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_get_terms_to_filter` (
  `get_term_name` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`get_term_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_get_terms_to_filter`
--

LOCK TABLES `zen_get_terms_to_filter` WRITE;
/*!40000 ALTER TABLE `zen_get_terms_to_filter` DISABLE KEYS */;
INSERT INTO `zen_get_terms_to_filter` (`get_term_name`) VALUES ('manufacturers_id'),('music_genre_id'),('record_company_id');
/*!40000 ALTER TABLE `zen_get_terms_to_filter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_group_pricing`
--

DROP TABLE IF EXISTS `zen_group_pricing`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_group_pricing` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(32) NOT NULL DEFAULT '',
  `group_percentage` decimal(5,2) NOT NULL DEFAULT '0.00',
  `last_modified` datetime DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT '0001-01-01 00:00:00',
  PRIMARY KEY (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_group_pricing`
--

LOCK TABLES `zen_group_pricing` WRITE;
/*!40000 ALTER TABLE `zen_group_pricing` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_group_pricing` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_languages`
--

DROP TABLE IF EXISTS `zen_languages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_languages` (
  `languages_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL DEFAULT '',
  `code` char(2) NOT NULL DEFAULT '',
  `image` varchar(64) DEFAULT NULL,
  `directory` varchar(32) DEFAULT NULL,
  `sort_order` int(3) DEFAULT NULL,
  PRIMARY KEY (`languages_id`),
  KEY `idx_languages_name_zen` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_languages`
--

LOCK TABLES `zen_languages` WRITE;
/*!40000 ALTER TABLE `zen_languages` DISABLE KEYS */;
INSERT INTO `zen_languages` (`languages_id`, `name`, `code`, `image`, `directory`, `sort_order`) VALUES (1,'English','en','icon.gif','english',1);
/*!40000 ALTER TABLE `zen_languages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_layout_boxes`
--

DROP TABLE IF EXISTS `zen_layout_boxes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_layout_boxes` (
  `layout_id` int(11) NOT NULL AUTO_INCREMENT,
  `layout_template` varchar(64) NOT NULL DEFAULT '',
  `layout_box_name` varchar(64) NOT NULL DEFAULT '',
  `layout_box_status` tinyint(1) NOT NULL DEFAULT '0',
  `layout_box_location` tinyint(1) NOT NULL DEFAULT '0',
  `layout_box_sort_order` int(11) NOT NULL DEFAULT '0',
  `layout_box_sort_order_single` int(11) NOT NULL DEFAULT '0',
  `layout_box_status_single` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`layout_id`),
  KEY `idx_name_template_zen` (`layout_template`,`layout_box_name`),
  KEY `idx_layout_box_status_zen` (`layout_box_status`)
) ENGINE=MyISAM AUTO_INCREMENT=119 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_layout_boxes`
--

LOCK TABLES `zen_layout_boxes` WRITE;
/*!40000 ALTER TABLE `zen_layout_boxes` DISABLE KEYS */;
INSERT INTO `zen_layout_boxes` (`layout_id`, `layout_template`, `layout_box_name`, `layout_box_status`, `layout_box_location`, `layout_box_sort_order`, `layout_box_sort_order_single`, `layout_box_status_single`) VALUES (1,'blue_strip','banner_box.php',1,0,300,1,1),(2,'blue_strip','banner_box2.php',0,1,15,1,1),(3,'blue_strip','best_sellers.php',1,1,30,70,1),(4,'blue_strip','categories.php',1,0,10,10,1),(5,'blue_strip','currencies.php',1,1,80,60,1),(6,'blue_strip','document_categories.php',1,0,0,0,0),(7,'blue_strip','featured.php',1,0,45,0,0),(8,'blue_strip','information.php',1,0,50,40,1),(9,'blue_strip','languages.php',1,1,70,50,1),(10,'blue_strip','manufacturers.php',1,0,30,20,1),(11,'blue_strip','manufacturer_info.php',1,1,35,95,1),(12,'blue_strip','more_information.php',1,0,200,200,1),(13,'blue_strip','music_genres.php',0,1,0,0,0),(14,'blue_strip','order_history.php',1,0,0,0,0),(15,'blue_strip','product_notifications.php',1,1,55,85,1),(16,'blue_strip','record_companies.php',0,1,0,0,0),(17,'blue_strip','reviews.php',0,0,40,0,0),(18,'blue_strip','search.php',1,1,10,0,0),(19,'blue_strip','search_header.php',0,0,0,0,1),(20,'blue_strip','shopping_cart.php',1,1,20,30,1),(21,'blue_strip','specials.php',1,1,45,0,0),(22,'blue_strip','tell_a_friend.php',1,1,65,0,0),(23,'blue_strip','whats_new.php',0,0,20,0,0),(24,'blue_strip','whos_online.php',0,1,200,200,1),(116,'blue_strip','banner_box_all.php',1,1,10,0,0),(25,'classic','banner_box.php',1,0,300,1,127),(26,'classic','banner_box2.php',1,1,15,1,15),(115,'classic','banner_box_all.php',1,1,5,0,0),(27,'classic','best_sellers.php',1,1,30,70,1),(28,'classic','categories.php',1,0,10,10,1),(29,'classic','currencies.php',1,1,80,60,1),(30,'classic','document_categories.php',1,0,0,0,0),(31,'classic','featured.php',1,0,45,0,0),(32,'classic','information.php',1,0,50,40,1),(33,'classic','languages.php',1,1,70,50,1),(34,'classic','manufacturers.php',1,0,30,20,1),(35,'classic','manufacturer_info.php',1,1,35,95,1),(36,'classic','more_information.php',1,0,200,200,1),(37,'classic','music_genres.php',1,1,0,0,0),(38,'classic','order_history.php',0,0,0,0,0),(39,'classic','product_notifications.php',1,1,55,85,1),(40,'classic','record_companies.php',1,1,0,0,0),(41,'classic','reviews.php',1,0,40,0,0),(42,'classic','search.php',1,1,10,0,0),(43,'classic','search_header.php',0,0,0,0,1),(44,'classic','shopping_cart.php',1,1,20,30,1),(45,'classic','specials.php',1,1,45,0,0),(46,'classic','tell_a_friend.php',1,1,65,0,0),(47,'classic','whats_new.php',1,0,20,0,0),(48,'classic','whos_online.php',1,1,200,200,1),(117,'default_template_settings','banner_box_all.php',1,1,5,0,0),(49,'default_template_settings','banner_box.php',1,0,300,1,127),(50,'default_template_settings','banner_box2.php',1,1,15,1,15),(51,'default_template_settings','best_sellers.php',1,1,30,70,1),(52,'default_template_settings','categories.php',1,0,10,10,1),(53,'default_template_settings','currencies.php',1,1,80,60,1),(54,'default_template_settings','document_categories.php',1,0,0,0,0),(55,'default_template_settings','featured.php',1,0,45,0,0),(56,'default_template_settings','information.php',1,0,50,40,1),(57,'default_template_settings','languages.php',1,1,70,50,1),(58,'default_template_settings','manufacturers.php',1,0,30,20,1),(59,'default_template_settings','manufacturer_info.php',1,1,35,95,1),(60,'default_template_settings','more_information.php',1,0,200,200,1),(61,'default_template_settings','music_genres.php',1,1,0,0,0),(62,'default_template_settings','order_history.php',0,0,0,0,0),(63,'default_template_settings','product_notifications.php',1,1,55,85,1),(64,'default_template_settings','record_companies.php',1,1,0,0,0),(65,'default_template_settings','reviews.php',1,0,40,0,0),(66,'default_template_settings','search.php',1,1,10,0,0),(67,'default_template_settings','search_header.php',0,0,0,0,1),(68,'default_template_settings','shopping_cart.php',1,1,20,30,1),(69,'default_template_settings','specials.php',1,1,45,0,0),(70,'default_template_settings','tell_a_friend.php',1,1,65,0,0),(71,'default_template_settings','whats_new.php',1,0,20,0,0),(72,'default_template_settings','whos_online.php',1,1,200,200,1),(118,'template_default','banner_box_all.php',1,1,5,0,0),(73,'template_default','banner_box.php',1,0,300,1,127),(74,'template_default','banner_box2.php',1,1,15,1,15),(75,'template_default','best_sellers.php',1,1,30,70,1),(76,'template_default','categories.php',1,0,10,10,1),(77,'template_default','currencies.php',1,1,80,60,1),(78,'template_default','featured.php',1,0,45,0,0),(79,'template_default','information.php',1,0,50,40,1),(80,'template_default','languages.php',1,1,70,50,1),(81,'template_default','manufacturers.php',1,0,30,20,1),(82,'template_default','manufacturer_info.php',1,1,35,95,1),(83,'template_default','more_information.php',1,0,200,200,1),(84,'template_default','my_broken_box.php',1,0,0,0,0),(85,'template_default','order_history.php',0,0,0,0,0),(86,'template_default','product_notifications.php',1,1,55,85,1),(87,'template_default','reviews.php',1,0,40,0,0),(88,'template_default','search.php',1,1,10,0,0),(89,'template_default','search_header.php',0,0,0,0,1),(90,'template_default','shopping_cart.php',1,1,20,30,1),(91,'template_default','specials.php',1,1,45,0,0),(92,'template_default','tell_a_friend.php',1,1,65,0,0),(93,'template_default','whats_new.php',1,0,20,0,0),(94,'template_default','whos_online.php',1,1,200,200,1),(95,'zencss','banner_box2.php',1,1,15,1,15),(96,'zencss','best_sellers.php',1,1,30,70,1),(97,'zencss','categories.php',1,0,10,10,1),(98,'zencss','currencies.php',1,1,80,60,1),(99,'zencss','information.php',1,0,50,40,1),(100,'zencss','languages.php',1,1,70,50,1),(101,'zencss','manufacturers.php',1,0,30,20,1),(102,'zencss','manufacturer_info.php',1,1,35,95,1),(103,'zencss','more_information.php',1,0,100,200,1),(104,'zencss','my_broken_box.php',1,0,0,1,0),(105,'zencss','order_history.php',0,0,0,0,0),(106,'zencss','product_notifications.php',1,1,55,85,1),(107,'zencss','reviews.php',1,0,40,0,0),(108,'zencss','search.php',1,1,10,0,0),(109,'zencss','search_header.php',0,0,0,0,0),(110,'zencss','shopping_cart.php',1,1,20,30,1),(111,'zencss','specials.php',1,1,45,0,0),(112,'zencss','tell_a_friend.php',1,1,65,0,0),(113,'zencss','whats_new.php',1,0,20,0,0),(114,'zencss','whos_online.php',1,1,200,200,1);
/*!40000 ALTER TABLE `zen_layout_boxes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_manufacturers`
--

DROP TABLE IF EXISTS `zen_manufacturers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_manufacturers` (
  `manufacturers_id` int(11) NOT NULL AUTO_INCREMENT,
  `manufacturers_name` varchar(32) NOT NULL DEFAULT '',
  `manufacturers_image` varchar(64) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `last_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`manufacturers_id`),
  KEY `idx_mfg_name_zen` (`manufacturers_name`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_manufacturers`
--

LOCK TABLES `zen_manufacturers` WRITE;
/*!40000 ALTER TABLE `zen_manufacturers` DISABLE KEYS */;
INSERT INTO `zen_manufacturers` (`manufacturers_id`, `manufacturers_name`, `manufacturers_image`, `date_added`, `last_modified`) VALUES (1,'Merrow Sewing Machine Co.',NULL,'2005-11-01 11:35:06',NULL);
/*!40000 ALTER TABLE `zen_manufacturers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_manufacturers_info`
--

DROP TABLE IF EXISTS `zen_manufacturers_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_manufacturers_info` (
  `manufacturers_id` int(11) NOT NULL DEFAULT '0',
  `languages_id` int(11) NOT NULL DEFAULT '0',
  `manufacturers_url` varchar(255) NOT NULL DEFAULT '',
  `url_clicked` int(5) NOT NULL DEFAULT '0',
  `date_last_click` datetime DEFAULT NULL,
  PRIMARY KEY (`manufacturers_id`,`languages_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_manufacturers_info`
--

LOCK TABLES `zen_manufacturers_info` WRITE;
/*!40000 ALTER TABLE `zen_manufacturers_info` DISABLE KEYS */;
INSERT INTO `zen_manufacturers_info` (`manufacturers_id`, `languages_id`, `manufacturers_url`, `url_clicked`, `date_last_click`) VALUES (1,1,'http://www.merrow.com',0,NULL);
/*!40000 ALTER TABLE `zen_manufacturers_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_media_clips`
--

DROP TABLE IF EXISTS `zen_media_clips`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_media_clips` (
  `clip_id` int(11) NOT NULL AUTO_INCREMENT,
  `media_id` int(11) NOT NULL DEFAULT '0',
  `clip_type` smallint(6) NOT NULL DEFAULT '0',
  `clip_filename` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`clip_id`),
  KEY `idx_media_id_zen` (`media_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_media_clips`
--

LOCK TABLES `zen_media_clips` WRITE;
/*!40000 ALTER TABLE `zen_media_clips` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_media_clips` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_media_manager`
--

DROP TABLE IF EXISTS `zen_media_manager`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_media_manager` (
  `media_id` int(11) NOT NULL AUTO_INCREMENT,
  `media_name` varchar(255) NOT NULL DEFAULT '',
  `last_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_added` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`media_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_media_manager`
--

LOCK TABLES `zen_media_manager` WRITE;
/*!40000 ALTER TABLE `zen_media_manager` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_media_manager` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_media_to_products`
--

DROP TABLE IF EXISTS `zen_media_to_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_media_to_products` (
  `media_id` int(11) NOT NULL DEFAULT '0',
  `product_id` int(11) NOT NULL DEFAULT '0',
  KEY `idx_media_product_zen` (`media_id`,`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_media_to_products`
--

LOCK TABLES `zen_media_to_products` WRITE;
/*!40000 ALTER TABLE `zen_media_to_products` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_media_to_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_media_types`
--

DROP TABLE IF EXISTS `zen_media_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_media_types` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(64) NOT NULL DEFAULT '',
  `type_ext` varchar(8) NOT NULL DEFAULT '',
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_media_types`
--

LOCK TABLES `zen_media_types` WRITE;
/*!40000 ALTER TABLE `zen_media_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_media_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_meta_tags_products_description`
--

DROP TABLE IF EXISTS `zen_meta_tags_products_description`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_meta_tags_products_description` (
  `products_id` int(11) NOT NULL AUTO_INCREMENT,
  `language_id` int(11) NOT NULL DEFAULT '1',
  `metatags_title` varchar(255) NOT NULL DEFAULT '',
  `metatags_keywords` text,
  `metatags_description` text,
  PRIMARY KEY (`products_id`,`language_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_meta_tags_products_description`
--

LOCK TABLES `zen_meta_tags_products_description` WRITE;
/*!40000 ALTER TABLE `zen_meta_tags_products_description` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_meta_tags_products_description` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_music_genre`
--

DROP TABLE IF EXISTS `zen_music_genre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_music_genre` (
  `music_genre_id` int(11) NOT NULL AUTO_INCREMENT,
  `music_genre_name` varchar(32) NOT NULL DEFAULT '',
  `date_added` datetime DEFAULT NULL,
  `last_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`music_genre_id`),
  KEY `idx_music_genre_name_zen` (`music_genre_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_music_genre`
--

LOCK TABLES `zen_music_genre` WRITE;
/*!40000 ALTER TABLE `zen_music_genre` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_music_genre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_newsletters`
--

DROP TABLE IF EXISTS `zen_newsletters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_newsletters` (
  `newsletters_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `content_html` text NOT NULL,
  `module` varchar(255) NOT NULL DEFAULT '',
  `date_added` datetime NOT NULL DEFAULT '0001-01-01 00:00:00',
  `date_sent` datetime DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `locked` int(1) DEFAULT '0',
  PRIMARY KEY (`newsletters_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_newsletters`
--

LOCK TABLES `zen_newsletters` WRITE;
/*!40000 ALTER TABLE `zen_newsletters` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_newsletters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_orders`
--

DROP TABLE IF EXISTS `zen_orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_orders` (
  `orders_id` int(11) NOT NULL AUTO_INCREMENT,
  `customers_id` int(11) NOT NULL DEFAULT '0',
  `customers_name` varchar(64) NOT NULL DEFAULT '',
  `customers_company` varchar(32) DEFAULT NULL,
  `customers_street_address` varchar(64) NOT NULL DEFAULT '',
  `customers_suburb` varchar(32) DEFAULT NULL,
  `customers_city` varchar(32) NOT NULL DEFAULT '',
  `customers_postcode` varchar(10) NOT NULL DEFAULT '',
  `customers_state` varchar(32) DEFAULT NULL,
  `customers_country` varchar(32) NOT NULL DEFAULT '',
  `customers_telephone` varchar(32) NOT NULL DEFAULT '',
  `customers_email_address` varchar(96) NOT NULL DEFAULT '',
  `customers_address_format_id` int(5) NOT NULL DEFAULT '0',
  `delivery_name` varchar(64) NOT NULL DEFAULT '',
  `delivery_company` varchar(32) DEFAULT NULL,
  `delivery_street_address` varchar(64) NOT NULL DEFAULT '',
  `delivery_suburb` varchar(32) DEFAULT NULL,
  `delivery_city` varchar(32) NOT NULL DEFAULT '',
  `delivery_postcode` varchar(10) NOT NULL DEFAULT '',
  `delivery_state` varchar(32) DEFAULT NULL,
  `delivery_country` varchar(32) NOT NULL DEFAULT '',
  `delivery_address_format_id` int(5) NOT NULL DEFAULT '0',
  `billing_name` varchar(64) NOT NULL DEFAULT '',
  `billing_company` varchar(32) DEFAULT NULL,
  `billing_street_address` varchar(64) NOT NULL DEFAULT '',
  `billing_suburb` varchar(32) DEFAULT NULL,
  `billing_city` varchar(32) NOT NULL DEFAULT '',
  `billing_postcode` varchar(10) NOT NULL DEFAULT '',
  `billing_state` varchar(32) DEFAULT NULL,
  `billing_country` varchar(32) NOT NULL DEFAULT '',
  `billing_address_format_id` int(5) NOT NULL DEFAULT '0',
  `payment_method` varchar(128) NOT NULL DEFAULT '',
  `payment_module_code` varchar(32) NOT NULL DEFAULT '',
  `shipping_method` varchar(128) NOT NULL DEFAULT '',
  `shipping_module_code` varchar(32) NOT NULL DEFAULT '',
  `coupon_code` varchar(32) NOT NULL DEFAULT '',
  `cc_type` varchar(20) DEFAULT NULL,
  `cc_owner` varchar(64) DEFAULT NULL,
  `cc_number` varchar(32) DEFAULT NULL,
  `cc_expires` varchar(4) DEFAULT NULL,
  `cc_cvv` blob,
  `last_modified` datetime DEFAULT NULL,
  `date_purchased` datetime DEFAULT NULL,
  `orders_status` int(5) NOT NULL DEFAULT '0',
  `orders_date_finished` datetime DEFAULT NULL,
  `currency` char(3) DEFAULT NULL,
  `currency_value` decimal(14,6) DEFAULT NULL,
  `order_total` decimal(14,2) DEFAULT NULL,
  `order_tax` decimal(14,2) DEFAULT NULL,
  `paypal_ipn_id` int(11) NOT NULL DEFAULT '0',
  `ip_address` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`orders_id`),
  KEY `idx_status_orders_cust_zen` (`orders_status`,`orders_id`,`customers_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_orders`
--

LOCK TABLES `zen_orders` WRITE;
/*!40000 ALTER TABLE `zen_orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_orders_products`
--

DROP TABLE IF EXISTS `zen_orders_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_orders_products` (
  `orders_products_id` int(11) NOT NULL AUTO_INCREMENT,
  `orders_id` int(11) NOT NULL DEFAULT '0',
  `products_id` int(11) NOT NULL DEFAULT '0',
  `products_model` varchar(32) DEFAULT NULL,
  `products_name` varchar(64) NOT NULL DEFAULT '',
  `products_price` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `final_price` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `products_tax` decimal(7,4) NOT NULL DEFAULT '0.0000',
  `products_quantity` float NOT NULL DEFAULT '0',
  `onetime_charges` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `products_priced_by_attribute` tinyint(1) NOT NULL DEFAULT '0',
  `product_is_free` tinyint(1) NOT NULL DEFAULT '0',
  `products_discount_type` tinyint(1) NOT NULL DEFAULT '0',
  `products_discount_type_from` tinyint(1) NOT NULL DEFAULT '0',
  `products_prid` tinytext NOT NULL,
  PRIMARY KEY (`orders_products_id`),
  KEY `idx_orders_id_zen` (`orders_id`),
  KEY `orders_id_prod_id_zen` (`orders_id`,`products_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_orders_products`
--

LOCK TABLES `zen_orders_products` WRITE;
/*!40000 ALTER TABLE `zen_orders_products` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_orders_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_orders_products_attributes`
--

DROP TABLE IF EXISTS `zen_orders_products_attributes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_orders_products_attributes` (
  `orders_products_attributes_id` int(11) NOT NULL AUTO_INCREMENT,
  `orders_id` int(11) NOT NULL DEFAULT '0',
  `orders_products_id` int(11) NOT NULL DEFAULT '0',
  `products_options` varchar(32) NOT NULL DEFAULT '',
  `products_options_values` varchar(64) NOT NULL DEFAULT '',
  `options_values_price` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `price_prefix` char(1) NOT NULL DEFAULT '',
  `product_attribute_is_free` tinyint(1) NOT NULL DEFAULT '0',
  `products_attributes_weight` float NOT NULL DEFAULT '0',
  `products_attributes_weight_prefix` char(1) NOT NULL DEFAULT '',
  `attributes_discounted` tinyint(1) NOT NULL DEFAULT '1',
  `attributes_price_base_included` tinyint(1) NOT NULL DEFAULT '1',
  `attributes_price_onetime` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `attributes_price_factor` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `attributes_price_factor_offset` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `attributes_price_factor_onetime` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `attributes_price_factor_onetime_offset` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `attributes_qty_prices` text,
  `attributes_qty_prices_onetime` text,
  `attributes_price_words` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `attributes_price_words_free` int(4) NOT NULL DEFAULT '0',
  `attributes_price_letters` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `attributes_price_letters_free` int(4) NOT NULL DEFAULT '0',
  `products_options_id` int(11) NOT NULL DEFAULT '0',
  `products_options_values_id` int(11) NOT NULL DEFAULT '0',
  `products_prid` tinytext NOT NULL,
  PRIMARY KEY (`orders_products_attributes_id`),
  KEY `idx_orders_id_prod_id_zen` (`orders_id`,`orders_products_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_orders_products_attributes`
--

LOCK TABLES `zen_orders_products_attributes` WRITE;
/*!40000 ALTER TABLE `zen_orders_products_attributes` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_orders_products_attributes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_orders_products_download`
--

DROP TABLE IF EXISTS `zen_orders_products_download`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_orders_products_download` (
  `orders_products_download_id` int(11) NOT NULL AUTO_INCREMENT,
  `orders_id` int(11) NOT NULL DEFAULT '0',
  `orders_products_id` int(11) NOT NULL DEFAULT '0',
  `orders_products_filename` varchar(255) NOT NULL DEFAULT '',
  `download_maxdays` int(2) NOT NULL DEFAULT '0',
  `download_count` int(2) NOT NULL DEFAULT '0',
  `products_prid` tinytext NOT NULL,
  PRIMARY KEY (`orders_products_download_id`),
  KEY `idx_orders_id_zen` (`orders_id`),
  KEY `idx_orders_products_id_zen` (`orders_products_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_orders_products_download`
--

LOCK TABLES `zen_orders_products_download` WRITE;
/*!40000 ALTER TABLE `zen_orders_products_download` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_orders_products_download` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_orders_status`
--

DROP TABLE IF EXISTS `zen_orders_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_orders_status` (
  `orders_status_id` int(11) NOT NULL DEFAULT '0',
  `language_id` int(11) NOT NULL DEFAULT '1',
  `orders_status_name` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`orders_status_id`,`language_id`),
  KEY `idx_orders_status_name_zen` (`orders_status_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_orders_status`
--

LOCK TABLES `zen_orders_status` WRITE;
/*!40000 ALTER TABLE `zen_orders_status` DISABLE KEYS */;
INSERT INTO `zen_orders_status` (`orders_status_id`, `language_id`, `orders_status_name`) VALUES (1,1,'Pending'),(2,1,'Processing'),(3,1,'Delivered'),(4,1,'Update');
/*!40000 ALTER TABLE `zen_orders_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_orders_status_history`
--

DROP TABLE IF EXISTS `zen_orders_status_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_orders_status_history` (
  `orders_status_history_id` int(11) NOT NULL AUTO_INCREMENT,
  `orders_id` int(11) NOT NULL DEFAULT '0',
  `orders_status_id` int(5) NOT NULL DEFAULT '0',
  `date_added` datetime NOT NULL DEFAULT '0001-01-01 00:00:00',
  `customer_notified` int(1) DEFAULT '0',
  `comments` text,
  PRIMARY KEY (`orders_status_history_id`),
  KEY `idx_orders_id_status_id_zen` (`orders_id`,`orders_status_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_orders_status_history`
--

LOCK TABLES `zen_orders_status_history` WRITE;
/*!40000 ALTER TABLE `zen_orders_status_history` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_orders_status_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_orders_total`
--

DROP TABLE IF EXISTS `zen_orders_total`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_orders_total` (
  `orders_total_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `orders_id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL DEFAULT '',
  `text` varchar(255) NOT NULL DEFAULT '',
  `value` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `class` varchar(32) NOT NULL DEFAULT '',
  `sort_order` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`orders_total_id`),
  KEY `idx_ot_orders_id_zen` (`orders_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_orders_total`
--

LOCK TABLES `zen_orders_total` WRITE;
/*!40000 ALTER TABLE `zen_orders_total` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_orders_total` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_paypal`
--

DROP TABLE IF EXISTS `zen_paypal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_paypal` (
  `paypal_ipn_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `zen_order_id` int(11) unsigned NOT NULL DEFAULT '0',
  `txn_type` varchar(10) NOT NULL DEFAULT '',
  `reason_code` varchar(15) DEFAULT NULL,
  `payment_type` varchar(7) NOT NULL DEFAULT '',
  `payment_status` varchar(17) NOT NULL DEFAULT '',
  `pending_reason` varchar(14) DEFAULT NULL,
  `invoice` varchar(64) DEFAULT NULL,
  `mc_currency` char(3) NOT NULL DEFAULT '',
  `first_name` varchar(32) NOT NULL DEFAULT '',
  `last_name` varchar(32) NOT NULL DEFAULT '',
  `payer_business_name` varchar(64) DEFAULT NULL,
  `address_name` varchar(32) DEFAULT NULL,
  `address_street` varchar(64) DEFAULT NULL,
  `address_city` varchar(32) DEFAULT NULL,
  `address_state` varchar(32) DEFAULT NULL,
  `address_zip` varchar(10) DEFAULT NULL,
  `address_country` varchar(64) DEFAULT NULL,
  `address_status` varchar(11) DEFAULT NULL,
  `payer_email` varchar(96) NOT NULL DEFAULT '',
  `payer_id` varchar(32) NOT NULL DEFAULT '',
  `payer_status` varchar(10) NOT NULL DEFAULT '',
  `payment_date` datetime NOT NULL DEFAULT '0001-01-01 00:00:00',
  `business` varchar(96) NOT NULL DEFAULT '',
  `receiver_email` varchar(96) NOT NULL DEFAULT '',
  `receiver_id` varchar(32) NOT NULL DEFAULT '',
  `txn_id` varchar(17) NOT NULL DEFAULT '',
  `parent_txn_id` varchar(17) DEFAULT NULL,
  `num_cart_items` tinyint(4) unsigned NOT NULL DEFAULT '1',
  `mc_gross` decimal(7,2) NOT NULL DEFAULT '0.00',
  `mc_fee` decimal(7,2) NOT NULL DEFAULT '0.00',
  `payment_gross` decimal(7,2) DEFAULT NULL,
  `payment_fee` decimal(7,2) DEFAULT NULL,
  `settle_amount` decimal(7,2) DEFAULT NULL,
  `settle_currency` char(3) DEFAULT NULL,
  `exchange_rate` decimal(4,2) DEFAULT NULL,
  `notify_version` decimal(2,1) NOT NULL DEFAULT '0.0',
  `verify_sign` varchar(128) NOT NULL DEFAULT '',
  `last_modified` datetime NOT NULL DEFAULT '0001-01-01 00:00:00',
  `date_added` datetime NOT NULL DEFAULT '0001-01-01 00:00:00',
  `memo` text,
  PRIMARY KEY (`paypal_ipn_id`,`txn_id`),
  KEY `idx_paypal_paypal_ipn_id_zen` (`paypal_ipn_id`),
  KEY `idx_zen_order_id_zen` (`zen_order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_paypal`
--

LOCK TABLES `zen_paypal` WRITE;
/*!40000 ALTER TABLE `zen_paypal` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_paypal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_paypal_payment_status`
--

DROP TABLE IF EXISTS `zen_paypal_payment_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_paypal_payment_status` (
  `payment_status_id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_status_name` varchar(64) NOT NULL DEFAULT '',
  PRIMARY KEY (`payment_status_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_paypal_payment_status`
--

LOCK TABLES `zen_paypal_payment_status` WRITE;
/*!40000 ALTER TABLE `zen_paypal_payment_status` DISABLE KEYS */;
INSERT INTO `zen_paypal_payment_status` (`payment_status_id`, `payment_status_name`) VALUES (1,'Completed'),(2,'Pending'),(3,'Failed'),(4,'Denied'),(5,'Refunded'),(6,'Canceled_Reversal'),(7,'Reversed');
/*!40000 ALTER TABLE `zen_paypal_payment_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_paypal_payment_status_history`
--

DROP TABLE IF EXISTS `zen_paypal_payment_status_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_paypal_payment_status_history` (
  `payment_status_history_id` int(11) NOT NULL AUTO_INCREMENT,
  `paypal_ipn_id` int(11) NOT NULL DEFAULT '0',
  `txn_id` varchar(64) NOT NULL DEFAULT '',
  `parent_txn_id` varchar(64) NOT NULL DEFAULT '',
  `payment_status` varchar(17) NOT NULL DEFAULT '',
  `pending_reason` varchar(14) DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT '0001-01-01 00:00:00',
  PRIMARY KEY (`payment_status_history_id`),
  KEY `idx_paypal_ipn_id_zen` (`paypal_ipn_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_paypal_payment_status_history`
--

LOCK TABLES `zen_paypal_payment_status_history` WRITE;
/*!40000 ALTER TABLE `zen_paypal_payment_status_history` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_paypal_payment_status_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_paypal_session`
--

DROP TABLE IF EXISTS `zen_paypal_session`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_paypal_session` (
  `unique_id` int(11) NOT NULL AUTO_INCREMENT,
  `session_id` text NOT NULL,
  `saved_session` blob NOT NULL,
  `expiry` int(17) NOT NULL DEFAULT '0',
  PRIMARY KEY (`unique_id`),
  KEY `idx_session_id_zen` (`session_id`(36))
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_paypal_session`
--

LOCK TABLES `zen_paypal_session` WRITE;
/*!40000 ALTER TABLE `zen_paypal_session` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_paypal_session` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_product_music_extra`
--

DROP TABLE IF EXISTS `zen_product_music_extra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_product_music_extra` (
  `products_id` int(11) NOT NULL DEFAULT '0',
  `artists_id` int(11) NOT NULL DEFAULT '0',
  `record_company_id` int(11) NOT NULL DEFAULT '0',
  `music_genre_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`products_id`),
  KEY `idx_music_genre_id_zen` (`music_genre_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_product_music_extra`
--

LOCK TABLES `zen_product_music_extra` WRITE;
/*!40000 ALTER TABLE `zen_product_music_extra` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_product_music_extra` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_product_type_layout`
--

DROP TABLE IF EXISTS `zen_product_type_layout`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_product_type_layout` (
  `configuration_id` int(11) NOT NULL AUTO_INCREMENT,
  `configuration_title` text NOT NULL,
  `configuration_key` varchar(255) NOT NULL DEFAULT '',
  `configuration_value` text NOT NULL,
  `configuration_description` text NOT NULL,
  `product_type_id` int(11) NOT NULL DEFAULT '0',
  `sort_order` int(5) DEFAULT NULL,
  `last_modified` datetime DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT '0001-01-01 00:00:00',
  `use_function` text,
  `set_function` text,
  PRIMARY KEY (`configuration_id`),
  UNIQUE KEY `unq_config_key_zen` (`configuration_key`),
  KEY `idx_key_value_zen` (`configuration_key`,`configuration_value`(10))
) ENGINE=MyISAM AUTO_INCREMENT=99 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_product_type_layout`
--

LOCK TABLES `zen_product_type_layout` WRITE;
/*!40000 ALTER TABLE `zen_product_type_layout` DISABLE KEYS */;
INSERT INTO `zen_product_type_layout` (`configuration_id`, `configuration_title`, `configuration_key`, `configuration_value`, `configuration_description`, `product_type_id`, `sort_order`, `last_modified`, `date_added`, `use_function`, `set_function`) VALUES (1,'Show Model Number','SHOW_PRODUCT_INFO_MODEL','1','Display Model Number on Product Info 0= off 1= on',1,1,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(2,'Show Weight','SHOW_PRODUCT_INFO_WEIGHT','1','Display Weight on Product Info 0= off 1= on',1,2,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(3,'Show Attribute Weight','SHOW_PRODUCT_INFO_WEIGHT_ATTRIBUTES','1','Display Attribute Weight on Product Info 0= off 1= on',1,3,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(4,'Show Manufacturer','SHOW_PRODUCT_INFO_MANUFACTURER','1','Display Manufacturer Name on Product Info 0= off 1= on',1,4,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(5,'Show Quantity in Shopping Cart','SHOW_PRODUCT_INFO_IN_CART_QTY','1','Display Quantity in Current Shopping Cart on Product Info 0= off 1= on',1,5,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(6,'Show Quantity in Stock','SHOW_PRODUCT_INFO_QUANTITY','1','Display Quantity in Stock on Product Info 0= off 1= on',1,6,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(7,'Show Product Reviews Count','SHOW_PRODUCT_INFO_REVIEWS_COUNT','1','Display Product Reviews Count on Product Info 0= off 1= on',1,7,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(8,'Show Product Reviews Button','SHOW_PRODUCT_INFO_REVIEWS','1','Display Product Reviews Button on Product Info 0= off 1= on',1,8,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(9,'Show Date Available','SHOW_PRODUCT_INFO_DATE_AVAILABLE','1','Display Date Available on Product Info 0= off 1= on',1,9,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(10,'Show Date Added','SHOW_PRODUCT_INFO_DATE_ADDED','1','Display Date Added on Product Info 0= off 1= on',1,10,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(11,'Show Product URL','SHOW_PRODUCT_INFO_URL','1','Display URL on Product Info 0= off 1= on',1,11,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(12,'Show Starting At text on Price','SHOW_PRODUCT_INFO_STARTING_AT','1','Display Starting At text on products with attributes Product Info 0= off 1= on',1,12,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(13,'Show Product Tell a Friend button','SHOW_PRODUCT_INFO_TELL_A_FRIEND','1','Display the Tell a Friend button on Product Info<br /><br />Note: Turning this setting off does not affect the Tell a Friend box in the columns and turning off the Tell a Friend box does not affect the button<br />0= off 1= on',1,15,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(14,'Product Free Shipping Image Status - Catalog','SHOW_PRODUCT_INFO_ALWAYS_FREE_SHIPPING_IMAGE_SWITCH','0','Show the Free Shipping image/text in the catalog?',1,16,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'Yes\'), array(\'id\'=>\'0\', \'text\'=>\'No\')), '),(15,'Product Price Tax Class Default - When adding new products?','DEFAULT_PRODUCT_TAX_CLASS_ID','0','What should the Product Price Tax Class Default ID be when adding new products?',1,100,NULL,'2005-11-01 09:12:13','',''),(16,'Product Virtual Default Status - Skip Shipping Address - When adding new products?','DEFAULT_PRODUCT_PRODUCTS_VIRTUAL','0','Default Virtual Product status to be ON when adding new products?',1,101,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(17,'Product Free Shipping Default Status - Normal Shipping Rules - When adding new products?','DEFAULT_PRODUCT_PRODUCTS_IS_ALWAYS_FREE_SHIPPING','0','What should the Default Free Shipping status be when adding new products?',1,102,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(18,'Show Model Number','SHOW_PRODUCT_MUSIC_INFO_MODEL','1','Display Model Number on Product Info 0= off 1= on',2,1,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(19,'Show Weight','SHOW_PRODUCT_MUSIC_INFO_WEIGHT','0','Display Weight on Product Info 0= off 1= on',2,2,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(20,'Show Attribute Weight','SHOW_PRODUCT_MUSIC_INFO_WEIGHT_ATTRIBUTES','1','Display Attribute Weight on Product Info 0= off 1= on',2,3,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(21,'Show Artist','SHOW_PRODUCT_MUSIC_INFO_ARTIST','1','Display Artists Name on Product Info 0= off 1= on',2,4,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(22,'Show Music Genre','SHOW_PRODUCT_MUSIC_INFO_GENRE','1','Display Music Genre on Product Info 0= off 1= on',2,4,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(23,'Show Record Company','SHOW_PRODUCT_MUSIC_INFO_RECORD_COMPANY','1','Display Recoprd Company on Product Info 0= off 1= on',2,4,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(24,'Show Quantity in Shopping Cart','SHOW_PRODUCT_MUSIC_INFO_IN_CART_QTY','1','Display Quantity in Current Shopping Cart on Product Info 0= off 1= on',2,5,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(25,'Show Quantity in Stock','SHOW_PRODUCT_MUSIC_INFO_QUANTITY','0','Display Quantity in Stock on Product Info 0= off 1= on',2,6,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(26,'Show Product Reviews Count','SHOW_PRODUCT_MUSIC_INFO_REVIEWS_COUNT','1','Display Product Reviews Count on Product Info 0= off 1= on',2,7,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(27,'Show Product Reviews Button','SHOW_PRODUCT_MUSIC_INFO_REVIEWS','1','Display Product Reviews Button on Product Info 0= off 1= on',2,8,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(28,'Show Date Available','SHOW_PRODUCT_MUSIC_INFO_DATE_AVAILABLE','1','Display Date Available on Product Info 0= off 1= on',2,9,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(29,'Show Date Added','SHOW_PRODUCT_MUSIC_INFO_DATE_ADDED','1','Display Date Added on Product Info 0= off 1= on',2,10,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(30,'Show Starting At text on Price','SHOW_PRODUCT_MUSIC_INFO_STARTING_AT','1','Display Starting At text on products with attributes Product Info 0= off 1= on',2,12,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(31,'Show Product Tell a Friend button','SHOW_PRODUCT_MUSIC_INFO_TELL_A_FRIEND','1','Display the Tell a Friend button on Product Info<br /><br />Note: Turning this setting off does not affect the Tell a Friend box in the columns and turning off the Tell a Friend box does not affect the button<br />0= off 1= on',2,15,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(32,'Product Free Shipping Image Status - Catalog','SHOW_PRODUCT_MUSIC_INFO_ALWAYS_FREE_SHIPPING_IMAGE_SWITCH','0','Show the Free Shipping image/text in the catalog?',2,16,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'Yes\'), array(\'id\'=>\'0\', \'text\'=>\'No\')), '),(33,'Product Price Tax Class Default - When adding new products?','DEFAULT_PRODUCT_MUSIC_TAX_CLASS_ID','0','What should the Product Price Tax Class Default ID be when adding new products?',2,100,NULL,'2005-11-01 09:12:13','',''),(34,'Product Virtual Default Status - Skip Shipping Address - When adding new products?','DEFAULT_PRODUCT_MUSIC_PRODUCTS_VIRTUAL','0','Default Virtual Product status to be ON when adding new products?',2,101,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(35,'Product Free Shipping Default Status - Normal Shipping Rules - When adding new products?','DEFAULT_PRODUCT_MUSIC_PRODUCTS_IS_ALWAYS_FREE_SHIPPING','0','What should the Default Free Shipping status be when adding new products?',2,102,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(36,'Show Product Reviews Count','SHOW_DOCUMENT_GENERAL_INFO_REVIEWS_COUNT','1','Display Product Reviews Count on Product Info 0= off 1= on',3,7,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(37,'Show Product Reviews Button','SHOW_DOCUMENT_GENERAL_INFO_REVIEWS','1','Display Product Reviews Button on Product Info 0= off 1= on',3,8,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(38,'Show Date Available','SHOW_DOCUMENT_GENERAL_INFO_DATE_AVAILABLE','1','Display Date Available on Product Info 0= off 1= on',3,9,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(39,'Show Date Added','SHOW_DOCUMENT_GENERAL_INFO_DATE_ADDED','1','Display Date Added on Product Info 0= off 1= on',3,10,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(40,'Show Product Tell a Friend button','SHOW_DOCUMENT_GENERAL_INFO_TELL_A_FRIEND','1','Display the Tell a Friend button on Product Info<br /><br />Note: Turning this setting off does not affect the Tell a Friend box in the columns and turning off the Tell a Friend box does not affect the button<br />0= off 1= on',3,15,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(41,'Show Product URL','SHOW_DOCUMENT_GENERAL_INFO_URL','1','Display URL on Product Info 0= off 1= on',3,11,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(42,'Show Model Number','SHOW_DOCUMENT_PRODUCT_INFO_MODEL','1','Display Model Number on Product Info 0= off 1= on',4,1,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(43,'Show Weight','SHOW_DOCUMENT_PRODUCT_INFO_WEIGHT','0','Display Weight on Product Info 0= off 1= on',4,2,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(44,'Show Attribute Weight','SHOW_DOCUMENT_PRODUCT_INFO_WEIGHT_ATTRIBUTES','1','Display Attribute Weight on Product Info 0= off 1= on',4,3,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(45,'Show Manufacturer','SHOW_DOCUMENT_PRODUCT_INFO_MANUFACTURER','1','Display Manufacturer Name on Product Info 0= off 1= on',4,4,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(46,'Show Quantity in Shopping Cart','SHOW_DOCUMENT_PRODUCT_INFO_IN_CART_QTY','1','Display Quantity in Current Shopping Cart on Product Info 0= off 1= on',4,5,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(47,'Show Quantity in Stock','SHOW_DOCUMENT_PRODUCT_INFO_QUANTITY','0','Display Quantity in Stock on Product Info 0= off 1= on',4,6,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(48,'Show Product Reviews Count','SHOW_DOCUMENT_PRODUCT_INFO_REVIEWS_COUNT','1','Display Product Reviews Count on Product Info 0= off 1= on',4,7,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(49,'Show Product Reviews Button','SHOW_DOCUMENT_PRODUCT_INFO_REVIEWS','1','Display Product Reviews Button on Product Info 0= off 1= on',4,8,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(50,'Show Date Available','SHOW_DOCUMENT_PRODUCT_INFO_DATE_AVAILABLE','1','Display Date Available on Product Info 0= off 1= on',4,9,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(51,'Show Date Added','SHOW_DOCUMENT_PRODUCT_INFO_DATE_ADDED','1','Display Date Added on Product Info 0= off 1= on',4,10,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(52,'Show Product URL','SHOW_DOCUMENT_PRODUCT_INFO_URL','1','Display URL on Product Info 0= off 1= on',4,11,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(53,'Show Starting At text on Price','SHOW_DOCUMENT_PRODUCT_INFO_STARTING_AT','1','Display Starting At text on products with attributes Product Info 0= off 1= on',4,12,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(54,'Show Product Tell a Friend button','SHOW_DOCUMENT_PRODUCT_INFO_TELL_A_FRIEND','1','Display the Tell a Friend button on Product Info<br /><br />Note: Turning this setting off does not affect the Tell a Friend box in the columns and turning off the Tell a Friend box does not affect the button<br />0= off 1= on',4,15,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(55,'Product Free Shipping Image Status - Catalog','SHOW_DOCUMENT_PRODUCT_INFO_ALWAYS_FREE_SHIPPING_IMAGE_SWITCH','0','Show the Free Shipping image/text in the catalog?',4,16,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'Yes\'), array(\'id\'=>\'0\', \'text\'=>\'No\')), '),(56,'Product Price Tax Class Default - When adding new products?','DEFAULT_DOCUMENT_PRODUCT_TAX_CLASS_ID','0','What should the Product Price Tax Class Default ID be when adding new products?',4,100,NULL,'2005-11-01 09:12:13','',''),(57,'Product Virtual Default Status - Skip Shipping Address - When adding new products?','DEFAULT_DOCUMENT_PRODUCT_PRODUCTS_VIRTUAL','0','Default Virtual Product status to be ON when adding new products?',4,101,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(58,'Product Free Shipping Default Status - Normal Shipping Rules - When adding new products?','DEFAULT_DOCUMENT_PRODUCT_PRODUCTS_IS_ALWAYS_FREE_SHIPPING','0','What should the Default Free Shipping status be when adding new products?',4,102,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(59,'Show Model Number','SHOW_PRODUCT_FREE_SHIPPING_INFO_MODEL','1','Display Model Number on Product Info 0= off 1= on',5,1,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(60,'Show Weight','SHOW_PRODUCT_FREE_SHIPPING_INFO_WEIGHT','0','Display Weight on Product Info 0= off 1= on',5,2,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(61,'Show Attribute Weight','SHOW_PRODUCT_FREE_SHIPPING_INFO_WEIGHT_ATTRIBUTES','1','Display Attribute Weight on Product Info 0= off 1= on',5,3,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(62,'Show Manufacturer','SHOW_PRODUCT_FREE_SHIPPING_INFO_MANUFACTURER','1','Display Manufacturer Name on Product Info 0= off 1= on',5,4,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(63,'Show Quantity in Shopping Cart','SHOW_PRODUCT_FREE_SHIPPING_INFO_IN_CART_QTY','1','Display Quantity in Current Shopping Cart on Product Info 0= off 1= on',5,5,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(64,'Show Quantity in Stock','SHOW_PRODUCT_FREE_SHIPPING_INFO_QUANTITY','1','Display Quantity in Stock on Product Info 0= off 1= on',5,6,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(65,'Show Product Reviews Count','SHOW_PRODUCT_FREE_SHIPPING_INFO_REVIEWS_COUNT','1','Display Product Reviews Count on Product Info 0= off 1= on',5,7,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(66,'Show Product Reviews Button','SHOW_PRODUCT_FREE_SHIPPING_INFO_REVIEWS','1','Display Product Reviews Button on Product Info 0= off 1= on',5,8,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(67,'Show Date Available','SHOW_PRODUCT_FREE_SHIPPING_INFO_DATE_AVAILABLE','0','Display Date Available on Product Info 0= off 1= on',5,9,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(68,'Show Date Added','SHOW_PRODUCT_FREE_SHIPPING_INFO_DATE_ADDED','1','Display Date Added on Product Info 0= off 1= on',5,10,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(69,'Show Product URL','SHOW_PRODUCT_FREE_SHIPPING_INFO_URL','1','Display URL on Product Info 0= off 1= on',5,11,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(70,'Show Starting At text on Price','SHOW_PRODUCT_FREE_SHIPPING_INFO_STARTING_AT','1','Display Starting At text on products with attributes Product Info 0= off 1= on',5,12,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(71,'Show Product Tell a Friend button','SHOW_PRODUCT_FREE_SHIPPING_INFO_TELL_A_FRIEND','1','Display the Tell a Friend button on Product Info<br /><br />Note: Turning this setting off does not affect the Tell a Friend box in the columns and turning off the Tell a Friend box does not affect the button<br />0= off 1= on',5,15,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(72,'Product Free Shipping Image Status - Catalog','SHOW_PRODUCT_FREE_SHIPPING_INFO_ALWAYS_FREE_SHIPPING_IMAGE_SWITCH','1','Show the Free Shipping image/text in the catalog?',5,16,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'Yes\'), array(\'id\'=>\'0\', \'text\'=>\'No\')), '),(73,'Product Price Tax Class Default - When adding new products?','DEFAULT_PRODUCT_FREE_SHIPPING_TAX_CLASS_ID','0','What should the Product Price Tax Class Default ID be when adding new products?',5,100,NULL,'2005-11-01 09:12:13','',''),(74,'Product Virtual Default Status - Skip Shipping Address - When adding new products?','DEFAULT_PRODUCT_FREE_SHIPPING_PRODUCTS_VIRTUAL','0','Default Virtual Product status to be ON when adding new products?',5,101,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(75,'Product Free Shipping Default Status - Normal Shipping Rules - When adding new products?','DEFAULT_PRODUCT_FREE_SHIPPING_PRODUCTS_IS_ALWAYS_FREE_SHIPPING','1','What should the Default Free Shipping status be when adding new products?',5,102,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(76,'Show Metatags Title Default - Product Title','SHOW_PRODUCT_INFO_METATAGS_TITLE_STATUS','1','Display Product Title in Meta Tags Title 0= off 1= on',1,50,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(77,'Show Metatags Title Default - Product Name','SHOW_PRODUCT_INFO_METATAGS_PRODUCTS_NAME_STATUS','1','Display Product Name in Meta Tags Title 0= off 1= on',1,51,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(78,'Show Metatags Title Default - Product Model','SHOW_PRODUCT_INFO_METATAGS_MODEL_STATUS','1','Display Product Model in Meta Tags Title 0= off 1= on',1,52,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(79,'Show Metatags Title Default - Product Price','SHOW_PRODUCT_INFO_METATAGS_PRICE_STATUS','1','Display Product Price in Meta Tags Title 0= off 1= on',1,53,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(80,'Show Metatags Title Default - Product Tagline','SHOW_PRODUCT_INFO_METATAGS_TITLE_TAGLINE_STATUS','1','Display Product Tagline in Meta Tags Title 0= off 1= on',1,54,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(81,'Show Metatags Title Default - Product Title','SHOW_PRODUCT_MUSIC_INFO_METATAGS_TITLE_STATUS','1','Display Product Title in Meta Tags Title 0= off 1= on',2,50,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(82,'Show Metatags Title Default - Product Name','SHOW_PRODUCT_MUSIC_INFO_METATAGS_PRODUCTS_NAME_STATUS','1','Display Product Name in Meta Tags Title 0= off 1= on',2,51,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(83,'Show Metatags Title Default - Product Model','SHOW_PRODUCT_MUSIC_INFO_METATAGS_MODEL_STATUS','1','Display Product Model in Meta Tags Title 0= off 1= on',2,52,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(84,'Show Metatags Title Default - Product Price','SHOW_PRODUCT_MUSIC_INFO_METATAGS_PRICE_STATUS','1','Display Product Price in Meta Tags Title 0= off 1= on',2,53,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(85,'Show Metatags Title Default - Product Tagline','SHOW_PRODUCT_MUSIC_INFO_METATAGS_TITLE_TAGLINE_STATUS','1','Display Product Tagline in Meta Tags Title 0= off 1= on',2,54,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(86,'Show Metatags Title Default - Document Title','SHOW_DOCUMENT_GENERAL_INFO_METATAGS_TITLE_STATUS','1','Display Document Title in Meta Tags Title 0= off 1= on',3,50,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(87,'Show Metatags Title Default - Document Name','SHOW_DOCUMENT_GENERAL_INFO_METATAGS_PRODUCTS_NAME_STATUS','1','Display Document Name in Meta Tags Title 0= off 1= on',3,51,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(88,'Show Metatags Title Default - Document Tagline','SHOW_DOCUMENT_GENERAL_INFO_METATAGS_TITLE_TAGLINE_STATUS','1','Display Document Tagline in Meta Tags Title 0= off 1= on',3,54,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(89,'Show Metatags Title Default - Document Title','SHOW_DOCUMENT_PRODUCT_INFO_METATAGS_TITLE_STATUS','1','Display Document Title in Meta Tags Title 0= off 1= on',4,50,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(90,'Show Metatags Title Default - Document Name','SHOW_DOCUMENT_PRODUCT_INFO_METATAGS_PRODUCTS_NAME_STATUS','1','Display Document Name in Meta Tags Title 0= off 1= on',4,51,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(91,'Show Metatags Title Default - Document Model','SHOW_DOCUMENT_PRODUCT_INFO_METATAGS_MODEL_STATUS','1','Display Document Model in Meta Tags Title 0= off 1= on',4,52,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(92,'Show Metatags Title Default - Document Price','SHOW_DOCUMENT_PRODUCT_INFO_METATAGS_PRICE_STATUS','1','Display Document Price in Meta Tags Title 0= off 1= on',4,53,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(93,'Show Metatags Title Default - Document Tagline','SHOW_DOCUMENT_PRODUCT_INFO_METATAGS_TITLE_TAGLINE_STATUS','1','Display Document Tagline in Meta Tags Title 0= off 1= on',4,54,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(94,'Show Metatags Title Default - Product Title','SHOW_PRODUCT_FREE_SHIPPING_INFO_METATAGS_TITLE_STATUS','1','Display Product Title in Meta Tags Title 0= off 1= on',5,50,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(95,'Show Metatags Title Default - Product Name','SHOW_PRODUCT_FREE_SHIPPING_INFO_METATAGS_PRODUCTS_NAME_STATUS','1','Display Product Name in Meta Tags Title 0= off 1= on',5,51,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(96,'Show Metatags Title Default - Product Model','SHOW_PRODUCT_FREE_SHIPPING_INFO_METATAGS_MODEL_STATUS','1','Display Product Model in Meta Tags Title 0= off 1= on',5,52,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(97,'Show Metatags Title Default - Product Price','SHOW_PRODUCT_FREE_SHIPPING_INFO_METATAGS_PRICE_STATUS','1','Display Product Price in Meta Tags Title 0= off 1= on',5,53,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), '),(98,'Show Metatags Title Default - Product Tagline','SHOW_PRODUCT_FREE_SHIPPING_INFO_METATAGS_TITLE_TAGLINE_STATUS','1','Display Product Tagline in Meta Tags Title 0= off 1= on',5,54,NULL,'2005-11-01 09:12:13',NULL,'zen_cfg_select_drop_down(array(array(\'id\'=>\'1\', \'text\'=>\'True\'), array(\'id\'=>\'0\', \'text\'=>\'False\')), ');
/*!40000 ALTER TABLE `zen_product_type_layout` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_product_types`
--

DROP TABLE IF EXISTS `zen_product_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_product_types` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(255) NOT NULL DEFAULT '',
  `type_handler` varchar(255) NOT NULL DEFAULT '',
  `type_master_type` int(11) NOT NULL DEFAULT '1',
  `allow_add_to_cart` char(1) NOT NULL DEFAULT 'Y',
  `default_image` varchar(255) NOT NULL DEFAULT '',
  `date_added` datetime NOT NULL DEFAULT '0001-01-01 00:00:00',
  `last_modified` datetime NOT NULL DEFAULT '0001-01-01 00:00:00',
  PRIMARY KEY (`type_id`),
  KEY `idx_type_master_type_zen` (`type_master_type`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_product_types`
--

LOCK TABLES `zen_product_types` WRITE;
/*!40000 ALTER TABLE `zen_product_types` DISABLE KEYS */;
INSERT INTO `zen_product_types` (`type_id`, `type_name`, `type_handler`, `type_master_type`, `allow_add_to_cart`, `default_image`, `date_added`, `last_modified`) VALUES (1,'Product - General','product',1,'Y','','2005-11-01 09:12:13','2005-11-01 09:12:13'),(2,'Product - Music','product_music',1,'Y','','2005-11-01 09:12:13','2005-11-01 09:12:13'),(3,'Document - General','document_general',3,'N','','2005-11-01 09:12:13','2005-11-01 09:12:13'),(4,'Document - Product','document_product',3,'Y','','2005-11-01 09:12:13','2005-11-01 09:12:13'),(5,'Product - Free Shipping','product_free_shipping',1,'Y','','2005-11-01 09:12:13','2005-11-01 09:12:13');
/*!40000 ALTER TABLE `zen_product_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_product_types_to_category`
--

DROP TABLE IF EXISTS `zen_product_types_to_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_product_types_to_category` (
  `product_type_id` int(11) NOT NULL DEFAULT '0',
  `category_id` int(11) NOT NULL DEFAULT '0',
  KEY `idx_category_id_zen` (`category_id`),
  KEY `idx_product_type_id_zen` (`product_type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_product_types_to_category`
--

LOCK TABLES `zen_product_types_to_category` WRITE;
/*!40000 ALTER TABLE `zen_product_types_to_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_product_types_to_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_products`
--

DROP TABLE IF EXISTS `zen_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_products` (
  `products_id` int(11) NOT NULL AUTO_INCREMENT,
  `products_type` int(11) NOT NULL DEFAULT '1',
  `products_quantity` float NOT NULL DEFAULT '0',
  `products_model` varchar(32) DEFAULT NULL,
  `products_image` varchar(64) DEFAULT NULL,
  `products_price` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `products_virtual` tinyint(1) NOT NULL DEFAULT '0',
  `products_date_added` datetime NOT NULL DEFAULT '0001-01-01 00:00:00',
  `products_last_modified` datetime DEFAULT NULL,
  `products_date_available` datetime DEFAULT NULL,
  `products_weight` float NOT NULL DEFAULT '0',
  `products_status` tinyint(1) NOT NULL DEFAULT '0',
  `products_tax_class_id` int(11) NOT NULL DEFAULT '0',
  `manufacturers_id` int(11) DEFAULT NULL,
  `products_ordered` float NOT NULL DEFAULT '0',
  `products_quantity_order_min` float NOT NULL DEFAULT '1',
  `products_quantity_order_units` float NOT NULL DEFAULT '1',
  `products_priced_by_attribute` tinyint(1) NOT NULL DEFAULT '0',
  `product_is_free` tinyint(1) NOT NULL DEFAULT '0',
  `product_is_call` tinyint(1) NOT NULL DEFAULT '0',
  `products_quantity_mixed` tinyint(1) NOT NULL DEFAULT '0',
  `product_is_always_free_shipping` tinyint(1) NOT NULL DEFAULT '0',
  `products_qty_box_status` tinyint(1) NOT NULL DEFAULT '1',
  `products_quantity_order_max` float NOT NULL DEFAULT '0',
  `products_sort_order` int(11) NOT NULL DEFAULT '0',
  `products_discount_type` tinyint(1) NOT NULL DEFAULT '0',
  `products_discount_type_from` tinyint(1) NOT NULL DEFAULT '0',
  `products_price_sorter` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `master_categories_id` int(11) NOT NULL DEFAULT '0',
  `products_mixed_discount_quantity` tinyint(1) NOT NULL DEFAULT '1',
  `metatags_title_status` tinyint(1) NOT NULL DEFAULT '0',
  `metatags_products_name_status` tinyint(1) NOT NULL DEFAULT '0',
  `metatags_model_status` tinyint(1) NOT NULL DEFAULT '0',
  `metatags_price_status` tinyint(1) NOT NULL DEFAULT '0',
  `metatags_title_tagline_status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`products_id`),
  KEY `idx_products_date_added_zen` (`products_date_added`),
  KEY `idx_products_status_zen` (`products_status`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_products`
--

LOCK TABLES `zen_products` WRITE;
/*!40000 ALTER TABLE `zen_products` DISABLE KEYS */;
INSERT INTO `zen_products` (`products_id`, `products_type`, `products_quantity`, `products_model`, `products_image`, `products_price`, `products_virtual`, `products_date_added`, `products_last_modified`, `products_date_available`, `products_weight`, `products_status`, `products_tax_class_id`, `manufacturers_id`, `products_ordered`, `products_quantity_order_min`, `products_quantity_order_units`, `products_priced_by_attribute`, `product_is_free`, `product_is_call`, `products_quantity_mixed`, `product_is_always_free_shipping`, `products_qty_box_status`, `products_quantity_order_max`, `products_sort_order`, `products_discount_type`, `products_discount_type_from`, `products_price_sorter`, `master_categories_id`, `products_mixed_discount_quantity`, `metatags_title_status`, `metatags_products_name_status`, `metatags_model_status`, `metatags_price_status`, `metatags_title_tagline_status`) VALUES (1,1,2548,'#72','logo_phpBB4.gif',14.0000,0,'2005-11-01 11:34:15',NULL,NULL,0.01,1,0,0,0,1,1,0,0,0,1,0,1,0,0,0,0,14.0000,1,1,0,0,0,0,0);
/*!40000 ALTER TABLE `zen_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_products_attributes`
--

DROP TABLE IF EXISTS `zen_products_attributes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_products_attributes` (
  `products_attributes_id` int(11) NOT NULL AUTO_INCREMENT,
  `products_id` int(11) NOT NULL DEFAULT '0',
  `options_id` int(11) NOT NULL DEFAULT '0',
  `options_values_id` int(11) NOT NULL DEFAULT '0',
  `options_values_price` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `price_prefix` char(1) NOT NULL DEFAULT '',
  `products_options_sort_order` int(11) NOT NULL DEFAULT '0',
  `product_attribute_is_free` tinyint(1) NOT NULL DEFAULT '0',
  `products_attributes_weight` float NOT NULL DEFAULT '0',
  `products_attributes_weight_prefix` char(1) NOT NULL DEFAULT '',
  `attributes_display_only` tinyint(1) NOT NULL DEFAULT '0',
  `attributes_default` tinyint(1) NOT NULL DEFAULT '0',
  `attributes_discounted` tinyint(1) NOT NULL DEFAULT '1',
  `attributes_image` varchar(64) DEFAULT NULL,
  `attributes_price_base_included` tinyint(1) NOT NULL DEFAULT '1',
  `attributes_price_onetime` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `attributes_price_factor` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `attributes_price_factor_offset` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `attributes_price_factor_onetime` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `attributes_price_factor_onetime_offset` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `attributes_qty_prices` text,
  `attributes_qty_prices_onetime` text,
  `attributes_price_words` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `attributes_price_words_free` int(4) NOT NULL DEFAULT '0',
  `attributes_price_letters` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `attributes_price_letters_free` int(4) NOT NULL DEFAULT '0',
  `attributes_required` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`products_attributes_id`),
  KEY `idx_id_options_id_values_zen` (`products_id`,`options_id`,`options_values_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_products_attributes`
--

LOCK TABLES `zen_products_attributes` WRITE;
/*!40000 ALTER TABLE `zen_products_attributes` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_products_attributes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_products_attributes_download`
--

DROP TABLE IF EXISTS `zen_products_attributes_download`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_products_attributes_download` (
  `products_attributes_id` int(11) NOT NULL DEFAULT '0',
  `products_attributes_filename` varchar(255) NOT NULL DEFAULT '',
  `products_attributes_maxdays` int(2) DEFAULT '0',
  `products_attributes_maxcount` int(2) DEFAULT '0',
  PRIMARY KEY (`products_attributes_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_products_attributes_download`
--

LOCK TABLES `zen_products_attributes_download` WRITE;
/*!40000 ALTER TABLE `zen_products_attributes_download` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_products_attributes_download` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_products_description`
--

DROP TABLE IF EXISTS `zen_products_description`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_products_description` (
  `products_id` int(11) NOT NULL AUTO_INCREMENT,
  `language_id` int(11) NOT NULL DEFAULT '1',
  `products_name` varchar(64) NOT NULL DEFAULT '',
  `products_description` text,
  `products_url` varchar(255) DEFAULT NULL,
  `products_viewed` int(5) DEFAULT '0',
  PRIMARY KEY (`products_id`,`language_id`),
  KEY `idx_products_name_zen` (`products_name`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_products_description`
--

LOCK TABLES `zen_products_description` WRITE;
/*!40000 ALTER TABLE `zen_products_description` DISABLE KEYS */;
INSERT INTO `zen_products_description` (`products_id`, `language_id`, `products_name`, `products_description`, `products_url`, `products_viewed`) VALUES (1,1,'#72','The 72 looper is used on most 70 class machines','',1);
/*!40000 ALTER TABLE `zen_products_description` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_products_discount_quantity`
--

DROP TABLE IF EXISTS `zen_products_discount_quantity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_products_discount_quantity` (
  `discount_id` int(4) NOT NULL DEFAULT '0',
  `products_id` int(11) NOT NULL DEFAULT '0',
  `discount_qty` float NOT NULL DEFAULT '0',
  `discount_price` decimal(15,4) NOT NULL DEFAULT '0.0000',
  KEY `idx_id_qty_zen` (`products_id`,`discount_qty`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_products_discount_quantity`
--

LOCK TABLES `zen_products_discount_quantity` WRITE;
/*!40000 ALTER TABLE `zen_products_discount_quantity` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_products_discount_quantity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_products_notifications`
--

DROP TABLE IF EXISTS `zen_products_notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_products_notifications` (
  `products_id` int(11) NOT NULL DEFAULT '0',
  `customers_id` int(11) NOT NULL DEFAULT '0',
  `date_added` datetime NOT NULL DEFAULT '0001-01-01 00:00:00',
  PRIMARY KEY (`products_id`,`customers_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_products_notifications`
--

LOCK TABLES `zen_products_notifications` WRITE;
/*!40000 ALTER TABLE `zen_products_notifications` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_products_notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_products_options`
--

DROP TABLE IF EXISTS `zen_products_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_products_options` (
  `products_options_id` int(11) NOT NULL DEFAULT '0',
  `language_id` int(11) NOT NULL DEFAULT '1',
  `products_options_name` varchar(32) NOT NULL DEFAULT '',
  `products_options_sort_order` int(11) NOT NULL DEFAULT '0',
  `products_options_type` int(5) NOT NULL DEFAULT '0',
  `products_options_length` smallint(2) NOT NULL DEFAULT '32',
  `products_options_comment` varchar(64) DEFAULT NULL,
  `products_options_size` smallint(2) NOT NULL DEFAULT '32',
  `products_options_images_per_row` int(2) DEFAULT '5',
  `products_options_images_style` int(1) DEFAULT '0',
  PRIMARY KEY (`products_options_id`,`language_id`),
  KEY `idx_lang_id_zen` (`language_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_products_options`
--

LOCK TABLES `zen_products_options` WRITE;
/*!40000 ALTER TABLE `zen_products_options` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_products_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_products_options_types`
--

DROP TABLE IF EXISTS `zen_products_options_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_products_options_types` (
  `products_options_types_id` int(11) NOT NULL DEFAULT '0',
  `products_options_types_name` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`products_options_types_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Track products_options_types';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_products_options_types`
--

LOCK TABLES `zen_products_options_types` WRITE;
/*!40000 ALTER TABLE `zen_products_options_types` DISABLE KEYS */;
INSERT INTO `zen_products_options_types` (`products_options_types_id`, `products_options_types_name`) VALUES (0,'Dropdown'),(1,'Text'),(2,'Radio'),(3,'Checkbox'),(4,'File'),(5,'Read Only');
/*!40000 ALTER TABLE `zen_products_options_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_products_options_values`
--

DROP TABLE IF EXISTS `zen_products_options_values`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_products_options_values` (
  `products_options_values_id` int(11) NOT NULL DEFAULT '0',
  `language_id` int(11) NOT NULL DEFAULT '1',
  `products_options_values_name` varchar(64) NOT NULL DEFAULT '',
  `products_options_values_sort_order` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`products_options_values_id`,`language_id`),
  KEY `idx_prod_opt_val_id_zen` (`products_options_values_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_products_options_values`
--

LOCK TABLES `zen_products_options_values` WRITE;
/*!40000 ALTER TABLE `zen_products_options_values` DISABLE KEYS */;
INSERT INTO `zen_products_options_values` (`products_options_values_id`, `language_id`, `products_options_values_name`, `products_options_values_sort_order`) VALUES (0,1,'TEXT',0);
/*!40000 ALTER TABLE `zen_products_options_values` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_products_options_values_to_products_options`
--

DROP TABLE IF EXISTS `zen_products_options_values_to_products_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_products_options_values_to_products_options` (
  `products_options_values_to_products_options_id` int(11) NOT NULL AUTO_INCREMENT,
  `products_options_id` int(11) NOT NULL DEFAULT '0',
  `products_options_values_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`products_options_values_to_products_options_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_products_options_values_to_products_options`
--

LOCK TABLES `zen_products_options_values_to_products_options` WRITE;
/*!40000 ALTER TABLE `zen_products_options_values_to_products_options` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_products_options_values_to_products_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_products_to_categories`
--

DROP TABLE IF EXISTS `zen_products_to_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_products_to_categories` (
  `products_id` int(11) NOT NULL DEFAULT '0',
  `categories_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`products_id`,`categories_id`),
  KEY `idx_cat_prod_id_zen` (`categories_id`,`products_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_products_to_categories`
--

LOCK TABLES `zen_products_to_categories` WRITE;
/*!40000 ALTER TABLE `zen_products_to_categories` DISABLE KEYS */;
INSERT INTO `zen_products_to_categories` (`products_id`, `categories_id`) VALUES (1,1);
/*!40000 ALTER TABLE `zen_products_to_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_project_version`
--

DROP TABLE IF EXISTS `zen_project_version`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_project_version` (
  `project_version_id` tinyint(3) NOT NULL AUTO_INCREMENT,
  `project_version_key` varchar(40) NOT NULL DEFAULT '',
  `project_version_major` varchar(20) NOT NULL DEFAULT '',
  `project_version_minor` varchar(20) NOT NULL DEFAULT '',
  `project_version_patch1` varchar(20) NOT NULL DEFAULT '',
  `project_version_patch2` varchar(20) NOT NULL DEFAULT '',
  `project_version_patch1_source` varchar(20) NOT NULL DEFAULT '',
  `project_version_patch2_source` varchar(20) NOT NULL DEFAULT '',
  `project_version_comment` varchar(250) NOT NULL DEFAULT '',
  `project_version_date_applied` datetime NOT NULL DEFAULT '0001-01-01 01:01:01',
  PRIMARY KEY (`project_version_id`),
  UNIQUE KEY `idx_project_version_key_zen` (`project_version_key`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='Database Version Tracking';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_project_version`
--

LOCK TABLES `zen_project_version` WRITE;
/*!40000 ALTER TABLE `zen_project_version` DISABLE KEYS */;
INSERT INTO `zen_project_version` (`project_version_id`, `project_version_key`, `project_version_major`, `project_version_minor`, `project_version_patch1`, `project_version_patch2`, `project_version_patch1_source`, `project_version_patch2_source`, `project_version_comment`, `project_version_date_applied`) VALUES (1,'Zen-Cart Main','1','2.6','','','','','Fresh Installation','2005-11-01 09:12:13'),(2,'Zen-Cart Database','1','2.6','','','','','Fresh Installation','2005-11-01 09:12:13');
/*!40000 ALTER TABLE `zen_project_version` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_project_version_history`
--

DROP TABLE IF EXISTS `zen_project_version_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_project_version_history` (
  `project_version_id` tinyint(3) NOT NULL AUTO_INCREMENT,
  `project_version_key` varchar(40) NOT NULL DEFAULT '',
  `project_version_major` varchar(20) NOT NULL DEFAULT '',
  `project_version_minor` varchar(20) NOT NULL DEFAULT '',
  `project_version_patch` varchar(20) NOT NULL DEFAULT '',
  `project_version_comment` varchar(250) NOT NULL DEFAULT '',
  `project_version_date_applied` datetime NOT NULL DEFAULT '0001-01-01 01:01:01',
  PRIMARY KEY (`project_version_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='Database Version Tracking History';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_project_version_history`
--

LOCK TABLES `zen_project_version_history` WRITE;
/*!40000 ALTER TABLE `zen_project_version_history` DISABLE KEYS */;
INSERT INTO `zen_project_version_history` (`project_version_id`, `project_version_key`, `project_version_major`, `project_version_minor`, `project_version_patch`, `project_version_comment`, `project_version_date_applied`) VALUES (1,'Zen-Cart Main','1','2.6','','Fresh Installation','2005-11-01 09:12:13'),(2,'Zen-Cart Database','1','2.6','','Fresh Installation','2005-11-01 09:12:13');
/*!40000 ALTER TABLE `zen_project_version_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_query_builder`
--

DROP TABLE IF EXISTS `zen_query_builder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_query_builder` (
  `query_id` int(11) NOT NULL AUTO_INCREMENT,
  `query_category` varchar(40) NOT NULL DEFAULT '',
  `query_name` varchar(80) NOT NULL DEFAULT '',
  `query_description` text NOT NULL,
  `query_string` text NOT NULL,
  `query_keys_list` text NOT NULL,
  PRIMARY KEY (`query_id`),
  UNIQUE KEY `query_name` (`query_name`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='Stores queries for re-use in Admin email and report modules';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_query_builder`
--

LOCK TABLES `zen_query_builder` WRITE;
/*!40000 ALTER TABLE `zen_query_builder` DISABLE KEYS */;
INSERT INTO `zen_query_builder` (`query_id`, `query_category`, `query_name`, `query_description`, `query_string`, `query_keys_list`) VALUES (1,'email','All Customers','Returns all customers name and email address for sending mass emails (ie: for newsletters, coupons, GV\'s, messages, etc).','select customers_email_address, customers_firstname, customers_lastname from TABLE_CUSTOMERS order by customers_lastname, customers_firstname, customers_email_address',''),(2,'email,newsletters','All Newsletter Subscribers','Returns name and email address of newsletter subscribers','select customers_firstname, customers_lastname, customers_email_address from TABLE_CUSTOMERS where customers_newsletter = \'1\'',''),(3,'email,newsletters','Dormant Customers (>3months) (Subscribers)','Subscribers who HAVE purchased something, but have NOT purchased for at least three months.','select c.customers_email_address, c.customers_lastname, c.customers_firstname from TABLE_CUSTOMERS c, TABLE_ORDERS o where c.customers_newsletter = \'1\' AND c.customers_id = o.customers_id and o.date_purchased < subdate(now(),INTERVAL 3 MONTH) GROUP BY c.customers_email_address order by c.customers_lastname, c.customers_firstname ASC',''),(4,'email,newsletters','Active customers in past 3 months (Subscribers)','Newsletter subscribers who are also active customers (purchased something) in last 3 months.','select c.customers_email_address, c.customers_lastname, c.customers_firstname from TABLE_CUSTOMERS c, TABLE_ORDERS o where c.customers_newsletter = \'1\' AND c.customers_id = o.customers_id and o.date_purchased > subdate(now(),INTERVAL 3 MONTH) GROUP BY c.customers_email_address order by c.customers_lastname, c.customers_firstname ASC',''),(5,'email,newsletters','Active customers in past 3 months (Regardless of subscription status)','All active customers (purchased something) in last 3 months, ignoring newsletter-subscription status.','select c.customers_email_address, c.customers_lastname, c.customers_firstname from TABLE_CUSTOMERS c, TABLE_ORDERS o WHERE c.customers_id = o.customers_id and o.date_purchased > subdate(now(),INTERVAL 3 MONTH) GROUP BY c.customers_email_address order by c.customers_lastname, c.customers_firstname ASC','');
/*!40000 ALTER TABLE `zen_query_builder` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_record_artists`
--

DROP TABLE IF EXISTS `zen_record_artists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_record_artists` (
  `artists_id` int(11) NOT NULL AUTO_INCREMENT,
  `artists_name` varchar(32) NOT NULL DEFAULT '',
  `artists_image` varchar(64) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `last_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`artists_id`),
  KEY `idx_rec_artists_name_zen` (`artists_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_record_artists`
--

LOCK TABLES `zen_record_artists` WRITE;
/*!40000 ALTER TABLE `zen_record_artists` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_record_artists` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_record_artists_info`
--

DROP TABLE IF EXISTS `zen_record_artists_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_record_artists_info` (
  `artists_id` int(11) NOT NULL DEFAULT '0',
  `languages_id` int(11) NOT NULL DEFAULT '0',
  `artists_url` varchar(255) NOT NULL DEFAULT '',
  `url_clicked` int(5) NOT NULL DEFAULT '0',
  `date_last_click` datetime DEFAULT NULL,
  PRIMARY KEY (`artists_id`,`languages_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_record_artists_info`
--

LOCK TABLES `zen_record_artists_info` WRITE;
/*!40000 ALTER TABLE `zen_record_artists_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_record_artists_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_record_company`
--

DROP TABLE IF EXISTS `zen_record_company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_record_company` (
  `record_company_id` int(11) NOT NULL AUTO_INCREMENT,
  `record_company_name` varchar(32) NOT NULL DEFAULT '',
  `record_company_image` varchar(64) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `last_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`record_company_id`),
  KEY `idx_rec_company_name_zen` (`record_company_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_record_company`
--

LOCK TABLES `zen_record_company` WRITE;
/*!40000 ALTER TABLE `zen_record_company` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_record_company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_record_company_info`
--

DROP TABLE IF EXISTS `zen_record_company_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_record_company_info` (
  `record_company_id` int(11) NOT NULL DEFAULT '0',
  `languages_id` int(11) NOT NULL DEFAULT '0',
  `record_company_url` varchar(255) NOT NULL DEFAULT '',
  `url_clicked` int(5) NOT NULL DEFAULT '0',
  `date_last_click` datetime DEFAULT NULL,
  PRIMARY KEY (`record_company_id`,`languages_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_record_company_info`
--

LOCK TABLES `zen_record_company_info` WRITE;
/*!40000 ALTER TABLE `zen_record_company_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_record_company_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_reviews`
--

DROP TABLE IF EXISTS `zen_reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_reviews` (
  `reviews_id` int(11) NOT NULL AUTO_INCREMENT,
  `products_id` int(11) NOT NULL DEFAULT '0',
  `customers_id` int(11) DEFAULT NULL,
  `customers_name` varchar(64) NOT NULL DEFAULT '',
  `reviews_rating` int(1) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `last_modified` datetime DEFAULT NULL,
  `reviews_read` int(5) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`reviews_id`),
  KEY `idx_products_id_zen` (`products_id`),
  KEY `idx_customers_id_zen` (`customers_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_reviews`
--

LOCK TABLES `zen_reviews` WRITE;
/*!40000 ALTER TABLE `zen_reviews` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_reviews_description`
--

DROP TABLE IF EXISTS `zen_reviews_description`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_reviews_description` (
  `reviews_id` int(11) NOT NULL DEFAULT '0',
  `languages_id` int(11) NOT NULL DEFAULT '0',
  `reviews_text` text NOT NULL,
  PRIMARY KEY (`reviews_id`,`languages_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_reviews_description`
--

LOCK TABLES `zen_reviews_description` WRITE;
/*!40000 ALTER TABLE `zen_reviews_description` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_reviews_description` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_salemaker_sales`
--

DROP TABLE IF EXISTS `zen_salemaker_sales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_salemaker_sales` (
  `sale_id` int(11) NOT NULL AUTO_INCREMENT,
  `sale_status` tinyint(4) NOT NULL DEFAULT '0',
  `sale_name` varchar(30) NOT NULL DEFAULT '',
  `sale_deduction_value` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `sale_deduction_type` tinyint(4) NOT NULL DEFAULT '0',
  `sale_pricerange_from` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `sale_pricerange_to` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `sale_specials_condition` tinyint(4) NOT NULL DEFAULT '0',
  `sale_categories_selected` text,
  `sale_categories_all` text,
  `sale_date_start` date NOT NULL DEFAULT '0001-01-01',
  `sale_date_end` date NOT NULL DEFAULT '0001-01-01',
  `sale_date_added` date NOT NULL DEFAULT '0001-01-01',
  `sale_date_last_modified` date NOT NULL DEFAULT '0001-01-01',
  `sale_date_status_change` date NOT NULL DEFAULT '0001-01-01',
  PRIMARY KEY (`sale_id`),
  KEY `idx_sale_status_zen` (`sale_status`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_salemaker_sales`
--

LOCK TABLES `zen_salemaker_sales` WRITE;
/*!40000 ALTER TABLE `zen_salemaker_sales` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_salemaker_sales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_sessions`
--

DROP TABLE IF EXISTS `zen_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_sessions` (
  `sesskey` varchar(32) NOT NULL DEFAULT '',
  `expiry` int(11) unsigned NOT NULL DEFAULT '0',
  `value` text NOT NULL,
  PRIMARY KEY (`sesskey`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_sessions`
--

LOCK TABLES `zen_sessions` WRITE;
/*!40000 ALTER TABLE `zen_sessions` DISABLE KEYS */;
INSERT INTO `zen_sessions` (`sesskey`, `expiry`, `value`) VALUES ('8e290231c816d88a68b0c97533af9ba1',1130873501,'customers_host_address|s:13:\"65.96.199.154\";cartID|s:0:\"\";cart|O:12:\"shoppingcart\":7:{s:8:\"contents\";a:0:{}s:5:\"total\";i:0;s:6:\"weight\";i:0;s:12:\"content_type\";b:0;s:18:\"free_shipping_item\";i:0;s:20:\"free_shipping_weight\";i:0;s:19:\"free_shipping_price\";i:0;}language|s:7:\"english\";languages_id|s:1:\"1\";currency|s:3:\"EUR\";check_valid|s:4:\"true\";navigation|O:17:\"navigationhistory\":2:{s:4:\"path\";a:1:{i:0;a:4:{s:4:\"page\";s:5:\"index\";s:4:\"mode\";s:6:\"NONSSL\";s:3:\"get\";a:1:{s:8:\"currency\";s:3:\"EUR\";}s:4:\"post\";a:0:{}}}s:8:\"snapshot\";a:0:{}}update_expirations|s:4:\"true\";'),('16b3dbc0935f81ee5c309daf5cd5b74f',1130875472,'language|s:7:\"english\";languages_id|s:1:\"1\";selected_box|s:13:\"configuration\";html_editor_preference_status|s:4:\"NONE\";admin_id|s:1:\"1\";messageToStack|s:0:\"\";categories_products_sort_order|s:1:\"0\";option_names_values_copier|s:1:\"1\";'),('c52e90cd8542d390339383406995b53d',1131741943,'customers_host_address|s:13:\"65.96.199.153\";cartID|s:0:\"\";cart|O:12:\"shoppingcart\":8:{s:8:\"contents\";a:0:{}s:5:\"total\";i:0;s:6:\"weight\";i:0;s:6:\"cartID\";N;s:12:\"content_type\";b:0;s:18:\"free_shipping_item\";i:0;s:20:\"free_shipping_weight\";i:0;s:19:\"free_shipping_price\";i:0;}language|s:7:\"english\";languages_id|s:1:\"1\";currency|s:3:\"USD\";check_valid|s:4:\"true\";navigation|O:17:\"navigationhistory\":2:{s:4:\"path\";a:3:{i:0;a:4:{s:4:\"page\";s:5:\"index\";s:4:\"mode\";s:6:\"NONSSL\";s:3:\"get\";N;s:4:\"post\";a:0:{}}i:1;a:4:{s:4:\"page\";s:5:\"index\";s:4:\"mode\";s:6:\"NONSSL\";s:3:\"get\";a:2:{s:5:\"cPath\";s:1:\"1\";s:5:\"zenid\";s:32:\"c52e90cd8542d390339383406995b53d\";}s:4:\"post\";a:0:{}}i:2;a:4:{s:4:\"page\";s:5:\"index\";s:4:\"mode\";s:6:\"NONSSL\";s:3:\"get\";N;s:4:\"post\";a:0:{}}}s:8:\"snapshot\";a:0:{}}update_expirations|s:4:\"true\";'),('56f74aec27ccdb166954dd6e1bcb8234',1130950007,'customers_host_address|s:13:\"65.96.199.154\";cartID|s:0:\"\";cart|O:12:\"shoppingcart\":7:{s:8:\"contents\";a:0:{}s:5:\"total\";i:0;s:6:\"weight\";i:0;s:12:\"content_type\";b:0;s:18:\"free_shipping_item\";i:0;s:20:\"free_shipping_weight\";i:0;s:19:\"free_shipping_price\";i:0;}language|s:7:\"english\";languages_id|s:1:\"1\";currency|s:3:\"USD\";check_valid|s:4:\"true\";navigation|O:17:\"navigationhistory\":2:{s:4:\"path\";a:1:{i:0;a:4:{s:4:\"page\";s:5:\"index\";s:4:\"mode\";s:6:\"NONSSL\";s:3:\"get\";N;s:4:\"post\";a:0:{}}}s:8:\"snapshot\";a:0:{}}update_expirations|s:4:\"true\";'),('62edfb58f9b9f02960788af605db0bb7',1131664037,'customers_host_address|s:13:\"65.96.199.153\";cartID|s:0:\"\";cart|O:12:\"shoppingcart\":8:{s:8:\"contents\";a:0:{}s:5:\"total\";i:0;s:6:\"weight\";i:0;s:6:\"cartID\";N;s:12:\"content_type\";b:0;s:18:\"free_shipping_item\";i:0;s:20:\"free_shipping_weight\";i:0;s:19:\"free_shipping_price\";i:0;}language|s:7:\"english\";languages_id|s:1:\"1\";currency|s:3:\"USD\";check_valid|s:4:\"true\";navigation|O:17:\"navigationhistory\":2:{s:4:\"path\";a:1:{i:0;a:4:{s:4:\"page\";s:5:\"index\";s:4:\"mode\";s:6:\"NONSSL\";s:3:\"get\";a:1:{s:5:\"zenid\";s:32:\"62edfb58f9b9f02960788af605db0bb7\";}s:4:\"post\";a:0:{}}}s:8:\"snapshot\";a:0:{}}update_expirations|s:4:\"true\";'),('0c3ce863ef8f0f59e579b5244d5f9886',1131744647,'language|s:7:\"english\";languages_id|s:1:\"1\";selected_box|s:13:\"configuration\";html_editor_preference_status|s:4:\"NONE\";admin_id|s:1:\"1\";'),('89b025d831c4ec14cbb6abc984298f4c',1139431454,'customers_host_address|s:13:\"65.96.199.153\";cartID|s:0:\"\";cart|O:12:\"shoppingcart\":7:{s:8:\"contents\";a:0:{}s:5:\"total\";i:0;s:6:\"weight\";i:0;s:12:\"content_type\";b:0;s:18:\"free_shipping_item\";i:0;s:20:\"free_shipping_weight\";i:0;s:19:\"free_shipping_price\";i:0;}language|s:7:\"english\";languages_id|s:1:\"1\";currency|s:3:\"USD\";check_valid|s:4:\"true\";navigation|O:17:\"navigationhistory\":2:{s:4:\"path\";a:1:{i:0;a:4:{s:4:\"page\";s:5:\"index\";s:4:\"mode\";s:6:\"NONSSL\";s:3:\"get\";N;s:4:\"post\";a:0:{}}}s:8:\"snapshot\";a:0:{}}update_expirations|s:4:\"true\";'),('2cc38af8189a46cea43dedd24affd51c',1139431513,'customers_host_address|s:13:\"65.96.199.153\";cartID|s:0:\"\";cart|O:12:\"shoppingcart\":8:{s:8:\"contents\";a:0:{}s:5:\"total\";i:0;s:6:\"weight\";i:0;s:6:\"cartID\";N;s:12:\"content_type\";b:0;s:18:\"free_shipping_item\";i:0;s:20:\"free_shipping_weight\";i:0;s:19:\"free_shipping_price\";i:0;}language|s:7:\"english\";languages_id|s:1:\"1\";currency|s:3:\"USD\";check_valid|s:4:\"true\";navigation|O:17:\"navigationhistory\":2:{s:4:\"path\";a:3:{i:0;a:4:{s:4:\"page\";s:5:\"index\";s:4:\"mode\";s:6:\"NONSSL\";s:3:\"get\";N;s:4:\"post\";a:0:{}}i:1;a:4:{s:4:\"page\";s:12:\"products_new\";s:4:\"mode\";s:6:\"NONSSL\";s:3:\"get\";a:1:{s:5:\"zenid\";s:32:\"2cc38af8189a46cea43dedd24affd51c\";}s:4:\"post\";a:0:{}}i:2;a:4:{s:4:\"page\";s:6:\"page_3\";s:4:\"mode\";s:6:\"NONSSL\";s:3:\"get\";N;s:4:\"post\";a:0:{}}}s:8:\"snapshot\";a:0:{}}update_expirations|s:4:\"true\";'),('aaafb1508bd08c4c5fe51a803c7c2f15',1139434617,'language|s:7:\"english\";languages_id|s:1:\"1\";selected_box|s:13:\"configuration\";html_editor_preference_status|s:4:\"NONE\";admin_id|s:1:\"1\";'),('2447555ea7d7969bcf48ee33b7327b06',1144183744,'customers_host_address|s:13:\"65.96.199.153\";cartID|s:0:\"\";cart|O:12:\"shoppingcart\":7:{s:8:\"contents\";a:0:{}s:5:\"total\";i:0;s:6:\"weight\";i:0;s:12:\"content_type\";b:0;s:18:\"free_shipping_item\";i:0;s:20:\"free_shipping_weight\";i:0;s:19:\"free_shipping_price\";i:0;}language|s:7:\"english\";languages_id|s:1:\"1\";currency|s:3:\"USD\";check_valid|s:4:\"true\";navigation|O:17:\"navigationhistory\":2:{s:4:\"path\";a:1:{i:0;a:4:{s:4:\"page\";s:5:\"index\";s:4:\"mode\";s:6:\"NONSSL\";s:3:\"get\";N;s:4:\"post\";a:0:{}}}s:8:\"snapshot\";a:0:{}}update_expirations|s:4:\"true\";'),('410a47f77f5f9d8bce989f59423ccf2f',1144783899,'customers_host_address|s:13:\"65.96.199.153\";cartID|s:0:\"\";cart|O:12:\"shoppingcart\":8:{s:8:\"contents\";a:0:{}s:5:\"total\";i:0;s:6:\"weight\";i:0;s:6:\"cartID\";N;s:12:\"content_type\";b:0;s:18:\"free_shipping_item\";i:0;s:20:\"free_shipping_weight\";i:0;s:19:\"free_shipping_price\";i:0;}language|s:7:\"english\";languages_id|s:1:\"1\";currency|s:3:\"USD\";check_valid|s:4:\"true\";navigation|O:17:\"navigationhistory\":2:{s:4:\"path\";a:2:{i:0;a:4:{s:4:\"page\";s:5:\"index\";s:4:\"mode\";s:6:\"NONSSL\";s:3:\"get\";N;s:4:\"post\";a:0:{}}i:1;a:4:{s:4:\"page\";s:12:\"products_new\";s:4:\"mode\";s:6:\"NONSSL\";s:3:\"get\";a:1:{s:5:\"zenid\";s:32:\"410a47f77f5f9d8bce989f59423ccf2f\";}s:4:\"post\";a:0:{}}}s:8:\"snapshot\";a:0:{}}update_expirations|s:4:\"true\";'),('b999e08ac54b6ea0d4c1b81338a75bbe',1144787014,'language|s:7:\"english\";languages_id|s:1:\"1\";selected_box|s:13:\"configuration\";html_editor_preference_status|s:4:\"NONE\";admin_id|s:1:\"1\";');
/*!40000 ALTER TABLE `zen_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_specials`
--

DROP TABLE IF EXISTS `zen_specials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_specials` (
  `specials_id` int(11) NOT NULL AUTO_INCREMENT,
  `products_id` int(11) NOT NULL DEFAULT '0',
  `specials_new_products_price` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `specials_date_added` datetime DEFAULT NULL,
  `specials_last_modified` datetime DEFAULT NULL,
  `expires_date` date NOT NULL DEFAULT '0001-01-01',
  `date_status_change` datetime DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `specials_date_available` date NOT NULL DEFAULT '0001-01-01',
  PRIMARY KEY (`specials_id`),
  KEY `idx_status_zen` (`status`),
  KEY `idx_products_id_zen` (`products_id`),
  KEY `idx_date_avail_zen` (`specials_date_available`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_specials`
--

LOCK TABLES `zen_specials` WRITE;
/*!40000 ALTER TABLE `zen_specials` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_specials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_tax_class`
--

DROP TABLE IF EXISTS `zen_tax_class`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_tax_class` (
  `tax_class_id` int(11) NOT NULL AUTO_INCREMENT,
  `tax_class_title` varchar(32) NOT NULL DEFAULT '',
  `tax_class_description` varchar(255) NOT NULL DEFAULT '',
  `last_modified` datetime DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT '0001-01-01 00:00:00',
  PRIMARY KEY (`tax_class_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_tax_class`
--

LOCK TABLES `zen_tax_class` WRITE;
/*!40000 ALTER TABLE `zen_tax_class` DISABLE KEYS */;
INSERT INTO `zen_tax_class` (`tax_class_id`, `tax_class_title`, `tax_class_description`, `last_modified`, `date_added`) VALUES (1,'Taxable Goods','The following types of products are included non-food, services, etc','2005-11-01 09:12:13','2005-11-01 09:12:13');
/*!40000 ALTER TABLE `zen_tax_class` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_tax_rates`
--

DROP TABLE IF EXISTS `zen_tax_rates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_tax_rates` (
  `tax_rates_id` int(11) NOT NULL AUTO_INCREMENT,
  `tax_zone_id` int(11) NOT NULL DEFAULT '0',
  `tax_class_id` int(11) NOT NULL DEFAULT '0',
  `tax_priority` int(5) DEFAULT '1',
  `tax_rate` decimal(7,4) NOT NULL DEFAULT '0.0000',
  `tax_description` varchar(255) NOT NULL DEFAULT '',
  `last_modified` datetime DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT '0001-01-01 00:00:00',
  PRIMARY KEY (`tax_rates_id`),
  KEY `idx_tax_zone_id_zen` (`tax_zone_id`),
  KEY `idx_tax_class_id_zen` (`tax_class_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_tax_rates`
--

LOCK TABLES `zen_tax_rates` WRITE;
/*!40000 ALTER TABLE `zen_tax_rates` DISABLE KEYS */;
INSERT INTO `zen_tax_rates` (`tax_rates_id`, `tax_zone_id`, `tax_class_id`, `tax_priority`, `tax_rate`, `tax_description`, `last_modified`, `date_added`) VALUES (1,1,1,1,7.0000,'FL TAX 7.0%','2005-11-01 09:12:13','2005-11-01 09:12:13');
/*!40000 ALTER TABLE `zen_tax_rates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_template_select`
--

DROP TABLE IF EXISTS `zen_template_select`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_template_select` (
  `template_id` int(11) NOT NULL AUTO_INCREMENT,
  `template_dir` varchar(64) NOT NULL DEFAULT '',
  `template_language` varchar(64) NOT NULL DEFAULT '0',
  PRIMARY KEY (`template_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_template_select`
--

LOCK TABLES `zen_template_select` WRITE;
/*!40000 ALTER TABLE `zen_template_select` DISABLE KEYS */;
INSERT INTO `zen_template_select` (`template_id`, `template_dir`, `template_language`) VALUES (1,'blue_strip','0');
/*!40000 ALTER TABLE `zen_template_select` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_upgrade_exceptions`
--

DROP TABLE IF EXISTS `zen_upgrade_exceptions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_upgrade_exceptions` (
  `upgrade_exception_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `sql_file` varchar(50) DEFAULT NULL,
  `reason` varchar(200) DEFAULT NULL,
  `errordate` datetime DEFAULT '0001-01-01 00:00:00',
  `sqlstatement` text,
  PRIMARY KEY (`upgrade_exception_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_upgrade_exceptions`
--

LOCK TABLES `zen_upgrade_exceptions` WRITE;
/*!40000 ALTER TABLE `zen_upgrade_exceptions` DISABLE KEYS */;
/*!40000 ALTER TABLE `zen_upgrade_exceptions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_whos_online`
--

DROP TABLE IF EXISTS `zen_whos_online`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_whos_online` (
  `customer_id` int(11) DEFAULT NULL,
  `full_name` varchar(64) NOT NULL DEFAULT '',
  `session_id` varchar(128) NOT NULL DEFAULT '',
  `ip_address` varchar(15) NOT NULL DEFAULT '',
  `time_entry` varchar(14) NOT NULL DEFAULT '',
  `time_last_click` varchar(14) NOT NULL DEFAULT '',
  `last_page_url` varchar(255) NOT NULL DEFAULT '',
  `host_address` text NOT NULL,
  `user_agent` varchar(255) NOT NULL DEFAULT '',
  KEY `idx_ip_address_zen` (`ip_address`),
  KEY `idx_session_id_zen` (`session_id`),
  KEY `idx_customer_id_zen` (`customer_id`),
  KEY `idx_time_entry_zen` (`time_entry`),
  KEY `idx_time_last_click_zen` (`time_last_click`),
  KEY `idx_last_page_url_zen` (`last_page_url`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_whos_online`
--

LOCK TABLES `zen_whos_online` WRITE;
/*!40000 ALTER TABLE `zen_whos_online` DISABLE KEYS */;
INSERT INTO `zen_whos_online` (`customer_id`, `full_name`, `session_id`, `ip_address`, `time_entry`, `time_last_click`, `last_page_url`, `host_address`, `user_agent`) VALUES (0,'Guest','410a47f77f5f9d8bce989f59423ccf2f','65.96.199.153','1144782454','1144782459','/buy/index.php?main_page=products_new&zenid=410a47f77f5f9d8bce989f59423ccf2f','65.96.199.153','Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8.0.1) Gecko/20060111 Firefox/1.5.0.1');
/*!40000 ALTER TABLE `zen_whos_online` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_zones`
--

DROP TABLE IF EXISTS `zen_zones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_zones` (
  `zone_id` int(11) NOT NULL AUTO_INCREMENT,
  `zone_country_id` int(11) NOT NULL DEFAULT '0',
  `zone_code` varchar(32) NOT NULL DEFAULT '',
  `zone_name` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`zone_id`)
) ENGINE=MyISAM AUTO_INCREMENT=182 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_zones`
--

LOCK TABLES `zen_zones` WRITE;
/*!40000 ALTER TABLE `zen_zones` DISABLE KEYS */;
INSERT INTO `zen_zones` (`zone_id`, `zone_country_id`, `zone_code`, `zone_name`) VALUES (1,223,'AL','Alabama'),(2,223,'AK','Alaska'),(3,223,'AS','American Samoa'),(4,223,'AZ','Arizona'),(5,223,'AR','Arkansas'),(6,223,'AF','Armed Forces Africa'),(7,223,'AA','Armed Forces Americas'),(8,223,'AC','Armed Forces Canada'),(9,223,'AE','Armed Forces Europe'),(10,223,'AM','Armed Forces Middle East'),(11,223,'AP','Armed Forces Pacific'),(12,223,'CA','California'),(13,223,'CO','Colorado'),(14,223,'CT','Connecticut'),(15,223,'DE','Delaware'),(16,223,'DC','District of Columbia'),(17,223,'FM','Federated States Of Micronesia'),(18,223,'FL','Florida'),(19,223,'GA','Georgia'),(20,223,'GU','Guam'),(21,223,'HI','Hawaii'),(22,223,'ID','Idaho'),(23,223,'IL','Illinois'),(24,223,'IN','Indiana'),(25,223,'IA','Iowa'),(26,223,'KS','Kansas'),(27,223,'KY','Kentucky'),(28,223,'LA','Louisiana'),(29,223,'ME','Maine'),(30,223,'MH','Marshall Islands'),(31,223,'MD','Maryland'),(32,223,'MA','Massachusetts'),(33,223,'MI','Michigan'),(34,223,'MN','Minnesota'),(35,223,'MS','Mississippi'),(36,223,'MO','Missouri'),(37,223,'MT','Montana'),(38,223,'NE','Nebraska'),(39,223,'NV','Nevada'),(40,223,'NH','New Hampshire'),(41,223,'NJ','New Jersey'),(42,223,'NM','New Mexico'),(43,223,'NY','New York'),(44,223,'NC','North Carolina'),(45,223,'ND','North Dakota'),(46,223,'MP','Northern Mariana Islands'),(47,223,'OH','Ohio'),(48,223,'OK','Oklahoma'),(49,223,'OR','Oregon'),(50,223,'PW','Palau'),(51,223,'PA','Pennsylvania'),(52,223,'PR','Puerto Rico'),(53,223,'RI','Rhode Island'),(54,223,'SC','South Carolina'),(55,223,'SD','South Dakota'),(56,223,'TN','Tennessee'),(57,223,'TX','Texas'),(58,223,'UT','Utah'),(59,223,'VT','Vermont'),(60,223,'VI','Virgin Islands'),(61,223,'VA','Virginia'),(62,223,'WA','Washington'),(63,223,'WV','West Virginia'),(64,223,'WI','Wisconsin'),(65,223,'WY','Wyoming'),(66,38,'AB','Alberta'),(67,38,'BC','British Columbia'),(68,38,'MB','Manitoba'),(69,38,'NF','Newfoundland'),(70,38,'NB','New Brunswick'),(71,38,'NS','Nova Scotia'),(72,38,'NT','Northwest Territories'),(73,38,'NU','Nunavut'),(74,38,'ON','Ontario'),(75,38,'PE','Prince Edward Island'),(76,38,'QC','Quebec'),(77,38,'SK','Saskatchewan'),(78,38,'YT','Yukon Territory'),(79,81,'NDS','Niedersachsen'),(80,81,'BAW','Baden-Wrttemberg'),(81,81,'BAY','Bayern'),(82,81,'BER','Berlin'),(83,81,'BRG','Brandenburg'),(84,81,'BRE','Bremen'),(85,81,'HAM','Hamburg'),(86,81,'HES','Hessen'),(87,81,'MEC','Mecklenburg-Vorpommern'),(88,81,'NRW','Nordrhein-Westfalen'),(89,81,'RHE','Rheinland-Pfalz'),(90,81,'SAR','Saarland'),(91,81,'SAS','Sachsen'),(92,81,'SAC','Sachsen-Anhalt'),(93,81,'SCN','Schleswig-Holstein'),(94,81,'THE','Thringen'),(95,14,'WI','Wien'),(96,14,'NO','Niedersterreich'),(97,14,'OO','Obersterreich'),(98,14,'SB','Salzburg'),(99,14,'KN','K???nten'),(100,14,'ST','Steiermark'),(101,14,'TI','Tirol'),(102,14,'BL','Burgenland'),(103,14,'VB','Voralberg'),(104,204,'AG','Aargau'),(105,204,'AI','Appenzell Innerrhoden'),(106,204,'AR','Appenzell Ausserrhoden'),(107,204,'BE','Bern'),(108,204,'BL','Basel-Landschaft'),(109,204,'BS','Basel-Stadt'),(110,204,'FR','Freiburg'),(111,204,'GE','Genf'),(112,204,'GL','Glarus'),(113,204,'JU','Graubnden'),(114,204,'JU','Jura'),(115,204,'LU','Luzern'),(116,204,'NE','Neuenburg'),(117,204,'NW','Nidwalden'),(118,204,'OW','Obwalden'),(119,204,'SG','St. Gallen'),(120,204,'SH','Schaffhausen'),(121,204,'SO','Solothurn'),(122,204,'SZ','Schwyz'),(123,204,'TG','Thurgau'),(124,204,'TI','Tessin'),(125,204,'UR','Uri'),(126,204,'VD','Waadt'),(127,204,'VS','Wallis'),(128,204,'ZG','Zug'),(129,204,'ZH','Zrich'),(130,195,'A Corua','A Corua'),(131,195,'Alava','Alava'),(132,195,'Albacete','Albacete'),(133,195,'Alicante','Alicante'),(134,195,'Almeria','Almeria'),(135,195,'Asturias','Asturias'),(136,195,'Avila','Avila'),(137,195,'Badajoz','Badajoz'),(138,195,'Baleares','Baleares'),(139,195,'Barcelona','Barcelona'),(140,195,'Burgos','Burgos'),(141,195,'Caceres','Caceres'),(142,195,'Cadiz','Cadiz'),(143,195,'Cantabria','Cantabria'),(144,195,'Castellon','Castellon'),(145,195,'Ceuta','Ceuta'),(146,195,'Ciudad Real','Ciudad Real'),(147,195,'Cordoba','Cordoba'),(148,195,'Cuenca','Cuenca'),(149,195,'Girona','Girona'),(150,195,'Granada','Granada'),(151,195,'Guadalajara','Guadalajara'),(152,195,'Guipuzcoa','Guipuzcoa'),(153,195,'Huelva','Huelva'),(154,195,'Huesca','Huesca'),(155,195,'Jaen','Jaen'),(156,195,'La Rioja','La Rioja'),(157,195,'Las Palmas','Las Palmas'),(158,195,'Leon','Leon'),(159,195,'Lleida','Lleida'),(160,195,'Lugo','Lugo'),(161,195,'Madrid','Madrid'),(162,195,'Malaga','Malaga'),(163,195,'Melilla','Melilla'),(164,195,'Murcia','Murcia'),(165,195,'Navarra','Navarra'),(166,195,'Ourense','Ourense'),(167,195,'Palencia','Palencia'),(168,195,'Pontevedra','Pontevedra'),(169,195,'Salamanca','Salamanca'),(170,195,'Santa Cruz de Tenerife','Santa Cruz de Tenerife'),(171,195,'Segovia','Segovia'),(172,195,'Sevilla','Sevilla'),(173,195,'Soria','Soria'),(174,195,'Tarragona','Tarragona'),(175,195,'Teruel','Teruel'),(176,195,'Toledo','Toledo'),(177,195,'Valencia','Valencia'),(178,195,'Valladolid','Valladolid'),(179,195,'Vizcaya','Vizcaya'),(180,195,'Zamora','Zamora'),(181,195,'Zaragoza','Zaragoza');
/*!40000 ALTER TABLE `zen_zones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zen_zones_to_geo_zones`
--

DROP TABLE IF EXISTS `zen_zones_to_geo_zones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zen_zones_to_geo_zones` (
  `association_id` int(11) NOT NULL AUTO_INCREMENT,
  `zone_country_id` int(11) NOT NULL DEFAULT '0',
  `zone_id` int(11) DEFAULT NULL,
  `geo_zone_id` int(11) DEFAULT NULL,
  `last_modified` datetime DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT '0001-01-01 00:00:00',
  PRIMARY KEY (`association_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zen_zones_to_geo_zones`
--

LOCK TABLES `zen_zones_to_geo_zones` WRITE;
/*!40000 ALTER TABLE `zen_zones_to_geo_zones` DISABLE KEYS */;
INSERT INTO `zen_zones_to_geo_zones` (`association_id`, `zone_country_id`, `zone_id`, `geo_zone_id`, `last_modified`, `date_added`) VALUES (1,223,18,1,NULL,'2005-11-01 09:12:13');
/*!40000 ALTER TABLE `zen_zones_to_geo_zones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'merrowco_zc1'
--

--
-- Dumping routines for database 'merrowco_zc1'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-12-11  8:42:43
