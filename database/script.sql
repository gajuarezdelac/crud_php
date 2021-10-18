CREATE DATABASE php_mysql_crud;

use php_mysql_crud;

CREATE TABLE proveedor(
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  nombre VARCHAR(75) NOT NULL,
  telefono VARCHAR(20) NOT NULL,
  direccion VARCHAR(20) NOT NULL,
  email VARCHAR(50) NULL,
  calif INT NULL
)


CREATE TABLE IF NOT EXISTS `parte` (
  `id` INT(11) PRIMARY KEY AUTO_INCREMENT,
  `pkparte` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `nombre` varchar(40) COLLATE latin1_spanish_ci DEFAULT NULL,
  `tipoparte` varchar(10) COLLATE latin1_spanish_ci DEFAULT NULL,
  `color` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `existencia` int(11) DEFAULT NULL,
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;


CREATE TABLE IF NOT EXISTS `pedido` (
  `pkpedido` int(11) NOT NULL AUTO_INCREMENT,
  `fechapedido` date DEFAULT NULL,
  `fkparte` varchar(10) COLLATE latin1_spanish_ci DEFAULT NULL,
  `fkproveedor` varchar(10) COLLATE latin1_spanish_ci DEFAULT '0',
  `cantidad` int(11) DEFAULT '0',
  `surtidosn` char(2) COLLATE latin1_spanish_ci DEFAULT '0',
  `fechasurtido` date DEFAULT NULL,
  `costo` decimal(10,2) DEFAULT '0.00',
  PRIMARY KEY (`pkpedido`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;


DESCRIBE Proveedor;
