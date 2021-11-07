<?php
class Foo
{
    static $variable = 'static property';
    static  function Variable()
    {
        echo 'Method Variable called';
    }
}

echo Foo::$variable;
$variable = "Variable";
Foo::$variable();
