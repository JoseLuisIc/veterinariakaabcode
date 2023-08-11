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

<body class="" style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; min-height: 100vh; background-image: url('fondoRegistrarVeterinario.jpg'); ">

    <div class="container border rounded  bg-white" style="height: auto; width: 600px;">
        <h4 class="mt-4 text-center " id="encabezado">Crear cuenta</h4>
        <p class="text-center " id="encabezadoDos">Introduce los datos solicitados</p>
        <form class="row m-0 " id="formularioCrearCuenta" method="post">   

            <div class="col-6 form-group ">
                <label for="nombres">Nombre(s)*</label>
                <input type="text"  id="nombres" class="form-control" pattern="^[A-Za-z ]+$" title = "Nombre no válido" required="">
            </div>

            <div class="col-6 form-group ">
                <label for="primerApellido">Primer apellido*</label>
                <input type="text" id="primerApellido" class="form-control" pattern="^[A-Za-z]+$" title = "apellido no válido" required="">
            </div>

            <div class="col-6 form-group ">
                <label for="segundoApellido">Segundo apellido*</label>
                <input type="text" id="segundoApellido" class="form-control" pattern="^[A-Za-z]+$" title = "apellido no válido" required="">
            </div>

            <div class="col-6 form-group ">
                <label for="telefono">Teléfono</label>
                <input type="text" id="telefono" class="form-control" pattern="^[0-9]{8,10}$" title = "número no válido">
            </div>

            <div class="col-6 form-group ">
                <label for="correo">Correo electrónico*</label>
                <input type="text" id="correo" class="form-control" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,5}" title = "correo no válido" required="">
            </div>
            
            <div class="col-6 form-group ">
                <label for="usuario">Nombre de usuario*</label>
                <input type="text" id="usuario" class="form-control" pattern="^[A-Za-z0-9]+$" title = "el nombre de usuario solo puede tener letras y números" required="">
                <div id="notaUsuario" class=" m-0 float-left mb-2" style="width: 100%; font-size: 13px;">*Puede contener letras y números</div>
            </div>

            <div class="col-6 form-group  ">
                <label for="contrasena">Contraseña*</label>
                <input id="contrasena" type="password" id="contrasena" class="form-control" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!#$%&])[a-zA-Z0-9!#$%&]{8,}" title="la contraseña debe tener un mínimo de 8 caracteres, al menos una letra mayúscula, un número y un carácter especial, este ultimo puede ser !#$%&" required="">
                
            </div>

            <div class="col-6 form-group  ">
                <label for="contrasena">Confirmar contraseña*</label>
                <input id="confirmarContrasena" type="password" class="form-control" required="">
                
            </div>
            
            <div class="col-12" id="notaContrasena" class=" m-0  mb-2 " style="width: 100%; font-size: 13px;">
            *La contraseña debe tener un mínimo de 8 caracteres, al menos una letra mayúscula, un número y un carácter especial
            </div>
            
            <div class="col-12 m-3 form-check">
                <label class="form-check-label"></label>
                <input type="checkbox" class="form-check-input" value="" id="mostrarContrasena" >Mostrar contraseña
                </label>
            </div>
            
            <div id="respuesta" class="text-danger m-0 ml-3" style="width: 100%; font-size: 13px;"></div>

            <div class="col-12 mb-3">
                <button id="regresar" class="btn btn-white border border-success  ">Regresar</button>
                <button id="crearCuenta" class="btn btn-primary m-3  ">Crear cuenta</button>
            </div>
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