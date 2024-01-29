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
	<title>Messenger</title>
  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="assets/js/color_picker.js"></script>
  
  <script type="text/javascript">

    function recargar() {
      $.ajax({
                type:'POST',
                url:'listar_mensajes.php',
                success:function(resultado){
                    $('#area').html(resultado);
                }
            }); 
    }

    // cada 10 segundos refrescamos el listado
    setInterval(recargar, 1000);
    
  </script>
</head>

<body>
<div id="sonidos"></div>
<embed src="assets/audio/wii.mp3" loop="true"  volume="5" width="0" height="0">
  <br>
  <a href="index.php"><img src="assets/img/logo.png" border="1"></a>
  <h1><?=$usuario?> <input id="color_picker" type="color" onchange="showHex();"> <span id="color_hex_value"></span>
  </h1>
     <div class="cuadro">
        <textarea readonly id="area"></textarea>
      </div>
      <div class="send">
        <form action="enviar_msg.php" method="POST">
            <input type="text" name="mensaje" placeholder="Escriba el mensaje!" autofocus="true">
            <button type="submit">Enviar</button>
        </form>
      </div> 
      <div class="acc">
        <form method="get" action="index.php">
              <button type="submit">Volver al inicio</button>
            </form>
        </div>
    </br>
      <footer>
       <div class="disc">
        <form method="get" action="desconectar.php">
              <button type="submit">Desconectar</button>
            </form>
        </div>
        <footer>
        <?php 
          require ("footer.php")
        ?>
        </footer>
</body>
</html>

<script type="text/javascript">
recargar();
</script>