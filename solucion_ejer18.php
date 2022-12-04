<?php
/**
 * Basandote en el ejercicio anterior, ejer17
 * Crea una función que devuelva la Clasificación del IMC de la OMS
 * Delgadez severa, Delgadez moderada, Delgadez leve, ...
 * Mira la wikipedia
 */

function getIMC($weight, $height) {
    return $weight / pow($height, 2);
}

function getClasification($weight, $height){
    $result = getIMC($weight, $height);
    if ($result < 16) return 'Delgadez severa';
    if ($result >= 16 && $result < 17) return 'Delgadez moderada';
    if ($result >= 17 && $result < 18.50) return 'Delgadez leve';
    if ($result >= 18.50 && $result < 25) return 'IMC Normal';
    if ($result >= 25 && $result < 30) return 'Preobesidad';
    if ($result >= 30 && $result < 35) return 'Obesidad leve';
    if ($result >= 35 && $result < 40) return 'Obesidad media';
    if ($result >= 40) return 'Obesidad morbida';
}

$weight = 100;
$height = 1.84;
echo "Tu IMC es ".getIMC($weight, $height);
echo "<br/>";
echo "Tienes ".getClasification($weight, $height);

?>
