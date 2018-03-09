CREATE TABLE `o_empleado` (
 `o_empleado_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
 `o_empleado_name` varchar(25) NOT NULL,
 `o_empleado_lastname` varchar(25) NOT NULL,
 `o_empleado_birth` date NOT NULL,
 `o_empleado_gender` varchar(1) NOT NULL,
 `o_empleado_status` tinyint(1) NOT NULL DEFAULT '1',
 PRIMARY KEY (`o_empleado_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;