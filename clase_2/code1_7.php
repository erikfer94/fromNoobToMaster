<?php
require_once "code1_6.php";

$query="SELECT FO.f_organigrama_padre id_padre, CP.c_puesto_name nombre_puesto, COUNT(FO.f_organigrama_id) empleados_por_jefe
	FROM f_organigrama FO 
	LEFT JOIN f_organigrama FO2 ON FO2.f_organigrama_id=FO.f_organigrama_padre
	LEFT JOIN c_puesto CP ON CP.c_puesto_id=FO2.f_organigrama_puesto
	GROUP BY FO.f_organigrama_padre
	HAVING FO.f_organigrama_padre IS NOT NULL
	ORDER BY 3";

$queryDB=mysqli_query($conn,$query);
echo "<pre>";
var_dump($queryDB);
print_r($queryDB);
echo "</pre>";

if(mysqli_num_rows($queryDB)>0)
{
	while ($row = mysqli_fetch_assoc($queryDB)) {
		echo "<pre>";
		print_r($row);
		echo "</pre>";
	}
}
mysqli_close($conn); 
?>