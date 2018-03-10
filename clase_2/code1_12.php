<?php
require_once "code1_8.php";

$query="INSERT INTO `o_empleado`(`o_empleado_name`, `o_empleado_lastname`, `o_empleado_birth`, `o_empleado_gender`) VALUES ('Denisse','Aguilar','1990-05-07','F');";

try{
    $conn->exec($query);
    echo $conn->lastInsertId();

}
catch(PDOException $e){
	echo "Error: " . $e->getMessage();
}
$conn=null;

?>