-- MySQL dump 10.13  Distrib 5.7.42, for Linux (x86_64)
--
-- Host: localhost    Database: merrowco_slhd1
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
-- Current Database: `merrowco_slhd1`
--


--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(40) NOT NULL DEFAULT '',
  `email` varchar(30) NOT NULL DEFAULT '',
  `get_email` varchar(10) NOT NULL DEFAULT 'no',
  `language` varchar(10) NOT NULL DEFAULT 'en',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id`, `username`, `password`, `email`, `get_email`, `language`) VALUES (1,'admin','3fd2bfba5344eafec966f677ca9e6dda','merrowco@merrow.com','no','en');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `announcements`
--

DROP TABLE IF EXISTS `announcements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `announcements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(150) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `sent_date` date NOT NULL DEFAULT '0000-00-00',
  `show_date` varchar(20) NOT NULL DEFAULT '',
  `show_to` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `announcements`
--

LOCK TABLES `announcements` WRITE;
/*!40000 ALTER TABLE `announcements` DISABLE KEYS */;
/*!40000 ALTER TABLE `announcements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attachments`
--

DROP TABLE IF EXISTS `attachments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attachments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ticket_id` int(11) NOT NULL DEFAULT '0',
  `bin_data` longblob NOT NULL,
  `filename` varchar(50) NOT NULL DEFAULT '',
  `filetype` varchar(50) NOT NULL DEFAULT '',
  `filesize` varchar(50) NOT NULL DEFAULT '',
  `user` varchar(200) NOT NULL DEFAULT 'none',
  `sent_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attachments`
--

LOCK TABLES `attachments` WRITE;
/*!40000 ALTER TABLE `attachments` DISABLE KEYS */;
/*!40000 ALTER TABLE `attachments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `info` varchar(200) NOT NULL DEFAULT '',
  `subscribers` tinytext NOT NULL,
  `email_pipe` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`, `info`, `subscribers`, `email_pipe`) VALUES (1,'General','General Questions','',''),(2,'Billing','Billing related questions','','');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `config`
--

DROP TABLE IF EXISTS `config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL DEFAULT '',
  `subject` varchar(200) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `config`
--

