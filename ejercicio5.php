<?php

/*  */

$buscar_html = filter_input(INPUT_GET, 'num', FILTER_SANITIZE_SPECIAL_CHARS);


    echo "<h3>Tabla del $buscar_html </h3>";


    for ($i = 1; $i <= 9; $i++) {
        echo "$buscar_html x $i = " . ($buscar_html * $i) . "<br/>";
    }

