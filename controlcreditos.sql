/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : controlcreditos

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-03-15 10:42:36
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `acceso`
-- ----------------------------
DROP TABLE IF EXISTS `acceso`;
CREATE TABLE `acceso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of acceso
-- ----------------------------
INSERT INTO `acceso` VALUES ('1', 'admin', 'admin', 'Administrador');

-- ----------------------------
-- Table structure for `clientes`
-- ----------------------------
DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  `RFC` varchar(255) NOT NULL,
  `Tel` varchar(255) NOT NULL,
  `Cel` varchar(255) NOT NULL,
  `Direccion` varchar(255) NOT NULL,
  `Numero` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Colonia` varchar(255) NOT NULL,
  `Ciudad` varchar(255) NOT NULL,
  `LugNacimiento` varchar(255) NOT NULL,
  `Estado` varchar(255) NOT NULL,
  `CP` varchar(255) NOT NULL,
  `CURP` varchar(255) NOT NULL,
  `Sexo` varchar(255) NOT NULL,
  `Nacimiento` varchar(255) NOT NULL,
  `Edad` varchar(255) NOT NULL,
  `Nacionalidad` varchar(255) NOT NULL,
  `Dependientes` varchar(255) NOT NULL,
  `AcreDom` varchar(255) NOT NULL,
  `Vivienda` varchar(255) NOT NULL,
  `Inmueble` varchar(255) NOT NULL,
  `AnResidirCD` varchar(255) NOT NULL,
  `ArraigoDomicilio` varchar(255) NOT NULL,
  `Beneficiario` varchar(255) NOT NULL,
  `EstadoCivil` varchar(255) NOT NULL,
  `AutoPropio` varchar(255) NOT NULL,
  `PuestoEmpleo` varchar(255) NOT NULL,
  `DepartamentoEmpleo` varchar(255) NOT NULL,
  `Desdean` varchar(255) NOT NULL,
  `Empresa` varchar(255) NOT NULL,
  `TelEmpleo` varchar(255) NOT NULL,
  `ExtensionEmpleo` varchar(255) NOT NULL,
  `TipoCliente` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of clientes
-- ----------------------------
INSERT INTO `clientes` VALUES ('5', 'Adrian Eduardo Mata Martinez', 'MAMA890907CV4', '6181949311', '6183030413', 'Operadores', '222', 'zoomwas@hotmail.com', 'Fidel Velazquez 1', 'Durango', 'México', 'Durango', '34229', 'MAMA890907HDGTR07', 'Masculino', '1989-09-07', '27', 'Mexicana', '3', 'Recibo', 'Casa propiedad de sus familiares', 'Si', '25', '2010', 'Maria Guadalupe Alvarado Higareda', 'Casado Bienes Separados', 'Si', 'Desarrollo', 'Administración', '2016', 'Volkswagen', '6189999999', '144', 'PFA');
INSERT INTO `clientes` VALUES ('9', 'Adrian Mata Martinez', 'MAMA890907CV4', '6181949311', '6183030413', 'operadores', '222', 'zoomwas@hotmail.com', 'Fidel Velazquez 1', 'Durango', 'Mexico', 'Durango', '34229', 'MAMA890907HDGTR07', 'Masculino', '1989-09-07', '27', 'Mexicana', '3', 'Recibo', 'Con familiares', 'Si', '25', '2000', 'Maria Guadalupe Alvarado Higareda', 'Casado Bienes Separados', 'Si', 'desarrollo', '', '2016', 'GAMA', '6183030413', '144', 'PFNA');
INSERT INTO `clientes` VALUES ('10', 'Sdf Sdf Sdf ', '6464646464646', '4546464646', '4546654545', '465465', '4654', 'z@g.com', '654', '6546', '465', '5465', '465', '4654', 'Masculino', '06-05-06-198', '321', '321', '321', '32', 'Rentada', 'Si', '213', '13', '321 Sdf Sdf', 'Casado Bienes Mancomunados', 'Si', '32', '', '13', '13', '3132132131', '321', 'PFNA');
INSERT INTO `clientes` VALUES ('11', 'Sdf Sdf Sdf ', '6464646464646', '4546464646', '4546654545', '465465', '4654', 'z@g.com', '654', '6546', '465', '5465', '465', '4654', 'Masculino', '06-05-06-198', '321', '321', '321', '32', 'Rentada', 'Si', '213', '13', '321 Sdf Sdf', 'Casado Bienes Mancomunados', 'Si', '32', '', '13', '13', '3132132131', '321', 'PFNA');
INSERT INTO `clientes` VALUES ('12', 'Sdf Sdf Sdf ', '6464646464646', '4546464646', '4546654545', '465465', '4654', 'z@g.com', '654', '6546', '465', '5465', '465', '4654', 'Masculino', '198-05-06-06', '321', '321', '321', '32', 'Rentada', 'Si', '213', '13', '321 Sdf Sdf', 'Casado Bienes Mancomunados', 'Si', '32', '', '13', '13', '3132132131', '321', 'PFNA');
INSERT INTO `clientes` VALUES ('13', 'Sdf Sdf Sdf ', '6464646464646', '4546464646', '4546654545', '465465', '4654', 'z@g.com', '654', '6546', '465', '5465', '465', '4654', 'Masculino', '1989-5-06-06', '321', '321', '321', '32', 'Rentada', 'Si', '213', '13', '321 Sdf Sdf', 'Casado Bienes Mancomunados', 'Si', '32', '', '13', '13', '3132132131', '321', 'PFNA');
INSERT INTO `clientes` VALUES ('14', 'Sdf Sdf Sdf ', '6464646464646', '4546464646', '4546654545', '465465', '4654', 'z@g.com', '654', '6546', '465', '5465', '465', '4654', 'Masculino', '1989-05-06-06', '321', '321', '321', '32', 'Rentada', 'Si', '213', '13', '321 Sdf Sdf', 'Casado Bienes Mancomunados', 'Si', '32', '', '13', '13', '3132132131', '321', 'PFNA');
INSERT INTO `clientes` VALUES ('15', 'Sdf Sdf Sdf ', '6464646464646', '4546464646', '4546654545', '465465', '4654', 'z@g.com', '654', '6546', '465', '5465', '465', '4654', 'Masculino', '1989-05-06', '321', '321', '321', '32', 'Rentada', 'Si', '213', '13', '321 Sdf Sdf', 'Casado Bienes Mancomunados', 'Si', '32', '', '13', '13', '3132132131', '321', 'PFNA');
INSERT INTO `clientes` VALUES ('16', 'Sdf Sdf Sdf ', '6464646464646', '4546464646', '4546654545', '465465', '4654', 'z@g.com', '654', '6546', '465', '5465', '465', '4654', 'Masculino', '1989-05-06', '321', '321', '321', '32', 'Rentada', 'Si', '213', '13', '321 Sdf Sdf', 'Casado Bienes Mancomunados', 'Si', '32', '', '13', '13', '3132132131', '321', 'PFNA');
INSERT INTO `clientes` VALUES ('17', 'Sdf Sdf Sdf ', '6464646464646', '4546464646', '4546654545', '465465', '4654', 'z@g.com', '654', '6546', '465', '5465', '465', '4654', 'Masculino', '1989-05-06', '321', '321', '321', '32', 'Rentada', 'Si', '213', '13', '321 Sdf Sdf', 'Casado Bienes Mancomunados', 'Si', '32', '', '1989', '13', '3132132131', '321', 'PFNA');
INSERT INTO `clientes` VALUES ('18', 'Sdf Sdf Sdf ', '6464646464646', '4546464646', '4546654545', '465465', '4654', 'z@g.com', '654', '6546', '465', '5465', '465', '4654', 'Masculino', '1989-05-06', '321', '321', '321', '32', 'Rentada', 'Si', '213', '13', '321 Sdf Sdf', 'Casado Bienes Mancomunados', 'Si', '32', '', '1989', '13', '3132132131', '321', 'PFNA');
INSERT INTO `clientes` VALUES ('19', 'Sdf Sdf Sdf ', '6464646464646', '4546464646', '4546654545', '465465', '4654', 'z@g.com', '654', '6546', '465', '5465', '465', '4654', 'Masculino', '1989-05-06', '321', '321', '321', '32', 'Rentada', 'Si', '213', '13', '321 Sdf Sdf', 'Casado Bienes Mancomunados', 'Si', '32', '', '1989', '13', '3132132131', '321', 'PFNA');
INSERT INTO `clientes` VALUES ('20', '  ', '', '', '', '', '', '', '', '', '', '', '', '', '', '--', '', '', '', '', '', '', '', '', '  ', '', '', '', '', '', '', '', '', 'PFNA');
INSERT INTO `clientes` VALUES ('21', 'Asd Asd Asd ', '3131313131321', '3213213131', '3133213212', '321', '321', 'asd@gf.com', '321', '321', '3213', '321', '21321', '321321', 'Masculino', '1989-01-31', '321', '321', '321', '321', 'Casa Propia', 'No', '321', '321', 'Asd Asd Asd', 'Casado Bienes Separados', 'Si', 'asd', '', '1989', 'asd', '3313313113', '321', 'PFNA');
INSERT INTO `clientes` VALUES ('22', 'Asd Asd Asd ', '3131313131321', '3213213131', '3133213212', '321', '321', 'asd@gf.com', '321', '321', '3213', '321', '21321', '321321', 'Masculino', '1989-01-31', '321', '321', '321', '321', 'Casa Propia', 'No', '321', '321', 'Asd Asd Asd', 'Casado Bienes Separados', 'Si', 'asd', '', '1989', 'asd', '3313313113', '321', 'PFNA');
INSERT INTO `clientes` VALUES ('23', 'Asd Asd Asd ', '3131313131321', '3213213131', '3133213212', '321', '321', 'asd@gf.com', '321', '321', '3213', '321', '21321', '321321', 'Masculino', '1989-01-31', '321', '321', '321', '321', 'Casa Propia', 'No', '321', '321', 'Asd Asd Asd', 'Casado Bienes Separados', 'Si', 'asd', '', '1989', 'asd', '3313313113', '321', 'PFNA');
INSERT INTO `clientes` VALUES ('24', 'Asd Asd Asd ', '3131313131321', '3213213131', '3133213212', '321', '321', 'asd@gf.com', '321', '321', '3213', '321', '21321', '321321', 'Masculino', '1989-01-31', '321', '321', '321', '321', 'Casa Propia', 'No', '321', '321', 'Asd Asd Asd', 'Casado Bienes Separados', 'Si', 'asd', '', '1989', 'asd', '3313313113', '321', 'PFNA');
INSERT INTO `clientes` VALUES ('25', '  ', '', '', '', '', '', '', '', '', '', '', '', '', '', '--', '', '', '', '', '', '', '', '', '  ', '', '', '', '', '', '', '', '', 'PFA');
INSERT INTO `clientes` VALUES ('26', '  ', '', '', '', '', '', '', '', '', '', '', '', '', '', '--', '', '', '', '', '', '', '', '', '  ', '', '', '', '', '', '', '', '', 'PFA');
INSERT INTO `clientes` VALUES ('27', 'Lkm Lkm Lkm ', '2313131313131', '3123312131', '2233131313', 'df', '32132', 'z@f.com', '321', '3213', '21321', '3213', '21321', '3213', 'Masculino', '--', '32', 'sdf', '321', '231321', 'Casa Propia', 'Si', '321', '321321', 'Sdf Sdf Sd', 'Casado Bienes Mancomunados', 'Si', '321321', '32132', '1321', '32132', '1313131321', '321321', 'PFA');
INSERT INTO `clientes` VALUES ('28', 'Lkm Lkm Lkm ', '2313131313131', '3123312131', '2233131313', 'df', '32132', 'z@f.com', '321', '3213', '21321', '3213', '21321', '3213', 'Masculino', '1989-09-07', '32', 'sdf', '321', '231321', 'Casa Propia', 'Si', '321', '321321', 'Sdf Sdf Sd', 'Casado Bienes Mancomunados', 'Si', '321321', '32132', '1321', '32132', '1313131321', '321321', 'PFA');
INSERT INTO `clientes` VALUES ('29', 'Lkm Lkm Lkm ', '2313131313131', '3123312131', '2233131313', 'df', '32132', 'z@f.com', '321', '3213', '21321', '3213', '21321', '3213', 'Masculino', '1989-09-07', '32', 'sdf', '321', '231321', 'Casa Propia', 'Si', '321', '321321', 'Sdf Sdf Sd', 'Casado Bienes Mancomunados', 'Si', '321321', '32132', '1321', '32132', '1313131321', '321321', 'PFA');
INSERT INTO `clientes` VALUES ('30', 'Lkm Lkm Lkm ', '2313131313131', '3123312131', '2233131313', 'df', '32132', 'z@f.com', '321', '3213', '21321', '3213', '21321', '3213', 'Masculino', '1989-09-07', '32', 'sdf', '321', '231321', 'Casa Propia', 'Si', '321', '321321', 'Sdf Sdf Sd', 'Casado Bienes Mancomunados', 'Si', '321321', '32132', '1321', '32132', '1313131321', '321321', 'PFA');
INSERT INTO `clientes` VALUES ('31', 'Lkm Lkm Lkm ', '2313131313131', '3123312131', '2233131313', 'df', '32132', 'z@f.com', '321', '3213', '21321', '3213', '21321', '3213', 'Masculino', '1989-09-07', '32', 'sdf', '321', '231321', 'Casa Propia', 'Si', '321', '321321', 'Sdf Sdf Sd', 'Casado Bienes Mancomunados', 'Si', '321321', '32132', '1321', '32132', '1313131321', '321321', 'PFA');
INSERT INTO `clientes` VALUES ('32', 'Lkm Lkm Lkm ', '2313131313131', '3123312131', '2233131313', 'df', '222', 'z@f.com', '321', '3213', '21321', '3213', '21321', '3213', 'Masculino', '1989-09-07', '32', 'sdf', '321', '231321', 'Casa Propia', 'Si', '321', '321321', 'Sdf Sdf Sd', 'Casado Bienes Mancomunados', 'Si', '321321', '32132', '1321', '32132', '1313131321', '321321', 'PFA');
INSERT INTO `clientes` VALUES ('33', 'Lkm Lkm Lkm ', '2313131313131', '3123312131', '2233131313', 'df', '222', 'z@f.com', '321', '3213', '21321', '3213', '21321', '3213', 'Masculino', '1989-09-07', '32', 'sdf', '321', '231321', 'Casa Propia', 'Si', '321', '321321', 'Sdf Sdf Sd', 'Casado Bienes Mancomunados', 'Si', '321321', '32132', '1321', '32132', '1313131321', '321321', 'PFA');
INSERT INTO `clientes` VALUES ('34', 'Lkm Lkm Lkm ', '2313131313131', '3123312131', '2233131313', 'df', '222', 'z@f.com', '321', '3213', '21321', '3213', '21321', '3213', 'Masculino', '1989-09-07', '32', 'sdf', '321', '231321', 'Casa Propia', 'Si', '321', '321321', 'Sdf Sdf Sd', 'Casado Bienes Mancomunados', 'Si', '321321', '32132', '1321', '32132', '1313131321', '321321', 'PFA');
INSERT INTO `clientes` VALUES ('35', 'Lkm Lkm Lkm ', '2313131313131', '3123312131', '2233131313', 'df', '222', 'z@f.com', '321', '3213', '21321', '3213', '21321', '3213', 'Masculino', '1989-09-07', '32', 'sdf', '321', '231321', 'Casa Propia', 'Si', '321', '321321', 'Sdf Sdf Sd', 'Casado Bienes Mancomunados', 'Si', '321321', '32132', '1321', '32132', '1313131321', '321321', 'PFA');
INSERT INTO `clientes` VALUES ('36', 'Lkm Lkm Lkm ', '2313131313131', '3123312131', '2233131313', 'df', '222', 'z@f.com', '321', '3213', '21321', '3213', '21321', '3213', 'Masculino', '1989-09-07', '32', 'sdf', '321', '231321', 'Casa Propia', 'Si', '321', '321321', 'Sdf Sdf Sd', 'Casado Bienes Mancomunados', 'Si', '321321', '32132', '1321', '32132', '1313131321', '321321', 'PFA');
INSERT INTO `clientes` VALUES ('37', 'Lkm Lkm Lkm ', '2313131313131', '3123312131', '2233131313', 'df', '222', 'z@f.com', '321', '3213', '21321', '3213', '21321', '3213', 'Masculino', '1989-09-07', '32', 'sdf', '321', '231321', 'Casa Propia', 'Si', '321', '321321', 'Sdf Sdf Sd', 'Casado Bienes Mancomunados', 'Si', '321321', '32132', '1321', '32132', '1313131321', '321321', 'PFA');
INSERT INTO `clientes` VALUES ('38', 'Lkm Lkm Lkm ', '2313131313131', '3123312131', '2233131313', 'df', '222', 'z@f.com', '321', '3213', '21321', '3213', '21321', '3213', 'Masculino', '1989-09-07', '32', 'sdf', '321', '231321', 'Casa Propia', 'Si', '321', '321321', 'Sdf Sdf Sd', 'Casado Bienes Mancomunados', 'Si', '321321', '32132', '1321', '32132', '1313131321', '321321', 'PFA');
INSERT INTO `clientes` VALUES ('39', 'Lkm Lkm Lkm ', '2313131313131', '3123312131', '2233131313', 'df', '222', 'z@f.com', '321', '3213', '21321', '3213', '21321', '3213', 'Masculino', '1989-09-07', '32', 'sdf', '321', '231321', 'Casa Propia', 'Si', '321', '321321', 'Sdf Sdf Sd', 'Casado Bienes Mancomunados', 'Si', '321321', '32132', '1321', '32132', '1313131321', '321321', 'PFA');
INSERT INTO `clientes` VALUES ('40', 'Lkm Lkm Lkm ', '2313131313131', '3123312131', '2233131313', 'df', '222', 'z@f.com', '321', '3213', '21321', '3213', '21321', '3213', 'Masculino', '1989-09-07', '32', 'sdf', '321', '231321', 'Casa Propia', 'Si', '321', '321321', 'Sdf Sdf Sd', 'Casado Bienes Mancomunados', 'Si', '321321', '32132', '1321', '32132', '1313131321', '321321', 'PFA');
INSERT INTO `clientes` VALUES ('41', 'Lkm Lkm Lkm ', '2313131313131', '3123312131', '2233131313', 'df', '222', 'z@f.com', '321', '3213', '21321', '3213', '21321', '3213', 'Masculino', '1989-09-07', '32', 'sdf', '321', '231321', 'Casa Propia', 'Si', '321', '321321', 'Sdf Sdf Sd', 'Casado Bienes Mancomunados', 'Si', '321321', '32132', '1321', '32132', '1313131321', '321321', 'PFA');
INSERT INTO `clientes` VALUES ('42', 'Lkm Lkm Lkm ', '2313131313131', '3123312131', '2233131313', 'df', '222', 'z@f.com', '321', '3213', '21321', '3213', '21321', '3213', 'Masculino', '1989-09-07', '32', 'sdf', '321', '231321', 'Casa Propia', 'Si', '321', '321321', 'Sdf Sdf Sd', 'Casado Bienes Mancomunados', 'Si', '321321', '32132', '1321', '32132', '1313131321', '321321', 'PFA');
INSERT INTO `clientes` VALUES ('43', 'Lkm Lkm Lkm ', '2313131313131', '3123312131', '2233131313', 'df', '222', 'z@f.com', '321', '3213', '21321', '3213', '21321', '3213', 'Masculino', '1989-09-07', '32', 'sdf', '321', '231321', 'Casa Propia', 'Si', '321', '321321', 'Sdf Sdf Sd', 'Casado Bienes Mancomunados', 'Si', '321321', '32132', '1321', '32132', '1313131321', '321321', 'PFA');
INSERT INTO `clientes` VALUES ('44', 'Lkm Lkm Lkm ', '2313131313131', '3123312131', '2233131313', 'df', '222', 'z@f.com', '321', '3213', '21321', '3213', '21321', '3213', 'Masculino', '1989-09-07', '32', 'sdf', '321', '231321', 'Casa Propia', 'Si', '321', '321321', 'Sdf Sdf Sd', 'Casado Bienes Mancomunados', 'Si', '321321', '32132', '1321', '32132', '1313131321', '321321', 'PFA');
INSERT INTO `clientes` VALUES ('45', 'Lkm Lkm Lkm ', '2313131313131', '3123312131', '2233131313', 'df', '222', 'z@f.com', '321', '3213', '21321', '3213', '21321', '3213', 'Masculino', '1989-09-07', '32', 'sdf', '321', '231321', 'Casa Propia', 'Si', '321', '321321', 'Sdf Sdf Sd', 'Casado Bienes Mancomunados', 'Si', '321321', '32132', '1321', '32132', '1313131321', '321321', 'PFA');
INSERT INTO `clientes` VALUES ('46', 'Lkm Lkm Lkm ', '2313131313131', '3123312131', '2233131313', 'df', '222', 'z@f.com', '321', '3213', '21321', '3213', '21321', '3213', 'Masculino', '1989-09-07', '32', 'sdf', '321', '231321', 'Casa Propia', 'Si', '321', '321321', 'Sdf Sdf Sd', 'Casado Bienes Mancomunados', 'Si', '321321', '32132', '1321', '32132', '1313131321', '321321', 'PFA');
INSERT INTO `clientes` VALUES ('47', 'Lkm Lkm Lkm ', '2313131313131', '3123312131', '2233131313', 'df', '222', 'z@f.com', '321', '3213', '21321', '3213', '21321', '3213', 'Masculino', '1989-09-07', '32', 'sdf', '321', '231321', 'Casa Propia', 'Si', '321', '321321', 'Sdf Sdf Sd', 'Casado Bienes Mancomunados', 'Si', '321321', '32132', '1321', '32132', '1313131321', '321321', 'PFA');
INSERT INTO `clientes` VALUES ('48', '  ', '', '', '', '', '', '', '', '', '', '', '', '', '', '--', '', '', '', '', '', '', '', '', '  ', '', '', '', '', '', '', '', '', 'PFNA');
INSERT INTO `clientes` VALUES ('49', 'Lkj Lkj Lkj Lkj', '2131213212121', '2121212121', '2121212121', '2132132132', '132', 'df@s.com', '132', '132', '213', '13', '21', '321', 'Masculino', '1989-09-07', '321321', '3213', '2132', '132', 'Casa Propia', 'Si', '2132', '13213', 'Kjlkj Asda Lkjl', 'Casado Bienes Mancomunados', 'Si', 'jhkjhk', '', '1989', 'kjhk', '5454545454', '6546546', 'PFNA');

