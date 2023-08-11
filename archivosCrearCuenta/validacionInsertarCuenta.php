<?php

session_start();

$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];
$nombres = $_POST["nombres"];
$primerApellido = $_POST["primerApellido"];
$segundoApellido = $_POST["segundoApellido"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];

if(isset($usuario) && isset($contrasena)){

    $conexionABaseDatos = mysqli_connect("localhost", "root", "", "bdveterinaria");
    $consulta = "SELECT * FROM persona INNER JOIN veterinario ON persona.idPersona = veterinario.idPersona2 WHERE nombreDeUsuario='$usuario'";
    $ejecutaConsulta = mysqli_query($conexionABaseDatos, $consulta);

    $existeCuenta = mysqli_num_rows($ejecutaConsulta);

    $respuesta = 0;
    if($existeCuenta){ //mandar de respuesta 0
         
        echo $respuesta;
    }
    else{ 
        // 1. Insertar en tabla Persona el usuario y contraseña, etc
        
        $insertar = "INSERT INTO persona (nombreDeUsuario, contrasena, nombres, primerApellido, segundoApellido, telefono, correoElectronico) VALUES ('$usuario', '$contrasena', '$nombres', '$primerApellido', '$segundoApellido', '$telefono', '$correo') ";
        $ejecutarInsertar = mysqli_query($conexionABaseDatos, $insertar);
        

        // 2. Insertar en tabla veterinario el idPersona 
            
            //2.1 Buscar el idPersona de la persona ingresada

            $idPersona = "SELECT idPersona FROM persona WHERE nombreDeUsuario='$usuario' AND contrasena = '$contrasena' ";
            $ejecutarBuscarIdPersona = mysqli_query($conexionABaseDatos, $idPersona);

            while($row = mysqli_fetch_array($ejecutarBuscarIdPersona) ):
                $valorIdPersona = $row['idPersona'];

                //2.2 ahora si inserta idPersona en tabla Veterinario
                $insertarVeterinario = " INSERT INTO veterinario(idPersona2) VALUES ('$valorIdPersona') ";
                $ejecutar = mysqli_query($conexionABaseDatos,$insertarVeterinario);
            endwhile;  

        $_SESSION['usuario']= $usuario;
        
        //manda de respuesta ajax: 1
        $respuesta = 1; 
        echo $respuesta;
    }
}    

?>