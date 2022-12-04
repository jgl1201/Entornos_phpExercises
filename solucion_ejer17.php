<?php
/**
 * Crea un programa que calcule el IMC de una persona
 * Busca en la wikipedia como se calcula
 * La función se llamará getIMC y recibirá 2 parametros el peso y la altura
 * la función devolverá un valor decimal
 */

function getIMC($weight, $height) {
    return $weight / pow($height, 2);
}

$weight = 100;
$height = 1.84;
echo "Tu IMC es ".getIMC($weight, $height);

?>