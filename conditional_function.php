<?php
$makefoo = true;

bar();

if ($makefoo) {
    function foo()
    {
        echo "I don't exsit until program execution reaches me.\n";
    }
}

if ($makefoo) foo();

function bar()
{
    echo "I exist immediately upon program start.\n";
}
