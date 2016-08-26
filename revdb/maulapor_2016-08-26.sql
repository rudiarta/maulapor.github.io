# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.5.39)
# Database: maulapor
# Generation Time: 2016-08-26 09:21:53 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table article
# ------------------------------------------------------------

CREATE TABLE `article` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `content` text NOT NULL,
  `picture` varchar(100) NOT NULL,
  `id_user` int(10) NOT NULL,
  `rate` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `article_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table ci_sessions
# ------------------------------------------------------------

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table city
# ------------------------------------------------------------

CREATE TABLE `city` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table item
# ------------------------------------------------------------

CREATE TABLE `item` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_city` int(10) NOT NULL,
  `id_location` int(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `id_categori` int(10) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `tag` varchar(50) NOT NULL,
  `picture` varchar(500) NOT NULL,
  `note` varchar(255) NOT NULL,
  `chronological` varchar(500) NOT NULL,
  `id_user` int(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `rate` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usr_fk` (`id_user`),
  KEY `FK_barang_kategori_barang` (`id_categori`),
  KEY `id_kabupaten` (`id_location`),
  KEY `id_city` (`id_city`),
  CONSTRAINT `item_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  CONSTRAINT `item_ibfk_1` FOREIGN KEY (`id_city`) REFERENCES `city` (`id`),
  CONSTRAINT `item_ibfk_2` FOREIGN KEY (`id_location`) REFERENCES `location` (`id`),
  CONSTRAINT `item_ibfk_3` FOREIGN KEY (`id_categori`) REFERENCES `item_category` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table item_category
# ------------------------------------------------------------

CREATE TABLE `item_category` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table location
# ------------------------------------------------------------

CREATE TABLE `location` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `id_city` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_kota` (`id_city`),
  CONSTRAINT `location_ibfk_1` FOREIGN KEY (`id_city`) REFERENCES `city` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table partner
# ------------------------------------------------------------

CREATE TABLE `partner` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `contact` text NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table partner_data_product
# ------------------------------------------------------------

CREATE TABLE `partner_data_product` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_product` int(10) NOT NULL,
  `atribut` varchar(50) NOT NULL DEFAULT '',
  `value` varchar(255) NOT NULL DEFAULT '',
  `id_customer` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `id_product` (`id_product`),
  CONSTRAINT `partner_data_product_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `partner_product` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table partner_product
# ------------------------------------------------------------

CREATE TABLE `partner_product` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_partner` int(10) NOT NULL,
  `name` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `id_partner` (`id_partner`),
  CONSTRAINT `partner_product_ibfk_1` FOREIGN KEY (`id_partner`) REFERENCES `partner` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table pengaduan
# ------------------------------------------------------------

CREATE TABLE `pengaduan` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table report
# ------------------------------------------------------------

CREATE TABLE `report` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `id_found` int(10) NOT NULL,
  `id_lost` int(10) NOT NULL,
  `id_item` int(10) NOT NULL,
  `date` date NOT NULL,
  `result` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_penemu` (`id_found`),
  KEY `id_kehilangan` (`id_lost`),
  KEY `id_barang` (`id_item`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table user
# ------------------------------------------------------------

CREATE TABLE `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `born_place` varchar(50) NOT NULL,
  `born_date` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `gender` char(2) NOT NULL,
  `id_card` varchar(25) NOT NULL,
  `card_type` varchar(25) NOT NULL,
  `active` char(2) NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
