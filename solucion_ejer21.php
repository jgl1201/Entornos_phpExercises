<?php
/**
 * Crea una función que reciba un array 
 * y devuelva uno de los elementos de ese array de forma aleatoria
 * 
*/
 function getRandomValue($list){
    return array_rand($list, 1);
 }

$array = array('Rojo', 'Verde', 'Azul', 'Marrón', 'Negro', 'Blanco');
$randomColor = getRandomValue($array);
echo 'Color random: '.$array[$randomColor];

?>