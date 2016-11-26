# ************************************************************
# Sequel Pro SQL dump
# Versi€n 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.42)
# Base de datos: angularcode
# Tiempo de Generaci€n: 2016-11-26 18:09:53 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Volcado de tabla customers_auth
# ------------------------------------------------------------

DROP TABLE IF EXISTS `customers_auth`;

CREATE TABLE `customers_auth` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `customers_auth` WRITE;
/*!40000 ALTER TABLE `customers_auth` DISABLE KEYS */;

INSERT INTO `customers_auth` (`uid`, `name`, `email`, `phone`, `password`, `address`, `city`, `created`)
VALUES
	(169,'Swadesh Behera','swadesh@gmail.com','1234567890','$2a$10$251b3c3d020155f7553c1ugKfEH04BD6nbCbo78AIDVOqS3GVYQ46','4092 Furth Circle','Singapore','2014-08-31 15:21:20'),
	(170,'Ipsita Sahoo','ipsita@gmail.com','1111111111','$2a$10$d84ffcf46967db4e1718buENHT7GVpcC7FfbSqCLUJDkKPg4RcgV2','2, rue du Commerce','NYC','2014-08-31 15:30:58'),
	(171,'Trisha Tamanna Priyadarsini','trisha@gmail.com','2222222222','$2a$10$c9b32f5baa3315554bffcuWfjiXNhO1Rn4hVxMXyJHJaesNHL9U/O','C/ Moralzarzal, 86','Burlingame','2014-08-31 15:32:03'),
	(172,'Sai Rimsha','rimsha@gmail.com','3333333333','$2a$10$477f7567571278c17ebdees5xCunwKISQaG8zkKhvfE5dYem5sTey','897 Long Airport Avenue','Madrid','2014-08-31 17:34:21'),
	(173,'Satwik Mohanty','satwik@gmail.com','4444444444','$2a$10$2b957be577db7727fed13O2QmHMd9LoEUjioYe.zkXP5lqBumI6Dy','Lyonerstr. 34','San Francisco\n','2014-08-31 17:36:02'),
	(174,'Tapaswini Sahoo','linky@gmail.com','5555555555','$2a$10$b2f3694f56fdb5b5c9ebeulMJTSx2Iv6ayQR0GUAcDsn0Jdn4c1we','ul. Filtrowa 68','Warszawa','2014-08-31 17:44:54'),
	(175,'Manas Ranjan Subudhi','manas@gmail.com','6666666666','$2a$10$03ab40438bbddb67d4f13Odrzs6Rwr92xKEYDbOO7IXO8YvBaOmlq','5677 Strong St.','Stavern\n','2014-08-31 17:45:08'),
	(178,'AngularCode Administrator','admin@angularcode.com','0000000000','$2a$10$72442f3d7ad44bcf1432cuAAZAURj9dtXhEMBQXMn9C8SpnZjmK1S','C/1052, Bangalore','','2014-08-31 18:00:26'),
	(187,'Franco','fpalossi@gmail.com','Palossi','$2a$10$8a5ada9f640456f6c6ae9uQ32f/Hkm1TPhbooqSAsrF0n98q7IbeS','Brown','','2016-11-18 08:41:48'),
	(188,'Ciro','ciro@gmail.com','123','$2a$10$6211aa99f859ec77f5663O2xllL1P6n45P8dj1RumukOe.KOmFnou','Brown','','2016-11-18 09:14:02'),
	(189,'f','f@f.com','f','$2a$10$1549f287ba993dc19b113etF6ncXG22Y/3GJ0u2QEIjERoiB25St.','f','','2016-11-18 15:38:43'),
	(190,'a','emilce@g.com','a','$2a$10$0f8325ec085eaa95ff441Oz/Jsn/Pcw/y.owWhEJM0DfKnQfnPW8i','a','','2016-11-18 15:40:07'),
	(191,'franco','f@gmail.com','34543543','$2a$10$ba7e042e7f210888187b7uuULDBFo.bsFr7FTNjcxM3YcyG2hT0/S','yyyyyyyy','','2016-11-23 11:06:10'),
	(192,'Ciro','f@f.c','345986','$2a$10$ad4903b629f62ae06d038udiB62IejEfHZnsEnO4pS.QMOFx.A.JW','lol','','2016-11-23 11:07:01');

/*!40000 ALTER TABLE `customers_auth` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla project
# ------------------------------------------------------------

DROP TABLE IF EXISTS `project`;

CREATE TABLE `project` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `pname` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pemail` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pphone` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ptheme` varchar(400) COLLATE utf8_spanish_ci DEFAULT NULL,
  `paddress` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pcomment` varchar(550) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pdatecreate` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

LOCK TABLES `project` WRITE;
/*!40000 ALTER TABLE `project` DISABLE KEYS */;

INSERT INTO `project` (`id`, `uid`, `pname`, `pemail`, `pphone`, `ptheme`, `paddress`, `pcomment`, `pdatecreate`)
VALUES
	(4,NULL,NULL,NULL,'123231',NULL,'jsjsjs','dsfjdsf',NULL),
	(5,NULL,'','','fdfds',NULL,'dde','xewcwecew','2016-11-22'),
	(6,NULL,'','','fdfds',NULL,'dde','xewcwecew','2016-11-22'),
	(7,NULL,'','','fdfds',NULL,'dde','sdfsdf','2016-11-22'),
	(8,NULL,'','','4828739',NULL,'Brown 2027','Este es un comentario','2016-11-22'),
	(9,NULL,'','','',NULL,'','sdfsdf','2016-11-22'),
	(10,NULL,'','','',NULL,'','dfdsfff','2016-11-22'),
	(11,NULL,'','','',NULL,'','hola','2016-11-22'),
	(12,NULL,'','','',NULL,'','fdsfds','2016-11-22'),
	(13,NULL,'','','',NULL,'','sdfdsf','2016-11-22'),
	(14,NULL,'','','',NULL,'','123','2016-11-22'),
	(15,NULL,'','','',NULL,'','123','2016-11-22'),
	(16,NULL,'','','',NULL,'','holllll','2016-11-22'),
	(17,NULL,'','','35543',NULL,'moreno 2033','no hay','2016-11-22'),
	(18,NULL,'','','',NULL,'','','2016-11-22'),
	(19,NULL,'','','123',NULL,'dd','iiiii','2016-11-23');

/*!40000 ALTER TABLE `project` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
