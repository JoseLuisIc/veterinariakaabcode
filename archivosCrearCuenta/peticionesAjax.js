//personalizacion de inputs al seleccionarlos

document.getElementById("nombres").addEventListener('focus', function(){
    document.getElementById("nombres").style.border = "solid black";
    document.getElementById("nombres").style.boxShadow = "none";
});

document.getElementById("primerApellido").addEventListener('focus', function(){
    document.getElementById("primerApellido").style.border = "solid black";
    document.getElementById("primerApellido").style.boxShadow = "none";
});

document.getElementById("segundoApellido").addEventListener('focus', function(){
    document.getElementById("segundoApellido").style.border = "solid black";
    document.getElementById("segundoApellido").style.boxShadow = "none";
});

document.getElementById("telefono").addEventListener('focus', function(){
    document.getElementById("telefono").style.border = "solid black";
    document.getElementById("telefono").style.boxShadow = "none";
});

document.getElementById("correo").addEventListener('focus', function(){
    document.getElementById("correo").style.border = "solid black";
    document.getElementById("correo").style.boxShadow = "none";
});

document.getElementById("confirmarContrasena").addEventListener('focus', function(){
    document.getElementById("confirmarContrasena").style.border = "solid black";
    document.getElementById("confirmarContrasena").style.boxShadow = "none";
});

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
//fin de cuando se da clic en mostrar contraseña


var formularioCrearCuenta = document.getElementById("formularioCrearCuenta");
formularioCrearCuenta.onsubmit = e => {
    e.preventDefault();


    var usuario = $('#usuario').val();
    var contrasena = $('#contrasena').val();
    var contrasenaDos = $('#confirmarContrasena').val();
    var nombres = $('#nombres').val();
    var primerApellido = $('#primerApellido').val();
    var segundoApellido = $('#segundoApellido').val();
    var telefono = $('#telefono').val();
    var correo = $('#correo').val();
    
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
                    data: { usuario: usuario, 
                            contrasena: contrasena,
                            nombres: nombres,
                            primerApellido: primerApellido,
                            segundoApellido: segundoApellido,
                            telefono: telefono,
                            correo: correo 
                          },
                    success: function (data) {
                        if (data == 1) {
                            location.href="plantilla/index.php";
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

$('#regresar').click(function(e){ 
    e.preventDefault();
    location.href="login.php";
});