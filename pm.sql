-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-03-2017 a las 18:27:28
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `controlcreditos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pm`
--

CREATE TABLE `pm` (
  `Id` int(10) NOT NULL,
  `Folio_Cliente` varchar(20) NOT NULL,
  `NomSolicitante` varchar(60) NOT NULL,
  `RFCSolicitante` varchar(30) NOT NULL,
  `TelSolicitante` varchar(20) NOT NULL,
  `DirSolicitante` varchar(20) NOT NULL,
  `NumDirSol` varchar(20) NOT NULL,
  `ColSolicitante` varchar(20) NOT NULL,
  `CdSolicitante` varchar(20) NOT NULL,
  `EdoSolicitante` varchar(20) NOT NULL,
  `MunicipioSolicitante` varchar(20) NOT NULL,
  `CPSolicitante` int(10) NOT NULL,
  `EmailSolicitante` varchar(20) NOT NULL,
  `FaxSolicitante` varchar(20) NOT NULL,
  `PaisSolicitante` varchar(20) NOT NULL,
  `NomDatContEmp` varchar(30) NOT NULL,
  `SegNomDatContEmp` varchar(20) NOT NULL,
  `ApPatDatContEmp` varchar(20) NOT NULL,
  `ApMatDatContEmp` varchar(20) NOT NULL,
  `DirConEmp` varchar(50) NOT NULL,
  `ColConEmp` varchar(30) NOT NULL,
  `CPConEmp` varchar(10) NOT NULL,
  `CdConEmp` varchar(30) NOT NULL,
  `EdoConEmp` varchar(30) NOT NULL,
  `SexoContEmp` varchar(20) NOT NULL,
  `LugNacContEmp` varchar(50) NOT NULL,
  `FechNacContEmp` date NOT NULL,
  `EstCivContEmp` varchar(50) NOT NULL,
  `TelDatConEmp` varchar(20) NOT NULL,
  `EmailDatConEmp` varchar(20) NOT NULL,
  `CURPDatConEmp` varchar(20) NOT NULL,
  `RFCDatConEmp` varchar(20) NOT NULL,
  `NumSerieFIELContEmp` varchar(50) NOT NULL,
  `NacionalidadContEmp` varchar(20) NOT NULL,
  `OcupacionContEmp` varchar(30) NOT NULL,
  `SueldoContEmp` int(20) NOT NULL,
  `FaxDatConEmp` varchar(20) NOT NULL,
  `PuestDatConEmp` varchar(20) NOT NULL,
  `ActEcoAdicionalContEmp` varchar(30) NOT NULL,
  `IngAdMensualAproxContEmp` double NOT NULL,
  `ActPrinDatGenPM` varchar(20) NOT NULL,
  `IniOpDatGenPM` date NOT NULL,
  `CantPerDatGenPM` int(10) NOT NULL,
  `FechaConsEmp` date NOT NULL,
  `AntConsEmp` varchar(20) NOT NULL,
  `ApoConsEmp` varchar(20) NOT NULL,
  `NomAcc1` varchar(60) NOT NULL,
  `RFCAcc1` varchar(20) NOT NULL,
  `PorAcc1` int(3) NOT NULL,
  `NomAcc2` varchar(60) NOT NULL,
  `RFCAcc2` varchar(20) NOT NULL,
  `PorAcc2` int(3) NOT NULL,
  `NomAcc3` varchar(60) NOT NULL,
  `RFCAcc3` varchar(20) NOT NULL,
  `PorAcc3` int(3) NOT NULL,
  `NomAcc4` varchar(60) NOT NULL,
  `RFCAcc4` varchar(20) NOT NULL,
  `PorAcc4` int(3) NOT NULL,
  `NomAccPM1` varchar(60) NOT NULL,
  `RFCAccPM1` varchar(20) NOT NULL,
  `PorAccPM1` int(3) NOT NULL,
  `NomAccPM2` varchar(60) NOT NULL,
  `RFCAccPM2` varchar(20) NOT NULL,
  `PorAccPM2` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pm`
--

INSERT INTO `pm` (`Id`, `Folio_Cliente`, `NomSolicitante`, `RFCSolicitante`, `TelSolicitante`, `DirSolicitante`, `NumDirSol`, `ColSolicitante`, `CdSolicitante`, `EdoSolicitante`, `MunicipioSolicitante`, `CPSolicitante`, `EmailSolicitante`, `FaxSolicitante`, `PaisSolicitante`, `NomDatContEmp`, `SegNomDatContEmp`, `ApPatDatContEmp`, `ApMatDatContEmp`, `DirConEmp`, `ColConEmp`, `CPConEmp`, `CdConEmp`, `EdoConEmp`, `SexoContEmp`, `LugNacContEmp`, `FechNacContEmp`, `EstCivContEmp`, `TelDatConEmp`, `EmailDatConEmp`, `CURPDatConEmp`, `RFCDatConEmp`, `NumSerieFIELContEmp`, `NacionalidadContEmp`, `OcupacionContEmp`, `SueldoContEmp`, `FaxDatConEmp`, `PuestDatConEmp`, `ActEcoAdicionalContEmp`, `IngAdMensualAproxContEmp`, `ActPrinDatGenPM`, `IniOpDatGenPM`, `CantPerDatGenPM`, `FechaConsEmp`, `AntConsEmp`, `ApoConsEmp`, `NomAcc1`, `RFCAcc1`, `PorAcc1`, `NomAcc2`, `RFCAcc2`, `PorAcc2`, `NomAcc3`, `RFCAcc3`, `PorAcc3`, `NomAcc4`, `RFCAcc4`, `PorAcc4`, `NomAccPM1`, `RFCAccPM1`, `PorAccPM1`, `NomAccPM2`, `RFCAccPM2`, `PorAccPM2`) VALUES
(4, 'PM-001', 'Servicios Financieros Del Guadiana', '4552452452452452452', '321654645654654', '351231312313513', '321321', 'Colinia sol', 'cd sol', 'edo sol', 'Durango', 321321, 'sol@hotmaol.com', '', 'Mexico sol', 'nomrbe', 'segundo', 'paterno', 'materno', 'Dir ', 'Col', 'Cp', 'CD', 'Edo', 'Masculino', 'Mexico', '1989-09-07', 'Casado Bienes Mancomunados', '312654654654', 'conemp@hotmail.com', 'mama890907cv4', '3216546465465465456', '9876543210', 'Mexicana', 'Empleado', 5000, '', '321', 'Ninguna', 1989.6, '321', '1989-09-07', 312, '1989-09-07', '312', '321', 'dfgdfgdfg', 'sdf32sdf321', 25, 'sdfsdfsf', 's3df21s3df21', 25, 'adasdasd', 'ada3sd21a231sd', 25, 'asdasdasd', 'asd3asd123asd123', 25, 'asdasdasd', 'asd231asd123ad', 50, 'asdasdasd', 'sd13ad123asd', 50);

--
-- Disparadores `pm`
--
DELIMITER $$
CREATE TRIGGER `pm_id` BEFORE INSERT ON `pm` FOR EACH ROW BEGIN
    if (SELECT COUNT(*) FROM pm)=0   THEN
        SET NEW.Folio_Cliente= 'PM-001';
    else
        SET NEW.Folio_Cliente= CONCAT('PM-', LPAD((select MAX(Id)+1 from pm), 3, '0'));
  END IF;
END
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pm`
--
ALTER TABLE `pm`
  ADD PRIMARY KEY (`Id`,`Folio_Cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pm`
--
ALTER TABLE `pm`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
