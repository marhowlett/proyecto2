/*
SQLyog Ultimate v11.28 (64 bit)
MySQL - 5.7.17-log : Database - pulga
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pulga` /*!40100 DEFAULT CHARACTER SET utf32 */;

USE `pulga`;
/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `usuario` varchar(40) NOT NULL,
  `contraseña` varchar(40) DEFAULT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

/*Data for the table `usuario` */

insert  into `usuario`(`usuario`,`contraseña`,`nombre`,`apellidos`) values ('jramonell','02c0f8926441b227d8ff9b0a4824cbec','jaime','ramonell'),('jrr','202cb962ac59075b964b07152d234b70','jaime','jaime'),('mar','202cb962ac59075b964b07152d234b70','mar','ramonell'),('marimar','202cb962ac59075b964b07152d234b70','Marimar','Ramonell'),('vero','202cb962ac59075b964b07152d234b70','vero','cuellar');

/*Table structure for table `tipo_producto` */

DROP TABLE IF EXISTS `tipo_producto`;

CREATE TABLE `tipo_producto` (
  `tipo_producto` varchar(40) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`tipo_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

/*Data for the table `tipo_producto` */

insert  into `tipo_producto`(`tipo_producto`,`descripcion`) values ('01','bolsas'),('02','aretes'),('03','collares');


/*Table structure for table `inventario` */

DROP TABLE IF EXISTS `inventario`;

CREATE TABLE `inventario` (
  `id_producto` varchar(10) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `tipo_producto` varchar(40) DEFAULT NULL,
  `cantidad` int(10) DEFAULT NULL,
  `precio` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_producto`),
  KEY `inventario_tipoproducto` (`tipo_producto`),
  CONSTRAINT `inventario_tipoproducto` FOREIGN KEY (`tipo_producto`) REFERENCES `tipo_producto` (`tipo_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

/*Data for the table `inventario` */

insert  into `inventario`(`id_producto`,`descripcion`,`tipo_producto`,`cantidad`,`precio`) values ('01','01','01',22,50),('02','02','03',10,2),('A00-2','aretes dorados','02',10,20),('B00-3','bolsa roja','01',10,180),('C00-4','Collar azul','03',10,20);



/*Table structure for table `compra` */

DROP TABLE IF EXISTS `compra`;

CREATE TABLE `compra` (
  `folio_compra` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_compra` datetime DEFAULT NULL,
  `id_producto` varchar(10) DEFAULT NULL,
  `cantidad` int(5) DEFAULT NULL,
  `usuario` varchar(15) DEFAULT NULL,
  KEY `compra_llave` (`id_producto`),
  KEY `compra_usuario` (`usuario`),
  KEY `folio_compra` (`folio_compra`),
  CONSTRAINT `compra_llave` FOREIGN KEY (`id_producto`) REFERENCES `inventario` (`id_producto`),
  CONSTRAINT `compra_usuario` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf32;

/*Data for the table `compra` */

insert  into `compra`(`folio_compra`,`fecha_compra`,`id_producto`,`cantidad`,`usuario`) values (1,'2018-07-07 13:43:43','A00-2',2,'marimar'),(6,'2018-07-09 04:19:35','B00-3',6,'mar'),(7,'2018-07-09 04:19:35','B00-3',6,'mar'),(8,'2018-07-09 04:19:35','B00-3',6,'mar'),(9,'2018-07-09 04:27:54','01',2,'mar'),(10,'2018-07-09 04:28:55','A00-2',3,'mar'),(11,'2018-07-09 04:29:13','01',5,'mar'),(12,'2018-07-09 04:29:13','01',5,'mar'),(13,'2018-07-09 04:29:13','01',5,'mar'),(14,'2018-07-09 04:29:13','01',5,'mar'),(15,'2018-07-09 04:35:03','01',2,'mar'),(16,'2018-07-09 04:37:18','01',2,'mar'),(17,'2018-07-09 04:37:18','01',2,'mar'),(18,'2018-07-09 04:38:04','01',2,'mar'),(19,'2018-07-09 04:39:38','01',6,'mar'),(20,'2018-07-09 04:39:38','01',6,'mar');


/*Table structure for table `venta` */

DROP TABLE IF EXISTS `venta`;

CREATE TABLE `venta` (
  `folio_venta` int(10) NOT NULL,
  `fecha_venta` date DEFAULT NULL,
  `id_producto` varchar(10) DEFAULT NULL,
  `cantidad` int(10) DEFAULT NULL,
  `importe_parcial` int(10) DEFAULT NULL,
  `importe_total` int(10) DEFAULT NULL,
  `usuario` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`folio_venta`),
  KEY `venta_producto` (`id_producto`),
  KEY `venta_usuario` (`usuario`),
  CONSTRAINT `venta_producto` FOREIGN KEY (`id_producto`) REFERENCES `inventario` (`id_producto`),
  CONSTRAINT `venta_usuario` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

/*Data for the table `venta` */

insert  into `venta`(`folio_venta`,`fecha_venta`,`id_producto`,`cantidad`,`importe_parcial`,`importe_total`,`usuario`) values (1,'2018-07-07','A00-2',NULL,20,NULL,'marimar');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
