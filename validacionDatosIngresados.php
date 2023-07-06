
<?php

    //1. se conecta a la bd
    $conexionABaseDatos = mysqli_connect("localhost", "root", "", "bdveterinaria");

    //2. se almacena en estas variables el usuario y contraseña ingresados en formulario (en login)
    $username = $_POST["username"];
    $password = $_POST["password"];

    //3. se busca el usuario y contrasena en bd
    $consulta = "SELECT * FROM persona WHERE nombreDeUsuario='$username' AND contrasena='$password' ";
    $ejecutaConsulta = mysqli_query($conexionABaseDatos, $consulta);

    //4. se obtiene el numero de filas resultantes de la consulta
    //y se guarda en la variable $existe cuenta

    $existeCuenta = mysqli_num_rows($ejecutaConsulta); //nota: resultado solo puede ser 1 o 0 o sea se econtró o no

    //5. entonces
    if($existeCuenta){//si exite cuenta
        $respuesta = 1;
        echo $respuesta;//mandar como respuesta 1
    }



?>