# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: sgodoshi.cppu9plekj5i.us-east-1.rds.amazonaws.com (MySQL 5.7.19-log)
# Database: boozt
# Generation Time: 2017-11-30 16:51:40 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table customer
# ------------------------------------------------------------

DROP TABLE IF EXISTS `customer`;

CREATE TABLE `customer` (
  `ID` int(11) unsigned NOT NULL,
  `firstName` varchar(128) NOT NULL DEFAULT '',
  `lastName` varchar(128) NOT NULL DEFAULT '',
  `email` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;

INSERT INTO `customer` (`ID`, `firstName`, `lastName`, `email`)
VALUES
	(82837,'Sarah','Godoshian','sarah.godoshian@gmail.com');

/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table order
# ------------------------------------------------------------

DROP TABLE IF EXISTS `order`;

CREATE TABLE `order` (
  `ID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `customer_ID` int(11) unsigned NOT NULL,
  `purchaseDate` timestamp NOT NULL,
  `country` varchar(32) NOT NULL DEFAULT '',
  `device` text NOT NULL,
  PRIMARY KEY (`ID`),
  CONSTRAINT `customer` FOREIGN KEY (`ID`) REFERENCES `customer` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



# Dump of table orderItem
# ------------------------------------------------------------

DROP TABLE IF EXISTS `orderItem`;

CREATE TABLE `orderItem` (
  `ID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `order_ID` int(11) unsigned NOT NULL,
  `ean` varchar(32) NOT NULL DEFAULT '',
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`ID`),
  CONSTRAINT `order` FOREIGN KEY (`ID`) REFERENCES `order` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
