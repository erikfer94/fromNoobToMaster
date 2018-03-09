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