
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
                        location.href="index.html";
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
        document.getElementById("usuario").style.border = "solid green";
        document.getElementById("contrasena").style.border = "solid green";

    }
}