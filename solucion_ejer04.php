<?php

/*
* Crea un programa que posea una función que indique si un número es par o impar
* Usa la función para mostrar por pantalla si el número 22 es par o impar
* Usa la función para mostrar por pantalla si el número 33 es par o impar
*/

function isEven($num) {
   /*  if ($num % 2 == 0) {
        return true;
    } 
    return false; */
    return $num % 2 == 0;
}

if (isEven(22)) {
    echo "El 22 si es par";
} else {
    echo "El 22 no es par";
}

echo "<br>";

if (isEven(33)) {
    echo "El 33 si es par";
} else {
    echo "El 33 no es par";
}


?>