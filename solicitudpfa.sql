/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : controlcreditos

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-02-18 10:11:12
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `solicitudpfa`
-- ----------------------------
DROP TABLE IF EXISTS `solicitudpfa`;
CREATE TABLE `solicitudpfa` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
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
  `Status` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`,`Folio_Sol`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of solicitudpfa
-- ----------------------------
INSERT INTO `solicitudpfa` VALUES ('9', 'SA-001', 'PFA-001', 'Credit', 'ASD', 'ASD', '3132131313', 'SDFS', 'FSD', '3121321321', '321', '321', '321', '321', 'SDF', 'SDF', 'SDF', '321321', '321321', 'SDF', 'SDF', 'SDF', '1313132131321', '3131313131', '3131331313', '3213', '21321', '32132', '13213', 'Si', '321', '321321', '321SDF@G.COM', 'Masculino', '1989-09-07', '321', '32132', 'SDFS', 'SDF', 'SDF', '3313213213213', '2132131313', '1313131313', '321321', '32132', '1321', '321SDF', 'Si', '321', '3213', '21321@G.COM', 'Masculino', '1989-09-07', '321', '321', '2017-02-16', '132132132', '132', '132', '132', '', 'Pendiente');
INSERT INTO `solicitudpfa` VALUES ('10', 'SA-010', 'PFA-015', 'Credit', 'ASD', 'ASD', '3132131313', 'SDFS', 'FSD', '3121321321', '321', '321', '321', '321', 'SDF', 'SDF', 'SDF', '321321', '321321', 'SDF', 'SDF', 'SDF', '1313132131321', '3131313131', '3131331313', '3213', '21321', '32132', '13213', 'Si', '321', '321321', '321SDF@G.COM', 'Masculino', '1989-09-07', '321', '32132', 'SDFS', 'SDF', 'SDF', '3313213213213', '2132131313', '1313131313', '321321', '32132', '1321', '321SDF', 'Si', '321', '3213', '21321@G.COM', 'Masculino', '1989-09-07', '321', '321', '2017-02-16', '132132132', '132', '132', '132', '', 'Pendiente');
INSERT INTO `solicitudpfa` VALUES ('11', 'SA-011', 'PFA-016', 'Credit', 'ASD', 'ASD', '3132131313', 'SDFS', 'FSD', '3121321321', '321', '321', '321', '321', 'SDF', 'SDF', 'SDF', '321321', '321321', 'SDF', 'SDF', 'SDF', '1313132131321', '3131313131', '3131331313', '3213', '21321', '32132', '13213', 'Si', '321', '321321', '321SDF@G.COM', 'Masculino', '1989-09-07', '321', '32132', 'SDFS', 'SDF', 'SDF', '3313213213213', '2132131313', '1313131313', '321321', '32132', '1321', '321SDF', 'Si', '321', '3213', '21321@G.COM', 'Masculino', '1989-09-07', '321', '321', '2017-02-16', '132132132', '132', '132', '132', '', 'Pendiente');
INSERT INTO `solicitudpfa` VALUES ('12', 'SA-012', 'PFA-017', 'Credit', 'ASD', 'ASD', '3132131313', 'SDFS', 'FSD', '3121321321', '321', '321', '321', '321', 'SDF', 'SDF', 'SDF', '321321', '321321', 'SDF', 'SDF', 'SDF', '1313132131321', '3131313131', '3131331313', '3213', '21321', '32132', '13213', 'Si', '321', '321321', '321SDF@G.COM', 'Masculino', '1989-09-07', '321', '32132', 'SDFS', 'SDF', 'SDF', '3313213213213', '2132131313', '1313131313', '321321', '32132', '1321', '321SDF', 'Si', '321', '3213', '21321@G.COM', 'Masculino', '1989-09-07', '321', '321', '2017-02-16', '132132132', '132', '132', '132', '', 'Pendiente');
INSERT INTO `solicitudpfa` VALUES ('13', 'SA-013', 'PFA-018', 'Credit', 'ASD', 'ASD', '3132131313', 'SDFS', 'FSD', '3121321321', '321', '321', '321', '321', 'SDF', 'SDF', 'SDF', '321321', '321321', 'SDF', 'SDF', 'SDF', '1313132131321', '3131313131', '3131331313', '3213', '21321', '32132', '13213', 'Si', '321', '321321', '321SDF@G.COM', 'Masculino', '1989-09-07', '321', '32132', 'SDFS', 'SDF', 'SDF', '3313213213213', '2132131313', '1313131313', '321321', '32132', '1321', '321SDF', 'Si', '321', '3213', '21321@G.COM', 'Masculino', '1989-09-07', '321', '321', '2017-02-16', '132132132', '132', '132', '132', '', 'Pendiente');
INSERT INTO `solicitudpfa` VALUES ('14', 'SA-014', 'PFA-019', 'Credit', 'ASD', 'ASD', '3132131313', 'SDFS', 'FSD', '3121321321', '321', '321', '321', '321', 'SDF', 'SDF', 'SDF', '321321', '321321', 'SDF', 'SDF', 'SDF', '1313132131321', '3131313131', '3131331313', '3213', '21321', '32132', '13213', 'Si', '321', '321321', '321SDF@G.COM', 'Masculino', '1989-09-07', '321', '32132', 'SDFS', 'SDF', 'SDF', '3313213213213', '2132131313', '1313131313', '321321', '32132', '1321', '321SDF', 'Si', '321', '3213', '21321@G.COM', 'Masculino', '1989-09-07', '321', '321', '2017-02-16', '132132132', '132', '132', '132', '', 'Pendiente');
INSERT INTO `solicitudpfa` VALUES ('15', 'SA-015', 'PFA-020', 'Credit', 'ASD', 'ASD', '3132131313', 'SDFS', 'FSD', '3121321321', '321', '321', '321', '321', 'SDF', 'SDF', 'SDF', '321321', '321321', 'SDF', 'SDF', 'SDF', '1313132131321', '3131313131', '3131331313', '3213', '21321', '32132', '13213', 'Si', '321', '321321', '321SDF@G.COM', 'Masculino', '1989-09-07', '321', '32132', 'SDFS', 'SDF', 'SDF', '3313213213213', '2132131313', '1313131313', '321321', '32132', '1321', '321SDF', 'Si', '321', '3213', '21321@G.COM', 'Masculino', '1989-09-07', '321', '321', '2017-02-16', '132132132', '132', '132', '132', '', 'Pendiente');
INSERT INTO `solicitudpfa` VALUES ('16', 'SA-016', 'PFA-021', 'Credit', 'ASD', 'ASD', '3132131313', 'SDFS', 'FSD', '3121321321', '321', '321', '321', '321', 'SDF', 'SDF', 'SDF', '321321', '321321', 'SDF', 'SDF', 'SDF', '1313132131321', '3131313131', '3131331313', '3213', '21321', '32132', '13213', 'Si', '321', '321321', '321SDF@G.COM', 'Masculino', '1989-09-07', '321', '32132', 'SDFS', 'SDF', 'SDF', '3313213213213', '2132131313', '1313131313', '321321', '32132', '1321', '321SDF', 'Si', '321', '3213', '21321@G.COM', 'Masculino', '1989-09-07', '321', '321', '2017-02-16', '132132132', '132', '132', '132', '', 'Pendiente');
INSERT INTO `solicitudpfa` VALUES ('17', 'SA-017', 'PFA-016', 'Credit', 'ASD', 'ASD', '3132131313', 'SDFS', 'FSD', '3121321321', '321', '321', '321', '321', 'SDF', 'SDF', 'SDF', '321321', '321321', 'SDF', 'SDF', 'SDF', '1313132131321', '3131313131', '3131331313', '3213', '21321', '32132', '13213', 'Si', '321', '321321', '321SDF@G.COM', 'Masculino', '1989-09-07', '321', '32132', 'SDFS', 'SDF', 'SDF', '3313213213213', '2132131313', '1313131313', '321321', '32132', '1321', '321SDF', 'Si', '321', '3213', '21321@G.COM', 'Masculino', '1989-09-07', '321', '321', '2017-02-17', '132132132', '132', '132', '132', '', 'Pendiente');
INSERT INTO `solicitudpfa` VALUES ('18', 'SA-018', 'PFA-016', 'Credit', 'ASD', 'ASD', '3132131313', 'SDFS', 'FSD', '3121321321', '321', '321', '321', '321', 'SDF', 'SDF', 'SDF', '321321', '321321', 'SDF', 'SDF', 'SDF', '1313132131321', '3131313131', '3131331313', '3213', '21321', '32132', '13213', 'Si', '321', '321321', '321SDF@G.COM', 'Masculino', '1989-09-07', '321', '32132', 'SDFS', 'SDF', 'SDF', '3313213213213', '2132131313', '1313131313', '321321', '32132', '1321', '321SDF', 'Si', '321', '3213', '21321@G.COM', 'Masculino', '1989-09-07', '321', '321', '2017-02-17', '132132132', '132', '132', '132', '', 'Pendiente');
INSERT INTO `solicitudpfa` VALUES ('19', 'SA-019', 'PFA-022', 'Premium Credit', 'Kjhk', 'jhkjhkjh', '8898797979', 'Hkjhkj', 'hkjhk', '8978797979', '7yguyuttutyuy', 'tuyt', 'uytuy', 'tuytuyt', 'Uytuyt', 'Uytuyt', 'Uytuy', 'tuytu', 'ytuy', 'Tuytutyuyt', 'Uytuy', 'Tuyt', 'HGJGJGJGJGJGJ', '4646546546', '5465454654', 'uyt', 'uyt', 'uyt', 'uyt', 'Si', 'uytuytuytu', '32132', 'uyt@dsad.com', 'Masculino', '1988-07-09', '656', 'JHGJHGJ', 'Asdasd', 'Hgfhgf', 'Hgfhgfhg', 'GJHGJGJJJGJGJ', '6645465465', '4654654654', 'fhgf', 'hgf', 'hgf', 'hgf', 'Si', 'hgfhg', '3543213', 'hgf@f.com', 'Masculino', '1987-05-04', '57', 'JGJHGJH', '2017-02-17', '65465', '654', '654', '654654', '', 'Pendiente');
INSERT INTO `solicitudpfa` VALUES ('20', 'SA-020', 'PFA-023', 'Premium Credit', 'Kjhk', 'jhkjhkjh', '8898797979', 'Hkjhkj', 'hkjhk', '8978797979', '7yguyuttutyuy', 'tuyt', 'uytuy', 'tuytuyt', 'Uytuyt', 'Uytuyt', 'Uytuy', 'tuytu', 'ytuy', 'Tuytutyuyt', 'Uytuy', 'Tuyt', 'HGJGJGJGJGJGJ', '4646546546', '5465454654', 'uyt', 'uyt', 'uyt', 'uyt', 'Si', 'uytuytuytu', '32132', 'uyt@dsad.com', 'Masculino', '1988-07-09', '656', 'JHGJHGJ', 'Asdasd', 'Hgfhgf', 'Hgfhgfhg', 'GJHGJGJJJGJGJ', '6645465465', '4654654654', 'fhgf', 'hgf', 'hgf', 'hgf', 'Si', 'hgfhg', '3543213', 'hgf@f.com', 'Masculino', '1987-05-04', '57', 'JGJHGJH', '2017-02-17', '65465', '654', '654', '654654', '', 'Pendiente');
DELIMITER ;;
CREATE TRIGGER `solicitudpfa_id` BEFORE INSERT ON `solicitudpfa` FOR EACH ROW BEGIN
    if (SELECT COUNT(*) FROM solicitudpfa)=0   THEN
        SET NEW.Folio_Sol= 'SA-001';
    else
        SET NEW.Folio_Sol= CONCAT('SA-', LPAD((select MAX(Id)+1 from solicitudpfa), 3, '0'));
  END IF;
END;;;
DELIMITER ;
