<?php
require_once "code1_4.php";

$query="INSERT INTO `o_empleado`(`o_empleado_name`, `o_empleado_lastname`, `o_empleado_birth`, `o_empleado_gender`) VALUES ('Denisse','Aguilar','1990-05-07','F');";

if($conn->query($query))
{
	echo $conn->insert_id;
}

$conn->close(); 

?>