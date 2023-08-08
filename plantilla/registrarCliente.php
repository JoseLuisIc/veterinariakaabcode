<?php

session_start();
if(!isset($_SESSION['usuario'])){
    header('location: ./../login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar cliente</title>

    <!-- jQuery -->
    <script
  src="https://code.jquery.com/jquery-1.9.1.js"
  integrity="sha256-e9gNBsAcA0DBuRWbm0oZfbiCyhjLrI6bmqAl5o+ZjUA="
  crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        
         <!-- libreria alerts personalizados -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-light" style="min-height: 100vh; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; background-image: url('fondoCliente.png'); ">

    <div class="container border rounded  bg-white" style="height: auto; width: 750px;">

        <h4 class="mt-5 text-center " id="encabezado">Registrar cliente</h4>
        <p class="text-center " id="encabezadoDos">Introduce los datos del cliente</p>
        <form class="row m-3 " id="formularioRegistrarCliente" method="post">

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
                <label for="correo">Correo electrónico</label>
                <input type="text" id="correo" class="form-control" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,5}" title = "correo no válido">
            </div>

            <!-- boton agregar mascota
            <div class="col-6  d-flex justify-content-center align-items-center"> 
                <button id="agregarMascota" class="btn btn-success" style="height: 80%; width: 60%;">Agregar mascota</button>
            </div>
             -->

            <div class="col-12 m-0 d-flex justify-content-center">
                <div id="respuesta"></div>
            </div> 

            <div class="col-12 mb-4 d-flex justify-content-center">
                <button id="cancelar" class="btn btn-danger  m-3">Cancelar</button>
                <button id="guardarCliente" class="btn btn-primary m-3 ">Guardar cliente</button>
            </div>
            
        </form>
        
    </div>

    

    <!-- Bootstrap js-->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
    <!--Fin Bootstrap js -->

    <script src="archivosRegistrarCliente/peticiones.js"></script>
</body>

</html>