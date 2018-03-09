INSERT INTO `c_puesto`(`c_puesto_name`) VALUES ("Presidente"), ("Director Ejecutivo"), ("DIrector de Sistemas"), ("Sr. Developer"), ("Project Manager"), ("Jr. Developer");

INSERT INTO f_organigrama (f_organigrama_puesto, f_organigrama_padre) VALUES (1,NULL),(2,1),(3,1),(5,2),(4,4),(6,5),(6,5),(6,5);

INSERT INTO `f_organigrama_empleado` (`f_organigrama_empleado_organigrama`, `f_organigrama_empleado_empleado`, `f_organigrama_empleado_inicio`) VALUES
(1, 1, '2018-03-08'),
(2, 3, '2018-03-08'),
(4, 2, '2018-03-08');