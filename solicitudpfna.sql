/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : controlcreditos

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-02-22 11:23:58
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `solicitudpfna`
-- ----------------------------
DROP TABLE IF EXISTS `solicitudpfna`;
CREATE TABLE `solicitudpfna` (
  `Folio_Sol` varchar(20) NOT NULL,
  `Folio_Cliente` varchar(20) NOT NULL,
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
  PRIMARY KEY (`Folio_Sol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of solicitudpfna
-- ----------------------------
DELIMITER ;;
CREATE TRIGGER `solicitudpfna_id` BEFORE INSERT ON `solicitudpfna` FOR EACH ROW BEGIN
    if (SELECT COUNT(*) FROM solicitudpfna)=0   THEN
        SET NEW.Folio_Cliente= 'SN-001';
    else
        SET NEW.Folio_Cliente= CONCAT('SN-', LPAD((select MAX(Id)+1 from solicitudpfna), 3, '0'));
  END IF;
END;;;
DELIMITER ;
