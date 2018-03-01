$(document).ready(function(){

});

function checkAndSend(){
    var nombre = $("#nombre").val();
    var asunto = $("#asunto").val();
    var email = $("#email").val();
    var mensaje = $("#mensaje").val();
    
    var flagNombre=0;
    var flagAsunto=0;
    var flagEmail=0;
    var flagMensaje=0;
    
    /* Validación campo nombre */
    if(nombre.length<6){
        $("#nombreInfo").removeClass("correcto");
        $("#nombreInfo").addClass("error");
        $("#nombreInfo").html("");
        $("#nombreInfo").html("El Nombre debe superar los 6 caracteres.");
        flagNombre=1;
    }else{
        $("#nombreInfo").removeClass("error");
        $("#nombreInfo").addClass("correcto");
        $("#nombreInfo").html("");
        $("#nombreInfo").html("✓ Nombre correcto.");
        flagNombre=0;
    }
    /* Fin validación campo nombre */

    /* Validación campo asunto */
    if(asunto.length==0){
        asunto = "Sin Asunto";
    }
    /* Fin validación campo asunto */

    /* Validación campo email */
    var arroba = $("#email").val().indexOf("@");
    if(arroba==-1){
        $("#emailInfo").removeClass("correcto");
        $("#emailInfo").addClass("error");
        $("#emailInfo").html("");
        $("#emailInfo").html("Mail incorrecto.");
        flagEmail=1;        
    }else{
        var puntoDspDeArroba = $("#email").val().lastIndexOf(".");        
        if(puntoDspDeArroba==-1){
            $("#emailInfo").removeClass("correcto");
            $("#emailInfo").addClass("error");
            $("#emailInfo").html("");
            $("#emailInfo").html("Mail incorrecto.");
            flagEmail=1;            
        }else{            
            $("#emailInfo").removeClass("error");
            $("#emailInfo").addClass("correcto");
            $("#emailInfo").html("");
            $("#emailInfo").html("✓ Email correcto.");
            flagEmail=0;
        }
    }
    /* Fin validación campo email */
    
    if(mensaje.length==0){
        $("#mensajeInfo").removeClass("correcto");
        $("#mensajeInfo").addClass("error");
        $("#mensajeInfo").html("");
        $("#mensajeInfo").html("Debe escribir contenido en mensaje.");
        flagMensaje=1;
    }else{
        $("#mensajeInfo").removeClass("error");
        $("#mensajeInfo").addClass("correcto");
        $("#mensajeInfo").html("");
        $("#mensajeInfo").html("✓ Mensaje correcto.");
        flagMensaje=0;
    }
        
    if(flagNombre==0 && flagEmail==0 && flagMensaje==0){
        $.ajax({
            url: "checkAndSendMail.php",
            type:"POST",
            data: {
                nombre: nombre,
                asunto: asunto,
                email: email,
                mensaje: mensaje
            },
            success: function(result){
                $.ajax({
                    url: "modalsCorreo/mailCorrecto.html",                    
                    type:"GET",
                    data: {                        
                    },
                    success: function(result){
                        $("#cont").append(result);
                        $("#modalCorrecto").modal('show');
                    }
                });        
            }
        });
    }else{
        $.ajax({
            url: "/modalsCorreo/mailIncorrecto.html",                    
            type:"GET",
            data: {                        
            },
            success: function(result){
                $("#cont").append(result);
                $("#modalIncorrecto").modal('show');
            }
        });  
    }
}