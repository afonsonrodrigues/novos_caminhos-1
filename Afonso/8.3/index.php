<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('Operações');
 
/*
*
*/
PHPClassSession('ATRIBUIÇÃO', __LINE__);

$operatorA = 5;
$operators = [
    "a += 5" => ($operatorA += 5),
    "a -= 5" => ($operatorA -= 5),
    "a *= 5" => ($operatorA *= 5),
    "a /= 5" => ($operatorA /= 5),
];
var_dump ($operators);

PHPClassSession('COMPARAÇÃO', __LINE__);

$incrementA = 5;
$incrementB = 5;
$increment = [
    "pós-incremento" => $incrementA++,
    "res-incremento" => $incrementA,
    "pré-incremento" => ++$incrementA,
    "pós-decremento" => $incrementB--,
    "res-decremento" => $incrementB,
    "pré-decremento" => --$incrementB
];

var_dump($increment);

PHPClassSession('LOGICOS', __LINE__);

$logicA = true;
$logicB = false;

$logic = [
    "a && b" => ($logicA && $logicB),
    "a || b" => ($logicA || $logicB),
    "!a" => (!$logicA),
    "!b" => (!$logicB),
];

var_dump ($logic);

PHPClassSession('ARITMETICOS', __LINE__);

$calcA = 5;
$calcB = 10;
$calc = [
    "a + b" => ($calcA + $calcB),
    "a - b" => ($calcA - $calcB),
    "a * b" => ($calcA * $calcB),
    "a / b" => ($calcA / $calcB),
    "a % b" => ($calcA % $calcB),
];

var_dump($calc);