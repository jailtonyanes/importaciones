/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.6.26 : Database - smi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`smi` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;

USE `smi`;

/*Table structure for table `cliente` */

DROP TABLE IF EXISTS `cliente`;

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cip_ruc` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `nombre` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `apellido` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `direccion` varchar(80) COLLATE utf8_bin DEFAULT NULL,
  `provincia` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `distrito` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `telefono1` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `telefono2` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_cli` (`cip_ruc`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `cliente` */

insert  into `cliente`(`id`,`cip_ruc`,`nombre`,`apellido`,`direccion`,`provincia`,`distrito`,`telefono1`,`telefono2`,`email`) values (1,'72260404','Jailton ','Yanes','calle 9','Bocas-del-Toro','Almirante','340','3401','jailtonyanesromero@gmail.com'),(2,'72210310','Gerardo','Comas','Calle 60 - 30 -20','Panamá-Oeste','Chame','2451421412','2451421412','gera@gmail.com');

/*Table structure for table `cotizacion` */

DROP TABLE IF EXISTS `cotizacion`;

CREATE TABLE `cotizacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `creada_por` int(11) DEFAULT NULL,
  `cliente_id` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `cotizacion` */

insert  into `cotizacion`(`id`,`estado`,`fecha_creacion`,`creada_por`,`cliente_id`) values (51,'COTIZADO','2016-01-19',17,1),(52,'COTIZADO','2016-01-21',17,2);

/*Table structure for table `distrito` */

DROP TABLE IF EXISTS `distrito`;

CREATE TABLE `distrito` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `provincia_id` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre_UNIQUE` (`nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `distrito` */

insert  into `distrito`(`id`,`nombre`,`provincia_id`) values (1,'Almirante','18'),(2,'Bocas del Toro','18'),(3,'Changuinola','18'),(4,'Chiriquí Grande','18'),(8,'David','19'),(9,'Alanje','19'),(10,'Barú','19'),(11,'Boquerón','19'),(12,'Boquete','19'),(13,'Bugaba','19'),(14,'Dolega','19'),(15,'Gualaca','19'),(16,'Remedios','19'),(17,'Renacimiento','19'),(18,'San Félix','19'),(19,'San Lorenzo','19'),(20,'Tolé','19'),(21,'﻿Penonomé','20'),(22,'Aguadulce','20'),(23,'Antón','20'),(24,'La Pintada','20'),(25,'Natá','20'),(26,'Olá','20'),(27,'Colón','21'),(28,'Chagres','21'),(29,'Donoso','21'),(30,'Portobelo','21'),(31,'Santa Isabel','21'),(32,'Chepigana','22'),(33,'Pinogana','22'),(34,'Cémaco','23'),(35,'Sambú','23'),(36,'Chitré','24'),(37,'Las Minas','24'),(38,'Los Pozos','24'),(39,'Ocú','24'),(40,'Parita','24'),(41,'Pesé','24'),(42,'Santa María','24'),(43,'Las Tablas','25'),(44,'Guararé','25'),(45,'Los Santos','25'),(46,'Macaracas','25'),(47,'Pedasí','25'),(48,'Pocrí','25'),(49,'Tonosí','25'),(50,'Besikó','26'),(51,'Kankintú','26'),(52,'Kusapín','26'),(53,'Mironó','26'),(54,'Müna','26'),(55,'Nole Duima','26'),(56,'Ñürüm','26'),(57,'Jirondai','26'),(58,'Santa Catalina o Calovébora','26'),(59,'Panamá','27'),(60,'Balboa','27'),(61,'Chepo','27'),(62,'Chimán','27'),(63,'San Miguelito','27'),(64,'Taboga','27'),(65,'Arraiján','28'),(66,'Capira','28'),(67,'Chame','28'),(68,'La Chorrera','28'),(69,'San Carlos','28'),(70,'Santiago','29'),(71,'Atalaya','29'),(72,'Calobre','29'),(73,'Cañazas','29'),(74,'La Mesa','29'),(75,'Las Palmas','29'),(76,'Mariato','29'),(77,'Montijo','29'),(78,'Río de Jesús','29'),(79,'San Francisco','29'),(80,'Santa Fe','29'),(81,'Soná','29');

/*Table structure for table `items` */

DROP TABLE IF EXISTS `items`;

CREATE TABLE `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `smi` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipo_servicio` varchar(80) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `descripcion` text COLLATE utf8_spanish_ci,
  `weblink` text COLLATE utf8_spanish_ci,
  `precio_articulo` double DEFAULT NULL,
  `shipping` double DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `peso` int(11) DEFAULT NULL,
  `state_tax` varchar(2) COLLATE utf8_spanish_ci DEFAULT NULL,
  `precio_web` double DEFAULT NULL,
  `flete_smi` double DEFAULT NULL,
  `total` double DEFAULT NULL,
  `cotizacion_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `items` */

insert  into `items`(`id`,`fecha`,`smi`,`tipo_servicio`,`cantidad`,`descripcion`,`weblink`,`precio_articulo`,`shipping`,`created_at`,`created_by`,`peso`,`state_tax`,`precio_web`,`flete_smi`,`total`,`cotizacion_id`) values (24,NULL,NULL,'Compras por internet',2,'asdfs','asfsd',234,12,NULL,NULL,1,'0',513.6,85.61,599.21,50),(25,NULL,NULL,'Transporte de carga ',1,'sdfasd','qdf',2000,324,NULL,NULL,3,'0',2486.68,399.69,2886.37,50),(26,NULL,NULL,'Compras por internet',2,'sdfasdfsd','galeob',2423,12,NULL,NULL,4,'SI',5198.06,822.7,6020.76,51),(27,NULL,NULL,'Compras por internet',3,'asdfasd','asdfasdf',34,1,NULL,NULL,3,'SI',110.21,31.33,141.54,52),(28,NULL,NULL,'Transporte de carga aérea',4,'fasdfasd','sfasdfa',35,3,NULL,NULL,2,'SI',153.01,36.22,189.23,52);

/*Table structure for table `provincia` */

DROP TABLE IF EXISTS `provincia`;

CREATE TABLE `provincia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre_UNIQUE` (`nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `provincia` */

insert  into `provincia`(`id`,`nombre`) values (18,'Bocas-del-Toro'),(19,'Chiriquí'),(20,'Coclé'),(21,'Colón'),(22,'Darién'),(23,'Emberá-Wounaan'),(24,'Herrera'),(25,'Los-Santos'),(26,'Ngäbe-Buglé'),(27,'Panamá'),(28,'Panamá-Oeste'),(29,'Veraguas');

/*Table structure for table `sucursal` */

DROP TABLE IF EXISTS `sucursal`;

CREATE TABLE `sucursal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `provincia_id` int(11) DEFAULT NULL,
  `distrito_id` int(11) DEFAULT NULL,
  `direcion` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` text COLLATE utf8_spanish_ci,
  `telefono` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `sucursal` */

insert  into `sucursal`(`id`,`nombre`,`provincia_id`,`distrito_id`,`direcion`,`email`,`telefono`) values (1,'Panamá',27,59,'La Cresta, Edif.Madona, Local #1',' ventaspty@smimports.net','6058-8308'),(2,'Penonomé',20,21,'Vía Interamericana, Plaza del Sol, Local #1','ventas@smimports.net','997-8947'),(3,'Santiago',29,70,'Ave. Hector Santacoloma, Plaza Balboa, Local #1','stgoventas@smimports.net','950-8343'),(4,'Mouriño',0,0,'Calle 9','jailtin@gmail.com','1234'),(6,'Curumaní2',27,62,'Calle 60','elvalesita@hotmail.com','23145');

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `apellido` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `nick` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `estado` varchar(20) COLLATE utf8_bin DEFAULT NULL COMMENT '1 para activo, 0 para inactivo',
  `perfil` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `cambio_password` int(1) DEFAULT NULL COMMENT '1 para cambio de password, 0 para no cambiar el password',
  `sucursal` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Uk` (`nick`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `usuario` */

insert  into `usuario`(`id`,`nombre`,`apellido`,`nick`,`password`,`estado`,`perfil`,`cambio_password`,`sucursal`) values (6,'Panamá','Diaz','cdiaz','1234','Activo','Administrador',1,1),(8,'Julio','Rojas','jrojas','1234','Inactivo','Manager',0,1),(9,'Panamá','Rocha','crocha','1234','Activo','Manager',1,1),(12,'John','Porto Carrero','jporto','1234','Activo','Administrador',0,1),(13,'Panamá','Romero','nacha','1234','Activo','Manager',1,2),(16,'Mauricio','Rubio','mrubion','1234','Activo','Administrador',0,1),(17,'Jailton','Yanes','yanesj','sjn316','Activo','Administrador',0,1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
