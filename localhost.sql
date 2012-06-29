-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-06-2012 a las 05:25:02
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `daniel`
--
CREATE DATABASE `daniel` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `daniel`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `elementos_equipo`
--

CREATE TABLE IF NOT EXISTS `elementos_equipo` (
  `id_elemento` int(11) NOT NULL,
  `id_equipo` int(100) NOT NULL,
  `nombre_equipo` varchar(100) NOT NULL,
  `nombre_elemento` varchar(100) NOT NULL,
  `codigo_elemento` varchar(100) NOT NULL,
  PRIMARY KEY (`id_elemento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE IF NOT EXISTS `empleado` (
  `cedula` int(11) NOT NULL DEFAULT '0',
  `nombre` varchar(500) CHARACTER SET latin1 NOT NULL,
  `apellido` varchar(500) CHARACTER SET latin1 NOT NULL,
  `cargo` varchar(500) CHARACTER SET latin1 NOT NULL,
  `telefono` varchar(500) CHARACTER SET latin1 NOT NULL,
  `direccion` varchar(500) CHARACTER SET latin1 NOT NULL,
  `sexo` varchar(50) CHARACTER SET latin1 NOT NULL,
  `fecha` varchar(50) CHARACTER SET latin1 NOT NULL,
  `horario` varchar(50) CHARACTER SET latin1 NOT NULL,
  `archivo` varchar(150) DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cedula`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='tabla de empleados de la empresa';

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`cedula`, `nombre`, `apellido`, `cargo`, `telefono`, `direccion`, `sexo`, `fecha`, `horario`, `archivo`, `titulo`) VALUES
(0, 'ADAS', 'SADSASA', 'sada', 'sadas', 'ASSD', 'ASDS', '2012-06-11', 'sadsa', 'rutas/2012-06-11sadsa.jpeg', 'SADSA'),
(17000000, 'DANIEL', 'CONTRERAS', 'supervisor de mantenimiento', '04165797766', 'MéRIDA EDO MéRIDA', 'MASCULINO', '2012-06-13', 'diurno', 'rutas/2012-06-13daniel.jpeg', 'DANIEL'),
(19847190, 'ERNESTO', 'GONZALEZ', 'PROGRAMADOR', '04167597755', 'MERIDA EDO MERIDA', 'MASCULINO', '2012-06-12', 'DIURNO', 'rutas/ernesto19847190.jpeg', 'ERNESTO19847190');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE IF NOT EXISTS `equipo` (
  `codigo_equipo` varchar(50) NOT NULL,
  `nombre_equipo` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `herramienta` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `cantidad` varchar(100) NOT NULL,
  `fecha` varchar(100) NOT NULL,
  `archivo` varchar(200) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `id_equipo` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_equipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='tabla que describe los equipos de la empresa' AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`codigo_equipo`, `nombre_equipo`, `modelo`, `marca`, `descripcion`, `herramienta`, `estado`, `cantidad`, `fecha`, `archivo`, `titulo`, `id_equipo`) VALUES
('CAR-333', 'CARRO', 'OPTRA', 'CHEVROLET', 'BON', 'MU', 'MALO', '2', '2012-06-12', 'rutas/carrocar-333.jpeg', 'CARROCAR-333', 1),
('AVEA', 'AVIONA', 'F151', 'NIKEA', 'BONITO AVIONA', 'MUCHASA', 'MALO', '11', '2012-06-04', 'rutas/pedro.jpeg', 'pedro', 2),
('WQEWQQEW', 'WQE', 'WEQWEQW', 'WQWQE', 'WQEWQEEWQ', 'WQEWQEQEW', 'BUENO', '2', '2012-06-05', 'rutas/wqewqewqqew.jpeg', 'WQEWQEWQQEW', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `odt`
--

CREATE TABLE IF NOT EXISTS `odt` (
  `id_odt` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(100) NOT NULL,
  `fecha_ini` varchar(100) NOT NULL,
  `fecha_fin` varchar(100) NOT NULL,
  `prioridad` varchar(100) NOT NULL,
  `ci_empleado` varchar(100) NOT NULL,
  `id_equipo` int(11) NOT NULL,
  `id_elemento` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `id_parte` int(11) NOT NULL,
  PRIMARY KEY (`id_odt`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tabla de odt' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parte_elemento`
--

CREATE TABLE IF NOT EXISTS `parte_elemento` (
  `id_parte` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_elemento` varchar(100) NOT NULL,
  `nombre_elemento` varchar(100) NOT NULL,
  `codigo_parte` varchar(100) NOT NULL,
  `nombre_parte` varchar(100) NOT NULL,
  PRIMARY KEY (`id_parte`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
  `id_proveedor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_pro` varchar(100) NOT NULL,
  `apellido_pro` varchar(100) NOT NULL,
  `empresa` varchar(300) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `pag_web` varchar(100) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `descripcion_proveedora` varchar(300) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `rif` int(11) NOT NULL,
  PRIMARY KEY (`id_proveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tabla que descibe los proveedores' AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
