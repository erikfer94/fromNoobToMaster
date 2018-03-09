<?php
require_once "code1_6.php";

$query="INSERT INTO `o_empleado`(`o_empleado_name`, `o_empleado_lastname`, `o_empleado_birth`, `o_empleado_gender`) VALUES ('Denisse','Aguilar','1990-05-07','F');";

if (mysqli_query($conn, $query)) {
    echo mysqli_insert_id($conn);
}

mysqli_close($conn); 

?>