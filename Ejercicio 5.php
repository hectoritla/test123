<?php
  
  // Ejercicio 5
  /*
     Un script para redirigir al cliente hacia una página diferente.
  */

  $redirect_page = "http://www.microsoft.com";
  header('Location: '. $redirect_page);
?>