<?php

session_start();

$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];

if(isset($usuario) && isset($contrasena)){

    $conexionABaseDatos = mysqli_connect("localhost", "root", "", "bdveterinaria");
    $consulta = "SELECT * FROM persona WHERE nombreDeUsuario='$usuario'";
    $ejecutaConsulta = mysqli_query($conexionABaseDatos, $consulta);

    $existeCuenta = mysqli_num_rows($ejecutaConsulta);

    $respuesta = 0;
    if($existeCuenta){ //mandar de respuesta 0
         
        echo $respuesta;
    }
    else{
        //inserta en bd la cuenta
        $insertar = "INSERT INTO persona (nombreDeUsuario, contrasena) VALUES ('$usuario', '$contrasena')";
        $ejecutarInsertar = mysqli_query($conexionABaseDatos, $insertar);
        $_SESSION['usuario']= $usuario;
        $respuesta = 1; 
        echo $respuesta;
    }
}    

?>