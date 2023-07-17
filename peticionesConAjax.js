
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

//cuando se de click en mostrar contrasena, entonces:
$('#mostrarContrasenaLogin').click(function(){
    var contrasena = document.getElementById("contrasena");
    if(contrasena.type==="password" ){//si el tipo de input es password en los input de contrasena 
        //cambiar el tipo a text de los input contraseña 
        contrasena.type="text";
        
    }
    else{//en caso contrario poner el tipo como password
        contrasena.type="password";
        
    }
});

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
                        $('#RespuestaAjax').html("Usuario o contraseña incorrectos");
                    }
                }
            }
        );


    }
    else {
        $('#RespuestaAjax').html("Ingresa tu usuario y contraseña");
        document.getElementById("usuario").style.border = "solid red";
        document.getElementById("contrasena").style.border = "solid red";
        

    }
}