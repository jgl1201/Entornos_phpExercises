<?php
/**
*Crea una función que dado el dia de la semana
*en número(1-7), nos devuelva el dia de la semana en texto(Lunes,martes, ...)
*/

function getNameOfWeek($dayNumber){
    if ($dayNumber == 1) echo 'Lunes';
    else if ($dayNumber == 2) echo 'Martes';
    else if ($dayNumber == 3) echo 'Miercoles';
    else if ($dayNumber == 4) echo 'Jueves';
    else if ($dayNumber == 5) echo 'Viernes';
    else if ($dayNumber == 6) echo 'Sabado';
    else if ($dayNumber == 7) echo 'Domingo'; 
}

$day = 4;
echo getNameOfWeek($day);

?>