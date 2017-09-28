-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-09-2017 a las 16:10:28
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
-- Estructura de tabla para la tabla `acceso`
--

CREATE TABLE `acceso` (
  `id` int(11) NOT NULL,
  `user` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pass` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `llave_autorizacion` varchar(6) NOT NULL,
  `GSolicitudes` int(1) NOT NULL,
  `BSolicitudes` int(1) NOT NULL,
  `GCotizacion` int(1) NOT NULL,
  `BQeQ` int(1) NOT NULL,
  `SetConf` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `acceso`
--

INSERT INTO `acceso` (`id`, `user`, `pass`, `nombre`, `llave_autorizacion`, `GSolicitudes`, `BSolicitudes`, `GCotizacion`, `BQeQ`, `SetConf`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrador', '250202', 1, 1, 1, 1, 1),
(2, 'zoomwas', '3fe4687df0a384ddd0806ab07788fbb0', 'Adrián Eduardo Mata Martínez', '123456', 1, 1, 1, 1, 1),
(34, 'sfg-gral', '0c9f23c5dfa93d79f817c487053f854b', 'Silvia Mancinas', '', 1, 1, 1, 1, 1),
(35, 'rh', 'd41d8cd98f00b204e9800998ecf8427e', 'Rh Modificado', '', 0, 0, 0, 0, 0),
(36, 'LUIS', 'f92756e14cab65e10729bc236ab1621a', 'LUIS RODRIGUEZ', '', 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `TipoCliente` varchar(20) NOT NULL,
  `NombrePF` varchar(20) NOT NULL,
  `SegNombrePF` varchar(20) NOT NULL,
  `ApPatPF` varchar(20) NOT NULL,
  `ApMatPF` varchar(20) NOT NULL,
  `RFCPF` varchar(13) NOT NULL,
  `TelefonoPF` varchar(11) NOT NULL,
  `MovilPF` varchar(11) NOT NULL,
  `EmailPF` varchar(30) NOT NULL,
  `DireccionPF` varchar(40) NOT NULL,
  `NumDireccionPF` varchar(6) NOT NULL,
  `ColoniaPF` varchar(20) NOT NULL,
  `CPPF` varchar(20) NOT NULL,
  `LugNacimientoPF` varchar(20) NOT NULL,
  `EstadoPF` varchar(20) NOT NULL,
  `CiudadPF` varchar(20) NOT NULL,
  `MunicipioPF` varchar(20) NOT NULL,
  `CURPPF` varchar(20) NOT NULL,
  `SexoPF` varchar(10) NOT NULL,
  `FechNacimientoPF` date NOT NULL,
  `Edad` varchar(2) NOT NULL,
  `NacionalidadPF` varchar(20) NOT NULL,
  `NumDependientesPF` varchar(2) NOT NULL,
  `AcreditaDomPF` varchar(20) NOT NULL,
  `RecidirCiudadPF` varchar(2) NOT NULL,
  `ArraigoDomPF` date NOT NULL,
  `ArraigoAniosDomPF` int(3) NOT NULL,
  `ViviendaPF` varchar(35) NOT NULL,
  `EspViviendaPF` varchar(20) NOT NULL,
  `EstCivilPF` varchar(30) NOT NULL,
  `AutoPropioPF` varchar(2) NOT NULL,
  `EspAuto` varchar(30) NOT NULL,
  `InmueblePF` varchar(2) NOT NULL,
  `ActividadEmpresarial` varchar(2) NOT NULL,
  `PuestoPF` varchar(20) NOT NULL,
  `DepartamentoPF` varchar(20) NOT NULL,
  `DesdeEmpPF` date NOT NULL,
  `DesdeAniosEmpPF` int(3) NOT NULL,
  `CompaniaPF` varchar(30) NOT NULL,
  `TelefonoEmpPF` varchar(11) NOT NULL,
  `ExtensionEmpPF` varchar(6) NOT NULL,
  `GiroPF` varchar(40) NOT NULL,
  `NumEmpleadosPF` varchar(4) NOT NULL,
  `DomicilioNegPF` varchar(40) NOT NULL,
  `NumDomicilioNegPF` varchar(7) NOT NULL,
  `CPNegPF` varchar(5) NOT NULL,
  `EstadoNegPF` varchar(40) NOT NULL,
  `MunicipioNegPF` varchar(40) NOT NULL,
  `CiudadNegPF` varchar(40) NOT NULL,
  `ColoniaNegPF` varchar(40) NOT NULL,
  `RefPerNom1PF` varchar(40) NOT NULL,
  `RefPerApPat1PF` varchar(30) NOT NULL,
  `RefPerApMat1PF` varchar(30) NOT NULL,
  `RefPerParentesco1PF` varchar(20) NOT NULL,
  `RefPerTelefono1PF` varchar(11) NOT NULL,
  `RefPerDirPF` varchar(50) NOT NULL,
  `RefPerNumDirPF` varchar(7) NOT NULL,
  `RefPerCPPF` varchar(5) NOT NULL,
  `RefPerEstPF` varchar(40) NOT NULL,
  `RefPerMunPF` varchar(40) NOT NULL,
  `RefPerCdPF` varchar(40) NOT NULL,
  `RefPerColPF` varchar(40) NOT NULL,
  `RefPerNom2PF` varchar(40) NOT NULL,
  `RefPerApPat2PF` varchar(20) NOT NULL,
  `RefPerApMat2PF` varchar(20) NOT NULL,
  `RefPerParentesco2PF` varchar(20) NOT NULL,
  `RefPerTelefono2PF` varchar(11) NOT NULL,
  `RefPerDirPF2` varchar(50) NOT NULL,
  `RefPerNumDirPF2` varchar(7) NOT NULL,
  `RefPerCPPF2` varchar(5) NOT NULL,
  `RefPerEstPF2` varchar(40) NOT NULL,
  `RefPerMunPF2` varchar(40) NOT NULL,
  `RefPerCdPF2` varchar(40) NOT NULL,
  `RefPerColPF2` varchar(40) NOT NULL,
  `Banco1` varchar(135) NOT NULL,
  `TipoCuenta1` varchar(20) NOT NULL,
  `CuentaBanc1` varchar(29) NOT NULL,
  `SucursalBanc1` varchar(30) NOT NULL,
  `FechaApertura1` date NOT NULL,
  `Banco2` varchar(135) NOT NULL,
  `TipoCuenta2` varchar(20) DEFAULT NULL,
  `CuentaBanc2` varchar(29) NOT NULL,
  `SucursalBanc2` varchar(30) NOT NULL,
  `FechaApertura2` date NOT NULL,
  `CarDirBanco` varchar(135) NOT NULL,
  `CLABE` varchar(18) NOT NULL,
  `RefComEmp1` varchar(40) NOT NULL,
  `RefComTel1` varchar(11) NOT NULL,
  `RefComAnt1` varchar(4) NOT NULL,
  `RefComDir` varchar(40) NOT NULL,
  `RefComNumDir` varchar(7) NOT NULL,
  `RefComCP` varchar(5) NOT NULL,
  `RefComEst` varchar(40) NOT NULL,
  `RefComMun` varchar(40) NOT NULL,
  `RefComCol` varchar(40) NOT NULL,
  `RefComCd` varchar(40) NOT NULL,
  `RefComEmp2` varchar(40) NOT NULL,
  `RefComTel2` varchar(11) NOT NULL,
  `RefComAnt2` varchar(4) NOT NULL,
  `RefComDir2` varchar(40) NOT NULL,
  `RefComNumDir2` varchar(7) NOT NULL,
  `RefComCP2` varchar(5) NOT NULL,
  `RefComEst2` varchar(40) NOT NULL,
  `RefComMun2` varchar(40) NOT NULL,
  `RefComCd2` varchar(40) NOT NULL,
  `RefComCol2` varchar(40) NOT NULL,
  `ConyugeNom` varchar(30) NOT NULL,
  `ConyugeApPat` varchar(20) NOT NULL,
  `ConyugeApMat` varchar(20) NOT NULL,
  `ConyugeCompania` varchar(30) NOT NULL,
  `ConyugePuesto` varchar(30) NOT NULL,
  `BeneficiarioNom` varchar(30) NOT NULL,
  `BeneficiarioApPat` varchar(20) NOT NULL,
  `BeneficiarioApMat` varchar(20) NOT NULL,
  `BeneficiarioDom` varchar(30) NOT NULL,
  `BeneficiarioCol` varchar(20) NOT NULL,
  `BeneficiarioCP` varchar(7) NOT NULL,
  `BeneficiarioPais` varchar(20) NOT NULL,
  `BeneficiarioTel` varchar(11) NOT NULL,
  `BeneficiarioCURP` varchar(20) NOT NULL,
  `BeneficiarioRFC` varchar(13) NOT NULL,
  `BeneficiarioParent` varchar(30) NOT NULL,
  `BeneficiarioPorciento` varchar(7) NOT NULL,
  `BeneficiarioFechNac` date NOT NULL,
  `BeneficiarioMun` varchar(20) NOT NULL,
  `BeneficiarioEstado` varchar(20) NOT NULL,
  `BeneficiarioEstCivil` varchar(30) NOT NULL,
  `BeneficiarioSocConyugal` varchar(20) NOT NULL,
  `BeneficiarioOcupacion` varchar(30) NOT NULL,
  `RazonSocial` varchar(40) NOT NULL,
  `TelPM` varchar(11) NOT NULL,
  `RFCPM` varchar(13) NOT NULL,
  `DireccionPM` varchar(40) NOT NULL,
  `NumDireccionPM` varchar(6) NOT NULL,
  `EmailPM` varchar(50) NOT NULL,
  `ColoniaPM` varchar(20) NOT NULL,
  `CiudadPM` varchar(20) NOT NULL,
  `EstadoPM` varchar(20) NOT NULL,
  `CPPM` varchar(6) NOT NULL,
  `ActPrinPM` varchar(40) NOT NULL,
  `CantPersonalPM` varchar(4) NOT NULL,
  `InOperacionesPM` date NOT NULL,
  `ConstEmpresaPM` date NOT NULL,
  `AntiguedadPM` varchar(4) NOT NULL,
  `ApoderadoPM` varchar(40) NOT NULL,
  `ContEmpNombre` varchar(20) NOT NULL,
  `ContEmpSegNombre` varchar(20) NOT NULL,
  `ContEmpApPat` varchar(20) NOT NULL,
  `ContEmpApMat` varchar(20) NOT NULL,
  `ContEmpDireccion` varchar(30) NOT NULL,
  `ContEmpColonia` varchar(20) NOT NULL,
  `ContEmpCiudad` varchar(20) NOT NULL,
  `ContEmpEstado` varchar(20) NOT NULL,
  `ContEmpCP` varchar(6) NOT NULL,
  `ContEmpRFC` varchar(13) NOT NULL,
  `ContEmpTel` varchar(11) NOT NULL,
  `ContEmpEmail` varchar(30) NOT NULL,
  `ContEmpPuesto` varchar(20) NOT NULL,
  `Acc1Nombre` varchar(40) NOT NULL,
  `Acc1ApPat` varchar(20) NOT NULL,
  `Acc1ApMat` varchar(20) NOT NULL,
  `Acc1RFC` varchar(13) NOT NULL,
  `Acc1Porcentaje` varchar(7) NOT NULL,
  `Acc2Nombre` varchar(40) NOT NULL,
  `Acc2ApPat` varchar(20) NOT NULL,
  `Acc2ApMat` varchar(20) NOT NULL,
  `Acc2RFC` varchar(13) NOT NULL,
  `Acc2Porcentaje` varchar(7) NOT NULL,
  `Acc3Nombre` varchar(40) NOT NULL,
  `Acc3ApPat` varchar(20) NOT NULL,
  `Acc3ApMat` varchar(20) NOT NULL,
  `Acc3RFC` varchar(13) NOT NULL,
  `Acc3Porcentaje` varchar(7) NOT NULL,
  `Acc4Nombre` varchar(40) NOT NULL,
  `Acc4ApPat` varchar(20) NOT NULL,
  `Acc4ApMat` varchar(20) NOT NULL,
  `Acc4RFC` varchar(13) NOT NULL,
  `Acc4Porcentaje` varchar(7) NOT NULL,
  `Acc5Nombre` varchar(40) NOT NULL,
  `Acc5ApPat` varchar(20) NOT NULL,
  `Acc5ApMat` varchar(20) NOT NULL,
  `Acc5RFC` varchar(13) NOT NULL,
  `Acc5Porcentaje` varchar(7) NOT NULL,
  `Acc6Nombre` varchar(40) NOT NULL,
  `Acc6ApPat` varchar(20) NOT NULL,
  `Acc6ApMat` varchar(20) NOT NULL,
  `Acc6RFC` varchar(13) NOT NULL,
  `Acc6Porcentaje` varchar(7) NOT NULL,
  `FechaRegistro` date NOT NULL,
  `Status` varchar(20) NOT NULL,
  `FechaModificacion` date NOT NULL,
  `ModPor` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `TipoCliente`, `NombrePF`, `SegNombrePF`, `ApPatPF`, `ApMatPF`, `RFCPF`, `TelefonoPF`, `MovilPF`, `EmailPF`, `DireccionPF`, `NumDireccionPF`, `ColoniaPF`, `CPPF`, `LugNacimientoPF`, `EstadoPF`, `CiudadPF`, `MunicipioPF`, `CURPPF`, `SexoPF`, `FechNacimientoPF`, `Edad`, `NacionalidadPF`, `NumDependientesPF`, `AcreditaDomPF`, `RecidirCiudadPF`, `ArraigoDomPF`, `ArraigoAniosDomPF`, `ViviendaPF`, `EspViviendaPF`, `EstCivilPF`, `AutoPropioPF`, `EspAuto`, `InmueblePF`, `ActividadEmpresarial`, `PuestoPF`, `DepartamentoPF`, `DesdeEmpPF`, `DesdeAniosEmpPF`, `CompaniaPF`, `TelefonoEmpPF`, `ExtensionEmpPF`, `GiroPF`, `NumEmpleadosPF`, `DomicilioNegPF`, `NumDomicilioNegPF`, `CPNegPF`, `EstadoNegPF`, `MunicipioNegPF`, `CiudadNegPF`, `ColoniaNegPF`, `RefPerNom1PF`, `RefPerApPat1PF`, `RefPerApMat1PF`, `RefPerParentesco1PF`, `RefPerTelefono1PF`, `RefPerDirPF`, `RefPerNumDirPF`, `RefPerCPPF`, `RefPerEstPF`, `RefPerMunPF`, `RefPerCdPF`, `RefPerColPF`, `RefPerNom2PF`, `RefPerApPat2PF`, `RefPerApMat2PF`, `RefPerParentesco2PF`, `RefPerTelefono2PF`, `RefPerDirPF2`, `RefPerNumDirPF2`, `RefPerCPPF2`, `RefPerEstPF2`, `RefPerMunPF2`, `RefPerCdPF2`, `RefPerColPF2`, `Banco1`, `TipoCuenta1`, `CuentaBanc1`, `SucursalBanc1`, `FechaApertura1`, `Banco2`, `TipoCuenta2`, `CuentaBanc2`, `SucursalBanc2`, `FechaApertura2`, `CarDirBanco`, `CLABE`, `RefComEmp1`, `RefComTel1`, `RefComAnt1`, `RefComDir`, `RefComNumDir`, `RefComCP`, `RefComEst`, `RefComMun`, `RefComCol`, `RefComCd`, `RefComEmp2`, `RefComTel2`, `RefComAnt2`, `RefComDir2`, `RefComNumDir2`, `RefComCP2`, `RefComEst2`, `RefComMun2`, `RefComCd2`, `RefComCol2`, `ConyugeNom`, `ConyugeApPat`, `ConyugeApMat`, `ConyugeCompania`, `ConyugePuesto`, `BeneficiarioNom`, `BeneficiarioApPat`, `BeneficiarioApMat`, `BeneficiarioDom`, `BeneficiarioCol`, `BeneficiarioCP`, `BeneficiarioPais`, `BeneficiarioTel`, `BeneficiarioCURP`, `BeneficiarioRFC`, `BeneficiarioParent`, `BeneficiarioPorciento`, `BeneficiarioFechNac`, `BeneficiarioMun`, `BeneficiarioEstado`, `BeneficiarioEstCivil`, `BeneficiarioSocConyugal`, `BeneficiarioOcupacion`, `RazonSocial`, `TelPM`, `RFCPM`, `DireccionPM`, `NumDireccionPM`, `EmailPM`, `ColoniaPM`, `CiudadPM`, `EstadoPM`, `CPPM`, `ActPrinPM`, `CantPersonalPM`, `InOperacionesPM`, `ConstEmpresaPM`, `AntiguedadPM`, `ApoderadoPM`, `ContEmpNombre`, `ContEmpSegNombre`, `ContEmpApPat`, `ContEmpApMat`, `ContEmpDireccion`, `ContEmpColonia`, `ContEmpCiudad`, `ContEmpEstado`, `ContEmpCP`, `ContEmpRFC`, `ContEmpTel`, `ContEmpEmail`, `ContEmpPuesto`, `Acc1Nombre`, `Acc1ApPat`, `Acc1ApMat`, `Acc1RFC`, `Acc1Porcentaje`, `Acc2Nombre`, `Acc2ApPat`, `Acc2ApMat`, `Acc2RFC`, `Acc2Porcentaje`, `Acc3Nombre`, `Acc3ApPat`, `Acc3ApMat`, `Acc3RFC`, `Acc3Porcentaje`, `Acc4Nombre`, `Acc4ApPat`, `Acc4ApMat`, `Acc4RFC`, `Acc4Porcentaje`, `Acc5Nombre`, `Acc5ApPat`, `Acc5ApMat`, `Acc5RFC`, `Acc5Porcentaje`, `Acc6Nombre`, `Acc6ApPat`, `Acc6ApMat`, `Acc6RFC`, `Acc6Porcentaje`, `FechaRegistro`, `Status`, `FechaModificacion`, `ModPor`) VALUES
(134, 'Persona Fisica', 'kevin', 'artuto', 'elisea', 'mazatan', 'MAMA890907CV4', '618-2735833', '618-1234566', 'kda@4w.com', 'validacion aqui', '630 b ', 'Fidel Velázquez I', '34229', 'hvbnvbn', 'Durango', 'Victoria de Durango', 'Durango', '', 'Masculino', '1994-08-01', '23', 'mexicano', '10', 'ife', '22', '1989-09-07', 27, 'Otros especificar', 'otros', 'Casado Bienes Mancomunados', 'Si', 'atros', 'No', 'Si', 'jhjhg', 'sdfsf', '1989-01-01', 28, 'kjhjkh', '618-3030304', '321', '321312', '2123', 'ghjghj', '34220', '34229', 'Durango', 'Durango', 'Victoria de Durango', 'Fideicomiso Ciudad Industrial', 'asdkjh', '', '', 'kjsdhf', '618-3213213', 'sdfsdf', '156', '34220', 'Durango', 'Durango', 'Victoria de Durango', 'Las Fuentes', 'kjh', '', '', 'kjh', '651-6165161', 'sdfsdf', '156', '34229', 'Durango', 'Durango', 'Victoria de Durango', 'Fideicomiso Ciudad Industrial', '002 BANAMEX Banco Nacional de México, S.A., Institución de Banca Múltiple, Grupo Financiero Banamex', '1', '1234-1234-1234-1234', '315', '1989-09-07', '014 SANTANDER Banco Santander (México), S.A., Institución de Banca Múltiple, Grupo Financiero Santander', '2', '12345678912', '014', '1989-09-07', 'ksajdha', '321654987654321654', 'hgjhgjhg', '315-6165165', '2017', 'asdasdasda', '54', '34229', 'Durango', 'Durango', 'Fidel Velázquez I', 'Victoria de Durango', 'asdkjh', '315-6165165', '2017', 'asdasdasda', '54', '34220', 'Durango', 'Durango', 'Victoria de Durango', 'Guadalupe Victoria INFONAVIT', 'fghf', 'hfghf', 'ghfgh', 'fghfgh', 'fghfgh', 'dfgd', 'dgdfg', 'dfgdfg', 'fgdfgd', 'Fideicomiso Ciudad I', '34229', 'dfgdfg', '651-6516516', 'MAMA890907HDGTRD07', 'MAMA890907CV4', 'sdfsdf', '100', '1989-09-07', 'Durango', 'Durango', 'Casado', 'Bienes Mancomunados', 'sdfsdf', '', '616-5165166', '', 'jdjdjh', '446 df', 'djd@f.com', 'Fidel Velázquez I', 'Victoria de Durango', 'Durango', '34229', 'jdfjkd', '425', '1989-09-07', '1989-09-07', '27', 'kdjkdjdj', 'bjhbj', 'bjhb', 'jhbjh', 'bjhbjh', 'bjhbj', 'Hacienda de Fray Die', 'Victoria de Durango', 'Durango', '34200', 'MAMA890908CV4', '651-6515615', 'sdfs@dfg.com', 'sdfsdf', 'fghfgh', '', '', 'MAMA890907CV4', '100', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-08-01', 'Incompleto', '2017-09-27', 'admin'),
(203, 'Persona Fisica', 'Adrian', 'Eduardo', 'Mata', 'Martinez', 'MAMA890907CV4', '618-1949311', '618-3030413', 'zoomwas@hotmail.com', 'operadores', '222', 'Fidel Velázquez I', '34229', 'Mexico', 'Durango', 'Victoria de Durango', 'Durango', 'MAMA890907HDGTRD07', 'Masculino', '1989-09-07', '28', 'Mexicana', '3', 'Recibo del agua', '28', '2010-02-11', 7, 'Casa propiedad de sus familiares', '', 'Casado Bienes Separados', 'Si', 'Atos 2003', 'No', 'Si', 'Accionista principal', 'Gerencia', '2016-10-01', 0, 'Gama Telecomunicaciones', '618-1111111', '1234', 'Telecomunicaciones', '3', 'blvd francisco villa', 'SN', '34229', 'Durango', 'Durango', 'Victoria de Durango', 'Fideicomiso Ciudad Industrial', 'Alejandro', 'garcia', 'alvarado', 'Compadre', '618-9999999', 'sdfgsf', '120', '34220', 'Durango', 'Durango', 'Victoria de Durango', 'Guadalupe Victoria INFONAVIT', '', '', '', '', '', '', '', '', '', '', '', '', '014 SANTANDER Banco Santander (México), S.A., Institución de Banca Múltiple, Grupo Financiero Santander', '1', '1234-1234-1234-1234', '001', '2016-10-01', '', '', '', '', '0000-00-00', '', '', 'empresa', '618-8888888', '2010', 'blvd frac villa', 'SN', '34229', 'Durango', 'Durango', 'Real de Villas', 'Victoria de Durango', '123', '', '', '', '', '', '', '', '', '', 'Maria guadalupe', 'alvarado', 'higareda', 'NA', 'Ama de Casa', 'maria guadalupe', 'alvarado', 'higareda', 'julian vera #210 ', 'Juan Lira Bracho', '34188', 'Mexico', '618-2971422', 'MAMA890907HDGTRD07', 'MAMA890907CV4', 'Esposa', '100', '1988-02-22', 'Durango', 'Durango', 'Casado', 'Bienes Separados', 'Ama de casa', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-11', 'Incompleto', '2017-09-26', 'admin'),
(207, 'Persona Moral', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Santander', '', '1234-5678-9456-1231-3212', '002', '2017-08-01', '', NULL, '', '', '0000-00-00', '', '', 'empresa Ref COm', '618-9888888', '2010', 'asdasd', '2321', '34220', 'Durango', 'Durango', 'Cibeles', 'Victoria de Durango', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Maria Guadalupe', 'Alvarado', 'Higareda', 'julian vera #210 ', 'Juan Lira Bracho', '34188', 'Mexico', '618-7777777', 'MAMA890907HDGTRD08', 'MAMA890907CV9', 'Esposa', '100', '1988-02-22', 'Durango', 'Durango', 'Casado', 'Bienes Separados', 'Ama de Casa', 'Gama Telecomunicaciones', '618-1111111', 'MAMA890907CV4', 'operadores ', '222', 'telecomunicacionesgama@hotmail.com', 'Fidel Velázquez I', 'Victoria de Durango', 'Durango', '34229', 'Telecomunicaciones', '3', '2017-09-01', '2017-08-01', '0', 'Alejandro Ariel Garcia Alvarado', 'Adrian ', 'Eduardo', 'Mata', 'Martinez', 'operadores 222', 'Fidel Velázquez I', 'Victoria de Durango', 'Durango', '34229', 'MAMA890907CV5', '618-3030413', 'zoomwas@hotmail.com', 'Accionista principal', 'Alejandro Ariel', 'Garcia', 'Alvarado', 'MAMA890907CV6', '33', 'Adrian Eduardo', 'Mata', 'Martinez', 'MAMA890907CV7', '33', 'Kevin Arturo', 'Elisea', 'Mazatan', 'MAMA890907CV8', '33', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-12', 'Finalizado', '2017-09-12', 'admin'),
(216, 'Persona Fisica', 'CESAR', 'OCTAVIO', 'ALCARAZ', 'ARREOLA', 'AAAC811012BK7', '618-1855663', '618-8006696', 'ALCARAZ_ARREOLAC@HOTMAIL.COM', 'AV. LAS MARGARITAS', '211', 'Colinas del Saltito', '34105', 'DURANGO', 'Durango', 'Victoria de Durango', 'Durango', 'AAAC811012HDGLRS08', 'Masculino', '1981-10-12', '35', 'MEXICANA', '2', 'RECIBO DE CFE', '35', '1982-10-12', 34, 'Casa propiedad de sus familiares', '', 'Casado Bienes Mancomunados', 'Si', 'MAZDA', 'Si', 'Si', 'GERENTE DE REFACCION', 'REFACCIONES', '2013-07-29', 4, 'AUTOMOTRIZ DEL GUADIANA', '618-8142255', '110', 'COMERCIAL', '70', 'BLVD. FRANCISCO VILLA ', 'SN', '34208', 'Durango', 'Durango', 'Victoria de Durango', 'Ciudad Industrial', 'PERLA YADIRA', 'BARNEY', 'BELTRAN', 'AMISTAD', '618-8141439', 'POTASIO', 'SN', '34208', 'Durango', 'Durango', 'Victoria de Durango', 'Ciudad Industrial', 'MIGUEL ANGEL', 'NUÑEZ', 'FLORES', 'AMISTAD', '', '', '', '34000', 'Ciudad de México', 'Benito Juárez', 'Ciudad de México', 'Álamos', '', '', '', '', '0000-00-00', '', NULL, '', '', '0000-00-00', '012 BBVA BANCOMER BBVA Bancomer, S.A., Institución de Banca Múltiple, Grupo Financiero BBVA Bancomer', '014190655025299396', 'EASED', '618-8130199', '2010', 'PATONI', '624', '34000', 'Durango', 'Durango', 'Victoria de Durango Centro', 'Victoria de Durango', 'COMERDIS DEL NORTE', '618-8141439', '2012', 'POTASIO ', 'SN', '34208', 'Durango', 'Durango', 'Victoria de Durango', 'Ciudad Industrial', 'PAOLA ESTAFANI', 'HERNANDEZ', 'SALAS', 'SEP', 'ADMINISTRATIVA', 'PAOLA ESTFANI', 'HERNANDEZ', 'SALAS', 'AV. LAS MARGARITAS 211', 'Colinas del Saltito', '34105', 'MEXICO', '618-1855663', '', '', 'ESPOSA', '100', '0000-00-00', 'Durango', 'Durango', 'Casado', 'Bienes Mancomunados', 'ADMINISTRATIVA', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-22', 'Incompleto', '2017-09-22', 'admin'),
(217, 'Persona Fisica', 'JOSE', 'LUIS', 'CASTAÑEDA', 'RIVERA', 'CARL680606KX0', '', '', '', 'UNIDOS VENCEREMOS', '304', 'José Revueltas', '34219', 'DURANGO', 'Durango', 'Victoria de Durango', 'Durango', 'CARL680606HDGSVS00', 'Masculino', '1968-06-06', '49', 'MEXICANA', '', 'RECIBO DE CFE', '49', '1968-06-06', 49, 'Casa propiedad de sus familiares', '', 'Soltero', 'No', '', 'No', 'Si', 'VIGILANTE', 'ADMINISTRACION', '2013-12-16', 3, 'AUTOMOTRIZ DEL GUADIANA SA DE ', '618-8142255', '130', 'COMERCIAL', '70', 'BLVD FRANCISCO VILLA', 'SN', '34208', 'Durango', 'Durango', 'Victoria de Durango', 'Ciudad Industrial', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', NULL, '', '', '0000-00-00', 'SANTANDER', '', 'DISTRIBUIDORA DE CERVEZAS MODELO EN EL N', '618-8181700', '2013', 'DURANGO-TORREON', 'SN', '34280', 'Durango', 'Durango', 'J Guadalupe Rodriguez', 'Victoria de Durango', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SOLIS', 'AURELIANA', 'CASTAÑEDA', 'UNIDOS VENCEREMOS 304', 'José Revueltas', '34219', 'MEXICO', '', '', '', 'MADRE', '100', '0000-00-00', 'Durango', 'Durango', '', '', 'AMA DE CASA', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-22', 'Incompleto', '2017-09-22', 'LUIS'),
(218, 'Persona Fisica', 'ROSA', 'MARIA', 'CANGAS', 'PULIDO', 'CAPR610614HP3', '618-8141650', '', 'rosy.cangas@vwdgo.com', 'LABORATORISTAS', '130', 'Fidel Velázquez II', '34229', 'DURANGO', 'Durango', 'Victoria de Durango', 'Durango', 'CAPR610614MDGNLS00', 'Femenino', '1961-06-14', '56', 'MEXICANA', '3', 'RECIBO DE CFE', '56', '1961-06-14', 56, 'Casa Propia', '', 'Soltero', 'Si', 'VW', 'Si', 'Si', 'EJECUTIVO DE VENTAS', 'VENTAS', '1998-07-28', 19, 'AUTOMOTRIZ DEL GUADIANA SA DE ', '618-8142255', '123', 'COMERCIAL', '70', 'BLVD FRANCISCO VILLA', 'SN', '34208', 'Durango', 'Durango', 'Victoria de Durango', 'Ciudad Industrial', 'FERNANDO', '', 'DELGADO', 'AMISTAD', '', 'LABORATORISTA', '130', '34229', 'Durango', 'Durango', 'Victoria de Durango', 'Villas del Guadiana IV', 'FRANCISCA', '', 'CONTRERAS', 'AMISTAD', '', 'GERANIO', '900', '', '', '', '', '', '', '', '', '', '0000-00-00', '', NULL, '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-22', 'Incompleto', '2017-09-22', 'LUIS'),
(219, 'Persona Fisica', 'SILVIA', 'MAYELA', 'MANCINAS ', 'FRANCO', 'MAFS7011233Q1', '618-8131947', '618-1586343', 'silvia@vwdgo.com', 'FRANCISCO ARRIETA', '249', 'Domingo Arrieta', '34180', 'NUEVO IDEAL', 'Durango', 'Victoria de Durango', 'Durango', 'MAFS701123MDGNRL08', 'Femenino', '1970-11-23', '46', 'MEXICANA', '1', 'RECIBO TELMEX', '', '0000-00-00', 0, 'Casa propiedad de sus familiares', '', 'Soltero', '', '', '', 'Si', 'GERENTE GENERAL', 'ADMINISTRACION', '1997-02-03', 20, 'AUTOMOTRIZ DEL GUADIANA SA DE ', '618-8142255', '101', 'COMERCIAL', '70', 'BLVD FRANCISCO VILLA', 'SN', '34208', 'Durango', 'Durango', 'Victoria de Durango', 'Ciudad Industrial', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', NULL, '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SOTELO', 'EUSEBIA', 'MANCINAS', 'FRANCISCO ARRIETA 249', 'Domingo Arrieta', '34180', 'MEXICO', '618-8131947', '', '', 'MADRE', '100', '0000-00-00', 'Durango', 'Durango', 'Viudo', '', 'AMA DE CASA', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-22', 'Incompleto', '2017-09-22', 'LUIS'),
(220, 'Persona Fisica', 'LUIS', 'ALBERTO', 'RODRIGUEZ ', 'CAMPOS', 'ROCL900317JJA', '', '618-2188645', 'LGA_LUIS17@YAHOO.COM.MX', 'PLATINO', '134', 'Fidel Velázquez I', '34229', 'DURANGO', 'Durango', 'Victoria de Durango', 'Durango', 'ROCL900317HDGDMS09', 'Masculino', '1990-03-17', '27', 'MEXICABA', '3', 'RECIBO DE MEGACABLE', '27', '1990-03-17', 27, 'Casa propiedad de sus familiares', '', 'Casado Bienes Mancomunados', 'Si', 'VW', 'No', 'Si', '', '', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', '', '', '', 'SONIA', 'CHAVEZ', 'SERRANO', 'CUÑADA', '618-8335968', 'RET VARSOVIA', '5', '34220', 'Durango', 'Durango', 'Victoria de Durango', 'Privada Villa Jardín', 'ORLANDO ENRIQUE', 'GUZMAN', 'NAVARRO', 'AMISTAD', '618-2655450', 'ISLA CERRALVO', '203', '34204', 'Durango', 'Durango', 'Victoria de Durango', 'Puerta de San Ignacio', '', '', '', '', '0000-00-00', '', NULL, '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'MARIA JUDITH', 'CHAVEZ', 'SERRANO', '', 'AMA DE CASA', 'MARIA JUDITH', 'CHAVEZ', 'SERRANO', 'RET VARSOVIA 5', 'Guadalupe Victoria I', '34220', 'MEXICO', '618-1707315', 'CASJ900805MDGHRD07', '', 'ESPOSA', '100', '1990-08-05', 'Durango', 'Durango', 'Divorciado', '', 'AMA DE CASA', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-22', 'Incompleto', '2017-09-22', 'LUIS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comisionesyseguros`
--

CREATE TABLE `comisionesyseguros` (
  `id` int(11) NOT NULL,
  `Folio_Solicitud` varchar(10) NOT NULL,
  `Comision_Apertura` double NOT NULL,
  `Seguro_Auto` double NOT NULL,
  `Seguro_Vida` double NOT NULL,
  `Seguro_Desempleo` double NOT NULL,
  `Enganche` double NOT NULL,
  `Plazo` int(2) NOT NULL,
  `Interes_Anual` double NOT NULL,
  `CAT` varchar(7) NOT NULL,
  `Fecha_Inicio` date NOT NULL,
  `ValorAuto_Mont_a_Fin` double NOT NULL,
  `PagMenEsp` double NOT NULL,
  `MontFin` double NOT NULL,
  `PorEnganche` varchar(7) NOT NULL,
  `PorFinanciado` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comisionesyseguros`
--

INSERT INTO `comisionesyseguros` (`id`, `Folio_Solicitud`, `Comision_Apertura`, `Seguro_Auto`, `Seguro_Vida`, `Seguro_Desempleo`, `Enganche`, `Plazo`, `Interes_Anual`, `CAT`, `Fecha_Inicio`, `ValorAuto_Mont_a_Fin`, `PagMenEsp`, `MontFin`, `PorEnganche`, `PorFinanciado`) VALUES
(8, 'SA-014', 3, 0, 0, 0, 10000, 48, 15, '%', '0000-00-00', 100000, 1500, 90000, '10.00 %', '90.00 %'),
(9, 'SA-015', 3, 0, 0, 0, 0, 48, 91.7, '%', '0000-00-00', 3213, 31231, 0, '', ''),
(10, 'SA-016', 3, 0, 0, 0, 0, 48, 91.7, '%', '0000-00-00', 3213, 31231, 0, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(11) NOT NULL,
  `NombreLayer` varchar(0) DEFAULT NULL,
  `Columna` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docu`
--

CREATE TABLE `docu` (
  `id` int(6) NOT NULL,
  `Rsolicitud` varchar(40) NOT NULL,
  `INE` varchar(40) NOT NULL,
  `INEurl` varchar(120) NOT NULL,
  `pasaporte` varchar(40) NOT NULL,
  `pasaporteurl` varchar(120) NOT NULL,
  `cartilla` varchar(40) NOT NULL,
  `cartillaurl` varchar(120) NOT NULL,
  `licencia` varchar(40) NOT NULL,
  `licenciaurl` varchar(120) NOT NULL,
  `otra` varchar(40) NOT NULL,
  `inotra` varchar(50) NOT NULL,
  `otraurl` varchar(120) NOT NULL,
  `secotejo` varchar(40) NOT NULL,
  `addcurp` varchar(40) NOT NULL,
  `addcurpurl` varchar(120) NOT NULL,
  `adddomicilio` varchar(40) NOT NULL,
  `adddomiciliourl` varchar(120) NOT NULL,
  `fechadom` date NOT NULL,
  `domId` varchar(40) NOT NULL,
  `Status` varchar(11) NOT NULL,
  `acta` varchar(50) NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `poderes` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `docu`
--

INSERT INTO `docu` (`id`, `Rsolicitud`, `INE`, `INEurl`, `pasaporte`, `pasaporteurl`, `cartilla`, `cartillaurl`, `licencia`, `licenciaurl`, `otra`, `inotra`, `otraurl`, `secotejo`, `addcurp`, `addcurpurl`, `adddomicilio`, `adddomiciliourl`, `fechadom`, `domId`, `Status`, `acta`, `cedula`, `poderes`) VALUES
(95, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 'Incompleto', '', '', ''),
(96, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 'Incompleto', '', '', ''),
(97, '', '', '', '', '', '', '', '', '', '', '', '', '-Seleccione una opcion-', '', '', '', '', '0000-00-00', 'Si', 'Incompleto', 'Carga documentacion/Captura de pantalla (32).png', '', ''),
(98, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 'Incompleto', '', '', ''),
(99, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 'Incompleto', '', '', ''),
(100, '', 'XXXXXXX', 'Carga documentacion/Amortizaci&oacute;n.pdf', 'jgh', 'Carga documentacion/CESAR ALCARAZ.pdf', 'jhgj', 'Carga documentacion/JOSE LUIS GARCIA.pdf', 'hgjkb', 'Carga documentacion/AUGUSTO CASTRO.pdf', 'gfgfgf', 'gfgf', 'Carga documentacion/MARTHA CASTRO.pdf', 'Si', '', 'Carga documentacion/AUGUSTO CASTRO.pdf', '', '', '2017-08-09', 'Si', 'Finalizado', '', '', ''),
(108, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 'Incompleto', '', '', ''),
(109, '', '321346', 'Carga documentacion/firebase-php.pdf', '', '', '', '', '', '', '', '', '', ' ', '', '', '', '', '0000-00-00', ' ', 'Incompleto', '', '', ''),
(110, '', 'XXXXXXXXXXXXXXX', 'Carga documentacion/firebase-php.pdf', '', '', '', '', '', '', '', '', '', ' ', '', 'Carga documentacion/Captura de pantalla (69).png', '', '', '0000-00-00', ' ', 'Incompleto', '', '', ''),
(111, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 'Incompleto', '', '', ''),
(112, '', 'xxxxxxxxxxxxxxxxxxxxx', 'Carga documentacion/Manual Tecnico Entrega BD-PF.pdf', 'dfgdgdfgdg', 'Carga documentacion/pagos.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 'Incompleto', '', '', ''),
(113, '', 'gdfgdfgd', 'Carga documentacion/Manual Tecnico Entrega BD-PF.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 'Incompleto', '', '', ''),
(114, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 'Incompleto', '', '', ''),
(115, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 'Incompleto', '', '', ''),
(116, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 'Incompleto', '', '', ''),
(117, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 'Incompleto', '', '', ''),
(118, '', '123456789', 'Carga documentacion/Manual Tecnico Entrega BD-PF.pdf', 'hjk', 'Carga documentacion/Manual Tecnico Entrega BD-PF.pdf', 'hjk', 'Carga documentacion/Manual Tecnico Entrega BD-PF.pdf', 'hjk', 'Carga documentacion/Manual Tecnico Entrega BD-PF.pdf', 'qweqwe', 'asdasd', 'Carga documentacion/Manual Tecnico Entrega BD-PF.pdf', 'Si', '', 'Carga documentacion/Manual Tecnico Entrega BD-PF.pdf', '', 'Carga documentacion/Manual Tecnico Entrega BD-PF.pdf', '1989-09-07', 'Si', 'Incompleto', '', '', ''),
(119, '', 'asdasdas', 'Carga documentacion/Manual Tecnico Entrega BD-PF.pdf', '', '', '', '', '', '', '', '', '', 'Si', '', 'Carga documentacion/Manual Tecnico Entrega BD-PF.pdf', '', 'Carga documentacion/Manual Tecnico Entrega BD-PF.pdf', '0000-00-00', '', 'Incompleto', '', '', ''),
(120, '', 'XXXXXXXXXXXX', 'Carga documentacion/36 COMP.pdf', '', '', '', '', '', '', '', '', '', 'Si', '', 'Carga documentacion/Manual Tecnico Entrega BD-PF.pdf', '', 'Carga documentacion/pagos.jpg', '0000-00-00', '', 'Incompleto', '', '', ''),
(121, '', 'XXXXXXXXXXX', 'Carga documentacion/36 COMP.pdf', '', '', '', '', '', '', '', '', '', 'Si', '', '', '', '', '2017-09-07', 'Si', 'Finalizado', '', '', ''),
(122, '', 'AAAAAAAAAAAA', 'Carga documentacion/36 COMP.pdf', '', '', '', '', '', '', '', '', '', 'Si', '', '', '', 'Carga documentacion/36 COMP.pdf', '0000-00-00', '', 'Incompleto', 'Carga documentacion/Manual Tecnico Entrega BD-PF.p', 'Carga documentacion/36 COMP.pdf', 'Carga documentacion/Manual Tecnico Entrega BD-PF.p'),
(123, '', 'gdfgsdfg', 'Carga documentacion/36 COMP.pdf', 'sdfgsdfg', 'Carga documentacion/Manual Tecnico Entrega BD-PF.pdf', 'dsfgsd', 'Carga documentacion/36 COMP.pdf', 'gdfgsdf', 'Carga documentacion/pagos.jpg', 'dfgsdfg', 'gdfg', 'Carga documentacion/36 COMP.pdf', 'Si', '', 'Carga documentacion/36 COMP.pdf', '', 'Carga documentacion/Manual Tecnico Entrega BD-PF.pdf', '0000-00-00', '', 'Incompleto', '', '', ''),
(124, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 'Incompleto', '', '', ''),
(125, '', 'AAAAAAAAAAAAAA', 'Carga documentacion/36 COMP.pdf', '', '', '', '', '', '', '', '', '', 'Si', '', '', '', 'Carga documentacion/36 COMP.pdf', '2017-08-01', 'Si', 'Finalizado', 'Carga documentacion/36 COMP.pdf', 'Carga documentacion/Manual Tecnico Entrega BD-PF.p', 'Carga documentacion/36 COMP.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gradoriesgo`
--

CREATE TABLE `gradoriesgo` (
  `Id` int(8) NOT NULL,
  `Antiguedad_ObjetoSocial` varchar(20) NOT NULL,
  `Antiguedad_Cliente` varchar(20) NOT NULL,
  `Naturaleza_Operaciones` varchar(20) NOT NULL,
  `Numero_Beneficiarios` varchar(20) NOT NULL,
  `Numero_TercerosRelacionados` varchar(20) NOT NULL,
  `PEPs_Relacionados` varchar(20) NOT NULL,
  `Alerta_Reputacional` varchar(20) NOT NULL,
  `Volumen_Esperado` varchar(20) NOT NULL,
  `Frecuencia_Esperada` varchar(20) NOT NULL,
  `Instrumento_Monetario` varchar(20) NOT NULL,
  `Canales_MediosUtilizados` varchar(20) NOT NULL,
  `Pais_EstadoOficial` varchar(20) NOT NULL,
  `Pais_EstadoResidencia` varchar(50) NOT NULL,
  `Pais_EstadoOperacion` varchar(50) NOT NULL,
  `Origen_Recursos` varchar(20) NOT NULL,
  `Destino_Recursos` varchar(20) NOT NULL,
  `Pais_EstadoResidenciaTerceros` varchar(20) NOT NULL,
  `Edad_Cliente` varchar(40) NOT NULL,
  `An_Construccion` varchar(40) NOT NULL,
  `Reg_TributacionPF` varchar(40) NOT NULL,
  `Reg_TributacionPM` varchar(40) NOT NULL,
  `GradoRiesgo` varchar(20) NOT NULL,
  `ingrcomp1` double NOT NULL,
  `fuenteingrcomp1` varchar(40) NOT NULL,
  `ingrcomp2` double NOT NULL,
  `fuenteingrcomp2` varchar(40) NOT NULL,
  `ingrcomp3` double NOT NULL,
  `fuenteingrcomp3` varchar(40) NOT NULL,
  `ingrcomp4` double NOT NULL,
  `fuenteingrcomp4` varchar(40) NOT NULL,
  `ingrcomp5` double NOT NULL,
  `fuenteingrcomp5` varchar(40) NOT NULL,
  `ingrnocomp1` double NOT NULL,
  `fuenteingrnocomp1` varchar(40) NOT NULL,
  `ingrnocomp2` double NOT NULL,
  `fuenteingrnocomp2` varchar(40) NOT NULL,
  `ingrnocomp3` double NOT NULL,
  `fuenteingrnocomp3` varchar(40) NOT NULL,
  `ingrnocomp4` double NOT NULL,
  `fuenteingrnocomp4` varchar(40) NOT NULL,
  `ingrnocomp5` double NOT NULL,
  `fuenteingrnocomp5` varchar(40) NOT NULL,
  `tienepeprel` varchar(2) NOT NULL,
  `quienpep` varchar(50) NOT NULL,
  `parentescopep` varchar(40) NOT NULL,
  `puestorelpep` varchar(50) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `FechaModificacion` date NOT NULL,
  `ModPor` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gradoriesgo`
--

INSERT INTO `gradoriesgo` (`Id`, `Antiguedad_ObjetoSocial`, `Antiguedad_Cliente`, `Naturaleza_Operaciones`, `Numero_Beneficiarios`, `Numero_TercerosRelacionados`, `PEPs_Relacionados`, `Alerta_Reputacional`, `Volumen_Esperado`, `Frecuencia_Esperada`, `Instrumento_Monetario`, `Canales_MediosUtilizados`, `Pais_EstadoOficial`, `Pais_EstadoResidencia`, `Pais_EstadoOperacion`, `Origen_Recursos`, `Destino_Recursos`, `Pais_EstadoResidenciaTerceros`, `Edad_Cliente`, `An_Construccion`, `Reg_TributacionPF`, `Reg_TributacionPM`, `GradoRiesgo`, `ingrcomp1`, `fuenteingrcomp1`, `ingrcomp2`, `fuenteingrcomp2`, `ingrcomp3`, `fuenteingrcomp3`, `ingrcomp4`, `fuenteingrcomp4`, `ingrcomp5`, `fuenteingrcomp5`, `ingrnocomp1`, `fuenteingrnocomp1`, `ingrnocomp2`, `fuenteingrnocomp2`, `ingrnocomp3`, `fuenteingrnocomp3`, `ingrnocomp4`, `fuenteingrnocomp4`, `ingrnocomp5`, `fuenteingrnocomp5`, `tienepeprel`, `quienpep`, `parentescopep`, `puestorelpep`, `Status`, `FechaModificacion`, `ModPor`) VALUES
(26, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Bajo', 5000, 'sdfsdf', 7500, 'Segundo Empleo', 1500, 'Tercer Empleo', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 'No', '', '', '', 'Incompleto', '2017-08-22', 'admin'),
(27, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', '', '', 'Incompleto', '0000-00-00', ''),
(28, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', '', '', 'Incompleto', '0000-00-00', ''),
(29, 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'México', 'México', 'México', '18 - 26', '', 'Incorporacion Fiscal', '', 'Medio', 15000, 'jhfhfg', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 'Si', 'lkñlkñkñkl', 'ñkl', 'ñlkñlk', 'Finalizado', '2017-09-04', 'admin'),
(30, 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'México', 'México', 'México', '18 - 26', '', 'Incorporacion Fiscal', '', 'Medio', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 'No', '', '', '', 'Incompleto', '2017-08-26', 'admin'),
(31, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', '', '', 'Incompleto', '0000-00-00', ''),
(32, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', '', '', 'Incompleto', '0000-00-00', ''),
(33, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', '', '', 'Incompleto', '0000-00-00', ''),
(34, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', '', '', 'Incompleto', '0000-00-00', ''),
(35, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', '', '', 'Incompleto', '0000-00-00', ''),
(36, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Bajo', 150000, 'sfsdfsdf', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', '', '', 'Incompleto', '2017-09-06', 'admin'),
(37, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', '', '', 'Incompleto', '0000-00-00', ''),
(38, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', '', '', 'Incompleto', '0000-00-00', ''),
(39, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', '', '', 'Incompleto', '0000-00-00', ''),
(40, 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'México', 'México', 'México', '18 - 26', '', 'Incorporacion Fiscal', '', 'Medio', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 'No', '', '', '', 'Incompleto', '2017-08-26', 'admin'),
(41, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', '', '', 'Incompleto', '0000-00-00', ''),
(42, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', '', '', 'Incompleto', '0000-00-00', ''),
(43, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', '', '', 'Incompleto', '0000-00-00', ''),
(44, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', '', '', 'Incompleto', '0000-00-00', ''),
(45, 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'México', 'México', 'México', '18 - 26', '', 'Asalariado', '', 'Medio', 5000, 'Empleo', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 'No', '', '', '', 'Finalizado', '2017-09-11', 'admin'),
(46, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', '', '', 'Incompleto', '0000-00-00', ''),
(47, 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'México', 'México', 'México', '27 - 36', '', 'Asalariado', '', 'Bajo', 5000, 'Empleo', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 'No', '', '', '', 'Finalizado', '2017-09-11', 'admin'),
(48, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Bajo', 5000, 'Empleo', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', '', '', 'Incompleto', '2017-09-11', 'admin'),
(49, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', '', '', 'Incompleto', '0000-00-00', ''),
(50, 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'México', 'México', 'México', '18 - 26', '', 'Asalariado', '', 'Medio', 5000, 'Empleo', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 'No', '', '', '', 'Finalizado', '2017-09-11', 'admin'),
(51, 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'México', 'México', 'México', '27 - 36', '', 'Servicios Profesionales', '', 'Medio', 5000, 'Empleo', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 'No', '', '', '', 'Finalizado', '2017-09-11', 'admin'),
(52, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', '', '', 'Incompleto', '0000-00-00', ''),
(53, 'Otra', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'México', 'México', 'México', '', '0 - 3', '', 'Regimen general de ley', 'Bajo', 15000, 'Instalacion de CCTV', 12000, 'Instalacion de cableado', 0, '', 0, '', 0, '', 0, '', 5000, 'Instalacion de radio bases', 0, '', 0, '', 0, '', 'No', '', '', '', 'Finalizado', '2017-09-18', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ins`
--

CREATE TABLE `ins` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `variable` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ins`
--

INSERT INTO `ins` (`id`, `label`, `variable`) VALUES
(0, 'Id', 'Id'),
(1, 'No. CLiente', 'Cliente'),
(2, 'Tipo de credito', 'TipoCredito'),
(3, 'Nombre', 'NomSolicitante'),
(4, 'RFC', 'RFCSolicitante'),
(5, 'Telefono', 'TelSolicitante'),
(6, 'Telefono Movil', 'MovSolicitante'),
(7, 'Direccion', 'DirSolicitante'),
(8, 'Colonia/Fraccionamiento', 'ColSolicitante'),
(9, 'Ciudad', 'CdSolicitante'),
(10, 'Lugar de Nacimiento', 'LugNacSolicitante'),
(12, 'Estado', 'EdoSolicitante'),
(13, 'Codigo Postal', 'CPSolicitante'),
(14, 'CURP', 'CURPSolicitante'),
(15, 'Email', 'EmailSolicitante'),
(178, 'Fax', 'FaxSolicitante'),
(17, 'Nombre/Razon social ', 'NomDatConEmp'),
(18, 'Telefono', 'TelDatConEmp'),
(19, 'Email', 'EmailDatConEmp'),
(20, 'RFC', 'RFCDatConEmp'),
(21, 'Fax', 'FaxDatConEmp'),
(22, 'Puesto', 'PuestDatConEmp'),
(23, 'Sexo', 'SexoDatGen'),
(24, 'Fecha de nacimiento', 'FeNacDatGen'),
(25, 'Edad', 'EdDatGen'),
(26, 'Nacionalidad', 'NaDatGen'),
(27, 'No. de Dependientes', 'NoDepDatGen'),
(28, 'Acredita domicilio', 'AcDomDatGen'),
(29, 'Vive en', 'VivDatGen'),
(30, 'Vive en(otro)', 'OtrvivDatGen'),
(31, 'Importe mensual de pago', 'ImpMenDatGen'),
(32, 'Propietario de inmueble', 'PropInmuDatGen'),
(33, 'Arraigo en domicilio', 'ArDomDatGen'),
(34, 'Años de residir', 'AnResDatGen'),
(35, 'Beneficiario ', 'BenDatGen'),
(36, 'Estado civil ', 'EstCivDatGen'),
(37, 'Auto propio', 'AuPropDatGen'),
(38, 'Marca y Tipo', 'MarDatGen'),
(39, 'Actividad principal', 'ActPrinDatGenPM'),
(40, 'Inicio de operaciones', 'IniOpDatGenPM'),
(41, 'Cantidad de personal ', 'CantPerDatGenPM'),
(42, 'Antiguedad', 'AntConsEmp'),
(43, 'Apoderado', 'ApoConsEmp'),
(44, 'Ocupacion', 'OcupDatEmp'),
(45, 'Puesto', 'PuestDatEmp'),
(46, 'Departamento/Area', 'DepDatEmp'),
(47, 'Desde el año', 'DesAnDatEmp'),
(48, 'Compañia', 'CompDatEmp'),
(49, 'Telefono', 'TelDatEmp'),
(50, 'Extencion', 'ExtDatEmp'),
(51, 'No. Empleados', 'NoEmDatEmp'),
(52, 'Giro', 'GiroDatEmp'),
(53, 'Domicilio del negocio', 'DomDatEmp'),
(54, 'Nombre', 'NomRefPer'),
(55, 'Parentesco', 'ParenRefPer'),
(56, 'Telefono', 'TelRefPer'),
(57, 'Nombre', 'NomRefPer2'),
(58, 'Parentesco', 'ParenRefPer2'),
(59, 'Telefono', 'TelRefPer2'),
(60, 'Banco', 'BancRefBan'),
(61, 'No. de Cuenta', 'NoTarRefBan'),
(62, 'Sucursal', 'SucRefBan'),
(63, 'Banco', 'BancRefBan2'),
(64, 'No. de Cuenta', 'NoTarRefBan2'),
(65, 'Fecha de apertura', 'FecApRefBan'),
(66, 'Sucursal', 'SucRefBan2'),
(67, 'Fecha apertura', 'FecApRefBan'),
(68, 'Empresa', 'EmpRefCom'),
(69, 'Antiguedad', 'AntRefCom'),
(70, 'Telefono', 'TelRefCom'),
(71, 'Empresa', 'EmpRefCom2'),
(72, 'Antiguedad', 'AntRefCom2'),
(73, 'Telefono', 'TelRefCom2'),
(74, 'Banco', 'BancCarDir'),
(75, 'No. de Cuenta', 'NoTarCarDir'),
(76, 'Nombre', 'NomDatCon'),
(77, 'Compañia', 'CompDatCon'),
(78, 'Puesto', 'PuestDatCon'),
(79, 'Nombre', 'NomObPerMor'),
(80, 'Direccion', 'DirObPerMor'),
(81, 'Colonia/Fraccionamiento', 'ColObPerMor'),
(82, 'Ciudad', 'CdObPerMor'),
(83, 'Lugar de nacimiento', 'LugNacObPerMor'),
(84, 'Estado', 'EdoObPerMor'),
(85, 'Codigo Postal', 'CPObPerMor'),
(86, 'RFC', 'RFCObPerMor'),
(87, 'Telefono', 'TelObPerMor'),
(88, 'Fax', 'FaxObPerMor'),
(89, 'Antiguedad', 'AntConsEmpPM'),
(90, 'Apoderado', 'ApoConsEmpPM'),
(91, 'Actividad principal', 'ActPrinDatGen'),
(92, 'Inicio de operaciones', 'IniOpDatGen'),
(93, 'Cantidad de personal ', 'CantPerDatGen'),
(94, 'Nombre', 'NomAccionista1'),
(95, 'RFC', 'RFCAccionista1'),
(96, '%', 'PorcentAccionista1'),
(97, 'Nombre', 'NomAccionista2'),
(98, 'RFC', 'RFCAccionista2'),
(99, '%', 'PorcentAccionista2'),
(100, 'Nombre', 'NomAccionista3'),
(101, 'RFC', 'RFCAccionista3'),
(102, '%', 'PorcentAccionista3'),
(103, 'Nombre', 'NomAccionista4'),
(104, 'RFC', 'RFCAccionista4'),
(105, '%', 'PorcentAccionista4'),
(106, 'Nombre', 'NomAccionistaPM1'),
(107, 'RFC', 'RFCAccionistaPM1'),
(108, '%', 'PorcentAccionistaPM1'),
(109, 'Nombre', 'NomAccionistaPM2'),
(110, 'RFC', 'RFCAccionistaPM2'),
(111, '%', 'PorcentAccionistaPM2'),
(112, 'Nombre', 'NomObSol'),
(113, 'RFC', 'RFCObSol'),
(114, 'Telefono', 'TelObSol'),
(115, 'Telefono Movil', 'MovObSol'),
(116, 'Direccion', 'DirObSol'),
(117, 'Colonia/Fraccionamiento', 'ColObSol'),
(118, 'Ciudad', 'CdObSol'),
(119, 'Lugar de nacimiento', 'LugNacObSol'),
(120, 'Propiedad', 'PropObSol'),
(121, 'Estado', 'EdoObSol'),
(122, 'Codigo Postal', 'CPObSol'),
(123, 'Email', 'EmailObSol'),
(124, 'Sexo', 'SexoObSol'),
(125, 'Fecha de nacimiento', 'FeNacObSol'),
(126, 'Edad', 'EdObSol'),
(127, 'CURP', 'CURPObSol'),
(128, 'Nombre', 'NomObSolPF'),
(129, 'Sexo', 'SexoObSolPF'),
(130, 'Fecha de nacimiento', 'FeNacObSolPF'),
(131, 'RFC', 'RFCObSolPF'),
(132, 'CURP', 'CURPObSolPF'),
(133, 'Edad', 'EdObSolPF'),
(134, 'Nombre', 'NomObSol2'),
(135, 'RFC', 'RFCObSol2'),
(136, 'Telefono', 'TelObSol2'),
(137, 'Telefono Movil', 'MovObSol2'),
(138, 'Direccion', 'DirObSol2'),
(139, 'Colonia/Fraccionamiento', 'ColObSol2'),
(140, 'Ciudad', 'CdObSol2'),
(141, 'Lugar de nacimiento', 'LugNacObSol2'),
(142, 'Propiedad', 'PropObSol2'),
(143, 'Estado', 'EdoObSol2'),
(144, 'Codigo Postal', 'CPObSol2'),
(145, 'Email', 'EmailObSol2'),
(146, 'Sexo', 'SexoObSol2'),
(147, 'Fecha de nacimiento', 'FeNacObSol2'),
(148, 'Edad', 'EdObSol2'),
(149, 'CURP', 'CURPObSol2'),
(150, 'Nombre', 'NomObSolPF2'),
(151, 'Sexo', 'SexoObSolPF2'),
(152, 'Fecha de nacimiento', 'FeNacObSolPF2'),
(153, 'RFC', 'RFCObSolPF2'),
(154, 'CURP', 'CURPObSolPF2'),
(155, 'Edad', 'EdObSolPF2'),
(156, 'Nombre', 'NomRepLegInvHist'),
(157, 'RFC', 'RFCRepLegInvHist'),
(158, 'Direccion', 'DirRepLegInvHist'),
(159, 'Colonia/Fraccionamiento', 'ColRepLegInvHist'),
(160, 'Ciudad', 'CdRepLegInvHist'),
(161, 'Estado', 'EdoRepLegInvHist'),
(162, 'Codigo Postal', 'CPRepLegInvHist'),
(163, 'Telefono', 'TelRepLegInHist'),
(164, 'Nombre', 'NomObSolPFInvHist'),
(165, 'RFC', 'RFCObSolPFInvHist'),
(166, 'Direccion', 'DirObSolPFInvHist'),
(167, 'Colonia/Fraccionamiento ', 'ColObSolPFInvHist'),
(168, 'Ciudad', 'CdObSolPFInvHist'),
(169, 'Estado', 'EdoObSolPFInvHist'),
(170, 'Codigo Postal', 'CPObSolPFInvHist'),
(171, 'Telefono', 'TelObSolPFInHist'),
(172, 'Fecha', 'Fecha'),
(173, 'Clave Concesionario', 'ClavConcesionario'),
(174, 'Nombre concesionario', 'NomConcesionario'),
(175, 'Nombre vendedor', 'NomVendedor'),
(176, 'Nombre Gerente gral.', 'NomGerenteGral'),
(177, 'Tipo de solicitud', 'TipoSolicitud'),
(16, 'Numero de Domicilio', 'NumDirSol'),
(11, 'Municipio', 'MunicipioSolicitante'),
(180, 'Numero de serie de la FIEL', 'NumSerieFIEL'),
(181, 'Domicilio donde labora', 'DomicilioLaboral'),
(182, 'Sueldo o ingreso mensual', 'SueldoSolicitante'),
(183, 'Actividad economica adicional', 'ActEcoAdicional'),
(184, 'Ingresos adicional mensual', 'IngAdMensualAprox'),
(185, 'INE', 'INESolicitante'),
(186, 'Adjunto de INE', 'Adjunta_INESolicitante'),
(187, 'Pasaporte o Cedula', 'Pasaporte_o_CedulaProfSolicitante'),
(188, 'Cartilla Militar', 'CartillaMilitarSolicitante'),
(189, 'Adjunto Cartilla', 'Adjunta_LicenciaConducirSolicitante'),
(190, 'Otra identificacion', 'OtraIdentSolicitante'),
(191, 'Adjunto de identificacion', 'Adjunta_OtraIdentSolicitante'),
(192, 'Especificacion de la identificacion', 'EspIdentSolicitante'),
(193, 'Cotejo vs Original', 'CotejoVsOriginal'),
(194, 'Adjunto de Curp', 'Adjunta_CURP_RFC_FEA'),
(195, 'Adjunto de CURP', 'Adjunta_ComprobanteDom'),
(196, 'Domicilio coincide con ID', 'DomicilioCoincideId'),
(197, 'Domicilio ', 'DomBeneficiario'),
(198, 'Colonia / Fraccionamiento', 'ColBeneficiario'),
(199, 'Codigo Postal', 'CPBeneficiario'),
(200, 'Pais', 'PaisBeneficiario'),
(201, 'Telefono', 'TelBeneficiario'),
(202, 'CURP', 'CURPBeneficiario'),
(203, 'RFC', 'RFCBeneficiario'),
(204, 'Parentesco', 'ParentescoBeneficiario'),
(205, 'Porcentaje', 'PorcientoBeneficiario'),
(206, 'Fecha de nacimiento', 'FeNacBeneficiario'),
(207, 'Municipio', 'MunBeneficiario'),
(208, 'Estado', 'EdoBeneficiario'),
(209, 'Estado civil', 'EdoCivilBeneficiario'),
(210, 'Sociedad conyugal', 'SoConBeneficiario'),
(211, 'Ocupacion o Profesion', 'OcuProfBeneficiario'),
(212, 'PEP''S', 'PEPSBeneficiario'),
(213, 'Origen de los recursos', 'OrigenRecBeneficiario'),
(214, 'Ingreso Comprobable(1)', 'PerTrans1'),
(215, 'Fuente', 'FuentePerTrans1'),
(216, 'Ingreso Comprobable(2)', 'PerTrans2'),
(217, 'Fuente', 'FuentePerTrans2'),
(218, 'Ingreso Comprobable(3)', 'PerTrans3'),
(219, 'Fuente', 'FuentePerTrans3'),
(220, 'Ingreso Comprobable(4)', 'PerTrans4'),
(221, 'Fuente', 'FuentePerTrans4'),
(222, 'Ingreso Comprobable(5)', 'PerTrans5'),
(223, 'Fuente', 'FuentePerTrans5'),
(224, 'Ingreso Comprobable(6)', 'PerTrans6'),
(225, 'Fuente', 'FuentePerTrans6'),
(226, 'Ingreso Comprobable(7)', 'PerTrans7'),
(227, 'Fuente', 'FuentePerTrans7'),
(228, 'Ingreso Comprobable(8)', 'PerTrans8'),
(229, 'Fuente', 'FuentePerTrans8'),
(230, 'Ingreso Comprobable(9)', 'PerTrans9'),
(231, 'Fuente', 'FuentePerTrans9'),
(232, 'Ingreso Comprobable(10)', 'PerTrans10'),
(233, 'Fuente', 'FuentePerTrans10'),
(234, 'Total de ingreso', 'TotalIngreso'),
(235, 'Valor del automovil', 'ValorAuto'),
(236, 'Enganche del automovil', 'EngAutomovil'),
(237, 'Porcentaje de enganche', 'PorEnganche'),
(238, 'Porcentaje de financiamiento', 'PorFinanciamiento'),
(239, 'Monto financiado', 'MontoFinanciado'),
(240, 'Plazo', 'Plazo'),
(241, 'Pago mensual esperado', 'PagoMensEsp'),
(242, 'PEP''S', 'PEPS'),
(243, 'Nombre', 'NombrePEPS'),
(244, 'Parentesco', 'ParentescoPEPS'),
(245, 'Puesto', 'PuestoPEPS'),
(246, 'Antiguedad objeto social', 'Antiguedad_ObjetoSocial'),
(247, 'Antiguedad cliente', 'Antiguedad_Cliente'),
(248, 'Naturaleza operaciones', 'Naturaleza_Operaciones'),
(249, 'Numero de beneficiarios', 'Numero_Beneficiarios'),
(250, 'Numero terceros relacionados', 'Numero_TercerosRelacionados'),
(251, 'PEP''S relacionados', 'PEPs_Relacionados'),
(252, 'Alerta reputacional', 'Alerta_Reputacional'),
(253, 'Volumen esperado', 'Volumen_Esperado'),
(254, 'Frecuencia esperada', 'Frecuencia_Esperada'),
(255, 'Instrumento monetario', 'Instrumento_Monetario'),
(256, 'Medios utilizados', 'Canales_MediosUtilizados'),
(257, 'Pais estado oficial', 'Pais_EstadoOficial'),
(258, 'Pais estado residencia', 'Pais_EstadoResidencia'),
(259, 'Pais estado operacion', 'Pais_EstadoOperacion'),
(260, 'Origen recursos', 'Origen_Recursos'),
(261, 'Destino', 'Destino_Recursos'),
(262, 'Pais estado residencia terceros', 'Pais_EstadoResidenciaTerceros'),
(179, 'B', 'Id'),
(263, 'Grado de riesgo', 'GradoRiesgo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log`
--

CREATE TABLE `log` (
  `Fecha_modificacion` datetime NOT NULL,
  `Responsable` varchar(50) NOT NULL,
  `Evento` varchar(50) NOT NULL,
  `Folio_Cliente` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pfa`
--

CREATE TABLE `pfa` (
  `Id` int(10) NOT NULL,
  `Folio_Cliente` varchar(50) NOT NULL,
  `NomSolicitante` varchar(50) NOT NULL,
  `SegNomSolicitante` varchar(50) NOT NULL,
  `ApPatSolicitante` varchar(50) NOT NULL,
  `ApMatSolicitante` varchar(50) NOT NULL,
  `RFCSolicitante` varchar(50) NOT NULL,
  `TelSolicitante` varchar(50) NOT NULL,
  `MovSolicitante` varchar(50) NOT NULL,
  `DirSolicitante` varchar(50) NOT NULL,
  `NumDirSol` varchar(20) NOT NULL,
  `ColSolicitante` varchar(50) NOT NULL,
  `CdSolicitante` varchar(50) NOT NULL,
  `LugNacSolicitante` varchar(50) NOT NULL,
  `EdoSolicitante` varchar(50) NOT NULL,
  `MunicipioSolicitante` varchar(20) NOT NULL,
  `CPSolicitante` int(10) NOT NULL,
  `CURPSolicitante` varchar(50) NOT NULL,
  `EmailSolicitante` varchar(50) NOT NULL,
  `SexoDatGen` varchar(50) NOT NULL,
  `FeNacDatGen` date NOT NULL,
  `EdDatGen` int(5) NOT NULL,
  `NaDatGen` varchar(50) NOT NULL,
  `NoDepDatGen` int(3) NOT NULL,
  `AcDomDatGen` varchar(50) NOT NULL,
  `VivDatGen` varchar(50) NOT NULL,
  `OtrDatGen` varchar(50) NOT NULL,
  `PropInmuDatGen` varchar(50) NOT NULL,
  `ArDomDatGen` int(50) NOT NULL,
  `AnResDatGen` int(50) NOT NULL,
  `NomBenDatGen` varchar(50) NOT NULL,
  `ApPatBenDatGen` varchar(50) NOT NULL,
  `ApMatBenDatGen` varchar(50) NOT NULL,
  `EstCivDatGen` varchar(50) NOT NULL,
  `AuPropDatGen` varchar(50) NOT NULL,
  `MarDatGen` varchar(50) NOT NULL,
  `Ocupacion_Profesion` varchar(20) NOT NULL,
  `PuestDatEmp` varchar(50) NOT NULL,
  `DepDatEmp` varchar(50) NOT NULL,
  `DesAnDatEmp` int(10) NOT NULL,
  `CompDatEmp` varchar(50) NOT NULL,
  `TelDatEmp` varchar(50) NOT NULL,
  `ExtDatEmp` int(10) NOT NULL,
  `DomicilioLaboral` varchar(20) NOT NULL,
  `NumSerieFIEL` varchar(20) NOT NULL,
  `SueldoSolicitante` varchar(20) NOT NULL,
  `ActEcoAdicional` varchar(20) NOT NULL,
  `IngAdMensualAprox` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pfa`
--

INSERT INTO `pfa` (`Id`, `Folio_Cliente`, `NomSolicitante`, `SegNomSolicitante`, `ApPatSolicitante`, `ApMatSolicitante`, `RFCSolicitante`, `TelSolicitante`, `MovSolicitante`, `DirSolicitante`, `NumDirSol`, `ColSolicitante`, `CdSolicitante`, `LugNacSolicitante`, `EdoSolicitante`, `MunicipioSolicitante`, `CPSolicitante`, `CURPSolicitante`, `EmailSolicitante`, `SexoDatGen`, `FeNacDatGen`, `EdDatGen`, `NaDatGen`, `NoDepDatGen`, `AcDomDatGen`, `VivDatGen`, `OtrDatGen`, `PropInmuDatGen`, `ArDomDatGen`, `AnResDatGen`, `NomBenDatGen`, `ApPatBenDatGen`, `ApMatBenDatGen`, `EstCivDatGen`, `AuPropDatGen`, `MarDatGen`, `Ocupacion_Profesion`, `PuestDatEmp`, `DepDatEmp`, `DesAnDatEmp`, `CompDatEmp`, `TelDatEmp`, `ExtDatEmp`, `DomicilioLaboral`, `NumSerieFIEL`, `SueldoSolicitante`, `ActEcoAdicional`, `IngAdMensualAprox`) VALUES
(1, 'PFA-001', 'Adrian', 'Eduardo', 'Mata', 'Martinez', '', '', '', 'sdfkjhk', '', 'kjhkjh', 'kjhkjh', 'kjhk', 'jhkj', 'sfsdfjh', 354654, 'KJHKJH', 'kjhkjhkjh@dfg.com', '', '0000-00-00', 27, 'lkjlkjl', 3, 'lkjlkjl', '', '', '', 2010, 20, 'Maria Guadalupe', 'Alradado ', 'Higareda', '', '', '', '', 'kkjh', 'kjhkj', 0, 'hkjh', '', 3213, 'kjhkh', 'N/A', '231321', 'kj', '0'),
(2, 'PFA-002', 'Adrian', 'Eduardo', 'Mata', 'Martinez', '3131313131313', '1313131313', '1313131313', 'sdfkjhk', 'sdfkjhk', 'kjhkjh', 'kjhkjh', 'kjhk', 'jhkj', 'sfsdfjh', 354654, 'KJHKJH', 'kjhkjhkjh@dfg.com', 'M', '1989-09-07', 27, 'lkjlkjl', 3, 'lkjlkjl', '1', '', '2', 2010, 20, 'Maria Guadalupe', 'Alradado ', 'Higareda', '2', '1', 'Atoz', 'kkjh', 'kkjh', 'kjhkj', 0, 'hkjh', '3331313131', 3213, 'kjhkh', 'N/A', '231321', 'kj', '0'),
(3, 'PFA-003', 'Adrian', 'Eduardo', 'Mata', 'Martinez', '3131313131313', '1313131313', '1313131313', 'sdfkjhk', 'sdfkjhk', 'kjhkjh', 'kjhkjh', 'kjhk', 'jhkj', 'sfsdfjh', 354654, 'KJHKJH', 'kjhkjhkjh@dfg.com', 'M', '1989-09-07', 27, 'lkjlkjl', 3, 'lkjlkjl', '1', '', '2', 2010, 20, 'Maria Guadalupe', 'Alradado ', 'Higareda', '2', '1', 'Atoz', 'kkjh', 'kkjh', 'kjhkj', 0, 'hkjh', '3331313131', 3213, 'kjhkh', 'N/A', '231321', 'kj', '0'),
(4, 'PFA-004', 'Kjhkjh', 'Kjh', 'Kjh', 'Kjh', 'KJHSKJSKHKHKH', '3131313132', '1321321321', 'dfgmbnb', '321321321', 'jhgjhg', 'jhgjh', 'gjh', 'gjh', 'dfgdfgd', 321321, 'GJH', 'werwer@dfg.com', 'Femenino', '1989-09-07', 27, 'sdfsdf', 3, 'jhjg', '1', '', '1', 321, 321, 'Hgjh', 'Jhgjhg', 'Jhgj', 'Casado Bienes Mancomunados', 'Si', 'jkhkj', 'hkjhkjh', 'hkjhkjh', 'kjhk', 0, 'hkj', '3151315151', 0, 'sdf', 'sdf', '0', 'sdf', '0');

--
-- Disparadores `pfa`
--
DELIMITER $$
CREATE TRIGGER `pfa_id` BEFORE INSERT ON `pfa` FOR EACH ROW BEGIN
    if (SELECT COUNT(*) FROM pfa)=0   THEN
        SET NEW.Folio_Cliente= 'PFA-001';
    else
        SET NEW.Folio_Cliente= CONCAT('PFA-', LPAD((select MAX(Id)+1 from pfa), 3, '0'));
  END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pfna`
--

CREATE TABLE `pfna` (
  `Id` int(10) NOT NULL,
  `Folio_Cliente` varchar(50) NOT NULL,
  `NomSolicitante` varchar(50) NOT NULL,
  `SegNomSolicitante` varchar(50) NOT NULL,
  `ApPatSolicitante` varchar(50) NOT NULL,
  `ApMatSolicitante` varchar(50) NOT NULL,
  `RFCSolicitante` varchar(50) NOT NULL,
  `TelSolicitante` varchar(50) NOT NULL,
  `MovSolicitante` varchar(50) NOT NULL,
  `DirSolicitante` varchar(50) NOT NULL,
  `NumDirSol` varchar(20) NOT NULL,
  `ColSolicitante` varchar(50) NOT NULL,
  `CdSolicitante` varchar(50) NOT NULL,
  `LugNacSolicitante` varchar(50) NOT NULL,
  `EdoSolicitante` varchar(50) NOT NULL,
  `MunicipioSolicitante` varchar(20) NOT NULL,
  `CpSolicitante` int(10) NOT NULL,
  `CURPSolicitante` varchar(50) NOT NULL,
  `EmailSolicitante` varchar(50) NOT NULL,
  `FaxSolicitante` varchar(50) NOT NULL,
  `SexoDatGen` varchar(50) NOT NULL,
  `FeNacDatGen` varchar(50) NOT NULL,
  `EdDatGen` varchar(50) NOT NULL,
  `NaDatGen` varchar(50) NOT NULL,
  `NoDepDatGen` varchar(50) NOT NULL,
  `AcDomDatGen` varchar(50) NOT NULL,
  `VivDatGen` varchar(20) NOT NULL,
  `ImpMenDatGen` varchar(50) NOT NULL,
  `PropInmuDatGen` varchar(20) NOT NULL,
  `ArDomDatGen` int(10) NOT NULL,
  `AnResDatGen` int(10) NOT NULL,
  `NomBenDatGen` varchar(50) NOT NULL,
  `ApPatBenDatGen` varchar(20) NOT NULL,
  `ApMatBenDatGen` varchar(20) NOT NULL,
  `EstCivDatGen` varchar(50) NOT NULL,
  `AuPropDatGen` varchar(20) NOT NULL,
  `MarDatGen` varchar(20) NOT NULL,
  `Ocupacion_Profesion` varchar(20) NOT NULL,
  `PuestDatEmp` varchar(20) NOT NULL,
  `DesAnDatEmp` varchar(20) NOT NULL,
  `CompDatEmp` varchar(20) NOT NULL,
  `TelDatEmp` varchar(20) NOT NULL,
  `NoEmDatEmp` int(10) NOT NULL,
  `ExtDatEmp` int(10) NOT NULL,
  `GiroDatEmp` varchar(20) NOT NULL,
  `DomicilioLaboral` varchar(20) NOT NULL,
  `NumSerieFIEL` varchar(20) NOT NULL,
  `SueldoSolicitante` varchar(20) NOT NULL,
  `ActEcoAdicional` varchar(20) NOT NULL,
  `IngAdMensualAprox` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Disparadores `pfna`
--
DELIMITER $$
CREATE TRIGGER `pfna_id` BEFORE INSERT ON `pfna` FOR EACH ROW BEGIN
    if (SELECT COUNT(*) FROM pfna)=0   THEN
        SET NEW.Folio_Cliente= 'PFNA-001';
    else
        SET NEW.Folio_Cliente= CONCAT('PFNA-', LPAD((select MAX(Id)+1 from pfna), 3, '0'));
  END IF;
END
$$
DELIMITER ;

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
(1, 'PM-001', 'sdfsdfsf', 'hsfskfhsdhsfk', 'khfsfjshkf', 'ksjdfhkjh', 'kjhkj', 'kjh', 'jhk', 'sdfsdf', 'jhkjh', 0, 'dsdsdhkfkf', 'sdfsdfsdf3', 'jhgsdfjhg', 'jhg', 'jhg', 'jhg', 'jhg', 'jhg', 'jh', 'gjh', 'gjh', 'gjh', 'M', 'dgdggdfg', '1989-09-07', '1', 'gjgfjgsfjh', 'hfjsfgjh', 'dfgdfgdfg', 'gjfbddjdgdjgd', 'dfgdfgdfg', 'dfg', 'dfgdf', 0, 'sfhsfjhgsg', 'gjhg', 'dfg', 0, 'jghj', '1989-09-07', 0, '1989-09-07', 'jhgjhg', 'jhg', 'ajsdfgjhgjhg', 'jhgjhgjh', 0, 'jhgj', 'hg', 0, 'jhg', 'jhg', 0, 'jhg', 'jh', 0, 'gj', 'hg', 0, 'jh', 'gjh', 0),
(2, 'PM-002', 'sdfsdfsf', 'hsfskfhsdhsfk', 'khfsfjshkf', 'ksjdfhkjh', 'kjhkj', 'kjh', 'jhk', 'sdfsdf', 'jhkjh', 0, 'dsdsdhkfkf', 'sdfsdfsdf', 'jhgsdfjhg', 'jhg', 'jhg', 'jhg', 'jhg', 'jhg', 'jh', 'gjh', 'gjh', 'gjh', 'M', 'dgdggdfg', '1989-09-07', '1', 'gjgfjgsfjh', 'hfjsfgjh', 'dfgdfgdfg', 'gjfbddjdgdjgd', 'dfgdfgdfg', 'dfg', 'dfgdf', 0, 'sfhsfjhgsg', 'gjhg', 'dfg', 0, 'jghj', '1989-09-07', 0, '1989-09-07', 'jhgjhg', 'jhg', 'ajsdfgjhgjhg', 'jhgjhgjh', 0, 'jhgj', 'hg', 0, 'jhg', 'jhg', 0, 'jhg', 'jh', 0, 'gj', 'hg', 0, 'jh', 'gjh', 0);

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `Id` int(10) NOT NULL,
  `Folio_Cliente` varchar(50) NOT NULL,
  `Fecha_apertura` date NOT NULL,
  `Fecha_Modificacion` date NOT NULL,
  `Responsable` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`Id`, `Folio_Cliente`, `Fecha_apertura`, `Fecha_Modificacion`, `Responsable`) VALUES
(1, 'PFA-001', '2017-06-16', '0000-00-00', ''),
(2, 'PFA-002', '2017-06-16', '0000-00-00', ''),
(3, 'PFA-003', '2017-06-16', '0000-00-00', ''),
(4, 'PFA-004', '2017-06-20', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registroxml`
--

CREATE TABLE `registroxml` (
  `id` int(11) NOT NULL,
  `Folio_Sol` varchar(20) NOT NULL,
  `PersonaRazonsoc` varchar(60) NOT NULL,
  `DirXML` varchar(100) NOT NULL,
  `Nombre` varchar(60) NOT NULL,
  `Clasificacion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registroxml`
--

INSERT INTO `registroxml` (`id`, `Folio_Sol`, `PersonaRazonsoc`, `DirXML`, `Nombre`, `Clasificacion`) VALUES
(198, '53', 'Adrian Eduardo Mata Martinez -Accionista2 ', 'xml/Adrian Eduardo Mata Martinez 2017-09-12.xml', 'Adrian Eduardo Mata Martinez', 'Accionista2'),
(199, '53', 'Maria Guadalupe Alvarado Higareda -Beneficiario ', 'xml/Maria Guadalupe Alvarado Higareda 2017-09-12.xml', 'Maria Guadalupe Alvarado Higareda', 'Beneficiario'),
(200, '51', 'Alejandro garcia alvarado -RefPer1 ', 'xml/Alejandro garcia alvarado 2017-09-12.xml', 'Alejandro garcia alvarado', 'RefPer1'),
(206, '53', 'Adrian  Eduardo Mata Martinez - MAMA890907CV5', 'xml/Adrian  Eduardo Mata Martinez 2017-09-12.xml', 'Adrian  Eduardo Mata Martinez', 'contempresa'),
(207, '53', 'Alejandro Ariel Garcia Alvarado -Accionista1 ', 'xml/Alejandro Ariel Garcia Alvarado 2017-09-12.xml', 'Alejandro Ariel Garcia Alvarado', 'Accionista1'),
(209, '53', 'Kevin Arturo Elisea Mazatan -Accionista3 ', 'xml/Kevin Arturo Elisea Mazatan 2017-09-12.xml', 'Kevin Arturo Elisea Mazatan', 'Accionista3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

CREATE TABLE `solicitudes` (
  `Id` int(6) NOT NULL,
  `FolioCliente` int(6) NOT NULL,
  `NomObSol` varchar(40) NOT NULL,
  `ApPatObSol` varchar(20) NOT NULL,
  `ApMatObSol` varchar(20) NOT NULL,
  `RFCObSol` varchar(13) NOT NULL,
  `TelObSol` varchar(11) NOT NULL,
  `MovObSol` varchar(11) NOT NULL,
  `DirObSol` varchar(50) NOT NULL,
  `CURPObSol` varchar(20) NOT NULL,
  `ColObSol` varchar(50) NOT NULL,
  `CdObSol` varchar(20) NOT NULL,
  `LugNacObSol` varchar(40) NOT NULL,
  `PropObSol` varchar(2) NOT NULL,
  `EdoObSol` varchar(30) NOT NULL,
  `CPObSol` varchar(7) NOT NULL,
  `EmailObSol` varchar(50) NOT NULL,
  `SexoObSol` varchar(10) NOT NULL,
  `FechNacObSol` date NOT NULL,
  `EdadObSol` varchar(2) NOT NULL,
  `NomObSol2` varchar(40) NOT NULL,
  `ApPatObSol2` varchar(20) NOT NULL,
  `ApMatObSol2` varchar(20) NOT NULL,
  `RFCObSol2` varchar(13) NOT NULL,
  `TelObSol2` varchar(11) NOT NULL,
  `MovObSol2` varchar(11) NOT NULL,
  `DirObSol2` varchar(50) NOT NULL,
  `CURPObSol2` varchar(20) NOT NULL,
  `ColObSol2` varchar(50) NOT NULL,
  `CdObSol2` varchar(20) NOT NULL,
  `LugNacObSol2` varchar(40) NOT NULL,
  `PropObSol2` varchar(2) NOT NULL,
  `EdoObSol2` varchar(30) NOT NULL,
  `CPObSol2` varchar(7) NOT NULL,
  `EmailObSol2` varchar(50) NOT NULL,
  `SexoObSol2` varchar(10) NOT NULL,
  `FechNacObSol2` date NOT NULL,
  `EdadObSol2` varchar(2) NOT NULL,
  `TipoCredito` varchar(50) NOT NULL,
  `MontoSolicitado` double NOT NULL,
  `Enganche` double NOT NULL,
  `PorEnganche` double NOT NULL,
  `PorFinanciamiento` double NOT NULL,
  `MontoFinanciado` double NOT NULL,
  `InteresAnual` double NOT NULL,
  `ComisionApertura` double NOT NULL,
  `PorComApertura` double NOT NULL,
  `SeguroAuto` double NOT NULL,
  `SeguroVida` double NOT NULL,
  `SeguroDesempleo` double NOT NULL,
  `Plazo` int(6) NOT NULL,
  `PagoMenEsp` double NOT NULL,
  `NomObSolPM` varchar(50) NOT NULL,
  `RFCObSolPM` varchar(13) NOT NULL,
  `TelObSolPM` varchar(11) NOT NULL,
  `Tel2ObSolPM` varchar(11) NOT NULL,
  `CPObSolPM` varchar(5) NOT NULL,
  `DirObSolPM` varchar(40) NOT NULL,
  `ColObSolPM` varchar(40) NOT NULL,
  `CdObSolPM` varchar(40) NOT NULL,
  `EstObSolPM` varchar(40) NOT NULL,
  `MunObSolPM` varchar(40) NOT NULL,
  `EmailObSolPM` varchar(60) NOT NULL,
  `AntObSolPM` varchar(3) NOT NULL,
  `ApoObSolPM` varchar(50) NOT NULL,
  `ActPrinObSolPM` varchar(40) NOT NULL,
  `FeIniOpObSolPM` date NOT NULL,
  `CantPerObSolPM` varchar(6) NOT NULL,
  `ClaveCon` varchar(6) NOT NULL,
  `NomCon` varchar(50) NOT NULL,
  `NomVend` varchar(50) NOT NULL,
  `GerenteGral` varchar(50) NOT NULL,
  `Fecha` date NOT NULL,
  `Status` varchar(20) NOT NULL,
  `StatusValidacion` varchar(10) NOT NULL,
  `GradoRiesgo` int(5) DEFAULT NULL,
  `Documentacion` int(5) DEFAULT NULL,
  `FechaModificacion` date NOT NULL,
  `ModPor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `solicitudes`
--

INSERT INTO `solicitudes` (`Id`, `FolioCliente`, `NomObSol`, `ApPatObSol`, `ApMatObSol`, `RFCObSol`, `TelObSol`, `MovObSol`, `DirObSol`, `CURPObSol`, `ColObSol`, `CdObSol`, `LugNacObSol`, `PropObSol`, `EdoObSol`, `CPObSol`, `EmailObSol`, `SexoObSol`, `FechNacObSol`, `EdadObSol`, `NomObSol2`, `ApPatObSol2`, `ApMatObSol2`, `RFCObSol2`, `TelObSol2`, `MovObSol2`, `DirObSol2`, `CURPObSol2`, `ColObSol2`, `CdObSol2`, `LugNacObSol2`, `PropObSol2`, `EdoObSol2`, `CPObSol2`, `EmailObSol2`, `SexoObSol2`, `FechNacObSol2`, `EdadObSol2`, `TipoCredito`, `MontoSolicitado`, `Enganche`, `PorEnganche`, `PorFinanciamiento`, `MontoFinanciado`, `InteresAnual`, `ComisionApertura`, `PorComApertura`, `SeguroAuto`, `SeguroVida`, `SeguroDesempleo`, `Plazo`, `PagoMenEsp`, `NomObSolPM`, `RFCObSolPM`, `TelObSolPM`, `Tel2ObSolPM`, `CPObSolPM`, `DirObSolPM`, `ColObSolPM`, `CdObSolPM`, `EstObSolPM`, `MunObSolPM`, `EmailObSolPM`, `AntObSolPM`, `ApoObSolPM`, `ActPrinObSolPM`, `FeIniOpObSolPM`, `CantPerObSolPM`, `ClaveCon`, `NomCon`, `NomVend`, `GerenteGral`, `Fecha`, `Status`, `StatusValidacion`, `GradoRiesgo`, `Documentacion`, `FechaModificacion`, `ModPor`) VALUES
(182, 134, 'qwer', 'Uhyu', 'poiuyt', 'MAMA890907CV4', '618-6516546', '616-5165166', 'sdfsdf', 'MAMA890907HDGTRD07', 'Rinconada Sol', 'Victoria de Durango', 'sdf', 'Si', 'Durango', '34228', 'sfsdf@sd.com', 'Femenino', '1989-09-07', '27', 'fghfgh', 'sdfsf', 'jhg', 'MAMA890907CV4', '618-3513546', '618-3543465', 'sdfsdf', 'MAMA890907HDGTRD07', 'Fidel Velázquez II', 'Victoria de Durango', 'sdfsf', 'Si', 'Durango', '34229', 'sdf@sdf.com', 'Femenino', '1989-09-07', '27', 'Crédito Simple de Nomina', 150000, 50000, 33.33, 66.67, 100, 91.7, 3, 3, 2000, 2000, 2000, 60, 4000, 'dgdgdfgd', 'MAMA890907CV4', '618-6516546', '618-6546461', '34220', 'ljlj lj 6454 ', 'Girasoles', 'Victoria de Durango', 'Durango', 'Durango', 'asd@sdf.com', '50', 'asd asd asd ad', 'asdad asd  asd ', '1989-09-07', '75', '0903', 'CONSENCIO', 'sdfsdf', 'sdfsdf', '2017-08-16', 'Finalizado', 'Pendiente', NULL, NULL, '2017-09-11', 'admin'),
(184, 203, 'Jose Guadalupe', 'alvarado', 'algo', 'MAMA890907CV4', '618-2222222', '618-3333333', 'julian vera  210', 'MAMA890907HDGTRD07', 'Juan Lira Bracho', 'Victoria de Durango', 'Mexico', 'Si', 'Durango', '34188', 'na@na.com', 'Masculino', '1966-11-11', '50', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 'Crédito Simple de Nomina', 151000, 0, 0, 0, 0, 91.7, 3, 3, 0, 2500, 2500, 60, 5000, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0903', 'VW', 'Eduardo Martinez', 'Silvia Mancinas', '2017-09-11', 'Finalizado', 'Pendiente', 51, 121, '2017-09-11', 'admin'),
(186, 207, 'Maria Guadalupe', 'alvarado', 'higareda', 'MAMA890907CV1', '618-9654654', '618-6546565', 'julian vera 210', 'MAMA890907HDGTRD01', 'Juan Lira Bracho', 'Victoria de Durango', 'Mexico', 'No', 'Durango', '34188', 'asdasd@sdf.com', 'Femenino', '1988-02-22', '29', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 'Auto Nuevo', 200000, 80000, 40, 60, 120, 12.2, 2, 2, 2500, 2500, 0, 60, 5000, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0903', 'VW', 'Eduardo Martinez', 'SilMan', '2017-09-12', 'Incompleto', 'Pendiente', 53, 125, '2017-09-15', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudpfa`
--

CREATE TABLE `solicitudpfa` (
  `Id` int(11) NOT NULL,
  `Folio_Sol` varchar(20) NOT NULL,
  `Folio_Cliente` varchar(20) NOT NULL,
  `TipoCredito` varchar(35) NOT NULL,
  `NomRefPer` varchar(20) NOT NULL,
  `ParenRefPer` varchar(20) NOT NULL,
  `TelRefPer` varchar(20) NOT NULL,
  `NomRefPer2` varchar(20) NOT NULL,
  `ParenRefPer2` varchar(20) NOT NULL,
  `TelRefPer2` varchar(20) NOT NULL,
  `BancRefBan` varchar(20) NOT NULL,
  `NoTarRefBan` varchar(20) NOT NULL,
  `BancCarDir` varchar(20) NOT NULL,
  `NoTarCarDir` varchar(20) NOT NULL,
  `NomDatCon` varchar(20) NOT NULL,
  `ApPatDatCon` varchar(20) NOT NULL,
  `ApMatDatCon` varchar(20) NOT NULL,
  `CompDatCon` varchar(20) NOT NULL,
  `PuestDatCon` varchar(20) NOT NULL,
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
  `Fecha` date NOT NULL,
  `ClavConcesionario` varchar(20) NOT NULL,
  `NomConcesionario` varchar(20) NOT NULL,
  `NomVendedor` varchar(20) NOT NULL,
  `NomGerenteGral` varchar(20) NOT NULL,
  `Comentarios` varchar(20) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `solicitudpfa`
--

INSERT INTO `solicitudpfa` (`Id`, `Folio_Sol`, `Folio_Cliente`, `TipoCredito`, `NomRefPer`, `ParenRefPer`, `TelRefPer`, `NomRefPer2`, `ParenRefPer2`, `TelRefPer2`, `BancRefBan`, `NoTarRefBan`, `BancCarDir`, `NoTarCarDir`, `NomDatCon`, `ApPatDatCon`, `ApMatDatCon`, `CompDatCon`, `PuestDatCon`, `NomObSol`, `ApPatObSol`, `ApMatObSol`, `RFCObSol`, `TelObSol`, `MovObSol`, `DirObSol`, `ColObSol`, `CdObSol`, `LugNacObSol`, `PropObSol`, `EdoObSol`, `CPObSol`, `EmailObSol`, `SexoObSol`, `FeNacObSol`, `EdObSol`, `CURPObSol`, `NomObSol2`, `ApPatObSol2`, `ApMatObSol2`, `RFCObSol2`, `TelObSol2`, `MovObSol2`, `DirObSol2`, `ColObSol2`, `CdObSol2`, `LugNacObSol2`, `PropObSol2`, `EdoObSol2`, `CPObSol2`, `EmailObSol2`, `SexoObSol2`, `FeNacObSol2`, `EdObSol2`, `CURPObSol2`, `Fecha`, `ClavConcesionario`, `NomConcesionario`, `NomVendedor`, `NomGerenteGral`, `Comentarios`, `Status`) VALUES
(7, 'SA-007', 'PFA-004', 'Crédito Simple de Nomina', 'Mnsdbfmnb', 'mnb', '3135135151', '', '', '', '', '', '', '', '', '', '', '', '', 'Kjhjhkjh', 'Kjhkj', 'Hkj', 'KHKHKHKHKHKHK', '3151616151', '6616121513', 'hkj', 'hkj', 'hkjh', 'kjh', '', 'kjhkjh', '32135', 'jhjhg@dfg.com', '', '1989-09-07', 321, 'JKJH', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', 0, '', '2017-07-03', 'sdfsdfkjh', 'kh', 'kjh', 'khkh', '', 'Pendiente'),
(8, 'SA-008', 'PFA-004', 'Crédito Simple de Nomina', 'Mnsdbfmnb', 'mnb', '3135135151', '', '', '', '', '', '', '', '', '', '', '', '', 'Kjhjhkjh', 'Kjhkj', 'Hkj', 'KHKHKHKHKHKHK', '3151616151', '6616121513', 'hkj', 'hkj', 'hkjh', 'kjh', '', 'kjhkjh', '32135', 'jhjhg@dfg.com', '', '1989-09-07', 321, 'JKJH', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', 0, '', '2017-07-03', 'sdfsdfkjh', 'kh', 'kjh', 'khkh', '', 'Pendiente'),
(9, 'SA-009', 'PFA-004', 'Crédito Simple de Nomina', 'Mnsdbfmnb', 'mnb', '3135135151', '', '', '', '', '', '', '', '', '', '', '', '', 'Kjhjhkjh', 'Kjhkj', 'Hkj', 'KHKHKHKHKHKHK', '3151616151', '6616121513', 'hkj', 'hkj', 'hkjh', 'kjh', '', 'kjhkjh', '32135', 'jhjhg@dfg.com', '', '1989-09-07', 321, 'JKJH', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', 0, '', '2017-07-03', 'sdfsdfkjh', 'kh', 'kjh', 'khkh', '', 'Pendiente'),
(10, 'SA-010', 'PFA-004', 'Crédito Simple de Nomina', 'Mnsdbfmnb', 'mnb', '3135135151', '', '', '', '', '', '', '', '', '', '', '', '', 'Kjhjhkjh', 'Kjhkj', 'Hkj', 'KHKHKHKHKHKHK', '3151616151', '6616121513', 'hkj', 'hkj', 'hkjh', 'kjh', '', 'kjhkjh', '32135', 'jhjhg@dfg.com', '', '1989-09-07', 321, 'JKJH', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', 0, '', '2017-07-03', 'sdfsdfkjh', 'kh', 'kjh', 'khkh', '', 'Pendiente'),
(11, 'SA-011', 'PFA-004', 'Auto Nuevo', 'Mnsdbfmnb', 'mnb', '3135135151', '', '', '', '', '', '', '', '', '', '', '', '', 'Kjhjhkjh', 'Kjhkj', 'Hkj', 'KHKHKHKHKHKHK', '3151616151', '6616121513', 'hkj', 'hkj', 'hkjh', 'kjh', '', 'kjhkjh', '32135', 'jhjhg@dfg.com', '', '1989-09-07', 321, 'JKJH', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', 0, '', '2017-07-03', 'sdfsdfkjh', 'kh', 'kjh', 'khkh', '', 'Pendiente'),
(12, 'SA-012', 'PFA-004', 'Auto Nuevo', 'Mnsdbfmnb', 'mnb', '3135135151', '', '', '', '', '', '', '', '', '', '', '', '', 'Kjhjhkjh', 'Kjhkj', 'Hkj', 'KHKHKHKHKHKHK', '3151616151', '6616121513', 'hkj', 'hkj', 'hkjh', 'kjh', '', 'kjhkjh', '32135', 'jhjhg@dfg.com', '', '1989-09-07', 321, 'JKJH', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', 0, '', '2017-07-03', 'sdfsdfkjh', 'kh', 'kjh', 'khkh', '', 'Pendiente'),
(13, 'SA-013', 'PFA-004', 'Auto Nuevo', 'Mnsdbfmnb', 'mnb', '3135135151', '', '', '', '', '', '', '', '', '', '', '', '', 'Kjhjhkjh', 'Kjhkj', 'Hkj', 'KHKHKHKHKHKHK', '3151616151', '6616121513', 'hkj', 'hkj', 'hkjh', 'kjh', '', 'kjhkjh', '32135', 'jhjhg@dfg.com', '', '1989-09-07', 321, 'JKJH', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', 0, '', '2017-07-03', 'sdfsdfkjh', 'kh', 'kjh', 'khkh', '', 'Pendiente'),
(14, 'SA-014', 'PFA-004', 'Auto Nuevo', 'Mnsdbfmnb', 'mnb', '3135135151', '', '', '', '', '', '', '', '', '', '', '', '', 'Kjhjhkjh', 'Kjhkj', 'Hkj', 'KHKHKHKHKHKHK', '3151616151', '6616121513', 'hkj', 'hkj', 'hkjh', 'kjh', '', 'kjhkjh', '32135', 'jhjhg@dfg.com', '', '1989-09-07', 321, 'JKJH', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', 0, '', '2017-07-03', 'sdfsdfkjh', 'kh', 'kjh', 'khkh', '', 'Pendiente'),
(15, 'SA-015', 'PFA-004', 'Crédito Simple de Nomina', 'Mnsdbfmnb', 'mnb', '3135135151', '', '', '', '', '', '', '', '', '', '', '', '', 'Kjhjhkjh', 'Kjhkj', 'Hkj', 'KHKHKHKHKHKHK', '3151616151', '6616121513', 'hkj', 'hkj', 'hkjh', 'kjh', '', 'kjhkjh', '32135', 'jhjhg@dfg.com', '', '1989-09-07', 321, 'JKJH', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', 0, '', '2017-07-04', 'sdfsdfkjh', 'kh', 'kjh', 'khkh', '', 'Pendiente'),
(16, 'SA-016', 'PFA-004', 'Crédito Simple de Nomina', 'Mnsdbfmnb', 'mnb', '3135135151', '', '', '', '', '', '', '', '', '', '', '', '', 'Kjhjhkjh', 'Kjhkj', 'Hkj', 'KHKHKHKHKHKHK', '3151616151', '6616121513', 'hkj', 'hkj', 'hkjh', 'kjh', '', 'kjhkjh', '32135', 'jhjhg@dfg.com', '', '1989-09-07', 321, 'JKJH', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', 0, '', '2017-07-04', 'sdfsdfkjh', 'kh', 'kjh', 'khkh', '', 'Pendiente');

--
-- Disparadores `solicitudpfa`
--
DELIMITER $$
CREATE TRIGGER `solicitudpfa_id` BEFORE INSERT ON `solicitudpfa` FOR EACH ROW BEGIN
    if (SELECT COUNT(*) FROM solicitudpfa)=0   THEN
        SET NEW.Folio_Sol= 'SA-001';
    else
        SET NEW.Folio_Sol= CONCAT('SA-', LPAD((select MAX(Id)+1 from solicitudpfa), 3, '0'));
  END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudpfna`
--

CREATE TABLE `solicitudpfna` (
  `Id` int(11) NOT NULL,
  `Folio_Sol` varchar(20) NOT NULL,
  `Folio_Cliente` varchar(20) NOT NULL,
  `TipoCredito` varchar(20) NOT NULL,
  `NomRefPer` varchar(20) NOT NULL,
  `ParenRefPer` varchar(20) NOT NULL,
  `TelRefPer` varchar(20) NOT NULL,
  `NomRefPer2` varchar(20) NOT NULL,
  `ParenRefPer2` varchar(20) NOT NULL,
  `TelRefPer2` varchar(20) NOT NULL,
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
  `NomDatCon` varchar(20) NOT NULL,
  `ApPatDatCon` varchar(20) NOT NULL,
  `ApMatDatCon` varchar(20) NOT NULL,
  `CompDatCon` varchar(20) NOT NULL,
  `PuestDatCon` varchar(20) NOT NULL,
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
  `Fecha` date NOT NULL,
  `ClavConcesionario` varchar(20) NOT NULL,
  `NomConcesionario` varchar(20) NOT NULL,
  `NomVendedor` varchar(20) NOT NULL,
  `NomGerenteGral` varchar(20) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Disparadores `solicitudpfna`
--
DELIMITER $$
CREATE TRIGGER `solicitudpfna_id` BEFORE INSERT ON `solicitudpfna` FOR EACH ROW BEGIN
    if (SELECT COUNT(*) FROM solicitudpfna)=0   THEN
        SET NEW.Folio_Sol= 'SN-001';
    else
        SET NEW.Folio_Sol= CONCAT('SN-', LPAD((select MAX(Id)+1 from solicitudpfna), 3, '0'));
  END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudpm`
--

CREATE TABLE `solicitudpm` (
  `Id` int(10) NOT NULL,
  `Folio_Sol` varchar(20) NOT NULL,
  `Folio_Cliente` varchar(20) NOT NULL,
  `TipoCredito` varchar(50) NOT NULL,
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
  `NomGerenteGral` varchar(20) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Comentarios` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `solicitudpm`
--

INSERT INTO `solicitudpm` (`Id`, `Folio_Sol`, `Folio_Cliente`, `TipoCredito`, `BancRefBan`, `NoTarRefBan`, `SucRefBan`, `FecApRefBan`, `BancRefBan2`, `NoTarRefBan2`, `SucRefBan2`, `FecApRefBan2`, `EmpRefCom`, `AntRefCom`, `TelRefCom`, `EmpRefCom2`, `AntRefCom2`, `TelRefCom2`, `BancCarDir`, `NoTarCarDir`, `NomObPerMor`, `DirObPerMor`, `ColObPerMor`, `CdObPerMor`, `LugNacObPerMor`, `EdoObPerMor`, `CPObPerMor`, `RFCObPerMor`, `TelObPerMor`, `FaxObPerMor`, `AntConsEmpPM`, `ApoConsEmpPM`, `ActPrinDatGen`, `IniOpDatGen`, `CantPerDatGen`, `NomAccionista1`, `RFCAccionista1`, `PorcentAccionista1`, `NomAccionista2`, `RFCAccionista2`, `PorcentAccionista2`, `NomAccionista3`, `RFCAccionista3`, `PorcentAccionista3`, `NomAccionista4`, `RFCAccionista4`, `PorcentAccionista4`, `NomAccionistaPM1`, `RFCAccionistaPM1`, `PorcentAccionistaPM1`, `NomAccionistaPM2`, `RFCAccionistaPM2`, `PorcentAccionistaPM2`, `NomObSol`, `ApPatObSol`, `ApMatObSol`, `RFCObSol`, `TelObSol`, `MovObSol`, `DirObSol`, `ColObSol`, `CdObSol`, `LugNacObSol`, `PropObSol`, `EdoObSol`, `CPObSol`, `EmailObSol`, `SexoObSol`, `FeNacObSol`, `EdObSol`, `CURPObSol`, `NomObSolPF`, `SexoObSolPF`, `FeNacObSolPF`, `RFCObSolPF`, `CURPObSolPF`, `EdObSolPF`, `NomObSol2`, `ApPatObSol2`, `ApMatObSol2`, `RFCObSol2`, `TelObSol2`, `MovObSol2`, `DirObSol2`, `ColObSol2`, `CdObSol2`, `LugNacObSol2`, `PropObSol2`, `EdoObSol2`, `CPObSol2`, `EmailObSol2`, `SexoObSol2`, `FeNacObSol2`, `EdObSol2`, `CURPObSol2`, `NomObSolPF2`, `SexoObSolPF2`, `FeNacObSolPF2`, `RFCObSolPF2`, `CURPObSolPF2`, `EdObSolPF2`, `Fecha`, `ClavConcesionario`, `NomConcesionario`, `NomVendedor`, `NomGerenteGral`, `Status`, `Comentarios`) VALUES
(1, 'SM-001', 'PM-001', 'Crédito Simple de Nomina', 'jhgjhg', 'jhgjh', 'gjhg', '1989-09-07', 'jhkjhk', 'jhkj', 'hkjh', '1989-09-07', 'kjh', 0, 'kjhkhkhkfk', 'kjhkjh', 0, 'khkhkhfkfk', 'kjsdhfkjh', 'kjh', 'kjhskdjfhk', 'jhsdfkjh', 'ksjdfhksjh', 'kjhk', 'jhgjh', 'jhkj', 0, 'k', 'khskhsdhkf', 'khdjhsfhsf', 'hksjh', 'kjhkjhkjh', 'kjhkjhkjh', '1989-09-07', 0, 'ajsdfgjhgjhg', 'jhgjhgjh', 0, 'jhgj', 'hg', 0, 'jhg', 'jhg', 0, 'jhg', 'jh', 0, 'gj', 'hg', 0, 'jh', 'gjh', 0, 'gjh', 'gjhgjhgjh', 'gjhgjh', 'k', 'fkshkfskfs', 'fkfsdkhfks', 'gjhgj', 'hgjhg', 'jhg', 'jhgjh', '1', 'jkjhg', 'jhgj', 'gjhgj', 'M', '1989-09-07', 0, 'jhg', 'dhfksjfhksfhk', 'F', '1989-09-07', 'jdjgmnb', 'mnbmdnbm', 0, 'nbmbmvbn', 'mnbmn', 'bmnb', 'jkjhfjdfshkh', 'hfjskjhkdf', 'sdksdkshks', 'mnbmn', 'bmnbm', 'nbm', 'nbmnb', 'Si', 'mjkjhg', 'jhgjgjhgj', 'hgjhgj', 'M', '1989-09-07', 0, 'jkkjhk', 'hdfkjshfkjshfkjsh', 'M', '1989-09-07', 'nbdfvnb', 'vnv', 0, '2017-06-19', 'nbv', 'nbvnb', 'vnbv', 'nbv', '', ''),
(2, 'SM-002', 'PM-002', 'Crédito Simple de Nomina', 'jhgjhg', 'jhgjh', 'gjhg', '1989-09-07', 'jhkjhk', 'jhkj', 'hkjh', '1989-09-07', 'kjh', 0, 'kjhkhkhkfk', 'kjhkjh', 0, 'khkhkhfkfk', 'kjsdhfkjh', 'kjh', 'kjhskdjfhk', 'jhsdfkjh', 'ksjdfhksjh', 'kjhk', 'jhgjh', 'jhkj', 0, 'k', 'khskhsdhkf', 'khdjhsfhsf', 'hksjh', 'kjhkjhkjh', 'kjhkjhkjh', '1989-09-07', 0, 'ajsdfgjhgjhg', 'jhgjhgjh', 0, 'jhgj', 'hg', 0, 'jhg', 'jhg', 0, 'jhg', 'jh', 0, 'gj', 'hg', 0, 'jh', 'gjh', 0, 'gjh', 'gjhgjhgjh', 'gjhgjh', 'k', 'fkshkfskfs', 'fkfsdkhfks', 'gjhgj', 'hgjhg', 'jhg', 'jhgjh', '1', 'jkjhg', 'jhgj', 'gjhgj', 'M', '1989-09-07', 0, 'jhg', 'dhfksjfhksfhk', 'F', '1989-09-07', 'jdjgmnb', 'mnbmdnbm', 0, 'nbmbmvbn', 'mnbmn', 'bmnb', 'jkjhfjdfshkh', 'hfjskjhkdf', 'sdksdkshks', 'mnbmn', 'bmnbm', 'nbm', 'nbmnb', 'Si', 'mjkjhg', 'jhgjgjhgj', 'hgjhgj', 'M', '1989-09-07', 0, 'jkkjhk', 'hdfkjshfkjshfkjsh', 'M', '1989-09-07', 'nbdfvnb', 'vnv', 0, '2017-06-19', 'nbv', 'nbvnb', 'vnbv', 'nbv', '', ''),
(3, 'SM-003', 'PM-001', 'Crédito Simple de Nomina', 'jhgjhg', 'jhgjh', 'gjhg', '1989-09-07', 'jhkjhk', 'jhkj', 'hkjh', '1989-09-07', 'kjh', 0, 'kjhkhkhkfk', 'kjhkjh', 0, 'khkhkhfkfk', 'kjsdhfkjh', 'kjh', 'kjhskdjfhk', 'jhsdfkjh', 'ksjdfhksjh', 'kjhk', 'jhgjh', 'jhkj', 0, 'k', 'khskhsdhkf', 'khdjhsfhsf', 'kjhkjhkjh', 'kjhkjhkjh', 'kjhkjhkjh', '1989-09-07', 0, 'ajsdfgjhgjhg', 'jhgjhgjh', 0, 'jhgj', 'jhgjhgjh', 0, 'jhg', 'jhgjhgjh', 0, 'jhg', 'jhgjhgjh', 0, 'gj', 'hg', 0, 'jh', 'gjh', 0, 'gjh', 'gjhgjhgjh', 'gjhgjh', 'k', 'fkshkfskfs', 'fkfsdkhfks', 'gjhgj', 'hgjhg', 'jhg', 'jhgjh', '1', 'jkjhg', 'jhgj', 'gjhgj', 'M', '1989-09-07', 0, 'jhg', 'dhfksjfhksfhk', 'M', '1989-09-07', 'jdjgmnb', 'mnbmdnbm', 0, 'nbmbmvbn', 'mnbmn', 'bmnb', 'jkjhfjdfshkh', 'hfjskjhkdf', 'sdksdkshks', 'mnbmn', 'bmnbm', 'nbm', 'nbmnb', 'Si', 'mjkjhg', 'jhgjgjhgj', 'hgjhgj', 'M', '1989-09-07', 0, 'jkkjhk', 'hdfkjshfkjshfkjsh', 'M', '1989-09-07', 'nbdfvnb', 'vnv', 0, '2017-06-19', 'nbv', 'nbvnb', 'vnbv', 'nbv', '', ''),
(4, 'SM-004', 'PM-001', 'Crédito Simple de Nomina', 'jhgjhg', 'jhgjh', 'gjhg', '1989-09-07', 'jhkjhk', 'jhkj', 'hkjh', '1989-09-07', 'kjh', 0, 'kjhkhkhkfk', 'kjhkjh', 0, 'khkhkhfkfk', 'kjsdhfkjh', 'kjh', 'kjhskdjfhk', 'jhsdfkjh', 'ksjdfhksjh', 'kjhk', 'jhgjh', 'jhkj', 0, 'k321321654321', 'khskhsdhkf', 'khdjhsfhsf', 'kjhkjhkjh', 'kjhkjhkjh', 'kjhkjhkjh', '1989-09-07', 0, 'ajsdfgjhgjhg', 'jhgjhgjh', 0, 'jhgj', 'jhgjhgjh', 0, 'jhg', 'jhgjhgjh', 0, 'jhg', 'jhgjhgjh', 0, 'gj', 'hg', 0, 'jh', 'gjh', 0, 'gjh', 'gjhgjhgjh', 'gjhgjh', 'k', 'fkshkfskfs', 'fkfsdkhfks', 'gjhgj', 'hgjhg', 'jhg', 'jhgjh', 'Si', 'jkjhg', 'jhgj', 'gjhgj', 'Masculino', '1989-09-07', 0, 'jhg', 'dhfksjfhksfhk', 'Masculino', '1989-09-07', 'jdjgmnb', 'mnbmdnbm', 0, 'nbmbmvbn', 'mnbmn', 'bmnb', 'jkjhfjdfshkh', 'hfjskjhkdf', 'sdksdkshks', 'mnbmn', 'bmnbm', 'nbm', 'nbmnb', 'Si', 'mjkjhg', 'jhgjgjhgj', 'hgjhgj', 'Masculino', '1989-09-07', 0, 'jkkjhk', 'hdfkjshfkjshfkjsh', 'Masculino', '1989-09-07', 'nbdfvnb', 'vnv', 0, '2017-06-19', 'nbv', 'nbvnb', 'vnbv', 'nbv', '', '');

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposcreditos`
--

CREATE TABLE `tiposcreditos` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `tasa` double NOT NULL,
  `Comision_Apertura` double NOT NULL,
  `Enganche` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tiposcreditos`
--

INSERT INTO `tiposcreditos` (`id`, `descripcion`, `tasa`, `Comision_Apertura`, `Enganche`) VALUES
(1, 'Auto Nuevo', 12.2, 2, 10),
(2, 'Auto Seminuevo', 18, 3, 10),
(3, 'Crédito Simple', 0, 3, 0),
(4, 'Crédito c/Garantia Hipotecaria', 0, 3, 0),
(5, 'Crédito Cuenta Corriente', 0, 3, 0),
(6, 'Fideicomiso', 0, 3, 0),
(7, 'Crédito Hipotecario', 0, 3, 0),
(8, 'Crédito Simple de Nomina', 91.7, 3, 0),
(9, 'Crédito Refaccionario', 0, 3, 0),
(10, 'Arrendamiento Financiero', 0, 3, 0),
(11, 'Factoraje', 0, 3, 0),
(12, 'Prestamo Quirografario', 0, 3, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `xml`
--

CREATE TABLE `xml` (
  `id` int(11) NOT NULL,
  `Folio_Sol` varchar(100) NOT NULL,
  `FechaConsulta` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `xml`
--

INSERT INTO `xml` (`id`, `Folio_Sol`, `FechaConsulta`) VALUES
(8, '29', '2017-09-04'),
(91, '36', '2017-09-06'),
(92, '37', '2017-09-06'),
(93, '38', '2017-09-06'),
(94, '39', '2017-09-06'),
(95, '40', '2017-09-06'),
(103, '41', '2017-09-11'),
(104, '44', '2017-09-11'),
(105, '45', '2017-09-11'),
(106, '47', '2017-09-12'),
(108, '48', '2017-09-12'),
(109, '50', '2017-09-12'),
(110, '51', '2017-09-12'),
(111, '53', '2017-09-12');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acceso`
--
ALTER TABLE `acceso`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`user`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comisionesyseguros`
--
ALTER TABLE `comisionesyseguros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `docu`
--
ALTER TABLE `docu`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gradoriesgo`
--
ALTER TABLE `gradoriesgo`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `pfa`
--
ALTER TABLE `pfa`
  ADD PRIMARY KEY (`Id`,`Folio_Cliente`);

--
-- Indices de la tabla `pfna`
--
ALTER TABLE `pfna`
  ADD PRIMARY KEY (`Id`,`Folio_Cliente`),
  ADD KEY `Folio_Cliente` (`Folio_Cliente`);

--
-- Indices de la tabla `pm`
--
ALTER TABLE `pm`
  ADD PRIMARY KEY (`Id`,`Folio_Cliente`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`Id`,`Folio_Cliente`),
  ADD UNIQUE KEY `folio` (`Folio_Cliente`),
  ADD KEY `Id` (`Id`);

--
-- Indices de la tabla `registroxml`
--
ALTER TABLE `registroxml`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `DirXML` (`DirXML`);

--
-- Indices de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Documentacion` (`Documentacion`),
  ADD KEY `GradoRiesgo` (`GradoRiesgo`);

--
-- Indices de la tabla `solicitudpfa`
--
ALTER TABLE `solicitudpfa`
  ADD PRIMARY KEY (`Id`,`Folio_Sol`);

--
-- Indices de la tabla `solicitudpfna`
--
ALTER TABLE `solicitudpfna`
  ADD PRIMARY KEY (`Id`,`Folio_Sol`);

--
-- Indices de la tabla `solicitudpm`
--
ALTER TABLE `solicitudpm`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`),
  ADD KEY `Folio_Sol` (`Folio_Sol`);

--
-- Indices de la tabla `tiposcreditos`
--
ALTER TABLE `tiposcreditos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `xml`
--
ALTER TABLE `xml`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Folio_Sol` (`Folio_Sol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acceso`
--
ALTER TABLE `acceso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221;
--
-- AUTO_INCREMENT de la tabla `comisionesyseguros`
--
ALTER TABLE `comisionesyseguros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `docu`
--
ALTER TABLE `docu`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
--
-- AUTO_INCREMENT de la tabla `gradoriesgo`
--
ALTER TABLE `gradoriesgo`
  MODIFY `Id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT de la tabla `pfa`
--
ALTER TABLE `pfa`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `pfna`
--
ALTER TABLE `pfna`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pm`
--
ALTER TABLE `pm`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `registroxml`
--
ALTER TABLE `registroxml`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;
--
-- AUTO_INCREMENT de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  MODIFY `Id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;
--
-- AUTO_INCREMENT de la tabla `solicitudpfa`
--
ALTER TABLE `solicitudpfa`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `solicitudpfna`
--
ALTER TABLE `solicitudpfna`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `solicitudpm`
--
ALTER TABLE `solicitudpm`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tiposcreditos`
--
ALTER TABLE `tiposcreditos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `xml`
--
ALTER TABLE `xml`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
