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