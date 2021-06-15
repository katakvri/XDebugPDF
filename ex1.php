<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 1</title>
</head>
<body>
    <?php
    $m=5;
    $n=10;
    $suma_de_factoriales = calcular_suma_de_factoriales ($m, $n);

    echo "fact($m) + fact($n) = " . $suma_de_factoriales;

    function calcular_suma_de_factoriales ($param1, $param2) {
       $factorial1 = factorial ($param1);
       $factorial2 = factorial ($param2);
       $result = sumar ($factorial1, $factorial2);
       return $result;
    }
    function factorial ($param) {
       $resultado = 1;
       for ($i=1; $i<=$param; $i++) {
          $resultado = $resultado * $i;
       }
       return $resultado;
    }
    function sumar ($param1, $param2) {
       return $param1 + $param2;
    }

    /* 
    Respuesta al Ejercicio 1: No hay errores
    Respuesta al Ejercicio 2: $factorial1 = 120, $factorial2 = 3628800 y result = 3628920. (devuelve un number que e slo esperado)
    Respuesta al Ejercicio 3: $i = 6, $param = 5 y $resultado = 120 en la primera vuelta y 
                              $i = 11, $param = 10 y resultado = 3628800 en la segunda vuelta
    respuesta al Ejercicio 4: $param1 = 120, $param2 = 3628800 y $suma_de_factoriales = 3628920
    

    */
    ?>
</body>
</html>