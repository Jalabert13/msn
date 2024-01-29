  <script src="assets/js/md5.js"></script>
  
  <script>
    function cifrar() {
      var con = calcMD5(document.forms["f"]["password"].value);
      document.forms["f"]["password"].value = con;
      return true;
    }
  </script>
</head>
<body data-barba="wrapper">
  <div data-barba="container" data-barba-namespace="home">
    <div class="admin">
      <a href="login_admin.php"><img src="assets/img/admin.jpg"></a>
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
      <form name="f" action="validar.php" method="POST" onsubmit="return cifrar();">
        <label for="usuario">Usuario</label>
        <input name="usuario" type="text" placeholder="Ponga su Usuario">
        <label for="password">Contraseña</label>
        <input name="password" type="password" placeholder="Ponga su contraseña">
        <br><br>
        <input type="submit" value="Loguéate" href="index.php"><br><br>
        <a href="signup.php">Registrarse<a>
      </form>
    </div>
          ';
        }
          
            if ($usuario) {
              print '<h2>Has iniciado sesion $usuario !';
            } 
            else {
              print "<div class='icon'><h1>Inicie sesion para acceder a   Messenger!</h1></div>";
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
<script src="assets/js/barba.min.js"></script>
<script src="assets/js/custom.js"></script>
</html>
