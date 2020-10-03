<?php
require __DIR__ . '/../framework/config.php';
PHPClassName("AUla 02 - Comando de Saida");

/*
 * 
 */
PHPClassSession("echo", __LINE__);

echo "<p> Olá Mundo</p>";
echo 23 . PHP_EOL;

$hello = "Ola mundo";

echo $hello;
echo "<p> $hello</p>";


PHPClassSession("print _r", __LINE__);

$array = [
    "company" => "IFTO",
    "course" => "Programador WEB",
    "class" => "Comandos de Saida",
];

echo "<pre>";
print_r($array);
echo "</pre>";

PHPClassSession("var_dump", __LINE__);

$company = "IFTO";
var_dump($array, $hello, $company);