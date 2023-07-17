//personalizacion de inputs al seleccionarlos

document.getElementById("usuario").addEventListener('focus', function(){
    document.getElementById("usuario").style.border = "solid black";
    document.getElementById("usuario").style.boxShadow = "none";
    
});
document.getElementById("contrasena").addEventListener('focus', function(){
    document.getElementById("contrasena").style.border = "solid black";
    document.getElementById("contrasena").style.boxShadow = "none";
});
document.getElementById("confirmarContrasena").addEventListener('focus', function(){
    document.getElementById("confirmarContrasena").style.border = "solid black";
    document.getElementById("confirmarContrasena").style.boxShadow = "none";
});
//Fin personalizacion de inputs al seleccionarlos

/*
var inputUsuario = document.getElementById('usuario');
inputUsuario.oninvalid = function (event){
    event.preventDefault();
    event.target.setCustomValidity('xd');

} ;
*/

//cuando se de click en mostrar contrasena, entonces:
$('#mostrarContrasena').click(function(){
    var contrasena = document.getElementById("contrasena");
    var confirmarContrasena = document.getElementById("confirmarContrasena");
    if(contrasena.type==="password" && confirmarContrasena.type==="password"){//si el tipo de input es password en los input de contrasena 
        //cambiar el tipo a text de los input contraseña y confirmar ocntraseña 
        contrasena.type="text";
        confirmarContrasena.type="text";
    }
    else{//en caso contrario poner el tipo como password
        contrasena.type="password";
        confirmarContrasena.type="password";
    }
});

var formularioCrearCuenta = document.getElementById("formularioCrearCuenta");
formularioCrearCuenta.onsubmit = e => {
    e.preventDefault();

    var usuario = $('#usuario').val();
    var contrasena = $('#contrasena').val();
    var contrasenaDos = $('#confirmarContrasena').val();
    

    if ($.trim(usuario).length > 0 && $.trim(contrasena).length > 0 && $.trim(contrasenaDos).length > 0) {

       if(contrasena != contrasenaDos){
            $('#respuesta').html("las contraseñas no coinciden");
            document.getElementById("confirmarContrasena").style.border = "solid red";
       }
       else{
        //hacer peticion con jquery ajax
        //$('#respuesta').html("haciendo peticion");
            $.ajax(
                {
                    url: 'archivosCrearCuenta/validacionInsertarCuenta.php',
                    type: 'POST',
                    data: { usuario: usuario, contrasena: contrasena },
                    //cache:false,
                    success: function (data) {
                        if (data == 1) {
                            location.href="home.php";
                        }
                        else{
                            document.getElementById("usuario").style.border = "solid red";
                            //document.getElementById("contrasena").style.border = "solid red";
                            $('#respuesta').html("El usuario ingresado ya existe, intenta con otro nombre");
                        }
                    }
                }
            );
       }

    }
    else {
        $('#respuesta').html("todos los campos son requeridos");
        if ($.trim(usuario).length == 0)//si no se ingreso nada en input usuario entonces
        document.getElementById("usuario").style.border = "solid red";//cambiar el borde a rojo del input usuario
        if ($.trim(contrasena).length == 0)
        document.getElementById("contrasena").style.border = "solid red";
        if ($.trim(contrasenaDos).length == 0)
        document.getElementById("confirmarContrasena").style.border = "solid red";

    }
}