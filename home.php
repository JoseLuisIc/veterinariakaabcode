<html>
 <head>
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  <meta charset="utf-8">
  <title>Home</title>
  <script
  src="https://code.jquery.com/jquery-1.9.1.js"
  integrity="sha256-e9gNBsAcA0DBuRWbm0oZfbiCyhjLrI6bmqAl5o+ZjUA="
  crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
  <div class="container">
   <?php
   //home.php
   session_start();
   if(!isset($_SESSION['usuario']))
   {
    header("location: login.php");
   }
   echo '<h1 align="center">'.'Bienvenido '.$_SESSION['usuario'].'!!</h1>';
   echo '';
   ?>
   <p align="center"><a href="cierraSesion.php">Cerrar sesión</a></p>
  </div>
 </body>
</html>