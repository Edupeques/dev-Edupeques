/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

DROP DATABASE IF EXISTS `edupeques`;
CREATE DATABASE IF NOT EXISTS `edupeques` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `edupeques`;


DROP TABLE IF EXISTS `alumns`;
CREATE TABLE IF NOT EXISTS `alumns` (
  `entry` int(10) NOT NULL AUTO_INCREMENT,
  `matricula` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `subname` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `class` tinyint(4) NOT NULL,
  `photo` varchar(50) NOT NULL COMMENT 'Web path to photo',
  `pwd` int(11) NOT NULL,
  PRIMARY KEY (`entry`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DELETE FROM `alumns`;
/*!40000 ALTER TABLE `alumns` DISABLE KEYS */;
/*!40000 ALTER TABLE `alumns` ENABLE KEYS */;


DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `entry` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`entry`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DELETE FROM `categories`;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;


DROP TABLE IF EXISTS `classes`;
CREATE TABLE IF NOT EXISTS `classes` (
  `entry` int(10) NOT NULL AUTO_INCREMENT,
  `class` varchar(10) NOT NULL,
  `teacher` int(11) NOT NULL,
  PRIMARY KEY (`entry`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DELETE FROM `classes`;
/*!40000 ALTER TABLE `classes` DISABLE KEYS */;
/*!40000 ALTER TABLE `classes` ENABLE KEYS */;


DROP TABLE IF EXISTS `games`;
CREATE TABLE IF NOT EXISTS `games` (
  `entry` int(10) NOT NULL AUTO_INCREMENT,
  `category` int(10) NOT NULL,
  `game` varchar(50) NOT NULL,
  PRIMARY KEY (`entry`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DELETE FROM `games`;
/*!40000 ALTER TABLE `games` DISABLE KEYS */;
/*!40000 ALTER TABLE `games` ENABLE KEYS */;


DROP TABLE IF EXISTS `results`;
CREATE TABLE IF NOT EXISTS `results` (
  `alumn` int(10) NOT NULL,
  `game` int(10) NOT NULL,
  `success` smallint(6) NOT NULL,
  `failed` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DELETE FROM `results`;
/*!40000 ALTER TABLE `results` DISABLE KEYS */;
/*!40000 ALTER TABLE `results` ENABLE KEYS */;


DROP TABLE IF EXISTS `teachers`;
CREATE TABLE IF NOT EXISTS `teachers` (
  `entry` int(10) NOT NULL AUTO_INCREMENT,
  `dni` char(9) NOT NULL,
  `name` varchar(20) NOT NULL,
  `subname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  PRIMARY KEY (`entry`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DELETE FROM `teachers`;
/*!40000 ALTER TABLE `teachers` DISABLE KEYS */;
/*!40000 ALTER TABLE `teachers` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
