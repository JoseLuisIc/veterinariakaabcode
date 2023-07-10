
//personalizacion de inputs al seleccionarlos

document.getElementById("usuario").addEventListener('focus', function(){
    document.getElementById("usuario").style.border = "solid black";
    document.getElementById("usuario").style.boxShadow = "none";
});
document.getElementById("contrasena").addEventListener('focus', function(){
    document.getElementById("contrasena").style.border = "solid black";
    document.getElementById("contrasena").style.boxShadow = "none";
});
//Fin personalizacion de inputs al seleccionarlos

var datosDeFormulario = document.getElementById("formulario");
datosDeFormulario.onsubmit = e => {

    e.preventDefault(); //previene la accion de abrir el php

    var username = $('#usuario').val();
    var password = $('#contrasena').val();
    if ($.trim(username).length > 0 && $.trim(password).length > 0) {

        $.ajax(
            {
                url: 'validacionDatosIngresados.php',
                type: 'POST',
                data: { username: username, password: password },
                //cache:false,
                success: function (data) {
                    if (data == 1) {
                        location.href="home.php";
                    }
                    else{
                        document.getElementById("usuario").style.border = "solid red";
                        document.getElementById("contrasena").style.border = "solid red";
                        $('#RespuestaAjax').html("usuario o contraseña incorrectos");
                    }
                }
            }
        );


    }
    else {
        $('#RespuestaAjax').html("ingresa tu usuario y contraseña");
        document.getElementById("usuario").style.border = "solid red";
        document.getElementById("contrasena").style.border = "solid red";
        

    }
}