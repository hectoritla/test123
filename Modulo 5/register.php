<?php include('process.php') ?>
<html>
<head>
  <title>Ej. Modulo 5</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <form method="post" action="register.php" id="register_form">
  	<h1>Formulario de Registro</h1>
	<br>
  	<div <?php if (isset($name_error)): ?> class="form_error" <?php endif ?> >
	  <input type="text" name="username" placeholder="Nombre de Usuario" value="<?php echo $username; ?>">
	  <?php if (isset($name_error)): ?>
	  	<span><?php echo $name_error; ?></span>
	  <?php endif ?>
  	</div>
  	<div <?php if (isset($email_error)): ?> class="form_error" <?php endif ?> >
      <input type="email" name="email" placeholder="Correo Electrónico" value="<?php echo $email; ?>">
      <?php if (isset($email_error)): ?>
      	<span><?php echo $email_error; ?></span>
      <?php endif ?>
  	</div>
  	<div>
  		<input type="password"  placeholder="Contraseña" name="password">
  	</div>
  	<div>
	  <br>
  		<button type="submit" name="register" id="reg_btn">Registrar</button>
  	</div>
  </form>
</body>
</html>