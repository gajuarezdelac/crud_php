CREATE DATABASE php_mysql_crud;

use php_mysql_crud;

CREATE TABLE task(
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(255) NOT NULL,
  description TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE proveedor(
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  nombre VARCHAR(75) NOT NULL,
  telefono VARCHAR(20) NOT NULL,
  direccion VARCHAR(20) NOT NULL,
  email VARCHAR(50) NULL,
  calif INT NULL
)


DESCRIBE Proveedor;
DESCRIBE task;
