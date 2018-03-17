<?php
class OtroEjemplo
{
    protected function FuncionEjemplo() { //solo la ve la clase y sus hijos
        echo "OtroEjemplo::FuncionEjemplo()\n";
    }
}
class OtroEjemplo2 extends OtroEjemplo
{
    // Sobrescritura de definición parent
    public function FuncionEjemplo()
    {
        // Pero todavía se puede llamar a la función parent
        parent::FuncionEjemplo(); //accede a la funcion padre
        echo "OtroEjemplo2::FuncionEjemplo()\n";
    }
}
$class = new OtroEjemplo2();
$class->FuncionEjemplo();
?>