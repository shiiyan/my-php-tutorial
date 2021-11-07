<?php
function square($num)
{
    return $num * $num;
}

echo square(4), PHP_EOL;

function small_numbers()
{
    return [0, 1, 2];
}

[$zero, $one, $two] = small_numbers();

echo $two, PHP_EOL;

function &returns_reference()
{
    $someref = 1;
    return $someref;
}

$newref = &returns_reference();

echo $newref;
