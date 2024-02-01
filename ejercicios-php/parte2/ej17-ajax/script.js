var arrow = $('#happy-face-img');

arrow.click(function() {
    $("#div-resultado").empty();    
    $("#div-resultado").append("<h2>Recibiendo Encriptación</h2>");    
    $("#div-status").empty();
    $("#div-status").append("<h3>Estado del Requerimiento</h3>");

    $.ajax({
        type: "post",
        url: "index.php",
        data: {clave:$("#entrada").val()},

        success:function(respuesta, estado) {        
            $("#div-resultado").empty();    
            $("#div-resultado").append("<h2>Resultado:</h2><h4>" + respuesta + "</h4>");  
            $("#div-status").append("<h4>" + estado + "</h4>");
        }
    });
});