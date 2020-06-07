-- MySQL dump 10.13  Distrib 5.7.26, for Win64 (x86_64)
--
-- Host: localhost    Database: yds
-- ------------------------------------------------------
-- Server version	5.7.26

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
-- Table structure for table `convert_airtime`
--

DROP TABLE IF EXISTS `convert_airtime`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `convert_airtime` (
  `userid` int(10) DEFAULT NULL,
  `txref` varchar(30) DEFAULT NULL,
  `network` varchar(10) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `amount` varchar(10) DEFAULT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `convert_airtime`
--

LOCK TABLES `convert_airtime` WRITE;
/*!40000 ALTER TABLE `convert_airtime` DISABLE KEYS */;
INSERT INTO `convert_airtime` VALUES (1019,'tx-F5BhUYR','mtn','12345678900','100','2020-05-28 10:37:13');
/*!40000 ALTER TABLE `convert_airtime` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_orders`
--

DROP TABLE IF EXISTS `data_orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_orders` (
  `userid` int(10) DEFAULT NULL,
  `txref` varchar(30) NOT NULL,
  `price` varchar(30) DEFAULT NULL,
  `mobile_data` varchar(30) DEFAULT NULL,
  `mobile_data_type` varchar(30) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `status` varchar(30) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_orders`
--

LOCK TABLES `data_orders` WRITE;
/*!40000 ALTER TABLE `data_orders` DISABLE KEYS */;
INSERT INTO `data_orders` VALUES (1019,'tx-yxLBNUp','330','MTN SME','MTN 1GB','08160841875','pending','2020-05-28 10:36:12');
/*!40000 ALTER TABLE `data_orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `userid` int(10) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone_number` varchar(11) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `wallet` float DEFAULT NULL,
  `bankname` varchar(30) DEFAULT NULL,
  `account_name` varchar(30) DEFAULT NULL,
  `account_number` int(11) DEFAULT NULL,
  `reg_date` date NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=1020 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1019,'crave crave','admin@admin.com','01234567891','$2y$10$YGASK341AUmMovpnIjUKre6doyiE5hGz8uV1ke98Ctrhxm008Z/Ja',4010,NULL,NULL,NULL,'2020-05-28');
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

-- Dump completed on 2020-05-28 11:38:50
