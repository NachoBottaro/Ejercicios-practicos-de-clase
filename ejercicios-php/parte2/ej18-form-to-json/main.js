var modal_button = $("#active-modal");
var send_button = $("#send-button");
var close_button = $("#close-modal-button");

modal_button.click(function() {
    $("#modal").removeClass("modal-form-hidden");
    $("#modal").addClass("modal-form-visible");
})

send_button.click(function(event) {
    event.preventDefault();
    if(confirm("¿Está seguro que desea enviar el formulario?")) {
        $("#server-answer").empty();
        $("#server-answer").append("<h3>Esperando respuesta</h3>");
        $.ajax({           
            type: "post",
            url: "index.php",
            data: {
                userId: $("#idUser").val(),
                login: $("#login").val(),
                lastName: $("#lastname-input").val(),
                name: $("#name-input").val(),
                birthDate: $("#birth-input").val()
            },

            success:function(answer) {
                $("#server-answer").empty();
                $("#server-answer").append("<h4>Respuesta</h4><h5>" + answer + "</h5>");
            },
            error: function(error) {
                console.error("Error en la solicitud: " + error);
            }
        }); 
    }    
})

close_button.click(function() {
    $("#idUser").val("");
    $("#login").val("");
    $("#lastname-input").val("");
    $("#name-input").val("");

    $("#server-answer").empty();
    
    $("#modal").removeClass("modal-form-visible");
    $("#modal").addClass("modal-form-hidden");
})