-- ----------------------------
-- Table structure for `datos`
-- ----------------------------
DROP TABLE IF EXISTS `datos`;
CREATE TABLE `datos` (
  `id` int(11) NOT NULL,
  `NombreLayer` varchar(0) DEFAULT NULL,
  `Columna` varchar(0) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of datos
-- ----------------------------

-- ----------------------------
-- Table structure for `gradoriesgo`
-- ----------------------------
DROP TABLE IF EXISTS `gradoriesgo`;
CREATE TABLE `gradoriesgo` (
  `Folio_sol` varchar(20) NOT NULL,
  `Folio_Cliente` varchar(20) NOT NULL,
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
  `GradoRiesgo` varchar(20) NOT NULL,
  `INESolicitante` varchar(20) NOT NULL,
  `Adjunta_INESolicitante` varchar(20) NOT NULL,
  `Pasaporte_o_CedulaProfSolicitante` varchar(20) NOT NULL,
  `Adjunta_Pasaporte_o_CedulaProfSolicitante` varchar(20) NOT NULL,
  `CartillaMilitarSolicitante` varchar(20) NOT NULL,
  `Adjunta_CartillaMilitarSolicitante` varchar(20) NOT NULL,
  `LicenciaConducirSolicitante` varchar(20) NOT NULL,
  `Adjunta_LicenciaConducirSolicitante` varchar(20) NOT NULL,
  `OtraIdentSolicitante` varchar(20) NOT NULL,
  `Adjunta_OtraIdentSolicitante` varchar(20) NOT NULL,
  `EspIdentSolicitante` varchar(20) NOT NULL,
  `CotejoVsOriginal` varchar(20) NOT NULL,
  `Adjunta_CURP_RFC_FEA` varchar(20) NOT NULL,
  `Adjunta_ComprobanteDom` varchar(20) NOT NULL,
  `DomicilioCoincideId` varchar(20) NOT NULL,
  `FechaComprobanteDom` date NOT NULL,
  `DomBeneficiario` varchar(20) NOT NULL,
  `ColBeneficiario` varchar(20) NOT NULL,
  `CPBeneficiario` varchar(20) NOT NULL,
  `PaisBeneficiario` varchar(20) NOT NULL,
  `TelBeneficiario` varchar(20) NOT NULL,
  `CURPBeneficiario` varchar(20) NOT NULL,
  `RFCBeneficiario` varchar(20) NOT NULL,
  `ParentescoBeneficiario` varchar(20) NOT NULL,
  `PorcientoBeneficiario` varchar(20) NOT NULL,
  `FeNacBeneficiario` varchar(20) NOT NULL,
  `MunBeneficiario` varchar(20) NOT NULL,
  `EdoBeneficiario` varchar(20) NOT NULL,
  `EdoCivilBeneficiario` varchar(20) NOT NULL,
  `SoConBeneficiario` varchar(20) NOT NULL,
  `OcuProfBeneficiario` varchar(20) NOT NULL,
  `PEPSBeneficiario` varchar(20) NOT NULL,
  `OrigenRecBeneficiario` varchar(20) NOT NULL,
  `PerTrans1` double(11,2) NOT NULL,
  `FuentePerTrans1` varchar(20) NOT NULL,
  `PerTrans2` double(11,2) NOT NULL,
  `FuentePerTrans2` varchar(20) NOT NULL,
  `PerTrans3` double(11,2) NOT NULL,
  `FuentePerTrans3` varchar(20) NOT NULL,
  `PerTrans4` double(11,2) NOT NULL,
  `FuentePerTrans4` varchar(20) NOT NULL,
  `PerTrans5` double(11,2) NOT NULL,
  `FuentePerTrans5` varchar(20) NOT NULL,
  `PerTrans6` double(11,2) NOT NULL,
  `FuentePerTrans6` varchar(20) NOT NULL,
  `PerTrans7` double(11,2) NOT NULL,
  `FuentePerTrans7` varchar(20) NOT NULL,
  `PerTrans8` double(11,2) NOT NULL,
  `FuentePerTrans8` varchar(20) NOT NULL,
  `PerTrans9` double(11,2) NOT NULL,
  `FuentePerTrans9` varchar(20) NOT NULL,
  `PerTrans10` double(11,2) NOT NULL,
  `FuentePerTrans10` varchar(20) NOT NULL,
  `TotalIngreso` double(11,2) NOT NULL,
  `ValorAuto` double(11,2) NOT NULL,
  `EngAutomovil` double(11,2) NOT NULL,
  `PorEnganche` varchar(255) NOT NULL,
  `PorFinanciamiento` varchar(255) NOT NULL,
  `MontoFinanciado` double(11,2) NOT NULL,
  `Plazo` int(11) NOT NULL,
  `PagoMensEsp` double(11,2) NOT NULL,
  `PEPS` varchar(20) NOT NULL,
  `NombrePEPS` varchar(20) NOT NULL,
  `ParentescoPEPS` varchar(20) NOT NULL,
  `PuestoPEPS` varchar(20) NOT NULL,
  PRIMARY KEY (`Folio_sol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of gradoriesgo
-- ----------------------------
INSERT INTO `gradoriesgo` VALUES ('$Folio_Sol', '$cliente', '$select', '$select2', '$select3', '$select4', '$select5', '$select6', '$select7', '$select8', '$select9', '$select10', '$select11', '$select12', '$select13', '$select14', '$select15', '$select16', '$select17', '$GradoRiesgo', '$INESolicitante', '$copias', '$Pasaporte_o_CedulaP', '$copias2', '$CartillaMilitarSoli', '$copias3', '$LicenciaConducirSol', '$copias4', '$OtraIdentSolicitant', '$copias5', '$EspIdentSolicitante', '$cotejo', '$adjuntos1', '$adjuntos2', '$adjuntos3', '0000-00-00', '$DomBeneficiario', '$ColBeneficiario', '$CPBeneficiario', '$PaisBeneficiario', '$TelBeneficiario', '$CURPBeneficiario', '$RFCBeneficiario', '$ParentescoBeneficia', '$PorcientoBeneficiar', '$FeNacBeneficiario', '$MunBeneficiario', '$EdoBeneficiario', '$EdoCivilBeneficiari', '$SoConBeneficiario', '$OcuProfBeneficiario', '$PEPSBeneficiario', '$OrigenRecBeneficiar', '0.00', '$FuentePerTrans1', '0.00', '$FuentePerTrans2', '0.00', '$FuentePerTrans3', '0.00', '$FuentePerTrans4', '0.00', '$FuentePerTrans5', '0.00', '$FuentePerTrans6', '0.00', '$FuentePerTrans7', '0.00', '$FuentePerTrans8', '0.00', '$FuentePerTrans9', '0.00', '$FuentePerTrans10', '0.00', '0.00', '0.00', '$PorEnganche', '$PorFinanciamiento', '0.00', '0', '0.00', '$PEPS', '$NombrePEPS', '$ParentescoPEPS', '$PuestoPEPS');
INSERT INTO `gradoriesgo` VALUES ('SA-001', 'PFA-018', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '', '', '0.00', '0', '0.00', '', '', '', '');
INSERT INTO `gradoriesgo` VALUES ('SA-011', 'PFA-016', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'México', 'México', 'Otros', 'Bajo', '321321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '32321', 'Si', 'Si', 'Si', 'Si', '2017-02-01', '21321', '321', '3213', '213', '213', '21', '321', '321', '321321', '1989-12-31', '321', '3213', '2132', '1321321', '321', '321', '321', '32321.00', '321', '321.00', '321', '321.00', '321', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '32963.00', '150000.00', '50000.00', '33.33 %', '66.67 %', '100000.00', '60', '2000.00', 'Si', '321', '321', '321');
INSERT INTO `gradoriesgo` VALUES ('SA-012', 'PFA-017', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Durango-Chihuhua-Jalisco-México-CD Méxic', 'Durango-Chihuhua-Jalisco-México-CD Méxic', 'México', 'México', 'Otros', 'Bajo', '321321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '32321', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '21321', '321', '3213', '213', '213', '21', '321', '321', '321321', '1989-12-31', '321', '3213', '2132', '1321321', '321', '321', '321', '32321.00', '321', '321.00', '321', '321.00', '321', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '32963.00', '150000.00', '50000.00', '33.33 %', '66.67 %', '100000.00', '60', '2000.00', 'Si', '321', '321', '321');
INSERT INTO `gradoriesgo` VALUES ('SA-013', 'PFA-018', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Durango-Chihuhua-Jalisco-México-CD Méxic', 'Durango-Chihuhua-Jalisco-México-CD Méxic', 'México', 'México', 'Otros', 'Bajo', '321321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '32321', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '21321', '321', '3213', '213', '213', '21', '321', '321', '321321', '1989-12-31', '321', '3213', '2132', '1321321', '321', '321', '321', '32321.00', '321', '321.00', '321', '321.00', '321', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '32963.00', '150000.00', '50000.00', '33.33 %', '66.67 %', '100000.00', '60', '2000.00', 'No', '', '', '');
INSERT INTO `gradoriesgo` VALUES ('SA-014', 'PFA-019', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Durango-Chihuhua-Jalisco-México-CD Méxic', 'Durango-Chihuhua-Jalisco-México-CD Méxic', 'México', 'México', 'Otros', 'Bajo', '321321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '32321', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '21321', '321', '3213', '213', '213', '21', '321', '321', '321321', '1989-12-31', '321', '3213', '2132', '1321321', '321', '321', '321', '32321.00', '321', '321.00', '321', '321.00', '321', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '32963.00', '150000.00', '50000.00', '33.33 %', '66.67 %', '100000.00', '60', '2000.00', 'No', '', '', '');
INSERT INTO `gradoriesgo` VALUES ('SA-015', 'PFA-020', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Durango-Chihuhua-Jalisco-México-CD Méxic', 'Durango-Chihuhua-Jalisco-México-CD Méxic', 'México', 'México', 'Otros', 'Bajo', '321321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '32321', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '21321', '321', '3213', '213', '213', '21', '321', '321', '321321', '1989-12-31', '321', '3213', '2132', '1321321', '321', '321', '321', '32321.00', '321', '321.00', '321', '321.00', '321', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '32963.00', '150000.00', '50000.00', '33.33 %', '66.67 %', '100000.00', '60', '2000.00', 'No', '', '', '');
INSERT INTO `gradoriesgo` VALUES ('SA-016', 'PFA-021', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Durango-Chihuhua-Jalisco-México-CD Méxic', 'Durango-Chihuhua-Jalisco-México-CD Méxic', 'México', 'México', 'Otros', 'Bajo', '321321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '32321', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '21321', '321', '3213', '213', '213', '21', '321', '321', '321321', '1989-12-31', '321', '3213', '2132', '1321321', '321', '321', '321', '32321.00', '321', '321.00', '321', '321.00', '321', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '32963.00', '150000.00', '50000.00', '33.33 %', '66.67 %', '100000.00', '60', '2000.00', 'No', '', '', '');
INSERT INTO `gradoriesgo` VALUES ('SA-017', 'PFA-016', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'México', 'México', 'Otros', 'Bajo', '321321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '32321', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '21321', '321', '3213', '213', '213', '21', '321', '321', '321321', '1989-12-31', '321', '3213', '2132', '1321321', '321', '321', '321', '32321.00', '321', '321.00', '321', '321.00', '321', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '32963.00', '150000.00', '50000.00', '33.33 %', '66.67 %', '100000.00', '60', '2000.00', 'Si', '321', '321', '321');
INSERT INTO `gradoriesgo` VALUES ('SA-018', 'PFA-016', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'México', 'México', 'Otros', 'Bajo', '321321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '32321', 'Si', 'Si', 'Si', 'Si', '1989-09-07', '21321', '321', '3213', '213', '213', '21', '321', '321', '321321', '1989-12-31', '321', '3213', '2132', '1321321', '321', '321', '321', '32321.00', '321', '321.00', '321', '321.00', '321', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '32963.00', '150000.00', '50000.00', '33.33 %', '66.67 %', '100000.00', '60', '2000.00', 'Si', '321', '321', '321');
INSERT INTO `gradoriesgo` VALUES ('SA-019', 'PFA-022', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'México', 'México', 'Otros', 'Bajo', 'asd', 'Si', '', '', '', '', '', '', '', '', '', 'Si', 'Si', 'Si', 'Si', '0000-00-00', 'lkjlkjlk', 'jlkjlkjlkj', '324342', 'sdfadfkl', '65465465464', 'sdasdkasdjh', 'hkjhkjh', 'kjhkjhkjhkj', '100', '1985-10-01', 'asdasdlkj', 'lkjlkj', 'lkjlkjlk', 'jlkjlkj', 'lkjlkj', 'lkjlkj', 'lkjlkj', '5000.00', 'asd', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '5000.00', '15000.00', '5000.00', '33.33 %', '66.67 %', '10000.00', '60', '2000.00', 'Si', 'asd', 'asd', 'asdf');
INSERT INTO `gradoriesgo` VALUES ('SA-020', 'PFA-023', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'México', 'México', 'Otros', 'Bajo', 'asd', 'Si', '', '', '', '', '', '', '', '', '', 'Si', 'Si', 'Si', 'Si', '0000-00-00', 'lkjlkjlk', 'jlkjlkjlkj', '324342', 'sdfadfkl', '65465465464', 'sdasdkasdjh', 'hkjhkjh', 'kjhkjhkjhkj', '100', '1985-10-01', 'asdasdlkj', 'lkjlkj', 'lkjlkjlk', 'jlkjlkj', 'lkjlkj', 'lkjlkj', 'lkjlkj', '5000.00', 'asd', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '5000.00', '15000.00', '5000.00', '33.33 %', '66.67 %', '10000.00', '60', '2000.00', 'Si', 'asd', 'asd', 'asdf');
INSERT INTO `gradoriesgo` VALUES ('SA-021', 'PFA-016', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'México', 'México', 'Otros', 'Bajo', '321321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '32321', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '21321', '321', '3213', '213', '213', '21', '321', '321', '321321', '1989-12-31', '321', '3213', '2132', '1321321', '321', '321', '321', '32321.00', '321', '321.00', '321', '321.00', '321', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '32963.00', '150000.00', '50000.00', '33.33 %', '66.67 %', '100000.00', '60', '2000.00', 'Si', '321', '321', '321');
INSERT INTO `gradoriesgo` VALUES ('SA-022', 'PFA-016', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'México', 'México', 'Otros', 'Bajo', '321321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '32321', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '21321', '321', '3213', '213', '213', '21', '321', '321', '321321', '1989-12-31', '321', '3213', '2132', '1321321', '321', '321', '321', '32321.00', '321', '321.00', '321', '321.00', '321', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '32963.00', '150000.00', '50000.00', '33.33 %', '66.67 %', '100000.00', '60', '2000.00', 'Si', '321', '321', '321');
INSERT INTO `gradoriesgo` VALUES ('SA-023', 'PFA-016', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'México', 'México', 'Otros', 'Bajo', '321321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '32321', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '21321', '321', '3213', '213', '213', '21', '321', '321', '321321', '1989-12-31', '321', '3213', '2132', '1321321', '321', '321', '321', '32321.00', '321', '321.00', '321', '321.00', '321', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '32963.00', '150000.00', '50000.00', '33.33 %', '66.67 %', '100000.00', '60', '2000.00', 'Si', '321', '321', '321');
INSERT INTO `gradoriesgo` VALUES ('SA-024', 'PFA-016', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'México', 'México', 'Otros', 'Bajo', '321321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '32321', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '21321', '321', '3213', '213', '213', '21', '321', '321', '321321', '1989-12-31', '321', '3213', '2132', '1321321', '321', '321', '321', '32321.00', '321', '321.00', '321', '321.00', '321', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '32963.00', '150000.00', '50000.00', '33.33 %', '66.67 %', '100000.00', '60', '2000.00', 'Si', '321', '321', '321');
INSERT INTO `gradoriesgo` VALUES ('SA-025', 'PFA-016', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'México', 'México', 'Otros', 'Bajo', '321321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '32321', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '21321', '321', '3213', '213', '213', '21', '321', '321', '321321', '1989-12-31', '321', '3213', '2132', '1321321', '321', '321', '321', '32321.00', '321', '321.00', '321', '321.00', '321', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '32963.00', '150000.00', '50000.00', '33.33 %', '66.67 %', '100000.00', '60', '2000.00', 'Si', '321', '321', '321');
INSERT INTO `gradoriesgo` VALUES ('SA-026', 'PFA-016', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'México', 'México', 'Otros', 'Bajo', '321321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '32321', 'Si', 'Si', 'Si', 'Si', '1989-09-07', '21321', '321', '3213', '213', '213', '21', '321', '321', '321321', '1989-12-31', '321', '3213', '2132', '1321321', '321', '321', '321', '32321.00', '321', '321.00', '321', '321.00', '321', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '32963.00', '150000.00', '50000.00', '33.33 %', '66.67 %', '100000.00', '60', '2000.00', 'Si', '321', '321', '321');
INSERT INTO `gradoriesgo` VALUES ('SA-027', 'PFA-016', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'México', 'México', 'Otros', 'Bajo', '321321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '32321', 'Si', 'Si', 'Si', 'Si', '1989-09-07', '21321', '321', '3213', '213', '213', '21', '321', '321', '321321', '1989-12-31', '321', '3213', '2132', '1321321', '321', '321', '321', '32321.00', '321', '321.00', '321', '321.00', '321', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '32963.00', '150000.00', '50000.00', '33.33 %', '66.67 %', '100000.00', '60', '2000.00', 'Si', '321', '321', '321');
INSERT INTO `gradoriesgo` VALUES ('SA-028', 'PFA-016', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'México', 'México', 'Otros', 'Bajo', '321321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '32321', 'Si', 'Si', 'Si', 'Si', '1989-09-07', '21321', '321', '3213', '213', '213', '21', '321', '321', '321321', '1989-12-31', '321', '3213', '2132', '1321321', '321', '321', '321', '32321.00', '321', '321.00', '321', '321.00', '321', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '32963.00', '150000.00', '50000.00', '33.33 %', '66.67 %', '100000.00', '60', '2000.00', 'Si', '321', '321', '321');
INSERT INTO `gradoriesgo` VALUES ('SA-029', 'PFA-016', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'México', 'México', 'Otros', 'Bajo', '321321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '32321', 'Si', 'Si', 'Si', 'Si', '1989-09-07', '21321', '321', '3213', '213', '213', '21', '321', '321', '321321', '1989-12-31', '321', '3213', '2132', '1321321', '321', '321', '321', '32321.00', '321', '321.00', '321', '321.00', '321', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '32963.00', '150000.00', '50000.00', '33.33 %', '66.67 %', '100000.00', '60', '2000.00', 'Si', '321', '321', '321');
INSERT INTO `gradoriesgo` VALUES ('SA-030', 'PFA-016', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'México', 'México', 'Otros', 'Bajo', '321321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '32321', 'Si', 'Si', 'Si', 'Si', '1989-09-07', '21321', '321', '3213', '213', '213', '21', '321', '321', '321321', '1989-12-31', '321', '3213', '2132', '1321321', '321', '321', '321', '32321.00', '321', '321.00', '321', '321.00', '321', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '32963.00', '150000.00', '50000.00', '33.33 %', '66.67 %', '100000.00', '60', '2000.00', 'Si', '321', '321', '321');
INSERT INTO `gradoriesgo` VALUES ('SA-031', 'PFA-016', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'México', 'México', 'Otros', 'Bajo', '321321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '32321', 'Si', 'Si', 'Si', 'Si', '1989-09-07', '21321', '321', '3213', '213', '213', '21', '321', '321', '321321', '1989-12-31', '321', '3213', '2132', '1321321', '321', '321', '321', '32321.00', '321', '321.00', '321', '321.00', '321', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '32963.00', '150000.00', '50000.00', '33.33 %', '66.67 %', '100000.00', '60', '2000.00', 'Si', '321', '321', '321');
INSERT INTO `gradoriesgo` VALUES ('SA-032', 'PFA-016', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'México', 'México', 'Otros', 'Bajo', '321321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '32321', 'Si', 'Si', 'Si', 'Si', '1989-09-07', '21321', '321', '3213', '213', '213', '21', '321', '321', '321321', '1989-12-31', '321', '3213', '2132', '1321321', '321', '321', '321', '32321.00', '321', '321.00', '321', '321.00', '321', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '32963.00', '150000.00', '50000.00', '33.33 %', '66.67 %', '100000.00', '60', '2000.00', 'Si', '321', '321', '321');
INSERT INTO `gradoriesgo` VALUES ('SA-033', 'PFA-016', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'México', 'México', 'Otros', 'Bajo', '321321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '32321', 'Si', 'Si', 'Si', 'Si', '1989-09-07', '21321', '321', '3213', '213', '213', '21', '321', '321', '321321', '1989-12-31', '321', '3213', '2132', '1321321', '321', '321', '321', '32321.00', '321', '321.00', '321', '321.00', '321', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '32963.00', '150000.00', '50000.00', '33.33 %', '66.67 %', '100000.00', '60', '2000.00', 'Si', '321', '321', '321');
INSERT INTO `gradoriesgo` VALUES ('SA-034', 'PFA-016', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'México', 'México', 'Otros', 'Bajo', '321321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '32321', 'Si', 'Si', 'Si', 'Si', '1989-09-07', '21321', '321', '3213', '213', '213', '21', '321', '321', '321321', '1989-12-31', '321', '3213', '2132', '1321321', '321', '321', '321', '32321.00', '321', '321.00', '321', '321.00', '321', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '32963.00', '150000.00', '50000.00', '33.33 %', '66.67 %', '100000.00', '60', '2000.00', 'Si', '321', '321', '321');
INSERT INTO `gradoriesgo` VALUES ('SA-035', 'PFA-016', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'México', 'México', 'Otros', 'Bajo', '321321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '32321', 'Si', 'Si', 'Si', 'Si', '1989-09-07', '21321', '321', '3213', '213', '213', '21', '321', '321', '321321', '1989-12-31', '321', '3213', '2132', '1321321', '321', '321', '321', '32321.00', '321', '321.00', '321', '321.00', '321', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '32963.00', '150000.00', '50000.00', '33.33 %', '66.67 %', '100000.00', '60', '2000.00', 'Si', '321', '321', '321');
INSERT INTO `gradoriesgo` VALUES ('SA-100', 'PFA-016', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'México', 'México', 'Otros', 'Bajo', '321321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '32321', 'Si', 'Si', 'Si', 'Si', '1989-09-07', '21321', '321', '3213', '213', '213', '21', '321', '321', '321321', '1989-12-31', '321', '3213', '2132', '1321321', '321', '321', '321', '32321.00', '321', '321.00', '321', '321.00', '321', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '32963.00', '150000.00', '50000.00', '33.33 %', '66.67 %', '100000.00', '60', '2000.00', 'Si', '321', '321', '321');
INSERT INTO `gradoriesgo` VALUES ('SA-999', 'PFA-016', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'Durango-Chihuhua-Jalisco-México-CD México-Sonora', 'México', 'México', 'Otros', 'Bajo', '321321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '321', 'Si', '32321', 'Si', 'Si', 'Si', 'Si', '1989-09-07', '21321', '321', '3213', '213', '213', '21', '321', '321', '321321', '1989-12-31', '321', '3213', '2132', '1321321', '321', '321', '321', '32321.00', '321', '321.00', '321', '321.00', '321', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '32963.00', '150000.00', '50000.00', '33.33 %', '66.67 %', '100000.00', '60', '2000.00', 'Si', '321', '321', '321');
INSERT INTO `gradoriesgo` VALUES ('SM-001', 'PM-001', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'México', 'México', 'México', 'Bajo', '65466546', 'Si', '54', 'Si', '654', 'Si', '465', 'Si', '546', 'Si', '654', 'Si', 'Si', 'Si', 'Si', '1989-09-07', '6546546', '5465', '465', '465', '465', '465', '465', '465', '4654', '1989-09-07', '5465', '4654', '654', '6546', '546', '546', '546', '5465.00', '46546', '546.00', '54', '654.00', '654', '65.00', '46', '54.00', '654', '654.00', '654', '65.00', '456', '4.00', '654', '654.00', '65', '46.00', '5465', '8207.00', '654654.00', '65456.00', '10.00 %', '90.00 %', '589198.00', '48', '2000.00', 'Si', '654', '654', '654');
INSERT INTO `gradoriesgo` VALUES ('SN-010', 'PFNA-019', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '', '', '0.00', '0', '0.00', '', '', '', '');
INSERT INTO `gradoriesgo` VALUES ('SN-011', 'PFNA-020', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Bajo', '65466546', 'Si', '54', 'Si', '654', 'Si', '465', 'Si', '546', 'Si', '654', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '6546546', '5465', '465', '465', '465', '465', '465', '465', '4654', '6546', '5465', '4654', '654', '6546', '546', '546', '546', '5465.00', '46546', '546.00', '54', '654.00', '654', '65.00', '46', '54.00', '654', '654.00', '654', '65.00', '456', '4.00', '654', '654.00', '65', '46.00', '5465', '0.00', '654654.00', '65456.00', '10.00 %', '90.00 %', '589198.00', '48', '2000.00', 'Si', '654', '654', '654');
INSERT INTO `gradoriesgo` VALUES ('SN-012', 'PFNA-021', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Bajo', '65466546', 'Si', '54', 'Si', '654', 'Si', '465', 'Si', '546', 'Si', '654', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '6546546', '5465', '465', '465', '465', '465', '465', '465', '4654', '6546', '5465', '4654', '654', '6546', '546', '546', '546', '5465.00', '46546', '546.00', '54', '654.00', '654', '65.00', '46', '54.00', '654', '654.00', '654', '65.00', '456', '4.00', '654', '654.00', '65', '46.00', '5465', '0.00', '654654.00', '65456.00', '10.00 %', '90.00 %', '589198.00', '48', '2000.00', 'Si', '654', '654', '654');
INSERT INTO `gradoriesgo` VALUES ('SN-013', 'PFNA-022', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '', '', '', '', '', '', '', '', '', 'Bajo', '65466546', 'Si', '54', 'Si', '654', 'Si', '465', 'Si', '546', 'Si', '654', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '6546546', '5465', '465', '465', '465', '465', '465', '465', '4654', '6546', '5465', '4654', '654', '6546', '546', '546', '546', '5465.00', '46546', '546.00', '54', '654.00', '654', '65.00', '46', '54.00', '654', '654.00', '654', '65.00', '456', '4.00', '654', '654.00', '65', '46.00', '5465', '0.00', '654654.00', '65456.00', '10.00 %', '90.00 %', '589198.00', '48', '2000.00', 'Si', '654', '654', '654');
INSERT INTO `gradoriesgo` VALUES ('SN-014', 'PFNA-023', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'México', 'México', 'México', 'Bajo', '65466546', 'Si', '54', 'Si', '654', 'Si', '465', 'Si', '546', 'Si', '654', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '6546546', '5465', '465', '465', '465', '465', '465', '465', '4654', '6546', '5465', '4654', '654', '6546', '546', '546', '546', '5465.00', '46546', '546.00', '54', '654.00', '654', '65.00', '46', '54.00', '654', '654.00', '654', '65.00', '456', '4.00', '654', '654.00', '65', '46.00', '5465', '0.00', '654654.00', '65456.00', '10.00 %', '90.00 %', '589198.00', '48', '2000.00', 'Si', '654', '654', '654');
INSERT INTO `gradoriesgo` VALUES ('SN-015', 'PFNA-024', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'México', 'México', 'México', 'Bajo', '65466546', 'Si', '54', 'Si', '654', 'Si', '465', 'Si', '546', 'Si', '654', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '6546546', '5465', '465', '465', '465', '465', '465', '465', '4654', '6546', '5465', '4654', '654', '6546', '546', '546', '546', '5465.00', '46546', '546.00', '54', '654.00', '654', '65.00', '46', '54.00', '654', '654.00', '654', '65.00', '456', '4.00', '654', '654.00', '65', '46.00', '5465', '0.00', '654654.00', '65456.00', '10.00 %', '90.00 %', '589198.00', '48', '2000.00', 'Si', '654', '654', '654');
INSERT INTO `gradoriesgo` VALUES ('SN-016', 'PFNA-025', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'México', 'México', 'México', 'Bajo', '65466546', 'Si', '54', 'Si', '654', 'Si', '465', 'Si', '546', 'Si', '654', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '6546546', '5465', '465', '465', '465', '465', '465', '465', '4654', '6546', '5465', '4654', '654', '6546', '546', '546', '546', '5465.00', '46546', '546.00', '54', '654.00', '654', '65.00', '46', '54.00', '654', '654.00', '654', '65.00', '456', '4.00', '654', '654.00', '65', '46.00', '5465', '0.00', '654654.00', '65456.00', '10.00 %', '90.00 %', '589198.00', '48', '2000.00', 'Si', '654', '654', '654');
INSERT INTO `gradoriesgo` VALUES ('SN-017', 'PFNA-026', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'México', 'México', 'México', 'Bajo', '65466546', 'Si', '54', 'Si', '654', 'Si', '465', 'Si', '546', 'Si', '654', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '6546546', '5465', '465', '465', '465', '465', '465', '465', '4654', '6546', '5465', '4654', '654', '6546', '546', '546', '546', '5465.00', '46546', '546.00', '54', '654.00', '654', '65.00', '46', '54.00', '654', '654.00', '654', '65.00', '456', '4.00', '654', '654.00', '65', '46.00', '5465', '0.00', '654654.00', '65456.00', '10.00 %', '90.00 %', '589198.00', '48', '2000.00', 'Si', '654', '654', '654');
INSERT INTO `gradoriesgo` VALUES ('SN-018', 'PFNA-027', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'México', 'México', 'México', 'Bajo', '65466546', 'Si', '54', 'Si', '654', 'Si', '465', 'Si', '546', 'Si', '654', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '6546546', '5465', '465', '465', '465', '465', '465', '465', '4654', '6546', '5465', '4654', '654', '6546', '546', '546', '546', '5465.00', '46546', '546.00', '54', '654.00', '654', '65.00', '46', '54.00', '654', '654.00', '654', '65.00', '456', '4.00', '654', '654.00', '65', '46.00', '5465', '0.00', '654654.00', '65456.00', '10.00 %', '90.00 %', '589198.00', '48', '2000.00', 'Si', '654', '654', '654');
INSERT INTO `gradoriesgo` VALUES ('SN-019', 'PFNA-028', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'México', 'México', 'México', 'Bajo', '65466546', 'Si', '54', 'Si', '654', 'Si', '465', 'Si', '546', 'Si', '654', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '6546546', '5465', '465', '465', '465', '465', '465', '465', '4654', '6546', '5465', '4654', '654', '6546', '546', '546', '546', '5465.00', '46546', '546.00', '54', '654.00', '654', '65.00', '46', '54.00', '654', '654.00', '654', '65.00', '456', '4.00', '654', '654.00', '65', '46.00', '5465', '8207.00', '654654.00', '65456.00', '10.00 %', '90.00 %', '589198.00', '48', '2000.00', 'Si', '654', '654', '654');
INSERT INTO `gradoriesgo` VALUES ('SN-020', 'PFNA-029', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'México', 'México', 'México', 'Bajo', '65466546', 'Si', '54', 'Si', '654', 'Si', '465', 'Si', '546', 'Si', '654', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '6546546', '5465', '465', '465', '465', '465', '465', '465', '4654', '6546', '5465', '4654', '654', '6546', '546', '546', '546', '5465.00', '46546', '546.00', '54', '654.00', '654', '65.00', '46', '54.00', '654', '654.00', '654', '65.00', '456', '4.00', '654', '654.00', '65', '46.00', '5465', '8207.00', '654654.00', '65456.00', '10.00 %', '90.00 %', '589198.00', '48', '2000.00', 'Si', '654', '654', '654');
INSERT INTO `gradoriesgo` VALUES ('SN-021', 'PFNA-030', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'México', 'México', 'México', 'Bajo', '65466546', 'Si', '54', 'Si', '654', 'Si', '465', 'Si', '546', 'Si', '654', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '6546546', '5465', '465', '465', '465', '465', '465', '465', '4654', '6546', '5465', '4654', '654', '6546', '546', '546', '546', '5465.00', '46546', '546.00', '54', '654.00', '654', '65.00', '46', '54.00', '654', '654.00', '654', '65.00', '456', '4.00', '654', '654.00', '65', '46.00', '5465', '8207.00', '654654.00', '65456.00', '10.00 %', '90.00 %', '589198.00', '48', '2000.00', 'Si', '654', '654', '654');
INSERT INTO `gradoriesgo` VALUES ('SN-022', 'PFNA-031', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'México', 'México', 'México', 'Bajo', '65466546', 'Si', '54', 'Si', '654', 'Si', '465', 'Si', '546', 'Si', '654', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '6546546', '5465', '465', '465', '465', '465', '465', '465', '4654', '6546', '5465', '4654', '654', '6546', '546', '546', '546', '5465.00', '46546', '546.00', '54', '654.00', '654', '65.00', '46', '54.00', '654', '654.00', '654', '65.00', '456', '4.00', '654', '654.00', '65', '46.00', '5465', '8207.00', '654654.00', '65456.00', '10.00 %', '90.00 %', '589198.00', '48', '2000.00', 'Si', '654', '654', '654');
INSERT INTO `gradoriesgo` VALUES ('SN-023', 'PFNA-032', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'México', 'México', 'México', 'Bajo', '65466546', 'Si', '54', 'Si', '654', 'Si', '465', 'Si', '546', 'Si', '654', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '6546546', '5465', '465', '465', '465', '465', '465', '465', '4654', '6546', '5465', '4654', '654', '6546', '546', '546', '546', '5465.00', '46546', '546.00', '54', '654.00', '654', '65.00', '46', '54.00', '654', '654.00', '654', '65.00', '456', '4.00', '654', '654.00', '65', '46.00', '5465', '8207.00', '654654.00', '65456.00', '10.00 %', '90.00 %', '589198.00', '48', '2000.00', 'Si', '654', '654', '654');
INSERT INTO `gradoriesgo` VALUES ('SN-024', 'PFNA-033', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'México', 'México', 'México', 'Bajo', '65466546', 'Si', '54', 'Si', '654', 'Si', '465', 'Si', '546', 'Si', '654', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '6546546', '5465', '465', '465', '465', '465', '465', '465', '4654', '6546', '5465', '4654', '654', '6546', '546', '546', '546', '5465.00', '46546', '546.00', '54', '654.00', '654', '65.00', '46', '54.00', '654', '654.00', '654', '65.00', '456', '4.00', '654', '654.00', '65', '46.00', '5465', '8207.00', '654654.00', '65456.00', '10.00 %', '90.00 %', '589198.00', '48', '2000.00', 'Si', '654', '654', '654');
INSERT INTO `gradoriesgo` VALUES ('SN-025', 'PFNA-034', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'México', 'México', 'México', 'Bajo', '65466546', 'Si', '54', 'Si', '654', 'Si', '465', 'Si', '546', 'Si', '654', 'Si', 'Si', 'Si', 'Si', '1989-09-07', '6546546', '5465', '465', '465', '465', '465', '465', '465', '4654', '1989-09-07', '5465', '4654', '654', '6546', '546', '546', '546', '5465.00', '46546', '546.00', '54', '654.00', '654', '65.00', '46', '54.00', '654', '654.00', '654', '65.00', '456', '4.00', '654', '654.00', '65', '46.00', '5465', '8207.00', '654654.00', '65456.00', '10.00 %', '90.00 %', '589198.00', '48', '2000.00', 'Si', '654', '654', '654');
INSERT INTO `gradoriesgo` VALUES ('SN-026', '', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'México', 'México', 'México', 'Bajo', '65466546', 'Si', '54', 'Si', '654', 'Si', '465', 'Si', '546', 'Si', '654', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '6546546', '5465', '465', '465', '465', '465', '465', '465', '4654', '1989-09-07', '5465', '4654', '654', '6546', '546', '546', '546', '5465.00', '46546', '546.00', '54', '654.00', '654', '65.00', '46', '54.00', '654', '654.00', '654', '65.00', '456', '4.00', '654', '654.00', '65', '46.00', '5465', '8207.00', '654654.00', '65456.00', '10.00 %', '90.00 %', '589198.00', '48', '2000.00', 'Si', '654', '654', '654');
INSERT INTO `gradoriesgo` VALUES ('SN-027', '', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'México', 'México', 'México', 'Bajo', '65466546', 'Si', '54', 'Si', '654', 'Si', '465', 'Si', '546', 'Si', '654', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '6546546', '5465', '465', '465', '465', '465', '465', '465', '4654', '1989-09-07', '5465', '4654', '654', '6546', '546', '546', '546', '5465.00', '46546', '546.00', '54', '654.00', '654', '65.00', '46', '54.00', '654', '654.00', '654', '65.00', '456', '4.00', '654', '654.00', '65', '46.00', '5465', '8207.00', '654654.00', '65456.00', '10.00 %', '90.00 %', '589198.00', '48', '2000.00', 'Si', '654', '654', '654');
INSERT INTO `gradoriesgo` VALUES ('SN-028', '', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'México', 'México', 'México', 'Bajo', '65466546', 'Si', '54', 'Si', '654', 'Si', '465', 'Si', '546', 'Si', '654', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '6546546', '5465', '465', '465', '465', '465', '465', '465', '4654', '1989-09-07', '5465', '4654', '654', '6546', '546', '546', '546', '5465.00', '46546', '546.00', '54', '654.00', '654', '65.00', '46', '54.00', '654', '654.00', '654', '65.00', '456', '4.00', '654', '654.00', '65', '46.00', '5465', '8207.00', '654654.00', '65456.00', '10.00 %', '90.00 %', '589198.00', '48', '2000.00', 'Si', '654', '654', '654');
INSERT INTO `gradoriesgo` VALUES ('SN-029', '', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'México', 'México', 'México', 'Bajo', '65466546', 'Si', '54', 'Si', '654', 'Si', '465', 'Si', '546', 'Si', '654', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '6546546', '5465', '465', '465', '465', '465', '465', '465', '4654', '1989-09-07', '5465', '4654', '654', '6546', '546', '546', '546', '5465.00', '46546', '546.00', '54', '654.00', '654', '65.00', '46', '54.00', '654', '654.00', '654', '65.00', '456', '4.00', '654', '654.00', '65', '46.00', '5465', '8207.00', '654654.00', '65456.00', '10.00 %', '90.00 %', '589198.00', '48', '2000.00', 'Si', '654', '654', '654');
INSERT INTO `gradoriesgo` VALUES ('SN-030', '', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'México', 'México', 'México', 'Bajo', '65466546', 'Si', '54', 'Si', '654', 'Si', '465', 'Si', '546', 'Si', '654', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '6546546', '5465', '465', '465', '465', '465', '465', '465', '4654', '1989-09-07', '5465', '4654', '654', '6546', '546', '546', '546', '5465.00', '46546', '546.00', '54', '654.00', '654', '65.00', '46', '54.00', '654', '654.00', '654', '65.00', '456', '4.00', '654', '654.00', '65', '46.00', '5465', '8207.00', '654654.00', '65456.00', '10.00 %', '90.00 %', '589198.00', '48', '2000.00', 'Si', '654', '654', '654');
INSERT INTO `gradoriesgo` VALUES ('SN-031', '', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'México', 'México', 'México', 'Bajo', '65466546', 'Si', '54', 'Si', '654', 'Si', '465', 'Si', '546', 'Si', '654', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '6546546', '5465', '465', '465', '465', '465', '465', '465', '4654', '1989-09-07', '5465', '4654', '654', '6546', '546', '546', '546', '5465.00', '46546', '546.00', '54', '654.00', '654', '65.00', '46', '54.00', '654', '654.00', '654', '65.00', '456', '4.00', '654', '654.00', '65', '46.00', '5465', '8207.00', '654654.00', '65456.00', '10.00 %', '90.00 %', '589198.00', '48', '2000.00', 'Si', '654', '654', '654');
INSERT INTO `gradoriesgo` VALUES ('SN-032', '', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'México', 'México', 'México', 'Bajo', '65466546', 'Si', '54', 'Si', '654', 'Si', '465', 'Si', '546', 'Si', '654', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '6546546', '5465', '465', '465', '465', '465', '465', '465', '4654', '1989-09-07', '5465', '4654', '654', '6546', '546', '546', '546', '5465.00', '46546', '546.00', '54', '654.00', '654', '65.00', '46', '54.00', '654', '654.00', '654', '65.00', '456', '4.00', '654', '654.00', '65', '46.00', '5465', '8207.00', '654654.00', '65456.00', '10.00 %', '90.00 %', '589198.00', '48', '2000.00', 'Si', '654', '654', '654');
INSERT INTO `gradoriesgo` VALUES ('SN-033', 'PFNA-034', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'México', 'México', 'México', 'Bajo', '65466546', 'Si', '54', 'Si', '654', 'Si', '465', 'Si', '546', 'Si', '654', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '6546546', '5465', '465', '465', '465', '465', '465', '465', '4654', '1989-09-07', '5465', '4654', '654', '6546', '546', '546', '546', '5465.00', '46546', '546.00', '54', '654.00', '654', '65.00', '46', '54.00', '654', '654.00', '654', '65.00', '456', '4.00', '654', '654.00', '65', '46.00', '5465', '8207.00', '654654.00', '65456.00', '10.00 %', '90.00 %', '589198.00', '48', '2000.00', 'Si', '654', '654', '654');
INSERT INTO `gradoriesgo` VALUES ('SN-034', 'PFNA-034', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'México', 'México', 'México', 'Bajo', '65466546', 'Si', '54', 'Si', '654', 'Si', '465', 'Si', '546', 'Si', '654', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '6546546', '5465', '465', '465', '465', '465', '465', '465', '4654', '1989-09-07', '5465', '4654', '654', '6546', '546', '546', '546', '5465.00', '46546', '546.00', '54', '654.00', '654', '65.00', '46', '54.00', '654', '654.00', '654', '65.00', '456', '4.00', '654', '654.00', '65', '46.00', '5465', '8207.00', '654654.00', '65456.00', '10.00 %', '90.00 %', '589198.00', '48', '2000.00', 'Si', '654', '654', '654');
INSERT INTO `gradoriesgo` VALUES ('SN-035', 'PFNA-034', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'México', 'México', 'México', 'Bajo', '65466546', 'Si', '54', 'Si', '654', 'Si', '465', 'Si', '546', 'Si', '654', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '6546546', '5465', '465', '465', '465', '465', '465', '465', '4654', '1989-09-07', '5465', '4654', '654', '6546', '546', '546', '546', '5465.00', '46546', '546.00', '54', '654.00', '654', '65.00', '46', '54.00', '654', '654.00', '654', '65.00', '456', '4.00', '654', '654.00', '65', '46.00', '5465', '8207.00', '654654.00', '65456.00', '10.00 %', '90.00 %', '589198.00', '48', '2000.00', 'Si', '654', '654', '654');
INSERT INTO `gradoriesgo` VALUES ('SN-036', 'PFNA-034', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'México', 'México', 'México', 'Bajo', '65466546', 'Si', '54', 'Si', '654', 'Si', '465', 'Si', '546', 'Si', '654', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '6546546', '5465', '465', '465', '465', '465', '465', '465', '4654', '1989-09-07', '5465', '4654', '654', '6546', '546', '546', '546', '5465.00', '46546', '546.00', '54', '654.00', '654', '65.00', '46', '54.00', '654', '654.00', '654', '65.00', '456', '4.00', '654', '654.00', '65', '46.00', '5465', '8207.00', '654654.00', '65456.00', '10.00 %', '90.00 %', '589198.00', '48', '2000.00', 'Si', '654', '654', '654');
INSERT INTO `gradoriesgo` VALUES ('SN-037', 'PFNA-034', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'México', 'México', 'México', 'Bajo', '65466546', 'Si', '54', 'Si', '654', 'Si', '465', 'Si', '546', 'Si', '654', 'Si', 'Si', 'Si', 'Si', '0000-00-00', '6546546', '5465', '465', '465', '465', '465', '465', '465', '4654', '1989-09-07', '5465', '4654', '654', '6546', '546', '546', '546', '5465.00', '46546', '546.00', '54', '654.00', '654', '65.00', '46', '54.00', '654', '654.00', '654', '65.00', '456', '4.00', '654', '654.00', '65', '46.00', '5465', '8207.00', '654654.00', '65456.00', '10.00 %', '90.00 %', '589198.00', '48', '2000.00', 'Si', '654', '654', '654');

-- ----------------------------
-- Table structure for `ins`
-- ----------------------------
DROP TABLE IF EXISTS `ins`;
CREATE TABLE `ins` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `variable` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ins
-- ----------------------------
INSERT INTO `ins` VALUES ('0', 'Id', 'Id');
INSERT INTO `ins` VALUES ('1', 'No. CLiente', 'Cliente');
INSERT INTO `ins` VALUES ('2', 'Tipo de credito', 'TipoCredito');
INSERT INTO `ins` VALUES ('3', 'Nombre', 'NomSolicitante');
INSERT INTO `ins` VALUES ('4', 'RFC', 'RFCSolicitante');
INSERT INTO `ins` VALUES ('5', 'Telefono', 'TelSolicitante');
INSERT INTO `ins` VALUES ('6', 'Telefono Movil', 'MovSolicitante');
INSERT INTO `ins` VALUES ('7', 'Direccion', 'DirSolicitante');
INSERT INTO `ins` VALUES ('8', 'Colonia/Fraccionamiento', 'ColSolicitante');
INSERT INTO `ins` VALUES ('9', 'Ciudad', 'CdSolicitante');
INSERT INTO `ins` VALUES ('10', 'Lugar de Nacimiento', 'LugNacSolicitante');
INSERT INTO `ins` VALUES ('12', 'Estado', 'EdoSolicitante');
INSERT INTO `ins` VALUES ('13', 'Codigo Postal', 'CPSolicitante');
INSERT INTO `ins` VALUES ('14', 'CURP', 'CURPSolicitante');
INSERT INTO `ins` VALUES ('15', 'Email', 'EmailSolicitante');
INSERT INTO `ins` VALUES ('178', 'Fax', 'FaxSolicitante');
INSERT INTO `ins` VALUES ('17', 'Nombre/Razon social ', 'NomDatConEmp');
INSERT INTO `ins` VALUES ('18', 'Telefono', 'TelDatConEmp');
INSERT INTO `ins` VALUES ('19', 'Email', 'EmailDatConEmp');
INSERT INTO `ins` VALUES ('20', 'RFC', 'RFCDatConEmp');
INSERT INTO `ins` VALUES ('21', 'Fax', 'FaxDatConEmp');
INSERT INTO `ins` VALUES ('22', 'Puesto', 'PuestDatConEmp');
INSERT INTO `ins` VALUES ('23', 'Sexo', 'SexoDatGen');
INSERT INTO `ins` VALUES ('24', 'Fecha de nacimiento', 'FeNacDatGen');
INSERT INTO `ins` VALUES ('25', 'Edad', 'EdDatGen');
INSERT INTO `ins` VALUES ('26', 'Nacionalidad', 'NaDatGen');
INSERT INTO `ins` VALUES ('27', 'No. de Dependientes', 'NoDepDatGen');
INSERT INTO `ins` VALUES ('28', 'Acredita domicilio', 'AcDomDatGen');
INSERT INTO `ins` VALUES ('29', 'Vive en', 'VivDatGen');
INSERT INTO `ins` VALUES ('30', 'Vive en(otro)', 'OtrvivDatGen');
INSERT INTO `ins` VALUES ('31', 'Importe mensual de pago', 'ImpMenDatGen');
INSERT INTO `ins` VALUES ('32', 'Propietario de inmueble', 'PropInmuDatGen');
INSERT INTO `ins` VALUES ('33', 'Arraigo en domicilio', 'ArDomDatGen');
INSERT INTO `ins` VALUES ('34', 'Años de residir', 'AnResDatGen');
INSERT INTO `ins` VALUES ('35', 'Beneficiario ', 'BenDatGen');
INSERT INTO `ins` VALUES ('36', 'Estado civil ', 'EstCivDatGen');
INSERT INTO `ins` VALUES ('37', 'Auto propio', 'AuPropDatGen');
INSERT INTO `ins` VALUES ('38', 'Marca y Tipo', 'MarDatGen');
INSERT INTO `ins` VALUES ('39', 'Actividad principal', 'ActPrinDatGenPM');
INSERT INTO `ins` VALUES ('40', 'Inicio de operaciones', 'IniOpDatGenPM');
INSERT INTO `ins` VALUES ('41', 'Cantidad de personal ', 'CantPerDatGenPM');
INSERT INTO `ins` VALUES ('42', 'Antiguedad', 'AntConsEmp');
INSERT INTO `ins` VALUES ('43', 'Apoderado', 'ApoConsEmp');
INSERT INTO `ins` VALUES ('44', 'Ocupacion', 'OcupDatEmp');
INSERT INTO `ins` VALUES ('45', 'Puesto', 'PuestDatEmp');
INSERT INTO `ins` VALUES ('46', 'Departamento/Area', 'DepDatEmp');
INSERT INTO `ins` VALUES ('47', 'Desde el año', 'DesAnDatEmp');
INSERT INTO `ins` VALUES ('48', 'Compañia', 'CompDatEmp');
INSERT INTO `ins` VALUES ('49', 'Telefono', 'TelDatEmp');
INSERT INTO `ins` VALUES ('50', 'Extencion', 'ExtDatEmp');
INSERT INTO `ins` VALUES ('51', 'No. Empleados', 'NoEmDatEmp');
INSERT INTO `ins` VALUES ('52', 'Giro', 'GiroDatEmp');
INSERT INTO `ins` VALUES ('53', 'Domicilio del negocio', 'DomDatEmp');
INSERT INTO `ins` VALUES ('54', 'Nombre', 'NomRefPer');
INSERT INTO `ins` VALUES ('55', 'Parentesco', 'ParenRefPer');
INSERT INTO `ins` VALUES ('56', 'Telefono', 'TelRefPer');
INSERT INTO `ins` VALUES ('57', 'Nombre', 'NomRefPer2');
INSERT INTO `ins` VALUES ('58', 'Parentesco', 'ParenRefPer2');
INSERT INTO `ins` VALUES ('59', 'Telefono', 'TelRefPer2');
INSERT INTO `ins` VALUES ('60', 'Banco', 'BancRefBan');
INSERT INTO `ins` VALUES ('61', 'No. de Cuenta', 'NoTarRefBan');
INSERT INTO `ins` VALUES ('62', 'Sucursal', 'SucRefBan');
INSERT INTO `ins` VALUES ('63', 'Banco', 'BancRefBan2');
INSERT INTO `ins` VALUES ('64', 'No. de Cuenta', 'NoTarRefBan2');
INSERT INTO `ins` VALUES ('65', 'Fecha de apertura', 'FecApRefBan');
INSERT INTO `ins` VALUES ('66', 'Sucursal', 'SucRefBan2');
INSERT INTO `ins` VALUES ('67', 'Fecha apertura', 'FecApRefBan');
INSERT INTO `ins` VALUES ('68', 'Empresa', 'EmpRefCom');
INSERT INTO `ins` VALUES ('69', 'Antiguedad', 'AntRefCom');
INSERT INTO `ins` VALUES ('70', 'Telefono', 'TelRefCom');
INSERT INTO `ins` VALUES ('71', 'Empresa', 'EmpRefCom2');
INSERT INTO `ins` VALUES ('72', 'Antiguedad', 'AntRefCom2');
INSERT INTO `ins` VALUES ('73', 'Telefono', 'TelRefCom2');
INSERT INTO `ins` VALUES ('74', 'Banco', 'BancCarDir');
INSERT INTO `ins` VALUES ('75', 'No. de Cuenta', 'NoTarCarDir');
INSERT INTO `ins` VALUES ('76', 'Nombre', 'NomDatCon');
INSERT INTO `ins` VALUES ('77', 'Compañia', 'CompDatCon');
INSERT INTO `ins` VALUES ('78', 'Puesto', 'PuestDatCon');
INSERT INTO `ins` VALUES ('79', 'Nombre', 'NomObPerMor');
INSERT INTO `ins` VALUES ('80', 'Direccion', 'DirObPerMor');
INSERT INTO `ins` VALUES ('81', 'Colonia/Fraccionamiento', 'ColObPerMor');
INSERT INTO `ins` VALUES ('82', 'Ciudad', 'CdObPerMor');
INSERT INTO `ins` VALUES ('83', 'Lugar de nacimiento', 'LugNacObPerMor');
INSERT INTO `ins` VALUES ('84', 'Estado', 'EdoObPerMor');
INSERT INTO `ins` VALUES ('85', 'Codigo Postal', 'CPObPerMor');
INSERT INTO `ins` VALUES ('86', 'RFC', 'RFCObPerMor');
INSERT INTO `ins` VALUES ('87', 'Telefono', 'TelObPerMor');
INSERT INTO `ins` VALUES ('88', 'Fax', 'FaxObPerMor');
INSERT INTO `ins` VALUES ('89', 'Antiguedad', 'AntConsEmpPM');
INSERT INTO `ins` VALUES ('90', 'Apoderado', 'ApoConsEmpPM');
INSERT INTO `ins` VALUES ('91', 'Actividad principal', 'ActPrinDatGen');
INSERT INTO `ins` VALUES ('92', 'Inicio de operaciones', 'IniOpDatGen');
INSERT INTO `ins` VALUES ('93', 'Cantidad de personal ', 'CantPerDatGen');
INSERT INTO `ins` VALUES ('94', 'Nombre', 'NomAccionista1');
INSERT INTO `ins` VALUES ('95', 'RFC', 'RFCAccionista1');
INSERT INTO `ins` VALUES ('96', '%', 'PorcentAccionista1');
INSERT INTO `ins` VALUES ('97', 'Nombre', 'NomAccionista2');
INSERT INTO `ins` VALUES ('98', 'RFC', 'RFCAccionista2');
INSERT INTO `ins` VALUES ('99', '%', 'PorcentAccionista2');
INSERT INTO `ins` VALUES ('100', 'Nombre', 'NomAccionista3');
INSERT INTO `ins` VALUES ('101', 'RFC', 'RFCAccionista3');
INSERT INTO `ins` VALUES ('102', '%', 'PorcentAccionista3');
INSERT INTO `ins` VALUES ('103', 'Nombre', 'NomAccionista4');
INSERT INTO `ins` VALUES ('104', 'RFC', 'RFCAccionista4');
INSERT INTO `ins` VALUES ('105', '%', 'PorcentAccionista4');
INSERT INTO `ins` VALUES ('106', 'Nombre', 'NomAccionistaPM1');
INSERT INTO `ins` VALUES ('107', 'RFC', 'RFCAccionistaPM1');
INSERT INTO `ins` VALUES ('108', '%', 'PorcentAccionistaPM1');
INSERT INTO `ins` VALUES ('109', 'Nombre', 'NomAccionistaPM2');
INSERT INTO `ins` VALUES ('110', 'RFC', 'RFCAccionistaPM2');
INSERT INTO `ins` VALUES ('111', '%', 'PorcentAccionistaPM2');
INSERT INTO `ins` VALUES ('112', 'Nombre', 'NomObSol');
INSERT INTO `ins` VALUES ('113', 'RFC', 'RFCObSol');
INSERT INTO `ins` VALUES ('114', 'Telefono', 'TelObSol');
INSERT INTO `ins` VALUES ('115', 'Telefono Movil', 'MovObSol');
INSERT INTO `ins` VALUES ('116', 'Direccion', 'DirObSol');
INSERT INTO `ins` VALUES ('117', 'Colonia/Fraccionamiento', 'ColObSol');
INSERT INTO `ins` VALUES ('118', 'Ciudad', 'CdObSol');
INSERT INTO `ins` VALUES ('119', 'Lugar de nacimiento', 'LugNacObSol');
INSERT INTO `ins` VALUES ('120', 'Propiedad', 'PropObSol');
INSERT INTO `ins` VALUES ('121', 'Estado', 'EdoObSol');
INSERT INTO `ins` VALUES ('122', 'Codigo Postal', 'CPObSol');
INSERT INTO `ins` VALUES ('123', 'Email', 'EmailObSol');
INSERT INTO `ins` VALUES ('124', 'Sexo', 'SexoObSol');
INSERT INTO `ins` VALUES ('125', 'Fecha de nacimiento', 'FeNacObSol');
INSERT INTO `ins` VALUES ('126', 'Edad', 'EdObSol');
INSERT INTO `ins` VALUES ('127', 'CURP', 'CURPObSol');
INSERT INTO `ins` VALUES ('128', 'Nombre', 'NomObSolPF');
INSERT INTO `ins` VALUES ('129', 'Sexo', 'SexoObSolPF');
INSERT INTO `ins` VALUES ('130', 'Fecha de nacimiento', 'FeNacObSolPF');
INSERT INTO `ins` VALUES ('131', 'RFC', 'RFCObSolPF');
INSERT INTO `ins` VALUES ('132', 'CURP', 'CURPObSolPF');
INSERT INTO `ins` VALUES ('133', 'Edad', 'EdObSolPF');
INSERT INTO `ins` VALUES ('134', 'Nombre', 'NomObSol2');
INSERT INTO `ins` VALUES ('135', 'RFC', 'RFCObSol2');
INSERT INTO `ins` VALUES ('136', 'Telefono', 'TelObSol2');
INSERT INTO `ins` VALUES ('137', 'Telefono Movil', 'MovObSol2');
INSERT INTO `ins` VALUES ('138', 'Direccion', 'DirObSol2');
INSERT INTO `ins` VALUES ('139', 'Colonia/Fraccionamiento', 'ColObSol2');
INSERT INTO `ins` VALUES ('140', 'Ciudad', 'CdObSol2');
INSERT INTO `ins` VALUES ('141', 'Lugar de nacimiento', 'LugNacObSol2');
INSERT INTO `ins` VALUES ('142', 'Propiedad', 'PropObSol2');
INSERT INTO `ins` VALUES ('143', 'Estado', 'EdoObSol2');
INSERT INTO `ins` VALUES ('144', 'Codigo Postal', 'CPObSol2');
INSERT INTO `ins` VALUES ('145', 'Email', 'EmailObSol2');
INSERT INTO `ins` VALUES ('146', 'Sexo', 'SexoObSol2');
INSERT INTO `ins` VALUES ('147', 'Fecha de nacimiento', 'FeNacObSol2');
INSERT INTO `ins` VALUES ('148', 'Edad', 'EdObSol2');
INSERT INTO `ins` VALUES ('149', 'CURP', 'CURPObSol2');
INSERT INTO `ins` VALUES ('150', 'Nombre', 'NomObSolPF2');
INSERT INTO `ins` VALUES ('151', 'Sexo', 'SexoObSolPF2');
INSERT INTO `ins` VALUES ('152', 'Fecha de nacimiento', 'FeNacObSolPF2');
INSERT INTO `ins` VALUES ('153', 'RFC', 'RFCObSolPF2');
INSERT INTO `ins` VALUES ('154', 'CURP', 'CURPObSolPF2');
INSERT INTO `ins` VALUES ('155', 'Edad', 'EdObSolPF2');
INSERT INTO `ins` VALUES ('156', 'Nombre', 'NomRepLegInvHist');
INSERT INTO `ins` VALUES ('157', 'RFC', 'RFCRepLegInvHist');
INSERT INTO `ins` VALUES ('158', 'Direccion', 'DirRepLegInvHist');
INSERT INTO `ins` VALUES ('159', 'Colonia/Fraccionamiento', 'ColRepLegInvHist');
INSERT INTO `ins` VALUES ('160', 'Ciudad', 'CdRepLegInvHist');
INSERT INTO `ins` VALUES ('161', 'Estado', 'EdoRepLegInvHist');
INSERT INTO `ins` VALUES ('162', 'Codigo Postal', 'CPRepLegInvHist');
INSERT INTO `ins` VALUES ('163', 'Telefono', 'TelRepLegInHist');
INSERT INTO `ins` VALUES ('164', 'Nombre', 'NomObSolPFInvHist');
INSERT INTO `ins` VALUES ('165', 'RFC', 'RFCObSolPFInvHist');
INSERT INTO `ins` VALUES ('166', 'Direccion', 'DirObSolPFInvHist');
INSERT INTO `ins` VALUES ('167', 'Colonia/Fraccionamiento ', 'ColObSolPFInvHist');
INSERT INTO `ins` VALUES ('168', 'Ciudad', 'CdObSolPFInvHist');
INSERT INTO `ins` VALUES ('169', 'Estado', 'EdoObSolPFInvHist');
INSERT INTO `ins` VALUES ('170', 'Codigo Postal', 'CPObSolPFInvHist');
INSERT INTO `ins` VALUES ('171', 'Telefono', 'TelObSolPFInHist');
INSERT INTO `ins` VALUES ('172', 'Fecha', 'Fecha');
INSERT INTO `ins` VALUES ('173', 'Clave Concesionario', 'ClavConcesionario');
INSERT INTO `ins` VALUES ('174', 'Nombre concesionario', 'NomConcesionario');
INSERT INTO `ins` VALUES ('175', 'Nombre vendedor', 'NomVendedor');
INSERT INTO `ins` VALUES ('176', 'Nombre Gerente gral.', 'NomGerenteGral');
INSERT INTO `ins` VALUES ('177', 'Tipo de solicitud', 'TipoSolicitud');
INSERT INTO `ins` VALUES ('16', 'Numero de Domicilio', 'NumDirSol');
INSERT INTO `ins` VALUES ('11', 'Municipio', 'MunicipioSolicitante');
INSERT INTO `ins` VALUES ('180', 'Numero de serie de la FIEL', 'NumSerieFIEL');
INSERT INTO `ins` VALUES ('181', 'Domicilio donde labora', 'DomicilioLaboral');
INSERT INTO `ins` VALUES ('182', 'Sueldo o ingreso mensual', 'SueldoSolicitante');
INSERT INTO `ins` VALUES ('183', 'Actividad economica adicional', 'ActEcoAdicional');
INSERT INTO `ins` VALUES ('184', 'Ingresos adicional mensual', 'IngAdMensualAprox');
INSERT INTO `ins` VALUES ('185', 'INE', 'INESolicitante');
INSERT INTO `ins` VALUES ('186', 'Adjunto de INE', 'Adjunta_INESolicitante');
INSERT INTO `ins` VALUES ('187', 'Pasaporte o Cedula', 'Pasaporte_o_CedulaProfSolicitante');
INSERT INTO `ins` VALUES ('188', 'Cartilla Militar', 'CartillaMilitarSolicitante');
INSERT INTO `ins` VALUES ('189', 'Adjunto Cartilla', 'Adjunta_LicenciaConducirSolicitante');
INSERT INTO `ins` VALUES ('190', 'Otra identificacion', 'OtraIdentSolicitante');
INSERT INTO `ins` VALUES ('191', 'Adjunto de identificacion', 'Adjunta_OtraIdentSolicitante');
INSERT INTO `ins` VALUES ('192', 'Especificacion de la identificacion', 'EspIdentSolicitante');
INSERT INTO `ins` VALUES ('193', 'Cotejo vs Original', 'CotejoVsOriginal');
INSERT INTO `ins` VALUES ('194', 'Adjunto de Curp', 'Adjunta_CURP_RFC_FEA');
INSERT INTO `ins` VALUES ('195', 'Adjunto de CURP', 'Adjunta_ComprobanteDom');
INSERT INTO `ins` VALUES ('196', 'Domicilio coincide con ID', 'DomicilioCoincideId');
INSERT INTO `ins` VALUES ('197', 'Domicilio ', 'DomBeneficiario');
INSERT INTO `ins` VALUES ('198', 'Colonia / Fraccionamiento', 'ColBeneficiario');
INSERT INTO `ins` VALUES ('199', 'Codigo Postal', 'CPBeneficiario');
INSERT INTO `ins` VALUES ('200', 'Pais', 'PaisBeneficiario');
INSERT INTO `ins` VALUES ('201', 'Telefono', 'TelBeneficiario');
INSERT INTO `ins` VALUES ('202', 'CURP', 'CURPBeneficiario');
INSERT INTO `ins` VALUES ('203', 'RFC', 'RFCBeneficiario');
INSERT INTO `ins` VALUES ('204', 'Parentesco', 'ParentescoBeneficiario');
INSERT INTO `ins` VALUES ('205', 'Porcentaje', 'PorcientoBeneficiario');
INSERT INTO `ins` VALUES ('206', 'Fecha de nacimiento', 'FeNacBeneficiario');
INSERT INTO `ins` VALUES ('207', 'Municipio', 'MunBeneficiario');
INSERT INTO `ins` VALUES ('208', 'Estado', 'EdoBeneficiario');
INSERT INTO `ins` VALUES ('209', 'Estado civil', 'EdoCivilBeneficiario');
INSERT INTO `ins` VALUES ('210', 'Sociedad conyugal', 'SoConBeneficiario');
INSERT INTO `ins` VALUES ('211', 'Ocupacion o Profesion', 'OcuProfBeneficiario');
INSERT INTO `ins` VALUES ('212', 'PEP\'S', 'PEPSBeneficiario');
INSERT INTO `ins` VALUES ('213', 'Origen de los recursos', 'OrigenRecBeneficiario');
INSERT INTO `ins` VALUES ('214', 'Ingreso Comprobable(1)', 'PerTrans1');
INSERT INTO `ins` VALUES ('215', 'Fuente', 'FuentePerTrans1');
INSERT INTO `ins` VALUES ('216', 'Ingreso Comprobable(2)', 'PerTrans2');
INSERT INTO `ins` VALUES ('217', 'Fuente', 'FuentePerTrans2');
INSERT INTO `ins` VALUES ('218', 'Ingreso Comprobable(3)', 'PerTrans3');
INSERT INTO `ins` VALUES ('219', 'Fuente', 'FuentePerTrans3');
INSERT INTO `ins` VALUES ('220', 'Ingreso Comprobable(4)', 'PerTrans4');
INSERT INTO `ins` VALUES ('221', 'Fuente', 'FuentePerTrans4');
INSERT INTO `ins` VALUES ('222', 'Ingreso Comprobable(5)', 'PerTrans5');
INSERT INTO `ins` VALUES ('223', 'Fuente', 'FuentePerTrans5');
INSERT INTO `ins` VALUES ('224', 'Ingreso Comprobable(6)', 'PerTrans6');
INSERT INTO `ins` VALUES ('225', 'Fuente', 'FuentePerTrans6');
INSERT INTO `ins` VALUES ('226', 'Ingreso Comprobable(7)', 'PerTrans7');
INSERT INTO `ins` VALUES ('227', 'Fuente', 'FuentePerTrans7');
INSERT INTO `ins` VALUES ('228', 'Ingreso Comprobable(8)', 'PerTrans8');
INSERT INTO `ins` VALUES ('229', 'Fuente', 'FuentePerTrans8');
INSERT INTO `ins` VALUES ('230', 'Ingreso Comprobable(9)', 'PerTrans9');
INSERT INTO `ins` VALUES ('231', 'Fuente', 'FuentePerTrans9');
INSERT INTO `ins` VALUES ('232', 'Ingreso Comprobable(10)', 'PerTrans10');
INSERT INTO `ins` VALUES ('233', 'Fuente', 'FuentePerTrans10');
INSERT INTO `ins` VALUES ('234', 'Total de ingreso', 'TotalIngreso');
INSERT INTO `ins` VALUES ('235', 'Valor del automovil', 'ValorAuto');
INSERT INTO `ins` VALUES ('236', 'Enganche del automovil', 'EngAutomovil');
INSERT INTO `ins` VALUES ('237', 'Porcentaje de enganche', 'PorEnganche');
INSERT INTO `ins` VALUES ('238', 'Porcentaje de financiamiento', 'PorFinanciamiento');
INSERT INTO `ins` VALUES ('239', 'Monto financiado', 'MontoFinanciado');
INSERT INTO `ins` VALUES ('240', 'Plazo', 'Plazo');
INSERT INTO `ins` VALUES ('241', 'Pago mensual esperado', 'PagoMensEsp');
INSERT INTO `ins` VALUES ('242', 'PEP\'S', 'PEPS');
INSERT INTO `ins` VALUES ('243', 'Nombre', 'NombrePEPS');
INSERT INTO `ins` VALUES ('244', 'Parentesco', 'ParentescoPEPS');
INSERT INTO `ins` VALUES ('245', 'Puesto', 'PuestoPEPS');
INSERT INTO `ins` VALUES ('246', 'Antiguedad objeto social', 'Antiguedad_ObjetoSocial');
INSERT INTO `ins` VALUES ('247', 'Antiguedad cliente', 'Antiguedad_Cliente');
INSERT INTO `ins` VALUES ('248', 'Naturaleza operaciones', 'Naturaleza_Operaciones');
INSERT INTO `ins` VALUES ('249', 'Numero de beneficiarios', 'Numero_Beneficiarios');
INSERT INTO `ins` VALUES ('250', 'Numero terceros relacionados', 'Numero_TercerosRelacionados');
INSERT INTO `ins` VALUES ('251', 'PEP\'S relacionados', 'PEPs_Relacionados');
INSERT INTO `ins` VALUES ('252', 'Alerta reputacional', 'Alerta_Reputacional');
INSERT INTO `ins` VALUES ('253', 'Volumen esperado', 'Volumen_Esperado');
INSERT INTO `ins` VALUES ('254', 'Frecuencia esperada', 'Frecuencia_Esperada');
INSERT INTO `ins` VALUES ('255', 'Instrumento monetario', 'Instrumento_Monetario');
INSERT INTO `ins` VALUES ('256', 'Medios utilizados', 'Canales_MediosUtilizados');
INSERT INTO `ins` VALUES ('257', 'Pais estado oficial', 'Pais_EstadoOficial');
INSERT INTO `ins` VALUES ('258', 'Pais estado residencia', 'Pais_EstadoResidencia');
INSERT INTO `ins` VALUES ('259', 'Pais estado operacion', 'Pais_EstadoOperacion');
INSERT INTO `ins` VALUES ('260', 'Origen recursos', 'Origen_Recursos');
INSERT INTO `ins` VALUES ('261', 'Destino', 'Destino_Recursos');
INSERT INTO `ins` VALUES ('262', 'Pais estado residencia terceros', 'Pais_EstadoResidenciaTerceros');
INSERT INTO `ins` VALUES ('179', 'B', 'Id');
INSERT INTO `ins` VALUES ('263', 'Grado de riesgo', 'GradoRiesgo');

-- ----------------------------
-- Table structure for `log`
-- ----------------------------
DROP TABLE IF EXISTS `log`;
CREATE TABLE `log` (
  `Fecha_modificacion` datetime NOT NULL,
  `Responsable` varchar(50) NOT NULL,
  `Evento` varchar(50) NOT NULL,
  `Folio_Cliente` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of log
-- ----------------------------

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
INSERT INTO `pfa` VALUES ('16', 'PFA-016', 'Adrian', 'Eduardo', 'Mata', 'Martinez', '3132131321313', '1312132131', '2121321321', 'ASD', '321321', '321', '321', '321321', '321', 'SDFSF', '321', '321', 'ASD@G.CPM', 'Masculino', '1989-09-07', '24', 'ASD', '321', '321', 'Casa Propia', '', 'Si', '321', '321', 'SD', 'ASD', 'ASD', 'Casado Bienes Mancomunados', 'Si', '321', '', '32132', '1321', '321', '321', '3132132132', '1321', '321321', 'xxxxxxx', '2000', 'No', '0.00');
INSERT INTO `pfa` VALUES ('17', 'PFA-017', 'SDF', 'KJH', 'KJH', 'KJH', '3132131321313', '1312132131', '2121321321', 'ASD', '321321', '321', '321', '321321', '321', 'SDFSF', '321', '321', 'ASD@G.CPM', 'Masculino', '1989-09-07', '24', 'ASD', '321', '321', 'Casa Propia', '', 'Si', '321', '321', 'SD', 'ASD', 'ASD', 'Casado Bienes Mancomunados', 'Si', '321', '', '32132', '1321', '321', '321', '3132132132', '1321', '321321', '', '', '', '');
INSERT INTO `pfa` VALUES ('18', 'PFA-018', 'SDF', 'KJH', 'KJH', 'KJH', '3132131321313', '1312132131', '2121321321', 'ASD', '321321', '321', '321', '321321', '321', 'SDFSF', '321', '321', 'ASD@G.CPM', 'Masculino', '1989-09-07', '24', 'ASD', '321', '321', 'Casa Propia', '', 'Si', '321', '321', 'SD', 'ASD', 'ASD', 'Casado Bienes Mancomunados', 'Si', '321', '', '32132', '1321', '321', '321', '3132132132', '1321', '321321', '', '', '', '');
INSERT INTO `pfa` VALUES ('19', 'PFA-019', 'SDF', 'KJH', 'KJH', 'KJH', '3132131321313', '1312132131', '2121321321', 'ASD', '321321', '321', '321', '321321', '321', 'SDFSF', '321', '321', 'ASD@G.CPM', 'Masculino', '1989-09-07', '24', 'ASD', '321', '321', 'Casa Propia', '', 'Si', '321', '321', 'SD', 'ASD', 'ASD', 'Casado Bienes Mancomunados', 'Si', '321', '', '32132', '1321', '321', '321', '3132132132', '1321', '321321', '', '', '', '');
INSERT INTO `pfa` VALUES ('20', 'PFA-020', 'SDF', 'KJH', 'KJH', 'KJH', '3132131321313', '1312132131', '2121321321', 'ASD', '321321', '321', '321', '321321', '321', 'SDFSF', '321', '321', 'ASD@G.CPM', 'Masculino', '1989-09-07', '24', 'ASD', '321', '321', 'Casa Propia', '', 'Si', '321', '321', 'SD', 'ASD', 'ASD', 'Casado Bienes Mancomunados', 'Si', '321', '', '32132', '1321', '321', '321', '3132132132', '1321', '321321', '', '', '', '');
INSERT INTO `pfa` VALUES ('21', 'PFA-021', 'SDF', 'KJH', 'KJH', 'KJH', '3132131321313', '1312132131', '2121321321', 'ASD', '321321', '321', '321', '321321', '321', 'SDFSF', '321', '321', 'ASD@G.CPM', 'Masculino', '1989-09-07', '24', 'ASD', '321', '321', 'Casa Propia', '', 'Si', '321', '321', 'SD', 'ASD', 'ASD', 'Casado Bienes Mancomunados', 'Si', '321', '', '32132', '1321', '321', '321', '3132132132', '1321', '321321', '', '', '', '');
INSERT INTO `pfa` VALUES ('22', 'PFA-022', 'Adrian', 'Eduardo', 'Mata', 'Martinez', 'JNKJNKJNKJNKJ', '2132131313', '1313131313', 'nmn', '321', 'kjhkjhk', 'jhkjh', 'kjhkj', 'hkjhkj', 'asdasd', '3213', 'JHGJHG', 'kb@g.com', 'Masculino', '1989-09-07', '27', 'sd', '3121', 'dasd', 'Casa Propia', '', 'Si', '321', '321', 'Jhkjh', 'Jkjhkjh', 'Kjhk', 'Casado Bienes Mancomunados', 'Si', 'kjhkjhk', '', 'kjhkjhk', 'jhkjh', '0', 'hkjh', '3455465464', '6546', 'sdasdasdasdkjhkjhkjh', 'asdasasd', '50000', 'kjhkjhkjh', '0000');
INSERT INTO `pfa` VALUES ('23', 'PFA-023', 'Adrian', 'Eduardo', 'Mata', 'Martinez', 'MAMA890907CV4', '2132131313', '1313131313', 'nmn', '321', 'kjhkjhk', 'jhkjh', 'kjhkj', 'hkjhkj', 'asdasd', '3213', 'JHGJHG', 'kb@g.com', 'Masculino', '1989-09-07', '27', 'sd', '3121', 'dasd', 'Casa Propia', '', 'Si', '321', '321', 'Jhkjh', 'Jkjhkjh', 'Kjhk', 'Casado Bienes Mancomunados', 'Si', 'kjhkjhk', '', 'kjhkjhk', 'asdas', '12321', 'hkjh', '3455465464', '6546', 'sdasdasdasdkjhkjhkjh', 'asdasasd', '50000', 'kjhkjhkjh', '0000');

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
  `IngAdMensualAprox` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`,`Folio_Cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pfna
-- ----------------------------
INSERT INTO `pfna` VALUES ('11', 'PFNA-001', 'Lkmlkmlkm', 'Lkml', 'Kmlkml', 'Kmlkm', 'LKLMLKMLMLMLM', '6464646564', '6464646464', '46546546546546', '546', '5465', '465', '465', '465', '654654', '46', '546', 'sdf@fgg.com', '6464646464', 'Masculino', '1989-09-07', '654', '654', '654', '654', 'Casa Propia', '65465', 'Si', '654654', '0', 'Maria Guadalupe', 'Alvarado', 'Higareda', 'Casado Bienes Mancom', 'Si', 'oijoij', 'ing telematico', 'desarrollo', '1989-09-07', 'jklnkjnkj', '5064654654', '0', '65465', 'kjhj', 'kljlk', '64654', '456', '654', '654');
INSERT INTO `pfna` VALUES ('12', 'PFNA-012', 'Lkmlkmlkm', 'Lkml', 'Kmlkml', 'Kmlkm', 'LKLMLKMLMLMLM', '6464646564', '6464646464', '46546546546546', '546', '5465', '465', '465', '465', '654654', '46', '546', 'sdf@fgg.com', '6464646464', 'Masculino', '1989-09-07', '654', '654', '654', '654', 'Casa Propia', '65465', 'Si', '654654', '0', 'Maria Guadalupe', 'Alvarado', 'Higareda', 'Casado Bienes Mancom', 'Si', 'oijoij', 'ing telematico', 'desarrollo', '1989-09-07', 'jklnkjnkj', '5064654654', '0', '65465', 'kjhj', 'kljlk', '64654', '456', '654', '654');
INSERT INTO `pfna` VALUES ('13', 'PFNA-013', 'Lkmlkmlkm', 'Lkml', 'Kmlkml', 'Kmlkm', 'LKLMLKMLMLMLM', '6464646564', '6464646464', '46546546546546', '546', '5465', '465', '465', '465', '654654', '46', '546', 'sdf@fgg.com', '6464646464', 'Masculino', '1989-09-07', '654', '654', '654', '654', 'Casa Propia', '65465', 'Si', '654654', '0', 'Maria Guadalupe', 'Alvarado', 'Higareda', 'Casado Bienes Mancom', 'Si', 'oijoij', 'ing telematico', 'desarrollo', '1989-09-07', 'jklnkjnkj', '5064654654', '0', '65465', 'kjhj', 'kljlk', '64654', '456', '654', '654');
INSERT INTO `pfna` VALUES ('14', 'PFNA-014', 'Lkmlkmlkm', 'Lkml', 'Kmlkml', 'Kmlkm', 'LKLMLKMLMLMLM', '6464646564', '6464646464', '46546546546546', '546', '5465', '465', '465', '465', '654654', '46', '546', 'sdf@fgg.com', '6464646464', 'Masculino', '1989-09-07', '654', '654', '654', '654', 'Casa Propia', '65465', 'Si', '654654', '0', 'Maria Guadalupe', 'Alvarado', 'Higareda', 'Casado Bienes Mancom', 'Si', 'oijoij', 'ing telematico', 'desarrollo', '1989-09-07', 'jklnkjnkj', '5064654654', '0', '65465', 'kjhj', 'kljlk', '64654', '456', '654', '654');
INSERT INTO `pfna` VALUES ('15', 'PFNA-015', 'Lkmlkmlkm', 'Lkml', 'Kmlkml', 'Kmlkm', 'LKLMLKMLMLMLM', '6464646564', '6464646464', '46546546546546', '546', '5465', '465', '465', '465', '654654', '46', '546', 'sdf@fgg.com', '6464646464', 'Masculino', '1989-09-07', '654', '654', '654', '654', 'Casa Propia', '65465', 'Si', '654654', '0', 'Maria Guadalupe', 'Alvarado', 'Higareda', 'Casado Bienes Mancom', 'Si', 'oijoij', 'ing telematico', 'desarrollo', '1989-09-07', 'jklnkjnkj', '5064654654', '0', '65465', 'kjhj', 'kljlk', '64654', '456', '654', '654');
INSERT INTO `pfna` VALUES ('16', 'PFNA-016', 'Lkmlkmlkm', 'Lkml', 'Kmlkml', 'Kmlkm', 'LKLMLKMLMLMLM', '6464646564', '6464646464', '46546546546546', '546', '5465', '465', '465', '465', '654654', '46', '546', 'sdf@fgg.com', '6464646464', 'Masculino', '1989-09-07', '654', '654', '654', '654', 'Casa Propia', '65465', 'Si', '654654', '0', 'Maria Guadalupe', 'Alvarado', 'Higareda', 'Casado Bienes Mancom', 'Si', 'oijoij', 'ing telematico', 'desarrollo', '1989-09-07', 'jklnkjnkj', '5064654654', '0', '65465', 'kjhj', 'kljlk', '64654', '456', '654', '654');
INSERT INTO `pfna` VALUES ('17', 'PFNA-017', 'Lkmlkmlkm', 'Lkml', 'Kmlkml', 'Kmlkm', 'LKLMLKMLMLMLM', '6464646564', '6464646464', '46546546546546', '546', '5465', '465', '465', '465', '654654', '46', '546', 'sdf@fgg.com', '6464646464', 'Masculino', '1989-09-07', '654', '654', '654', '654', 'Casa Propia', '65465', 'Si', '654654', '0', 'Maria Guadalupe', 'Alvarado', 'Higareda', 'Casado Bienes Mancom', 'Si', 'oijoij', 'ing telematico', 'desarrollo', '1989-09-07', 'jklnkjnkj', '5064654654', '0', '65465', 'kjhj', 'kljlk', '64654', '456', '654', '654');
INSERT INTO `pfna` VALUES ('18', 'PFNA-018', 'Lkmlkmlkm', 'Lkml', 'Kmlkml', 'Kmlkm', 'LKLMLKMLMLMLM', '6464646564', '6464646464', '46546546546546', '546', '5465', '465', '465', '465', '654654', '46', '546', 'sdf@fgg.com', '6464646464', 'Masculino', '1989-09-07', '654', '654', '654', '654', 'Casa Propia', '65465', 'Si', '654654', '0', 'Maria Guadalupe', 'Alvarado', 'Higareda', 'Casado Bienes Mancom', 'Si', 'oijoij', 'ing telematico', 'desarrollo', '1989-09-07', 'jklnkjnkj', '5064654654', '0', '65465', 'kjhj', 'kljlk', '64654', '456', '654', '654');
INSERT INTO `pfna` VALUES ('19', 'PFNA-019', 'Lkmlkmlkm', 'Lkml', 'Kmlkml', 'Kmlkm', 'LKLMLKMLMLMLM', '6464646564', '6464646464', '46546546546546', '546', '5465', '465', '465', '465', '654654', '46', '546', 'sdf@fgg.com', '6464646464', 'Masculino', '1989-09-07', '654', '654', '654', '654', 'Casa Propia', '65465', 'Si', '654654', '0', 'Maria Guadalupe', 'Alvarado', 'Higareda', 'Casado Bienes Mancom', 'Si', 'oijoij', 'ing telematico', 'desarrollo', '1989-09-07', 'jklnkjnkj', '5064654654', '0', '65465', 'kjhj', 'kljlk', '64654', '456', '654', '654');
INSERT INTO `pfna` VALUES ('20', 'PFNA-020', 'Lkmlkmlkm', 'Lkml', 'Kmlkml', 'Kmlkm', 'LKLMLKMLMLMLM', '6464646564', '6464646464', '46546546546546', '546', '5465', '465', '465', '465', '654654', '46', '546', 'sdf@fgg.com', '6464646464', 'Masculino', '1989-09-07', '654', '654', '654', '654', 'Casa Propia', '65465', 'Si', '654654', '0', 'Maria Guadalupe', 'Alvarado', 'Higareda', 'Casado Bienes Mancom', 'Si', 'oijoij', 'ing telematico', 'desarrollo', '1989-09-07', 'jklnkjnkj', '5064654654', '0', '65465', 'kjhj', 'kljlk', '64654', '456', '654', '654');
INSERT INTO `pfna` VALUES ('21', 'PFNA-021', 'Lkmlkmlkm', 'Lkml', 'Kmlkml', 'Kmlkm', 'LKLMLKMLMLMLM', '6464646564', '6464646464', '46546546546546', '546', '5465', '465', '465', '465', '654654', '46', '546', 'sdf@fgg.com', '6464646464', 'Masculino', '1989-09-07', '654', '654', '654', '654', 'Casa Propia', '65465', 'Si', '654654', '0', 'Maria Guadalupe', 'Alvarado', 'Higareda', 'Casado Bienes Mancom', 'Si', 'oijoij', 'ing telematico', 'desarrollo', '1989-09-07', 'jklnkjnkj', '5064654654', '0', '65465', 'kjhj', 'kljlk', '64654', '456', '654', '654');
INSERT INTO `pfna` VALUES ('22', 'PFNA-022', 'Lkmlkmlkm', 'Lkml', 'Kmlkml', 'Kmlkm', 'LKLMLKMLMLMLM', '6464646564', '6464646464', '46546546546546', '546', '5465', '465', '465', '465', '654654', '46', '546', 'sdf@fgg.com', '6464646464', 'Masculino', '1989-09-07', '654', '654', '654', '654', 'Casa Propia', '65465', 'Si', '654654', '0', 'Maria Guadalupe', 'Alvarado', 'Higareda', 'Casado Bienes Mancom', 'Si', 'oijoij', 'ing telematico', 'desarrollo', '1989-09-07', 'jklnkjnkj', '5064654654', '0', '65465', 'kjhj', 'kljlk', '64654', '456', '654', '654');
INSERT INTO `pfna` VALUES ('23', 'PFNA-023', 'Lkmlkmlkm', 'Lkml', 'Kmlkml', 'Kmlkm', 'LKLMLKMLMLMLM', '6464646564', '6464646464', '46546546546546', '546', '5465', '465', '465', '465', '654654', '46', '546', 'sdf@fgg.com', '6464646464', 'Masculino', '1989-09-07', '654', '654', '654', '654', 'Casa Propia', '65465', 'Si', '654654', '0', 'Maria Guadalupe', 'Alvarado', 'Higareda', 'Casado Bienes Mancom', 'Si', 'oijoij', 'ing telematico', 'desarrollo', '1989-09-07', 'jklnkjnkj', '5064654654', '0', '65465', 'kjhj', 'kljlk', '64654', '456', '654', '654');
INSERT INTO `pfna` VALUES ('24', 'PFNA-024', 'Lkmlkmlkm', 'Lkml', 'Kmlkml', 'Kmlkm', 'LKLMLKMLMLMLM', '6464646564', '6464646464', '46546546546546', '546', '5465', '465', '465', '465', '654654', '46', '546', 'sdf@fgg.com', '6464646464', 'Masculino', '1989-09-07', '654', '654', '654', '654', 'Casa Propia', '65465', 'Si', '654654', '0', 'Maria Guadalupe', 'Alvarado', 'Higareda', 'Casado Bienes Mancom', 'Si', 'oijoij', 'ing telematico', 'desarrollo', '1989-09-07', 'jklnkjnkj', '5064654654', '0', '65465', 'kjhj', 'kljlk', '64654', '456', '654', '654');
INSERT INTO `pfna` VALUES ('25', 'PFNA-025', 'Lkmlkmlkm', 'Lkml', 'Kmlkml', 'Kmlkm', 'LKLMLKMLMLMLM', '6464646564', '6464646464', '46546546546546', '546', '5465', '465', '465', '465', '654654', '46', '546', 'sdf@fgg.com', '6464646464', 'Masculino', '1989-09-07', '654', '654', '654', '654', 'Casa Propia', '65465', 'Si', '654654', '0', 'Maria Guadalupe', 'Alvarado', 'Higareda', 'Casado Bienes Mancom', 'Si', 'oijoij', 'ing telematico', 'desarrollo', '1989-09-07', 'jklnkjnkj', '5064654654', '0', '65465', 'kjhj', 'kljlk', '64654', '456', '654', '654');
INSERT INTO `pfna` VALUES ('26', 'PFNA-026', 'Lkmlkmlkm', 'Lkml', 'Kmlkml', 'Kmlkm', 'LKLMLKMLMLMLM', '6464646564', '6464646464', '46546546546546', '546', '5465', '465', '465', '465', '654654', '46', '546', 'sdf@fgg.com', '6464646464', 'Masculino', '1989-09-07', '654', '654', '654', '654', 'Casa Propia', '65465', 'Si', '654654', '0', 'Maria Guadalupe', 'Alvarado', 'Higareda', 'Casado Bienes Mancom', 'Si', 'oijoij', 'ing telematico', 'desarrollo', '1989-09-07', 'jklnkjnkj', '5064654654', '0', '65465', 'kjhj', 'kljlk', '64654', '456', '654', '654');
INSERT INTO `pfna` VALUES ('27', 'PFNA-027', 'Lkmlkmlkm', 'Lkml', 'Kmlkml', 'Kmlkm', 'LKLMLKMLMLMLM', '6464646564', '6464646464', '46546546546546', '546', '5465', '465', '465', '465', '654654', '46', '546', 'sdf@fgg.com', '6464646464', 'Masculino', '1989-09-07', '654', '654', '654', '654', 'Casa Propia', '65465', 'Si', '452', '452', 'Maria Guadalupe', 'Alvarado', 'Higareda', 'Casado Bienes Mancom', 'Si', 'oijoij', 'ing telematico', 'desarrollo', '1989-09-07', 'jklnkjnkj', '5064654654', '0', '65465', 'kjhj', 'kljlk', '64654', '456', '654', '654');
INSERT INTO `pfna` VALUES ('28', 'PFNA-028', 'Lkmlkmlkm', 'Lkml', 'Kmlkml', 'Kmlkm', 'LKLMLKMLMLMLM', '6464646564', '6464646464', '46546546546546', '546', '5465', '465', '465', '465', '654654', '46', '546', 'sdf@fgg.com', '6464646464', 'Masculino', '1989-09-07', '654', '654', '654', '654', 'Casa Propia', '65465', 'Si', '452', '452', 'Maria Guadalupe', 'Alvarado', 'Higareda', 'Casado Bienes Mancom', 'Si', 'oijoij', 'ing telematico', 'desarrollo', '1989-09-07', 'jklnkjnkj', '5064654654', '0', '65465', 'kjhj', 'kljlk', '64654', '456', '654', '654');
INSERT INTO `pfna` VALUES ('29', 'PFNA-029', 'Lkmlkmlkm', 'Lkml', 'Kmlkml', 'Kmlkm', 'LKLMLKMLMLMLM', '6464646564', '6464646464', '46546546546546', '546', '5465', '465', '465', '465', '654654', '46', '546', 'sdf@fgg.com', '6464646464', 'Masculino', '1989-09-07', '654', '654', '654', '654', 'Casa Propia', '65465', 'Si', '452', '452', 'Maria Guadalupe', 'Alvarado', 'Higareda', 'Casado Bienes Mancom', 'Si', 'oijoij', 'ing telematico', 'desarrollo', '1989-09-07', 'jklnkjnkj', '5064654654', '0', '65465', 'kjhj', 'kljlk', '64654', '456', '654', '654');
INSERT INTO `pfna` VALUES ('30', 'PFNA-030', 'Lkmlkmlkm', 'Lkml', 'Kmlkml', 'Kmlkm', 'LKLMLKMLMLMLM', '6464646564', '6464646464', '46546546546546', '546', '5465', '465', '465', '465', '654654', '46', '546', 'sdf@fgg.com', '6464646464', 'Masculino', '1989-09-07', '654', '654', '654', '654', 'Casa Propia', '65465', 'Si', '452', '452', 'Maria Guadalupe', 'Alvarado', 'Higareda', 'Casado Bienes Mancom', 'Si', 'oijoij', 'ing telematico', 'desarrollo', '1989-09-07', 'jklnkjnkj', '5064654654', '0', '65465', 'kjhj', 'kljlk', '64654', '456', '654', '654');
INSERT INTO `pfna` VALUES ('31', 'PFNA-031', 'Lkmlkmlkm', 'Lkml', 'Kmlkml', 'Kmlkm', 'LKLMLKMLMLMLM', '6464646564', '6464646464', '46546546546546', '546', '5465', '465', '465', '465', '654654', '46', '546', 'sdf@fgg.com', '6464646464', 'Masculino', '1989-09-07', '654', '654', '654', '654', 'Casa Propia', '65465', 'Si', '452', '452', 'Maria Guadalupe', 'Alvarado', 'Higareda', 'Casado Bienes Mancom', 'Si', 'oijoij', 'ing telematico', 'desarrollo', '1989-09-07', 'jklnkjnkj', '5064654654', '0', '65465', 'kjhj', 'kljlk', '64654', '456', '654', '654');
INSERT INTO `pfna` VALUES ('32', 'PFNA-032', 'Lkmlkmlkm', 'Lkml', 'Kmlkml', 'Kmlkm', 'LKLMLKMLMLMLM', '6464646564', '6464646464', '46546546546546', '546', '5465', '465', '465', '465', '654654', '46', '546', 'sdf@fgg.com', '6464646464', 'Masculino', '1989-09-07', '654', '654', '654', '654', 'Casa Propia', '65465', 'Si', '452', '452', 'Maria Guadalupe', 'Alvarado', 'Higareda', 'Casado Bienes Mancom', 'Si', 'oijoij', 'ing telematico', 'desarrollo', '1989-09-07', 'jklnkjnkj', '5064654654', '0', '65465', 'kjhj', 'kljlk', '64654', '456', '654', '654');
INSERT INTO `pfna` VALUES ('33', 'PFNA-033', 'Adrian', 'Eduardo', 'Mata', 'Martinez', 'LKLMLKMLMLMLM', '6464646564', '6464646464', '46546546546546', '546', '5465', '465', '465', '465', '654654', '46', '546', 'sdf@fgg.com', '6464646464', 'Masculino', '1989-09-07', '654', '654', '654', '654', 'Casa Propia', '65465', 'Si', '452', '452', 'Maria Guadalupe', 'Alvarado', 'Higareda', 'Casado Bienes Mancom', 'Si', 'oijoij', 'ing telematico', 'desarrollo', '1989-09-07', 'jklnkjnkj', '5064654654', '0', '65465', 'kjhj', 'kljlk', '64654', '456', '654', '654');
INSERT INTO `pfna` VALUES ('34', 'PFNA-034', 'Adrian', 'Eduardo', 'Mata', 'Martinez', 'MAMA890907CV4', '6464646564', '6464646464', '46546546546546', '546', '5465', '465', '465', '465', '654654', '46', '546', 'sdf@fgg.com', '6464646464', 'Masculino', '1989-09-07', '654', '654', '654', '654', 'Casa Propia', '65465', 'Si', '452', '452', 'Maria Guadalupe', 'Alvarado', 'Higareda', 'Casado Bienes Mancomunados', 'Si', 'oijoij', 'ing telematico', 'desarrollo', '1989-09-07', 'jklnkjnkj', '5064654654', '0', '65465', 'kjhj', 'kljlk', '64654', '456', '654', '654');

-- ----------------------------
-- Table structure for `pm`
-- ----------------------------
DROP TABLE IF EXISTS `pm`;
CREATE TABLE `pm` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
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
  `PorAccPM2` int(3) NOT NULL,
  PRIMARY KEY (`Id`,`Folio_Cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pm
-- ----------------------------
INSERT INTO `pm` VALUES ('4', 'PM-001', 'Servicios Financieros Del Guadiana', '4552452452452452452', '321654645654654', '351231312313513', '321321', 'Colinia sol', 'cd sol', 'edo sol', 'Durango', '321321', 'sol@hotmaol.com', '', 'Mexico sol', 'nomrbe', 'segundo', 'paterno', 'materno', 'Masculino', 'Mexico', '1989-09-07', 'Casado Bienes Mancomunados', '312654654654', 'conemp@hotmail.com', 'mama890907cv4', '3216546465465465456', '9876543210', 'Mexicana', 'Empleado', '5000', '', '321', 'Ninguna', '1989.6', '321', '1989-09-07', '312', '1989-09-07', '312', '321', 'dfgdfgdfg', 'sdf32sdf321', '25', 'sdfsdfsf', 's3df21s3df21', '25', 'adasdasd', 'ada3sd21a231sd', '25', 'asdasdasd', 'asd3asd123asd123', '25', 'asdasdasd', 'asd231asd123ad', '50', 'asdasdasd', 'sd13ad123asd', '50');

-- ----------------------------
-- Table structure for `registro`
-- ----------------------------
DROP TABLE IF EXISTS `registro`;
CREATE TABLE `registro` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Folio_Cliente` varchar(50) NOT NULL,
  `Fecha_apertura` date NOT NULL,
  `Fecha_Modificacion` date NOT NULL,
  `Responsable` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`,`Folio_Cliente`),
  UNIQUE KEY `folio` (`Folio_Cliente`),
  KEY `Id` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of registro
-- ----------------------------
INSERT INTO `registro` VALUES ('50', 'PFA-001', '2017-02-16', '0000-00-00', '0');
INSERT INTO `registro` VALUES ('51', 'PFA-015', '2017-02-16', '0000-00-00', '0');
INSERT INTO `registro` VALUES ('52', 'PFA-016', '2017-02-16', '0000-00-00', '0');
INSERT INTO `registro` VALUES ('53', 'PFA-017', '2017-02-16', '0000-00-00', '0');
INSERT INTO `registro` VALUES ('54', 'PFA-018', '2017-02-16', '0000-00-00', '0');
INSERT INTO `registro` VALUES ('55', 'PFA-019', '2017-02-16', '0000-00-00', '0');
INSERT INTO `registro` VALUES ('56', 'PFA-020', '2017-02-16', '0000-00-00', '0');
INSERT INTO `registro` VALUES ('57', 'PFA-021', '2017-02-16', '0000-00-00', '0');
INSERT INTO `registro` VALUES ('58', 'PFA-022', '2017-02-17', '0000-00-00', '0');
INSERT INTO `registro` VALUES ('59', 'PFA-023', '2017-02-17', '0000-00-00', '0');
INSERT INTO `registro` VALUES ('62', 'PFNA-001', '2017-02-22', '0000-00-00', '0');
INSERT INTO `registro` VALUES ('63', 'PFNA-012', '2017-02-22', '0000-00-00', '0');
INSERT INTO `registro` VALUES ('64', 'PFNA-013', '2017-02-22', '0000-00-00', '0');
INSERT INTO `registro` VALUES ('65', 'PFNA-014', '2017-02-22', '0000-00-00', '0');
INSERT INTO `registro` VALUES ('66', 'PFNA-015', '2017-02-22', '0000-00-00', '0');
INSERT INTO `registro` VALUES ('67', 'PFNA-016', '2017-02-22', '0000-00-00', '0');
INSERT INTO `registro` VALUES ('68', 'PFNA-017', '2017-02-22', '0000-00-00', '0');
INSERT INTO `registro` VALUES ('69', 'PFNA-018', '2017-02-22', '0000-00-00', '0');
INSERT INTO `registro` VALUES ('70', 'PFNA-019', '2017-02-22', '0000-00-00', '0');
INSERT INTO `registro` VALUES ('71', 'PFNA-020', '2017-02-22', '0000-00-00', '0');
INSERT INTO `registro` VALUES ('72', 'PFNA-021', '2017-02-22', '0000-00-00', '0');
INSERT INTO `registro` VALUES ('73', 'PFNA-022', '2017-02-22', '0000-00-00', '0');
INSERT INTO `registro` VALUES ('74', 'PFNA-023', '2017-02-22', '0000-00-00', '0');
INSERT INTO `registro` VALUES ('75', 'PFNA-024', '2017-02-22', '0000-00-00', '0');
INSERT INTO `registro` VALUES ('76', 'PFNA-025', '2017-02-22', '0000-00-00', '0');
INSERT INTO `registro` VALUES ('77', 'PFNA-026', '2017-02-22', '0000-00-00', '0');
INSERT INTO `registro` VALUES ('78', 'PFNA-027', '2017-02-22', '0000-00-00', '0');
INSERT INTO `registro` VALUES ('79', 'PFNA-028', '2017-02-22', '0000-00-00', '0');
INSERT INTO `registro` VALUES ('80', 'PFNA-029', '2017-02-22', '0000-00-00', '0');
INSERT INTO `registro` VALUES ('81', 'PFNA-030', '2017-02-22', '0000-00-00', '0');
INSERT INTO `registro` VALUES ('82', 'PFNA-031', '2017-02-22', '0000-00-00', '0');
INSERT INTO `registro` VALUES ('83', 'PFNA-032', '2017-02-22', '0000-00-00', '0');
INSERT INTO `registro` VALUES ('84', 'PFNA-033', '2017-02-22', '0000-00-00', '0');
INSERT INTO `registro` VALUES ('85', 'PFNA-034', '2017-02-22', '0000-00-00', '0');

-- ----------------------------
-- Table structure for `solicitudes`
-- ----------------------------
DROP TABLE IF EXISTS `solicitudes`;
CREATE TABLE `solicitudes` (
  `Id` int(11) NOT NULL,
  `Cliente` varchar(255) NOT NULL,
  `TipoCredito` varchar(255) NOT NULL,
  `NomSolicitante` varchar(255) NOT NULL,
  `SegNomSolicitante` varchar(255) NOT NULL,
  `ApPatSolicitante` varchar(255) NOT NULL,
  `ApMatSolicitante` varchar(255) NOT NULL,
  `RFCSolicitante` varchar(255) NOT NULL,
  `TelSolicitante` varchar(255) NOT NULL,
  `MovSolicitante` varchar(255) NOT NULL,
  `DirSolicitante` varchar(255) NOT NULL,
  `ColSolicitante` varchar(255) NOT NULL,
  `CdSolicitante` varchar(255) NOT NULL,
  `LugNacSolicitante` varchar(255) NOT NULL,
  `EdoSolicitante` varchar(255) NOT NULL,
  `CPSolicitante` varchar(255) NOT NULL,
  `CURPSolicitante` varchar(255) NOT NULL,
  `EmailSolicitante` varchar(255) NOT NULL,
  `FaxSolicitante` varchar(255) NOT NULL,
  `NomDatConEmp` varchar(255) NOT NULL,
  `TelDatConEmp` varchar(255) NOT NULL,
  `EmailDatConEmp` varchar(255) NOT NULL,
  `RFCDatConEmp` varchar(255) NOT NULL,
  `FaxDatConEmp` varchar(255) NOT NULL,
  `PuestDatConEmp` varchar(255) NOT NULL,
  `SexoDatGen` varchar(255) NOT NULL,
  `FeNacDatGen` date NOT NULL,
  `EdDatGen` varchar(255) NOT NULL,
  `NaDatGen` varchar(255) NOT NULL,
  `NoDepDatGen` varchar(255) NOT NULL,
  `AcDomDatGen` varchar(255) NOT NULL,
  `VivDatGen` varchar(255) NOT NULL,
  `OtrvivDatGen` varchar(255) NOT NULL,
  `ImpMenDatGen` varchar(255) NOT NULL,
  `PropInmuDatGen` varchar(255) NOT NULL,
  `ArDomDatGen` varchar(255) NOT NULL,
  `AnResDatGen` varchar(255) NOT NULL,
  `NomBenDatGen` varchar(255) NOT NULL,
  `ApPatBenDatGen` varchar(255) NOT NULL,
  `ApMatBenDatGen` varchar(255) NOT NULL,
  `EstCivDatGen` varchar(255) NOT NULL,
  `AuPropDatGen` varchar(255) NOT NULL,
  `MarDatGen` varchar(255) NOT NULL,
  `ActPrinDatGenPM` varchar(255) NOT NULL,
  `IniOpDatGenPM` date NOT NULL,
  `CantPerDatGenPM` varchar(255) NOT NULL,
  `AntConsEmp` varchar(255) NOT NULL,
  `ApoConsEmp` varchar(255) NOT NULL,
  `OcupDatEmp` varchar(255) NOT NULL,
  `PuestDatEmp` varchar(255) NOT NULL,
  `DepDatEmp` varchar(255) NOT NULL,
  `DesAnDatEmp` varchar(255) NOT NULL,
  `CompDatEmp` varchar(255) NOT NULL,
  `TelDatEmp` varchar(255) NOT NULL,
  `NoEmDatEmp` varchar(255) NOT NULL,
  `ExtDatEmp` varchar(255) NOT NULL,
  `GiroDatEmp` varchar(255) NOT NULL,
  `DomDatEmp` varchar(255) NOT NULL,
  `NomRefPer` varchar(255) NOT NULL,
  `ParenRefPer` varchar(255) NOT NULL,
  `TelRefPer` varchar(255) NOT NULL,
  `NomRefPer2` varchar(255) NOT NULL,
  `ParenRefPer2` varchar(255) NOT NULL,
  `TelRefPer2` varchar(255) NOT NULL,
  `BancRefBan` varchar(255) NOT NULL,
  `NoTarRefBan` varchar(255) NOT NULL,
  `BancRefBan2` varchar(255) NOT NULL,
  `NoTarRefBan2` varchar(255) NOT NULL,
  `SucRefBan` varchar(255) NOT NULL,
  `SucRefBan2` varchar(255) NOT NULL,
  `FecApRefBan` date NOT NULL,
  `FecApRefBan2` date NOT NULL,
  `EmpRefCom` varchar(255) NOT NULL,
  `AntRefCom` varchar(255) NOT NULL,
  `TelRefCom` varchar(255) NOT NULL,
  `EmpRefCom2` varchar(255) NOT NULL,
  `AntRefCom2` varchar(255) NOT NULL,
  `TelRefCom2` varchar(255) NOT NULL,
  `BancCarDir` varchar(255) NOT NULL,
  `NoTarCarDir` varchar(255) NOT NULL,
  `NomDatCon` varchar(255) NOT NULL,
  `ApPatDatCon` varchar(255) NOT NULL,
  `ApMatDatCon` varchar(255) NOT NULL,
  `CompDatCon` varchar(255) NOT NULL,
  `PuestDatCon` varchar(255) NOT NULL,
  `NomObPerMor` varchar(255) NOT NULL,
  `DirObPerMor` varchar(255) NOT NULL,
  `ColObPerMor` varchar(255) NOT NULL,
  `CdObPerMor` varchar(255) NOT NULL,
  `LugNacObPerMor` varchar(255) NOT NULL,
  `EdoObPerMor` varchar(255) NOT NULL,
  `CPObPerMor` varchar(255) NOT NULL,
  `RFCObPerMor` varchar(255) NOT NULL,
  `TelObPerMor` varchar(255) NOT NULL,
  `FaxObPerMor` varchar(255) NOT NULL,
  `AntConsEmpPM` varchar(255) NOT NULL,
  `ApoConsEmpPM` varchar(255) NOT NULL,
  `ActPrinDatGen` varchar(255) NOT NULL,
  `IniOpDatGen` date NOT NULL,
  `CantPerDatGen` varchar(255) NOT NULL,
  `NomAccionista1` varchar(255) NOT NULL,
  `RFCAccionista1` varchar(255) NOT NULL,
  `PorcentAccionista1` varchar(255) NOT NULL,
  `NomAccionista2` varchar(255) NOT NULL,
  `RFCAccionista2` varchar(255) NOT NULL,
  `PorcentAccionista2` varchar(255) NOT NULL,
  `NomAccionista3` varchar(255) NOT NULL,
  `RFCAccionista3` varchar(255) NOT NULL,
  `PorcentAccionista3` varchar(255) NOT NULL,
  `NomAccionista4` varchar(255) NOT NULL,
  `RFCAccionista4` varchar(255) NOT NULL,
  `PorcentAccionista4` varchar(255) NOT NULL,
  `NomAccionistaPM1` varchar(255) NOT NULL,
  `RFCAccionistaPM1` varchar(255) NOT NULL,
  `PorcentAccionistaPM1` varchar(255) NOT NULL,
  `NomAccionistaPM2` varchar(255) NOT NULL,
  `RFCAccionistaPM2` varchar(255) NOT NULL,
  `PorcentAccionistaPM2` varchar(255) NOT NULL,
  `NomObSol` varchar(255) NOT NULL,
  `ApPatObSol` varchar(255) NOT NULL,
  `ApMatObSol` varchar(255) NOT NULL,
  `RFCObSol` varchar(255) NOT NULL,
  `TelObSol` varchar(255) NOT NULL,
  `MovObSol` varchar(255) NOT NULL,
  `DirObSol` varchar(255) NOT NULL,
  `ColObSol` varchar(255) NOT NULL,
  `CdObSol` varchar(255) NOT NULL,
  `LugNacObSol` varchar(255) NOT NULL,
  `PropObSol` varchar(255) NOT NULL,
  `EdoObSol` varchar(255) NOT NULL,
  `CPObSol` varchar(255) NOT NULL,
  `EmailObSol` varchar(255) NOT NULL,
  `SexoObSol` varchar(255) NOT NULL,
  `FeNacObSol` date NOT NULL,
  `EdObSol` varchar(255) NOT NULL,
  `CURPObSol` varchar(255) NOT NULL,
  `NomObSolPF` varchar(255) NOT NULL,
  `SexoObSolPF` varchar(255) NOT NULL,
  `FeNacObSolPF` date NOT NULL,
  `RFCObSolPF` varchar(255) NOT NULL,
  `CURPObSolPF` varchar(255) NOT NULL,
  `EdObSolPF` varchar(255) NOT NULL,
  `NomObSol2` varchar(255) NOT NULL,
  `ApPatObSol2` varchar(50) NOT NULL,
  `ApMatObSol2` varchar(50) NOT NULL,
  `RFCObSol2` varchar(255) NOT NULL,
  `TelObSol2` varchar(255) NOT NULL,
  `MovObSol2` varchar(255) NOT NULL,
  `DirObSol2` varchar(255) NOT NULL,
  `ColObSol2` varchar(255) NOT NULL,
  `CdObSol2` varchar(255) NOT NULL,
  `LugNacObSol2` varchar(255) NOT NULL,
  `PropObSol2` varchar(255) NOT NULL,
  `EdoObSol2` varchar(255) NOT NULL,
  `CPObSol2` varchar(255) NOT NULL,
  `EmailObSol2` varchar(255) NOT NULL,
  `SexoObSol2` varchar(255) NOT NULL,
  `FeNacObSol2` date NOT NULL,
  `EdObSol2` varchar(255) NOT NULL,
  `CURPObSol2` varchar(255) NOT NULL,
  `NomObSolPF2` varchar(255) NOT NULL,
  `SexoObSolPF2` varchar(255) NOT NULL,
  `FeNacObSolPF2` date NOT NULL,
  `RFCObSolPF2` varchar(255) NOT NULL,
  `CURPObSolPF2` varchar(255) NOT NULL,
  `EdObSolPF2` varchar(255) NOT NULL,
  `NomRepLegInvHist` varchar(255) NOT NULL,
  `RFCRepLegInvHist` varchar(255) NOT NULL,
  `DirRepLegInvHist` varchar(255) NOT NULL,
  `ColRepLegInvHist` varchar(255) NOT NULL,
  `CdRepLegInvHist` varchar(255) NOT NULL,
  `EdoRepLegInvHist` varchar(255) NOT NULL,
  `CPRepLegInvHist` varchar(255) NOT NULL,
  `TelRepLegInHist` varchar(255) NOT NULL,
  `NomObSolPFInvHist` varchar(255) NOT NULL,
  `RFCObSolPFInvHist` varchar(255) NOT NULL,
  `DirObSolPFInvHist` varchar(255) NOT NULL,
  `ColObSolPFInvHist` varchar(255) NOT NULL,
  `CdObSolPFInvHist` varchar(255) NOT NULL,
  `EdoObSolPFInvHist` varchar(255) NOT NULL,
  `CPObSolPFInvHist` varchar(255) NOT NULL,
  `TelObSolPFInHist` varchar(255) NOT NULL,
  `Fecha` datetime NOT NULL,
  `ClavConcesionario` varchar(255) NOT NULL,
  `NomConcesionario` varchar(255) NOT NULL,
  `NomVendedor` varchar(255) NOT NULL,
  `NomGerenteGral` varchar(255) NOT NULL,
  `StatusSolicitud` varchar(255) NOT NULL,
  `TipoSolicitud` varchar(255) NOT NULL,
  `NumDirSol` varchar(255) NOT NULL,
  `MunicipioSolicitante` varchar(255) NOT NULL,
  `NumSerieFIEL` varchar(255) NOT NULL,
  `DomicilioLaboral` varchar(255) NOT NULL,
  `SueldoSolicitante` varchar(255) NOT NULL,
  `ActEcoAdicional` varchar(255) NOT NULL,
  `IngAdMensualAprox` varchar(255) NOT NULL,
  `INESolicitante` varchar(255) NOT NULL,
  `Adjunta_INESolicitante` varchar(255) NOT NULL,
  `Pasaporte_o_CedulaProfSolicitante` varchar(255) NOT NULL,
  `Adjunta_Pasaporte_o_CedulaProfSolicitante` varchar(255) NOT NULL,
  `CartillaMilitarSolicitante` varchar(255) NOT NULL,
  `Adjunta_CartillaMilitarSolicitante` varchar(255) NOT NULL,
  `LicenciaConducirSolicitante` varchar(255) NOT NULL,
  `Adjunta_LicenciaConducirSolicitante` varchar(255) NOT NULL,
  `OtraIdentSolicitante` varchar(255) NOT NULL,
  `Adjunta_OtraIdentSolicitante` varchar(255) NOT NULL,
  `EspIdentSolicitante` varchar(255) NOT NULL,
  `CotejoVsOriginal` varchar(255) NOT NULL,
  `Adjunta_CURP_RFC_FEA` varchar(255) NOT NULL,
  `Adjunta_ComprobanteDom` varchar(255) NOT NULL,
  `DomicilioCoincideId` varchar(255) NOT NULL,
  `DomBeneficiario` varchar(255) NOT NULL,
  `ColBeneficiario` varchar(255) NOT NULL,
  `CPBeneficiario` varchar(255) NOT NULL,
  `PaisBeneficiario` varchar(255) NOT NULL,
  `TelBeneficiario` varchar(255) NOT NULL,
  `CURPBeneficiario` varchar(255) NOT NULL,
  `RFCBeneficiario` varchar(255) NOT NULL,
  `ParentescoBeneficiario` varchar(255) NOT NULL,
  `PorcientoBeneficiario` varchar(255) NOT NULL,
  `FeNacBeneficiario` varchar(255) NOT NULL,
  `MunBeneficiario` varchar(255) NOT NULL,
  `EdoBeneficiario` varchar(255) NOT NULL,
  `EdoCivilBeneficiario` varchar(255) NOT NULL,
  `SoConBeneficiario` varchar(255) NOT NULL,
  `OcuProfBeneficiario` varchar(255) NOT NULL,
  `PEPSBeneficiario` varchar(255) NOT NULL,
  `OrigenRecBeneficiario` varchar(255) NOT NULL,
  `PerTrans1` double(11,2) NOT NULL,
  `FuentePerTrans1` varchar(255) NOT NULL,
  `PerTrans2` double(11,2) NOT NULL,
  `FuentePerTrans2` varchar(255) NOT NULL,
  `PerTrans3` double(11,2) NOT NULL,
  `FuentePerTrans3` varchar(255) NOT NULL,
  `PerTrans4` double(11,2) NOT NULL,
  `FuentePerTrans4` varchar(255) NOT NULL,
  `PerTrans5` double(11,2) NOT NULL,
  `FuentePerTrans5` varchar(255) NOT NULL,
  `PerTrans6` double(11,2) NOT NULL,
  `FuentePerTrans6` varchar(255) NOT NULL,
  `PerTrans7` double(11,2) NOT NULL,
  `FuentePerTrans7` varchar(255) NOT NULL,
  `PerTrans8` double(11,2) NOT NULL,
  `FuentePerTrans8` varchar(255) NOT NULL,
  `PerTrans9` double(11,2) NOT NULL,
  `FuentePerTrans9` varchar(255) NOT NULL,
  `PerTrans10` double(11,2) NOT NULL,
  `FuentePerTrans10` varchar(255) NOT NULL,
  `ValorAuto` varchar(255) NOT NULL,
  `EngAutomovil` varchar(255) NOT NULL,
  `PorEnganche` varchar(255) NOT NULL,
  `PorFinanciamiento` varchar(255) NOT NULL,
  `MontoFinanciado` varchar(255) NOT NULL,
  `Plazo` varchar(255) NOT NULL,
  `PagoMensEsp` varchar(255) NOT NULL,
  `PEPS` varchar(255) NOT NULL,
  `NombrePEPS` varchar(255) NOT NULL,
  `ParentescoPEPS` varchar(255) NOT NULL,
  `PuestoPEPS` varchar(255) NOT NULL,
  `Antiguedad_ObjetoSocial` varchar(255) NOT NULL,
  `Antiguedad_Cliente` varchar(255) NOT NULL,
  `Naturaleza_Operaciones` varchar(255) NOT NULL,
  `Numero_Beneficiarios` varchar(255) NOT NULL,
  `Numero_TercerosRelacionados` varchar(255) NOT NULL,
  `PEPs_Relacionados` varchar(255) NOT NULL,
  `Alerta_Reputacional` varchar(255) NOT NULL,
  `Volumen_Esperado` varchar(255) NOT NULL,
  `Frecuencia_Esperada` varchar(255) NOT NULL,
  `Instrumento_Monetario` varchar(255) NOT NULL,
  `Canales_MediosUtilizados` varchar(255) NOT NULL,
  `Pais_EstadoOficial` varchar(255) NOT NULL,
  `Pais_EstadoResidencia` varchar(255) NOT NULL,
  `Pais_EstadoOperacion` varchar(255) NOT NULL,
  `Origen_Recursos` varchar(255) NOT NULL,
  `Destino_Recursos` varchar(255) NOT NULL,
  `Pais_EstadoResidenciaTerceros` varchar(255) NOT NULL,
  `TotalIngreso` double(11,2) NOT NULL,
  `GradoRiesgo` varchar(255) NOT NULL,
  `Comentarios` varchar(255) NOT NULL,
  PRIMARY KEY (`Cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of solicitudes
-- ----------------------------
INSERT INTO `solicitudes` VALUES ('469', '5', 'Credit', 'Adrian', 'Eduardo', 'Mata', 'Martinez', 'MAMA890907CV4', '6181949311', '6183030413', 'Operadores', 'Fidel Velazquez 1', 'Durango', 'México', 'Durango', '34229', 'MAMA890907HDGTR07', 'zoomwas@hotmail.com', '', '', '', '', '', '', '', 'Masculino', '1989-09-07', '27', 'Mexicana', '3', 'Recibo', 'Casa propiedad de sus familiares', '', '', 'Si', '2010', '25', 'Maria Guadalupe ', 'Alvarado', 'Higareda', 'Casado Bienes Separados', 'Si', 'Atoz 2003', '', '0000-00-00', '', '', '', '', 'Desarrollo', 'Administración', '2016', 'Volkswagen', '6189999999', '', '144', '', '', 'Alejandro Ariel Garcia', 'Conocido', '6188888888', 'Edgar Ortega Fuentes', 'Conocido', '6187777777', 'Banamex', '987654321', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', 'Banamex', '123456789', 'Maria Guadalupe', 'Alvarado', 'Higareda', 'Atel', 'Jefa', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Alejandro', 'Garcia', 'Alvarado', 'CANLESRFCRFC9', '6186666666', '6185555555', 'direccion #234', 'FSTG', 'Durango', 'Mexico', 'Si', 'Durango', '34228', 'canles@hotmail.com', 'Masculino', '1990-02-01', '22', 'CANLESCURP', '', '', '0000-00-00', '', '', '', 'Edgar', 'Ortega', 'Fuentes', 'EDGARRFCRFCRF', '6184444444', '6183333333', 'direccon 2 #234', 'San Marcos', 'Durango', 'Mexico', 'Si', 'Durango', '34227', 'edgar@hotmail.com', 'Masculino', '1990-05-04', '22', 'EDGARCURP', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-01-11 00:00:00', '0903', 'Volkswagen', 'Augusto', 'Silvia Mancinas', 'Rechazada', 'PFA', '222', 'Durango', 'XXXXXXXXXX', 'Voulevard Francisco Villa s/n', '5000', 'Ninguna', '0', '654654654', 'Si', '321', 'Si', '2', 'Si', '2', 'Si', '2', 'Si', '21321', 'Si', 'Si', 'Si', 'Si', 'Julian Vera #210', 'Juan Lira', '34226', 'México', '6182971422', 'lupixCURP', 'lupixRFC', 'Esposa', '100', '22 de febrero del 88', 'Mazatlan', 'Sinaloa', 'Casada', 'Bienes Separados', 'Empleada', 'Ninguno', 'Empleo', '5000.00', 'Empleo', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '150000', '50000', '33.33 %', '66.67 %', '100000.00', '48', '2000', 'No', '', '', '', 'Vulnerable', '1-3 años', 'Prestamo', '1 a 2', '1 a 2', '1% - 49%', '1% - 49%', '$18000 - $20000', '1 a 3', 'Transferencia', 'Agencia', 'México', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'Guerrero-Michoacan-Tamaulipas-Morelos', 'México', 'México', 'Otros', '0.00', '', 'no cumplio');
INSERT INTO `solicitudes` VALUES ('457', 'PFA-001SA1', 'Credit', 'Adrian Eduardo Mata Martinez', '', '', '', 'MAMA890907CV4', '6181949311', '6183030413', 'Operadores', 'Fidel Velazquez 1', 'Durango', 'México', 'Durango', '34229', 'MAMA890907HDGTR07', 'zoomwas@hotmail.com', '', '', '', '', '', '', '', 'Masculino', '1989-09-07', '27', 'Mexicana', '3', 'Recibo', 'Casa propiedad de sus familiares', '', '', 'Si', '2010', '25', 'Maria Guadalupe Alvarado Higareda', '', '', 'Casado Bienes Separados', 'Si', 'Atoz 2003', '', '0000-00-00', '', '', '', '', 'Desarrollo', 'Administración', '2016', 'Volkswagen', '6189999999', '', '144', '', '', 'Alejandro Ariel Garcia', 'Conocido', '6188888888', 'Edgar ortega Fuentes', 'Conocido', '6187777777', 'Banamex', '987654321', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', 'Banamex', '123456789', 'Maria Guadalupe Alvarado Higareda', '', '', 'Atel', 'Jefa', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Alejandro Garcia Alvarado', '', '', 'CANLESRFCRFC9', '6186666666', '6185555555', 'direccion #234', 'FSTG', 'Durango', 'Mexico', 'Si', 'Durango', '34228', 'canles@hotmail.com', 'Masculino', '1990-02-01', '22', 'CANLESCURP', '', '', '0000-00-00', '', '', '', 'Edgar Ortega Fuentes', '', '', 'EDGARRFCRFCRF', '6184444444', '6183333333', 'direccon 2 #234', 'San Marcos', 'Durango', 'Mexico', 'Si', 'Durango', '34227', 'edgar@hotmail.com', 'Masculino', '1990-05-04', '22', 'EDGARCURP', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-01-11 00:00:00', '0903', 'Volkswagen', 'Augusto', 'Silvia Mancinas', 'Pendiente', 'PFNA', '222', 'Durango', 'XXXXXXXXXX', 'Voulevard Francisco Villa s/n', '5000', 'Ninguna', '0', '654654654', 'Si', '', '', '', '', '', '', '', '', '', 'Si', 'Si', 'Si', 'Si', 'Julian Vera #210', 'Juan Lira', '34226', 'México', '6182971422', 'lupixCURP', 'lupixRFC', 'Esposa', '100', '22 de febrero del 88', 'Mazatlan', 'Sinaloa', 'Casada', 'Bienes Separados', 'Empleada', 'Ninguno', 'Empleo', '5000.00', 'Empleo', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '150000', '50000', '33.33 %', '66.67 %', '100000.00', '48', '2000', 'No', '', '', '', 'Vulnerable', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0.00', '', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=1001 DEFAULT CHARSET=latin1;

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
INSERT INTO `solicitudpfa` VALUES ('21', 'SA-021', 'PFA-016', 'Credit', 'ASD', 'ASD', '3132131313', 'SDFS', 'FSD', '3121321321', '321', '321', '321', '321', 'SDF', 'SDF', 'SDF', '321321', '321321', 'SDF', 'SDF', 'SDF', '1313132131321', '3131313131', '3131331313', '3213', '21321', '32132', '13213', 'Si', '321', '321321', '321SDF@G.COM', 'Masculino', '1989-09-07', '321', '32132', 'SDFS', 'SDF', 'SDF', '3313213213213', '2132131313', '1313131313', '321321', '32132', '1321', '321SDF', 'Si', '321', '3213', '21321@G.COM', 'Masculino', '1989-09-07', '321', '321', '2017-02-25', '132132132', '132', '132', '132', '', 'Pendiente');
INSERT INTO `solicitudpfa` VALUES ('22', 'SA-022', 'PFA-016', 'Credit', 'ASD', 'ASD', '3132131313', 'SDFS', 'FSD', '3121321321', '321', '321', '321', '321', 'SDF', 'SDF', 'SDF', '321321', '321321', 'SDF', 'SDF', 'SDF', '1313132131321', '3131313131', '3131331313', '3213', '21321', '32132', '13213', 'Si', '321', '321321', '321SDF@G.COM', 'Masculino', '1989-09-07', '321', '32132', 'SDFS', 'SDF', 'SDF', '3313213213213', '2132131313', '1313131313', '321321', '32132', '1321', '321SDF', 'Si', '321', '3213', '21321@G.COM', 'Masculino', '1989-09-07', '321', '321', '2017-02-27', '132132132', '132', '132', '132', '', 'Pendiente');
INSERT INTO `solicitudpfa` VALUES ('23', 'SA-023', 'PFA-016', 'Credit', 'ASD', 'ASD', '3132131313', 'SDFS', 'FSD', '3121321321', '321', '321', '321', '321', 'SDF', 'SDF', 'SDF', '321321', '321321', 'SDF', 'SDF', 'SDF', '1313132131321', '3131313131', '3131331313', '3213', '21321', '32132', '13213', 'Si', '321', '321321', '321SDF@G.COM', 'Masculino', '1989-09-07', '321', '32132', 'SDFS', 'SDF', 'SDF', '3313213213213', '2132131313', '1313131313', '321321', '32132', '1321', '321SDF', 'Si', '321', '3213', '21321@G.COM', 'Masculino', '1989-09-07', '321', '321', '2017-02-27', '132132132', '132', '132', '132', '', 'Pendiente');
INSERT INTO `solicitudpfa` VALUES ('24', 'SA-024', 'PFA-016', 'Credit', 'ASD', 'ASD', '3132131313', 'SDFS', 'FSD', '3121321321', '321', '321', '321', '321', 'SDF', 'SDF', 'SDF', '321321', '321321', 'SDF', 'SDF', 'SDF', '1313132131321', '3131313131', '3131331313', '3213', '21321', '32132', '13213', 'Si', '321', '321321', '321SDF@G.COM', 'Masculino', '1989-09-07', '321', '32132', 'SDFS', 'SDF', 'SDF', '3313213213213', '2132131313', '1313131313', '321321', '32132', '1321', '321SDF', 'Si', '321', '3213', '21321@G.COM', 'Masculino', '1989-09-07', '321', '321', '2017-02-27', '132132132', '132', '132', '132', '', 'Pendiente');
INSERT INTO `solicitudpfa` VALUES ('25', 'SA-025', 'PFA-016', 'Credit', 'ASD', 'ASD', '3132131313', 'SDFS', 'FSD', '3121321321', '321', '321', '321', '321', 'SDF', 'SDF', 'SDF', '321321', '321321', 'SDF', 'SDF', 'SDF', '1313132131321', '3131313131', '3131331313', '3213', '21321', '32132', '13213', 'Si', '321', '321321', '321SDF@G.COM', 'Masculino', '1989-09-07', '321', '32132', 'SDFS', 'SDF', 'SDF', '3313213213213', '2132131313', '1313131313', '321321', '32132', '1321', '321SDF', 'Si', '321', '3213', '21321@G.COM', 'Masculino', '1989-09-07', '321', '321', '2017-02-27', '132132132', '132', '132', '132', '', 'Pendiente');
INSERT INTO `solicitudpfa` VALUES ('26', 'SA-026', 'PFA-016', 'Credit', 'ASD', 'ASD', '3132131313', 'SDFS', 'FSD', '3121321321', '321', '321', '321', '321', 'SDF', 'SDF', 'SDF', '321321', '321321', 'SDF', 'SDF', 'SDF', '1313132131321', '3131313131', '3131331313', '3213', '21321', '32132', '13213', 'Si', '321', '321321', '321SDF@G.COM', 'Masculino', '1989-09-07', '321', '32132', 'SDFS', 'SDF', 'SDF', '3313213213213', '2132131313', '1313131313', '321321', '32132', '1321', '321SDF', 'Si', '321', '3213', '21321@G.COM', 'Masculino', '1989-09-07', '321', '321', '2017-02-27', '132132132', '132', '132', '132', '', 'Pendiente');
INSERT INTO `solicitudpfa` VALUES ('27', 'SA-027', 'PFA-016', 'Credit', 'ASD', 'ASD', '3132131313', 'SDFS', 'FSD', '3121321321', '321', '321', '321', '321', 'SDF', 'SDF', 'SDF', '321321', '321321', 'SDF', 'SDF', 'SDF', '1313132131321', '3131313131', '3131331313', '3213', '21321', '32132', '13213', 'Si', '321', '321321', '321SDF@G.COM', 'Masculino', '1989-09-07', '321', '32132', 'SDFS', 'SDF', 'SDF', '3313213213213', '2132131313', '1313131313', '321321', '32132', '1321', '321SDF', 'Si', '321', '3213', '21321@G.COM', 'Masculino', '1989-09-07', '321', '321', '2017-02-27', '132132132', '132', '132', '132', '', 'Pendiente');
INSERT INTO `solicitudpfa` VALUES ('28', 'SA-028', 'PFA-016', 'Credit', 'ASD', 'ASD', '3132131313', 'SDFS', 'FSD', '3121321321', '321', '321', '321', '321', 'SDF', 'SDF', 'SDF', '321321', '321321', 'SDF', 'SDF', 'SDF', '1313132131321', '3131313131', '3131331313', '3213', '21321', '32132', '13213', 'Si', '321', '321321', '321SDF@G.COM', 'Masculino', '1989-09-07', '321', '32132', 'SDFS', 'SDF', 'SDF', '3313213213213', '2132131313', '1313131313', '321321', '32132', '1321', '321SDF', 'Si', '321', '3213', '21321@G.COM', 'Masculino', '1989-09-07', '321', '321', '2017-02-27', '132132132', '132', '132', '132', '', 'Pendiente');
INSERT INTO `solicitudpfa` VALUES ('29', 'SA-029', 'PFA-016', 'Credit', 'ASD', 'ASD', '3132131313', 'SDFS', 'FSD', '3121321321', '321', '321', '321', '321', 'SDF', 'SDF', 'SDF', '321321', '321321', 'SDF', 'SDF', 'SDF', '1313132131321', '3131313131', '3131331313', '3213', '21321', '32132', '13213', 'Si', '321', '321321', '321SDF@G.COM', 'Masculino', '1989-09-07', '321', '32132', 'SDFS', 'SDF', 'SDF', '3313213213213', '2132131313', '1313131313', '321321', '32132', '1321', '321SDF', 'Si', '321', '3213', '21321@G.COM', 'Masculino', '1989-09-07', '321', '321', '2017-02-27', '132132132', '132', '132', '132', '', 'Pendiente');
INSERT INTO `solicitudpfa` VALUES ('30', 'SA-030', 'PFA-016', 'Credit', 'ASD', 'ASD', '3132131313', 'SDFS', 'FSD', '3121321321', '321', '321', '321', '321', 'SDF', 'SDF', 'SDF', '321321', '321321', 'SDF', 'SDF', 'SDF', '1313132131321', '3131313131', '3131331313', '3213', '21321', '32132', '13213', 'Si', '321', '321321', '321SDF@G.COM', 'Masculino', '1989-09-07', '321', '32132', 'SDFS', 'SDF', 'SDF', '3313213213213', '2132131313', '1313131313', '321321', '32132', '1321', '321SDF', 'Si', '321', '3213', '21321@G.COM', 'Masculino', '1989-09-07', '321', '321', '2017-02-27', '132132132', '132', '132', '132', '', 'Pendiente');
INSERT INTO `solicitudpfa` VALUES ('31', 'SA-031', 'PFA-016', 'Credit', 'ASD', 'ASD', '3132131313', 'SDFS', 'FSD', '3121321321', '321', '321', '321', '321', 'SDF', 'SDF', 'SDF', '321321', '321321', 'SDF', 'SDF', 'SDF', '1313132131321', '3131313131', '3131331313', '3213', '21321', '32132', '13213', 'Si', '321', '321321', '321SDF@G.COM', 'Masculino', '1989-09-07', '321', '32132', 'SDFS', 'SDF', 'SDF', '3313213213213', '2132131313', '1313131313', '321321', '32132', '1321', '321SDF', 'Si', '321', '3213', '21321@G.COM', 'Masculino', '1989-09-07', '321', '321', '2017-02-27', '132132132', '132', '132', '132', '', 'Pendiente');
INSERT INTO `solicitudpfa` VALUES ('32', 'SA-032', 'PFA-016', 'Credit', 'ASD', 'ASD', '3132131313', 'SDFS', 'FSD', '3121321321', '321', '321', '321', '321', 'SDF', 'SDF', 'SDF', '321321', '321321', 'SDF', 'SDF', 'SDF', '1313132131321', '3131313131', '3131331313', '3213', '21321', '32132', '13213', 'Si', '321', '321321', '321SDF@G.COM', 'Masculino', '1989-09-07', '321', '32132', 'SDFS', 'SDF', 'SDF', '3313213213213', '2132131313', '1313131313', '321321', '32132', '1321', '321SDF', 'Si', '321', '3213', '21321@G.COM', 'Masculino', '1989-09-07', '321', '321', '2017-02-27', '132132132', '132', '132', '132', '', 'Pendiente');
INSERT INTO `solicitudpfa` VALUES ('33', 'SA-033', 'PFA-016', 'Credit', 'ASD', 'ASD', '3132131313', 'SDFS', 'FSD', '3121321321', '321', '321', '321', '321', 'SDF', 'SDF', 'SDF', '321321', '321321', 'SDF', 'SDF', 'SDF', '1313132131321', '3131313131', '3131331313', '3213', '21321', '32132', '13213', 'Si', '321', '321321', '321SDF@G.COM', 'Masculino', '1989-09-07', '321', '32132', 'SDFS', 'SDF', 'SDF', '3313213213213', '2132131313', '1313131313', '321321', '32132', '1321', '321SDF', 'Si', '321', '3213', '21321@G.COM', 'Masculino', '1989-09-07', '321', '321', '2017-02-27', '132132132', '132', '132', '132', '', 'Pendiente');
INSERT INTO `solicitudpfa` VALUES ('34', 'SA-034', 'PFA-016', 'Credit', 'ASD', 'ASD', '3132131313', 'SDFS', 'FSD', '3121321321', '321', '321', '321', '321', 'SDF', 'SDF', 'SDF', '321321', '321321', 'SDF', 'SDF', 'SDF', '1313132131321', '3131313131', '3131331313', '3213', '21321', '32132', '13213', 'Si', '321', '321321', '321SDF@G.COM', 'Masculino', '1989-09-07', '321', '32132', 'SDFS', 'SDF', 'SDF', '3313213213213', '2132131313', '1313131313', '321321', '32132', '1321', '321SDF', 'Si', '321', '3213', '21321@G.COM', 'Masculino', '1989-09-07', '321', '321', '2017-02-27', '132132132', '132', '132', '132', '', 'Pendiente');
INSERT INTO `solicitudpfa` VALUES ('35', 'SA-035', 'PFA-016', 'Credit', 'ASD', 'ASD', '3132131313', 'SDFS', 'FSD', '3121321321', '321', '321', '321', '321', 'SDF', 'SDF', 'SDF', '321321', '321321', 'SDF', 'SDF', 'SDF', '1313132131321', '3131313131', '3131331313', '3213', '21321', '32132', '13213', 'Si', '321', '321321', '321SDF@G.COM', 'Masculino', '1989-09-07', '321', '32132', 'SDFS', 'SDF', 'SDF', '3313213213213', '2132131313', '1313131313', '321321', '32132', '1321', '321SDF', 'Si', '321', '3213', '21321@G.COM', 'Masculino', '1989-09-07', '321', '321', '2017-02-27', '132132132', '132', '132', '132', '', 'Pendiente');
INSERT INTO `solicitudpfa` VALUES ('999', 'SA-037', 'PFA-016', 'Credit', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0', '', '0000-00-00', '', '', '', '', '', '');
INSERT INTO `solicitudpfa` VALUES ('999', 'SA-999', 'PFA-016', 'Credit', 'ASD', 'ASD', '3132131313', 'SDFS', 'FSD', '3121321321', '321', '321', '321', '321', 'SDF', 'SDF', 'SDF', '321321', '321321', 'SDF', 'SDF', 'SDF', '1313132131321', '3131313131', '3131331313', '3213', '21321', '32132', '13213', 'Si', '321', '321321', '321SDF@G.COM', 'Masculino', '1989-09-07', '321', '32132', 'SDFS', 'SDF', 'SDF', '3313213213213', '2132131313', '1313131313', '321321', '32132', '1321', '321SDF', 'Si', '321', '3213', '21321@G.COM', 'Masculino', '1989-09-07', '321', '321', '2017-02-27', '132132132', '132', '132', '132', '', 'Pendiente');
INSERT INTO `solicitudpfa` VALUES ('1000', 'SA-100', 'PFA-016', 'Credit', 'ASD', 'ASD', '3132131313', 'SDFS', 'FSD', '3121321321', '321', '321', '321', '321', 'SDF', 'SDF', 'SDF', '321321', '321321', 'SDF', 'SDF', 'SDF', '1313132131321', '3131313131', '3131331313', '3213', '21321', '32132', '13213', 'Si', '321', '321321', '321SDF@G.COM', 'Masculino', '1989-09-07', '321', '32132', 'SDFS', 'SDF', 'SDF', '3313213213213', '2132131313', '1313131313', '321321', '32132', '1321', '321SDF', 'Si', '321', '3213', '21321@G.COM', 'Masculino', '1989-09-07', '321', '321', '2017-03-02', '132132132', '132', '132', '132', '', 'Pendiente');

-- ----------------------------
-- Table structure for `solicitudpfna`
-- ----------------------------
DROP TABLE IF EXISTS `solicitudpfna`;
CREATE TABLE `solicitudpfna` (
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
  `Status` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`,`Folio_Sol`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of solicitudpfna
-- ----------------------------
INSERT INTO `solicitudpfna` VALUES ('3', 'SN-003', '$Folio_Cliente', '$tipocredito', '$nomref1', '$parenref1', '$TelRefPer', '$nomref2', '$parenref2', '$TelRefPer2', '$refbanc', '$numcuebanc', '$sucbanc1', '0000-00-00', '$refbanc2', '$tarjrefbanc', '$sucbanc2', '0000-00-00', '$refcomemp1', '0', '$TelRefCom', '$refcomemp2', '0', '$TelRefCom2', '$cargdir', '$nocuentcd', '$conyunom', '$conyuape1', '$conyuape2', '$compaconyu', '$puestconyu', '$nomrazsoc', '$dirpermor', '$colpermor', '$cdpermor', '$lugnacpermor', '$edopermor', '0', '$RFCObPerMor', '$TelObPerMor', '$FaxObPerMor', '$antemp', '$apodsusc', '$actprinc', '0000-00-00', '0', '$datobnom1', '$datobappat1', '$datobapmat1', '$RFCObSol', '$TelObSol', '$MovObSol', '$datobdir1', '$datobcol1', '$datobcd1', '$datoblugnac1', '$PropObSol', '$datobedo1', '$datobcp1', '$datobmail1', '$SexoObSol', '0000-00-00', '0', '$datobcurp1', '$datobnom2', '$datobappat2', '$datobapmat2', '$RFCObSol2', '$TelObSol2', '$MovObSol2', '$datobdir2', '$datobcol2', '$datobcd2', '$datoblugnac2', '$PropObSol2', '$datobedo2', '$datobcp2', '$datobmail2', '$SexoObSol2', '0000-00-00', '0', '$datobcurp2', '0000-00-00', '$clavcon', '$nomcons', '$nomvend', '$gerentegral', 'Pendiente');
INSERT INTO `solicitudpfna` VALUES ('4', 'SN-004', 'PFNA-013', '1', 'Asda', 'sdf', '6464645464', 'Sdf', 'sdf', '6464654546', '464654', '654', '654', '1989-05-06', '23132', '132', '1321', '1989-09-07', '64645', '6465', '6464646645', '4654', '4654', '6546645465', '5654', '6546', 'Sdfs', 'Sdfsd', 'Sdf', '654', '654', '654654', '654654', '4654654', '65465', '4654', '654', '65465', '6546464646454', '6546464654', '6546546545', '465465', '46546', '54654654', '1989-05-06', '654654', 'Sdf', 'Sdf', 'Asf', '6546546546546', '5465454654', '5464646546', '654654', '65465', '4654', '65456', 'Si', '6654', '65465', '4654654', 'Masculino', '1989-09-07', '6546546', '54654', 'Sdf', 'Sdf', 'Sdf', '4656465465465', '4546546546', '5654654654', 'sdf', 'sdf', 'sdf', '65465', 'Si', '65465', '4654', '6546', 'Masculino', '1989-09-07', '65465', '465465', '2017-02-21', '6546546', '5465', 'sdf', '654654', 'Pendiente');
INSERT INTO `solicitudpfna` VALUES ('5', 'SN-005', 'PFNA-014', '1', 'Asda', 'sdf', '6464645464', 'Sdf', 'sdf', '6464654546', '464654', '654', '654', '1989-05-06', '23132', '132', '1321', '1989-09-07', '64645', '6465', '6464646645', '4654', '4654', '6546645465', '5654', '6546', 'Sdfs', 'Sdfsd', 'Sdf', '654', '654', '654654', '654654', '4654654', '65465', '4654', '654', '65465', '6546464646454', '6546464654', '6546546545', '465465', '46546', '54654654', '1989-05-06', '654654', 'Sdf', 'Sdf', 'Asf', '6546546546546', '5465454654', '5464646546', '654654', '65465', '4654', '65456', 'Si', '6654', '65465', '4654654', 'Masculino', '1989-09-07', '6546546', '54654', 'Sdf', 'Sdf', 'Sdf', '4656465465465', '4546546546', '5654654654', 'sdf', 'sdf', 'sdf', '65465', 'Si', '65465', '4654', '6546', 'Masculino', '1989-09-07', '65465', '465465', '2017-02-21', '6546546', '5465', 'sdf', '654654', 'Pendiente');
INSERT INTO `solicitudpfna` VALUES ('6', 'SN-006', 'PFNA-015', '1', 'Asda', 'sdf', '6464645464', 'Sdf', 'sdf', '6464654546', '464654', '654', '654', '1989-05-06', '23132', '132', '1321', '1989-09-07', '64645', '6465', '6464646645', '4654', '4654', '6546645465', '5654', '6546', 'Sdfs', 'Sdfsd', 'Sdf', '654', '654', '654654', '654654', '4654654', '65465', '4654', '654', '65465', '6546464646454', '6546464654', '6546546545', '465465', '46546', '54654654', '1989-05-06', '654654', 'Sdf', 'Sdf', 'Asf', '6546546546546', '5465454654', '5464646546', '654654', '65465', '4654', '65456', 'Si', '6654', '65465', '4654654', 'Masculino', '1989-09-07', '6546546', '54654', 'Sdf', 'Sdf', 'Sdf', '4656465465465', '4546546546', '5654654654', 'sdf', 'sdf', 'sdf', '65465', 'Si', '65465', '4654', '6546', 'Masculino', '1989-09-07', '65465', '465465', '2017-02-21', '6546546', '5465', 'sdf', '654654', 'Pendiente');
INSERT INTO `solicitudpfna` VALUES ('7', 'SN-007', 'PFNA-016', '1', 'Asda', 'sdf', '6464645464', 'Sdf', 'sdf', '6464654546', '464654', '654', '654', '1989-05-06', '23132', '132', '1321', '1989-09-07', '64645', '6465', '6464646645', '4654', '4654', '6546645465', '5654', '6546', 'Sdfs', 'Sdfsd', 'Sdf', '654', '654', '654654', '654654', '4654654', '65465', '4654', '654', '65465', '6546464646454', '6546464654', '6546546545', '465465', '46546', '54654654', '1989-05-06', '654654', 'Sdf', 'Sdf', 'Asf', '6546546546546', '5465454654', '5464646546', '654654', '65465', '4654', '65456', 'Si', '6654', '65465', '4654654', 'Masculino', '1989-09-07', '6546546', '54654', 'Sdf', 'Sdf', 'Sdf', '4656465465465', '4546546546', '5654654654', 'sdf', 'sdf', 'sdf', '65465', 'Si', '65465', '4654', '6546', 'Masculino', '1989-09-07', '65465', '465465', '2017-02-21', '6546546', '5465', 'sdf', '654654', 'Pendiente');
INSERT INTO `solicitudpfna` VALUES ('8', 'SN-008', 'PFNA-017', '1', 'Asda', 'sdf', '6464645464', 'Sdf', 'sdf', '6464654546', '464654', '654', '654', '1989-05-06', '23132', '132', '1321', '1989-09-07', '64645', '6465', '6464646645', '4654', '4654', '6546645465', '5654', '6546', 'Sdfs', 'Sdfsd', 'Sdf', '654', '654', '654654', '654654', '4654654', '65465', '4654', '654', '65465', '6546464646454', '6546464654', '6546546545', '465465', '46546', '54654654', '1989-05-06', '654654', 'Sdf', 'Sdf', 'Asf', '6546546546546', '5465454654', '5464646546', '654654', '65465', '4654', '65456', 'Si', '6654', '65465', '4654654', 'Masculino', '1989-09-07', '6546546', '54654', 'Sdf', 'Sdf', 'Sdf', '4656465465465', '4546546546', '5654654654', 'sdf', 'sdf', 'sdf', '65465', 'Si', '65465', '4654', '6546', 'Masculino', '1989-09-07', '65465', '465465', '2017-02-21', '6546546', '5465', 'sdf', '654654', 'Pendiente');
INSERT INTO `solicitudpfna` VALUES ('9', 'SN-009', 'PFNA-018', '1', 'Asda', 'sdf', '6464645464', 'Sdf', 'sdf', '6464654546', '464654', '654', '654', '1989-05-06', '23132', '132', '1321', '1989-09-07', '64645', '6465', '6464646645', '4654', '4654', '6546645465', '5654', '6546', 'Sdfs', 'Sdfsd', 'Sdf', '654', '654', '654654', '654654', '4654654', '65465', '4654', '654', '65465', '6546464646454', '6546464654', '6546546545', '465465', '46546', '54654654', '1989-05-06', '654654', 'Sdf', 'Sdf', 'Asf', '6546546546546', '5465454654', '5464646546', '654654', '65465', '4654', '65456', 'Si', '6654', '65465', '4654654', 'Masculino', '1989-09-07', '6546546', '54654', 'Sdf', 'Sdf', 'Sdf', '4656465465465', '4546546546', '5654654654', 'sdf', 'sdf', 'sdf', '65465', 'Si', '65465', '4654', '6546', 'Masculino', '1989-09-07', '65465', '465465', '2017-02-21', '6546546', '5465', 'sdf', '654654', 'Pendiente');
INSERT INTO `solicitudpfna` VALUES ('10', 'SN-010', 'PFNA-019', '1', 'Asda', 'sdf', '6464645464', 'Sdf', 'sdf', '6464654546', '464654', '654', '654', '1989-05-06', '23132', '132', '1321', '1989-09-07', '64645', '6465', '6464646645', '4654', '4654', '6546645465', '5654', '6546', 'Sdfs', 'Sdfsd', 'Sdf', '654', '654', '654654', '654654', '4654654', '65465', '4654', '654', '65465', '6546464646454', '6546464654', '6546546545', '465465', '46546', '54654654', '1989-05-06', '654654', 'Sdf', 'Sdf', 'Asf', '6546546546546', '5465454654', '5464646546', '654654', '65465', '4654', '65456', 'Si', '6654', '65465', '4654654', 'Masculino', '1989-09-07', '6546546', '54654', 'Sdf', 'Sdf', 'Sdf', '4656465465465', '4546546546', '5654654654', 'sdf', 'sdf', 'sdf', '65465', 'Si', '65465', '4654', '6546', 'Masculino', '1989-09-07', '65465', '465465', '2017-02-21', '6546546', '5465', 'sdf', '654654', 'Pendiente');
INSERT INTO `solicitudpfna` VALUES ('11', 'SN-011', 'PFNA-020', '1', 'Asda', 'sdf', '6464645464', 'Sdf', 'sdf', '6464654546', '464654', '654', '654', '1989-05-06', '23132', '132', '1321', '1989-09-07', '64645', '6465', '6464646645', '4654', '4654', '6546645465', '5654', '6546', 'Sdfs', 'Sdfsd', 'Sdf', '654', '654', '654654', '654654', '4654654', '65465', '4654', '654', '65465', '6546464646454', '6546464654', '6546546545', '465465', '46546', '54654654', '1989-05-06', '654654', 'Sdf', 'Sdf', 'Asf', '6546546546546', '5465454654', '5464646546', '654654', '65465', '4654', '65456', 'Si', '6654', '65465', '4654654', 'Masculino', '1989-09-07', '6546546', '54654', 'Sdf', 'Sdf', 'Sdf', '4656465465465', '4546546546', '5654654654', 'sdf', 'sdf', 'sdf', '65465', 'Si', '65465', '4654', '6546', 'Masculino', '1989-09-07', '65465', '465465', '2017-02-21', '6546546', '5465', 'sdf', '654654', 'Pendiente');
INSERT INTO `solicitudpfna` VALUES ('12', 'SN-012', 'PFNA-021', '1', 'Asda', 'sdf', '6464645464', 'Sdf', 'sdf', '6464654546', '464654', '654', '654', '1989-05-06', '23132', '132', '1321', '1989-09-07', '64645', '6465', '6464646645', '4654', '4654', '6546645465', '5654', '6546', 'Sdfs', 'Sdfsd', 'Sdf', '654', '654', '654654', '654654', '4654654', '65465', '4654', '654', '65465', '6546464646454', '6546464654', '6546546545', '465465', '46546', '54654654', '1989-05-06', '654654', 'Sdf', 'Sdf', 'Asf', '6546546546546', '5465454654', '5464646546', '654654', '65465', '4654', '65456', 'Si', '6654', '65465', '4654654', 'Masculino', '1989-09-07', '6546546', '54654', 'Sdf', 'Sdf', 'Sdf', '4656465465465', '4546546546', '5654654654', 'sdf', 'sdf', 'sdf', '65465', 'Si', '65465', '4654', '6546', 'Masculino', '1989-09-07', '65465', '465465', '2017-02-21', '6546546', '5465', 'sdf', '654654', 'Pendiente');
INSERT INTO `solicitudpfna` VALUES ('13', 'SN-013', 'PFNA-022', '1', 'Asda', 'sdf', '6464645464', 'Sdf', 'sdf', '6464654546', '464654', '654', '654', '1989-05-06', '23132', '132', '1321', '1989-09-07', '64645', '6465', '6464646645', '4654', '4654', '6546645465', '5654', '6546', 'Sdfs', 'Sdfsd', 'Sdf', '654', '654', '654654', '654654', '4654654', '65465', '4654', '654', '65465', '6546464646454', '6546464654', '6546546545', '465465', '46546', '54654654', '1989-05-06', '654654', 'Sdf', 'Sdf', 'Asf', '6546546546546', '5465454654', '5464646546', '654654', '65465', '4654', '65456', 'Si', '6654', '65465', '4654654', 'Masculino', '1989-09-07', '6546546', '54654', 'Sdf', 'Sdf', 'Sdf', '4656465465465', '4546546546', '5654654654', 'sdf', 'sdf', 'sdf', '65465', 'Si', '65465', '4654', '6546', 'Masculino', '1989-09-07', '65465', '465465', '2017-02-21', '6546546', '5465', 'sdf', '654654', 'Pendiente');
INSERT INTO `solicitudpfna` VALUES ('14', 'SN-014', 'PFNA-023', '1', 'Asda', 'sdf', '6464645464', 'Sdf', 'sdf', '6464654546', '464654', '654', '654', '1989-05-06', '23132', '132', '1321', '1989-09-07', '64645', '6465', '6464646645', '4654', '4654', '6546645465', '5654', '6546', 'Sdfs', 'Sdfsd', 'Sdf', '654', '654', '654654', '654654', '4654654', '65465', '4654', '654', '65465', '6546464646454', '6546464654', '6546546545', '465465', '46546', '54654654', '1989-05-06', '654654', 'Sdf', 'Sdf', 'Asf', '6546546546546', '5465454654', '5464646546', '654654', '65465', '4654', '65456', 'Si', '6654', '65465', '4654654', 'Masculino', '1989-09-07', '6546546', '54654', 'Sdf', 'Sdf', 'Sdf', '4656465465465', '4546546546', '5654654654', 'sdf', 'sdf', 'sdf', '65465', 'Si', '65465', '4654', '6546', 'Masculino', '1989-09-07', '65465', '465465', '2017-02-21', '6546546', '5465', 'sdf', '654654', 'Pendiente');
INSERT INTO `solicitudpfna` VALUES ('15', 'SN-015', 'PFNA-024', '1', 'Asda', 'sdf', '6464645464', 'Sdf', 'sdf', '6464654546', '464654', '654', '654', '1989-05-06', '23132', '132', '1321', '1989-09-07', '64645', '6465', '6464646645', '4654', '4654', '6546645465', '5654', '6546', 'Sdfs', 'Sdfsd', 'Sdf', '654', '654', '654654', '654654', '4654654', '65465', '4654', '654', '65465', '6546464646454', '6546464654', '6546546545', '465465', '46546', '54654654', '1989-05-06', '654654', 'Sdf', 'Sdf', 'Asf', '6546546546546', '5465454654', '5464646546', '654654', '65465', '4654', '65456', 'Si', '6654', '65465', '4654654', 'Masculino', '1989-09-07', '6546546', '54654', 'Sdf', 'Sdf', 'Sdf', '4656465465465', '4546546546', '5654654654', 'sdf', 'sdf', 'sdf', '65465', 'Si', '65465', '4654', '6546', 'Masculino', '1989-09-07', '65465', '465465', '2017-02-21', '6546546', '5465', 'sdf', '654654', 'Pendiente');
INSERT INTO `solicitudpfna` VALUES ('16', 'SN-016', 'PFNA-025', '1', 'Asda', 'sdf', '6464645464', 'Sdf', 'sdf', '6464654546', '464654', '654', '654', '1989-05-06', '23132', '132', '1321', '1989-09-07', '64645', '6465', '6464646645', '4654', '4654', '6546645465', '5654', '6546', 'Sdfs', 'Sdfsd', 'Sdf', '654', '654', '654654', '654654', '4654654', '65465', '4654', '654', '65465', '6546464646454', '6546464654', '6546546545', '465465', '46546', '54654654', '1989-05-06', '654654', 'Sdf', 'Sdf', 'Asf', '6546546546546', '5465454654', '5464646546', '654654', '65465', '4654', '65456', 'Si', '6654', '65465', '4654654', 'Masculino', '1989-09-07', '6546546', '54654', 'Sdf', 'Sdf', 'Sdf', '4656465465465', '4546546546', '5654654654', 'sdf', 'sdf', 'sdf', '65465', 'Si', '65465', '4654', '6546', 'Masculino', '1989-09-07', '65465', '465465', '2017-02-21', '6546546', '5465', 'sdf', '654654', 'Pendiente');
INSERT INTO `solicitudpfna` VALUES ('17', 'SN-017', 'PFNA-026', '1', 'Asda', 'sdf', '6464645464', 'Sdf', 'sdf', '6464654546', '464654', '654', '654', '1989-05-06', '23132', '132', '1321', '1989-09-07', '64645', '6465', '6464646645', '4654', '4654', '6546645465', '5654', '6546', 'Sdfs', 'Sdfsd', 'Sdf', '654', '654', '654654', '654654', '4654654', '65465', '4654', '654', '65465', '6546464646454', '6546464654', '6546546545', '465465', '46546', '54654654', '1989-05-06', '654654', 'Sdf', 'Sdf', 'Asf', '6546546546546', '5465454654', '5464646546', '654654', '65465', '4654', '65456', 'Si', '6654', '65465', '4654654', 'Masculino', '1989-09-07', '6546546', '54654', 'Sdf', 'Sdf', 'Sdf', '4656465465465', '4546546546', '5654654654', 'sdf', 'sdf', 'sdf', '65465', 'Si', '65465', '4654', '6546', 'Masculino', '1989-09-07', '65465', '465465', '2017-02-21', '6546546', '5465', 'sdf', '654654', 'Pendiente');
INSERT INTO `solicitudpfna` VALUES ('18', 'SN-018', 'PFNA-027', '1', 'Asda', 'sdf', '6464645464', 'Sdf', 'sdf', '6464654546', '464654', '654', '654', '1989-05-06', '23132', '132', '1321', '1989-09-07', '64645', '6465', '6464646645', '4654', '4654', '6546645465', '5654', '6546', 'Sdfs', 'Sdfsd', 'Sdf', '654', '654', '654654', '654654', '4654654', '65465', '4654', '654', '65465', '6546464646454', '6546464654', '6546546545', '465465', '46546', '54654654', '1989-05-06', '654654', 'Sdf', 'Sdf', 'Asf', '6546546546546', '5465454654', '5464646546', '654654', '65465', '4654', '65456', 'Si', '6654', '65465', '4654654', 'Masculino', '1989-09-07', '6546546', '54654', 'Sdf', 'Sdf', 'Sdf', '4656465465465', '4546546546', '5654654654', 'sdf', 'sdf', 'sdf', '65465', 'Si', '65465', '4654', '6546', 'Masculino', '1989-09-07', '65465', '465465', '2017-02-21', '6546546', '5465', 'sdf', '654654', 'Pendiente');
INSERT INTO `solicitudpfna` VALUES ('19', 'SN-019', 'PFNA-028', '1', 'Asda', 'sdf', '6464645464', 'Sdf', 'sdf', '6464654546', '464654', '654', '654', '1989-05-06', '23132', '132', '1321', '1989-09-07', '64645', '6465', '6464646645', '4654', '4654', '6546645465', '5654', '6546', 'Sdfs', 'Sdfsd', 'Sdf', '654', '654', '654654', '654654', '4654654', '65465', '4654', '654', '65465', '6546464646454', '6546464654', '6546546545', '465465', '46546', '54654654', '1989-05-06', '654654', 'Sdf', 'Sdf', 'Asf', '6546546546546', '5465454654', '5464646546', '654654', '65465', '4654', '65456', 'Si', '6654', '65465', '4654654', 'Masculino', '1989-09-07', '6546546', '54654', 'Sdf', 'Sdf', 'Sdf', '4656465465465', '4546546546', '5654654654', 'sdf', 'sdf', 'sdf', '65465', 'Si', '65465', '4654', '6546', 'Masculino', '1989-09-07', '65465', '465465', '2017-02-21', '6546546', '5465', 'sdf', '654654', 'Pendiente');
INSERT INTO `solicitudpfna` VALUES ('20', 'SN-020', 'PFNA-029', '1', 'Asda', 'sdf', '6464645464', 'Sdf', 'sdf', '6464654546', '464654', '654', '654', '1989-05-06', '23132', '132', '1321', '1989-09-07', '64645', '6465', '6464646645', '4654', '4654', '6546645465', '5654', '6546', 'Sdfs', 'Sdfsd', 'Sdf', '654', '654', '654654', '654654', '4654654', '65465', '4654', '654', '65465', '6546464646454', '6546464654', '6546546545', '465465', '46546', '54654654', '1989-05-06', '654654', 'Sdf', 'Sdf', 'Asf', '6546546546546', '5465454654', '5464646546', '654654', '65465', '4654', '65456', 'Si', '6654', '65465', '4654654', 'Masculino', '1989-09-07', '6546546', '54654', 'Sdf', 'Sdf', 'Sdf', '4656465465465', '4546546546', '5654654654', 'sdf', 'sdf', 'sdf', '65465', 'Si', '65465', '4654', '6546', 'Masculino', '1989-09-07', '65465', '465465', '2017-02-21', '6546546', '5465', 'sdf', '654654', 'Pendiente');
INSERT INTO `solicitudpfna` VALUES ('21', 'SN-021', 'PFNA-030', '1', 'Asda', 'sdf', '6464645464', 'Sdf', 'sdf', '6464654546', '464654', '654', '654', '1989-05-06', '23132', '132', '1321', '1989-09-07', '64645', '6465', '6464646645', '4654', '4654', '6546645465', '5654', '6546', 'Sdfs', 'Sdfsd', 'Sdf', '654', '654', '654654', '654654', '4654654', '65465', '4654', '654', '65465', '6546464646454', '6546464654', '6546546545', '465465', '46546', '54654654', '1989-05-06', '654654', 'Sdf', 'Sdf', 'Asf', '6546546546546', '5465454654', '5464646546', '654654', '65465', '4654', '65456', 'Si', '6654', '65465', '4654654', 'Masculino', '1989-09-07', '6546546', '54654', 'Sdf', 'Sdf', 'Sdf', '4656465465465', '4546546546', '5654654654', 'sdf', 'sdf', 'sdf', '65465', 'Si', '65465', '4654', '6546', 'Masculino', '1989-09-07', '65465', '465465', '2017-02-21', '6546546', '5465', 'sdf', '654654', 'Pendiente');
INSERT INTO `solicitudpfna` VALUES ('22', 'SN-022', 'PFNA-031', '1', 'Asda', 'sdf', '6464645464', 'Sdf', 'sdf', '6464654546', '464654', '654', '654', '1989-05-06', '23132', '132', '1321', '1989-09-07', '64645', '6465', '6464646645', '4654', '4654', '6546645465', '5654', '6546', 'Sdfs', 'Sdfsd', 'Sdf', '654', '654', '654654', '654654', '4654654', '65465', '4654', '654', '65465', '6546464646454', '6546464654', '6546546545', '465465', '46546', '54654654', '1989-05-06', '654654', 'Sdf', 'Sdf', 'Asf', '6546546546546', '5465454654', '5464646546', '654654', '65465', '4654', '65456', 'Si', '6654', '65465', '4654654', 'Masculino', '1989-09-07', '6546546', '54654', 'Sdf', 'Sdf', 'Sdf', '4656465465465', '4546546546', '5654654654', 'sdf', 'sdf', 'sdf', '65465', 'Si', '65465', '4654', '6546', 'Masculino', '1989-09-07', '65465', '465465', '2017-02-21', '6546546', '5465', 'sdf', '654654', 'Pendiente');
INSERT INTO `solicitudpfna` VALUES ('23', 'SN-023', 'PFNA-032', '1', 'Asda', 'sdf', '6464645464', 'Sdf', 'sdf', '6464654546', '464654', '654', '654', '1989-05-06', '23132', '132', '1321', '1989-09-07', '64645', '6465', '6464646645', '4654', '4654', '6546645465', '5654', '6546', 'Sdfs', 'Sdfsd', 'Sdf', '654', '654', '654654', '654654', '4654654', '65465', '4654', '654', '65465', '6546464646454', '6546464654', '6546546545', '465465', '46546', '54654654', '1989-05-06', '654654', 'Sdf', 'Sdf', 'Asf', '6546546546546', '5465454654', '5464646546', '654654', '65465', '4654', '65456', 'Si', '6654', '65465', '4654654', 'Masculino', '1989-09-07', '6546546', '54654', 'Sdf', 'Sdf', 'Sdf', '4656465465465', '4546546546', '5654654654', 'sdf', 'sdf', 'sdf', '65465', 'Si', '65465', '4654', '6546', 'Masculino', '1989-09-07', '65465', '465465', '2017-02-21', '6546546', '5465', 'sdf', '654654', 'Pendiente');
INSERT INTO `solicitudpfna` VALUES ('24', 'SN-024', 'PFNA-033', '1', 'Asda', 'sdf', '6464645464', 'Sdf', 'sdf', '6464654546', '464654', '654', '654', '1989-05-06', '23132', '132', '1321', '1989-09-07', '64645', '6465', '6464646645', '4654', '4654', '6546645465', '5654', '6546', 'Sdfs', 'Sdfsd', 'Sdf', '654', '654', '654654', '654654', '4654654', '65465', '4654', '654', '65465', '6546464646454', '6546464654', '6546546545', '465465', '46546', '54654654', '1989-05-06', '654654', 'Sdf', 'Sdf', 'Asf', '6546546546546', '5465454654', '5464646546', '654654', '65465', '4654', '65456', 'Si', '6654', '65465', '4654654', 'Masculino', '1989-09-07', '6546546', '54654', 'Sdf', 'Sdf', 'Sdf', '4656465465465', '4546546546', '5654654654', 'sdf', 'sdf', 'sdf', '65465', 'Si', '65465', '4654', '6546', 'Masculino', '1989-09-07', '65465', '465465', '2017-02-21', '6546546', '5465', 'sdf', '654654', 'Pendiente');
INSERT INTO `solicitudpfna` VALUES ('25', 'SN-025', 'PFNA-034', 'Credit', 'Asda', 'sdf', '6464645464', 'Sdf', 'sdf', '6464654546', '464654', '654', '654', '1989-05-06', '23132', '132', '1321', '1989-09-07', '64645', '6465', '6464646645', '4654', '4654', '6546645465', '5654', '6546', 'Sdfs', 'Sdfsd', 'Sdf', '654', '654', '654654', '654654', '4654654', '65465', '4654', '654', '65465', '6546464646454', '6546464654', '6546546545', '465465', '46546', '54654654', '1989-05-06', '654654', 'Sdf', 'Sdf', 'Asf', '6546546546546', '5465454654', '5464646546', '654654', '65465', '4654', '65456', 'Si', '6654', '65465', '4654654', 'Masculino', '1989-09-07', '6546546', '54654', 'Sdf', 'Sdf', 'Sdf', '4656465465465', '4546546546', '5654654654', 'sdf', 'sdf', 'sdf', '65465', 'Si', '65465', '4654', '6546', 'Masculino', '1989-09-07', '65465', '465465', '2017-02-21', '6546546', '5465', 'sdf', '654654', 'Pendiente');
INSERT INTO `solicitudpfna` VALUES ('26', 'SN-026', 'PFNA-034', 'Credit', 'Asda', 'sdf', '6464645464', 'Sdf', 'sdf', '6464654546', '464654', '654', '654', '1989-05-06', '23132', '132', '1321', '1989-09-07', '64645', '6465', '6464646645', '', '4654', '54665465', '5654', '6546', 'Maria Guadalupe', 'Alvarado', 'Higareda', '654', '654', '654654', '', '4654654', '65465', '4654', '654', '65465', '6546464646454', '6546464654', '6546546545', '465465', '46546', '54654654', '1989-05-06', '654654', 'Sdf', 'Sdf', 'Asf', '6546546546546', '5465454654', '5464646546', '654654', '65465', '4654', '65456', 'Si', '6654', '65465', '4654654', 'Masculino', '1989-09-07', '6546546', '54654', 'Sdf', 'Sdf', 'Sdf', '4656465465465', '4546546546', '5654654654', 'sdf', 'sdf', 'sdf', '65465', 'Si', '65465', '4654', '6546', 'Masculino', '1989-09-07', '65465', '465465', '2017-02-23', '6546546', '5465', 'sdf', '654654', 'Pendiente');
INSERT INTO `solicitudpfna` VALUES ('27', 'SN-027', 'PFNA-034', 'Credit', 'Asda', 'sdf', '6464645464', 'Sdf', 'sdf', '6464654546', '464654', '654', '654', '1989-05-06', '23132', '132', '1321', '1989-09-07', '64645', '6465', '6464646645', '', '4654', '54665465', '5654', '6546', 'Maria Guadalupe', 'Alvarado', 'Higareda', '654', '654', '654654', '', '4654654', '65465', '4654', '654', '65465', '6546464646454', '6546464654', '6546546545', '465465', '46546', '54654654', '1989-05-06', '654654', 'Sdf', 'Sdf', 'Asf', '6546546546546', '5465454654', '5464646546', '654654', '65465', '4654', '65456', 'Si', '6654', '65465', '4654654', 'Masculino', '1989-09-07', '6546546', '54654', 'Sdf', 'Sdf', 'Sdf', '4656465465465', '4546546546', '5654654654', 'sdf', 'sdf', 'sdf', '65465', 'Si', '65465', '4654', '6546', 'Masculino', '1989-09-07', '65465', '465465', '2017-02-23', '6546546', '5465', 'sdf', '654654', 'Pendiente');
INSERT INTO `solicitudpfna` VALUES ('28', 'SN-028', 'PFNA-034', 'Credit', 'Asda', 'sdf', '6464645464', 'Sdf', 'sdf', '6464654546', '464654', '654', '654', '1989-05-06', '23132', '132', '1321', '1989-09-07', '64645', '6465', '6464646645', '', '4654', '54665465', '5654', '6546', 'Maria Guadalupe', 'Alvarado', 'Higareda', '654', '654', '654654', '', '4654654', '65465', '4654', '654', '65465', '6546464646454', '6546464654', '6546546545', '465465', '46546', '54654654', '1989-05-06', '654654', 'Sdf', 'Sdf', 'Asf', '6546546546546', '5465454654', '5464646546', '654654', '65465', '4654', '65456', 'Si', '6654', '65465', '4654654', 'Masculino', '1989-09-07', '6546546', '54654', 'Sdf', 'Sdf', 'Sdf', '4656465465465', '4546546546', '5654654654', 'sdf', 'sdf', 'sdf', '65465', 'Si', '65465', '4654', '6546', 'Masculino', '1989-09-07', '65465', '465465', '2017-02-23', '6546546', '5465', 'sdf', '654654', 'Pendiente');
INSERT INTO `solicitudpfna` VALUES ('29', 'SN-029', 'PFNA-034', 'Credit', 'Asda', 'sdf', '6464645464', 'Sdf', 'sdf', '6464654546', '464654', '654', '654', '1989-05-06', '23132', '132', '1321', '1989-09-07', '64645', '6465', '6464646645', '', '4654', '54665465', '5654', '6546', 'Maria Guadalupe', 'Alvarado', 'Higareda', '654', '654', '654654', 'dfgdfgdfg', '4654654', '65465', '4654', '654', '65465', '6546464646454', '6546464654', '6546546545', '465465', '46546', '54654654', '1989-05-06', '654654', 'Sdf', 'Sdf', 'Asf', '6546546546546', '5465454654', '5464646546', '654654', '65465', '4654', '65456', 'Si', '6654', '65465', '4654654', 'Masculino', '1989-09-07', '6546546', '54654', 'Sdf', 'Sdf', 'Sdf', '4656465465465', '4546546546', '5654654654', 'sdf', 'sdf', 'sdf', '65465', 'Si', '65465', '4654', '6546', 'Masculino', '1989-09-07', '65465', '465465', '2017-02-23', '6546546', '5465', 'sdf', '654654', 'Pendiente');
INSERT INTO `solicitudpfna` VALUES ('30', 'SN-030', 'PFNA-034', 'Credit', 'Asda', 'sdf', '6464645464', 'Sdf', 'sdf', '6464654546', '464654', '654', '654', '1989-05-06', '23132', '132', '1321', '1989-09-07', '64645', '6465', '6464646645', '64645', '4654', '46656555', '5654', '6546', 'Maria Guadalupe', 'Alvarado', 'Higareda', '654', '654', '654654', '45245', '4654654', '65465', '4654', '654', '65465', '6546464646454', '6546464654', '6546546545', '465465', '46546', '54654654', '1989-05-06', '654654', 'Sdf', 'Sdf', 'Asf', '6546546546546', '5465454654', '5464646546', '654654', '65465', '4654', '65456', 'Si', '6654', '65465', '4654654', 'Masculino', '1989-09-07', '6546546', '54654', 'Sdf', 'Sdf', 'Sdf', '4656465465465', '4546546546', '5654654654', 'sdf', 'sdf', 'sdf', '65465', 'Si', '65465', '4654', '6546', 'Masculino', '1989-09-07', '65465', '465465', '2017-02-23', '6546546', '5465', 'sdf', '654654', 'Pendiente');
INSERT INTO `solicitudpfna` VALUES ('31', 'SN-031', 'PFNA-034', 'Credit', 'Asda', 'sdf', '6464645464', 'Sdf', 'sdf', '6464654546', '464654', '654', '654', '1989-05-06', '23132', '132', '1321', '1989-09-07', '64645', '6465', '6464646645', '64645', '4654', '466565525', '5654', '6546', 'Maria Guadalupe', 'Alvarado', 'Higareda', '654', '654', '654654', 'sdfsdf', '4654654', '65465', '4654', '654', '65465', '6546464646454', '6546464654', '6546546545', '465465', '46546', '54654654', '1989-05-06', '654654', 'Sdf', 'Sdf', 'Asf', '6546546546546', '5465454654', '5464646546', '654654', '65465', '4654', '65456', 'Si', '6654', '65465', '4654654', 'Masculino', '1989-09-07', '6546546', '54654', 'Sdf', 'Sdf', 'Sdf', '4656465465465', '4546546546', '5654654654', 'sdf', 'sdf', 'sdf', '65465', 'Si', '65465', '4654', '6546', 'Masculino', '1989-09-07', '65465', '465465', '2017-02-23', '6546546', '5465', 'sdf', '654654', 'Pendiente');
INSERT INTO `solicitudpfna` VALUES ('32', 'SN-032', 'PFNA-034', 'Credit', 'Asda', 'sdf', '6464645464', 'Sdf', 'sdf', '6464654546', '464654', '654', '654', '1989-05-06', '23132', '132', '1321', '1989-09-07', '64645', '6465', '6464646645', '64645', '4654', '4665655255', '5654', '6546', 'Maria Guadalupe', 'Alvarado', 'Higareda', '654', '654', '654654', 'dfdfgdfg', '4654654', '65465', '4654', '654', '65465', '6546464646454', '6546464654', '6546546545', '465465', '46546', '54654654', '1989-05-06', '654654', 'Sdf', 'Sdf', 'Asf', '6546546546546', '5465454654', '5464646546', '654654', '65465', '4654', '65456', 'Si', '6654', '65465', '4654654', 'Masculino', '1989-09-07', '6546546', '54654', 'Sdf', 'Sdf', 'Sdf', '4656465465465', '4546546546', '5654654654', 'sdf', 'sdf', 'sdf', '65465', 'Si', '65465', '4654', '6546', 'Masculino', '1989-09-07', '65465', '465465', '2017-02-23', '6546546', '5465', 'sdf', '654654', 'Pendiente');
INSERT INTO `solicitudpfna` VALUES ('33', 'SN-033', 'PFNA-034', 'Credit', 'Asda', 'sdf', '6464645464', 'Sdf', 'sdf', '6464654546', '464654', '654', '654', '1989-05-06', '23132', '132', '1321', '1989-09-07', '64645', '6465', '6464646645', '64645', '4654', '4665655255', '5654', '6546', 'Maria Guadalupe', 'Alvarado', 'Higareda', '654', '654', '654654', 'dfdfgdfg', '4654654', '65465', '4654', '654', '65465', '6546464646454', '6546464654', '6546546545', '465465', '46546', '54654654', '1989-05-06', '654654', 'Sdf', 'Sdf', 'Asf', '6546546546546', '5465454654', '5464646546', '654654', '65465', '4654', '65456', 'Si', '6654', '65465', '4654654', 'Masculino', '1989-09-07', '6546546', '54654', 'Sdf', 'Sdf', 'Sdf', '4656465465465', '4546546546', '5654654654', 'sdf', 'sdf', 'sdf', '65465', 'Si', '65465', '4654', '6546', 'Masculino', '1989-09-07', '65465', '465465', '2017-02-23', '6546546', '5465', 'sdf', '654654', 'Pendiente');
INSERT INTO `solicitudpfna` VALUES ('34', 'SN-034', 'PFNA-034', 'Credit', 'Asda', 'sdf', '6464645464', 'Sdf', 'sdf', '6464654546', '464654', '654', '654', '1989-05-06', '23132', '132', '1321', '1989-09-07', '64645', '6465', '6464646645', '64645', '4654', '4665655255', '5654', '6546', 'Maria Guadalupe', 'Alvarado', 'Higareda', '654', '654', '654654', 'dfdfgdfg', '4654654', '65465', '4654', '654', '65465', '6546464646454', '6546464654', '6546546545', '465465', '46546', '54654654', '1989-05-06', '654654', 'Sdf', 'Sdf', 'Asf', '6546546546546', '5465454654', '5464646546', '654654', '65465', '4654', '65456', 'Si', '6654', '65465', '4654654', 'Masculino', '1989-09-07', '6546546', '54654', 'Sdf', 'Sdf', 'Sdf', '4656465465465', '4546546546', '5654654654', 'sdf', 'sdf', 'sdf', '65465', 'Si', '65465', '4654', '6546', 'Masculino', '1989-09-07', '65465', '465465', '2017-02-23', '6546546', '5465', 'sdf', '654654', 'Pendiente');
INSERT INTO `solicitudpfna` VALUES ('35', 'SN-035', 'PFNA-034', 'Credit', 'Asda', 'sdf', '6464645464', 'Sdf', 'sdf', '6464654546', '464654', '654', '654', '1989-05-06', '23132', '132', '1321', '1989-09-07', '64645', '6465', '6464646645', '64645', '4654', '4665655255', '5654', '6546', 'Maria Guadalupe', 'Alvarado', 'Higareda', '654', '654', '654654', 'dfdfgdfg', '4654654', '65465', '4654', '654', '65465', '6546464646454', '6546464654', '6546546545', '465465', '46546', '54654654', '1989-05-06', '654654', 'Sdf', 'Sdf', 'Asf', '6546546546546', '5465454654', '5464646546', '654654', '65465', '4654', '65456', 'Si', '6654', '65465', '4654654', 'Masculino', '1989-09-07', '6546546', '54654', 'Sdf', 'Sdf', 'Sdf', '4656465465465', '4546546546', '5654654654', 'sdf', 'sdf', 'sdf', '65465', 'Si', '65465', '4654', '6546', 'Masculino', '1989-09-07', '65465', '465465', '2017-02-23', '6546546', '5465', 'sdf', '654654', 'Pendiente');
INSERT INTO `solicitudpfna` VALUES ('36', 'SN-036', 'PFNA-034', 'Credit', 'Asda', 'sdf', '6464645464', 'Sdf', 'sdf', '6464654546', '464654', '654', '654', '1989-05-06', '23132', '132', '1321', '1989-09-07', '64645', '6465', '6464646645', '64645', '4654', '4665655255', '5654', '6546', 'Maria Guadalupe', 'Alvarado', 'Higareda', '654', '654', '654654', 'dfdfgdfg', '4654654', '65465', '4654', '654', '65465', '6546464646454', '6546464654', '6546546545', '465465', '46546', '54654654', '1989-05-06', '654654', 'Sdf', 'Sdf', 'Asf', '6546546546546', '5465454654', '5464646546', '654654', '65465', '4654', '65456', 'Si', '6654', '65465', '4654654', 'Masculino', '1989-09-07', '6546546', '54654', 'Sdf', 'Sdf', 'Sdf', '4656465465465', '4546546546', '5654654654', 'sdf', 'sdf', 'sdf', '65465', 'Si', '65465', '4654', '6546', 'Masculino', '1989-09-07', '65465', '465465', '2017-02-23', '6546546', '5465', 'sdf', '654654', 'Pendiente');
INSERT INTO `solicitudpfna` VALUES ('37', 'SN-037', 'PFNA-034', 'Credit', 'Asda', 'sdf', '6464645464', 'Sdf', 'sdf', '6464654546', '464654', '654', '654', '1989-05-06', '23132', '132', '1321', '1989-09-07', '64645', '6465', '6464646645', '64645', '4654', '4665655255', '5654', '6546', 'Maria Guadalupe', 'Alvarado', 'Higareda', '654', '654', '654654', 'direccion persona mo', '4654654', '65465', '4654', '654', '65465', '6546464646454', '6546464654', '6546546545', '465465', '46546', '54654654', '1989-05-06', '654654', 'Sdf', 'Sdf', 'Asf', '6546546546546', '5465454654', '5464646546', '654654', '65465', '4654', '65456', 'Si', '6654', '65465', '4654654', 'Masculino', '1989-09-07', '6546546', '54654', 'Sdf', 'Sdf', 'Sdf', '4656465465465', '4546546546', '5654654654', 'sdf', 'sdf', 'sdf', '65465', 'Si', '65465', '4654', '6546', 'Masculino', '1989-09-07', '65465', '465465', '2017-02-23', '6546546', '5465', 'sdf', '654654', 'Pendiente');
INSERT INTO `solicitudpfna` VALUES ('38', 'SN-038', 'PFNA-034', 'Credit', 'Asda', 'sdf', '6464645464', 'Sdf', 'sdf', '6464654546', '464654', '654', '654', '1989-05-06', '23132', '132', '1321', '1989-09-07', '64645', '6465', '6464646645', '64645', '4654', '4665655255', '5654', '6546', 'Maria Guadalupe', 'Alvarado', 'Higareda', '654', '654', '654654', 'direccion persona mo', '4654654', '65465', '4654', '654', '65465', '6546464646454', '6546464654', '6546546545', '465465', '46546', '54654654', '1989-05-06', '654654', 'Sdf', 'Sdf', 'Asf', '6546546546546', '5465454654', '5464646546', '654654', '65465', '4654', '65456', 'Si', '6654', '65465', '4654654', 'Masculino', '1989-09-07', '6546546', '54654', 'Sdf', 'Sdf', 'Sdf', '4656465465465', '4546546546', '5654654654', 'sdf', 'sdf', 'sdf', '65465', 'Si', '65465', '4654', '6546', 'Masculino', '1989-09-07', '65465', '465465', '2017-02-23', '6546546', '5465', 'sdf', '654654', 'Pendiente');

-- ----------------------------
-- Table structure for `solicitudpm`
-- ----------------------------
DROP TABLE IF EXISTS `solicitudpm`;
CREATE TABLE `solicitudpm` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
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
  `NomGerenteGral` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `Id` (`Id`),
  KEY `Folio_Sol` (`Folio_Sol`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of solicitudpm
-- ----------------------------
INSERT INTO `solicitudpm` VALUES ('1', 'SM-001', 'PM-001', 'Credit', '321', '321', '32', '1989-09-07', '132', '132', '1321', '1989-09-07', '321', '32', '132132132132131', '32', '1321', '3216456546546', '32', '132', '132', '132', '132', '132', '132', '132', '132', '1326546465463213', '13654654621321', '21331321321321', '2132', '132', '132', '0000-00-00', '132', '13', '213', '213', '21', '321', '321', '321', '321', '32', '132', '132', '1321', '32', '132', '13213', '213', '213', '21', '321', '321', '321', '32', '132', '132', '13', '213', '21', '321', '321', '32', '132', '132', '132', '0000-00-00', '213', '213', '21', '321', '0000-00-00', '32', '1321', '32', '132', '132', '132', '132', '1321', '32', '1321', '321', '321', '231', '231', '231', '231', '321', '123', '0000-00-00', '321', '231', '321', '321', '0000-00-00', '321', '231', '231', '0000-00-00', '231', '321', '321', '23');

-- ----------------------------
-- Table structure for `tiposcreditos`
-- ----------------------------
DROP TABLE IF EXISTS `tiposcreditos`;
CREATE TABLE `tiposcreditos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) NOT NULL,
  `tasa` float(11,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tiposcreditos
-- ----------------------------
INSERT INTO `tiposcreditos` VALUES ('1', 'Auto Nuevo', '15.00');
INSERT INTO `tiposcreditos` VALUES ('2', 'Auto Usado', '18.00');
INSERT INTO `tiposcreditos` VALUES ('3', 'Crédito Simple', '0.00');
INSERT INTO `tiposcreditos` VALUES ('4', 'Crédito c/Garantia Hipotecaria', '0.00');
INSERT INTO `tiposcreditos` VALUES ('5', 'Crédito Cuenta Corriente', '0.00');
INSERT INTO `tiposcreditos` VALUES ('6', 'Fideicomiso', '0.00');
INSERT INTO `tiposcreditos` VALUES ('7', 'Crédito Hipotecario', '0.00');
INSERT INTO `tiposcreditos` VALUES ('8', 'Crédito Simple de Nomina', '0.00');
INSERT INTO `tiposcreditos` VALUES ('9', 'Crédito Refaccionario', '0.00');
INSERT INTO `tiposcreditos` VALUES ('10', 'Arrendamiento Financiero', '0.00');
INSERT INTO `tiposcreditos` VALUES ('11', 'Factoraje', '0.00');
INSERT INTO `tiposcreditos` VALUES ('12', 'Prestamo Quirografario', '0.00');
DELIMITER ;;
CREATE TRIGGER `pfa_id` BEFORE INSERT ON `pfa` FOR EACH ROW BEGIN
    if (SELECT COUNT(*) FROM pfa)=0   THEN
        SET NEW.Folio_Cliente= 'PFA-001';
    else
        SET NEW.Folio_Cliente= CONCAT('PFA-', LPAD((select MAX(Id)+1 from pfa), 3, '0'));
  END IF;
END;;;
DELIMITER ;
DELIMITER ;;
CREATE TRIGGER `pfna_id` BEFORE INSERT ON `pfna` FOR EACH ROW BEGIN
    if (SELECT COUNT(*) FROM pfna)=0   THEN
        SET NEW.Folio_Cliente= 'PFNA-001';
    else
        SET NEW.Folio_Cliente= CONCAT('PFNA-', LPAD((select MAX(Id)+1 from pfna), 3, '0'));
  END IF;
END;;;
DELIMITER ;
DELIMITER ;;
CREATE TRIGGER `pm_id` BEFORE INSERT ON `pm` FOR EACH ROW BEGIN
    if (SELECT COUNT(*) FROM pm)=0   THEN
        SET NEW.Folio_Cliente= 'PM-001';
    else
        SET NEW.Folio_Cliente= CONCAT('PM-', LPAD((select MAX(Id)+1 from pm), 3, '0'));
  END IF;
END;;;
DELIMITER ;
DELIMITER ;;
CREATE TRIGGER `solicitudpfa_id` BEFORE INSERT ON `solicitudpfa` FOR EACH ROW BEGIN
    if (SELECT COUNT(*) FROM solicitudpfa)=0   THEN
        SET NEW.Folio_Sol= 'SA-001';
    else
        SET NEW.Folio_Sol= CONCAT('SA-', LPAD((select MAX(Id)+1 from solicitudpfa), 3, '0'));
  END IF;
END;;;
DELIMITER ;
DELIMITER ;;
CREATE TRIGGER `solicitudpfna_id` BEFORE INSERT ON `solicitudpfna` FOR EACH ROW BEGIN
    if (SELECT COUNT(*) FROM solicitudpfna)=0   THEN
        SET NEW.Folio_Sol= 'SN-001';
    else
        SET NEW.Folio_Sol= CONCAT('SN-', LPAD((select MAX(Id)+1 from solicitudpfna), 3, '0'));
  END IF;
END;;;
DELIMITER ;
DELIMITER ;;
CREATE TRIGGER `solicitudpm_id` BEFORE INSERT ON `solicitudpm` FOR EACH ROW BEGIN
    if (SELECT COUNT(*) FROM solicitudpm)=0   THEN
        SET NEW.Folio_Sol= 'SM-001';
    else
        SET NEW.Folio_Sol= CONCAT('SM-', LPAD((select MAX(Id)+1 from solicitudpm), 3, '0'));
  END IF;
END;;;
DELIMITER ;
