<?php
class Foo
{
    public static $mi_static = 'foo';

    public function valorStatic() {
        return self::$mi_static;
    }
}
class Bar extends Foo
{
    public function fooStatic() {
        return parent::$mi_static;
    }
}
print Foo::$mi_static . "<br/>";
$foo = new Foo();
print $foo->valorStatic() . "<br/>";
print $foo->mi_static . "<br/>";     
print $foo::$mi_static . "<br/>";
$nombreClase = 'Foo';
print $nombreClase::$mi_static . "<br/>"; 
print Bar::$mi_static . "<br/>";
$bar = new Bar();
print $bar->fooStatic() . "<br/>";
?>