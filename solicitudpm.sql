-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-03-2017 a las 18:47:03
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
-- Estructura de tabla para la tabla `solicitudpm`
--

CREATE TABLE `solicitudpm` (
  `Id` int(10) NOT NULL,
  `Folio_Sol` varchar(20) NOT NULL,
  `Folio_Cliente` varchar(20) NOT NULL,
  `TipoCredito` varchar(20) NOT NULL,
  `BancRefBan` varchar(20) NOT NULL,
  `NoTarRefBan` varchar(20) NOT NULL,
  `SucRefBan` varchar(20) NOT NULL,
  `FecApRefBan` date NOT NULL,
  `BancRefBan2` varchar(20) NOT NULL,
  `NoTarRefBan2` varchar(20) NOT NULL,
  `SucRefBan2` varchar(20) NOT NULL,
  `FecApRefBan2` date NOT NULL,
  `EmpRefCom` varchar(20) NOT NULL,
  `AntRefCom` int(4) NOT NULL,
  `TelRefCom` varchar(20) NOT NULL,
  `EmpRefCom2` varchar(20) NOT NULL,
  `AntRefCom2` int(4) NOT NULL,
  `TelRefCom2` varchar(20) NOT NULL,
  `BancCarDir` varchar(20) NOT NULL,
  `NoTarCarDir` varchar(20) NOT NULL,
  `NomObPerMor` varchar(50) NOT NULL,
  `DirObPerMor` varchar(20) NOT NULL,
  `ColObPerMor` varchar(20) NOT NULL,
  `CdObPerMor` varchar(20) NOT NULL,
  `LugNacObPerMor` varchar(20) NOT NULL,
  `EdoObPerMor` varchar(20) NOT NULL,
  `CPObPerMor` int(20) NOT NULL,
  `RFCObPerMor` varchar(20) NOT NULL,
  `TelObPerMor` varchar(20) NOT NULL,
  `FaxObPerMor` varchar(20) NOT NULL,
  `AntConsEmpPM` varchar(20) NOT NULL,
  `ApoConsEmpPM` varchar(30) NOT NULL,
  `ActPrinDatGen` varchar(20) NOT NULL,
  `IniOpDatGen` date NOT NULL,
  `CantPerDatGen` int(11) NOT NULL,
  `NomAccionista1` varchar(50) NOT NULL,
  `RFCAccionista1` varchar(20) NOT NULL,
  `PorcentAccionista1` int(3) NOT NULL,
  `NomAccionista2` varchar(50) NOT NULL,
  `RFCAccionista2` varchar(20) NOT NULL,
  `PorcentAccionista2` int(3) NOT NULL,
  `NomAccionista3` varchar(50) NOT NULL,
  `RFCAccionista3` varchar(20) NOT NULL,
  `PorcentAccionista3` int(3) NOT NULL,
  `NomAccionista4` varchar(50) NOT NULL,
  `RFCAccionista4` varchar(20) NOT NULL,
  `PorcentAccionista4` int(3) NOT NULL,
  `NomAccionistaPM1` varchar(50) NOT NULL,
  `RFCAccionistaPM1` varchar(20) NOT NULL,
  `PorcentAccionistaPM1` int(3) NOT NULL,
  `NomAccionistaPM2` varchar(50) NOT NULL,
  `RFCAccionistaPM2` varchar(20) NOT NULL,
  `PorcentAccionistaPM2` int(3) NOT NULL,
  `NomObSol` varchar(20) NOT NULL,
  `ApPatObSol` varchar(20) NOT NULL,
  `ApMatObSol` varchar(20) NOT NULL,
  `RFCObSol` varchar(20) NOT NULL,
  `TelObSol` varchar(20) NOT NULL,
  `MovObSol` varchar(20) NOT NULL,
  `DirObSol` varchar(20) NOT NULL,
  `ColObSol` varchar(20) NOT NULL,
  `CdObSol` varchar(20) NOT NULL,
  `LugNacObSol` varchar(20) NOT NULL,
  `PropObSol` varchar(20) NOT NULL,
  `EdoObSol` varchar(20) NOT NULL,
  `CPObSol` varchar(20) NOT NULL,
  `EmailObSol` varchar(20) NOT NULL,
  `SexoObSol` varchar(20) NOT NULL,
  `FeNacObSol` date NOT NULL,
  `EdObSol` int(3) NOT NULL,
  `CURPObSol` varchar(20) NOT NULL,
  `NomObSolPF` varchar(50) NOT NULL,
  `SexoObSolPF` varchar(20) NOT NULL,
  `FeNacObSolPF` date NOT NULL,
  `RFCObSolPF` varchar(20) NOT NULL,
  `CURPObSolPF` varchar(20) NOT NULL,
  `EdObSolPF` int(3) NOT NULL,
  `NomObSol2` varchar(20) NOT NULL,
  `ApPatObSol2` varchar(20) NOT NULL,
  `ApMatObSol2` varchar(20) NOT NULL,
  `RFCObSol2` varchar(20) NOT NULL,
  `TelObSol2` varchar(20) NOT NULL,
  `MovObSol2` varchar(20) NOT NULL,
  `DirObSol2` varchar(20) NOT NULL,
  `ColObSol2` varchar(20) NOT NULL,
  `CdObSol2` varchar(20) NOT NULL,
  `LugNacObSol2` varchar(20) NOT NULL,
  `PropObSol2` varchar(20) NOT NULL,
  `EdoObSol2` varchar(20) NOT NULL,
  `CPObSol2` varchar(20) NOT NULL,
  `EmailObSol2` varchar(20) NOT NULL,
  `SexoObSol2` varchar(20) NOT NULL,
  `FeNacObSol2` date NOT NULL,
  `EdObSol2` int(3) NOT NULL,
  `CURPObSol2` varchar(20) NOT NULL,
  `NomObSolPF2` varchar(50) NOT NULL,
  `SexoObSolPF2` varchar(20) NOT NULL,
  `FeNacObSolPF2` date NOT NULL,
  `RFCObSolPF2` varchar(20) NOT NULL,
  `CURPObSolPF2` varchar(20) NOT NULL,
  `EdObSolPF2` int(3) NOT NULL,
  `Fecha` date NOT NULL,
  `ClavConcesionario` varchar(20) NOT NULL,
  `NomConcesionario` varchar(20) NOT NULL,
  `NomVendedor` varchar(20) NOT NULL,
  `NomGerenteGral` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `solicitudpm`
--

INSERT INTO `solicitudpm` (`Id`, `Folio_Sol`, `Folio_Cliente`, `TipoCredito`, `BancRefBan`, `NoTarRefBan`, `SucRefBan`, `FecApRefBan`, `BancRefBan2`, `NoTarRefBan2`, `SucRefBan2`, `FecApRefBan2`, `EmpRefCom`, `AntRefCom`, `TelRefCom`, `EmpRefCom2`, `AntRefCom2`, `TelRefCom2`, `BancCarDir`, `NoTarCarDir`, `NomObPerMor`, `DirObPerMor`, `ColObPerMor`, `CdObPerMor`, `LugNacObPerMor`, `EdoObPerMor`, `CPObPerMor`, `RFCObPerMor`, `TelObPerMor`, `FaxObPerMor`, `AntConsEmpPM`, `ApoConsEmpPM`, `ActPrinDatGen`, `IniOpDatGen`, `CantPerDatGen`, `NomAccionista1`, `RFCAccionista1`, `PorcentAccionista1`, `NomAccionista2`, `RFCAccionista2`, `PorcentAccionista2`, `NomAccionista3`, `RFCAccionista3`, `PorcentAccionista3`, `NomAccionista4`, `RFCAccionista4`, `PorcentAccionista4`, `NomAccionistaPM1`, `RFCAccionistaPM1`, `PorcentAccionistaPM1`, `NomAccionistaPM2`, `RFCAccionistaPM2`, `PorcentAccionistaPM2`, `NomObSol`, `ApPatObSol`, `ApMatObSol`, `RFCObSol`, `TelObSol`, `MovObSol`, `DirObSol`, `ColObSol`, `CdObSol`, `LugNacObSol`, `PropObSol`, `EdoObSol`, `CPObSol`, `EmailObSol`, `SexoObSol`, `FeNacObSol`, `EdObSol`, `CURPObSol`, `NomObSolPF`, `SexoObSolPF`, `FeNacObSolPF`, `RFCObSolPF`, `CURPObSolPF`, `EdObSolPF`, `NomObSol2`, `ApPatObSol2`, `ApMatObSol2`, `RFCObSol2`, `TelObSol2`, `MovObSol2`, `DirObSol2`, `ColObSol2`, `CdObSol2`, `LugNacObSol2`, `PropObSol2`, `EdoObSol2`, `CPObSol2`, `EmailObSol2`, `SexoObSol2`, `FeNacObSol2`, `EdObSol2`, `CURPObSol2`, `NomObSolPF2`, `SexoObSolPF2`, `FeNacObSolPF2`, `RFCObSolPF2`, `CURPObSolPF2`, `EdObSolPF2`, `Fecha`, `ClavConcesionario`, `NomConcesionario`, `NomVendedor`, `NomGerenteGral`) VALUES
(1, 'SM-001', 'PM-001', 'Credit', '321', '321', '32', '1989-09-07', '132', '132', '1321', '1989-09-07', '321', 32, '132132132132131', '32', 1321, '3216456546546', '32', '132', '132', '132', '132', '132', '132', '132', 132, '1326546465463213', '13654654621321', '21331321321321', '2132', '132', '132', '1989-09-07', 132, '13', '213', 213, '21', '321', 321, '321', '321', 32, '132', '132', 1321, '32', '132', 13213, '213', '213', 21, '321', '321', '321', '32312321351321', '1323213151321', '132321321321', '13', '213', '21', '321', 'Si', '32', '132', '132', 'Masculino', '1989-09-07', 213, '213', '21', 'Masculino', '1989-09-07', '32', '1321', 32, '132', '132', '132', '1323213213213213', '34654654654', '3232132132132', '1321', '321', '321', '231', 'Si', '231', '231', '321', 'Masculino', '1989-09-07', 321, '231', '321', 'Masculino', '1989-09-07', '321', '231', 231, '1989-09-07', '231', '321', '321', '23');

--
-- Disparadores `solicitudpm`
--
DELIMITER $$
CREATE TRIGGER `solicitudpm_id` BEFORE INSERT ON `solicitudpm` FOR EACH ROW BEGIN
    if (SELECT COUNT(*) FROM solicitudpm)=0   THEN
        SET NEW.Folio_Sol= 'SM-001';
    else
        SET NEW.Folio_Sol= CONCAT('SM-', LPAD((select MAX(Id)+1 from solicitudpm), 3, '0'));
  END IF;
END
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `solicitudpm`
--
ALTER TABLE `solicitudpm`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`),
  ADD KEY `Folio_Sol` (`Folio_Sol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `solicitudpm`
--
ALTER TABLE `solicitudpm`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
