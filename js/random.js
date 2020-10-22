//Genera String Random
function makeid() {
    let length = 15;
    let result = '';
    let characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789#@?._-!$%';
    let charactersLength = characters.length;
   for ( var i = 0; i < length; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
   }
   let random = result;

   document.getElementById('pwdUsuario').value = random;
}

//Correo como usuario
$(document).ready(function(){
    $("#correoUsuario").focusout(function(){  
      var str = $("#correoUsuario").val();
      $("#userUsuario").val(str);
    });
  });

  //Reset Form
  function reset(){
    //document.getElementById("#formUsuario").reset();
    $('#formUsuario')[0].reset();
  }
