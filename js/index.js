$(document).ready(function(){

    $("#enviar").click(function(){
        var nombre = $("#nombre").val();
        var asunto = $("#asunto").val();
        var email = $("#email").val();
        var mensaje = $("#mensaje").val();
        
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
                
            }
        });
    });



});