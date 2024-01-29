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
  <link rel="stylesheet" href="assets/css/master.css">
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
  <h1><?=$usuario?> <input id="color_picker" type="color" onchange="showHex();"> <span id="color_hex_value"></span>
  </h1>
  <table border="1">
    <td>Hola</td>
  </table>


</body>
</html>

<script type="text/javascript">
recargar();
</script>