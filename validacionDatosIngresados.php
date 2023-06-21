
<?php


$usuarioIngresado= $_POST["usuario"];
$contrasenaIngresada = $_POST["contrasena"];

//buscar el usuario ingresado en bd
$usuarioEnBD = "Richard";

if($usuarioIngresado == $usuarioEnBD){

    //obtener contraseña de bd
    $contrasenaEnBD = "123";
    if($contrasenaIngresada == $contrasenaEnBD){

        echo "LosDatosIngresadosSonCorrectos";
    }
    else{
        echo "contraseña incorrecta";
    }
    
}
else{
    echo "usuario no encontrado";
} 






//echo "el usuario ingresado es " . $usuarioIngresado;
?>