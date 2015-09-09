CREATE DATABASE `uti` /*!40100 DEFAULT CHARACTER SET latin1 */;

CREATE TABLE `internacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipodoc` int(11) DEFAULT NULL,
  `nrodoc` varchar(45) DEFAULT NULL,
  `procedencia` varchar(45) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `habilitado` tinyint(1) DEFAULT NULL,
  `idusuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `internacion_aportes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idinternacion` int(11) DEFAULT NULL,
  `aportes` varchar(45) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `idusuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `internacion_ca` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idinternacion` int(11) DEFAULT NULL,
  `ca` tinyint(1) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `idusuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `internacion_comentario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idinternacion` int(11) DEFAULT NULL,
  `comentario` varchar(45) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `idusuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `internacion_cvc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idinternacion` int(11) DEFAULT NULL,
  `cvc` tinyint(1) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `idusuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `internacion_examen_comp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idinternacion` int(11) DEFAULT NULL,
  `examencomp` varchar(45) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `idusuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `internacion_sedacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idinternacion` int(11) DEFAULT NULL,
  `sedacion` varchar(45) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `idusuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `internacion_tet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idinternacion` int(11) DEFAULT NULL,
  `tet` tinyint(1) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `idusuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `paciente` (
  `tipodoc` int(11) NOT NULL,
  `nrodoc` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `fechanac` date DEFAULT NULL,
  `nrohisclin` int(11) DEFAULT NULL,
  PRIMARY KEY (`tipodoc`,`nrodoc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `uti`.`laboratorio_item` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `detalle` VARCHAR(45) NULL COMMENT '',
  `tipo` ENUM('ORINA', 'SANGRE') NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '');

INSERT INTO `uti`.`laboratorio_item` (`id`, `detalle`, `tipo`) VALUES ('1', 'hto', 'SANGRE');
INSERT INTO `uti`.`laboratorio_item` (`id`, `detalle`, `tipo`) VALUES ('2', 'hb', 'SANGRE');
INSERT INTO `uti`.`laboratorio_item` (`id`, `detalle`, `tipo`) VALUES ('3', 'gblancos', 'SANGRE');
INSERT INTO `uti`.`laboratorio_item` (`id`, `detalle`, `tipo`) VALUES ('4', 'plaq', 'SANGRE');
INSERT INTO `uti`.`laboratorio_item` (`id`, `detalle`, `tipo`) VALUES ('5', 'glucemia', 'SANGRE');
INSERT INTO `uti`.`laboratorio_item` (`id`, `detalle`, `tipo`) VALUES ('6', 'urea', 'SANGRE');
INSERT INTO `uti`.`laboratorio_item` (`id`, `detalle`, `tipo`) VALUES ('7', 'creat', 'SANGRE');
INSERT INTO `uti`.`laboratorio_item` (`id`, `detalle`, `tipo`) VALUES ('8', 'na', 'SANGRE');
INSERT INTO `uti`.`laboratorio_item` (`id`, `detalle`, `tipo`) VALUES ('9', 'k', 'SANGRE');
INSERT INTO `uti`.`laboratorio_item` (`id`, `detalle`, `tipo`) VALUES ('10', 'lactico', 'SANGRE');
INSERT INTO `uti`.`laboratorio_item` (`id`, `detalle`, `tipo`) VALUES ('11', 'got', 'SANGRE');
INSERT INTO `uti`.`laboratorio_item` (`id`, `detalle`, `tipo`) VALUES ('12', 'gpt', 'SANGRE');
INSERT INTO `uti`.`laboratorio_item` (`id`, `detalle`, `tipo`) VALUES ('13', 'amilasa', 'SANGRE');
INSERT INTO `uti`.`laboratorio_item` (`id`, `detalle`, `tipo`) VALUES ('14', 'bt', 'SANGRE');
INSERT INTO `uti`.`laboratorio_item` (`id`, `detalle`, `tipo`) VALUES ('15', 'bd', 'SANGRE');
INSERT INTO `uti`.`laboratorio_item` (`id`, `detalle`, `tipo`) VALUES ('16', 'fal', 'SANGRE');
INSERT INTO `uti`.`laboratorio_item` (`id`, `detalle`, `tipo`) VALUES ('17', 'tprot', 'SANGRE');
INSERT INTO `uti`.`laboratorio_item` (`id`, `detalle`, `tipo`) VALUES ('18', 'apttseg', 'SANGRE');
INSERT INTO `uti`.`laboratorio_item` (`id`, `detalle`, `tipo`) VALUES ('19', 'ph', 'SANGRE');
INSERT INTO `uti`.`laboratorio_item` (`id`, `detalle`, `tipo`) VALUES ('20', 'co2', 'SANGRE');
INSERT INTO `uti`.`laboratorio_item` (`id`, `detalle`, `tipo`) VALUES ('21', 'excbase', 'SANGRE');
INSERT INTO `uti`.`laboratorio_item` (`id`, `detalle`, `tipo`) VALUES ('22', 'hco3', 'SANGRE');
INSERT INTO `uti`.`laboratorio_item` (`id`, `detalle`, `tipo`) VALUES ('23', 'po2', 'SANGRE');
INSERT INTO `uti`.`laboratorio_item` (`id`, `detalle`, `tipo`) VALUES ('24', 'saro2', 'SANGRE');
INSERT INTO `uti`.`laboratorio_item` (`id`, `detalle`, `tipo`) VALUES ('25', 'cpk', 'SANGRE');
INSERT INTO `uti`.`laboratorio_item` (`id`, `detalle`, `tipo`) VALUES ('26', 'esd', 'SANGRE');
INSERT INTO `uti`.`laboratorio_item` (`id`, `detalle`, `tipo`) VALUES ('27', 'pcr', 'SANGRE');
INSERT INTO `uti`.`laboratorio_item` (`id`, `detalle`, `tipo`) VALUES ('28', 'procalcitonina', 'SANGRE');
INSERT INTO `uti`.`laboratorio_item` (`id`, `detalle`, `tipo`) VALUES ('29', 'lcrorina', 'ORINA');
INSERT INTO `uti`.`laboratorio_item` (`id`, `detalle`, `tipo`) VALUES ('30', 'gborina', 'ORINA');
INSERT INTO `uti`.`laboratorio_item` (`id`, `detalle`, `tipo`) VALUES ('31', 'protorina', 'ORINA');
INSERT INTO `uti`.`laboratorio_item` (`id`, `detalle`, `tipo`) VALUES ('32', 'glucorina', 'ORINA');
INSERT INTO `uti`.`laboratorio_item` (`id`, `detalle`, `tipo`) VALUES ('33', 'aspectoorina', 'ORINA');

