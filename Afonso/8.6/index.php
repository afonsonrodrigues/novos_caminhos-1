<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('Aula 2.6');
 
/*
*
*/
PHPClassSession('IF, ELSEIF, ELSE', __LINE__);

$test = 10;

if ($test) {
    var_dump(true);
} else {
    var_dump(false);
}



PHPClassSession('ISSET, EMPTY, !', __LINE__);

$time = "";

if (isset($time)) {
    var_dump("TODO VAS");
} else {
     var_dump("TODO FLA");
}

if (empty($time)) {
var_dump("Program");
} else {
    var_dump("Novos");
}


PHPClassSession('SWITCH', __LINE__);