-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-01-2017 a las 22:52:59
-- Versión del servidor: 10.1.19-MariaDB
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;