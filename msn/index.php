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
  <title>Inicio</title>
  <link rel="stylesheet" href="assets/css/master.css">
</head>

<body>
<body data-barba="wrapper">
  <div data-barba="container" data-barba-namespace="home">
    <?php if ($usuario): ?>

      <div class='header'><h1>Has iniciado sesion <?=$usuario?> !</h1></div>
      <div class="post">
        <img src="assets/img/msn.png">
      </div>
      <div class="acc">
        <form method="get" action="messenger.php">
          <button type="submit">Acceder a messenger</button>
        </form>
      </div>
      <br>
      <div class="disc">
        <form method="get" action="desconectar.php">
           <button type="submit">Desconectar</button>
        </form>
      </div>

    <?php else: 
      require ("login.php")?>

   

    <?php endif; ?>


    <footer>
      <?php 
        require ("footer.php")
      ?>
    </footer>

</body>

<script src="assets/js/barba.min.js"></script>
<script src="assets/js/custom.js"></script>

</html>