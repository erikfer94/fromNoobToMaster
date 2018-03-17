<?php
interface iTemplate
{
    public function setVariable($name, $var);
    public function getHtml($template);
}

class Template implements iTemplate
{
    public $vars = array();
  
    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }
  
    public function getHtml($template)
    {
        foreach($this->vars as $name => $value) {
            echo 'Cambiamos {' . $name . '} por '.$value.'<br/>';

            $template = str_replace('{' . $name . '}', $value, $template);
            echo $template.'<br/>';
        }
        return $template;
    }
}
$layout=new Template;
$template="Este es un {title} {nombre}";
$layout->setVariable("title","Ejemplo");
$layout->setVariable("nombre","Erik");
print_r($layout->vars);
echo "<br/>";
echo $layout->getHtml($template);
/*$cadena="HOLA ME LLAMO ERIK";
$cadena2=str_replace("ERIK", "MARCO", $cadena);
echo $cadena;
echo $cadena2;*/
?>