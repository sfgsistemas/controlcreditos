-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-04-2017 a las 19:27:02
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `plan piso`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha`
--

CREATE TABLE `ficha` (
  `Id` varchar(10) DEFAULT NULL,
  `Automovil` varchar(11) NOT NULL,
  `No_chasis` varchar(11) NOT NULL,
  `Tasa` double NOT NULL,
  `Importe` double NOT NULL,
  `Fecha_prestamo` date NOT NULL,
  `Dias_gracia` int(11) NOT NULL,
  `Interes` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ficha`
--

INSERT INTO `ficha` (`Id`, `Automovil`, `No_chasis`, `Tasa`, `Importe`, `Fecha_prestamo`, `Dias_gracia`, `Interes`) VALUES
(NULL, 'VENTO TIP', 'MEX512608FT', 12.2, 182303.5, '2016-09-21', 30, 60.93),
(NULL, 'JETTA DEMO ', '3VW2W2AJ1GM', 12.2, 246088.28, '2016-09-21', 30, 82.25);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ficha`
--
ALTER TABLE `ficha`
  ADD UNIQUE KEY `uno` (`Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
