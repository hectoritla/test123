<?php 
  $conn = mysqli_connect('localhost', 'root', '', 'db_username');
  $username = "";
  $email = "";
  if (isset($_POST['register'])) {
  	$username = $_POST['username'];
  	$email = $_POST['email'];
  	$password = $_POST['password'];

  	$sql_username = "SELECT * FROM users WHERE username='$username'";
  	$sql_email = "SELECT * FROM users WHERE email='$email'";
  	$res_username = mysqli_query($conn, $sql_username);
  	$res_email = mysqli_query($conn, $sql_email);

  	if (mysqli_num_rows($res_username) > 0) {
  	  $name_error = "Disculpe! Ese nombre de usuario está siendo usado"; 	
  	}else if(mysqli_num_rows($res_email) > 0){
  	  $email_error = "Disculpe! Ese correo está siendo usado"; 	
  	}else{
           $query = "INSERT INTO users (username, email, password) 
      	    	  VALUES ('$username', '$email', '".md5($password)."')";
           $results = mysqli_query($conn, $query);
           echo 'Guardado!';
           exit();
  	}
  }
?>