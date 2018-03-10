<?php
class ParaDestruir {
   function __construct() {
       print "En el constructor\n";
       $this->nombre = "FES";
   }

   function __destruct() {
       print "<br/>Destruyendo " . $this->nombre . "\n";
   }
}

$obj = new ParaDestruir();
echo "<br/>".$obj->nombre;
?>