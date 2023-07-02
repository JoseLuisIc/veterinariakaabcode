
<?php

session_start();
 //1. se conecta a la bd
$conexionABaseDatos = mysqli_connect("localhost", "root", "", "bdveterinaria");

if(isset($_POST["username"]) && isset($_POST["password"])){
    
    //2. se almacena en estas variables el usuario y contraseña ingresados en formulario (en login)
    $username= mysqli_real_escape_string($conexionABaseDatos, $_POST["username"]);
    $password = (mysql_real_escape_string($conexionABaseDatos, $_POST["password"]));

    //3. se busca el usuario y contrasena en bd
    $consulta = "SELECT * FROM persona WHERE nombreDeUsuario='$username' AND contrasena='$password' ";
    $ejecutaConsulta = mysqli_query($conexionABaseDatos, $consulta);

    //4. se obtiene el numero de filas resultantes de la consulta
    //y se guarda en la variable $existe cuenta

    $existeCuenta = mysqli_num_rows($ejecutaConsulta); //nota: resultado solo puede ser 1 o 0 o sea se econtró o no


    //5. entonces: 
    if($existeCuenta > 0){
    $data = mysqli_fetch_array($ejecutaConsulta);
    $_SESSION["username"]= $data["username"];
    echo $data["username"];
    }
}
    


?>