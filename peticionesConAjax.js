
var datosDeFormulario = document.getElementById("formulario");
datosDeFormulario.onsubmit = e => {

    e.preventDefault(); //previene la accion de abrir el php
        var username = $('#usuario').val();
        var password = $('#contrasena').val();
        if ($.trim(username).length > 0 && $.trim(password).length > 0) {
           
            $.ajax({
                url: "validacionDatosIngresados.php",
                method: "POST",
                data: { username: username, password: password },
                cache: false,
                beforeSend: function () {
                    $('#cargar').val("connecting...");
                },
                success: function (data) {
                    if (data) {
                        $("body").load("home.php").hide().fadeIn(1500);
                    }
                    else {
                        var options = {
                            distance: '40',
                            direction: 'left',
                            times: '3'
                        }
                        $("#box").effect("shake", options, 800);
                        $('#login').val("Login");
                        $('#error').html("<span class='text-danger'>Invalid username or Password</span>");
                    }
                }
            });
        }
        else {

        }
    }