LOCK TABLES `config` WRITE;
/*!40000 ALTER TABLE `config` DISABLE KEYS */;
INSERT INTO `config` (`id`, `name`, `subject`, `content`) VALUES (1,'staff_add_note_close_verified','Your helpdesk ticket [#ID{ID}] has been closed','Your helpdesk ticket has just been closed by {STAFF_SENDER}\r\n\r\nDetails:\r\n{CONTENT}\r\n\r\n\r\nTo view the ticket please visit: {CONTENT_URL}\r\n\r\nOr click here to re-open the ticket: {REOPEN_URL}'),(2,'staff_add_note_user','Your helpdesk ticket has been updated [#ID{ID}]','Your helpdesk ticket has just been updated by {STAFF_SENDER}\r\n\r\nDetails: \r\n{CONTENT}\r\n\r\n\r\nTo respond to this update or to view the ticket please visit: {CONTENT_URL}'),(3,'staff_add_note_staff','{STAFF_SENDER} added a staff-2-staff note to your helpdesk ticket.','{STAFF_SENDER} added the following staff-2-staff note to your ticket:\r\n\r\n{CONTENT}\r\n\r\n\r\nTo view the ticket please visit: {CONTENT_URL}'),(4,'staff_grab_ticket','{STAFF_SENDER} just grabbed your ticket no. {ID}','{STAFF_SENDER} just grabbed your support-ticket no. {ID}\r\n\r\n\r\nClick here for details: {CONTENT_URL}'),(5,'staff_claim_ticket','Your helpdesk ticket has been viewed by a staff member [#ID{ID}]','Your helpdesk ticket, number {ID}, has been viewed by {STAFF_SENDER}.\r\n\r\nThis means that your request is currently being worked on and a staff member will respond to your ticket shortly.'),(6,'staff_move_ticket','{STAFF_SENDER} just moved ticket no.{ID} on to you.','{STAFF_SENDER} just moved you his support-ticket no. {ID}\r\n\r\nClick here for details: {CONTENT_URL}'),(7,'user_add_note_close_verified','{USER} just set a ticket to be closed.','{USER} just added a new note to your support-ticket and set the ticket to be closed:\r\n\r\nDetails:\r\n{CONTENT}\r\n\r\n\r\n\r\nClick here for details: {CONTENT_URL}'),(8,'user_add_note_staff','Note added to your ticket by {USER}','{USER} just added the following note to your support-ticket:\r\n\r\n{CONTENT}\r\n\r\n\r\n\r\nClick here for details: {CONTENT_URL}'),(9,'user_reopen_ticket','{USER} just re-opened ticket no. {ID}','{USER} just re-opened one of his support-tickets.\r\n\r\nClick here for details: {CONTENT_URL}'),(10,'user_new_ticket_alert','URGENT: User {USER} submitted a new request - priority: {PRIORITY}','New ticket no. {ID} for your subscribed category: {CATEGORY}\r\n\r\n{USER} submitted his support request at {DATE} (server time) with priority: {PRIORITY}\r\n\r\nSubject: {SUBJECT}\r\n\r\nContent: \r\n{CONTENT}\r\nfsad\r\n\r\nTo view and claim this support-request, please click here: {CONTENT_URL}'),(11,'user_new_ticket','User {USER} submitted a new request - priority: {PRIORITY}','New ticket no. {ID} for your subscribed category: {CATEGORY}\r\n\r\n{USER} submitted his support request at {DATE} (server time) with priority: {PRIORITY}\r\n\r\nSubject: {SUBJECT}\r\n\r\nContent: \r\n{CONTENT}\r\n\r\n\r\n\r\nTo view this support-request, please click here: {CONTENT_URL}'),(12,'user_register','Your Support-Logic account details','Thank you for registering to use our helpdesk.\r\n\r\nYou can log in with your account details\r\nusername: {USER}\r\npassword: {PASSWORD}\r\n\r\nhere: {URL}\r\n\r\nIf you need to modify your account settings, then you can do so in the Edit Profile section, which you can access here: {URL}?tpl=slogic_profile'),(13,'user_lost_password','Your Support-Logic password change verification','You requested a password recovery for your helpdesk account.\r\n\r\nClick on the following URL if you want to reset your password.\r\n{URL}\r\n\r\nOnce you click on the URL, you will be redirected to the login page and you can log in with the following password:\r\n{PASS}'),(14,'pipe_new_user','Your support account','Dear {EMAIL},\n\nwe just setup an account for you so that you can login to our helpdesk to follow the ticket notes.\n\nYour login details are as follows:\n\nUsername: {USERNAME}\nPassword: {PASSWORD}\n\nYou can login to our heldpdesk here: {URL}\n\nYou should change your initial password, which you can do here:{URL}?tpl=slogic_profile'),(15,'pipe_ticket_error','Your support request didn\'t arrive','Dear {USERNAME},\n\nI am sorry, but your support email didn\'t make it in our database, please log in manually at {URL}\nor try to re-send your request.'),(16,'pipe_new_ticket_user','Your support request [#ID{PIPE_ID}]','Dear {USERNAME},\n\na ticket was created with your email info, which you can access here: {URL}?tpl=tickets_show_ticket&id={PIPE_ID}\n\nIf you want to submit follow-up emails to your ticket, then you have to add the following in your subject line: [#ID{PIPE_ID}]\nor you can simply reply to this email.'),(17,'pipe_new_ticket_staff','User {USER} submitted a new request via email','New ticket no. {ID} sent by email\n\n{USER} submitted the following by email on {DATE} (server time):\n\nSubject: {SUBJECT}\n\nContent:\n{CONTENT}\n\n\nTo view this support-request, please click here: {CONTENT_URL}'),(18,'pipe_add_note_error','Problems with your add-on email to your support request','Dear {FROM},\n\nyou tried to send an add-on email to your support request, which resulted in an error.\nYou either tried to reply to a ticket which doesn\'t belong to you, or you submitted the add-on email from the wrong email address.\nYou have to use the same email address in order to be able to submit follow-ups to your support request.\nThis is a security measure which prevents 3rd party users from gaining access to your tickets and / or prevents them from adding nonsense notes to your requests.\n\nPlease try again and if you are still receiving this email, feel free to login to your helpdesk account manually here:{URL}'),(19,'pipe_add_note_closed','Your support request','Dear {USER},\n\nyour add-on email to your support request didn\'t make it into our database, because the ticket is already closed.\n\nPlease login to the helpdesk and re-open the ticket in order to be able to add new notes to it.\n\nYou can re-open the ticket here: {URL}?tpl=tickets_show_ticket&id={PIPE_ID}'),(20,'pipe_add_note_user','Follow-up to your support request [#ID{PIPE_ID}]','Dear {USER},\n\nan add-on note to your ticket was created with your email info, which you can access here: {URL}?tpl=tickets_show_ticket&id={PIPE_ID}\n\nIf you want to submit another follow-up email to your ticket, then you have to add the following in your subject line: [#ID{PIPE_ID}]\nor you can simply reply to this email'),(21,'pipe_add_note_staff','Note added to your ticket by {USER}','{USER} just added the following note to your support-ticket:\n\n{CONTENT}\n\nYou can access the ticket here: {URL}?tpl=tickets_show_ticket&id={PIPE_ID}'),(22,'pipe_flood_report','Email flood alert!','{USER} exceeded the daily email limit.\nThis could be caused by an active auto-reply feature on that users email account. You should contact the client about the issue, in order to prevent any additional flood alerts from this email address.\n\nPlease note, that any additional emails originating from this sender will be ignored now, in order to prevent any further damage.'),(23,'toggle_pipe_new_user','yes',''),(24,'toggle_pipe_ticket_error','yes',''),(25,'toggle_pipe_new_ticket_user','yes',''),(26,'toggle_pipe_new_ticket_staff','yes',''),(27,'toggle_pipe_add_note_error','yes',''),(28,'toggle_pipe_add_note_closed','yes',''),(29,'toggle_pipe_add_note_user','yes',''),(30,'toggle_pipe_add_note_staff','yes',''),(31,'toggle_pipe_flood_report','yes',''),(32,'toggle_staff_add_note_close_verified','yes',''),(33,'toggle_staff_add_note_user','yes',''),(34,'toggle_staff_add_note_staff','yes',''),(35,'toggle_staff_grab_ticket','yes',''),(36,'toggle_staff_claim_ticket','yes',''),(37,'toggle_user_add_note_close_verified','yes',''),(38,'toggle_user_add_note_staff','yes',''),(39,'toggle_user_reopen_ticket','yes',''),(40,'toggle_user_new_ticket_alert','yes',''),(41,'toggle_user_new_ticket','yes',''),(42,'toggle_user_register','yes',''),(43,'toggle_user_lost_password','yes',''),(44,'toggle_staff_move_ticket','yes','');
/*!40000 ALTER TABLE `config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email_flood`
--

DROP TABLE IF EXISTS `email_flood`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `email_flood` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL DEFAULT '',
  `sentdate` date NOT NULL DEFAULT '0000-00-00',
  `counter` int(11) NOT NULL DEFAULT '0',
  `notified` varchar(10) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email_flood`
--

LOCK TABLES `email_flood` WRITE;
/*!40000 ALTER TABLE `email_flood` DISABLE KEYS */;
INSERT INTO `email_flood` (`id`, `email`, `sentdate`, `counter`, `notified`) VALUES (1,'','2005-11-01',2,'no');
/*!40000 ALTER TABLE `email_flood` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notes`
--

DROP TABLE IF EXISTS `notes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ticket_id` int(11) NOT NULL DEFAULT '0',
  `sender` varchar(200) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `sent_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `show_to` varchar(20) NOT NULL DEFAULT '',
  `who_is` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notes`
--

LOCK TABLES `notes` WRITE;
/*!40000 ALTER TABLE `notes` DISABLE KEYS */;
/*!40000 ALTER TABLE `notes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `placeholders`
--

DROP TABLE IF EXISTS `placeholders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `placeholders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `find_match` varchar(50) NOT NULL DEFAULT '',
  `replace_with` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `placeholders`
--

LOCK TABLES `placeholders` WRITE;
/*!40000 ALTER TABLE `placeholders` DISABLE KEYS */;
/*!40000 ALTER TABLE `placeholders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `priorities`
--

DROP TABLE IF EXISTS `priorities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `priorities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `urgency_level` int(11) NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL DEFAULT '',
  `info` varchar(200) NOT NULL DEFAULT '',
  `send_alert` varchar(10) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `priorities`
--

LOCK TABLES `priorities` WRITE;
/*!40000 ALTER TABLE `priorities` DISABLE KEYS */;
INSERT INTO `priorities` (`id`, `urgency_level`, `name`, `info`, `send_alert`) VALUES (1,3,'Urgent','Urgent issues','no'),(2,2,'Normal','General question','no'),(3,1,'Low','No immediate response necessary','no');
/*!40000 ALTER TABLE `priorities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quick_replies`
--

DROP TABLE IF EXISTS `quick_replies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quick_replies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL DEFAULT '',
  `info` varchar(200) NOT NULL DEFAULT '',
  `message` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quick_replies`
--

LOCK TABLES `quick_replies` WRITE;
/*!40000 ALTER TABLE `quick_replies` DISABLE KEYS */;
/*!40000 ALTER TABLE `quick_replies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `session_id` varchar(32) NOT NULL DEFAULT '',
  `session_data` text NOT NULL,
  `session_expiration` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` (`session_id`, `session_data`, `session_expiration`) VALUES ('1605abcbdd762b671355f05f898c2e6f','','1221262486');
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(40) NOT NULL DEFAULT '',
  `email` varchar(30) NOT NULL DEFAULT '',
  `get_email` varchar(10) NOT NULL DEFAULT 'no',
  `language` varchar(10) NOT NULL DEFAULT 'en',
  `signature` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staff`
--

LOCK TABLES `staff` WRITE;
/*!40000 ALTER TABLE `staff` DISABLE KEYS */;
/*!40000 ALTER TABLE `staff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tickets`
--

DROP TABLE IF EXISTS `tickets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tickets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL DEFAULT '',
  `staff` varchar(50) NOT NULL DEFAULT '',
  `priority` varchar(50) NOT NULL DEFAULT '',
  `category` varchar(150) NOT NULL DEFAULT '',
  `subject` varchar(150) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT '',
  `sentdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_update` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `who_updated` varchar(20) NOT NULL DEFAULT '',
  `close_verified` varchar(10) NOT NULL DEFAULT 'no',
  `pipe_id` varchar(100) NOT NULL DEFAULT 'none',
  PRIMARY KEY (`id`),
  FULLTEXT KEY `content` (`content`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tickets`
--

LOCK TABLES `tickets` WRITE;
/*!40000 ALTER TABLE `tickets` DISABLE KEYS */;
INSERT INTO `tickets` (`id`, `user`, `staff`, `priority`, `category`, `subject`, `content`, `status`, `sentdate`, `last_update`, `who_updated`, `close_verified`, `pipe_id`) VALUES (1,'','none','email_pipe','General','No Subject','','open','2005-11-01 06:44:57','2005-11-01 06:44:57','user','no','1'),(2,'','none','email_pipe','General','No Subject','','open','2005-11-01 11:30:06','2005-11-01 11:30:06','user','no','2');
/*!40000 ALTER TABLE `tickets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(100) NOT NULL DEFAULT '',
  `email` varchar(80) NOT NULL DEFAULT '',
  `domain` varchar(30) NOT NULL DEFAULT '',
  `act_username` varchar(30) NOT NULL DEFAULT '',
  `act_server` varchar(30) NOT NULL DEFAULT '',
  `get_email` varchar(10) NOT NULL DEFAULT 'yes',
  `language` varchar(10) NOT NULL DEFAULT 'en',
  `lost_password` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `email`, `domain`, `act_username`, `act_server`, `get_email`, `language`, `lost_password`) VALUES (1,'','11f61c0dcec3b9e274feb22305aa2ad1','','','','','yes','en',''),(2,'cmerrow','c4f5ac29a6792ccb9e986e10bf9f2442','info@merrow.com','','','','no','en','');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'merrowco_slhd1'
--

--
-- Dumping routines for database 'merrowco_slhd1'
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
