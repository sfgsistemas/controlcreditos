/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : controlcreditos

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-02-22 11:13:33
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `pfna`
-- ----------------------------
DROP TABLE IF EXISTS `pfna`;
CREATE TABLE `pfna` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
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
  `EstCivDatGen` varchar(20) NOT NULL,
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
  `IngAdMensualAprox` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`,`Folio_Cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pfna
-- ----------------------------
INSERT INTO `pfna` VALUES ('1', '', '$nomsol', '$segnomsol', '$apepasol', '$apemasol', '$RFCSolicitante', '$TelSolicitante', '$MovSolicitante', '$dirsol', '$numeroDirSol', '$colsol', '$cdsol', '$lugnacsol', '$edosol', '$municipioSol', '0', '$curpsol', '$mailsol', '$MovSolicitante', '$SexoDatGen', '$FeNacDatGen', '$edsol', '$nacsol', '$depensol', '$acdomsol', '$VivDatGen', '$impmenpag', '$PropInmuDatGen', '0', '0', '$benesol3', '$benesol1', '$benesol2', '$EstCivDatGen', '$AuPropDatGen', '$MarDatGen', '$giroprof', '$puestosol', '$desdesol', '$compasol', '$TelDatEmp', '0', '0', '', '$domicilioLaboral', '$numSerieFiel', '$SueldoSolicitante', '$ActividadAdicional', '$IngAdMensualAprox');
INSERT INTO `pfna` VALUES ('2', 'PFNA-002', '$nomsol', '$segnomsol', '$apepasol', '$apemasol', '$RFCSolicitante', '$TelSolicitante', '$MovSolicitante', '$dirsol', '$numeroDirSol', '$colsol', '$cdsol', '$lugnacsol', '$edosol', '$municipioSol', '0', '$curpsol', '$mailsol', '$MovSolicitante', '$SexoDatGen', '$FeNacDatGen', '$edsol', '$nacsol', '$depensol', '$acdomsol', '$VivDatGen', '$impmenpag', '$PropInmuDatGen', '0', '0', '$benesol3', '$benesol1', '$benesol2', '$EstCivDatGen', '$AuPropDatGen', '$MarDatGen', '$giroprof', '$puestosol', '$desdesol', '$compasol', '$TelDatEmp', '0', '0', '', '$domicilioLaboral', '$numSerieFiel', '$SueldoSolicitante', '$ActividadAdicional', '$IngAdMensualAprox');
INSERT INTO `pfna` VALUES ('3', 'PFNA-003', 'Lkmlkmlkm', 'Lkml', 'Kmlkml', 'Kmlkm', 'LKLMLKMLMLMLM', '6464646564', '6464646464', '46546546546546', '546', '5465', '465', '465', '465', '654654', '46', '546', 'sdf@fgg.com', '6464646464', 'Masculino', '1989-09-07', '654', '654', '654', '654', 'Casa Propia', '65465', 'Si', '654654', '0', 'Maria Guadalupe', 'Alvarado', 'Higareda', 'Casado Bienes Mancom', 'Si', 'oijoij', 'ing telematico', '', '', 'jklnkjnkj', '5064654654', '0', '65465', '', '452', '64654', '456', '654', '654');
INSERT INTO `pfna` VALUES ('4', 'PFNA-004', 'Lkmlkmlkm', 'Lkml', 'Kmlkml', 'Kmlkm', 'LKLMLKMLMLMLM', '6464646564', '6464646464', '46546546546546', '546', '5465', '465', '465', '465', '654654', '46', '546', 'sdf@fgg.com', '6464646464', 'Masculino', '1989-09-07', '654', '654', '654', '654', 'Casa Propia', '65465', 'Si', '654654', '0', 'Maria Guadalupe', 'Alvarado', 'Higareda', 'Casado Bienes Mancom', 'Si', 'oijoij', 'ing telematico', '', '', 'jklnkjnkj', '5064654654', '0', '65465', '', '452', '64654', '456', '654', '654');
INSERT INTO `pfna` VALUES ('5', 'PFNA-005', 'Lkmlkmlkm', 'Lkml', 'Kmlkml', 'Kmlkm', 'LKLMLKMLMLMLM', '6464646564', '6464646464', '46546546546546', '546', '5465', '465', '465', '465', '654654', '46', '546', 'sdf@fgg.com', '6464646464', 'Masculino', '1989-09-07', '654', '654', '654', '654', 'Casa Propia', '65465', 'Si', '654654', '0', 'Maria Guadalupe', 'Alvarado', 'Higareda', 'Casado Bienes Mancom', 'Si', 'oijoij', 'ing telematico', '', '', 'jklnkjnkj', '5064654654', '0', '65465', '', '452', '64654', '456', '654', '654');
INSERT INTO `pfna` VALUES ('6', 'PFNA-006', '$nomsol', '$segnomsol', '$apepasol', '$apemasol', '$RFCSolicitante', '$TelSolicitante', '$MovSolicitante', '$dirsol', '$numeroDirSol', '$colsol', '$cdsol', '$lugnacsol', '$edosol', '$municipioSol', '0', '$curpsol', '$mailsol', '$MovSolicitante', '$SexoDatGen', '$FeNacDatGen', '$edsol', '$nacsol', '$depensol', '$acdomsol', '$VivDatGen', '$impmenpag', '$PropInmuDatGen', '0', '0', '$benesol3', '$benesol1', '$benesol2', '$EstCivDatGen', '$AuPropDatGen', '$MarDatGen', '$giroprof', '$depasol', '$desdesol', '$compasol', '$TelDatEmp', '0', '0', '', '$domicilioLaboral', '$numSerieFiel', '$SueldoSolicitante', '$ActividadAdicional', '$IngAdMensualAprox');
INSERT INTO `pfna` VALUES ('7', 'PFNA-007', 'Lkmlkmlkm', 'Lkml', 'Kmlkml', 'Kmlkm', 'LKLMLKMLMLMLM', '6464646564', '6464646464', '46546546546546', '546', '5465', '465', '465', '465', '654654', '46', '546', 'sdf@fgg.com', '6464646464', 'Masculino', '1989-09-07', '654', '654', '654', '654', 'Casa Propia', '65465', 'Si', '654654', '0', 'Maria Guadalupe', 'Alvarado', 'Higareda', 'Casado Bienes Mancom', 'Si', 'oijoij', 'ing telematico', 'desarrollo', '', 'jklnkjnkj', '5064654654', '0', '65465', '', '452', '64654', '456', '654', '654');
INSERT INTO `pfna` VALUES ('8', 'PFNA-008', 'Lkmlkmlkm', 'Lkml', 'Kmlkml', 'Kmlkm', 'LKLMLKMLMLMLM', '6464646564', '6464646464', '46546546546546', '546', '5465', '465', '465', '465', '654654', '46', '546', 'sdf@fgg.com', '6464646464', 'Masculino', '1989-09-07', '654', '654', '654', '654', 'Casa Propia', '65465', 'Si', '654654', '0', 'Maria Guadalupe', 'Alvarado', 'Higareda', 'Casado Bienes Mancom', 'Si', 'oijoij', 'ing telematico', 'desarrollo', '1989-09-07', 'jklnkjnkj', '5064654654', '0', '65465', '', '452', '64654', '456', '654', '654');
INSERT INTO `pfna` VALUES ('9', 'PFNA-009', 'Lkmlkmlkm', 'Lkml', 'Kmlkml', 'Kmlkm', 'LKLMLKMLMLMLM', '6464646564', '6464646464', '46546546546546', '546', '5465', '465', '465', '465', '654654', '46', '546', 'sdf@fgg.com', '6464646464', 'Masculino', '1989-09-07', '654', '654', '654', '654', 'Casa Propia', '65465', 'Si', '654654', '0', 'Maria Guadalupe', 'Alvarado', 'Higareda', 'Casado Bienes Mancom', 'Si', 'oijoij', 'ing telematico', 'desarrollo', '1989-09-07', 'jklnkjnkj', '5064654654', '0', '65465', 'kjhj', 'kljlk', '64654', '456', '654', '654');
INSERT INTO `pfna` VALUES ('10', 'PFNA-010', 'Lkmlkmlkm', 'Lkml', 'Kmlkml', 'Kmlkm', 'LKLMLKMLMLMLM', '6464646564', '6464646464', '46546546546546', '546', '5465', '465', '465', '465', '654654', '46', '546', 'sdf@fgg.com', '6464646464', 'Masculino', '1989-09-07', '654', '654', '654', '654', 'Casa Propia', '65465', 'Si', '654654', '0', 'Maria Guadalupe', 'Alvarado', 'Higareda', 'Casado Bienes Mancom', 'Si', 'oijoij', 'ing telematico', 'desarrollo', '1989-09-07', 'jklnkjnkj', '5064654654', '0', '65465', 'kjhj', 'kljlk', '64654', '456', '654', '654');
DELIMITER ;;
CREATE TRIGGER `pfna_id` BEFORE INSERT ON `pfna` FOR EACH ROW BEGIN
    if (SELECT COUNT(*) FROM pfna)=0   THEN
        SET NEW.Folio_Cliente= 'PFNA-001';
    else
        SET NEW.Folio_Cliente= CONCAT('PFNA-', LPAD((select MAX(Id)+1 from pfna), 3, '0'));
  END IF;
END;;;
DELIMITER ;
