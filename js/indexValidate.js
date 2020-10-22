$().ready(function() {
    $("#form-signin").validate({
        rules: {
            loginUser: {
                required: true,
                email: true
            },
            loginPwd: {
                required: true,
                minlength: 7
            }
        },
        messages: {
            loginUser: {
                required: "Ingrese su correo electrónico",
                email: "Ingresa una dirección de correo valida"
            },
            loginPwd: {
                required: "Ingrese su contraseña",
                minlength: "La contraseña es de, al menos, 7 caracteres"
            }
        },
        submitHandler: function (form){
            var datos = $('#form-signin').serialize();
            $.ajax({
                type: "POST",
                url: "CxWeb.php",
                dataType: "json",
                data: datos,
                success: function(response){
                    if(response.msg == "SuccessLogin"){
                        console.log("LoginOK");
                        $("#msgLogin").fadeIn().text("Ingresando");
                        setTimeout(function() {
                            $('#msgLogin').fadeOut('fast');
                        }, 5000); 
                        window.location.href = 'dashboard.php'; 
                    }else if(response.msg == 'ErrorIntentos'){
                        console.log("ErrorI");
                        $("#msgLogin").fadeIn().text("Cuenta Bloqueada por 3 intentos erroneos.");
                        setTimeout(function() {
                            $('#msgLogin').fadeOut('fast');
                        }, 8000);
                    }else if(response.msg == 'CuentaBloqueada'){
                        console.log("CuentaB");
                        $("#msgLogin").fadeIn().text("Cuenta Bloqueada, contacta con el Administrador.");
                        setTimeout(function() {
                            $('#msgLogin').fadeOut('fast');
                        }, 8000);                    
                    }else if(response.msg == 'CuentaDesactivada'){
                        console.log("CuentaD");
                        $("#msgLogin").fadeIn().text("Cuenta aún no activada.");
                        setTimeout(function() {
                            $('#msgLogin').fadeOut('fast');
                        }, 8000);
                         /*$('#actualiza').modal('show'); */
                    }else if(response.msg == 'ErrorLogin'){
                        console.log("ErrorL");
                        $("#msgLogin").fadeIn().text("Usuario y/o Contraseña Incorrecta");
                        setTimeout(function() {
                            $('#msgLogin').fadeOut('fast');
                        }, 2000);
                    }else{
                        console.log("ErrorS");
                        $("#msgLogin").fadeIn().text("Error al iniciar sesión");
                        setTimeout(function() {
                            $('#msgLogin').fadeOut('fast');
                        }, 2000);
                    }
                }
            });
            return false;
        }
    });
});