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
    <title>Crear cuenta</title>

    <!-- jQuery -->
    <script
  src="https://code.jquery.com/jquery-1.9.1.js"
  integrity="sha256-e9gNBsAcA0DBuRWbm0oZfbiCyhjLrI6bmqAl5o+ZjUA="
  crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body class="row vh-100  d-flex align-items-center justify-content-center bg-light" style="width: 100%; height: 100%; ">

    <div class="container border rounded  bg-white" style="height: 570px; width: 400px;">

        <h4 class="mt-5 text-center " id="encabezado">Crear cuenta</h4>
        <p class="text-center " id="encabezadoDos">Introduce los datos solicitados</p>
        <form class=" m-4 " id="formularioCrearCuenta" method="post">

            <div class="form-group ">
                <label for="usuario">Nombre de usuario</label>
                <input type="text" id="usuario" class="form-control" pattern="^[A-Za-z0-9]+$" title = "el nombre de usuario solo puede tener letras y números">
                <div id="notaUsuario" class=" m-0 float-left mb-2" style="width: 100%; font-size: 13px;">*Puede contener letras y números</div>
            </div>

            <div class="form-group  ">
                <label for="contrasena">Contraseña</label>
                <input id="contrasena" type="password" id="contrasena" class="form-control" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!#$%&])[a-zA-Z0-9!#$%&]{8,}" title="la contraseña debe tener un mínimo de 8 caracteres, al menos una letra mayúscula, un número y un carácter especial, este ultimo puede ser !#$%&">
                <div id="notaContrasena" class=" m-0  mb-2" style="width: 100%; font-size: 13px;">*debe tener un mínimo de 8 caracteres, al menos una letra mayúscula, un número y un carácter especial</div>
            </div>

            <div class="form-group  ">
                <label for="contrasena">Confirmar contraseña</label>
                <input id="confirmarContrasena" type="password" class="form-control">
                <div id="respuesta" class="text-danger m-0" style="width: 100%; font-size: 13px;"></div>
            </div>
            <div class="form-check">
                <label class="form-check-label"></label>
                <input type="checkbox" class="form-check-input" value="" id="mostrarContrasena">Mostrar contraseña
                </label>
            </div>
            
            
            <button id="crearCuenta" class="btn btn-primary mt-3 float-right ">Crear cuenta</button>
            <button id="regresar" class="btn btn-white border border-success m-3 float-right ">Regresar</button>
        </form>
        
    </div>

    

    <!-- Bootstrap js-->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
    <!--Fin Bootstrap js -->

    <script src="archivosCrearCuenta/peticionesAjax.js"></script>
</body>

</html>