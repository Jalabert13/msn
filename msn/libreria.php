<?php
  function conectar() {
	
    $con = new mysqli('localhost', 'root', '', 'msn');
    //$con = new mysqli('fdb34.awardspace.net', '4045750_msn', 'Hola12345', '4045750_msn');
    mysqli_set_charset($con, "utf8"); 
    return $con;   
}
?>