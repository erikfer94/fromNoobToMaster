<?php
class ParaDestruit {
   function __construct() {
       print "En el constructor\n";
       $this->nombre = "FES";
   }

   function __destruct() {
       print "<br/>Destruyendo " . $this->nombre . "\n";
   }
}

$obj = new ParaDestruit();
echo "<br/>".$obj->nombre;
?>