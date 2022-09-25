

<?php
//punto 1
$n = 1;

    if ($n >= 0) {
        echo "el numero es positivo-";
    }else{
        echo "el numero es negativo-";
    };

//punto 2

    if($n > 1 && $n < 10){
        echo "el numero es mayor a 1 y menor a 10";
    }else{
        echo "el numero no es valido";
    };

    if($n > 10 || $n < 2){
        echo "-el numero es mayor a 10 o menor a 2";
    };
    
//punto 3
    $numero1 = 50;
    $numero2 = 90;

    if($numero1 > $numero2 ){
        $suma = $numero1 + $numero2;
        $resta = $numero1 - $numero2;
        echo "-la suma de los dos numeros es".$suma."-la resta de los dos numeros es".$resta;
    }elseif($numero1 < $numero2){
        $multiplicacion = $numero1 * $numero2;
        $division = $numero1 / $numero2;
        $resto = $numero1 % $numero2;

        echo "-la multiplicacion de los dos numeros es".$multiplicacion."-la division es".$division."-el resto es".$resto;

    }elseif($numero1 == $numero2){
        echo "-los numeros ingresados son iguales";
    };
?>