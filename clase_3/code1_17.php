<?php
interface a
{
    public function foo();
}

interface b extends a
{
    public function baz();
}

class c implements b
{
    public function foo()
    {
    	echo "no";
    }

    public function baz()
    {
    	echo "si";
    }
}
$ejemplo=new c;
$ejemplo->foo();
$ejemplo->baz();
?>