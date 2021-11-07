<?php

$y = 1;

function fn0($x, $y) {
    return $x + $y;
}
$fn1 = fn ($x) => $x + $y;
$fn2 = function ($x) use ($y) {
    return $x + $y;
};

$y = 2;

var_export(fn0(3, $y));
var_export($fn1(3));

