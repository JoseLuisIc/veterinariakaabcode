<?php

$cliente = 1;
$nombreMascota = $_POST["nombreMascota"];
$raza = $_POST["raza"];
$edad = $_POST["edad"];
$especie = $_POST["especie"];
$color = $_POST["color"];
$sexo = $_POST["sexo"];
$diagnosticos = $_POST["diagnosticos"];
$tratamientos = $_POST["tratamientos"];
$vacunas = $_POST["vacunas"];
$alergias = $_POST["alergias"];
$cirugias = $_POST["cirugias"];

if(isset($nombreMascota) && isset($raza) && isset($edad) && isset($especie)
&& isset($color) && isset($sexo) && isset($diagnosticos) && isset($tratamientos) 
&& isset($vacunas) && isset($alergias) && isset($cirugias)
){

    $conexion = mysqli_connect("localhost", "root", "", "bdveterinaria");
    $sql = "INSERT INTO mascota (idCliente, nombre, raza, edad, especie, color, sexo, diagnósticos, tratamientos, vacunas, alergias, cirugias) VALUES ('$cliente','$nombreMascota', '$raza', '$edad', '$especie', '$color', '$sexo', '$diagnosticos', '$tratamientos', '$vacunas', '$alergias', '$cirugias')";
    $ejecutarInsertar = mysqli_query($conexion, $sql);
    
    echo 1;
    
    
};   

?>