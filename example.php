<?php

use EasyMath\Addition;
use EasyMath\Subtraction;

require __DIR__ . '/vendor/autoload.php';

$add = new Addition();
echo $add->add(3, 2) . PHP_EOL;

$sub = new Subtraction();
echo $sub->subtract(3, 2) . PHP_EOL;