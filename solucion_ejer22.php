<?php
/**
 * Crea un programa que te indique cuantos días faltan para navidad
 * PISTA: puedes usar la funcion diff de fechas en php
*/
 function getDaysToChristmas($XMas, $hoy){
    return $XMas - $hoy;
 }

 $hoy = date("d / m / y");
 $XMas = date("d / m / y", 25 / 12 / 2022);

 echo 'Días hasta Navidad: '.getDaysToChristmas($XMas, $hoy);

?>