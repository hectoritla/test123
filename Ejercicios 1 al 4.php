<!DOCTYPE html>
<html>
  <body>

  <?php
    
    // Ejercicio 1
    /*
        Escribe un programa que utilice las variables $x y $y. Asígnales los valores 144 y 999 respectivamente. 
        A continuación, muestra por pantalla el valor de cada variable, la suma, la resta, la división y la multiplicación.
    */
    
    echo "<p><strong> EJERCICIO #1 </strong></p>";
    $x = 144;
    $y = 999;

    echo "El valor de x es <strong> $x </strong>. El valor de y es <strong> $y </strong> <br>";
    echo "La suma de x + y = <strong>". ($x + $y). "</strong><br>";
    echo "La resta de x - y = <strong>". ($x - $y). "</strong><br>";
    echo "La multiplicacion de x * y = <strong>". ($x * $y). "</strong><br>";
    echo "La division de x / y = <strong>". round(($x / $y),3). "</strong><br>";


    // Ejercicio 2
    /*
        Crea la variable $nombre y asígnale tu nombre completo. Muestra su valor por pantalla.
    */

    echo "<br><br><br>";
    echo "<p><strong> EJERCICIO #2 </strong></p>";
    $nombre = "Héctor Iñiguez";
    echo "<p> Mi nombre es <strong> $nombre </strong></p><br>";


    // Ejercicio 3
    /*
        Realiza un conversor de monedas. La cantidad en pesetas que se quiere convertir
        y la tasa de cambio deberán estar almacenada en variables. Este deberá de realizarlo una función,
        es decir, la función recibirá las variables necesarias para realizar el cambio.
        NOTA: Las pesetas ya no existen. La moneda en circulacion es el Euro.
    */

    echo "<p><strong> EJERCICIO #3 </strong></p>";

    function convertirEUR ($cantidad, $tasa) {
        echo "<p>Con DOP$ $cantidad pesos dominicanos a una tasa de DOP$ $tasa pesos por euros, recibiras EUR$ <strong>".
          round(($cantidad / $tasa), 2). "</strong></p><br>";
    }

    $montoCambiar = 100;
    $tasaDOP_EUR = 57.17;

    convertirEUR ($montoCambiar, $tasaDOP_EUR);

  ?>

<!-- Ejercicio 4 -->
    <p><strong> EJERCICIO #4 </strong></p>

    <form action="Ejercicios 1 al 4.php" method="post">
      Ingrese un texto: <input type="text" name="texto"><br>
      <input type="submit">
    </form>

  <?php

    $arregloTexto = [$_POST["texto"]];
    echo "<p>El texto insertado es <strong> $arregloTexto[0] </strong></p><br>";
  ?>




  </body>
</html> 