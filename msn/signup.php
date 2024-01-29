<?php

  include 'libreria.php';
 $con = conectar();
  
  session_start();
  if (isset($_SESSION['usuario']))
    $usuario = $_SESSION['usuario'];
  else
    $usuario = 0;

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>SINGUP</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/master.css">
  </script>
</head>
<body data-barba="wrapper">
  <div data-barba="container" data-barba-namespace="home">
<header><div class='icon'><h1>Registrese para empezar a usar Messenger(Evitar el uso de caracteres especiales)</h1></div></header>
	 <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>

    <?php endif;  ?>
 <div class="login-box">
     <img src="assets/img/logo.png" class="avatar" alt="Avatar Image">
      <h1>Registrate o <big><a href="login.php">Logueate</a></big></h1>
      <form name="f"action="crear_usuarios.php" method="post" onsubmit="return cifrar();">
        <label for="email">Usuario</label>
        <input name="usuario" type="text" placeholder="Ponga su Usuario">
        <label for="password">Contraseña</label>
        <input type="password" name="password" placeholder="Ponga su contraseña">
        <label for="password">Confirmar Constraseña</label>
        <input type="password" name="confpassword" placeholder="Confirme su contraseña">
        <input type="file" name="foto">
        <input type="submit" value="Registrate">
      </form>
    </div>
          <footer>
        <?php 
          require ("footer.php")
        ?>
      </footer>
    </div>
</body>
</html>