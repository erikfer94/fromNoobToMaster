<?php
class OtroEjemplo
{
    protected function FuncionEjemplo() {
        echo "OtroEjemplo::FuncionEjemplo()\n";
    }
}
class OtroEjemplo2 extends OtroEjemplo
{
    // Sobrescritura de definición parent
    public function FuncionEjemplo()
    {
        // Pero todavía se puede llamar a la función parent
        parent::FuncionEjemplo();
        echo "OtroEjemplo2::FuncionEjemplo()\n";
    }
}
$class = new OtroEjemplo2();
$class->FuncionEjemplo();
?>