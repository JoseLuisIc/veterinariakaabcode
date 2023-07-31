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
    <title>Registrar mascota</title>

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

<body class="bg-light" style="width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; background-image: url('fondo.jpg'); ">

    <div class="container border rounded  bg-white" style="height: 820px; width: 750px;">

        <h4 class="mt-5 text-center " id="encabezado">Registrar mascota</h4>
        <p class="text-center " id="encabezadoDos">Introduce los datos de la mascota</p>
        <form class="row m-3 " id="formularioRegistrarMascota" method="post">

            <div class="col-6 form-group ">
                <label for="nombreMascota">Nombre*</label>
                <input type="text"  id="nombreMascota" class="form-control" pattern="^[A-Za-z0-9]+$" title = "El nombre de la mascota solo puede tener letras y números" required="">
            </div>

            <div class="col-6 form-group ">
                <label for="raza">Raza</label>
                <input type="text" id="raza" class="form-control" pattern="^[A-Za-z0-9]+$" title = "La raza solo puede tener letras y números">
            </div>

            <div class="col-6 form-group ">
                <label for="edad">Edad*</label>
                <input type="text" id="edad" class="form-control" pattern="^[0-9]+$" title = "Edad no válida" required="">
            </div>

            <div class="col-6 form-group ">
                <label for="especie">Especie*</label>
                <input type="text" id="especie" class="form-control" pattern="^[A-Za-z0-9]+$" title = "solo puede tener numeros y letras" required="">
            </div>

            <div class="col-6 form-group ">
                <label for="color">Color</label>
                <input type="text" id="color" class="form-control" pattern="^[A-Za-z]+$" title = "solo puede tener letras">
            </div>
            
            <div class="col-6">
            <label style="width:100%">Sexo*</label>
            <div class="form-check-inline">  
            <label class="form-check-label">
                <input type="radio" value="Macho" class="form-check-input" name="optradio" required="">Macho
            </label>
            </div>
            <div class="form-check-inline">
            <label class="form-check-label">
                <input type="radio" value="Hembra" class="form-check-input" name="optradio" required="">Hembra
            </label>
            </div>
            </div>

            <div class="form-group col-6" >
                <label for="diagnosticos">Diagnósticos*</label>
                <textarea class="form-control" rows="2" id="diagnosticos" required=""></textarea>
            </div>

            <div class="form-group col-6">
                <label for="tratamientos">Tratamientos*</label>
                <textarea class="form-control" rows="2" id="tratamientos" required=""></textarea>
            </div>
            
            <div class="form-group col-6" >
                <label for="vacunas">Vacunas</label>
                <textarea class="form-control" rows="2" id="vacunas"></textarea>
            </div>

            <div class="form-group col-6" >
                <label for="alergias">Alergias</label>
                <textarea class="form-control" rows="2" id="alergias"></textarea>
            </div>

            <div class="form-group col-6" >
                <label for="cirugias">Cirugías</label>
                <textarea class="form-control" rows="2" id="cirugias"></textarea>
            </div>
            
            <div class="col-12">
            <button id="cancelar" class="btn btn-danger  ">Cancelar</button>
            <button id="guardarMascota" class="btn btn-primary m-3 ">Guardar mascota</button>
            <div id="respuesta"></div>
            </div>
        </form>
        
    </div>

    

    <!-- Bootstrap js-->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
    <!--Fin Bootstrap js -->

    <script src="archivosRegistrarMascota/peticiones.js"></script>
</body>

</html>