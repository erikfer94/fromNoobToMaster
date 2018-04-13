<?php
try{
	try{
		throw new Exception("noo");
	}
	catch(Exception $e){
		throw $e;
	}
	finally{
		echo "adentro<br/>";
	}
}
catch(Exception $e){
	var_dump($e->getMessage());
	echo "<br/>";
}
finally{
	echo "afuera<br/>";
}
?>