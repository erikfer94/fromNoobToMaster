CREATE DATABASE curso_php;

USE curso_php;

CREATE TABLE `o_empleado` (
 `o_empleado_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
 `o_empleado_name` varchar(25) NOT NULL,
 `o_empleado_lastname` varchar(25) NOT NULL,
 `o_empleado_birth` date NOT NULL,
 `o_empleado_gender` varchar(1) NOT NULL,
 `o_empleado_status` tinyint(1) NOT NULL DEFAULT '1',
 PRIMARY KEY (`o_empleado_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `o_empleado`(`o_empleado_name`, `o_empleado_lastname`, `o_empleado_birth`, `o_empleado_gender`) VALUES ("Juan","Gonzalez","1994-09-18","M");

INSERT INTO `o_empleado`(`o_empleado_name`, `o_empleado_lastname`, `o_empleado_birth`, `o_empleado_gender`) VALUES 
("Erik","Viveros","1994-12-04","M"),
("José","Peréz","1992-10-26","M"),
("Estrella","Cortes","1994-11-30","F");

CREATE TABLE `c_puesto` (
 `c_puesto_id` tinyint(4) unsigned NOT NULL AUTO_INCREMENT,
 `c_puesto_name` varchar(25) NOT NULL,
 `c_puesto_status` tinyint(1) NOT NULL DEFAULT '1',
 PRIMARY KEY (`c_puesto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `f_organigrama` (
 `f_organigrama_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
 `f_organigrama_puesto` tinyint(4) unsigned NOT NULL,
 `f_organigrama_padre` smallint(5) unsigned DEFAULT NULL,
 `f_organigrama_status` tinyint(1) NOT NULL DEFAULT '1',
 PRIMARY KEY (`f_organigrama_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `f_organigrama_empleado` (
 `f_organigrama_empleado_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
 `f_organigrama_empleado_organigrama` smallint(5) unsigned NOT NULL,
 `f_organigrama_empleado_empleado` tinyint(3) unsigned NOT NULL,
 `f_organigrama_empleado_inicio` date NOT NULL,
 `f_organigrama_empleado_fin` date DEFAULT NULL,
 PRIMARY KEY (`f_organigrama_empleado_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE f_organigrama ADD CONSTRAINT puesto_prganigrama FOREIGN KEY (f_organigrama_puesto) REFERENCES c_puesto(c_puesto_id);
ALTER TABLE f_organigrama ADD CONSTRAINT jefe_empleado FOREIGN KEY (f_organigrama_padre) REFERENCES f_organigrama(f_organigrama_id);
ALTER TABLE f_organigrama_empleado ADD CONSTRAINT organigrama_empleado FOREIGN KEY (f_organigrama_empleado_organigrama) REFERENCES f_organigrama(f_organigrama_id);
ALTER TABLE f_organigrama_empleado ADD CONSTRAINT empleado_organigrama FOREIGN KEY (f_organigrama_empleado_empleado) REFERENCES o_empleado(o_empleado_id);

INSERT INTO `c_puesto`(`c_puesto_name`) VALUES ("Presidente"), ("Director Ejecutivo"), ("DIrector de Sistemas"), ("Sr. Developer"), ("Project Manager"), ("Jr. Developer");

INSERT INTO f_organigrama (f_organigrama_puesto, f_organigrama_padre) VALUES (1,NULL),(2,1),(3,1),(5,2),(4,4),(6,5),(6,5),(6,5);

INSERT INTO `f_organigrama_empleado` (`f_organigrama_empleado_organigrama`, `f_organigrama_empleado_empleado`, `f_organigrama_empleado_inicio`) VALUES
(1, 1, '2018-03-08'),
(2, 3, '2018-03-08'),
(4, 2, '2018-03-08');