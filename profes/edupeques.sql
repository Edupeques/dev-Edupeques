-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-05-2014 a las 20:41:29
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `edupeques`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumns`
--

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `entry` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`entry`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `classes`
--

CREATE TABLE IF NOT EXISTS `classes` (
  `entry` int(10) NOT NULL AUTO_INCREMENT,
  `class` varchar(10) NOT NULL,
  `teacher` int(11) NOT NULL,
  PRIMARY KEY (`entry`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `games`
--

CREATE TABLE IF NOT EXISTS `games` (
  `entry` int(10) NOT NULL AUTO_INCREMENT,
  `category` int(10) NOT NULL,
  `game` varchar(50) NOT NULL,
  PRIMARY KEY (`entry`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `results`
--

CREATE TABLE IF NOT EXISTS `results` (
  `alumn` int(10) NOT NULL,
  `game` int(10) NOT NULL,
  `success` smallint(6) NOT NULL,
  `failed` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `entry` int(10) NOT NULL AUTO_INCREMENT,
  `dni` char(9) NOT NULL,
  `name` varchar(20) NOT NULL,
  `subname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  PRIMARY KEY (`entry`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `teachers`
--

INSERT INTO `teachers` (`entry`, `dni`, `name`, `subname`, `email`, `pwd`) VALUES
(1, '43654635g', 'Antonio', 'Garcia Gonzalez', 'gracioso@gmail.com', 'Antonio'),
(2, '43543636g', 'Maria', 'Antonia Ramona', 'nosesae@gmail.com', 'Maria');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
