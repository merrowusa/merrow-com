-- MySQL dump 10.13  Distrib 5.7.42, for Linux (x86_64)
--
-- Host: localhost    Database: merrowco_pchat1
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
-- Current Database: `merrowco_pchat1`
--


--
-- Table structure for table `c_ban_users`
--

DROP TABLE IF EXISTS `c_ban_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `c_ban_users` (
  `username` varchar(30) NOT NULL DEFAULT '',
  `latin1` tinyint(1) NOT NULL DEFAULT '0',
  `ip` varchar(16) NOT NULL DEFAULT '',
  `rooms` varchar(100) NOT NULL DEFAULT '',
  `ban_until` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c_ban_users`
--

LOCK TABLES `c_ban_users` WRITE;
/*!40000 ALTER TABLE `c_ban_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `c_ban_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c_messages`
--

DROP TABLE IF EXISTS `c_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `c_messages` (
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `room` varchar(30) NOT NULL DEFAULT '',
  `username` varchar(30) NOT NULL DEFAULT '',
  `latin1` tinyint(1) NOT NULL DEFAULT '0',
  `m_time` int(11) NOT NULL DEFAULT '0',
  `address` varchar(30) NOT NULL DEFAULT '',
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c_messages`
--

LOCK TABLES `c_messages` WRITE;
/*!40000 ALTER TABLE `c_messages` DISABLE KEYS */;
INSERT INTO `c_messages` (`type`, `room`, `username`, `latin1`, `m_time`, `address`, `message`) VALUES (1,'Default','SYS enter',0,1130772605,'','sprintf(L_ENTER_ROM, \"cmerrow\")'),(1,'Default','SYS welcome',0,1130775041,'cmerrow','sprintf(\"Welcome to our chat. Please obey the net etiquette while chatting: <I>try to be pleasant and polite</I>.\")'),(1,'Default','cmerrow',1,1130772613,'','<FONT COLOR=\"#000000\">hello</FONT>'),(1,'Default','SYS exit',0,1130772705,'','sprintf(L_EXIT_ROM, \"cmerrow\")'),(1,'Default','SYS enter',0,1130775040,'','sprintf(L_ENTER_ROM, \"cmerrow\")');
/*!40000 ALTER TABLE `c_messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c_reg_users`
--

DROP TABLE IF EXISTS `c_reg_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `c_reg_users` (
  `username` varchar(30) NOT NULL DEFAULT '',
  `latin1` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(32) NOT NULL DEFAULT '',
  `firstname` varchar(64) NOT NULL DEFAULT '',
  `lastname` varchar(64) NOT NULL DEFAULT '',
  `country` varchar(64) NOT NULL DEFAULT '',
  `website` varchar(64) NOT NULL DEFAULT '',
  `email` varchar(64) NOT NULL DEFAULT '',
  `showemail` tinyint(1) NOT NULL DEFAULT '0',
  `perms` varchar(9) NOT NULL DEFAULT '',
  `rooms` varchar(128) NOT NULL DEFAULT '',
  `reg_time` int(11) NOT NULL DEFAULT '0',
  `ip` varchar(16) NOT NULL DEFAULT '',
  `gender` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c_reg_users`
--

LOCK TABLES `c_reg_users` WRITE;
/*!40000 ALTER TABLE `c_reg_users` DISABLE KEYS */;
INSERT INTO `c_reg_users` (`username`, `latin1`, `password`, `firstname`, `lastname`, `country`, `website`, `email`, `showemail`, `perms`, `rooms`, `reg_time`, `ip`, `gender`) VALUES ('admin',0,'21232f297a57a5a743894a0e4a801fc3','','','','','',0,'admin','',0,'',0),('admin',0,'3fd2bfba5344eafec966f677ca9e6dda','','','','','',0,'admin','',1130769358,'',1),('cmerrow',1,'3fd2bfba5344eafec966f677ca9e6dda','charlie','merrow','English','','charlie@merrow.com',1,'user','',1130775040,'65.96.199.154',1);
/*!40000 ALTER TABLE `c_reg_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c_users`
--

DROP TABLE IF EXISTS `c_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `c_users` (
  `room` varchar(30) NOT NULL DEFAULT '',
  `username` varchar(30) NOT NULL DEFAULT '',
  `latin1` tinyint(1) NOT NULL DEFAULT '0',
  `u_time` int(11) NOT NULL DEFAULT '0',
  `status` char(1) NOT NULL DEFAULT '',
  `ip` varchar(16) NOT NULL DEFAULT '',
  UNIQUE KEY `room` (`room`,`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c_users`
--

LOCK TABLES `c_users` WRITE;
/*!40000 ALTER TABLE `c_users` DISABLE KEYS */;
INSERT INTO `c_users` (`room`, `username`, `latin1`, `u_time`, `status`, `ip`) VALUES ('Default','cmerrow',1,1130775050,'r','65.96.199.154');
/*!40000 ALTER TABLE `c_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'merrowco_pchat1'
--

--
-- Dumping routines for database 'merrowco_pchat1'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-12-11  8:39:45
