//let botonCargar = document.getElementById("cargar");
//botonCargar.addEventListener("click", peticionParaServidor)

//function peticionParaServidor() {

var datosDeFormulario = document.getElementById("formulario");
datosDeFormulario.onsubmit = e => {
    //function (e){}

    var usuario = document.getElementById("usuario").value;
    var contrasena = document.getElementById("contrasena").value;

    var intanciaFormData = new FormData();
    intanciaFormData.append('usuario', usuario);
    intanciaFormData.append('contrasena', contrasena);

    e.preventDefault(); //previene la accion de abrir el php

    //se crea una instancia del objeto XMLHttpRequest
    const instanciaDeAjax = new XMLHttpRequest();

    instanciaDeAjax.onreadystatechange = function () {
        if (this.readyState == 4 & this.status == 200) {
            document.getElementById("RespuestaAjax").innerHTML = this.responseText;
        }
    };

    //se crea una peticion al servidor
    instanciaDeAjax.open("POST", "validacionDatosIngresados.php", true);//true para asincrono
    
    //se envia la peticion
    instanciaDeAjax.send(intanciaFormData); //y se envia los datos de formulario por medio
    //de instanciaFormData 
    
    /*
    intento de mandar a pagina index si los datos son correctos
    if(instanciaDeAjax.responseText == "LosDatosIngresadosSonCorrectos"){
        window.location.href='index.html';
    }
    */
}
//}




