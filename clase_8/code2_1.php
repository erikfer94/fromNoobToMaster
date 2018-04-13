<?php
function inverso($x) {
    if (!$x) {
        throw new Exception('División por cero.');
    }
    return 1/$x;
}

try {
    echo inverso(5) . "</br/>";
    echo inverso(0) . "</br/>";
} catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "</br>";
} finally{
	echo "Se termino</br>";
}
echo 'Hola Mundo';
?>