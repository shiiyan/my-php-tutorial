<?php
class MethodTest
{
    public function __call($name, $arguments)
    {
        echo "Calling object method '$name' " . implode(', ', $arguments) . PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
        echo "Calling static method '$name' " . implode(', ', $arguments) . PHP_EOL;
    }
}

$obj = new MethodTest;
$obj->runTest('in object context');
$obj->stopTest('test1', 'test2', 'test3');

// MethodTest::runTest('in static context');
