<?php

$nombres = $_POST["nombres"];
$primerApellido = $_POST["primerApellido"];
$segundoApellido = $_POST["segundoApellido"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];

if(isset($nombres) && isset($primerApellido) && isset($segundoApellido) ){
    
    $conexion = mysqli_connect("localhost", "root", "", "bdveterinaria");
    //1. insertar datos en tabla persona
    $sql = "INSERT INTO persona (nombres, primerApellido, segundoApellido, telefono, correoElectronico) VALUES ('$nombres','$primerApellido', '$segundoApellido', '$telefono', '$correo') ";
    $ejecutarInsertar = mysqli_query($conexion, $sql);
    
    //2. insertar idPersona en tabla Cliente 
       //2.1 buscar el idPersona de la persona registrada
    $sqlIdPersona = "SELECT idPersona FROM persona WHERE nombres='$nombres' AND primerApellido='$primerApellido' AND segundoApellido='$segundoApellido' LIMIT 1 ";
    $ejecutarBuscarPersona = mysqli_query($conexion, $sqlIdPersona);
 
    while($row = mysqli_fetch_array($ejecutarBuscarPersona) ):
    $idPersona = $row['idPersona'];
        //2.2 ahora si inserta idPersona en tabla Cliente
    $sqlCliente = "INSERT INTO cliente(idPersona) VALUES ('$idPersona') "; 
    $registrarCliente = mysqli_query($conexion,$sqlCliente);
    endwhile;  

    //manda de respuesta ajax: 1
    echo 1;
};

?>