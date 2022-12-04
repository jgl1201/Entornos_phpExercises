<?php

/*
Guarda en 4 variables, 4 valores numericos.
Muestra por pantalla el valor de los 2 últimos.
*/

$values = array('7', '12', '58', '9');
echo 'Ultimo: '.$values[strlen($values)];
echo "<br>";
echo 'Penultimo: '.$values[strlen($values)-1];

?>