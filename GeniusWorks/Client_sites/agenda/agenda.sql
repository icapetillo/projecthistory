-- phpMyAdmin SQL Dump
-- version 3.3.7deb5build0.10.10.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-07-2011 a las 15:22:43
-- Versión del servidor: 5.1.49
-- Versión de PHP: 5.3.3-1ubuntu9.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `agenda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE IF NOT EXISTS `contactos` (
  `clave` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text CHARACTER SET latin1 NOT NULL,
  `direccion` text CHARACTER SET latin1 NOT NULL,
  `telefono` text CHARACTER SET latin1 NOT NULL,
  `email` text CHARACTER SET latin1 NOT NULL,
  `notas` text CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`clave`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`clave`, `nombre`, `direccion`, `telefono`, `email`, `notas`) VALUES
(1, 'Israel Capetillo Sanchez', 'Boulevard Las Reynas 340, Las Reynas', '4641000909', 'israel.capetillo@live.com.mx', 'Maestro de CUN Bajio'),
(5, 'Adriana Hernandez Torres', 'Avenida Revolucion #230, Centro', '4646489008', 'adriana@hotmail.com', 'Gerente de Ventas DIMATEC'),
(3, 'Jack Kirby', '347 5th Ave, New York City', '5557890192', 'kirby_king@gmail.com', 'Kirby is the king!');
