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
    <title>Mascotas</title>

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- jQuery -->
    <script
    src="https://code.jquery.com/jquery-1.9.1.js"
    integrity="sha256-e9gNBsAcA0DBuRWbm0oZfbiCyhjLrI6bmqAl5o+ZjUA="
    crossorigin="anonymous"></script>
</head>
<body>
    <!-- Mascotas Start -->
    <div class="container-fluid pt-5">
        <div class="row "> 
            <div class="col-2"><button id="regresar" class="btn btn-primary ">Regresar</button></div>
            <h2 class="text-center mb-4 col"><span class="bg-secondary text-center">Mascotas registradas</span></h2>
            <div class="col-2"></div>
        </div>
        
        
        <div class="row px-xl-5 pb-3">

            <?php
            $conexion = mysqli_connect("localhost", "root", "", "bdveterinaria");
            $consulta = "SELECT nombre, especie FROM mascota ORDER BY idMascota DESC";
            $ejecutaConsulta = mysqli_query($conexion, $consulta);
            while($registro = mysqli_fetch_array($ejecutaConsulta)):
            ?>
            <div class="col-lg-4 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/mascotas.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6><?= $registro['nombre'] ?></h6>
                            <small class="text-body"><?= $registro['especie'] ?></small>
                        </div>
                    </div>
                </a>
            </div>
            <?php endwhile ?>
            
        </div>
    </div>
    <!-- Mascotas End -->
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script>
        $('#regresar').click(function(e){ 
            e.preventDefault();
            location.href="index.php";
        });
    </script>
</body>
</html>