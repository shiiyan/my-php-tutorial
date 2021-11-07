<?php
$repository = null;

$result = $repository?->getUser(5)?->name;

echo $result, PHP_EOL;
