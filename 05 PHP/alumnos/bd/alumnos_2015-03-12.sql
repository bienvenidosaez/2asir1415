# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.34)
# Database: alumnos
# Generation Time: 2015-03-12 13:10:17 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table alumnos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `alumnos`;

CREATE TABLE `alumnos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombreCompleto` varchar(140) NOT NULL DEFAULT '',
  `edad` int(11) DEFAULT NULL,
  `clase` int(10) unsigned DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_clase` (`clase`),
  CONSTRAINT `fk_clase` FOREIGN KEY (`clase`) REFERENCES `clases` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `alumnos` WRITE;
/*!40000 ALTER TABLE `alumnos` DISABLE KEYS */;

INSERT INTO `alumnos` (`id`, `nombreCompleto`, `edad`, `clase`, `foto`)
VALUES
	(1,'Bienvenido Saez Muelas',39,2,'1.jpg'),
	(2,'Ramon Jaen Martin',33,1,'2.jpg'),
	(3,'Alberto el gimnasta',40,3,NULL),
	(4,'Federico',35,3,NULL);

/*!40000 ALTER TABLE `alumnos` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table clases
# ------------------------------------------------------------

DROP TABLE IF EXISTS `clases`;

CREATE TABLE `clases` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(140) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `clases` WRITE;
/*!40000 ALTER TABLE `clases` DISABLE KEYS */;

INSERT INTO `clases` (`id`, `nombre`)
VALUES
	(1,'1SMR'),
	(2,'2SMR'),
	(3,'1ASIR'),
	(4,'2ASIR'),
	(6,'prueba'),
	(7,'tiriri');

/*!40000 ALTER TABLE `clases` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table usuarios
# ------------------------------------------------------------

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombreCompleto` varchar(140) NOT NULL,
  `username` varchar(140) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;

INSERT INTO `usuarios` (`id`, `nombreCompleto`, `username`, `password`)
VALUES
	(1,'Bienvenido Sáez Muelas','bsaez','202cb962ac59075b964b07152d234b70'),
	(2,'Juan Pérez Ortega','jperez','202cb962ac59075b964b07152d234b70');

/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
