<?php
function foo()
{
    function bar()
    {
        echo "I don't exsit until foo() is called.\n";
    }
}

foo();

bar();
