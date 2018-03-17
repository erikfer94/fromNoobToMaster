<?php
class ParaDestruir {
   	function __destruct() {
   		$this->nombre="Erik";
   		$a=0;
   		$b=30;
   		echo $b+$a;
       print "<br/>Destruyendo " . $this->nombre . "\n";
   	}
   	function __construct() {
       print "En el constructor\n";
       $this->nombre = "FES";
   	}
   	function doAlgo(){
   		echo "Aun sigo vivo";
   	}
}

$obj = new ParaDestruir();
echo "<br/>".$obj->nombre;
echo "<br/>".$obj->nombre;
echo "<br/>".$obj->nombre;
echo "<br/>".$obj->nombre;
echo "<br/>".$obj->nombre;
echo "<br/>".$obj->nombre;
echo "<br/>".$obj->nombre;
echo "<br/>".$obj->nombre;
echo "<br/>".$obj->nombre;
echo "<br/>".$obj->nombre;
echo "<br/>".$obj->nombre;
echo "<br/>".$obj->nombre;
echo "<br/>".$obj->nombre;
echo "<br/>".$obj->nombre;
$obj->doAlgo();
$obj=null;

echo "<br/>".$obj->nombre;
?>