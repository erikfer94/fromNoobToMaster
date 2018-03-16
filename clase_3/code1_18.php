<?php
interface a
{
    public function foo();
}

interface b
{
    public function bar();
}

interface c extends a, b
{
    public function baz();
}

class d implements c
{
    public function foo()
    {
        echo "foo";
    }

    public function bar()
    {
        echo "bar";
    }

    public function baz()
    {
        echo "baz";
    }
}
$ejemplo=new d;
$ejemplo->foo();
$ejemplo->bar();
$ejemplo->baz();
?>