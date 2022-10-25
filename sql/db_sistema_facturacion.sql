CREATE DATABASE `sistema-facturacion` /*!40100 COLLATE 'utf8mb4_general_ci' */

CREATE TABLE `usuarios` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`nombres` VARCHAR(50) NOT NULL DEFAULT '0',
	`apellidos` VARCHAR(50) NOT NULL DEFAULT '0',
	`correo` VARCHAR(50) NOT NULL DEFAULT '0',
	`password` VARCHAR(50) NOT NULL DEFAULT '0',
	`sexo` VARCHAR(50) NOT NULL DEFAULT '0',
	PRIMARY KEY (`id`)
)
COLLATE='utf8mb4_general_ci'
;
SELECT `DEFAULT_COLLATION_NAME` FROM `information_schema`.`SCHEMATA` WHERE `SCHEMA_NAME`='sistema-facturacion';
SHOW TABLE STATUS FROM `sistema-facturacion`;
SHOW FUNCTION STATUS WHERE `Db`='sistema-facturacion';
SHOW PROCEDURE STATUS WHERE `Db`='sistema-facturacion';
SHOW TRIGGERS FROM `sistema-facturacion`;
SELECT *, EVENT_SCHEMA AS `Db`, EVENT_NAME AS `Name` FROM information_schema.`EVENTS` WHERE `EVENT_SCHEMA`='sistema-facturacion';
SELECT * FROM `information_schema`.`COLUMNS` WHERE TABLE_SCHEMA='sistema-facturacion' AND TABLE_NAME='usuarios' ORDER BY ORDINAL_POSITION;
SHOW INDEXES FROM `usuarios` FROM `sistema-facturacion`;
SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE   CONSTRAINT_SCHEMA='sistema-facturacion'   AND TABLE_NAME='usuarios'   AND REFERENCED_TABLE_NAME IS NOT NULL;
SELECT * FROM information_schema.KEY_COLUMN_USAGE WHERE   TABLE_SCHEMA='sistema-facturacion'   AND TABLE_NAME='usuarios'   AND REFERENCED_TABLE_NAME IS NOT NULL;
/* Entrando a la sesión "Unnamed" */
SHOW CREATE TABLE `sistema-facturacion`.`usuarios`;
SELECT CONSTRAINT_NAME, CHECK_CLAUSE FROM `information_schema`.`CHECK_CONSTRAINTS` WHERE CONSTRAINT_SCHEMA='sistema-facturacion' AND TABLE_NAME='usuarios';

CREATE TABLE `inventario` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`producto` VARCHAR(50) NOT NULL DEFAULT '0',
	`precio` INT NOT NULL DEFAULT 0,
	`stock` INT NOT NULL DEFAULT 0,
	PRIMARY KEY (`id`)
)
COLLATE='utf8mb4_general_ci'
;
SELECT `DEFAULT_COLLATION_NAME` FROM `information_schema`.`SCHEMATA` WHERE `SCHEMA_NAME`='sistema-facturacion';
SHOW TABLE STATUS FROM `sistema-facturacion`;
SHOW FUNCTION STATUS WHERE `Db`='sistema-facturacion';
SHOW PROCEDURE STATUS WHERE `Db`='sistema-facturacion';
SHOW TRIGGERS FROM `sistema-facturacion`;
SELECT *, EVENT_SCHEMA AS `Db`, EVENT_NAME AS `Name` FROM information_schema.`EVENTS` WHERE `EVENT_SCHEMA`='sistema-facturacion';
SELECT * FROM `information_schema`.`COLUMNS` WHERE TABLE_SCHEMA='sistema-facturacion' AND TABLE_NAME='inventario' ORDER BY ORDINAL_POSITION;
SHOW INDEXES FROM `inventario` FROM `sistema-facturacion`;
SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE   CONSTRAINT_SCHEMA='sistema-facturacion'   AND TABLE_NAME='inventario'   AND REFERENCED_TABLE_NAME IS NOT NULL;
SELECT * FROM information_schema.KEY_COLUMN_USAGE WHERE   TABLE_SCHEMA='sistema-facturacion'   AND TABLE_NAME='inventario'   AND REFERENCED_TABLE_NAME IS NOT NULL;
/* Entrando a la sesión "Unnamed" */
SHOW CREATE TABLE `sistema-facturacion`.`inventario`;
SELECT CONSTRAINT_NAME, CHECK_CLAUSE FROM `information_schema`.`CHECK_CONSTRAINTS` WHERE CONSTRAINT_SCHEMA='sistema-facturacion' AND TABLE_NAME='inventario';



-- FACTURAS --



CREATE TABLE `facturas` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`cliente` VARCHAR(50) NOT NULL DEFAULT '0',
	`ci` INT NOT NULL DEFAULT 0,
	`telefono` INT NOT NULL DEFAULT 0,
	`direccion` VARCHAR(50) NOT NULL DEFAULT '0',
	`items` VARCHAR(50) NOT NULL DEFAULT '0',
	`total` INT NOT NULL DEFAULT 0,
	PRIMARY KEY (`id`)
)
COLLATE='utf8mb4_general_ci'
;
SELECT `DEFAULT_COLLATION_NAME` FROM `information_schema`.`SCHEMATA` WHERE `SCHEMA_NAME`='sistema-facturacion';
SHOW TABLE STATUS FROM `sistema-facturacion`;
SHOW FUNCTION STATUS WHERE `Db`='sistema-facturacion';
SHOW PROCEDURE STATUS WHERE `Db`='sistema-facturacion';
SHOW TRIGGERS FROM `sistema-facturacion`;
SELECT *, EVENT_SCHEMA AS `Db`, EVENT_NAME AS `Name` FROM information_schema.`EVENTS` WHERE `EVENT_SCHEMA`='sistema-facturacion';
SELECT * FROM `information_schema`.`COLUMNS` WHERE TABLE_SCHEMA='sistema-facturacion' AND TABLE_NAME='facturas' ORDER BY ORDINAL_POSITION;
SHOW INDEXES FROM `facturas` FROM `sistema-facturacion`;
SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE   CONSTRAINT_SCHEMA='sistema-facturacion'   AND TABLE_NAME='facturas'   AND REFERENCED_TABLE_NAME IS NOT NULL;
SELECT * FROM information_schema.KEY_COLUMN_USAGE WHERE   TABLE_SCHEMA='sistema-facturacion'   AND TABLE_NAME='facturas'   AND REFERENCED_TABLE_NAME IS NOT NULL;
/* Entrando a la sesión "Unnamed" */
SHOW CREATE TABLE `sistema-facturacion`.`facturas`;
SELECT CONSTRAINT_NAME, CHECK_CLAUSE FROM `information_schema`.`CHECK_CONSTRAINTS` WHERE CONSTRAINT_SCHEMA='sistema-facturacion' AND TABLE_NAME='facturas';