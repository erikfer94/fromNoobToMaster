SELECT o_empleado_id, o_empleado_name, o_empleado_lastname 
FROM o_empleado;

SELECT o_empleado_id, o_empleado_name, o_empleado_lastname 
FROM o_empleado 
WHERE o_empleado_gender="F";

SELECT FO.f_organigrama_id id_organigrama ,CP.c_puesto_name puesto, FO.f_organigrama_padre jefe 
FROM f_organigrama FO 
LEFT JOIN c_puesto CP ON CP.c_puesto_id=FO.f_organigrama_puesto;

SELECT FO.f_organigrama_id id_organigrama ,CP.c_puesto_name puesto, FO.f_organigrama_padre jefe, CONCAT(OE.o_empleado_name," ",OE.o_empleado_lastname) responsable
FROM f_organigrama FO 
LEFT JOIN c_puesto CP ON CP.c_puesto_id=FO.f_organigrama_puesto
LEFT JOIN f_organigrama_empleado FOE ON FOE.f_organigrama_empleado_organigrama=FO.f_organigrama_id
LEFT JOIN o_empleado OE ON OE.o_empleado_id=FOE.f_organigrama_empleado_empleado;

SELECT FO.f_organigrama_padre id_padre, CP.c_puesto_name nombre_puesto, COUNT(FO.f_organigrama_id) empleados_por_jefe
FROM f_organigrama FO 
LEFT JOIN f_organigrama FO2 ON FO2.f_organigrama_id=FO.f_organigrama_padre
LEFT JOIN c_puesto CP ON CP.c_puesto_id=FO2.f_organigrama_puesto
GROUP BY FO.f_organigrama_padre
HAVING FO.f_organigrama_padre IS NOT NULL
ORDER BY 3