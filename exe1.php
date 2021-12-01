<?php

$a = 10;
$b = 20;

echo "o valor de a {$a} - o valor de b {$b}<br>";

$c = $a;
$a = $b;
$b = $c;

echo "o valor de a {$a} - o valor de b {$b}<br>";

/*
<?php

$a = 10;
$b = 20;

echo "VAlor de A: {$a} - VAlor de B: {$b}<br>";

//$a = 10    e $b=20    e $c = 10

$c =$a;
$a = $b;
$b = $c;

echo "VAlor de A: {$a} - VAlor de B: {$b}";
*/