<?php

// Define la constante PI y calcula el perímetro y superficie de un círculo cuyo radio es de 5cm.
M_PI;
$radio = 5;
$perimetro = 2 * M_PI * $radio;
$area = M_PI * pow($radio, 2);
echo "El perímetro de un circulo cuya radio es $radio el resultado es $perimetro y el área es $area";
