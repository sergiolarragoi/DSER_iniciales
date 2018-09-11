<?php

// Utilizando un boucle for mostrar una tabla de multiplicar.
for ($tabla = 0; $tabla <= 9; $tabla++) {
    echo "<h3>Tabla del $tabla </h3>";


    for ($i = 0; $i <= 9; $i++) {
        echo "$tabla x $i = " . ($tabla * $i) . "<br/>";
    }
}