CREATE TABLE `internacion_laboratorio` (
  `idinternacion_laboratorio` int(11) NOT NULL AUTO_INCREMENT,
  `idinternacion` int(11) DEFAULT NULL,
  `idlaboratorio` int(11) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `habilitado` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`idinternacion_laboratorio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `uti`.`internacion_laboratorio_valores` (
  `idlaboratorio_item` INT NOT NULL COMMENT '',
  `idinternacion_laboratorio` INT NULL COMMENT '',
  `valor` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`idlaboratorio_item`)  COMMENT '');

CREATE TABLE `uti`.`camas` (
  `id` int(11) NOT NULL,
  `tipo_cama` enum('UCIRQ','UCI') DEFAULT NULL,
  `nro_cama` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `uti`.`camas` (`id`, `tipo_cama`, `nro_cama`) VALUES ('1', 'UCIRQ', '1');
INSERT INTO `uti`.`camas` (`id`, `tipo_cama`, `nro_cama`) VALUES ('2', 'UCIRQ', '2');
INSERT INTO `uti`.`camas` (`id`, `tipo_cama`, `nro_cama`) VALUES ('3', 'UCIRQ', '3');
INSERT INTO `uti`.`camas` (`id`, `tipo_cama`, `nro_cama`) VALUES ('4', 'UCIRQ', '4');
INSERT INTO `uti`.`camas` (`id`, `tipo_cama`, `nro_cama`) VALUES ('5', 'UCIRQ', '5');
INSERT INTO `uti`.`camas` (`id`, `tipo_cama`, `nro_cama`) VALUES ('6', 'UCIRQ', '6');
INSERT INTO `uti`.`camas` (`id`, `tipo_cama`, `nro_cama`) VALUES ('7', 'UCIRQ', '7');
INSERT INTO `uti`.`camas` (`id`, `tipo_cama`, `nro_cama`) VALUES ('8', 'UCIRQ', '8');
INSERT INTO `uti`.`camas` (`id`, `tipo_cama`, `nro_cama`) VALUES ('9', 'UCIRQ', '9');
INSERT INTO `uti`.`camas` (`id`, `tipo_cama`, `nro_cama`) VALUES ('10', 'UCIRQ', '10');
INSERT INTO `uti`.`camas` (`id`, `tipo_cama`, `nro_cama`) VALUES ('11', 'UCIRQ', '11');
INSERT INTO `uti`.`camas` (`id`, `tipo_cama`, `nro_cama`) VALUES ('12', 'UCI', '1');
INSERT INTO `uti`.`camas` (`id`, `tipo_cama`, `nro_cama`) VALUES ('13', 'UCI', '2');
INSERT INTO `uti`.`camas` (`id`, `tipo_cama`, `nro_cama`) VALUES ('14', 'UCI', '3');
INSERT INTO `uti`.`camas` (`id`, `tipo_cama`, `nro_cama`) VALUES ('15', 'UCI', '4');
INSERT INTO `uti`.`camas` (`id`, `tipo_cama`, `nro_cama`) VALUES ('16', 'UCI', '5');
INSERT INTO `uti`.`camas` (`id`, `tipo_cama`, `nro_cama`) VALUES ('17', 'UCI', '6');
INSERT INTO `uti`.`camas` (`id`, `tipo_cama`, `nro_cama`) VALUES ('18', 'UCI', '7');
INSERT INTO `uti`.`camas` (`id`, `tipo_cama`, `nro_cama`) VALUES ('19', 'UCI', '8');
INSERT INTO `uti`.`camas` (`id`, `tipo_cama`, `nro_cama`) VALUES ('20', 'UCI', '9');
INSERT INTO `uti`.`camas` (`id`, `tipo_cama`, `nro_cama`) VALUES ('21', 'UCI', '10');
INSERT INTO `uti`.`camas` (`id`, `tipo_cama`, `nro_cama`) VALUES ('22', 'UCI', '11');