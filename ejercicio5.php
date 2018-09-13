<?php

/* En este ejercicio se trata de recoger un dato mediante URL por el sistema GET.
 * Utiliza la funcion 'filter_input'. Reprograma el cuarto ejercicio de manera que
 * muestre la tabla de multiplicar en funcion del numero dado por el usuario. 

 * Hay que tener en cuenta que si no se pasa número se mostrará un mensaje de error.
 * Para esto habrá que utilizar una función de comprobación.
 * Ejemplo: http://localhost/DSER_iniciales/ejercicio5.php?num=5 */

//$buscar_html = filter_input(INPUT_GET, 'num', FILTER_SANITIZE_SPECIAL_CHARS);
//
//
//echo "<h3>Tabla del $buscar_html </h3>";
//
//
//for ($i = 1; $i <= 9; $i++) {
//    echo "$buscar_html x $i = " . ($buscar_html * $i) . "<br/>";
//}

$buscar_html = filter_input(INPUT_GET, 'num', FILTER_SANITIZE_SPECIAL_CHARS);
$buscar_url = filter_input(INPUT_GET, 'num', FILTER_SANITIZE_ENCODED);
if (!empty($buscar_url)){
    echo "<h3>Tabla del $buscar_html</h3>";
    for ($i = 1; $i <= 10; $i++) {
        echo "$buscar_html x $i = " . ($buscar_html * $i) . "<br/>";
    }
}else{
        echo "no hay número en la URL.";
        
    }