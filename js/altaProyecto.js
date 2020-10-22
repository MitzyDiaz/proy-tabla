$().ready(function () {
    $("#formProyecto").validate({
      rules: {
        nombreProyecto: {
          OnlyLetters: true,
          required: true,
          minlength: 4,
          maxlength: 30,
        },
        empresaClienteProyecto: {
          OnlyLetters: true,
          required: true,
          minlength: 4,
          maxlength: 30,
        },
        responsableProyecto: {
          //OnlyLetters: true,
          required: true
          //minlength: 4,
          //maxlength: 30,
        },
        fechaInicioProyecto: {
          //Alphanumeric: true,
          required: true
          //minlength: 18,
          //maxlength: 24,
        },
        presupuestoProyecto: {
          digits: true,
          //required: true,
          minlength: 5,
          maxlength: 10,
        },
        descripcionProyecto: {
          required: true,
          OnlyLetters: true,
          minlength: 2,
          maxlength: 300,
        }
      },
      messages: {
        nombreProyecto: {
          OnlyLetters: "Solo letras",
          required: "Campo obligatorio",
          minlength: "El nombre del proyecto debe tener mínimo 4 letras",
          maxlength: "El nombre debe tener máximo 30 letras"
        },
        empresaClienteProyecto: {
          OnlyLetters: "Solo letras",
          required: "Campo obligatorio",
          minlength: "La empresa debe tener mínimo 4 letras",
          maxlength: "La empresa debe tener máximo 30 letras"
        },
        responsableProyecto: {
          //OnlyLetters: "Solo letras",
          required: "Campo obligatorio"
          //minlength: "El apellido debe tener mínimo 4 letras",
          //maxlength: "El apellido debe tener máximo 30 letras"
        },
        fechaInicioProyecto: {
          //Alphanumeric: "Solo caracteres alfanúmericos",
          required: "Campo obligatorio"
          //minlength: "Mínimo 18 números",
          //maxlength: "Máximo 24 números"
        },
        presupuestoProyecto: {
          digits: "Solo números",
          //required: "Campo obligatorio",
          minlength: "Al menos 5 digitos",
          maxlength: "Máximo 10 digitos"
        },
        descripcionProyecto: {
          required: "Campo obligatorio",
          OnlyLetters: "Solo letras",
          minlength: "Al menos 2 letras",
          maxlength: "Máximo 300 letras"
        }
      },
      submitHandler: function (form) {
        var datos = $('#formProyecto').serialize();
        //console.log(datos);
        $.ajax({
          type: "POST",
          url: "CxWeb.php",
          dataType: "json",
          data: datos,
          success: function (response) {
            if (response.msg == "CompleteProject") {
              console.log("z0Ok");
            } else if (response.msg == "UsuarioExiste") {
              console.log("Existe");
            } else {
              console.log("ERROR");
              console.log(response);
            }
          }
        });
        return false;
      }
    });
  });
  