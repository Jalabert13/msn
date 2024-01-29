<?php 

  include "libreria.php";
  $con = conectar();
  
  session_start();
  if (isset($_SESSION['usuario']))
    $usuario = $_SESSION['usuario'];
  else
    $usuario = 0;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>LOGIN</title>
<link rel="stylesheet" href="assets/css/master.css">
</head>
<body data-barba="wrapper">
  <div data-barba="container" data-barba-namespace="home">
    <div class="admin">
      <a href="index.php"><img src="assets/img/nosoy.jpg"></a>
    </div>
      <?php
        if ($usuario) {
          print "<h3>Usuario: $usuario </h3>";
          print '
          <form action="desconectar.php">
            <input value="Desconectar" type="submit">
          </form>';
        }
        else {
          print ' <div class="login-box">
      <img src="assets/img/logo.png" class="avatar" alt="Avatar Image">
      <h1>Entra Aquí</h1>
      <form name="f" action="validar_admin.php" method="POST" onsubmit="return cifrar();">
        <label for="usuario"Usuario</label>
        <input name="usuario" type="text" placeholder="Ponga su Usuario">
        <label for="password">Contraseña</label>
        <input name="password" type="password" placeholder="Ponga su contraseña">
        <br><br>
        <input type="submit" value="Loguéate"><br><br>
      </form>
    </div>
          ';
        }
          
            if ($usuario) {
              print '<h2>Has iniciado sesion $usuario !';
            } 
            else {
              print "<div class='icon'><h1>Inicie sesion para acceder al panel Administrador</h1></div>";
            }
          
        
      ?>
      <footer>
        <?php 
          require ("footer.php")
        ?>
      </footer>
    </div>
</body>

</html>
    </div>
  </div>
</body>
</html>