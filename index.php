<html>
<head>
	  <meta charset="UTF-8">
	  <title>Ejercicios</title>
	  
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	  
	  
  </head>

  <body>
    <h1><b>EJERCICIOS MODULO 3</b><h1>
     <h2><b><i>Ejercicios 1 y 2</i></b></h2><br> 
        <!-- Modulo 2: Ejercicios del 1 al 4 -->
        <?php require 'Ejercicios 1 al 4.php'; ?> <br>

        <!-- Modulo 2: Ejercicio 5 -->
        <?php //require 'Ejercicio 5.php'; ?> <br>

        <!-- Modulo 2: Ejercicios 6 a 8 -->
        <?php //require 'Ejercicios 6 a 8.php'; ?> <br>

      <!---- Los comentarios están dentro de los archivos correspondientes --->  

      <h2><b><i>Ejercicio 3</i></b></h2> <br><br>    
        <?php 
          $_mensajeSaludo = "Hola Mundo";
          $DESPEDIDA = "Adios";
          $saludos = "Buenos Dias!";
          $fecha99 = "Fecha en 1999";
        ?>

<h2><b><i>Ejercicio 4</i></b></h2>  

<div class="container">
  <div class="card-columns">

    <?php 
        $array = [
            "palabra1" => "break",
            "palabra2" => "clone",
            "palabra3" => "do",
            "palabra4" => "abstract",
            "palabra5" => "protected",
        ];

        foreach ( $array as $elements => $elements_value) : ?>
        <div class="card">
            <div class="card-deck">
                <div class="card  bg-light">
                    <div class="card-body">
                        <h5 class="card-title"><b><?php echo $elements_value; ?></b></h5>
        
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
  </div>
</div> <!--container div  -->
 
  </body>
</html> 