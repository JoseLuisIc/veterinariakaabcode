var formulario = document.getElementById("formularioRegistrarMascota");
formulario.onsubmit = e => {

    e.preventDefault();

    var nombreMascota = $('#nombreMascota').val();
    var raza = $('#raza').val();
    var edad = $('#edad').val();
    var especie = $('#especie').val();
    var color = $('#color').val();
    var sexo = $('input[name="optradio"]:checked').val();
    var diagnosticos = $('#diagnosticos').val();
    var tratamientos = $('#tratamientos').val();
    var vacunas = $('#vacunas').val();
    var alergias = $('#alergias').val();
    var cirugias = $('#cirugias').val();
    var idCliente = $('#seleccionarCliente').val();

    

    $.ajax(
        {
            url: 'archivosRegistrarMascota/insertarMascotaEnBD.php',
            type: 'POST',
            //datatype : "text",
            data: { idCliente: idCliente,
                    nombreMascota: nombreMascota, 
                    raza : raza, 
                    edad: edad,
                    especie: especie,
                    color: color,
                    sexo: sexo,
                    diagnosticos: diagnosticos,
                    tratamientos: tratamientos,
                    vacunas: vacunas,
                    alergias: alergias,
                    cirugias: cirugias
                },
            success: function (data) {
                if (data == 1) {
                    
                    alert("Mascota registrada exitosamente");
                    location.href="./../plantilla/index.php";
                }
                else{
                    //document.getElementById("usuario").style.border = "solid red";
                    //document.getElementById("contrasena").style.border = "solid red";
                    $('#respuesta').html("Error al guardar mascota");
                }
            }
        }
    );
} //fin funcion(e) y fin de envío de formulario

$('#cancelar').click(function(e){ 
    e.preventDefault();
    location.href="./../plantilla/index.php";
});