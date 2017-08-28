/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : controlcreditos

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-02-18 10:11:04
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `pfa`
-- ----------------------------
DROP TABLE IF EXISTS `pfa`;
CREATE TABLE `pfa` (
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
  `IngAdMensualAprox` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`,`Folio_Cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pfa
-- ----------------------------
INSERT INTO `pfa` VALUES ('14', 'PFA-001', 'SDF', 'KJH', 'KJH', 'KJH', '3132131321313', '1312132131', '2121321321', 'ASD', '321321', '321', '321', '321321', '321', 'SDFSF', '321', '321', 'ASD@G.CPM', 'Masculino', '1989-09-07', '24', 'ASD', '321', '321', 'Casa Propia', '', 'Si', '321', '321', 'SD', 'ASD', 'ASD', 'Casado Bienes Mancomunados', 'Si', '321', '', '32132', '1321', '321', '321', '3132132132', '1321', '321321', 'xxxxxxx', '2000', 'No', '0.00');
INSERT INTO `pfa` VALUES ('15', 'PFA-015', 'SDF', 'KJH', 'KJH', 'KJH', '3132131321313', '1312132131', '2121321321', 'ASD', '321321', '321', '321', '321321', '321', 'SDFSF', '321', '321', 'ASD@G.CPM', 'Masculino', '1989-09-07', '24', 'ASD', '321', '321', 'Casa Propia', '', 'Si', '321', '321', 'SD', 'ASD', 'ASD', 'Casado Bienes Mancomunados', 'Si', '321', '', '32132', '1321', '321', '321', '3132132132', '1321', '321321', '', '', '', '');
INSERT INTO `pfa` VALUES ('16', 'PFA-016', 'SDF', 'KJH', 'KJH', 'KJH', '3132131321313', '1312132131', '2121321321', 'ASD', '321321', '321', '321', '321321', '321', 'SDFSF', '321', '321', 'ASD@G.CPM', 'Masculino', '1989-09-07', '24', 'ASD', '321', '321', 'Casa Propia', '', 'Si', '321', '321', 'SD', 'ASD', 'ASD', 'Casado Bienes Mancomunados', 'Si', '321', '', '32132', '1321', '321', '321', '3132132132', '1321', '321321', 'xxxxxxx', '2000', 'No', '0.00');
INSERT INTO `pfa` VALUES ('17', 'PFA-017', 'SDF', 'KJH', 'KJH', 'KJH', '3132131321313', '1312132131', '2121321321', 'ASD', '321321', '321', '321', '321321', '321', 'SDFSF', '321', '321', 'ASD@G.CPM', 'Masculino', '1989-09-07', '24', 'ASD', '321', '321', 'Casa Propia', '', 'Si', '321', '321', 'SD', 'ASD', 'ASD', 'Casado Bienes Mancomunados', 'Si', '321', '', '32132', '1321', '321', '321', '3132132132', '1321', '321321', '', '', '', '');
INSERT INTO `pfa` VALUES ('18', 'PFA-018', 'SDF', 'KJH', 'KJH', 'KJH', '3132131321313', '1312132131', '2121321321', 'ASD', '321321', '321', '321', '321321', '321', 'SDFSF', '321', '321', 'ASD@G.CPM', 'Masculino', '1989-09-07', '24', 'ASD', '321', '321', 'Casa Propia', '', 'Si', '321', '321', 'SD', 'ASD', 'ASD', 'Casado Bienes Mancomunados', 'Si', '321', '', '32132', '1321', '321', '321', '3132132132', '1321', '321321', '', '', '', '');
INSERT INTO `pfa` VALUES ('19', 'PFA-019', 'SDF', 'KJH', 'KJH', 'KJH', '3132131321313', '1312132131', '2121321321', 'ASD', '321321', '321', '321', '321321', '321', 'SDFSF', '321', '321', 'ASD@G.CPM', 'Masculino', '1989-09-07', '24', 'ASD', '321', '321', 'Casa Propia', '', 'Si', '321', '321', 'SD', 'ASD', 'ASD', 'Casado Bienes Mancomunados', 'Si', '321', '', '32132', '1321', '321', '321', '3132132132', '1321', '321321', '', '', '', '');
INSERT INTO `pfa` VALUES ('20', 'PFA-020', 'SDF', 'KJH', 'KJH', 'KJH', '3132131321313', '1312132131', '2121321321', 'ASD', '321321', '321', '321', '321321', '321', 'SDFSF', '321', '321', 'ASD@G.CPM', 'Masculino', '1989-09-07', '24', 'ASD', '321', '321', 'Casa Propia', '', 'Si', '321', '321', 'SD', 'ASD', 'ASD', 'Casado Bienes Mancomunados', 'Si', '321', '', '32132', '1321', '321', '321', '3132132132', '1321', '321321', '', '', '', '');
INSERT INTO `pfa` VALUES ('21', 'PFA-021', 'SDF', 'KJH', 'KJH', 'KJH', '3132131321313', '1312132131', '2121321321', 'ASD', '321321', '321', '321', '321321', '321', 'SDFSF', '321', '321', 'ASD@G.CPM', 'Masculino', '1989-09-07', '24', 'ASD', '321', '321', 'Casa Propia', '', 'Si', '321', '321', 'SD', 'ASD', 'ASD', 'Casado Bienes Mancomunados', 'Si', '321', '', '32132', '1321', '321', '321', '3132132132', '1321', '321321', '', '', '', '');
INSERT INTO `pfa` VALUES ('22', 'PFA-022', 'Knkjnkjn', 'Kjnkjn', 'Kjnkjn', 'Kjnk', 'JNKJNKJNKJNKJ', '2132131313', '1313131313', 'nmn', '321', 'kjhkjhk', 'jhkjh', 'kjhkj', 'hkjhkj', 'asdasd', '3213', 'JHGJHG', 'kb@g.com', 'Masculino', '1989-09-07', '27', 'sd', '3121', 'dasd', 'Casa Propia', '', 'Si', '321', '321', 'Jhkjh', 'Jkjhkjh', 'Kjhk', 'Casado Bienes Mancomunados', 'Si', 'kjhkjhk', '', 'kjhkjhk', 'jhkjh', '0', 'hkjh', '3455465464', '6546', 'sdasdasdasdkjhkjhkjh', 'asdasasd', '50000', 'kjhkjhkjh', '0000');
INSERT INTO `pfa` VALUES ('23', 'PFA-023', 'Knkjnkjn', 'Kjnkjn', 'Kjnkjn', 'Kjnk', 'JNKJNKJNKJNKJ', '2132131313', '1313131313', 'nmn', '321', 'kjhkjhk', 'jhkjh', 'kjhkj', 'hkjhkj', 'asdasd', '3213', 'JHGJHG', 'kb@g.com', 'Masculino', '1989-09-07', '27', 'sd', '3121', 'dasd', 'Casa Propia', '', 'Si', '321', '321', 'Jhkjh', 'Jkjhkjh', 'Kjhk', 'Casado Bienes Mancomunados', 'Si', 'kjhkjhk', '', 'kjhkjhk', 'asdas', '12321', 'hkjh', '3455465464', '6546', 'sdasdasdasdkjhkjhkjh', 'asdasasd', '50000', 'kjhkjhkjh', '0000');
DELIMITER ;;
CREATE TRIGGER `pfa_id` BEFORE INSERT ON `pfa` FOR EACH ROW BEGIN
    if (SELECT COUNT(*) FROM pfa)=0   THEN
        SET NEW.Folio_Cliente= 'PFA-001';
    else
        SET NEW.Folio_Cliente= CONCAT('PFA-', LPAD((select MAX(Id)+1 from pfa), 3, '0'));
  END IF;
END;;;
DELIMITER ;
