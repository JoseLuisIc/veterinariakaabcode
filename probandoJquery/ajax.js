$(document).ready(function(){

    var datosDeFormulario = document.getElementById("formulario");
    datosDeFormulario.onsubmit = e => {
        e.preventDefault();
    //alert("se a enviado los datos");
    
        $.ajax(
            {
                url: 'comprobarDatosIngresados.php',
                type: 'POST',
                data: {usuario: "$('#usuario').val"},
                success: function(data){
                    if(data == "respuesta de ajax"){
                        console.log("listo!!");
                    }
            }
            }
        );

    }
//console.log("hola");
    
  
  });

