<?php
/**
 * Crea una pagina web en PHP que reciba por $GET 2 valores
 * El programa los multiplicar√° y mostrar√° el resultado por pantalla
*/
 
$num1 = $_GET['numero1'];
$num2 = $_GET['numero2'];

echo $num1 * $num2;

?>