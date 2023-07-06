<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

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

    <div class="container border rounded  bg-white" style="height: 390px; width: 400px;">
        <h4 class="mt-5 text-center " id="encabezado">Inicia sesión</h4>
        <form class=" m-4 " id="formulario" method="post">

            <div class="form-group ">
                <label for="usuario">Usuario</label>
                <input type="text" id="usuario" class="form-control">
            </div>

            <div class="form-group  ">
                <label for="contrasena">Contraseña</label>
                <input type="password" id="contrasena" class="form-control">
                <div id="RespuestaAjax" class="text-danger m-0 float-left " style="width: 100%;"></div>

            </div>

            <button id="cargar" class="btn btn-primary mt-3 float-right ">Acceder</button>

        </form>

    </div>

    

    <!-- Bootstrap js-->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
    <!--Fin Bootstrap js -->

    <script src="ajax.js"></script>
</body>

</html>