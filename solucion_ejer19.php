<?php
/**
 * Pinta un arbol de navidad en pantalla usando caracteres assci
 * A la función se le pasará el parametro de la altura
 * el parametro altura solo podrá ser un número impar
 * ej: Arbol con altura 3
 * 
  *
 ***
*****
 * ej: Arbol con altura 5
 * 
    *
   ***
  *****
 *******
*********
 */
if($_POST) {
    $filas = $_POST['filas'];

    function drawChristmasTree($altura){
        for ($i = 1; $i <= $altura; $i++) {
            for ($k = 1; $k <= $altura - $i; $k++) echo ' ';
            for ($j = 1; $j <= 2 * ($i - 1) + 1; $j++) echo '*';
        }
        echo '';
    }

    echo 'Arbol';
    echo '<br>';
    echo drawChristmasTree($filas);

}

?>

<html>
    <body>
        <form action="solucion_ejer19.php" method="POST">
            Número de filas: <input type="int" placeholder="Inserta un número" name="filas">
            <input type="submit" value="Crear arbol">
        </form>
    </body>
</html>