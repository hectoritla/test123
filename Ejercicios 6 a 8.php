<?php 

  // Ejercicio 6
  /*
      Un script que muestre la url actual.
  */
  echo "<p><strong> EJERCICIO #6 </strong></p>";
  echo 'La URL actual es: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']. "<br><br><br>"; 


  // Ejercicio 7
  /*
      Un script que muestre la IP del cliente, la IP del servidor y el nombre del fichero que se está ejecutando.
  */

  echo "<p><strong> EJERCICIO #7 </strong></p>";
  echo "IP Usuario: ". $_SERVER['REMOTE_ADDR']. "<br>";
  echo "IP Servidor: ". $_SERVER['SERVER_ADDR']. "<br>";
  echo "El nombre del archivo que se está ejecutando es: <strong>". basename($_SERVER["SCRIPT_FILENAME"]).
      "</strong><br><br><br>";

  // Ejercicio 8
  /*
      Un script que muestre la versión de PHP sin utilizar Phpinfo().
  */

  echo "<p><strong> EJERCICIO #8 </strong></p>";
  echo 'La version en uso de PHP es: <strong>' . phpversion(). "</strong><br>";

?>