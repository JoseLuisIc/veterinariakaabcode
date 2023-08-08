<?php

session_start();
if(isset($_SESSION['usuario'])){
    header('location:plantilla/index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>

    <!-- jQuery -->
    <script
  src="https://code.jquery.com/jquery-1.9.1.js"
  integrity="sha256-e9gNBsAcA0DBuRWbm0oZfbiCyhjLrI6bmqAl5o+ZjUA="
  crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body class="padre bg-light" style="display: flex; align-items: center; justify-content: center;  min-height: 100vh;">
    
    <div class="container border rounded  bg-white" style="height: 450px; width: 400px;">
        <h4 class="mt-5 text-center " id="encabezado">Iniciar sesión</h4>
        <form class=" m-4 " id="formulario" method="post">

            <div class="form-group ">
                <label for="usuario">Usuario</label>
                <input type="text" id="usuario" class="form-control" >
            </div>

            <div class="form-group  ">
                <label for="contrasena">Contraseña</label>
                <input type="password" id="contrasena" class="form-control">
                <div id="RespuestaAjax" class="text-danger m-0 float-left " style="width: 100%; font-size: 13px;"></div>
            </div>
            <div class="form-check m-2">
                <label class="form-check-label"></label>
                <input type="checkbox" class="form-check-input" value="" id="mostrarContrasenaLogin">Mostrar contraseña
                </label>
            </div>
            ¿No tienes una cuenta? <a href="crearCuenta.php"> da click aquí</a>
            <button id="cargar" class="btn btn-primary mt-4 float-right ">Acceder</button>
            
        </form>

    </div>

    

    <!-- Bootstrap js-->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
    <!--Fin Bootstrap js -->

    <script src="archivosLogin/peticionesConAjax.js"></script>
</body>

</html>