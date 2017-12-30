-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: localhost    Database: fadfada
-- ------------------------------------------------------
-- Server version	5.7.20-0ubuntu0.16.04.1

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
-- Current Database: `fadfada`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `fadfada` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `fadfada`;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Tech'),(2,'Health'),(3,'PLants'),(4,'PC'),(9,'YARAB tshtaghal'),(10,'Final Trial Brdo ');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `body` text,
  `post_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `category_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'first title','first body',1,1),(2,'second title','second  body',2,2),(3,'third title','third body',3,3),(5,'fourth','fourth body',1,4),(6,'fifth','fifth body',2,5),(7,NULL,NULL,NULL,1),(8,NULL,NULL,NULL,1),(9,NULL,NULL,NULL,1),(10,NULL,NULL,NULL,1),(16,'Trial','trial',3,4),(17,'Shaghal?','enta shaghal?',3,4),(18,'3ayz anam','nefsy anam',2,1),(19,'hanam ','hanaaaaaaam',2,2),(20,'trial','trial body',4,2),(21,'trial','trial bodyy',NULL,1),(22,'Eshtaghal','Insha\'allah da hayshtaghal',9,1),(23,'AZmy first','This is the final trial, hassan bytfarag.',2,8),(24,'HAssan sahklo mabsoot','yarab ma ydrab 3andak ya ezzat',10,1);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` text,
  `gender` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'hossam','sayed','hossam@gmail.com','$2y$10$opmrOl0XDZCrhbSk9NBzReggUUurPeOdavaNdoQZvKpZ8NUA/bFA6','male','admin'),(2,'ezzat','ezzat','ezzat@gmail.com','$2y$10$uYciIERcaWBhglI12FxeHeXnRlqsr1TVJux4FQHNEcxWCAU4Q5yj2','male','user'),(3,'ahmed','ahmed','ahmed@gmail.com','$2y$10$IEYZM7qqy2Pegzv9pFu/3OmHJX5ohpwwlgJjef8DAw1io/HRTPg5.','male','user'),(4,'omar','omar','omar@gmail.com','$2y$10$ed/yKN8SC7o3S2uKjlt8RuiKxTltZKIrumZvdJ4yvMIoC99pJYYv.','male',NULL),(5,'Hassan','hassan','hassan@gmail.com','$2y$10$BNd4P1JD11NQjP5pVDWHEeAVUHWKdvzMkZqChe9r7CRkozYmd8CWa','male',NULL),(6,'maged','maged','maged@gmail.com','$2y$10$sVC4fleC8fU5dEiumuD24OVh0pgaRJ6GTC8mplQySWXacEvYjeaNO','male',NULL),(7,'noor','noor','noor@gmail.com','$2y$10$ZbrXCnHjuoU3xYwjrs.j9.J9WDqtMLyQp0AmaoObSDZiQ2K1Q4sIW','female',NULL),(8,'azmy','mohamed','azmy@gmail.com','$2y$10$05rEENgd5/atsvxg3VHAJuahB6Jc3m0Id9bFchiXT9nm..lBDGTBa','male',NULL);
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

-- Dump completed on 2017-12-30 20:11:44
