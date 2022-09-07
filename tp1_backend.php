

<?php

    echo "hello world"."<br/>";

    $holaMundo = "hello world";

    echo $holaMundo."<br/>";

    $grados = 20;

    $transformacion = $grados * 9/5 + 32;

    echo $transformacion." grados Fahrenheit"."<br/>";

    $base_Rectangulo = 18;
    $altura_Rectangulo = 12;

    $perimetro_Rectangulo = 2*($base_Rectangulo + $altura_Rectangulo);
    $area_Rectangulo = $base_Rectangulo * $altura_Rectangulo;

    echo " el perimetro del rectangulo es ".$perimetro_Rectangulo."<br/>"." el area del rectangulo es ".$area_Rectangulo."<br/>";

    $radio_Circulo = 30;
    $pi = 3.14;
    $diametro_Circulo = 2 * $radio_Circulo;

    $area = $pi * pow($radio_Circulo , 2);
    $perimetro = $pi * $diametro_Circulo;

    echo "el area del circulo es ".$area."<br/>"."el perimetro del circulo es ".$perimetro;
?>