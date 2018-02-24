<?php
var_dump(isset($a));
$a=null;
echo "<br> existe a? <br>";
var_dump(isset($a));
$a=1;
var_dump(isset($a));
print("<br>");
echo "ahora si existe<br>";
unset($a);
var_dump(isset($a));
echo "ahh ya se fue<br>";
?>