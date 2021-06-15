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
    ?>
</body>
</html>