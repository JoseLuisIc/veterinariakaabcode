
var formularioCliente = document.getElementById("formularioRegistrarCliente");
formularioCliente.onsubmit = e => {
    e.preventDefault();

    var nombres = $('#nombres').val();
    var primerApellido = $('#primerApellido').val();
    var segundoApellido = $('#segundoApellido').val();
    var telefono = $('#telefono').val();
    var correo = $('#correo').val();

    $.ajax(
        {
            url: 'archivosRegistrarCliente/registrarClienteEnBD.php',
            type: 'POST',
            data: { nombres: nombres, 
                    primerApellido : primerApellido, 
                    segundoApellido : segundoApellido,
                    telefono : telefono,
                    correo: correo
                },
            success: function (data) {
                if (data == 1) {
                    console.log('cliente registrado');
                    alert("Cliente registrado exitosamente");
                    location.href="./../plantilla/index.php";
                }
                else{
                    $('#respuesta').html(data);
                }
            }
        }
    );
} //fin funcion(e) y fin de envío de formulario

$('#cancelar').click(function(e){ 
    e.preventDefault();
    location.href="./../plantilla/index.php";
});



/*
$('#agregarMascota').click(function(e){ 
    e.preventDefault();
    location.href="./../plantilla/registroMascota.php";
});
*/